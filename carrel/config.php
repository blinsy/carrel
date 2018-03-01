<?php
$Data;
class DbConn{
protected $storage;
public function __construct(){
$host='localhost';
$username='root';
$password='';
$database='opportunity';
	try	{
		$this->storage = new PDO("mysql:host=".$host.";dbname=".$database."",$username,$password);
		$this->storage->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
		}
		catch(PDOException $error){
			die("Error:=>".$error->getMessage());
		}
}
function ConnectDatabase(){
return $this->storage;
}
function __destruct(){
}
}
$Data=new DbConn();
?>