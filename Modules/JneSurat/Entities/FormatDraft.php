<?php

namespace Modules\JneSurat\Entities;

use App\Models\Model;
use Modules\JneSurat\Entities\Traits\Attributes\FormatDraftAttribute;

class FormatDraft extends Model
{
    use FormatDraftAttribute;
    protected $table = "jnesurat__format__draft";
}
