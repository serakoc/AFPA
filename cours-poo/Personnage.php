<?php
    class Personnage
    {
        private $_nom;
        private $_id;
        private $_force;
        private $_localisation;
        private $_experience;
        private $_degats;
        private $_niveau;
       //private static $_persoTotal = 0;

        public function __construct($nom,$force, $degats)
        {
            $this->_nom = $nom;
            $this->setForce($force);
            $this->setDegats($degats);
            $this->_experience = 1;
            $this->_niveau = 1;
           //self::$_persoTotal++;
        }

        /*public static function getCompteur()
        {
            return self::$_persoTotal;
        }/*

        /* méthode de base */
        public function deplacer()
        {

        }

        public function frapper(Personnage $ennemi)
        {
            $ennemi->_degats += $this->_force;
        }

        public function gagnerExperience()
        {
            $this->_experience++;
        }

        /*afficher chaque attribut*/

        public function afficherExperience()
        {
            echo $this->_experience;
        }

        public function afficherDegats()
        {
            echo $this->_degats;
        }

        public function afficherLocalisation()
        {
            echo $this->_localisation;
        }

        public function afficherForce()
        {
            echo $this->_force;
        }

        /* return chaque attribut */
        public function Nom()
        {
            return $this->_nom;
        }

        public function Experience()
        {
            return $this->_experience;
        }

        public function Degats()
        {
            return $this->_degats;
        }

        public function Niveau()
        {
            return $this->_niveau;
        }

        public function Localisation()
        {
            return $this->_localisation;
        }

        public function Force()
        {
            return $this->_force;
        }

        public function id()
        {
            return $this->_id;
        }

        /* modifier l'experience */

        public function setExperience($experience)
        {
            if (!is_int($experience)) // S'il ne s'agit pas d'un nombre entier.
            {
                trigger_error('L\'expérience d\'un personnage doit être un nombre entier', E_USER_WARNING);
                return;
            }
            
            if ($experience > 100) // On vérifie bien qu'on ne souhaite pas assigner une valeur supérieure à 100.
            {
                trigger_error('L\'expérience d\'un personnage ne peut dépasser 100', E_USER_WARNING);
                return;
            }

            $this->_experience = $experience;
        }

        /* modifier la force */

        public function setForce($force)
        {
            if (!is_int($force)) // S'il ne s'agit pas d'un nombre entier.
            {
                trigger_error('L\'expérience d\'un personnage doit être un nombre entier', E_USER_WARNING);
                return;
            }
            
            if ($force > 100) // On vérifie bien qu'on ne souhaite pas assigner une valeur supérieure à 100.
            {
                trigger_error('L\'expérience d\'un personnage ne peut dépasser 100', E_USER_WARNING);
                return;
            }

            $this->_force = $force;
        }

        /*modifier les degats recus ? */

        public function setDegats($degats)
        {
            if (!is_int($degats)) // S'il ne s'agit pas d'un nombre entier.
            {
                trigger_error('L\'expérience d\'un personnage doit être un nombre entier', E_USER_WARNING);
                return;
            }
            
            if ($degats > 100) // On vérifie bien qu'on ne souhaite pas assigner une valeur supérieure à 100.
            {
                trigger_error('L\'expérience d\'un personnage ne peut dépasser 100', E_USER_WARNING);
                return;
            }

            $this->_degats = $degats;
        }

        public function setId($id)
        {
            $this->id = $id;
        }

        public function seeAll()
        {
            echo    "exp : $this->_experience <br> 
                    degats : $this->_degats <br> 
                    force : $this->_force <br>";
        }
    }


    $perso9999 = new Personnage("1",1,1);

    /* test de l'ajout de l'exp
    $testDuPerso->afficherExperience();
    $testDuPerso->gagnerExperience();
    $testDuPerso->afficherExperience();
    */

    /* test de l'ajout de degat 
    $testEnnemi->afficherDegats();
    $testDuPerso->frapper($testEnnemi);
    $testEnnemi->afficherDegats();
    $testDuPerso->frapper($testEnnemi);
    $testEnnemi->afficherDegats();
    */

    /* test de l'attribution de force 
    echo $testDuPerso->force();
    $testDuPerso->setForce(90);
    echo $testDuPerso->force();
    */

    /* test de l'attribution de l'experience
    $testDuPerso->setExperience(90);
    echo $testDuPerso->experience();
    $testDuPerso->setExperience(0);
    echo $testDuPerso->experience();    
    */

    /*montrer tout |>>>*/
    ?>