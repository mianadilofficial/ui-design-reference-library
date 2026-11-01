---
version: alpha
name: Telkom-OT
category: "Tech & AI"
description: "Telkom-OT aluminium injection-molding tools site: Aeonik Pro 125px headline with Sfmono uppercase 14px labels, flat grey #d9d9d9 canvas, near-black #1e1e1e text, coral #ff5948 buttons with #ff6e5f hover, 4px and 6px radii and a hard dark halo shadow."
colors:
  canvas: "#d9d9d9"
  ink: "#1e1e1e"
  primary: "#ff5948"
  on-primary: "#1e1e1e"
  ink-4: "#828282"
  ink-5: "#000000"
  hairline: "#c1c1c1"
  primary-hover: "#ff6e5f"
  card-bg: "#d9d9d966"
typography:
  display:
    fontFamily: Aeonikpro, sans-serif
    fontSize: 125px
    fontWeight: 400
    lineHeight: 150px
  display-mobile:
    fontFamily: Aeonikpro, sans-serif
    fontSize: 32px
    fontWeight: 400
    lineHeight: 38.4px
  heading:
    fontFamily: Aeonikpro, sans-serif
    fontSize: 80px
    fontWeight: 400
    lineHeight: 96px
  body:
    fontFamily: Sfmono, sans-serif
    fontSize: 20px
    fontWeight: 500
    lineHeight: 26px
    textTransform: uppercase
  button:
    fontFamily: Sfmono, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 21px
    textTransform: uppercase
  nav:
    fontFamily: Aeonikpro, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  link:
    fontFamily: Aeonikpro, sans-serif
    fontSize: 15.36px
    fontWeight: 400
    lineHeight: 23.04px
  button-secondary:
    fontFamily: Sfmono, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
    textTransform: uppercase
rounded:
  xs: 4px
  sm: 6px
  none: 0px
spacing:
  s1: 3.2px
  s2: 8px
  s3: 9px
  s4: 12px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 30px
  s9: 32px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 74px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink-5}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 12px 24px
    height: 48px
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
    padding: 9px 30px
    borderColor: "{colors.hairline}"
  nav:
    textColor: "{colors.ink-4}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 32px
    borderColor: "{colors.primary}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
---

# Telkom-OT

