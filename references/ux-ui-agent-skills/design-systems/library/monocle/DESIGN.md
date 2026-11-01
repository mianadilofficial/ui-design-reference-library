---
version: alpha
name: Monocle
category: "News & Publishing"
description: "Monocle's site monocle.com measured live — a white #ffffff newspaper grid in black #000000 Plantin serif (32px lead headlines, 20px story heads, 18px body), Helvetica Neue 13px bold uppercase for utility labels and square yellow #ffc500 SUBSCRIBE / LISTEN LIVE buttons, a #2a2929 radio band, sky-blue #64d5ff city-guide cards with 8px corners, cream #fdfcf3 panels and a black footer."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#ffc500"
  on-primary: "#000000"
  surface-radio: "#2a2929"
  city-blue: "#64d5ff"
  cream: "#fdfcf3"
  cream-yellow: "#fdfbe4"
  ink-grey: "#6e6e6e"
  ink-light: "#d9d9d9"
  ink-silver: "#b3b3b3"
  on-dark: "#ffffff"
typography:
  display:
    fontFamily: Plantin, ItalicAmpersand, "Book Antiqua", Georgia, "Times New Roman", serif
    fontSize: 32px
    fontWeight: 400
    lineHeight: 38.4px
  display-mobile:
    fontFamily: Plantin, ItalicAmpersand, "Book Antiqua", Georgia, "Times New Roman", serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 30px
  subheading:
    fontFamily: Plantin, ItalicAmpersand, "Book Antiqua", Georgia, "Times New Roman", serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 25px
  body:
    fontFamily: Plantin, ItalicAmpersand, "Book Antiqua", Georgia, "Times New Roman", serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.992px
  body-mobile:
    fontFamily: Plantin, ItalicAmpersand, "Book Antiqua", Georgia, "Times New Roman", serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
  section-nav:
    fontFamily: Plantin, ItalicAmpersand, "Book Antiqua", Georgia, "Times New Roman", serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 17.992px
    textTransform: uppercase
  header-text:
    fontFamily: Plantin, ItalicAmpersand, "Book Antiqua", Georgia, "Times New Roman", serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
  footer:
    fontFamily: Plantin, ItalicAmpersand, "Book Antiqua", Georgia, "Times New Roman", serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28.88px
  button:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 13px
    fontWeight: 700
    lineHeight: 13px
    textTransform: uppercase
  utility:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 13px
    fontWeight: 700
    lineHeight: 14.625px
    letterSpacing: 0.13px
    textTransform: uppercase
  input:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
rounded:
  none: 0px
  xs: 1px
  sm: 8px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 32px
  s11: 40px
  s12: 80px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 16px
    height: 44px
  button-primary-hover:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-dark}"
    textDecoration: underline
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 16px
    height: 40px
  button-dark:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-dark}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    border: "1px solid #ffffff"
    padding: 0px 16px
    height: 44px
  story-link:
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
  section-link:
    textColor: "{colors.ink}"
    typography: "{typography.section-nav}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.header-text}"
    border: "1px solid #000000"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 16px
    height: 40px
    boxShadow: rgb(217, 217, 217) 0px 0px 0px 1px
  radio-card:
    backgroundColor: "{colors.surface-radio}"
    textColor: "{colors.on-dark}"
    typography: "{typography.subheading}"
    rounded: "{rounded.sm}"
    padding: 16px
  city-guide-card:
    backgroundColor: "{colors.city-blue}"
    textColor: "{colors.ink}"
    typography: "{typography.header-text}"
    rounded: "{rounded.sm}"
    padding: 16px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-dark}"
    typography: "{typography.footer}"
    rounded: "{rounded.none}"
    padding: 40px 20px
---

## Overview

This is `https://monocle.com/` ("Monocle - global affairs, culture and design"), the website of the magazine and radio brand, measured live on 2026-10-17 at 1280px (8,952px tall) and in a mobile pass. It looks and reads like a broadsheet: a centred serif masthead, a hairline-ruled section bar, columns of serif headlines with small uppercase sans kickers, and square yellow buttons.

The header carries "MAGAZINE RADIO SHOP" utility links and "LOG IN" with a yellow "SUBSCRIBE" at the top, then the large MONOCLE wordmark centred between a small cover thumbnail with "Currently being edited in London" on the left and "Daily inbox intelligence from Monocle" on the right, and a section bar beneath — AFFAIRS | BUSINESS | CULTURE | DESIGN | FASHION | TRAVEL | CITY GUIDES | SHOP | EVENTS. A house banner for the Monocle Shop ("NEW ARRIVALS") sits above it.

