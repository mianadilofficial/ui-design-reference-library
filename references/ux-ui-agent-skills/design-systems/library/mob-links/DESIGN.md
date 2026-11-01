---
version: alpha
name: "Moblinks"
category: "Retail & E-commerce"
description: "French streetwear e-commerce site (moblinks.fr) in saturated yellow #ffbf00 and warm cream #fff2df with brown #6b3e28 ink, navy #001976 blocks, set in the Ringold display face at weight 500 with white pill buttons and 26.65px card radius."
colors:
  canvas: "#fff2df"
  ink: "#6b3e28"
  primary: "#ffffff"
  on-primary: "#ffbf00"
  surface-2: "#001976"
  surface-3: "#000000"
  card-bg: "#fffbec"
typography:
  display:
    fontFamily: Ringold, sans-serif
    fontSize: 37.3094px
    fontWeight: 500
    lineHeight: 44.7713px
  display-mobile:
    fontFamily: Ringold, sans-serif
    fontSize: 29.0285px
    fontWeight: 500
    lineHeight: 34.8342px
  heading:
    fontFamily: Ringold, sans-serif
    fontSize: 31.9795px
    fontWeight: 500
    lineHeight: 38.3754px
  body:
    fontFamily: Ringold, sans-serif
    fontSize: 84.3904px
    fontWeight: 500
    lineHeight: 101.268px
  button:
    fontFamily: Ringold, sans-serif
    fontSize: 18.6547px
    fontWeight: 500
    lineHeight: 22.3857px
  input:
    fontFamily: Ringold, sans-serif
    fontSize: 31.0912px
    fontWeight: 500
    lineHeight: 37.3094px
rounded:
  xs: 26.65px
  none: 0px
  pill: 9999px
spacing:
  s1: 3.55px
  s2: 8.88px
  s3: 10.66px
  s4: 15.99px
  s5: 17.77px
  s6: 21.32px
  s7: 24.87px
  s8: 28.43px
  s9: 35.53px
  s10: 71.07px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 44px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 44px
  nav:
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
    padding: 28.4262px 0px
  text-input:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.pill}"
    padding: 15.9898px 0px
    height: 69px
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink}"
    padding: 17.7664px
---

# Moblinks

## Overview
The measured site is www.moblinks.fr (page title "Moblinks", reached from moblinks.fr; the document declares no language). It is a small online shop: the header holds only two words, MENU on the left and CART on the right, both in heavy white type with a drop shadow over a solid yellow field. Below the first screen the page switches to a cream canvas that carries a "New collection" heading, product cards, a manifesto line in very large type ("JUST KNOW THAT EVERY WIN, LOSS & ADVENTURE WILL MAKE SENSE."), a newsletter input and call-to-action buttons such as "Scroll to discover" and "Shop now".

A newsletter modal was open during loading and was hidden by the extractor before measuring (the recorded overlay was "newsletter-modal-view"), so it is not documented as brand UI. In the capture the first screen is a full-bleed flat yellow block with the two nav words and a centered white pill button, and everything beneath it is flat cream, because imagery on the long page (12885px tall) was not rendered in the screenshot. This document therefore describes only measured styles, not photography. The voice of the copy is short, upper-case and motivational. Color and type, not decoration, carry the identity: it reads as a bold, playful, high-saturation streetwear brand.

