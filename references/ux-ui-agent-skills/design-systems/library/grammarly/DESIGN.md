---
version: alpha
name: Grammarly
category: "Productivity & SaaS"
description: "Grammarly's marketing home: white #ffffff canvas, Grammarly green #027e6f Sign up buttons and full-width bands (#014c43 on hover), #1f243c navy-ink copy, Matter 670 headlines at 42px with -0.42px tracking over Glyph 14px/21px body, 6px button corners, 8px #ebebeb-bordered feature cards."
colors:
  canvas: "#ffffff"
  ink: "#1f243c"
  ink-headline: "#0e101a"
  ink-graphite: "#2e2e2e"
  ink-card: "#000000"
  charcoal: "#1c1c1c"
  primary: "#027e6f"
  on-primary: "#ffffff"
  primary-hover: "#014c43"
  hairline: "#ebebeb"
  on-dark: "#f5f5f5"
typography:
  display:
    fontFamily: matter, sans-serif
    fontSize: 42px
    fontWeight: 670
    lineHeight: 46px
    letterSpacing: "-0.42px"
  display-mobile:
    fontFamily: matter, sans-serif
    fontSize: 30px
    fontWeight: 670
    lineHeight: 34px
    letterSpacing: "-0.3px"
  heading:
    fontFamily: matter, sans-serif
    fontSize: 36px
    fontWeight: 670
    lineHeight: 40px
    letterSpacing: "-0.36px"
  subheading:
    fontFamily: Matter, Inter, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Helvetica Neue", sans-serif
    fontSize: 20.006px
    fontWeight: 600
    lineHeight: 24.0016px
  body:
    fontFamily: glyph, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  button:
    fontFamily: Glyph, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Helvetica Neue", sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: Glyph, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Helvetica Neue", sans-serif
    fontSize: 16px
    fontWeight: 400
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 10px
  xl: 20px
  2xl: 38px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 12px
  s5: 14px
  s6: 16px
  s7: 17px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 16px 24px
    height: 60px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-header:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 8px
    height: 34px
  button-dark:
    backgroundColor: "{colors.charcoal}"
    textColor: "{colors.on-dark}"
    rounded: "{rounded.sm}"
    padding: 16px 24px
    height: 60px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.charcoal}"
    padding: 0px 24px
    height: 65px
  nav-link:
    textColor: "{colors.charcoal}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-card}"
    rounded: "{rounded.md}"
    borderColor: "{colors.hairline}"
  footer:
    textColor: "{colors.ink}"
    padding: 16px 80px
---

# Grammarly

## Overview

The measured page is `https://www.grammarly.com/`, titled "Grammarly: Free AI Writing Assistance", language `en-US`. It is the marketing home for Grammarly's writing assistant, now positioned as "an AI partner" for work. Grammarly's About page states that the company acquired Coda and Superhuman Mail in 2025 and has renamed itself Superhuman, with Grammarly remaining the core writing product; the home page itself carries a section headed "Grammarly is now a part of Superhuman".

The look is clean, white and product-led. The headline "Think big. We'll take care of the details." sits centred above a teal "Sign up — It's free" button and a white "Sign up with Google" button. Below it, three bordered feature cards (Paragraph rewrites, Tone suggestions, Proofreading), a logo strip ("Trusted by 50,000 organizations and 40 million people"), then a sequence of left-text / right-demo rows showing Grammarly suggestions inside real-looking writing UIs — highlighted sentences, suggestion popovers, the round green Grammarly "G" button. A pricing section ("Choose the right Grammarly plan") compares Free and Enterprise with checkmark lists. A full-width green band asks "What's the ROI on better work?" and is followed by customer stat cards ("20 days", "50%", "$210K", "3x").

The voice is confident and plain: "Better writing, better results", "Keep your voice, make it clear", "Get a read on your writing", "This is responsible AI". Illustration is minimal; the product UI is the illustration.

## Colors

