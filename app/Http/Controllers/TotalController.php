<?php

namespace App\Http\Controllers;

use App\Models\Total;
use Illuminate\Http\Request;

class TotalController extends Controller
{
    public function create (Request $request)
    {
        $total = Total::create($request);
        return $total;
    }

}
