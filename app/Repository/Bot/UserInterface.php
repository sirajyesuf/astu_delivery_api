<?php
namespace App\Repository\Bot;

interface UserInterface{

    public function store($data);
    public function find($telegram_user_id);
    
}