- **canvas `#ffffff`** — page background; 79% of the capture's pixels.
- **primary `#027e6f`** — Grammarly green: all Sign up buttons, inline links, the ROI band and the stats band behind the carousel. Second-largest background by area. The stylesheet names it `--green-60` and `--color-logo-grammarly-primary`.
- **primary-hover `#014c43`** — measured hover fill of the Sign up buttons (`--origin-green-90`).
- **on-primary `#ffffff`** — button labels and text on green bands.
- **ink `#1f243c`** — the most-read text color (3,280 characters), a deep navy used for body copy and h2s.
- **ink-headline `#0e101a`** — the h1 colour, almost black with a blue cast.
- **ink-graphite `#2e2e2e`** and **ink-card `#000000`** — neutral dark text inside cards and UI demos.
- **charcoal `#1c1c1c`** — nav text and the fill of the dark "Learn more" button (with `#f5f5f5` text).
- **hairline `#ebebeb`** — 1px card borders.

More measured text colours: `#0d8065`, `#545454`, `#4d536e` (the "Sign up with Google" label), `#707070`. Measured borders: `#6d758d`, `#d9d9d9`, `#c6cbde`. Inline links hover to `rgb(1, 106, 94)` (`#016a5e`, `--origin-green-80`) with an underline. Focus uses a layered ring: `2px solid rgb(2, 126, 111)` outline at 2px offset plus `rgb(255, 255, 255) 0px 0px 0px 2px, rgb(99, 142, 235) 0px 0px 0px 4px` box-shadow.

## Typography

Three families are loaded: **Matter** (670) for headlines, **Glyph** (400 and 700) for UI and body, and **Inter** appears in the subheading stack. Glyph carries most characters (2,522 as "Glyph" plus 2,204 as "glyph"); Matter 317 plus 78. Matter is a commercial grotesque and Glyph is Grammarly's own UI face; substitute Inter (already in the declared stack) for both if they are unavailable.

- **display** — Matter 42px / 670 / 46px, letter-spacing -0.42px. The h1 and "What's the ROI on better work?".
- **heading** — Matter 36px / 670 / 40px, -0.36px. Section h2s: "Better writing, better results", "Grammarly is now a part of Superhuman".
- **subheading** — Matter 20.006px / 600 / 24.0016px. Feature card titles.
- **body** — Glyph 14px / 400 / 21px. Paragraphs and legal copy.
- **button** — Glyph 14px / 400 / 24px.
- **nav** — Glyph 16px / 400.

Stat numbers ("20 days", "$210K") and "Great writing gets work done" measured 46px / 670. Other sizes by frequency: 16px, 18px, 16.002px, 20px, 12px. Weights: 400, 670, 700, 600. Headlines use the unusual 670 weight with tight tracking of -1% of the size.

## Layout

At 1280px the page is 8,433px tall. Measured bands: a 4,865px white band (content x=80–1247, up to eight columns across the logo strip and pricing); a 493px green band (x=237–1043, one centred column); a 474px band of stat cards over imagery (x=112–1093); a 246px green band; and a 2,356px white band (x=80–1200) with the Superhuman section, the closing "Great writing gets work done" CTA and the footer. The footer pads `16px 80px` and has five link columns (Get Grammarly, Learn more, Features, Company, Connect).

Spacing: most common gaps 8px, 16px, 24px, 40px; most common paddings 24px, 8px, 32px, 80px, 16px, 96px. Content rows alternate text and product demo with generous white space between sections.

## Elevation & Depth

No box shadows were measured on the page. Separation comes from 1px `#ebebeb` borders on cards, from green bands and from the product screenshots themselves. The stylesheet defines an elevation token, `--elevation-medium-shadow: 0px 1px 8px 0.5px rgba(112,112,112,0.4)`, but no element on the measured page used it. Keep the marketing surface flat and bordered.

## Shapes

Measured radii: `6px` (14 elements — buttons), `8px` (12 — cards), `4px` (7 — nav buttons like "Product"), `10px` (4), `50%` (3 — round avatar and icon buttons, such as the carousel arrows), `38px` and `20px` (one each) and `8px 0px 0px 8px` (one split control). Corners are modest; nothing on the page is a pill except circles.

## Components

