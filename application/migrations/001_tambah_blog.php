<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Tambah_Blog extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'blog_id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'judul_blog' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'deskripsi_blog' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                ));
                $this->dbforge->add_key('blog_id', TRUE);
                $this->dbforge->create_table('blog');
        }

        public function down()
        {
                $this->dbforge->drop_table('blog');
        }
}