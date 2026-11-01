---
version: alpha
name: Aman
category: "Travel & Hospitality"
description: Aman's site is a warm stone canvas (#f3eee7) with charcoal ink (#313131), serif Lyon Text and Lyon Display for headlines and body, tiny letter-spaced WhitneySSm for eyebrows and buttons, square 0px corners everywhere, and a single flat dark Reserve button.

colors:
  canvas: "#f3eee7"
  page-largest: "#ffffff"
  ink: "#313131"
  ink-muted: "#585858"
  ink-black: "#000000"
  primary: "#313131"
  on-primary: "#f3eee7"
  primary-hover: "#625f5f"
  surface-band: "#e6e2db"
  secondary: "#404040"
typography:
  heading:
    fontFamily: "\"Lyon Text Web\", \"Lyon Display Web\", \"Times New Roman\", serif"
    fontSize: 31.08px
    fontWeight: 400
    lineHeight: 45.066px
    letterSpacing: 0.5px
  eyebrow:
    fontFamily: WhitneySSm, "Lyon Display Web", "Times New Roman", serif
    fontSize: 10.108px
    fontWeight: 400
    lineHeight: 14.6566px
    letterSpacing: 2px
    textTransform: uppercase
  body:
    fontFamily: "\"Lyon Display Web\", \"Times New Roman\", serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20.3px
    letterSpacing: 0.8px
  button:
    fontFamily: WhitneySSm, "Lyon Display Web", "Times New Roman", serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20.3px
    letterSpacing: 0.7px
  link:
    fontFamily: WhitneySSm, "Lyon Display Web", "Times New Roman", serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 18.85px
    letterSpacing: 0.42px
  button-secondary:
    fontFamily: WhitneySSm, "Lyon Display Web", "Times New Roman", serif
    fontSize: 12.32px
    fontWeight: 400
    lineHeight: 17.864px
    letterSpacing: 0.7px
rounded:
  none: 0px
spacing:
  s1: 2.8px
  s2: 4px
  s3: 7.39px
  s4: 8.4px
  s5: 10px
  s6: 14px
  s7: 15px
  s8: 20px
  s9: 24.5px
  s10: 28px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 10px 15px
    height: 42px
    borderColor: "{colors.ink}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.secondary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.none}"
    padding: 7.392px 33.264px
    height: 35px
    borderColor: "{colors.secondary}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-muted}"
    rounded: "{rounded.none}"
    padding: 0px 24.5px 28px
---

# Aman

## Overview

