<?php namespace App\Reponsitories;

class ArticleReponsitory extends Reponsitory {

	protected $tableName = 'article';
	protected $validColumns = ['title', 'category_id', 'author', 'tags', 'content'];

	public function paginate($condition = null, $perPage = 15) {
		$query = $this->table();
		if (!empty($condition)) {
			$query = $query->where($condition);
		}
		return $query->paginate($perPage);
	}

	public function byId($id, $columns = null) {
		return $this->table()->find($id, $columns);
	}

	public function create($article) {
		$article = $this->validData($article);
		return $this->table()->insert($article);
	}

	public function update($id, $article) {
		$article = $this->validData($article);
		return $this->table()->where('id', $id)->update($article);
	}

	public function save($article) {
		return empty($article['id']) ?
					$this->create($article) :
					$this->update($article['id'], $article);
	}

	public function delete($id) {
		return $this->table()->where('id', $id)->delete();
	}

}