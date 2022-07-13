@extends('jnelembur::_menu.kordinator-bidang.index')

@section('content')
    <h1>Detail Pengajuan Lembur baru</h1>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Pengajuan
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <dt>Tanggal Pengajuan</dt>
                            <dl>{{ $pengajuan_lembur_baru->tanggal_pengajuan }}</dl>
                        </div>
                        <div class="col">
                            <dt>Status Pengajuan</dt>
                            <dl>{{ $pengajuan_lembur_baru->status($pengajuan_lembur_baru->status) }}</dl>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <dt>Unit Pengajuan</dt>
                            <dl>{{ $pengajuan_lembur_baru->unitkerja->nama_unit }}</dl>
                        </div>
                    </div>
                    <div class="row">
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>File List Pegawai</th>
                                    <th>File Formulir</th>
                                </tr>
                            </thead>
                            <tbody>
                                <td>
                                    <a href="{{ url($pengajuan_lembur_baru->file_list_karyawan) }}"
                                        class="btn btn-square btn-sm btn-outline-dark btn-rounded" target="blank_">Download
                                        List Pegawai</a>
                                </td>
                                <td>
                                    <a href="{{ url($pengajuan_lembur_baru->file_formulir) }}"
                                        class="btn btn-square btn-sm btn-outline-dark btn-rounded" target="blank_">Download
                                        Formulir</a>
                                </td>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-5">
                            @include('utils.backbutton', [
                                'url' => url('jnelembur/kordinator-bidang/pengajuan-lembur-baru'),
                            ])
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Log
                </div>
                <div class="card-body">
                    <div id="DZ_W_TimeLine1" class="widget-timeline dz-scroll style-1 height370">
                        <ul class="timeline">
                            @foreach ($pengajuan_lembur_baru->loglembur->sortByDesc('created_at')->values() as $log)
                                <li>
                                    <div class="timeline-badge info">
                                    </div>
                                    <a class="timeline-panel text-muted" href="#">
                                        <span>{{ $log->pegawai->nama }} ,
                                            <em>{{ $log->created_at->format('F j, Y, g:i a') }}</em> </span>
                                        <p class="mb-0">
                                            {{ $log->keterangan }}
                                        </p>
                                        <span
                                            class="badge bg-info float-right">{{ $log->status($log->status) }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
