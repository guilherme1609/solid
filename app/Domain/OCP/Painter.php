<?php
namespace App\Domain\OCP;

class Painter implements InterfaceWorker{

    public function doJob() : void
    {
        echo "I'm a painter";
        echo "<br/>";
        echo "I can paint!";        
    }
}
