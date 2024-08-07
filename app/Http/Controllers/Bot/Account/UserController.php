<?php

namespace App\Http\Controllers\Bot\Account;

use App\Http\Controllers\Controller;
use App\Http\Requests\Bot\UserRequest;
use App\Repository\Bot\UserInterface;

class UserController extends Controller
{
    private $repo;

    public function __construct(UserInterface $repo){

        $this->repo = $repo;

    }
    public function index()
    {
        //
    }


    public function store(UserRequest $request)
    {
        
        $user = $this->repo->store($request->validated());
        
        return Response()->json($user,201);
    }

    public function show($telegram_user_id)
    {
        $user = $this->repo->find($telegram_user_id);

        if($user){
            return Response()->json($user,200);
        }
        else{
            return Response()->json([
                'error' =>"the user model not found",
                'code' =>404
            ],404);
        };
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
