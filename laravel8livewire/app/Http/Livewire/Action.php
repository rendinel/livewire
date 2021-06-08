<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Action extends Component
{
    public $sum;
    public $message;
    public $num1;
    public $num2;

    // metodo per somma numeri preimpostati 
    public function addTwoNumbers($num1,$num2)
    {
        $this->sum = $num1 + $num2;
    }

    // metodo display msg
    public function DisplayMessage($msg)
    {
        $this->message = $msg;
    }

    // metdo somma da input
    public function getSum()
    {
        $this->sum = $this->num1 + $this->num2;
    }

    public function render()
    {
        return view('livewire.action');
    }
}
