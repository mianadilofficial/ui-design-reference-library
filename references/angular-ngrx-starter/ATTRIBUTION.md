# Attribution

- **Original repository:** https://github.com/tomastrajan/angular-ngrx-material-starter
- **Author:** Tomas Trajan (tomastrajan)
- **License:** MIT (original LICENSE file preserved untouched)
- **Mirrored snapshot commit:** 3d95daa
- **Mirrored on:** 2026-10-12

## Why it was picked

Project-structure gap: the library had no Angular structure reference at
all. This is the canonical production Angular starter: feature-module
organization with lazy loading, NgRx state (store, effects, entity,
router-store), Angular Material theming, testing conventions, and
Angular CLI production config (budgets, prod builds). It directly supports
AGENTS.md section 2b (folder-wise organization, separation of concerns)
for Angular builds.

## What was changed from upstream

- Inner `.git` directory removed (shallow mirror, no history).
- This `ATTRIBUTION.md` added.
- Everything else is verbatim from the upstream snapshot.

## Notes

- `.travis-deploy.sh` references `GH_TOKEN` only as a CI environment
  variable — no hardcoded secret. Secret scan clean.
