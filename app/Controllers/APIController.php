<?php
    namespace App\Controllers;
   
    use App\Models\User;

    class APIController extends Controller{
        public function index($request, $response){
            $data = User::All();
            $newResponse = $response->withJson($data);
            return $newResponse;
        }

        public function newuser($request, $response){
            User::create(['name'=>'Idris','email'=>'test@test.com','password'=>'123']);
            return $response->withRedirect('/', 301);
        }

    }