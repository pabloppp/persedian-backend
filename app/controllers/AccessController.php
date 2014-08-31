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
            if (Auth::attempt($userdata, true)) {

                //Redirect::route("/app");
                return Response::json([
                    'success'=>"200"],
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

    protected function doLogout()
    {
        Auth::logout();
        Redirect::route("/");
    }


    protected function doRegister()
    {
        $rules = array(

            //With confirmation fields
            /*'email'    => 'required|email|unique:users,email|confirmed', // make sure the email is an actual email
            'password' => 'required|alphaNum|confirmed|min:3' // password can only be alphanumeric and has to be greater than 3 characters*/

            //Without confirmation fields
            'email'    => 'required|email|unique:users,email', // make sure the email is an actual email
            'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters

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

    public function loginWithGoogle() {

        // get data from input
        $code = Input::get( 'code' );

        // get google service
        $googleService = OAuth::consumer( 'Google' );

        // check if code is valid

        // if code is provided get user data and sign in
        if ( !empty( $code ) ) {

            // This was a callback request from google, get the token
            $token = $googleService->requestAccessToken( $code );

            // Send a request with it
            $result = json_decode( $googleService->request( 'https://www.googleapis.com/oauth2/v1/userinfo' ), true );

            $message = 'Your unique Google user id is: ' . $result['id'] . ' and your name is ' . $result['name'];
            echo $message. "<br/>";

            $user = User::where("email",$result['email'])->first();

            if($user == null){
                echo "user does not exist - creating user";
                $user = new User();
                $user->email = $result['email'];
                $user->password = Hash::make($result['id']);
                $user->real_name = $result['name'];
                $user->avatar = $result['picture'];
                $user->save();
            }
            else echo "user does exist!";

            Auth::login($user, true);

            echo "<br>";

            //Var_dump
            //display whole array().
            //return Redirect::to('/');
            dd($result);



        }
        // if not ask for permission first
        else {
            // get googleService authorization
            $url = $googleService->getAuthorizationUri();

            // return to google login url
            return Redirect::to( (string)$url );
        }
    }


} 