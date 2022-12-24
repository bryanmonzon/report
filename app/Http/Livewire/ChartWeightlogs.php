<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChartWeightlogs extends Component
{
    public $weightLogs;
    public function mount()
    {
        $this->weightLogs = auth()->user()->weightLogs()->latest()->pluck('weight')->toArray();
    }
    public function render()
    {
        return view('livewire.chart-weightlogs', ['weightLogs' => $this->weightLogs]);
    }
}
