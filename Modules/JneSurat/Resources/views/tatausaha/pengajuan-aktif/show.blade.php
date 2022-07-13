@extends('jnesurat::_menu.tatausaha.index')

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
                            <dl>{{ $pengajuan_aktif->nama_pengajuan }}</dl>
                        </div>
                        <div class="col">
                            <dt>Keperluan Pengajuan</dt>
                            <dl>{{ $pengajuan_aktif->keperluan_pengajuan }}</dl>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <dt>Unit Yang Mengajukan</dt>
                            <dl>{{ $pengajuan_aktif->unitkerja->nama_unit }}</dl>
                        </div>
                        <div class="col">
                            <dt>Pegawai Mengajukan</dt>
                            <dl>{{ $pengajuan_aktif->pegawai->nama }}</dl>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <dt>Nomor Surat</dt>
                            <dl>{{ $pengajuan_aktif->nomor_surat }}</dl>
                        </div>
                        <div class="col">
                            <dt>Tanggal Surat</dt>
                            <dl>{{ $pengajuan_aktif->tanggal_surat }}</dl>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <dt>Status terakhir</dt>
                            <dl>{{ $pengajuan_aktif->getstatus($pengajuan_aktif->status) }}</dl>
                        </div>
                        <div class="col">
                            <dt>Keterangan terakhir</dt>
                            <dl> {{ $pengajuan_aktif->keterangan_surat }}</dl>
                        </div>
                    </div>
                    <div class="row">
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>File Pengantar</th>
                                    <th>File Lampiran</th>
                                    <th>File Draft Surat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <td>
                                    <a href="{{ url($pengajuan_aktif->file_pengantar) }}"
                                        class="btn btn-square btn-sm btn-outline-dark btn-rounded" target="blank_">Download
                                        Pengantar</a>
                                </td>
                                <td>
                                    @if ($pengajuan_aktif->file_lampiran)
                                        <a href="{{ url($pengajuan_aktif->file_lampiran) }}"
                                            class="btn btn-square btn-sm btn-outline-dark btn-rounded"
                                            target="blank_">Download Lampiran</a>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url($pengajuan_aktif->draft_surat) }}"
                                        class="btn btn-square btn-sm btn-outline-dark btn-rounded" target="blank_">Download
                                        Draft Surat</a>
                                </td>
                            </tbody>
                        </table>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mt-5">
                            @include('utils.backbutton', [
                                'url' => url('jnesurat/tata-usaha/pengajuan-aktif'),
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
                            @foreach ($pengajuan_aktif->log->sortByDesc('created_at')->values() as $log)
                                <li>
                                    <div class="timeline-badge info">
                                    </div>
                                    <a class="timeline-panel text-muted" href="#">
                                        <span>{{ $log->pegawai->nama }} ,
                                            <em>{{ $log->created_at->format('F j, Y, g:i a') }}</em> </span>
                                        <p class="mb-0">
                                            @if ($log->status == '201')
                                                {{ $pengajuan_aktif->keterangan_surat }},
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
