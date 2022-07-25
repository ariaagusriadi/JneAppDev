<?php


namespace Modules\JneAdmin\Entities\Traits\Relations;

use Modules\JneAdmin\Entities\Role;
use Modules\JneAdmin\Entities\UnitKerja;
use Modules\JneLembur\Entities\Pengajuanlembur;
use Modules\JneMail\Entities\LogPengirimanSurat;
use Modules\JneMail\Entities\PengirimanSurat;
use Modules\JneSurat\Entities\Log;
use Modules\JneSurat\Entities\Pengajuan;

trait pegawaiRelationship
{
    function unitkerja()
    {
        return $this->belongsTo(UnitKerja::class, 'unitkerja_id');
    }

    public function role()
    {
        return $this->hasMany(Role::class, 'id_pegawai');
    }

    public function pengajuan()
    {
        return $this->hasMany(Pengajuan::class, 'id_pegawai');
    }
    public function log()
    {
        return $this->hasMany(Log::class, 'id_pegawai');
    }
    public function pengirimansurat()
    {
        return $this->hasMany(PengirimanSurat::class, 'id_pegawai');
    }
    public function logpengirimansurat()
    {
        return $this->hasMany(LogPengirimanSurat::class, 'id_pegawai');
    }

    public function lembur()
    {
        return $this->hasMany(Pengajuanlembur::class, 'id_pegawai');
    }
}
