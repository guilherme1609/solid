<?php
namespace App\Domain\LSP;

class Eden extends Sam{
   
    private $type;

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function make() : void
    {
        $this->makeCoffee($this->type);
    }
}
