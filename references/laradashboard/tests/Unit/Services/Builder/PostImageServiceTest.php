<?php

declare(strict_types=1);

use App\Services\AiContentGeneratorService;
use App\Services\Builder\BlockService;
use App\Services\Builder\PostImageService;

beforeEach(function () {
    $this->blockService = new BlockService();
});

test('post image service reports unavailable when openai key is missing', function () {
    config(['settings.ai_openai_api_key' => '']);

    $service = new PostImageService(
        app(AiContentGeneratorService::class),
        $this->blockService,
    );

    expect($service->canGenerate())->toBeFalse()
        ->and($service->generateImages('Topic', 'Title'))->toBe([]);
});

test('post image service prepends featured image blocks', function () {
    $service = new PostImageService(
        Mockery::mock(AiContentGeneratorService::class),
        $this->blockService,
    );

    $blocks = [
        $this->blockService->heading('Hello'),
        $this->blockService->text('Body copy'),
    ];

    $updated = $service->prependFeaturedImageBlocks($blocks, [
        ['url' => '/uploads/posts/header.jpg', 'alt' => 'Header image'],
    ]);

    expect($updated[0]['type'])->toBe('image')
        ->and($updated[1]['type'])->toBe('spacer')
        ->and($updated[2]['type'])->toBe('heading')
        ->and($updated[0]['props']['src'])->toBe('/uploads/posts/header.jpg');
});

test('post image service generates and stores images when configured', function () {
    config(['settings.ai_openai_api_key' => 'test-key']);

    $aiService = Mockery::mock(AiContentGeneratorService::class);
    $aiService->shouldReceive('canGenerateImages')->andReturnTrue();
    $aiService->shouldReceive('generateImage')
        ->once()
        ->andReturn(['url' => 'https://example.com/generated.png']);
    $aiService->shouldReceive('downloadAndStoreImage')
        ->once()
        ->with('https://example.com/generated.png')
        ->andReturn('/uploads/posts/generated.png');

    $service = new PostImageService($aiService, $this->blockService);

    $images = $service->generateImages('Remote work tips', 'Remote Work Tips', 1);

    expect($images)->toHaveCount(1)
        ->and($images[0]['url'])->toBe('/uploads/posts/generated.png')
        ->and($images[0]['alt'])->toContain('Remote work tips');
});
