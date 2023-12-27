<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Select2Component extends Component
 {
    public $selectedOption1;
    public $selectedOption2;
    public $selectedOption3;
    public $options1;
    public $options2;
    public $options3;

    public function mount()
    {
        $this->options1 = [ 'Select', 'Development', 'Designing', 'Android' ];
        $this->options2 = [ 'Select', 'Full Time', 'Part Time', 'Internship' ];
        $this->options3 = [ 'Select Designation', 'Web Developer', 'Web Designer', 'Android Developer', 'Ios Developer' ];
    }

    public function render()
    {
        return view( 'livewire.select2-component' );
    }
}
