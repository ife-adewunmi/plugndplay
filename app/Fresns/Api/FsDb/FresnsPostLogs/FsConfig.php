<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jarvis Tang
 * Released under the Apache-2.0 License.
 */

namespace App\Fresns\Api\FsDb\FresnsPostLogs;

use App\Fresns\Api\Base\Config\BaseConfig;

class FsConfig extends BaseConfig
{
    // Main Table
    const CFG_TABLE = 'post_logs';

    // Additional search columns in the main table
    const ADDED_SEARCHABLE_FIELDS = [
        'logId' => ['field' => 'id', 'op' => '='],
        'ids' => ['field' => 'id', 'op' => 'IN'],
        'post_id' => ['field' => 'post_id', 'op' => '='],
        'user_id' => ['field' => 'user_id', 'op' => '='],
        'status' => ['field' => 'state', 'op' => 'IN'],
    ];

    // Model Usage - Form Mapping
    const FORM_FIELDS_MAP = [
        'id' => 'id',
        'user_id' => 'user_id',
        'post_id' => 'post_id',
        'platform_id' => 'platform_id',
        'group_id' => 'group_id',
        'types' => 'types',
        'title' => 'title',
        'content' => 'content',
        'is_markdown' => 'is_markdown',
        'is_anonymous' => 'is_anonymous',
        'is_plugin_editor' => 'is_plugin_editor',
        'editor_unikey' => 'editor_unikey',
        'user_list_json' => 'user_list_json',
        'comment_set_json' => 'comment_set_json',
        'allow_json' => 'allow_json',
        'location_json' => 'location_json',
        'files_json' => 'files_json',
        'extends_json' => 'extends_json',
        'state' => 'state',
        'reason' => 'reason',
        'submit_at' => 'submit_at',
    ];
}