---
version: alpha
name: Tesla
category: "Automotive"
description: "Tesla's tesla.com is a photo-first showroom: Universal Sans Display 48px/500 headlines in white over full-bleed vehicle imagery, Universal Sans Text 12–14px for UI, a single #3e6ae1 blue 'Order Now' button (hover #3457b1) with 4px radius, #f4f4f4 cards at 8px radius, and #171a20/#393c41/#5c5e62 greys on a #ffffff canvas."
colors:
  canvas: "#ffffff"
  page-largest: "#f4f4f4"
  ink: "#5c5e62"
  primary: "#3e6ae1"
  on-primary: "#ffffff"
  surface-warm: "#e5e3df"
  ink-strong: "#393c41"
  ink-heading: "#171a20"
  ink-faint: "#eeeeee"
  hairline: "#d0d1d2"
  primary-hover: "#3457b1"
  error: "#b74134"
typography:
  display:
    fontFamily: "\"Universal Sans Display\", -apple-system, Arial, sans-serif"
    fontSize: 48px
    fontWeight: 500
    lineHeight: 56px
  body:
    fontFamily: "\"Universal Sans Text\", -apple-system, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  button:
    fontFamily: "\"Universal Sans Text\", -apple-system, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 16.8px
  nav:
    fontFamily: "\"Universal Sans Text\", -apple-system, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 20px
  link:
    fontFamily: "\"Universal Sans Display\", -apple-system, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  input:
    fontFamily: "\"Universal Sans Text\", -apple-system, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 4px
  sm: 8px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 8px
  s5: 10px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 32px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 4px
    height: 40px
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 2px inset
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 4px
    height: 40px
  button-tertiary:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    border: "1px solid #d0d1d2"
    padding: 4px 24px
    height: 40px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    boxShadow: rgb(255, 255, 255) 0px 2px 0px -1px
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink-heading}"
    typography: "{typography.input}"
    padding: 1px 2px
    height: 30px
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-heading}"
    rounded: "{rounded.sm}"
  footer:
    textColor: "{colors.ink}"
    padding: 0px 24px 60px
---

## Overview

Tesla's home page at tesla.com is a showroom rendered as a web page. The desktop capture opens on a full-bleed photograph of a silver Model 3 driving through a desert landscape, with the model name set in white Universal Sans Display at 48px/500 and a small underlined financing line ("1.99% APR Available") below it. Two equal-width buttons sit under the headline: a solid blue `#3e6ae1` "Order Now" and a white "Learn More". Everything after the hero is a stack of rounded, near-white `#f4f4f4` panels: a Full Self-Driving module with large statistics and an embedded video, a horizontal carousel of vehicle cards (Model Y L Premium, Model 3), a pair of "Current Offers" and "Inventory" cards, a full-width Supercharger map dotted with red pins, and a second carousel for Solar Panels and Powerwall. The footer is a single centred row of 12px links.

The page has almost no decorative chrome. Product photography carries all of the color and mood; the interface itself is greyscale plus one blue. Microcopy is terse and transactional — "Order Now", "Learn More", "Schedule Demo", "View Network", "Find Your Charge" — and pricing appears as plain statements ("Starting at $61,990", "Lease From $419/mo") with footnote markers that resolve into 12px legal text at the bottom of the page.

The measured page title is "Electric Cars, Solar & Clean Energy | Tesla". The extractor's mobile pass at 390px was answered with an Akamai "Access Denied" page, so every mobile statement in this document is limited to what that failure shows.

## Colors

The palette is greyscale with a single action blue, and the site ships it as CSS custom properties prefixed `--tds-`.

- **Canvas `#ffffff`** — the body background and the fill of secondary buttons.
- **Page panels `#f4f4f4`** (`page-largest`) — the largest measured background by area and the fill of every content card in the capture. The root variables name it `--tds-color--grey70` and `--tds-color--tertiary`.
- **Warm surface `#e5e3df`** (`surface-warm`) — second-largest background by area; it sits behind photographic modules.
- **Ink `#5c5e62`** — the most-read text color (supporting copy, captions, footer links), `--tds-color--grey30`.
- **Ink strong `#393c41`** — secondary button labels and the theme foreground (`--tds-theme-foreground`, `--tds-color--grey20`).
- **Ink heading `#171a20`** — headings on light panels, input text and the dark "Schedule Demo"/"View Network" button fills; `--tds-color--secondary` / `--tds-color--grey10`.
- **Ink faint `#eeeeee`** — light text measured on dark surfaces (`--tds-color--grey65`).
- **Hairline `#d0d1d2`** — the only measured border color, `--tds-color--hairline`.
- **Primary `#3e6ae1`** — the "Order Now" fill, `--tds-color--blue30`; on hover it measured `#3457b1` (`--tds-color--primary-highlight`).
- **Error `#b74134`** — declared as `--tds-color--error` in the site's root variables; it was not seen rendered on the home page.

