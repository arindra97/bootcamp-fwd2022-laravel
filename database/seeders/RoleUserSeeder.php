<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\ManagementAccess\RoleUser;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // findOrFail, mencari data dalam keadaan ada, dan jika tidak ada maka akan di kembalikan 404
        // angka 1 di dalam findOrFail adalah ID di table user
        // angka 1 di dalam sync adalah ID di table role
        User::findorFail(1)->role()->sync(1);
    }
}
