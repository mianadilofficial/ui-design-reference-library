---
version: alpha
name: Dutch Mill
category: "Thai Brands"
description: "Dutch Mill (ดัชมิลล์) Thai dairy site: a black top bar over a sky-blue hero with milk-splash photography, Prompt typeface at 15px, blues #076aad and #0fa1f2, an orange (#f17b1f) pill outline, and generous 14 to 60px rounding."

colors:
  canvas: "#ffffff"
  ink: "#076aad"
  primary: "#0fa1f2"
  surface-footer: "#1587c9"
  surface-sky: "#9fd3f4"
  ink-muted: "#818181"
  ink-navy: "#143b7f"
  ink-sky: "#0d8dce"
  accent-orange: "#f17b1f"
  nav-bg: "#000000"
typography:
  display:
    fontFamily: Prompt, sans-serif
    fontSize: 15px
    fontWeight: 300
    lineHeight: 22.5px
  display-mobile:
    fontFamily: Prompt, sans-serif
    fontSize: 22px
    fontWeight: 400
    lineHeight: 33px
  body:
    fontFamily: Prompt, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 22.5px
  nav:
    fontFamily: Prompt, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  button-secondary:
    fontFamily: Prompt, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
rounded:
  xs: 14px
  sm: 20px
  md: 30px
  lg: 60px
  pill: 9999px
spacing:
  s1: 3px
  s2: 4px
  s3: 5px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 20px
  s8: 25px
  s9: 30px
  s10: 40px
components:
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.lg}"
    padding: 8px 20px
    height: 45px
    borderColor: "{colors.accent-orange}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.canvas}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-navy}"
    rounded: "{rounded.sm}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.canvas}"
    padding: 128px 0px 0px
---

# Dutch Mill

## Overview
The measured site is https://www.dutchmill.co.th/, the Thai and English corporate-and-product site of Dutch Mill (ดัชมิลล์), a Thai dairy company. The home page describes over four decades of experience and a product range of yogurt, milk, plant-based drinks, coffee drinks and ready-to-eat grains. Its slogan, repeated as a headline, is "อร่อย ดี และมีประโยชน์" (delicious, good and beneficial). The language switch at the top offers EN and TH, and the top bar also carries "Dutch Mill Research", "International Business" and an order-online link (สั่งซื้อออนไลน์).

The page reads as a consumer-friendly brand narrative rather than a catalogue. It opens on a vivid blue hero: the circular windmill logo at left, a hill of product packs (soy milk, drinking yogurt, probiotic cups, milk bottle) at right, a few small cows, and a thick white milk-splash that sweeps across the lower hero and flows into the next section. Below it, a white-to-pale-blue section pairs a smiling worker holding a milk can with the company story, followed by a numbered "five pathways to standard products" infographic (raw-material selection, production quality control, certified facilities, fast delivery, products for every age) arranged along a dashed curved path with round photo bubbles, and then a product heading and category row. A cookie-consent bar slid over the lower hero during the first capture; it is a functional overlay and not part of the brand system.

The voice is warm and reassuring: short Thai sentences about quality, family and health, with blue headlines that mix thin and bold weights ("ดัชมิลล์ เคียงข้างคู่คนไทยมานาน ด้วยผลิตภัณฑ์ที่มีคุณภาพ อร่อย ดี และมีประโยชน์").

