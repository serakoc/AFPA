<?php

    require_once('lib/db.php');

    class Model
    {
        protected $pdo;
        protected $table;

        public function __construct()
        {
            $this->pdo = getPdo();
        }

        public function Find(int $id) : array
        {
            $query = $this->pdo->prepare("SELECT * FROM $this->table WHERE id = :id");
            $query->execute(['id' => $id]);
            return $query;
        }
    }
    
?>