<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jarvis Tang
 * Released under the Apache-2.0 License.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PluginCallback extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    protected $dates = [
        'deleted_at',
    ];

    protected $casts = [
        'content' => 'json',
    ];
}