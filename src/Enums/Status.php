<?php

namespace ZepoBill\Support\Enums;

use ZepoBill\Support\Traits\IsEnum;

enum Status: int
{
    use IsEnum;

    case Disabled = 0;
    case Enabled = 1;
}
