<?php

namespace App\Http\Contract;

use Illuminate\Http\Request;

interface StudentInterface
{
    public function save(array $data, Request $request): array;
    
    public function update(int $id, array $validated, Request $request): array;
}