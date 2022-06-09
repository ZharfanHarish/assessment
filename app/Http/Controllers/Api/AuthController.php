<?php

namespace App\Http\Controllers\Api;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;
use App\Helpers\ApiFormatter;
use Illuminate\Contracts\Validation\Validator;
use Exception;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UserImport;


class AuthController extends Controller
{
    public function index(){
        $user = User::all();

        if($user){
            return ApiFormatter::createApi(200, 'Success', $user);
        }else{
            return ApiFormatter::createApi(400,'Failed to load data');
        }
    }

    public function read(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required',
                'password' => 'required',
            ]);

            if(auth()->attempt($request->all()))
            return response([
                'user' => auth()->user(),
                'access_token' => auth()->user()->createToken('authToken')->accessToken
            ], Response::HTTP_OK);
            else
            return response([
                'message' => 'This User does not exist'
            ], Response::HTTP_UNAUTHORIZED);
            

        } catch (Exception $error) {
            return response([
                'message' => 'The data fill is required'
            ], Response::HTTP_UNAUTHORIZED);
        }
    }

    public function create(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            $data = User::where('id','=',$user->id)->get();

            if($data)
                return response($user, Response::HTTP_CREATED);
            else
                return response([
                    'message' => 'The data fill is required'
                ]);
            

        } catch (Exception $error) {
            return response([
                'message' => 'The data fill is required'
            ]);
        }
    }    

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
            ]);

            $user = User::FindOrFail($id);

            $user->update([
                'name' => $request->name,
                'email' => $request->email
            ]);

            $data = user::where('id','=',$user->id)->get();

            if($data)
                return ApiFormatter::createApi(200, 'Update Successfully', $data);
            else
                return ApiFormatter::createApi(400,'Update Failed');
            

        } catch (Exception $error) {
            return response([
                'message' => 'The data fill is required'
             ]);
        }
    }

    public function delete($id)
    {
        try {
            $user = User::FindOrFail($id);

            $data = $user->delete();

            if($data)
                return ApiFormatter::createApi(200, 'Success Deleted data');
            else
                return ApiFormatter::createApi(400,'Failed');
        } catch (Exception $error) {
            return response([
                'message' => 'Invalid ID'
             ]);
        }
    }
    

    public function upload(Request $request)
    {
        try{
            Excel::import(new UserImport, $request->file('file')->store('files'));

            return response([
                'message' => 'The data in excel successfully uploaded to database'
            ]);
        }
        catch(Exception $error){
            return response([
                'message' => 'Failed to upload excel'
            ]);
        }
    }
}
