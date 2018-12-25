<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class UserTheme
{
    public function __construct()
    {
    }

    public function compose(View $view)
    {
        $path = base_path().DIRECTORY_SEPARATOR.'resources'.DIRECTORY_SEPARATOR.'themes';
        $themes = scandir($path);
        $themes = array_diff($themes, ['.', '..']);
        $themes = [];
        foreach ($themes as $theme) {
            $themes[$theme] = \Config::get('themes.'.$theme);
        }
        $view->with([
            'themes' => $themes,
        ]);
    }
}
