<?php


namespace Modules\JneMail\Entities\Traits\Attributes;

use Illuminate\Support\Str;


trait PengirimanSuratAttribute
{
    function filesurat()
    {
        $this->deletefilesurat();
        if (request()->hasFile('file_surat')) {
            $file_surat = request()->file('file_surat');
            $destination = "JneMail/send/unit" . "/" . date("Y") . "/" . date('m');
            $randomStr = Str::random(5);

            $filename =  'surat' . '-' . time() . '-' . $randomStr . '.' . $file_surat->extension();
            $url = $file_surat->storeAs($destination, $filename);
            $this->file_surat =  $url;
            $this->save();
        }
    }

    function deletefilesurat()
    {
        $file_surat = $this->file_surat;
        if ($file_surat) {
            $path = public_path($file_surat);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }

    public function status($status)
    {
        switch ($status) {
            case 501:
                echo "Menunggu validasi surat oleh tatausaha";
                break;
            case 502:
                echo "Menunggu validasi surat oleh tatausaha";
                break;
            case 601:
                echo "Di teruskan ke jr suvervisior devisi operasional";
                break;
            case 602:
                echo "Di teruskan ke jr suvervisior devisi keuangan";
                break;
            case 603:
                echo "Di teruskan ke kepala cabang";
                break;
            case 604:
                echo "Di teruskan ke custumerservice";
                break;
            case 701:
                echo "Di Tolak Saat Validasi";
                break;
            case 801:
                echo "Surat diterima jr suvervisior devisi operasional dan ada balasan surat dari jr suvervisior devisi operasional";
                break;
            case 802:
                echo "Surat diterima jr suvervisior devisi keuangan dan ada balasan surat dari jr suvervisior devisi keuangan";
                break;
            case 803:
                echo "Surat diterima kepala cabang dan ada balasan surat dari kepala cabang";
                break;
            case 804:
                echo "Surat diterima Custumer Service dan ada balasan surat dari Custumer Service";
                break;
            case 901:
                echo "Surat diterima jr suvervisior devisi operasional dan sudah di baca";
                break;
            case 902:
                echo "Surat diterima jr suvervisior devisi keuangan  dan sudah di baca";
                break;
            case 903:
                echo "Surat diterima kepala cabang dan sudah di baca";
                break;
            case 904:
                echo "Surat diterima custumerservice  dan sudah di baca";
                break;
            default:
                echo "Isi variabel tidak di temukan";
                break;
        }
    }

    function balasansurat()
    {
        if (request()->hasFile('balasan_surat')) {
            $balasan_surat = request()->file('balasan_surat');
            $destination = "JneMail/balasan" . "/" . date("Y") . "/" . date('m');
            $randomStr = Str::random(5);

            $filename =  'surat' . '-' . time() . '-' . $randomStr . '.' . $balasan_surat->extension();
            $url = $balasan_surat->storeAs($destination, $filename);
            $this->balasan_surat =  $url;
            $this->save();
        }
    }
}