The front page opens with a lead story ("Smart curation keeps the outlook sunny at this year's Frieze London and Masters art fairs") over a gallery photograph, flanked by columns of smaller stories and a dark Monocle Radio panel ("ON AIR — THE BULLETIN WITH UBS", "LISTEN LIVE", "VIEW FULL PROGRAMME"). Then: "LATEST FROM MONOCLE RADIO" on a charcoal band; a yellow magazine promo ("The art of dressing smart…"); four-across story rows; "MEET OUR COLUMNISTS" with round portraits; "CITY GUIDES" as sky-blue cards (Amsterdam, Tokyo, Copenhagen, Mumbai) with illustrated skylines; BUSINESS / FASHION / URBANISM columns; "FROM THE MONOCLE SHOP" products; "FROM OUR PARTNERS"; "MONOCLE BOOKS"; "LONGER READS"; "EVENTS"; a newsletter block with an illustration; and a black footer with the wordmark and "Read more. Live Better."

The extractor hid a filter-modal overlay during measurement (`c-filter-modal__overlay`); it is not documented. Advertising (a watch ad in the radio column) is excluded.

## Colors

The site's colour variables follow a numbered palette (`--color-neutral-*`, `--color-yellow-*`, `--color-blue-*` …); measured roles map onto them.

- **canvas #ffffff** — the page (`--color-neutral-50`); the largest painted area (weight 5,469) and 44% of the capture.
- **ink #000000** — the most-read text colour (6,696 characters) and all rules and borders (`--color-neutral-900`, `--border-primary`).
- **primary #ffc500** — Monocle yellow (`--color-yellow-500`): the SUBSCRIBE and LISTEN LIVE buttons and the "ON AIR" label text.
- **on-primary #000000** — black labels on yellow. Hover on SUBSCRIBE flips to black fill with white underlined text; hover on LISTEN LIVE turns the fill white.
- **surface-radio #2a2929** — the Monocle Radio band and panel (`--color-neutral-800`).
- **city-blue #64d5ff** — city-guide cards (`--color-blue-200`); the second-largest painted area (weight 1,807).
- **cream #fdfcf3** (`--color-yellow-100`, weight 711) and **cream-yellow #fdfbe4** (`--color-yellow-50`, weight 386) — warm panels.
- **ink-grey #6e6e6e** — reading-time and meta text (1,475 characters; `--color-neutral-500`).
- **ink-light #d9d9d9** and **ink-silver #b3b3b3** — light text on dark bands and the input ring (`--color-neutral-200`, `-300`).
- **on-dark #ffffff** — text on the radio band and footer (1,396 characters).

The variables also define orange #f08700, salmon #f07060 / #e10912, red #CE4D4A, green #019949 and blue #25aae1; these were not measured on painted areas of the home page. The 20 characters in #0000ee are browser-default link colour and are not a brand colour.

## Typography

Two families with distinct roles, published as `--ff-base` (Plantin) and `--ff-secondary` (Helvetica Neue):

- **Plantin** (8,860 characters; 400, 700 and italic loaded) — everything editorial. **display** 32px / 38.4px for lead headlines; **subheading** 20px / 25px for story heads (20px is the most-read size, 4,752 characters); **body** 18px / 25.992px for standfirsts and paragraphs; **header-text** 16px / 22px; **section-nav** 13px / 17.992px uppercase for the section bar and kickers; **footer** 20px / 28.88px. Section titles ("LATEST FROM MONOCLE RADIO", "MEET OUR COLUMNISTS") are set at 28px uppercase.
- **Helvetica Neue** (1,347 characters; 400 and 700) — utility. **button** 13px / 13px bold uppercase; **utility** 13px / 14.625px bold uppercase with +0.13px for "MAGAZINE RADIO SHOP" and similar labels; **input** 16px.

Almost all text is weight 400 (9,839 characters); 700 is reserved for the sans labels (392). The font stack declares an `ItalicAmpersand` face ahead of the fallbacks, and the type-scale variables (`--ts-heading-1…7-desktop/mobile-font-size` and `…-line-height`, e.g. heading-1 desktop line height 1.111) drive heading sizes. Plantin and Helvetica Neue are licensed fonts; Georgia and Arial from the declared stacks are the nearest system substitutes.

## Layout

Content spans x=20 to x=1260 on desktop with narrow gutters; the extractor recorded up to six columns in the main band. The front page mixes a wide lead column, narrow story columns and a right-hand radio panel; lower sections are four-across rows with a section title at the left and "SEE ALL" at the right, separated by black hairlines. Bands: a 2,490px white top, a 504px #2a2929 radio band, a 5,624px white body and a 424px black footer.

Measured gaps are tight — 4px (544 elements) and 8px (194) — with 16px (98) and 32px (24) between blocks and 80px between major sections. Paddings: 16px (52), 12px, 32px, 40px, 80px. The variables define a page margin of 1.25rem (`--spacing-page-margin`).

## Elevation & Depth

Flat, like print. The only measured shadow is a 1px ring, `rgb(217, 217, 217) 0px 0px 0px 1px`, on the newsletter input. Separation comes from black 1px rules under section titles and around the header, from the charcoal radio band and from coloured cards (sky blue, cream, yellow).

