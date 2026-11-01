---
version: alpha
name: Vite
category: "Developer Tools & IDEs"
description: "Vite (vite.dev) is a near-black #16171d page built on VoidZero's VitePress theme: APK Protocol display type (60px/500, -3px tracking), Inter body at 16px/26px in 70%-white #ffffffb2, KH Teka Mono uppercase labels, a white #ffffff 8px-radius 'Get Started' button, Vite violet #b39aff hover accents, #3b3440 hairlines and deep purple #370a7f glows and banners."
colors:
  canvas: "#16171d"
  ink: "#ffffffb2"
  primary: "#ffffff"
  on-primary: "#16171d"
  banner: "#370a7f"
  slate: "#14121a"
  search-text: "#98989f"
  grey: "#867e8e"
  vite: "#b39aff"
  nickel: "#3b3440"
typography:
  display:
    fontFamily: "\"APK Protocol\", sans-serif"
    fontSize: 60px
    fontWeight: 500
    lineHeight: 67.2px
    letterSpacing: "-3px"
  display-mobile:
    fontFamily: "\"APK Protocol\", sans-serif"
    fontSize: 36px
    fontWeight: 500
    lineHeight: 40px
    letterSpacing: "-1.8px"
  heading:
    fontFamily: "\"APK Protocol\", sans-serif"
    fontSize: 48px
    fontWeight: 500
    lineHeight: 48px
    letterSpacing: "-1.2px"
  subheading:
    fontFamily: "\"APK Protocol\", sans-serif"
    fontSize: 40px
    fontWeight: 500
    lineHeight: 53.3333px
    letterSpacing: "-1px"
  body:
    fontFamily: Inter, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26px
  label:
    fontFamily: "\"KH Teka Mono\", monospace"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 16.5px
    letterSpacing: 0.3px
    textTransform: uppercase
  search:
    fontFamily: Inter, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 13px
  button:
    fontFamily: Inter, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 22.4px
rounded:
  xs: 4px
  sm: 8px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 28px
  s9: 32px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 8px 16px
    height: 38px
  search:
    backgroundColor: "{colors.slate}"
    textColor: "{colors.search-text}"
    typography: "{typography.search}"
    rounded: "{rounded.sm}"
    padding: 8px 12px
    height: 38px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    padding: 20px 24px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
    padding: 0px 8px
  nav-link-hover:
    textColor: "{colors.vite}"
  announcement:
    backgroundColor: "{colors.banner}"
    textColor: "{colors.primary}"
    typography: "{typography.label}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
---

# Vite

## Overview

Vite's page title is "Vite | Next Generation Frontend Tooling" and its hero headline is "The Build Tool for the Web", followed by "Vite is a blazing fast frontend build tool powering the next generation of web applications." The vite.dev home page (7910px tall at 1280px) is a single near-black canvas lit by deep purple. A thin purple announcement bar ("VITECONF 2026 - OCTOBER 15, ONLINE") in uppercase mono sits above a header with the Vite logo, nav (Guide, Config, Plugins, Resources, the version "v8.3.4"), a dark search box with ⌘K and social icons.

The hero is left-aligned: a "Brought to you by VOID(0)" tag, the APK Protocol headline, a white "Get Started" button with a "View on GitHub" link, and a tabbed install command (npm, Yarn, pnpm, Bun, Deno: `$ npm create vite@latest`). At the right, a line-art isometric stack of glowing tiles. A "Trusted by the world's best software teams" logo strip (OpenAI, Shopify, Stripe, Linear, ClickUp, Wiz) leads into grid sections — "Redefining developer experience" (Instant Server Start, Lightning Fast HMR, Rich Features Out of the Box, Optimized Build), "A shared foundation to build upon" (Flexible Plugin System, Fully Typed API, First class SSR Support, Continuous ecosystem integration) — each cell pairing short copy with a purple-glow terminal or isometric illustration. "Powering your favorite frameworks and tools" shows a row of framework icons converging on a central chip; "Loved by the community" shows 80k+ GitHub stars, 80m+ weekly npm downloads and a masonry of testimonials; "Free & open source" credits VoidZero and lists partner and sponsor logos; a full-width purple gradient panel "Start building with Vite" closes above a four-column footer.

