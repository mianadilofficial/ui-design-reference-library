---
version: alpha
name: lemlist
category: "Product & SaaS"
description: "lemlist (lemlist.com) is an outbound-sales SaaS site: Manrope 600 headlines (56px, -2.24px tracking) over Inter 14–16px UI text, #18181a/#7d7d7d ink on white with #e6e6e6 frames, lemlist blue #316bff, a Mars-orange #d86a33 hero and a #010113 space-navy footer, with 8–10px radii."
colors:
  canvas: "#ffffff"
  ink: "#18181a"
  ink-light: "#7d7d7d"
  ink-body: "#1e1e21cc"
  ink-lighter: "#b1b1b1"
  primary: "#316bff"
  primary-dark: "#134cdd"
  on-primary: "#ffffff"
  frame: "#e6e6e6"
  surface-subtle: "#fafafa"
  hairline: "#dedede"
  mars-orange: "#d86a33"
  space-navy: "#020a3a"
  footer-bg: "#010113"
  footer-text: "#f5f5f5"
typography:
  display:
    fontFamily: Manrope, "Manrope Fallback", sans-serif
    fontSize: 56px
    fontWeight: 600
    lineHeight: 64px
    letterSpacing: "-2.24px"
  display-mobile:
    fontFamily: Manrope, "Manrope Fallback", sans-serif
    fontSize: 32px
    fontWeight: 600
    lineHeight: 34px
    letterSpacing: "-0.64px"
  heading:
    fontFamily: Manrope, "Manrope Fallback", sans-serif
    fontSize: 40px
    fontWeight: 600
    lineHeight: 44px
    letterSpacing: "-0.8px"
  subheading:
    fontFamily: Manrope, "Manrope Fallback", sans-serif
    fontSize: 32px
    fontWeight: 600
    lineHeight: 40px
    letterSpacing: "-0.64px"
  body:
    fontFamily: Inter, "Inter Fallback", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-0.16px"
  ui:
    fontFamily: Inter, "Inter Fallback", sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  label-mono:
    fontFamily: "\"JetBrains Mono\", \"JetBrains Mono Fallback\", monospace"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 16px
    textTransform: uppercase
rounded:
  xs: 6px
  sm: 8px
  md: 10px
  lg: 12px
  bubble: "13px 13px 13px 0px"
  2xl: 16px
  3xl: 24px
  4xl: 48px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 14px
  s9: 15px
  s10: 16px
components:
  ghost-button:
    textColor: "{colors.ink-light}"
    typography: "{typography.ui}"
    rounded: "{rounded.md}"
    padding: 10px 14px
    height: 36px
  ghost-button-hover:
    backgroundColor: "#efefef"
    textColor: "{colors.ink}"
  segmented-tab:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.ui}"
    rounded: "8px 8px 0px 0px"
    padding: 0px 16px
    height: 36px
    boxShadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.1) 0px 1px 2px -1px
  case-study-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-light}"
    typography: "{typography.label-mono}"
    rounded: "{rounded.md}"
    padding: 8px 14px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.ui}"
    padding: 0px 80px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.footer-text}"
    typography: "{typography.heading}"
---

## Overview

lemlist.com ("The only platform you need for outbound | lemlist") sells an outbound sales platform: lead finding, intent signals, multichannel sequences and deliverability. The home page (11,182px tall at 1280px) is a long, light SaaS page wrapped in a space-exploration story — it opens on a photographic Mars landscape with rovers and astronauts and a burnt-orange band, and closes on a deep navy starfield with a shuttle and the line "Your next deal is no longer light-years away."

Between those two scenes the page is restrained and product-led: white background, near-black Manrope headlines with tight negative tracking, grey Inter body copy, and large framed screenshots of the lemlist app (lead tables, sequence builders, chat-style message previews, deliverability charts) set inside softly tinted, rounded panels. Section breaks are marked by thin full-width decorative strips (measured as 119px image bands). The tone is confident and practitioner-oriented: "From full TAM coverage to your top accounts, run outreach that still feels 1:1", "Built to back outbound pros like you", "Steal the outbound playbooks behind today's top sales teams".

Note: the capture shows a cookie-consent card ("Welcome to lemlist!") at top left. It is a third-party consent widget (Axeptio fonts) and is excluded from these tokens.

## Colors

Text and surface values below are both measured and declared in the shipped `--color-*` variables.

