<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('title')->nullable()->after('youtube_id')->comment('APIでタイトルを取得');
            $table->string('description',5000)->nullable()->after('title');
            $table->string('thumbnail')->after('description')->nullable();
            $table->string('channel_id')->after('thumbnail')->nullable();
            $table->string('channel_name')->after('channel_id')->nullable();
            $table->string('published_at')->after('channel_name')->nullable();
            $table->integer('weapon_id')->nullable()->default(0)->change();
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
            //
        });
    }
}
