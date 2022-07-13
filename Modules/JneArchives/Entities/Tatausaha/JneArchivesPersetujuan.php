<?php

namespace Modules\JneArchives\Entities\Tatausaha;

use App\Models\Model;
use Modules\JneArchives\Entities\Traits\Attributes\PersetujuanAttribute;

class JneArchivesPersetujuan extends Model
{
    use PersetujuanAttribute;
    protected $table = 'jnearchives__persetujuan';
}
