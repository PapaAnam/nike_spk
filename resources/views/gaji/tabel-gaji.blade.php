<div class="card-body">
    @if(count($data)>0)
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Pangkat / Gol</th>
                <th>Gaji Bersih</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $d)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $d->karyawan->nip }}</td>
                <td>{{ $d->karyawan->nama }}</td>
                <td>{{ $d->jabatan }}</td>
                <td>{{ $d->pangkat_gol }}</td>
                <td>{{ number_format($d->jumlah_bersih, 0, ',', '.') }}</td>
                <td>
                    <a target="_blank" href="{{ route('slip', [$d->id]) }}" class="btn btn-sm btn-danger">Cetak Slip</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div class="alert alert-danger">
        Tidak ada gaji
    </div>
    @endif
</div>