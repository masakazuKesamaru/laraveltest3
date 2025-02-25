<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/members', function () {
    $members = DB::table('members')->get();
    return view('members.index', ['members' => $members]);
})->name('members');

Route::get('/members/{id}', function ($id) {
    // 'user' => User::findOrFail($id)
    $items = DB::select('SELECT * from members where id =:id', ['id'=>$id]);

    $member_name = $items[0]->name;
    return view('members.show', ['id' => $id, 'name' => $member_name]);
})->name('members.show');

