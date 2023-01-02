<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class WeightGoal extends Component
{
    public $state = [];

    public function mount()
    {
        $this->state = Auth::user()->withoutRelations()->toArray();
    }

    public function updateWeight()
    {
        
        $this->user->update([
            'weight_goal' => $this->state['weight_goal']    
        ]);
        $this->emit('saved');
    }

    public function getUserProperty()
    {
        return Auth::user();
    }

    public function render()
    {
        return view('livewire.weight-goal');
    }
}