The art direction is dark, technical and precise: thin #3b3440 grid lines, monospace labels, and violet light.

## Colors

The theme publishes named colour variables, and the measured values match them:

- **canvas #16171d** — `--color-primary`; the body, header and footer background (74% of the capture).
- **ink #ffffffb2** — white at 70%, the most-read text colour (body paragraphs, testimonials).
- **primary #ffffff** — `--color-white`; the "Get Started" fill, headings, nav links.
- **on-primary #16171d** — the Get Started label.
- **grey #867e8e** — `--color-grey`; the second most-read text colour (889 characters), used for secondary text.
- **vite #b39aff** — `--color-vite`; the measured hover colour of nav links and small accent text. In the theme's dark mode, `--color-brand` resolves to `var(--color-vite)`.
- **banner #370a7f** — the deep purple of the announcement bar and the second-largest background area.
- **slate #14121a** — `--color-slate`; the search field fill, with **search-text #98989f**.
- **nickel #3b3440** — `--color-nickel`; the hairline colour of grid borders (16 uses).

The live CSS also defines `--color-electric: #6c3bff` (aliased as `--color-brand`), `--color-zest: #22ff73`, `--color-aqua: #32f3e9`, `--color-wine: #140033`, `--color-midnight: #0c0912` and `--color-beige: #f4f3ec`; the purple glows in the illustrations come from imagery and were not measured as CSS colours.

## Typography

Three families, each with a job:

- **APK Protocol** (500) for display. **display** 60px / 500 / 67.2px with -3px tracking (the hero h1); **heading** 48px / 500 / 48px, -1.2px for section titles; **subheading** 40px / 500 / 53.3333px, -1px ("Loved by the community"). Mobile h1: 36px / 500 / 40px, -1.8px.
- **Inter** (variable 100–900) for reading. **body** 16px / 400 / 26px; 18px is used nearly as often. **button** 16px / 500 / 22.4px; the search field 13px / 400.
- **KH Teka Mono** (400, 500) for labels. **label** 12px / 500 / 16.5px, 0.3px tracking, uppercase — the announcement bar, "Trusted by" and sponsor-tier headings. The theme sets `--font-mono: "KH Teka Mono", monospace`.

APK Protocol and KH Teka are commercial faces. When they are unavailable, a geometric grotesk with tight tracking replaces APK Protocol and any monospace replaces KH Teka Mono; the theme's own fallbacks are `sans-serif` and `monospace`.

## Layout

The page is one #16171d band from y=40 to the bottom with content between x=57 and x=1223. Sections are bordered grids: two-column cells separated by 1px #3b3440 lines, each with a heading, a short description and an illustration. The extractor recorded up to five columns in a row (logo strip) and two card columns. Headings for each section are centred above their grid; the hero is left-aligned with the illustration on the right.

Spacing is on a 4px grid. Gaps: 12px (most common), 20px, 16px, 24px, 8px, 4px, with 80px between larger blocks. Paddings: 40px and 32px dominate (grid cells), then 28px, 64px, 60px, 112px and 120px for section rhythm. Spacing tokens span 4px to 40px. The theme sets `--vp-sidebar-width: 272px` and `--vp-banner-height: 40px` for docs pages.

## Elevation & Depth

No drop shadows are used on the home page beyond a single `rgb(0, 0, 0) 0px -1px 0px 0px inset` line. On hover, the Get Started link measured a Tailwind-style shadow ending in `rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.1) 0px 2px 4px -2px`. The theme defines `--vp-shadow-1` to `--vp-shadow-5` for docs UI (for example `--vp-shadow-3: 0 12px 32px #0000001a, 0 2px 6px #00000014`). On the home page, depth is light, not shadow: purple radial glows behind terminals and isometric tiles, and glowing edges on the 3D chips.

## Shapes

Corners are small. **sm 8px** is the main radius (14 uses): buttons, the search field, terminal windows. **xs 4px** is used for small chips and tabs (10 uses). Tab groups round only the top or bottom pair of corners (8px 8px 0px 0px and 0px 0px 8px 8px). Grid cells are square, framed by hairlines. Illustrations use isometric squares and rounded-square chips, echoing the 8px radius.

