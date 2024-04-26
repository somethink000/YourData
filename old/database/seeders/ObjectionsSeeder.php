<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use App\Models\DataContainer;
use App\Models\Data;

class ObjectionsSeeder extends Seeder
{
    
    public function run(): void
    {
      
        DataContainer::create([
            'title' => 'email',
            'user_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Data::create([
           
            'title' => 'login',
            'data' => 'login',
            'data_container_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Data::create([
           
            'title' => 'password',
            'data' => 'login',
            'data_container_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
       
    }
}


    

