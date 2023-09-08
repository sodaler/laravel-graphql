<?php

namespace App\GraphQL\Mutations;

use App\Models\User;

final class UpdateUser
{
    /** @param array{} $args */
    public function __invoke($_, array $args)
    {
        $user = User::find($args['id']);

        $user->name = $args['name'] ?? $user->name;
        $user->email = $args['email'] ?? $user->email;
        $user->password = $args['password'] ? \Hash::make($args['password']) : null;

        $user->save();

        return $user;
    }
}
