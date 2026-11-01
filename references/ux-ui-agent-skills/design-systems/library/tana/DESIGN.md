---
version: alpha
name: Tana
category: "Productivity & SaaS"
description: "Tana's home page pairs Source Serif 4 at weight 500 with tight tracking (48px/52.8px at -2.16px; 32px section heads) and Inter 15px/22.5px body in #6a6a6a on an off-white #fbfbfb canvas, with a warm near-black #0c0805 'Download for Mac' button (14px radius, 54px tall), pastel gradient product panels and 20px-radius photo cards."
colors:
  canvas: "#fbfbfb"
  ink: "#6a6a6a"
  ink-strong: "#0c0805"
  ink-nav: "#3a3a3a"
  primary: "#0c0805"
  on-primary: "#ffffff"
  primary-hover: "#000000"
  surface-soft: "#f6f6f6"
  calendar-blue: "#2b8fe6"
  ink-on-dark: "#ffffffd1"
  ink-on-dark-strong: "#ffffffdb"
  hairline-on-dark: "#ffffff59"
  photo-scrim: "#14100e66"
  accent-brown: "#a0714a"
typography:
  display:
    fontFamily: "\"Source Serif 4\", \"Source Serif 4 Fallback\""
    fontSize: 48px
    fontWeight: 500
    lineHeight: 52.8px
    letterSpacing: "-2.16px"
  display-mobile:
    fontFamily: "\"Source Serif 4\", \"Source Serif 4 Fallback\""
    fontSize: 36px
    fontWeight: 500
    lineHeight: 38.88px
    letterSpacing: "-1.62px"
  heading:
    fontFamily: "\"Source Serif 4\", \"Source Serif 4 Fallback\""
    fontSize: 32px
    fontWeight: 500
    lineHeight: 36.8px
    letterSpacing: "-1.44px"
  subheading:
    fontFamily: "\"Source Serif 4\", \"Source Serif 4 Fallback\""
    fontSize: 25px
    fontWeight: 500
    lineHeight: 30px
    letterSpacing: "-1.125px"
  body:
    fontFamily: Inter, "Inter Fallback"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 22.5px
  button:
    fontFamily: Inter, "Inter Fallback", system-ui, sans-serif
    fontSize: 17px
    fontWeight: 500
    lineHeight: 25.5px
  nav:
    fontFamily: >-
      Inter, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", system-ui, "Hiragino Sans", "Hiragino Kaku Gothic ProN", "Yu Gothic UI", "Noto Sans JP", "PingFang SC", "Microsoft
      YaHei", "PingFang TC", "Microsoft JhengHei", "Apple SD Gothic Neo", "Malgun Gothic", "Noto Sans KR", "Noto Sans CJK SC", "Noto Sans Hebrew", "Noto Sans Arabic", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-small:
    fontFamily: Inter, "Inter Fallback", system-ui, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 21px
rounded:
  xs: 2.88px
  sm: 5.85px
  md: 7.56px
  lg: 8px
  xl: 8.4px
  2xl: 9.2px
  3xl: 9.99px
  4xl: 11.2px
  cta: 14px
  pill: 9999px
spacing:
  s1: 2.3px
  s2: 3.22px
  s3: 3.25px
  s4: 4.42px
  s5: 6px
  s6: 6.4px
  s7: 6.44px
  s8: 7.1px
  s9: 7.15px
  s10: 7.8px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 14px 28px
    height: 54px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
  button-outline:
    textColor: "{colors.primary}"
    typography: "{typography.button-small}"
    rounded: "{rounded.cta}"
    padding: 8px 18px
    height: 37px
    boxShadow: color(srgb 0.0470588 0.0313726 0.0196078 / 0.35) 0px 0px 0px 1px inset
  button-ghost-on-dark:
    textColor: "{colors.on-primary}"
    border: "1px solid #ffffff59"
    rounded: "{rounded.pill}"
    padding: 8px 14px
    height: 41px
  nav:
    textColor: "{colors.ink-nav}"
  nav-link:
    textColor: "{colors.ink-nav}"
    typography: "{typography.nav}"
    rounded: "{rounded.lg}"
    padding: 4px
  card:
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.cta}"
    boxShadow: rgba(12, 8, 5, 0.08) 0px 4px 10px 0px, rgba(12, 8, 5, 0.17) 0px 44px 92px 0px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
---

# Tana

## Overview

Tana (tana.inc) positions itself as an agentic meeting assistant built on its knowledge graph; the measured page is titled "Tana - Do work in the meeting". The hero is spare and editorial: a serif headline "Meetings that ship" at left with the paragraph "Tana doesn't take notes. It captures your calls, files the issue, drafts the email and updates the CRM before you hang up, and remembers what everyone promised.", and at right a large near-black "Download for Mac" button with an Apple glyph and "30-day free trial" beneath. The header is minimal — the Tana logo (a small multicolour faceted mark with the lowercase serif wordmark) at left, "The cost of meetings" and "Pricing" in the centre, a "tana outliner" link and an outlined "Download" at right.

