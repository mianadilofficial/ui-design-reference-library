---
version: alpha
name: ActiveHop
category: "Food & Beverage"
description: "Sparkling hop water brand measured at active-hop.com: white page, black Lekton 700 monospace type at 13.6px, a translucent white pill navigation with 80px radius over a rounded photographic hero, and giant Sora 700 flavour words at 240px in sage #e5e8d0 and light grey #eeeeee."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#e5e8d0"
  ink-muted: "#99a1af"
  marquee-grey: "#eeeeee"
  nav-bg: "#ffffff80"
typography:
  display:
    fontFamily: Lekton
    fontSize: 13.6px
    fontWeight: 700
    lineHeight: 14.96px
    textTransform: uppercase
  display-mobile:
    fontFamily: Lekton
    fontSize: 10.8px
    fontWeight: 700
    lineHeight: 11.88px
    textTransform: uppercase
  marquee:
    fontFamily: Sora
    fontSize: 240px
    fontWeight: 700
    lineHeight: 192px
rounded:
  xs: 8px
  sm: 12px
  md: 20px
  lg: 80px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 32px
components:
  link:
    textColor: "{colors.primary}"
    typography: "{typography.marquee}"
    padding: 0px 16px
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
  card:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
    padding: 16px
  footer:
    textColor: "{colors.ink}"
    padding: 16px
---

## Overview
ActiveHop (title "ActiveHop - Sparkling Hop Water | Outdoor Inside") sells a sparkling hop water that its page describes as natural, with zero sugar, carbs, fat, alcohol, calories and colouring. The range is three flavours, Drop, Trail and Rad, plus a Discovery Box sampler. Navigation reads Products, About us, Subscribe, a cart count "(0)" and a language switch (EN, IT). The footer lists Contacts, Privacy Policy, Refund Policy, Shipping Policy, Terms of Service and Credits.

The capture is minimal and monospaced. A rounded hero panel, about the full viewport, shows a soft, washed-out photographic backdrop of bubbles and a 3D aluminium bottle drifting at an angle. A translucent white pill navigation (`{colors.nav-bg}`) floats in the middle of it with the "ActiveHop" logotype at the centre, "PRODUCTS" and "ABOUT US" at the left, and "SUBSCRIBE IT (0)" at the right. Under the hero, a short centred paragraph in monospace explains the product ("Composed of a few natural elements. Designed to quench your thirst with pleasure thanks to the subtle herbaceous and bitter note characteristic of hops."). After a long stretch of white, giant marquee words repeat down the page: "DROP" in pale sage, "TRAIL" in light grey and "RAD" in a lighter grey, cropped at the viewport edges. The brand's tagline "Outdoor Inside" and a breadcrumb sequence (Flavors, Target Zero, Flower Power, Fit for purpose, Ready to go) appear in the page's copy.

