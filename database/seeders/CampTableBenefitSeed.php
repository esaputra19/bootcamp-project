<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CampBenefit;
class CampTableBenefitSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campBenefits = [
            [
               'camp_id' =>1,
               'name' => 'Professional Starter Kit',
            ],
            [
                'camp_id' =>1,
                'name' => 'Certification of Completion',
            ],
            [
                'camp_id' =>1,
                'name' => 'Job Connection',
            ],
            [
                'camp_id' =>1,
                'name' => 'Mentoring Session',
            ],
            [
                'camp_id' =>1,
                'name' => 'Premium Design Kit',
            ],
            [
                'camp_id' =>1,
                'name' => 'Final Project',
            ],
            [
                'camp_id' =>1,
                'name' => 'Website Builder',
            ],
            [
                'camp_id' =>1,
                'name' => 'Video Offline Courses',
            ],
            [
                'camp_id' =>2,
                'name' => 'Community Support',
            ],
            [
                'camp_id' =>2,
                'name' => 'Certification of Completion',
            ],
            [
                'camp_id' =>2,
                'name' => 'Basic Starter Kit'
            ],
            ];
            CampBenefit::insert($campBenefits);
    }
}
