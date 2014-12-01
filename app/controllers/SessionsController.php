<?php

class SessionsController extends BaseController{

    public function create(){

        if(Auth::check()) return Redirect::to('/hello');

        return View::make('sessions.create');
    }

    public function store(){

        if(Auth::attempt(Input::only('email', 'password'))){

            return Redirect::to('/hello');

        }

        return Redirect::back()->withInput()->with('login_errors', true);

    }

    public function destroy(){

        Auth::logout();

        return Redirect::route('sessions.create');

    }
}