---
version: alpha
name: United Information Highway (UIH)
category: "Thai Brands"
description: "United Information Highway (UIH) home page measured live: IBM Plex Sans Thai at weight 300 for 40px headlines and Looped at 400 for 16px body, white canvas with #f6f6fb cards, UIH blue #204882 pill buttons (40px radius, 53px tall) and soft grey #858585 body text, with a translucent #ffffffcc floating navigation bar."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#204882"
  on-primary: "#ffffff"
  surface-2: "#f6f6fb"
  ink-secondary: "#858585"
  ink-3: "#8fb8f2"
  nav-bg: "#ffffffcc"
  text-input-border: "#ffffff80"
typography:
  display:
    fontFamily: "\"IBM Plex Sans Thai\", sans-serif"
    fontSize: 40px
    fontWeight: 300
    lineHeight: 48px
  display-mobile:
    fontFamily: "\"IBM Plex Sans Thai\", sans-serif"
    fontSize: 32px
    fontWeight: 300
    lineHeight: 48px
  subheading:
    fontFamily: "\"IBM Plex Sans Thai\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
  body:
    fontFamily: "\"IBM Plex Sans Thai Looped\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26px
  button:
    fontFamily: "\"IBM Plex Sans Thai Looped\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    textTransform: uppercase
rounded:
  xs: 5px
  sm: 10px
  md: 30px
  lg: 40px
spacing:
  s1: 5px
  s2: 10px
  s3: 15px
  s4: 20px
  s5: 40px
  s6: 80px
  s7: 100px
  s8: 125px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 15px 20px
    height: 53px
  link:
    textColor: "{colors.ink-secondary}"
    typography: "{typography.button}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 0px 20px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  text-input:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 5px 10px
    height: 35px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 20px 15px
  footer:
    textColor: "{colors.ink-3}"
    padding: 80px 0px 40px
---

## Overview

This DESIGN.md documents the United Information Highway (UIH) home page measured from https://www.uih.co.th/ (page title "UIH - AI Ready Provider for the Future of Business", 4,769px tall at 1280px wide). UIH presents itself as a managed-services and digital technology provider for enterprises. The page opens with a rounded, translucent floating navigation bar (logo "UIH", About, Products & Services, News & Knowledge, Customer Service, Sustainability, Contact, an EN language switch and a search icon) over a pale, blue-toned hero slider whose headline is "AI Ready Provider for the Future of Business" and "www.uih.co.th", with isometric 3D illustrations (a large UIH logo with cloud, security, AI and service icons) and the slide title "United Information Highway Company Limited" with two circular arrow controls.

The body continues with "Why UIH?" and a short paragraph, five cards on pale lavender-grey (One-Stop Services, Knowledge & Experience, Trustworthy, Satisfaction, Coverage Area) with line icons, and a tabbed "Managed Services" section with outlined tab pills (Managed Services, Cloud & Data Center, Security Services, Digital Services) beside a photograph of an office with server racks. The voice is plain corporate English with metrics ("5,000 Satisfied corporate customers", "over 20 years", "28 different industries", "98% of strategic national business areas").

## Colors

`canvas` #ffffff (3,361 area weight) and `surface-2` #f6f6fb (2,238) are the two surfaces; the card background is #f6f6fb. `primary` #204882 (UIH blue) fills the primary button (11 area weight) and is the colour of 227 text characters and of the logo; on hover, nav text turns this blue (measured: "About" becomes rgb(32, 72, 130)). `ink` #000000 is the heading and navigation text (555 characters). `ink-secondary` #858585 is the dominant text colour (1,352 characters, body copy and links). `ink-3` #8fb8f2 (481 characters) is a light blue used for footer text on the dark footer. `nav-bg` #ffffffcc is the translucent white of the floating navigation bar and `text-input-border` #ffffff80 is the border of the footer input. Borders measured: #000000 (4), #204882 (1) and #ffffff80 (1).

## Typography

Two related families are loaded: IBM Plex Sans Thai (300, 400) for headings and IBM Plex Sans Thai Looped (300, 400, 600) for body and controls, plus an `iconfont`. By characters, Looped carried 2,820 and the plain Thai face 161. Roles: `display` IBM Plex Sans Thai 300 at 40px / 48px ("Why UIH?"), mobile 32px / 48px; `subheading` 400 at 20px / 24px (card titles, "One-Stop Services"); `body` Looped 400 at 16px / 26px; `button` Looped 400 at 14px, uppercase. Sizes by character count: 16px (2,068), 14px (642), 12px (110), 40px (86) and 20px (75). Weights: 400 (2,895) and 300 (86). IBM Plex Sans Thai is an open-source typeface.

## Layout

