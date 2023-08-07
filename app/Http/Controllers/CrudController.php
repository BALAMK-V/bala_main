<?php

namespace App\Http\Controllers;

use App\Models\UserData;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index()
    {
        return view('index', ['userData' => UserData::all()]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:user_data,email',
            'gender' => 'required',
            'phone' => 'required|numeric|unique:user_data,phone',
            'course' => 'required'
        ]);
        UserData::create($request->all());
        return redirect()->route('udata.index')->with('success', 'User data added!');
    }

    public function show($id)
    {
        return view('show', ['userData' => UserData::findOrFail($id)]);
    }

    public function edit($id)
    {
        return view('edit', ['userData' => UserData::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        $userData = UserData::findOrFail($id);
        $request->validate([
            'name' => 'required',
            'email' => "required|email|unique:user_data,email,$id",
            'gender' => 'required',
            'phone' => "required|numeric|unique:user_data,phone,$id",
        ]);
        $userData->update($request->all());
        return redirect()->route('udata.index')->with('success', 'User data updated!');
    }

    public function destroy($id)
    {
        UserData::findOrFail($id)->delete();
        return redirect()->route('udata.index')->with('success', 'User data deleted!');
    }
}
