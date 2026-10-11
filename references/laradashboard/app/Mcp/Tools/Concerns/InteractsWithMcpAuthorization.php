<?php

declare(strict_types=1);

namespace App\Mcp\Tools\Concerns;

use Illuminate\Support\Facades\Auth;
use Laravel\Mcp\Response;
use Laravel\Sanctum\PersonalAccessToken;

trait InteractsWithMcpAuthorization
{
    protected function authorizeMcpAbility(string $ability, ?string $permission = null): ?Response
    {
        $user = Auth::user();

        if ($user === null) {
            return Response::error(__('Authentication required.'));
        }

        /** @var PersonalAccessToken|null $token */
        $token = $user->currentAccessToken();

        if ($token === null || ! $token->can($ability)) {
            return Response::error(__('This MCP token does not have the [:ability] ability.', ['ability' => $ability]));
        }

        if ($permission !== null && ! $user->can($permission)) {
            return Response::error(__('You do not have permission to perform this action.'));
        }

        return null;
    }
}
