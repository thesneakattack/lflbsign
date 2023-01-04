<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\Route;
// use Illuminate\Http\Response;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

//     public function routeName(): Response
// {
//     return new Response(Route::currentRouteName()); // Output: test_index
// }

}
