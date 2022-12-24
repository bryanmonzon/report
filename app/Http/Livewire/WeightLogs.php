<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WeightLogs extends Component
{
    public $weightLogs;

    public function mount()
    {
        $this->weightLogs = auth()->user()->weightLogs()->latest()->get();    
    }
    public function render()
    {
        return view('livewire.weight-logs', ['weightLogs' => $this->weightLogs]);
    }
}
