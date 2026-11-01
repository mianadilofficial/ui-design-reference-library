---
version: alpha
name: Verizon
category: "Telecom"
description: 'Verizon consumer home page: Verizon red #ee001e hero and 2px outlined 24px-radius cards on white #ffffff, electric yellow #f8ff3c 44px pill buttons with red labels, 128px/700 Verizon-NHG-DS display type, yellow circular price stickers and glossy 3D objects.'
colors:
  canvas: '#ffffff'
  ink: '#000000'
  accent-yellow: '#f8ff3c'
  primary: '#ee001e'
  surface-card: '#f5f5f7'
  red-alt: '#e00000'
  red-link: '#f50a23'
  ink-muted: '#6f7171'
  hairline: '#d8dada'
  nav-link-text: '#ee0000'
  on-primary: '#ffffff'
typography:
  display:
    fontFamily: Verizon-NHG-DS, Helvetica, Arial, sans-serif, helvetica, arial, sans-serif
    fontSize: 128px
    fontWeight: 700
    lineHeight: 108px
  display-mobile:
    fontFamily: Verizon-NHG-DS, Helvetica, Arial, sans-serif, helvetica, arial, sans-serif
    fontSize: 64px
    fontWeight: 700
    lineHeight: 58px
  body:
    fontFamily: Verizon-NHG-DS, helvetica, arial, sans-serif
    fontSize: 11px
    fontWeight: 400
    lineHeight: 16px
  button:
    fontFamily: Verizon-NHG-DS, Helvetica, Arial, sans-serif, helvetica, arial, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 20px
    letterSpacing: 0.5px
  nav:
    fontFamily: BrandFont-Text, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
rounded:
  xs: 16px
  sm: 24px
  md: 30px
  lg: 40px
  xl: 44px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 10px
  s4: 11px
  s5: 12px
  s6: 14px
  s7: 16px
  s8: 18px
  s9: 20px
  s10: 22px
components:
  button-primary:
    backgroundColor: '{colors.accent-yellow}'
    textColor: '{colors.primary}'
    typography: '{typography.button}'
    rounded: '{rounded.xl}'
    padding: 11px 24px
    height: 44px
    borderColor: '{colors.accent-yellow}'
  button-secondary:
    backgroundColor: '{colors.accent-yellow}'
    textColor: '{colors.primary}'
    typography: '{typography.button}'
    rounded: '{rounded.xl}'
    padding: 11px 24px
    height: 44px
    borderColor: '{colors.accent-yellow}'
  link:
    backgroundColor: '{colors.canvas}'
    textColor: '{colors.red-link}'
    typography: '{typography.button}'
    rounded: '{rounded.xl}'
    padding: 11px 24px
    borderColor: '{colors.red-link}'
  nav:
    backgroundColor: '{colors.canvas}'
    textColor: '{colors.ink}'
  nav-link:
    textColor: '{colors.nav-link-text}'
    typography: '{typography.nav}'
    padding: 8px 0px
  card:
    backgroundColor: '{colors.accent-yellow}'
    textColor: '{colors.ink}'
    rounded: '{rounded.pill}'
  footer:
    backgroundColor: '{colors.canvas}'
    textColor: '{colors.ink}'
---

# Verizon

## Overview
Verizon's consumer home page (`https://www.verizon.com/`, title "Verizon: Wireless, Internet, TV and Phone Services | Official Site") is a loud, promotional retail page. The extraction found 452 visible elements on a 1280px-wide, 4157px-tall page. The capture shows a red-on-white system with one electric-yellow counterpoint: a thin utility bar ("Personal", "Business", "1-833-VERIZON", "Contact us", "Support", "Stores", "Coverage map", "Español"), a header with the red lowercase wordmark and links "Mobile", "Home", "Save", a rounded search field, then a full-width yellow promo strip. Under it sit six outlined pill chips ("Switch to Verizon", "Simplicity Plan", "Home Internet", "Verizon One Mobile + Home", "Bring your phone", "Phone Deals").

