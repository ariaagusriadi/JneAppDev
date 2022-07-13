@extends('jnemail::_menu.DistribusiSurat.JrSuperVisior.DevisiKeuangan.index')


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
                            <dd>{{ $inbox_mail->pegawai->nama }}</dd>
                        </div>
                        <div class="col-md-6">
                            <dt>Unit Pengirim</dt>
                            <dd>{{ $inbox_mail->unitkerja->nama_unit }}</dd>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <dt>Tujuan Pengiriman</dt>
                            <dd>{{ $inbox_mail->tujuan }}</dd>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <dt>subject</dt>
                            <dd>
                                <p> {!! nl2br($inbox_mail->subject) !!}</p>
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
                                    <a href="{{ url($inbox_mail->file_surat) }}"
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
                            <h4>Balas Surat</h4>
                            <br>
                            <form action="{{ url('jnemail/jr-supervisior-devisi-keuangan/inbox-mail', $inbox_mail->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h5>File Balasan Surat</h5>
                                            @include('utils.errors', ['item' => 'balasan_surat'])
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file"
                                                        class="custom-file-input @error('balasan_surat') is-invalid @enderror"
                                                        name="balasan_surat" accept=".pdf">
                                                    <label class="custom-file-label">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h5>Subject</h5>
                                            @include('utils.errors', ['item' => 'subject_balasan'])
                                            <textarea name="subject_balasan" id="" cols="30" rows="10"
                                                class="form-control @error('subject_balasan') is-invalid @enderror"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-rounded btn-primary float-right">Balas Surat</button>
                                    </div>
                            </form>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6 mt-5">
                        @include('utils.backbutton', [
                            'url' => url('jnemail/jr-supervisior-devisi-keuangan/inbox-mail'),
                        ])
                    </div>
                    <div class="col-md-6 mt-5">
                        <form action="{{ url('jnemail/jr-supervisior-devisi-keuangan/inbox-mail/tandai-telah-dibaca', $inbox_mail->id) }}" method="post">
                            @method('put')
                            @csrf
                            <Button class="btn btn-danger btn-rounded" onclick="confirm('tandai telah di baca')">Tandai telah Dibaca</Button>
                        </form>
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
                        @foreach ($inbox_mail->logpengiriman->sortByDesc('created_at')->values() as $log)
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
