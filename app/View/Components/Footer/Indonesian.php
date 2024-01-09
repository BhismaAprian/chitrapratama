<?php

namespace App\View\Components\Footer;

use App\Models\Halaman;
use App\Models\Pengaturan;
use App\Models\SiaranPers;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Indonesian extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {


        return view('components.footer.indonesian');
    }
}
