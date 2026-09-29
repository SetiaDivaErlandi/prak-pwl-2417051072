<div class="table-responsive shadow-sm rounded-4 overflow-hidden">
    <table class="table table-hover align-middle mb-0">
        <thead class="table-dark" style="background-color: #2b2d42;">
            <tr>
                <th scope="col" class="py-3 px-4">ID</th>
                <th scope="col" class="py-3 px-4">Nama</th>
                <th scope="col" class="py-3 px-4">NPM</th>
                <th scope="col" class="py-3 px-4">Kelas</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td class="py-3 px-4 font-monospace">{{ $user->id }}</td>
                    <td class="py-3 px-4 fw-medium text-capitalize">{{ $user->nama }}</td>
                    <td class="py-3 px-4"><span class="badge bg-secondary font-monospace">{{ $user->nim }}</span></td>
                    <td class="py-3 px-4"><span class="badge rounded-pill text-dark" style="background-color: #f8edeb; border: 1px solid #fcd5ce;">{{ $user->nama_kelas }}</span></td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center py-4 text-muted">Belum ada data pengguna.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>