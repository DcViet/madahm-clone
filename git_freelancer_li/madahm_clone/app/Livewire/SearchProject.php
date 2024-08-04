<?php

namespace App\Livewire;

use Livewire\Component;

class SearchProject extends Component
{
    public $serviceParam = 0;
    public $budgetParam = 0;
    public $orderBy = 1;
    public $stateParam = 0;
    public $search = '';

    public function searchEvent()
    {
        $this->emit('searchUpdated', $this->search, $this->serviceParam, $this->budgetParam, $this->orderBy, $this->stateParam);
    }

    public function render()
    {
        return view('livewire.madahm-project.search-project.search-project');
    }
}
