<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getAllUser(){

          // Retrieve all users from the 'users' table
          $users = User::all();

          // Return users data in JSON format
          return response()->json($users);

    }



    public function getUser($id)
    {
        // Retrieve user data from the 'users' table based on the provided ID
        $user = User::find($id);

        // Check if user exists
        if ($user) {
            // Return user data in JSON format
            return response()->json($user);
        } else {
            // Return a JSON response indicating user not found
            return response()->json(['error' => 'User not found'], 404);
        }
    }

    // get user by name
    public function getUserByName($name)
    {
        // Retrieve user data from the 'users' table based on the provided name
        // $user = User::where('name', $name)->first();
        // like parameter
        $user = User::where('name', 'LIKE', '%' . $name . '%')->get();

        // Check if user exists
        if ($user) {
            // Return user data in JSON format
            return response()->json($user);
        } else {
            // Return a JSON response indicating user not found
            return response()->json(['error' => 'User not found'], 404);
        }
    }
}
