<?php


namespace Modules\JneSurat\Entities\Traits\Attributes;

use Illuminate\Support\Str;


trait pengajuanAttribute
{
    function documentpengantar()
    {
        $this->deletedocumentpengantar();
        if (request()->hasFile('file_pengantar')) {
            $file_pengantar = request()->file('file_pengantar');
            $destination = "JneSurat/docx/pengantar" . "/" . date("Y") . "/" . date('m');
            $randomStr = Str::random(5);

            $filename =  'pengantar' . '-' . time() . '-' . $randomStr . '.' . $file_pengantar->extension();
            $url = $file_pengantar->storeAs($destination, $filename);
            $this->file_pengantar =  $url;
            $this->save();
        }
    }

    function deletedocumentpengantar()
    {
        $file_pengantar = $this->file_pengantar;
        if ($file_pengantar) {
            $path = public_path($file_pengantar);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }


    function documentlampiran()
    {
        $this->deletedocumentlampiran();
        if (request()->hasFile('file_lampiran')) {
            $file_lampiran = request()->file('file_lampiran');
            $destination = "JneSurat/docx/lampiran" .  "/" . date("Y") . "/" . date('m');
            $randomStr = Str::random(5);

            $filename =  'lampiran' . '-' . time() . '-' . $randomStr . '.' . $file_lampiran->extension();
            $url = $file_lampiran->storeAs($destination, $filename);
            $this->file_lampiran =  $url;
            $this->save();
        }
    }

    function deletedocumentlampiran()
    {
        $file_lampiran = $this->file_lampiran;
        if ($file_lampiran) {
            $path = public_path($file_lampiran);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }

    // pdf file
    function filepdf()
    {
        if (request()->hasFile('file_surat_pdf')) {
            $file_surat_pdf = request()->file('file_surat_pdf');
            $destination = "JneSurat/pdf" .  "/" . date("Y") . "/" . date('m');
            $randomStr = Str::random(5);

            $filename =  'pdf-surat' . '-' . time() . '-' . $randomStr . '.' . $file_surat_pdf->extension();
            $url = $file_surat_pdf->storeAs($destination, $filename);
            $this->file_surat_pdf =  $url;
            $this->save();
        }
    }

    // draft surat

    function draftsurat()
    {
        if (request()->hasFile('draft_surat')) {
            $draft_surat = request()->file('draft_surat');
            $destination = "JneSurat/docx/draft" .  "/" . date("Y") . "/" . date("m");
            $randomStr = Str::random(5);

            $filename =  'draft' . '-' . time() . '-' . $randomStr . '.' . $draft_surat->extension();
            $url = $draft_surat->storeAs($destination, $filename);
            $this->draft_surat =  $url;
            $this->save();
        }
    }


    public function getstatus($status)
    {
        switch ($status) {
            case 101:
                echo "pengajuan Baru";
                break;
            case 102:
                echo "Pengajuan Baru Di Edit";
                break;
            case 201:
                echo "diterima oleh tatausaha";
                break;
            case 202:
                echo "ditolak oleh tatausaha";
                break;
            case 301:
                echo "ditanda tangani oleh ceo";
                break;
            case 302:
                echo "ditolak oleh ceo";
                break;
            default:
                echo "Isi variabel tidak di temukan";
                break;
        }
    }
}
