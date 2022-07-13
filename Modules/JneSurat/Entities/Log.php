<?php

namespace Modules\JneSurat\Entities;

use App\Models\Model;
use Modules\JneSurat\Entities\Traits\Attributes\LogAttribute;
use Modules\JneSurat\Entities\Traits\Relations\logRelationship;

class Log extends Model
{
    use LogAttribute, logRelationship;
    protected $table = 'jnesurat__log';
}
