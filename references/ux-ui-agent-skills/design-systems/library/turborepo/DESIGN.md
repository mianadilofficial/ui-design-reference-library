---
version: alpha
name: Turborepo
category: "Developer Tools & IDEs"
description: "Turborepo (turborepo.dev) is a Vercel Geist-system page: off-white #fafafa canvas, GeistSans 64px/450 headline tracked to -3.84px, #4d4d4d 14px body, a near-black #171717 pill 'Get started' button with a white pill 'Read the docs' partner, white 8px-radius cards with #e6e6e6 hairlines, GeistMono terminal snippets and a red-to-blue gradient speedometer."
colors:
  canvas: "#fafafa"
  ink: "#4d4d4d"
  primary: "#171717"
  on-primary: "#ffffff"
  gray-alt: "#ebebeb"
  ink-heading: "#0a0a0a"
  ink-faint: "#a8a8a8"
  ink-muted: "#737373"
  green-text: "#107d32"
  hairline: "#e6e6e6"
typography:
  display:
    fontFamily: GeistSans, "GeistSans Fallback"
    fontSize: 64px
    fontWeight: 450
    lineHeight: 64px
    letterSpacing: "-3.84px"
  display-mobile:
    fontFamily: GeistSans, "GeistSans Fallback"
    fontSize: 40px
    fontWeight: 450
    lineHeight: 48px
    letterSpacing: "-2.4px"
  heading:
    fontFamily: GeistSans, "GeistSans Fallback"
    fontSize: 40px
    fontWeight: 450
    lineHeight: 48px
    letterSpacing: "-2.4px"
  subheading:
    fontFamily: GeistSans, "GeistSans Fallback"
    fontSize: 16px
    fontWeight: 450
    lineHeight: 24px
  body:
    fontFamily: GeistSans, "GeistSans Fallback"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22.75px
  button:
    fontFamily: GeistSans, "GeistSans Fallback"
    fontSize: 15px
    fontWeight: 500
    lineHeight: 22.5px
  nav:
    fontFamily: GeistSans, "GeistSans Fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: GeistSans, "GeistSans Fallback"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
rounded:
  xs: 2px
  sm: 4px
  md: 6px
  lg: 8px
  xl: 16px
  2xl: 20px
  3xl: 24px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 14px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 14px
    height: 40px
  button-secondary:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 14px
    height: 40px
    boxShadow: lab(92.692 0 0) 0px 0px 0px 1px
  search:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.primary}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    padding: 0px 6px 0px 14px
    height: 32px
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, lab(92.692 0 0) 0px 0px 0px 1px
  testimonial-card:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.primary}"
    typography: "{typography.link}"
    rounded: "{rounded.lg}"
    padding: 20px
    borderColor: "{colors.hairline}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.md}"
    padding: 8px
  card:
    textColor: "{colors.ink-heading}"
    rounded: "{rounded.xs}"
    borderColor: "{colors.hairline}"
  footer:
    textColor: "{colors.primary}"
    padding: 40px 24px 24px
---

# Turborepo

## Overview

Turborepo's page title is simply "Turborepo"; the hero says "Your codebase, faster" and "Turborepo is the build system for coding agents. Developers, CI, and agents never do the same work twice." The site moved to turborepo.dev (the queued turbo.build redirects there) and is part of Vercel's product family — the footer is Vercel's full product map (Agent Stack, Core Platform, Security, Tools, Frameworks, SDKs, Build, Learn, Explore, Company, Legal & Trust, Social).

The home page (4686px tall at 1280px) is a quiet, light, engineering-grade layout on #fafafa. A slim header shows the Turborepo logotype, Docs, Blog, Showcase, Enterprise, a Search… ⌘K field, an "Ask AI" button and GitHub. The hero is left-aligned with a large speedometer illustration on the right whose dial runs from blue through purple to red, its needle pointing high. Under the copy, a "For humans / For agents" toggle and an `npm i turbo` command chip with a copy icon.

