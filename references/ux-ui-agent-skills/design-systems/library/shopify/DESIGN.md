---
version: alpha
name: Shopify
category: "E-commerce & Retail"
description: "Shopify's marketing homepage is a near-black, cinematic dark theme: a #02090a canvas with deep forest-green (#041e18) and midnight-navy (#000a1e) panels, white type in the variable Shopify-Inter family at light weights (300/330) with negative tracking up to -1.92px at 96px, and a single white pill CTA (9999px radius, 56px tall) that turns #d4d4d8 on hover."
colors:
  canvas: "#02090a"
  page-body: "#000000"
  ink: "#ffffff"
  primary: "#ffffff"
  on-primary: "#000000"
  surface-forest: "#041e18"
  surface-midnight: "#000a1e"
  ink-link: "#9797a2"
  ink-muted: "#a1a1aa"
  ink-sage: "#99b3ad"
  ink-sage-2: "#9dabad"
  ink-body: "#bdbdca"
  hairline: "#e4e4e7"
  primary-hover: "#d4d4d8"
  accent-mint: "#36f4a4"
  shop-purple: "#5433eb"
typography:
  display:
    fontFamily: Shopify-Inter, Helvetica, Arial, sans-serif
    fontSize: 96px
    fontWeight: 300
    lineHeight: 103.68px
    letterSpacing: "-1.92px"
  display-mobile:
    fontFamily: Shopify-Inter, Helvetica, Arial, sans-serif
    fontSize: 56px
    fontWeight: 330
    lineHeight: 60.48px
    letterSpacing: "-1.12px"
  subheading:
    fontFamily: Shopify-Inter, Helvetica, Arial, sans-serif
    fontSize: 56px
    fontWeight: 300
    lineHeight: 60.48px
    letterSpacing: "-1.68px"
  body:
    fontFamily: Shopify-Inter, Helvetica, Arial, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: Shopify-Inter, Helvetica, Arial, sans-serif
    fontSize: 18px
    fontWeight: 550
    lineHeight: 28px
  nav:
    fontFamily: Shopify-Inter, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-secondary:
    fontFamily: Shopify-Inter, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 550
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 5px
  md: 8px
  lg: 12px
  xl: 16px
  2xl: 20px
  3xl: 48px
  4xl: 340px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 13px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 24px
    height: 56px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 8px 20px
    height: 44px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.ink}"
    padding: 0px 90px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.ink}"
---

## Overview

