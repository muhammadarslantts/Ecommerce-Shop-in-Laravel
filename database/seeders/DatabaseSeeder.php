<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Gallery;
use App\Models\Product;
use Database\Factories\ProductFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // for information we add the schema disable key constraint
        Schema::disableForeignKeyConstraints();
        Product::truncate();
        Gallery::truncate();
        Schema::enableForeignKeyConstraints();
        Product::factory(10)->create();

        Gallery::factory(10)->create();
    }
}
