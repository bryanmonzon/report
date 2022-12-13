<?php

namespace App\Http\Livewire;

use WireElements\Pro\Components\SlideOver\SlideOver;

class TodaysReport extends SlideOver
{
    public function render()
    {
        return view('livewire.todays-report');
    }
}
