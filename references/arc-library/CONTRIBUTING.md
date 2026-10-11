# Contributing to Arc Library

Thanks for helping make Arc better. Bug reports, fixes, accessibility improvements and component ideas are all welcome.

## Before you start

- **This repository is generated.** Each release replaces its contents with a fresh export from the maintainer's source, so pull requests are not merged directly. Accepted changes are ported to the source and ship here, credited to you, with the next release.
- **Open an issue first** for anything larger than a small fix, so we can agree on the approach before you spend time on it.
- **Search existing issues** before opening a new one.

## Reporting a bug

Use the [bug report form](https://github.com/kuratlielia/arc-library/issues/new?template=bug_report.yml). Include the item id (for example `date-picker`), your framework (Next.js or Vite), browser, and the smallest steps that reproduce it. A screen recording helps a lot for motion bugs.

## Requesting a component

Use the [component request form](https://github.com/kuratlielia/arc-library/issues/new?template=component_request.yml). Describe the job it does and where you would use it; links to examples you like are useful.

## Making a change

```bash
git clone https://github.com/kuratlielia/arc-library.git
cd arc-library
npm install
npm run typecheck
npm run lint
```

- Keep each pull request focused on one component or block.
- Style with CSS modules and the tokens in `registry/foundation.css`. No raw colors, no new global CSS.
- Animate with the presets in `lib/motion-tokens.ts`, and give every animation a reduced motion branch.
- Use semantic HTML and make every interaction work with the keyboard and a screen reader.
- Check light and dark themes, and a narrow viewport.
- Write copy in sentence case.
- `npm run typecheck` and `npm run lint` must pass. CI runs both on every pull request.

## Licensing

By contributing, you agree that your contribution is licensed under the [MIT License](./LICENSE).

## Code of conduct

This project follows the [Contributor Covenant](./CODE_OF_CONDUCT.md). By taking part, you agree to uphold it.
