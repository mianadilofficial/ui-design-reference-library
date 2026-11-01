---
version: alpha
name: YNAB
category: "Fintech & Crypto"
description: "YNAB (You Need A Budget): a buttermilk #fef9ed page with a blurple #545bfe hero, midnight #1c1f58 ink and header, Wishfarm Semibold headlines (64px, -0.64px) over Figtree body, firefly-green #aee865 CTAs with 6px corners and #1c1f58 text that deepen to #93d53e, white 12px stat cards, and wavy green and blue section edges."
colors:
  canvas: "#fef9ed"
  ink: "#1c1f58"
  primary: "#aee865"
  on-primary: "#1c1f58"
  primary-hover: "#93d53e"
  blurple: "#545bfe"
  buttermilk-150: "#fdf3d2"
  surface-white: "#ffffff"
  meadow-700: "#01744e"
  meadow: "#41d298"
  meadow-200: "#bbf6dd"
  neutral-300: "#9b9caa"
  neutral-500: "#56596c"
typography:
  display:
    fontFamily: "\"Wishfarm Semibold\", sans-serif"
    fontSize: 64px
    fontWeight: 600
    lineHeight: 68.48px
    letterSpacing: "-0.64px"
  display-mobile:
    fontFamily: "\"Wishfarm Semibold\", sans-serif"
    fontSize: 44px
    fontWeight: 600
    lineHeight: 48.4px
    letterSpacing: "-0.48px"
  heading:
    fontFamily: "\"Wishfarm Semibold\", sans-serif"
    fontSize: 40px
    fontWeight: 600
    lineHeight: 44px
    letterSpacing: "-0.48px"
  heading-mobile:
    fontFamily: "\"Wishfarm Semibold\", sans-serif"
    fontSize: 32px
    fontWeight: 600
    lineHeight: 35.2px
    letterSpacing: "-0.36px"
  stat:
    fontFamily: "\"Wishfarm Medium\", sans-serif"
    fontSize: 64px
    fontWeight: 600
    lineHeight: 64px
  subheading:
    fontFamily: "\"Figtree Variablefont Wght\", sans-serif"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 25.2px
  body:
    fontFamily: "\"Figtree Variablefont Wght\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"Figtree Variablefont Wght\", sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  nav-eyebrow:
    fontFamily: "\"Figtree Variablefont Wght\", sans-serif"
    fontSize: 11.2px
    fontWeight: 600
    lineHeight: 14.56px
rounded:
  xs: 6px
  sm: 8px
  md: 12px
  lg: 100px
  pill: 9999px
spacing:
  s1: 1.5px
  s2: 1.6px
  s3: 4px
  s4: 6.4px
  s5: 8px
  s6: 8.8px
  s7: 12px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 8px 16px
    height: 44px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-primary-large:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 16px
    height: 52px
  button-outline-inverse:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 20px
    height: 52px
    borderColor: "{colors.canvas}"
  nav:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    height: 76px
  nav-eyebrow-link:
    textColor: "{colors.neutral-300}"
    typography: "{typography.nav-eyebrow}"
  promo-bar:
    backgroundColor: "{colors.meadow-700}"
    textColor: "{colors.canvas}"
  search-input:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    padding: 12px 12px 12px 32px
    height: 48px
  stat-card:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.ink}"
    typography: "{typography.stat}"
    rounded: "{rounded.md}"
    padding: 28px
---

# YNAB

## Overview

