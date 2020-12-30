<?php
namespace App\Domain\OCP;
/* Open closed principle (OCP) */

class WorkerBot{
    private $worker;

    public function __construct(InterfaceWorker $worker)
    {
        $this->worker = $worker;
    }

    public function make()
    {
        $this->worker->doJob();
    }
}
