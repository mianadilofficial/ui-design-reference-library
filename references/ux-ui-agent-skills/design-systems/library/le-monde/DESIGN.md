---
version: alpha
name: Le Monde
category: "News & Publishing"
description: 'Le Monde French news home page measured live: white #ffffff canvas, slate #2a303c text, near-black #181a1e masthead, a yellow #ffc700 S''abonner button with 3px radius, The Antiqua B serif headlines and Marr Sans text.'
colors:
  canvas: '#ffffff'
  ink: '#2a303c'
  primary: '#ffc700'
  on-primary: '#140f00'
  surface-masthead: '#181a1e'
  ink-muted: '#565e70'
  ink-on-dark: '#f5f6f8'
  ink-5: '#464f5f'
  ink-6: '#d7d8d9'
  hairline: '#00000033'
  link: '#000a15'
  primary-hover: '#eab002'
  nav-text: '#d5d8dc'
typography:
  display:
    fontFamily: '"The Antiqua B ExtraBold", "The Antiqua B ExtraBold Fallback", Georgia, "Times Roman", serif, serif'
    fontSize: 24px
    fontWeight: 700
    lineHeight: 28px
  display-mobile:
    fontFamily: '"The Antiqua B Bold", "The Antiqua B Bold Fallback", Georgia, "Times Roman", serif, serif'
    fontSize: 20px
    fontWeight: 700
    lineHeight: 24px
  subheading:
    fontFamily: '"The Antiqua B Bold", "The Antiqua B Bold Fallback", Georgia, "Times Roman", serif, serif'
    fontSize: 15px
    fontWeight: 700
    lineHeight: 20px
  body:
    fontFamily: '"Marr Sans", "Marr Sans Fallback", Roboto, sans-serif, sans-serif'
    fontSize: 15px
    fontWeight: 400
    lineHeight: 21px
  button:
    fontFamily: '"Marr Sans Medium", "Marr Sans Medium Fallback", Roboto, sans-serif, sans-serif'
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
  nav:
    fontFamily: '"Marr Sans Medium", "Marr Sans Medium Fallback", Roboto, sans-serif, sans-serif'
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16px
  link:
    fontFamily: '"Marr Sans Condensed", "Marr Sans Condensed Fallback", DINCondensed-Bold, "Roboto Condensed", sans-serif, sans-serif'
    fontSize: 13px
    fontWeight: 400
    lineHeight: 16px
    textTransform: uppercase
rounded:
  xs: 3px
  sm: 4px
  md: 24px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: '{colors.primary}'
    textColor: '{colors.on-primary}'
    typography: '{typography.button}'
    rounded: '{rounded.xs}'
    padding: 8px 16px
    height: 32px
  button-primary-hover:
    backgroundColor: '{colors.primary-hover}'
  link:
    textColor: '{colors.link}'
    typography: '{typography.link}'
  nav:
    textColor: '{colors.nav-text}'
  nav-link:
    textColor: '{colors.nav-text}'
    typography: '{typography.nav}'
    rounded: '{rounded.xs}'
    padding: 4px
  card:
    textColor: '{colors.ink-muted}'
    rounded: '{rounded.sm}'
    padding: 0px 12px
    borderColor: '{colors.nav-text}'
  footer:
    backgroundColor: '{colors.ink}'
    textColor: '{colors.canvas}'
---

## Overview

Le Monde is the French daily newspaper, and its home page (measured at `https://www.lemonde.fr/`) is a classic editorial front page in a modern, restrained skin. The capture shows a near-black masthead with two small icon-plus-label links on the left ("Le journal", "Services"), the white blackletter-style "Le Monde" wordmark centered, a "FR / EN" language switch, a yellow "S'abonner" button and an account icon on the right. Beneath it is a second dark bar with a "Menu" button, a search icon and section links: Crise des lycées, Budget, International, Planète, Politique, Société, Économie, Idées, Culture, Le Goût du Monde, Sciences, Sport and Pixels. A white strip of five timestamped live headlines follows (for example "05:30 ALERTE") with a "Voir plus" outlined pill.

The editorial body is a two-column layout: a wide main column of serif headlines with gray excerpts and photographs with small credit captions, and a narrow right column with a "DOCUMENT" kicker card and a pale-blue "Nos gestes climat" box that links to a carbon-footprint calculator. Small uppercase condensed kickers (ENQUÊTE, ENTRETIEN, CHRONIQUE) sit above headlines, and a small yellow Le Monde mark precedes subscriber-only headlines. A red "LIVE" tag marks live coverage. Opinion columns carry a round author portrait and a byline ("Par Michel Guerrin", "Rédacteur en chef au « Monde »").

