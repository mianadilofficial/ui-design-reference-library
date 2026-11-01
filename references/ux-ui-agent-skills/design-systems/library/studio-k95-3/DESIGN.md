---
version: alpha
name: Studio K95
category: "Portfolio"
description: "Italian graphic and brand studio from Catania: full-viewport interactive 3D gallery on electric blue #1500e1 with white #ffffff type in one variable font \"adaptive\" at 16px and 14px with 0.5px tracking, a 999px pill switch and no shadows."
colors:
  canvas: "#1500e1"
  ink: "#ffffff"
  primary: "#1500e1"
  black: "#000000"
  ink-muted: "#ffffff8c"
  hairline: "#ffffff2e"
typography:
  display:
    fontFamily: adaptive, system-ui, sans-serif
    fontSize: 16px
    fontWeight: 700
    letterSpacing: 0.5px
  display-mobile:
    fontFamily: adaptive, system-ui, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
    letterSpacing: 0.5px
  nav:
    fontFamily: adaptive, system-ui, sans-serif
    fontSize: 16px
    fontWeight: 400
    letterSpacing: 0.5px
rounded:
  xs: 100px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 8px
  s5: 10px
  s6: 13px
  s7: 16px
  s8: 24px
  s9: 38px
  s10: 50px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.ink}"
    padding: 38px 58px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.ink}"
    padding: 24px 58px 43px
---

## Overview

Studio K95 (title "Studio K95 - Agenzia di comunicazione e grafica a Catania", language it-IT) is the Italian site of a graphic, brand and communication studio in Catania. The page heading reads "K95 — Studio di grafica, brand e comunicazione a Catania", the footer reads "BRAND & DIGITAL DESIGN" and "© 2026". The home page is a single viewport (measured scrollHeight 800 at 1280px) filled with an interactive 3D gallery: project cover images float as small cards arranged on rings around a central card, over a saturated electric-blue field with a faint grid. Two modes, "Rings" and "Spiral", switch the arrangement, and a counter at bottom right reads "12 / 20 lavori selezionati".

The opened page lists thirteen linked projects, grouped by type: Branding (MN motorcycle helmet company, AMTS Card, Tap2, Cosmo, Etinvest, Wratislavia Cantans, Massoneria and Fascismo, Ortigia Design), Editoria (ACAF, Incontri sulla prevenzione delle malattie infettive, Salvo Canuti | Marocco) and Type Design (Stelvio Grotesk, Herbert Typeface). Copy is minimal: all navigation is uppercase Italian, the project is the content.

## Colors

The palette is two colors and a translucency.

- **Canvas #1500e1**: an intense ultramarine blue, declared as `--color-bg` and the screen's dominant color (area weight 2048). The capture is mostly this blue.
- **Black #000000**: the body element's measured background (area 1024), present under the blue layer.
- **Ink #ffffff**: all navigation, labels and the counter (102 characters weighted).
- **Primary #1500e1**: the brand blue, also used as the text color of the title text measured in 56 characters (the element carrying that text was measured at 32px). No CTA exists.
- **ink-muted #ffffff8c**: 55% white, used for the inactive language option and secondary counter text.
- **hairline #ffffff2e**: an 18% white border color on the Rings/Spiral switch.

The extractor's primary guess #0000ee is the browser default link color and was dropped. Root variables also include a glass fill `--color-glass` rgba(28,28,28,.1) and many `--cc-*` variables from a cookie-consent library (for example `--cc-bg` #fff); those belong to the consent dialog, not the brand.

## Typography

One variable font, "adaptive", loaded with a weight range of 100 to 900, with system-ui and sans-serif fallbacks. Its commercial name is not stated on the pages opened. All text is tracked at +0.5px.

- **display**: 16px, weight 700, letter-spacing 0.5px (the h1 text "Tap2" in the measured pass).
- **nav**: 16px, weight 400, letter-spacing 0.5px.
- **display-mobile**: 14px / 14px, weight 400, letter-spacing 0.5px (390px pass).

The most-read sizes are 14px (104 characters weighted: nav and counter), 32px (56, the large project title) and 16px (4). Weights in use are 400 (104) and 700 (60). Type sizes in the stylesheet follow `--tpyesize-14` .875em, `--tpyesize-16` 1em, `--tpyesize-20` 1.25em and `--tpyesize-35` 2.188em.

## Layout

