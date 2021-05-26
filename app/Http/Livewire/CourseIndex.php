<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Course;
use App\Models\Level;
use Livewire\Component;
use Livewire\WithPagination;

class CourseIndex extends Component
{

    use WithPagination;

    public $category_id;
    public $level_id;
    public function render()
    {
        $categories = Category::all();
        $levels = Level::all();
        $courses = Course::where('status', 3 )
                         ->category($this->category_id)
                         ->level($this->level_id)
                         ->latest('id')->paginate(8);
        
        return view('livewire.course-index', compact('courses','categories','levels'));
    }

    public function resetfilters()
    {
        $this->reset(['category_id','level_id']);
    }
}