- **Ink `#18181a`** (`--color-text-standard`) — headings, navigation and primary text.
- **Ink light `#7d7d7d`** (`--color-text-light`) — the most-read text colour by characters (2,637): descriptions, labels, secondary nav.
- **Body `#1e1e21cc`** — paragraph copy at 80% opacity.
- **Ink lighter `#b1b1b1`** (`--color-text-lighter`) — tertiary text, logo-wall captions.
- **Canvas `#ffffff`** — the page.
- **Frame `#e6e6e6`** (`--color-border-frame`) — the second-largest background area: the rounded frames around product screenshots.
- **Subtle `#fafafa`**, hairline **`#dedede`** (`--color-border-inactive`, 79 borders).
- **lemlist blue `#316bff`** (`primary`, `--color-lemlist-primary-default` and `--color-theme-primary-default`) — measured as a small background area and as the border colour of the language switch on hover; `#134cdd` (`--color-theme-primary-400`) is a darker step also measured as a background.
- **Mars orange `#d86a33`** — the hero band behind the h1 (868px tall), with `#cf6531`, `#fbefe9` and `#fcf5f2` fading out below it.
- **Space navy `#020a3a`** and **footer `#010113`** — the closing starfield and footer, with `#f5f5f5` text.

Declared but not seen as large surfaces: `--color-theme-secondary-default #ec6181` (pink), an alert ramp (`--color-alert-100 #ffe7e2` … `-500 #8c0000`) and `--color-lemlist-primary-100 #e9f3ff` / `-200 #bbceff`.

## Typography

Three families:

- **Manrope** (variable, 200–800) — headings, always 600.
- **Inter** (variable, 100–900) — body and UI; `--font-sans` begins `"Inter","Inter Fallback",ui-sans-serif,system-ui`.
- **JetBrains Mono** (variable, 100–800) — small uppercase labels such as CASE STUDY.

| Role | Family | Size / line-height | Weight | Tracking |
| --- | --- | --- | --- | --- |
| Hero (h1) | Manrope | 56px / 64px | 600 | -2.24px |
| Section heading (h2) | Manrope | 40px / 44px | 600 | -0.8px |
| Feature heading (h3) | Manrope | 32px / 40px | 600 | -0.64px |
| Body | Inter | 16px / 24px | 400 | -0.16px |
| UI / nav | Inter | 14px / 20px | 500 | normal to -0.14px |
| Mono label | JetBrains Mono | 12px / 16px, uppercase | 500 | normal |

14px is the most-used size (4,240 characters), almost always with -0.14px tracking; every measured size from 12px up carries negative tracking of about -1% (56px is -4%). Only 11px text is positive (+0.275px). Headings are sentence case.

## Layout

The variables set `--max-w: 1280px`. Content blocks sit between roughly x=64 and x=1212; the hero copy starts at x=120. The logo strip under the hero is a 4-column row (x=32–1248). Gaps step on a 4px base: 8px (232), 12px (76), 16px (62), 4px, 24px, 32px, 40px, 80px. Paddings: 12px (88), 40px (39), 8px, 24px, 14px.

Page sequence:

1. White header with logo, six visible links (Product, Pricing and others), language switch, Log in and a dark "Start free trial" button.
2. Mars hero: photographic landscape, white 56px headline at left, short copy and buttons at right, then an embedded product mock with a chat-style prompt ("Let AI handle it").
3. A logo wall of customers and "25,000+ users" line.
4. "From full TAM coverage…" — centered 40px heading, then five alternating feature rows: 32px heading + paragraph + screenshot inside a tinted, rounded frame.
5. Personas ("Built to back outbound pros like you") with illustrated astronaut characters in 4 columns.
6. G2 badges, testimonials (3 video cards), integrations (4 logos), playbooks (3 cards), FAQ accordion.
7. Starfield CTA and a multi-column footer on `#010113`.

Maximum card columns measured: 5.

## Elevation & Depth

Shadows are soft and layered, mostly Tailwind-style stacks:

- Screenshot frames: `rgba(91, 95, 116, 0.25) 0px 2px 6.5px -2px` with an inset `rgba(255, 255, 255, 0.75) 0px 0px 0px 1.6px` highlight.
- Small cards: `rgba(0, 0, 0, 0.05) 0px 2px 4px 0px`; buttons in the mock: `rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.1) 0px 1px 2px -1px`.
- A hard `rgba(0, 0, 0, 0.05) 0px 2.2px 0px -1.1px` bottom edge on 7 elements.

Depth is therefore subtle: grey frames (`#e6e6e6`) around product UI, a faint drop shadow and a white inner ring. The dramatic depth is reserved for the Mars and space photography.

## Shapes

