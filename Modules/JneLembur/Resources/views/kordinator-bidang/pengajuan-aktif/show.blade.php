@extends('jnelembur::_menu.kordinator-bidang.index')

@section('content')
    <h1>Detail Pengajuan Lembur aktif</h1>

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
                            <dl>{{ $lembur->tanggal_pengajuan }}</dl>
                        </div>
                        <div class="col">
                            <dt>Status Pengajuan</dt>
                            <dl>{{ $lembur->status($lembur->status) }}</dl>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <dt>Unit Pengajuan</dt>
                            <dl>{{ $lembur->unitkerja->nama_unit }}</dl>
                        </div>
                    </div>
                    <div class="row">
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>File List Pegawai Yang di perintahkan</th>
                                    <th>File Surat Perintah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <td>
                                    <a href="{{ url($lembur->file_list_terima) }}"
                                        class="btn btn-square btn-sm btn-outline-dark btn-rounded" target="blank_">Download
                                        List Pegawai</a>
                                </td>
                                <td>
                                    <a href="{{ url($lembur->file_formulir_jr) }}"
                                        class="btn btn-square btn-sm btn-outline-dark btn-rounded" target="blank_">Download
                                        Surat Perintah</a>
                                </td>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <hr>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ url('jnelembur/kordinator-bidang/pengajuan-lembur-aktif', $lembur->id)  }}" method="post">
                                @csrf
                                @method('put')
                                <button class="btn btn-danger ml-3" onclick="return confirm('menandatangi dan melaporkan lembur ke hrd')">TANDA TANGANI DAN LAPORKAN LEMBUR KE HRD</button>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-5">
                            @include('utils.backbutton', [
                                'url' => url('jnelembur/kordinator-bidang/pengajuan-lembur-akif'),
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
                            @foreach ($lembur->loglembur->sortByDesc('created_at')->values() as $log)
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
