# Contributing

Thanks for helping grow this library. Every addition makes the reference pool
stronger — but quality and legality come first, so please follow this flow.

## Suggesting a reference

1. **Open an issue** using the *New reference* template — include the repo URL,
   what category it fits, and why it's worth mirroring.
2. A maintainer reviews: license compatibility, attribution completeness and
   relevance. If it passes, it's added with full attribution.

Or open a PR directly if you've already prepared the mirror (see below).

## Adding a reference (PR checklist)

- [ ] The source repo is **public** with a clear license. Allowed: MIT,
      Apache-2.0, BSD, ISC and similar permissive licenses. Flag anything
      else (e.g. Commons Clause, GPL) in the PR — it needs a maintainer call.
- [ ] Mirror is a **snapshot** (`git clone --depth 1`), inner `.git` removed —
      no submodules, no full history.
- [ ] `ATTRIBUTION.md` added at the folder root with: original repo name,
      author, original URL, license (+ holder), mirrored commit hash and date,
      one-line description of what it is and why it's here.
- [ ] Original `LICENSE` file preserved inside the folder.
- [ ] **Secret scan clean** — no API keys, tokens or private keys in the mirror.
- [ ] `INDEX.md` updated with the new entry (category table).
- [ ] Do not edit the mirrored files themselves — only add `ATTRIBUTION.md`.

## What doesn't belong here

- Repos without a license, or with unclear redistribution rights
- Your own unpublished work (this library curates public references)
- Bulk/low-quality additions — one strong reference beats ten mediocre ones

## Code of conduct

Be respectful. Attribution is sacred here: never strip or obscure an
original author's credit.