## Colors
The page is white (`{colors.canvas}`, 5120 area units) with a 50 percent white layer (`{colors.nav-bg}` #ffffff80, 452 units) for the navigation and cards. Text is `{colors.ink}` (#000000) at 3259 character weight, with `{colors.ink-muted}` (#99a1af, 177), `{colors.marquee-grey}` (#eeeeee, 120) and the sage `{colors.primary}` (#e5e8d0, 60). The sage and the greys are measured on the giant flavour words, which are the only places where colour appears besides the photography. No filled button was found by the extractor, so `{colors.primary}` is the marquee colour and `{colors.on-primary}` is not declared.

Product photography carries the colour: the aluminium bottle is silver with a cream label and black type, set against a pearly white and soft pink backdrop. Interface elements do not add accent colours.

## Typography
Two families are loaded: Lekton 700 (a monospaced face) and Sora (variable 100 to 800). Lekton is used for everything small: navigation, body, labels. Sora is used for the giant marquee words.

- `{typography.display}`: Lekton 700 at 13.6px / 14.96px, uppercase. This is the navigation-link style, which the extractor took as the largest hero text since the page has no h1. Mobile: 10.8px / 11.88px.
- `{typography.marquee}`: Sora 700 at 240px / 192px for the flavour words. On the mobile pass the largest measured size is 128px (180 characters).
- Body: the paragraph is Lekton 700 at 13.6px / 14.96px (10.8px / 11.88px on mobile) in sentence case, centred.

All sizes are small apart from the marquee; there is no mid-size heading scale. The stylesheet declares `--text-huge--font-weight: 800` and Tailwind text variables up to `--text-9xl: 8rem` (128px). Font substitutes: Lekton can be replaced by any monospace with a bold weight, and Sora by a geometric sans; both are available on Google Fonts, so no substitute is needed.

## Layout
Desktop width is 1280px and the page height is 19279px, most of it long scroll sections. The navigation is a centred pill that floats over the hero and is 92px high on desktop (`--header-height: 64px` is also declared). The hero is a rounded panel inset from the viewport edges. The product copy block is a narrow centred column (the paragraph measures 448px wide). Marquee words run edge to edge and are clipped by the viewport. The measured spacing steps are 4, 8, 12, 16 and 32px. A cart drawer width is declared as `--aside-width: 400px`.

## Elevation & Depth
No box-shadows are measured on the roles; the stylesheet's shadow values are Tailwind variable chains and one `0 4px 12px` value. Depth is atmospheric: the translucent navigation lets the photograph behind it show through, and the bottle floats within the hero. Do not add shadows.

## Shapes
Radii measured on elements: full pill (9 elements), 8px (6), 12px (4), 20px (2) and 80px (1, the navigation). In the token file they are `{rounded.pill}`, `{rounded.xs}` 8px, `{rounded.sm}` 12px, `{rounded.md}` 20px and `{rounded.lg}` 80px. The hero panel carries rounded corners in the capture; its exact radius was not isolated.

## Components
**Navigation** (`nav`): translucent white `{colors.nav-bg}` pill, 80px radius, black Lekton uppercase links. Desktop height 92px, mobile 39px tall and 374px wide. The measured hover on "SUBSCRIBE" lowers opacity from 1 to 0.6; there is no colour change.

**Card** (`card`): the same translucent white, 8px radius, 16px padding, black text.

**Marquee word**: Sora 700 240px, `{colors.primary}` or `{colors.marquee-grey}`, repeated and clipped.

**Language and cart**: text items "IT" and "(0)" inside the navigation; the zero in grey.

## Design System Architecture
Source: https://www.active-hop.com/ (opened for this document). No brand guideline or design system is linked: the homepage fetched for this document lists no such link, and its footer "Credits" link points to sixsocks.studio, which was not opened. The shipped CSS shows a Tailwind v4 base (`--text-2xl: 1.5rem`, `--text-9xl: 8rem`, `--color-gray-800`) with a store layer (`--header-height: 64px`, `--aside-width: 400px`, `--cart-aside-summary-height-with-discount: 300px`) and the Leva debug panel variables (`--leva-colors-elevation1`, `--leva-radii-sm`), which belong to a third-party controls library and are not brand tokens. The de-facto system is therefore two fonts, one near-black ink, white, and sage and grey for large type.

Voice and content: copy is short and declarative, written in English with an Italian language switch. The product paragraph names its sensory promise ("a sensation of purity that recalls the very essence of spring water") and closes with a statement of positioning ("for those looking for natural but not banal, rich but not artificial flavors"). Section naming uses a breadcrumb of playful phrases, "Outdoor Inside", "Target Zero", "Flower Power", "Fit for purpose" and "Ready to go", which act as chapter labels down the long scroll. A product description elsewhere on the page mentions an aluminium bottle that is light to carry but sturdy. The cart is shown only as a count in parentheses next to "SUBSCRIBE IT", and the language switch is a two-letter code, so utility navigation never gets its own visual treatment.

## Do's and Don'ts
- Do set small copy in Lekton bold, uppercase for navigation and sentence case for paragraphs.
- Do let giant Sora words bleed off the viewport.
- Do keep the interface monochrome and let the product photograph carry colour.
- Do use the translucent pill navigation over imagery.
- Don't add accent button colours; none were measured.
- Don't use the Leva panel colours (#292d39 and others) as brand colours.
- Don't add shadows to the navigation.

## Responsive Behavior
Measured at 390px: type steps down to 10.8px / 11.88px for navigation and body, the paragraph box is 310px wide, the navigation pill is 39px tall and 374px wide (radius 80px) and the largest text is 128px. Cart drawer, product grid and the language switch behaviour were not measured.

## Iteration Guide
1. White page, black Lekton text at 13.6px, uppercase links.
2. Translucent white pill nav at 80px radius over a rounded photo hero.
3. Giant flavour words in Sora 700 at 240px in sage `{colors.primary}` and light grey.
4. Keep the layout empty and slow: long white scroll areas between short blocks.
5. Hover: opacity 0.6; other interactions and dark mode were not measured.
