<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Select2Reports extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
    {
        $this->options1 = [ 'Select Department', 'Designing', 'Development', 'Finance','Hr & Finance'];
    }
    public function render()
    {
        return view('livewire.select2-reports');
    }
}
