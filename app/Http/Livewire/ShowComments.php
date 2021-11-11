<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowComments extends Component
{
    public $post;

    protected $listeners = [
        'commentsRefresh' => '$refresh',
    ];

    public function render()
    {
        return view('livewire.show-comments');
    }
}
