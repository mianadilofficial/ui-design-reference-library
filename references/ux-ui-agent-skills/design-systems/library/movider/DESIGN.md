---
version: alpha
name: "Movider"
category: "Thai Brands"
description: "Movider (movider.co) is a bulk SMS and CPaaS messaging gateway, measured live: Poppins with Noto Sans Thai, an accent blue #2fa1fa, a #33b2f6 to #1b45c6 gradient button with 10px corners, navy #1a3454 headings and pale #ebf8ff section fields."
colors:
  canvas: "#ffffff"
  page-largest: "#ebf8ff"
  ink: "#6b7589"
  primary: "#2fa1fa"
  on-primary: "#ffffff"
  surface-2: "#000000"
  ink-4: "#0a2240"
  ink-heading: "#1a3454"
  gradient-start: "#33b2f6"
  gradient-end: "#1b45c6"
  ink-6: "#64748b"
  hairline: "#2fa1fa"
  footer-bg: "#131313"
typography:
  display:
    fontFamily: __Poppins_9652c3, __Poppins_Fallback_9652c3, __Noto_Sans_Thai_18f5ac, __Noto_Sans_Thai_Fallback_18f5ac, sans-serif
    fontSize: 64px
    fontWeight: 700
    lineHeight: 83.2px
  display-mobile:
    fontFamily: __Poppins_9652c3, __Poppins_Fallback_9652c3, __Noto_Sans_Thai_18f5ac, __Noto_Sans_Thai_Fallback_18f5ac, sans-serif
    fontSize: 45px
    fontWeight: 700
    lineHeight: 58.5px
  heading:
    fontFamily: __Poppins_9652c3, __Poppins_Fallback_9652c3, __Noto_Sans_Thai_18f5ac, __Noto_Sans_Thai_Fallback_18f5ac, sans-serif
    fontSize: 24px
    fontWeight: 500
    lineHeight: 28.8px
  subheading:
    fontFamily: __Poppins_9652c3, __Poppins_Fallback_9652c3, __Noto_Sans_Thai_18f5ac, __Noto_Sans_Thai_Fallback_18f5ac, sans-serif
    fontSize: 20px
    fontWeight: 700
    lineHeight: 20px
  body:
    fontFamily: __Poppins_9652c3, __Poppins_Fallback_9652c3, __Noto_Sans_Thai_18f5ac, __Noto_Sans_Thai_Fallback_18f5ac, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26px
  nav:
    fontFamily: __Poppins_9652c3, __Poppins_Fallback_9652c3, __Noto_Sans_Thai_18f5ac, __Noto_Sans_Thai_Fallback_18f5ac, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 34px
  button:
    fontFamily: __Poppins_9652c3, __Poppins_Fallback_9652c3, __Noto_Sans_Thai_18f5ac, __Noto_Sans_Thai_Fallback_18f5ac, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 16px
rounded:
  xs: 8px
  sm: 10px
  md: 15px
  lg: 16px
  xl: 20px
  2xl: 50px
  3xl: 100px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 13px
  s8: 14px
  s9: 15px
  s10: 16px
components:
  button-primary:
    backgroundImage: "linear-gradient(211.1deg, rgb(51, 178, 246) 2.18%, rgb(27, 69, 198) 137.92%)"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
  button-outline:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    borderColor: "{colors.hairline}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  card:
    textColor: "{colors.canvas}"
    rounded: "{rounded.xl}"
    padding: 30px
    boxShadow: rgba(216, 231, 240, 0.7) 0px 4px 40px 0px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 200px 0px 0px
---

# Movider

## Overview

Movider is a cloud messaging platform: bulk SMS, verification and authentication, and chat channels such as Viber and WhatsApp. The measured page is https://movider.co/en/ with the document title "Movider: Global Bulk SMS Gateway, Verify and Authentication". The page opens with a promotional blue banner reading "Get your own SMS sender name for FREE" with a yellow "FREE" tag and an "Available Now!" link. Below it a white header carries the lowercase "movider" wordmark, menu items Product, Pricing, Developer, Contact Us and Blog, an EN/TH language switch, a Login link and a white "Sign Up" button.

The hero is a photograph of a smiling woman holding a laptop and phone against a bright cloud-blue sky. Display copy in a four-line headline alternates colors: "Best Price" and "Maximum Reach" in the accent blue, "Drive Your" and "Success with us" in navy. A circular blue badge states "SMS Marketing starting at 0.0100 USD/Message in Thailand", pill chips for SMS, Viber and WhatsApp float beside the photo, and two buttons offer "Get Free Trial" and "Contact Sales". A row of client logos follows under the heading "Clients Who Trust Our Services", then a globe graphic with the headline "Leader of CPaaS in Southeast Asia Globally, across over 200 different countries, and with local support", three gradient statistic cards (190+ countries, 100m+ per month, 8 countries) and a "Global Security Certificate" panel referring to ISO/IEC 27001.

The voice is confident and commercial: price first, reach second, then proof (logos, numbers, certification). The page is bilingual in structure, with a Thai language option and a Thai-capable font in the stack.

