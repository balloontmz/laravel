<?php

use Illuminate\Database\Seeder;
use Nletech\JiYun\Models\Admin;
use Nletech\JiYun\Models\AdminGroup;

class InitSuperAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::updateOrCreate([
            'id' => 1,
            'admin_group_id' => 1,
            'username'  => 'admin',
            'name'      => '超级管理员',
            'email'     => 'test@test.com',
            'tel'       => '15888888888',
            'password'  => bcrypt('root123456'),
            'last_login_at' => now(),
            'forbid_login'  => 0,
        ]);

        AdminGroup::updateOrCreate(
            [
                'id' => 1,
                'name_cn' => '超级管理员',
                'name_en' => 'Super_Admin',
                'description' => '我是描述123',
            ]
        );
    }
}
