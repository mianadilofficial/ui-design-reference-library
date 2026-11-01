---
version: alpha
name: Kapook.com (กระปุกดอทคอม)
category: "Thai Brands"
description: >-
  Kapook.com, a Thai news and lifestyle portal: Noto Sans Thai throughout, a teal (#4abdac) header and wide teal call-out bar, white cards with 6px-radius pill tags, 22px/700 section headings and photo-led story cards with white overlay headlines.
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#4abdac"
  on-primary: "#ffffff"
  teal-deep: "#3a9a8c"
  surface-soft: "#f9fafb"
  surface-slate: "#e2e8f0"
  ink-soft: "#4a5565"
  on-teal-muted: "#ffffffbf"
  on-teal-soft: "#ffffffd9"
  ink-gray: "#6b7280"
  hairline: "#e5e7eb"
  link: "#171717"
typography:
  display:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans Thai Fallback\", sans-serif"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 28px
  heading:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans Thai Fallback\", sans-serif"
    fontSize: 22px
    fontWeight: 700
    lineHeight: 33px
  body:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans Thai Fallback\", sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans Thai Fallback\", sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 20px
  nav:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans Thai Fallback\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  link:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans Thai Fallback\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-secondary:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans Thai Fallback\", sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 19.5px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 10px
  xl: 12px
  2xl: 16px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 7px
  s7: 8px
  s8: 10px
  s9: 12px
  s10: 13px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.teal-deep}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 8px 16px
    height: 36px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-soft}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 0px 12px
    height: 28px
    borderColor: "{colors.hairline}"
  link:
    textColor: "{colors.link}"
    typography: "{typography.link}"
---

## Overview

Kapook.com is a Thai news and lifestyle portal. The page's measured title is "Kapook.com รวมข่าว บันเทิง ผลบอล ตรวจหวย ไลฟ์สไตล์" (news, entertainment, football results, lottery checking, lifestyle), and the home page confirms that scope: top stories, hot topics, entertainment, horoscopes ("สายมู"), lifestyle, food and travel, football and variety, plus live-style utilities in a thin top strip (the date, gold buying and selling prices, a fuel price) and a lottery-check call-out.

The structure is a magazine front page. A thin white utility strip sits above a teal header (`{colors.primary}` `#4abdac`) carrying the "K@POOK!" wordmark with its tagline "เว็บแรกที่คุณเลือก" and the main navigation: หน้าแรก, ข่าว-ความรู้, บันเทิง, ไลฟ์สไตล์, ช้อปปิ้ง. Below an advertising slot is a tab strip of story channels, a hero trio of photo cards with overlaid white headlines, a five-column grid of story cards, and a wide teal bar pointing to the day's trending news. Third-party ad units (a small video ad and an empty "Advertisements" slot) appear in the capture and are not part of the system.

**Key Characteristics:**
- Noto Sans Thai for every line of text, at 15px for story titles and 22px/700 for section headings.
- A single teal brand colour (`{colors.primary}`) for the header, the active tab underline and the wide call-out bar; a deeper teal `{colors.teal-deep}` (`#3a9a8c`) for text on the white pill button.
- White canvas with pale grey card edges (`{colors.hairline}`), small `{rounded.sm}` (6px) tag pills and `{rounded.2xl}` (16px) card corners.
- Photo-first cards: each story is an image with a small coloured category tag and a Thai headline below or overlaid.
- Information density typical of a news portal, with live numbers (gold, oil, lottery date) kept in the smallest text sizes.

## Colors

### Brand & Accent
- **Teal** (`{colors.primary}` — `#4abdac`): measured as the page's `--color-kapook-teal` variable and as the header background; also the fill of the wide "ข่าววันนี้ เรื่องเด่นอินเทรนด์…" bar. Text on it is `{colors.on-primary}` (`#ffffff`), with white at 75% (`{colors.on-teal-muted}` `#ffffffbf`) and 85% (`{colors.on-teal-soft}` `#ffffffd9`) for secondary lines.
- **Deep teal** (`{colors.teal-deep}` — `#3a9a8c`): text colour of the detected primary call to action, a white button reading "ดูบริการทั้งหมด".

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): the dominant measured background.
- **Soft** (`{colors.surface-soft}` — `#f9fafb`) and **slate** (`{colors.surface-slate}` — `#e2e8f0`): card and panel grounds.
- **Hairline** (`{colors.hairline}` — `#e5e7eb`): the most common border colour (124 measurements).

### Text
- `{colors.ink}` (`#000000`) for headlines and body; `{colors.ink-soft}` (`#4a5565`) for secondary text and the pill links; `{colors.ink-gray}` (`#6b7280`) for the top utility strip; `{colors.link}` (`#171717`) for link text.

The page also defines `--color-kapook-pink` (`#fc5185`) and `--color-kapook-gold` (`#d0b274`) as root variables. Where they paint was not isolated in the measurements, so they are noted here but not tokenised.

## Typography

