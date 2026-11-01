---
version: alpha
name: Club Med
category: "Travel & Hospitality"
description: "Club Med Thailand home page (clubmed.co.th), measured — warm sand #f5f0e8 and white #ffffff surfaces, ultramarine navy #1e2a4a pill buttons (120px radius), saffron #ffcc00 search button, sage #a8b8b3 sustainability band, Newsreader 64px/700 serif headlines over Inter 16px/400 body, 16px-radius image cards."
colors:
  canvas: "#ffffff"
  page-largest: "#f5f0e8"
  ink: "#000000"
  primary: "#1e2a4a"
  on-primary: "#ffffff"
  saffron: "#ffcc00"
  sage: "#a8b8b3"
  ink-muted: "#666666"
  ink-subtle: "#999999"
typography:
  display:
    fontFamily: Newsreader, "Times New Roman", Times, serif
    fontSize: 64px
    fontWeight: 700
    lineHeight: 66px
  display-mobile:
    fontFamily: Newsreader, "Times New Roman", Times, serif
    fontSize: 48px
    fontWeight: 700
    lineHeight: 50px
  heading:
    fontFamily: Newsreader, "Times New Roman", Times, serif
    fontSize: 40px
    fontWeight: 700
    lineHeight: 42px
  card-title:
    fontFamily: Inter, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 20px
    fontWeight: 600
    lineHeight: 28px
  body:
    fontFamily: Inter, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: Inter, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  link:
    fontFamily: Inter, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 20px
rounded:
  xs: 8px
  sm: 16px
  md: 120px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 12px 32px
    height: 50px
    borderColor: "{colors.primary}"
  button-search:
    backgroundColor: "{colors.saffron}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 12px 32px
    height: 50px
    borderColor: "{colors.saffron}"
  button-outlined:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 12px 32px
    height: 50px
    borderColor: "{colors.ink}"
  button-dark:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 12px 32px
    height: 50px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 8px 20px
    height: 66px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    height: 24px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
---

# Club Med

## Overview

Requests to `https://www.clubmed.com` were served the Thailand English site, `https://www.clubmed.co.th/` (title: "Club Med All-Inclusive Holidays | Worldwide Resorts", `lang="en-TH"`). Everything here was measured on that page at 1,280px and 390px.

The page feels like a travel magazine: warm sand backgrounds, large bold serif headlines and wide resort photography. A thin announcement strip at the very top ("Chasing Winter Wonders 2026-2027 is now open! Lock in the lowest rates of the season for your dream all-inclusive getaway. Learn more") sits above a white 66px header with the Club Med logo and trident, the links Destinations, Club Med Experiences and Inspirations, a navy "Special Offers" pill, round icon buttons and an En | Th language switch. A short campaign banner follows — a snowy mountain photo with a skier and a woman with a parasol under "Where will you celebrate this festive season?" and a navy "Holiday Now!" pill. Then the core hero on sand: "Premium All-inclusive beach and mountain resorts" in a 64px Newsreader serif beside a photo of a skier on a ridge, an intro paragraph, and a floating white search bar (destination, check-in/check-out, number of guests) ending in a saffron "See all resorts" pill. Further down: "Over 60 ways to see la vie en rose" with a staggered collage of resort photo cards (Kiroro Grand, Lijiang, Tomamu Hokkaido, Pragelato Sestriere, Phuket), "Our resorts around the world" with filter pills (Most Popular, Snow & Ski in Asia, Beach & Sun in Asia, The Europeans Alps, Exclusive Collection) and a resort carousel, a "Club Med, creator of all-inclusive and letting go" list of large serif statements beside a child's portrait, a "Psst! There's more" row of guarantees on sand, a sage "Responsibility is a part of 'All Inclusive'" band with an aerial beach photo, link lists, a newsletter row and a sand footer.

The copy is warm and a little playful — "la vie en rose", "Psst! There's more:", "creator of all-inclusive and letting go".

## Colors

- **Canvas `#ffffff`** — the body background and white sections.
- **Page largest `#f5f0e8`** — warm sand, the largest background by area (6,058 units): hero, guarantee strip and footer. The CSS names this family `--color-lightSand`.
- **Ink `#000000`** — main text (4,832 characters).
- **Primary `#1e2a4a`** — deep ultramarine navy: "Special Offers" and "Holiday Now!" pills and navy text accents (667 characters). The CSS hover token `--color-ultramarine-active` matches the measured hover of these buttons.
- **On-primary `#ffffff`** — labels on navy and text over photos (1,306 characters).
- **Saffron `#ffcc00`** — the search bar's "See all resorts" button and the selected filter chip (102 area units, 11 borders). Declared family `--color-saffron`.
- **Sage `#a8b8b3`** — the sustainability band (922 area units).
- **Ink muted `#666666`** and **ink subtle `#999999`** — secondary copy and the dimmed items in the statement list.

The CSS defines the full palette in OKLCH: sand, lightSand, lavender, sienna, orange, red, green, marygold, saffron, wave, ultramarine, pearl and a grey ramp, each with an `-active` (hover/pressed) variant.

## Typography

Fonts loaded: **Inter** 400 and 600, and **Newsreader** 700. Inter carries 6,478 characters, Newsreader 564. The CSS names them `--font-family-sans: Inter` and `--font-family-serif: Newsreader`.

