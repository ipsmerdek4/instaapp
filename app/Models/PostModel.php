<?php 
namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model{
    protected $table      = 'tbl_post';
    protected $primaryKey = "id_post";
    protected $returnType = "object"; 
    protected $allowedFields = ['id_user', 'picture', 'text', 'tgl_pembuatan_post'];

}