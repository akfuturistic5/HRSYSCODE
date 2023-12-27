<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Select2ProjectReports extends Component
{
    public $selectedOption1;
    public $selectedOption2;
    public $options1;
    public $options2;

    public function mount()
    {
        $this->options1 = [ 'Name1', 'Name2'];
        $this->options2 = [ 'Active', 'Pending'];
    }
    public function render()
    {
        return view('livewire.select2-project-reports');
    }
}
