@extends('jnelembur::_menu.kordinator-bidang.index')

@section('content')
    <h1>Detail Laporan Lembur </h1>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail laporan laporan
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <dt>Tanggal Pengajuan</dt>
                            <dl>{{ $laporan->tanggal_pengajuan }}</dl>
                        </div>
                        <div class="col">
                            <dt>Status Pengajuan</dt>
                            <dl>{{ $laporan->status($laporan->status) }}</dl>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <dt>Unit Pengajuan</dt>
                            <dl>{{ $laporan->unitkerja->nama_unit }}</dl>
                        </div>
                    </div>
                    <div class="row">
                        <table class="table table-bordered">
                            <thead class="thead-primary">
                                <tr>
                                    <th>File List Pegawai Yang di perintahkan</th>
                                    <th>File Surat Perintah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <td>
                                    <a href="{{ url($laporan->file_list_terima) }}"
                                        class="btn btn-square btn-sm btn-outline-dark btn-rounded" target="blank_">Download
                                        List Pegawai</a>
                                </td>
                                <td>
                                    <a href="{{ url($laporan->file_perintah) }}"
                                        class="btn btn-square btn-sm btn-outline-dark btn-rounded" target="blank_">Download
                                        Surat Perintah</a>
                                </td>
                            </tbody>
                        </table>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mt-5">
                            @include('utils.backbutton', [
                                'url' => url('jnelembur/kordinator-bidang/pengajuan-lembur-selesai'),
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
                            @foreach ($laporan->loglembur->sortByDesc('created_at')->values() as $log)
                                <li>
                                    <div class="timeline-badge info">
                                    </div>
                                    <a class="timeline-panel text-muted" href="#">
                                        <span>{{ $log->pegawai->nama }} ,
                                            <em>{{ $log->created_at->format('F j, Y, g:i a') }}</em> </span>
                                        <p class="mb-0">
                                            {{ $log->keterangan }}
                                        </p>
                                        <span class="badge bg-info float-right">{{ $log->status($log->status) }}</span>
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
