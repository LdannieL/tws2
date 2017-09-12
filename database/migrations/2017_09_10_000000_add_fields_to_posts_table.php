<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddFieldsToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create table for storing roles
        Schema::table('posts', function (Blueprint $table) {
            $table->string('video')->nullable()->before('slug');
            $table->string('gallery_img_1')->nullable()->before('slug');
            $table->string('gallery_img_2')->nullable()->before('slug');
            $table->string('gallery_img_3')->nullable()->before('slug');
            $table->boolean('display_gallery_as_slider')->default(0)->before('slug');
            $table->integer('parent_id')->nullable()->after('category_id');
            $table->boolean('series_intro')->default(0)->before('title');
            $table->boolean('has_complex_body')->default(0)->before('title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('video');
            $table->dropColumn('gallery_img_1');
            $table->dropColumn('gallery_img_2');
            $table->dropColumn('gallery_img_3');
            $table->dropColumn('display_gallery_as_slider');
            $table->dropColumn('parent_id');
            $table->dropColumn('series_intro');
            $table->dropColumn('has_complex_body');
        });
    }
}
