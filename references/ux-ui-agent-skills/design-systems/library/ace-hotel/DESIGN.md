---
version: alpha
name: Ace Hotel
category: "Travel & Hospitality"
description: >-
  Ace Hotel's website is a warm, editorial hospitality system: near-black ink #231f20 on white, an orange BOOK NOW button (#ff944c) with square 0px corners, a condensed grotesque display face (Toronto Gothic, 140px light hero down to 28px) paired with Bianco Sans 14px body text, and photography-led carousels on pale grey bands.
colors:
  canvas: "#ffffff"
  surface-band: "#eaeaea"
  ink: "#231f20"
  primary: "#ff944c"
  on-primary: "#24201f"
  surface-olive: "#707951"
  ink-soft: "#212121"
  link-consent: "#1863dc"
  button-primary-border: "#474747"
  card-border: "#f4f4f4"
typography:
  display:
    fontFamily: "\"Toronto Gothic\", \"Toronto Gothic Fallback\""
    fontSize: 140px
    fontWeight: 300
    lineHeight: 133px
    letterSpacing: "-1.4px"
  display-mobile:
    fontFamily: "\"Toronto Gothic\", \"Toronto Gothic Fallback\""
    fontSize: 60px
    fontWeight: 300
    lineHeight: 62px
    letterSpacing: "-0.6px"
  heading:
    fontFamily: "\"Toronto Gothic\", \"Toronto Gothic Fallback\""
    fontSize: 70px
    fontWeight: 400
    lineHeight: 84px
    letterSpacing: "-0.7px"
  subheading:
    fontFamily: "\"Toronto Gothic\", \"Toronto Gothic Fallback\""
    fontSize: 28px
    fontWeight: 500
    lineHeight: 33px
    letterSpacing: "-0.1px"
  body:
    fontFamily: "\"Bianco Sans\", \"Bianco Sans Fallback\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  button:
    fontFamily: "\"Toronto Gothic\", \"Toronto Gothic Fallback\""
    fontSize: 26px
    fontWeight: 400
    lineHeight: 22px
    letterSpacing: 0.52px
    textTransform: uppercase
rounded:
  xs: 2px
  sm: 6px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 16px
  s9: 18px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 59px
    borderColor: "{colors.button-primary-border}"
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 2px 21px 0px
    height: 48px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  text-input:
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 0px 18px 0px 0px
    height: 48px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 20px 26px
    borderColor: "{colors.card-border}"
    boxShadow: rgba(172, 171, 171, 0.3) 0px -1px 10px 0px
  footer:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
---

## Overview

Ace Hotel presents itself as "a collection of international lifestyle hotels" (acehotel.com/about) and the website behaves like a small magazine that happens to sell rooms. The first screen is a full-bleed looping hotel video under a four-word headline, "Welcome to Ace Hotel", set in a very large condensed grotesque. Below it the page settles into a quiet, left-to-right rhythm of centered intro copy, a grey band of location cards, and an offers carousel.

The visual voice is confident and slightly irreverent but never decorative. Almost everything is black ink on white or on photography. The only chromatic note in the UI chrome is a single orange button, BOOK NOW, pinned at the right end of a booking bar that sits above the hero. Everything else that is colourful comes from the photography and from the typographic artwork each property uses for its own logotype (stencil, script, neon-like wordmarks).

Key characteristics:
- Condensed display type (Toronto Gothic) at light and regular weights with slightly negative tracking, used for headings that read like signage.
- A neutral humanist sans (Bianco Sans) at 14px for nearly all running text, with a 21px line height.
- Square corners everywhere in the chrome: buttons, inputs, nav and links all use `{rounded.none}`.
- A persistent horizontal booking bar (Location, Check in, Check out, Guests, Have a code?) with hairline dividers and tiny uppercase labels.
- Pale grey section bands (`{colors.surface-band}`) that separate editorial blocks without needing rules.
- Photography is the decoration; there are no gradients, illustrations or icon sets beyond small chevrons and arrows.

## Colors

The palette is deliberately small. It is measured from the live homepage (see `tokens.sources.json`); values are used verbatim.

### Core
- **Canvas** (`{colors.canvas}`): pure white, the page background and the card background.
- **Ink** (`{colors.ink}`): `#231f20`, a warm near-black used for headings, body copy, the nav and the dark secondary button. It is the most-read text colour on the page.
- **Ink soft** (`{colors.ink-soft}`): `#212121`, a marginally cooler near-black seen in some body text.
- **On-primary** (`{colors.on-primary}`): `#24201f`, text on the orange button. It is almost identical to ink; the button uses dark text, not white.

