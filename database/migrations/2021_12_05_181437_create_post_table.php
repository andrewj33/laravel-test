<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->bigIncrements('id'); // PRIMARY KEY
            $table->string('name');
            $table->string('description');
            $table->timestamps(); //CREATED AT & UPDATED AT
        });

        DB::table('post')->insert(
            [
                [
                    'name' => 'Andrew Hanson', 
                    'description' => 'Migrations are interesting!',
                    'created_at' => '2021-12-05 12:44:11',
                    'updated_at' => '2021-12-05 13:03:11'
                ],
                [
                    'name' => 'Andrew Hanson', 
                    'description' => 'Migrations are interesting!',
                    'created_at' => '2021-12-05 12:44:11',
                    'updated_at' => '2021-12-05 13:03:11'
                ],
                [
                    'name' => 'Andrew Hanson', 
                    'description' => 'Migrations are interesting!',
                    'created_at' => '2021-12-05 12:44:11',
                    'updated_at' => '2021-12-05 13:03:11'
                ],
                [
                    'name' => 'Andrew Hanson', 
                    'description' => 'Migrations are interesting!',
                    'created_at' => '2021-12-05 12:44:11',
                    'updated_at' => '2021-12-05 13:03:11'
                ],
                [
                    'name' => 'Andrew Hanson', 
                    'description' => 'Migrations are interesting!',
                    'created_at' => '2021-12-05 12:44:11',
                    'updated_at' => '2021-12-05 13:03:11'
                ],
                [
                    'name' => 'Andrew Hanson', 
                    'description' => 'Migrations are interesting!',
                    'created_at' => '2021-12-05 12:44:11',
                    'updated_at' => '2021-12-05 13:03:11'
                ],
                [
                    'name' => 'Andrew Hanson', 
                    'description' => 'Migrations are interesting!',
                    'created_at' => '2021-12-05 12:44:11',
                    'updated_at' => '2021-12-05 13:03:11'
                ],
                [
                    'name' => 'Andrew Hanson', 
                    'description' => 'Migrations are interesting!',
                    'created_at' => '2021-12-05 12:44:11',
                    'updated_at' => '2021-12-05 13:03:11'
                ],
                [
                    'name' => 'Andrew Hanson', 
                    'description' => 'Migrations are interesting!',
                    'created_at' => '2021-12-05 12:44:11',
                    'updated_at' => '2021-12-05 13:03:11'
                ],
                [
                    'name' => 'Andrew Hanson', 
                    'description' => 'Migrations are interesting!',
                    'created_at' => '2021-12-05 12:44:11',
                    'updated_at' => '2021-12-05 13:03:11'
                ],
              
              
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post');
    }
}
