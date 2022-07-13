<?php


namespace Modules\JneSurat\Entities\Traits\Attributes;

use Illuminate\Support\Str;


trait FormatDraftAttribute
{
    function formatdraft()
    {
        $this->deletformat();
        if (request()->hasFile('file_format_surat')) {
            $file_format_surat = request()->file('file_format_surat');
            $destination = "JneSurat/docx/formatdraft" . "/" . date("Y") . "/" . date('m');
            $randomStr = Str::random(5);

            $filename =  'format-surat' . '-' . time() . '-' . $randomStr . '.' . $file_format_surat->extension();
            $url = $file_format_surat->storeAs($destination, $filename);
            $this->file_format_surat =  $url;
            $this->save();
        }
    }

    function deletformat()
    {
        $file_format_surat = $this->file_format_surat;
        if ($file_format_surat) {
            $path = public_path($file_format_surat);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }
}
