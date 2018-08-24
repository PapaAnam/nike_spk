<div class="card">
    <div class="card-header">
        Isikan variabel penggajian
    </div>
    <div class="card-body">
        <form action="{{ route('gaji-baru.store') }}" method="POST">
            @csrf
            <input type="hidden" name="id_user" value="{{ request()->query('karyawan') }}">
            <input type="hidden" name="bulan" value="{{ request()->query('bulan') }}">
            <input type="hidden" name="tahun" value="{{ request()->query('tahun') }}">
            @if($d)
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-info">
                        Diambil berdasarkan bulan lalu
                    </div>
                </div>
                <div class="col-md-4">
                    @include('input',['id'=>'gaji','value'=>$d->gaji,'label'=>'Gaji'])
                </div>
                <div class="col-md-4">
                    @include('input',['id'=>'uang_makan','value'=>$d->uang_makan,'label'=>'Uang Makan'])
                </div>
                <div class="col-md-4">
                    @include('input',['id'=>'rapel_tkpkn','value'=>$d->rapel_tkpkn,'label'=>'Rapel TKPKN'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'rapel_uang_makan','value'=>$d->rapel_uang_makan,'label'=>'Rapel Uang Makan'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'uang_lembur','value'=>$d->uang_lembur,'label'=>'Uang Lembur'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'tunjangan_pokok','value'=>$d->tunjangan_pokok,'label'=>'Tunjangan Pokok'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'tunjangan_tambahan','value'=>$d->tunjangan_tambahan,'label'=>'Tunjangan Tambahan'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'potongan_absensi','value'=>$d->potongan_absensi,'label'=>'Potongan Absensi'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'nett','value'=>$d->nett,'label'=>'Nett'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'rapel_tkpkn_gaji','value'=>$d->rapel_tkpkn_gaji,'label'=>'Rapel TKPKN / Gaji'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'total','value'=>$d->total,'label'=>'Total'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'bri','value'=>$d->bri,'label'=>'BRI'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'emas_qurban','value'=>$d->emas_qurban,'label'=>'Emas / Qurban'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'zakat','value'=>$d->zakat,'label'=>'Zakat'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'infak_dll','value'=>$d->infak_dll,'label'=>'Infak Dll'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'aasuh','value'=>$d->aasuh,'label'=>'Aasuh'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'kas','value'=>$d->kas,'label'=>'Kas'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'pot_satu_persen','value'=>$d->pot_satu_persen,'label'=>'Pot 1%'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'fee_payroll','value'=>$d->fee_payroll,'label'=>'Fee Payroll'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'jumlah_potongan','value'=>$d->jumlah_potongan,'label'=>'Jumlah Potongan'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'jumlah_bersih','value'=>$d->jumlah_bersih,'label'=>'Jumlah Bersih'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'rekening','value'=>$d->rekening,'label'=>'Rekening'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'jabatan','value'=>$d->jabatan,'label'=>'Jabatan'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'seksi_kelompok','value'=>$d->seksi_kelompok,'label'=>'Seksi / Kelompok'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'parameter_tukin','value'=>$d->parameter_tukin,'label'=>'Parameter Tukin'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'pangkat_gol','value'=>$d->pangkat_gol,'label'=>'Pangkat / Gol'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'grade','value'=>$d->grade,'label'=>'Grade'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'bank_bjb','value'=>$d->bank_bjb,'label'=>'Bank BJB'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'kas_kasi','value'=>$d->kas_kasi,'label'=>'Kas Kasi'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'fiskawati','value'=>$d->fiskawati,'label'=>'Fiskawati'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'muslimah','value'=>$d->muslimah,'label'=>'Muslimah'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'kas_seksi','value'=>$d->kas_seksi,'label'=>'Kas Seksi'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'futsal','value'=>$d->futsal,'label'=>'Futsal'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'badminton','value'=>$d->badminton,'label'=>'Badminton'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'qurban','value'=>$d->qurban,'label'=>'Qurban'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'potongan_lain','value'=>$d->potongan_lain,'label'=>'Potongan Lain'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'sabcd','value'=>$d->sabcd,'label'=>'SABCD'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'gjpokok','value'=>$d->gjpokok,'label'=>'Gjpokok'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'tjistri','value'=>$d->tjistri,'label'=>'Tjistri'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'tjanak','value'=>$d->tjanak,'label'=>'Tjanak'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'tjupns','value'=>$d->tjupns,'label'=>'Tjupns'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'tjstruk','value'=>$d->tjstruk,'label'=>'tjstruk'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'tjfungs','value'=>$d->tjfungs,'label'=>'Tjfungs'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'pembul','value'=>$d->pembul,'label'=>'pembul'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'tjberas','value'=>$d->tjberas,'label'=>'Tjberas'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'tjpph','value'=>$d->tjpph,'label'=>'Tjpph'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'potpfk10','value'=>$d->potpfk10,'label'=>'Potpfk10'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'potpph','value'=>$d->potpph,'label'=>'Potpph'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'bersih','value'=>$d->bersih,'label'=>'Bersih'])
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
            @else
            <div class="row">
                <div class="col-md-4">
                    @include('input',['id'=>'gaji','value'=>0,'label'=>'Gaji'])
                </div>
                <div class="col-md-4">
                    @include('input',['id'=>'uang_makan','value'=>0,'label'=>'Uang Makan'])
                </div>
                <div class="col-md-4">
                    @include('input',['id'=>'rapel_tkpkn','value'=>0,'label'=>'Rapel TKPKN'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'rapel_uang_makan','value'=>0,'label'=>'Rapel Uang Makan'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'uang_lembur','value'=>0,'label'=>'Uang Lembur'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'tunjangan_pokok','value'=>0,'label'=>'Tunjangan Pokok'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'tunjangan_tambahan','value'=>0,'label'=>'Tunjangan Tambahan'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'potongan_absensi','value'=>0,'label'=>'Potongan Absensi'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'nett','value'=>0,'label'=>'Nett'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'rapel_tkpkn_gaji','value'=>0,'label'=>'Rapel TKPKN / Gaji'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'total','value'=>0,'label'=>'Total'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'bri','value'=>0,'label'=>'BRI'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'emas_qurban','value'=>0,'label'=>'Emas / Qurban'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'zakat','value'=>0,'label'=>'Zakat'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'infak_dll','value'=>0,'label'=>'Infak Dll'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'aasuh','value'=>0,'label'=>'Aasuh'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'kas','value'=>0,'label'=>'Kas'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'pot_satu_persen','value'=>0,'label'=>'Pot 1%'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'fee_payroll','value'=>0,'label'=>'Fee Payroll'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'jumlah_potongan','value'=>0,'label'=>'Jumlah Potongan'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'jumlah_bersih','value'=>0,'label'=>'Jumlah Bersih'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'rekening','value'=>0,'label'=>'Rekening'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'jabatan','label'=>'Jabatan'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'seksi_kelompok','label'=>'Seksi / Kelompok'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'parameter_tukin','value'=>0,'label'=>'Parameter Tukin'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'pangkat_gol','label'=>'Pangkat / Gol'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'grade','value'=>0,'label'=>'Grade'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'bank_bjb','value'=>0,'label'=>'Bank BJB'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'kas_kasi','value'=>0,'label'=>'Kas Kasi'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'fiskawati','value'=>0,'label'=>'Fiskawati'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'muslimah','value'=>0,'label'=>'Muslimah'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'kas_seksi','value'=>0,'label'=>'Kas Seksi'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'futsal','value'=>0,'label'=>'Futsal'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'badminton','value'=>0,'label'=>'Badminton'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'qurban','value'=>0,'label'=>'Qurban'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'potongan_lain','value'=>0,'label'=>'Potongan Lain'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'sabcd','label'=>'SABCD'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'gjpokok','value'=>0,'label'=>'Gjpokok'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'tjistri','value'=>0,'label'=>'Tjistri'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'tjanak','value'=>0,'label'=>'Tjanak'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'tjupns','value'=>0,'label'=>'Tjupns'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'tjstruk','value'=>0,'label'=>'tjstruk'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'tjfungs','value'=>0,'label'=>'Tjfungs'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'pembul','value'=>0,'label'=>'pembul'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'tjberas','value'=>0,'label'=>'Tjberas'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'tjpph','value'=>0,'label'=>'Tjpph'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'potpfk10','value'=>0,'label'=>'Potpfk10'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'potpph','value'=>0,'label'=>'Potpph'])
                </div>
                <div class="col-md-4">
                    @include('input', ['id'=>'bersih','value'=>0,'label'=>'Bersih'])
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
            @endif
        </form> 
    </div>
</div>