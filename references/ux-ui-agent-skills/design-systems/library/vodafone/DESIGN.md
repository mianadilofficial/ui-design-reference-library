---
version: alpha
name: Vodafone
category: "Media & Consumer Tech"
description: "Vodafone Group corporate homepage: red #e60000 pill buttons (60px radius, 800-weight 15.3967px labels) over full-bleed photography and a deep red gradient, with white and #25282b ink, and all type in the Vodafone family loaded in weights 300 to 800, with uppercase 115.435px headlines at -1px tracking."
colors:
  canvas: "#ffffff"
  ink: "#25282b"
  primary: "#e60000"
  on-primary: "#ffffff"
  black: "#000000"
  primary-deep: "#bd0000"
  ink-soft: "#000000cc"
  on-dark-soft: "#ffffffcc"
  on-dark-faint: "#ffffff40"
  success: "#008a00"
  warning: "#eb6100"
typography:
  display:
    fontFamily: Vodafone
    fontSize: 115.435px
    fontWeight: 800
    lineHeight: 104.642px
    letterSpacing: "-1px"
    textTransform: uppercase
  display-mobile:
    fontFamily: Vodafone
    fontSize: 56.6608px
    fontWeight: 800
    lineHeight: 52.5855px
    letterSpacing: "-1px"
    textTransform: uppercase
  subheading:
    fontFamily: Vodafone
    fontSize: 30.1889px
    fontWeight: 700
    lineHeight: 37.8872px
  body:
    fontFamily: Vodafone
    fontSize: 23.0938px
    fontWeight: 400
    lineHeight: 34.4905px
  button:
    fontFamily: Vodafone
    fontSize: 15.3967px
    fontWeight: 800
    lineHeight: 23.3967px
  nav:
    fontFamily: Vodafone
    fontSize: 18px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 6px
  sm: 30.19px
  md: 60px
  lg: 100px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 4.1px
  s5: 6px
  s6: 8px
  s7: 11.4px
  s8: 12.29px
  s9: 14.4px
  s10: 15.4px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 15.3967px 22.7922px
    height: 54px
  button-primary-hover:
    backgroundColor: "{colors.primary-deep}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 8px 30.1889px 8px 8px
    height: 54px
    transform: matrix(1, 0, 0, 1, 0, 0)
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
  nav:
    textColor: "{colors.ink}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.on-dark-soft}"
    textColor: "{colors.ink}"
    padding: 22.7922px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
---

## Overview

The captured Vodafone Group homepage is a photographic, red-led corporate page. The strip at the very top is a dark utility bar (`{colors.ink}`, `#25282b`) with "Vodafone Business", "Vodafone Foundation" and an "Our sites" menu; below it sits a white header (`{colors.canvas}`, `#ffffff`) with the red speech-mark logo at the left, the links "everyone.connected", "Our company", "Our impact", "Investors", "News" and "Careers" in the middle and a circular grey search button at the right. The hero is a full-width photograph of a hand brushing across wheat in warm backlight, with a huge white uppercase headline ("EVERYONE. CONNECTED"), a short paragraph and one red pill button, "OUR PURPOSE" with an arrow.

Beneath the hero, the page switches to a full-bleed red section (`{colors.primary}`, `#e60000`, shading toward `{colors.primary-deep}`, `#bd0000`) that carries a carousel: the heading "We connect people to opportunity", a paragraph, a large outlined statistic "279M mobile customers" and a circular photograph of two people looking at a phone, framed by concentric red arcs that echo the logo. Then a white "News highlights" band shows photo cards of different sizes.

**Key Characteristics:**
- One typeface family, Vodafone, loaded in six weights (300, 400, 500, 600, 700, 800) and used for every measured character.
- Huge uppercase display headline, `115.435px` at weight 800, with `-1px` tracking and a line-height smaller than the font-size (`104.642px`).
- Red pill buttons with white 800-weight labels and a 60px radius.
- Full-bleed human photography, warm and natural, set against red fields.
- Statistic typography: giant outlined numerals, with a bold caption beneath.
- A circular motif, from the speech-mark logo through round search and carousel buttons to the round photo mask.

