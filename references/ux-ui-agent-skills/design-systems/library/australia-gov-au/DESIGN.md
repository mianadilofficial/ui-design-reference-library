---
version: alpha
name: myGov
category: "Government & Nonprofit"
description: "myGov (my.gov.au), the Australian Government portal that australia.gov.au permanently redirects to: Roboto with a 62px weight-300 headline, a #66d3ee brand-blue header band, black #000000 buttons with 4px corners, white cards with a 1px #d9d9d6 border and a 6px soft shadow, and a full-width black footer."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  primary-hover: "#333333"
  brand-blue: "#66d3ee"
  brand-blue-deep: "#006d88"
  navy: "#183052"
  link: "#495f7d"
  hairline: "#d9d9d6"
  border-neutral: "#bbbcbc"
  passive: "#666767"
  info: "#1a78c2"
  success: "#1d6e31"
  danger: "#c3362b"
  warning: "#d37e1d"
typography:
  display:
    fontFamily: Roboto, sans-serif
    fontSize: 62px
    fontWeight: 300
    lineHeight: 77.5px
    letterSpacing: "-0.031px"
  display-mobile:
    fontFamily: Roboto, sans-serif
    fontSize: 36px
    fontWeight: 300
    lineHeight: 45px
    letterSpacing: "-0.018px"
  body:
    fontFamily: Roboto, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18.4px
  link:
    fontFamily: Roboto, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  button:
    fontFamily: Roboto, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 22.5px
  footer:
    fontFamily: Roboto, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
spacing:
  s1: 4px
  s2: 12px
  s3: 14px
  s4: 15px
  s5: 16px
  s6: 20px
  s7: 22px
  s8: 24px
  s9: 30px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 14px 32px
    height: 56px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.link}"
    typography: "{typography.link}"
  link-hover:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
  header:
    backgroundColor: "{colors.brand-blue}"
    textColor: "{colors.ink}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
    padding: 24px
    borderColor: "{colors.hairline}"
    boxShadow: rgba(0, 0, 0, 0.2) 0px 2px 6px 0px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.footer}"
    padding: 56px 0px 40px
---

## Overview

The queued URL, https://australia.gov.au, answers with a 301 Moved Permanently to `https://my.gov.au/en/services?redirectFrom=australia.gov.au`. What the extractor measured, and what this file documents, is therefore **myGov** ("Find government payments and services"), the Australian Government's online portal for payments and services. The page's logo alt text reads "Australian Government and myGov logo", and the redirect is issued by the australia.gov.au domain itself, so this is the parent government's own site, named here after the measured site.

The page is a plain, task-first public-service interface. A bright cyan header band (`#66d3ee`) holds the Australian Government crest, a myGov wordmark with a chevron mark, "Home", "Browse", "Search", a black "Sign in" button, and "Create account" and "Help" as underlined links. A white sub-navigation lists six life situations: Raising kids, Living arrangements, Ageing, Work, Education, Health and disability. Below a "Home" breadcrumb sits a single light-weight headline, then a three-by-two grid of white cards, each with a real photograph, a short title, one or two lines of description and a small chevron. A black footer closes the page.

The page measured 1280px wide and 2283px tall with 233 visible elements. The voice is plain and direct ("Help when recently unemployed, looking for work and when returning to work after a break."): organised around life situations, not agency names, with no marketing language.

## Colors

- **Canvas `#ffffff`** is the page surface, covering about 42% of the first screen; **ink and primary `#000000`** are the most-read text color (780 characters) and the fill of the buttons and footer. **On-primary `#ffffff`** (413 characters) is text on black.
- **Brand blue `#66d3ee`** is the header band (the third measured background area). In the stylesheet it is `--mygov-color-brandblue-400`; the ramp also declares 100, 200, 300, 500, 600, 700, 800 and 950 steps, among them `--mygov-color-brandblue-800` `#006d88`, recorded as `brand-blue-deep`. The stylesheet's inverted focus ring color is the same `#66d3ee`.
- **Link `#495f7d`** colors the breadcrumb "Home" link (4 characters); it is `--mygov-link-text-color` and `--mygov-color-navy-400`. The header's "Create account" and "Help" links measured black with an underline.
- **Hairline `#d9d9d6`** is the 1px card border (6 elements); **border neutral `#bbbcbc`** is one more measured border color; **passive `#666767`** is the stylesheet's muted and disabled text color.
- **Primary hover `#333333`** is the stylesheet's `--mygov-background-color-primary-hover`. The measured hover of the floating "Assistant" control was `#4d4d4d`; that control is a chat widget and is not documented as brand UI.
- **Status colors** are declared as variables: info `#1a78c2`, success `#1d6e31`, danger `#c3362b`, warning `#d37e1d`, plus `navy` `#183052`.

