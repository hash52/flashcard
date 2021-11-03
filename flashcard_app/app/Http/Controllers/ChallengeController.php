<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Challenge;

use App\Libs\ChallengeSetting;

class ChallengeController extends Controller
{
    public function setting(){
        return view('challenge.setting', ['books'=>Book::all()]);
    }

    public function init(Request $request){
        $challenge = new Challenge;
        $challenge->setQuestionsFromSetting(new ChallengeSetting($request));
        dd($challenge->toJson());
    }
}
