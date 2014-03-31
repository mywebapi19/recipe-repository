<?php

/**
 * @author Prashant More
 * Class to handle all db operations
 * This class will have CRUD methods for database tables
 */
class DbHandler {

	private $conn;

	function __construct() {
		require_once dirname(__FILE__) . './DbConnect.php';
		// opening db connection
		$db = new DbConnect();
		$this->conn = $db->connect();
	}


	public function getAll() {
		$sql = "SELECT * FROM trialtable where userid";
		$stmt = $this->conn->query($sql);
		$rows = array();
			while ($row = $stmt->fetch_assoc())
			{
			 $rows[] = $row; 
			}
		return $rows;
    }
}
?>
