<?php

namespace Modules\JneAdmin\Entities;

use App\Models\Model;
use Modules\JneAdmin\Entities\Traits\Relations\ModuleRelationship;

class Module extends Model
{
    use ModuleRelationship;
    protected $table = 'jneadmin__module';
}
