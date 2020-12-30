<?php
namespace App\Application\Http\Controllers;
/* Simple responsability principle (SRP)  */

class Painter{
        
    public function getPainter(): string
    {
        return 'I am a Painter!';
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
