---
version: alpha
name: "Lucid Motors"
category: "Automotive"
description: "Lucid Motors (lucidmotors.com): Lucid Serif VF display at 72px over Lucid Sans VF small caps labels with 2px tracking, near-black canvas #0f0f0f, white 4px-radius buttons, champagne gold #d7be96 accent, full-bleed automotive photography."
colors:
  canvas: "#0f0f0f"
  ink: "#7f7f7f"
  primary: "#ffffff"
  on-primary: "#000000"
  surface-2: "#f0f0f0"
  ink-3: "#323232"
  ink-5: "#d7be96"
  hairline: "#4d4d4d"
typography:
  display:
    fontFamily: "\"Lucid Serif VF\", Georgia, Georgia, Times, \"Times New Roman\", serif, \"Apple Color Emoji\", \"Segoe UI Emoji\""
    fontSize: 72px
    fontWeight: 400
    lineHeight: 80px
    letterSpacing: "-0.5px"
  display-mobile:
    fontFamily: "\"Lucid Serif VF\", Georgia, Georgia, Times, \"Times New Roman\", serif, \"Apple Color Emoji\", \"Segoe UI Emoji\""
    fontSize: 40px
    fontWeight: 400
    lineHeight: 48px
  subheading:
    fontFamily: "\"Lucid Sans VF\", \"IBM Plex Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Helvetica, Roboto, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\""
    fontSize: 24px
    fontWeight: 400
    lineHeight: 36px
  body:
    fontFamily: "\"Lucid Sans VF\", \"IBM Plex Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Helvetica, Roboto, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\""
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  button:
    fontFamily: "\"Lucid Sans VF\", \"IBM Plex Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Helvetica, Roboto, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\""
    fontSize: 12px
    fontWeight: 500
    lineHeight: 16px
    letterSpacing: 2px
    textTransform: uppercase
  nav:
    fontFamily: "\"Lucid Sans VF\", \"IBM Plex Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Helvetica, Roboto, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 3px
  sm: 4px
  md: 8px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 11px
  s6: 12px
  s7: 16px
  s8: 24px
  s9: 32px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 12px
    height: 48px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 12px
    height: 48px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.subheading}"
  nav:
    textColor: "{colors.on-primary}"
  nav-link:
    backgroundColor: "{colors.ink-5}"
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.sm}"
    padding: 11px 8px
    height: 48px
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.on-primary}"
---

## Overview

The Lucid Motors home page (title "Home | Lucid Motors") is a cinematic, model-led showroom. The capture shows a sticky champagne-gold announcement bar with the text "Lucid Gravity Touring: Lease from $749/mo for 36 months* + $1K Accessories Package Credit** + $3.5K Discount for 1st-Time EV Buyers***. View Offers", which overlaps the header, then a full-bleed hero for Lucid Gravity (an SUV photographed with a family at a coastal driveway), a second full-bleed hero for Lucid Air, a rounded dark panel announcing "Lucid Gravity GT-S" ("Unleash the fury of 1,070 horsepower with room for up to seven people. Compromise Nothing."), and a closing "Keep exploring" heading with a row of tiles.

Each hero follows the same recipe: a large serif model name set at the lower left over the photograph, one sentence of supporting copy ("Go further than ever, faster than you thought possible, with space reimagined for up to seven. Compromise Nothing." / "Supercar speed. Relentless range. Next-level luxury at every turn."), and a data strip of three facts (lease price per month, "2 Years Free" scheduled maintenance, "280,000+" public chargers in North America), each with a tiny letter-spaced uppercase label and a footnote number, followed by two buttons: a white VIEW INVENTORY or EXPLORE and a translucent BUILD & ORDER. The page is 6521px tall at 1280px.

The tone is quiet and premium. The photographs are daylight, natural, and populated, and the interface withdraws to small type.

Microcopy favours confident, short claims and numbers: lease prices, years of maintenance, charger counts, horsepower. Footnote markers (superscript numbers and asterisks) follow most figures, which keeps the headline figures clean while the conditions sit in the footnotes. Calls to action name concrete tasks (view inventory, build and order, explore) and never use exclamation marks.

## Colors

The page canvas is a near-black, #0f0f0f (area 3889). Other backgrounds: a translucent black #00000033 (2048, the gradient and scrim layer over photographs), light grey #f0f0f0 (2010, the footer), pure black #000000 (600), a dark grey #323232 (446, hairlines and panels), white (435) and the gold #d7be96 (94, the announcement bar). The translucent #0000003d (26) fills the BUILD & ORDER buttons.

Text: the most-read color is a mid-grey #7f7f7f (6070 characters), then white (1139), #323232 (817), black (310, on the gold bar and the white buttons) and the gold #d7be96 (43). The only border color measured is #4d4d4d. The stylesheet publishes named colors that confirm the palette: --color-primary-colors-gold #d7be96, --border-brand-gold #d7be96, --greyscale-colors-off-black #101010, --border-neutral-gray-70 #323232, --color-sand #e1e0dc, --color-satin-linen #e5e1cf, --color-off-white #f9f9f9, --color-broken-white #f2f2f2, --color-grey #787878, --color-grey-dark #555354, --color-brown #c2b299 and --color-error-red #eb5858.

