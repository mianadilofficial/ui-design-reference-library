---
version: alpha
name: Customer.io
category: "Product & SaaS"
description: "Customer.io (customer.io) sets everything in Saans (saansFont, variable weight 475) on white, with Spruce #0b363b pill buttons ringed by a 4px Verdant #abffae flare, deep-teal #00262b ink, dark Spruce #00191c bands and footer, 96px/40px headlines with +0.2px tracking, and pastel case-study tints."
colors:
  canvas: "#ffffff"
  ink: "#00262b"
  ink-body: "#03282ecc"
  ink-muted: "#042f35b3"
  primary: "#0b363b"
  primary-hover: "#00262b"
  on-primary: "#ffffff"
  flare: "#abffae"
  spruce-dark: "#032125"
  footer-bg: "#00191c"
  spruce-900: "#031f23"
  spruce-200: "#a1c2c6"
  spruce-100: "#cde3e5"
  surface-soft: "#fafafa"
  hairline: "#ebebeb"
  tint-zest: "#fdf0e9"
  tint-wave: "#e2f4ff"
  text-zest: "#863d1c"
  text-wave: "#123a88"
  accent-mustard: "#866006"
typography:
  display:
    fontFamily: saansFont, "saansFont Fallback"
    fontSize: 96px
    fontWeight: 475
    lineHeight: 96px
    letterSpacing: 0.2px
  display-mobile:
    fontFamily: saansFont, "saansFont Fallback"
    fontSize: 56px
    fontWeight: 475
    lineHeight: 63px
    letterSpacing: 0.2px
  feature:
    fontFamily: saansFont, "saansFont Fallback"
    fontSize: 64px
    fontWeight: 475
    letterSpacing: 0.2px
  heading:
    fontFamily: saansFont, "saansFont Fallback"
    fontSize: 40px
    fontWeight: 475
    lineHeight: 45px
    letterSpacing: 0.2px
  heading-mobile:
    fontFamily: saansFont, "saansFont Fallback"
    fontSize: 30px
    fontWeight: 475
    lineHeight: 33.75px
    letterSpacing: 0.2px
  lead:
    fontFamily: saansFont, "saansFont Fallback"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 30px
    letterSpacing: 0.2px
  card-title:
    fontFamily: saansFont, "saansFont Fallback"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 22px
    letterSpacing: 0.2px
  body:
    fontFamily: saansFont, "saansFont Fallback"
    fontSize: 16px
    fontWeight: 475
    lineHeight: 22px
    letterSpacing: 0.2px
  button:
    fontFamily: saansFont, "saansFont Fallback"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 22px
    letterSpacing: 0.2px
  button-small:
    fontFamily: saansFont, "saansFont Fallback"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 19.25px
    letterSpacing: 0.2px
rounded:
  xs: 2px
  sm: 4px
  md: 6px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 9.6px
  s8: 10px
  s9: 12px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 28px
    height: 48px
    borderColor: "{colors.primary}"
    boxShadow: oklch(0.9263 0.136 145.2) 0px 0px 0px 4px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    borderColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 28px
    borderColor: "{colors.primary}"
    boxShadow: oklch(0.97 0 0) 0px 0px 0px 4px
  button-header:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-small}"
    rounded: "{rounded.pill}"
    padding: 8px 20px
    height: 40px
    borderColor: "{colors.primary}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  case-study-card:
    backgroundColor: "{colors.tint-zest}"
    textColor: "{colors.text-zest}"
    typography: "{typography.lead}"
    rounded: "{rounded.xs}"
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    padding: 64px 0px
---

## Overview

customer.io ("Customer.io: Customer Engagement Platform For Better Outcomes") markets a messaging and lifecycle automation platform. The home page (8,963px tall at 1280px) opens with a very large, light-weight headline — "More impact from every message", where the last word is split into letters and differs between measurements ("message" in the desktop band, "push" in the mobile band, "in-app" in the h1 role) — over a short line and two pill buttons, followed by a dense product dashboard screenshot and a logo bar ("The customer engagement platform trusted by 8,000+ brands").

The identity is built on **Spruce**, a deep green-teal: Spruce ink for text, Spruce 700 (`#0b363b`) for primary buttons, and very dark Spruce (`#00191c`) for the infrastructure band and the footer. The signature detail is a 4px **Verdant** (`#abffae`) ring around every primary button — the "CTA flare". Colour beyond that is used as highlights: a multicoloured sentence ("Unify your data, messaging, and AI in one platform…" with coloured keywords), pastel case-study cards (peach for Buffer, light blue for a second customer quote) and small icon illustrations.

