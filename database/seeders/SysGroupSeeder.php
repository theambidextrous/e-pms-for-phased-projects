<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SysGroup;
use Illuminate\Support\Facades\DB;

class SysGroupSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        SysGroup::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        SysGroup::insert([
            [
                'name' => 'Admin',
                'description' => 'System administrators',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Manager',
                'description' => 'Department managers',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Staff',
                'description' => 'Internal staff',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Viewer',
                'description' => 'Read-only users',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
