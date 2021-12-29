<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Person;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class AuthController extends Controller
{

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|between:2,150',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $user = User::create(array_merge(
            $validator->validated()
        ));

        $person = new Person();
        $person->user_id = $user->id;
        $person->save();

        return response()->json([
            'message' => 'User successfully registered',
            'user' => $user,
        ], 201);
    }

    protected function createNewToken($token)
    {
        return response()->json([
            "message" => "Logged in Success",
            "error" => false,
            "status" => 200,
            'token' => $token,
            'expires_in' => auth()->factory()->getTTL() * 60,
            "user" => auth()->user()->id,

        ]);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json(["message" => $validator->errors()], 422);
        }

        if (!$token = auth()->attempt($validator->validated())) {
            return response()->json([
                "message" => "Either email or password is wrong.",
                "error" => true,
                "status" => 401,
                'token' => null,
                'expires_in' => null,
                "user" => null,

            ], 401);
        }

        return $this->createNewToken($token);
    }

    public function logout()
    {
        auth()->logout();
        return response()->json(['message' => 'User successfully logged out']);
    }

    public function userProfile()
    {
        return response()->json(auth()->user());
    }
    public function updateProfile(Request $request)
    {

        $userId = null;
        $personid = Person::where('user_id', Auth()->user()->id)->get();

        foreach ($personid as $itens) {

            $userId = $itens->id;
        }

        $person = Person::find($userId);
        $person->firstname = $request->input('firstname');
        $person->lastname = $request->input('lastname');
        $person->phone = $request->input('phone');

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/user', $filename);
            $person->image = $filename;
        }
        $person->update();

        return ['status' => 'Profile Updated Successfully'];
    }
    public function refresh()
    {
        $token = auth()->refresh();

        return $token;
    }
}
