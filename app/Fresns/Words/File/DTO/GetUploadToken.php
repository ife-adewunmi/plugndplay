<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jarvis Tang
 * Released under the Apache-2.0 License.
 */

namespace App\Fresns\Words\File\DTO;

use Fresns\DTO\DTO;

/**
 * Class GetUploadToken.
 */
class GetUploadToken extends DTO
{
    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'type' => 'integer',
            'scene' => 'integer',
        ];
    }
}