<?php

namespace App\Http\Controllers\Bot\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\Bot\OrderInterface;

class OrderController extends Controller
{
    private $repo;
    public function __construct(OrderInterface $repo)
    { 
        $this->repo = $repo;
    }
    public function index()
    {
        
    }

    public function store(Request $request)
    {
        
        
        $this->repo->store($request->all());


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
