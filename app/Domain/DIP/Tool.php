<?php
namespace App\Domain\DIP;
// Classe de baixo nivel
class Tool implements Abstracao{

    public function getTool()
    {            
        return "tramontina knife";
    }
}