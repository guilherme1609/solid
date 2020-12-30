<?php
namespace App\Application\Http\Controllers;
/* Simple responsability principle (SRP)  */

class Driver{
        
    public function getDriver(): string
    {
        return 'I am a Driver!';
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
