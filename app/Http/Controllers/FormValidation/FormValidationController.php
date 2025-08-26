<?php

namespace App\Http\Controllers\FormValidation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\FormValidation\FormSubmitRequest;
use App\Models\FormValidation\FormValidationModel;

class FormValidationController extends Controller
{
    //
    public function form(){
        //
        return view('FormValidation/FormValidationView');
    }
    //
    public function submit(FormSubmitRequest $request){
        //
        //dd($request->all());
        //
        /*echo $request->name . "<br>";
        echo $request->input("email") . "<br>";
        echo $request->subject . "<br>";
        echo $request->message . "<br>";*/
        //
        //dd(request()->all());
        //
        /*$request->validate(
            [
                'name' => 'required|string|max:20',
                'email' => 'required|email|max:30',
                'subject' => 'required|string|max:20',
                'message' => 'required|string|max:30',

            ],
            [
                'name.required' => 'Name field is missing.',
                'name.max' => 'Maximum characters for Name field is 20.'
            ]
        );*/
        //
        //$request -> validated();
        //
        $user = new FormValidationModel();
        //
        $user->name = $request->name;
        $user->email = $request->email;
        $user->subject = $request->subject;
        $user->message = $request->message;
        //
        $user->save();
        //
        dd(request()->all());
    }
    //
}
