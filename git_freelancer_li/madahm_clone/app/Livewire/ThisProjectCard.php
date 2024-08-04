<?php

namespace App\Livewire;

use Livewire\Component;

class ThisProjectCard extends Component
{
public $status = 'Recruiting';
    public $isNew = true;
    public $title = 'Taxi call app offline marketing';
    public $registrationDate = '24.07.30';
    public $budget = '20,000,000 won';
    public $period = 'Less than 2 months';
    public $views = '19th';

    public function copyUrl()
    {
        // Logic để sao chép URL (có thể sử dụng JavaScript để thực hiện việc này)
        $this->dispatchBrowserEvent('urlCopied');
    }


    public function render()
    {
        return view('livewire.madahm-project.project-detail.thisproject-card');
    }
}
