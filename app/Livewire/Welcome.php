<?php

namespace App\Livewire;

use Livewire\Component;

class Welcome extends Component
{
    public $post;
    public $clicked;
    public $toggle = false;

    public function mount()
    {
        $this->clicked = "클릭 전";
    }
    public function click()
    {
        $this->clicked = "클릭 후";
    }
    public function render()
    {
        return view('livewire.welcome',["post" => $this->post]);
    }
}
