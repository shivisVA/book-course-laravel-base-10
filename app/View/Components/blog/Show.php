<?php

namespace App\View\Components\blog;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Show extends Component
{
    /**
     * Create a new component instance.
     */
    //public $post;
    protected $except=[''];
     
    public function __construct(Public $post)
    {
        
        //
    }

    public function changeTitle(){
        $this->post->title = 'New Title';
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.blog.show');
    }
}
