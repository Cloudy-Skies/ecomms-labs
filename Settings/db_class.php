<?php
//database credentials
require('db_cred.php');
/**
 * @author David Sampah
 */
class db_connection
{
	//properties
	public $db = null;
	public $result = null;

	function db_connect()
	{
		$this->db = mysqli_connect(SERVERNAME, HOSTNAME, PASSWORD, DATABASE);

		//test the connection
		if (mysqli_connect_errno()) {
			return false;
		} else {
			//print "connected";
			return true;
		}
	}

	function query($query)
	{
		if (!$this->db_connect()) {
			return false;
		}
		// elseif ($this->db==null) {
		// 	return false;
		// }

		//run 
		$this->result = mysqli_query($this->db, $query);

		if ($this->result == false) {
			return false;
		} else {
			return ($this->result);
			//return true;
		}
	}

	
	function fetchOne($query)
	{

		// if query executes successfully
		if ($this->query($query)) {
			// return one row
			return mysqli_fetch_assoc($this->result);
		}
		// else return false
		return false;
	}

	//fetch all data
	/**
	 *get select data
	 *
	 **/
	function fetch($query){
		// if query executes successfully
		if($this->query($query)) {
			// return all the rows
			return mysqli_fetch_all($this->result, MYSQLI_ASSOC);
		}
		// else return false
		return false;
		
	}


}
