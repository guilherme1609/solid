<?php 
namespace App\Domain\DIP;
// Classe de alto nível
class Bot {
    private $tool;
    public function __construct(Abstracao $tool)
    {
        $this->tool = $tool;
    }

    public function cut(){
        $myGivenTool = $this->tool->getTool();
        // Detalhes (lógica do funcionamento da ferramenta)
        echo("I cut pizza with my $myGivenTool");
    }
        
}

// Exemplo
$bot = new Bot(new Tool);
$bot->cut();