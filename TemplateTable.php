<?php

require 'Model.php';

/**
 * Ropa ORM
 */
class Table extends Model {
	
	function __construct() {
		parent::__construct();
		$this->table = 'Table';
		$this->columns = ['_Columnas_'];
	}

	public function add($values) {
		return parent::add($values);
	}

	public function edit($cols, $condition) {
		return parent::edit($cols, $condition);
	}

	public function findAll() {
		return parent::findAll();
	}

	public function find($cols, $condition) {
		return parent::find($cols, $condition);
	}

	public function remove($condition) {
		return parent::remove($condition);
	}

}



?>