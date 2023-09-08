<?php

namespace App\GraphQL\Mutations;

use App\Models\User;

final class DeleteUser
{
    /** @param array{} $args */
    public function __invoke($_, array $args)
    {
        $user = User::find($args['id']);
        $status = $user->delete();

        return [
            'status' => $status,
            'message' => 'User Deleted'
        ];
    }
}
