<?php

namespace App\Livewire;

use Livewire\Component;

class Select2Assets extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
    {
        $this->options1 = [ '-- Select --', 'Pending', 'Approved', 'Returned'];
    }
    public function render()
    {
        return view('livewire.select2-assets');
    }
}
