---
version: alpha
name: Postmark
category: "Developer Tools & IDEs"
description: "Postmark (postmarkapp.com) puts Elizeth 700 slab-serif headlines (52px) over Rund Text body copy on a signature #ffde00 yellow hero and a warm #faf9f7 canvas, with #007bc8 blue buttons (4px radius, 1px inset ring) darkening to #005e99, coloured feature headings (#ed746f, #6e5bff, #4fc47e) and line illustrations."
colors:
  canvas: "#faf9f7"
  page-largest: "#ffffff"
  ink: "#272727"
  ink-heading: "#24272d"
  ink-muted: "#929292"
  ink-faint: "#27272780"
  primary: "#007bc8"
  primary-hover: "#005e99"
  on-primary: "#ffffff"
  yellow: "#ffde00"
  green: "#4fc47e"
  coral: "#ed746f"
  violet: "#6e5bff"
  heart-red: "#d14642"
  hairline: "#ececec"
typography:
  display:
    fontFamily: Elizeth, "Rund Text", "Helvetica Neue", Arial, Helvetica, sans-serif
    fontSize: 52px
    fontWeight: 700
    lineHeight: 57.2px
  display-mobile:
    fontFamily: Elizeth, "Rund Text", "Helvetica Neue", Arial, Helvetica, sans-serif
    fontSize: 40px
    fontWeight: 700
    lineHeight: 44px
  section:
    fontFamily: Elizeth, "Rund Text", "Helvetica Neue", Arial, Helvetica, sans-serif
    fontSize: 40px
    fontWeight: 700
    lineHeight: 48px
  subheading:
    fontFamily: Elizeth, "Rund Text", "Helvetica Neue", Arial, Helvetica, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 38.4px
  eyebrow:
    fontFamily: "\"Rund Text\", \"Helvetica Neue\", Arial, Helvetica, sans-serif"
    fontSize: 13px
    fontWeight: 900
    lineHeight: 19.5px
    letterSpacing: 1px
    textTransform: uppercase
  body:
    fontFamily: "\"Rund Text\", \"Helvetica Neue\", Arial, Helvetica, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 30.6px
  button:
    fontFamily: "\"Rund Text\", \"Helvetica Neue\", Arial, Helvetica, sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 30px
  button-small:
    fontFamily: "\"Rund Text\", \"Helvetica Neue\", Arial, Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  nav:
    fontFamily: "\"Rund Text\", \"Helvetica Neue\", Arial, Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  feature-link:
    fontFamily: "\"Rund Text\", \"Helvetica Neue\", Arial, Helvetica, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  footer:
    fontFamily: "\"Rund Text\", \"Helvetica Neue\", Arial, Helvetica, sans-serif"
    fontSize: 15.008px
    fontWeight: 700
    lineHeight: 22.512px
rounded:
  xs: 3px
  sm: 4px
  md: 6px
  lg: 10px
  xl: 12px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 7.2px
  s5: 8px
  s6: 10px
  s7: 10.5px
  s8: 12px
  s9: 14px
  s10: 18px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 18px 22px
    height: 66px
    boxShadow: rgba(0, 0, 0, 0.1) 0px 0px 0px 1px inset
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    boxShadow: rgba(0, 0, 0, 0.2) 0px 0px 0px 1px inset
  button-small:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-small}"
    rounded: "{rounded.sm}"
    padding: 7.2px 14px
    boxShadow: rgba(0, 0, 0, 0.1) 0px 0px 0px 1px inset
  link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.yellow}"
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  feature-tile:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    typography: "{typography.feature-link}"
    rounded: "{rounded.lg}"
    padding: 12px
    height: 51px
    boxShadow: rgba(0, 0, 0, 0.07) 0px 2px 3px 0px
  migration-select:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.sm}"
    padding: 10.08px 31.68px 10.08px 12.96px
    height: 36px
    boxShadow: rgba(0, 0, 0, 0.2) 0px 0px 0px 1px inset
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.green}"
    typography: "{typography.footer}"
    padding: 28px 0px 0px
---

## Overview

postmarkapp.com ("Postmark: Fast, Reliable Email Delivery Service | SMTP | API") sells transactional email delivery to developers. Postmark is part of ActiveCampaign (the logo lockup reads "ActiveCampaign › Postmark" and the footer says "Made with [U+2665] at ActiveCampaign"). The home page (5,177px at 1280px) is warm, friendly and a little playful for a developer tool.

