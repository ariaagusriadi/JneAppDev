<?php


namespace Modules\JneLembur\Entities\Traits\Relations;

use Modules\JneAdmin\Entities\Pegawai;
use Modules\JneAdmin\Entities\UnitKerja;
use Modules\JneLembur\Entities\Pengajuanlembur;
use Modules\JneMail\Entities\LogPengirimanSurat;

trait LogLemburRelationship
{
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }
    public function unitkerja()
    {
        return $this->belongsTo(UnitKerja::class, 'id_unitkerja');
    }
    public function lembur()
    {
        return $this->belongsTo(Pengajuanlembur::class , 'id_pengajuan');
    }
}
