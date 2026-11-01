---
version: alpha
name: "Y.U.T Corporate"
category: "Thai Brands"
description: "Y.U.T Corporate: Thai enterprise IT and internet services site with brand blue #0087e2 navigation and buttons, Prompt typeface weights 300 to 700, 50px uppercase hero, 20px-radius feature cards and blue-tinted shadows in rgb(0, 78, 190)."
colors:
  canvas: "#fafafa"
  page-body: "#ffffff"
  ink: "#373737"
  primary: "#0087e2"
  on-primary: "#ffffff"
  ink-3: "#000000"
  ink-5: "#272727"
  ink-6: "#505050"
typography:
  display:
    fontFamily: Prompt, Helvetica, Arial, Lucida, sans-serif
    fontSize: 50px
    fontWeight: 700
    lineHeight: 50px
    letterSpacing: 1px
    textTransform: uppercase
  display-mobile:
    fontFamily: Prompt, Helvetica, Arial, Lucida, sans-serif
    fontSize: 30px
    fontWeight: 700
    lineHeight: 30px
    letterSpacing: 1px
    textTransform: uppercase
  heading:
    fontFamily: Prompt, Helvetica, Arial, Lucida, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 16px
  subheading:
    fontFamily: Prompt, Helvetica, Arial, Lucida, sans-serif
    fontSize: 22px
    fontWeight: 300
    lineHeight: 28.6px
  body:
    fontFamily: Prompt, Helvetica, Arial, Lucida, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  button:
    fontFamily: Prompt, Helvetica, Arial, Lucida, sans-serif
    fontSize: 18px
    fontWeight: 600
    lineHeight: 30.6px
  nav:
    fontFamily: Prompt, Helvetica, Arial, Lucida, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 0px
  link:
    fontFamily: Prompt, Helvetica, Arial, Lucida, sans-serif
    fontSize: 20px
    fontWeight: 500
    lineHeight: 16px
rounded:
  xs: 5px
  sm: 10px
  md: 15px
  lg: 20px
  pill: 9999px
spacing:
  s1: 3px
  s2: 5px
  s3: 5.4px
  s4: 8px
  s5: 11px
  s6: 15px
  s7: 18px
  s8: 25.59px
  s9: 30px
  s10: 100px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 5.4px 18px
    height: 51px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.ink-6}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.primary}"
    rounded: "{rounded.lg}"
  footer:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink-3}"
---

# Y.U.T Corporate

## Overview

