@extends('layouts.app')

@section('content')
<div style="max-width: 900px; margin: 30px auto; font-family: sans-serif;">
    <h2 style="color: #831843; font-weight: 700; margin-bottom: 15px;">Daftar Mahasiswa</h2>

    @if (session('success'))
        <div style="background-color: #fdf2f8; border-left: 5px solid #ec4899; color: #9d174d; padding: 12px 18px; border-radius: 6px; margin-bottom: 20px; font-weight: 500;">
            ✓ {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('user.create') }}" style="background-color: #f472b6; color: white; padding: 8px 16px; border-radius: 6px; text-decoration: none; font-size: 13px; font-weight: 600; display: inline-block; margin-bottom: 15px;">+ Tambah Mahasiswa</a>

    <table style="width: 100%; border-collapse: collapse; background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.04);">
        <thead>
            <tr style="background-color: #fce7f3; color: #831843; text-align: left;">
                <th style="padding: 14px;">ID (UUID)</th>
                <th style="padding: 14px;">Nama</th>
                <th style="padding: 14px;">NPM / NIM</th>
                <th style="padding: 14px; text-align: center;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
            <tr style="border-bottom: 1px solid #fbcfe8;">
                <td style="padding: 12px 14px; font-size: 13px; color: #64748b;">{{ $user->id }}</td>
                <td style="padding: 12px 14px; font-weight: 500;">{{ $user->nama }}</td>
                <td style="padding: 12px 14px;">{{ $user->nim }}</td>
                <td style="padding: 12px 14px; text-align: center;">
                    <a href="{{ route('user.edit', $user->id) }}" style="background-color: #f472b6; color: white; padding: 6px 14px; border-radius: 6px; text-decoration: none; font-size: 13px; font-weight: 600; margin-right: 6px; display: inline-block;">Edit</a>

                    <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" style="background-color: #fda4af; color: #881337; border: none; padding: 6px 14px; border-radius: 6px; font-size: 13px; font-weight: 600; cursor: pointer;">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" style="text-align: center; padding: 20px; color: #94a3b8;">Belum ada data mahasiswa.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection