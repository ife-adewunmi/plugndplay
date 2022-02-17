<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jarvis Tang
 * Released under the Apache-2.0 License.
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePluginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plugins', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('unikey', 64)->unique('unikey');
            $table->string('name', 64);
            $table->unsignedTinyInteger('type');
            $table->string('description');
            $table->string('version', 16);
            $table->unsignedInteger('version_int');
            $table->string('author', 64);
            $table->string('author_link', 128)->nullable();
            $table->json('scene')->nullable();
            $table->string('plugin_domain', 128)->nullable();
            $table->string('access_path', 255)->nullable();
            $table->string('setting_path', 255)->nullable();
            $table->char('install_code', 16)->nullable();
            $table->unsignedTinyInteger('is_upgrade')->default('0');
            $table->string('upgrade_version', 16)->nullable();
            $table->unsignedInteger('upgrade_version_int')->nullable();
            $table->unsignedTinyInteger('is_enable')->default('0');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plugins');
    }
}
