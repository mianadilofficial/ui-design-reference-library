---
version: alpha
name: "OVA Investment"
category: "Tech & AI"
description: "OVA (ova-investment.com), a Montreal investment fund: a pure black page (#000000) with white text, Neue Montreal at 80px weight 500 for section words, Geist Mono labels, a sunset-gradient hero with curved image cards, and no measured border radius or shadows."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#ffffff"
typography:
  display-mobile:
    fontFamily: "\"Neue Montreal\", -apple-system, \"system-ui\", \"avenir next\", avenir, \"segoe ui\", \"helvetica neue\", helvetica, Cantarell, Ubuntu, roboto, noto, arial, sans-serif"
    fontSize: 36px
    fontWeight: 400
    lineHeight: 46.8px
  heading:
    fontFamily: "\"Neue Montreal\", -apple-system, \"system-ui\", \"avenir next\", avenir, \"segoe ui\", \"helvetica neue\", helvetica, Cantarell, Ubuntu, roboto, noto, arial, sans-serif"
    fontSize: 80px
    fontWeight: 500
    lineHeight: 88px
  link:
    fontFamily: "\"Neue Montreal\", -apple-system, \"system-ui\", \"avenir next\", avenir, \"segoe ui\", \"helvetica neue\", helvetica, Cantarell, Ubuntu, roboto, noto, arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20.8px
rounded:
  none: 0px
spacing:
  s1: 25.6px
  s2: 115.6px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
---

## Overview

