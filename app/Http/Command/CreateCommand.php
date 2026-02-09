<?php

namespace App\Http\Command;

class CreateCommand
{
    public function __construct(
        public readonly string $name,
        public readonly string $type
    ) {}
}