## Colors

- **Primary** `{colors.primary}` (`#e60000`): the fill of the "OUR PURPOSE" and "EXPLORE CONNECTING PEOPLE" buttons and the main hue of the red sections and logo. On hover the buttons change to `{colors.primary-deep}` (`#bd0000`), which was measured by hover testing the CTA; the same `#bd0000` is also the site's `--error` custom property.
- **Ink** `{colors.ink}` (`#25282b`): the most-read text colour by character count, also the utility bar and footer fill. The same value is the site's `--primary-4` variable.
- **Black** `{colors.black}` (`#000000`): covers the largest area by DOM weight, mostly overlay and photo layers; `{colors.ink-soft}` (`#000000cc`) is 80% black used for text on light cards.
- **On-dark transparencies**: `{colors.on-dark-soft}` (`#ffffffcc`) is the translucent white of the news card surface and secondary text on red or photography, and `{colors.on-dark-faint}` (`#ffffff40`) is a faint outline/divider tint.
- **Status colours** `{colors.success}` (`#008a00`) and `{colors.warning}` (`#eb6100`) are declared as custom properties on the page; they do not appear in the capture and are included because they are measured variable values.

The site also exposes a Bootstrap-derived palette (for example `--bs-orange`, `--bs-purple`), but these are framework defaults and are not used in the visible design, so they are not part of the token set.

## Typography

Fonts are declared as `Vodafone` weights 300, 400, 500, 600, 700 and 800, plus an `icomoon` icon font. Several other families appear in the stylesheet corpus (Roboto, Inter and YouTube fonts), but these belong to embedded widgets; the measured characters on the page are 100% Vodafone. No public information about the typeface's licence was found, so no substitute is claimed; a generic sans-serif fallback is the practical route if the font is unavailable.

| Role | Size / line-height | Weight | Notes |
|---|---|---|---|
| `{typography.display}` | 115.435px / 104.642px | 800 | uppercase, -1px |
| `{typography.display-mobile}` | 56.6608px / 52.5855px | 800 | uppercase, -1px |
| `{typography.subheading}` | 30.1889px / 37.8872px | 700 | |
| `{typography.body}` | 23.0938px / 34.4905px | 400 | |
| `{typography.button}` | 15.3967px / 23.3967px | 800 | |
| `{typography.nav}` | 18px / 24px | 400 | |

The type scale is fluid: the CSS variables for display, headline, body and button sizes are `clamp()` expressions (for example the display size is defined as a clamp between 5.6rem and 12.6rem), which is why measured sizes have decimals. The hero's second line "CONNECTED" is a solid white, while the line above it ("EVERYONE.") is drawn only as an outline, a contrast pairing that is repeated in the outlined "279M" numerals.

## Layout

The page is a stack of full-width bands: utility bar, header, hero photograph, red carousel section, then white news section. Content aligns to a generous left gutter, with hero copy and the carousel text in the left third and a visual in the right two thirds. News highlights are laid out as a horizontally overflowing row of cards of varying heights (one large image card, a smaller card with a date and a "TECHNOLOGY" tag, a card with a partner badge), which suggests a scrolling carousel. The spacing tokens measured on the page range from `{spacing.s1}` (1px) through `{spacing.s10}` (15.4px), with button padding of 15.3967px by 22.7922px.

## Elevation & Depth

Depth comes from photography and colour fields rather than shadows. The top shadow values measured on the page are mostly `none`; the few real shadows are focus outlines (a blue inset ring) and a 1px low-alpha line. The news cards use the translucent white `{colors.on-dark-soft}` surface over imagery. The red section uses a gradient from `{colors.primary}` toward `{colors.primary-deep}` and concentric arcs to add depth without a shadow.

## Shapes

Radii in the token set are `{rounded.xs}` (6px), `{rounded.sm}` (30.19px), `{rounded.md}` (60px), `{rounded.lg}` (100px) and `{rounded.pill}` (9999px). Buttons use `{rounded.md}` (60px, which on a 54px-high button is a full pill). The search button, the carousel pause buttons and the photo mask are circles. Cards and photo tiles in the capture have small rounded corners; the page's `--radius-sm`, `--radius-md` and `--radius-lg` custom properties (4px, 8px, 16px) exist in the stylesheet, but only the radii listed above are tokenised here.

