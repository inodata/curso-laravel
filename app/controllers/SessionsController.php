<?php

class SessionsController extends BaseController{

    public function create(){

        if(Auth::check()) return Redirect::to('/admin');

        return View::make('sessions.create');
    }

    public function store(){

        if(Auth::attempt(Input::only('email', 'password'))){

            $username = Auth::user()->username;
            return View::make('hello')->with('username', $username);

        }

        return Redirect::back()->withInput()->with('login_errors', true);

    }

    public function destroy(){

        Auth::logout();

        return Redirect::route('sessions.create');

    }
}