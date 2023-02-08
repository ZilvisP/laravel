<?php

namespace App\Http\Controllers;
use App\Http\Requests\PersonRequest;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonsController extends Controller
{
    public function index()
    {
        $persons = Person::all();
        return view('persons.index', ['personos'=> $persons]);
    }

    public function create()
    {
        return view('persons.create');
    }

    public function store(PersonRequest $request)
    {
        $persons = Person::create($request->all());
        return redirect()->route('persons.show', $persons);

    }

    public function show(Person $person)
    {
        return view('persons.show', ['person' => $person]);
    }

    public function edit(Person $person)
    {
        return view('persons.edit', compact('person'));
    }

    public function update(PersonRequest $request, Person $person)
    {
        $person->update($request->all());
        return redirect()->route('persons.show', $person);
    }

    public function destroy(Person $person)
    {
        $person->delete();
        return redirect()->route('persons.index');
    }
}