## Colors
Blue is the identity. Page copy is `ink` (#076aad), the measured most-read text colour after white, with a deeper navy (`ink-navy`, #143b7f) on cards and a lighter cyan (`ink-sky`, #0d8dce) for accent headings and numbers. `primary` (#0fa1f2) is the bright action/link blue, used sparingly (it covers very little background area). Surfaces are the footer blue (`surface-footer`, #1587c9), a pale sky (`surface-sky`, #9fd3f4) and white (`canvas`, #ffffff). The navigation bar is solid black (`nav-bg`, #000000) with white text. Grey (`ink-muted`, #818181) is used for secondary copy such as the card descriptions.

The only warm colour is orange (`accent-orange`, #f17b1f), measured as the border of the outlined pill button and the base of its translucent gradient fill on the order-online control. Use it only for that purchase action so it keeps its signal value against the blues.

## Typography
All text is Prompt, a Thai-and-Latin family loaded in weights 300, 400, 500 and 600 plus italic, with a generic sans-serif fallback. The role extraction found the top-bar menu as the largest hero text, so `display` is 15px weight 300 with 22.5px line height on desktop and 22px weight 400 on a 390px viewport (`display-mobile`). Body copy is 15px weight 400 on a 22.5px line (`body`). Navigation entries are 20px/30px (`nav`), and the order-online pill is 18px/27px (`button-secondary`). Other measured sizes on the page include 13, 16, 17, 22, 24, 27, 28, 30, 32 and 39px, which is where the large hero headlines in the capture come from; their exact weights were not captured as separate roles, so use the display and nav tokens when a precise value is needed.

Font substitutes: Prompt is available from Google Fonts, so no substitute is needed. If unavailable, use a Thai-capable rounded sans such as Noto Sans Thai.

## Layout
The page is a vertical sequence of wide sections with large, soft transitions rather than hard rules: milk splashes, curved white wave edges and a gradient from blue to white. Content is centred or split two-column (image left, text right) with generous whitespace. Measured spacing values run 3, 4, 5, 10, 12, 15, 20, 25, 30 and 40px, and the footer has 128px of top padding. The top bar is a black strip holding the circular logo at left, six main menu items (about us, products and business, sustainability and news, health and nutrition, careers, contact), and two rows of small pill links above them (research, international business, order online and the EN | TH switch).

## Elevation & Depth
Depth comes from photography and illustration: the product island casts a soft shadow, the milk splash overlaps the hero edge, and sections fade between blues and white. Cards are white with navy text and a small measured radius, and the page uses very little hard shadow. The cookie bar that appeared over the hero had a soft white card shadow and is a platform widget (its colour variables are prefixed --cc-), not part of the brand.

## Shapes
Rounding is generous and friendly: 14px (`xs`), 20px (`sm`), 30px (`md`), 60px (`lg`) and fully round (`pill`). Photos of the five pathways and the logo are circles; cards use 20px; the outlined order-online pill uses the 60px radius. Square corners do not appear on interactive elements.

## Components
**Order-online pill** (`button-secondary`): white 18px Prompt text over an orange translucent gradient, with an orange (#f17b1f) border, 8px 20px padding, 45px height and a 60px radius.

**Navigation bar** (`nav`): solid black with white text, the circular logo at left, and 20px menu labels.

**Content card** (`card`): white background, navy (#143b7f) text and a 20px radius; used for news and activity items.

**Numbered pathway badge**: a small filled blue circle containing a white number, followed by a cyan heading and grey two-line description; the large "5" in the section heading is a display numeral in the brand blue.

**Footer** (`footer`): footer-blue background with a photographic background image, white text and a customer-information-centre block with a phone line, with 128px top padding.

The cookie banner and its Accept and Settings buttons are third-party consent controls and are not brand components. The site has no filled primary button in the measured roles, so no `button-primary` token is declared.

## Design System Architecture
No public design system or brand guideline page was found on the pages opened. The shipped CSS shows the site is built on Bootstrap 5 (custom properties such as --bs-primary and --bs-body-font-weight are present, with the Bootstrap default blue #0d6efd, which is not used as a brand colour), Font Awesome 6 Free icons, the fontello icon font, and a cookie-consent library whose variables begin with --cc-. The de-facto system is therefore Bootstrap layout plus a custom Prompt typography, blue palette and rounded shapes. Source pages opened: https://www.dutchmill.co.th/. A request for https://www.dutchmill.co.th/en returned an HTTP 404 error, so the English-language view was read from the main URL.

## Do's and Don'ts
- Do combine photographic scenes (packs on a green hill, farm and factory photos) with soft white milk-wave edges.
- Do set Thai copy in Prompt with a 1.5 line-height (15px on 22.5px).
- Do reserve orange for the order-online action.
- Do round everything: 20px cards, 60px pills, circular photos.
- Don't use the Bootstrap default blue (#0d6efd) or the cookie banner colours.
- Don't place a second warm accent next to the orange pill.
- Don't use hard-edged boxes or heavy shadows against the soft backgrounds.
- Don't treat the consent bar as a design component.

## Responsive Behavior
The top-bar display text moves from 15px/300 on desktop to 22px/400 on a 390px viewport. Mobile layout of the two-column sections, the infographic and the black bar was not measured. The hero image keeps the milk splash as the lower edge at every width. No mobile-specific spacing values were measured, so reuse the desktop spacing tokens.

## Iteration Guide
1. Start from the black top bar and a full-width blue hero with product photography.
2. Set all text in Prompt: 15px/22.5px weight 400 for body, #076aad for body copy, #143b7f on white cards.
3. Add white wave transitions between sections rather than rules.
4. Use circular photo masks and 20px cards; use a 60px radius for pills.
5. Place the orange outlined pill only on the purchase action.
6. Check any new colour against the blue family (#076aad, #0fa1f2, #0d8dce, #1587c9, #9fd3f4) and the single orange.
7. Re-measure at https://www.dutchmill.co.th/ for any number not in the frontmatter.