## Colors
Painted area is led by `{colors.canvas}` cream (#fff2df, 10388 weighted area), then `{colors.surface-2}` navy (#001976, 3254), `{colors.surface-3}` black (#000000, 3072), the hero yellow #ffbf00 (2544), a deeper cream #ffe6c1 (1501), `{colors.card-bg}` (#fffbec, 283) and white (61). Yellow #ffbf00 is also the text color of the pill buttons, which is why the token file records it as `{colors.on-primary}`; the button fill `{colors.primary}` is white (#ffffff).

Text is `{colors.ink}` brown (#6b3e28) for body and manifesto copy (191 weighted characters), yellow #ffbf00 (42), cream #fff2df (24) on dark blocks and white (8) in the header. No borders were measured. The palette is therefore: cream ground, brown ink, yellow as the loudest field, navy and black as the dark blocks, white for controls.

## Typography
The only face is Ringold (weight 500, 265 weighted characters), loaded as a web font with sans-serif as fallback. The CSS corpus also lists ui-sans-serif and ui-monospace as framework defaults. No foundry source was opened, so no claim is made about who publishes Ringold; if it is unavailable, use a heavy condensed grotesque.

Scale: `{typography.display}` 37.3094px with 44.7713px line-height (the MENU label), `{typography.display-mobile}` 29.0285px, `{typography.heading}` 31.9795px (the "New collection" h2), `{typography.body}` 84.3904px with 101.268px line-height (this is the giant manifesto paragraph, the most-read text block, not conventional body size), `{typography.button}` 18.6547px with 22.3857px line-height, and `{typography.input}` 31.0912px. By characters read, 12.4365px is the commonest size, followed by 35.5328px, 18.6547px, 44.416px, 23.0963px and 26.6496px. Only weight 500 is used, no letter-spacing was measured, and the labels shown in the capture are upper-case.

## Layout
The measured desktop width is 1280px and the page height 12885px, a long vertical scroll. The header is 111px tall with 28.4262px vertical padding, with MENU and CART pinned at the far edges. Cards are 266px by 266px square product images. The site's CSS variables set `--spacing` 1.6rem, `--header-height` 8rem, `--header-height-lg` 12.5rem and `--banner-height` 3.4rem, which tells you the layout is organized around rem-based spacing. Measured gaps are 17.7664px (most common), 3.55328px, 21.3197px, 8.8832px and 24.873px. Paddings include 17.7664px, 10.6598px, 35.5328px, 88.832px, 71.0656px and 133.248px, scaling to very large section padding (up to 500px on one element). The spacing tokens `{spacing.s1}` to `{spacing.s10}` list the small steps.

## Elevation & Depth
No box-shadow was recorded on any rendered element, and no borders either. The capture does show a text shadow behind the white nav words and a blue offset edge behind the white pill button; these were not measured as box-shadow values and are not tokenized. Treat depth as color-block layering: yellow, cream, navy and black planes.

## Shapes
The measured radii are 999px on five elements (the pill-shaped newsletter input and the pill button family, `{rounded.pill}`) and 26.6496px on four elements (the product cards, `{rounded.xs}`). The computed radius of the `button` and `a` call-to-action elements themselves is 0px (`{rounded.none}`), even though the capture shows a rounded outline around the "Scroll to discover" control; which element carries that curve was not resolved, so the token follows the measured 0px. The text input (`{components.text-input}`) is 69px tall, 462px wide, white, with a 999px radius.

## Components
**Buttons** (`{components.button-primary}`, `{components.button-secondary}`): white fill (#ffffff), yellow text (#ffbf00), Ringold 18.6547px weight 500, 44px tall; "Scroll to discover" is 223px wide and "Shop now" 150px wide. **Navigation** (`{components.nav}`): MENU and CART in white 37.3094px type, 28.4262px vertical padding, 0px radius, header 111px tall. **Newsletter / text input**: white pill, brown #6b3e28 text at 31.0912px. **Product card** (`{components.card}`): #fffbec background, brown text, 17.7664px padding, 26.6496px radius, 266px square image. No footer, form-validation or hover states were measured (the hover pass recorded none).

## Design System Architecture
No public design system or brand-guidelines page was opened. The shipped CSS shows a Nuxt-based build (`--nuxt-devtools-safe-area-*` variables) with layout variables for header height, banner height, spacing and viewport units (`--vw`, `--svw`, `--vh`, `--svh`, `--dvh`, `--lvh`), and one brand font. Brand colors are not published as named variables in the measured root; they appear in rendered styles. The de-facto system is: one display face, a cream/yellow/navy/black palette, rem-driven spacing and two shapes (pill and 26.65px card).

## Page Rhythm and Scale
The measured text sizes show a deliberate jump between a very small label size and very large statement type. The commonest size by characters read is 12.4365px, used for the smallest text, while the manifesto line is set at 84.3904px, nearly seven times larger, and headings sit between at 31.9795px to 44.416px. There is almost nothing in the middle range, which gives the page its poster-like rhythm: a loud statement, then a quiet product grid. Section padding follows the same logic, with small 10px to 36px steps inside components and very large 71px to 266px steps between sections. Because one weight (500) and one face are used throughout, hierarchy comes from size, color and upper-casing alone. The measured backgrounds are yellow, cream, navy and black planes; their order down the page was not measured.

## Do's and Don'ts
- Do put large upper-case Ringold type in brown on cream, and white type on yellow or navy.
- Do use #ffbf00 as the loud background and as the text color of white pill buttons.
- Do give cards 26.65px corners and inputs a full pill radius.
- Do keep headers minimal: two words, left and right.
- Don't add borders or box-shadows; none were measured.
- Don't treat the newsletter modal as brand UI.
- Don't invent photography direction; imagery was not rendered in the capture.

## Responsive Behavior
The mobile pass measured the MENU label at 29.0285px (against 37.3094px on desktop) and the manifesto text at 48.9856px (against 84.3904px). Menu behavior, column counts and breakpoints were not measured.

## Iteration Guide
1. Start with cream #fff2df, brown #6b3e28 text and Ringold weight 500.
2. Use yellow #ffbf00 as the hero field and white pill buttons with yellow text.
3. Keep upper-case copy and oversized manifesto type.
4. Use navy #001976 or black for dark blocks.
5. Re-run `node web/scripts/verify-designs.mjs --slug=mob-links` after edits.
