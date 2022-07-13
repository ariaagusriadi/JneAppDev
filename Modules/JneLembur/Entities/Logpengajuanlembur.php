<?php

namespace Modules\JneLembur\Entities;

use App\Models\Model;
use Modules\JneLembur\Entities\Traits\Attributes\LogPengajuanLemburAttribute;
use Modules\JneLembur\Entities\Traits\Relations\LogLemburRelationship;

class logpengajuanlembur extends Model
{
    use LogPengajuanLemburAttribute, LogLemburRelationship;
    protected $table = "jnelembur__log";
}
