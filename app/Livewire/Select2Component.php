<?php

namespace App\Livewire;

use Livewire\Component;

class Select2Component extends Component
 {
    public $selectedOption1;
    public $options1;

    public function mount()
    {
        $this->options1 = [ 'Select', 'Development', 'Designing', 'Android' ];
    }

    public function render()
    {
        return view( 'livewire.select2-component' );
    }
}
