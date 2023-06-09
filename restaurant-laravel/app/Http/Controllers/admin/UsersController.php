<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::paginate(10);
        return view('admin.users.all', [
            'users' => $users
        ]);
    }
    public function create()
    {
        $roles = Role::all();


        return view('admin.users.create', [
            'roles' => $roles
        ]);
    }
    public function store()
    {
        request()->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role_id' => ['required']
        ]);
        // return request()->all();
        $user = new User();
        $user->fname = request('fname');
        $user->lname = request('lname');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));
        $user->save();
        $user->roles()->attach(request('role_id'));


        return redirect('/admin/users');
    }
    public function edit($id)
    {

        $user = User::find($id);
        $roles = Role::all();
        $selectedRoleId = $user->roles->pluck('id')->toArray()[0];

        return view('admin.users.edit', [
            'user' => $user,
            'roles' => $roles,
            'selectedRoleId' => $selectedRoleId
        ]);
    }
    public function update($id)
    {
        request()->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role_id' => ['required']
        ]);

        $user = User::find($id);
        $user->fname = request('fname');
        $user->lname = request('lname');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));
        $user->save();
        $user->roles()->sync([request('role_id')]);
        return redirect('/admin/users');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/admin/users');
    }
}
