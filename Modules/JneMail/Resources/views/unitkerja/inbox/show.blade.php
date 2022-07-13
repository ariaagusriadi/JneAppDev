@extends('jnemail::_menu.unitkerja.index')


@section('content')
    <h1>Detail Balasan Surat</h1>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Balasan Surat
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <dt>subject Balasan</dt>
                            <dd>
                                <p> {!! nl2br($inbox_mail->subject) !!}</p>
                            </dd>
                        </div>
                    </div>
                    <div class="row">
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="text-center">File Surat Balasan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <td class="text-center">
                                    <a href="{{ url($inbox_mail->balasan_surat) }}"
                                        class="btn btn-square btn-outline-dark btn-rounded" target="blank_">Download
                                        Surat Balasan</a>
                                </td>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-5">
                            @include('utils.backbutton', [
                                'url' => url('jnemail/unit-kerja/inbox-mail'),
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