## Shapes

Buttons and inputs are square (0px). Cards are softly rounded at 8px (20 elements: radio panel, city-guide cards), with an 8px 8px 0 0 top-only radius on the "ON AIR" block. 50% radius on 26 elements covers the round columnist portraits and round icon buttons visible in the capture; 1px on four small elements. The square yellow button against fine black rules is the brand's signature shape.

## Components

- **Yellow button (button-primary)** — SUBSCRIBE, LISTEN LIVE: #ffc500, black Helvetica Neue 13px bold uppercase, 0 16px padding, 44px (40px variant), square. Hover inverts (black fill, white underlined text) or turns white.
- **Dark button** — VIEW FULL PROGRAMME, SHARE: black fill, white label, 1px white border, 44px; hover underlines.
- **Story** — optional photograph, small uppercase kicker, Plantin 20px headline, reading-time meta in #6e6e6e; headlines underline on hover.
- **Header** — utility row, centred wordmark, uppercase Plantin section bar between black rules.
- **Radio card** — #2a2929, 8px radius, 16px padding, white Plantin; "ON AIR" block in black with yellow text.
- **City-guide card** — #64d5ff, 8px radius, 16px padding, "MONOCLE CITY GUIDES" label, city name and an illustration.
- **Newsletter input** — white, 16px padding, 40px, 1px #d9d9d9 ring, followed by a yellow SUBSCRIBE.
- **Footer** — black, MONOCLE wordmark, "Read more. Live Better.", yellow SUBSCRIBE and white SHARE, link columns in Plantin.

## Design System Architecture

No public design system or brand guideline was linked from the home page (link scan of https://monocle.com/ found none). The site is a WordPress build (`/wp-content/themes/monocle/`, `--wp--preset--*` and `--wp--custom--*` variables) with a project token layer on top: a numbered colour palette (`--color-neutral-50…900`, `--color-yellow-50/100/400/500`, `--color-blue-100/200/500`, `--color-salmon-*`, `--color-green-*`, `--color-red-*`, `--color-orange-500`), font-family roles (`--ff-base`, `--ff-secondary`, `--ff-icons` → the `monocons` icon font), a font-size ramp (`--fs-xxs` … `--fs-xxxxl`) and a type-scale layer (`--ts-heading-1…7-*`, `--ts-body-*`, `--ts-legal-*`) with separate desktop and mobile sizes, plus spacing variables (`--wp--custom--spacing--6…80`). Breakpoints: 480px, 600px, 767/768px, 782px, 1023/1024px and 1280px. Other font faces declared in the CSS (Akzidenz Grotesk BQ, Baskerville, Avenir Next LT Pro, Plantin Condensed) were not measured on home-page text.

## Do's and Don'ts

**Do**
- Set all editorial text in Plantin at weight 400; use size, not weight, for hierarchy.
- Use Helvetica Neue bold uppercase 13px only for buttons and utility labels.
- Keep buttons square and yellow #ffc500 with black text.
- Separate sections with black 1px rules and uppercase titles with "SEE ALL" at the right.
- Use 8px-radius coloured cards (charcoal, sky blue, cream) for special modules.

**Don't**
- Don't round buttons.
- Don't use the browser-blue #0000ee for links; links are black and underline on hover.
- Don't set headlines in sans-serif.
- Don't add drop shadows.
- Don't use the wider palette (orange, salmon, green) without measuring where the site uses it.

## Responsive Behavior

From the mobile pass (content between x=16–20 and x=358–387):

- Lead headlines drop from 32px / 38.4px to 24px / 30px; section titles drop from 28px to 24px.
- Paragraphs drop from 18px / 25.992px to 16px / 22px (`body-mobile`); 18px is still the most-read size and 10px appears for small labels.
- The yellow SUBSCRIBE button is unchanged (13px bold, 0 16px, 44px).
- The header measures 150px; the extractor recorded a visible "Toggle Main Navigation" control and ten header links visible on mobile (none counted on desktop).
- The radio band becomes a 101px strip ("THE BULLETIN WITH UBS") near the top and a 566px two-column band further down; the main body runs 7,968px.

The variables define separate mobile type-scale sizes (`--ts-heading-*-mobile-font-size`). Hover on touch was not measured.

## Iteration Guide

1. Start with a white canvas, a centred wordmark and a ruled uppercase section bar.
2. Lead story: `display` headline, `body` standfirst, photograph; side columns of `story-link` items.
3. Every action is a square `button-primary` in yellow; secondary actions `button-dark`.
4. Special modules: `radio-card` (charcoal) and `city-guide-card` (sky blue) with 8px corners.
5. Close with the black footer in Plantin 20px.
6. Use the site's `--color-*` and `--ts-*` variables in `web/data/extracted/monocle.json` before adding new values.
