<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SysGroup;
use App\Models\SysRole;
use Illuminate\Support\Facades\DB;

class SysRoleSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        SysRole::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $admin   = SysGroup::where('name', 'Admin')->first();
        $manager = SysGroup::where('name', 'Manager')->first();
        $staff   = SysGroup::where('name', 'Staff')->first();

        SysRole::insert([
            [
                'name' => 'manage_users',
                'user_group_id' => $admin->id,
                'description' => 'Create, update and delete users',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'manage_roles',
                'user_group_id' => $admin->id,
                'description' => 'Manage roles and permissions',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'approve_projects',
                'user_group_id' => $manager->id,
                'description' => 'Approve project phases',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'create_tasks',
                'user_group_id' => $staff->id,
                'description' => 'Create and update tasks',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
