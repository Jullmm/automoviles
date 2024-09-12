<?php

namespace App\Http\Controllers;

use App\Models\Automovil;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AutomovilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $automoviles = Automovil::all(); 
        return view('index', compact('automoviles')); 
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $client = new Client();
        $response = $client->get('http://webservices.oorsprong.org/websamples.countryinfo/CountryInfoService.wso/ListOfCountryNamesByCode/JSON/debug');
        
        $data = json_decode($response->getBody()->getContents(), true);
        $countries = array_map(function($country) {
            return $country['sName'];
        }, $data);
        
        return view('create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Automovil::create($request->all());
        return redirect()->route('automoviles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $automovil = Automovil::findOrFail($id);
        return view('show', compact('automovil'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $automovil = Automovil::findOrFail($id);
        return view('edit', compact('automovil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $automovil = Automovil::findOrFail($id);
        $automovil->update($request->all());
        return redirect()->route('automoviles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Automovil::destroy($id);
        return redirect()->route('automoviles.index');
    }
}
