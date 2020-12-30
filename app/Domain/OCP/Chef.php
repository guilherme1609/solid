<?php
namespace App\Domain\OCP;

class Chef implements InterfaceWorker{

    public function doJob() : void
    {
        echo "I'm a chef";
        echo "<br/>";
        echo "I can cut!";
    }
}
