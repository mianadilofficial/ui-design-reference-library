/**
 * Prevent navigation if form is dirty (unsaved changes)
 */
document.addEventListener('DOMContentLoaded', function () {
    let isFormDirty = false;
    const formSelector = 'form[data-prevent-unsaved-changes], form.prevent-unsaved-changes';
    const forms = document.querySelectorAll(formSelector);

    // Mark form as dirty on change.
    forms.forEach(form => {
        form.addEventListener('change', () => {
            isFormDirty = true;
        }, { capture: true });

        form.addEventListener('input', () => {
            isFormDirty = true;
        }, { capture: true });

        // Optional: reset dirty on submit.
        form.addEventListener('submit', () => {
            isFormDirty = false;
        });
    });

    // Intercept link clicks.
    document.body.addEventListener('click', function (e) {
        if (!isFormDirty) return;
        let target = e.target;

        // Find closest anchor.
        while (target && target.tagName !== 'A') {
            target = target.parentElement;
        }

        if (target && target.tagName === 'A' && target.href && !target.hasAttribute('data-allow-leave')) {
            // Ignore anchor if target is _blank.
            if (target.target === '_blank') return;

            // Confirm navigation.
            if (!confirm('You have unsaved changes. Are you sure you want to leave this page?')) {
                e.preventDefault();
                e.stopPropagation();
            } else {
                isFormDirty = false;
            }
        }
    }, true);

    // Warn on tab close.
    window.addEventListener('beforeunload', function (e) {
        if (isFormDirty) {
            e.preventDefault();
            e.returnValue = 'You have unsaved changes. Are you sure you want to leave?';
            return 'You have unsaved changes. Are you sure you want to leave?';
        }
    });
});