The hero is a big red rounded panel: "Introducing Simplicity Plan" in white at 128px, a yellow circular price sticker ("$30 /month per line"), a yellow "Learn more" pill, and a 3D-rendered dartboard with an arrow on the right. Below, "Your phone, your way" is set in red at display size over three outlined cards ("Bring your own phone", "Buy a new phone right now", "Upgrade to the latest phone every year"), then two product cards (iPhone 18 Pro on light gray, iPhone Duo outlined in red), then a home-internet card with a red-roofed 3D birdhouse and a second yellow sticker ("Starting at $30 /month"), and "Loyalty you'll love". The voice is plain-spoken, price-forward and imperative. Imagery is glossy 3D objects in the brand's red, yellow and white rather than photography of people.

## Colors
- `primary` #ee001e: Verizon red. It is the hero panel background (631 weighted area, the largest non-white area), the card outlines, the display headings, the second most-read text color (538 weighted characters) and the hover fill of the outlined cards (hover changes a card from white background and red text to red background and white text).
- `canvas` #ffffff: the page ground (12205 weighted area). `ink` #000000: the most-read text (1216 weighted characters).
- `accent-yellow` #f8ff3c: the fill of the measured buttons, price stickers and promo strip; measured button text on it is red #ee001e. A brighter yellow #f5ff1e is also measured as a background.
- `on-primary` #ffffff: text on the red panels (239 weighted characters).
- `red-alt` #e00000, `red-link` #f50a23 (outlined button text and border) and `nav-link-text` #ee0000: close reds (#e10014 is also measured in text) measured in text, links and borders; they are kept as measured.
- `ink-muted` #6f7171: secondary text. `surface-card` #f5f5f7: the light gray product card. `hairline` #d8dada: the most frequent border color (9 uses).

The system is deliberately limited: red does all the brand work, yellow marks offers and primary actions, black and white carry reading.

## Typography
Four faces are loaded: Verizon-NHG-DS at weights 300, 400 and 700 (display and buttons), Verizon-NHG-eTX 400 and 700 (text), and BrandFont-Display and BrandFont-Text (regular and bold; used in the header, footer and nav). Declared stacks fall back to Helvetica, Arial and sans-serif.
- `display` 128px/700, line-height 108px ("Simplicity Plan"); a 64px/700/64px tier for card titles ("Bring", "Buy"), plus measured 80px, 48px, 40px, 32px sizes.
- `button` 16px/700, line-height 20px, 0.5px letter-spacing, sentence case.
- `body` 11px/400, line-height 16px with 0.293px tracking (72 weighted characters at 11px; this is the legal fine print), while the page's most-read size is 14px (520 weighted characters, 0.5px tracking), followed by 24px, 11px, 12px and 16px.
- `nav` BrandFont-Text 12px/400, line-height 16px.
Letter-spacing is mostly 0.5px at small sizes and normal at display sizes. `display-mobile` is 64px/700 with 58px line-height, the h1 measured at the mobile viewport. Verizon-NHG and BrandFont are proprietary; Helvetica or Arial are the declared fallbacks.

## Layout
The page uses a centered column with an 18px left margin in the capture: the hero panel, the card grid and the home-internet card share the same left and right edges. Cards are laid out in rows of three equal cards, then two (a wider light-gray card and an outlined card), then one full-width card. The measured h1 box is 1192px wide on the 1280px page. Spacing values measured: paddings of 12px (47 uses), 24px (21), 8px, 16px, 20px, 11px, 4px, 34px, 14px, 50px, 10px, 27px, 18px, 32px, 40px, 22px; gaps of 8px (10) and 24px (6). The root custom property `--vui-root-grid-gap` is .75rem. Density is medium-high with big type separating sections.

## Elevation & Depth
Most surfaces are flat, bordered or color-filled. One box-shadow is measured, a three-layer soft stack: `rgba(0, 0, 0, 0.24) 0px 2px 4px 0px, rgba(0, 0, 0, 0.16) 0px 4px 8px 0px, rgba(0, 0, 0, 0.08) 0px 16px 24px 0px` (1 use). Depth otherwise comes from the 3D-rendered product objects, a soft ellipse shadow under the dartboard, and the circular yellow price sticker overlapping the red panel's edge. The chat widget and feedback tab in the capture are third-party-style overlays and are not brand components.

