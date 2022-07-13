@extends('jnelembur::_menu.kordinator-bidang.index')

@section('content')
    <h1>Pengajuan Lembur baru</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Formulir Lembur Baru
                </div>
                <div class="card-body">
                    <form action="{{ url('jnelembur/kordinator-bidang/pengajuan-lembur-baru') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <h3 class="text-center mb-5">FORMULIR PENGAJUAN LEMBUR JNE CABANG KETAPANG</h3>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="control-label mt-3">NAMA</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="" readonly
                                        value="{{ auth()->user()->nama }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="control-label mt-3">DEVISI</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="" readonly
                                        value="{{ auth()->user()->unitkerja->nama_unit }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="control-label mt-3">JABATAN</label>
                                @include('utils.errors', ['item' => 'jabatan'])
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" class="form-control  @error('jabatan') is-invalid @enderror"
                                        name="jabatan">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="control-label mt-3">TANGGAL PENGAJUAN</label>
                                @include('utils.errors', [
                                    'item' => 'tanggal_pengajuan',
                                ])
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="date"
                                        class="form-control  @error('tanggal_pengajuan') is-invalid @enderror"
                                        name="tanggal_pengajuan">
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 mb-3">
                            <strong class="mt-3">Dengan ini mengajukan kebutuhan lembur dengan rincian
                                sebagai
                                berikut:</strong>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="control-label mt-3">Hari</label>
                                @include('utils.errors', ['item' => 'hari_lembur'])
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" class="form-control  @error('hari_lembur') is-invalid @enderror"
                                        name="hari_lembur">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="control-label mt-3">TANGGAL</label>
                                @include('utils.errors', ['item' => 'tanggal_lembur'])
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="date"
                                        class="form-control  @error('tanggal_lembur') is-invalid @enderror"
                                        name="tanggal_lembur">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="control-label mt-3">JAM</label>
                            </div>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <input
                                                type="time"class="form-control  @error('jam_mulai_lembur') is-invalid @enderror"
                                                name="jam_mulai_lembur">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="time"
                                                class="form-control  @error('jam_selesai_lembur') is-invalid @enderror"
                                                name="jam_selesai_lembur">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="control-label mt-3">JUMLAH ORANG</label>
                                @include('utils.errors', ['item' => 'jumlah_orang_lembur'])
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text"
                                        class="form-control  @error('jumlah_orang_lembur') is-invalid @enderror"
                                        name="jumlah_orang_lembur">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="control-label mt-3">LOKASI KANTOR</label>
                                @include('utils.errors', [
                                    'item' => 'lokasi_kantor_lembur',
                                ])
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text"
                                        class="form-control  @error('lokasi_kantor_lembur') is-invalid @enderror"
                                        name="lokasi_kantor_lembur">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="control-label mt-3">LEMBUR PADA</label>
                                @include('utils.errors', ['item' => 'lembur_pada_hari'])
                            </div>
                            <div class="col-md-9">
                                <select
                                    class="form-control default-select  @error('lembur_pada_hari') is-invalid @enderror"
                                    name="lembur_pada_hari">
                                    <option value="">Pilih Hari Lembur</option>
                                    <option value="hari kerja">HARI KERJA</option>
                                    <option value="hari libur">HARI LIBUR</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="control-label mt-3">URAIAN ALASAN LEMBUR
                                        :</label>
                                    @include('utils.errors', ['item' => 'alasan_lembur'])
                                    <textarea name="alasan_lembur" id="" cols="30" rows="10"
                                        class="form-control @error('alasan_lembur') is-invalid @enderror"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="control-label mt-2">FILE LIST KARYAWAN
                                    LEMBUR</label>
                                @include('utils.errors', ['item' => 'file_list_karyawan'])
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="file"
                                        class="custom-file-input  @error('file_list_karayawam') is-invalid @enderror"
                                        name="file_list_karyawan" accept=".pdf , .docx , .doc , .xlsx">
                                    <label class="custom-file-label">Choose file</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary float-right"><i class="fa fa-save"></i> Save</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    @include('utils.backbutton', ['url' => url('jnelembur/kordinator-bidang/pengajuan-lembur-baru')])
                </div>
            </div>

        </div>
    </div>
@endsection
