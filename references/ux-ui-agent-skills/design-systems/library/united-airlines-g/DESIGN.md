---
version: alpha
name: United Airlines
category: "Airlines"
description: "United Airlines' united.com booking site: white #ffffff canvas over a sky photograph, pale #f7f7f7 bands, black #000000 text, a vivid #1414d2 'United blue' for pill CTAs (30px radius) and links, hover darkening to #0d0d8f, 10px-radius inputs and cards, and the proprietary Neue Plak for United faces in Text Regular, Text SemiBold and Bold cuts."
colors:
  canvas: "#ffffff"
  page-body: "#000000"
  page-largest: "#f7f7f7"
  ink: "#000000"
  primary: "#1414d2"
  on-primary: "#ffffff"
  primary-hover: "#0d0d8f"
  surface-sand: "#e5e3df"
  surface-stone: "#ebebe9"
  surface-mist: "#f2f2f2"
  surface-footer: "#242424"
  ink-on-dark-link: "#93b7f8"
  ink-muted: "#666666"
  ink-navy: "#002244"
  hairline: "#555555"
  hairline-light: "#d7d7d4"
  alert-bg: "#fff5f5"
  alert-border: "#d50032"
  nav-bg: "#00000099"
typography:
  display:
    fontFamily: NeuePlakforUnited-Bd, "Noto Sans", Arial, sans-serif
    fontSize: 32px
    fontWeight: 400
    lineHeight: 40px
  display-mobile:
    fontFamily: NeuePlakforUnited-Bd, "Noto Sans", Arial, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
  heading-card:
    fontFamily: NeuePlakforUnited-Bd, "Noto Sans", Arial, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
  body:
    fontFamily: NeuePlakTextforUnited-Rg, "Noto Sans", Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: NeuePlakTextforUnited-SmBd, "Noto Sans", Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: NeuePlakTextforUnited-SmBd, "Noto Sans", Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 23.94px
rounded:
  xs: 2px
  sm: 4px
  md: 10px
  lg: 30px
  xl: 50px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 4px
  s5: 5px
  s6: 6px
  s7: 8px
  s8: 8.86px
  s9: 10px
  s10: 12px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 12px 40px
    height: 50px
    borderColor: "{colors.canvas}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    borderColor: "{colors.surface-stone}"
    boxShadow: rgba(0, 0, 0, 0.15) 0px 2px 5px 0px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 12px 40px
    height: 50px
    borderColor: "{colors.canvas}"
  button-outlined:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 12px 16px
    height: 52px
    border: "2px solid #1414d2"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
    height: 72px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  text-input:
    textColor: "{colors.page-body}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    padding: 8px 14px 8px 8px
    height: 40px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
    rounded: "{rounded.md}"
    padding: 24px 32px
    boxShadow: rgba(0, 0, 0, 0.15) 0px 8px 20px 0px
  alert:
    backgroundColor: "{colors.alert-bg}"
    borderColor: "{colors.alert-border}"
    textColor: "{colors.ink}"
  footer:
    textColor: "{colors.primary}"
---

# United Airlines — united.com

## Overview

United Airlines' home page (measured at https://www.united.com, which redirects to `/en/us`) is a working tool before it is a brand statement. The first thing a visitor sees is not a headline but a white booking widget sitting on a full-bleed photograph of blue sky and soft cloud: tabs for **Book / Flight status / Check-in / My trips**, sub-tabs for Flight, Packages, Hotel, Car and Cruise, radio buttons for Roundtrip and One-way, From/To fields with a swap arrow, a Dates field, a Travelers field, a cabin dropdown, and a large rounded **Find flights** button in United blue `#1414d2`. To the right, a translucent blue promotional panel advertises a MileagePlus credit card offer with big white numerals.

Below the hero the page turns into a utility catalogue: an **Explore destinations** module with its own search row and an embedded map of North America, a light footnote strip, a **Useful links for you** grid of six bordered link cards with right-pointing arrows, and a heavy footer that steps from a charcoal `#242424` band carrying the globe logo and a "100 years of United" mark, to a pale `#ebebe9` band of disclosure links, to a black `#000000` band of legal links, a pill **Search** button, social icons and a **CoBrowse** button.

The visual personality is calm and procedural: black text on white, one saturated blue for every action, generous pill-shaped buttons, and very little decoration beyond the sky photograph. The microcopy voice is direct and service-oriented ("Not sure where to go? Use our interactive map to find flights to great destinations.", "Get answers on bags, refunds, and seats.").

## Colors

All colors below are verbatim measurements from the live page (`web/data/extracted/united-airlines-g.json`).