## Components

- **button-primary**: `{colors.primary}` fill, white 15.3967px weight 800 label, 54px high, padding 15.3967px 22.7922px, radius `{rounded.md}`. Hover: `{colors.primary-deep}`. The label is typed in capitals ("OUR PURPOSE") and often followed by an arrow icon.
- **button-secondary**: same fill, with padding `8px 30.1889px 8px 8px`, which leaves room for a leading round element; same 54px height.
- **search button**: circular, translucent, with a thin outline; on hover its text and border go to `#25282b`.
- **nav**: 18px weight 400 links on the white header; utility links are white on `{colors.ink}` and dim to a light grey on hover.
- **card**: translucent white (`{colors.on-dark-soft}`) surface, `{colors.ink}` text, 22.7922px padding, carrying a date, a bordered category tag and a two-line headline.
- **carousel controls**: a dark pill with previous/next arrows and four dots, plus a pause button in each slide.
- **footer**: `{colors.ink}` fill with white text.

## Design System Architecture

No public design-system documentation or brand guideline page was found on vodafone.com; the pages that were requested (an "our-brand" page and a press-resources page) returned 404, and the homepage links to no brand page. The de-facto system can be read from the shipped CSS custom properties on the homepage: type is organised by role and size tokens named like `--display-xl-font-size`, `--headline-l-weight`, `--body-m-font-size`, `--stat-m-font-family`, `--button-font-size` and `--tag-font-size`, with family tokens such as `--primitive-family-titles` and `--primitive-family-body` and weight primitives like `--primitive-weight-extra-bold`. Colour uses scale tokens such as `--primary-4`, `--secondary-3`, `--light-10`/`--light-25`/`--light-50`, `--dark-10`/`--dark-50` and semantic ones (`--error`, `--success`, `--warning`). Radius tokens are `--radius-nil`, `--radius-sm`, `--radius-md`, `--radius-lg`, and layout components use named variables like `--panel-radius` and `--card-shadow-blur`. Bootstrap's `--bs-*` variables sit alongside, so the site is built on Bootstrap with a custom token layer on top. Source: https://www.vodafone.com (computed styles and root variables, measured by the extractor).

## Do's and Don'ts

**Do**
- Use `{colors.primary}` for the primary action and keep the label uppercase at weight 800.
- Place white uppercase display type on photography or on red fields.
- Use circular masks and round controls to echo the logo.
- Pair giant outlined numerals with a short bold caption for statistics.

**Don't**
- Introduce Bootstrap palette colours (orange, purple, teal) into the brand surface.
- Set display type below weight 800 or in mixed case on the hero.
- Use hard shadows: depth in this system is photographic or tonal.
- Use `{colors.primary-deep}` as a resting button fill; it is the hover state.

## Responsive Behavior

At a 390px-wide viewport, the display headline measured `{typography.display-mobile}` (56.6608px, weight 800, line-height 52.5855px), keeping the same -1px tracking and uppercase style, about half the desktop size. The scale is generated with CSS `clamp()` so sizes interpolate smoothly between breakpoints; the Bootstrap xxl breakpoint variable is 1400px. Exact intermediate breakpoints for the layout were not measured. The capture shows that the header's navigation is a horizontal row at its width and that a cookie-settings button floats at the lower left.

## Iteration Guide

1. Start with `{colors.canvas}`, `{colors.ink}` and `{colors.primary}`; red appears in big fields rather than as a spot colour.
2. Set headlines in `{typography.display}` uppercase, 800 weight, -1px tracking; subheads in `{typography.subheading}`.
3. Build CTAs with `button-primary`: 54px high, pill radius, hover to `{colors.primary-deep}`.
4. Use real, warm photography with a person or a gesture; avoid illustrations and stock gradients.
5. For new status UI, use the measured `{colors.success}`, `{colors.warning}` and the `{colors.primary-deep}` error value.
6. Measure before adding: any new value should come from the extractor, not from memory.
