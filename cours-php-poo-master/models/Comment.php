<?php
    require_once('models/Models.php');
    class Comment extends Model
    {
        // function Find(int $id) : array
        // {
        //     $query = $pdo->prepare('SELECT * FROM comments WHERE id = :id');
        //     $query->execute(['id' => $id]);
        //     return $query;
        // }
        protected $table = "comment";

        function Delete(int $id) : void
        {
            $query = $pdo->prepare('DELETE FROM comments WHERE id = :id');
            $query->execute(['id' => $id]);
        }

        function Insert(string $author, string $content, int $article_id) : void
        {
            $query = $pdo->prepare('INSERT INTO comments SET author = :author, content = :content, article_id = :article_id, created_at = NOW()');
            $query->execute(compact('author', 'content', 'article_id'));
        }
    }

?>