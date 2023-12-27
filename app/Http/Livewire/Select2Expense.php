<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Select2Expense extends Component
{
    public $selectedOption1;
    public $selectedOption2;
    public $options1;
    public $options2;

    public function mount()
    {
        $this->options1 = [ '-- Select --', 'Loren Gatlin', 'Tarah Shropshire'];
        $this->options2 = [ '-- Select --', 'Cash', 'Cheque'];
    }
    public function render()
    {
        return view('livewire.select2-expense');
    }
}
