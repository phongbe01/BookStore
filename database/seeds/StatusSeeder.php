<?php

use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = new \App\Status();
        $status->statusname = 'Chờ xác nhận';
        $status->color = 'danger';
        $status->save();

        $status = new \App\Status();
        $status->statusname = 'Hoàn thành';
        $status->color = 'success';
        $status->save();

        $status = new \App\Status();
        $status->statusname = 'Sẵn sàng';
        $status->color = 'secondary';
        $status->save();

    }
}
