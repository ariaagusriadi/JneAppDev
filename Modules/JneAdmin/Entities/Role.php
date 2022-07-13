<?php

namespace Modules\JneAdmin\Entities;

use App\Models\Model;
use Modules\JneAdmin\Entities\Traits\Relations\RoleRelationship;

class Role extends Model
{
    use RoleRelationship;
    protected $table= 'jneadmin__role';
}
