<?php

namespace App\Providers\ViewComposers;
use Illuminate\Contracts\View\View;

class URLComposer {

    public function compose(View $view) {
        $uri_arr = explode('/', $_SERVER['REQUEST_URI']);
        $view -> with('url', $uri_arr[1]);
    }

}