- **Display — Newsreader 64px / 700 / 66px.** "Premium All-inclusive beach and mountain resorts". The CSS declares this step as `--text-h0` with a 4.125rem (66px) line height.
- **Heading — Newsreader 40px / 700 / 42px.** Section titles ("Over 60 ways to see la vie en rose", "Our resorts around the world"). 48px/700 Newsreader is used for the campaign banner and the large statement list.
- **Card title — Inter 20px / 600 / 28px.** Resort names over photos.
- **Body — Inter 16px / 400 / 24px.** The most common size (4,058 characters).
- **Button — Inter 16px / 600 / 24px.**
- **Link — Inter 14px / 700 / 20px.** The announcement strip and small links.

Measured weights: 400 (3,590 characters), 600 (2,644) and 700 (808). No letter-spacing is applied. The footer's section titles ("Sign up to our newsletter") are Newsreader 24px/700/26px.

**Substitutes:** Inter and Newsreader are both on Google Fonts.

## Layout

The desktop page measured 6,476px tall. Bands, top to bottom: white header (122px including the announcement strip), a navy-toned campaign banner (118px), banner media (262px), the sand hero (578px), a white section (328px), a media collage (640px), a sand strip (176px), a white three-column header row (164px), a resort carousel (586px), a white four-column statement section (1,356px), the sage band (720px), a white two-column links block (496px) and the sand footer (930px). The widest grid reaches eight columns (filter chips). Spacing favours small, consistent steps: gaps of 8px (104), 4px (57) and 20px (24); paddings of 20px (72), 8px (60), 24px (57) and 12px (48), with 200px paddings (8) framing wide sections. The desktop header shows 11 visible links.

## Elevation & Depth

No box-shadows were measured. The search bar reads as floating because it is white on sand with rounded ends. Depth comes from the staggered photo collage, where cards are offset vertically, and from full-bleed photography.

## Shapes

Pills and rounded cards. Buttons use a 120px radius (98 elements; `--radius-pill: 7.5rem`). Image cards and panels use 16px (122 elements). Avatars and round icon buttons are 100% circles (26). A few small elements use 8px. The CSS radius scale runs `--radius-0`, `-4`, `-8`, `-16`, `-22` and `-pill`.

## Components

- **Primary button** — `#1e2a4a` fill and border, white Inter 16px/600 label, 50px tall, `12px 32px` padding, 120px radius. The measured hover lightens the navy to the `--color-ultramarine-active` value.
- **Search button** — saffron `#ffcc00` fill and border with black label, same size, inside the search bar.
- **Outlined button** — transparent with a `1px solid #000000` border and black label ("See all resorts" under the carousels).
- **Dark button** — black fill, white label: the newsletter "Sign up" and the "Thailand (English)" site selector.
- **Header** — white, 66px, `8px 20px` padding, Inter 16px links.
- **Search bar** — white rounded bar with three fields (Inter 16px) and the saffron button.
- **Resort card** — 16px-radius photo with a white Inter 20px/600 name, country and a small season chip.
- **Footer** — sand `#f5f0e8`, Newsreader 24px titles, Inter link columns.

## Design System Architecture

No public Club Med design system or brand-guideline page was opened: `https://www.clubmed.co.th/l/about-us` returned HTTP 404 to the fetcher. The shipped CSS is Tailwind CSS v4 with a custom theme in 106 `:root` variables: named colours in OKLCH (`--color-sand`, `--color-lightSand`, `--color-ultramarine`, `--color-saffron`, `--color-sienna`, `--color-marygold`, `--color-lavender`, `--color-wave`, `--color-pearl`, greys) each paired with an `-active` state; a numbered type scale `--text-h0`…`--text-h5` and `--text-b0`…`--text-b5` with line-height and weight companions; a radius scale; and easing tokens including a springy `--transition-fn-boop: cubic-bezier(.47,1.64,.41,.8)`. The home page uses sand, white, ultramarine, saffron and the sage band.

## Do's and Don'ts

**Do**
- Pair bold Newsreader serif headlines with Inter body text.
- Use warm sand `#f5f0e8` as the main background, with white sections between.
- Make every button a 120px-radius pill; navy for primary actions, saffron only for search.
- Show resorts in 16px-radius photo cards with white names over the image.
- Keep the tone warm and conversational.

**Don't**
- Don't use square buttons.
- Don't use saffron as a large background.
- Don't add drop shadows; the system is flat.
- Don't set headlines in Inter.

## Responsive Behavior

Measured at 390px: the header is 64px with `8px 8px 8px 20px` padding, a visible "Open menu" toggle and 2 visible links. The hero headline is Newsreader 48px/700/50px, section headings drop to 32px/700/34px, and the campaign banner title to 28px/700. The primary button keeps its size (50px tall, `12px 32px`, 120px radius). Recorded mobile bands: header (160px), campaign media with two columns (847px), sand hero (433px), white section, resort media (449px), sand strip, a white heading row, carousel media, a white two-column statement section (1,275px), the sage band (736px), a white links block and the sand footer (1,016px). Mobile font sizes by frequency: 16px, 14px, 20px, 28px, 12px, 32px, 24px and 48px. Breakpoint widths: not measured.

## Iteration Guide

1. Start with sand `#f5f0e8` and white sections, black Inter 16px/400 text.
2. Add a white 66px header with a navy "Special Offers" pill.
3. Build the hero: Newsreader 64px/700 headline, intro paragraph, photo, and a floating white search bar with a saffron pill.
4. Show resorts as 16px-radius photo cards in a staggered collage or carousel.
5. Use 40px Newsreader headings for each section and outlined pills for "See all".
6. Add a sage `#a8b8b3` band for sustainability content.
7. End with a sand footer and Newsreader 24px titles.