## Colors

The page background that the viewer sees is white, #ffffff (`canvas`). Large alternate fields use a pale sky blue, #ebf8ff (`page-largest`), which is the largest measured background by area (weight 5,091) and matches the root variable `--light-blue-3-color`. A black #000000 background is measured at weight 1,484 (`surface-2`), and #131313 (`footer-bg`) is the footer background, also a root variable (`--bg-dark-0`).

The brand accent is #2fa1fa (`primary`). It is the root variable `--accent-color`, the color of the blue headline words, of the "Contact Sales" label and of its 1px border (`hairline`), and it is the hover color of the Contact Us and Blog nav links. The filled "Get Free Trial" button is not a flat color: its background is a gradient defined in the root variable `--btn-accent-color` and measured on the button as linear-gradient(211.1deg, rgb(51, 178, 246) 2.18%, rgb(27, 69, 198) 137.92%), from #33b2f6 (`gradient-start`) to #1b45c6 (`gradient-end`). Its label is white, #ffffff (`on-primary`).

Text uses a navy for headings, #1a3454 (`ink-heading`, root variable `--text-dark-1`, the h1 color), a deeper navy #0a2240 (`ink-4`) for navigation and small headings, and a slate grey #6b7589 (`ink`) for reading text, which is the most-read color (1,686 characters). A second slate, #64748b (`ink-6`), appears on 224 characters. White text is used over the blue banner, the hero chips and the dark footer.

