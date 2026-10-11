# Commit Message Convention

This project follows the [Conventional Commits](https://www.conventionalcommits.org/) specification.

## Format

```
<type>[optional scope]: <description>

[optional body]

[optional footer(s)]
```

## Types

- **feat**: A new feature
- **fix**: A bug fix
- **docs**: Documentation only changes
- **style**: Changes that do not affect the meaning of the code
- **refactor**: A code change that neither fixes a bug nor adds a feature
- **perf**: A code change that improves performance
- **test**: Adding missing tests or correcting existing tests
- **chore**: Changes to the build process or auxiliary tools
- **ci**: Changes to CI configuration files and scripts
- **build**: Changes that affect the build system or external dependencies
- **revert**: Reverts a previous commit

## Examples

```
feat: add user authentication system
fix: resolve login redirect issue
docs: update API documentation
refactor: simplify user service methods
```

## Usage

### Option 1: Use Commitizen (Recommended)
Instead of `git commit`, use:
```bash
npm run commit
```
This will prompt you through an interactive commit message builder.

### Option 2: Manual Commits
You can still use regular `git commit` commands, but they must follow the conventional format:
```bash
git commit -m "feat: add new dashboard widget"
git commit -m "fix: resolve API timeout issue"
```

## Benefits

1. **Automated Validation**: Commits that don't follow the convention will be rejected
2. **Interactive Commits**: Use `npm run commit` for guided commit creation
3. **Consistent History**: All commits will follow the same pattern
4. **Release Automation**: Tools like `semantic-release` can automatically generate changelogs and version bumps
5. **Better Collaboration**: Team members will understand the nature of changes quickly
