<?php

namespace Modules\JneArchives\Entities\Tatausaha;

use App\Models\Model;
use Modules\JneArchives\Entities\Traits\Attributes\PengajuanAttribute;

class JneArchivesPengajuan extends Model
{
    use PengajuanAttribute;
    protected $table = 'jnearchives__pengajuan';
}