It opens with a thin dark announcement bar ("Teach your AI coding agent how to send email with Postmark Skills"), then a bright **yellow** (`#ffde00`) hero: a big slab-serif headline "The email delivery service that people actually like", a short paragraph, a blue "Start free trial" button and an "API documentation →" link, with a column of floating tweet-style testimonial cards and small hearts at the right. The yellow fades through `#ffd500` and `#ffcc00` into a customer logo row (FAIRE, 1Password, Betterment, webflow).

Below, on a warm off-white canvas, the page shows a tabbed code sample ("Start sending in minutes", with curl, Node, Python, Rails, PHP and others), a yellow "Switching to Postmark?" bar with a dark migration select, three illustrated feature rows whose headings are each a different colour (coral, violet, green), a logo wall, a grid of white feature tiles ("Explore our features"), a "Ready to get started?" CTA and a multi-column footer. Illustrations are monoline drawings with flat colour fills (a mailbox, delivery trucks, a smiling sun with a 95% happiness bar).

## Colors

- **Yellow `#ffde00`** — the hero and header background (second-largest background area) and the migration bar; steps `#ffd500` and `#ffcc00` measured below it.
- **Canvas `#faf9f7`** — the page body below the hero (49% of the capture). White `#ffffff` covers the code card and feature tiles; `#ffffffe6` translucent white for testimonial cards.
- **Blue `#007bc8`** (`--color-blue-600`) — primary buttons and links; hover `#005e99`. `--color-blue-500 #3899d7` is declared.
- **Ink `#272727`** (`--color-grey-900`) — most-read text (3,025 characters); **`#24272d`** (`--color-slate-900`) for headings and lead paragraphs.
- **Greys** — `#929292` (790 characters, secondary), `#27272780`, `#93928c`, `#aeaeae`, `#5a5a5a` (`--color-grey-700`); hairline `#ececec`.
- **Feature heading colours** — coral `#ed746f` ("Stellar deliverability"), violet `#6e5bff` ("Promotional and transactional emails never mix"), green `#4fc47e` ("Great support as a standard", footer column headings and menu eyebrows).
- **Heart red `#d14642`** — the footer heart and "Latest Updates" marker; `#b47cd4`, `#8f7319`, `#ae8f18` appear in illustration labels.

## Typography

Three families:

- **Elizeth** (400, 700) — a slab serif for all headlines.
- **Rund Text** (variable, 100–900) — the text face for everything else; fallback "Helvetica Neue", Arial, Helvetica.
- **Bitstream Vera Sans Mono** (`--font-mono`) — the code sample (490 characters).

Both are self-hosted by the site; the declared fallback for both is Helvetica Neue/Arial.

| Role | Family | Size / line-height | Weight |
| --- | --- | --- | --- |
| Hero (h1) | Elizeth | 52px / 57.2px | 700 |
| Section heading | Elizeth | 40px / 48px | 700 |
| Feature heading / CTA heading | Elizeth | 32px / 38.4px | 700 |
| Eyebrow | Rund Text | 13px / 19.5px, uppercase, 1px tracking | 900 |
| Body / lead | Rund Text | 18px / 30.6px | 400 |
| Large button | Rund Text | 20px / 30px | 700 |
| Small button | Rund Text | 16px / 24px | 700 |
| Nav | Rund Text | 16px / 24px | 400 |
| Footer heading | Rund Text | 15.008px / 22.512px | 700 |

16px carries the most characters (3,261). Body leading is generous (1.7). Declared Tailwind-style tokens include `--text-xs 0.8125rem`, `--text-sm 0.875rem`, `--text-3xl 1.5rem`, `--tracking-tight -0.025em`, `--tracking-wider 0.05em`.

## Layout

Content runs from x=80 to x=1200 (1,120px) below the hero; the hero text column starts at x=53. Measured bands: a 58px announcement bar, the 870px yellow hero, two short yellow fade bands (78px, 98px), a 3,106px canvas band with the code card and feature rows (3 columns at most), a 310px CTA band, and a 657px footer (5 columns).

Spacing is driven by `--spacing: 0.25rem`. Measured paddings are small and many: 3px (57), 8px, 10px, 12px, 4px, 22px, 20px, 14px, 25px, with 40px and 48px for larger blocks. Feature rows alternate illustration left / text right with large vertical gaps.

Header (on yellow): logo at left; Why Postmark?, Product, Pricing, Resources, Help, Log in and a small blue "Start free trial" button at right; 7 header links visible.

## Elevation & Depth

- `rgba(0, 0, 0, 0.07) 0px 2px 3px 0px` (12) — feature tiles and small cards.
- `rgba(0, 0, 0, 0.1) 0px 0px 0px 1px inset` — on buttons, giving a subtle edge; on hover it deepens to 0.2.
- `rgba(0, 0, 0, 0.2) 0px 9px 25px 0px` — dropdown menus.
- `rgba(0, 0, 0, 0.07) 0px 4px 15px 0px` and `rgba(0, 0, 0, 0.07) 0px 4px 12px 0px` — one element each.

