<?php

namespace App\Livewire;

use Livewire\Component;

class Select2Salary extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
    {
        $this->options1 = [ '-- Select --', 'Employee', 'Manager'];
    }
    public function render()
    {
        return view('livewire.select2-salary');
    }
}
