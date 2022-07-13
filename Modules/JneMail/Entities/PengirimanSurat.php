<?php

namespace Modules\JneMail\Entities;

use App\Models\Model;
use Modules\JneMail\Entities\Traits\Attributes\PengirimanSuratAttribute;
use Modules\JneMail\Entities\Traits\Relations\PengirimanSuratRelationship;

class PengirimanSurat extends Model
{
    use PengirimanSuratAttribute,PengirimanSuratRelationship;
    protected $table = "jnemail__pengiriman__surat";
}
