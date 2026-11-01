---
version: alpha
name: Coachella
category: "Culture & Events"
description: "Coachella Valley Music & Arts Festival (coachella.com): warm beige surfaces (#f5ebdb header, #fefbf6 cards, #efddbe), forest-green #294e2c text and desert-blue #336d8e headings, Perfectly Nineties serif display at 75.3927px, Sweet Sans Pro tracked caps, Funnel Sans body at 20px, and 20px-radius cream cards over festival photography."
colors:
  canvas: "#f5ebdb"
  white: "#ffffff"
  page-largest: "#fefbf6"
  ink: "#294e2c"
  primary: "#336d8e"
  beige-1: "#efddbe"
  night: "#070f16"
  beige-2: "#f3e6ce"
  beige-4: "#fbf4e9"
  beige-3: "#f7eedf"
  card-dark: "#5f5251b3"
  footer-green: "#071b0a"
typography:
  display:
    fontFamily: "\"Perfectly Nineties\", sans-serif"
    fontSize: 75.3927px
    fontWeight: 700
    lineHeight: 75.3927px
    letterSpacing: 2px
  display-mobile:
    fontFamily: "\"Perfectly Nineties\", sans-serif"
    fontSize: 48px
    fontWeight: 700
    lineHeight: 48px
    letterSpacing: 1.8px
  heading-caps:
    fontFamily: "\"Sweet Sans Pro\", sans-serif"
    fontSize: 26.8063px
    fontWeight: 500
    lineHeight: 26.8063px
    letterSpacing: 1px
    textTransform: uppercase
  subheading:
    fontFamily: "\"Perfectly Nineties\", sans-serif"
    fontSize: 35.1832px
    fontWeight: 700
    lineHeight: 35.1832px
    letterSpacing: 1px
  body:
    fontFamily: "\"Funnel Sans\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 27px
rounded:
  xs: 1.5px
  sm: 8px
  md: 20px
spacing:
  s1: 1px
  s2: 4px
  s3: 6px
  s4: 12px
  s5: 15px
  s6: 18px
  s7: 20px
  s8: 24px
  s9: 26.81px
  s10: 30px
components:
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 24px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.primary}"
    rounded: "{rounded.md}"
    padding: 30px 20px
  card-dark:
    backgroundColor: "{colors.card-dark}"
    textColor: "{colors.beige-4}"
    rounded: "{rounded.md}"
  footer:
    textColor: "{colors.white}"
    padding: 196.257px 0px 50px
---

# Coachella

## Overview

Coachella's site (coachella.com, title "Coachella Valley Music & Arts Festival") feels like a sun-faded festival poster. Everything is warm: beige paper tones, a forest-green text colour, a desert-blue for headings and links, and photography of the polo fields at golden hour. The header is a cream strip with the hand-drawn "COACHELLA" wordmark, the festival dates at the top right, a hamburger and a "Join Waitlist" button styled as a blue felt patch. The hero sets "2027 Advance Sale Passes No Longer Available" in a large condensed serif over a sunset over the mountains, underlined by a multicoloured segmented rule, with "HOTEL PACKAGES AVAILABLE NOW" in tracked capitals, two felt-patch waitlist buttons and three arrow links (View Passes, View Camping, Bundle Hotel & Passes).

Below, three cream cards with 20px corners float over crowd photography — "Bundle Hotel & Passes", "2027 Payment Plan", "Stay All Weekend" — each with a felt-craft illustration (a house, scarves, a tent), a blue serif title, a hairline, short green copy and an arrow link. A night-sky section ("Discover Coachella") holds three translucent dark cards (Gallery, Rewatch Highlights, Catch Up) with felt illustrations, then a teal gradient panel with an "ARRIVAL" behind-the-scenes card, and a footer drawn over a photo of people lying on the grass. The craft illustrations and the segmented colour rule are the brand's playful signature; the copy is short and practical ("Lock in the lowest price now.").

## Colors

All values are measured; most are named in the `--color-*` variables.