- **button-primary** — `#027e6f`, white Glyph 14px label "Sign up" with "It's free" on a second line, `16px 24px` padding, 60px tall, 6px radius. Hover `#014c43`.
- **button-header** — the same green, `0px 8px` padding, 34px tall, in the header next to "Request a demo" and "Log in".
- **button-dark** — "Learn more": `#1c1c1c` fill, `#f5f5f5` 14px/700 label, `16px 24px`, 60px, 6px radius.
- **button-white** — "Explore Enterprise": white fill, `#1c1c1c` 14px/700 label, same geometry, on the green band.
- **Google button** — white with a border, `#4d536e` label and Google logo.
- **nav** — white, 65px tall, `0px 24px` padding; menu buttons "Product", "Work", "Education", "Resources" with chevrons and 4px radius; links underline on hover.
- **feature card** — white, 1px `#ebebeb` border, 8px radius, Matter 20px/600 title, Glyph body.
- **link** — `#027e6f`, underline and `#016a5e` on hover.

## Design System Architecture

No public Grammarly design system site was found. Grammarly's About page (https://www.grammarly.com/about) lists no brand or design links, and https://www.grammarly.com/press now redirects (301) to https://superhuman.com/press.

The shipped CSS shows a substantial internal token system: 400 custom properties on the root. Most are prefixed `--origin-` and follow a layered naming pattern — raw ramps (`--origin-green-80` `#016a5e`, `--origin-green-90` `#014c43`, `--origin-blue-40` `#3e6cf4`, `--origin-purple-60` `#5e47e5`, `--origin-mulberry-100` `#421d24`), semantic roles (`--origin-color-icon-interactive-default` `#027e6f`, `--origin-color-fill-hover-subdued` `#f5f5f5`, `--origin-color-underline-critical-default` `#ff4d45`), spacing (`--origin-space-x-xlarge` 16px, `--origin-space-gap-small` 2px), type (`--origin-heading-size-xxsmall` 14px, `--origin-line-height-heading-large` 30px) and component tokens (`--button-premium-background-default` `#ffbf47`, `--button-ghost-background-hover` `#eafaf9`). Superhuman brand colours already appear in the same layer (`--origin-color-logo-superhuman-primary` `#421d24`), and a monospace family `"Super Sans Mono VF"` is declared.

## Do's and Don'ts

**Do**
- Keep the page white and use `#027e6f` for every primary action and for full-width emphasis bands.
- Set headlines in Matter 670 with -1% letter-spacing; keep body in Glyph 14–16px.
- Use 6px corners on buttons and 8px on cards with a 1px `#ebebeb` border.
- Show the product: real text with Grammarly highlights and suggestion cards as the hero imagery.
- Use the layered focus ring (green outline, white gap, blue outer ring).
- Darken green on hover to `#014c43`.

**Don't**
- Don't use pure black for long copy; body ink is navy `#1f243c`.
- Don't add drop shadows to marketing cards.
- Don't make buttons pills; the measured button radius is 6px.
- Don't use bold 700 for headlines; the measured headline weight is 670.
- Don't introduce new greens; use the `--origin-green-*` ramp.

## Responsive Behavior

The mobile pass at 390px recorded: one visible header link and a menu toggle labelled "Open navigation menu"; a white 65px nav with `0px 16px` padding; content bands from x=16 to x=374; the h1 at Matter 30px / 670 / 34px with -0.3px tracking and the h2 at 28px / 670 / 32px; body unchanged at 14px / 21px; the primary CTA unchanged ("Sign up — It's free", `#027e6f`, `16px 24px`, 60px, 6px radius). Stat numbers measured 34px. The green band grew from 493px to 1,203px tall. Band order: white, media, white, green, white. Breakpoints were not measured.

## Iteration Guide

1. Start with white `#ffffff`, a 65px white nav and a centred Matter 42px/670 headline in `#0e101a`.
2. Add the paired CTAs: green 60px Sign up (6px radius) and a white Google button.
3. Use Glyph 14px/21px in `#1f243c` for copy and `#027e6f` for links.
4. Build feature cards: white, 1px `#ebebeb`, 8px radius, Matter 20px/600 titles.
5. Alternate text and product-demo rows; then one full-width `#027e6f` band with white type and white/dark 60px buttons.
6. Pull any new colour from the `--origin-*` variables rather than inventing one.
7. Confirm focus and hover states match: `#014c43` fill on hover, layered green-white-blue focus ring.
