<?php

namespace App\Http\Controllers;

use App\Models\Entity;
use App\Http\Requests\StoreEntityRequest;
use App\Http\Requests\UpdateEntityRequest;
use Illuminate\Http\Client\Request;
use Inertia\Inertia;

class EntityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entities = Entity::all();

        return Inertia::render('Entities/Index', [
            'entities' => $entities
        ]);
    }

    public function create()
    {
        return Inertia::render('Entities/Create');
    }   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'cpf_cnpj' => 'required',
            'rg_ie' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        Entity::create($request->all());

        return redirect()->route('entities.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Entity $entity)
    {
        return Inertia::render('Entities/Show', [
            'entity' => $entity
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Entity $entity)
    {
        return Inertia::render('Entities/Edit', [
            'entity' => $entity
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Entity $entity)
    {
        $request->validate([
            'name' => 'required',
            'cpf_cnpj' => 'required',
            'rg_ie' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        $entity->update($request->all());

        return redirect()->route('entities.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entity $entity)
    {
        $entity->delete();

        return redirect()->route('entities.index');
    }
}
