<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Camps;
class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $camps =[
           [
               'title' => 'VIP Package',
                'slug' => 'vip-package',
                'price' => 100,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
           ],
           [
               'title' => 'Community Package',
                'slug' => 'community-package',
                'price' => 50,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
           ],
        ];
        Camps::insert($camps);
    }
}
