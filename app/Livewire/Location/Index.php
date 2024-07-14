<?php

namespace App\Livewire\Location;

use Livewire\Component;
use App\Models\Location;

class Index extends Component
{
    public function render()
    {
        $locations = Location::all();
        return view('livewire.location.index',compact('locations'));
    }
}
