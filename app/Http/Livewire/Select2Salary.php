<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Select2Salary extends Component
{
    public $selectedOption1;
    public $selectedOption2;
    public $options1;
    public $options2;

    public function mount()
    {
        $this->options1 = [ '-- Select --', 'Employee', 'Manager'];
        $this->options2 = [ '-- Select --', 'Pending', 'Approved','Rejected'];
    }
    public function render()
    {
        return view('livewire.select2-salary');
    }
}
