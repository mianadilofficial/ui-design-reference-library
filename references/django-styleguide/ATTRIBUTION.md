# Attribution

- **Original repository:** https://github.com/HackSoftware/Django-Styleguide
- **Author:** HackSoft (HackSoftware)
- **License:** MIT (original LICENSE file preserved untouched)
- **Mirrored snapshot commit:** d43445a
- **Mirrored on:** 2026-10-12

## Why it was picked

Project-structure gap: the library had only 2 structure references
(realworld, bulletproof-react — both React/JS-centric). Django-Styleguide
is the canonical opinionated guide to structuring Django projects at
scale: services/selectors pattern, where business logic should and should
not live, API/serializer conventions, testing, Celery layout. It directly
supports AGENTS.md section 2b (separation of concerns, folder-wise
organization) for Django builds.

## What was changed from upstream

- Inner `.git` directory removed (shallow mirror, no history).
- This `ATTRIBUTION.md` added.
- Everything else is verbatim from the upstream snapshot.