### Accent
- **Primary** (`{colors.primary}`): `#ff944c`, the orange of BOOK NOW. It is the only saturated colour used on interactive chrome. Keep it to one primary action per view.
- **Button border** (`{colors.button-primary-border}`): `#474747`, a 1px dark-grey outline on the orange button.

### Surfaces
- **Surface band** (`{colors.surface-band}`): `#eaeaea`, the grey band behind the Locations and Offers sections. The capture shows a faint paper-like grain on these bands.
- **Surface olive** (`{colors.surface-olive}`): `#707951`, a muted olive that appears as a large background area elsewhere on the homepage. Treat it as a secondary editorial surface, not a brand colour.
- **Card border** (`{colors.card-border}`): `#f4f4f4`, a barely visible edge on cards.

### Utility
- **Link consent** (`{colors.link-consent}`): `#1863dc`, the blue of the privacy-consent link in the cookie notice. It comes from a third-party consent widget and should not be reused for brand links.

### Usage rules
- White and `{colors.ink}` carry about all of the layout; add colour only through photography.
- Orange is for the booking action only. Do not tint headings, icons or borders orange.
- On photography, text is white. On white and grey, text is `{colors.ink}`.

## Typography

### Font families
- **Toronto Gothic** is the display, heading, subheading and button face. In the capture it renders as a tall, tightly set condensed grotesque; headings look like all-capitals even though the DOM text is mixed case ("Locations").
- **Bianco Sans** is the body, label, input and nav-link face (loaded in 400 and 700). The loaded-fonts list also includes **Tiempos Headline** (500), a Klim Type Foundry serif by Kris Sowersby (klim.co.nz/fonts/tiempos-headline); in the capture it appears in the header's "Locations" selector.
- Each webfont has a named fallback stack (`Toronto Gothic Fallback`, `Bianco Sans Fallback`) generated by the framework to limit layout shift.

### Hierarchy

| Token | Font | Size | Weight | Line height | Tracking | Use |
|---|---|---|---|---|---|---|
| `{typography.display}` | Toronto Gothic | 140px | 300 | 133px | -1.4px | Hero h1 on desktop |
| `{typography.display-mobile}` | Toronto Gothic | 60px | 300 | 62px | -0.6px | Hero h1 at 390px |
| `{typography.heading}` | Toronto Gothic | 70px | 400 | 84px | -0.7px | Section titles ("Locations", "Offers") |
| `{typography.subheading}` | Toronto Gothic | 28px | 500 | 33px | -0.1px | Card titles ("Athens") |
| `{typography.body}` | Bianco Sans | 14px | 400 | 21px | normal | Running text, labels, inputs |
| `{typography.button}` | Toronto Gothic | 26px | 400 | 22px | 0.52px | BOOK NOW |

### Principles
- Display sizes are huge relative to body: the ratio between h1 (140px) and body (14px) is the signature of the page.
- Tracking tightens as size grows (-1.4px at 140px, -0.7px at 70px) and goes positive only for the uppercase button.
- Intro copy is centered in a narrow single column, so the paragraph reads as a poster caption.
- Small uppercase labels (booking bar field names, "VISIT ACE HOTEL ATHENS" links) are set in Bianco Sans with positive tracking and an underline for links.
- Weight contrast is modest: 300 for the hero, 400 for headings and button, 500 for subheads, 700 reserved for bold body.

### Note on font substitutes
Toronto Gothic and Bianco Sans are licensed webfonts. If they are unavailable, substitute a condensed grotesque for display (for example Oswald, Bebas Neue or Barlow Condensed) and a neutral humanist sans for body (Open Sans or Source Sans). Keep the display negative tracking and the 14px/21px body ratio. These are substitutes, not claims about Ace's own choices.

## Layout

### Spacing system
The measured spacing scale is small and mostly even: `{spacing.s1}` 1px, `{spacing.s2}` 2px, `{spacing.s3}` 4px, `{spacing.s4}` 6px, `{spacing.s5}` 8px, `{spacing.s6}` 10px, `{spacing.s7}` 12px, `{spacing.s8}` 16px, `{spacing.s9}` 18px, `{spacing.s10}` 20px. Larger gaps on the page (20px, 21px, 28px, 32px and 40px) are gutters between cards and booking-bar cells.

