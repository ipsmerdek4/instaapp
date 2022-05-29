<?php 
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table      = 'tbl_user';
    protected $primaryKey = "id_user";
    protected $returnType = "object"; 
    protected $allowedFields = ['id', 'email', 'username', 'password', 'nama_lengkap', 'no_hp', 'Alamat', 'picture', 'level', 'tgl_pembuatan_user' ];
}