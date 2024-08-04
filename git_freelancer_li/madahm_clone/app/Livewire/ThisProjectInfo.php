<?php

namespace App\Livewire;

use Livewire\Component;

class ThisProjectInfo extends Component
{
public $budget = '20,000,000 won';
    public $period = 'Less than 2 months';
    public $views = '19th';

    public function render()
    {
        return view('livewire.madahm-project.project-detail.thisproject-info');
    }
}

