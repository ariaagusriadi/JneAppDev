<?php


namespace Modules\JneSurat\Entities\Traits\Attributes;


trait LogAttribute
{

    public function getstatus($status)
    {
        switch ($status) {
            case 101:
                echo "pengajuan Baru";
                break;
            case 102:
                echo "Pengajuan Baru Di Edit";
                break;
            case 201:
                echo "diterima oleh tatausaha, dan diteruskan ke ceo";
                break;
            case 202:
                echo "ditolak oleh tatausaha";
                break;
            case 301:
                echo "ditanda tangani oleh ceo";
                break;
            case 302:
                echo "ditolak oleh ceo";
                break;
            default:
                echo "Isi variabel tidak di temukan";
                break;
        }
    }
}
