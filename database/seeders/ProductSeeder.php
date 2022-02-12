<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            ['name' => 'LG moblie',
            'price' => '200',
            'description'=>'this is smart phone with 4gb ram ',
            'category' =>'moblie',
            'gallery' =>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.gsmarena.com%2Flg_wing_5g-pictures-10442.php&psig=AOvVaw0TsrqD5PzNiULzlDzCK_EE&ust=1644661074860000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCOD5_oy29_UCFQAAAAAdAAAAABAJ'
            ],
            ['name' => 'mi moblie',
            'price' => '300',
            'description'=>'this is smart phone with 8gb ram ',
            'category' =>'moblie',
            'gallery' =>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fandroidcommunity.com%2Flg-wing-camera-receives-decent-scores-on-dxomark-20210127%2F&psig=AOvVaw1yxg_wSqOK9DRiwPQg2_vY&ust=1644661846670000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCOi5zYO59_UCFQAAAAAdAAAAABAE'
            ],
            ['name' => 'mi tv',
            'price' => '400',
            'description'=>'this is smart tv with all new feature ',
            'category' =>'tv',
            'gallery' =>'https://www.google.com/url?sa=i&url=http%3A%2F%2Fwallpaperswide.com%2Fsmart_tv-wallpapers.html&psig=AOvVaw2iqX_L3ijeB9-G3c8RWtVJ&ust=1644662040625000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCOCa4N259_UCFQAAAAAdAAAAABAJ'
            ],
            ['name' => 'LG tv',
            'price' => '500',
            'description'=>'this is smart tv for all new genration ',
            'category' =>'tv',
            'gallery' =>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwallpapercave.com%2Fsmart-tv-wallpapers&psig=AOvVaw2iqX_L3ijeB9-G3c8RWtVJ&ust=1644662040625000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCOCa4N259_UCFQAAAAAdAAAAABAD'
            ],
            ['name' => 'LG fridge',
            'price' => '500',
            'description'=>'this is fridge with all new feature ',
            'category' =>'refrigarate',
            'gallery' =>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwallpapercave.com%2Fsmart-tv-wallpapers&psig=AOvVaw2iqX_L3ijeB9-G3c8RWtVJ&ust=1644662040625000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCOCa4N259_UCFQAAAAAdAAAAABAD'
            ],
            ['name' => 'oppo moblie',
            'price' => '500',
            'description'=>'this is moblie with all new feature ',
            'category' =>'moblie',
            'gallery' =>'https://www.androidheadlines.com/2020/10/lg-wing-wallpapers-download.html'
            ]
            
        ]);
            
    }
}
