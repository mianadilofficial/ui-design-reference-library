# Attribution

- **Original repository:** https://github.com/timlrx/tailwind-nextjs-starter-blog
- **Author:** Timothy Lin (timlrx)
- **License:** MIT (original LICENSE file preserved untouched)
- **Mirrored snapshot commit:** b45bef6
- **Mirrored on:** 2026-10-12

## Why it was picked

Patterns gap: the library had landing-page, dashboard, and portfolio
patterns but no blog pattern. This is the canonical Next.js + Tailwind
MDX blog starter (App Router, React Server Components, Contentlayer):
post listing, tags, search, comments (Giscus/Disqus), newsletter hooks,
RSS, multi-theme. It is the reference implementation for "content site"
builds.

## What was changed from upstream

- Inner `.git` directory removed (shallow mirror, no history).
- This `ATTRIBUTION.md` added.
- Everything else is verbatim from the upstream snapshot.

## Notes

- `.env.example` contains only empty placeholder values (Giscus,
  newsletter provider keys) — no real secrets. Secret scan clean.
