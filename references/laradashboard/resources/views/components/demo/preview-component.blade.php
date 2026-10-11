@props(['title', 'description', 'path', 'include', 'language', 'hideCodeButton' => false])

<div class="px-4 py-5 bg-white dark:bg-gray-800 rounded-md shadow-sm">
    <div x-data="{ showCode: false }">
        <div class="flex justify-between items-center mb-4">
            <div>
                <h4 class="text-lg">{{ $title }}</h4>
                @if(!empty($description))
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    {{ $description }}
                </p>
                @endif
            </div>
            <div>
                @if(!$hideCodeButton)
                <button type="button"
                    class="px-3 py-1 rounded bg-gray-100 dark:bg-gray-800 text-xs font-semibold text-gray-700 dark:text-gray-200 border border-gray-300 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-gray-700 transition"
                    @click="showCode = !showCode">
                    <span x-show="!showCode" class="flex justify-center items-center">
                        <iconify-icon icon="mdi:code-tags" class="mr-1"></iconify-icon>
                        {{ __('Code') }}
                    </span>
                    <span x-show="showCode" class="flex justify-center items-center">
                        <iconify-icon icon="mdi:eye" class="mr-1"></iconify-icon>
                        {{ __('Preview') }}
                    </span>
                </button>
                @endif
            </div>
        </div>
        <div x-show="showCode">
            {!! ld_render_demo_code_block(resource_path($path), $language ?? 'html') !!}
        </div>
        <div x-show="!showCode">
            @include($include)
        </div>
    </div>
</div>