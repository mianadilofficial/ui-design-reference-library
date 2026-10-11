@props([
    'copyValue' => null,
    'label' => null,
    'copiedLabel' => null,
    'variant' => 'secondary',
    'class' => '',
])

@php
    $displayLabel = $label ?? __('Copy');
    $displayCopiedLabel = $copiedLabel ?? __('Copied');
    $variantClass = match ($variant) {
        'primary' => 'btn-primary',
        'success' => 'btn-success',
        'danger' => 'btn-danger',
        'warning' => 'btn-warning',
        'info' => 'btn-info',
        default => 'btn-secondary',
    };
@endphp

<button
    type="button"
    x-data="copyButton(@js($displayCopiedLabel))"
    x-on:click="copy()"
    @if ($copyValue !== null) data-copy-value="{{ $copyValue }}" @endif
    {{ $attributes->merge(['class' => trim("btn {$variantClass} shrink-0 {$class}")]) }}
>
    <span class="inline-flex items-center gap-1.5" x-show="! copied">
        <iconify-icon icon="lucide:copy" width="14" height="14" aria-hidden="true"></iconify-icon>
        <span>{{ $displayLabel }}</span>
    </span>
    <span class="inline-flex items-center gap-1.5" x-show="copied" x-cloak>
        <iconify-icon icon="lucide:check" width="14" height="14" class="text-emerald-500" aria-hidden="true"></iconify-icon>
        <span x-text="copiedLabel"></span>
    </span>
</button>

@once
    @push('scripts')
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.data('copyButton', (copiedLabel = @js(__('Copied'))) => ({
                    copied: false,
                    copiedLabel,

                    async copy() {
                        if (this.$el.disabled) {
                            return;
                        }

                        const text = this.$el.getAttribute('data-copy-value') ?? '';

                        if (! text) {
                            return;
                        }

                        try {
                            if (navigator.clipboard && window.isSecureContext) {
                                await navigator.clipboard.writeText(text);
                            } else {
                                const textarea = document.createElement('textarea');
                                textarea.value = text;
                                textarea.style.position = 'fixed';
                                textarea.style.left = '-9999px';
                                document.body.appendChild(textarea);
                                textarea.select();
                                document.execCommand('copy');
                                document.body.removeChild(textarea);
                            }

                            this.copied = true;
                            setTimeout(() => {
                                this.copied = false;
                            }, 2000);
                        } catch (error) {
                            if (typeof window.showToast === 'function') {
                                window.showToast('error', @js(__('Error')), @js(__('Failed to copy to clipboard')));
                            }
                        }
                    },
                }));
            });
        </script>
    @endpush
@endonce
