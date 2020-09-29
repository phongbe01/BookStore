<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new \App\Category();
        $category->categoryname = 'Tiểu thuyết';
        $category->save();

        $category = new \App\Category();
        $category->categoryname = 'Sách kinh tế';
        $category->save();

        $category = new \App\Category();
        $category->categoryname = 'Chính trị - khoa học phương Tây';
        $category->save();

        $category = new \App\Category();
        $category->categoryname = 'Sách cho thiếu nhi';
        $category->save();

        $category = new \App\Category();
        $category->categoryname = 'Bách khoa tri thức';
        $category->save();
    }
}