Depth is gentle; the yellow hero and colourful illustrations do most of the visual work.

## Shapes

- **3px** (38) — small cards and menu panels.
- **12px** (19) and `12px 12px 0px 0px` (18) — the code card and its tab bar; `0px 0px 12px 12px` closes it.
- **50%** (18) — avatars and icon circles.
- **10px** (12, feature tiles), **4px** (11, buttons and the migration select), 6px (1).

Corners are small and practical; the round shapes come from avatars and the illustration style.

## Components

- **Primary button** ("Start free trial", "Try Postmark free") — `#007bc8`, white Rund Text 20px/700 (24px Elizeth on the final CTA, with a "No Credit Card Required" sub-line), padding 18px 22px, 66px tall, 4px radius, 1px inset ring. Hover: `#005e99`, ring at 20%.
- **Small button** (header "Start free trial") — same colours at 16px/700, padding 7.2px 14px.
- **Text link** — `#007bc8` with an arrow ("API documentation →", "Learn more →").
- **Testimonial card** — translucent white, avatar, short quote, author name.
- **Code card** — white with 12px top corners, a tab row of language logos and a monospace sample with coloured syntax.
- **Migration bar** — yellow strip with "Switching to Postmark?" and a dark `#272727` select (white text, 4px radius, 36px tall).
- **Feature tile** — white, 10px radius, 12px padding, 51px tall, soft 2px/3px shadow, small green icon and an 18px/27px label, in a 3-column grid.
- **Footer** — canvas background, green `#4fc47e` 15px/700 column headings, grey links, a heart line.

The small green "Manage Preferences" control at the bottom right of the capture is a cookie-preferences widget and is not a brand component.

## Design System Architecture

No public Postmark design system or brand page was found: https://postmarkapp.com/brand returned HTTP 404 (recorded in SOURCES.json). The site exposes 39 root variables in Tailwind naming: a small palette (`--color-blue-500 #3899d7`, `--color-blue-600 #007bc8`, `--color-grey-50…900`, `--color-slate-600 #6e7788`, `--color-slate-900 #24272d`, `--color-mint-100 #dbf1e1`, `--color-mint-700 #236645`, `--color-red-500 #f0655d`), type tokens (`--text-xs/sm/3xl`, `--font-weight-semibold/bold`, `--tracking-tight/wider`, `--font-mono`), `--radius-md 0.375rem`, `--radius-xl 0.75rem`, `--spacing 0.25rem`, easing curves and a `--lovewall-quotes: 9` counter for the testimonial wall.

## Do's and Don'ts

**Do**
- Open with the yellow `#ffde00` hero and an Elizeth 700 headline in `#24272d`.
- Use `#007bc8` for every primary action, with a 4px radius and the 1px inset ring.
- Give each feature row its own heading colour (coral, violet, green) paired with a matching line illustration.
- Keep body copy at 18px with 1.7 line-height in Rund Text.
- Show code early; developers are the audience.

**Don't**
- Don't use yellow for buttons or text.
- Don't set body copy in the slab serif.
- Don't use radii above 12px on buttons, tiles or cards.
- Don't use heavy shadows; keep them at 7% opacity.
- Don't treat the cookie-preferences control as part of the UI kit.

## Responsive Behavior

Measured at 390px:

- Header shows 1 link; no menu toggle was detected (desktop: 7 links).
- h1 drops from 52px/57.2px to 40px/44px and is centered (left-aligned on desktop); the 40px section heading stays 40px/48px; the CTA heading drops to 28px.
- The yellow hero measured 1,087px tall; content runs x=15 to x=375.
- Maximum card columns measured 1 (desktop 3); the footer measured 2 columns.

Intermediate breakpoints were not measured.

## Iteration Guide

1. Hero on `#ffde00`: Elizeth 52px/700 headline, Rund Text 18px lead, a 66px blue button and an arrow link; social proof cards at the right.
2. Switch to `#faf9f7` for the body; centre a 40px section heading over a white code card with 12px top corners.
3. Alternate illustrated feature rows; colour each 32px heading differently (coral `#ed746f`, violet `#6e5bff`, green `#4fc47e`).
4. List features in a 3-column grid of white 10px-radius tiles with a 7% shadow.
5. Close with a centered 32px "Ready to get started?" and a large blue button.
6. Take any new colour from the declared `--color-*` set.