- **Canvas `#ffffff`** — the booking widget, the content bands and the link cards. The body element itself computes a `#000000` background (`page-body`) painted over by a white `linear-gradient`, so the reader sees white.
- **Page largest `#f7f7f7`** — the background with the largest measured area; it carries the Explore destinations module.
- **Ink `#000000`** — the most-read text color on the page: headings, body copy, labels and field values.
- **Primary `#1414d2`** — United blue. Fills the Find flights, Search and Sign in buttons; colors text links, the "Advanced search" link, footer links and the outline of secondary buttons. On hover the fill (and outlined-button text) darkens to **`#0d0d8f`**.
- **On-primary `#ffffff`** — white text on blue buttons; the primary button also carries a 1px white border.
- **Surface sand `#e5e3df`**, **surface stone `#ebebe9`**, **surface mist `#f2f2f2`** — warm and neutral light greys used for bands; `#ebebe9` is the footer disclosure strip and the hover border of the primary button, `#f2f2f2` is the fare footnote strip.
- **Surface footer `#242424`** — the charcoal band that carries the globe logo.
- **Ink on dark link `#93b7f8`** — a light periwinkle blue used for text on dark surfaces (footer and inverted tab hover borders, per the `--atm-c-tabs-segmented-border-hover-color-inverted` root variable).
- **Ink muted `#666666`** — secondary text such as inactive tab labels; **ink navy `#002244`** — the text color of the booking widget container.
- **Hairline `#555555`** and **hairline light `#d7d7d4`** — field borders and segmented-tab tray borders.
- **Alert bg `#fff5f5`** with **alert border `#d50032`** — the inline error message ("Sorry, no results have been found…") in the destinations module.
- **Nav bg `#00000099`** — the translucent black header that sits over the hero photograph.

## Typography

United's site is set entirely in **Neue Plak for United**, a proprietary customization of the Neue Plak family, self-hosted from `https://www.united.com/fonts/` as woff2. The loaded faces are NeuePlakforUnited-Rg, -SmBd and -Bd (the display cuts) and NeuePlakTextforUnited-Rg and -SmBd (the text cuts). Each cut is a separate family name, so the CSS weight stays at 400 and the heaviness comes from the family itself. Fallbacks are "Noto Sans", Arial, sans-serif.

- **Display** — NeuePlakforUnited-Bd 32px / 40px ("Explore destinations"). The page's real `h1` is not visible, so the largest visible heading is used.
- **Display mobile** — the same face at 24px / 32px on the 390px pass.
- **Heading card** — NeuePlakforUnited-Bd 24px / 32px (the "Sign in for the best experience" card heading).
- **Body** — NeuePlakTextforUnited-Rg 16px / 24px, the dominant size by character count.
- **Button** — NeuePlakTextforUnited-SmBd 16px / 24px.
- **Nav** — NeuePlakTextforUnited-SmBd 14px / 23.94px for header items.

Measured sizes by frequency: 16px, 12px, 14px, 20px, 24px, 10px, 48px, 32px. The 48px size is the large promotional numerals; 20px is the link-card titles. The only letter-spacing recorded is 1px on 12px text.

**Substitutes:** Neue Plak is a commercial family; the official fallback in the stack is Noto Sans, which is the safe choice when the United cuts are not licensed.

## Layout

The desktop capture is 1280px wide with content bounded between x = 96 and x = 1138, a left-aligned single column with the booking widget at the left and the promo panel at the right of the hero. The measured bands from top to bottom are: a 727px media hero (sky photo, header overlaid), a white band holding the destinations heading and search row, a 62px results bar, a 476px map, a footnote strip in `#f2f2f2`, a 493px white "Useful links" band laid out in two columns, then the footer bands in `#242424`, `#ebebe9` and `#000000`.

Measured gaps cluster at 16px, with 10px, 24px and 4px also present; paddings cluster at 8px, 16px, 12px and 24px. Density is high inside the booking widget (labels, radios and fields tightly packed) and relaxed outside it.

## Elevation & Depth

Depth is used sparingly. The sign-in card measures `rgba(0, 0, 0, 0.15) 0px 8px 20px 0px`; a heavier `rgba(0, 0, 0, 0.2) 0px 12px 34px 0px` and a small `rgba(0, 0, 0, 0.3) 0px 1px 4px -1px` (map controls) also appear. Buttons gain a soft `rgba(0, 0, 0, 0.15) 0px 2px 5px 0px` shadow on hover. Segmented controls use inset 1px ring shadows instead of borders (`rgb(215, 215, 212) 0px 0px 0px 1px inset`). The header gets its depth from translucency — `#00000099` over the photograph — not from a shadow.

## Shapes

