---
version: alpha
name: SE-ED (ร้านหนังสือออนไลน์ SE-ED)
category: "Thai Brands"
description: >-
  SE-ED's online bookstore: Poppins with Noto Sans Thai fallback, a red (#e50000) brand with 30px-radius outlined buttons, a near-black (#222323) category bar, 8px product cards and bold 32px/700 shelf headings on white.
colors:
  canvas: "#ffffff"
  page-largest: "#eeeeee"
  ink: "#000000de"
  primary: "#e50000"
  surface-light: "#f7f7f7"
  ink-soft: "#4d4d4d"
  red-soft: "#df453c"
  ink-faint: "#acacac"
  hairline: "#e5e7eb"
  nav-bg: "#222323"
typography:
  display:
    fontFamily: Poppins, "Noto sans thai", sans-serif, Sarabun
    fontSize: 32px
    fontWeight: 700
    lineHeight: 48px
  display-mobile:
    fontFamily: Poppins, "Noto sans thai", sans-serif, Sarabun
    fontSize: 20px
    fontWeight: 700
    lineHeight: 30px
  body:
    fontFamily: Poppins, "Noto sans thai", sans-serif, Sarabun
    fontSize: 10px
    fontWeight: 400
    lineHeight: 15px
  link:
    fontFamily: Poppins, "Noto sans thai", sans-serif, Sarabun
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-secondary:
    fontFamily: Poppins, "Noto sans thai", sans-serif, Sarabun
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 4px
  md: 6px
  lg: 8px
  xl: 10px
  2xl: 16px
  3xl: 20px
  4xl: 30px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 11px
  s9: 12px
  s10: 14px
components:
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.4xl}"
    padding: 5px 15px
    height: 44px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.lg}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.canvas}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    padding: 4px 0px 5px
    height: 32px
---

## Overview

SE-ED is a Thai online bookstore; the page's own description reads "นิยาย ebook และคอนเทนต์หลายรูปแบบ" (novels, e-books and content in several formats), and its footer reads "© 2025 SE-ED. All rights reserved." The storefront is a red-branded retail catalogue: a red header with the round SE-ED logo, a near-black category bar (`{colors.nav-bg}` `#222323`) listing หนังสือเล่ม, E-Book, หนังสือเสียง, สินค้าไลฟ์สไตล์ and นิยาย, a row of circular red-outlined shortcut badges (discount codes, free-shipping codes, SE-ED Mall, best sellers, SE-ED Picks, gift cards, order tracking), and then shelves of book covers under bold Thai headings.

The capture was taken with a "GAME / PLAY FOR FREE" coupon modal open over the hero. That modal is a promotion, not part of the brand's interface system, so nothing from it (neon cyan and violet, rounded dark panel, Kanit lettering) is recorded as design guidance. What remains legible below it is a dense, high-contrast commerce layout: white canvas, red accents, small grey-struck list prices next to bold red sale prices.

**Key Characteristics:**
- Brand red `{colors.primary}` (`#e50000`) is the text and 1px border colour of the outlined login pill, with a softer `{colors.red-soft}` (`#df453c`) used for small outlined tags and links such as "ดูทั้งหมด".
- Poppins leads every font stack, with Noto Sans Thai and Sarabun behind it for Thai glyphs.
- Shelf headings are 32px weight 700 (`{typography.display}`), set in Thai and Latin mixed ("PRE-ORDER : สินค้าสั่งจอง").
- Product cards with 8px top corners (`{rounded.lg}`) and a light `{colors.hairline}` border; discount tags sit top-left in red.
- A 30px-radius (`{rounded.4xl}`) outlined button as the one measured button style.

## Colors

### Brand & Accent
- **SE-ED red** (`{colors.primary}` — `#e50000`): measured as the text, border and icon colour of the outlined login button and the circular shortcut badges.
- **Soft red** (`{colors.red-soft}` — `#df453c`): measured on 360 characters of text and 45 borders; the small outlined pill buttons on product cards and the "ดูทั้งหมด" links.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): shelves and cards.
- **Page backdrop** (`{colors.page-largest}` — `#eeeeee`): the largest measured background area, behind the shelf rows.
- **Light** (`{colors.surface-light}` — `#f7f7f7`) for secondary panels.
- **Category bar** (`{colors.nav-bg}` — `#222323`): the black strip under the header, with white text.

### Text
- `{colors.ink}` (`#000000de`, black at about 87% opacity) for titles and body, `{colors.ink-soft}` (`#4d4d4d`) for secondary lines, `{colors.ink-faint}` (`#acacac`) for the copyright line and struck-through prices. A `{colors.hairline}` (`#e5e7eb`) border colour divides cards.

A green "ส่งฟรี*" free-shipping label and a green discount-code coupon colour are also visible; they were not captured as named tokens and so are not given hexes here.

## Typography

### Font Family
`Poppins, "Noto sans thai", sans-serif, Sarabun`. The loaded-font list shows Poppins at 400, 500, 600 and 700 and Noto Sans Thai at 400 and 700. Roboto, Montserrat, Open Sans and Kanit are also loaded; Kanit is used by the game popup and the others were not measured on page text, so they are not part of the system described here.

