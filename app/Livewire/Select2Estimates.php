<?php

namespace App\Livewire;

use Livewire\Component;

class Select2Estimates extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
    {
        $this->options1 = [ 'Select Status', 'Accepted', 'Declined', 'Expired'];
    }
    public function render()
    {
        return view('livewire.select2-estimates');
    }
}
