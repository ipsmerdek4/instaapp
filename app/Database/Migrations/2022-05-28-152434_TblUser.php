<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblUser extends Migration
{
    public function up()
    {
          $this->forge->addField([ 
            'id_user'          => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true
            ], 
			'id'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
				'null'       	 => true,
			], 
			'email'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
				'null'       	 => true,
			], 
			'username'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '50', 
			], 
			'password'       => [
				'type'           => 'text', 
			], 
			'nama_lengkap'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
			], 
			'no_hp'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '20',
			], 
			'Alamat'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
			], 
			'picture'       => [
				'type'           => 'text', 
			], 
			'level'       => [
				'type'           => 'int',
				'constraint'     => '3',
			], 
            
			'tgl_pembuatan_user' => [
				'type'           => 'DATETIME',
				'null'       	 => true,
			], 
        ]);
        $this->forge->addPrimaryKey('id_user', true); 
        $this->forge->createTable('tbl_user'); 
    }

    public function down()
    {
        $this->forge->dropTable('tbl_user');
    }
}
