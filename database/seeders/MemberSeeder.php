<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Member::create([
            'name' => 'Mei Mei',
            'position' => 'Director',
            'image' => 'mei-mei-director.jpg',
            'motto' => 'The struggle you feel today wiill be the strength you need tomorrow.',
            'motto_by' => 'Mei Mei',
        ]);

        Member::create([
            'name' => 'Felicia',
            'position' => 'B2G Manager',
            'image' => 'felicia-b2g-manager.jpg',
            'motto' => 'A satisfied customer is the best business strategy of all.',
            'motto_by' => 'Michael LeBoeuf',
        ]);
        Member::create([
            'name' => 'Azhari',
            'position' => 'Retail General Manager',
            'image' => 'azhari-retail-gm.jpg',
            'motto' => 'Every problem is a gift, without problems, we would not grow.',
            'motto_by' => 'Anthony Robbins',
        ]);
        Member::create([
            'name' => 'Hendy',
            'position' => 'Corporate Manager',
            'image' => 'hendi-corporate-manager.jpg',
            'motto' => 'Every next level of your life will demand a different you keep Innovating.',
            'motto_by' => 'Hendy',
        ]);
        Member::create([
            'name' => 'Tiny',
            'position' => 'Product Manager',
            'image' => 'tiny-product-manager.jpg',
            'motto' => 'Work hard, have fun and make history.',
            'motto_by' => 'Jeff Bezos',
        ]);
        Member::create([
            'name' => 'Yenny',
            'position' => 'Product Manager',
            'image' => 'yenny-product-manager.jpg',
            'motto' => 'Have the courage to follow your heart and intuition.',
            'motto_by' => 'Steve Jobs',
        ]);
        Member::create([
            'name' => 'Ricky',
            'position' => 'Account Manager',
            'image' => 'ricky-account-manager.jpg',
            'motto' => 'Always deliver more than expected.',
            'motto_by' => 'Ricky',
        ]);

        Member::create([
            'name' => 'Dewi',
            'position' => 'Finance Manager',
            'image' => 'dewi-finance-manager.jpg',
            'motto' => 'keep trying for the best results.',
            'motto_by' => 'Dewi',
        ]);
        Member::create([
            'name' => 'Yanti',
            'position' => 'Accounting Manager',
            'image' => 'yanti-accounting-manager.jpg',
            'motto' => 'Stay calm and be thorough in finding solutions.',
            'motto_by' => 'Yanti',
        ]);

        Member::create([
            'name' => 'Yuliani',
            'position' => 'Senior B2G Marketer',
            'image' => 'yuliani-senior-b2g-marketer.jpg',
            'motto' => 'Getting through the challenges is a satisfaction in itself',
            'motto_by' => 'Yuliani',
        ]);
        Member::create([
            'name' => 'Aty',
            'position' => 'B2G Marketer',
            'image' => 'aty-b2g-marketer.jpg',
            'motto' => 'Effort does not betray results.',
            'motto_by' => 'Aty',
        ]);
        Member::create([
            'name' => 'Suci',
            'position' => 'B2G Marketer',
            'image' => 'suci-b2g-marketer.jpg',
            'motto' => 'Sure, this can be! and it is not easy to give up to be good and useful.',
            'motto_by' => 'Suci',
        ]);
        Member::create([
            'name' => 'Sintha',
            'position' => 'Exclusive Sale',
            'image' => 'sintha-exclusive-sale.jpg',
            'motto' => 'Success is liking yourself love what you do, and love how you do it.',
            'motto_by' => 'Sintha',
        ]);
        Member::create([
            'name' => 'Ivana',
            'position' => 'Exclusive Sale',
            'image' => 'ivana-exclusive-sale.jpg',
            'motto' => 'today is your opportunity to build the tomorrow you want.',
            'motto_by' => 'Ken Poirot',
        ]);

        Member::create([
            'name' => 'Yuyun',
            'position' => 'Exclusive Sale',
            'image' => 'yuyun-exclusive-sale.jpg',
            'motto' => 'Work hard in silence, let success be your voice.',
            'motto_by' => 'Yuyun',
        ]);
        Member::create([
            'name' => 'Angeline',
            'position' => 'Exclusive Sale',
            'image' => 'angeline-exclusive-sale.jpg',
            'motto' => 'The struggle you feel today wiill be the strength you need tomorrow.',
            'motto_by' => 'Mei Mei',
        ]);
        Member::create([
            'name' => 'Aylis',
            'position' => 'Exclusive Sale',
            'image' => 'aylis-exclusive-sale.jpg',
            'motto' => 'Your only limit is you.',
            'motto_by' => 'Aylis',
        ]);
        Member::create([
            'name' => 'Indah',
            'position' => 'Exclusive Sale',
            'image' => 'indah-exclusive-sale.jpg',
            'motto' => 'The struggle you feel today wiill be the strength you need tomorrow.',
            'motto_by' => 'Mei Mei',
        ]);
    }
}
