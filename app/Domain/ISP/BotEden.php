<?php
namespace App\Domain\ISP;

// Exemplo 1
class BotEden implements IBotThatCanRotateArms, IBotThatCanSpinAround, IBotThatCanWiggleAntennas{
    public function rotateArms()
    {
        echo 'Awersome!';
    }    
    public function spinAround()
    {
        echo 'Awersome!';
    }
    public function wiggleAntennas()
    {
        echo 'Awersome!';
    }    
}

// Exemplo 2 (com heranca)
class BotEdenSonOfSam extends BotSam implements IBotThatCanWiggleAntennas{

    public function wiggleAntennas()
    {
        echo 'Awersome!';
    }    
}