YNAB ("You Need A Budget"; the header notes "It's pronounced 'why-nab'") is a budgeting app. The home page at ynab.com was measured at 1280px (5293px tall) and 390px. It is bright, warm and illustrated. The page opens with a thin green promo bar ("YNAB has a New York Times Bestselling book! Order it today.") and a midnight-blue header (YNAB wordmark; What is YNAB?, Learn, Share YNAB, Pricing; Log In; a green "Start Your Free Trial" button). The hero is a saturated blurple (#545bfe) band with the headline "Do you worry about money?", the italic subline "Get YNAB. Get good at money. And never worry about money again.", a green CTA and the note "It's easy! No credit card required." On the right, a phone showing the YNAB app floats among flying green banknotes. A wavy green-and-blue edge ends the hero.

Below the hero, on buttermilk (#fef9ed): a press and ratings row (Trustpilot, Wired, App of the Day, WSJ, App Reviews, Entrepreneur), "Tired of worrying about money? You're not alone." next to four white stat cards (90%, 91%, 70%, 93%) with green bottom edges, a large italic founder quote ("How you spend your money is how you live your life…" — Jesse Mecham, Founder of YNAB) with highlighted lines, "It takes 20 minutes to start getting good." with three illustrated steps and desktop and phone screenshots, "The average user saves $600 their first month, $6,000 their first year." with a hand-drawn arrow into three testimonial cards (Kathryn, Kyle, Wave), and a blurple closing band, "Get YNAB. Get good at money.", with a phone, green blob shapes and two buttons. The page ends with a midnight footer that has a search field and four link columns (Company, Programs, App, Legal).

The voice is warm, direct and a bit cheeky ("Being bad at money isn't a character flaw. It's a skill gap"). The visual language pairs flat saturated color fields with organic wave edges, hand-drawn doodles (arrows, sparkles) and real app screenshots.

## Colors

The site's CSS names its palette (`--design-system---…`):

- **Canvas — #fef9ed** (`buttermilk`). The `body` and the main reading sections.
- **Buttermilk 150 — #fdf3d2** (`buttermilk-150`). Alternate warm panels (area 1443): the quote and "20 minutes" sections.
- **Ink — #1c1f58** (`midnight`). All headings and body on light grounds (2275 characters), the header and footer fill, and the CTA text.
- **Blurple — #545bfe** (`blurple`). The hero and closing band (largest area, 2735) and blue text accents (408 characters).
- **Primary — #aee865** (`firefly`). Every CTA fill, with a 2px border in the same color. Hover deepens to **#93d53e** (`firefly-500`).
- **Surface white — #ffffff.** Stat and testimonial cards.
- **Meadow 700 — #01744e.** The top promo bar.
- **Meadow — #41d298** (`meadow`). Small green text accents.
- **Meadow 200 — #bbf6dd.** The hover color of header nav items.
- **Neutral 300 — #9b9caa.** The tiny "It's pronounced 'why-nab'" label under the wordmark.
- **Neutral 500 — #56596c.** Muted copy.

Other named ramps in the CSS: `blurple-100` … `blurple-900` (#f1f1ff to #1b1d48), `firefly-100` … `firefly-500`, `meadow-100` … `meadow-700`, `mulberry` (#ce5e66 and steps), `neutral-100` … `neutral-700`, `dandelion` #f6c91d and `sunset` #fc6350. Those were not all measured as rendered fills on the home page.

## Typography

The CSS declares the families as `--design-system---fonts--*`:

- **Wishfarm Semibold** (600) — headlines.
- **Wishfarm Medium** and **Wishfarm Medium Italic** (500) — stat numerals and italic display text (249 characters measured in the italic).
- **Figtree** (variable 300–900, upright and italic, loaded as "Figtree Variablefont Wght") — body, buttons, nav (3217 characters).
- **Inconsolata** (400, 700) is loaded but was not measured on visible text.

Measured roles:

- **Display (h1)** — Wishfarm Semibold 64px / 68.48px, -0.64px.
- **Heading (h2)** — Wishfarm Semibold 40px / 44px, -0.48px.
- **Quote** — the founder quote band measured 32px; 32px text carries -0.24px tracking (187 characters).
- **Stat numeral** — Wishfarm Medium 64px / 64px, weight 600 as computed.
- **Subheading (h3)** — Figtree 18px / 25.2px, weight 600 ("Join YNAB", "Make a plan").
- **Body** — Figtree 16px / 24px, weight 400.
- **Button** — Figtree 16px / 24px, weight 600.
- **Nav eyebrow** — Figtree 11.2px / 14.56px, weight 600.

24px text uses -0.24px tracking. Weights by characters: 400 (1757), 600 (759), 500 (730), 700 (446).

## Layout

Content runs from 80px to 1200px on desktop. The hero is a two-column split (copy from 80px to 640px, illustration right). The stats section pairs a heading column with a 2×2 grid of 304px stat cards. The "20 minutes" section pairs a numbered step list with layered screenshots. The testimonial section uses three equal cards (3-column band from 112px to 1168px). The closing band reverses the split (phone left, copy right from 660px).

Bands alternate hard color fields with wavy edges: #01744e promo bar (50px), #1c1f58 header (76px), #545bfe hero, buttermilk (#fdfaeb/#fef9ed) and #fdf3d2 sections, blurple closing, and the midnight footer. Spacing is built on `--design-system---sizing--*` rem steps (tiny .25rem, xxs .5rem, xs .75rem, s 1rem, m 2rem, l 3rem, xl 4rem, xxl 5rem, huge 6rem, xhuge 8rem, xxhuge 12rem). The measured paddings are dominated by 16px (69 uses) and 80px (13, section padding), with 28px card padding. Gaps are 16px and 8px.

## Elevation & Depth

The page is flat. Only one shadow was measured, `rgba(0, 0, 0, 0.2) 0px 4px 8px 0px` (2 elements, on the floating phone mock-ups). Depth comes from the illustration itself: phones overlapping banknotes and green blobs, wave shapes that let one band flow into the next, and stat cards sitting on the buttermilk ground with a colored bottom edge.

## Shapes

- **8px** — the most common radius (25 elements): screenshots, small panels.
- **6px** — all CTAs and the search input (7).
- **12px** — stat and testimonial cards (7).
- **100px** — round avatars and pill shapes (5); **100%** — the circular accessibility button.

Organic shapes carry the personality: wavy section edges, blob backgrounds behind phones, and quote marks drawn as green and lilac speech bubbles.

## Components

- **Primary button.** #aee865 fill with `2px solid #aee865`, #1c1f58 Figtree 16px/24px weight 600, 6px radius. The header size has padding `8px 16px` and is 44px tall; the in-page size has padding `12px 16px` and is 52px tall. Hover changes fill and border to #93d53e.
- **Inverse outline button.** "Browse App Features" on blurple: transparent with `2px solid #fef9ed`, #fef9ed text, 6px radius, padding `12px 20px`, 52px tall.
- **Header.** #1c1f58, 76px tall. Nav items are #fef9ed and turn #bbf6dd on hover. A tiny 11.2px #9b9caa pronunciation note sits under the wordmark.
- **Promo bar.** #01744e strip with buttermilk text and a close button.
- **Stat card.** White, 12px radius, 28px padding, a 64px Wishfarm numeral in #1c1f58 over a short Figtree caption.
- **Testimonial card.** White with a colored lower edge, a large speech-bubble quote mark, a bold quote lead, body text, the name with "YNABer since …", and a circular photo.
- **Search input.** In the footer: #1c1f58 fill, buttermilk text, 6px radius, padding `12px 12px 12px 32px` (room for the icon), 48px tall.
- **Footer.** Midnight, with the YNAB tree logo, search, social icons, regulatory copy and four link columns.

## Design System Architecture

YNAB's press page (https://www.ynab.com/press) points to a press kit that "includes our brand guidelines, logos, and some sample app images", hosted on Brandfolder: logos at https://brandfolder.com/s/kvq74s532z6g56wkbpsqpq, app images at https://brandfolder.com/s/63s9hbc3b4kb4fk8jwfnp53 and headshots at https://brandfolder.com/s/bbfxg324qj6s6mbk833mmj7s. We did not open the guideline files themselves.

The shipped CSS (81 root variables) exposes a named design-system layer with the prefix `--design-system---<group>--<name>`:
- **Color groups**: `blurple` (100–900), `firefly` (100–500), `meadow` (100–700), `mulberry` (400–700), `neutrals` (`buttermilk`, `buttermilk-150`, `midnight`, `neutral-100` … `neutral-700`, `white`).
- **Fonts**: `figtree`, `wishfarm-medium`, `wishfarm-medium-italic`, `wishfarm-semibold`, `wishfarm-semibold-italic`.
- **Sizing**: `tiny` through `xxhuge` in rem.

Older variables marked `<deleted|variable-…>` (e.g. `--blurple<deleted|…>: #545bfe`, `--granite-*`) and campaign colors for the book (`--_never-worry-book---amethyst`, `--_never-worry-book---parakeet`) also remain in the stylesheet.

## Do's and Don'ts

**Do**
- Use buttermilk #fef9ed as the reading ground and midnight #1c1f58 for text, header and footer.
- Use blurple #545bfe for big hero and closing fields, and join bands with wavy edges.
- Make every CTA firefly #aee865 with midnight text, 6px corners and a 2px same-color border, hovering to #93d53e.
- Set headlines in Wishfarm Semibold with slight negative tracking, and quotes and sublines in Wishfarm Medium Italic. Use Figtree for everything else.
- Pair real app screenshots with playful illustration: flying money, doodle arrows, sparkles, blobs.
- Write like a friend: candid, encouraging, a little funny.

**Don't**
- Don't put white text on the green CTA; the measured CTA text is midnight.
- Don't use rounded pills for primary buttons; the measured radius is 6px.
- Don't add heavy shadows; the page relies on color fields and shapes.
- Don't use the deleted legacy variables or the book-campaign colors as core brand colors.

## Responsive Behavior

Measured at 390px:

- h1 drops from 64px/68.48px to **44px/48.4px** (-0.48px).
- h2 drops from 40px/44px to **32px/35.2px** (-0.36px).
- Body stays **16px/24px**.
- The primary CTA becomes full width: 342px wide, 52px tall, padding `12px 16px`.
- The header is 64px tall on #1c1f58, with 1 visible link and a menu toggle labelled "menu" (4 links on desktop, 76px tall). The promo bar is 64px tall.
- Content is inset 24px each side (24px to 366px).
- Band order on mobile: #01744e promo, #1c1f58 header, #545bfe hero (702px), buttermilk stats, #fdf3d2 sections, buttermilk testimonials, #545bfe closing, #1c1f58 footer (2035px tall).

Breakpoint values were not measured.

## Iteration Guide

1. Set the page to #fef9ed with #1c1f58 text, and load Wishfarm (Semibold, Medium, Medium Italic) and Figtree.
2. Build the type: 64/68.48 display, 40/44 headings, 32px italic quotes, 64px stat numerals, 18/25.2 subheads, 16/24 body.
3. Add the #aee865 button (44px and 52px sizes, 6px radius, #93d53e hover) and the buttermilk inverse outline button for blurple grounds.
4. Compose the page as alternating flat color bands (blurple, buttermilk, #fdf3d2, midnight) joined by wavy edges.
5. Use white 12px cards for stats and testimonials, and illustrated phones for product moments.
6. Take every new color from the `--design-system---*` groups, and check the Brandfolder press kit for logo usage.
