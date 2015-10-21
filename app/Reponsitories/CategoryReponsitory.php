<?php namespace App\Reponsitories;

class CategoryReponsitory extends Reponsitory {

	protected $tableName = 'category';
	protected $validColumns = ['name', 'count'];

	public function all($columns = null) {
		return $this->table()->get($columns);
	}

	public function byId($id, $columns = null) {
		return $this->table()->find($id, $columns);
	}

	public function create($category) {
		$category = $this->validData($category);
		return $this->table()->insert($category);
	}

	public function update($id, $category) {
		$category = $this->validData($category);
		return $this->table()->where('id', $id)->update($category);
	}

	public function save($category) {
		return empty($category['id']) ?
					$this->create($category) :
					$this->update($category['id'], $category);
	}

	public function delete($id) {
		return $this->table()->where('id', $id)->delete();
	}

}