OVA (https://ova-investment.com/, title "OVA - Investment Fund and Creator of Sustainable Value") is an investment fund based in Montréal; the page text gives its address as 5323 Rue Brebeuf, Montréal, QC H2J 3L8 and credits Jean-Sébastien Bergeron as CEO and founder. Its own copy says it is "an investment fund built around a central promise: to invest disruptively in the most valuable, promising, and resilient assets", with a portfolio the page puts at over $200 million, including more than 500 multi-residential units and industrial properties. The site is 1280px wide and 17600px tall and exists in FR and EN.

The nav lists Home, Portfolio, Manifesto, About Us and Contact Us. The hero headline is a rotating phrase, "Valuable, that is our ..." followed by future, portfolio or collaboration. The sector section is a numbered grid, 01 to 08: Technology, Real Estate, Health and Biotechnology, Tourism and Hospitality, Finance and Fintech, Advertising and Digital Media, Energy and Entertainment. The Manifesto is three single words stacked large: "OVA / Invests / Evaluates / Performs". An About block opens "Since its creation," and the contact block asks "Share your vision with us." with an email link and the CEO's LinkedIn.

The capture shows a sunset-gradient hero (orange horizon, grey-blue sky, dark lower half) with translucent grey button plates at the top (CONTACT with a diagonal arrow, ABOUT US with a down arrow), a Montréal clock reading "23:55 MTL" in the centre, a MENU control with the OVA wordmark at the right, an arc of perspective-tilted photographs (a performer on a flower field, a warm living room, glassy pink flowers, a seascape, a blue-lit stage), and a short centred paragraph. Below the first screen the capture is pure black. The copy is short and declarative, an investor voice that keeps verbs in the third person ("Invests", "Evaluates", "Performs").

## Colors

The extraction measured a single background (#000000, area weight 18944) and a single text colour (#ffffff, 397 characters); the body role also lists #ffffff99 as a child colour. Tokens are canvas #000000, ink #ffffff and primary #ffffff; no brand accent colour was measured, so the page's only colour is photographic. The nav plates use translucent black and white: before hover, text rgba(255, 255, 255, 0.6) on rgba(0, 0, 0, 0.4) with a rgba(255, 255, 255, 0.6) border; on hover, text rgb(255, 255, 255) on rgba(0, 0, 0, 0.25) with a rgb(255, 255, 255) border.

The page also ships the CSS variables of a cookie-consent widget (`--cc-bg` #fff, `--cc-btn-primary-hover-bg` #000, `--cc-btn-secondary-bg` #eaeff2, `--cc-overlay-bg` rgba(0,0,0,.65), `--cc-toggle-readonly-bg` #d5dee2 and others). These belong to the consent dialog, not to the brand interface, and are not tokens. Gradients in the hero are photography and are not defined as CSS tokens.

## Typography

The face is Neue Montreal (weights 400 and 700 loaded) with a long system fallback stack (-apple-system, system-ui, avenir next, avenir, segoe ui, helvetica neue and others) and Geist Mono 500 for labels. By characters, Neue Montreal covers all 397 measured characters on the home view, weight 500 covers 358, weight 700 covers 23 and weight 400 covers 16.

- **Heading** 80px / 88px, weight 500: the manifesto words "Invests" and the sector titles (the mobile h2 measures 50px / 55px).
- **Display-mobile** 36px / 46.8px, weight 400: the hero h1 at 390px.
- **Link** 16px / 20.8px, weight 400.
- **Body role** 31.2px / 31.2px, weight 400 (3 characters measured); the most-used measured size is 17.68px (358 characters), then 16px (36).

No letter-spacing was measured (`letterSpacingBySize` is empty). The desktop hero heading size is not among the extractor's roles (the desktop h1 role is null), so no desktop display token is declared.

## Layout

The layout is centre-axis: hero text and paragraph are centred under a row of corner controls, with the arc of images beneath. Controls are pinned to the screen corners (CONTACT and ABOUT US top left, the clock top centre, MENU and logo top right). Spacing measured on the home view is limited: paddings of 115.6px (2 uses) and 25.6px (2 uses), no gaps. The sector grid and manifesto are lower on the 17600px page and were not captured in the extraction's frequencies; their structure is known only from the page text above.

## Elevation & Depth

No shadows (`boxShadows` is empty) and no borders measured other than the hover plates' translucent border colours noted above. Depth is built by perspective: the hero images are tilted and curved on an arc, and a vertical gradient from warm to near-black separates the hero from the black page. Translucent grey plates (rgba(0, 0, 0, 0.4) over the photography) lift the controls.

## Shapes

`borderRadii` is empty in the extraction, so every rendered element computes to 0px; the token set records `none: 0px`. Button plates are rectangles, 33px high in the hover measurements. The only curvature is the arc of the image cards, which comes from perspective transforms of rectangular images.

## Components

- **Nav plates (CONTACT, ABOUT US)**: Geist Mono uppercase labels with an arrow glyph, translucent black plate, 33px high, 0px radius; text 60% white at rest and 100% white on hover. On hover the label scrambles: "CONTACT" is measured as "CO*EJS&" and "ABOUT US" as "*GQWO WX" while the hover state is active, which is a character-scramble text effect.
- **Menu control**: a larger grey plate with the label MENU, a thin line and the OVA wordmark.
- **Clock**: "23:55 MTL" in mono at the top centre.
- **link**: white, Neue Montreal 16px / 20.8px, weight 400.
- **Manifesto words**: 80px weight 500 white words on black.
- **Language toggle**: FR / EN per the page text.

## Design System Architecture

No public design system, brand guidelines or press page is linked (the page's only external link besides email is the CEO's LinkedIn profile). The CSS exposes only the third-party cookie-consent variable set (`--cc-*`); the brand's own tokens are not published as variables in the measured root. The de-facto system is therefore: black canvas, white text, one grotesque (Neue Montreal) plus one monospace (Geist Mono), translucent plates for controls, and photography for colour.

## Do's and Don'ts

- Do keep the page black (#000000) with white text (#ffffff) and let photography provide colour.
- Do set large single-word headings at 80px weight 500.
- Do pin utility controls (contact, about, menu, clock) to the corners in Geist Mono.
- Do use translucent black plates for controls over imagery.
- Don't add accent colours; none were measured.
- Don't round corners or add shadows.
- Don't use the consent widget's light greys as brand colours.
- Don't hard-code a desktop hero size that was not measured; measure it first.

## Responsive Behavior

The 390px pass measured the h1 at 36px / 46.8px, weight 400, filling the 390px width (the measured text lists the rotating words future, portfolio and collaboration), and the h2 "Invests" at 50px / 55px, weight 500. Positioning of the corner controls, the image arc and the sector grid at mobile width was not measured.

## Iteration Guide

1. Start with #000000 and #ffffff only; add colour through images.
2. Set manifesto words at 80px / 88px weight 500 in Neue Montreal.
3. Build controls as translucent mono plates (60% white text, hover to 100%) with an arrow glyph.
4. Keep radius at 0px and avoid shadows and borders beyond the hover plate.
5. Measure the deeper sections (`--slug=ova-investment--page --url=<url> --force --no-motion`) before adding tokens: the sector grid, manifesto and contact layout were not captured, and the desktop hero size is unmeasured.
