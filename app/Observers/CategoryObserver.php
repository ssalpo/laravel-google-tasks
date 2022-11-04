<?php

namespace App\Observers;

use App\Models\Category;

class CategoryObserver
{
    /**
     * Handle the Branch "creating" event.
     *
     * @param Category $category
     * @return void
     */
    public function creating(Category $category)
    {
        if(!$category->user_id) {
            $category->user_id = auth()->id();
        }
    }
}
