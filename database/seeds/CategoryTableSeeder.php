<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $categories = ['CSR', 'Activities', 'Sharing', 'Tutorials'];

      foreach ($categories as $row) {
        Category::create(['name' => $row]);
      }
    }
}
