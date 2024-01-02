<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Post;
use App\Models\Tour;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $message = "";
        $tours = Tour::all();
        return view('welcome', ['tours' => $tours, 'message' => $message]); //View::
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'telephone' => 'required|string',
            'pip' => 'required|string',
            'email' => 'required|string',
            'tour_id' => 'required|numeric',
            'count_day' => 'required|numeric',
            'price' => 'required|string',
        ]);
        $tour = Tour::find($data['tour_id']);
        $message = "";
        $isMessageError = false;
        if ($tour != null) {
            Order::create($data);
            $message = "The tour {$tour['name']} has been successfully ordered";
        } else {
            $message = "The tour with id {$data['tour_id']} does not exist";
            $isMessageError = true;
        }
        $tours = Tour::all();
        return view('welcome', ['tours' => $tours, 'message' => $message, 'isMessageError' => $isMessageError]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function showCategory() {
        return view('welcome.category', ['categories' => Category::all()]);
    }

    public function showPost() {
        return view('welcome.post', ['posts' => Post::all()]);
    }
}
