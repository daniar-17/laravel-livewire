<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class Check extends Component
{
    public $posts, $title, $body, $post_id;
    public $isOpen = 0;
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        $this->posts = Post::all();
        return view('livewire.check');
    }
}
