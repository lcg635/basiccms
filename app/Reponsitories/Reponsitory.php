<?php namespace App\Reponsitories;

use DB;

class Reponsitory {

	protected $tableName = null;
	protected $validColumns = [];

	private $_table = null;

	public function validData($data) {
		return array_only($data, $this->validColumns);
	}

	protected function table() {
		if (empty($this->_table)) {
			$this->_table = DB::table($this->tableName);
		}
		return $this->_table;
	}
}