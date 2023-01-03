<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CurrentWeight extends Component
{
    public $weight;

    protected $listeners = ['logAdded' => 'updateCurrentWeight'];

    public function mount()
    {
        $this->weight = $this->getCurrentWeight(); 
    }

    public function updateCurrentWeight()
    {
        $this->weight = $this->getCurrentWeight();
    }

    protected function getCurrentWeight()
    {
        return auth()->user()->currentWeight();
    }    

    public function render()
    {
        return view('livewire.current-weight', ['weight' =>  $this->weight]);
    }
}
