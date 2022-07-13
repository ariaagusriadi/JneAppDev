<?php


namespace Modules\JneLembur\Entities\Traits\Relations;

use Modules\JneAdmin\Entities\Pegawai;
use Modules\JneAdmin\Entities\UnitKerja;
use Modules\JneLembur\Entities\logpengajuanlembur;
use Modules\JneMail\Entities\LogPengirimanSurat;

trait PengajuanLemburRelationship
{
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }
    public function unitkerja()
    {
        return $this->belongsTo(UnitKerja::class, 'id_unitkerja');
    }
    public function loglembur()
    {
        return $this->hasMany(logpengajuanlembur::class, 'id_pengajuan');
    }
}
