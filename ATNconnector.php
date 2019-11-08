<?php
class ATNconnector{
	public $host='ec2-54-221-198-156.compute-1.amazonaws.com';
	public $dbname='dcvm369d6sl8tr';
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