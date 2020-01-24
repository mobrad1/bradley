<?php

/**
 * Created by PhpStorm.
 * User: bradley_peexoo
 * Date: 23/01/2020
 * Time: 4:47 PM
 */
namespace App\Composer;

use Illuminate\Http\Request;
use Illuminate\View\View;

class BreadcrumbComposer
{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function compose(View $view)
    {
        $view->with('breadcrumbs', $this->parseSegments());
    }

    protected function parseSegments()
    {
        return collect($this->request->segments())->mapWithKeys(function ($segment, $key) {
            return [
                $segment => implode('/', array_slice($this->request->segments(), 0, $key + 1))
            ];
        });
    }
}