The browser default `#0000ee` was reported on 20 characters of text and on the `body` role and is not a brand color; it is dropped.

## Typography

Roboto is the only family on the page (1217 characters, all four loaded weights: 300, 400, 500 and 700). Montserrat is declared as a font face in the stylesheet but was not measured on the page.

- **Display**: 62px / 77.5px, weight 300, letter-spacing `-0.031px`, black, left-aligned ("Find government payments and services", 37 characters). Mobile pass: 36px / 45px, `-0.018px`. The size equals the stylesheet's `--mygov-font-size-11x-large` (3.875rem).
- **Body**: 16px / 18.4px weight 400 (the `body` role); footer text 16px / 24px.
- **Link**: 18px / 27px weight 400 (breadcrumb "Home").
- **Button**: 18px / 22.5px weight 500 ("Sign in").
- Sizes by character: 18px (662), 16px (363), 22px (71), 14px (63), 62px (37), 20px (21). Weights by character: 400 (992), 500 (167), 300 (37), 700 (21).

The stylesheet publishes a named size scale: `--mygov-font-size-x-small` 0.875rem, `-small` 1rem, `-medium` 1.125rem, `-large` 1.25rem, `-x-large` 1.375rem, then `-2x-large` 1.5rem up to `-12x-large` 4.375rem, plus a `--mygov-font-weight-*` set (extralight 200, semibold 600 and others). If Roboto is unavailable, use a neutral grotesque sans at the same sizes; the declared fallback is `sans-serif`.

## Layout

A full-width header band (cyan) over a white sub-nav row separated by a hairline, a breadcrumb row, then the headline at the left margin. The card grid is three columns by two rows; each measured card is 378px wide and 511px tall with 24px padding, and the grid and footer share a single left margin with the headline. Spacing measured as paddings of 24px (19 uses), 12px (6), 22px (6), 40px (5) and gaps of 4px (6), 20px (4), 16px (3), 100px (2), 30px (2). The stylesheet publishes a rem spacing scale, `--mygov-space-N` (for example `--mygov-space-5` 0.5rem, `--mygov-space-15` 1.75rem, `--mygov-space-25` 3.5rem, `--mygov-space-37` 6.75rem).

The black footer is 696px tall with 56px top and 40px bottom padding: two link columns ("About this site", "Browse"), a hairline, a row of legal links (Terms of use, Privacy and security, Copyright, Accessibility, Languages), "Follow us" with white round X and YouTube icons, the crest and wordmark in white, and an acknowledgement of Traditional Custodians. Density is airy and single-purpose: one idea per card, no sidebars.

## Elevation & Depth

Depth is limited to one shadow, `rgba(0, 0, 0, 0.2) 0px 2px 6px 0px`, on the six cards (6 elements), together with their 1px `#d9d9d6` border. Buttons, header and footer are flat. The stylesheet also declares other shadows, for example `0 2px 6px 0 rgba(0, 0, 0, 0.25)` and `0 4px 8px 0 rgba(0, 0, 0, 0.25)`; the page does not show them. Hierarchy otherwise comes from color blocks: cyan band, white body, black footer.

## Shapes

Corners are small. Cards and the "Sign in" button measure `4px` (26 elements), which equals `--mygov-border-radius-medium` (0.25rem) and `--button-border-radius`. The stylesheet declares a radius ladder: none 0, x-small 0.125rem, small 0.1875rem, medium 0.25rem, large 0.3125rem, x-large 0.5rem, 2x-large 0.75rem and circle `9999px`. The only measured larger radius, `8px 0px 0px 8px`, belongs to the floating "Assistant" control and is not documented. The footer's social icons are white circles; photographs inside cards are rectangular.

## Components

