---
version: alpha
name: Kaidee
category: "Thai Brands"
description: >-
  Kaidee, Thailand's online second-hand marketplace: Inter-based sans with 'Kaidee' first in the stack, a brand-indigo (#4f68e8) 12px-radius 44px button, #fafafa page ground, white 16px-radius cards, orange HOT and navy PREMIUM badges.
colors:
  canvas: "#ffffff"
  page-body: "#fafafa"
  ink: "#262626"
  primary: "#4f68e8"
  on-primary: "#ffffff"
  surface-muted: "#f5f5f5"
  on-dark-soft: "#ffffffe6"
  ink-body: "#404040"
  ink-strong: "#0a0a0a"
  ink-muted: "#737373"
  primary-hover: "#3f56d4"
  link-border: "#e5e5e5"
  brand-soft: "#f1f4ff"
  hot: "#ff6a00"
  premium: "#0d1c63"
  rating: "#ffc20f"
typography:
  display:
    fontFamily: Kaidee, "Inter Variable", Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif
    fontSize: 20px
    fontWeight: 700
    lineHeight: 28px
  subheading:
    fontFamily: Kaidee, "Inter Variable", Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  button:
    fontFamily: Kaidee, "Inter Variable", Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  nav:
    fontFamily: Kaidee, "Inter Variable", Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 8px
  sm: 12px
  md: 16px
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
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 16px
    height: 44px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 16px
    height: 44px
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.md}"
    borderColor: "{colors.link-border}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 8px 12px
    height: 36px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    borderColor: "{colors.link-border}"
  footer:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink-body}"
    padding: 0px 2px
    borderColor: "{colors.surface-muted}"
---

## Overview

Kaidee is a Thai online marketplace for second-hand and new goods; the measured page title is "Kaidee ตลาดซื้อขายออนไลน์" (online trading market) and the logo in the capture reads "Kaidee NEXT". The home page is a feed. A white header holds the logo, a wide rounded search field ("คุณกำลังมองหาอะไร?"), a chat icon, an account icon and a Thai-flag language switch, plus the one filled button on the page, "เริ่มขายเลย" (start selling now). Under it a row of white category chips (รถยนต์, รถจักรยานยนต์, มือถือและแกดเจ็ต, เครื่องใช้ไฟฟ้าและคอมพิวเตอร์, อสังหาริมทรัพย์, พระเครื่องและวัตถุมงคล, and "เพิ่มเติม +13") leads into four campaign banners and then listing shelves titled "สำหรับคุณ", "กำลังมาแรง" and "ประกาศใหม่ล่าสุด".

The design is calm and neutral so that user photographs carry the page: an off-white ground (`{colors.page-body}` `#fafafa`), white cards, near-black text (`{colors.ink}` `#262626`), and a single indigo brand colour (`{colors.primary}` `#4f68e8`). Status is signalled by two small badge fills — orange `{colors.hot}` for HOT and navy `{colors.premium}` for PREMIUM — plus a white "ผู้ขายที่ยืนยันตัวตนแล้ว" (verified seller) pill with an orange tick. A cookie dialog floats over the first shelf in the capture; it is a consent popup and not brand UI.

**Key Characteristics:**
- One brand indigo, `{colors.primary}`, used for the start-selling button and the round search icon; hover is `{colors.primary-hover}` (`#3f56d4`).
- Off-white page ground with white `{rounded.md}` (16px) cards edged by `{colors.link-border}` hairlines.
- Buttons are 44px tall with `{rounded.sm}` (12px) corners and `0px 16px` padding.
- Listing cards show photograph, optional badge, heart icon, title, bold price and a grey "district / province" line.
- A typeface stack that begins with "Kaidee" and falls back to Inter Variable and system fonts.

## Colors

### Brand & Accent
- **Brand indigo** (`{colors.primary}` — `#4f68e8`): fill of "เริ่มขายเลย" and "ดูเพิ่มเติม" buttons, with `{colors.on-primary}` (`#ffffff`) text; the page defines it as `--color-brand-500`.
- **Hover** (`{colors.primary-hover}` — `#3f56d4`), measured on the button hover state and defined as `--color-brand-600`.
- **Brand tint** (`{colors.brand-soft}` — `#f1f4ff`): the pale indigo tint behind support-contact buttons (@kaideesupport, cs@kaidee.com) and other quiet panels (`--color-brand-50`).
- **Hot** (`{colors.hot}` — `#ff6a00`) and **Premium** (`{colors.premium}` — `#0d1c63`): badge fills; **Rating** (`{colors.rating}` — `#ffc20f`) for stars.

### Surface
- **Page** (`{colors.page-body}` — `#fafafa`): the largest measured background.
- **Canvas** (`{colors.canvas}` — `#ffffff`): cards, header, chips.
- **Muted** (`{colors.surface-muted}` — `#f5f5f5`): secondary panels and borders on cards.

### Text
- `{colors.ink}` (`#262626`) is the most-read colour; `{colors.ink-body}` (`#404040`) for footer text; `{colors.ink-strong}` (`#0a0a0a`) for shelf headings; `{colors.ink-muted}` (`#737373`) for location lines; `{colors.on-dark-soft}` (`#ffffffe6`) for text on the dark footer.

## Typography

### Font Family
The stack is `Kaidee, "Inter Variable", Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif`. The measured loaded-font list contains Inter Variable (weights 100 to 900) and Font Awesome 7 Pro; a separate "Kaidee" font file was not seen in that list, so which face renders Thai glyphs was not determined.

