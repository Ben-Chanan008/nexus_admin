<?php

namespace App\View\Components;

use App\Models\AccountType;
use Closure;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class AccountView extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public Collection $accounts)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render():View|Closure|string
    {
        return view('components.account-view');
    }
}