- Canvas #0f0f0f; surface-2 #f0f0f0; ink-3 #323232.
- Ink #7f7f7f; primary #ffffff with on-primary #000000.
- Gold ink-5 #d7be96; hairline #4d4d4d.

## Typography

Three Lucid faces are loaded: Lucid Sans VF (8263 characters), Lucid Serif VF (111) and Lucid Serif Italic VF (5), plus GT America at 400. The fallback stack names IBM Plex Sans for sans and Georgia for serif; the stylesheet also defines --font-lucid-ibm-plex-sans and --font-lucid-amiri variables.

Display type is Lucid Serif VF at 72px on 80px, weight 400, with -0.5px tracking ("Lucid Gravity" on the hero); the mobile equivalent is 40px on 48px. Subheadings are Lucid Sans 24px on 36px, and nav and input text are 16px on 24px. Body copy is 12px on 18px at weight 400 (12px accounts for 6294 characters), and button and data-strip labels are 12px at weight 500 with 2px tracking, uppercase, on a 16px line-height. The body element itself measured 12px at 500 with 2px tracking, uppercase, as the root style. Other sizes: 20px, 14px, 18px, 32px, 48px and 10px. Weights: 400 (7995), 500 (320), 700 (64).

The pairing of a large serif with tiny, widely tracked sans capitals is the signature.

## Layout

Sections are full-bleed photographs with text anchored at the lower left. Content margins are declared in :root: --spacing-regular-horizontal 250px, -wide 174px, -widest 98px, -narrow 25px, and vertical section spacing --spacing-section-regular 90px, -narrow 25px and -narrower 20px, with spacing sizes such as --space-size-32 and --space-size-96. The data strip is a row of three columns separated by thin vertical rules, with buttons right-aligned. The GT-S panel is an inset rounded card with 30px-scale margins in the capture. Measured spacing values: 2px, 4px, 6px, 8px, 11px, 12px, 16px, 24px, 32px and 40px. Buttons are 48px tall with 12px padding; inputs are 48px tall.

## Elevation & Depth

No shadows were measured. Depth is created by gradient scrims (#00000033) that darken the lower part of photographs so text reads, by translucent buttons, and by the contrast of the dark #0f0f0f ground against light footers. The announcement bar is a flat gold strip.

## Shapes

Radii: 4px on buttons, inputs and panels (the stylesheet's --border-radius-regular is 4px), 3px and 8px on small elements, and 50% on circular controls. Photographs are rectangular edge to edge, while the GT-S panel in the capture has softly rounded corners.

## Components

- **Button primary**: white fill, black text, Lucid Sans 12px at weight 500, uppercase, 2px tracking, 4px radius, 48px tall, 12px padding (VIEW INVENTORY, EXPLORE).
- **Button secondary (ghost)**: translucent black fill #0000003d, white text and 1px white border; on hover it changes to rgba(226, 226, 226, 0.8) fill with black text (BUILD & ORDER).
- **Link**: white text at the 24px subheading style.
- **Nav link**: 16px text; the gold bar uses black text with an underlined "View Offers".
- **Text input**: 48px tall, 4px radius, #4d4d4d border, white text, padding 11px 8px.
- **Data strip**: tiny uppercase label, 24px figure with a superscript footnote, and a 12px caption.
- **Footer**: #f0f0f0 background with black text.

## Design System Architecture

No public Lucid design system or brand guideline was found on the pages opened. The stylesheet publishes a rich set of named variables in :root: colors (--color-primary-colors-gold, --color-sand, --color-off-white), borders (--border-neutral-gray-70, --border-brand-gold), spacing (--spacing-section-regular 90px, --spacing-regular-horizontal 250px, --space-size-32, --space-size-96), font variables (--font-lucid-ibm-plex-sans, --font-lucid-amiri) and a theme variable (--theme-dark-background) that points to --color-black. This is a token system shipped in the page CSS, though not documented publicly. Source page: https://lucidmotors.com/.

## Do's and Don'ts

- Do set model names in Lucid Serif at 72px and everything else in Lucid Sans.
- Do use tiny, 2px-tracked uppercase labels for data and buttons.
- Do use white primary buttons with black text and ghost buttons with white borders over photography.
- Do reserve gold #d7be96 for the promotional bar and fine accents.
- Don't add shadows; none are measured.
- Don't round buttons beyond 4px.
- Don't set body copy larger than the page's 12px unless it is a subheading.

## Responsive Behavior

The 390px mobile pass measured: hero headline and h2 at 40px on 48px in Lucid Serif VF with weight 400; body text at 10px on 14px; the button label at 10px on 12px at weight 500 with 1px tracking on a white fill; and navigation text at 16px on 24px. The mobile nav text begins with the promotional line "Lucid Gravity Touring: Lease from $749/mo for 36 months*". Column counts, image crops and breakpoints were not measured.

## Iteration Guide

1. Start from #0f0f0f, white and the grey #7f7f7f text; add gold #d7be96 only for the promotional bar.
2. Set model names in Lucid Serif 72px and labels in Lucid Sans 12px, 2px tracked uppercase.
3. Make white 48px buttons with 4px radius plus ghost buttons over photographs.
4. Anchor text to the lower left of full-bleed daylight photographs with a three-fact data strip.
5. Verify: node web/scripts/verify-designs.mjs --slug=lucid-motors.
