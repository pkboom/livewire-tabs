<?php

namespace App\Livewire;

use Livewire\Component;

class Tab extends Component
{
    public $currentTab;

    public function render()
    {
        switch ($this->currentTab) {
            case 'tab2':
                return view('livewire.tab2');
            case 'tab1':
            default:
                return view('livewire.tab1');
        }
    }
}
