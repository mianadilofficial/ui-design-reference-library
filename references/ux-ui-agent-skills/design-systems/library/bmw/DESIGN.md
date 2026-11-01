---
version: alpha
name: BMW
category: "Automotive"
description: "BMW Thailand homepage: white #ffffff and black #000000 bands with cinematic car photography, #262626 ink, one BMW blue #1c69d4 button (52px tall, 3px radius, hover #0653b6), BMW Type Next at weights 300 and 500 with 48px hero and 35px light headings."

colors:
  canvas: "#ffffff"
  ink: "#262626"
  primary: "#1c69d4"
  on-primary: "#ffffff"
  surface-black: "#000000"
  ink-on-dark: "#f2f2f2"
  primary-hover: "#0653b6"
  ink-muted: "#666666"
  hairline: "#e6e6e6"
  surface-soft: "#f6f6f6"
  info-surface: "#dde8f9"
  success: "#3db014"
  warning: "#ffad1f"
  error: "#d20000"
  input-border: "#8e8e8e"
typography:
  display:
    fontFamily: bmwTypeNextWeb, Arial, Helvetica, Roboto, sans-serif
    fontSize: 48px
    fontWeight: 500
    lineHeight: 50px
  display-mobile:
    fontFamily: bmwTypeNextWeb, Arial, Helvetica, Roboto, sans-serif
    fontSize: 35px
    fontWeight: 500
    lineHeight: 37px
  heading:
    fontFamily: bmwTypeNextWeb, Arial, Helvetica, Roboto, sans-serif
    fontSize: 35px
    fontWeight: 300
    lineHeight: 50px
  subheading:
    fontFamily: bmwTypeNextWeb, Arial, Helvetica, Roboto, sans-serif
    fontSize: 23px
    fontWeight: 300
    lineHeight: 36px
  body:
    fontFamily: bmwTypeNextWeb, Arial, Helvetica, Roboto, sans-serif
    fontSize: 12px
    fontWeight: 300
    lineHeight: 18px
  button:
    fontFamily: bmwTypeNextWeb, Arial, Helvetica, Roboto, sans-serif
    fontSize: 15px
    fontWeight: 500
    lineHeight: 24px
rounded:
  xs: 3px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 24px
  s6: 40px
  s7: 96px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 4px 24px
    height: 52px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-outline-dark:
    textColor: "{colors.ink-on-dark}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 4px 24px
    boxShadow: rgb(242, 242, 242) 0px 0px 0px 1px inset
  nav:
    textColor: "{colors.ink}"
    padding: 0px 96px
  footer:
    textColor: "{colors.ink}"


  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
---

## Overview

The measured page is BMW's Thailand homepage (bmw.co.th/th/home.html, the page the main bmw.com URL resolved to for the extractor). It is a premium automotive storefront built from three ingredients: full-bleed, cinematic car photography; large light-weight headlines in the proprietary BMW Type Next face; and a single action color, BMW blue `{colors.primary}` (#1c69d4), used for the primary button and nowhere else at scale. Everything else is neutral: a white canvas `{colors.canvas}` (#ffffff), near-black ink `{colors.ink}` (#262626), and pure black `{colors.surface-black}` (#000000) for the model bands where cars sit on dark.

What the capture shows, top to bottom:

1. **Hero** (about the first 420px of the 960px-wide capture): a dark blue-grey photograph of a BMW iX3 head-on on a misty road, a transparent nav bar over it (roundel at left, links with chevrons, a thin white rule underneath, icon cluster at right for account, basket, favorites and location), the headline "THE BMW iX3" in white, a subline "THE FIRST OF A NEW ERA.", a Thai finance line ("from 35,299 baht per month*"), then two buttons: a filled blue button and an outlined white one.
2. **Legal fine print** directly below the hero in small grey type: energy-consumption and range figures and a long Thai financing footnote. This tiny, dense, legally required text is part of the look.
3. **"Choose your BMW"** (Thai heading, 35px light, centered, on white): four columns, each an outline icon (a person at a steering wheel, a car, a car with a plus, a car with a magnifier), a light caption, and an outlined button with a black 1px border.
4. **A cookie consent dialog** floats across the capture: a white panel with a soft shadow, a headline, three lines of Thai body copy, an outlined button on the left and a filled blue button on the right. It is overlay UI, not a layout section, but it shows the system's dialog and its two button styles together.
5. **Model bands**: full-bleed black or photographic sections, one per model or offer ("ONLY 9,999 BAHT/MONTH*", a 5 Series plug-in hybrid band, a 3 Series Sedan band). Each has a headline in white at lower left, a price line, a blue button and an outlined white button; the car is photographed three-quarter, in real locations (a modern building at dusk, a leafy courtyard).

