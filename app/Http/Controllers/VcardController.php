<?php

namespace App\Http\Controllers;

use App\Models\Vcard;
use Illuminate\Http\Request;
use Auth;

class VcardController extends Controller
{
  
  
    public function store(Request $req)
    {
        $name = $req->name;
        $contact = $req->contact;

        $vc = new Vcard();
        $vc->name = $name;
        $vc->contact = $contact;
        $vc->user_id = Auth::id();
        $vc->save();

        return redirect()->back()->with("msg","data inserted successfully");

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vcard  $vcard
     * @return \Illuminate\Http\Response
     */
    public function show(Vcard $vcard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vcard  $vcard
     * @return \Illuminate\Http\Response
     */
    public function edit(Vcard $vcard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vcard  $vcard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vcard $vcard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vcard  $vcard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vcard $vcard)
    {
        //
    }
}