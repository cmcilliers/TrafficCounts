<?php

namespace App\Http\Controllers;

use App\Models\Intersection;
use Illuminate\Http\Request;

class IntersectionController extends Controller
{
    public function create (Request $request)
    {
        $intersection = Intersection::create($request);
        return $intersection;
    }

    public function find (Request $request)
    {
        $intersection = Intersection::findOrFail($request->route('intersection_id'));
        return $intersection;
    }

    public function list ()
    {
        $intersections = Intersection::all();
        return $intersections;
    }

    public function delete (Request $request)
    {
        $intersection = Intersection::findOrFail($request['id']);
        /**
         * DELETE SURVEYS FOR INTERSECTION?
         */
        $intersection->delete();
        return true;
    }
}
