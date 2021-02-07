<?php

namespace App\Http\Controllers\Bot\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\Bot\FoodMenuInterface;

class FoodMenuController extends Controller
{   
    private $repo;

    public function __construct(FoodMenuInterface $repo){

        $this->repo = $repo;
    }

    public function index()
    {
        return $this->repo->all();
        
    }

   
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        return $this->repo->find($id);
    }

  
    public function update(Request $request, $id)
    {
        //
    }

 
    public function destroy($id)
    {
        //
    }

    public function hotels($id){

        return $this->repo->hotels($id);
    }
}
