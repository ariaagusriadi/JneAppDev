<?php


namespace Modules\JneSurat\Entities\Traits\Relations;

use Modules\JneAdmin\Entities\Pegawai;
use Modules\JneAdmin\Entities\UnitKerja;
use Modules\JneSurat\Entities\Log;

trait pengajuanRelationship
{
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }
    public function unitkerja()
    {
        return $this->belongsTo(UnitKerja::class, 'id_unitkerja');
    }
    public function log()
    {
        return $this->hasMany(Log::class,'id_pengajuan');
    }
}
