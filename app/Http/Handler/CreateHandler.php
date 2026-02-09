<?php

namespace App\Http\Handler;

use App\Http\Command\CreateCommand;
use App\Models\Board;
use App\Models\Medium;
use App\Models\ModeOfPayment;
use App\Models\Standard;
use App\Models\TypeOfPayment;

final class CreateHandler implements CreateHandlerInterface
{
    public function handle(CreateCommand $command)
    {
        $modelObj = match ($command->type) {
            'std' => new Standard,
            'medium' => new Medium,
            'board' => new Board,
            'modeofpayment' => new ModeOfPayment,
            'typeofpayment' => new TypeOfPayment,
            default => ''
        };

        $modelObj->name = $command->name;
        $modelObj->save();

        return $modelObj;
    }
}