Below the hero, a full-width pastel gradient band (lilac to pink to peach) holds a product composition: a video-call window with two smiling participants and a floating Tana panel ("Listening") that lists generated actions — a Linear issue, a Gmail draft, a Tana question — each with a small black "Sent", blue "Send" or "Yes" chip. An integrations icon row follows, then "For AI-native teams that build products, not PowerPoints" and alternating text-and-gradient-panel sections ("Aligned without another meeting", "Done before you hang up", "A cheat sheet for every meeting"); a "No need to circle back" comparison of calendars "Without Tana" and with Tana (blue `#2b8fe6` meeting blocks); "No bot. Any platform."; "A meeting assistant in front. A knowledge graph behind it."; "What ships from your meetings" with three tall photographic cards with captions; "Your IT department won't freak out" (security tiles); a dark photographic band "You'll spend about 30,000 hours of your career in meetings. Make them count."; an FAQ; "Ask your AI" with a large faceted logo illustration; and the footer.

The voice is witty and outcome-focused ("Meetings that ship", "Your IT department won't freak out").

## Colors

- **Canvas `#fbfbfb`** (`--color-bg`) — the off-white body and dominant background.
- **Surface-soft `#f6f6f6`** — light panels; translucent whites (`#ffffffb8`, `#fffffff0`, `#ffffffeb`) form frosted cards over gradients.
- **Ink `#6a6a6a`** — body paragraphs on light backgrounds; the most-read dark text. **Ink-strong `#0c0805`** — a warm near-black for headlines. **Ink-nav `#3a3a3a`** — header links.
- **Primary `#0c0805`** with **on-primary `#ffffff`** — "Download for Mac"; hover deepens to **`#000000`**.
- **Ink-on-dark `#ffffffd1`** and **ink-on-dark-strong `#ffffffdb`** — text on the dark photo cards and the dark feature card; white `#ffffff` is the most-read colour overall because of those sections. **Hairline-on-dark `#ffffff59`** — the outline of "Get Tana →" pills on photos.
- **Photo-scrim `#14100e66`** — the 40% warm-black overlay on the photo cards.
- **Calendar-blue `#2b8fe6`** — the meeting blocks in the calendar comparison.
- **Accent-brown `#a0714a`** — a warm brown used in small text (104 characters); `#8a5a2b`, `#fbf3e8` and `#dcb48f` belong to the same warm family.

Small amounts of `#5e6ad2`, `#c5221f` and `#c0392b` (red labels) appear inside product mock-ups. The CSS ships a full Radix-style colour scale set (`--amber-1` … `--tomato-a12`, `--iris-*`, `--mint-*`), which was not measured as page chrome.

## Typography

- **Source Serif 4** (variable 200–900; `--font-family-heading`) sets every headline at weight 500 with strong negative tracking of about -4.5%: `display` 48px/52.8px at -2.16px; `heading` 32px/36.8px at -1.44px (`--type-heading-sm: 500 2rem/1.15`); `subheading` 25px/30px at -1.125px (`--type-heading-xs: 500 1.5625rem/1.2`); 22px (-0.99px) and 23.04px (-1.0368px) for card titles; one 60px line at -2.7px. The variable `--type-display-lg` is 62.26px.
- **Inter** (variable 100–900; `--font-family-body`) sets everything else: `body` 15px/22.5px (the most-used size), `button` 17px/25.5px at 500, the outlined header button 14px/21px at 500, nav 16px/24px, small caps labels at 11px with 0.88px tracking.
- **Caveat** is declared as `--font-family-signature`; Kalam, Fraunces and JetBrains Mono faces are also declared but were not measured on visible text.

Weights are 400 (most text), 500 (headings, buttons) and 600. Both Source Serif 4 and Inter are open-source.

## Layout

At 1280px the page is 9,732px tall. The header is 72px with five header links counted. The hero band is 330px tall with content from 109px to 1219px: text at left, button at right. Below it the gradient product band runs edge to edge.

Sections alternate a narrow text column with a wide gradient panel (max 2 card columns measured), centred serif statements sit between them, and the photo cards appear three across. Spacing follows `--space-4` 16px, `--space-5` 24px, `--space-6` 32px, `--space-7` 40px and `--spacer-md` 3.5rem; measured paddings cluster at 18px, 24px, 32px and 14px, with 96px for section padding. Many inner values are fractional (2.3px, 3.22px, 7.15px, 10.4px gaps) because product mock-ups are scaled down inside their frames.

## Elevation & Depth

The product compositions float: the main mock-up card uses a warm two-layer shadow, `rgba(12, 8, 5, 0.08) 0px 4px 10px` plus a very wide `rgba(12, 8, 5, 0.17) 0px 44px 92px`. Other floating windows use `rgba(28, 32, 36, 0.14) 0px 10px 30px` with `rgba(28, 32, 36, 0.06) 0px 1px 2px`, or `rgba(20, 22, 36, 0.12) 0px 2px 6px -2px` with `rgba(20, 22, 36, 0.3) 0px 24px 48px -20px`. Small UI elements use a half-pixel inset ring at 12% black, and one surface has a 60% white top highlight. The soft pastel gradients behind the windows add atmosphere.

