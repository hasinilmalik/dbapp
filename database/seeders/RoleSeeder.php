<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'operator',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'guru',
            'guard_name' => 'web'
        ]);
        
        Role::create([
            'name' => 'siswa',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'karyawan',
            'guard_name' => 'web'
        ]);
        
        Role::create([
            'name' => 'keuangan',
            'guard_name' => 'web'
        ]);
    }
}
