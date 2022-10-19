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
			return true;
		}
    }
}
?>