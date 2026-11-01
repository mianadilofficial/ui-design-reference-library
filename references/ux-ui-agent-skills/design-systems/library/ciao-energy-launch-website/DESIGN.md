---
version: alpha
name: "Ciao Energy"
category: "Food & Beverage"
description: "Ciao Energy's French launch site for a low-sugar energy drink: a pure black canvas with white Geist Light text at 15.75px, Franklin Gothic ATF uppercase headings at 96px, white 3.5px-radius buttons with a white glow, hairline white borders and WebGL cans and gradient orbs, with raspberry (#800035) and pink (#ff659d) taste colors."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#ffffff"
  ink-muted: "#ffffff4d"
  hairline: "#ffffff33"
  ink-dim: "#ffffff80"
  ghost-bg: "#ffffff0d"
  on-primary: "#000000"
  taste-primary: "#800035"
  taste-secondary: "#ff659d"
typography:
  display:
    fontFamily: "\"Franklin Gothic Atf\", Arial, sans-serif"
    fontSize: 96px
    fontWeight: 500
    lineHeight: 76.8px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Franklin Gothic Atf\", Arial, sans-serif"
    fontSize: 31.5px
    fontWeight: 500
    lineHeight: 25.2px
    textTransform: uppercase
  lead:
    fontFamily: Geist, Arial, sans-serif
    fontSize: 17.5px
    fontWeight: 300
    lineHeight: 26.25px
  menu-label-mobile:
    fontFamily: Geist, Arial, sans-serif
    fontSize: 12.25px
    fontWeight: 300
    lineHeight: 18.375px
  body:
    fontFamily: Geist, Arial, sans-serif
    fontSize: 15.75px
    fontWeight: 300
    lineHeight: 23.625px
  button:
    fontFamily: Geist, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
    textTransform: uppercase
  link:
    fontFamily: Geist, Arial, sans-serif
    fontSize: 14px
    fontWeight: 300
    lineHeight: 21px
  input:
    fontFamily: Geist, Arial, sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
rounded:
  xs: 3.5px
  sm: 7px
  pill: 9999px
spacing:
  s1: 3.5px
  s2: 7px
  s3: 10.5px
  s4: 17.5px
  s5: 21px
  s6: 35.84px
  s7: 44.53px
  s8: 44.8px
  s9: 47.86px
  s10: 51.19px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 17.5px 21px
    height: 49px
    boxShadow: rgba(255, 255, 255, 0.6) 0px 0px 20px 0px
  icon-link:
    backgroundColor: "{colors.ghost-bg}"
    textColor: "{colors.ink-dim}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
    padding: 10.5px
    borderColor: "{colors.hairline}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    padding: 21px 10.5px 10.5px
    height: 56px
    boxShadow: rgba(255, 255, 255, 0.2) 0px 0px 0px 1px
---

## Overview

Ciao Energy is a French energy-drink brand, and https://www.ciaoenergy.com/ (title "Ciao Energy - L'energy drink parfaite", lang fr-FR) is its launch site: 1280px wide and 11,484px tall, dark, scroll-driven and full of 3D. The tagline is "L'energy drink parfaite," and the story copy begins "Ciao Energy a été pensée comme la boisson énergisante parfaite." The page text names six flavours (Double Litchi, Coco Citron Vert, Kiwi Concombre, Pêche Blanche, Pomme Rhubarbe, Abricot Framboise), a "Moins de sucre" badge, coffee-bean caffeine with stevia, and sections for the range (Gamme), benefits (Bénéfices), an FAQ ("FOIRE AUX QUESTIONS"), a newsletter ("REJOIGNEZ-NOUS", with the button "S'INSCRIRE" and the field "VOTRE ADRESSE MAIL") and contact. The footer reads "© 2026 CIAO ENERGY - BY SKAALD." with legal links (Mentions légales, CGU, Politique de confidentialité) and TikTok and Instagram links.

The captured first screen is a product stage on black. A thin frame of four corner marks surrounds the viewport; at the top, a small "ON" sound switch with level bars sits at the left, the italic CIAO ENERGY wordmark is centered on a metallic disc, and "MENU" (with a four-dot icon) and a white glowing "CONTACT" button sit at the right. Six 3D cans in different dark flavour liveries float and tilt in an arc, the front one (the Double Litchi can, in deep violet) facing the viewer between two dotted chevron arrows. The flavour name "DOUBLE LITCHI" is set below in heavy white italic capitals over a round podium, with a thin gradient slider (blue to pink, with a round handle) and the French prompt "SCROLLER POUR DÉCOUVRIR." Below the fold the capture shows a very large soft-edged multicolor orb (pink, cyan, green, yellow and orange blends) floating on pure black. The mood is nocturnal, glossy and playful; the cans and the orb in the capture are 3D or gradient imagery rather than CSS colors.