### Hierarchy
| Role | Size | Weight | Notes |
|---|---|---|---|
| `{typography.display}` | 20px | 700 | Shelf headings, line height 28px |
| `{typography.subheading}` | 14px | 400 | Card text, footer, line height 20px |
| `{typography.button}` | 16px | 600 | Buttons, line height 24px |
| `{typography.nav}` | 16px | 400 | Links and the search input |

### Principles
Reading text is small (14px accounts for 3,786 measured characters, 12px for 1,385) and only the 20px shelf headings are large. Weight 400 carries nearly everything; 600 marks buttons and prices and 700 marks headings.

### Note on Font Substitutes
Inter Variable is open-source; if the proprietary Kaidee face is not available, Inter is already the declared next choice, with system sans-serif fonts after it.

## Layout

### Spacing System
Steps measured: 1, 2, 4, 6, 8, 10, 12, 14, 16 and 20px (`{spacing.s1}`–`{spacing.s10}`). Text inputs use `8px 12px` padding.

### Grid & Container
The capture at 1280px shows five equal listing columns, four banner tiles across the top, and a single-row category strip. Content is centred in a wide container with a consistent left margin from the logo.

### Whitespace Philosophy
Tight between cards, roomy between shelves: each shelf has a bold heading and then cards with small gaps, then a large white gap before the next heading.

## Elevation & Depth

Very light. The header uses a faint `rgba(0, 0, 0, 0.06) 0px 2px 6px 0px` shadow and cards use `rgba(0, 0, 0, 0.05) 0px 1px 2px 0px`. Most separation is by 1px borders in `{colors.link-border}` and `{colors.surface-muted}`.

## Shapes

### Border Radius Scale
`{rounded.xs}` 8px for small chips and thumbnails, `{rounded.sm}` 12px for buttons, `{rounded.md}` 16px for cards, and `{rounded.pill}` for fully round elements — the most frequently measured radius is the full pill (98 occurrences) used on the search field, badges and icon buttons.

### Photography Geometry
Listing photographs are portrait-ish rectangles filling the top of a card, with a circular grey heart button at the top-right and a pill badge at the top-left.

## Components

### Buttons
**Primary (`button-primary`)**: `{colors.primary}` fill, `{colors.canvas}` text, `{typography.button}`, `{rounded.sm}` radius, 44px tall, `0px 16px` padding; hover `{colors.primary-hover}`. `button-secondary` has the same style ("ดูเพิ่มเติม").

### Chips and links
`link`: category chips with `{colors.canvas}` ground, `{colors.ink}` text, `{rounded.md}` radius and a `{colors.link-border}` border, with a small icon at the left.

### Inputs
`text-input`: 36px tall, `8px 12px` padding, `{colors.ink}` text at 16px; the visual search field is a pill with a blue circular search button.

### Cards
`card`: `{colors.canvas}` ground, `{colors.ink}` text, `{rounded.md}` radius, `{colors.link-border}` border.

### Footer
`footer`: `{colors.page-body}` ground, `{colors.ink-body}` text, `{colors.surface-muted}` border; it carries the company address and the support handles.

### Voice and microcopy
Copy is short, friendly Thai and imperative: "เริ่มขายเลย" (start selling now), "ดูเพิ่มเติม" (see more), a search placeholder phrased as a question, and trust phrases such as "ผู้ขายที่ยืนยันตัวตนแล้ว". Listings keep the seller's own wording (for example "Sale" or model names in English), so the interface stays out of the way and lets user-written titles vary in length and script; titles truncate to two lines with an ellipsis.

## Design System Architecture

The measured page exposes a Tailwind-style token layer in its root variables: a brand colour scale (`--color-brand-50` `#f1f4ff`, `--color-brand-100` `#e2e8ff`, `--color-brand-300` `#b0bdff`, `--color-brand-400` `#7489ec`, `--color-brand-500` `#4f68e8`, `--color-brand-600` `#3f56d4`, `--color-brand-700` `#0d1c63`) and semantic names `--color-hot` `#ff6a00`, `--color-pinned` `#ff4c00`, `--color-premium` `#0d1c63`, `--color-accent` `#ef571b` and `--color-rating` `#ffc20f`. No public guidelines or documentation site was found in the two pages opened, so this root-variable layer is the system's source of truth. Only the tokens actually seen painting UI (brand 500, 600, 50, hot, premium, rating) are carried in the frontmatter.

## Do's and Don'ts

### Do
- Use `{colors.primary}` for one dominant action per view.
- Keep cards white on the `{colors.page-body}` ground with `{rounded.md}` corners.
- Use orange for HOT and navy for PREMIUM badges only.
- Show prices bold and locations muted.

### Don't
- Don't use the support-contact tint `{colors.brand-soft}` for primary actions.
- Don't introduce further accent hues; the system uses indigo plus two status badges.
- Don't treat the cookie dialog as part of the design language.

## Responsive Behavior

The only mobile measurement taken is the type scale at 390px; no mobile-specific tokens differ from desktop in this file, and other breakpoint behaviour was not measured. Desktop uses five listing columns and a scrolling category strip with a "เพิ่มเติม +13" overflow chip.

## Iteration Guide

1. Off-white `{colors.page-body}` ground, white header, Inter-style sans.
2. One `{colors.primary}` 44px button in the header.
3. Category chips, then banners, then five-column shelves.
4. Badge status with `{colors.hot}` and `{colors.premium}` only.
5. Verify with `node web/scripts/verify-designs.mjs --slug=kaidee`.
