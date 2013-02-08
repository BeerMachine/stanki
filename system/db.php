<?php
    $db_user = 'root';
    $db_pass = '';
    $db_params = 'mysql:host=localhost;dbname=stanki';
    
    $pdo = new PDO($db_params, $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    class DB {
        public $database;
        public function __construct($pdo) {
            $this->database = $pdo;
        }
        
        public function execute($sql) {
            echo "execute'"; print_r(is_object($this->database)); echo "'";
            $res = $this->database->prepare($sql);
            return $res->execute();
            
        }
    }
?>