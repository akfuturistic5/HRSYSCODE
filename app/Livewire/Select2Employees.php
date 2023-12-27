<?php

namespace App\Livewire;

use Livewire\Component;

class Select2Employees extends Component
{
    public $selectedOption1;
    public $options1;
    public $project;
    public $context;
    public $type;

    public function mount($context = 'employees')
    {
        $this->options1 = ($context === 'employees' || $context === 'employees-list' || $context === 'projects')
            ? ['Select Designation', 'Web Developer', 'Web Designer', 'Android Developer', 'Ios Developer']
            : ['Select Role', 'Web Developer', 'Web Designer', 'Android Developer', 'Ios Developer'];

        $this->project = ($context === 'employees' || $context === 'employees-list') ? 'employees' : 'project-list';
        // $this->project = ($context === 'employees' || $context === 'employees-list') ? 'employees' : 'projects';
        // $this->type = ($context === 'employees' || $context === 'employees-list') ? 'designation' : 'role';
        $this->type = in_array($context, ['employees', 'employees-list', 'projects']) ? 'designation' : 'role';
    }

    public function render()
    {
        return view('livewire.select2-employees');
    }
}

