<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Tambah_Post extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'post_id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'judul' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'deskripsi' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                ));
                $this->dbforge->add_key('post_id', TRUE);
                $this->dbforge->create_table('post');
        }

        public function down()
        {
                $this->dbforge->drop_table('post');
        }
}