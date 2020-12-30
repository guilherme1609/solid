<?php

namespace App\Application\Http\Controllers;

use App\Domain\LSP\Client;
use Illuminate\Http\Request;

class LSPController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    private $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function executar($bot){
        $this->client->orderCoffee($bot);
    }
    //
}
