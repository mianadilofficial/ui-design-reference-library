---
version: alpha
name: M&M'S
category: "Food & Beverage"
description: "M&M'S US shop and brand site: white #ffffff canvas with near-black #040607 ink and brown #5a1f06 labels, pill buttons (light #f3f6fa fill with brown outline, inverting to brown on hover), seasonal saturated card colors on 10px radii, and the custom AllTogether Serif (300/700) and Sans (300/400/700) families."
colors:
  canvas: "#ffffff"
  ink: "#040607"
  primary: "#f3f6fa"
  on-primary: "#5a1f06"
  surface-purple: "#8a1a9b"
  surface-peach: "#ffd0b1"
  surface-sky: "#8aceff"
  surface-orange: "#ed9418"
  surface-pink: "#ffabdf"
  surface-blue: "#0e74e1"
  ink-muted: "#68717d"
  accent-yellow: "#ffd200"
  accent-orange: "#fa6400"
  accent-green: "#00a832"
typography:
  display:
    fontFamily: __allTogetherSerif_924273, __allTogetherSerif_Fallback_924273, "Times New Roman", Times, serif
    fontSize: 56px
    fontWeight: 300
    lineHeight: 64px
  display-mobile:
    fontFamily: __allTogetherSerif_924273, __allTogetherSerif_Fallback_924273, "Times New Roman", Times, serif
    fontSize: 32px
    fontWeight: 300
    lineHeight: 37.3333px
  heading:
    fontFamily: __allTogetherSans_7e0bdd, __allTogetherSans_Fallback_7e0bdd, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 18px
    letterSpacing: 0.28px
  subheading:
    fontFamily: __allTogetherSerif_924273, __allTogetherSerif_Fallback_924273, "Times New Roman", Times, serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 30px
  body:
    fontFamily: __allTogetherSerif_924273, __allTogetherSerif_Fallback_924273, "Times New Roman", Times, serif
    fontSize: 44px
    fontWeight: 300
    lineHeight: 52px
  button:
    fontFamily: __allTogetherSans_7e0bdd, __allTogetherSans_Fallback_7e0bdd, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif
    fontSize: 12px
    fontWeight: 700
    lineHeight: 16px
    letterSpacing: 0.24px
  nav:
    fontFamily: __allTogetherSans_7e0bdd, __allTogetherSans_Fallback_7e0bdd, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif
    fontSize: 12px
    fontWeight: 300
    lineHeight: 18px
  input:
    fontFamily: __allTogetherSans_7e0bdd, __allTogetherSans_Fallback_7e0bdd, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 26px
rounded:
  xs: 10px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5.59px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 14px
  s7: 15.66px
  s8: 16px
  s9: 20px
  s10: 20.3px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 24px
    height: 44px
    borderColor: "{colors.on-primary}"
  button-primary-hover:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.canvas}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
  nav:
    textColor: "{colors.on-primary}"
  nav-link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
    padding: 4px 8px
    borderColor: "{colors.ink}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 8px 0px
    height: 43px
  card:
    backgroundColor: "{colors.surface-blue}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.xs}"
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
---

## Overview

This is the US storefront and brand site of M&M'S (`https://www.mms.com/en-us`, title "Personalized Gifts, Favors and More | M&M'S", measured 1280px wide and 6803px tall). It is a playful retail page built around personalization ("personalize your M&M'S"), gifting and seasonal themes. At capture time the page was in a Halloween mood: a brown promotional bar ("15% off party favors! use code SPICE"), a yellow shipping bar ("free standard shipping on orders $75+! details") with prev/next arrows, a white header with the "m&m's" wordmark in brown, icon-over-label nav (shop, celebrate, explore, NFL, business) and an outlined "personalize your M&M'S" pill, then a peach hero ("costume party must haves") with two pill buttons and a round photograph of candy packs with floating character stickers.

Below, three tall product cards sit over a purple band: a blue "M&M'S x NFL" card, a light-blue "personalized signature box" card and an orange "halloween bundle" card, each with a sticker-style illustration overlapping the top edge, a small label, a bold serif headline, and a "shop now ->" underlined link. Then a purple marquee of lowercase phrases ("trick or treat & ghouls & bats & ghosts") with the ampersands colored orange, green and yellow, and a yellow curved-top "our mission" band: "M&M'S creates a world where everyone feels they belong through the power of fun to include everyone." with a white pill "learn more about our mission", and the colorful candy characters peeking from the bottom edge.

All copy is lowercase except the brand name; labels are short and friendly. The seasonal card colors rotate with campaigns, so only the structure (white shell, saturated rounded cards, brown pills) is the stable system; the specific colors listed below are what was measured on the capture date.

## Colors

- **Canvas `#ffffff`**: the page shell and header, the largest background area by far.
- **Ink `#040607`**: the most-read text color (1881 character-weight), a very dark blue-black.
- **Primary `#f3f6fa`** with **on-primary `#5a1f06`**: the main CTA is a pale blue-white pill with brown text and a 1px brown border; the brown `#5a1f06` is also the color of the hero headline, body copy of the mission statement and the top promo bar. Hover inverts it: fill `#5a1f06`, text `#ffffff` (measured).
- **Seasonal surfaces**: purple `#8a1a9b` (second-largest background area), peach `#ffd0b1` (hero), blue `#0e74e1` (card), sky `#8aceff`, orange `#ed9418`, pink `#ffabdf`, and yellow `#ffd200` (shipping bar and mission band).
- **Text accents**: orange `#fa6400`, green `#00a832` and yellow `#ffd200` (the marquee ampersands), grey `#68717d`.

