<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(int $p1, int $p2) {
        // echo 'Params sum is '.($p1+$p2);
        return view('site.test', compact('p1', 'p2'));
        // return view('site.test', ['p2' => $p2, 'p1' => $p1]);
    }
}
