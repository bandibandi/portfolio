<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Nav extends Component
{
    /** @var array<int, array{id: string, label: string}> */
    public array $navItems = [
        ['id' => 'about', 'label' => 'About'],
        ['id' => 'services', 'label' => 'Services'],
        ['id' => 'stack', 'label' => 'Stack'],
        ['id' => 'projects', 'label' => 'Projects'],
        ['id' => 'demo', 'label' => 'Live Demo'],
        ['id' => 'contact', 'label' => 'Contact'],
    ];

    public function render(): View
    {
        return view('components.nav');
    }
}