A stats row follows — "21,167,053 Compute hours saved with Remote Caching" in a red-to-blue gradient, "34.4M Weekly downloads", "31.2K GitHub stars", "2 Open issues". Then three sections of three cards each — "Scale your workflows" (Works with any provider, Remote Caching, Effortless monorepos), "Built for coding agents" (Faster validation loops, Monorepo expertise on demand, Docs right when they're needed) and "Simple setup" (code snippets for `turbo.json`, linking Remote Cache, and repository queries) — a masonry of tweets "What builders say about Turborepo", and a closing "Deploy your Turborepo today" with a black "Get started" pill and the command chip.

## Colors

Colours come from Vercel's Geist palette (`--ds-*` variables on the page):

- **canvas #fafafa** — `--ds-background-200`; the body and header background (90% of the capture).
- **ink #4d4d4d** — the most-read text colour (body paragraphs, header links at rest).
- **ink-heading #0a0a0a** — h1 and h2.
- **primary #171717** — `--ds-gray-1000`; the "Get started" pill fill, card text, nav link hover.
- **on-primary #ffffff** — the Get started label and the fill of white surfaces (cards, Read the docs, search).
- **hairline #e6e6e6** — `--ds-gray-300`; card borders.
- **gray-alt #ebebeb** — a small grey fill.
- **ink-muted #737373** and **ink-faint #a8a8a8** — secondary text and timing figures in terminal cards.
- **green-text #107d32** — success output in terminal snippets ("329 successful, 329 total").

Other measured text colours are #7d00cc (purple syntax), #005ff2 (blue syntax) and #003a00. The illustration and stat gradients use red, purple and blue that come from imagery and gradients rather than flat tokens; small flat fills #ee6d5e, #f3bf4a, #5dc753 and a pale green #d3fad1 were also measured; the capture shows red, amber and green window dots in one terminal card and a pale green highlighted line ("+ app/dashboard").

## Typography

Two families from Geist, both variable (100–900): **GeistSans** for text and **GeistMono** for code (`--font-mono: "GeistMono", ui-monospace, …`).

- **display** — GeistSans 64px / 450 / 64px, -3.84px tracking (h1 and the stat figures). Mobile: 40px / 450 / 48px, -2.4px.
- **heading** — GeistSans 40px / 450 / 48px, -2.4px for section titles ("Scale your workflows"). Mobile h2: 32px / 450 / 40px, -1.28px.
- **subheading** — GeistSans 16px / 450 / 24px for card titles ("Works with any provider").
- **body** — GeistSans 14px / 400 / 22.75px; 14px is the dominant size across the page.
- **button** — GeistSans 15px / 500 / 22.5px for the pill buttons.
- **nav** — 16px / 400 / 24px; **link** — 14px / 500 / 20px (testimonial names, footer links).

Code snippets use GeistMono at 13px and 14px (one card measured -0.35px tracking at 14px). Labels at 11px carry 0.2px tracking. Weight 450 — between regular and medium — is the headline weight. Geist is open-source, so no substitute is needed.

## Layout

The page is a single #fafafa band, content from x=24 to x=1256. The hero is two columns (text left, speedometer right); the stats row is four columns; card sections are three equal columns; the testimonial masonry is three columns; the footer grid reaches six columns (the extractor's maximum). Section headings are left-aligned except "What builders say about Turborepo", which is centred.

Gaps are tight: 6px dominates (168 uses), then 8px, 10px, 5px, 12px, 24px and 32px. Paddings: 2px (inline code chips), 20px (cards), 8px, 12px, 16px, 24px, with 56px, 80px and 160px for section spacing. The page exposes `--spacing: .25rem` (Tailwind v4's 4px base) and `--geist-space-medium: 36px`. Spacing tokens run 2px to 20px.

## Elevation & Depth

Geist uses ring-shadows instead of borders for controls. The most common shadow (9 uses) is `rgba(0, 0, 0, 0.08) 0px 0px 0px 1px, rgba(0, 0, 0, 0.04) 0px 2px 2px 0px, lab(98.144 0 0) 0px 0px 0px 1px` — a hairline ring plus a 2px soft drop. Buttons and the search field carry a single `lab(92.692 0 0) 0px 0px 0px 1px` ring. The design-system variables include `--ds-shadow-border-base: 0 0 0 1px #00000014`, `--ds-shadow-large` and `--ds-shadow-2xl` (`0px 1px 1px #00000005, 0px 4px 8px -4px #0000000a, 0px 16px 24px -8px #0000000f`). Cards are flat white on #fafafa with #e6e6e6 borders; depth stays shallow everywhere.

## Shapes

Pills dominate actions: 27 elements measured a fully rounded radius (stored as **pill 9999px**), including the Get started and Read the docs buttons; the npm chip, the "For humans / For agents" toggle and the footer "New" badges are pill-shaped in the capture. Controls in the header use **md 6px** (search, Ask AI, icon links). Testimonial cards use **lg 8px** (18 uses); feature cards use **xs 2px**. Larger radii were measured on a few elements: **xl 16px** once, **2xl 20px** twice and **3xl 24px** five times. **sm 4px** is used for small chips.

## Components

- **Primary button** — "Get started": #171717 pill, white GeistSans 15px/500, 0px 14px padding, 40px tall.
- **Secondary button** — "Read the docs": white pill, #171717 text, same metrics, 1px ring shadow.
- **Search** — white, #171717 14px "Search…" with a ⌘K hint, 6px radius, 0px 6px 0px 14px padding, 32px tall, ring shadow; hover fill measured lab(95.476 0 0).
- **Ask AI** — white, 14px/500, 6px radius, 0px 6px padding, 32px tall.
- **Nav link** — #4d4d4d at rest, #171717 on hover.
- **Command chip** — `$ npm i turbo` in GeistMono with a copy icon, pill shaped.
- **Feature card** — white illustration area with a 1px #e6e6e6 border and 2px radius, a 16px/450 title and 14px grey description below.
- **Terminal card** — GeistMono 13–14px on #fafafa, green success text, window dots.
- **Testimonial card** — white, 1px #e6e6e6 border, 8px radius, 20px padding, avatar, 14px/500 name, handle and tweet text.
- **Stat** — 64px/450 figure with a 14px caption; the first figure carries a gradient.
- **Footer** — Vercel product map in twelve columns of 14px/500 links with small "New" pills; padding 40px 24px 24px.

## Design System Architecture

Turborepo's site is built on **Geist**, which Vercel describes as "Vercel's design system for building consistent web experiences" (https://vercel.com/geist/introduction) — Geist Sans and Geist Mono typefaces, "a high contrast, accessible color system", materials, layout and React components documented under `/geist/<component>`. The measured page exposes Geist's token layer as `--ds-*` CSS variables: grey ramps (`--ds-gray-300: #e6e6e6`, `--ds-gray-1000: #171717`), colour ramps (`--ds-blue-*`, `--ds-green-*`, `--ds-amber-*`, `--ds-purple-*`, `--ds-red-*`, `--ds-teal-*`, `--ds-pink-*`), `--ds-background-200: #fafafa` and shadow recipes. It also exposes shadcn-style semantic variables (`--background`, `--primary-foreground`, `--card`, `--muted`, `--border: #e5e5e5`), Fumadocs variables (`--color-fd-*`) from the docs framework, `--geistdocs-*` variables and Tailwind v4 scales. No Turborepo-specific brand page was found.

## Do's and Don'ts

**Do**
- Keep the page #fafafa with white cards and #e6e6e6 hairlines.
- Set headlines in GeistSans 450 with strong negative tracking (-3.84px at 64px, -2.4px at 40px).
- Use 14px body in #4d4d4d; reserve #0a0a0a and #171717 for headings and emphasis.
- Make actions pills: black #171717 primary, white secondary with a ring.
- Show code in GeistMono with green success output.
- Use ring shadows, not heavy drop shadows.

**Don't**
- Don't introduce brand colours for buttons; the system is monochrome.
- Don't use bold weights for headlines; 450 is the measured weight.
- Don't round cards like buttons; feature cards are 2px, testimonials 8px.
- Don't put the gradient on more than one hero figure.
- Don't replace Geist with a generic sans when the font is freely available.

## Responsive Behavior

Measured at 390px: the h1 is GeistSans 40px / 450 / 48px with -2.4px tracking (from 64px / -3.84px), the h2 32px / 450 / 40px with -1.28px (from 40px / -2.4px), and body stays 14px / 22.75px. The search control measured full-width (342px) and 36px tall with 18px 6px 18px 14px padding. Three header links are visible plus a menu toggle labelled "Open menu" (seven links and no toggle on desktop). Content runs from x=16 to x=374; maximum card columns measured two. Intermediate breakpoints were not measured.

## Iteration Guide

1. Canvas #fafafa, white cards, #e6e6e6 borders; text #4d4d4d, headings #0a0a0a.
2. Load Geist Sans and Geist Mono; headlines 450 with the measured tracking.
3. Primary action: #171717 pill, 15px/500 white, 0px 14px, 40px; secondary: white pill with a 1px ring.
4. Card grids of three; 20px padding; 6–8px gaps inside components.
5. Pull new colours from the `--ds-*` Geist ramps rather than inventing them.
6. Keep imagery to diagrams, terminals and the speedometer illustration.
