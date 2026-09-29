@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm border-0 rounded-4">
            <div class="card-body p-4">
                <h3 class="fw-bold mb-4 text-center" style="color: #2b2d42;">Buat Pengguna Baru</h3>

                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label fw-semibold">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama..." required>
                    </div>

                    <div class="mb-3">
                        <label for="npm" class="form-label fw-semibold">NPM</label>
                        <input type="text" class="form-control" id="npm" name="npm" placeholder="Masukkan NPM..." required>
                    </div>

                    <div class="mb-4">
                        <label for="kelas_id" class="form-label fw-semibold">Kelas</label>
                        <select class="form-select" name="kelas_id" id="kelas_id" required>
                            <option value="" disabled selected>-- Pilih Kelas --</option>
                            @foreach ($kelas as $kelasItem)
                                <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary fw-semibold rounded-3 py-2" style="background-color: #ff8fa3; border: none; color: #2b2d42;">
                            Simpan Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection