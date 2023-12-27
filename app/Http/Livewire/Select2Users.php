<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Select2Users extends Component
{
    public $selectedOption1;
    public $selectedOption2;
    public $options1;
    public $options2;

    public function mount()
    {
        $this->options1 = [ 'Select Company', 'Global Technologies', 'Delta Infotech'];
        $this->options2 = [ 'Select Role', 'Web Developer', 'Web Designer','Android Developer','Ios Developer'];
    }
    public function render()
    {
        return view('livewire.select2-users');
    }
}