The page uses a 1240px-wide floating navigation bar inside the 1280px page (20px side margins), and content blocks inset by about 67px in the capture. "Why UIH?" occupies a left column while the five cards form a staggered two-and-three grid on the right; each card is 254px wide in the measurement. Measured paddings: 10px (9), 20px (8), 15px (8), 40px (7), 100px (3), 125px, 80px (footer top) and 5px; gaps are 15px (3), 40px (2), 20px and percentage gaps of 4.16667% and 6.94444%. The stylesheet defines `--spacing-2sm` 25px and related spacing variables.

## Elevation & Depth

No box shadows were measured on rendered elements. Depth in the capture comes from the translucent navigation bar over the hero, isometric illustrations with their own rendered shading, and the contrast of #f6f6fb cards against white. The stylesheet contains `0 0 4px 1px rgba(0,0,0,.08)` and `0 0 8px rgba(0,0,0,0.6)` rules that did not render on measured elements.

## Shapes

Measured radii: 10px (7 elements, cards and nav), 30px (4), 40px (2, the primary button) and 5px (2, inputs). Tokens: `xs` 5px, `sm` 10px, `md` 30px, `lg` 40px. Outlined tab pills and circular arrow buttons in the capture use full rounding.

## Components

`button-primary` ("TECHNOLOGY PARTNERS"): #204882 fill, white Looped 14px uppercase label, 40px radius, 15px 20px padding, 53px tall, 201px wide. `link` ("ABOUT" with a circled arrow): #858585 Looped 14px uppercase. `nav`: #ffffffcc background, 10px radius, 0px 20px padding, 50px tall, 1240px wide, black text; nav links are black Looped 16px. `text-input` (footer subscribe-style field): white text, 5px radius, 5px 10px padding, 35px tall, 315px wide, 1px #ffffff80 border. `card`: #f6f6fb fill, black text, 10px radius, 20px 15px padding, with a line icon, a 20px title and #858585 body copy. `footer`: #8fb8f2 text, padding 80px 0px 40px, 570px tall, with the Bangkok head-office address.

## Design System Architecture

No public UIH design system or brand-guideline page was opened. The shipped CSS is a WordPress theme (WP block preset variables, WPForms variables such as `--wpforms-button-size-height` 41px) with theme variables `--font-body` and `--spacing-2sm`, `--spacing-2lg-minus` -45px and `--spacing-2md-minus` -35px. The de-facto system is a two-face IBM Plex Sans Thai pairing, one brand blue, grey body text and light cards.

## Do's and Don'ts

Do use #204882 as the single brand colour and #858585 for body text. Do set headings in IBM Plex Sans Thai 300 and body in Looped 400. Do use 40px-radius pills for primary buttons and 10px radius for cards. Do keep cards on #f6f6fb with line icons.

Don't add shadows. Don't use heavy weights for headings; 300 is measured. Don't use bright accent colours; the page's colour comes from the brand blue and the 3D illustrations. Don't treat the slider arrows as primary buttons.

## Responsive Behavior

The mobile pass (390px) recorded: h1 "Why UIH?" at 32px / 48px weight 300; body 16px / 26px; the CTA "TECHNOLOGY PARTNERS" unchanged at 14px, 201px by 53px; and a 370px-wide, 50px-tall navigation bar showing "EN" at 12px. Menu form and card collapse are not measured.

## Iteration Guide

1. White canvas, #f6f6fb cards, #204882 actions, #858585 body text.
2. IBM Plex Sans Thai 300 at 40px for headings; Looped 400 at 16px for body.
3. Uppercase 14px pill buttons, 53px tall, 40px radius.
4. Floating translucent nav at #ffffffcc with 10px radius.
5. Gate with `node web/scripts/verify-designs.mjs --slug=united-information-highway-uih`.

## Additional Measurements

The tab pills in "Managed Services" show a black outline on the selected tab and grey outlines on others, with arrows at the section edges. Feature lists use circled check icons followed by short labels (Managed Connectivity, Managed Customer Network, Business Solutions), and a "MORE DETAILS" link in grey uppercase closes the section. Letter spacing is normal on all measured roles.

The "Why UIH?" block pairs a 40px light heading with a grey paragraph ("UIH is a leading digital technology service provider, delivering trusted, end-to-end solutions that help businesses modernize, grow, and compete in a fast-changing world.") and an "ABOUT" link with a circled arrow in the same grey. The card row uses a staggered arrangement: two cards on the first row offset to the right and three cards on the second row, each card with equal inner padding of 20px vertically and 15px horizontally and a thin line icon at the top left. Card body copy stays at 16px in #858585 while card titles are black at 20px, so the hierarchy is carried by size and tone rather than weight. The hero's translucent navigation bar floats above the slider image with margins on both sides, and its language switch ("EN") and search icon sit at the far right in grey. The hero slide text mixes a bold blue "AI Ready Provider" line with a light black "for the Future of Business" line, a white paragraph on the right of the illustration, and a large light-weight slide title at lower left. Only the colours and sizes listed in the frontmatter were measured; the illustration palette (blues and silvers) is photographic and is not tokenised.