- **Button primary ("Sign in")**: black `#000000` fill, white text, Roboto 18px/500, line-height 22.5px, radius `4px`, padding `14px 32px`, 56px tall and 155px wide, with a 2px solid black border; includes a trailing sign-in icon. It is a `button` element and also appears as a `gui-button` custom element. Declared hover fill is `#333333`.
- **Link**: underlined black text in the header utilities; on hover the measured links invert to white text on a black fill, drop the underline and take a white border.
- **Card**: full-width link tile, white fill, 1px solid `#d9d9d6`, radius `4px`, padding `24px`, shadow `rgba(0, 0, 0, 0.2) 0px 2px 6px 0px`, 378px by 511px: photo on top, bold title, description, chevron at the bottom right. Photos show real people in daily situations (a parent with a toddler, a man at a window, an older couple with a tablet, a worker in an apron, children at a crossing, a person using a laptop from a powered wheelchair).
- **Header band**: `#66d3ee` with the crest, wordmark, black text, and "Browse" underlined in black in the capture.
- **Footer**: black, white text, 16px/24px, 56px 0 40px padding.

## Design System Architecture

myGov links no public design system, style guide or brand guidelines. The pages opened, https://my.gov.au/en/services?redirectFrom=australia.gov.au and the australia.gov.au redirect, link only to an Accessibility page and to logo files under a `/brand/` path. The de-facto system is the shipped stylesheet: 343 custom properties on `:root`, mostly prefixed `--mygov-` (`--mygov-color-brandblue-*`, `--mygov-color-navy-*`, `--mygov-color-neutral-*`, `--mygov-text-color-*`, `--mygov-background-color-*`, `--mygov-border-color-*`, `--mygov-border-radius-*`, `--mygov-font-size-*`, `--mygov-font-weight-*`, `--mygov-space-*`, `--mygov-focus-ring-*`, `--mygov-field-control-*`), alongside older unprefixed names (`--navy`, `--dark-navy`, `--font-size-16`, `--system-green-80`, `--input-border-color`, `--label-height-large`). Semantic roles (primary, secondary, passive, info, success, warning, danger) are paired with `-light` and `-x-light` tints. The web font declarations are Roboto (weights 300, 400, 500, 700) and Montserrat. Components include a `gui-button` custom element. Names and values come from the measured `:root` list.

## Do's and Don'ts

- Do keep the headline in Roboto 300 at 62px on desktop, black on white, with the slight negative tracking.
- Do use black `#000000` buttons with white text and `4px` corners; show hover as a darker-grey `#333333` fill.
- Do keep the cyan `#66d3ee` for the header band only.
- Do present each life situation as a white card with a real photograph, a short title and one or two plain lines.
- Don't document or copy the floating "Assistant" chat control as brand UI.
- Don't use `#0000ee` for links; use `#495f7d` or black underlined text.
- Don't add shadows beyond the single card shadow; hierarchy is done with color blocks.
- Don't round buttons into pills; the measured action radius is `4px`.

## Responsive Behavior

Measured in the 390px mobile pass: the h1 is 36px / 45px at weight 300 with `-0.018px` tracking (62px / 77.5px desktop), and its box is 350px wide and 135px tall (1164px wide and 78px tall on desktop). The character-size histogram on mobile is 18px (568), 16px (211), 22px (71), 14px (63), 36px (37) and 20px (21). Number of card columns, header and navigation behavior, and footer layout at narrow widths were not measured. The floating Assistant control's mobile geometry was recorded but is not documented.

## Iteration Guide

1. Build from three surfaces: `#ffffff` page, `#66d3ee` header band, `#000000` footer.
2. Set everything in Roboto: 300 for the display headline, 400 for body and links, 500 for buttons.
3. Use `#000000` buttons with `4px` corners, `14px 32px` padding and `#ffffff` text; add the `#333333` hover.
4. Make cards 378px wide with `24px` padding, a 1px `#d9d9d6` border and the `0px 2px 6px` shadow; keep photos real and cropped to the card width.
5. Take status colors only from the declared variables: info `#1a78c2`, success `#1d6e31`, danger `#c3362b`, warning `#d37e1d`.
6. To extend, measure another page first: `node web/scripts/extract-tokens.mjs --slug=australia-gov-au--<page> --url=<url> --force --no-motion`, then `node web/scripts/verify-designs.mjs --slug=australia-gov-au`.
