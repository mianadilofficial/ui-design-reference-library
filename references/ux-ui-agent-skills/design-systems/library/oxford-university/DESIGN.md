---
version: alpha
name: "University of Oxford"
category: "Education"
description: "University of Oxford home page measured live: Oxford blue #002147 ground, cyan #26d2ff buttons with #002147 text, Tiempos Headline serif 500 at 51.816px for display and DM Sans 16.248px body, 6px button radius, pill 9999px chips, 4.9px spacing unit, inset-ring shadows instead of drop shadows."
colors:
  canvas: "#002147"
  page-body: "#f2f0f0"
  page-largest: "#e0edf9"
  ink: "#ffffff"
  primary: "#26d2ff"
  on-primary: "#002147"
  ink-link: "#1e3e8a"
  ink-teal: "#15616d"
  outline-blue: "#1d42a6"
  primary-hover: "#0083ff"
  text-input-text: "#61615f"
typography:
  display:
    fontFamily: "\"Tiempos Headline\", sans-serif"
    fontSize: 51.816px
    fontWeight: 500
    lineHeight: 62.1792px
  display-mobile:
    fontFamily: "\"Tiempos Headline\", sans-serif"
    fontSize: 30.5061px
    fontWeight: 500
    lineHeight: 36.6073px
  heading:
    fontFamily: "\"Tiempos Headline\", sans-serif"
    fontSize: 42.478px
    fontWeight: 500
    lineHeight: 50.9736px
  subheading:
    fontFamily: "\"Tiempos Headline\", sans-serif"
    fontSize: 28.728px
    fontWeight: 500
    lineHeight: 34.4736px
  body:
    fontFamily: "\"DM Sans\", Arial"
    fontSize: 16.248px
    fontWeight: 400
    lineHeight: 25.9968px
  button:
    fontFamily: "\"DM Sans\", Arial"
    fontSize: 16.248px
    fontWeight: 500
    lineHeight: 19.4976px
  nav:
    fontFamily: "\"DM Sans\", Arial"
    fontSize: 19.6px
    fontWeight: 400
    lineHeight: 31.36px
  link:
    fontFamily: "\"Tiempos Headline\", sans-serif"
    fontSize: 23.7px
    fontWeight: 500
    lineHeight: 28.44px
rounded:
  xs: 5px
  sm: 6px
  md: 8px
  lg: 9.8px
  pill: 9999px
spacing:
  s1: 4.9px
  s2: 9.8px
  s3: 14.7px
  s4: 19.6px
  s5: 20px
  s6: 24px
  s7: 26.2px
  s8: 29.4px
  s9: 32.8px
  s10: 39.2px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 19.6px
    height: 59px
    boxShadow: rgb(255, 255, 255) 0px 0px 0px 0px inset, rgb(38, 210, 255) 0px 0px 0px 2px inset, rgba(0, 0, 0, 0) 0px 0px 0px 0px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 19.6px
    height: 61px
    boxShadow: rgb(255, 255, 255) 0px 0px 0px 0px inset, rgb(38, 210, 255) 0px 0px 0px 2px inset, rgba(0, 0, 0, 0) 0px 0px 0px 0px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 19.6px
    height: 61px
    borderColor: "{colors.outline-blue}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
---

# University of Oxford

## Overview

The University of Oxford home page at www.ox.ac.uk is built around a single deep navy, Oxford blue `#002147`, which fills the hero, the header and the search band and is the dominant background on the 1280px desktop capture. Against it sits one bright cyan action color, `#26d2ff`, used for the primary buttons ("Read the full news story", "Search", "Submit your UCAS application"). Headlines are set in Tiempos Headline at weight 500, a serif; everything else is DM Sans. The result reads as an institutional, editorial page: serif headings, calm navy ground, one saturated accent, and small yellow date chips (`#f2d25e` appears as a measured background) on news items. In the capture the photographic images did not render (their alt text shows instead), so imagery direction is not documented here beyond the layout of the cards, which have a dark gradient at the bottom carrying a white serif caption.

