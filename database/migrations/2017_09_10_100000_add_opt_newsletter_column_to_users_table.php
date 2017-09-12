<?php

use Illuminate\Database\Migrations\Migration;

class AddOptNewsletterColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->boolean('opt_newsletter')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('opt_newsletter');
        });
    }
}
