---
version: alpha
name: VMware by Broadcom
category: "Design Systems"
description: "The VMware by Broadcom homepage: Metropolis in thin 300 weight at 50px for headlines and 16px body in grey #565656, a deep-navy hero (#1b1d36), one corporate blue (#005c8a) for uppercase 14px buttons with 3px corners and for card titles, white cards with a soft blue-tinted 14px shadow, and isometric parallelogram illustrations in blue, teal, green and purple."

colors:
  canvas: "#ffffff"
  ink: "#565656"
  ink-strong: "#000000"
  ink-dark: "#333333"
  primary: "#005c8a"
  primary-light: "#0075a3"
  on-primary: "#ffffff"
  surface-grey: "#f7f7f7"
  surface-tint: "#f4f8fa"
  hero-navy: "#1b1d36"
  nav-link-text: "#000000e6"
typography:
  display:
    fontFamily: Metropolis, sans-serif
    fontSize: 50px
    fontWeight: 300
    lineHeight: 65px
  display-mobile:
    fontFamily: Metropolis, sans-serif
    fontSize: 40px
    fontWeight: 300
    lineHeight: 52px
  subheading:
    fontFamily: Metropolis, sans-serif
    fontSize: 25px
    fontWeight: 300
    lineHeight: 33px
  body:
    fontFamily: Metropolis, sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
  button:
    fontFamily: Metropolis, sans-serif
    fontSize: 14px
    fontWeight: 200
    lineHeight: 21px
    textTransform: uppercase
  nav:
    fontFamily: Metropolis, sans-serif
    fontSize: 20px
    fontWeight: 300
    lineHeight: 24px
  button-secondary:
    fontFamily: Metropolis, sans-serif
    fontSize: 14px
    fontWeight: 300
    lineHeight: 21px
    textTransform: uppercase
rounded:
  xs: 2px
  sm: 3px
  md: 4px
spacing:
  s1: 2px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 20px
  s9: 23px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 6px 20px
    height: 39px
  button-primary-hover:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    padding: 6px 24px
    height: 35px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
    padding: 0px 0px 2px
  nav:
    textColor: "{colors.ink-strong}"
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
    padding: 0px 0px 5px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.md}"
    padding: 0px 0px 30px
    boxShadow: rgba(17, 69, 134, 0.1) 0px 4px 14px 0px
  hero:
    backgroundColor: "{colors.hero-navy}"
    textColor: "{colors.canvas}"
    typography: "{typography.display}"
---

## Overview

The overall impression is of a large enterprise technology company presenting its products as calm, diagrammatic illustrations rather than photographs. People and offices are absent from the first screens; the page is carried by type, a single blue and a family of illustrations that all share one visual grammar.

The capture is the VMware by Broadcom homepage. A thin grey utility strip with "LOGIN" sits above a white header holding the vmware by Broadcom logo, a four-item menu (Products, Solutions, How To Buy, Resources) that was still fading in when captured, a search icon and a blue uppercase "CONTACT SALES" button. A thin multicolour rule (blue through green to purple) separates the header from the hero. The hero is a deep navy-to-blue field with a white 50px headline, "Deliver an AI Factory with VMware Cloud Foundation", a one-line proof ("Faster time to first model. Better control over AI tokenomics."), an outlined "READ PRESS RELEASE" button, and a large isometric illustration of a shield with a brain circuit on a purple and sky-blue parallelogram.

Below, a teal event banner, three white feature cards with blue titles and illustrations, a centred "What Can We Help You Solve?" section with three columns of illustration, blue heading and grey paragraph, then "Trending Topics" cards. A cookie notice overlapped the lower hero in the capture; it is a consent layer and not part of the brand interface, so it is not documented. The voice is enterprise-direct and capitalised in headings ("Elevate to VMware Private AI Cloud").

## Colors

`canvas` is #ffffff; `surface-grey` #f7f7f7 and `surface-tint` #f4f8fa alternate as section backgrounds under the cards. `ink` #565656 is the grey of body copy and paragraphs, `ink-strong` #000000 sets headings and utility text, `ink-dark` #333333 appears in small amounts, and the nav labels use `nav-link-text` #000000e6 (black at about 90% opacity).

`primary` #005c8a is the corporate blue: it fills the Contact Sales button, colours card titles, column headings and links, and tints the event banner. `on-primary` is #ffffff. `primary-light` #0075a3 is a lighter blue that appears in small amounts. `hero-navy` #1b1d36 is the deep navy at the base of the hero. The site's inherited Bootstrap variables (for example its default #007bff `--primary`) are framework defaults that do not show in the interface, so they are not tokens here. The illustrations bring in the full range of blues, teal, green and purple but are artwork, not UI colours.

## Typography