Everything is set in **Saans** with a slightly open +0.2px tracking at every size, at an unusual variable weight of 475. The voice is confident and plain ("Everything you need to engage customers", "Support every stage of the customer journey", "Optimize your messaging").

## Colors

Customer.io publishes its palette at https://brand.customer.io/docs/color: primary Spruce 700 `0B363B`, Spruce 900 `031F23`, Verdant 300 `ABFFAE`, White and Charcoal 25 `FAFAF9`, plus secondary Blush, Zest, Wave, Mustard and Nova ramps. Measured on the home page:

- **Spruce 700 `#0b363b`** (`primary`) — primary button fill and border (site variable `--color-cta-surface`).
- **Ink `#00262b`** (`--color-ink`, oklch 24.5% .042 207.2) — headings, nav, the secondary button label, and the primary button hover fill (`--color-cta-surface-hover`).
- **Body `#03282ecc`** — the most-read text colour (1,031 characters), Spruce ink at 80%; **muted `#042f35b3`** at 70%.
- **Verdant flare `#abffae`** — the 4px ring around primary buttons (`--color-cta-flare`), and accent text/borders on dark bands.
- **Dark Spruce** — `#00191c` (footer, infrastructure band; second-largest background), `#032125` (third-largest), with `#001d21d9` translucent overlays.
- **Spruce 200 `#a1c2c6`** and **Spruce 100 `#cde3e5`** — secondary text on dark bands (published ramp values A1C2C6 and CDE3E5).
- **Neutrals** — white canvas, `#fafafa` soft sections, `#ebebeb` hairlines (Charcoal 100 in the published ramp).
- **Case-study tints** — `#fdf0e9` (peach) with `#863d1c` text; `#e2f4ff` (light blue) with `#123a88` text; `#866006` mustard accent (`--color-accent`).
- Highlight words use `#b52473`, `#eb7133`, `#e1a70e`, `#41a251`, `#6e3ebe` (site `--color-highlight-blush/zest/mustard/verdant/nova`).

## Typography

The site loads **saansFont** (variable, 100–800) with a generated fallback. Customer.io's Typography page (https://brand.customer.io/docs/typography) names the primary typeface **Saans**, with "Instrument Sans from Google Fonts" as the fallback and Helvetica as the universal backup.

| Role | Size / line-height | Weight |
| --- | --- | --- |
| Hero (h1) | 96px / 96px | 475 |
| Feature statement ("Optimize your messaging") | 64px | 475 |
| Section heading (h2) | 40px / 45px | 475 |
| Lead / quote | 24px / 30px | 500 |
| Card title (h3) | 16px / 22px | 600 |
| Body / nav | 16px / 22px | 475 |
| Button | 16px / 22px | 600 |
| Small button | 14px / 19.25px | 600 |

Every measured size carries `letter-spacing: 0.2px`. Weight 475 is the default (2,816 characters); 500 for quotes and leads, 600 for buttons and titles, 700 rarely (33 characters). Headings are sentence case.

## Layout

Six measured desktop bands: a 2,552px white opening (hero, dashboard, logo bar, unify statement and a 3-column value row), a 500px photographic "Capabilities" carousel (Journeys, Audiences, Data & integrations, Design Studio), a 1,836px white AI Agent + Solutions section (2 columns), a 1,397px dark Spruce `#00191c` infrastructure band, a 1,930px white case-study and closing-CTA section (up to 5 columns), and a 748px dark footer. Content runs from x=32 to x=1248.

Spacing is on a 4px/8px grid: gaps of 8px (132), 4px (116), 24px (106), 32px, 16px, 64px, 96px; paddings of 24px (110), 32px, 6px, 4px, 8px, and 128px/160px for section spacing. Maximum card columns measured: 6.

## Elevation & Depth

The site uses almost no shadows. The two measured box-shadows are both 4px rings, not drop shadows: `oklch(0.9263 0.136 145.2) 0px 0px 0px 4px` (Verdant around the primary button) and `oklch(0.97 0 0) 0px 0px 0px 4px` (light grey around the secondary button). Depth comes from switching between white and dark Spruce bands, from the screenshot itself, and from thin `#ebebeb` dividers between grid cells.

## Shapes

- **Pill** (computed 3.35544e+07px, 23 elements) — every button.
- **2px** (31) — cards, images and screenshot frames, i.e. nearly square.
- **4px** (2) and **6px 6px 0px 0px** (1) — small tabs.

