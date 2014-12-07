<?php

class UsersController extends \BaseController {

	/**
	 * Muestra el listado de elementos
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();
        return View::make('users.index')->with('users', $users);
	}


	/**
	 * Muestra el formulario de creacion del elemento
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
	}


	/**
	 * Guarda un elemento recien creado
	 *
	 * @return Response
	 */
	public function store()
	{
		//Reglas de validacion, estas se van a pasar al modelo via Ardent
        $rules = array(
            'username'       => 'required',
            'email'      => 'required|email',
        );
        $validator = Validator::make(Input::all(), $rules);

        //Validacion en accion
        if ($validator->fails()) {
            return Redirect::to('users/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // Guardado del usuario
            $user = new User;
            $user->username   = Input::get('username');
            $user->email      = Input::get('email');
            $user->password   = Input::get('password');
            $user->save();

            // redirect
            Session::flash('message', 'Usuario creado exitosamente!');
            return Redirect::to('users');
        }
	}


	/**
	 * Muestra el usuario seleccionado
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//Obtener el usuario
		$user = User::find($id);

        // Renderea la vista y le pasa el usuario con los datos.
        return View::make('users.show')->with('user', $user);
	}


	/**
	 * Muestra el formulario de edicion
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the user
        $user = User::find($id);

        // show the edit form and pass the user
        return View::make('users.edit')->with('user', $user);
	}


	/**
	 * Actualiza el elemento seleccionado
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user = User::find($id);

        $user->username   = Input::get('username');
        $user->email      = Input::get('email');
        $user->password   = Input::get('password');  //OJO: se hace uso del MUTATOR en el modelo
        $user->save();

        return Redirect::to('/users');
	}


	/**
	 * Elimina el elemento
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		User::destroy($id);
        return Redirect::to('/users');
	}


}
