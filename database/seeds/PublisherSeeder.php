<?php

use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $publisher = new \App\Publisher();
        $publisher->publishname = 'Nhà xuất bản Kim Đồng';
        $publisher->image = 'image/publisher/nxbkimdong.png';
        $publisher->save();

        $publisher = new \App\Publisher();
        $publisher->publishname = 'Nhà xuất bản Nhã Nam';
        $publisher->image = 'image/publisher/nxbnhanam.png';
        $publisher->save();

        $publisher = new \App\Publisher();
        $publisher->publishname = 'Nhà xuất bản Thái Hà';
        $publisher->image = 'image/publisher/nxbthaiha.png';
        $publisher->save();

        $publisher = new \App\Publisher();
        $publisher->publishname = 'Nhà xuất bản Trẻ';
        $publisher->image = 'image/publisher/nxbtre.png';
        $publisher->save();
    }
}