- **8px** (44) and **10px** (37, `--radius-frame`) are the workhorse radii — buttons, inputs, frames.
- **Pill** (16 elements, computed as 3.35544e+07px) — tags and avatars.
- **12px** (13), **24px** (9), **48px** (5), 16px, 6px.
- Tabs and attached panels: `8px 8px 0px 0px`, `10px 10px 0px 0px`, `0px 0px 10px 10px`.
- **Chat bubble** `13px 13px 13px 0px` (5) — message previews with one square corner.
- `--radius-4xl` is declared as 2rem.

## Components

- **Ghost button** ("Log in") — no fill, `#7d7d7d` Inter 14px/500, padding 10px 14px, 36px tall, 10px radius; hover fill `#efefef`, text `#18181a`.
- **Header link** ("Pricing") — measured hover fill `#fbfbfb` with an `#18181a` border.
- **Language switch** ("EN") — 40px tall, 12px radius, `#dedede` border turning lemlist blue `#316bff` on hover.
- **Segmented tab** (product mock, "Let AI handle it") — white, `#18181a` 14px/500, 36px tall, 8px 8px 0 0 radius, the two-layer 1–3px shadow.
- **Case-study card** — white, `#7d7d7d` JetBrains Mono 12px/500 uppercase label, padding 8px 14px, 10px radius, 80px tall.
- **Feature frame** — a rounded tinted panel holding a product screenshot with the frame shadow.
- **Footer** — `#010113`, `#f5f5f5` 40px Manrope headline, link columns in Inter.

The header "Start free trial" button and the hero buttons were not captured by the extractor's button detection, so their fill, radius and padding are not measured.

## Design System Architecture

No public lemlist design system or brand page was found: https://www.lemlist.com/brand returned HTTP 404 (recorded in SOURCES.json). The shipped CSS carries Tailwind CSS variables (`--tw-*`, `--color-orange-200` in `lab()` notation, `--text-2xl`, `--leading-normal`, `--container-md`, `--radius-4xl`) extended with a lemlist layer of semantic tokens:

- `--color-text-standard`, `--color-text-light`, `--color-text-lighter`, `--color-text-light-dark`, `--color-text-inactive`, `--color-text-white`
- `--color-border-frame`, `--color-border-inactive`, `--color-border-active`, `--color-border-grey-light`
- `--color-lemlist-primary-{100,200,default}` and `--color-theme-primary-{100…400,default}`, `--color-theme-secondary-{200,default}`
- `--color-alert-{100…500}`
- `--radius-frame: 10px`, `--max-w: 1280px`

Third-party UI kits ship their own variables on the page (`--toastify-*`, `--rt-color-*` for tooltips) and are not brand tokens.

## Do's and Don'ts

**Do**
- Set headlines in Manrope 600 with tight negative tracking (-4% at 56px, -2% at 32–40px).
- Use Inter 14–16px with slight negative tracking for everything else, and `#7d7d7d` for secondary copy.
- Frame product screenshots in `#e6e6e6` rounded panels with the soft frame shadow.
- Keep radii at 8–10px for controls; use the one-square-corner bubble for chat previews.
- Use lemlist blue `#316bff` for focus and interactive accents.
- Keep the space/exploration metaphor for hero and closing scenes only.

**Don't**
- Don't use Manrope for body copy or Inter for headings.
- Don't use bold (700) headlines; the system is 600.
- Don't use heavy drop shadows or dark backgrounds mid-page.
- Don't document the cookie card, toasts or tooltips as brand components.
- Don't use the alert reds or secondary pink as decoration.

## Responsive Behavior

Measured at 390px:

- Header: 1 visible link and a menu toggle labelled "Open menu" (desktop: 6 links, no toggle).
- h1 drops from 56px/64px (-2.24px) to 32px/34px (-0.64px), centered; h2 from 40px to 28px/34px (-0.56px); feature headings from 32px to 24px.
- Body stays at 16px/24px; 16px becomes the most-used size.
- Maximum card columns measured 2 (desktop 5).
- Content spans x=16 to x=374; the orange hero band measured 552px tall.

Intermediate breakpoints were not measured.

## Iteration Guide

1. White page, `--max-w` 1280px, Inter 16px/24px in `#1e1e21cc`, headings in Manrope 600 `#18181a`.
2. Open each section with a centered 40px heading (-0.8px), then alternate 32px feature headings with framed screenshots.
3. Use 8px gaps inside components, 16–24px between, 40px+ section padding.
4. Controls: 36px tall, 10px radius, Inter 14px/500; ghost buttons in `#7d7d7d` that darken on hover.
5. Use JetBrains Mono 12px uppercase for small category labels.
6. Reserve full-bleed photography (Mars orange, space navy) for the first and last screens.
7. Measure any primary button before adding it as a token; the header CTA is not yet measured.
