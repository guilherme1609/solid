<?php
namespace App\Application\Http\Controllers;
/* Simple responsability principle (SRP)  */

class Gardener{
        
    public function getGardener(): string
    {
        return 'I am a Gardener!';
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
