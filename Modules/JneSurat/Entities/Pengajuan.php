<?php

namespace Modules\JneSurat\Entities;

use App\Models\Model;
use Modules\JneSurat\Entities\Traits\Attributes\pengajuanAttribute;
use Modules\JneSurat\Entities\Traits\Relations\pengajuanRelationship;

class Pengajuan extends Model
{
    use pengajuanAttribute, pengajuanRelationship;
    protected $table = 'jnesurat__pengajuan';
}
