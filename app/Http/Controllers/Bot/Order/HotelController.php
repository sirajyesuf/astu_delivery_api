<?php

namespace App\Http\Controllers\Bot\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\Bot\HotelInterface;

class HotelController extends Controller
{
    private $repo;
    public function __construct(HotelInterface $repo){

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
        //
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
