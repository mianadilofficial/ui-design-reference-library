@php
    $aiService = app(\App\Services\AiContentGeneratorService::class);
    $isConfigured = $aiService->isConfigured();
    $providers = $aiService->getAvailableProviders();
    $defaultProvider = $aiService->getDefaultProvider();
@endphp

<div class="inline-flex items-center">
    <!-- AI Generate Button -->
    <button type="button"
        @click="aiModalOpen = true"
        class="ml-2 inline-flex items-center px-3 py-1.5 text-xs font-medium text-white bg-gradient-to-r from-purple-500 to-blue-600 hover:from-purple-600 hover:to-blue-700 rounded-md transition-all duration-200 shadow-sm hover:shadow-md">
        <svg class="w-3 h-3 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
        </svg>
        {{ __('AI Generate') }}
    </button>
</div>

<!-- AI Content Generation Modal -->
<div
    x-cloak
    x-show="aiModalOpen"
    x-transition.opacity.duration.200ms
    x-trap.inert.noscroll="aiModalOpen"
    x-on:keydown.esc.window="aiModalOpen = false"
    x-on:click.self="aiModalOpen = false"
    class="fixed inset-0 z-50 flex items-center justify-center bg-black/20 p-4 backdrop-blur-md"
    role="dialog"
    aria-modal="true"
    aria-labelledby="ai-modal-title"
    x-data="aiContentGenerator()"
