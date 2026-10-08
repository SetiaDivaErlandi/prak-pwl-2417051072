@extends('layouts.app')

@section('content')
<div style="max-width: 500px; margin: 30px auto; font-family: sans-serif; background: #ffffff; padding: 25px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.06); border: 1px solid #fce7f3;">
    <h2 style="color: #db2777; margin-bottom: 20px;">Tambah Mahasiswa Baru</h2>

    @if ($errors->any())
        <div style="background-color: #fee2e2; color: #991b1b; padding: 10px; border-radius: 6px; margin-bottom: 15px; font-size: 14px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('user.store') }}" method="POST">
        @csrf

        <div style="margin-bottom: 15px;">
            <label style="font-weight: 500; color: #475569; display: block; margin-bottom: 6px;">Nama Mahasiswa</label>
            <input type="text" name="nama" required placeholder="Masukkan nama mahasiswa" style="width: 100%; padding: 10px; border: 1px solid #fbcfe8; border-radius: 8px; box-sizing: border-box; outline: none;">
        </div>

        <div style="margin-bottom: 20px;">
            <label style="font-weight: 500; color: #475569; display: block; margin-bottom: 6px;">NPM / NIM</label>
            <input type="text" name="nim" required placeholder="Contoh: 2417051072" style="width: 100%; padding: 10px; border: 1px solid #fbcfe8; border-radius: 8px; box-sizing: border-box; outline: none;">
        </div>

        <button type="submit" style="background-color: #f472b6; color: white; border: none; padding: 10px 20px; border-radius: 8px; font-weight: 600; cursor: pointer;">Simpan Data</button>
        <a href="/user" style="color: #94a3b8; text-decoration: none; margin-left: 15px; font-size: 14px;">Batal</a>
    </form>
</div>
@endsection