## Overview
The measured site is the English home page of Telkom-OT d.o.o. (https://www.telkom-ot.si/en/home, title "Aluminum injection molding tools manufacturing | Telkom-OT d.o.o."), a Slovenian maker of aluminium injection-molding tools. It presents an industrial company as a technical-drawing aesthetic: a flat mid-grey (#d9d9d9) canvas with faint blueprint line drawings of machine parts, a monochrome 3D render of a mold tool hovering in the first screen, and a single hot coral-red (#ff5948) used for the Contact button, marginal corner marks, small labels (SUSTAINABILITY, DEVELOPMENT, EXCELLENCE) and the footer text. The h1 "High quality tools Telkom-OT©" is set at 125px in the Aeonik Pro face, below a pill-less nav made of numbered cells (1.0 TOOLS, 2.0 PRODUCTS, 3.0 MACHINE PARK, 4.0 ENGINEERING, 5.0 ABOUT US, EN, CONTACT). Section headings follow: Complex structures, Precision manufacturing, Material selection and processing, Quality control, Powerful tools, Products made with our tools, Machine park, Engineering, Highest quality tools for European customers. The page is 12342px tall at 1280px. Labels are uppercase monospace; copy is short and technical. A cookie-consent dialog sits over the left of the first screen in the capture and is not documented as brand UI.

## Colors
`canvas` is #d9d9d9 (the page grey, published as `--base-color-brand--white`); `ink` is #1e1e1e (`--base-color-brand--black`, `--text-color--text-primary`) and `ink-5` is #000000. `primary` is #ff5948, the fill of the "CONTACT" and "VIEW PRODUCT GALLERY" buttons and the footer text color; its hover is `primary-hover` #ff6e5f, and `on-primary` is #1e1e1e. `ink-4` #828282 is the muted nav label color (`--background-color--background-alternate` carries the same value), `hairline` #c1c1c1 is the border color of link cells (`--base-color-neutral--neutral-light`), and `card-bg` #d9d9d966 is the translucent card fill (the canvas at 40% alpha). Other published variables include `--base-color-brand--dark-grey` #373737, `--base-color-neutral--neutral-lighter` #ccc, `--base-color-brand--dark-transparent` #3f3f3f66, `--light--navbar-color` #fcfcfc66 and `--base-color-system--error-red-light` #fef3f2; only the measured values are declared as tokens.

## Typography
Two families: Aeonik Pro (variable, weights 100 to 900, used at 400) for headings, navigation and links, and SF Mono-style monospace (loaded at 500, named "Sfmono") for body labels and buttons. `display` is Aeonikpro 125px / 150px at 400 (the h1); `display-mobile` is 32px / 38.4px; `heading` is 80px / 96px (h2 "Powerful tools"); `nav` is 20px / 30px; `link` is 15.36px / 23.04px (the product-material cells such as "Zinc"). `body` is Sfmono 20px / 26px at 500 uppercase; `button` is Sfmono 14px / 21px at 500 uppercase, and `button-secondary` is 16px / 24px at 500 uppercase. Aeonik Pro and the mono face are commercial; Inter and JetBrains Mono (or IBM Plex Mono) are reasonable substitutes. The huge display size against small uppercase mono labels is the page's defining contrast.

## Layout
A fixed header of equal-width cells floats near the top with a 30px side inset: the wordmark cell, five numbered nav cells, a language cell and the red Contact cell flush right. Thin red corner brackets frame the hero. Content blocks are centered with generous vertical gaps; headings span two lines at the center ("Powerful tools"), product cells appear in rows, and the footer is a dark block 727px tall. Spacing steps measured: 3.2px, 8px, 9px, 12px, 16px, 20px, 24px, 30px, 32px and 40px; the most frequent gaps are 24px (24 elements), 12px, 16px and 3.2px (12 each) and 32px (6).

## Elevation & Depth
Almost flat. One measured shadow is shared by 19 elements: `rgba(0, 0, 0, 0.8) 0px 0px 2px 1px`, a hard dark halo that works like a hairline outline rather than a drop shadow. Translucency (`card-bg`, the 66-alpha navbar variable) and the faint line drawings behind the content add depth without elevation.

## Shapes
Radii measured: 4px (6 elements, the secondary button and cells), 6px (2 elements, cards) and `0px 6px 6px 0px` (1 element, the flush-right Contact button, rounded only on its right side). The primary header button is otherwise 0px with a 74px height; the secondary button is 48px tall with 12px 24px padding and a 4px radius. Link cells are square with a #c1c1c1 border and 9px 30px padding.

## Components
- **button-primary**: #ff5948 fill, #1e1e1e 14px mono uppercase label, 0px radius (rounded right edge on the header), 74px tall; hover #ff6e5f.
- **button-secondary**: #ff5948 fill, #000000 16px mono uppercase label, 4px radius, 12px 24px padding, 48px tall ("VIEW PRODUCT GALLERY").
- **link / material cell**: #d9d9d9 fill, #1e1e1e 15.36px Aeonik text, #c1c1c1 border, 9px 30px padding, 43px tall.
- **nav**: numbered cells with a grey index ("1.0") and an uppercase mono label; **nav-link** 20px Aeonik #1e1e1e.
- **card**: #d9d9d966 fill, 6px radius, 32px padding, #ff5948 border.
- **footer**: #1e1e1e fill with #ff5948 text, 727px tall, with CONTACT, company name and address (Pesnica pri Mariboru).
The cookie dialog's ACCEPT, DECLINE and MORE INFORMATIONS buttons reuse the same coral fill but are consent UI, not brand components.

## Design System Architecture
No public brand guidelines, press kit or design-system link exists on the page; WebFetch of the home page returned only navigation and section headings. The shipped CSS has 46 root variables following the Webflow Client-First naming pattern: `--text-color--text-primary`, `--background-color--background-alternate`, `--border-color--border-primary`, `--border-color--border-alternate`, `--base-color-brand--black`, `--base-color-brand--white`, `--base-color-brand--dark-grey`, `--base-color-neutral--neutral-light` and `--base-color-system--error-red-light`. The system is therefore a small set of named brand, neutral and system colors, two fonts and the numbered-cell navigation.

## Do's and Don'ts
- Do reserve #ff5948 for the contact action, small labels and the footer.
- Do contrast a very large Aeonik headline with small uppercase monospace labels.
- Do number navigation cells ("1.0", "2.0") and frame the hero with thin corner brackets.
- Don't use pure white; the canvas is #d9d9d9.
- Don't add soft drop shadows; the measured halo is a hard 2px dark ring.
- Don't round buttons beyond 4px or cards beyond 6px.
- Don't document the cookie dialog as part of the system.

## Responsive Behavior
Measured at a 390px viewport: the h1 drops from 125px to 32px (line height 38.4px) at weight 400, and the call-to-action button measures 348px wide and 44px tall at 16px. The mobile pass recorded no layout, header-link or band data, so menu behavior and column counts are not measured.

## Iteration Guide
1. Start with #d9d9d9 canvas, #1e1e1e text, #ff5948 for the single action and the footer text.
2. Set Aeonik-like type at 125px, 80px, 20px and 15.36px; use uppercase mono at 14px, 16px and 20px for labels.
3. Build cards at 6px radius with 32px padding and a coral border on a 40%-alpha canvas fill.
4. Use numbered nav cells and thin coral corner brackets around the hero.
5. Re-run `node web/scripts/verify-designs.mjs --slug=telkom-ot` after every change.
6. Imagery: grey-scale renders of mold tools and blueprint line drawings behind the content; keep photography monochrome so coral remains the only color.
7. Voice: technical and concise ("High quality tools", "Powerful tools", "Highest quality tools for European customers").
8. Hero composition: the two-line 125px headline is centered over the page, a short sentence in 15px-18px Aeonik sits beneath it ("With our professional expertise, we help you achieve ... results"), a small coral down arrow marks the scroll direction and the monochrome tool render sits below, with three coral uppercase mono labels (EXCELLENCE, SUSTAINABILITY, DEVELOPMENT) spread across the page width.
9. Header cells: each nav cell is a light translucent rectangle with a thin divider, the index number in grey (#828282) and the label in near-black; the Contact cell is the only filled cell and sits flush at the right edge.
10. Material cells such as "Zinc" are small bordered rectangles in rows under the Products headings; keep them square with a #c1c1c1 border and 9px 30px padding.
