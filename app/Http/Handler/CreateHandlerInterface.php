<?php

namespace App\Http\Handler;

use App\Http\Command\CreateCommand;

interface CreateHandlerInterface
{
    public function handle(CreateCommand $command);
}