## Colors

The page is two values: `{colors.canvas}` pure black (#000000, 1,024 measured area units) and `{colors.ink}` pure white (#ffffff, 3,562 measured text characters). All other UI colors are translucent whites: `{colors.ink-muted}` (#ffffff4d, white at 30%, 80 characters), `{colors.ink-dim}` (#ffffff80, white at 50%, the round icon links), `{colors.hairline}` (#ffffff33, white at 20%, the border color) and `{colors.ghost-bg}` (#ffffff0d, white at 5%, the fill of the round icon links). `{colors.primary}` is white, the fill of the call-to-action button, with `{colors.on-primary}` black text (10 measured characters).

The stylesheet declares a systematic ramp of white opacities (`--_primitives---opacity--white-0` through `-80`, at 0, 5, 10, 15, 20, 30, 40, 50, 60 and 80%) and a grey ramp (#eee, #ccc, #aaa, #666, #444, #222 and black) that match this approach. It also declares two "taste" colors in the first color scheme: `{colors.taste-primary}` (#800035, a deep raspberry) and `{colors.taste-secondary}` (#ff659d, a bright pink). They were not measured on the rendered text or backgrounds of the home page (the colorful areas in the capture are WebGL), so treat them as declared flavour-scheme colors; the page does not state where they appear. A camel brand ramp (#f9f8ee, #f4ecdd, #e6d2c0, #c79f7b, #56130b) is declared as deleted variables; it was not seen on the page. No light theme was measured.

## Typography

Two brand families plus a mono face. Geist, loaded at 300 and 400, carries nearly all text (3,474 measured characters, with weight 300 on 2,940 characters overall). Franklin Gothic ATF carries headlines (112 characters). Geist Mono (400) is loaded and declared as the mono style, and a few characters (66) measure Roboto.

- `{typography.display}`: Franklin Gothic ATF 96px, computed weight 500, line-height 76.8px, uppercase: the h2 "FOIRE AUX QUESTIONS". The only Franklin Gothic ATF face loaded is declared at weight 900 italic, which is the heavy italic cut visible in the capture's flavour name.
- `{typography.display-mobile}`: 31.5px, weight 500, line-height 25.2px, uppercase: the same heading measured at the mobile viewport.
- `{typography.lead}`: Geist 17.5px, weight 300, line-height 26.25px: the extractor's h1 role, a single-line description starting "Une explosion exotique. Une re...".
- `{typography.body}`: Geist 15.75px, weight 300, line-height 23.625px: the story and FAQ paragraphs.
- `{typography.link}`: Geist 14px, weight 300, line-height 21px.
- `{typography.input}`: Geist 16px, weight 300, line-height 24px.
- `{typography.button}`: Geist 14px, weight 400, line-height 14px, uppercase: the "S'INSCRIRE" button label.
- `{typography.menu-label-mobile}`: Geist 12.25px, weight 300, line-height 18.375px: the "MENU" label on mobile.

By character count the sizes are 15.75px (2,049), 17.5px (1,094), 12.25px (194), 14px (126), 38.4px (94), 10.5px (77) and 96px (18). The 38.4px size is the second headline size; which element carries it was not isolated. A few 14px strings carry 14px of letter-spacing (4 characters); everything else measures no tracking. The measured values equal fractions of a 14px root: 15.75px is 1.125rem, 17.5px is 1.25rem, 3.5px is 0.25rem and 7px is 0.5rem. Substitutes if the faces are unavailable: Inter or Helvetica Neue Light for Geist, and a heavy italic grotesque such as Archivo Black Italic for Franklin Gothic ATF at weight 900.

## Layout

The stylesheet declares the layout through variables: a global page padding of 4%, a container width of 120rem (`--_spacing-sizing---container--container-xlarge`), a booking nav height of 8rem and a clamp-based padding scale from `xxs` (0.5rem) to `xxh` (clamp(5rem, 6.5vw, 10rem)). The measured gaps are 21px (18 elements), 17.5px (4), 7px (2) and 35.84px (2); the measured paddings are 17.5px (11 elements), 10.5px (10), 61.44px (4), 3.5px (4), 83.2px (3), 51.1875px (3) and 21px (3). The page is a long vertical sequence: the capture shows the product stage followed by a large gradient scene, and the page text lists flavour, benefit, FAQ, newsletter and footer sections. Navigation labels are Gamme, Bénéfices, FAQ, Newsletter and Contact. The header's three groups (sound switch, wordmark, menu and contact) are spread to the left, center and right edges.

## Elevation & Depth

Depth comes from light and 3D, not from drop shadows. The measured shadows are a one-pixel ring, `rgba(255, 255, 255, 0.2) 0px 0px 0px 1px` (the text input), and a white glow, `rgba(255, 255, 255, 0.6) 0px 0px 20px 0px` (the white button). The declared backdrop blur is `--_ui-styles---blur--backdrop: 2rem`, and the declared stroke and divider widths are both 1px. The scenes use metallic can reflections, a podium with an inner glow, and a blurred multicolor orb for atmosphere; their colors are rendered, not CSS values.

## Shapes

The measured radii are 640px (4 elements, the round 51px icon links), 7px (3) and 3.5px (2). The declared radius tokens are xsmall 0.25rem, small 0.5rem (the declared button radius), medium 1rem and large 2rem; the measured text input is 7px and the measured mobile button is 3.5px. Icon links are perfect circles, form fields and buttons are slightly rounded rectangles, and the decorative corner marks in the capture are thin L-shaped brackets.

## Components

- **Primary button** (`button-primary`): white fill, black text, `{typography.button}` (uppercase), 3.5px radius (`{rounded.xs}`), padding 17.5px 21px, 49px tall, 359px wide at the mobile viewport, with a white glow; measured on "S'INSCRIRE" at mobile, and the capture shows the same white glowing button for "CONTACT" in the header.
- **Round icon link** (`icon-link`): `{colors.ghost-bg}` fill, `{colors.ink-dim}` text, 1px `{colors.hairline}` border, 51px circle, 10.5px padding.
- **Text input** (`text-input`): white text, `{typography.input}`, `{rounded.sm}` (7px), padding 21px 10.5px 10.5px (the field is labelled "VOTRE ADRESSE MAIL" on the page), 56px tall and 490px wide, with a 1px white ring at 20% alpha.
- **Header controls**: a "ON" sound switch with level bars, a "MENU" label with a four-dot icon, and the CONTACT button; hover states were not measured.
- **Flavour selector**: the flavour name in heavy italic capitals, a gradient slider with a round handle, and dotted chevron arrows either side of the active can.
- **Footer text**: small white text, "© 2026 CIAO ENERGY - BY SKAALD.", legal links and social links.

## Design System Architecture

No public brand guideline or design system was found: the home page (https://www.ciaoenergy.com/) shows no link to one, and the footer only lists legal and social links with the credit "BY SKAALD." The de-facto system is the shipped stylesheet (it declares a webflow-icons font face): 66 root variables with a `--_primitives---` layer (colors, white opacity steps and a deleted camel brand ramp), a `--color-scheme-1--` layer (foreground, background, text, border, accent, taste-primary, taste-secondary), `--_ui-styles---` (radius, blur, stroke), `--_spacing-sizing---` (page padding, container, element padding, booking nav height) and `--_typography---font-styles--` (heading `"Franklin Gothic Atf",Arial,sans-serif` at weight 500, body `Geist,Arial,sans-serif`, mono `Geistmono,Arial,sans-serif`). Some variable names carry `relume-variable` fragments, and a webflow-icons font face is declared. The whole system is built around one dark scheme with white at varying opacities; there is no light scheme in the measured variables.

## Do's and Don'ts

- Do keep the page on pure black and set all text in white or white at 50%, 30% or 20% alpha.
- Do set display headings in Franklin Gothic ATF, uppercase, and everything else in Geist Light.
- Do use a single white button with a soft white glow and 3.5px corners for the main action.
- Do outline fields and icon buttons with one-pixel white hairlines at 20% alpha.
- Do let rendered 3D product and gradient scenes carry the color.
- Don't add colored UI fills; the measured UI is monochrome.
- Don't use the declared camel brand ramp; it was not observed on the page.
- Don't add drop shadows; use the measured white ring and glow only.

## Responsive Behavior

Measured at a 390px viewport: the h2 drops from 96px/76.8px to 31.5px/25.2px, and the body text from 15.75px/23.625px to 14px/17.5px. The extractor's h1 role at mobile is the "MENU" label at 12.25px/18.375px, and the "S'INSCRIRE" button measures 49px tall and 359px wide with 14px weight-400 uppercase text. The sizes by character count at mobile are 14px (2,171), 17.5px (476), 12.25px (143), 10.5px (82), 31.5px (44) and 35px (37). Breakpoints, the mobile header layout and the behavior of the 3D scenes at this width were not measured.

## Iteration Guide

1. Start on `{colors.canvas}` black with `{colors.ink}` white text; derive every other UI color from white at 5% to 80% alpha.
2. Use Franklin Gothic ATF uppercase at 96px for section titles and Geist Light at 15.75px for copy.
3. Make the one primary action a white, 3.5px-radius, uppercase 14px button with a white glow.
4. Use round 51px ghost icon links with a 1px 20%-white border.
5. Put the product in a full-viewport 3D scene and keep UI chrome at the edges.
6. Check any new value against `web/data/extracted/ciao-energy-launch-website.json` before adding it.
