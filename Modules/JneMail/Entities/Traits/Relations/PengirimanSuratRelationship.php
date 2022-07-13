<?php


namespace Modules\JneMail\Entities\Traits\Relations;

use Modules\JneAdmin\Entities\Pegawai;
use Modules\JneAdmin\Entities\UnitKerja;
use Modules\JneMail\Entities\LogPengirimanSurat;

trait PengirimanSuratRelationship
{
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }
    public function unitkerja()
    {
        return $this->belongsTo(UnitKerja::class, 'id_unitkerja');
    }
    public function logpengiriman()
    {
        return $this->hasMany(LogPengirimanSurat::class, 'id_pengiriman_surat');
    }
}
