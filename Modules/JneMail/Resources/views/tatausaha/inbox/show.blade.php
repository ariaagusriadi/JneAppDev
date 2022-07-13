@extends('jnemail::_menu.tatausaha.index')


@section('content')
    <h1>Detail Data Pengiriman Surat</h1>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Pengiriman
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <dt>Nama Pengirim</dt>
                            <dd>{{ $inbox->pegawai->nama }}</dd>
                        </div>
                        <div class="col-md-6">
                            <dt>Unit Pengirim</dt>
                            <dd>{{ $inbox->unitkerja->nama_unit }}</dd>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <dt>Tujuan Pengiriman</dt>
                            <dd>{{ $inbox->tujuan }}</dd>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <dt>subject</dt>
                            <dd>
                                <p> {!! nl2br($inbox->subject) !!}</p>
                            </dd>
                        </div>
                    </div>
                    <div class="row">
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="text-center">File Surat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <td class="text-center">
                                    <a href="{{ url($inbox->file_surat) }}"
                                        class="btn btn-square btn-outline-dark btn-rounded" target="blank_">Download
                                        Surat</a>
                                </td>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <hr>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ url('jnemail/tata-usaha/inbox', $inbox->id) }}" method="post">
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <h5>Distribusikan Surat Ke</h5>
                                    @include('utils.errors', ['item' => 'status'])
                                    <select class="form-control default-select  @error('status') is-invalid @enderror" name="status">
                                        <option value="">Pilih Unit Tujuan</option>
                                        <option value="601">JR SUPERVISIOR DEVISI OPERASIONAL</option>
                                        <option value="602">JR SUPERVISIOR DEVISI KEUANGAN</option>
                                        <option value="603">KEPALA CABANG</option>
                                        <option value="604">CUSTUMER SERVICE</option>
                                    </select>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <button class="btn btn-rounded btn-primary">Terima Surat</button>
                                    </div>
                            </form>
                            <div class="col-md-6">
                                <form action="{{ url('jnemail/tata-usaha/tolak-inbox', $inbox->id) }}" method="post">
                                    @csrf
                                    @method('put')
                                    <button class="btn btn-rounded btn-danger"
                                        onclick="return confirm('Apa kah yakin untuk menolak surat?')">Tolak Surat</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12 mt-5">
                        @include('utils.backbutton', [
                            'url' => url('jnemail/tata-usaha/inbox'),
                        ])
                    </div>
                </div>
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
                        @foreach ($inbox->logpengiriman->sortByDesc('created_at')->values() as $log)
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
