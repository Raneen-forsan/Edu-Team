<?php 
require('include/DBconnection.php');

class Admin extends dbconnection{

    public $admin_id;
	public $email;
	public $password;
    public $fullname;



	public function create()
	{
		$query = "INSERT INTO admin(email,password,full_name)
				 VALUES('$this->email','$this->password','$this->fullname')";
		$this->performQuery($query);
	}

	public function readAll(){
		$query  = "SELECT * FROM admin";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
	public function readById($id){
		$query  = "SELECT * FROM admin WHERE admin_id = $id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);	
	}
	public function update($id){ 
		$query = "UPDATE admin SET email           = '$this->email',
								   password        = '$this->password',
								   full_name       = '$this->fullname'
								   WHERE admin_id  = $id";
		$this->performQuery($query);
	}
	public function delete($id){
		$query = "DELETE FROM admin WHERE admin_id = $id";
		$this->performQuery($query);
	}

}

?>
