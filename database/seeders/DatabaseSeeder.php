<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            SysGroupSeeder::class,
            SysRoleSeeder::class,
            UserSeeder::class,
            UserGroupSeeder::class,
        ]);
    }
}
