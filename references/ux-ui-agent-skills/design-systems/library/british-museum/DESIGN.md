---
version: alpha
name: British Museum
category: "Culture & Events"
description: "British Museum (britishmuseum.org): a black #000000 site with #1d1d1d content cards, white and #a5a5a5 grey text all in Helvetica Neue 400/500, square black-and-white buttons with a chevron (50px tall, 10px 60px 10px 20px padding), 50% round icon controls, and per-exhibition accent colours such as gold #bf955f, red #ec1616 and green #67ad25."
colors:
  canvas: "#000000"
  page-body: "#000000"
  surface-card: "#1d1d1d"
  surface-light: "#e5e5e5"
  ink: "#a5a5a5"
  primary: "#ffffff"
  on-primary: "#000000"
  alert-green: "#6d8d23"
  accent-gold: "#bf955f"
  accent-red: "#ec1616"
  accent-green: "#67ad25"
typography:
  display:
    fontFamily: "\"Helvetica Neue\", helvetica, arial, sans-serif"
    fontSize: 30px
    fontWeight: 500
    lineHeight: 38px
  heading-xl:
    fontFamily: "\"Helvetica Neue\", helvetica, arial, sans-serif"
    fontSize: 44px
    fontWeight: 500
  body:
    fontFamily: "\"Helvetica Neue\", helvetica, arial, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: "\"Helvetica Neue\", helvetica, arial, sans-serif"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 28px
rounded:
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 6px
  s3: 9px
  s4: 10px
  s5: 14px
  s6: 15px
  s7: 20px
  s8: 30px
  s9: 40px
  s10: 50px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 10px 60px 10px 20px
    height: 50px
    borderColor: "{colors.page-body}"
  button-secondary:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 10px 60px 10px 20px
    height: 50px
    borderColor: "{colors.page-body}"
  icon-button:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.primary}"
    typography: "{typography.body}"
    rounded: "{rounded.pill}"
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
    padding: 40px 0px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 10px 20px
    height: 50px
    borderColor: "{colors.primary}"
  footer:
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
---

# British Museum

## Overview

The British Museum website (britishmuseum.org, title "British Museum") is a black, high-contrast site built from a single sans-serif in two weights, square buttons and large photography of the building and the collection. The header is black with the two-line serif "The British Museum" logo at the top left, a top utility row (Shop, Search, Donate) and a main row of links with small round arrow icons (Visit, Exhibitions and events, Collection, Learn, Membership, Support us). On the measured day a green announcement bar (`#6d8d23`) sat under the header with a museum event notice and "Find out more" / "Close" links.

The hero is a full-width image of the Great Court roof with a black overlay box ("Welcome to the British Museum", one line of copy, a white "Plan your visit" button) and round pause, audio-description and caption controls at the bottom right. The rest of the page is a sequence of section headings on black — "Discover two million years of human history and culture", "Be part of history", "Exhibitions and events", "Visit the Museum", "What's online…", "UK and the world", "Explore the collection" — each followed by two-up or three-up grids of `#1d1d1d` cards with an image and grey text. White promotional panels ("Become a Member", "Sign up to our newsletters", "Search Collection online") interrupt the dark flow, and a light grey Shop carousel and a `#1d1d1d` "Connect with us" footer close the page. Exhibition cards carry their own accent colour in the title and a round status badge (gold for "The Bayeux Tapestry", green for "Korea", red for "Multiplied wonders").

## Colors

- **Canvas / page body `#000000`** — the body background, header and most of the page; it covers the largest area.
- **Surface card `#1d1d1d`** — card backgrounds, the newsletter input and the footer band; the most frequent border colour too.
- **Surface light `#e5e5e5`** — the Shop band near the bottom of the page.
- **Primary `#ffffff`** — white headings and nav text, and the fill of the light button and the promotional panels.
- **On-primary `#000000`** — text on white buttons and panels.
- **Ink `#a5a5a5`** — the most-read text colour: card descriptions and supporting copy on black, and the input placeholder.
- **Alert green `#6d8d23`** — the announcement bar.
- **Accent gold `#bf955f`**, **accent red `#ec1616`**, **accent green `#67ad25`** — per-exhibition accents used for titles and round badges on exhibition cards (measured as both text and small background colours). On hover, the Bayeux Tapestry title changed from gold to black.

Other measured border colours are `#f0f0f0`, `#5c5c5c` and `#4a4a4a`. The `:root` variables belong to a date-picker and a carousel library (`--dp-*`, `--swiper-*`), not to the brand.

## Typography

Every character on the desktop page is Helvetica Neue (helvetica, arial fallbacks), self-hosted as three woff2 files and loaded at 400, 500 and 600. The stylesheet also declares a Baskerville face. Weight 500 and 400 split the text almost evenly.