Several other colors are defined as root custom properties (purples such as #6b25c5 and #615ef6, a green #33c89a, orange #f86b45, and a Bootstrap set including #0d6efd) and are not placed in the frontmatter. The Bootstrap primary #0d6efd and the hover blue rgb(10, 88, 202) measured on the Sign Up button are framework defaults and are not brand colors. A syntax-highlight palette (greens, reds, purples such as #98c379 and #e06c75) appears in a code sample and is not a brand palette either.

## Typography

The family is Poppins, with Noto Sans Thai next in the stack and generic sans-serif last. The measured family names are hashed ("__Poppins_9652c3", "__Noto_Sans_Thai_18f5ac") and each has a matching hashed fallback entry, which is how the shipped CSS declares them; the loaded fonts list Poppins at 400, 500, 600 and 700 plus Material Symbols Outlined and FontAwesome for icons. Poppins accounts for 4,174 characters; a monospace face appears on 540 characters in the code sample.

Measured roles:
- `display`: the h1 at 64px, weight 700, line-height 83.2px, in #1a3454 with accent-blue words.
- `display-mobile`: 45px, weight 700, line-height 58.5px.
- `heading`: the h2 at 24px, weight 500, line-height 28.8px.
- `subheading`: 20px, weight 700, line-height 20px.
- `body`: 16px, weight 400, line-height 26px, in #6b7589.
- `button`: 16px, weight 500, line-height 16px (the "Get Free Trial" label).
- `nav`: 20px, weight 400, line-height 34px (used for the banner link "Available Now!").

By character count the sizes are 16px (2,358), 14px (1,212), 20px (245), 45.008px (172), 18px (133), 57.008px (84) and 54px (83). Weights are 400 (3,133), 600 (1,014), 700 (321) and 500 (250). Letter-spacing is normal on the h1 and body; the only measured tracking is -0.4px at 22px (32 characters). The hierarchy is large bold navy headings against light slate body copy, with weight 600 for chip labels and statistic captions.

## Layout

The measured page is 1280px wide and 8,743px tall. The structure is a full-bleed promotional strip, a transparent header over the hero photograph, a hero split into text at left and photograph at right, then alternating white and pale-blue sections: a centred logo row, a two-column "Leader of CPaaS" block with a globe at left and copy at right, a row of three equal statistic cards, and a wide white certificate panel with the badge at centre and copy at right. The footer is dark, with 200px of top padding.

Gaps measured are 10px (18), 20px (12), 12px (4), 8px and 24px (2 each). Paddings by weight are 5px (65), 15px (54), 20px (31), 6px (30), 40px (16), 16px and 24px (15 each), and 30px (14). The `spacing` tokens list 2, 5, 6, 8, 10, 12, 13, 14, 15 and 16px. Density is airy: the logo discs and statistic cards are widely spaced on large white or pale-blue fields.

## Elevation & Depth

Shadows are soft and large. The most frequent is rgba(0, 0, 0, 0.15) 5px 5px 40px 0px, measured on seven elements (the circular client-logo discs in the capture). A pale blue-tinted shadow, rgba(216, 231, 240, 0.7) 0px 4px 40px 0px, is on five elements and is the shadow recorded on the `card` token. One smaller shadow, rgba(0, 0, 0, 0.1) 0px 4px 10px 0px, was measured once. Borders are 1px lines in #2fa1fa (eight elements), white (four) and a faint #0000001a (one). Depth also comes from the photographic hero, the gradient cards and translucent chips over the photo.

## Shapes

The page mixes small rounded rectangles with circles. Measured radii by count are 8px (27), 10px (17), 20px (15), 100% (7), 100px (4), 50px (3), 16px (3), 50% (2) and 15px (1), with two single elements that round only the top or only the bottom corners at 20px. The root variable `--button-border-radius` is 10px, and both the "Get Free Trial" and "Contact Sales" buttons measure 10px (`rounded.sm`). The `rounded` tokens are `xs` 8px, `sm` 10px, `md` 15px, `lg` 16px, `xl` 20px (cards), `2xl` 50px, `3xl` 100px and `pill` 9999px. Circles are used for client logos, the "0.0100" price badge and the chat icon.

## Components

**Primary button** (`button-primary`): the "Get Free Trial" action. Background is the #33b2f6 to #1b45c6 gradient at 211.1 degrees, label white at 16px, weight 500, radius 10px, with a small arrow icon after the label. The generator's first detected button (a "Go" button with #244267 fill and a #9ad3cc label) was an element in the developer code area and was replaced by an override recorded in SOURCES.json.

**Outline button** (`button-outline`): "Contact Sales", transparent, label #2fa1fa, 1px #2fa1fa border, 10px radius.

**Header Sign Up**: white fill, black label, 10px radius and a black border at 45px height; on hover the label and border turn rgb(10, 88, 202), a framework hover color that is not recorded as a token.

**Navigation** (`nav`, `nav-link`, `link`): text links with small chevrons (Product, Pricing, Developer); the measured nav link style is 20px weight 400 in white over the blue banner, and Contact Us and Blog turn #2fa1fa on hover from #0a2240.

**Card** (`card`): 20px radius, 30px padding, the pale blue shadow, white text; the capture shows the three statistic cards with gradient fills in blue, teal and violet. The gradient fills of those cards were not measured as separate tokens.

**Footer** (`footer`): #131313 fill, white 16px weight 500 text, 200px top padding, columns headed Contact Us, Product and Movider.

A WhatsApp chat launcher (green circle, bottom right) and the banner close control are third-party or utility controls and are not tokenized. The language select (EN/TH) was measured at 16px in #0a2240 but is not tokenized as an input.

## Design System Architecture

No public Movider design system or brand-guideline page was found linked from the home page, and none was opened for this document. The de-facto system lives in the shipped CSS as root custom properties: named colors (`--accent-color`, `--text-dark-1`, `--bg-dark-0`, a family of `--bg-light-*` and `--bg-dark-*` fields), a text scale (`--text-xs` 0.6875rem, `--text-sm` 0.8125rem, `--text-base` 0.875rem, `--text-lg` 0.9375rem, `--text-xl` 1.125rem), a gradient variable `--btn-accent-color`, a white-button gradient `--btn-accent-white` and `--button-border-radius: 10px`. The variable set also contains the Bootstrap `--bs-*` family, so Bootstrap is part of the stack, and a Swiper carousel variable (`--swiper-navigation-size: 44px`). Source reviewed: https://movider.co/en/ only; no external sources were consulted.

## Do's and Don'ts

Do set Poppins (with Noto Sans Thai behind it) at weight 700 for display headlines, 500 for buttons, 400 for body.

Do alternate navy #1a3454 and accent blue #2fa1fa inside a single headline for emphasis.

Do use the #33b2f6 to #1b45c6 gradient for the primary filled button and 10px corners on all buttons.

Do give floating elements large, soft shadows (40px blur) rather than hard edges.

Don't use Bootstrap's #0d6efd or #0a58ca as brand colors.

Don't use the code-sample colors (#98c379, #e06c75, #c678dd and similar) as brand colors.

Don't tokenize the WhatsApp launcher or promo-banner close control as brand UI.

## Responsive Behavior

Only the 390px mobile pass was recorded. In it the h1 is 45px, weight 700, line-height 58.5px (width 358px); the h2 is 18px, weight 400, line-height 21.6px, in #1a3454; paragraph text is 16px, weight 400, line-height 26px, in #6b7589; and the banner text block measures 15px at weight 600 in white. Sizes by character count on mobile are led by 16px (2,149), 14px (1,095) and 20px (202), with a 35.008px size at 186 characters. Breakpoint values, column behaviour, navigation form and card arrangement on mobile were not measured.

## Iteration Guide

1. Start from `canvas` #ffffff, `page-largest` #ebf8ff, `ink` #6b7589, `ink-heading` #1a3454 and `primary` #2fa1fa.
2. Use Poppins with Noto Sans Thai; display 64px/700, heading 24px/500, body 16px/400.
3. Build primary buttons with the measured gradient, 10px radius and white 16px/500 label; build secondary buttons as 1px #2fa1fa outlines.
4. Follow the page order: promo banner, header, photo hero with price badge, client logos, globe and CPaaS statement, three statistic cards, certificate panel, dark footer.
5. Run `node web/scripts/verify-designs.mjs --slug=movider` after edits.
6. Leave out anything that is not in `web/data/extracted/movider.json`.
