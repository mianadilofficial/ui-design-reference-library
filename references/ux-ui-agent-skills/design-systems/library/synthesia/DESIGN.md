---
version: alpha
name: Synthesia
category: "AI"
description: "Synthesia, the AI video and avatar platform for business: white #ffffff and #f7f7f7 canvases, near-black navy #090b22 buttons and headlines, indigo #3e57da accents, Basiersquare at 72px/-4.68px display down to 16px/22px body, 10px button radius, 16px glass code cards and a #0d0f2c footer."
colors:
  canvas: "#ffffff"
  page-largest: "#f7f7f7"
  ink: "#363636"
  primary: "#090b22"
  on-primary: "#ffffff"
  primary-hover: "#0d0f2ccc"
  base-dark: "#0d0f2c"
  indigo: "#3e57da"
  ink-nav: "#68686a"
  ink-on-dark: "#e9e9eb"
  input-placeholder: "#98989c"
  border: "#dadadd"
  hairline-glass: "#ffffff33"
  glass-10: "#ffffff1a"
  lime-tint: "#ceeab0"
  pink-tint: "#ffd7f9"
  yellow-tint: "#fff4b6"
typography:
  display:
    fontFamily: "\"Basiersquare Webfont\", sans-serif"
    fontSize: 72px
    fontWeight: 500
    lineHeight: 72px
    letterSpacing: "-4.68px"
  display-mobile:
    fontFamily: "\"Basiersquare Webfont\", sans-serif"
    fontSize: 44px
    fontWeight: 500
    lineHeight: 46px
    letterSpacing: "-2.2px"
  heading:
    fontFamily: "\"Basiersquare Webfont\", sans-serif"
    fontSize: 44px
    fontWeight: 500
    lineHeight: 46px
    letterSpacing: "-2.2px"
  subheading:
    fontFamily: "\"Basiersquare Webfont\", sans-serif"
    fontSize: 34px
    fontWeight: 500
    lineHeight: 38px
    letterSpacing: "-1.53px"
  body-lg:
    fontFamily: "\"Basiersquare Webfont\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    letterSpacing: "-0.27px"
  body:
    fontFamily: "\"Basiersquare Webfont\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
    letterSpacing: "-0.16px"
  eyebrow:
    fontFamily: "\"Basiersquare Webfont\", sans-serif"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 18px
  button:
    fontFamily: "\"Basiersquare Webfont\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: "-0.064px"
  button-secondary:
    fontFamily: "\"Basiersquare Webfont\", sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 22px
    letterSpacing: "-0.028px"
  code:
    fontFamily: "ui-monospace, SFMono-Regular, \"SF Mono\", Menlo, \"Cascadia Mono\", \"Segoe UI Mono\", Consolas, \"Liberation Mono\", monospace"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.2px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 10px
  xl: 12px
  2xl: 16px
  3xl: 24px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 12px
  s6: 16px
  s7: 18px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 12px 18px
    height: 48px
    boxShadow: rgba(16, 24, 40, 0.08) 0px 2px 10px 0px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    boxShadow: rgba(16, 24, 40, 0.08) 0px 6px 20px 0px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.md}"
    padding: 8px 16px
    height: 38px
    boxShadow: rgba(16, 24, 40, 0.08) 0px 2px 10px 0px
  button-ghost:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 12px 18px
    height: 48px
    boxShadow: rgb(218, 218, 221) 0px 0px 0px 1px inset
  button-ghost-hover:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.primary}"
  tab-chip:
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 8px 32px
    height: 36px
  nav:
    textColor: "{colors.ink-nav}"
  nav-link:
    textColor: "{colors.ink-nav}"
    typography: "{typography.body}"
  text-input:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.input-placeholder}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    padding: 12px 16px
    height: 128px
    borderColor: "{colors.border}"
  card-code:
    backgroundColor: "{colors.glass-10}"
    textColor: "{colors.on-primary}"
    typography: "{typography.code}"
    rounded: "{rounded.2xl}"
    padding: 24px
  footer:
    backgroundColor: "{colors.base-dark}"
    textColor: "{colors.on-primary}"
    padding: 80px 0px
---

## Overview

Synthesia is an AI company (founded in 2017, per its About page; its footer address is in London) that turns text into videos presented by AI avatars. Its home page, "Synthesia: #1 AI Video Platform for Business", is a long Webflow-built page of 12,115px at a 1280px viewport, and it looks like an enterprise product site with a calm, editorial finish: lots of white and very light grey, near-black navy for text and buttons, one tightly set geometric sans, and full-colour avatar portraits doing the emotional work.

The capture shows a thin gradient announcement strip ("MEET SYREN — Our most advanced AI video model yet"), a light nav with the Synthesia logo, a centred hero "AI Video and Avatar platform for business" with two navy buttons, a tab switcher (Video, Sessions, API) over a carousel of avatar cards, a logo strip, a "Trusted by leading enterprises and developers" row of customer stories on photo cards, a product section of alternating text-and-screenshot rows ("Easily generate videos from docs, PowerPoints, or links", "Automatically translate your videos into 140+ languages"), a navy "Try our free AI video generator" demo, an "Interactive Avatars" section, a navy API band with code cards, review quotes, a pastel gradient resource band, an FAQ, and a navy footer.

