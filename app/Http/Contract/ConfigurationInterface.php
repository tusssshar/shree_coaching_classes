<?php

namespace App\Http\Contract;

interface ConfigurationInterface
{
    public function list($type);
    public function allConfig();
}
