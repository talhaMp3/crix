<?php

namespace App\Http\Controllers;

use App\Models\player_registrations;
use Illuminate\Http\Request;

class PlayerRegistrationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        // dd('done');
        $request->validate([
            'player_name' => 'required|string|max:255',
            'mobile_number' => 'required|string|max:20',
            'address' => 'required|string|max:500',
            'player_photo' => 'required|image|mimes:jpeg,png,jpg|max:10048',
            'tshirt_size' => 'required|string|in:S,M,L,XL,other',
            'custom_tshirt_size' => 'required_if:tshirt_size,other|nullable|string|max:50',
            'cricket_skill' => 'required|string|in:Left Hand Batsman,Right Hand Batsman,Right Hand Bowler,Left Hand Bowler,Right Hand All Rounder,Left Hand All Rounder,Wicket Keeper',
            'tid' => 'required|max:500|unique:player_registrations,tid',
        ]);

        // Handle file uploads
        $playerPhotoPath = $request->file('player_photo')->store('player_photos', 'public');

        // Create new player registration
        $registration = new player_registrations();
        $registration->player_name = $request->player_name;
        $registration->tid = $request->tid;
        $registration->mobile_number = $request->mobile_number;
        $registration->address = $request->address;
        $registration->player_photo = $playerPhotoPath;
        $registration->tshirt_size = $request->tshirt_size;
        $registration->custom_tshirt_size = $request->custom_tshirt_size;
        $registration->cricket_skill = $request->cricket_skill;


        $registration->save();

        // Redirect to success page
        // return redirect()->route('registration.success')->with('message', 'Registration successful!');
        // return back()->with('message', 'Registration successful!');
    }

    /**
     * Display the specified resource.
     */
    public function show(player_registrations $player_registrations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(player_registrations $player_registrations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, player_registrations $player_registrations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(player_registrations $player_registrations)
    {
        //
    }
    function success() {
        return view('success');
    }
}