### Grid and container
- The page is full-bleed for hero media and grey bands, with content inset by a consistent side margin.
- The Locations and Offers sections are horizontally scrolling carousels, with the first card wide (a landscape hotel photo) and following cards narrower and taller, so the row shows a partial card at the right edge to invite scrolling.
- The booking bar spans the full width as five equal-height field cells divided by thin vertical rules, followed by the orange button; it sits in the 61px measured header zone.
- Intro copy sits in a single centered column in the middle of the page.

### Whitespace
- Generous vertical air around the intro paragraph and between bands; sections are separated by background change more than by rules.
- Card text sits tight under its image: title, two-line description, then an underlined link.

## Elevation & Depth

The system is flat. Depth comes from photography and from two shadows measured on the page:
- Card shadow: `rgba(172, 171, 171, 0.3) 0px -1px 10px 0px`, a soft upward glow used on `{components.card}`.
- A second, stronger shadow, `rgba(0, 0, 0, 0.17) 0px 2px 21px 0px`, is also measured on the page; use it only for floating panels, and note that which element carries it was not isolated.

There are no stacked elevations, glassmorphism or blurs in the UI. Floating controls are white circles on photography.

## Shapes

- `{rounded.none}` (0px): buttons, inputs, nav, links, footer. This is the dominant shape and defines the brand's squared-off look.
- `{rounded.xs}` (2px): small inline buttons such as the consent link.
- `{rounded.sm}` (6px): cards and panels such as the cookie notice.
- `{rounded.pill}` (9999px) and 50%: the circular carousel arrows and the video pause control.
- Photos in cards are rectangular and uncropped by radius; aspect ratios vary per card (landscape, tall portrait).

## Components

### Buttons
- **button-primary** (BOOK NOW): `{colors.primary}` background, `{colors.on-primary}` text, `{typography.button}` (Toronto Gothic 26px uppercase, 0.52px tracking), `{rounded.none}`, 59px high, 1px `{colors.button-primary-border}` outline. It is attached to the right end of the booking bar.
- **button-secondary**: `{colors.ink}` background, white text, `{typography.body}`, `{rounded.none}`, 48px high, padding 2px 21px 0px. The "Skip to content" and "This link opens in a new browser tab" accessibility affordances use this look.
- Round icon buttons (carousel arrows, pause/play) are white circles with an arrow or pause glyph in ink.

### Cards
- **card**: white `{colors.canvas}` background, `{rounded.sm}`, 20px 26px padding, `{colors.card-border}` edge, and the soft shadow above.
- Location cards are image-first: the hotel photograph carries a white logotype overlay (each property has its own mark), followed by the city name in `{typography.subheading}`, a short description in body type, and an underlined uppercase link ("Visit Ace Hotel Athens").
- Offer cards are photographic with overlaid white display lettering (for example "Extra credit").

### Inputs and forms
- **text-input**: `{typography.body}`, `{colors.on-primary}` text, `{rounded.none}`, 48px high, 18px right padding. The language select uses a custom dropdown arrow and uppercase, slightly tracked text.
- Booking-bar fields show a tiny uppercase label above the value ("Check in", "October 9, 2026") with a chevron for dropdowns.

### Navigation
- **nav**: a 61px header, white, with the boxed Ace Hotel logo at the far left, a "Locations" dropdown, the booking bar, then BOOK NOW. A language selector (EN, JP, EL, KO, CN) is offered in the header markup.
- **nav-link**: `{typography.body}` in `{colors.on-primary}`.
- **link**: `{colors.ink}` body type with underline for in-card calls to action.

### Footer
- **footer**: `{colors.ink}` text, `{rounded.none}`.

### Signature components
- Full-bleed hero video with a circular pause control and a downward chevron.
- Horizontal booking bar combined with the orange action.
- Locations carousel with per-property logotype overlays.
- Cookie / privacy notice as a white floating card in the lower-left.

## Design System Architecture

No public Ace Hotel design system, token package or brand guideline was found in the research for this file; see `SOURCES.json` for the searches. What the shipped site shows:
- It is a WordPress site: the document exposes `--wp--preset--*` custom properties (colour presets such as vivid-cyan-blue, spacing presets `--wp--preset--spacing--20` to `--80`, font-size presets 13px, 20px, 36px, 42px and shadow presets like `crisp` and `deep`). These are WordPress core defaults and are not used by the visible design; the real styling lives in the theme (the extracted stylesheet path includes `/wp-content/themes/ace-hotel/`).
- Redesign history: Atelier Ace and rehabstudio launched a redesigned Ace Hotel site with separate sites for each property, per the LBB Online news item found in search (the page itself returned 403 and is therefore not cited as a source here).
- Self-description and locations: https://acehotel.com/about/ (Seattle, Palm Springs, New York, Brooklyn, Kyoto, Sydney, Toronto, Athens; Fukuoka coming soon).
- Tiempos Headline foundry page: https://klim.co.nz/fonts/tiempos-headline.
- De-facto system: three type roles (display / body / serif accent), one accent, one neutral ladder, square corners, shadows only on floating items.