### Font Family
`"Noto Sans Thai", "Noto Sans Thai Fallback", sans-serif`, a variable face loaded across weights 100 to 900 (the page's root variable is `--font-noto-sans-thai`). A "CS ChatThaiUI" face accounts for 371 measured characters, a separate face outside the page's own font stack, so it is not treated as part of the system.

### Hierarchy
| Role | Size | Weight | Notes |
|---|---|---|---|
| `{typography.display}` | 20px | 500 | Hero card headlines, white on photography, line height 28px |
| `{typography.heading}` | 22px | 700 | Section headings such as "เรื่องฮิต", line height 33px |
| `{typography.body}` | 15px | 400 | Story titles, line height 24px |
| `{typography.link}` | 16px | 400 | Link text |
| `{typography.button}` | 14px | 600 | White pill button |
| `{typography.nav}` | 14px | 400 | Utility strip |
| `{typography.button-secondary}` | 13px | 400 | Pill links to services |

### Principles
Weights are 400 for nearly everything (7,916 characters), 500 for hero headlines, 700 for section headings. Hierarchy is carried by size and by white-on-photo contrast, not by colour.

### Note on Font Substitutes
Noto Sans Thai is open-source and is the declared face; its named fallback covers loading.

## Layout

### Spacing System
Measured steps: 1, 2, 4, 5, 6, 7, 8, 10, 12 and 13px (`{spacing.s1}`–`{spacing.s10}`). The white button pad is `8px 16px`; service pills use `0px 12px` padding.

### Grid & Container
At 1280px the content is a centred column with equal outer margins: three hero cards across, then rows of five equal story cards. The tab strip spans the same column width with a hairline beneath it, and the section after the call-out bar ("เรื่องที่คุณอาจสนใจ", a recommendation row of five thumbnails) reuses the same five-column rhythm.

### Whitespace Philosophy
Cards are separated by small even gutters. Sections are separated by a heading with a bold left rule and a large vertical gap.

## Elevation & Depth

Light, soft shadows. The most common measured shadow is `rgba(0, 0, 0, 0.1) 0px 2px 10px 0px` (30 occurrences) on cards, with Tailwind-style `0px 1px 3px 0px` and `0px 1px 2px -1px` shadows on the header. Photographs with a dark gradient overlay supply depth on the hero cards.

## Shapes

### Border Radius Scale
`{rounded.xs}` 4px, `{rounded.sm}` 6px (the most frequent non-pill radius), `{rounded.md}` 8px, `{rounded.lg}` 10px, `{rounded.xl}` 12px, `{rounded.2xl}` 16px, and `{rounded.pill}` for fully round tags and service pills (134 occurrences).

### Photography Geometry
Story photographs are landscape rectangles at the top of each card (a top-only `6px 6px 0px 0px` rounding was measured on the page), and the three hero cards are rounded photographs with a dark bottom gradient behind the white headline.

## Components

### Buttons
**Primary (`button-primary`)**: `{colors.canvas}` fill, `{colors.teal-deep}` text, `{typography.button}`, `{rounded.sm}` radius, 36px tall, `8px 16px` padding. **Secondary (`button-secondary`)**: white pill, `{colors.ink-soft}` text at 13px, `{rounded.pill}` radius, 28px tall, `0px 12px` padding, `{colors.hairline}` border; used for utility links such as postal tracking, exchange rates and website rankings.

### Links
`link`: `{colors.link}` text at `{typography.link}`.

### Tags
Small pill tags with a pale tint and coloured text sit at the left of each story title as category labels.

### Call-out bar
A full-width teal bar with white text, rounded corners and a short Thai call to action closes the story grid.

## Design System Architecture

No public Kapook design-system or brand-guideline page was found; the about URL tried returned 404 and the home page fetch gave only a content description. The measured root variables show a Tailwind-style build (`--tw-ring-*`, `--leading-relaxed`, `--color-slate-200`, `--color-teal-50`) with three brand-named colours (`--color-kapook-teal`, `--color-kapook-pink`, `--color-kapook-gold`) and a named font variable. That is a small token layer: brand colours by name, everything else by utility class.

## Do's and Don'ts

### Do
- Use `{colors.primary}` teal for the header, active tab and one wide call-out bar.
- Overlay white headlines on a dark gradient over hero photographs.
- Keep story cards white with `{colors.hairline}` edges.
- Keep live data (date, gold, fuel) in the small top strip.

### Don't
- Don't use the third-party ad units or chat widget as visual reference.
- Don't set long headlines in bold; the portal uses 400 to 500 for story text.
- Don't introduce a second brand hue beyond the teal.

## Responsive Behavior

Only the 1280px desktop page was analysed in detail for layout; mobile measurement is limited to type, and no mobile layout rules are claimed here. The desktop page already uses a scrolling tab strip and equal-width card columns.

## Iteration Guide

1. White canvas, Noto Sans Thai, thin utility strip on top.
2. Teal `{colors.primary}` header with wordmark and five nav items.
3. Tab strip with a teal active underline, then three hero photo cards.
4. Five-column story cards with small tag pills.
5. Close with the wide teal call-out bar; verify with `node web/scripts/verify-designs.mjs --slug=kapook`.
