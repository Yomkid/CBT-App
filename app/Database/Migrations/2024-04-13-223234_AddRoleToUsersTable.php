<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddRoleToUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addColumn('users', [
            'role' => [
                'type' => 'ENUM',
                'constraint' => ['admin', 'user', 'moderator', 'editor', 'school', 'student'],
                'default' => 'user', // Set default role as 'user'
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('users', 'role');
    }
}
