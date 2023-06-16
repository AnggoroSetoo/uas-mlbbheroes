<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $users = User::all();
        
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
        ]);
    
        User::create($validatedData);
    
        return redirect('/users')->with('success', 'User added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user): View
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user): View
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required|in:' . implode(',', [User::ROLE_ADMIN, User::ROLE_USER])
        ]);
    
        $user->role = $validatedData['role'];
        $user->save();
    
        return redirect('/users')->with('success', 'User updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
    
        return redirect('/users')->with('success', 'User deleted successfully!');
    }
}
