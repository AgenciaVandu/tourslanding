<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function send(Request $request){

        /* return $request->all(); */
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'country' => 'required',
            'language' => 'required',
            'email' => 'required|unique:tours,email',
            'phone' => 'required',
            'emergency_name' => 'required',
            'relationship' => 'required',
            'menu_type' => 'required',
            'allergies' => 'required',
        ]);

        if ($request->contact_me == 'on') {
            $contact_me = 1;
        }

        Tour::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'country' => $request->country,
            'language' => $request->language,
            'email' => $request->email,
            'phone' => $request->phone,
            'emergency_name' => $request->emergency_name,
            'relationship' => $request->relationship,
            'menu_type' => $request->menu_type,
            'allergies' => $request->allergies,
            'contact_me' => $contact_me,
            'tour_route' => $request->tour_route,
        ]);

        session(['register'=>'true']);
        $request->session()->flash('success', 'Tu registro se ha realizado con éxito');

        return back();
    }
}