The page has no scrolling columns. A fixed header holds the K95 mark at top left, three uppercase links at center right (TUTTI I PROGETTI, STUDIO, CONTATTI) and the IT / EN switch at right; the nav padding is 38px 58px. The stage fills the viewport. At bottom left sits the Rings / Spiral pill switch and at bottom right the counter, in a footer with padding 24px 58px 43px. Gaps measured are 8px, 4px, 50px, 10px and 2px; other paddings are 16px, 5px and 13px. The root also declares `--spaceMedium: 80px`.

## Elevation & Depth

No shadows measured. Depth is made in 3D: cards are placed in perspective on rings or a spiral with scale and rotation, and a glass fill `--color-glass` (rgba(28,28,28,.1)) is declared. The grid on the blue background is a flat line pattern. Do not add CSS shadows.

## Shapes

Radii measured: 999px (4 elements, the pill switch and its segments), 100px (1) and 50% (1, one element). Everything else is 0px: the project cards are sharp rectangles. Tokens: `xs: 100px`, `pill: 9999px`.

## Components

- **nav-link**: uppercase 16px white, with doubled-letter markup in the source used for a text-roll effect (the opened page text shows each letter doubled).
- **Language switch**: IT / EN; the inactive option is muted. Hover measured on the EN button: opacity goes from 0.5 to 1, with color and background unchanged.
- **Rings / Spiral switch**: a pill with a translucent fill and an active segment, bottom left, border #ffffff2e.
- **Project card**: a floating image on the 3D stage; the center card is enlarged with its title.
- **Counter**: "12 / 20 lavori selezionati", with "lavori" underlined as a link to the works page.
- **footer**: the counter and brand text row with the padding above.

No form inputs or filled buttons were detected.

## Design System Architecture

No public design system or brand guideline exists: the opened page (https://k95.it) names no typeface, palette or guidelines. The de-facto system is small: `--color-bg` #1500e1, `--color-glass`, `--spaceMedium` 80px, the em-based type steps `--tpyesize-*`, and a large block of `--cc-*` variables belonging to the cookie-consent library. Sixty-four root variables were recorded, most of them from that library. Source: https://k95.it (measured rootVars).

## Do's and Don'ts

Do:
- Keep the electric blue #1500e1 as the stage, with white type.
- Track all text at +0.5px in the one variable font.
- Present work as imagery first, with minimal labels.
- Keep navigation in uppercase Italian with an IT / EN switch.

Don't:
- Use #0000ee; it is a browser default link color.
- Add shadows, gradients or decorative rounded corners beyond the pill switch.
- Style the cookie-consent colors as brand colors.
- Add paragraphs of copy to the home page.

## Responsive Behavior

In the 390px pass the footer text shortens to "12 / 20 lavori" and measured sizes are 32px (56 characters weighted), 14px (24) and 13px (10); the nav measured 14px / 14px. Stage behavior, card sizes and the menu layout on mobile were not measured. The opened page also exposes "MENU" and "CLOSE" controls, but their layout was not measured.

## Iteration Guide

1. Set canvas #1500e1 and ink #ffffff; keep the black #000000 as the body base.
2. Load the "adaptive" variable font; set 16px and 14px at 0.5px tracking.
3. Place the header with padding 38px 58px and the footer with 24px 58px 43px.
4. Use pill radius for the Rings / Spiral switch only.
5. Hover: only the EN button opacity 0.5 to 1 is measured.
6. Re-run `node web/scripts/verify-designs.mjs --slug=studio-k95-3`.

## Content Notes for Reproduction

The opened page lists the project paths under /projects/, for example mn-motorcycle-helmet-company, amts-card, tap-2, cosmo, etinvest, wratislavia-cantans, stelvio-grotesk, ortigia-design, massoneria-e-fascismo, marocco and herbert-typeface. The footer says 12 of 20 selected works while thirteen thumbnails are linked; this mismatch is on the page itself and is reported here as found. Menu labels are TUTTI I PROGETTI (/works), STUDIO (/studio) and CONTATTI (/contacts).

Reproduction detail: the brand mark is an image link to the home path and reads K95 in the capture header. The language switch exposes two buttons, IT and EN, and the measured hover state is limited to the EN button. The page also carries a SCROLL prompt text and a close control for the menu, which are interface text and not tokens. The stage mixes covers of very different colors (orange, red, white, black, blue), so the blue canvas is the only constant color on screen; any rebuild should treat the covers as content images and keep the interface itself strictly white on blue. Counts in the footer, 12 of 20 selected works, are page copy and should be kept verbatim if the page is mirrored.
