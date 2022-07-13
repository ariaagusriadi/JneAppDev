<?php


namespace Modules\JneMail\Entities\Traits\Attributes;



trait LogPengirimanSuratAttribute
{

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
                echo "Di teruskan ke jr supervisior devisi operasional";
                break;
            case 602:
                echo "Di teruskan ke jr supervisior divisi keuangan";
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
                echo "ada Balasan Surat <br/> dari jr supervisior devisi operasional";
                break;
            case 802:
                echo "ada Balasan Surat <br/> dari jr supervisior divisi keuangan";
                break;
            case 803:
                echo "ada Balasan Surat <br/> dari kepala cabang";
                break;
            case 804:
                echo "ada Balasan Surat <br/> dari custumerservice";
                break;
            case 901:
                echo "Surat diterima oleh jr supervisior devisi operasional";
                break;
            case 902:
                echo "Surat diterima oleh jr supervisior devisi keuangan";
                break;
            case 903:
                echo "Surat diterima oleh kepala cabang";
                break;
            case 904:
                echo "Surat diterima oleh custumerservice";
                break;
            default:
                echo "Isi variabel tidak di temukan";
                break;
        }
    }
}
