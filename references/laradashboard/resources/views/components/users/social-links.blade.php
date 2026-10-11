@props([
    'user' => null,
    'userMeta' => [],
    'showEdit' => false,
])

@php
    $socialPlatforms = [
        'facebook' => [
            'icon' => 'mdi:facebook',
            'color' => '#1877F2',
            'label' => 'Facebook',
        ],
        'x' => [
            'icon' => '<svg class="w-full h-full" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M4 3h16c.6 0 1 .4 1 1v16c0 .6-.4 1-1 1H4c-.6 0-1-.4-1-1V4c0-.6.4-1 1-1zm9.5 10.2l4.2-6.2H16l-3.2 4.8L10 7h-1.7l4.3 6.5-4.3 6.5H9l3.3-4.9 3.4 4.9h1.6l-4.3-6.3z" />
                </svg>',
            'color' => '#000000',
            'label' => 'X (Twitter)',
        ],
        'youtube' => [
            'icon' => 'mdi:youtube',
            'color' => '#FF0000',
            'label' => 'YouTube',
        ],
        'linkedin' => [
            'icon' => 'mdi:linkedin',
            'color' => '#0A66C2',
            'label' => 'LinkedIn',
        ],
        'website' => [
            'icon' => 'mdi:web',
            'color' => '#6B7280',
            'label' => 'Website',
        ],
    ];

    $hasSocialLinks = false;
    foreach ($socialPlatforms as $platform => $config) {
        if (!empty($userMeta['social_' . $platform])) {
            $hasSocialLinks = true;
            break;
        }
    }
@endphp

<div x-data="{ 
    showSocialEdit: false,
    socialLinks: {
        @foreach($socialPlatforms as $platform => $config)
            '{{ $platform }}': '{{ old('social_' . $platform, $userMeta['social_' . $platform] ?? '') }}',
        @endforeach
    }
}" class="w-full">
    @if($showEdit)
        <div class="mt-4 space-y-3">
            <div class="flex items-center justify-between">
                <label class="text-sm font-medium text-gray-700 dark:text-gray-300">
                    {{ __('Social Links') }}
                </label>
                <button
                    type="button"
                    @click="showSocialEdit = !showSocialEdit"
                    class="text-xs text-primary hover:opacity-90 dark:text-blue-400 dark:hover:text-blue-300 flex items-center gap-1"
                >
                    <iconify-icon x-show="!showSocialEdit" icon="mdi:pencil" width="16" height="16" class="align-middle"
                    ></iconify-icon>
                    <iconify-icon x-show="showSocialEdit" icon="mdi:close" width="16" height="16" class="align-middle"
                    ></iconify-icon>
                    <span class="sr-only" x-text="showSocialEdit ? '{{ __('Close') }}' : '{{ __('Edit') }}'"></span>
                </button>
            </div>

            {{-- Social Icons Display --}}
            <div class="flex items-center gap-3 flex-wrap">
                @foreach($socialPlatforms as $platform => $config)
                    <template x-if="socialLinks.{{ $platform }}">
                        <a 
                            :href="socialLinks.{{ $platform }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="group relative flex gap-2"
                            :title="'{{ $config['label'] }}'"
                        >
                            <div class="w-8 h-8 rounded-full bg-gray-100 dark:bg-gray-800 flex items-center justify-center transition-all group-hover:bg-gray-200 dark:group-hover:bg-gray-700">
                                @if(str_starts_with($config['icon'], '<svg'))
                                    <div class="w-5 h-5" style="color: {{ $config['color'] }};">
                                        {!! $config['icon'] !!}
                                    </div>
                                @else
                                    <iconify-icon icon="{{ $config['icon'] }}" width="20" height="20" style="color: {{ $config['color'] }};"></iconify-icon>
                                @endif
                            </div>
                        </a>
                    </template>
                @endforeach

                @if(!$hasSocialLinks)
                    <template x-if="!Object.values(socialLinks).some(link => link)">
                        <span class="text-xs text-gray-500 dark:text-gray-400">{{ __('No social links added') }}</span>
                    </template>
                @endif
            </div>

            {{-- Edit Form --}}
            <div 
                x-show="showSocialEdit" 
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 transform scale-95"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-95"
                class="mt-3 p-4 bg-gray-50 dark:bg-gray-800/50 rounded-lg space-y-3"
            >
                @foreach($socialPlatforms as $platform => $config)
                    <div>
                        <label for="social_{{ $platform }}" class="form-label flex items-center gap-2">
                            @if(str_starts_with($config['icon'], '<svg'))
                                <div class="w-[18px] h-[18px]" style="color: {{ $config['color'] }};">
                                    {!! $config['icon'] !!}
                                </div>
                            @else
                                <iconify-icon icon="{{ $config['icon'] }}" width="18" height="18" style="color: {{ $config['color'] }};"></iconify-icon>
                            @endif
                            <span>{{ $config['label'] }}</span>
                        </label>
                        <input 
                            type="url"
                            name="social_{{ $platform }}" 
                            id="social_{{ $platform }}"
                            x-model="socialLinks.{{ $platform }}"
                            placeholder="{{ $platform === 'website' ? __('https://example.com') : __('https://') . strtolower($config['label']) . __('.com/username') }}"
                            class="form-control h-8"
                            autocomplete="off"
                        >
                    </div>
                @endforeach
            </div>
        </div>
    @else
        {{-- Read-only display for non-edit modes --}}
        @if($hasSocialLinks)
            <div class="mt-4 space-y-2">
                <label class="text-sm font-medium text-gray-700 dark:text-gray-300">
                    {{ __('Social Links') }}
                </label>
                <div class="flex items-center gap-3 flex-wrap">
                    @foreach($socialPlatforms as $platform => $config)
                        @if(!empty($userMeta['social_' . $platform]))
                            <a 
                                href="{{ $userMeta['social_' . $platform] }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="group relative"
                                title="{{ $config['label'] }}"
                            >
                                <div class="w-8 h-8 rounded-full bg-gray-100 dark:bg-gray-800 flex items-center justify-center transition-all group-hover:bg-gray-200 dark:group-hover:bg-gray-700">
                                    @if(str_starts_with($config['icon'], '<svg'))
                                        <div class="w-5 h-5" style="color: {{ $config['color'] }};">
                                            {!! $config['icon'] !!}
                                        </div>
                                    @else
                                        <iconify-icon icon="{{ $config['icon'] }}" width="20" height="20" style="color: {{ $config['color'] }};"></iconify-icon>
                                    @endif
                                </div>
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>
        @endif
    @endif
</div>