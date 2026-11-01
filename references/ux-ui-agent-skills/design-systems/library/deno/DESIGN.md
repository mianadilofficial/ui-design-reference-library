---
version: alpha
name: Deno
category: "Developer Tools & IDEs"
description: "Deno uses bold Inter 700 headlines (70.4px, -1.76px) in #000000 on white with #56575a body text, a #70ffaf runtime-green announcement bar and pill CTAs, dark #25272b pills, a #66c2ff Moranga-serif Deploy button with a hard #0077cc offset shadow, 8px-radius code cards in Menlo and a #121417 footer."
colors:
  canvas: "#ffffff"
  ink: "#56575a"
  primary: "#70ffaf"
  on-primary: "#0b0d11"
  surface-soft: "#fafafa"
  ink-muted: "#868789"
  ink-strong: "#121417"
  ink-heading: "#000000"
  ink-faint: "#c2c4c7"
  hairline: "#e5eaea"
  deploy-blue: "#66c2ff"
  deploy-ink: "#002633"
  deploy-blue-dark: "#0077cc"
  nav-bg: "#ffffffe6"
  card-border: "#d4d6d8"
  footer-border: "#25272b"
  surface-dark: "#0b0d11"
  surface-blue-tint: "#ecf3fd"
  nav-hover-bg: "#e1ecf2"
  ink-outline: "#172723"
typography:
  display:
    fontFamily: Inter, ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif
    fontSize: 70.4px
    fontWeight: 700
    lineHeight: 77.44px
    letterSpacing: "-1.76px"
  display-mobile:
    fontFamily: Inter, ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif
    fontSize: 39.25px
    fontWeight: 700
    lineHeight: 43.175px
    letterSpacing: "-0.98125px"
  heading:
    fontFamily: Inter, ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif
    fontSize: 36px
    fontWeight: 700
    lineHeight: 39.6px
    letterSpacing: "-0.9px"
  subheading:
    fontFamily: Inter, ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif
    fontSize: 44px
    fontWeight: 700
    lineHeight: 48.4px
    letterSpacing: "-1.1px"
  body:
    fontFamily: Inter, ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
  button:
    fontFamily: Inter, ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: Inter, ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
  button-deploy:
    fontFamily: Moranga, "Georgia Pro", Georgia, serif
    fontSize: 18px
    fontWeight: 700
    lineHeight: 18px
rounded:
  xs: 2px
  sm: 3px
  md: 4px
  lg: 6px
  xl: 8px
  2xl: 12px
  3xl: 16px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
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
    padding: 2px
    height: 60px
  button-dark:
    backgroundColor: "{colors.footer-border}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 2px
    height: 60px
  button-outlined:
    textColor: "{colors.ink-outline}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    border: "2px solid #172723"
    padding: 4px 8px
    height: 36px
  button-deploy:
    backgroundColor: "{colors.deploy-blue}"
    textColor: "{colors.deploy-ink}"
    typography: "{typography.button-deploy}"
    rounded: "{rounded.xl}"
    padding: 12px 20px
    height: 46px
    borderColor: "{colors.deploy-blue-dark}"
    boxShadow: rgb(0, 119, 204) 2px 4px 0px 0px
  link:
    textColor: "{colors.ink-heading}"
    typography: "{typography.button}"
    padding: 2px 0px
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink-heading}"
    boxShadow: >-
      rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.1) 0px
      1px 2px -1px
  nav-link:
    textColor: "{colors.ink-heading}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink-heading}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 4px 4px 4px 32px
    height: 34px
    borderColor: "{colors.ink-muted}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
    borderColor: "{colors.card-border}"
    boxShadow: >-
      rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.1)
      0px 4px 6px -4px
  announcement-bar:
    backgroundColor: "{colors.primary}"
    height: 68px
  footer:
    backgroundColor: "{colors.ink-strong}"
    textColor: "{colors.primary}"
    borderColor: "{colors.footer-border}"
---

# Deno

## Overview

Deno's home page (title "Deno, the drop-in JavaScript runtime for Node developers") is a long, code-heavy product page — 15,511px tall — that mixes Tailwind-clean layout with hand-drawn character. A 68px #70ffaf mint-green bar runs across the top ("Deno is joining Cloudflare!"), followed by a translucent white header (#ffffffe6 with a soft shadow) holding the Deno logo, Products, Docs, Modules, Community, Blog and a ⌘K search field.

The hero is a dark illustrated scene with "Better, faster JavaScript" in white bold Inter at 70.4px, a version pill ("v2.9 What's new in Deno →") and buttons. The capture also shows Deno's "Help make Deno better" telemetry prompt at the top right of the hero ("No thanks" / "Sure"), which is a site prompt, not brand UI. Below, "Install Deno 2.9.7" offers a tabbed install card (MacOS/Linux, Windows) with a `curl` command, and "Or let your agent do it" a second command line.

