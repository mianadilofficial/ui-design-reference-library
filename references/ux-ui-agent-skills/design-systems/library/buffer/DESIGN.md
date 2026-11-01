---
version: alpha
name: Buffer
category: "Product & SaaS"
description: "Buffer's social-media-management site: Stolzl 75.8px/400 display over Figtree 18px body, deep teal-black #213130 ink on an off-white #fefdfb canvas, a mint-green #b0ec9c pill CTA with dark text, pastel feature tiles, 20px soft-shadow cards and a dark #213130 footer with green links."
colors:
  canvas: "#fefdfb"
  ink: "#213130"
  primary: "#b0ec9c"
  on-primary: "#213130"
  surface-dark-panel: "#222929"
  white: "#ffffff"
  ink-neutral: "#363530"
  ink-subtle: "#4a4a45"
  ink-secondary: "#6e6e68"
  eyebrow-green: "#337047"
  hairline: "#e4e3dd"
  tile-yellow: "#ffd88a"
  tile-fuchsia: "#f3bdff"
  tile-blue: "#addaff"
  tile-aqua: "#9feae2"
  tile-purple: "#d4c2ff"
  tile-coral: "#ffb2a8"
  announcement-bg: "#121b1b"
  announcement-text: "#ededed"
typography:
  display:
    fontFamily: Stolzl, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 75.8px
    fontWeight: 400
    lineHeight: 83.38px
    letterSpacing: "-1.516px"
  display-mobile:
    fontFamily: Stolzl, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 40.4145px
    fontWeight: 400
    lineHeight: 44.4559px
    letterSpacing: "-0.808289px"
  eyebrow:
    fontFamily: Figtree, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 15.425px
    fontWeight: 500
    lineHeight: 21.5949px
    letterSpacing: 0.96406px
    textTransform: uppercase
  body:
    fontFamily: Figtree, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.2px
    letterSpacing: 0.12px
  announcement:
    fontFamily: Inter, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
    letterSpacing: 0.12px
rounded:
  xs: 4px
  sm: 4.84px
  md: 6px
  lg: 6.05px
  xl: 7.56px
  2xl: 10px
  3xl: 11.06px
  4xl: 12px
  card: 20px
  pill: 9999px
spacing:
  s1: 4px
  s2: 4.5px
  s3: 4.94px
  s4: 5.77px
  s5: 8px
  s6: 8.94px
  s7: 9px
  s8: 12px
  s9: 13.5px
  s10: 13.87px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.pill}"
    height: 63px
  button-outline-on-dark:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.2xl}"
    border: "1px solid #fefdfb"
    padding: 14.4px 27.9px
    height: 55px
  announcement-bar:
    backgroundColor: "{colors.announcement-bg}"
    textColor: "{colors.announcement-text}"
    typography: "{typography.announcement}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.2xl}"
  nav-link-hover:
    backgroundColor: "{colors.hairline}"
  text-input:
    backgroundColor: "{colors.white}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.pill}"
    padding: 18px 27px
    height: 61px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.eyebrow-green}"
    rounded: "{rounded.card}"
    boxShadow: rgba(23, 23, 23, 0.1) 0px 4px 12px -2px, rgba(23, 23, 23, 0.05) 0px 0px 1px 1px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.primary}"
    padding: 71.5014px 34.7501px
---

## Overview