The microcopy is concrete and business-oriented ("Get started for free", "Book demo", "140+ languages", "Signed off by CFOs").

## Colors

The colours below are measured on the page; the names in brackets are Synthesia's own Webflow variables where they match.

- **Canvas `#ffffff`** — body background and white sections.
- **Page largest `#f7f7f7`** — the largest painted area (4,643): grey section fills, input fields and the hover fill of white buttons.
- **Primary `#090b22`** — a near-black navy. It fills every CTA ("Get started for free", "Book demo"), colours all headlines, and fills the dark bands of the page (2,471 by area). Hover lightens it to `#0d0f2ccc` (`--base-dark-opacity-80`).
- **Base dark `#0d0f2c`** (`--base-dark`) — the footer background and the base of the opacity scale (`--base-dark-opacity-10` … `-80`).
- **Ink `#363636`** — the most-read text colour (6,363 characters) for body paragraphs.
- **Ink nav `#68686a`** — navigation links, which turn #090b22 on hover.
- **Ink on dark `#e9e9eb`** — body text on navy bands.
- **Indigo `#3e57da`** (`--indigo-500-main`, `--_semantic---text-brand`) — the brand accent for small labels and links (67 characters).
- **Border `#dadadd`** — input borders and the inset ring on white buttons; **hairline glass `#ffffff33`** and **glass 10 `#ffffff1a`** — borders and fills on navy.
- **Input placeholder `#98989c`**.
- **Accent tints** — `#ceeab0` (lime), `#ffd7f9` (pink) and `#fff4b6` (yellow) are measured as small text colours on dark sections; the CSS declares matching accent families (`--lime-500-main` #86cb3c, `--pink-500-main` #e585d7, `--yellow-500-main` #ffc814, `--teal-500-main` #00cee0, `--orange-500-main` #ff6a42).

## Typography

One family carries the whole page: **Basiersquare** (served as "Basiersquare Webfont", weights 400 and 500), 12,052 of 12,260 measured characters. The only other face is the system `ui-monospace` for code samples (14px/18.2px).

The scale is measured as:
- Display h1: 72px/72px, weight 500, -4.68px tracking (-6.5%).
- Section h2: 44px/46px, 500, -2.2px.
- Feature h3: 34px/38px, 500, -1.53px.
- Other headline sizes: 56px/-3.08px, 26px/-1.04px, 20px/-0.7px.
- Lead text: 18px with -0.27px tracking.
- Body: 16px/22px, 400, -0.16px.
- Buttons: 16px/24px at 500 with -0.064px; small buttons 14px/22px with -0.028px.
- Eyebrows: 12px/18px at 500, uppercase.

Every size has negative tracking, scaled to the size, which gives headlines a dense, engineered look. Weight never goes above 500. Basiersquare is a commercial typeface; the shipped fallback is the generic `sans-serif`.

## Layout

Content runs within a 1200px measured width (content left 40px, right 1240px at 1280). The band map shows a 52px announcement strip, a 1,651px white hero with 3 columns of avatar cards, a 3,584px white feature section of alternating rows, a 937px navy demo band (2 columns), a 2,413px #f7f7f7 section, a 1,027px navy API band, a 859px white review section (3 columns), a pastel gradient strip (#ddd0e4 to #f9dcd6), a 1,363px white FAQ and an 857px footer in 4 columns.

Spacing is measured on a 4px base: gaps of 4, 6, 8, 12, 16, 24, 32, 48 and 96px; paddings of 2, 4, 8, 12, 16, 18, 24, 32, 40, 48, 56 and 96px. Feature rows pair a text block (eyebrow, h3, paragraph, ghost link) with a large rounded media panel, alternating sides.

## Elevation & Depth

Elevation is subtle and button-focused. The CTA shadow is `rgba(16, 24, 40, 0.08) 0px 2px 10px 0px`; on hover it grows to `rgba(16, 24, 40, 0.08) 0px 6px 20px 0px` while the fill lightens to 80% navy — a lift effect. White buttons use a 1px inset ring `rgb(218, 218, 221) 0px 0px 0px 1px inset` instead of a border. On navy sections, a `rgba(255, 255, 255, 0.2) 0px 0px 0px 1px` ring and glass fills (#ffffff1a, #ffffff33) separate code cards. A single focus-ring style `rgb(227, 235, 255) 0px 0px 0px 3px` is also measured. The largest shadow, `rgba(0, 0, 0, 0.06) 0px 1px 6px 0px, rgba(0, 0, 0, 0.157) 0px 2px 32px 0px`, sits under one floating panel.

## Shapes

The radius scale in the CSS (`--border-radius-xxxsmall` .25rem up to `--border-radius-full` 999rem) shows up on the page as 4, 6, 8, 10, 12, 16 and 24px plus full pills. The most used values are pills (70 uses, on tabs and chips) and 16px (42 uses, on cards and media panels). Primary buttons use 10px, small buttons and inputs 8px. Avatar circles use 50%.

## Components

- **Primary button** — #090b22 fill, white Basiersquare 16px/24px at 500, 10px radius, 12px 18px padding, 48px tall, soft shadow; hover 80% navy with a deeper shadow.
- **Small primary button** — "Get started" in the nav: 14px/22px, 8px radius, 8px 16px padding, 38px tall.
- **Ghost button** — "Book demo" on white: white fill, navy text, inset #dadadd ring, 10px radius, 48px tall; hover fill #f7f7f7.
- **Tab chip** — "VIDEO", "SESSIONS", "API": uppercase 14px/18px at 500, pill radius, 8px 32px padding, 36px tall, #363636 text.
- **Navigation** — #68686a links at 16px that turn #090b22 on hover; 72px tall bar.
- **Prompt textarea** — #f7f7f7 fill, 1px #dadadd border, 8px radius, 12px 16px padding, 128px tall, placeholder #98989c.
- **Code card** — on navy: #ffffff1a fill, white ui-monospace 14px/18.2px code, 16px radius, 24px padding; a variant uses #ffffff33 fill with a #ffffff33 border and 32px padding.
- **Avatar cards** — portrait photos in rounded containers with a caption label ("Customizable Avatars").
- **Footer** — #0d0f2c fill, white text, 80px vertical padding, with a language switcher ("EN") and uppercase column headers.

## Design System Architecture

Synthesia publishes no public design system that we could open; https://www.synthesia.io/brand returns 404, and the newsroom at https://www.synthesia.io/press links to an official media pack of logos and assets on Google Drive (not opened). The shipped Webflow CSS exposes a three-layer token system with 259 root variables: primitive ramps (`--indigo-500-main` #3e57da, `--lime-500-main`, `--pink-500-main`, `--teal-500-main`, `--yellow-500-main`, `--orange-500-main`, `--grey-600-main` #656c86, `--error-600-main` #d92d20, `--success-600-main` #15a261, `--warning-600-main` #f79009), base colours with opacity steps (`--base-dark` #0d0f2c, `--base-dark-opacity-10` … `-80`), and semantic aliases (`--_semantic---text-primary` → base-dark, `--_semantic---text-brand` → indigo-500, `--_semantic---bg-brand-hover` → indigo-600, `--_semantic---bg-accent-lime` → lime-200, and so on). Typography variables name sizes by role (`--_typography---heading-huge-font-size` 5.5rem, `-large` 3.5rem, `-medium` 2.5rem, `--_typography---paragraph-small-font-size` .875rem), and radii by t-shirt size (`--border-radius-xxsmall` .375rem, `-small` .625rem, `-base` .75rem, `-large` 1rem, `-xlarge` 1.5rem, `-huge` 6.25rem, `-full` 999rem).

## Do's and Don'ts

**Do**
- Use #090b22 navy for primary buttons and headlines, and white or #f7f7f7 for surfaces.
- Set everything in Basiersquare at 400 or 500 with size-scaled negative tracking.
- Keep CTAs at 10px radius, 48px tall, with the soft 8% navy shadow.
- Pair navy primary buttons with white ghost buttons that use an inset #dadadd ring.
- Use real avatar portraits and product screenshots inside 16px-radius panels.
- Reserve indigo #3e57da for small brand accents.

**Don't**
- Don't use bright brand colours for CTAs; the action colour is navy.
- Don't use bold (700) weights; the measured maximum is 500.
- Don't set headlines with default tracking; 72px headlines use -4.68px.
- Don't put the pastel accents (#ceeab0, #ffd7f9, #fff4b6) on large surfaces; they are small text tints on dark.
- Don't use hard borders on white buttons; use the inset ring.
- Don't use heavy drop shadows.

## Responsive Behavior

The extractor's 390px mobile pass recorded:
- h1 at 44px/46px with -2.2px tracking (72px/72px on desktop), over a 350px width.
- h2 at 34px/38px with -1.53px tracking (44px/46px on desktop).
- Body text unchanged at 16px/22px, -0.16px.
- The primary CTA unchanged: 16px/24px, 10px radius, 12px 18px padding, 48px tall.
- A 72px navigation bar; the extractor counted 6 visible header links on both widths and detected no menu toggle.
- Mobile font sizes recorded: 16, 14, 20, 12, 34, 26, 18 and 44px.

Breakpoint values and how the avatar carousel and feature rows rearrange were not measured.

## Iteration Guide

1. Start with white and #f7f7f7 surfaces, #363636 body text and #090b22 headlines.
2. Set the hero in Basiersquare (or a geometric sans with similar proportions) at 72px/72px, 500, -4.68px.
3. Add a navy #090b22 CTA (10px radius, 12px 18px, 48px) next to a white ghost button with the #dadadd inset ring.
4. Use uppercase 12px eyebrows above h3 headings at 34px/38px.
5. Put product UI and avatar photos in 16px-radius panels and alternate them left and right.
6. Break the page with full-width navy bands holding glass code cards (#ffffff1a, 16px radius).
7. Check against the capture: the page should feel clean, light and corporate, with the navy and the faces giving it contrast.
