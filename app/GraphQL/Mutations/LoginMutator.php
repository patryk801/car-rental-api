<?php

namespace App\GraphQL\Mutations;

use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class LoginMutator
{
    public function login($root, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        $credentials['email'] = $args['email'];
        $credentials['password'] = $args['password'];

        if (!$token = auth()->attempt($credentials)) {
            return null;
        } else {
            return [
                'token' => $token,
                'expires_in' => auth()->factory()->getTTL() * 60
            ];
        }
    }
}
