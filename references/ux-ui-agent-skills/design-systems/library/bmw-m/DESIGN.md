---
version: alpha
name: BMW M
category: "Automotive"
description: "BMW M international homepage: graphite #262626 canvas with white BMWTypeNextLatin Light 40px headings, BMW blue #1c69d4 square-cornered 50px buttons (hover #0653b6), pale-blue #9ecaff links, and a floating 24px-radius nav bar over offset motorsport photography."

colors:
  canvas: "#262626"
  page-body: "#ffffff"
  ink: "#ffffff"
  primary: "#1c69d4"
  on-primary: "#ffffff"
  surface-raised: "#3c3c3c"
  ink-muted: "#bbbbbb"
  link: "#9ecaff"
  primary-hover: "#0653b6"
  ink-metainfo: "#757575"
  surface-light: "#f8f8f8"
  hairline-light: "#e6e6e6"
typography:
  display:
    fontFamily: "\"BMWTypeNextLatin Light\", Helvetica, Arial, \"Hiragino Kaku Gothic ProN\", \"Hiragino Sans\", Meiryo, sans-serif"
    fontSize: 40px
    fontWeight: 300
    lineHeight: 52px
  display-mobile:
    fontFamily: "\"BMWTypeNextLatin Light\", Helvetica, Arial, \"Hiragino Kaku Gothic ProN\", \"Hiragino Sans\", Meiryo, sans-serif"
    fontSize: 32px
    fontWeight: 300
    lineHeight: 41.6px
  subheading:
    fontFamily: BMWTypeNextLatin, Helvetica, Arial, "Hiragino Kaku Gothic ProN", "Hiragino Sans", Meiryo, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 31.2px
  body:
    fontFamily: BMWTypeNextLatin, Helvetica, Arial, "Hiragino Kaku Gothic ProN", "Hiragino Sans", Meiryo, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
  button:
    fontFamily: BMWTypeNextLatin, Helvetica, Arial, "Hiragino Kaku Gothic ProN", "Hiragino Sans", Meiryo, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 19.2px
rounded:
  lg: 24px
  none: 0px
spacing:
  s1: 4px
  s2: 5px
  s3: 8px
  s4: 12px
  s5: 14px
  s6: 16px
  s7: 18px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 20px
    height: 50px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.page-body}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.page-body}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
    rounded: "{rounded.none}"
    padding: 45px 0px


  button-outline:
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
---

## Overview

BMW M's international homepage (bmw-m.com/en) is the motorsport sibling of the corporate BMW site, and it inverts it: where the main site is white with black model bands, this one is a single dark-graphite canvas, `{colors.canvas}` (#262626), with white type, large imagery in offset collage, and the same BMW blue `{colors.primary}` (#1c69d4) for the one primary button per section. The corners are square (0px) rather than the 3px used on the Thai corporate page.

The capture shows, from the top:

1. **Hero collage.** The headline "THE BMW iX4 M60 xDRIVE." in white, light-weight uppercase at 40px, set on the left of an off-grid arrangement of photographs: a red M car cornering past a concrete wall (cropped, bleeding off the right edge) and a second portrait crop overlapping beneath it. A blue button sits under the headline. At the left edge a short tricolor stripe (blue shades and red, the M livery colors) is visible under the nav.
2. **Floating nav.** A dark rounded bar with a drop shadow, hovering over the hero with the BMW roundel, the red/blue "M" mark, the tagline "The Ultimate Driving Machine", and links: Home, Magazine, Models, M Motorsport, AREA M, Heritage, More (with chevrons) and a search icon. The nav is not attached to the top edge.
3. **Two-up editorial tiles.** Two equal landscape photographs (an M track scene with cars on a start grid; a lime M car in a garage) with a small bold kicker over an uppercase title ("THE 100 JAHRE NÜRBURGRING EDITION.", "YOUR ULTIMATE BMW M EXPERIENCE.").
4. **"BOOK GAMES OF DRIFT."** Text left (40px light uppercase heading, body paragraph, two underlined light-blue links, a blue "Book now" button with an arrow icon and an outlined white "Secure your spectator ticket now" button) and a studio-lit M2 in AREA M livery on a grey backdrop on the right.
5. **"MORE FROM BMW M MAGAZINE."** An uppercase 40px heading, then a photo of three M cars in a tunnel.

