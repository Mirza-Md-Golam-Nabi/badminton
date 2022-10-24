<?php

use App\Model\Group;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time = date('Y-m-d H:i:s');
        Model::unguard();
        Group::insert([
            [
                'title' => 'Super Admin',
                'created_at' => $time,
                'updated_at' => $time,
            ],
            [
                'title' => 'Admin',
                'created_at' => $time,
                'updated_at' => $time,
            ],
            [
                'title' => 'Viewer',
                'created_at' => $time,
                'updated_at' => $time,
            ],
            [
                'title' => 'User',
                'created_at' => $time,
                'updated_at' => $time,
            ],
        ]);

    }
}
