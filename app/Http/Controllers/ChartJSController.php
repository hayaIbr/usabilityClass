<?php

namespace App\Http\Controllers;



class ChartJSController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {

        $labels = ['effectiveness', 'satsifaction', 'learnability'];
        $data = [40, 100, 30];

        return view('chart', compact('labels', 'data'));
    }
}
