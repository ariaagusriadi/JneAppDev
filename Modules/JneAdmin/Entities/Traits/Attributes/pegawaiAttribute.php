<?php


namespace Modules\JneAdmin\Entities\Traits\Attributes;

use Illuminate\Support\Str;


trait pegawaiAttribute
{
    function uploadFoto()
    {
        $this->deleteFoto();
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "JneAdmin/Foto";
            $randomStr = Str::random(5);

            $filename =  'Pegawai' . '-' . time() . '-' . $randomStr . '.' . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto =  $url;
            $this->save();
        }
    }

    function deleteFoto()
    {
        $foto = $this->foto;
        if ($foto) {
            $path = public_path($foto);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }
}
