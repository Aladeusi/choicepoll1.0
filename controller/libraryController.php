<?php
	/**
	* 
	*/
	class libraryController
	{
		
		public function __construct()
		{
			# code...
		}
		public function addSection($url)
		{
			require($url);

		}
		public function redirect($url){
			header("Location:".$url);
		}

		public function connectdb(){
			$servername = "localhost";
			$username = "root";
			$password = "";
			try {
    			$conn = new PDO("mysql:host=$servername;dbname=choice_poll", $username, $password);
    			// set the PDO error mode to exception
    			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    			$GLOBALS['PDOObject']=$conn;
    			return true;
    			}
			catch(PDOException $e)
    			{
    				return false;
    			}

		}

		public function closedb(){
			$GLOBALS['PDOObject']=null;

		}

		public function getAjaxData($url){
			$field1=trim($_POST['name']);
			$field2=trim($_POST['email']);
			$field3=trim($_POST['comment']);
			return array($field1,$field2,$field3);

 		}
 		public function saveData($paramArray){
 			$paramLength=count($paramArray);
 			if($this->connectdb()){
 				$sql="INSERT INTO contacts(name, email, comment)  VALUES(:name, :email, :comment)";
 				$bind=$GLOBALS['PDOObject']->prepare($sql);
 				$bind->execute(array(':name'=>$paramArray[0], ':email'=>$paramArray[1], ':comment'=>$paramArray[2]));
 			}

 			$this->closedb();
 			return true;
 			

 		}

	}


?>