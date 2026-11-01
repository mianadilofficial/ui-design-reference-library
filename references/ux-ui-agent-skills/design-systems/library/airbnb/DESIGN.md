---
version: alpha
name: Airbnb
category: "E-commerce & Retail"
description: >-
  Airbnb's website is a photo-first marketplace in white with near-black #222222 text and secondary grey #6c6c6c, a Rausch red-pink #ff385c primary reserved for the logo and the search action, one custom typeface (Airbnb Cereal VF, 14px body, 20px 600 headings) and heavily rounded 20px photo cards.
colors:
  canvas: "#ffffff"
  ink: "#222222"
  ink-secondary: "#6c6c6c"
  on-primary: "#ffffff"
  primary: "#ff385c"
  rausch-deep: "#da1249"
  divider: "#ebebeb"
  ink-tertiary: "#8c8c8c"
  success: "#038026"
  error: "#c13515"
  info: "#318cf7"
  surface-placeholder: "#dddddd"
  surface-muted: "#f7f7f7"
  ink-disabled: "#c1c1c1"
  border-on-media: "#ffffff80"
typography:
  display:
    fontFamily: "\"Airbnb Cereal VF\", Circular, -apple-system, \"system-ui\", Roboto, \"Helvetica Neue\", sans-serif"
    fontSize: 20px
    fontWeight: 600
    lineHeight: 24px
    letterSpacing: "-0.18px"
  display-mobile:
    fontFamily: "\"Airbnb Cereal VF\", Circular, -apple-system, \"system-ui\", Roboto, \"Helvetica Neue\", sans-serif"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 24px
    letterSpacing: "-0.18px"
  heading:
    fontFamily: "\"Airbnb Cereal VF\", Circular, -apple-system, \"system-ui\", Roboto, \"Helvetica Neue\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20.02px
  subheading:
    fontFamily: "\"Airbnb Cereal VF\", Circular, -apple-system, \"system-ui\", Roboto, \"Helvetica Neue\", sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 18px
rounded:
  xs: 3px
  sm: 4px
  md: 8px
  lg: 12px
  xl: 14px
  2xl: 20px
  3xl: 32px
  4xl: 50px
  pill: 9999px
spacing:
  s1: 2px
  s2: 2.5px
  s3: 4px
  s4: 5px
  s5: 5.5px
  s6: 6px
  s7: 8px
  s8: 9.5px
  s9: 10px
  s10: 11px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.pill}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.heading}"
    rounded: "{rounded.md}"
  nav:
    textColor: "{colors.ink}"
    padding: 0px 32px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.heading}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
    height: 18px
  card:
    backgroundColor: "{colors.surface-placeholder}"
    textColor: "{colors.ink}"
    rounded: "{rounded.2xl}"
  footer:
    backgroundColor: "{colors.surface-muted}"
    textColor: "{colors.ink}"
    padding: 0px 0px 80px
---

## Overview

Airbnb's logged-out homepage is a deliberately quiet frame around other people's photographs. A white header carries the Rausch-coloured Bélo and wordmark at left, four 3D-illustrated tabs (All, Homes, Experiences, Services) in the centre, and "Become a host" with an avatar menu at right. Under the header a three-part pill search (Where, When, Who) ends in a round Rausch search button. Below it, horizontal rows of square-ish listing cards sit under short place-based titles such as "Available next month in Chiang Mai" and "Popular homes in Opakchong", each with a one-line grey subtitle and a small circular arrow.

Almost nothing on the page is decorated: white background, near-black text, grey metadata, rounded photographs. The brand colour appears only on the logo and on the search button, so the single saturated pink-red point on the page is always the thing that starts a search. The 2025 app redesign introduced 3D icons for the tabs; Airbnb's in-house design team made the UI, 3D elements and illustrations (itsnicethat.com/articles/airbnb-app-redesign-140525).

