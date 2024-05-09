<?php

namespace App\Livewire;

use Livewire\Component;

class Tabs extends Component
{
    public $tab;

    protected $queryString = ['tab'];

    public function render()
    {
        pick('tabs render');

        return view('livewire.tabs');
    }

    public function selectTab($name)
    {
        $this->tab = $name;
    }
}