The mood is nocturnal and engineered: no white sections, minimal chrome, copy limited to a heading, a paragraph and one or two actions. Uppercase headings are authored as uppercase in the content, with a CSS uppercase transform measured on at least the "BOOK GAMES OF DRIFT." heading.

Voice: short imperative calls ("Book now", "Experience now", "Shop M Lifestyle") and a faintly aspirational headline register ("YOUR ULTIMATE BMW M EXPERIENCE.").

## Colors

All values are measured on the live page or in its shipped `:root` variables.

### Action

- `{colors.primary}` (#1c69d4): the primary button fill (`--site-context-highlight-color`). Used for buttons and the nav item hover state (a hovered nav link turns blue).
- `{colors.primary-hover}` (#0653b6): measured hover of the primary button; also shipped as the focus color.
- `{colors.on-primary}` (#ffffff): label on blue.

### Surfaces

- `{colors.canvas}` (#262626): the page background and footer (by far the largest area on the page).
- `{colors.surface-raised}` (#3c3c3c): a slightly lighter graphite measured on small components.
- `{colors.page-body}` (#ffffff) is used for body text and headings on the dark canvas; `{colors.ink}` carries the same value.
- Light-theme values shipped for embedded contexts: `{colors.surface-light}` (#f8f8f8) and `{colors.hairline-light}` (#e6e6e6) (`--site-context-surface-hover` and `--site-context-ui-track`).

### Text

- White `{colors.ink}` (#ffffff) for headlines and body.
- `{colors.ink-muted}` (#bbbbbb) for secondary copy, captions and kickers (about 400 characters on the page).
- `{colors.link}` (#9ecaff) for inline underlined links, a pale blue legible on graphite.
- `{colors.ink-metainfo}` (#757575) is the shipped meta-info grey, used for tertiary text in light contexts.

### Color rules observed

- Only two accents exist at UI level: BMW blue for actions and pale blue for links.
- No gradients; photographic color supplies the saturation (red car, lime car).
- The M stripes (light blue, dark blue, red) appear as a brand mark next to the logo and under the nav, not as UI fills.

## Typography

Two families from the BMW Type Next set are loaded: `BMWTypeNextLatin` (weight 400) and `"BMWTypeNextLatin Light"` (weight 300), with `Helvetica, Arial, "Hiragino Kaku Gothic ProN", "Hiragino Sans", Meiryo, sans-serif` as the fallback chain (note the Japanese fallbacks). A third face, `epaasTextFont`, is also declared. BMW Type Next is proprietary; no public download was found.

| Role | Token | Size / line | Weight |
| --- | --- | --- | --- |
| Hero and section headings | `{typography.display}` | 40px / 52px | 300 (Light family) |
| Hero on mobile (390px) | `{typography.display-mobile}` | 32px / 41.6px | 300 |
| Tile titles | `{typography.subheading}` | 24px / 31.2px | 400 |
| Body | `{typography.body}` | 16px / 25.6px | 400 |
| Button | `{typography.button}` | 16px / 19.2px | 700 |

Other measured facts: sizes of 20px, 18px and 60px also appear; weights in use across the page are 400 (most text), 700, 300 and 900 (the 900 and some 700 usage is a small share of characters).

Principles:
- Headings use the separate Light font file, not a CSS weight on the regular file, so they stay thin even in uppercase.
- Body line height is 1.6 (25.6px on 16px), more open than headings.
- Buttons are the only bold text in the content (700).
- Uppercase for headings and kickers, mixed case for body.

### Font substitutes

Use `Helvetica Neue` / `Arial` for body and a Light cut (for example `Inter` at 300) for headings. Keep the heavy contrast: 300 headings vs 400 body vs 700 buttons.

## Layout

- **Grid.** The shipped variables publish a 12-column grid (`--grid-columns: 12`), a 1600px content max width (`--grid-content-max-width`), 30px side padding on small viewports (`--grid-padding`), 100px on desktop (`--grid-padding-desktop`) and 120px wide (`--grid-padding-wide`), and gaps of 16px (`--grid-gap`) and 24px on desktop (`--grid-gap-desktop`). The measured paddings agree (100px appears 13 times) and 24px is the most common gap.
- **Header offset.** `--header-offset` is 106px, consistent with the floating nav sitting above the content.
- **Left axis.** Headings and copy all start on the same left margin; images are staggered off the grid on the right.
- **Collage.** In the hero, two images overlap with different sizes; below it the two-up tiles are strictly equal widths with a hairline-width gap.
- **Spacing scale.** Measured steps 4, 5, 8, 12, 14, 16, 18, 20, 24 and 32px (`{spacing.s1}` to `{spacing.s10}`); section gaps are much larger (64px and 100px paddings measured).
- **Rhythm.** Heading, paragraph, links, buttons, stacked left; the image occupies the other half.

## Elevation & Depth

Depth exists only on floating UI:

- The floating nav bar region carries the lightest shadow, `rgba(0,0,0,0.3) 0px 1px 5px 0px` (4 occurrences, the most frequent on the page).
- Larger overlays use `rgba(0, 0, 0, 0.5) 0px 4px 25px 0px` and `rgba(0, 0, 0, 0.25) 0px 15px 50px 0px`.
- Content tiles and buttons have no shadow; photographs sit directly on the canvas.
- On a dark canvas the shadows are barely visible, so the floating effect relies on the bar's slightly lighter fill and its rounded corners.

## Shapes

- **Buttons: square.** `{rounded.none}` (0px) on the primary button (50px tall) and the outlined button.
- **24px** (`{rounded.lg}`) is the only other radius measured (on four elements); in the capture the floating nav bar is drawn with rounded corners of this order, though the extractor recorded the nav wrapper itself as square.
- **Photographs: square-cornered**, full to the tile edge.
- The only circles are the BMW roundel and some icon containers.

The contrast between square buttons and the rounded floating bar is the page's single softness.

## Components

### Button, primary

`{components.button-primary}`: `{colors.primary}` fill, white label (`{typography.button}`, 16px / 700), 0px radius, `0px 20px` padding, 50px tall. Hover fills `{colors.primary-hover}`. Buttons may carry a trailing arrow icon ("Book now" with a diagonal arrow). Examples: "Experience now", "Shop M Lifestyle", "Book now".

### Button, outline

`{components.button-outline}`: transparent, white label, a 1px white border (the measured border color is #ffffff), square corners, same height as the primary. Used beside the primary ("Secure your spectator ticket now").

### Navigation

A floating dark bar with a 24px radius and soft shadow; brand block at left (roundel, M mark, tagline "The Ultimate Driving Machine" in two lines), then 50px-tall links in white at 16px; chevrons mark menus; on hover a link takes the BMW blue fill and white text. A search icon sits at the far right. `{components.nav}` records the measured nav wrapper (square, no shadow of its own).

### Text link

White or pale-blue (`{colors.link}`) underlined inline text for secondary actions ("Experience more: what is Games of Drift?", "*Terms and Conditions."). `{components.link}`.

### Editorial tile

Photograph, small bold kicker in white, uppercase 24px title below on the canvas; no border, no card background.

### Footer

`{components.footer}`: `{colors.canvas}` fill, white text, `45px 0px` padding.

## Imagery & Art Direction

- **Subject matter.** Motorsport and performance culture, not showroom: a red M car at speed with motion blur, a track start grid seen from above with cars and a motorbike, a lime M car in a garage, a drift-livery M2 in a studio, three generations of M cars in a tunnel. Cars are the subject, but people appear too (a portrait crop of a face in profile in the hero collage).
- **Light and grade.** Moody, high-contrast, shadow-heavy; blues and teals in the shadows, saturated paint colors (red, lime, violet-and-cyan livery) as the only strong chroma on a graphite page.
- **Motion cues.** Rolling shots, panning blur and wet floors imply speed; stills are rarely static three-quarter showroom angles.
- **Crops.** Images are cropped dramatically and allowed to bleed off the right edge; the hero overlaps two photographs at different scales.
- **Studio exception.** The Games of Drift car is shot on a flat light-grey backdrop, which becomes a light rectangle on the dark page and makes the graphic livery (cyan, magenta, black) the focal point.
- **Brand marks.** The roundel and the three-stripe M mark sit side by side in the nav; the M livery colors (light blue, dark blue, red) appear as a short stripe at the left edge under the nav.
- **No illustration or iconography** beyond a search glyph, small chevrons and a diagonal arrow on buttons.

## Interaction States

Measured on the live page:

- Primary button: fill moves from #1c69d4 to #0653b6; label stays white; height (50px) and radius (0px) do not change.
- Nav links: transparent at rest with white text; on hover the link receives the BMW blue fill (#1c69d4) and keeps white text.
- Inline links are underlined at rest in the pale blue (#9ecaff); hover was not measured.
- Focus is published as `--site-context-focus-color` (#0653b6).
- Disabled is published as `--site-context-disabled-color` (#fff), intended for the light context.

## Microcopy

- Headlines: "THE BMW iX4 M60 xDRIVE.", "BOOK GAMES OF DRIFT.", "MORE FROM BMW M MAGAZINE." - uppercase, ending with a period.
- Kickers: sentence-case bold lines such as "Six Models, Exclusive Features, Unique Details." and "AREA M." set above the tile title.
- Buttons: two to four words, imperative ("Book now", "Experience now", "Shop M Lifestyle"); long secondary labels are acceptable when specific ("Secure your spectator ticket now").
- Footnotes are asterisked inline ("*Terms and Conditions.") and presented as links.
- German proper nouns keep their diacritics (Nürburgring, Jahre), signalling heritage.

## Content Patterns

- **Hero:** headline plus single blue button; imagery collaged beside it.
- **Editorial pair:** two equal tiles, each kicker plus uppercase title; the whole tile is the link.
- **Feature split:** half text, half image, with link, blue button and outlined button stacked in a column.
- **Magazine strip:** heading then a wide photo, followed by article teaser text.
- **Order of actions:** blue first, outline second, text links above the buttons rather than inline with them.

## Accessibility Notes

- White (#ffffff) on the #262626 canvas is a high-contrast pairing for headings and body text.
- Secondary text at #bbbbbb on the same canvas remains legible; avoid going darker than that tone for captions.
- White on the blue button (#1c69d4) is the same pairing the corporate BMW site uses; keep labels at 16px / 700.
- Underlined pale-blue links (#9ecaff) keep a non-color cue (the underline), which should be preserved.
- The site publishes a dedicated focus color (#0653b6), so keyboard focus is meant to be visible; on the dark canvas pair it with a white ring.

## Design System Architecture

No public BMW M design-system site or token package was found (see SOURCES.json). The site ships a small set of CSS custom properties named `--site-context-*`, which describe a theming context (theme color, font color, highlight color, focus color, meta-info color, surface hover, muted surfaces, UI track, disabled color) and a separate set for the grid (`--grid-columns`, `--grid-gap`, `--grid-padding`, `--grid-max-width`, `--header-offset`). The `--site-context-*` defaults are light-theme values (#fff theme color, #262626 font color), and this page applies a dark treatment over them, which suggests a shared BMW component base re-themed per site. The highlight (#1c69d4) and focus (#0653b6) values are the same as on the corporate BMW site.

The type stack is declared once as `--site-context-font` with the `BMWTypeNextLatin` fallback chain, and the Light weight is a separate font family name, not a numeric weight of the same family.

## Do's and Don'ts

Do:
- Keep the whole page on one graphite canvas; let imagery provide color.
- Use one blue button per section and an outlined white button beside it.
- Set headings in the Light font, uppercase, at 40px / 52px.
- Keep buttons rectangular with 0px corners.
- Offset photographs from the grid in hero collages.
- Make nav hover states bold: fill with blue.

Don't:
- Don't use blue for large fields or decorative accents.
- Don't round buttons; reserve 24px radius for floating bars.
- Don't set headings in the regular weight; use the Light family.
- Don't add card backgrounds or borders to editorial tiles.
- Don't introduce a white section; the identity is dark.

## Responsive Behavior

Measured at 390px: the headline drops from 40px / 52px to `{typography.display-mobile}` (32px / 41.6px), staying in the Light weight. The shipped grid variables move from 100px desktop side padding (and 120px wide) to 30px base padding and from a 24px desktop gap to 16px, so padding and gap are the primary compressing levers. Other mobile layout behavior was not measured.

## Iteration Guide

1. Start with `{colors.canvas}` and white text.
2. Write the heading in the Light face, uppercase, 40px / 52px.
3. Add a paragraph in 16px / 25.6px regular, links in `{colors.link}`, then one blue button and one outlined button.
4. Place photography off-grid on the opposite half; no frames.
5. Give only floating elements (nav, overlays) a shadow and 24px corners.
6. Keep buttons 50px tall with 20px horizontal padding.
7. Re-measure on bmw-m.com before changing a token; see `web/data/extracted/bmw-m.json`.
