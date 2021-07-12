<?php
function read(){
	if($this->id) {
		$stmt = $this->conn->prepare("SELECT * FROM ".$this->itemsTable." WHERE id = ?");
		$stmt->bind_param("i", $this->id);
	} else {
		$stmt = $this->conn->prepare("SELECT * FROM ".$this->itemsTable);
	}
	$stmt->execute();
	$result = $stmt->get_result();
	return $result;
}
