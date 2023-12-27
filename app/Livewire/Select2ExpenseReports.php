<?php

namespace App\Livewire;

use Livewire\Component;

class Select2ExpenseReports extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
    {
        $this->options1 = [ 'Select buyer', 'Loren Gatlin', 'Tarah Shropshire'];
    }
    public function render()
    {
        return view('livewire.select2-expense-reports');
    }
}