Buffer (https://buffer.com/) is a social media management tool, and its home page reads like a friendly, open-company product brochure. The hero is a centered Stolzl headline, "Your social media workspace", set at 75.8px on an off-white #fefdfb canvas, ringed by floating social-network icons (X, Bluesky, Pinterest, YouTube, LinkedIn, Threads, TikTok, Facebook, Instagram). Under it sits a single pill-shaped email field with an embedded mint-green "Get started for free →" button, followed by a social-proof line ("291,234 creators, brands, and agencies using Buffer") and a greyscale logo strip.

The body of the page is a grid of feature cards. Each card has a pastel top tile — fuchsia, green, yellow, blue, coral, purple, aqua — holding a cropped product screenshot, then a small uppercase green eyebrow (PUBLISH, CREATE, COMMUNITY, INSIGHTS), a sentence-case title, a short paragraph and a "Learn more →" link. Further down: a "Connect your favorite accounts" strip of square network icons, a dark panel promoting the MCP/API/agents offer with an outline "Read documentation" button, a human support section with a team photo, a resources mosaic of pastel cards, an "open company" metrics row (MAU, total customers, teammates, ARR), a large mint-green closing CTA panel, and a deep teal footer.

The tone is warm and plain: sentence case everywhere, short declarative headings ("We are an open company", "Human support, worldwide"), and real numbers. A dark announcement bar ("Join Buffer's first Build Contest…") sits under the navigation in the capture; it is the site's own banner.

## Colors

The CSS ships named brand variables, and the measured colours line up with them.

- **canvas #fefdfb** — `--color-surface-default` / `--color-neutral-050`, a barely-warm off-white. It covers about 47% of the capture.
- **ink #213130** — `--color-text-primary` / `--color-brand-core-dark`, a dark teal-black used for nearly all text, the footer background and the CTA label.
- **primary #b0ec9c** — `--color-brand-primary` / `--color-brand-core-green`, the mint green on every main CTA, with **on-primary #213130** text. The same green is the footer link colour (`--color-text-link-inverse`).
- **eyebrow-green #337047** — `--color-text-link`, used for uppercase card eyebrows.
- **ink-neutral #363530**, **ink-subtle #4a4a45** and **ink-secondary #6e6e68** — the warm grey text steps (`--color-text-neutral`, `--color-text-subtle`, `--color-text-secondary`).
- **surface-dark-panel #222929** — the MCP/agents panel background.
- **hairline #e4e3dd** — measured border colour and the background a nav item turns on hover.
- **Pastel tiles** — #ffd88a (yellow), #f3bdff (fuchsia), #addaff (blue), #9feae2 (aqua), #d4c2ff (purple), #ffb2a8 (coral). These are the `--color-brand-core-*` and `--color-brand-secondary-*` families and give each feature card its own colour.
- **announcement-bg #121b1b** with **announcement-text #ededed** — the dark banner under the nav.

## Typography

Three families are loaded: **Stolzl** (weight 400 only) for headings via `--font-family-heading`, **Figtree** (variable 300–900) as `--font-family-sans` for everything else, and **Inter** (variable, `--font-family-insights`) for small UI such as the announcement bar. A `--font-family-handwriting` variable names Caveat.

- **display** — Stolzl 75.8px / 400 / 83.38px with −1.516px tracking (−2%). The CSS defines it as `--font-size-step-5: clamp(48.8/16 * 1rem, …, 75.8/16 * 1rem)`, so it is a fluid size. Smaller heading steps measured on the page are 56.8px (−1.136px), 42.6px (−0.852px) and 24px (−0.48px), each with the same −2% tracking.
- **body** — Figtree 18px / 400 / 25.2px with +0.12px tracking; `--font-size-step-0` is a clamp from 16px to 18px.
- **eyebrow** — Figtree 15.425px / 500 / 21.5949px, uppercase, 0.96406px tracking, in #337047.
- **announcement** — Inter 14px / 400 / 21px.

The footer text measures 13.4602px / 600. Stolzl is a commercial typeface; if it is unavailable, substitute a geometric sans at regular weight with −2% tracking and name the substitute in the build. Figtree and Inter are free.

## Layout

Measured at 1280px wide, the page is 7,938px tall. The header is a single row: Buffer logo, Features, Integrations, Made for, Resources (each with a chevron), Pricing, then "Log in" as an outline pill and "Get started for free" as a green pill. The hero is centered; the feature section is a two-column grid of large cards, followed by a four-column row of smaller cards ("…and so much more!"). The resources section is a masonry-like mosaic of pastel cards; the metrics row has four equal tiles.

Spacing is fluid. The stylesheet defines `--space-step-*` variables as `clamp()` values in `vi` units (for example `--space-step-3: clamp(1rem, …, 1.125rem)`), which is why measured gaps and paddings are fractional: 8.93856px, 17.8742px, 26.8128px, 34.7501px and 69.5014px are the most frequent. Treat them as one scale stepping by roughly 9px.

## Elevation & Depth

Cards are lifted with soft, layered shadows. The most common is `rgba(23, 23, 23, 0.1) 0px 4px 12px -2px, rgba(23, 23, 23, 0.05) 0px 0px 1px 1px` (on 36 elements); a deeper variant, `rgba(23, 23, 23, 0.1) 0px 16px 24px -8px, rgba(23, 23, 23, 0.1) 0px 4px 8px -4px, rgba(23, 23, 23, 0.05) 0px 0px 1px 1px`, appears on 13. The 1px spread ring at 5% replaces a border. Dark panels (#222929, #213130) are flat and rely on contrast with the off-white canvas.

## Shapes

The CSS names three radii — `--border-radius-small` 0.625rem (10px), `--border-radius-medium` 1.25rem (20px) and `--border-radius-large` 2.5rem — plus `--border-radius-full: 100vmax` for pills. On the page: 4px is the most frequent radius (small UI inside screenshots), 10px on nav items and the outline button, 20px on cards (`rounded.card`) and on the top corners of the footer (20px 20px 0 0), and a pill (computed 1280px) on the primary CTA and the email input. The smaller fractional values (4.84px, 6.05px, 7.56px, 11.06px) come from scaled screenshots.

## Components

- **Primary button** — #b0ec9c pill, #213130 Figtree 18px/400 label with a trailing arrow, 63px tall in the hero. The same style appears as a 45px nav button.
- **Email capture** — a white #ffffff pill input, 61px tall with 18px 27px padding, holding the primary button at its right end.
- **Outline button on dark** — 1px solid #fefdfb border, #fefdfb text, 10px radius, 14.4px 27.9px padding, 55px tall ("Read documentation").
- **Nav item** — #213130 text, 10px radius; hover fills it with #e4e3dd.
- **Feature card** — #fefdfb, 20px radius, layered soft shadow, pastel screenshot tile on top, #337047 uppercase eyebrow, title, paragraph and "Learn more →".
- **Metric tile** — label, small grey caption and a large number (291,234 / 83,562 / 73 / $27.3M), on a white card with the soft shadow.
- **Closing CTA panel** — a full mint-green #b0ec9c block with a centered Stolzl headline and a dark pill button.
- **Footer** — #213130 with 20px top corners, 71.5014px 34.7501px padding, six link columns with green #b0ec9c headers and a large Buffer wordmark.

## Design System Architecture

Buffer has no public design-system site or brand guidelines page: https://buffer.com/brand returned 404, and the press page (https://buffer.com/press) offers a press contact and fact sheet but no colours, fonts or logo rules. The de-facto system is the token layer in the shipped CSS, which is well structured: semantic names (`--color-text-primary`, `--color-text-link`, `--color-surface-default`, `--color-surface-dark`, `--color-border-default`), brand names (`--color-brand-primary`, `--color-brand-core-*`, `--color-brand-secondary-*`), numbered hue ramps (`--color-green-100` … `-700`, purple, pink, orange, aqua, neutral), fluid type steps (`--font-size-step--2` … `--font-size-step-6`) and fluid space steps (`--space-step-*`). Class names are CSS-module hashes (`BufferLogo_logo__ZlBPi`, `Nav_logo__zClE7`).

## Do's and Don'ts

**Do**
- Use the mint #b0ec9c pill with dark #213130 text for the main action.
- Keep the canvas off-white #fefdfb, not pure white, and the ink teal-black #213130.
- Give each feature its own pastel tile colour, and keep card copy in sentence case with an uppercase green eyebrow.
- Set headings in Stolzl at weight 400 with −2% tracking; never bold the headlines.
- Use the layered soft shadow and 20px radius for cards.

**Don't**
- Don't put white text on the green button.
- Don't use pure black; dark areas are #213130, #222929 or #121b1b.
- Don't square off the main CTA or the email field; both are pills.
- Don't introduce a saturated accent; the palette stays pastel plus the dark teal.

## Responsive Behavior

The CSS declares fluid type and spacing with `clamp()` in `vi` units, so sizes scale continuously. The extractor's mobile pass at 390px recorded: the hero headline at 40.4145px / 44.4559px with −0.808289px tracking, body text at 16.1519px / 22.6126px, and the most frequent sizes 16.1519px, 12.8487px and 14.3819px. Two header links remain visible with a menu toggle labelled "Navigation menu" (four on desktop), and the widest card row has 2 columns (4 on desktop). Other mobile behaviour was not measured.

## Iteration Guide

1. Set canvas #fefdfb and ink #213130; load Stolzl 400, Figtree and Inter.
2. Build the hero: Stolzl 75.8px/83.38px, −1.516px tracking, centered, then the white pill email input with the #b0ec9c pill button inside.
3. Make the feature card: 20px radius, the 4px/12px soft shadow, pastel tile, #337047 uppercase eyebrow at 15.425px.
4. Use the fluid spacing steps (8.94px, 17.87px, 26.81px, 34.75px, 69.50px).
5. Add the dark #222929 panel with an outline #fefdfb button at 10px radius.
6. Close with the mint panel and the #213130 footer with 20px top corners and green link headers.
7. Check at 1280px and 390px against https://buffer.com/.
