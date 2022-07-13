<?php
namespace Modules\JneAdmin\Entities\Traits\Relations;

use Modules\JneAdmin\Entities\Role;


trait ModuleRelationship
{
    public function role()
    {
        return $this->hasMany(Role::class, 'id_module');
    }

}
