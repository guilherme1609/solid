<?php
namespace App\Domain\LSP;

class Sam {
    public function makeCoffee($type = 'Coffee'): void
    {
        echo("Here's your $type");
    }
}