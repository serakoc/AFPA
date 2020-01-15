<?php
    function chargeClass($classe)
    {
        require $classe . '.php';
    }
    spl_autoload_register('chargeClass');
  
    $perso = new Personnage(10,10);
?>