<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Functions\Helper;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ['HTML', 'CSS', 'JavaScript', 'PHP', 'C++'];

        foreach($data as $type){
            $new_type = new Type;
            $new_type->name = $type;
            $new_type->slug = Helper::generateSlug($new_type->name, Type::class);
            $new_type->save();
        }
    }
}