The red Supercharger pins and the red/grey charger counts belong to map imagery and icons, not CSS backgrounds, and are not tokenised here.

## Typography

Two proprietary families carry the whole site: **Universal Sans Display** (headlines, the large hero link, statistics) and **Universal Sans Text** (UI text, buttons, navigation, inputs, legal copy). Both are declared with the fallback stack `-apple-system, Arial, sans-serif`, and the loaded-font list records weights 400 and 500 for each. No other weights were measured on Latin text.

| Role | Family | Size / line-height | Weight |
|---|---|---|---|
| Display (hero h1 "Model 3") | Universal Sans Display | 48px / 56px | 500 |
| Hero link ("1.99% APR Available") | Universal Sans Display | 20px / 28px | 400 |
| Button | Universal Sans Text | 14px / 16.8px | 500 |
| Input | Universal Sans Text | 14px / 20px | 400 |
| Nav / footer link | Universal Sans Text | 12px / 20px | 500 |
| Body (legal footnotes) | Universal Sans Text | 12px / 18px | 400 |

Measured font sizes by character count are 20px, 12px, 14px, 17px, 48px, 34px, 40px and 28px. The root variables expose a numbered scale (`--tds-font-size-10` 10px, `-30` 14px, `-40` 17px, `-55` 23px, `-60` 24px, `-80` 40px, `-100` 56px, `-120` 72px, `-130` 80px). Letter-spacing is `normal` on every measured role and no uppercase transforms were recorded.

The site also declares other families in root variables — "Blender TSL", "Hyperspace Race", "CT Speed", "Fira Code" and Noto/PingFang stacks for non-Latin scripts — but none of them were measured on the home page's Latin text.

**Substitutes:** Universal Sans is not publicly licensed for general use. When it is unavailable, the site's own fallback stack (`-apple-system, Arial, sans-serif`) is what renders; keep weights at 400/500 and keep headline sizes large rather than bold.

## Layout

The desktop page is a single centred column of edge-to-edge or inset panels. The hero is full-bleed photography; subsequent modules sit inside rounded panels with generous internal padding. Measured padding frequencies are led by 4px (button interiors), then 40px, 32px and 48px (panel interiors); measured gaps are led by 8px (between paired buttons and inline items), then 24px, 4px, 32px and 16px. The root variables describe the spacing system as multiples of a 4px unit (`--tds-spacer-1x` = 4px, `--tds-spacer-8x` = `calc(4px*8)`, up to `--tds-spacer-24x`), and card content padding is declared as `--tcl-card-content--padding-block: 32px`.

Content density is low: one message per panel, one or two buttons per message. Carousels show one large card with the next card peeking in from the right edge, and dot pagination below. The two-up offers row and the statistic row in "Find Your Charge" are the only multi-column text arrangements in the capture. The extractor recorded no visible header links on desktop (`headerLinksVisible: 0`).

## Elevation & Depth

The interface is almost flat. The most frequent box-shadow is a transparent 2px inset ring (`rgba(0, 0, 0, 0) 0px 0px 0px 2px inset`) on buttons, which reserves space for a focus or hover ring without drawing anything at rest. The few real shadows measured are small: `rgba(0, 0, 0, 0.25) 0px 4px 4px 0px`, `rgba(0, 0, 0, 0.08) 0px 4px 8px 0px` (also declared as `--tds-box-shadow--small`) and `rgba(0, 0, 0, 0.1) 0px -2px 8px 0px`, the last on the floating "Ask a Question / Schedule a Drive Today" bar. Depth otherwise comes from photography and from the `#f4f4f4` panels sitting on the white canvas. The hero link uses a 1px underline drawn as `rgb(255, 255, 255) 0px 2px 0px -1px`.

## Shapes

Corners are small and consistent. Measured radii are 4px (buttons, the most frequent), 8px (content cards and panels), a half-rounded `0px 8px 8px 0px` on split panels, and 50% on circular controls such as the carousel arrows. The root variables set `--tds-border-radius`, `--tds-border-radius--card` and even `--tds-border-radius--pill` all to 4px, so "pill" in this system is not a capsule. The `pill: 9999px` token above stands for the 50% circular controls; text buttons never use it.

## Components

