<?php

namespace Modules\JneSurat\Entities;

use App\Models\Model;
use Modules\JneSurat\Entities\Traits\Attributes\FormatSuratUnitAttribute;

class FormatSuratUnit extends Model
{
    use FormatSuratUnitAttribute;
    protected $table =  'jnesurat__format__unit';
}
