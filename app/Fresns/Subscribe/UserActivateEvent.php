<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jevan Tang
 * Released under the Apache-2.0 License.
 */

namespace App\Fresns\Subscribe;

class UserActivateEvent
{
    protected object $event;

    protected string $uri;
    protected array $headers;
    protected array $body;

    public function __construct(object $event)
    {
        $this->event = $event;

        $this->uri = $event->uri;
        $this->headers = $event->headers;
        $this->body = $event->body;
    }

    public static function make(object $event)
    {
        return new static($event);
    }

    public function notify(Subscribe $subscribe)
    {
        $fskey = $subscribe->getFskey();
        $cmdWord = $subscribe->getCmdWord();

        \FresnsCmdWord::plugin($fskey)->$cmdWord([
            'uri' => $this->uri,
            'headers' => $this->headers,
            'body' => $this->body,
        ]);
    }
}