The Shopify homepage as captured in this catalog is a dark, cinematic page rather than the light, green-accented identity many people associate with the brand. The first screen is a full-bleed photograph of a person in a dark hooded top, with the headline "Be the next AI all-star" set in white at 96px, weight 300, and a single white pill reading "Start for free". Below the hero the page drops into a near-black canvas (`{colors.canvas}`, #02090a) whose large panels are tinted deep forest green (`{colors.surface-forest}`, #041e18) and midnight navy (`{colors.surface-midnight}`, #000a1e). Those three colors together account for most of the painted area measured on the page.

The mood is quiet and confident. Headlines are light and tightly tracked, supporting copy is a desaturated grey, and the only strongly filled control on the page is white. The page sells commerce as something that happens across channels, and the copy on the capture says as much: "Sell everywhere people shop. Online and in person. Across AI and on social. Locally and globally." The second sentence of that headline is rendered in a dimmer grey than the first, which is the page's main trick for hierarchy inside a single heading.

**Key Characteristics:**
- Near-black canvas with green and navy tinted panels instead of a single flat background.
- One typeface, Shopify-Inter, used from 12px up to 96px; contrast comes from weight (300 to 550) and size, not from a second family.
- White-on-black primary pill; no colored CTA fill appears in the extracted roles.
- Large rounded panels and product-photo tiles carry the imagery; there is almost no illustration.
- Grey text ladder (`{colors.ink-body}`, `{colors.ink-muted}`, `{colors.ink-link}`, `{colors.ink-sage}`) tuned to sit softly against the dark panels.

## Colors

All values below were measured from the live homepage (see `tokens.sources.json`), not taken from a brand sheet.

- **Canvas** `{colors.canvas}` #02090a is the largest background by painted area; `{colors.page-body}` #000000 is the computed body background behind it.
- **Surfaces**: `{colors.surface-forest}` #041e18 (the green feature panel in the capture) and `{colors.surface-midnight}` #000a1e (navy sections).
- **Ink** `{colors.ink}` #ffffff is the most-read text color. Secondary text steps down through `{colors.ink-body}` #bdbdca (paragraph copy under headlines), `{colors.ink-muted}` #a1a1aa, `{colors.ink-link}` #9797a2 and two sage greys, `{colors.ink-sage}` #99b3ad and `{colors.ink-sage-2}` #9dabad, which read as slightly green-tinted greys over the forest panel.
- **Primary** `{colors.primary}` is white, the fill of the primary CTA, with `{colors.on-primary}` black text. Hover moves the fill to `{colors.primary-hover}` #d4d4d8 (measured with a hover probe at both 44px and 56px heights).
- **Hairline** `{colors.hairline}` #e4e4e7 is the lightest neutral in the page's own variable ramp.
- **Accents**: `{colors.accent-mint}` #36f4a4 appears as text color on the page; `{colors.shop-purple}` #5433eb is declared in the page's variables as `--color-shop-purple` and painted on a very small area. Neither is a CTA color.

The page's own custom properties also carry a neutral ramp named shade-10 through shade-90 (for example shade-10 #f4f4f5, shade-30 #d4d4d8, shade-40 #a1a1aa, shade-50 #71717a, shade-70 #3f3f46, shade-90 #18181b) and pale green swatches (`--color-aloe-10` #c1fbd4, `--color-pistachio-10` #d4f9e0). Those green swatches were not observed painted on the homepage capture.

## Typography

The family is **Shopify-Inter**, declared in the page CSS as a variable font loaded for weights 100 through 900, with Helvetica and Arial as fallbacks. A second, monospace stack (`ui-monospace`) covers a very small share of characters.

| Role | Size / line | Weight | Tracking |
|---|---|---|---|
| Display (h1) | 96px / 103.68px | 300 | -1.92px |
| Subheading (h3) | 56px / 60.48px | 300 | -1.68px |
| Display, mobile (390px viewport) | 56px / 60.48px | 330 | -1.12px |
| Body | 20px / 28px | 400 | normal |
| Button | 18px / 28px | 550 | normal |
| Nav and links | 16px / 24px | 400 | normal |
| Secondary button | 16px / 24px | 550 | normal |

The page's custom properties name a "t1 to t8" scale (t1 is 4rem with weight 330 and -0.02em tracking, t2 is 3.5rem) plus a "dsp" display step of 6rem at weight 300 and -0.025em tracking. The weights actually used include unusual in-between values, 330, 420 and 450, which is only possible because the font is variable. Headlines are light; buttons are the heaviest text on the page at 550. Tracking tightens as size grows, from -0.24px at 24px to -1.92px at 96px.

### Font substitutes
Shopify-Inter is served by Shopify itself and its provenance beyond the name is not documented in anything opened for this entry. As a stand-in use Inter (Google Fonts, variable) with the same 300/330/400/550 weights and the same tracking values; do not substitute a heavier default, because the look depends on light weights.

## Layout

The page is a single long column (scroll height 10,673px at 1280px wide). The page's variables define a gutter of 1.5rem (24px), a side margin of 5.625rem (90px, matching the 0px 90px padding measured on the nav), a header height of 4.5rem (72px) and a container up to 72rem. Spacing in variables runs xs .5rem, sm 1rem, md 1.5rem, lg 2rem, xl 2.5rem, 2xl 4rem, 3xl 5rem, 4xl 8rem and 5xl 10rem, so section gaps are generous: headline blocks sit well apart from the media rows beneath them.

The capture shows a left-aligned reading column for headlines and copy, with media laid out as a row of three tiles of unequal width (a phone mockup over flowers, a retail-counter photograph, and a beauty-brand site screenshot). A wide green panel then pairs left-aligned copy with a product card on the right. Content never centers; everything hangs off the left margin.

## Elevation & Depth

Depth is mostly tonal rather than shadowed. Layers are separated by the shift from `{colors.canvas}` to `{colors.surface-forest}` and `{colors.surface-midnight}`, and by the rounded top edges of the first panel after the hero (the extraction records radii of 20px and 48px on top corners only). Where shadows exist they are black-based, for example a stack of `rgba(0,0,0,0.1)` offsets at 0.929px, 1.858px and 3.717px with a faint `rgba(255,255,255,0.03)` inset highlight, and a heavier stack with a `rgba(255,255,255,0.08)` 1px ring plus `rgba(0,0,0,0.3)` 1px 3px. The page also applies a 3D matrix transform to one card, a small perspective tilt that appears in the measured card styles. Treat these as quiet edge definition, not as drop-shadow elevation.

## Shapes

The radius scale is measured from the page: 4px, 5px, 8px, 12px, 16px, 20px and 48px, with 340px and 9999px for fully rounded pieces. 8px (26 occurrences) and 12px (24) dominate card and tile corners; `{rounded.pill}` is reserved for buttons. The first dark panel under the hero uses large top-only radii (20px and 48px variants appear in the measurements), which gives the page its sheet-over-sheet look. The CSS variables name `--radius-md` .375rem, `--radius-lg` .5rem, `--radius-xl` .75rem and `--radius-2xl` 1rem.

## Components

**Primary button.** `button-primary`: white fill (`{colors.primary}`), black text, 18px / 550 type, 12px 24px padding, 56px tall, `{rounded.pill}`. A 44px-tall variant with 16px type also exists (nav "Start for free" in the capture). Hover swaps the fill to `{colors.primary-hover}` with no change in border, shadow or opacity.

**Secondary button.** `button-secondary`: same white fill and black text at 16px / 550, padding 8px 20px, 44px tall, pill radius.

**Navigation.** A transparent bar over the hero: logo at left, links "Why Shopify", "Products", "Pricing" and "Enterprise" in 16px / 400 white, "Log in" and the white "Start for free" pill at the right, with 90px side padding.

**Panels and tiles.** Feature panels use the surface colors above with 8 to 12px corners on the media tiles; the large panel in the capture carries a faint gradient and rounded corners. Chips with logos in the capture are small white circles.

**Links.** Link colors in the page's variables are `--color-link-dark` #9797a2, hover #d4d4d8, active #a1a1aa, focus #fff and disabled #71717a. In body copy the capture shows an underlined inline link ("Agentic Storefronts").

## Design System Architecture

No public design system or brand-guideline site for the shopify.com marketing page was found. What is public is Polaris, Shopify's system for admin and app UI: the GitHub repository (https://github.com/Shopify/polaris) states that the Polaris React library is deprecated, and that Polaris Web Components, released October 1, 2025, replace it (https://shopify.dev/docs/api/app-home/polaris-web-components), a library meant to make apps "look and feel native to the Shopify admin". That documentation does not describe this marketing page, and its fonts and tokens were not specified in the pages opened, so no Polaris value is used here.

The marketing page's de-facto system is visible in its CSS custom properties: Tailwind-style names (`--text-*`, `--color-*`, `--radius-*`, `--spacing` .25rem, `--ease-*`) layered with Shopify's own scale tokens (`--text-t1` to `t8`, `--text-dsp`, `--text-body-sm/base/lg`, `--text-theme-cta-sm/lg`), a `--font-base`/`--font-sans` pair pointing to Shopify-Inter, and named color families such as shade, aloe and pistachio. Easing curves are named `--ease-in`, `--ease-out`, `--ease-in-out` and a custom `--ease-uc` of cubic-bezier(.22,1,.36,1).

## Do's and Don'ts

**Do**
- Keep the canvas near-black (`{colors.canvas}`) and let panels shift to forest or midnight rather than adding new hues.
- Use weight 300 to 330 for headlines at 56px and above, with the negative tracking listed above.
- Make the primary action a white pill with black 550-weight text.
- Dim the second half of a headline with a grey to create hierarchy without a second font.
- Let photography and product mockups carry color.

**Don't**
- Don't use Shopify green or `{colors.shop-purple}` as a CTA fill; the measured primary is white.
- Don't set headlines in bold; the heaviest text on the page is the 550 button label.
- Don't add heavy drop shadows; edges come from tone and thin rings.
- Don't center-align long headlines; the capture keeps them left.
- Don't substitute a pure-white page background; the canvas is dark throughout.

## Responsive Behavior

Measured at 390px, the h1 drops from 96px to 56px (line-height 60.48px, tracking -1.12px) and its weight moves from 300 to 330. The primary CTA remains a pill at 44px tall in that capture. The variable `--margin` (5.625rem) and `--gutter` (1.5rem) indicate a wide desktop margin and a 24px column gap; other breakpoint values were not extracted. Treat the 56px mobile display size as the floor for hero statements and keep body at 18 to 20px.

## Iteration Guide

1. Start with `{colors.canvas}` and set text to `{colors.ink}`; add one surface panel (`{colors.surface-forest}`) before introducing anything else.
2. Add display type at 300 weight, then check the tracking against the table.
3. Place exactly one white pill per view; use the 44px version in the nav and the 56px version in the hero.
4. Pull secondary copy from the grey ladder: body `{colors.ink-body}`, captions `{colors.ink-muted}`.
5. Only then add imagery, keeping 8 to 12px corners on tiles.
6. Verify against the capture and re-run `node web/scripts/verify-designs.mjs --slug=shopify`.
