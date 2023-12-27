<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Select2Invoices extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
    {
        $this->options1 = [ 'Select Status', 'Pending', 'Paid', 'Partially Paid'];
    }
    public function render()
    {
        return view('livewire.select2-invoices');
    }
}
