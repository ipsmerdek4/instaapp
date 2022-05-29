<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblPost extends Migration
{
    public function up()
    {
          $this->forge->addField([ 
            'id_post'          => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true
            ], 
			'id_user'       => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true  
			],  
			'picture'       => [
				'type'           => 'text', 
				'null'       	 => true,
			],  
			'text'       => [
				'type'           => 'text', 
				'null'       	 => true,
			],   
			'tgl_pembuatan_post' => [
				'type'           => 'DATETIME',
				'null'       	 => true,
			], 
        ]);
        $this->forge->addPrimaryKey('id_post', true); 
        $this->forge->addForeignKey('id_user', 'tbl_user', 'id_user'); 
        $this->forge->createTable('tbl_post'); 
    }

    public function down()
    {
        $this->forge->dropTable('tbl_post');
    }
}
