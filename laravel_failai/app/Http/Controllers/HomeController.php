<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @return Application|Factory|View
     */
    public function __invoke(Request $request)
    {
        return view('welcome');
    }
}
