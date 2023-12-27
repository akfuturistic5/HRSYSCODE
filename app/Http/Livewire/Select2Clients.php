<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Select2Clients extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
    {
        $this->options1 = [ 'Select Company', 'Global Technologies', 'Delta Infotech'];
    }
    public function render()
    {
        return view('livewire.select2-clients');
    }
}
