<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Cookie;
use Tracker;
use Session;

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

   /* public function setAppInfo(Request $request){
        $selected = 'report';
        return view('start', compact('selected'));
    }*/

    public function setReviews(Request $request){
        // all the form variables validated & saved by here.
        //take checkbox variables and save them in session for later use.
        //$reviews = $request->reviews;
        //$selected = 'validated';
        return view('start', compact('selected', 'reviews'));
    }

    public function AImodel(Request $request){
        // form validation

        // run python script
        $preds=[];
        $arg = $request ->input('reviews');//get reviews from form.

        $process = new Process(['python',
    '/Users/hayaalalsheik/Desktop/pythonScripts/predictUsability.py', $arg]);
        $process->run();

        while ($process->isRunning()) {
            // waiting for process to finish
        }

        // error handling
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        $preds = $process->getOutput();

        $preds = explode("\n", $preds);


        $labels = ['effectiveness', 'satsifaction', 'learnability']; //get classes choice from session and manipulate accodringly.
        $eff = [$preds[1],$preds[2]];
        $sat = [$preds[3], $preds[4]];
        $lrn = [$preds[5], $preds[6]];
        $selected = "report";

        return view('start', compact('labels', 'eff', 'sat', 'lrn', 'selected'));
    }
}