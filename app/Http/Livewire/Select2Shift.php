<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Select2Shift extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
    {
        $this->options1 = [ 'All Department', '1' =>  'Finance', '2' => 'Finance and Management', '3' => 'Hr & Finance' , '4' => 'ITech'];
    }
    public function render()
    {
        return view('livewire.select2-shift');
    }
}
