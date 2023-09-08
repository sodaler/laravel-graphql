<?php


namespace App\GraphQL\Queries;

use App\Models\User;

final class Users
{
    /** @param  array{}  $args */
    public function __invoke($_, array $args)
    {
        return User::all();
    }
}
