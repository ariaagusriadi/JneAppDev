<?php


namespace Modules\JneMail\Entities\Traits\Relations;

use Modules\JneAdmin\Entities\Pegawai;
use Modules\JneMail\Entities\PengirimanSurat;

trait LogPengirimanSuratRelationship
{
    public function pengirimansurat()
    {
        return $this->belongsTo(PengirimanSurat::class, 'id_pengiriman_surat');
    }
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }
}
