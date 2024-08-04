<?php

namespace App\Livewire;

use Livewire\Component;

class ThisProjectInquiry extends Component
{
 public $managerName = 'Manager Kim Ye-jin';
    public $phone = '070-8859-6949';
    public $email = 'yejinkimail@madahm.com';

    public function render()
    {
        return view('livewire.madahm-project.project-detail.thisproject-inquiry');
    }
}