## Colors

The measured palette is deliberately small. Backgrounds by area are `#e0edf9` (pale sky blue, the largest area), `#002147` (Oxford blue), `#ffffff`, then the accent `#26d2ff`, the chip yellow `#f2d25e`, and `#1d42a6`. The body element itself computes to `#f2f0f0`, a warm light grey, and that is the page-body token. Text colors by character count are `#002147` first, then `#1e3e8a` (link blue used on light areas, renamed `ink-link`), `#ffffff` (the text on navy), `#15616d` (a deep teal, renamed `ink-teal`), `#e0edf9` and `#1d42a6`. The primary button fill is `#26d2ff` with `#002147` text; on hover it measured `#0083ff` (token `primary-hover`). Outlined controls such as "View all news" use a `#1d42a6` inset ring, which is why that value is kept as `outline-blue`. The text-input text color is `#61615f`.

The site ships a Tailwind-style set of root variables with named 50 to 950 ramps: `oxford-blue` (950 is `0 33 71`, i.e. `#002147`; 400 is `38 210 255`, i.e. the CTA cyan; 600 is `0 131 255`, the hover value), `royal-blue`, `cerulean`, `dark-blue`, `sky-blue`, `lemon-yellow`, `lavender`, `green`, `yellow`, `pink`, `plum`, `potters-pink` and `biology-green`, plus status colors `critical`, `warning`, `polite` and `high-contrast`. Only the colors above were measured on the rendered home page; the rest of the ramps exist as variables and are not claimed as used.

## Typography

Two families only, both loaded as web fonts: Tiempos Headline (loaded at 400) and DM Sans (400 and 500). Measured roles on desktop:

- Display (h1, "University of Oxford"): Tiempos Headline 500, 51.816px / 62.1792px, white. On the 390px pass it measured 30.5061px / 36.6073px.
- Heading (h2): 42.478px / 50.9736px.
- Subheading (h3): 28.728px / 34.4736px.
- Card and link text: Tiempos Headline 500, 23.7px / 28.44px.
- Body: DM Sans 400, 16.248px / 25.9968px, `#002147` on light areas.
- Button: DM Sans 500, 16.248px / 19.4976px.
- Navigation links: DM Sans 400, 19.6px / 31.36px.

By character count DM Sans carries 5107 characters and Tiempos Headline 2063. A small 13.504px size is used for 804 characters (chips and meta text). Letter spacing is normal throughout and no text transform is applied to the measured roles. Both typefaces are commercial or Google-distributed faces; no substitute is specified by the site beyond the Arial fallback after DM Sans and `sans-serif` after Tiempos Headline. If Tiempos Headline is unavailable, any transitional serif of similar weight is a reasonable stand-in, but that is a recommendation, not a measurement.

## Layout

The page is 1280px wide with a scroll height of 8805px. The root variable `--header-height` is 117px. The structure seen in the capture: a thin top bar with a crest on the left and "Admissions", "News", "Research", "Search" and "Menu" on the right inside outlined groups; a full-height navy hero with a date chip, headline, standfirst and CTA at the left; a rounded navy panel with a course search (undergraduate/graduate radios, a white input and a cyan Search button); a three-column row of image cards with captions; a large navy feature panel split into image and text; and a "Latest news" row of four cards on the pale grey ground. Gaps measured most often are 4.9px, 19.6px and 9.8px; paddings are 19.6px, 9.8px, 4.9px and 46px, with larger values at 52.4px and 58.8px for panels. The spacing tokens are multiples of a 4.9px unit (4.9, 9.8, 14.7, 19.6, 29.4, 39.2) with 20, 24, 26.2 and 32.8 also measured.

## Elevation & Depth

