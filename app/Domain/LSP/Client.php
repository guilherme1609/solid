<?php
namespace App\Domain\LSP;

class Client{
    public function orderCoffee($bot = '') : void
    {
        if ($bot == 'Eden') {
            $eden = new Eden('cappuccino');
            $eden->make();        
        }else if ($bot == 'Sam'){
            $sam = new Sam();
            $sam->makeCoffee();        
        }else{
            echo ('There is no attendant available at the moment');
        }
    }
}