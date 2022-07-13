<?php

namespace Modules\JneAdmin\Entities;

use App\Models\Model;
use Modules\JneAdmin\Entities\Traits\Relations\UnitKerjaRelationship;

class UnitKerja extends Model
{
    use UnitKerjaRelationship;
    protected $table = 'jneadmin__unitkerja';
    protected $fillable = [];
}