The contrast between fully round buttons and almost-square content is deliberate: actions are the only rounded shapes on the page. The case-study cards add a graphic angled cut-out shape behind portraits.

## Components

- **Primary button** ("Get started") — Spruce `#0b363b` fill and 2px border, white Saans 16px/600, padding 8px 28px, 48px tall, pill, with a 4px Verdant ring. Hover: fill and border `#00262b`, ring unchanged.
- **Secondary button** ("Book a demo") — white, 2px Spruce border, `#00262b` label, the same padding and pill, with a 4px light-grey ring.
- **Header buttons** — the same pair at 14px/600, padding 8px 20px, 40px tall.
- **Header** — white, logo, Platform / Solutions / Resources (with chevrons) / Pricing, Sign in; 5 links visible.
- **Value columns** — 16px/600 title with a 16px/475 description and a small icon.
- **Case-study card** — pastel tint (peach `#fdf0e9` or blue `#e2f4ff`), company logo chip, two metrics, a 24px/500 quote in the matching dark tint (`#863d1c`, `#123a88`), name and a "Read case study" link.
- **Footer** — `#00191c`, white and Spruce 200 links in five columns, "New" badges in Verdant, an "All Systems Operational" status line.

## Design System Architecture

Customer.io publishes brand guidelines at https://brand.customer.io/ (opened), with Foundations, Logo, Graphic expression, Typography, Color, Brand personality, AI guidelines, Brand assets, and Digital/Physical application pages. The Color page gives full 25–900 ramps for Spruce, Verdant and Charcoal (primary) and Zest, Wave, Mustard, Nova, Blush (secondary) and states that approved combinations meet WCAG AA.

The website implements this as Tailwind-style CSS variables (232 root variables) in oklch: ramps (`--color-spruce-50…900`, `--color-mustard-*`, `--color-nova-*`, `--color-blush-*`, `--color-wave-*`, `--color-charcoal-*`, `--color-verdant-*`) and semantic aliases — `--color-ink`, `--color-link`, `--color-link-hover`, `--color-muted` (a `color-mix` of link at 70%), `--color-on-subtle`, `--color-surface-strong`, `--color-surface-inverse-subtle`, `--color-stroke-strong`, and a CTA set (`--color-cta-surface`, `-surface-hover`, `-stroke`, `-flare`, plus `-inverse` variants for dark bands: Verdant surface `oklch(92.63% .136 145.2)` with hover `oklch(87.5% .144 145.6)`). Highlight colours are tokenized as `--color-highlight-{blush,mustard,nova,verdant,wave,zest}`.

## Do's and Don'ts

**Do**
- Use Saans (or Instrument Sans as the published fallback) at weight 475 with +0.2px tracking.
- Make primary actions Spruce pills with the 4px Verdant flare; secondary actions white pills with a Spruce border.
- Keep content shapes nearly square (2px) so the pill buttons stand out.
- Alternate white and dark Spruce `#00191c` bands; use Verdant and Spruce 200 for accents on dark.
- Use the secondary ramps only for highlights and pastel case-study tints.

**Don't**
- Don't add drop shadows; the system uses 4px rings and band contrast.
- Don't set headlines bold; 475 is the headline weight.
- Don't use tight negative tracking; the measured tracking is +0.2px everywhere.
- Don't put Verdant text on white (it is a ring and dark-band accent).
- Don't mix secondary hues in one component.

## Responsive Behavior

Measured at 390px:

- Header shows 2 links and no menu toggle was detected.
- h1 drops from 96px/96px to 56px/63px; h2 from 40px/45px to 30px/33.75px; the 64px feature statement to 48px.
- Quotes and leads drop from 24px/30px to 20px/25px; body stays 16px.
- Content runs x=20 to x=372; the dark Spruce band measured 1,567px, the footer 668px.
- Maximum card columns measured 6 (logo rows), as on desktop.

Intermediate breakpoints were not measured.

## Iteration Guide

1. Start on white with `#00262b` Saans at 16px/22px, weight 475, +0.2px tracking.
2. Headline at 96px/475 (56px mobile), one short supporting line, then the button pair: Spruce pill with Verdant ring + white outlined pill.
3. Put content in a grid with thin `#ebebeb` dividers and 2px-radius media.
4. For a "serious" section (infrastructure, security), switch to `#00191c` with white and Spruce 200 text.
5. Colour customer stories with one published secondary hue: a 25–50 tint background and a 700–800 text colour.
6. Pull any new colour from the published ramps at brand.customer.io/docs/color.
