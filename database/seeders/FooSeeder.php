<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Foo; //Foo being the model, it can be changed to reference any model you need to use.

class FooSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Foo::factory(50)->create(); //Calls the factory and creates 50 entries.
    }
}
