<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Heavy;
use App\Models\Intersection;
use App\Models\MBT;
use App\Models\Survey;
use App\Models\Total;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function create(Request $request)
    {
        $survey = Survey::create($request);
        return $survey;
    }

    public function list ()
    {
        $surveys = Survey::all();
        return $surveys;
    }

    public function delete (Request $request)
    {
        $survey = Survey::findOrFail($request->route('id'));
        $total = Total::where('survey_id', $survey->id)->first();
        $heavy = Heavy::where('survey_id', $survey->id)->first();
        $bus = Bus::where('survey_id', $survey->id)->first();
        $mbt = MBT::where('survey_id', $survey->id)->first();
        $total->delete();
        $heavy->delete();
        $bus->delete();
        $mbt->delete();
        $survey->delete();
        return true;
    }
}
