<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use App\Models\Objection;

class ObjectionsSeeder extends Seeder
{
    
    public function run(): void
    {
      
        Objection::create([
           
            'title' => 'admin',
            'description' => 'admin',
            'solution' => 'admin',
            'user_id' => '1',
            'objection_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
       
    }
}


    

