<?php

namespace App\Http\Controllers;

use App\Models\Heavy;
use Illuminate\Http\Request;

class HeavyController extends Controller
{
    public function create (Request $request)
    {
        $heavy = Heavy::create($request);
        return $heavy;
    }
}
