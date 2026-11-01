---
version: alpha
name: "POLITICO"
category: "News & Publishing"
description: "POLITICO (politico.com) is a US political news front page: white canvas, black bold din-2014 headlines (58px lead), POLITICO red #d71920 accents, tracked uppercase 10px bylines, 8px cards and a navy #121522 footer."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#d71920"
  navy-button: "#282d40"
  on-navy-button: "#b1b4bd"
  surface-panel: "#f4f5f7"
  surface-navy: "#121522"
  ink-slate: "#6e7381"
  ink-grey: "#666666"
  ink-soft: "#000000d9"
  ink-cool: "#696d70"
  ink-warm: "#191717"
  hairline: "#b4b4b459"
  card-bg: "#f7f7f7"
  card-border: "#dad6d6"
  footer-text: "#ffffffcc"
typography:
  display:
    fontFamily: din-2014, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 58px
    fontWeight: 700
    lineHeight: 60.9px
    letterSpacing: "-0.96px"
  display-mobile:
    fontFamily: din-2014, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 26.88px
    letterSpacing: "-0.32px"
  heading:
    fontFamily: din-2014, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 12px
    fontWeight: 700
    lineHeight: 14.4px
    letterSpacing: 1.6px
    textTransform: uppercase
  subheading:
    fontFamily: din-2014, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 17.92px
  body:
    fontFamily: din-2014, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 9.6px
    fontWeight: 400
    lineHeight: 11.52px
  link:
    fontFamily: din-2014, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.72px
rounded:
  xs: 5px
  sm: 8px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 2.4px
  s4: 4px
  s5: 5px
  s6: 6px
  s7: 8px
  s8: 12px
  s9: 15px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.navy-button}"
    textColor: "{colors.on-navy-button}"
    typography: "{typography.heading}"
    rounded: "{rounded.pill}"
    padding: 1px 6px
    height: 40px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-soft}"
    boxShadow: rgba(0, 0, 0, 0.08) 0px 0px 0px 0px
  nav-link:
    textColor: "{colors.ink-soft}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    padding: 0px 5px
    height: 40px
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink-warm}"
    rounded: "{rounded.sm}"
    padding: 20px 20px 12px
    borderColor: "{colors.card-border}"
  footer:
    backgroundColor: "{colors.surface-navy}"
    textColor: "{colors.footer-text}"
    padding: 64px
---

## Overview

POLITICO (www.politico.com, title "Politics, Policy, Political News - POLITICO") is the US political news publisher. The measured home page is a dense, newspaper-style front page on a white canvas: a centered red POLITICO wordmark with a hamburger icon at left and EUROPE, PRO and a search icon at right; a section nav strip (Congress, White House, Canada, Defense, Elections, Energy, Health Care, Legal, Tech, California, New York, then Playbook, Columns, Newsletters, Magazine, Podcasts); a sponsor banner ("California Currents"); a three-column grid labelled by small red-ringed headers in tracked uppercase (THE POLITICO POLL, TOP NEWS, LATEST NEWS, MORE TOP HEADLINES, PODCASTS, NEWSLETTERS). The lead story ("Voters have 'had enough' of Mideast turmoil. But the Houthi conflict is just getting started.") is set at 58px in bold sans with a grey serif dek below; supporting stories use 22px or 16px bold sans headlines with bylines in tiny tracked caps ("BY LISA KASHINSKY"); "EXCLUSIVE" tags appear in red. The poll card in the left column carries a small bar chart in blue, orange and brown-red. A Playbook newsletter form (Email, Employer, Job Title, a dark SIGN UP pill) sits at the lower right, and the footer is a deep navy block with white links.

The extractor read 1,807 visible elements. Several images in the capture show alt text instead of pictures (broken-image placeholders such as "IMG_2072.JPG"); these are a capture artifact and not documented as design.

## Colors

Measured in `web/data/extracted/politico.json`:

- **canvas `#ffffff`**: the page background (area 9,315).
- **ink `#000000`**: the most-read text color (6,454 characters): headlines and body.
- **primary `#d71920`**: POLITICO red. It colors the wordmark in the capture, section-label rings, the "EXCLUSIVE" tag, section kickers (for example "WASHINGTON & POLITICS", 202 characters) and links ("Read more in Playbook PM."). The generated primary was the dark navy newsletter button; because the brand's action and accent color on this page is the measured red, primary is reassigned to #d71920, and the button colors keep their measured values as `navy-button` and `on-navy-button`.
- **navy-button `#282d40`** with **on-navy-button `#b1b4bd`**: the SIGN UP pill fill and its label (area 4).
- **surface-panel `#f4f5f7`**: light grey panel (area 1,861).
- **surface-navy `#121522`**: footer background (area 274), with `footer-text #ffffffcc`.
- **ink-slate `#6e7381`** (1,688 characters), **ink-grey `#666666`** (1,178), **ink-soft `#000000d9`** (781, nav text), **ink-cool `#696d70`** (275) and **ink-warm `#191717`** (235, card text): the secondary text colors.
- **hairline `#b4b4b459`**: 35% grey borders (31 occurrences); `--containerBorder: hsla(0,0%,70.6%,0.35)`.
- **card-bg `#f7f7f7`** and **card-border `#dad6d6`**: the poll card.

Other measured backgrounds: `#f5f5f5` (84) and `#d71920d9` (8, translucent red). `--swiper-theme-color #007aff` is a slider default and not a brand color.

## Typography

