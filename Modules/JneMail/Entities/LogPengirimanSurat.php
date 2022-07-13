<?php

namespace Modules\JneMail\Entities;

use App\Models\Model;
use Modules\JneMail\Entities\Traits\Attributes\LogPengirimanSuratAttribute;
use Modules\JneMail\Entities\Traits\Relations\LogPengirimanSuratRelationship;

class LogPengirimanSurat extends Model
{
    use LogPengirimanSuratRelationship, LogPengirimanSuratAttribute;
    protected $table = "jnemail__log";
}
