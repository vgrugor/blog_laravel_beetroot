<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;

class CreateComment extends Component
{
    public $comment;
    public $post;
    public $saveSuccess = false;

    protected $rules = [
        'comment.content' => 'required|min:6',
    ];

    protected $messages = [
        'comment.content.required' => 'The comment cannot be empty.',
        'comment.content.min' => 'Comment cannot be shorter than 6 characters.',
    ];

    public function mount(){
        $this->comment = new Comment();
    }

    public function saveComment(){
        $this->validate();
        $this->comment->post_id = $this->post->id;
        $this->comment->user_id = -1;
        $this->comment->save();
        $this->saveSuccess = true;
        $this->post->fresh();
    }

    public function render()
    {
        return view('livewire.create-comment');
    }
}
