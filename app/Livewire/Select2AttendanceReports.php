<?php

namespace App\Livewire;

use Livewire\Component;

class Select2AttendanceReports extends Component
{
    public $selectedOption1;
    public $options1;
    public $reportType;

    public function mount()
    {
        $this->options1 = [ 'Jan', 'Feb', 'Mar'];
        $this->reportType = 'attendance-reports'; 
    }

    public function render()
    {
        return view('livewire.select2-attendance-reports');
    }
}
