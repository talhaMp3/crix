<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Image;

use App\Models\player_registrations;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

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




    public function store(Request $request)
    {
        $request->validate([
            'player_name' => 'required|string|max:255',
            'mobile_number' => 'required|string|max:20',
            'address' => 'required|string|max:500',
            'player_photo' => 'required|image|mimes:jpeg,png,jpg|max:10048',
            'tshirt_size' => 'required|string|in:S,M,L,XL,other',
            'cricket_skill' => 'required|string|in:Left Hand Batsman,Right Hand Batsman,Right Hand Bowler,Left Hand Bowler,Right Hand All Rounder,Left Hand All Rounder,Wicket Keeper',
            'tid' => 'required|max:500|unique:player_registrations,tid',
        ]);

        $playerPhotoPath = null;

        if ($request->hasFile('player_photo')) {
            $image = $request->file('player_photo');
            $filename = time() . '.webp';

            // Ensure the player_photos directory exists
            $directory = public_path('player_photos');
            if (!file_exists($directory)) {
                mkdir($directory, 0755, true);
            }

            // Create a new ImageManager instance with the GD driver
            $manager = new ImageManager(new Driver());

            // Resize, compress, and save as WebP
            try {
                $img = $manager->read($image);
                $img->resize(300, 300, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $img->toWebp(80)->save($directory . '/' . $filename);

                $playerPhotoPath =  $filename;
            } catch (\Exception $e) {
                // Log the error
                \Log::error('Image processing failed: ' . $e->getMessage());
                return back()->with('error', 'Failed to process the image. Please try again.');
            }
        }

        // Create new player registration
        $registration = new player_registrations();
        $registration->player_name = $request->player_name;
        $registration->tid = $request->tid;
        $registration->mobile_number = $request->mobile_number;
        $registration->address = $request->address;
        $registration->player_photo = $playerPhotoPath;
        $registration->tshirt_size = $request->tshirt_size;
      
        $registration->cricket_skill = $request->cricket_skill;

        $registration->save();

        return redirect()->route('registration.success')->with('message', 'Registration successful!');

    }



    public function updatePaymentStatus(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:player_registrations,id',
            'payment_status' => 'required|in:pending,complete,incomplete',
        ]);

        $player = player_registrations::find($request->id);
        $player->payment_status = $request->payment_status;
        $player->save();

        return response()->json(['success' => true]);
    }


    function success() {
        return view('success');
    }
    function export() {
        $regData = player_registrations::all();
        return view('export',compact('regData'));
    }

    public function destroy(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:player_registrations,id', // Validate that the ID exists
        ]);

        $player = player_registrations::find($request->id);

        // Check if player exists
        if ($player) {
            // Delete the player photo from the directory (if it exists)
            if ($player->player_photo && file_exists(public_path('player_photos/' . $player->player_photo))) {
                unlink(public_path('player_photos/' . $player->player_photo));  // Delete the photo file
            }

            // Delete the player registration record from the database
            $player->delete();

            return response()->json(['success' => true, 'message' => 'Player deleted successfully']);
        }

        return response()->json(['success' => false, 'message' => 'Player not found']);
    }

}
