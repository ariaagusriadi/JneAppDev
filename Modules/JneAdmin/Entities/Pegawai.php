<?php

namespace Modules\JneAdmin\Entities;

use App\Models\ModelAuthenticate;
use Modules\JneAdmin\Entities\Traits\Attributes\pegawaiAttribute;
use Modules\JneAdmin\Entities\Traits\Relations\pegawaiRelationship;

class Pegawai extends ModelAuthenticate
{
    use pegawaiAttribute, pegawaiRelationship;
    protected $table = 'jneadmin__pegawai';
}
