---
version: alpha
name: "Max Mara Jacket Circle"
category: "Fashion & Apparel"
description: "Max Mara Jacket Circle game microsite entry screen, measured live: coral #d45054 field, burgundy #68142b text, cream #ebe1bd note, Libre Baskerville serif with a 78.6666px title and 20px italic body, zero radius and no shadows."
colors:
  canvas: "#d45054"
  page-body: "#fafafa"
  ink: "#ebe1bd"
  primary: "#68142b"
  nav-text: "#2c2e2c"
typography:
  display:
    fontFamily: "\"Libre Baskerville\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16.6667px
  display-mobile:
    fontFamily: "\"Libre Baskerville\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 14.56px
    fontWeight: 400
    lineHeight: 18.7199px
  title:
    fontFamily: "\"Libre Baskerville\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 78.6666px
    fontWeight: 400
  body:
    fontFamily: "\"Libre Baskerville\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
rounded:
  none: 0px
spacing:
  s1: 4px
  s2: 20px
  s3: 40px
components:
  nav:
    textColor: "{colors.nav-text}"
    padding: 0px 40px
---

# Max Mara Jacket Circle

## Overview
The Max Mara Jacket Circle (thejacketcirclegame.maxmara.com) is a browser game microsite from the Italian fashion house Max Mara. The measured entry screen is a single full-viewport scene: a flat coral-red field (#d45054), the small "MaxMara" wordmark centred at the top, a two-line display title "The Max Mara / JACKET CIRCLE" in a large serif (the first line in italic, the second in upright capitals), an italic intro paragraph that reads "Explore the Max Mara Jacket Circle through the Jacket Dictionary: an imaginative language of words that lets every woman craft her own wardrobe, blending design with personality.", an "Explore" call to action, and a small cream note at the bottom: "Turn on audio for an immersive gaming experience."

The page measured 1280px wide and only 800px tall, so this is one screen rather than a scrolling page, and the capture shows no imagery, no photographs and no interface chrome beyond the text. The whole composition is typographic: two colours of text on one background colour, set in Libre Baskerville. That restraint is the identity. The page is about a "Jacket Dictionary", and the design lets words do the work. The extraction recorded a canvas share of about 88 percent for the coral field, meaning the entire visual weight is colour plus type.

Only what was measured on this entry screen is documented. Any later game screens behind the Explore control were not opened or measured.

## Colors
The measured palette has four values.
- `canvas` #d45054 is the coral-red background and the only background colour in the area-weighted measurement.
- `primary` #68142b is a deep burgundy and the most-read text colour (174 characters weight against 49 for the other text colour). It colours the display title and the intro paragraph; it is the nearest thing to an action colour on the screen, so it is mapped to `primary`.
- `ink` #ebe1bd is a pale cream used for the small audio hint at the bottom (the measured h1-role text), which is the second text colour on the page.
- `page-body` #fafafa is the computed body background behind the full-bleed coral field, and `nav-text` #2c2e2c is the colour reported for the header navigation role (the logo area).

Contrast is deliberate and warm: burgundy on coral for headings and body, cream on coral for the small note. No neutral greys, no black and no accent hue were measured.

## Typography
A single family, **Libre Baskerville**, carries all visible text, at weight 400 (the measured weight distribution is 400 only). Its loaded faces are regular 400, italic 400 and bold 700; the site also loads Inter as a variable font from 100 to 900, which the nav role reports for the header area.
- `title` is 78.6666px weight 400, used for the two-line "The Max Mara / JACKET CIRCLE" title.
- `body` is 20px weight 400 with a 30px line height, used for the italic intro paragraph.
- `display` is 12px weight 400 with a 16.6667px line height, the role the extractor recorded for the small cream audio hint.
- `display-mobile` is 14.56px weight 400 with an 18.7199px line height from the mobile pass.
The font stack declared by the site continues after Libre Baskerville with the system stack: -apple-system, system-ui, Segoe UI, Roboto, Helvetica, Arial and sans-serif. Italic is used for the first title line and the intro paragraph; capitals are used for the second title line. The most-used sizes by character weight are 20px (152), 12px (49) and 78.6666px (22).

Font substitutes: Libre Baskerville is an open-source typeface published through Google Fonts, so no proprietary substitute is needed; the declared fallbacks are the system fonts listed above.

## Layout
The layout is a centred single column on a full-viewport surface. From top to bottom: the wordmark at top centre, a large empty margin, the title block, the intro paragraph (three lines at the measured desktop width, centred), the Explore control, and the audio note anchored near the bottom edge. Spacing measurements are sparse: gaps of 4px, 20px and 40px and paddings of 20px and 40px, which form the `spacing` tokens s1 (4px), s2 (20px) and s3 (40px). The header carries 40px horizontal padding.

The root custom properties record a grid system, `--col-numb: 15` and `--grid-val: calc(100/var(--col-numb))`, which defines a 15-column unit grid in the stylesheet; the entry screen itself does not expose that grid visibly. Vertical rhythm is generous: the title block sits roughly in the upper middle of the screen with large empty areas above and below it.

## Elevation & Depth
There is no elevation. The measurement found no box shadows and no borders (`boxShadows` and `borderColors` are both empty). Hierarchy comes only from size, case and italic against the flat colour field. Depth cues such as overlays, cards and layered media were not observed on this screen.

## Shapes
No border radius was measured: `desktop.frequencies.borderRadii` is empty, so every rendered element computes a radius of 0px. The token set records this as `rounded.none` at 0px. The wordmark and the text are the only visible forms, and there are no buttons with a visible container on this screen, so no shape vocabulary beyond square edges is documented.

## Components
Only a navigation role and text styles were measured; no button, card, input or footer component could be extracted on this screen.
- **nav**: the header region with text colour `{colors.nav-text}` and horizontal padding of 40px. It holds the MaxMara wordmark.
- **Title block**: `{typography.title}` in `{colors.primary}`, two lines, the first italic and the second in capitals.
- **Intro paragraph**: `{typography.body}` in italic, `{colors.primary}`, centred.
- **Audio note**: `{typography.display}` in `{colors.ink}` at the bottom of the screen.
- **Explore control**: present in the page text ("Explore") but not measured as a button by the extractor; no fill, radius or padding is recorded, so none is invented here.
Hover states: the extraction recorded no hover transitions (the hover list is empty).

## Design System Architecture
No public design system was found for this microsite, and no search was run; the page opened was https://thejacketcirclegame.maxmara.com/. The de-facto system is minimal: two root custom properties (`--col-numb` and `--grid-val`) for a 15-column grid, one serif family with an Inter companion, and two text colours on one background. Colours are literal values in the stylesheet. The brand it belongs to, Max Mara, has its own corporate site, but no brand guideline from it was opened for this measurement, so only the microsite's own values are documented.

## Do's and Don'ts
Do:
- Keep the screen typographic: coral `{colors.canvas}` background, burgundy `{colors.primary}` text, cream `{colors.ink}` for small notes.
- Set the title in Libre Baskerville with an italic first line and capital second line.
- Keep every corner square (`{rounded.none}`) and avoid shadows.
- Centre the composition and leave large empty margins.

Don't:
- Do not add imagery, gradients or additional accent colours; none were measured.
- Do not substitute a sans-serif for the display title.
- Do not assume styles for game screens beyond the entry screen; they were not measured.

## Responsive Behavior
The mobile pass at 390px measured the following: the intro paragraph is 18.72px with a 27.0399px line height, the small audio note is 14.56px with an 18.7199px line height, the largest title size is 36.4px, and the navigation text is 12.48px with a 14.56px line height. Layout changes beyond these type sizes (stacking, margins, positions of elements) were not measured.

## Iteration Guide
1. Start from a full-viewport `{colors.canvas}` surface and the centred MaxMara wordmark.
2. Set the title with `{typography.title}` and the intro with `{typography.body}` italic, both in `{colors.primary}`.
3. Place the small audio instruction in `{colors.ink}` at the bottom.
4. Keep radii at 0px and add no shadows.
5. If other game screens are needed, measure them first with `node web/scripts/extract-tokens.mjs --slug=max-mara-jacket-circle--game --url=<screen url> --force --no-motion`, then extend this file, and re-run `node web/scripts/verify-designs.mjs --slug=max-mara-jacket-circle`.
