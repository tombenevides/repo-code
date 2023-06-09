<?php

namespace App\Actions;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StoreUser
{
    public function handle()
    {
        return User::create([
            'name' => 'John Doe',
            'email' => 'email@email.com',
            'password' => Hash::make('password'),
        ]);
    }
}
