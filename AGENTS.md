# AGENTS.md — How to use this library

This file is for AI agents. It defines how to select references from this
library and the quality bar every UI build must pass.

## 1. Start here, every time

1. Read the task. Identify: **stack** (React, Vue, plain HTML...), **surface**
   (landing page, dashboard, portfolio...), **need** (components, style
   direction, motion, full design system).
2. Open [INDEX.md](INDEX.md) and shortlist references matching the stack and
   need. Prefer the closest stack match; a React animation library helps a
   Vue build less than a Vue one does.
3. Open the shortlisted folders. Read their READMEs and study the actual
   examples — gallery folders, demo components, style/palette data. Do not
   skim file names and guess.
4. Check each folder's `ATTRIBUTION.md` for license constraints before
   reusing code (e.g. Commons Clause forbids selling the mirrored code).

## 2. Ground every design decision in a reference

For each major decision — layout pattern, style direction, color palette,
typography pairing, motion — name the reference that informed it. If you
cannot name one, you are designing from nothing: go back to step 3.

Good: "Hero uses the split-layout pattern from X; palette #7 / soft-ui
direction from ui-ux-pro-max-skill's style taxonomy."
Bad: "I made a modern hero section with a gradient."

## 2b. Structure the project like the references

When the task includes scaffolding (frontend and/or backend), study the
**Project structure** references before writing a single file:

- **Folder-wise organization.** Group by feature or domain (`features/`,
  `modules/`, `routes/`, `services/`...) — never a flat pile of random files
  in one directory.
- **Separation of concerns.** UI components, business logic, data access and
  configuration live in their own places. A component file does not contain
  database queries; a route handler does not contain styling.
- **Backend structure.** API routes/controllers, services, models/schemas,
  middleware, config and tests each get their home. No logic hiding in
  random utility files.
- **Naming that explains itself.** A new developer (or agent) opening the
  repo should understand the architecture from the folder tree alone.
- Name the structure reference you followed, same as design decisions.

## 3. The quality bar (non-negotiable)

- **No generic AI look.** No purple/blue gradients on everything, no identical
  hero → features → testimonial → footer assembly, no lorem ipsum, no
  placeholder boxes where real content should be.
- **Typography is 80% of design.** Pick a deliberate pairing from a reference
  (see ui-ux-pro-max-skill's 74 pairings), set a real type scale, respect
  line-height and measure.
- **Spacing is a system.** Use one spacing scale consistently; eyeballing
  margins per section is not a system.
- **Motion with intent.** One or two purposeful animations beat ten decorative
  ones. Respect `prefers-reduced-motion`.
- **Real content, real states.** Empty states, loading states, error states,
  mobile breakpoints (375px minimum) — a design without them is unfinished.
- **Accessibility baseline.** Contrast 4.5:1 for body text, visible focus
  states, semantic HTML, SVG icons (never emojis as icons).

## 4. What NOT to do

- Do not copy a reference's full page and rebrand it — adapt patterns,
  don't clone identities.
- Do not mix three style directions in one build. Pick one lane.
- Do not present a mirrored repo's work as your own or the user's own.
- Do not edit files inside `references/` — they are verbatim mirrors.
  Put customizations in the project you're building, not in the library.
- Do not add a new reference folder yourself unless the user asked for it;
  suggest it via the CONTRIBUTING flow instead.

## 5. Deliverable checklist

Before calling a UI build done, confirm:

- [ ] Reference(s) used are named
- [ ] One coherent style direction throughout
- [ ] Real type scale + spacing system
- [ ] Responsive at 375 / 768 / 1024 / 1440px
- [ ] No lorem ipsum, no placeholder imagery
- [ ] Contrast + focus states + reduced-motion handled
