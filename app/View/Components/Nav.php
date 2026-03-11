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
        ['id' => 'how-i-work', 'label' => 'Process'],
        ['id' => 'stack', 'label' => 'Stack'],
        ['id' => 'projects', 'label' => 'Projects'],
        ['id' => 'testimonials', 'label' => 'References'],
        ['id' => 'demo', 'label' => 'Live Demo'],
        ['id' => 'contact', 'label' => 'Contact'],
    ];

    public bool $isBlog = false;

    public function __construct()
    {
        $this->isBlog = request()->routeIs('blog.*');
    }

    public function render(): View
    {
        return view('components.nav');
    }
}
