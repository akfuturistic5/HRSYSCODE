<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Select2AttendanceReports extends Component
{
    public $selectedOption1;
    public $selectedOption2;
    public $options1;
    public $options2;
    public $reportType;

    public function mount()
    {
        $this->options1 = [ 'Jan', 'Feb', 'Mar'];
        $this->options2 = [ '2020', '2019', '2018'];
        $this->reportType = 'attendance-reports'; 
    }

    public function render()
    {
        return view('livewire.select2-attendance-reports');
    }
}