The body alternates white and very pale blue sections, each built around real code: "Everything just works" with code editors and npm/TypeScript badges, "Your Node project, without the Node problems", "Built-in everything" with a terminal, "A faster package manager", "Standard library included", "On the cutting edge of JavaScript", a dark "Granular security controls" section with a "Three layers of defense" card row, "Faster than you think" with benchmark bar charts (3.66× faster, 3.2× efficiency, 2.1× lower), "See anything, understand everything" for observability, "Deploy Deno anywhere" with a "The hosting platform built for Deno" card in the Moranga serif, "And now, the desktop", "Loved by developers" stats, and a closing "Better JavaScript" with a dinosaur illustration before a dark #121417 footer.

The voice is confident and playful at once — technical headlines, small sketches of the dinosaur mascot scattered through the page.

## Colors

- **Canvas #ffffff** — the page background (53% of the captured screen).
- **Ink #56575a** — the most-read text (3,349 characters), a mid grey used for paragraphs and code captions. **Ink-muted #868789** (1,412) and **ink-faint #c2c4c7** (586, `--color-gray-300`) for quieter text.
- **Ink-heading #000000** — headings and nav. **Ink-strong #121417** — dark text (1,222 characters) and the footer background.
- **Primary #70ffaf** — the runtime green (`--color-runtime: #70ffaf`): announcement bar, pill CTAs ("Read the security docs", "Package management in Deno", "Explore the standard library") with **on-primary #0b0d11** labels, and the footer link color (146 characters of green text).
- **Surface-dark #0b0d11** — the security band and dark panels (2,213 units). **Footer-border #25272b** — dark pill buttons ("Get started", "GitHub") and footer borders.
- **Deploy-blue #66c2ff** (`--color-subhosting`) with **deploy-ink #002633** and **deploy-blue-dark #0077cc** — the Deno Deploy button and its hard offset shadow.
- **Surface-soft #fafafa**, **surface-blue-tint #ecf3fd** — pale section bands; **nav-hover-bg #e1ecf2** (`--color-azure3`) — header items on hover.
- **Hairline #e5eaea** (97 borders) and **card-border #d4d6d8**. **Nav-bg #ffffffe6** — the translucent header.
- **Ink-outline #172723** — the outlined "Learn more" button; on hover it fills #172723 with #70ffaf text.

