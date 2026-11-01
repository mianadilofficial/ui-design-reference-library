---
version: alpha
name: Trek Bicycles
category: "Sports & Fitness"
description: "Trek Bikes US storefront: photo-led hero and category grid on white, black #000000 text, white 8px-radius uppercase Roboto 500 buttons over imagery, #1a1a1a header and #2b2b2b footer, Avalon-Bold headlines at 34.29px and 10px-radius image tiles."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#ffffff"
  on-primary: "#1a1a1a"
  surface-charcoal: "#424242"
  surface-cream: "#edebe0"
  surface-footer: "#2b2b2b"
  ink-muted: "#b3b3b3"
  ink-light: "#f7f7f7"
  surface-navy: "#1c3047"
typography:
  display:
    fontFamily: Avalon-Bold, Arial, Helvetica, sans-serif
    fontSize: 34.2906px
    fontWeight: 700
    lineHeight: 42.8632px
  display-mobile:
    fontFamily: Avalon-Bold, Arial, Helvetica, sans-serif
    fontSize: 28px
    fontWeight: 700
    lineHeight: 35px
  body:
    fontFamily: Roboto, arial, helvetica, sans-serif
    fontSize: 17.049px
    fontWeight: 400
    lineHeight: 25.6px
  button:
    fontFamily: Roboto, arial, helvetica, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 16px
    textTransform: uppercase
  nav:
    fontFamily: Roboto, arial, helvetica, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 25.6px
rounded:
  xs: 8px
  sm: 10px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 8px
  s4: 12px
  s5: 12.79px
  s6: 14px
  s7: 16px
  s8: 24px
  s9: 32px
  s10: 36px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 14px 12px
    height: 46px
    borderColor: "{colors.canvas}"
  button-secondary:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 14px 12px
    height: 46px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    padding: 8px 8px 8px 36px
    height: 38px
    borderColor: "{colors.surface-charcoal}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink-light}"
---

## Overview

The measured page is the United States English storefront of Trek (`/us/en_US`), titled "World's Best Bikes Collection & Cycling Gear Online". It is a photography-first retail page, 10,103px tall with 770 visible elements. A thin charcoal strip lists the family marks (Trek, Electra, Bontrager, Trek Travel) with country, account and cart icons at the right. Below it a near-black header holds the yellow Trek "50" logo and a one-line category menu: Electric, Mountain, Road, Gravel, City, Kids, Parts, Accessories, Apparel, Sale, Pre-owned, Ride Club, Bike Shops, plus a Search field.

Two full-bleed hero slides follow. The first, "All-new arrivals" with a giant yellow "NEW" graphic behind blurred riders, carries the white button "EXPLORE WHAT'S NEW". The second, "The all-road bike that swept gravel nationals", is a celebratory racing photo with "READ THE REPORT" and "SHOP DOMANE" buttons. After the heroes sit six category tiles in a three-by-two grid (Electric, Road, Mountain, Gravel, City and Kids bikes), each with a rounded lifestyle photograph, a heavy headline and a small underlined "Shop now" link with a chevron. Copy is short and athletic: "Ride more. Spend less. Save now on select bikes."

## Colors