Two radii define the brand. **30px** (`rounded.lg`) is the pill on every primary and outlined button (Find flights, Search, Find your travel credits, Learn more); **10px** (`rounded.md`) is used on text inputs, selects and cards. The Sign in button measures **50px** (`rounded.xl`), which at its 50px height is visually the same full pill. Smaller **4px** and **2px** radii appear on tab corners and checkboxes, and 50% circles on radio buttons and icon buttons. The link cards in the capture have thin borders and small corner rounding; the booking widget's tab strip has square corners.

## Components

- **Primary button** — `#1414d2` fill, white text in NeuePlakTextforUnited-SmBd 16px/24px, 1px white border, 30px radius, padding 12px 40px, height 50px. Hover: fill `#0d0d8f`, border `#ebebe9`, shadow `rgba(0, 0, 0, 0.15) 0px 2px 5px 0px`.
- **Secondary (Sign in) button** — the same blue fill and type with a 50px radius.
- **Outlined button** — white fill, `#1414d2` text and 2px `#1414d2` border, 30px radius, padding 12px 16px, height 52px ("Find your travel credits", "Learn more"). Hover darkens text and border to `#0d0d8f` and adds the 2px/5px shadow.
- **Text input** — black text 16px/24px, 10px radius, padding 8px 14px 8px 8px, height 40px, thin dark border; placeholders are italic in the capture ("Origin", "Destination").
- **Booking tabs** — a dark navy strip of four tabs, the active one white with black text; below it underlined text sub-tabs.
- **Card** — white, 10px radius, padding 24px 32px, shadow `rgba(0, 0, 0, 0.15) 0px 8px 20px 0px`.
- **Link card** — white box with a light border, 20px semibold title, 16px description and a blue right arrow.
- **Alert** — `#fff5f5` background, `#d50032` border, red warning triangle icon, black message.
- **Header** — 72px tall, `#00000099` translucent black, white 14px nav items with chevrons, globe logo at left, language selector and icons (search, notifications, profile, cart) at right.
- **Focus** — the extraction recorded a 2px solid outline with a 2px offset on focused tabs.

## Design System Architecture

United does not publish a public design system; no public system exists that we could open. Its GitHub org page (https://github.com/united-airlines) states "This organization has no public repositories", and our requests for the newsroom and company pages timed out (recorded in SOURCES.json). The de-facto system is visible in the shipped CSS: root custom properties prefixed `--atm-c-` (e.g. `--atm-c-tabs-segmented-active-background-color: #1414d2`, `--atm-c-tabs-segmented-border-color: #d7d7d4`, `--atm-c-tabs-segmented-border-hover-color-inverted: #93b7f8`) show an atomic, component-scoped token layer with explicit "inverted" variants for dark surfaces. Fonts are delivered as named per-weight families, which is why every computed weight is 400. Media queries cluster at 720px, 944px and 1184px min-widths.

## Do's and Don'ts

**Do**
- Use `#1414d2` for every action and link, and `#0d0d8f` for hover.
- Keep primary buttons pill-shaped at 30px radius with 12px 40px padding and white 16px semibold text.
- Use 10px radius for fields and cards; keep text black on white.
- Choose the font cut by family name (Text-Rg for body, Text-SmBd for buttons and nav, Bd for headings) instead of changing font-weight.
- Use the light periwinkle `#93b7f8` only for text and borders on dark surfaces.

**Don't**
- Don't introduce a second accent color for buttons; the only non-blue signal color measured is the `#d50032` error border.
- Don't square off buttons or round inputs into pills.
- Don't put heavy shadows on content; the strongest measured shadow is reserved for floating cards.
- Don't document the cookie banner, CoBrowse or chat controls as brand UI.

## Responsive Behavior

The extraction's 390px mobile pass recorded: the headline at 24px / 32px (down from 32px / 40px), body text staying at 16px / 24px, the header computing a solid `#000000` background, one header link visible with a menu toggle labelled "Search", and a mobile band sequence of a 72px black header followed by a 70px `#004f92` strip before the hero media. Mobile font sizes by frequency are 16px, 12px, 24px, 14px, 10px, 13px and 48px. The stylesheet declares breakpoints at min-width 720px, 944px and 1184px. Column reflow of the booking widget, map and link grid was not measured.

## Iteration Guide

1. Start from white `#ffffff` with black `#000000` text and Neue Plak for United (or Noto Sans).
2. Put one blue `#1414d2` pill button (30px radius, 50px tall) on each task surface; hover it to `#0d0d8f`.
3. Build forms with 40px-high, 10px-radius fields and 16px labels above them.
4. Alternate white and `#f7f7f7` bands for modules; close the page with `#242424`, `#ebebe9` and `#000000` footer bands.
5. Use the sky/cloud photography behind the hero task widget rather than a headline.
6. Re-measure before adding any value not listed in the frontmatter.
