<?php

abstract class Entidad {
	protected static $_conexion = null;
	public static function getConexion(){
		if(!isset(self::$_conexion)){
			self::$_conexion = new PDO("mysql:host=localhost;dbname=examen", "root", "");
		}
		return self::$_conexion;
	}

	private function objectValues(){
		return array_filter(get_object_vars($this), function($var){ return (substr($var, 0, 1 ) != "_" && substr($var, 0, 1 ) != "id"); }, ARRAY_FILTER_USE_KEY);
	}

	private function getInsertQuery(){
		$data = $this->objectValues();
		$params = [];
		foreach($data as $col => $val){
			$params[] = ":$col";
		}
		return "INSERT INTO ".static::TABLA." (".implode(", ", array_keys($data)).") VALUES (".implode(", ", $params).")";
	}

	public function getUpdateQuery(){
		$data = $this->objectValues();
		unset($data['id']);
		$params = [];
		foreach($data as $col => $val){
			$params[] = "$col = :$col";
		}
		return "UPDATE ".static::TABLA." SET ".implode(", ", $params)." WHERE id = :id";
	}

	private function getDeleteQuery(){
		return "DELETE FROM ".static::TABLA." WHERE id = :id";
	}


	private static function getSelectQuery($where = null, $method = "AND"){
		$param = [];
		if($where != null){			
			foreach($where as $col => $val){
				$param[] = "$col = :$col";
			}
			return "SELECT * FROM ".static::TABLA." WHERE ".implode(" $method ", $param);
		}
		return "SELECT * FROM ".static::TABLA;		
	}

	public static function buscar($where = null, $method = "AND"){
		$query = static::getConexion()->prepare(self::getSelectQuery($where, $method));
		$query->execute($where);
		$resultado = [];
		if($filas = $query->fetchAll(PDO::FETCH_NUM)){
			foreach($filas as $fila){
				$resultado[] = new static(...$fila);
			}
			return $resultado;
		}
		return false;
	}

	public static function buscarID($id = null){
		if($id == null){
			return false;
		}
		return self::buscar(array("id" => $id))[0];
	}

	public static function todos(){
		return self::buscar();
	}

	public function guardar(){
		if($this->id == null){
			$query = $this->getConexion()->prepare(self::getInsertQuery());
			if($query->execute($this->objectValues())){
				$this->id = $this->getConexion()->lastInsertId();
				return $this;
			}
		}else{
			$query = $this->getConexion()->prepare(self::getUpdateQuery());
			if($query->execute($this->objectValues())){
				return true;
			}else{
				return false;
			}
		}
		return false;
	}

	public function eliminar(){
		$existe = self::buscarID($this->id);
		if($existe){
			$query = $this->getConexion()->prepare(self::getDeleteQuery());
			$query->bindParam(":id", $this->id);
			if($query->execute()){
				return true;
			}
		}
		return false;
	}
}
?>