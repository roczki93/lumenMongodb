<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVotesToUsersTable extends Migration
{
    /**
         * The name of the database connection to use.
         *
         * @var string
         */
    protected $connection = 'mongodb';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {        
        Schema::connection($this->connection)
        ->table('actions', function (Blueprint $collection) 
        {
            $collection->index('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection($this->connection)
        ->table('actions', function (Blueprint $collection) 
        {
            $collection->drop();
        });
    }
}
