<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jevan Tang
 * Released under the Apache-2.0 License.
 */

namespace App\Fresns\Api\Http\DTO;

use Fresns\DTO\DTO;

class CommonCallbacksDTO extends DTO
{
    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'fskey' => ['string', 'required'],
            'ulid' => ['ulid', 'required'],
        ];
    }
}
