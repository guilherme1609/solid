<?php
namespace App\Application\Http\Controllers;
/* Simple responsability principle (SRP)  */

class Chef {
        
    public function getChef(): string
    {
        return 'I am a chef!';
    }

    public function doSomething(): void
    {
        echo 'Doing something stuff';
    }
    
    public function doOtherThing(): void
    {
        echo 'Doing something else';
    }

}