<?php

namespace App\Livewire;

use Livewire\Component;

class Select2Leaves extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
    {
        $this->options1 = [ '-- Select --', 'Casual Leave', 'Medical Leave','Loss of Pay'];
    }
    public function render()
    {
        return view('livewire.select2-leaves');
    }
}
