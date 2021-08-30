<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reservations= Reservation::all();
        return view('reservation.index',
    [
        'reservations'=>$reservations,
        'resource'=>'réservations',
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('update');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'representation_id' => 'required',
            'user_id' => 'required',
            'places' => 'required',
        ]);
    
        $reservation = Reservation::create($validatedData);
    
        return redirect('/reservation')->with('success', 'Réservation créée avec succèss');
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
        $reservation= Reservation::find($id);
        return view('reservation.show', [
            'reservation'=>$reservation,
           
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $reservation= Reservation::find($id);
        return view('reservation.edit', [
            'reservation'=>$reservation,
        ]);
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
         //Validation des données du formulaire
         $validated = $request->validate([
            'representation_id' => 'required',
            'user-id' => 'required',
            'places'=>'required',
        ]);

	   //Le formulaire a été validé, nous récupérons l’reservatione à modifier
        $reservation = Reservation::find($id);

	   //Mise à jour des données modifiées et sauvegarde dans la base de données
        $reservation->update($validated);

        return view('reservation.show',[
            'reservation' => $reservation,
        ]);
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
        $reservation=Reservation::find($id);
        $reservation->delete();
        
 
         return redirect('/reservation')->with('success','La reservation a bien été supprimée.');

    }
}
