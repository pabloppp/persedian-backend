<?php
/**
 * Created by PhpStorm.
 * User: pablopernias
 * Date: 16/08/14
 * Time: 21:48
 */

class AccessController extends Controller {

    private $wrongCredentialsMessage_en = ["access" => 'Wrong credentials'];

    protected function doLogin()
    {
        $rules = array(
            'email'    => 'required|email', // make sure the email is an actual email
            'password' => 'required|alphaNum' // password can only be alphanumeric and has to be greater than 3 characters
        );
        $validator = Validator::make(Input::all(), $rules);


        if ($validator->fails()) {

            return Response::json([
                'error' => $validator->errors()],
                401
            );

        } else {

            // create our user data for the authentication
            $userdata = array(
                'email' 	=> Input::json('email'),
                'password' 	=> Input::json('password'),
                'verified' => NULL
            );

            // attempt to do the login
            if (Auth::attempt($userdata)) {

                //Redirect::route("/app");
                return Response::json(
                    "success",
                    200
                );

            } else {

                // validation not successful
                return Response::json([
                    'error' => $this->wrongCredentialsMessage_en],
                    401
                );

            }

        }
    }


    protected function doRegister()
    {
        $rules = array(
            'email'    => 'required|email|unique:users,email|confirmed', // make sure the email is an actual email
            'password' => 'required|alphaNum|confirmed|min:3' // password can only be alphanumeric and has to be greater than 3 characters
        );
        $validator = Validator::make(Input::all(), $rules);


        if ($validator->fails()) {

            return Response::json([
                    'error' => $validator->errors()],
                401
            );

        } else {
            $user = new User;
            $user->email = Input::json('email');
            $user->password = Hash::make(Input::json('password')); // If you want passwords one way hashed
            $user->verified = str_random(100);
            $user->save();
            return Response::json(
                "success",
                201
            );
        }

    }

} 