## Shapes

- **999px** — pills (29 elements): "Get Tana →" buttons, chips, tags.
- **20px** — photo cards and gradient panels (24; one measured at 19.9867px).
- **14px** — buttons and the main product card (20).
- **5.85px**, **2.875px** — scaled-down chips inside mock-ups; **8px**, **8.4px**, **9.99px**, **11.2px** — mock-up windows; a `9.2px 9.2px 0px 0px` tab.
- **50%** — avatars and round icon buttons.

## Components

- **button-primary** — "Download for Mac": `#0c0805` fill, white Inter 17px/25.5px weight 500, 14px radius, `14px 28px` padding, 54px tall, Apple glyph; hover `#000000`.
- **button-outline** — header "Download": transparent with a 1px inset ring of `#0c0805` at 35%, `#0c0805` 14px/500 text, 14px radius, `8px 18px` padding, 37px tall; on hover the text turns white (measured).
- **button-ghost-on-dark** — "Get Tana →" on photo cards: 6% white fill, 1px `#ffffff59` border, pill radius, `8px 14px` padding, 41px tall, white 15px text with 0.15px tracking.
- **nav-link** — `#3a3a3a` text (the header measured 14px/500), 4px padding, 8px radius; hover: `#0c0805` text on a 6% ink tint.
- **card** — product mock-up window: 14px radius with the warm two-layer shadow.
- **Photo card** — 345×357px, 19.9867px radius, `#14100e66` scrim, serif white caption at the bottom and a small uppercase label at the top.
- **footer** — `#fbfbfb`, `#6a6a6a` 15px links in columns (Product, Company, Legal).

## Design System Architecture

Tana publishes no brand page that could be opened: https://tana.inc/brand and https://tana.inc/press return 404 (https://tana.inc/about redirects to /company). The GitHub organisation https://github.com/tanainc lists data tools (`tana-import-tools`, `tana-paste-examples`, `tana-input-api-samples`) and a fork of `react-contexify`, but no design-system or token repository. The site's CSS defines its own tokens: `--color-bg: #fbfbfb`, `--font-family-body`, `--font-family-heading`, `--font-family-signature`, type shorthands (`--type-heading-sm`, `--type-heading-xs`, `--type-display-lg`, `--type-body-xxs`), letter-spacing steps (`--letter-spacing-5: -0.005em`, `--letter-spacing-8: -0.02em`), and a spacing scale (`--space-4` to `--space-7`, `--spacer-sm`, `--spacer-md`), alongside a Radix-style colour scale library (`--amber-*`, `--iris-*`, `--tomato-*`, with `-a` alpha variants).

## Do's and Don'ts

**Do**
- Set headlines in Source Serif 4 at weight 500 with about -4.5% tracking.
- Keep the canvas off-white `#fbfbfb` and body text grey `#6a6a6a` in Inter 15px/22.5px.
- Use the warm near-black `#0c0805` for the single primary action, at 14px radius and generous `14px 28px` padding.
- Stage product UI in floating windows over soft pastel gradients with wide, warm shadows.
- Use real photography of people in meetings with a warm scrim and serif captions.
- Write short, confident, slightly playful headlines.

**Don't**
- Don't use a saturated brand colour for buttons; colour lives in gradients and illustrations.
- Don't bold the serif headings beyond 500.
- Don't use cool pure black text for long paragraphs; reading text is grey.
- Don't use the `#0000ee` browser default for links; it is not a brand colour.

## Responsive Behavior

The extractor's mobile pass at 390px recorded: the hero heading drops from 48px/52.8px to 36px/38.88px with -1.62px tracking and is centre-aligned; the section heading "For AI-native teams…" from 32px/36.8px to 26px/29.9px with -1.17px tracking; body text stays 15px/22.5px; "Download for Mac" keeps its 54px height, 14px radius and `14px 28px` padding. The mobile header measured 72px tall; an "Open menu" control was detected as visible with 1 header link visible. Content spans 16px to 363px; up to 2 card columns were counted. Mobile font sizes recorded: 15px, 18px, 16px, 20px, 7.2px, 26px, 13px, 8.5px, 8.55px, 17px. Breakpoint widths were not measured.

## Iteration Guide

1. Start with `#fbfbfb`, a 72px header and a left-aligned serif hero (`display`, 48px/500, -2.16px).
2. Place one `button-primary` (`#0c0805`, 14px radius, 54px tall) opposite the headline.
3. Add a full-width pastel gradient band holding a floating product window with the warm shadow.
4. Alternate text columns (32px serif heading, 15px grey body) with gradient panels.
5. Use photo cards with a `#14100e66` scrim and pill "Get Tana →" ghost buttons.
6. Compare against https://tana.inc before shipping.
