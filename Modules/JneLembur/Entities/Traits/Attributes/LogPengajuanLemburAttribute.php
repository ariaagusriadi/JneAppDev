<?php


namespace Modules\JneLembur\Entities\Traits\Attributes;



trait LogPengajuanLemburAttribute
{

    public function status($status)
    {
        switch ($status) {
            case 111:
                echo "Menunggu persetujuan pengajuan oleh junior supervisor";
                break;
            case 112:
                echo "Update Menunggu persetujuan pengajuan oleh junior supervisor";
                break;
            case 221:
                echo "pengajuan lembur di terima junior supervisor";
                break;
            case 222:
                echo "pengajuan lembur di tolak junior supervisor";
                break;
            case 331:
                echo "pengajuan lembur di ttd, dan di laporkan ke hrd";
                break;
            case 441:
                echo "pengajuan laporan di terima hrd";
                break;
            default:
                echo "Isi variabel tidak di temukan";
                break;
        }
    }
}
