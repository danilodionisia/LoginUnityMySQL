<?php 
	
	class GameDB{
	
		private $host = 'localhost';
		private $user = 'root';
		private $dbPassword = 'root';
		private $db = 'game';
		
		public function set($property, $value){
			$this->$property = $value;
		}
		
		public function get($property){
			return $this->$property;
		}
		
		private function openConn(){
			
			$conn = mysqli_connect($this->host, $this->user, $this->dbPassword, $this->db) or die (mysqli_error($conn));
			return $conn;
		}
		
		public function playerLogin(){
			
			$conn = $this->openConn();
			$sql = 'SELECT * FROM player WHERE login = "'.$this->get('login').'" AND password = "'.$this->get('password').'"';
			
			$query = mysqli_query($conn, $sql) or die (mysqli_error($conn));
			mysqli_close($conn);
			
			if($rows = mysqli_num_rows($query) > 0){
				$cols = mysqli_fetch_assoc($query);
				echo $cols['login'] . "|" . $cols['password'] . "|" . $cols['points'] . "|" . $cols['level'] . "|" . $cols['vidas'];
			}else{
				echo 'false';
			}						
			
		}
	}
	
?>