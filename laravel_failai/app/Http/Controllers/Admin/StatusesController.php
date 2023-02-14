<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StatusRequest;
use App\Models\Status;

class StatusesController extends Controller
{
    public function index()
    {
        $statuses = Status::all();
        return view('statuses.index', ['statuses' => $statuses]);
    }

    public function create()
    {
        return view('statuses.create');
    }

    public function store(StatusRequest $request)
    {
        $status = Status::create($request->all());
        return redirect()->route('statuses.show', $status);
    }

    public function show(Status $status)
    {
        return view('statuses.show', ['statuses' => $status]);
    }

    public function edit(Status $status)
    {
        return view('statuses.edit', compact('status'));
    }

    public function update(StatusRequest $request, Status $status)
    {
        $status->update($request->all());
        return redirect()->route('statuses.show', $status);
    }

    public function destroy(Status $status)
    {
        $status->delete();
        return redirect()->route('statuses.index');
    }
}