- **Primary button** — "Order Now": `#3e6ae1` fill, white Universal Sans Text 14px/500, 4px radius, 40px tall, 4px padding with a fixed width (200px in the hero, 160px in carousel cards). Hover darkens the fill to `#3457b1`; text and size do not change.
- **Secondary button** — "Learn More": white fill, `#393c41` label, same type, radius and height as the primary; it always sits to the right of a primary at the same width.
- **Tertiary button** — "Schedule a Drive Today" in the floating bar: `#f4f4f4` fill, `#393c41` label, 1px `#d0d1d2` border, 4px 24px padding, 40px tall.
- **Dark button** — "Schedule Demo" and "View Network" in the capture use the `#171a20` fill with white text, paired with a light secondary.
- **Hero link** — white Universal Sans Display 20px/400 with a 1px underline drawn by box-shadow.
- **Vehicle card** — full-bleed photograph inside an 8px-radius panel, a small category label top-left, the model name in large white Display type bottom-left, a one-line price, then a primary/secondary button pair.
- **Promo card** — `#f4f4f4` panel at 8px radius, heading in `#171a20`, one or two lines of `#5c5e62` copy, small white buttons, product image on the right.
- **Statistic block** — large Display numerals ("7x", "15,623,622,360", "34,287") over 12px grey labels.
- **Input** — Universal Sans Text 14px/400 in `#171a20`, 30px tall with 1px 2px padding.
- **Footer** — a single row of `#5c5e62` 12px/500 links ("Tesla © 2026", "Privacy & Legal", "Vehicle Recalls", "Contact", "News", "Get Updates", "Locations", "Learn") with 0 24px 60px padding.

## Design System Architecture

Tesla does not publish a public design system or brand guideline that could be opened for this document: tesla.com/about returned HTTP 403 to the fetch tool, and the public GitHub organisation (https://github.com/teslamotors) lists no design-system, token or font repository. The de-facto system is visible in the shipped CSS. The home page declares about 400 root custom properties in two families: `--tds-*` for foundations (color ramp `--tds-color--grey10` … `--grey70`, `--tds-color--blue10/20/30`, status colors, `--tds-font-size-*`, `--tds-spacer-*x` multiples of 4px, `--tds-border-radius-*`, `--tds-bezier: cubic-bezier(0.5,0,0,0.75)`) and `--tcl-*` for page-level modules (card grid, flex module, media, section gradients). Semantic aliases sit on top of the ramp — `--tds-color--secondary` → `#171a20`, `--tds-color--tertiary` → `#f4f4f4`, `--tds-color--hairline` → `#d0d1d2`, `--tds-color--primary-highlight` → `#3457b1` — and per-script font-family variables switch Universal Sans for Noto, PingFang or AXIS stacks by locale.

## Do's and Don'ts

**Do**
- Let full-bleed product photography supply color; keep UI in the grey ramp plus `#3e6ae1`.
- Pair a blue primary with a white secondary of identical width, height (40px) and 4px radius.
- Set headlines in Universal Sans Display at 500, not bold; set UI in Universal Sans Text at 400/500.
- Group content in `#f4f4f4` panels with 8px corners and 32–48px interior padding.
- Keep copy short and verb-led: "Order Now", "Learn More", "View Network".

**Don't**
- Don't introduce a second accent color for UI; the red seen on the page belongs to map pins and icons.
- Don't use capsule-shaped text buttons — the system's "pill" radius is 4px.
- Don't add heavy drop shadows; the measured shadows top out at 0.25 alpha with a 4px blur.
- Don't use weight 700 for Latin headlines; it was not measured.
- Don't treat the floating "Ask a Question" bar as a layout pattern for content.

## Responsive Behavior

Not measured. The extractor's mobile pass at a 390px viewport received an Akamai "Access Denied" page ("You don't have permission to access 'http://www.tesla.com/' on this server") instead of the site, so no mobile typography, layout or navigation was recorded. The shipped stylesheet declares media queries at `min-width 600px`, `max-width 599px`, `min-width 900px`, `min-width 1200px`, `max-width 1199px` and others up to `min-width 1920px`, and the root variables include phone/tablet-specific values such as `--hmc-charging-map-component__tablet-height: 450px` and `--tcl-dx-banner-height-phone: 0px`; how the page renders at those widths was not captured.

## Iteration Guide

1. Start from the `--tds-` foundations: white canvas, `#f4f4f4` panels, the four greys (`#171a20`, `#393c41`, `#5c5e62`, `#d0d1d2`) and `#3e6ae1` for the single primary action.
2. Build each section as one panel with one message: a Display headline, one supporting line, a button pair.
3. Use Universal Sans Display 48px/500 for hero titles and 20px/400 for hero sublines; Universal Sans Text 14px/500 for buttons and 12px for nav, footer and legal text.
4. Keep radii at 4px for controls and 8px for panels; reserve 50% for round icon controls.
5. Spacing in 4px steps (8, 16, 24, 32, 40, 48).
6. Before adding any new color, check the `--tds-color-*` ramp in the live CSS; status colors (`--tds-color--error #b74134`, green, yellow) exist there.
7. Re-measure mobile from a network that is not blocked before writing any responsive rules.