- **Heading XL** — 500, 44px: section titles such as "Discover two million years of human history and culture" and "Be part of history" (measured in the page bands; line-height not measured).
- **Display** — 500, 30px / 38px: the hero box title and card-level headings such as "The Bayeux Tapestry".
- **Body** — 400, 18px / 28px: the most-read size, used for running text and nav.
- **Button** — 500, 18px / 28px.

Other measured sizes: 22px (the second most-read size, card titles and footer column heads), 14px (meta such as exhibition dates) and 60px (18 characters, the largest text measured). No letter-spacing adjustments were measured.

**Substitutes**: Helvetica Neue is a commercial typeface; Inter or Arimo at 400/500 is the nearest freely licensed alternative.

## Layout

On the 1280px desktop viewport the content bands run from x=50 to x=1202, a 50px side margin, with three-column structure detected in the main black band and four columns in the Shop band. Cards sit in two-up grids ("Visit the Museum", "What's online…", "UK and the world") or three-up carousels ("Explore the collection"). Section headings are left-aligned with a "See all →" link right-aligned on the same line. Spacing is generous: paddings of 30px (most frequent), 60px, 50px and 40px, with 20px and 10px for inner spacing. The header measured 151px tall with 40px vertical padding.

## Elevation & Depth

No box-shadows were measured. Depth is tonal — black canvas, `#1d1d1d` cards, white promotional panels, `#e5e5e5` shop band — plus photography. Buttons invert on hover (black to white or white to black) rather than lifting.

## Shapes

Rectangular everywhere except circular controls. The only measured radius is 50% (26 elements): video pause, audio-description and caption toggles, the round arrow icons in navigation, carousel arrows, social icons and the round status badges on exhibition cards. Buttons, cards, panels and inputs are square.

## Components

- **Primary button** — white fill, black 18px/500 label, 1px solid black border, padding 10px 60px 10px 20px, 50px tall, square; a chevron icon (`icon-chevron-black.svg`) sits in the 60px right padding.
- **Secondary button** — the inverse: black fill, white label, white chevron (`icon-chevron-white.svg`) — "Start your search", "Find out more", "Sign up".
- **Hover** — buttons and round controls swap black and white fills and text on hover.
- **Icon button** — 50px circle, black fill, white icon; inverts on hover.
- **Card** — `#1d1d1d` background, image on top, 22px white title, `#a5a5a5` description.
- **Exhibition card** — image band with a 30px title in the exhibition's accent colour, small "Exhibition" label, dates, and a round accent-coloured badge ("Book now", "Open").
- **Promo panel** — white box with a 44px black heading on the left and copy plus a black button on the right.
- **Text input** — `#1d1d1d` fill, 1px solid white border, `#a5a5a5` text, padding 10px 20px, 50px tall.
- **Footer** — columns (Free entry, About us, Visit, Commercial) in white and grey on dark.

## Design System Architecture

No public design system or brand guidelines were found: the press page https://www.britishmuseum.org/about-us/press returned HTTP 403 to the fetch tool, and the home page links to none. The de-facto system is visible in the shipped assets: a Drupal theme directory named `themes/custom/numiko` serving the logo SVG, chevron icon SVGs and hashed woff2 font files from `dist/`. No brand CSS custom properties are declared; the `:root` variables come from third-party date-picker (`--dp-*`) and Swiper (`--swiper-*`) libraries. The working system is therefore: one family in two weights, black/`#1d1d1d`/white surfaces, `#a5a5a5` supporting text, square chevron buttons that invert on hover, circular icon controls and per-exhibition accent colours.

## Do's and Don'ts

**Do**
- Keep the page black with `#1d1d1d` cards and white panels for promotions.
- Use Helvetica Neue (or a close grotesk) at 500 for headings and buttons, 400 for text.
- Make buttons square, 50px tall, with a chevron on the right and inverted hover.
- Give each exhibition one accent colour for its title and badge.
- Use circles only for icon controls and badges.

**Don't**
- Don't round buttons or cards.
- Don't use the exhibition accents as site-wide UI colours.
- Don't set body copy in pure white on cards; the measured reading colour is `#a5a5a5`.
- Don't add shadows.
- Don't treat date-picker or carousel library variables as brand tokens.

## Responsive Behavior

Not measured. The extraction's 390px mobile pass recorded a "Performing security verification" page (system-ui text on white), not the museum's site, so no mobile font sizes, gutters or navigation behaviour are available. Desktop measurements only are described in this file.

## Iteration Guide

1. Start with a black canvas, white headings and `#a5a5a5` supporting text in a single grotesk.
2. Use the measured scale: 44px section titles, 30px hero/card titles, 22px card titles, 18px body, 14px meta.
3. Build cards on `#1d1d1d` with image on top; place them in two-up or three-up grids with 50px page margins.
4. Make actions square chevron buttons (white on dark, black on light), inverting on hover.
5. Use 50% circles for media controls, carousel arrows and status badges.
6. Introduce colour only through an exhibition's own accent.