## Shapes
Radius is a defining trait: 24px (27 elements, the card radius), 44px (9, the button radius), 50% (5, circles), 16px (4), 9999px (2, the pill and sticker), 30px and 40px (1 each). The frontmatter lists `xs` 16px, `sm` 24px, `md` 30px, `lg` 40px, `xl` 44px, `pill` 9999px. Cards carry a 2px red border; the circular price stickers are 268x268.

## Components
- **Primary button** (`button-primary`): "Learn more" / "Check availability", fill #f8ff3c, text #ee001e, 16px/700, 0.5px tracking, padding 11px 24px, height 44px, 1px solid #f8ff3c border, radius 44px. "Learn more" measures 137x44 and "Check availability" 185x44.
- **Outlined button / link** (`link`): "Switch to Verizon", white fill, #f50a23 text and 1px solid #f50a23 border, same size and radius, 182x44.
- **Chip row**: the six outlined pills under the header use the same outlined style.
- **Offer cards**: white fill with a 2px solid #ee001e border, radius 24px, padding 24px, 395x220, a 64px/700 red title and a small arrow at the bottom right; hover inverts to red fill with white text.
- **Price sticker** (`card`): a yellow circle, 268x268, radius 9999px, black 120px/700 digits.
- **Nav-link**: BrandFont-Text 12px, #ee0000, padding 8px 0.
- **Footer**: white ground, black links in BrandFont-Display, 795px tall in the measurement.
- Not brand UI: the "Feedback" side tab and the "Need assistance? Let's Chat" widget.

## Design System Architecture
Verizon's stylesheet carries a `--vui-` token layer (Verizon UI) visible in `rootVars`, for example `--vui-theme-color-interactive-focusring` #000000, `--vui-theme-color-buttonicon-highcontrast-background` #000000, `--vui-root-grid-gap` .75rem and `--vui-text_letter-spacing--bold` .03125rem, plus layout variables like `--custom-height--lg`. No public Verizon design-system documentation was found among the pages opened for this document, and none is cited. Source: measured page https://www.verizon.com/ via `web/data/extracted/verizon.json`.

## Do's and Don'ts
Do
- Use Verizon red #ee001e for headlines, card outlines and the hero panel, on a white ground.
- Reserve yellow #f8ff3c for offers and primary pills, with red 16px/700 labels.
- Use 24px radius cards and 44px radius buttons.
- State the price in large type inside a yellow circle.
- Invert outlined cards to solid red on hover.

Don't
- Don't use yellow as a background for large areas; it covers 164 weighted area versus 631 for red.
- Don't style the feedback tab or chat widget as brand UI.
- Don't add shadows to cards; the one measured shadow is on a floating element.
- Don't use the browser link blue; none is a brand color.

## Responsive Behavior
The mobile pass recorded: h1 "Simplicity Plan" at 64px/700 with 58px line-height in a 338x128 box (desktop 128px/108px); body 11px/16px unchanged in a 310px-wide box; the "Learn more" button unchanged at 137x44 with the same 16px/700 type; and a header 390px wide and 201px tall. The mobile size ranking is led by 16px, then 12px, 11px, 20px and 14px, with larger 26px, 40px, 43px and 48px sizes also present. Breakpoints and navigation behavior are not measured.

## Iteration Guide
1. Set canvas #ffffff, ink #000000, primary #ee001e, accent-yellow #f8ff3c.
2. Build a red 24px-radius hero with a 128px/108px white 700 headline and a yellow circular price sticker.
3. Use yellow 44px-high pill buttons with red 16px/700 labels.
4. Build cards with a 2px #ee001e border, 24px radius and 24px padding.
5. Keep legal copy at 11px/16px; use fonts Verizon-NHG-DS/BrandFont with Helvetica fallback.
6. Run `node web/scripts/verify-designs.mjs --slug=verizon`.
