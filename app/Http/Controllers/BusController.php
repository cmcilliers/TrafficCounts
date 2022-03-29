<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
    public function create (Request $request)
    {
        $bus = Bus::create($request);
        return $bus;
    }
}
