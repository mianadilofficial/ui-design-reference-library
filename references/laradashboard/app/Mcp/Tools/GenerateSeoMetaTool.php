<?php

declare(strict_types=1);

namespace App\Mcp\Tools;

use App\Ai\Actions\GenerateSeoMetaAction;
use App\Mcp\Attributes\McpToolMeta;
use App\Mcp\Tools\Concerns\InteractsWithMcpAuthorization;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Attributes\Name;
use Laravel\Mcp\Server\Tool;

#[Name('generate-seo-meta')]
#[Description('Generate SEO meta title and description for an existing post.')]
#[McpToolMeta(ability: 'mcp:posts.write', permission: 'post.edit', group: 'Content')]
class GenerateSeoMetaTool extends Tool
{
    use InteractsWithMcpAuthorization;

    public function __construct(
        protected GenerateSeoMetaAction $generateSeoMetaAction
    ) {
    }

    public function handle(Request $request): Response
    {
        if ($response = $this->authorizeMcpAbility('mcp:posts.update', 'post.edit')) {
            return $response;
        }

        $validated = $request->validate([
            'post_id' => ['required', 'integer', 'min:1'],
        ]);

        $result = $this->generateSeoMetaAction->handle([
            'post_id' => (int) $validated['post_id'],
        ]);

        if (! $result->isSuccess()) {
            return Response::error($result->message);
        }

        return Response::json([
            'message' => $result->message,
            'data' => $result->data,
        ]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'post_id' => $schema->integer()
                ->description('The post ID to generate SEO metadata for.')
                ->required(),
        ];
    }
}
