<?php

namespace App\Application\Http\Controllers;

use App\Domain\OCP\WorkerBot;
use App\Domain\OCP\Chef;
use App\Domain\OCP\Painter;

use Illuminate\Http\Request;

class OCPController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    private $workerBot;
    
    public function executar($bot = 'Chef') : void
    {
        if ($bot == 'Chef') {
            $this->workerBot = new WorkerBot(new Chef);
        } else if($bot == 'Painter') {
            $this->workerBot = new WorkerBot(new Painter);
        }

        $this->workerBot->make($bot);
    }
    //
}