Other measured background values include `#005e20` dark green, `#d70100` red, `#7245bd`, `#262525` and translucent blacks (`#0000001a`, `#00000080`); these are character colors or overlays and are not tokenized. The page declares a stray `--swiper-theme-color: #007aff`, the Swiper library default, which is not a brand color.

## Typography

The measured root variables name three custom families: `--font-alltogether-serif` (AllTogether Serif, loaded at weights 300 and 700), `--font-alltogether-sans` (AllTogether Sans, loaded at 300, 400 and 700) and `--font-elicit-script` (Elicit Script; declared but not among the measured loaded fonts). Each has a metrics-matched fallback stack: the serif falls back to `"Times New Roman", Times, serif`, the sans to the system UI stack (`-apple-system`, `system-ui`, Segoe UI, Roboto, Helvetica Neue, Arial).

- **Display** (serif 300, 56px / 64px): the hero line "costume party"; "must haves" sits under it in the 700 weight. On mobile the display measured 32px / 37.3333px.
- **Heading** (sans 700, 14px / 18px, 0.28px tracking): the small promo line "15% off favors with code SPICE" and card eyebrows.
- **Subheading** (serif 700, 24px / 30px): card headlines like "your favorite team on your favorite candy".
- **Body** (serif 300, 44px / 52px): the large mission statement.
- **Button** (sans 700, 12px / 16px, 0.24px tracking): all pill labels.
- **Nav** (sans 300, 12px / 18px): icon labels.
- **Input** (sans 300, 16px / 26px).

AllTogether is a custom brand family; no substitute is documented by the source. A slab-leaning soft serif and a rounded humanist sans would approximate the feel, but that is a design note, not a measurement.

## Layout

The page stacks full-width bands, each with its own color and sometimes a curved top edge (the mission band's top is a large arc, and the cards float over a color change). The three product cards are equal-width columns with sticker illustrations that break the top edge. Header icons and nav are left-aligned with account, cart, search and a flag icon on the right. Measured paddings were led by 24px (52), 8px (34), 15.6562px (18), 20px (16), 48px (14) and 32px (8). Measured spacing tokens: 4, 5.59, 8, 10, 12, 14, 15.66, 16, 20 and 20.3px.

## Elevation & Depth

Depth comes mainly from color blocking and overlap: sticker images overlap card tops, character illustrations overlap the band edge, and bands have curved boundaries. The only measured shadow is `rgba(4, 6, 7, 0.25) 2px 5px 7px 0px`, found on 4 elements. On hover, the outlined "shop favors" pill gains a solid brown box shadow (measured in the hover pass), while the "personalize" pill inverts its fill.

## Shapes

Measured radii: `50%` on 46 elements (round buttons, stickers, avatars), `10px` on 18 (cards), `15984px` on 10 (full pill buttons; the tokens express this as `pill 9999px`) and `15984px 15984px 0px 0px` on 4 elements (arch-topped shapes). Tokens: `xs 10px`, `pill 9999px`. Cards use 10px; every button is a pill.

## Components

- **Primary CTA pill**: `#f3f6fa` fill, brown `#5a1f06` text and 1px brown border, sans 700 12px, 44px tall, padding `8px 24px`; hover fills it with brown and turns text white.
- **Outlined secondary pill** ("shop favors", "shop now"): transparent fill, brown text and border, 60px tall in the hero; hover adds a solid brown shadow.
- **Product card**: saturated fill (blue `#0e74e1` measured), white text, 10px radius, sticker image on top, eyebrow, serif headline, underlined "shop now" link with an arrow.
- **Nav item**: icon above a 12px lowercase label.
- **Promo and shipping bars**: full-width bars with centered text and a code in bold.
- **Marquee**: large lowercase serif phrases joined by colored ampersands.
- **Input**: 43px tall, 16px sans text, 8px vertical padding.
- **Footer**: `#f3f6fa` background with `#040607` text.

## Design System Architecture

No public design system, token package or brand guideline was found on the pages opened (the home page links to About Us, Mars' brands and policy pages only). The shipped system is a Next.js build (font file names such as `__allTogetherSerif_924273` are Next font module hashes), with fonts declared as CSS variables on `:root` (`--font-alltogether-serif`, `--font-alltogether-sans`, `--font-elicit-script`) and the Swiper carousel library's default theme variable. Colors are not exposed as variables; they are applied in component styles and driven by campaign content (the CDN images come from `cdn.media.amplience.net`).

## Do's and Don'ts

Do:
- Keep the shell white and let each band or card carry one saturated campaign color.
- Use brown `#5a1f06` for outlines, promo text and hover fills.
- Make every button a pill; keep cards at 10px radius.
- Write copy in lowercase, short, friendly phrases.

Don't:
- Don't use the Swiper default blue `#007aff` as brand color.
- Don't use black shadows on cards; only a single subtle shadow was measured.
- Don't hard-code the Halloween palette as permanent brand colors; it is seasonal.
- Don't set the large serif statement type in the bold weight; the mission statement uses weight 300.

## Responsive Behavior

The mobile pass recorded roles and font sizes only. The display type dropped from 56px / 64px to 32px / 37.3333px. Mobile font-size weights were led by 12px (1126), then 48px, 14px, 16px, 24px, 30px, 18px and 32px. The mobile layout, menu pattern, card stacking and breakpoints are not measured.

## Iteration Guide

1. Start with a white shell, ink `#040607`, and brown `#5a1f06` for brand text and outlines.
2. Build pill buttons 44px tall with `8px 24px` padding, sans 700 12px labels, light `#f3f6fa` fill that inverts to brown on hover.
3. Use serif 300 for display lines and serif 700 for card headlines.
4. Choose the band and card colors from the current campaign; use 10px card radii.
5. Measure hover and focus on any new component before documenting it.
