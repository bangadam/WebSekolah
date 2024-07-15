<?php

/**
 * ini adalah class model
 */
class Model
{
	public $db;
	protected $tableName;

	public function __construct()
	{
		$this->db = new Database();
	}

	public function model($modelName)
	{
		require_once ROOT . DS . 'modules' . DS . 'models' . DS . $modelName . 'Model.php';
		$clasName = ucfirst($modelName) . 'Model';
		$this->$modelName = new $clasName();
	}

	public function get($params = "")
	{
		$sql = "SELECT * FROM " . $this->tableName;
		if (is_array($params)) {
			if (isset($params["limit"])) {
				$sql .= " LIMIT " . $params["limit"];
			}
		}

		$this->db->query($sql);

		return $this->db->execute()->toObject();
	}

	public function rows()
	{
		return $this->db->getAll($this->tableName)->numRows();
	}

	public function getWhere($params)
	{
		return $this->db->getWhere($this->tableName, $params)->toObject();
	}

	public function getJoin($tableJoin, $params, $joinType = "JOIN", $where = [], $orderBy = [])
	{
		// Base query
		$sql = "SELECT * FROM " . $this->tableName;

		// Add JOIN clauses
		if (is_array($tableJoin)) {
			foreach ($tableJoin as $table => $condition) {
				$sql .= " " . $joinType . " " . $table . " ON " . $condition;
			}
		} else {
			$sql .= " " . $joinType . " " . $tableJoin . " ON " . $params[key($params)] . " = " . current($params);
		}

		// Add WHERE clauses
		if (!empty($where)) {
			$sql .= " WHERE ";
			$conditions = [];
			foreach ($where as $key => $value) {
				$conditions[] = $key . "='" . $value . "'";
			}
			$sql .= implode(" AND ", $conditions);
		}

		// Add ORDER BY clause
		if (!empty($orderBy)) {
			$sql .= " ORDER BY ";
			$orderConditions = [];
			foreach ($orderBy as $column => $order) {
				$orderConditions[] = $column . " " . $order;
			}
			$sql .= implode(", ", $orderConditions);
		}

		// Execute query
		$this->db->query($sql);

		return $this->db->execute()->toObject();
	}


	public function insert($data = array())
	{
		$insert = $this->db->insert($this->tableName, $data);

		if ($insert) {
			return true;
		}

		return false;
	}

	public function update($data = array(), $where = array())
	{
		$update = $this->db->update($this->tableName, $data, $where);

		if ($update) {
			return true;
		}

		return false;
	}

	public function delete($where = array())
	{
		$delete = $this->db->delete($this->tableName, $where);

		if ($delete) {
			return true;
		}

		return false;
	}
}
