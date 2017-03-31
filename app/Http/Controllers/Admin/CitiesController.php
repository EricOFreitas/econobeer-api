<?php

namespace App\Http\Controllers\Admin;

use App\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Forms\CityForm;

class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::paginate(10);
        return view('admin.cidades.index', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $form = \FormBuilder::create(CityForm::class, [
            'method' => 'POST',
            'url' => route('admin.cidades.store')
        ]);
        $title = "Nova cidade";
        return view('admin.cidades.save', compact('form', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(CityForm::class);
        City::create($form->getFieldValues());
        return redirect()->route('admin.cidades.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {
        $form = \FormBuilder::create(CityForm::class, [
            'method' => 'PUT',
            'url' => route('admin.cidades.update', ['id' => $city->id]),
            'model' => $city
        ]);
        $title = "Editar cidade";
        return view('admin.cidades.save', compact('form', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(FormBuilder $formBuilder, City $city)
    {
        $form = $formBuilder->create(CityForm::class);
        $city->fill($form->getFieldValues());
        $city->save();
        return redirect()->route('admin.cidades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        $city->delete();
        return redirect()->route('admin.cidades.index');
    }
}
