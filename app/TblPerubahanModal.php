<?php

// app/TblPerubahanModal.php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TblPerubahanModal extends Model
{
    protected $table = 'tbl_perubahan_modal';
    protected $fillable = [
        'id_user',
        'tanggal_perubahan',
        'keterangan',
        'jumlah',
    ];
}