Y.U.T Corporate (https://ycorp.co.th/, page title "Y.U.T Corporate - บริษัท วาย.ยู.ที คอร์ปอเรท จำกัด") is the Thai-language corporate site of an enterprise IT and internet services company. The measured home page is 2061px tall at 1280px width and is built on WordPress (root variables carry the `--wp--preset--*` prefix). It opens with a pale grey header holding a blue and navy "Y INTERNET" logo mark at the left and a phone block at the right (a blue phone icon, the Thai word for telephone and the number 02-095-5255). A solid bright-blue navigation bar (#0087e2) carries seven white Thai menu items. The hero is a deep blue gradient with the white heading "Y.U.T CORPORATE" at 50px weight 700 uppercase, two lines of light Thai text about raising business capability with complete, modern IT solutions, a bold quoted tagline, and an isometric cloud-and-server illustration with three dark badges ("10+ Years", "99.99%", "1000+" with Thai labels). A light section titled with the Thai phrase for "reasons to choose our services" shows six white cards in two rows, each with a blue rounded-square icon, a blue Thai heading and a short grey description. A pale blue contact band titled with the Thai phrase for "contact us" shows the company name, two Thai addresses, a phone and an email (info@ycorp.co.th), a rounded blue "contact us now" button and an illustration of a headset operator. The footer shows the logo, a copyright line "Copyright © 2026 Y.U.T CORPORATE Co., Ltd. - All Rights Reserved." and the navigation repeated.

A cookie-consent card overlaid the first capture; the page was re-measured with the consent overlay hidden and nothing below is derived from it.

## Colors

`primary` #0087e2 is the brand blue: the navigation bar, the primary button fill and border, card headings and links (177 text characters) and 100 units of background area. A darker blue #004ebe appears as hover text colour and as the shadow colour (rgb(0, 78, 190)). `canvas` #fafafa is the largest light band ground (weight 805) and `page-body` #ffffff is the body background (weight 2060, the largest). Text colours: `ink` #373737 (437 characters, body), white (268, on blue), `ink-3` #000000 (215, footer and headings), `ink-5` #272727 (144) and `ink-6` #505050 (38, the phone number). #edf4fa (7 characters) is a very light blue label colour. Hover on the blue "phone" label shifts rgb(0, 135, 226) to rgb(0, 78, 190), and the phone number link shifts from rgb(80, 80, 80). The WordPress preset palette in root variables (`--wp--preset--color--vivid-cyan-blue` #0693e3, vivid purple #9b51e0, pale cyan blue #8ed1fc, pale pink #f78da7) is the platform default, not a brand colour.

## Typography

Prompt, a Thai and Latin family, is the single text face (1559 characters), with a fallback stack of Helvetica, Arial and Lucida; ETmodules is an icon font (3 characters). Prompt is loaded at weights 300, 400, 500, 600 and 700 plus 400 italic. `display` is 50px weight 700 with 50px line-height, letter-spacing 1px and uppercase; `display-mobile` is 30px. `heading` is 16px weight 600 with 16px line-height. `subheading` is 22px weight 300 with 28.6px line-height. `body` is 14px weight 400 with 21px line-height (572 characters, the most common size). `button` is 18px weight 600 with 30.6px line-height. `nav` is 16px weight 400 and `link` is 20px weight 500. Other measured sizes: 16px (223), 22px (176), 20px (150), 24px (83), 34px (48, section titles), 25px (2). Weights: 400 (990 characters), 600 (281), 300 (186), 700 (54), 500 (51). Letter-spacing is recorded only on the hero (50px with 1px).

## Layout

A centred container of about three-column card rows between full-width bands. Bands alternate #ffffff and #fafafa, then a pale blue gradient for the contact section. Measured paddings: 30px (9 occurrences), 11px (7), 15px (6), 25.5938px (5), 8px, 5px, 5.4px, 18px; spacing tokens are 3px, 5px, 5.4px, 8px, 11px, 15px, 18px, 25.59px, 30px and 100px. The WordPress spacing presets in root variables are `--wp--preset--spacing--30` 0.67rem, `--50` 1.5rem and `--70` 3.38rem. A Swiper carousel with a 44px navigation size is declared.

## Elevation & Depth

Blue-tinted shadows are used. Six elements carry rgb(0, 78, 190) 0px 7px 14px -6px (a downward offset shadow in the darker brand blue), one carries rgb(0, 78, 190) 0px 8px 12px -6px, and three carry an inset rgba(0, 78, 190, 0.43) 0px 0px 3px 0px. The hero gradient and the isometric illustration give additional depth. The WordPress shadow presets (`--wp--preset--shadow--natural` 6px 6px 9px rgba(0, 0, 0, 0.2) and `--outlined`) are platform defaults.

## Shapes

Rounded and friendly. 5px is the most common radius (12 elements, `rounded.xs`), 10px on 6 (`rounded.sm`), 20px on 6 (`rounded.lg`, the white feature cards), 15px on 1 (`rounded.md`, the primary button) and 50% on 1. The icon tiles are rounded squares and the contact button is a rounded rectangle with a 5px border in the same blue as its fill.

## Components

- Primary button (`button-primary`): #0087e2 fill and border (5px), white label, Prompt 18px weight 600, 5.4px 18px padding, 51px high, 15px radius ("contact us now").
- Navigation (`nav`, `nav-link`): solid #0087e2 bar with white Thai labels; a drop-down chevron on the customers item.
- Feature card (`card`): white with a pale border, 20px radius, blue rounded-square icon, blue heading, grey description.
- Link: 20px weight 500 in #505050 with hover to #004ebe.
- Stat badges: dark navy rectangles with white figures ("10+ Years", "99.99%", "1000+") and a blue icon tile.
- Footer (`footer`): white background, black text, logo, copyright line and repeated navigation.

## Design System Architecture

No public design system or brand guideline was found; the measured page links to none. The site is a WordPress build, shown by the `--wp--preset--*` variables, with Prompt as the shipped font and a Swiper carousel. The de-facto system is a single brand blue (#0087e2) with a darker hover blue (#004ebe), a white and #fafafa band rhythm, 20px cards and blue-tinted shadows. Source: https://ycorp.co.th/ and web/data/extracted/y-u-t-corporate.json.

## Do's and Don'ts

- Do use #0087e2 for the navigation bar, buttons, icons and card headings, and #004ebe for hover and shadow tint.
- Do set Thai text in Prompt with weights 300 to 600 and keep the hero heading in 700 uppercase with 1px tracking.
- Do give cards a 20px radius and buttons a 15px radius.
- Do tint shadows blue (rgb(0, 78, 190)) instead of grey.
- Don't use the WordPress preset colours as brand colours.
- Don't present the cookie-consent card as part of the page design.
- Don't use heavy black shadows.

## Responsive Behavior

The 390px mobile pass recorded the hero heading at 30px weight 700 uppercase with 1px tracking (desktop 50px), mobile text sizes 14px (730 characters), 16px (333), 18px (164), 20px (110), 28px (48) and 30px (15), and a body paragraph in Thai about enterprise-grade technology. The mobile layout summary is not recorded. Menu collapse and card columns on narrow screens were not measured.

## Iteration Guide

1. Build a pale header with the logo at the left and a phone block at the right, then a #0087e2 navigation bar.
2. Add a blue gradient hero with a 50px uppercase white heading, two light Thai lines and an isometric illustration with dark stat badges.
3. Use white 20px-radius cards with blue icons and headings in a 3 by 2 grid.
4. End with a pale blue contact band, a rounded blue button and a white footer.
5. Run `node web/scripts/verify-designs.mjs --slug=y-u-t-corporate` after edits.
6. Voice: reassuring, service-quality language in Thai, a quoted promise as tagline, and short sentences under each card heading.
