<?php

namespace App\Livewire;

use Livewire\Component;

class Select2Attendance extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
    {
        $this->options1 = [ '-', 'Jan', 'Feb', 'Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
    }

    public function render()
    {
        return view('livewire.select2-attendance');
    }
}
