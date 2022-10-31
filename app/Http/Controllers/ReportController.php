<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class ReportController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $selected = '';
        return view('start', compact('selected'));
    }

    public function setAppInfo(Request $request){
        $selected = 'report';
        return view('start', compact('selected'));
    }

    public function setReviews(Request $request){
        
        $selected = 'classes';

        return view('start', compact('selected'));
    }

    public function setClasses(Request $request){
        $selected= 'app info';

        return view('start', compact('selected'));
    }

    public function AImodel(){
        $labels = ['effectiveness', 'satsifaction', 'learnability'];
        $data = [40, 100, 30];
        $selected = "report";

        return view('chart', compact('labels', 'data', 'selected'));
    }
}