Aman is a luxury hotel, resort and residence group, and its home page is quiet to the point of austerity. The
measured page is 5,511px tall at 1,280px wide, and almost all of it is photography on a warm, stone-coloured
canvas (#f3eee7). Type is small and serif, UI chrome is nearly absent, and nothing on the page has a rounded
corner or a drop shadow.

The capture reads top to bottom as:
1. A slim header, 88px tall: hamburger icon and "Menu" on the left, a search icon, the centred AMAN wordmark (a
   spaced-out custom lettering with a macron over the A), and on the right an underlined "English" selector and
   a dark "Reserve" button.
2. A very large edge-to-edge hero image (a blurred skier in snow) with a small uppercase eyebrow "MOUNTAIN
   ESCAPES", the headline "Grand Ski Adventures" and an underlined "Discover more" link.
3. A two-up row: a wide landscape interior (desert view through a picture window, "HOTELS & RESORTS / Explore the
   World of Aman") beside a narrower portrait exterior ("NOW OPEN / Amanvari, Mexico"), each with a short paragraph.
4. "Seasonal Experiences": a heading and paragraph on the left and a horizontally scrolling row of square-ish cards
   (Aman Villas, A Novak Djokovic Programme, a faded City Escapes card cut off at the edge).
5. A white (#ffffff) footer starting with "Get inspired" and a newsletter prompt.

Tone is restrained and declarative: "Uncover new horizons with Aman - from soul-soothing escapes by the coast to
transformational journeys that awaken the spirit - across 36 hotels and resorts in 21 countries." Calls to action
are all the same two words, "Discover more".

Key characteristics:
- Warm stone canvas (#f3eee7) instead of white; white (#ffffff) is reserved for the footer.
- Charcoal ink (#313131) as both text colour and button fill; no accent hue at all.
- Three typefaces: Lyon Text Web, Lyon Display Web (serifs) and WhitneySSm (sans) for small functional text.
- Zero border radius, no measured shadows.
- Photography does all the colour work; the interface is monochrome.
- Generous letter-spacing on small text: 0.42px to 2px.

## Colors

| Token | Value | Role |
|---|---|---|
| canvas | #f3eee7 | Page background, header (nav), button text |
| page-largest | #ffffff | Largest-area background in the DOM walk; the footer |
| surface-band | #e6e2db | Second-largest background area; a deeper stone for bands and tiles |
| ink | #313131 | Most-read text colour; primary button fill |
| ink-muted | #585858 | Paragraph copy, footer text |
| ink-black | #000000 | Rare pure-black text (69 characters) |
| primary | #313131 | Reserve button background |
| on-primary | #f3eee7 | Reserve button text |
| primary-hover | #625f5f | Reserve button on hover |
| secondary | #404040 | Secondary button fill ("Sign Up") |

### Observations
- There is no brand hue. The palette is a stone (warm off-white), a deeper stone (#e6e2db) and a graded set of
  charcoals. This agrees with the brand's own identity
  description: a write-up of the 2016 identity by studio Construct calls the palette "sand, soil and clay" and the
  finishes "dyed uncoated papers, embossed boards and a gold foil print finish"
  (https://bpando.org/2016/02/16/branding-aman/). Gold foil is a print finish; no gold appears in the web measurements.
- Primary and ink are the same colour (#313131). The button is distinguished by being filled, not by hue.
- Hover only lightens the button to #625f5f (the one hover state measured).
- The canvas on screen is #f3eee8 in the capture (JPEG rounding of #f3eee7); #ffffff covers more DOM area because of
  nested containers and the footer, but the viewer sees stone.

## Typography

### Families
- **Lyon Text Web** - used for the heading role (31.08px). Lyon is a serif by Kai Bernau; Lyon Text began as his
  2006 Type + Media graduation project and was reworked by Commercial Type, which added Lyon Display in 2010
  (https://type.today/en/journal/lyon). Display has sharper serifs and higher contrast.
- **Lyon Display Web** - the body font (14px) and the dominant family by character count (1,995 characters). The
  loaded face is weight 300; the CSS declares body at 400.
- **WhitneySSm** - a sans used for eyebrows, buttons and links. Its foundry and exact style were not confirmed from an
  official source, so no claim is made beyond the face name.

### Scale
| Token | Family | Size | Weight | Line height | Tracking |
|---|---|---|---|---|---|
| heading | Lyon Text Web | 31.08px | 400 | 45.066px | 0.5px |
| eyebrow | WhitneySSm | 10.108px | 400 | 14.6566px | 2px, uppercase |
| body | Lyon Display Web | 14px | 400 | 20.3px | 0.8px |
| button | WhitneySSm | 14px | 400 | 20.3px | 0.7px |
| link | WhitneySSm | 13px | 400 | 18.85px | 0.42px |
| button-secondary | WhitneySSm | 12.32px | 400 | 17.864px | 0.7px |

Other measured sizes without a role token: 12.95px (1,259 characters, the second most common), 19.6px and 24.108px
(the card titles and section headings in the capture are of this order).

### Principles
- Everything is small. Body is 14px with 0.8px tracking, which opens the text and gives it a quiet, printed feel.
- Hierarchy comes from family, case and spacing, not weight: all roles are weight 400.
- Eyebrows are tiny, uppercase, widely tracked sans ("MOUNTAIN ESCAPES", "NOW OPEN", "WELLNESS RETREATS").
- Line height is about 1.45 across the board.
- Links and "Discover more" are sans with an underline rule beneath, not coloured text.

### Font substitutes
Lyon and Whitney are commercial. Reasonable open stand-ins: a Garamond-lineage serif such as EB Garamond or Cormorant
Garamond for the Lyon pair, and a humanist sans such as Source Sans 3 for WhitneySSm. The site's own fallback is
`"Times New Roman", serif`.

## Layout

- Page width measured at 1,280px. In the capture the content sits on a gutter of about 18px at the 960px-wide
  screenshot scale, so images run nearly edge to edge. The footer padding is 0px 24.5px 28px; the 24.5px side
  gutter matches the spacing scale.
- The header is 88px tall (`--header-menu-height-lg`), shrinking to 4rem when scrolled (`--header-menu-scrolled`),
  and the booking bar is 70px tall (`--booking-bar-height-lg`).
- Rows alternate: one full-width hero, a 2:1 two-column pair, and a heading column beside a horizontal card rail.
- Captions sit under images with a small gap: eyebrow, title, short paragraph, then an underlined link.
- Spacing scale (measured): 2.8, 4, 7.39, 8.4, 10, 14, 15, 20, 24.5 and 28px.
- Columns are separated by a `--bn-col-gap` of 49px.

## Elevation & Depth

None. No box-shadow was measured on the page and no border radius either. Depth is created by:
- photography with real depth of field and reflections;
- a tone step between the stone canvas (#f3eee7), the deeper stone (#e6e2db) and white (#ffffff);
- the final card in the rail fading toward the canvas to imply more content off-screen.

There are no cards with borders, no overlays on text and no frosted surfaces. Button borders, where present, are
the same colour as the fill.

## Shapes

Only one radius exists: 0px, on buttons, nav, links and footer. Images are rectangular; portrait, landscape and
square crops are mixed to create rhythm. The AMAN wordmark and the thin line icons (hamburger, magnifier) provide the
only curves. The wordmark is a custom lettering inspired, according to its designers, by early alphabets, Futhark
and stone carving, with an A that has no crossbar (https://bpando.org/2016/02/16/branding-aman/).

## Components

### Primary button ("Reserve")
Fill #313131, text #f3eee7, 42px tall, padding 10px 15px, 0px radius, WhitneySSm 14px with 0.7px tracking. On hover
the fill and border change to #625f5f.

### Secondary button ("Sign Up")
Fill #404040, text #f3eee7, 35px tall, padding 7.392px 33.264px, 0px radius, 12.32px WhitneySSm.

### Text link ("Discover more", "English")
13px WhitneySSm, ink #313131, underlined by a thin rule sitting just under the text. No hover colour was measured.

### Navigation
Canvas-coloured (#f3eee7) header, 88px tall, 14px sans for "Menu", "English", with hamburger and search glyphs, the
wordmark centred. No border or shadow beneath it in the capture.

### Content card
Image on top (square, portrait or landscape), then eyebrow, serif title (about 19.6 to 24px), two to four lines of
14px body in #585858, then an underlined link. No card background, border or radius: the card is defined only by the
image and the column.

### Hero
Large media block with an eyebrow, a 31.08px serif headline and an underlined link below, rather than overlaid on the
image.

### Footer
White (#ffffff) background, text #585858, a "Get inspired" newsletter prompt ("To receive updates about exclusive
experiences"), padding 0px 24.5px 28px, height about 1,035px in the measurement.

## Design System Architecture

No public design system, brand-guidelines site or token package from Aman was found. A search returned a third-party
page titled "aman brand guidelines" and a design-token page on shadcn.io; neither is an official Aman source and
neither is used. Description therefore rests on the shipped CSS:

- **Namespaces.** Root variables use an `--ai-` prefix (`--ai-font-size-h1` to `--ai-font-size-h6`, `--ai-font-size-base`,
  `--ai-font-size-s`, `--ai-font-size-xs`, `--ai-font-size-xxs`, `--ai-text-color-muted` pointing at `--color-text-light`,
  `--ai-icon-size` 1.25rem, `--ai-icon-size-lg` 2rem) which in turn reference un-prefixed variables such as
  `--font-size-h1`. This reads as a size-and-colour token layer wrapped by a component layer.
- **Layout variables.** `--header-menu-height-lg` (88px), `--header-menu-scrolled` (4rem), `--header-menu-content-offset`
  (20px), `--booking-bar-height-lg` (70px), `--bn-col-gap` (49px).
- **Font loading.** The CSS contains font-face rules for Lyon, Lyon Display Web, Lyon Text Web, WhitneyBook, SuisseBP,
  Beausite, Calligraph810 and Classic Roman, plus Noto Serif JP and SC for Japanese and Chinese. Only Lyon Display Web
  (300), Lyon Text Web (400) and WhitneySSm (400) were actually rendered on the home page.
- **Brand identity.** The wordmark and original identity were created by the London studio Construct in 2016
  (https://bpando.org/2016/02/16/branding-aman/). This is an identity description, not a published UI system.

Sources: bpando.org's 2016 write-up of the identity, type.today's journal on Lyon, and the site's own CSS.

## Imagery and Voice

- **Subjects.** Interiors with a view outward (a desert through a picture window), architecture reflected in pools,
  a portrait of a named ambassador, and motion footage (the blurred skier). People appear rarely and are never
  posed as models selling a product.
- **Light.** Warm, low sun and dusk blues; the photographs share the stone and clay tones of the canvas, so the
  page reads as one palette even though the interface itself is monochrome.
- **Crops.** Hero is wide and short of the viewport; the pair below is wide plus tall; the rail is near-square.
- **Copy.** Short eyebrow categories (Mountain Escapes, Hotels & Resorts, Now Open, Exclusive Hideaways, Wellness
  Retreats, City Escapes), a one-line title, two to four lines of description, and the same link text every time.
- **Density.** Low. Large gaps separate the rows; the first screen shows one image and one headline.

## Microcopy Patterns

| Slot | Example from the capture | Style |
|---|---|---|
| Eyebrow | MOUNTAIN ESCAPES | uppercase, 10.108px, 2px tracking |
| Title | Grand Ski Adventures | serif, 31.08px |
| Card title | Aman Villas | serif, about 19.6 to 24px |
| Body | Time together is made effortless... | 14px, #585858 |
| Link | Discover more | 13px sans, underlined |
| Header | Menu, English, Reserve | 14px sans |

Sentence case for titles, no exclamation marks, no prices, no urgency language. Facts are stated as numbers in
prose ("36 hotels and resorts in 21 countries").

## Do's and Don'ts

### Do
- Use the stone canvas (#f3eee7) as the page ground and white (#ffffff) only for the footer.
- Keep ink at #313131 and secondary copy at #585858.
- Use zero radius everywhere.
- Set eyebrows in 10.108px uppercase WhitneySSm with 2px tracking.
- Set titles in Lyon Text (31.08px, weight 400) and body in Lyon Display (14px, 0.8px tracking).
- Let photography carry colour, mixing landscape, portrait and square crops.
- Use one repeated call to action wording, "Discover more", with an underline.
- Make the only filled button the Reserve action.

### Don't
- Don't add an accent colour; the system has none.
- Don't round corners, add shadows, or put cards in boxes.
- Don't use bold weights; every measured role is 400.
- Don't place text over the hero image; captions sit beneath.
- Don't use pure black (#000000) for body text.
- Don't tighten the tracking; the airy spacing is part of the voice.

## Responsive Behavior

Only the desktop capture (1,280px) and a mobile font-size sample were available. Mobile text sizes are the same as
desktop for the leading sizes (14px, 12.95px, 13px, 19.6px, 10.108px), so type does not rescale. The CSS exposes
a large and a scrolled header height (`-lg`, 4rem), implying a smaller mobile header. Observed in the capture: the card
rail already clips its last card at the viewport edge, which is the pattern a narrower screen would extend. Further
mobile behaviour was not measured; the stacking of the 2:1 row on small screens is an expectation, not an observation.

## Iteration Guide

1. Set the canvas to #f3eee7, ink to #313131, muted text to #585858.
2. Load Lyon Text, Lyon Display and Whitney (or the substitutes above); set body to 14px / 20.3px with 0.8px tracking.
3. Build the header: menu glyph and label left, centred wordmark, underlined language selector and the dark Reserve button
   right (42px tall, 10px 15px padding, 0px radius).
4. Compose the hero as an image, then eyebrow (10.108px, uppercase, 2px tracking), 31.08px title, underlined link.
5. Add the 2:1 image row and the horizontal card rail, each with eyebrow, title, paragraph and "Discover more".
6. Use #e6e2db for any needed tonal band; finish with a white footer.
7. Check: no radius, no shadow, no accent colour, weight 400 throughout.

When extending, add components by tone (a deeper stone or darker charcoal), not by hue.

## Appendix: measured facts

- Page title: "Aman Resorts, Hotels & Residences - Explore Luxury Destinations"; scroll height 5,511px; 529 visible elements.
- Backgrounds by area: #ffffff (1,324), #e6e2db (1,145), #f3eee7 (225), #404040 (9), #313131 (6).
- Text colours by characters: #313131 (2,542), #585858 (1,512), #000000 (69), #f3eee7 (14).
- Families by characters: Lyon Display Web (1,995), WhitneySSm (1,828), Lyon Text Web (314).
- Sizes by characters: 14px (2,033), 12.95px (1,259), 13px (368), 19.6px (217), 10.108px (146), 31.08px (57),
  24.108px (40), 12.32px (17).
- Border radii: none measured; box shadows: none measured.
- Hover: Reserve button #313131 to #625f5f; no other hover captured.
- The extractor found no h1; "Grand Ski Adventures" is an h2 and "HOTELS & RESORTS" an h3.
