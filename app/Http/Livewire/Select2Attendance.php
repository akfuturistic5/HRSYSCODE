<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Select2Attendance extends Component
{
    public $selectedOption1;
    public $selectedOption2;
    public $options1;
    public $options2;

    public function mount()
    {
        $this->options1 = [ '-', 'Jan', 'Feb', 'Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
        $this->options2 = [ '-', '2019', '2018', '2017','2016','2015' ];
    }

    public function render()
    {
        return view('livewire.select2-attendance');
    }
}
