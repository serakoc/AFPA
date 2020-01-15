<?php
    class PersonnagesManager
    {
        private $db = new PDO("mysql:host='localhost';charset=utf8;dbname='game'","root","");
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); 

        public function add(Personnage $perso_a_ajouter)
        {
            $requete = $this->db->prepare("INSERT INTO personnages(nom, forceP, degats, niveau, experiences) VALUES (:nom,:force,:degats,niveau,:xp)");
            $requete->bindValue(':nom',$perso_a_ajouter->Nom());
            $requete->bindValue(':force',$perso_a_ajouter->Force(), PDO::PARAM_INT);
            $requete->bindValue(':degats',$perso_a_ajouter->Degats(), PDO::PARAM_INT);
            $requete->bindValue(':niveau',$perso_a_ajouter->Niveau(), PDO::PARAM_INT);
            $requete->bindValue(':xp',$perso_a_ajouter->Experience(), PDO::PARAM_INT);

            $requete->execute();

            $id = $requete->lastInsertId();
            $perso_a_ajouter->setId($id);

        }

        public function delete(Personnage $perso_a_delete)
        {
            $this->db->exec('DELETE FROM personnages WHERE id = ' . $perso_a_delete->id());
        }

        public function modifier(Personnage)


    }
?>