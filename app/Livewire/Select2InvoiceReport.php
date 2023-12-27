<?php

namespace App\Livewire;

use Livewire\Component;

class Select2InvoiceReport extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
    {
        $this->options1 = [ 'Select Client', 'Global Technologies', 'Delta Infotech'];
    }
    public function render()
    {
        return view('livewire.select2-invoice-report');
    }
}
