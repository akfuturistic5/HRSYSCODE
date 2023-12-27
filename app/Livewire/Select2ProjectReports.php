<?php

namespace App\Livewire;

use Livewire\Component;

class Select2ProjectReports extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
    {
        $this->options1 = [ 'Name1', 'Name2'];
    }
    public function render()
    {
        return view('livewire.select2-project-reports');
    }
}
