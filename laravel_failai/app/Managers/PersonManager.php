<?php

namespace App\Managers;

use App\Models\User;
use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonManager
{
public function createPerson(Request $request): Person
{
DB::beginTransaction();

//exemple it can be done
//    $user = User::create([
//        'name' => $request->get('name'),
//        'email' => $request->get('email'),
//        'password' => Hash::make(Str::random(8)),   // random password
//    ]);
//
//    $personArray = $request->all() + ['user_id' => $user->id];
//
//    $person = PersonRequest::create($personArray);

DB::commit();
return $person;
}
}
