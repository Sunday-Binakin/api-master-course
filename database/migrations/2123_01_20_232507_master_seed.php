<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    private array $usersSeedValue = [];
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
    }
};
