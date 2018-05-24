<?php

class Database extends PDO {
    


    function __construct() {
       define('DB_TYPE', 'mysql');
        define('DB_HOST', 'localhost');
        define('DB_NAME', 'blog');
        define('DB_USER', 'root');
        define('DB_PASS', '');
		parent::__construct(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
	}
        
     public function query(string $statement) {
         parent::query($statement);
     }
     
     public function GetMovieByChName ($ch_name){
            $sql= "SELECT * FROM Bond WHERE Ch_Name = $ch_name";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(); 
            
            $movie = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $movie;
     }
             
}
    