Depth is almost entirely color and gradient, not shadow. The measured box shadows are inset rings only: a 2px inset `#1d42a6` ring (17 elements), a 2px inset `#26d2ff` ring (4) and a 2px inset `#93c9fd` ring (1). The CSS corpus also contains a generic `0 4px 8px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.2)` and its white counterpart, and a `0 0 0 4px rgba(0,0,0,.8)` rule; these were not measured on rendered elements and are not recommended as brand elevation. Image cards use a dark bottom gradient to carry caption text.

## Shapes

Measured radii: 5px (38 elements, the most common), 9.8px (18), 6px (14), 9999px (12, pills such as the date chips and radio controls) and 8px (1). Buttons and inputs use 6px. Large panels use the 9.8px step. Tokens: `xs` 5px, `sm` 6px, `md` 8px, `lg` 9.8px and `pill` 9999px.

## Components

- **Primary button**: fill `#26d2ff`, text `#002147`, DM Sans 500 16.248px, radius 6px, padding 19.6px, height 59px, with a 2px inset cyan ring; hover fill `#0083ff`. A trailing chevron follows the label.
- **Secondary button** ("Search"): same fill, text, radius and padding, height 61px.
- **Text input**: white fill, text `#61615f`, radius 6px, padding 19.6px, height 61px, border `#1d42a6`.
- **Outlined button** ("View all news"): transparent with a `#1d42a6` ring and blue text, radius 5px or 6px.
- **Navigation**: navy bar, white DM Sans at 19.6px.
- **Link / card title**: Tiempos Headline 23.7px white on navy image cards.
- **Footer**: white fill with `#002147` text, large Tiempos Headline 28.728px headings.

## Design System Architecture

No public design-system documentation was opened: the one WebFetch of https://www.ox.ac.uk/ returned HTTP 403 and no brand-guidelines page was read, so no external source is cited. The de-facto system is visible in the shipped CSS and root variables: Tailwind utility variables (`--tw-ring-*`, `--tw-shadow`), `--fluid-min-width: 320`, Drupal Gin toolbar variables (`--gin-toolbar-y-offset`), colors expressed as space-separated RGB channel triples (for example `--oxford-blue-950: 0 33 71`) for use with alpha, named 50 to 950 ramps per hue, and social network color variables (facebook, x, linkedin, youtube, vimeo, pinterest, instagram). This is the evidence that the site is a Tailwind-based theme over Drupal.

## Do's and Don'ts

- Do use Oxford blue `#002147` as the dominant ground and white text on it.
- Do reserve cyan `#26d2ff` for primary actions with `#002147` text.
- Do set headlines in Tiempos Headline 500 and body in DM Sans.
- Do use the 6px button radius and the 4.9px spacing unit.
- Don't use the browser-default link colors; links on light areas measured `#1e3e8a`.
- Don't add drop shadows for elevation; the measured system uses inset rings and gradients.
- Don't document the cookie control in the bottom left as brand UI.

## Responsive Behavior

Measured at 390px: h1 30.5061px / 36.6073px, h2 26.8585px / 32.2302px, body 14.3679px / 22.9886px, button text 14.3679px with padding 16.2625px and height 50px; the button radius stays 6px and the colors are unchanged. The mobile font sizes by character weight are 14.3679px, 18.4156px, 12.703px, 16.2625px, 26.8585px, 20.8682px and 30.5061px. Breakpoints, column changes and menu behavior were not measured.

## Iteration Guide

1. Start from the tokens: canvas `#002147`, primary `#26d2ff`, ink `#ffffff` on navy, `#002147` on `#e0edf9` or `#f2f0f0`.
2. Set h1/h2/h3 at 51.816px, 42.478px and 28.728px in Tiempos Headline 500.
3. Build buttons at 59px height with 19.6px padding and a 6px radius; add hover `#0083ff`.
4. Compose panels with the 9.8px radius and a 4.9px-multiple gap.
5. Check dark and light sections both keep text at readable contrast, and verify against `web/data/extracted/oxford-university.json` before changing any value.