>
    <div
        x-show="aiModalOpen"
        x-transition:enter="transition ease-out duration-200 delay-100"
        x-transition:enter-start="opacity-0 scale-50"
        x-transition:enter-end="opacity-100 scale-100"
        class="flex max-w-2xl w-full max-h-[95vh] flex-col overflow-hidden rounded-lg border border-gray-200 bg-white text-gray-900 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-100 shadow-2xl"
    >
        <!-- Modal Header -->
        <div class="flex items-center justify-between border-b border-gray-100 px-6 py-4 dark:border-gray-700">
            <div class="flex items-center space-x-3">
                <div class="flex items-center justify-center w-8 h-8 rounded-full bg-gradient-to-r from-purple-500 to-blue-600 text-white">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 id="ai-modal-title" class="text-lg font-semibold text-gray-900 dark:text-white">
                    {{ __('AI Content Generator') }}
                </h3>
            </div>
            <button
                type="button"
                @click="aiModalOpen = false"
                class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 transition-colors"
                aria-label="{{ __('Close modal') }}"
            >
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <!-- Modal Body -->
        <div class="px-6 pb-6 space-y-4 flex-1 overflow-y-auto">
            <!-- AI Provider Selection -->
            <div class="space-y-2">
                <div class="flex items-center justify-between">
                    <label for="ai_provider" class="form-label">
                        {{ __('AI Provider') }}
                    </label>
                    <a href="{{ route('admin.settings.index') }}?tab=integrations"
                       target="_blank"
                       class="text-xs text-primary hover:text-primary-dark hover:underline flex items-center"
                       title="{{ __('Configure AI Settings') }}">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        {{ __('Settings') }}
                    </a>
                </div>
                <select x-model="provider" id="ai_provider" class="form-control">
                    <option value="" disabled>{{ __('Select AI Provider') }}</option>
                    @foreach($providers as $key => $label)
                        <option value="{{ $key }}" {{ $key === $defaultProvider ? 'selected' : '' }}>
                            {{ $label }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Prompt Input -->
            <div class="space-y-2">
                <label for="ai_prompt" class="form-label">
                    {{ __('Describe your content') }}
                </label>
                <textarea
                    x-model="prompt"
                    id="ai_prompt"
                    rows="4"
                    placeholder="{{ __('Example: Write a blog post about the benefits of AI in modern web development, focusing on productivity and user experience...') }}"
                    class="form-control-textarea"
                    maxlength="1000"
                ></textarea>
                <div class="flex justify-between text-xs text-gray-500 dark:text-gray-400">
                    <span>{{ __('Be specific about your content requirements') }}</span>
                    <span x-text="prompt.length + '/1000'"></span>
                </div>
            </div>

            <!-- Generate Button -->
            <div class="flex justify-center pt-2">
                <button
                    type="button"
                    @click="generateContent()"
                    :disabled="!prompt.trim() || loading"
                    class="inline-flex items-center px-6 py-2.5 text-sm font-medium text-white bg-gradient-to-r from-purple-500 to-blue-600 hover:from-purple-600 hover:to-blue-700 disabled:from-gray-400 disabled:to-gray-500 disabled:cursor-not-allowed rounded-lg transition-all duration-200 shadow-sm hover:shadow-md"
                >
                    <svg x-show="loading" class="animate-spin w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    <span x-show="!loading">{{ __('Generate Content') }}</span>
                    <span x-show="loading">{{ __('Generating...') }}</span>
                </button>
            </div>

            <!-- Generated Content Preview -->
            <div x-show="generatedContent.title" class="mt-6 space-y-4 border-t border-gray-200 dark:border-gray-700 pt-6">
                <h4 class="text-sm font-medium text-gray-900 dark:text-white">{{ __('Generated Content Preview') }}</h4>

                <!-- Title Preview -->
                <div class="space-y-1">
                    <label class="text-xs font-medium text-gray-700 dark:text-gray-300">{{ __('Title') }}</label>
                    <div class="p-3 bg-gray-50 dark:bg-gray-900 rounded-md border border-gray-200 dark:border-gray-700 text-sm" x-text="generatedContent.title"></div>
                </div>

                <!-- Excerpt Preview -->
                <div class="space-y-1" x-show="generatedContent.excerpt">
                    <label class="text-xs font-medium text-gray-700 dark:text-gray-300">{{ __('Excerpt') }}</label>
                    <div class="p-3 bg-gray-50 dark:bg-gray-900 rounded-md border border-gray-200 dark:border-gray-700 text-sm" x-text="generatedContent.excerpt"></div>
                </div>

                <!-- Content Preview -->
                <div class="space-y-1" x-show="generatedContent.content">
                    <label class="text-xs font-medium text-gray-700 dark:text-gray-300">{{ __('Content') }}</label>
                    <div class="p-3 bg-gray-50 dark:bg-gray-900 rounded-md border border-gray-200 dark:border-gray-700 text-sm max-h-32 overflow-y-auto" x-html="generatedContent?.content?.replace(/\n/g, '<br>')"></div>
                </div>

                <!-- Action Buttons -->
                <div class="flex justify-end space-x-3 pt-4">
                    <button
                        type="button"
                        @click="aiModalOpen = false"
                        class="px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md hover:bg-gray-50 dark:hover:bg-gray-600 transition-colors"
                    >
                        {{ __('Cancel') }}
                    </button>
                    <button
                        type="button"
                        @click="insertContent()"
                        class="px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 rounded-md transition-all duration-200"
                    >
                        {{ __('Insert Content') }}
                    </button>
                </div>
            </div>

            <!-- Error Message -->
            <div x-show="errorMessage" class="mt-4 p-3 bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-md">
                <p class="text-sm text-red-700 dark:text-red-400" x-text="errorMessage"></p>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    function aiContentGenerator() {
        return {
            provider: '{{ $defaultProvider }}',
            prompt: '',
            loading: false,
            generatedContent: {},
            errorMessage: '',

            async generateContent() {
                if (!this.prompt.trim()) {
                    window.showToast('error', 'Please enter a prompt to generate content.');
                    return;
                }

                if (!this.provider) {
                    window.showToast('error', 'Please select an AI provider or configure from AI Integrations settings.');
                    return;
                }

                this.loading = true;
                this.errorMessage = '';
                this.generatedContent = {};

                try {
                    const response = await fetch('/admin/ai/generate-content', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        },
                        body: JSON.stringify({
                            prompt: this.prompt,
                            provider: this.provider,
                            content_type: 'post_content'
                        })
                    });

                    const data = await response.json();

                    if (data.success) {
                        this.generatedContent = data.data;
                    } else {
                        this.errorMessage = data.message || 'Failed to generate content';
                    }
                } catch (error) {
                    this.errorMessage = 'Network error. Please try again.';
                    console.error('AI Generation Error:', error);
                } finally {
                    this.loading = false;
                }
            },

            insertContent() {
                // Insert title
                if (this.generatedContent.title && document.getElementById('title')) {
                    document.getElementById('title').value = this.generatedContent.title;
                    // Trigger Alpine.js update
                    document.getElementById('title').dispatchEvent(new Event('input'));
                }

                // Insert excerpt
                if (this.generatedContent.excerpt && document.getElementById('excerpt')) {
                    document.getElementById('excerpt').value = this.generatedContent.excerpt;
                }

                // Insert content into Quill editor.
                if (this.generatedContent.content && document.getElementById('content')) {
                    if (window['quill_content']) {
                        // Convert line breaks to HTML paragraphs and breaks.
                        let htmlContent = this?.generatedContent?.content || '';
                        
                        // If the content doesn't contain HTML tags, convert line breaks to HTML
                        if (!htmlContent.includes('<') && !htmlContent.includes('>')) {
                            // Split by double line breaks to create paragraphs
                            htmlContent = htmlContent
                                .split('\n\n')
                                .map(paragraph => paragraph.trim())
                                .filter(paragraph => paragraph.length > 0)
                                .map(paragraph => `<p>${paragraph.replace(/\n/g, '<br>')}</p>`)
                                .join('');
                        }
                        
                        // Use Quill's method to insert HTML content.
                        window['quill_content'].clipboard.dangerouslyPasteHTML(htmlContent);
                    } else {
                        // Fallback to regular textarea if Quill is not available
                        document.getElementById('content').value = this.generatedContent.content;
                    }
                }

                // Show success message
                if (typeof window.showToast === 'function') {
                    window.showToast('success', 'Success', 'AI content inserted successfully!');
                }

                // Close modal
                this.aiModalOpen = false;
            }
        }
    }
</script>
@endpush
