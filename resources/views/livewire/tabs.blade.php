<div>
    <button type="button" wire:click="selectTab('tab1')"">
        Tab1
    </button>
    <button type="button" wire:click="selectTab('tab2')"">
        Tab2
    </button>

    @livewire('tab', ['currentTab' => $this->tab], key(time()))
</div>
