<?php


namespace Modules\JneAdmin\Entities\Traits\Relations;

use Modules\JneAdmin\Entities\Pegawai;
use Modules\JneLembur\Entities\pengajuanlembur;
use Modules\JneMail\Entities\PengirimanSurat;
use Modules\JneSurat\Entities\Pengajuan;

trait UnitKerjaRelationship
{

    public function pegawai()
    {
        return $this->hasMany(Pegawai::class, 'id_pegawai');
    }
    public function pengajuan()
    {
        return $this->hasMany(Pengajuan::class, 'id_unitkerja');
    }
    public function pengirimansurat()
    {
        return $this->hasMany(PengirimanSurat::class, 'id_unitkerja');
    }
    public function lembur()
    {
        return $this->hasMany(pengajuanlembur::class, 'id_unitkerja');
    }
}
