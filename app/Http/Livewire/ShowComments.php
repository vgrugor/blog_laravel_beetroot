<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowComments extends Component
{
    public $post;

    public function render()
    {
        return view('livewire.show-comments');
    }
}