Families: **din-2014** (8,989 characters; weights 400 and 700, with `DIN 2014` variants) for UI, headlines and labels; **Georgia** (1,263 characters) and **jubilat** (677 characters, bold) for serif text such as dek lines and banner titles. A `main-icons` icon font is loaded.

- **display** (lead headline): din-2014 58px / 60.9px, weight 700, letter-spacing -0.96px. Mobile: 24px / 26.88px, -0.32px.
- **heading** (section kicker): 12px / 14.4px, weight 700, letter-spacing 1.6px, uppercase.
- **subheading** (story headline): 16px / 17.92px, weight 700; 22px / 25.08px bold with -0.32px spacing is the card size (836 characters).
- **link**: 16px / 22.72px, weight 400.
- **body** (fine print): 9.6px / 11.52px, weight 400.

By character count the sizes are 28px (3,081, with -0.32px spacing, the h3 headline size across the grid), 16px (2,926), 10px (1,547, with 1.6px spacing: bylines), 14px (1,465), 22px (887), 12px (554), 9.6px (283) and 58px (93). Weights: 700 (7,413), 500 (3,005), 400 (605). Tracked small caps (10px and 12px at 1.6px) for labels and bylines versus tight negative tracking on headlines is the signature. On the 390px pass the sizes are 24px (3,182), 16px (2,591), 14px (1,851), 10px (1,538), 20px (836), 12px (370), 9.6px (283), 15px (209). No font-license source was opened.

## Layout

The page is 1280px wide and 9,530px tall. The header block is 146px high. Content is a three-column newspaper grid: a narrow left rail (poll and latest news), a wide center column (top news, more top headlines) and a right rail (stories, advertisement, podcasts, newsletters), separated by 1px vertical rules in the hairline color. Measured paddings: 15px (45 occurrences), 30px (40), 8px (22), 158.906px (12), 12px (10), 6px, 1px and 20px; gaps are 20px, 8px and 4px. The footer is 214px high with padding 64px. Cards are 320px wide with padding 20px 20px 12px. The tokens scale is 1, 2, 2.4, 4, 5, 6, 8, 12, 15 and 16px.

## Elevation & Depth

Nearly flat. Two shadows were measured: `rgba(0, 0, 0, 0.1) 0px 2px 5px 0px` (2 elements, small buttons) and a zero-offset `rgba(0, 0, 0, 0.08) 0px 0px 0px 0px` on the header, which renders as no shadow. Structure comes from 1px hairlines in `#b4b4b459`, `#dad6d6`, `#e5e7eb` and one black border.

## Shapes

Measured radii: 50% (6 elements: circular avatar and arrow controls), 8px (1, the poll card), 5px (1) and 1600px (1, the SIGN UP pill). Everything else is square. Tokens: `xs 5px`, `sm 8px`, `pill 9999px`.

## Components

- **button-primary (SIGN UP)**: navy `#282d40` fill, `#b1b4bd` label, din-2014 12px / 14.4px bold uppercase with 1.6px tracking, padding 1px 6px, height 40px, width 90px, pill radius.
- **link**: red `#d71920` 16px / 22.72px regular ("Read more in Playbook PM.").
- **text-input**: transparent, black 16px text, padding 0px 5px, height 40px, a bottom rule under each field (Email, Employer, Job Title) with 10px caps labels above.
- **card (poll)**: `#f7f7f7`, `#191717` text at 22px bold, 1px solid `#dad6d6`, radius 8px, padding 20px 20px 12px, height 304px, width 320px.
- **nav**: white header; section strip in black 85% (`#000000d9`).
- **footer**: `#121522`, `#ffffffcc` text 12px weight 500, padding 64px.
- **Section header**: a small red ring bullet, then a 10px bold tracked uppercase label.

## Design System Architecture

No public design system or brand guideline was found: WebFetch of the home page failed with "Claude Code is unable to fetch from www.politico.com", so only the extractor's own measurements were available. The shipped CSS has very few root variables (`--containerBorder: hsla(0,0%,70.6%,0.35)`, `--borderWidth: 1px`, `--nav-fade-color: #fff`, `--swiper-theme-color: #007aff`); the design values come from rendered elements. Source: https://www.politico.com/ (measured with `web/scripts/extract-tokens.mjs`). No official guideline link is documented.

## Do's and Don'ts

- Do use bold din-2014 for headlines and tracked uppercase 10px to 12px for labels and bylines.
- Do keep POLITICO red #d71920 for kickers, tags, links and the wordmark; keep headline text black.
- Do separate columns with 1px translucent grey rules.
- Do pair bold sans headlines with grey serif deks (Georgia or jubilat).
- Don't use the slider blue #007aff as a brand color.
- Don't fill cards with heavy shadows; only a 2px 5px 10% shadow was measured.
- Don't round the layout; only chips, avatars and the pill button carry radii.

## Responsive Behavior

Measured on the 390px pass: the h1 role is 24px / 26.88px bold with -0.32px tracking and is 310px wide; fine-print body stays 9.6px / 11.52px; the commonest sizes are 24px (3,182 characters), 16px (2,591), 14px (1,851) and 10px (1,538). Column collapse, nav and ad behavior on mobile are not measured.

## Iteration Guide

1. Canvas #ffffff, ink #000000, accent #d71920, panels #f4f5f7, footer #121522.
2. din-2014 bold headlines at 58px (lead), 28px, 22px and 16px; 10px and 12px tracked caps at 1.6px for labels.
3. Cards at 8px radius with 1px #dad6d6; pill buttons 40px high.
4. Build a three-column grid with hairline rules.
5. Run `node web/scripts/verify-designs.mjs --slug=politico` after edits; never change measured values.
