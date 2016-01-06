<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Auth;

class UserComposer
{
    public function compose(View $view)
    {
        $view->with('user', Auth::user());
    }
}
