# Attribution

- **Original repository:** https://github.com/satnaing/shadcn-admin
- **Author:** Sat Naing (satnaing)
- **License:** MIT (original LICENSE file preserved untouched)
- **Mirrored snapshot commit:** e16c87f
- **Mirrored on:** 2026-10-13

## Why it was picked

Patterns gap: the library had dashboard kits (tabler-dashboard) but no
modern shadcn-style admin dashboard built on Vite + React. This is the
canonical shadcn admin template (~15.7k stars): sidebar layouts, data
tables, forms, auth pages, settings screens, dark mode — the reference
implementation for "admin panel / dashboard" builds in the shadcn idiom.

## What was changed from upstream

- Inner `.git` directory removed (shallow mirror, no history).
- This `ATTRIBUTION.md` added.
- Everything else is verbatim from the upstream snapshot.

## Notes

- `.env.example` contains only an empty `VITE_CLERK_PUBLISHABLE_KEY`
  placeholder — no real secrets. Secret scan clean.