## Do's and Don'ts

### Do
- Use Toronto Gothic (or a close condensed substitute) for headings and make them large.
- Keep body copy at `{typography.body}` with the 21px line height.
- Keep the orange `{colors.primary}` for the single booking action.
- Use `{rounded.none}` for buttons and inputs.
- Let photography and per-property logotypes carry colour and personality.
- Use grey `{colors.surface-band}` bands to group editorial sections.
- Write with a warm, plainspoken voice ("We're glad you're here.").

### Don't
- Do not round the booking button or fill it with a gradient.
- Do not use the consent-widget blue `{colors.link-consent}` for brand links.
- Do not set display type in mixed weights larger than 500; the hero is light (300).
- Do not add decorative icons or illustration; the brand uses photography.
- Do not add heavy drop shadows to cards; the card shadow is a soft grey glow.
- Do not centre long paragraphs; centring is only for the short intro.

## Responsive Behavior

### Breakpoints
- Measurements were taken at 1280px desktop and 390px mobile. No official breakpoint list was published; behaviour between these widths was not measured.

### Mobile changes
- The hero h1 drops from 140px to 60px (`{typography.display-mobile}`), line height from 133px to 62px, and tracking from -1.4px to -0.6px.
- Body and button type are unchanged in the measurements taken.

### Touch targets
- Inputs are 48px high and the primary button is 59px, both above common 44px touch minimums.

### Collapsing strategy
- Carousels remain horizontal swipe containers; arrows are round controls overlaid on the edges.
- The booking bar is a desktop pattern; its collapse behaviour at small widths was not captured, so do not infer it.

### Image behavior
- Photos fill cards edge to edge, with the logotype overlay centred or lower-left. The hero video is full width and sits under the header.

## Iteration Guide

1. Start from `{colors.canvas}` and `{colors.ink}`; add `{colors.primary}` only for one action.
2. Set headings in the display face at large sizes with negative tracking; copy the sizes from the table above.
3. Keep body at 14px/21px; add small uppercase labels for utility text.
4. Build sections as image + short title + two-line text + underlined link.
5. Separate sections with `{colors.surface-band}` backgrounds, not borders.
6. Square every corner except circular floating controls.
7. Check against the capture: if a page feels decorated rather than photographic, remove ornament.
8. Before adding a token, measure it on the live site or cite an official source in `SOURCES.json`.

## Voice and Microcopy

- Intro paragraph (verbatim from the capture): "Ace Hotel is a collection of international lifestyle hotels. We're in Seattle, Palm Springs, New York, Brooklyn, Kyoto, Sydney, Toronto and Athens." It ends on "We're glad you're here."
- Section subtitles are one short line set beside the heading: "Embrace the city in spaces built for gathering." and "Available at most Ace Hotels."
- Card descriptions are one or two sentences of place-writing: "East meets West in Japan's culture capital."
- Links are verbs plus a proper noun in capitals: "Visit Ace Hotel Kyoto", "See all offers" with a small arrow.
- Booking labels are plain nouns: Location, Check in, Check out, Guests, Have a code?
- Offer titles are short, punchy and set as artwork on the photo: "Extra credit", "Make it last", "It pays to prepay".
- The consent notice is the only legalistic copy ("We value your privacy") and is visually separated as a floating card.

## Imagery and Art Direction

- Photography is interior and architectural, shot in natural light: poolside terraces with striped loungers, concrete and timber rooms, lobby corners with warm lamps.
- The hero is a candid, human moment (a staff jacket reading "A Friendly Place") rather than a hotel exterior.
- Each hotel gets its own wordmark treatment layered over its photograph; the master logo is a boxed stencil-like "ACE HOTEL" in the header.
- Photos are slightly warm and low-contrast, which harmonises with the near-black ink and the orange accent.
- Offer tiles use typographic collage (repeated and mirrored lettering) over cropped photography.

## Density and Rhythm

- Above the fold the density is high (booking bar, header, hero); everything after it is relaxed.
- One idea per band: intro, locations, offers.
- Carousels show a partial next item so the page always looks continuable.
- Text blocks are short; no card carries more than a heading, two lines and a link.
