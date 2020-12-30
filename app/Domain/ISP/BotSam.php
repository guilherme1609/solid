<?php
namespace App\Domain\ISP;

class BotSam implements IBotThatCanRotateArms, IBotThatCanSpinAround{

    public function rotateArms()
    {
        echo 'Awersome!';
    }

    public function spinAround()
    {
        echo 'Awersome!';
    }

}