Metropolis, with a generic sans-serif fallback, in very light weights: the font files loaded are 200 and 300. `display` is 50px at weight 300 on a 65px line height (40px on 52px at the 390px mobile width), `subheading` is 25px at 300 on 33px, `body` is 16px at 300 on 24px, and `nav` is 20px at 300 on 24px. Buttons are 14px uppercase: `button` at weight 200 on 21px, `button-secondary` at 300. The thin weights at large sizes give a refined, technical feel; the uppercase buttons are the main contrast.

Substitutes: Metropolis is an open-source geometric sans; where it fails to load, the declared fallback is the generic sans-serif, and a light-weight geometric sans is a closer substitute than a neutral grotesque.

## Layout

A centred wide container with equal outer margins and breakpoints defined at 576px, 768px, 992px and 1200px by the framework variables. Sections stack as full-width bands: hero, event strip, grey-tinted card row, white "help you solve" columns, white trending topics. Cards sit in a three-column row and the trending cards are two-column with a thumbnail beside text. Spacing runs 2, 6, 8, 10, 12, 15, 16, 20, 23 and 24px, with section gaps far beyond that, produced by whitespace around illustrations.

## Elevation & Depth

Cards use a single soft shadow tinted with the brand blue, `rgba(17, 69, 134, 0.1) 0px 4px 14px 0px`, over a white or grey-tinted background; this is the only recurring elevation. A faint dark glow (around 20% to 35% black at 4px blur) appears on a few small controls. The hero carries depth through its gradient and layered illustration instead.

## Shapes

Radii are tiny: `rounded.xs` 2px, `rounded.sm` 3px for buttons, `rounded.md` 4px for cards. Some cards use rounded bottom corners only (3px at the bottom). The illustrations break the rectilinear grid with a recurring parallelogram (an isometric slab), which is the brand's main shape device; the 3px buttons stay square-ish beside them, so the page contrasts one dynamic diagonal shape language in the artwork with a very restrained rectangular one in the interface, and that contrast is what makes the artwork read as the brand.

## Components

- **Primary button.** `button-primary`: #005c8a fill, white 14px uppercase label at weight 200, 3px radius, 6px by 20px padding, 39px tall. On hover it inverts to white with blue text (`button-primary-hover`).
- **Outlined button.** `button-secondary`: transparent, white 14px uppercase label at weight 300, 1px white border, 3px radius, 6px by 24px padding, 35px tall; used on the dark hero ("READ PRESS RELEASE").
- **Card.** `card`: white, 4px radius, blue 25px-style title centred under an illustration, the blue shadow above, 30px bottom padding.
- **Text link.** `link`: 16px in `primary`, with 2px bottom padding.
- **Navigation.** `nav-link`: 20px light-weight labels in near-black.
- **Hero.** `hero`: navy field with white 50px headline.

## Design System Architecture

The design-system site given for this entry is [clarity.design](https://clarity.design), whose page describes itself in its meta description as "UX guidelines, HTML/CSS framework, and Angular components working together", with a Broadcom copyright header and an MIT licence notice. The [ng-clarity repository](https://github.com/vmware-clarity/ng-clarity) describes Clarity as an open-source design system built for Angular with the `@clr/ui` (static styles) and `@clr/angular` (components) packages, maintained by VMware's `vmware-clarity` GitHub organisation. The vmware.com capture does not use it: the extracted CSS contains no `clr-` classes or `--clr` variables, and the page's root exposes Bootstrap-style variables (`--primary`, `--breakpoint-*`, `--font-family-sans-serif`) plus Font Awesome 6 and a custom icon font. This file therefore takes no values from Clarity and describes the de-facto system on vmware.com from its measured styles.

## Do's and Don'ts

- Do use #005c8a for the single primary action and for card and column titles.
- Do set headlines in Metropolis at weight 300 and make buttons uppercase.
- Do keep corners at 3px to 4px and use the soft blue-tinted card shadow.
- Do use isometric parallelogram illustrations for product themes.
- Don't use bold headlines; the voice is light.
- Don't use the framework's default #007bff blue.
- Don't use pill or heavily rounded buttons.
- Don't use browser-default link colours.

## Responsive Behavior

The display headline drops from 50px to 40px at the 390px mobile width with the line height moving from 65px to 52px. The framework variables declare breakpoints at 576px, 768px, 992px and 1200px; the capture did not measure how the cards reflow, so only the headline change is documented.

## Iteration Guide

1. Begin with white `canvas`, `ink` body text and Metropolis in weight 300.
2. Add `primary` for buttons and titles; make button labels uppercase 14px.
3. Use grey and blue-tinted section bands, with white 4px-radius cards and the blue shadow.
4. Put an isometric illustration at the top of each card or column.
5. Keep the hero navy (`hero-navy`) with white text and an outlined button.
