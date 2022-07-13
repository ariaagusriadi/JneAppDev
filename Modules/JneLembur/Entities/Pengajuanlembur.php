<?php

namespace Modules\JneLembur\Entities;

use App\Models\Model;
use Modules\JneLembur\Entities\Traits\Attributes\PengajuanLemburAttribute;
use Modules\JneLembur\Entities\Traits\Relations\PengajuanLemburRelationship;

class pengajuanlembur extends Model
{
    use PengajuanLemburAttribute, PengajuanLemburRelationship;
    protected $table = "jnelembur__pengajuan";
}
