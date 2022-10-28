<?php
//database credentials
require('db_cred.php');
/**
 * @author David Sampah
 */
class db_connection{
    //properties
    public $db = null;
    public $result = null;

    function db_connect(){
        $this->db = mysqli_connect(SERVERNAME,HOSTNAME,PASSWORD,DATABASE);

        //test the connection
        if(mysqli_connect_errno()){
            return false;
        }else {
			//print "connected";
            return true;
        }
    }

    function db_query($query)
    {
        if (!$this->db_connect()) {
			return false;
		} 
		elseif ($this->db==null) {
			return false;
		}

        //run 
        $this->results = mysqli_query($this->db,$query);
		
		if ($this->results == false) {
			return false;
		}else{
			//print_r($this->results);
			return $this->results;
		}
    }

    	//fetch a data
	/**
	*get select data
	*@return a record
	**/
	function db_fetch_one($sql){
		
		// if executing query returns false
		if(!$this->db_query($sql)){
			return false;
		} 
		//return a record
		return mysqli_fetch_assoc($this->results);
	}

	//fetch all data
	/**
	*get select data
	*@return all record
	**/
	function db_fetch_all($sql){
		
		// if executing query returns false
		if(!$this->db_query($sql)){
			return false;
		} 
		//return all record
		return mysqli_fetch_all($this->results, MYSQLI_ASSOC);
	}


	//count data
	/**
	*get select data
	*@return a count
	**/
	function db_count(){
		
		//check if result was set
		if ($this->results == null) {
			return false;
		}
		elseif ($this->results == false) {
			return false;
		}
		
		//return a record
		return mysqli_num_rows($this->results);

	}

}
?>