Code panels use GitHub "prettylights" syntax colors (`--color-prettylights-syntax-*`, e.g. #cf222e keywords) and the benchmark charts use bright category colors (#00e666, #ea8e04, #db01ff, #01c2ff, #ffd601) — content, not UI. Focus rings are 2px solid #ae01ff (purple) at 2px offset.

## Typography

Loaded fonts: **Inter** (400, 400 italic, 700), **Moranga** (regular and bold, a serif) and **Recursive** (variable 300–1000). Code is set in **Menlo** (`--font-mono: Menlo, Monaco, Consolas, …`), which carries 3,848 characters — the second most-used family after Inter (6,235).

- **Display** — Inter 70.4px/77.44px, 700, -1.76px (-0.025em) — hero and major section titles ("Everything just works", "Granular security controls").
- **Subheading** — Inter 44px/48.4px, 700, -1.1px ("Zero-setup TypeScript and npm").
- **Heading** — Inter 36px/39.6px, 700, -0.9px ("Install Deno", "A faster package manager").
- **Nav** — Inter 18px/28px, 400; 18px is also the dominant paragraph size (2,662 characters).
- **Button** — Inter 16px/24px, 400.
- **Body** — Inter 12px/16px, 400 (captions such as benchmark notes; 12px is the most common size overall at 3,183 characters, much of it code).
- **Button-deploy** — Moranga 18px/18px, 700: the serif voice used for Deno Deploy.

Headlines are always bold with -0.025em tracking. Moranga, a serif, was measured only on the Deno Deploy button.

## Layout

Measured at 1280px. Content spans x=56 to x=1224 in most bands (a 1,168px container), with the hero text column ending around x=680 (the h1 is 624px wide). Feature sections are 2-column (text plus code card), the security and benchmark sections 3–4 columns.

Gaps: 16px (128 times), 8px, 12px, 4px, 128px (38 times — the vertical rhythm between feature blocks), 2px, 32px, 40px, 24px, 10px, 64px, 20px. Paddings: 8px, 12px, 4px, 32px, 16px, 2px, 6px, 24px, 10px, 56px, 144px (section padding). Bands alternate #ffffff, #f6f9fe, #edf4fd, #ecf3fd, #f5f8fe and the dark #0b0d11 security section.

## Elevation & Depth

Tailwind shadows: cards and code panels carry `rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.1) 0px 4px 6px -4px` (30 elements); the header has `rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.1) 0px 1px 2px -1px`; one element uses the larger `0px 20px 25px -5px` stack. The Deploy brand uses hard, unblurred offset shadows instead: `rgb(0, 119, 204) 2px 4px 0px 0px` on its button, `rgb(102, 194, 255) 2px 4px 0px 0px` on two elements and `rgba(203, 209, 225, 0.4) 2px 4px 0px 0px` on one — a sticker-like, illustrated depth.

## Shapes

Radii: 4px (112 elements — code chips and small controls), fully round pills (85 elements at the browser's max radius plus 9999px/9997px), 8px (35 — cards, inputs, the Deploy button), 6px (33 — outlined buttons, code blocks), 2px, 3px, 12px and 16px. Pill CTAs are 60px tall with a 2px inner padding that frames an inner label — a pill-within-a-pill construction. The dinosaur illustrations are loose and hand-drawn.

## Components

- **Green pill CTA** — #70ffaf, #0b0d11 Inter 16px label, full pill, 60px tall, 2px padding ring.
- **Dark pill CTA** — #25272b with white label, same metrics ("Get started", "GitHub").
- **Outlined button** — `2px solid #172723`, 6px radius, 36px tall, 4px 8px padding, bold 16px label ("Learn more->"); hover fills #172723 with #70ffaf text.
- **Deploy button** — #66c2ff fill, #002633 Moranga 18px/700, 8px radius, 46px tall, 12px 20px padding, `2px solid #0077cc` border and a hard `2px 4px 0` #0077cc shadow.
- **Version pill** — dark #121417 pill with a green-tinted border that turns #70ffaf on hover.
- **Header** — translucent white, 96px, nav items get a #e1ecf2 background on hover; search input with 8px radius, 1px #868789 border, 34px tall.
- **Install card** — white, 8px radius, 1px #d4d6d8 border, tabs for OS and a Menlo command.
- **Code card** — white, 8px radius, 1px #e5eaea border, filename tab and syntax-highlighted Menlo 13.6px/19.72px.
- **Footer** — #121417 with a 1px #25272b border, #70ffaf Inter 14px/700 column titles.

## Design System Architecture

Deno's brand page (https://deno.com/brand) documents logo usage: a dark (outlined) version for dark backgrounds, a light (no outline) version for light backgrounds, transparent preferred over filled, the mark alone when a 1:1 icon is needed, and the dark filled version when the background is unknown; the Deno Deploy logo has its own mark ("DeeDee"). The downloadable kit (https://deno.com/logos/deno_assets.zip) includes "Logo guidelines.pdf" (2024): spacing equal to the mark-to-wordmark gap on all sides (ideally twice that), the logo only in black and white (adjustable to a two-color environment but never colorized or inverted), and no rotating, skewing or editing. No colors or typefaces are published there. The site CSS is Tailwind v4 (`--tw-*`, `--container-md: 28rem`, `--blur-lg`, oklch color scales) extended with product tokens: `--color-runtime: #70ffaf`, `--color-subhosting: #66c2ff`, `--color-main-blue: #0094ff`, `--color-fresh-dark: #401c00`, a `--deploy-neutral-*` ramp (`--deploy-neutral-600: #475269`, `--deploy-neutral-950: #020617`), and GitHub-style syntax variables. Breakpoints are Tailwind defaults (40rem, 48rem, 64rem, 80rem, 96rem) plus 440px and 1080px.

## Do's and Don'ts

**Do**
- Set headlines in Inter 700 with -0.025em tracking; paragraphs at 18px in #56575a.
- Use #70ffaf runtime green for the primary pill CTA and the announcement bar, with near-black labels.
- Show real code in white 8px-radius cards with hairline borders and Tailwind shadows.
- Use the Moranga serif and hard offset shadows only for Deno Deploy elements.
- Use the logo only in black and white, light on light and dark (outlined) on dark.

**Don't**
- Don't colorize, invert, rotate or skew the logo (logo guidelines).
- Don't use the light logo on a dark background or vice versa.
- Don't use green as a text color on white; it appears on dark backgrounds and fills.
- Don't mix Deploy's blue/serif styling into the runtime pages.
- Don't treat the telemetry prompt as part of the design.

## Responsive Behavior

Measured at a 390px viewport: the h1 drops from 70.4px/77.44px to 39.25px/43.175px with -0.98125px tracking, and the h2 from 36px/39.6px to 23.7px/26.07px with -0.5925px. Body captions stay 12px/16px; 16px becomes the most common size. The green pill CTA keeps 60px and 2px padding. The header is 72px with 1 visible header link and no menu toggle detected by the mobile pass. The announcement band grows from 68px to 96px tall. Content runs from x=24 to x=366 in 1 column (2 in one band), and the mobile page is about 16,000px tall versus 15,511px on desktop. Other mobile behaviour was not measured.

## Iteration Guide

1. White canvas, #56575a 18px Inter paragraphs, #000000 Inter 700 headlines at 70.4/44/36px.
2. Add the #70ffaf announcement bar and the translucent white header.
3. Pair every feature with a real code card (Menlo, white, 8px radius, hairline border).
4. Use 60px pill CTAs: green for primary, #25272b for neutral.
5. Alternate white and pale-blue bands with 128px spacing; one dark section for security.
6. Add hand-drawn dinosaur sketches sparingly.
7. Re-run the gate after edits; follow the logo PDF.
