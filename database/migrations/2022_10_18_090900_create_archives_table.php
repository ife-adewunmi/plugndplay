<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jevan Tang
 * Released under the Apache-2.0 License.
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchivesTable extends Migration
{
    /**
     * Run fresns migrations.
     */
    public function up(): void
    {
        Schema::create('archives', function (Blueprint $table) {
            $table->increments('id');
            $table->string('plugin_fskey', 64);
            $table->string('name', 64)->nullable();
            $table->text('description')->nullable();
            $table->string('code', 32)->unique('archive_code');
            $table->unsignedTinyInteger('usage_type');
            $table->unsignedInteger('usage_group_id')->default(0);
            $table->unsignedTinyInteger('usage_group_content_type')->nullable();
            $table->string('form_element', 16);
            $table->string('element_type', 16)->nullable();
            switch (config('database.default')) {
                case 'pgsql':
                    $table->jsonb('element_options')->nullable();
                    break;

                case 'sqlsrv':
                    $table->nvarchar('element_options', 'max')->nullable();
                    break;

                default:
                    $table->json('element_options')->nullable();
            }
            $table->unsignedTinyInteger('file_type')->nullable();
            $table->unsignedTinyInteger('is_multiple')->default(0);
            $table->unsignedTinyInteger('is_required')->default(0);
            $table->string('input_pattern', 128)->nullable();
            $table->unsignedSmallInteger('input_max')->nullable();
            $table->unsignedSmallInteger('input_min')->nullable();
            $table->unsignedSmallInteger('input_maxlength')->nullable();
            $table->unsignedSmallInteger('input_minlength')->nullable();
            $table->unsignedSmallInteger('input_size')->nullable();
            $table->unsignedSmallInteger('input_step')->nullable();
            $table->unsignedSmallInteger('rating')->default(9);
            $table->string('value_type', 16)->default('string');
            $table->unsignedTinyInteger('is_enabled')->default(1);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
            $table->softDeletes();
        });

        Schema::create('archive_usages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedTinyInteger('usage_type');
            $table->unsignedBigInteger('usage_id');
            $table->unsignedInteger('archive_id')->index('usage_archive_id');
            $table->text('archive_value')->nullable();
            $table->tinyInteger('is_private')->default(0);
            $table->string('plugin_fskey', 64)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
            $table->softDeletes();

            $table->index(['usage_type', 'usage_id'], 'archive_usages');
        });
    }

    /**
     * Reverse fresns migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('archives');
        Schema::dropIfExists('archive_usages');
    }
}
