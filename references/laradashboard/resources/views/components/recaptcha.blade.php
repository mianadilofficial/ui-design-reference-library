@props(['page'])

@php
    $recaptchaService = app(\App\Services\RecaptchaService::class);
    $isEnabled = $recaptchaService->isEnabledForPage($page);
    $siteKey = $recaptchaService->getSiteKey();
    $badgePosition = config('settings.recaptcha_badge_position', 'left');
@endphp

@if($isEnabled && $siteKey)
    <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response-{{ $page }}">
    
    @error('recaptcha')
        <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
    @enderror

    @push('scripts')
        {!! $recaptchaService->getScriptTag() !!}

        <style>
            .grecaptcha-badge {
                @if($badgePosition === 'left')
                    left: 20px !important;
                    right: auto !important;
                @else
                    right: 20px !important;
                    left: auto !important;
                @endif
                bottom: 20px !important;
                z-index: 100;
            }
        </style>
        
        <script>
            grecaptcha.ready(function() {
                // Find the form containing this reCAPTCHA
                const recaptchaInput = document.getElementById('g-recaptcha-response-{{ $page }}');
                const form = recaptchaInput.closest('form');
                
                if (form) {
                    form.addEventListener('submit', function(e) {
                        e.preventDefault();
                        
                        grecaptcha.execute('{{ $siteKey }}', {action: '{{ $page }}'}).then(function(token) {
                            recaptchaInput.value = token;
                            form.submit();
                        });
                    });
                }
            });
        </script>
    @endpush
@endif