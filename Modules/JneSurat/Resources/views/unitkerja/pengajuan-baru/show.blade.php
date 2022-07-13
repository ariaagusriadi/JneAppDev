@extends('jnesurat::_menu.unitkerja.index')

@section('content')
    <h1>Detail Data Pengajuan Baru</h1>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Pengajuan
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <dt>Nama Pengajuan</dt>
                            <dl>{{ $pengajuan_baru->nama_pengajuan }}</dl>
                        </div>
                        <div class="col">
                            <dt>Keperluan Pengajuan</dt>
                            <dl>{{ $pengajuan_baru->keperluan_pengajuan }}</dl>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <dt>Unit Yang Mengajukan</dt>
                            <dl>{{ $pengajuan_baru->unitkerja->nama_unit }}</dl>
                        </div>
                        <div class="col">
                            <dt>Pegawai Mengajukan</dt>
                            <dl>{{ $pengajuan_baru->pegawai->nama }}</dl>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <dt>Status terakhir</dt>
                            <dl>{{ $pengajuan_baru->getstatus($pengajuan_baru->status) }}</dl>
                        </div>
                    </div>
                    <div class="row">
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>File Pengantar</th>
                                    <th>File Lampiran</th>
                                </tr>
                            </thead>
                            <tbody>
                                <td>
                                    <a href="{{ url($pengajuan_baru->file_pengantar) }}"
                                        class="btn btn-square btn-sm btn-outline-dark btn-rounded" target="blank_">Download
                                        Pengantar</a>
                                </td>
                                <td>
                                    @if ($pengajuan_baru->file_lampiran)
                                        <a href="{{ url($pengajuan_baru->file_lampiran) }}"
                                            class="btn btn-square btn-sm btn-outline-dark btn-rounded"
                                            target="blank_">Download
                                            Lampiran</a>
                                    @endif
                                </td>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-5">
                            @include('utils.backbutton', [
                                'url' => url('jnesurat/unit-kerja/pengajuan-baru'),
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
                            @foreach ($pengajuan_baru->log->sortByDesc('created_at')->values() as $log)
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
                                            class="badge bg-info float-right">{{ $log->getstatus($log->status) }}</span>
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
