<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    private  array $usersSeedValue = [];
    public function __construct()
    {
        $this->usersSeedValue = [
            [
                'name' => 'admin',
                'email' => 'support@services.com',
                'password' => bcrypt('admin123'),
                'created_at' => now(),
            ]];
    }
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

//inserting data into th database
        DB::table('users')->insert($this->usersSeedValue);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::table('users')->whereIn('email', array_map(function ($row) {
            return $row['email'];
        }, $this->usersSeedValue))->delete();
    }
};
