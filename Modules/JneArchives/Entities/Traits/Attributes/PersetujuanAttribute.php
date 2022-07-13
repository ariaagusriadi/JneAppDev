<?php


namespace Modules\JneArchives\Entities\Traits\Attributes;

use Illuminate\Support\Str;


trait PersetujuanAttribute
{
    function filedokumen()
    {
        $this->deletefiledokumen();
        if (request()->hasFile('file_dokumen')) {
            $file_dokumen = request()->file('file_dokumen');
            $destination = "JneArchives/persetujuan/docx" . "/" . date("Y") . "/" . date('m');
            $randomStr = Str::random(5);

            $filename =  'persetujuan-surat' . '-' . time() . '-' . $randomStr . '.' . $file_dokumen->extension();
            $url = $file_dokumen->storeAs($destination, $filename);
            $this->file_dokumen =  $url;
            $this->save();
        }
    }

    function deletefiledokumen()
    {
        $file_dokumen = $this->file_dokumen;
        if ($file_dokumen) {
            $path = public_path($file_dokumen);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }
}
