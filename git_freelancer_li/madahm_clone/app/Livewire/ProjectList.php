<?php

namespace App\Livewire;

use Livewire\Component;

class ProjectList extends Component
{
    public $projects = [];

    protected $listeners = ['searchUpdated'];

    public function searchUpdated($search, $serviceParam, $budgetParam, $orderBy, $stateParam)
    {
        // Implement search logic here and update $projects
    }

    public function render()
    {
        return view('livewire.madahm-project.project-list.project-list', ['projects' => $this->projects]);
    }
}