## Components

- **Primary button** — "Get Started": #ffffff fill, #16171d Inter 16px/500 label, 8px radius, 8px 16px padding, 38px tall.
- **Secondary link** — "View on GitHub": plain white text next to the button.
- **Search** — #14121a fill, #98989f 13px text with a ⌘K hint, 8px radius, 8px 12px padding, 38px tall.
- **Header** — #16171d, white Inter 16px links with 0px 8px padding, 20px 24px header padding, 81px tall; link hover #b39aff.
- **Announcement bar** — #370a7f, white KH Teka Mono 12px uppercase.
- **Install tabs** — package-manager tabs above a command line `$ npm create vite@latest`.
- **Feature cell** — heading in white, short grey description, illustration below, framed by #3b3440 lines.
- **Terminal card** — dark window with mono output, set on a purple glow.
- **Testimonial card** — quote in #ffffffb2 (the measured body paragraph), avatar, name and handle.
- **Stat** — large "80k+" / "80m+" figures with small grey captions.
- **Footer** — four link columns (Vite, Resources, Versions, Social) on #16171d.

## Design System Architecture

Vite has no public brand-guidelines page (https://vite.dev/brand returns 404). The documentation site lives in https://github.com/vitejs/vite under `docs/.vitepress`. Its theme entry (https://raw.githubusercontent.com/vitejs/vite/main/docs/.vitepress/theme/index.ts) imports `@voidzero-dev/vitepress-theme/src/vite`, a shared VoidZero VitePress theme, and `styles.css` (https://raw.githubusercontent.com/vitejs/vite/main/docs/.vitepress/theme/styles.css) sets the Vite variant: `--color-brand: #6b1eb9` for light mode and `--color-brand: var(--color-vite)` for dark mode. The measured page exposes the theme's layers: named brand colours (`--color-primary`, `--color-vite`, `--color-nickel`, `--color-slate`, `--color-grey`, `--color-electric`), VitePress variables (`--vp-c-brand-1` to `--vp-c-brand-3`, `--vp-c-text-*`, `--vp-shadow-*`, `--vp-font-family-mono`), Tailwind v4 scales (`--radius-sm`, `--container-md`, `--blur-2xl`) and DocSearch variables. Light mode was not measured.

## Do's and Don'ts

**Do**
- Keep the canvas #16171d and text in white at 100% (headings) and 70% (body).
- Use APK Protocol 500 with tight negative tracking for headlines, Inter for text, KH Teka Mono uppercase for labels.
- Frame sections as grids with 1px #3b3440 lines.
- Use #b39aff for hover and small accents; let purple glows carry colour.
- Make the main action a white 8px-radius button.

**Don't**
- Don't fill buttons with purple; the measured primary action is white.
- Don't round corners beyond 8px.
- Don't add drop shadows to cards; use lines and glow.
- Don't set body copy in pure white; it is #ffffffb2.
- Don't use the theme's light-mode brand #6b1eb9 on the dark page.

## Responsive Behavior

Measured at 390px: the h1 becomes APK Protocol 36px / 500 / 40px with -1.8px tracking (from 60px), the h2 30px / 500 / 36px with -0.75px (from 48px), and testimonial body text 14px / 400 / 22.75px (from 16px / 26px). The Get Started button keeps 16px / 500, 8px radius, 8px 16px padding and 38px height. One header link is visible and a menu toggle labelled "Toggle navigation menu" appears (nine links and no toggle on desktop). Content runs from x=20 to x=370; maximum card columns stays two. Intermediate breakpoints were not measured.

## Iteration Guide

1. Canvas #16171d; headings #ffffff; body #ffffffb2; secondary #867e8e.
2. Load APK Protocol (display), Inter (text), KH Teka Mono (labels); keep the measured tracking.
3. Primary button: white, #16171d label, 8px radius, 8px 16px, 38px.
4. Lay sections out as hairline grids (#3b3440) with 32–40px cell padding.
5. Accent only with #b39aff and purple light; reach for `--color-*` variables before inventing colours.
6. Keep the purple #370a7f band for announcements.
