<?php

namespace Modules\JneAdmin\Entities\Traits\Relations;

use Modules\JneAdmin\Entities\Module;
use Modules\JneAdmin\Entities\Pegawai;

trait RoleRelationship
{
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }
    public function module()
    {
        return $this->belongsTo(Module::class, 'id_module');
    }
}