The design is not trying to decorate. Color, type and photography do the whole job; there are no gradients, patterns or illustrations beyond functional line icons.

Voice: short, confident declaratives in English for hero claims ("THE FIRST OF A NEW ERA."), Thai for everything transactional. Button labels are verbs or nouns of intent (configure and price, special offers, test drive, more).

## Colors

BMW's palette on this page is minimal. Every value is measured from the live page or from its shipped `:root` variables.

### Action and brand

- **BMW blue** `{colors.primary}` (#1c69d4): primary button fill; also the shipped `--cta`, `--link-hover`, `--information` and `--focus-visible-color-highlight` variables.
- **Blue hover** `{colors.primary-hover}` (#0653b6): the measured hover fill of the primary button (and the shipped `--cta-hover`, `--link-active`).
- **On-primary** `{colors.on-primary}` (#ffffff): button label.

### Surfaces

- `{colors.canvas}` (#ffffff): page background and the default `--surface-background-primary`.
- `{colors.surface-soft}` (#f6f6f6): the shipped secondary surface (`--surface-background-secondary`), a very slight cool grey.
- `{colors.surface-black}` (#000000): the dominant dark background by area on the page; model bands and the hero sit on black or photographs.
- `{colors.hairline}` (#e6e6e6): the shipped `--border`, used for dividers.

### Text

- `{colors.ink}` (#262626): body and headline text on white (the shipped `--heading` and `--copy-text`). BMW never sets text on white in pure black.
- `{colors.ink-muted}` (#666666): placeholder, disclaimers and captions (`--disclaimer`, `--neutral`).
- `{colors.ink-on-dark}` (#f2f2f2): text and ring on dark photography; measured as the outline color of the white ghost button on the hero.
- White (#ffffff) is the headline color over photography.

### Status

The stylesheet defines semantic colors with light backgrounds: success `{colors.success}` (#3db014), warning `{colors.warning}` (#ffad1f), error `{colors.error}` (#d20000) and information `{colors.primary}` on `{colors.info-surface}` (#dde8f9). They do not appear on the marketing homepage and are listed for form and notice states.

### Inputs

Input border `{colors.input-border}` (#8e8e8e) rests, darkens to #4d4d4d on hover and focus, and text is `{colors.ink}`; disabled fields go to #f2f2f2 with #8e8e8e text.

### Color rules observed

- Blue appears only on the interactive element that matters most in a band (the first button). Never as a background wash.
- Outlined buttons use ink or white rings, not blue rings.
- The page alternates white, black and photographic bands; there are no mid-tone grey bands.

## Typography

The family is **BMW Type Next** (web build `bmwTypeNextWeb`, loaded at weights 300 and 500, with `Arial, Helvetica, Roboto, sans-serif` as fallbacks), plus an icon font `bmw_next_icons`. It is a proprietary face used throughout BMW's digital properties; it supports Latin and Thai on this page. Public availability: BMW Type Next is proprietary and no public download was found.

### Measured styles

| Role | Token | Size / line | Weight | Example |
| --- | --- | --- | --- | --- |
| Hero headline | `{typography.display}` | 48px / 50px | 500 | "THE BMW iX3" (uppercase as authored) |
| Hero on mobile (390px) | `{typography.display-mobile}` | 35px / 37px | 500 | same line |
| Section heading | `{typography.heading}` | 35px / 50px | 300 | Thai "Choose your BMW." |
| Card/contact heading | `{typography.subheading}` | 23px / 36px | 300 | "Contact us" (Thai) |
| Body / fine print | `{typography.body}` | 12px / 18px | 300 | Legal and disclaimer text |
| Button | `{typography.button}` | 15px / 24px | 500 | All buttons |

Additional measured sizes on the page: 18px, 20px and 28px at lower frequency (secondary headlines and sublines).

### Principles

- **Light weight is the voice.** Section headings are 300, not bold. Hero headlines step up to 500, the heaviest weight loaded.
- **Only two weights ship** (300 and 500). Do not synthesize a bold.
- **Uppercase for model names and hero claims**, authored in the text itself ("THE BMW iX3", "THE FIRST OF A NEW ERA."), not applied through CSS (text-transform is `none` on every measured role).
- **Small text is very small.** Body is 12px at weight 300, and legal copy is even denser; this is deliberate editorial contrast against 35 to 48px headlines.
- Line heights are generous for headlines (about 1.43 at 35px / 50px) and tight on the hero (50px on 48px).

### Font substitutes

Without the licensed face use `Helvetica Neue` or `Arial` for Latin; Thai falls back to the system Thai font (Thonburi on Apple platforms, Noto Sans Thai elsewhere). Keep weights at 300 and 500 only; `Inter` at those weights is the closest open Latin match.

## Layout

- **Page grid.** The shipped CSS defines a full-bleed grid with horizontal margin 5.25rem (84px) in the main container, a larger "full" margin of 6rem (96px), and a gutter of 0.75rem (12px); the measured nav padding is `0px 96px` (`{spacing.s7}`).
- **Alignment.** Headline, subline and buttons all share the left margin of the grid; the capture shows them left-aligned at roughly 72px from the edge at capture scale, with the image bleeding to the right and edges.
- **Spacing scale.** Measured paddings and gaps: 4px, 8px, 12px, 16px, 24px, 40px and 96px (`{spacing.s1}` to `{spacing.s7}`); 12px is the most common padding, 4px the most common gap.
- **Bands.** Each model is a full-width band with the copy block at left and the car right, then a legal footnote line on white below it.
- **Choose-your-BMW row.** Four equal columns, content centered, icon 48px-ish at capture scale, caption and a button underneath.
- **Whitespace.** Between sections on white, the capture shows 80 to 100px at capture scale of empty canvas, giving the heading room.

## Elevation & Depth

BMW is nearly flat. Depth comes from photography, not from shadows.

- No card shadows anywhere on the page.
- The only measured soft shadow is on floating UI (the cookie dialog): `rgba(0,0,0,0.16) 0px 6px 20px 0px, rgba(0,0,0,0.24) 0px 0px 1px 0px`.
- Outlined buttons draw their border as a 1px inset box-shadow: `rgb(242, 242, 242) 0px 0px 0px 1px inset` on dark, `rgb(38, 38, 38) 0px 0px 0px 1px inset` on light. This keeps the 52px height exact without a border adding pixels.
- The nav on the hero is transparent with a hairline rule, so the image extends under it.
- Focus states use a visible ring; the stylesheet publishes focus-visible colors (blue highlight, grey #4d4d4d on inputs, white on dark).

## Shapes

- **Buttons**: `{rounded.xs}` (3px), a barely-there softening of a rectangle, measured on every CTA on the Thai page. (BMW's separate M-sports site uses 0px; see the BMW M file.)
- **Icon containers and roundel**: circular (`50%` measured twice), including the BMW roundel.
- **Cards and photos**: square-cornered; photography runs to the container edge.
- No pills, no large radii, no rounded images.

## Components

### Button, primary

`{components.button-primary}`: `{colors.primary}` fill, white label (`{typography.button}`, 15px / 500), 3px radius, `4px 24px` padding, 52px tall (the shipped `--button-large-height` is 3.25rem). Hover fills `{colors.primary-hover}` (#0653b6) with no other change. Examples: the Thai "configure and price" and "special offers" buttons.

### Button, outline on dark

`{components.button-outline-dark}`: transparent fill over photography, `{colors.ink-on-dark}` label and a 1px inset ring of the same color, 3px radius, same 52px height. Used beside the blue button for "more" and "test drive".

### Button, outline on light

Same geometry with an ink ring (`rgb(38,38,38)` inset) and ink text; used in the four-column Choose-your-BMW row and in the dialog.

### Small button

The stylesheet publishes `--button-small-height` of 2.25rem (36px) for compact contexts such as compare controls.

### Navigation

`{components.nav}`: transparent bar over the hero with `0px 96px` padding, white text, small downward chevrons on menu items, and an icon group at right drawn from the `bmw_next_icons` font. The Thai labels read as Models, Shop, Electric, Customer service and About BMW.

### Text input

`{components.text-input}`: white field, `{colors.ink}` text, 1px `{colors.input-border}` rest border (#8e8e8e) and placeholder `{colors.ink-muted}`; the stylesheet gives disabled #f2f2f2.

### Dialog

A white panel with the soft shadow above, a 35px-style light headline, body copy at the base size, and two buttons side by side: outlined (decline/settings) then filled blue (continue).

### Icon tile

Line-art icons (steering-wheel person, car, car plus, car magnifier) in ink, 1px stroke, no container.

### Footer

`{components.footer}`: ink text token only; the footer was below the captured area and its layout was not measured.

## Imagery & Art Direction

- **Subject**: one vehicle per band, shown whole, three-quarter or head-on, never cropped to detail on the homepage. The hero car faces the viewer, centered right, while copy sits left.
- **Light and grade**: cool, desaturated, slightly cinematic: blue-grey skies, wet or misty tarmac, dusk lighting; the dark bodywork blends toward the black band color so the car emerges from the background.
- **Locations**: real architecture and landscapes (road, modern building facade, leafy courtyard) rather than studio sweeps, which keeps the cars feeling in use.
- **Licence plates** in the iX3 and 5 Series photographs carry placeholder-style plates (for example "M EI 877E").
- **Icons**: functional outline pictograms at about 48px for the four entry points; they are drawn in one stroke weight and ink color, matching the light type weight.
- **Text over image**: white type placed in the empty sky or dark foreground area, never over the vehicle.

## Microcopy

- Hero claims are English even on the Thai site and are set uppercase ("THE FIRST OF A NEW ERA.").
- Prices are given as monthly installments with an asterisk, leading to the fine print below the band.
- Button labels are very short; the second button is always lower in emphasis than the first.
- Section headings are sentences ending in a period, in the same manner as the English "Choose your BMW."

## Design System Architecture

No public BMW design-system site, token package or brand-guideline page was found (see SOURCES.json for the searches; third-party "BMW design system" pages are aggregators and were not used). The system is therefore described from what the site ships.

- **Named CSS variables.** The page declares about 160 custom properties on `:root`, named by role rather than hue: `--cta`, `--cta-hover`, `--cta-disabled`, `--link`, `--link-hover`, `--heading`, `--copy-text`, `--border`, `--input-*`, `--select-*`, `--filtertag-*`, `--navigation-*`, `--success/--warning/--error/--information` with matching `-background` variants, and surface tokens (`--surface-background-primary`, `--surface-background-secondary`).
- **Type tokens in rem.** Type is declared as named steps with size and line height pairs: `--headline-1/2/3`, `--subsection-1/2`, `--body-1` to `--body-4`, `--label-1`, plus stage-specific styles for hero blocks (`--stage-zone-*`, `--stage-model-1`, `--stage-sub-headline`) and component-specific ones (price tag, model spotlight, compare). The default font weight is 300 (`--default-font-weight`) and clickable text is 500 (`--clickable-font-weight`), which is why the weight system has only two values.
- **Component-scoped tokens.** Many variables belong to named components (compare dropdown, model preview, model spotlight, filter tag), indicating a component library with its own tokens layered on global ones.
- **Grid tokens.** `--grid-margin`, `--grid-full`, `--grid-gutter`, `--grid-main-container-width`.
- **Sibling sites share DNA.** The BMW M site ships a different, smaller set of variables (`--site-context-*`, `--grid-*`) with the same blue (#1c69d4) and focus (#0653b6) values, which shows a shared corporate base with per-site themes.

## Do's and Don'ts

Do:
- Keep one blue button per band, then outlined buttons for secondary actions.
- Set headlines in 300 and 500 only; let size and whitespace do the work.
- Use photography full-bleed, with text on the darkest area of the image.
- Draw outlined button borders as inset 1px shadows so heights stay exact.
- Keep corners at 3px for interactive elements on this site.
- Put legal copy directly under the band it applies to, in 12px light grey-ink.

Don't:
- Don't add gradients, patterns or drop shadows to cards.
- Don't use blue for large fills or backgrounds.
- Don't set text on white in pure black; use `{colors.ink}`.
- Don't use bold above 500.
- Don't round buttons into pills.
- Don't place headlines over busy areas of a photograph without a dark region behind them.

## Responsive Behavior

Measured at 390px: the hero headline drops from `{typography.display}` (48px / 50px) to `{typography.display-mobile}` (35px / 37px), both at weight 500. Other breakpoint behavior was not measured. The stylesheet exposes size variants of the button (large 52px, small 36px) and compare controls at 40px, and its grid margins are declared in rem so they scale with the root size. Mobile button layout and grid margin were not measured.

## Iteration Guide

1. Decide the band: white (`{colors.canvas}`), black (`{colors.surface-black}`) or full-bleed photograph.
2. Write the headline at 35 to 48px in 300 or 500, uppercase in the copy itself if it is a model name.
3. Add one `{colors.primary}` button (52px, 3px radius) and, if needed, one outlined button beside it.
4. Place legal text below the band at 12px / 300.
5. Check the dark-on-light vs light-on-dark ring color for outlined buttons.
6. If a new state color is needed, take it from the published variables: success, warning, error, information.
7. Re-measure on the live page before changing any value; sources are in `web/data/extracted/bmw.json` and SOURCES.json.
