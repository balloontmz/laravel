<?php

use Illuminate\Database\Seeder;
use Nletech\JiYun\Models\User;

class InitUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $user = User::first();
        if ($user) {    // 有商家的情况，更改商家名字
            // $admin->update(['cn_name'=>'金慧商城', 'en_name'=>'JinHui Shop', 'shop_id'=>1, 'status_id'=>2, 'show'=>1]);
        } else {
            DB::table('jiyun_users')->insert([
                'name'=> 'test',
                'email'=> 'test@qq.com',
                'avatar'=>'this is a image url',
                'email_verified_at'=> now(),  
                'user_group_id' => 1,
            ]);
        }
    }
}
