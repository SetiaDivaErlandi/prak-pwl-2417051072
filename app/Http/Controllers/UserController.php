<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class UserController extends Controller
{
    public function index()
    {
        $users = UserModel::all();
        return view('list_user', [
            'title' => 'Daftar Pengguna',
            'users' => $users
        ]);
    }

    public function create()
    {
        return view('create_user', [
            'title' => 'Tambah Mahasiswa'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim'  => 'required',
        ]);

        UserModel::create([
            'nama' => $request->input('nama'),
            'nim'  => $request->input('nim'),
        ]);

        return redirect()->to('/user')->with('success', 'Data mahasiswa berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $user = UserModel::findOrFail($id);
        return view('edit_user', [
            'title' => 'Edit Pengguna',
            'user'  => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'nim'  => 'required',
        ]);

        $user = UserModel::findOrFail($id);
        $user->update([
            'nama' => $request->input('nama'),
            'nim'  => $request->input('nim'),
        ]);

        return redirect()->to('/user')->with('success', 'Data mahasiswa berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $user = UserModel::findOrFail($id);
        $user->delete();

        return redirect()->to('/user')->with('success', 'Data mahasiswa berhasil dihapus!');
    }
}