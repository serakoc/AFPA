<?php
    require_once('models/Models.php');
    class Article extends Model
    {
        protected $table = "articles";
        
        function FindAll() : array
        {
            $resultats = $this->pdo->query('SELECT * FROM articles ORDER BY created_at DESC');
            $articles = $resultats->fetchAll();
            return $articles;
        }
        function Delete(int $id) : void
        {
            $query = $this->pdo->prepare('DELETE FROM articles WHERE id = :id');
            $query->execute(['id' => $id]);
        }

    }

?>