The voice is sober, precise French journalism: long declarative headlines with quotation marks and colons, factual excerpts, and bylines. Ad slots labeled "Publicité" occupy blank bands in the capture; they are not brand UI.

## Colors

All values are from `web/data/extracted/le-monde.json`.

- **Canvas `#ffffff`**: dominant background (area weight 12451).
- **Ink `#2a303c`**: the most-read text color (9811 characters), used for headlines and body. It is also the footer background (`#2a303c`).
- **Surface-masthead `#181a1e`**: the near-black masthead and menu bars (area weight 3542). The site variable `--ds-color-neutral-bg-cta-hover: #0f1116` is a darker neutral.
- **Primary `#ffc700`**: the yellow fill of the "S'abonner" subscribe button, with on-primary text `#140f00`. Hover fill: `#eab002` (token `primary-hover`; measured by hover probe from `rgb(255, 199, 0)` to `rgb(234, 176, 2)`).
- **Ink-muted `#565e70`**: excerpts and secondary text (2599 characters). `#464f5f` (ink-5) and `#d7d8d9` (ink-6) are further text steps.
- **Ink-on-dark `#f5f6f8`**: light text on dark areas (1137 characters), also a light background (area weight 481).
- **Nav text `#d5d8dc`**: link color on the dark masthead.
- **Hairline `#00000033`**: the 16 measured border uses, thin rules between stories.
- **Link `#000a15`**: the link role color on the live ticker.

White text (`#ffffff`) is the second most-read color (3909 characters), used on dark bands. Red and blue accents exist in the site's CSS variables (for example `--ds-color-red-content-light: #a92325`, `--ds-color-sea-content-light: #026b9c`, `--ds-color-blue-bg-light: #e9f3fb`), which matches the red LIVE tag and pale-blue climate box in the capture.

## Typography

Serif headlines and sans text come from custom families. **The Antiqua B** (loaded as variable 100 to 900, plus Bold 700 and ExtraBold 800 files) sets headlines: the h1 role uses The Antiqua B ExtraBold, other headings The Antiqua B Bold (4927 characters). **Marr Sans** (5488 characters, loaded at 400, 500 and 600) sets body, with Medium for buttons and nav, Semibold, and **Marr Sans Condensed Semibold** (5482 characters) for uppercase kickers and the live ticker. Fallbacks are declared: Georgia and Times Roman for the serif; Roboto and DINCondensed-Bold or Roboto Condensed for the sans faces.

| Token | Size / line-height | Weight | Family |
|---|---|---|---|
| `display` | 24px / 28px | 700 | The Antiqua B ExtraBold |
| `display-mobile` | 20px / 24px | 700 | The Antiqua B Bold |
| `subheading` | 15px / 20px | 700 | The Antiqua B Bold |
| `body` | 15px / 21px | 400 | Marr Sans |
| `button` | 16px / 16px | 400 | Marr Sans Medium |
| `nav` | 14px / 16px | 400 | Marr Sans Medium |
| `link` | 13px / 16px, uppercase | 400 | Marr Sans Condensed |

By character count the sizes are 15px (4256), 20px (3174), 18px (2716), 13px (2401), 16px (2185) and 17px (926). Weights: 400 (10556), 700 (6794), 500 (382), 600 (65). Letter-spacing pairs measured include 20px with 0.3px (2723 characters), 17px with 0.2px (926), 16px with 0.38px (371) and 14px with 0.5px (195, the uppercase footer labels). Footer text is uppercase 14px with line-height 17.22px.

## Layout

The page is a vertical stack of the masthead, the menu bar, the live ticker, an ad band and the editorial area; the editorial area is a main column and a narrower right column, as visible in the capture. The full page measured 11299px high on desktop. The site declares `--bp-xxl: 128rem` as a breakpoint and `--content-max-width-ads: 100rem`.

Spacing tokens: 2px, 3px, 4px, 5px, 6px, 8px, 10px, 12px, 16px and 20px. The gap table is distinctive: 24px (196 uses), 4px (157), 16px (128), 8px (95), 12px (67), 6px (34). Padding: 16px (85), 8px (47), 4px (20), 24px (5), 5px (5), 12px (5). CSS space variables use rem: `--space3: 1.2rem`, `--space6: 2.4rem`, `--space12: 4.8rem` and `--space19: 7.6rem`. Density is moderate to high: stories are separated by 1px hairlines rather than by large gaps.