Key characteristics:
- White canvas with `{colors.ink}` (#222222) as the main text colour and `{colors.primary}` (Rausch) as the primary action colour.
- A grey scale doing most of the work: `{colors.ink-secondary}` for metadata and captions, `{colors.ink-tertiary}`, `{colors.ink-disabled}`, `{colors.divider}`.
- Rausch (`{colors.primary}`) as the rare, high-signal primary: logo and search button.
- A single custom typeface, Airbnb Cereal VF, with only 400 to 600 weights visible on the homepage.
- Large radii: 20px listing cards, 32px and 50px containers, pill search, circular icon buttons.
- Photography carries every listing; cards have no borders and only a placeholder fill before images load.
- A very large published token layer (400 custom properties): `--palette-*`, `--corner-radius-*`, `--elevation-*`, `--spacing-*`, `--typography-*`, `--motion-*`.

## Colors

All values are measured (frequency analysis and live root properties). Semantic names in parentheses are Airbnb's own custom properties.

### Brand
- **Primary / Rausch** (`{colors.primary}`; `--palette-rausch`, `--palette-bg-primary-core`, `--palette-logo-brand`): `#ff385c`, the logo colour and the fill of the round search button (an icon-only control the extractor skipped; the value is measured in the root properties). It is the primary action colour.
- **On-primary** (`{colors.on-primary}`; `--palette-text-on-brand`): white, the search glyph on Rausch.
- **Rausch deep** (`{colors.rausch-deep}`; `--palette-rausch700`, `--palette-bg-tertiary-core`, `--palette-text-brand`): `#da1249`, brand text, pressed and brand border states, and a background area measured on the page.
- A product Rausch (`#e00b41`), Plus (`#92174d`) and Luxe (`#222222`) palettes are also in the root; they are not used on the homepage.

### Neutrals and ink
- **Ink** (`{colors.ink}`; `--palette-text-primary`, `--palette-grey1000`, Hof): `#222222`, headings, row titles, listing titles, nav text and dark controls. It is among the page's most-read text colours.
- **Ink secondary** (`{colors.ink-secondary}`; `--palette-bg-scrollbar-handle-active`, `--palette-icon-secondary`): `#6c6c6c`, the most-read text colour by character count: listing metadata ("฿12,282 for 2 nights", ratings) and subtitles.
- **Ink tertiary** (`{colors.ink-tertiary}`; `--palette-text-tertiary`, `--palette-text-placeholder`): `#8c8c8c`, placeholders ("Search destinations").
- **Ink disabled** (`{colors.ink-disabled}`; `--palette-text-primary-disabled`): `#c1c1c1`.

### Surfaces and lines
- **Canvas** (`{colors.canvas}`): white.
- **Surface muted** (`{colors.surface-muted}`; `--palette-grey100`, `--palette-bg-secondary`): `#f7f7f7`, the footer.
- **Surface placeholder** (`{colors.surface-placeholder}`; `--palette-grey400`): `#dddddd`, the fill behind listing images before they load, and the standard secondary border.
- **Divider** (`{colors.divider}`; `--palette-bg-divider`): `#ebebeb`.
- **Border on media** (`{colors.border-on-media}`): `#ffffff80`, a translucent white edge for elements over photographs.

### Status
- **Success** (`{colors.success}`; `--palette-status-success`): `#038026`.
- **Error** (`{colors.error}`; `--palette-icon-error`, `--palette-border-secondary-error`): `#c13515`.
- **Info** (`{colors.info}`; `--palette-border-input-line-active`, `--palette-icon-info`): `#318cf7`, focus line on inputs.
- Invalid fields use `#d7251c`; warnings `#eb6100`; these are in the root but not tokenised.

### Usage rules
- Never use Rausch for decoration, headings or large fills.
- Never use Airbnb's Rausch colour or the Bélo in your own brand material: the trademark policy explicitly prohibits featuring Rausch prominently or using the Bélo in any form (airbnb.com/help/article/3233).
- Grey steps are functional (primary, secondary, tertiary, disabled); do not invent intermediate greys.

## Typography

### Family
`"Airbnb Cereal VF", Circular, -apple-system, "system-ui", Roboto, "Helvetica Neue", sans-serif`. The loaded font file is named Airbnb Cereal VF (a variable font); Circular and the platform fonts follow as fallbacks in the stack.

### Hierarchy

| Token | Size | Weight | Line | Tracking | Use |
|---|---|---|---|---|---|
| `{typography.display}` | 20px | 600 | 24px | -0.18px | Row titles ("Available next month in Chiang Mai") |
| `{typography.display-mobile}` | 18px | 600 | 24px | -0.18px | Row titles at 390px |
| `{typography.heading}` | 14px | 400 | 20.02px | normal | Body copy and links |
| `{typography.subheading}` | 14px | 500 | 18px | normal | Labels, input text, footer headings ("Support") |

Other measured sizes include 11px, 12px, 13px, 21px, 22px (with -0.44px tracking) and 28px, used for captions, price lines, tab labels and larger numerals.

### Principles
- The homepage's largest text is 20px; hierarchy is built with weight (400, 500, 600, 700 appear) and colour (primary vs. grey), not size.
- Row titles pair with a lighter grey subtitle under them ("Temple city in northern Thailand").
- Tracking is slightly negative only on titles.
- Listing metadata is small, 12px to 14px, in grey, separated with a middle dot ("for 2 nights · [U+2605] 4.92").
- Sentence case throughout.

### Font substitutes
Cereal is proprietary. Use Inter, DM Sans or Circular-like geometric sans with 400/500/600 weights, 14px body and 20px titles.

## Layout

### Spacing
Extracted scale: `{spacing.s1}` 2px, `{spacing.s2}` 2.5px, `{spacing.s3}` 4px, `{spacing.s4}` 5px, `{spacing.s5}` 5.5px, `{spacing.s6}` 6px, `{spacing.s7}` 8px, `{spacing.s8}` 9.5px, `{spacing.s9}` 10px, `{spacing.s10}` 11px. The odd half-pixel values come from icon-and-text alignment. The published scale is `--spacing-micro2px`, `-micro4px`, `-micro8px`, `-micro16px`, `-micro24px`, `-micro32px`, then `--spacing-macro16px` to `-macro80px`. Gaps measured: 2px, 8px, 10px, 12px, 16px, 35px.

### Grid and container
- Header: 80px tall, 32px horizontal padding.
- Content: rows of six equal cards at 1280px, edge to edge with a small side margin; a scroller arrow appears at row ends.
- Cards are square-ish (image roughly 1:1 on top, two text lines below).
- Footer: `{colors.surface-muted}`, 673px tall in the measurement, with 80px bottom padding.

### Whitespace
- Very little decoration; section spacing comes from title blocks and 16px to 32px gaps.
- The capture shows a short page (rows load lazily), leaving white below; this is a capture artefact, not a layout choice.

## Elevation & Depth

Airbnb's elevation tokens are named `--elevation-elevation0` to `-elevation4`:
- Elevation 0: a 1px inset `#DDDDDD` ring (no shadow).
- Elevation 1: a faint 1px ring plus `0px 2px 4px` at 16% black.
- Elevation 2: faint ring + `0px 2px 6px` at 4% black + `0px 4px 8px` at 10% (matches the first measured shadow on the page).
- Elevation 3: faint ring + `0px 8px 24px` at 10% black (matches the second measured shadow on the page).
- Also `--elevation-tertiary-box-shadow: 0 2px 4px rgba(0,0,0,0.18)`.
Material backgrounds for translucent surfaces: extra-thin `rgba(218,218,218,0.40)`, regular `rgba(250,250,250,0.72)`, thick `rgba(240,240,240,0.86)`, extra-thick `rgba(255,255,255,0.925)`.
"Edge effects" tokens add inner highlights to brand buttons (`--edge-effects-brand-*`) for a slightly dimensional Rausch button.

## Shapes

Root radius tokens: 4px (`tiny`), 8px (`small`), 12px (`medium`), 16px (`large`), 24px and 28px (`xxlarge`), 32px (`xxxlarge`).
- `{rounded.xs}` 3px, `{rounded.sm}` 4px: small tags.
- `{rounded.md}` 8px: link hover areas and small controls.
- `{rounded.lg}` 12px and `{rounded.xl}` 14px: smaller image tiles and buttons.
- `{rounded.2xl}` 20px: listing cards (`{components.card}`).
- `{rounded.3xl}` 32px and `{rounded.4xl}` 50px: the search container and large panels.
- `{rounded.pill}` 9999px and 50%: round buttons, "Guest favorite" labels, avatar.

## Components

### Search
A three-segment pill: Where (Search destinations), When (Add dates), Who (Add guests), with tiny bold labels above grey placeholder text, 1px dividers between segments, and a round Rausch search button at the right with a white magnifier. The bar carries the elevation-2 shadow.

### Cards
- **card**: `{colors.surface-placeholder}` background (visible while images load), `{colors.ink}` text, `{rounded.2xl}`, no border, 181px tall in the measured sample. In the capture it is a photo with a white pill label "Guest favorite" top-left and a translucent circle with a white-outlined heart top-right.
- Text under the image: title (Home in Amphoe Mueang Chiang Mai) in `{typography.subheading}`, then price and rating in `{colors.ink-secondary}`.

### Links and row headers
- **link**: `{colors.ink}`, `{typography.heading}`, `{rounded.md}`, 48px high in the measurement, used for the row title block with an adjacent circular arrow.

### Navigation
- **nav**: 80px header, padding 0px 32px.
- **nav-link**: `{colors.primary}` as measured on the first link (the logo link); the central tabs use dark text. Tabs pair a small 3D icon (globe, house, balloon, bell) with a 14px label.
- Right cluster: "Become a host" text link, an avatar button with a user icon, and a menu button (both grey circles).

### Inputs
- **text-input**: `{colors.ink}`, `{typography.subheading}`, 18px text height inside the search segments; focus lines use `{colors.info}`.

### Footer
- **footer**: `{colors.surface-muted}`, `{colors.ink}`, padding 0px 0px 80px; starting with a Support column (Help Center, Get help with a safety issue).

### Signature components
- 3D animated tab icons (2025 redesign).
- "Guest favorite" pill.
- Heart wishlist button on media.
- Horizontal listing rows with circular arrow affordance.

## Design System Architecture

Airbnb does not publish a public design system site that was found in this research; community sources describe the legacy Design Language System but are not cited. See `SOURCES.json`. What the shipped site proves:
- Token naming in the root (400 custom properties): `--palette-*` colour roles (`bg-`, `text-`, `border-`, `icon-`, `logo-`, `status-`) over raw scales (`grey*`, `rausch*`, `beige*`, `blue*`, `green*`, `red*`, `orange*`, `magenta*`, `purple*`), `--corner-radius-*`, `--elevation-*`, `--edge-effects-*`, `--material-backgrounds-*`, `--spacing-micro*`/`--spacing-macro*`, `--typography-*` (for example `--typography-body-text_14_18-font-size`) and `--motion-springs-*` (spring mass, damping, stiffness).
- 2025 app redesign by Airbnb's in-house team, with new 3D iconography: https://www.itsnicethat.com/articles/airbnb-app-redesign-140525.
- Bélo logo by DesignStudio (July 2014): https://www.brandworkz.com/airbnb-rebrand-belo/.
- Trademark and Rausch policy: https://www.airbnb.com/help/article/3233.
- The root also carries `-inverse` palette roles and a beige scale (`--palette-beige*`), so alternate themes are supported by the token layer.

## Do's and Don'ts

### Do
- Keep the page white with `{colors.ink}` text and grey metadata.
- Let photography fill cards edge to edge with a 20px radius.
- Use Rausch only for the search action and the logo.
- Use sentence case, short place-based titles and a grey one-line subtitle.
- Use dividers `{colors.divider}` and the elevation tokens instead of borders on cards.
- Use circular controls (arrow, heart, avatar) at 32px to 40px.
- Keep body at 14px/20px, titles at 20px/24px 600.

### Don't
- Don't use Rausch for large fills, headings or decorative shapes.
- Don't add more than three font weights per screen.
- Don't use thick borders or heavy shadows on cards.
- Don't mix in other typefaces; the system is one family.
- Don't copy Airbnb's logo, Bélo or Rausch for your own brand.
- Don't centre-align listing text; it is left aligned under the image.

## Responsive Behavior

### Breakpoints
Measurements exist at 1280px and 390px. No official breakpoint list was found.

### Mobile
- Row titles drop from 20px to 18px (`{typography.display-mobile}`), line height stays 24px.
- Other roles were not measured on mobile.

### Touch targets
- The search button and avatar are circular controls; individual sizes were not isolated in the measurement.

### Collapsing
- The central tab group and the three-part search are desktop forms; their mobile collapse was not captured.

### Images
- Cards use cover-cropped photos with a fixed aspect and a 20px radius; the placeholder `{colors.surface-placeholder}` shows during load.

## Voice and Microcopy

- Place-led row titles: "Available next month in Chiang Mai", "Popular homes in Opakchong".
- Subtitles describe the place: "Temple city in northern Thailand", "Pak Chong district with mountain views".
- Search labels: "Where / Search destinations", "When / Add dates", "Who / Add guests".
- Listing line: "Home in Amphoe Mueang Chiang Mai", "฿12,282 for 2 nights · [U+2605] 4.92".
- The brand itself is described by its VP of Design as "Fun, alive, and simple" (itsnicethat.com).

## Iteration Guide

1. White canvas, `{colors.ink}` text, grey metadata.
2. Build rows: 20px title, grey subtitle, square cards with 20px radius and a pill label.
3. Use a pill search with a single Rausch round button.
4. Use elevation tokens for the search bar and popovers; nothing else casts a shadow.
5. Use one typeface at 14px, 20px and a few other sizes with weights 400, 500, 600.
6. For new tokens, map to the site's own `--palette-*` names and cite them in `SOURCES.json`.