- **Canvas `#f5ebdb`** — the header strip and the cream ground of the page sections. The computed body background is **white `#ffffff`**, but the visible page is cream.
- **Page largest `#fefbf6`** — `--color-beige-5`, the card fill and the largest background area.
- **Beige 1 `#efddbe`** (`--color-beige-1`), **beige 2 `#f3e6ce`** (`--color-beige-2`, text over the hero), **beige 3 `#f7eedf`** and **beige 4 `#fbf4e9`** (`--color-beige-4`, the hero h1 colour and light text on dark).
- **Ink `#294e2c`** — `--color-green-1`, the most-read text colour: card copy and nav.
- **Primary `#336d8e`** — `--color-blue-1`, card titles, arrow links and section headings on light backgrounds.
- **Night `#070f16`** — the dark "Discover Coachella" section.
- **Card dark `#5f5251b3`** — `--color-grey-1` at 70% alpha, the translucent dark cards.
- **Footer green `#071b0a`** — the gradient base under the footer photo (`linear-gradient(0deg, rgb(7, 27, 10) 50%, …)`).

The theme also declares a festival accent set used in the segmented rule and illustrations: `--seg1 #00A3A6`, `--seg2 #127091`, `--seg3 #FFA600`, `--seg4 #809C00`, `--seg5 #FF5C1A`, `--seg6 #FF809E`, `--seg7 #E52926`, plus `--color-orange-1 #f36835`, `--color-pink-1 #f8879e`, `--color-red-1 #8c2e37`, `--color-red-2 #d33d32`, `--color-yellow-1 #ffab37`, `--color-green-2 #4e6234`, `--color-green-3 #859a2e`, `--color-blue-2 #44a1a4` and `--color-blue-3 #8dd4c8`; these were not measured as UI text or fills on the home page.

## Typography

Three families, declared as role variables: `--font-family-heading: "Perfectly Nineties"`, `--font-family-subheading: "Sweet Sans Pro"`, `--font-family-body: "Funnel Sans"`.

- **Display** — Perfectly Nineties 700, 75.3927px / 75.3927px, letter-spacing 2px: the hero headline, a condensed serif with soft, slightly retro letterforms.
- **Subheading** — Perfectly Nineties 700, 35.1832px / 35.1832px, letter-spacing 1px: card and section titles in `#336d8e` or `#fbf4e9`.
- **Heading caps** — Sweet Sans Pro 500, 26.8063px / 26.8063px, letter-spacing 1px, uppercase: "HOTEL PACKAGES AVAILABLE NOW"; the same face at 18px with 1px tracking labels the dark cards ("GALLERY", "REWATCH HIGHLIGHTS").
- **Body** — Funnel Sans 400, 20px / 27px, the dominant style; 18px is used in the footer (18px / 24.3px).

**Substitutes**: Funnel Sans is an open-source Google font. Perfectly Nineties and Sweet Sans Pro are commercial; a condensed soft serif such as Gloock or Playfair Display SC and a wide geometric caps sans such as Josefin Sans are the nearest free approximations.

## Layout

On the 1280px desktop page the header content sits at x=20; the hero copy is centred between x=269 and x=1012; the card band runs x=74 to x=1207 with three columns (`--card-gap: 1.25rem`); the dark section has three cards between x=180 and x=1240. Measured gaps: 12px (most frequent), 20px, 40px, 62.8272px, 30px and 32px; paddings: 20px, 33.5079px, 18px, 15px, 30px, 24px and large vertical section paddings of 159.162px and 83.7696px. `--two-column-padding-imp-details: 40px` is declared for two-column detail layouts. The footer uses 196.257px top padding so its photograph shows above the links.

## Elevation & Depth

No box-shadows were measured. Depth comes from layering: cream cards placed over photography, translucent `#5f5251b3` cards over a night sky with light trails, and the footer content over a photo fading into dark green. The felt illustrations have their own photographic texture and cast shadows inside the artwork.

## Shapes

