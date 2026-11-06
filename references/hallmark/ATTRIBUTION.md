# Attribution — hallmark

- **Original repository:** nutlope/hallmark
- **Author:** Nutlope — made by Together AI (per upstream README; live demo at usehallmark.com)
- **Original URL:** https://github.com/nutlope/hallmark
- **License:** MIT License — see `LICENSE` in this folder (Copyright (c) 2026 Hallmark contributors). Note: the photo library it references (`skills/hallmark/scripts/photos.json`) lists Wikimedia Commons photographs that keep their own licences (CC0, public domain, CC BY, CC BY-SA) and are credited on the page when used.
- **Mirrored snapshot:** commit `407fa689f4a276f2fd389208d271d0fef08f5058` (2026-11-05), shallow clone (`--depth 1`, full tree — no dependency caches to strip)
- **What it is:** A design skill for AI coding agents (Claude Code, Codex, Cursor, OpenCode) that refuses to look AI-generated. It deals one of fifty material themes per build (each theme is a single small file in `skills/hallmark/references/themes/` with a picture of a finished page), lays the page out from the job it has to do, and lints the result in a real browser (`skills/hallmark/scripts/sloplint.mjs --render`) against the tells that read as machine-made: the eyebrow label above every heading, one coloured word in a headline, a page of empty frames, a hero that misses its screen. Gates come in tiers — **Floor** never ships, **Reflex** defaults can be overruled on the record, **Finish** is craft detail. It also has named modes: `redesign` rebuilds a page while keeping its content and wiring, `audit` only reports. Upstream install: `npx skills add nutlope/hallmark`.
- **Why it's here:** The anti-slop enforcement reference. This library already carries guidance and taste (impeccable, taste-skill — two of hallmark's own stated inspirations); hallmark adds the enforced floor on top: tiered gates plus a browser lint a build must pass before it ships. Study it when a page build or redesign needs a material direction with proof the result does not read as machine-made.

This folder mirrors the upstream repository verbatim, plus this attribution file. Do not hand-edit mirrored files; upstream changes come from the original repository.