`{colors.canvas}` is white and `{colors.ink}` is black (2,190 characters of black text), so product and category sections are black on white. The chrome is dark: the header is `#1a1a1a` (referenced here as `{colors.on-primary}`, since it is also the label colour on white buttons), the footer is `{colors.surface-footer}` (#2b2b2b) with `{colors.ink-light}` (#f7f7f7) text, and `{colors.surface-charcoal}` (#424242, the single largest painted area at 4,871 units) is also the input border colour. `{colors.surface-cream}` (#edebe0, 3,056 units) is a warm neutral for promotional bands and `{colors.surface-navy}` (#1c3047, 1,388 units) a deep blue panel.

Navigation links use `{colors.ink-muted}` (#b3b3b3). The primary button role is `{colors.primary}` (#ffffff): the hero buttons are white with dark text and a 1px white border, which is how the CTA sits legibly on photography. Secondary buttons invert this: #1a1a1a with white text. The yellow in the "NEW" lettering and the logo is imagery and was not measured as a UI colour. Root variables name a large palette ramp (for example `--rust-500: #c73a38`, `--sand-100: #f4f5f4`, `--amber-200: #ffe099`, `--slate-950: #0f0f10`) that is declared but not applied on the home page.

## Typography

Two families: Avalon-Bold for headlines and Roboto for everything else (Roboto 3,201 characters against Avalon-Bold 1,073). The hero headline (`{typography.display}`) is 34.2906px bold on a 42.8632px line; the same size and font set "Ride more. Spend less." and the category tile titles. Body copy (`{typography.body}`) is Roboto 17.049px on 25.6px. Buttons (`{typography.button}`) are Roboto 500, 16px on a 16px line and uppercase. Navigation and links (`{typography.nav}`) are Roboto 14px on a 25.6px line.

Measured weights are 400 (1,715 characters), 700 (1,190), 300 (1,063), 500 (283) and 600 (23); the fonts loaded are Avalon-Bold, Roboto 300/400/500/700 with a 400 italic, and a Material Icons set for glyphs. The fractional sizes (34.2906px, 17.049px) are computed values of scalable type rather than design constants.

## Layout

The page alternates full-bleed hero photography with a contained three-column grid. Tiles are equal-width, a photo on top, a bold title below and a text link. The header is 90px tall with 14px menu text. Measured paddings are heavily weighted to 1px (69 uses, borders and hairline spacers), then 8px (34), 32px (22), 16px (21), 14px, 12px, 24px and 60px; gaps are 4px (34 uses), 12px, 32px and 16px.

Spacing tokens in the front matter run 1, 4, 8, 12, 14, 16, 24, 32 and 36px. Section rhythm is large, with hero blocks several hundred pixels tall before the compact grid begins.

## Elevation & Depth

Effectively flat. The only measured shadow is `rgba(0, 0, 0, 0) 0px 1px 0px 0px` on six elements, which is transparent, so no visible drop shadow exists on this page. Depth comes from full-bleed photography with text overlaid, and from contrast between dark chrome and white content. Borders measured are #ffffff (9 elements, button outlines), #1a1a1a (7), #d4d4d4 (4) and #424242 (3, input borders).

## Shapes

Rounded-rectangle controls and softly rounded image tiles. Buttons are 8px (`{rounded.xs}`, 15 elements); image tiles and hero thumbnail frames follow `{rounded.sm}` (10px) and the root variable `--pdl-gallery-thumbnail-border-radius` of 0.5rem. The most common radius is 9999px (20 elements: chips, icon buttons and pills) and 50% appears on 5 round icon elements. Input fields are square (radius 0) with a 1px #424242 border and an icon indent. Checkboxes use `--pdl-input-checkbox-radius: 4px`.

## Components

**Primary button.** White fill, #1a1a1a label, 1px white border, Roboto 500 uppercase at 16px, padding 14px 12px, 46px tall, 8px radius. Shown on photography ("EXPLORE WHAT'S NEW", "READ THE REPORT", "DOWNLOAD THE APP").

**Secondary button.** #1a1a1a fill, white label, same size and radius ("SHOP ALL DEALS", "WATCH THE FILM"). The root variable `--pdl-button-bg-hover` is #2b2b2b.

**Text input (search).** #1a1a1a fill, white 17.049px text, 38px tall, 8px padding with 36px left padding for the magnifier icon, 1px #424242 border.

**Category tile.** Rounded photo, 34.29px Avalon-Bold title in black, "Shop now" 14px underlined link with a chevron.

**Navigation.** 14px Roboto links; header 90px tall; the family strip above uses lighter, italic wordmarks.

**Footer.** #2b2b2b fill, #f7f7f7 text, 933px tall, Roboto 15.049px 700 headings (SHOP, Road bikes, Mountain bikes …).

## Design System Architecture

No public design-system page was opened. The shipped CSS shows a component library with the prefix `--pdl-` (about 400 root variables in total). Examples: `--pdl-button-padding-y: 0.875rem`, `--pdl-button-small-padding-x: 0.75rem`, `--pdl-button-color: #fff`, `--pdl-button-bg-hover: #2b2b2b`, `--pdl-button-text-color: #1a1a1a`, `--pdl-button-alert-bg-inverted: #dc3e42`, `--pdl-button-alert-bg-hover: #bb1b20`, `--pdl-button-vibrant-color-inverted: #007ab8`, `--pdl-button-focus-outline-color: #0588f0` with `--pdl-button-focus-outline-offset: 2px`, and `--pdl-input-checkbox-radius: 4px`. Buttons come in primary, secondary, tertiary, alert and vibrant variants, each with an "inverted" set for use on dark or photographic grounds, which matches the white-on-photo hero buttons.

Underneath, colour ramps are named by hue and step (`--ai-900`, `--green-900`, `--cyan-800`, `--pink-600`, `--slate-950`, `--gold-950`, `--rust-500`, `--sand-100`, `--sand-800`, `--amber-200`, `--bronze-400`, `--grass-50`, `--lime-900`).

## Do's and Don'ts

- Do let photography carry the page and overlay white buttons with 1px white borders on it.
- Do set category and promo headlines in Avalon-Bold and everything else in Roboto.
- Do use uppercase 500-weight labels for buttons.
- Do keep chrome dark (#1a1a1a header, #2b2b2b footer) and content areas white.
- Don't add drop shadows; the measured shadow is fully transparent.
- Don't round inputs; fields are square.
- Don't use the palette ramps in the root variables as brand colours unless they appear on a measured element.

## Responsive Behavior

In the 390px mobile pass the headline drops from 34.2906px/42.8632px to 28px/35px (Avalon-Bold 700) and body copy from 17.049px to 16px on a 25.6px line; the hero CTA keeps its 16px, 46px-high, 8px-radius white style. The dominant mobile sizes are 14px (2,799 characters), 16px (363), 30px (308), 24px (257), 20px (233) and 28px (194). Grid column counts, menu collapse and breakpoint values were not measured.

## Iteration Guide

1. White page, black text, dark #1a1a1a header, #2b2b2b footer.
2. Photo-led heroes with white 46px buttons, 8px radius, uppercase labels.
3. Headlines in Avalon-Bold at 34.29px; body in Roboto at 17.049px.
4. Category tiles as three-column grids with rounded photos and "Shop now" links.
5. Keep spacing on 4/8/12/16/24/32.
6. Measure any hover or alert colours before using them; the root variables list them but they were not exercised on the page.