### Hierarchy
| Role | Size | Weight | Notes |
|---|---|---|---|
| `{typography.display}` | 32px | 700 | Shelf headings, line height 48px |
| `{typography.display-mobile}` | 20px | 700 | Same heading at a 390px viewport, line height 30px |
| `{typography.link}` | 16px | 400 | Link and input text, line height 24px |
| `{typography.button-secondary}` | 16px | 700 | Outlined login pill |
| `{typography.body}` | 10px | 400 | Footer copyright line, line height 15px |

### Principles
Bold is the default voice: 5,216 characters were measured at weight 700 against 1,647 at 400. The most common size by character count is 12px (product titles and metadata), followed by 10px and 14px, so most reading text on product shelves is small. The `body` token above is the measured role detected from the footer copyright; the dominant product copy is the 12px size.

### Note on Font Substitutes
Poppins and Noto Sans Thai are free Google Fonts families; Sarabun is a free Thai face. No proprietary substitute is involved.

## Layout

### Spacing System
Measured steps: 1, 2, 4, 5, 6, 8, 10, 11, 12 and 14px (`{spacing.s1}`–`{spacing.s10}`). Common flex gaps are 4px, 12px and 8px; the 16px padding appears 148 times.

### Grid & Container
Full-width rows with a small left gutter: shortcut circles in a single row of eight, shop badges in a single row of eight, then shelves of seven-plus cards with a peeking edge that signals horizontal scrolling. Each shelf has a heading on the left and a red "ดูทั้งหมด →" link on the right.

### Whitespace Philosophy
Compact. Card contents are stacked at 12px type with 4–12px gaps; the white space sits between shelves.

## Elevation & Depth

Mostly flat. The measured shadow list is dominated by zero-offset ring resets; a soft `rgba(128, 181, 231, 0.2) 0px 2px 20px 0px` glow and a large `rgba(0, 0, 0, 0.3)` offset shadow were also measured; which elements carry them was not isolated. Depth is otherwise shown by borders (`{colors.hairline}`) and by the black category bar.

## Shapes

### Border Radius Scale
`{rounded.xs}` 2px, `{rounded.sm}` 4px, `{rounded.md}` 6px, `{rounded.lg}` 8px (the most frequent measured value), `{rounded.xl}` 10px, `{rounded.2xl}` 16px, `{rounded.3xl}` 20px, `{rounded.4xl}` 30px, `{rounded.pill}` 9999px (circles).

### Photography Geometry
Book covers and product photographs are portrait rectangles; shop badges and shortcut icons are circles with a coloured ring.

## Components

### Buttons
**Outlined pill (`button-secondary`)**: `{colors.canvas}` fill, `{colors.primary}` text and border, `{typography.button-secondary}`, `{rounded.4xl}` radius, 44px tall, `5px 15px` padding. It is the login control in the header. No filled primary button was detected.

### Links
`link`: `{colors.ink}` text at `{typography.link}`, `{rounded.lg}` radius.

### Inputs
`text-input`: 32px tall, `{colors.ink}` text at 16px, `4px 0px 5px` padding.

### Navigation
`nav`: `{colors.nav-bg}` ground, `{colors.canvas}` text, flat shadow. Items: หนังสือเล่ม, E-Book, หนังสือเสียง, สินค้าไลฟ์สไตล์, นิยาย, and an "อื่นๆ" dropdown.

## Design System Architecture

No public SE-ED design-system or brand-guidelines page was found; the about URL tried returned 404. The root variables measured are only the Tailwind-style `--tw-*` defaults (`--tw-ring-color: rgba(59,130,246,.5)`), so the colour, radius and type decisions are applied per element rather than from a branded token layer. The tokens here are the measured values, renamed by role.

## Do's and Don'ts

### Do
- Use red outlines on white for secondary actions and shortcut badges.
- Set shelf headings in 32px bold with a red "ดูทั้งหมด →" link at the right.
- Keep category navigation on the near-black `{colors.nav-bg}` bar.
- Show sale price in bold red with the old price struck through in grey.

### Don't
- Don't borrow the game popup's neon cyan or violet styling as brand UI.
- Don't invent a filled primary button; the measured system uses outlines.
- Don't set body copy below 10px.

## Responsive Behavior

Measured at two widths: the 1280px desktop capture and a 390px mobile pass. The only mobile change recorded is the heading, which drops from `{typography.display}` (32px/48px) to `{typography.display-mobile}` (20px/30px). Other mobile behaviour was not measured and is not described.

## Iteration Guide

1. White shelves on `{colors.page-largest}`, Poppins first in the stack.
2. Red header, `{colors.nav-bg}` category bar below it.
3. Heading at 32px/700, right-aligned red "ดูทั้งหมด →".
4. Cards at `{rounded.lg}` with a `{colors.hairline}` border.
5. Re-run the gate: `node web/scripts/verify-designs.mjs --slug=se-ed`.
