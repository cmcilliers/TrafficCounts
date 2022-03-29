<?php

namespace App\Http\Controllers;

use App\Models\MBT;
use Illuminate\Http\Request;

class MBTController extends Controller
{
    public function create (Request $request)
    {
        $mbt = MBT::create($request);
        return $mbt;
    }
}