The main radius is 20px (`--radius-lg`), on all cards (7 elements). `--radius-sm` is 10px; an 8px radius and 1.5px (three elements, the thin multicolour rule segments) were also measured. Buttons are image-based felt patches with irregular edges rather than CSS shapes. Arrow links use a 1px underline and a trailing arrow.

## Components

- **Felt-patch button** — "Join Waitlist", "Join Waitlist W1/W2": a blue textile image with white text; hover changes only the height by 1px.
- **Arrow link** — white or blue text with an underline and a "→", e.g. "View Passes →", "Learn More →".
- **Cream card** — `#fefbf6`, 20px radius, padding 30px 20px, felt illustration, 35.1832px blue serif title, a thin rule, 20px green body copy, arrow link.
- **Dark card** — `#5f5251b3`, 20px radius, felt illustration on the left, Sweet Sans caps label, short beige copy, white arrow link.
- **Segmented rule** — a thin horizontal bar split into the `--seg1…7` colours under major headlines.
- **Header** — `#f5ebdb`, 24px vertical padding, wordmark, dates, menu toggle and waitlist button.
- **Footer** — photographic, white Funnel Sans 18px links in columns (Get the App, Accessibility / ADA, Get The Newsletter, Our Partners, Contact Us, Health & Safety), app-store badges, Coachella and Goldenvoice logos, social icons and legal links.

## Design System Architecture

No public design system or brand guidelines were found: https://www.coachella.com/press returned HTTP 404 to the fetch tool, and the home page links to none. The de-facto system is the set of CSS custom properties on `:root`: a named palette (`--color-beige-1…5`, `--color-green-1…3`, `--color-blue-1…3`, `--color-black-1…2`, `--color-grey-1`, `--color-red-1…2`, `--color-yellow-1…2`, `--color-orange-1`, `--color-pink-1`), a seven-step segment palette (`--seg1…7`) for the multicolour rule, three font-role variables (heading, subheading, body), two radii (`--radius-sm 10px`, `--radius-lg 20px`) and layout variables (`--card-gap`, `--two-column-padding-imp-details`). The logo is served from `media.web.aegpresents.com`, and the footer shows the Goldenvoice mark next to the Coachella wordmark.

## Do's and Don'ts

**Do**
- Work on warm beige grounds and set text in forest green `#294e2c`.
- Use the condensed serif for headlines and titles, tracked caps for labels, Funnel Sans for copy.
- Put content in cream 20px-radius cards over photography.
- Use arrow links with underlines for secondary actions.
- Use the seven segment colours only together, as the multicolour rule.

**Don't**
- Don't use pure white as a page background; surfaces are beige.
- Don't use the segment colours as UI fills or text colours.
- Don't add drop shadows to cards.
- Don't replace the felt-patch buttons with flat saturated buttons.
- Don't set body copy in the display serif.

## Responsive Behavior

Measured on the 390px mobile pass: the hero h1 drops from 75.3927px to 48px (letter-spacing 1.8px) and the caps h2 from 26.8063px to 24px (0.9px tracking); card titles measured 32px. The most-read mobile sizes are 18px, 16px, 20px and 32px. Content runs from x=20 to x=370 (20px gutter) and cards from x=40 to x=350. The mobile header measured 165px tall with two visible header links and a visible menu toggle; up to two card columns were measured. Breakpoints were not measured.

## Iteration Guide

1. Start with a `#f5ebdb`/`#fefbf6` beige base and `#294e2c` green text in Funnel Sans 20px/27px.
2. Add headlines in a condensed serif at 75px (desktop) / 48px (mobile) with 2px tracking.
3. Label sections with Sweet Sans-style tracked caps at about 27px or 18px.
4. Build cards at 20px radius with 30px 20px padding; cream on light imagery, `#5f5251b3` on dark.
5. Use `#336d8e` for titles and arrow links; reserve the segment colours for the multicolour rule.
6. Use photography and textile illustrations for colour rather than UI fills.
