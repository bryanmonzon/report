<?php

namespace App\Http\Livewire;

use App\Models\WeightLog;
use WireElements\Pro\Components\Modal\Modal;

class LogWeight extends Modal
{
    public $weight = '';

    public function logWeight()
    {
        request()->user()->weightLogs()->create([
            'weight' => $this->weight
        ]);

        $this->close();
    }

    public function render()
    {
        return view('livewire.log-weight');
    }
}
