<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jevan Tang
 * Released under the Apache-2.0 License.
 */

namespace App\Fresns\Words\Detail\DTO;

use Fresns\DTO\DTO;

class GetUserDetailDTO extends DTO
{
    public function rules(): array
    {
        return [
            'uid' => ['integer', 'required'],
            'langTag' => ['string', 'nullable'],
            'timezone' => ['string', 'nullable'],
            'authUid' => ['integer', 'nullable'],
        ];
    }
}
