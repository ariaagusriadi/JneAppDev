@extends('jnesurat::_menu.tatausaha.index')

@section('content')
    <h1>Detail Data Riwayat pengajuan</h1>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Riwayat pengajuan
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <dt>Nama Pengajuan</dt>
                            <dl>{{ $riwayat_pengajuan->nama_pengajuan }}</dl>
                        </div>
                        <div class="col">
                            <dt>Keperluan Pengajuan</dt>
                            <dl>{{ $riwayat_pengajuan->keperluan_pengajuan }}</dl>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <dt>Unit Yang Mengajukan</dt>
                            <dl>{{ $riwayat_pengajuan->unitkerja->nama_unit }}</dl>
                        </div>
                        <div class="col">
                            <dt>Pegawai Mengajukan</dt>
                            <dl>{{ $riwayat_pengajuan->pegawai->nama }}</dl>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <dt>Status terakhir</dt>
                            <dl>{{ $riwayat_pengajuan->getstatus($riwayat_pengajuan->status) }}</dl>
                        </div>
                        <div class="col">
                            <dt>Keterangan terakhir</dt>
                            <dl> {{ $riwayat_pengajuan->keterangan_surat_ceo }}</dl>
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
                                    <a href="{{ url($riwayat_pengajuan->file_pengantar) }}"
                                        class="btn btn-square btn-sm btn-outline-dark btn-rounded" target="blank_">Download
                                        Pengantar</a>
                                </td>
                                <td>
                                    @if ($riwayat_pengajuan->file_lampiran)
                                        <a href="{{ url($riwayat_pengajuan->file_lampiran) }}"
                                            class="btn btn-square btn-sm btn-outline-dark btn-rounded"
                                            target="blank_">Download
                                            Lampiran</a>
                                    @endif
                                </td>
                            </tbody>
                        </table>
                    </div>
                    @if ($riwayat_pengajuan->file_surat_pdf)
                        <div class="row">
                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>File Dokumen Surat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <td class="text-center">
                                        <a href="{{ url($riwayat_pengajuan->file_surat_pdf) }}"
                                            class="btn btn-square btn-sm btn-outline-primary btn-rounded"
                                            target="blank_">Download
                                            Dokumen Surat</a>
                                    </td>
                                </tbody>
                            </table>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-12 mt-5">
                            @include('utils.backbutton', [
                                'url' => url('jnesurat/tata-usaha/riwayat-pengajuan'),
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
                            @foreach ($riwayat_pengajuan->log->sortByDesc('created_at')->values() as $log)
                                <li>
                                    <div class="timeline-badge info">
                                    </div>
                                    <a class="timeline-panel text-muted" href="#">
                                        <span>{{ $log->pegawai->nama }} ,
                                            <em>{{ $log->created_at->format('F j, Y, g:i a') }}</em> </span>
                                        <p class="mb-0">
                                            @if ($log->status == '201')
                                                {{ $riwayat_pengajuan->keterangan_surat }},
                                            @endif
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