## Elevation & Depth

No box shadows were measured (`boxShadows` is empty). Structure comes from hairline borders (`#00000033`, 16 uses), and the lighter borders `#e8eaee`, `#d5d8dc`, `#a4a9b4` and `#e8eff3` (one or two uses each), plus background tints (`#f5f6f8`, `#e2e4e9`, `#f4f9fb`). The dark masthead and footer bands provide the main contrast layers.

## Shapes

Radii measured: 24px (12 elements), 3px (11), 50% (10) and 4px (2). Tokens: `xs: 3px`, `sm: 4px`, `md: 24px`, `pill: 9999px`. The subscribe button and nav links use 3px; the "Voir plus" outlined pill uses the 24px radius; the author portraits and round icon buttons use 50%. The site declares `--br-xxs: .1rem`. Photos in the capture are square-cornered.

## Components

**Subscribe button (`button-primary`)**: fill `#ffc700`, text `#140f00`, Marr Sans Medium 16px / 16px, radius 3px, padding `8px 16px`, height 32px. Label "S'abonner". Hover: fill `#eab002`.

**Nav link (`nav-link`)**: `#d5d8dc` text, Marr Sans Medium 14px, radius 3px, padding 4px; used in the masthead and the section bar.

**Live ticker link (`link`)**: uppercase condensed 13px, color `#000a15`, 96px tall in the extraction, with a time stamp and a headline.

**Story card (`card`)**: text `#565e70`, 4px radius, padding `0px 12px`, border `#d5d8dc`. Cards are separated by hairlines.

**Footer (`footer`)**: `#2a303c` background, white uppercase text.

**Kickers and tags**: uppercase condensed labels (ENQUÊTE, CHRONIQUE, DOCUMENT) and a red LIVE badge are visible in the capture; they have no separate measured tokens.

## Design System Architecture

Le Monde publishes no public design system page that was opened; the site itself (https://www.lemonde.fr/) is the only source, and its fetch by the WebFetch tool failed (recorded in SOURCES.json). The shipped CSS reveals an internal design system through 358 root custom properties with a `--ds-` prefix. Color tokens follow a pattern `--ds-color-{family}-{role}-{surface}-{strength}` with a `-hover` variant: families include neutral, storm, sea, blue, yellow, red and inverse; roles are `content`, `bg` and `border`; surfaces are `white`, `light`, `medium` and `dark`. Examples: `--ds-color-storm-content-white-dark: #2a303c` (the ink color), `--ds-color-yellow-bg-medium: #fff6d3`, `--ds-color-yellow-bg-dark-hover: #ffd644`, `--ds-color-yellow-content-medium: #4d3a07`, `--ds-color-red-border-white-medium: #c72929`. A parallel set prefixed `--ds-dark-color-...` (for example `--ds-dark-color-blue-content-light: #80bcff`) is declared; whether a dark theme is applied on the home page is not measured. Spacing uses `--space{n}` in rem and radii `--br-*`.

## Do's and Don'ts

Do:
- Use The Antiqua B Bold for headlines and Marr Sans for text.
- Reserve yellow `#ffc700` for the subscription action with `#140f00` text.
- Use hairline `#00000033` rules to separate stories.
- Use uppercase condensed kickers above headlines.
- Keep the masthead near-black `#181a1e` with a white wordmark.

Don't:
- Do not add shadows; none are measured.
- Do not round the subscribe button beyond 3px.
- Do not use yellow for body links; links use `#000a15`.
- Do not use decorative gradients in editorial areas.

## Responsive Behavior

The 390px mobile pass recorded: h1 and h2 at 20px / 24px weight 700 (desktop 24px / 28px), a body-text sample at 20px / 27px with 0.3px letter-spacing, and a header block 113px high. Navigation form, column counts and breakpoints at that width are not measured; the site declares `--bp-xxl: 128rem`.

## Iteration Guide

1. Set `canvas` `#ffffff`, `ink` `#2a303c`, masthead `#181a1e`, `primary` `#ffc700`.
2. Headlines: The Antiqua B Bold 24px / 28px; excerpts Marr Sans 15px / 21px in `#565e70`.
3. Build buttons with 3px radius, padding `8px 16px`, height 32px.
4. Separate stories with `#00000033` hairlines and 24px gaps.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=le-monde --url=https://www.lemonde.fr/ --force --no-motion` before changing any value, then `node web/scripts/verify-designs.mjs --slug=le-monde`.
