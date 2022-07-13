<?php


namespace Modules\JneSurat\Entities\Traits\Relations;

use Modules\JneAdmin\Entities\Pegawai;
use Modules\JneSurat\Entities\Pengajuan;

trait logRelationship
{
   public function pengajuan()
   {
        return $this->belongsTo(Pengajuan::class, 'id_pengajuan');
   }

   public function pegawai()
   {
    return $this->belongsTo(Pegawai::class, 'id_pegawai');

   }
}
