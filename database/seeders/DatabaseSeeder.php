<?php

namespace Database\Seeders;

use App\Models\Location;
use App\Models\Meter;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Location::factory()->create();
        $now = Carbon::now()->format('Y-m-d H:i:s');
        
        DB::unprepared('insert into meters(id,ean_code, name, location_id, created_at, updated_at) values
        (1,"541449020706144924", "électricité jour",1, \''.$now.'\', \''.$now.'\'),
        (2,"541449020706144924", "électricité nuit", 1, \''.$now.'\', \''.$now.'\'),
        (3,"541449020706144931", "gaz", 1, \''.$now.'\', \''.$now.'\')');
        
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,4635, "kWh", 0,"2024-06-14")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,4533, "kWh", 0,"2024-05-25")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,4434, "kWh", 0,"2024-04-24")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,4243, "kWh", 0,"2024-03-17")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,4160, "kWh", 0,"2024-03-01")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,3990, "kWh", 0,"2024-02-01")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,3916, "kWh", 0,"2024-01-18")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,3869, "kWh", 0,"2024-01-10")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,3841, "kWh", 1,"2024-01-01")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,3751, "kWh", 0,"2023-12-04")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,3727, "kWh", 0,"2023-11-26")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,3710, "kWh", 0,"2023-11-21")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,3668, "kWh", 0,"2023-11-08")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,3647, "kWh", 0,"2023-11-02")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,3585, "kWh", 0,"2023-10-18")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,3521, "kWh", 0,"2023-10-02")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,3477, "kWh", 0,"2023-09-19")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,3426, "kWh", 0,"2023-09-04")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,3356, "kWh", 0,"2023-08-12")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,3326, "kWh", 0,"2023-07-03")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,3265, "kWh", 0,"2023-06-13")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,3204, "kWh", 0,"2023-05-28")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,3175, "kWh", 0,"2023-05-20")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,3128, "kWh", 0,"2023-05-10")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,3099, "kWh", 0,"2023-05-02")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,3063, "kWh", 0,"2023-04-25")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,3024, "kWh", 0,"2023-04-13")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,2996, "kWh", 0,"2023-04-06")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,2975, "kWh", 0,"2023-03-31")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,2931, "kWh", 0,"2023-03-17")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,2905, "kWh", 0,"2023-03-10")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,2885, "kWh", 0,"2023-03-02")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,2864, "kWh", 0,"2023-02-26")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,2855, "kWh", 0,"2023-02-22")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,2824, "kWh", 0,"2023-02-14")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,2811, "kWh", 0,"2023-02-10")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,2727, "kWh", 0,"2023-01-02")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,2727, "kWh", 1,"2023-01-01")');
        
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,4192, "kWh", 0,"2024-06-14")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,4125, "kWh", 0,"2024-05-25")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,4009, "kWh", 0,"2024-04-24")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,3834, "kWh", 0,"2024-03-17")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,3729, "kWh", 0,"2024-03-01")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,3583, "kWh", 0,"2024-02-01")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,3496, "kWh", 0,"2024-01-18")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,3454, "kWh", 0,"2024-01-10")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,3429, "kWh", 1,"2024-01-01")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,3338, "kWh", 0,"2023-12-04")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,3292, "kWh", 0,"2023-11-26")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,3266, "kWh", 0,"2023-11-21")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,3204, "kWh", 0,"2023-11-08")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,3179, "kWh", 0,"2023-11-02")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,3115, "kWh", 0,"2023-10-18")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,3067, "kWh", 0,"2023-10-02")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,3017, "kWh", 0,"2023-09-19")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,2972, "kWh", 0,"2023-09-04")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,2899, "kWh", 0,"2023-08-12")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,2863, "kWh", 0,"2023-07-03")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,2793, "kWh", 0,"2023-06-13")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,2732, "kWh", 0,"2023-05-28")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,2704, "kWh", 0,"2023-05-20")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,2663, "kWh", 0,"2023-05-10")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,2637, "kWh", 0,"2023-05-02")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,2614, "kWh", 0,"2023-04-25")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,2563, "kWh", 0,"2023-04-13")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,2538, "kWh", 0,"2023-04-06")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,2510, "kWh", 0,"2023-03-31")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,2470, "kWh", 0,"2023-03-17")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,2441, "kWh", 0,"2023-03-10")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,2412, "kWh", 0,"2023-03-02")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,2403, "kWh", 0,"2023-02-26")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,2389, "kWh", 0,"2023-02-22")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,2365, "kWh", 0,"2023-02-14")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,2348, "kWh", 0,"2023-02-10")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,2266, "kWh", 0,"2023-01-02")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(1,2265, "kWh", 1,"2023-01-01")');
        
        
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(3,26132, "m³", 0,"2024-06-14")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(3,26092, "m³", 0,"2024-05-25")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(3,26041, "m³", 0,"2024-04-24")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(3,25867, "m³", 0,"2024-03-17")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(3,25778, "m³", 0,"2024-03-01")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(3,25573, "m³", 0,"2024-02-01")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(3,25456, "m³", 0,"2024-01-18")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(3,25346, "m³", 0,"2024-01-10")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(3,25165, "m³", 1,"2023-12-07")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(3,25133, "m³", 0,"2023-12-04")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(3,25051, "m³", 0,"2023-11-26")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(3,25014, "m³", 0,"2023-11-21")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(3,24930, "m³", 0,"2023-11-08")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(3,24891, "m³", 0,"2023-11-02")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(3,24829, "m³", 0,"2023-10-18")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(3,24805, "m³", 0,"2023-10-02")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(3,24797, "m³", 0,"2023-09-19")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(3,24788, "m³", 0,"2023-09-04")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(3,24772, "m³", 0,"2023-08-12")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(3,24772, "m³", 0,"2023-07-03")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(3,24759, "m³", 0,"2023-06-13")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(3,24747, "m³", 0,"2023-05-28")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(3,24738, "m³", 0,"2023-05-20")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(3,24706, "m³", 0,"2023-05-02")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(3,24684, "m³", 0,"2023-04-25")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(3,24629, "m³", 0,"2023-04-13")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(3,24595, "m³", 0,"2023-04-06")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(3,24553, "m³", 0,"2023-03-31")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(3,24495, "m³", 0,"2023-03-17")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(3,24451, "m³", 0,"2023-03-10")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(3,24388, "m³", 0,"2023-03-02")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(3,24350, "m³", 0,"2023-02-26")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(3,24320, "m³", 0,"2023-02-22")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(3,24273, "m³", 0,"2023-02-14")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(3,24242, "m³", 0,"2023-02-10")');
        DB::unprepared('insert into readings ( meter_id, value, unit, isOfficial, created_at) values(3,23968, "m³", 1,"2023-01-01")');
        
        
            
    }
}
