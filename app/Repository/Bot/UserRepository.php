<?php
namespace App\Repository\Bot;
use App\Repository\Bot\UserInterface;
use App\Models\User;
class UserRepository implements UserInterface{

    public function store($data){

        return User::create($data);

    }
    public function find($telegram_user_id){

        return User::where('telegram_user_id',$telegram_user_id)->first();
    
    }



}