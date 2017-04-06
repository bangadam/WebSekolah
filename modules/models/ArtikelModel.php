<?php 
/**
* ini adalah model Artikel
*/
class ArtikelModel extends Model
{
	protected $tableName = "artikel";

	public function getPrev($id) {
		$sql = "SELECT * FROM " . $this->tableName . "WHERE id_artikel < " . $id . " ORDER BY id_artikel desc limit 1";

		$this->db->query($sql);

		return $this->db->execute()->toObject();
	}

	public function getNext($id) {
		$sql = "SELECT * FROM " . $this->tableName . "WHERE id_artikel > " . $id . " ORDER BY id_artikel asc limit 1";

		$this->db->query($sql);

		return $this->db->execute()->toObject();	
	}
}

 ?>