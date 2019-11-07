<?php
class ATNconnector{
	public $host='localhost';
	public $dbname='cunshop';
	public $un= 'root';
	public $pw='';
	public function runQuery($sql)
	{
		$conn = new mysqli($this->host, $this->un, $this->pw, $this->dbname);
		$result = $conn->query($sql);
		$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
		$conn->close();
		return $rows;
	}
	public function execStatement($sql)
	{
		$conn = new mysqli($this->host, $this->un, $this->pw, $this->dbname);
		$result = $conn->query($sql);
		$conn->close();
	}
	public function runQueryadmin($sql)
	{
		$conn = new mysqli($this->host, $this->un, $this->pw, $this->dbname);
		$result = $conn->query($sql);
		$rows = mysqli_fetch_all($result);
		$conn->close();
		return $rows;
	}
} 
 ?>
 <?php
    $db_connection = pg_connect("host=ec2-174-129-253-157.compute-1.amazonaws.com dbname=ddt4kf2tt55npb user=tvipgwpndvwuxg password=25121c48dbc1ca27983d208cd335239df3cefcba63f5d9663dbb657285249d83");
?>