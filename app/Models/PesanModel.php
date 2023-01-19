<?php

namespace App\Models;

use CodeIgniter\Model;

class PesanModel extends Model
{
    protected $table      = 'pesan';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama', 'email', 'pesan'];
    // protected $DBGroup = 'group_name';
    public function test($data)
    {
        echo "ini adalam model pesan methode test";
        echo "<br>";
        var_dump($data);
    }

    public function simpan_pesan($data)
    {
    }
}
