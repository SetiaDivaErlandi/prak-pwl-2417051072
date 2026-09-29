@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-bold m-0" style="color: #2b2d42;">Daftar Pengguna</h2>
                <small class="text-muted">Data mahasiswa yang terdaftar di sistem</small>
            </div>
            <a href="{{ route('user.create') }}" class="btn btn-dark shadow-sm px-4 rounded-pill" style="background-color: #ff8fa3; border: none; color: #2b2d42; font-weight: 600;">
                + Tambah User Baru
            </a>
        </div>

        <!-- Panggil Komponen Tabel -->
        @include('components.user-table', ['users' => $users])
    </div>
</div>
@endsection