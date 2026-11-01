---
version: alpha
name: MINI
category: "Automotive"
description: "MINI's official homepage (mini.com, measured at /en_MS/home.html): a white canvas (#ffffff) with pure black ink (#000000), a 64px uppercase serif display face (MINIBold, Georgia fallback) over full-bleed photography, MINISansReg 16px for navigation and body, underlined footer links that turn teal #017ea4 on hover, and circular 50% controls."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  on-media: "#ffffff"
  surface-band: "#e5e5e5"
  surface-soft: "#f1f1f1"
  link-hover: "#017ea4"
typography:
  display:
    fontFamily: MINIBold, Georgia, serif
    fontSize: 64px
    fontWeight: 400
    lineHeight: 64px
    textTransform: uppercase
  display-mobile:
    fontFamily: MINIBold, Georgia, serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 20px
    textTransform: uppercase
  nav:
    fontFamily: MINISansReg, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
rounded:
  circle: 50%
spacing:
  s1: 4px
  s2: 16px
  s3: 32px
  s4: 50px
  s5: 56px
  s6: 100px
  s7: 140px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.ink}"
---

## Overview

This file describes the MINI homepage exactly as the re-measurement saw it: `https://www.mini.com/en_MS/home.html` (the root `mini.com` redirects there), page title "Official Homepage | mini.com", language `en-MS`, 93 visible elements, 1280px wide, 1496px tall. The page is a hero-led, editorial automotive page. A 72px white header holds the MINI wing logo (96 by 72px, alt text "MINI logo with link to homepage") and a single text link, "THE NEW MINI FAMILY.", which the extractor reads as the menu toggle. Below it, one full-bleed photograph band 1197px tall carries the campaign headline "MINI JCW X DEUS EX MACHINA." with a short white rule and the line "Two worlds. Two cars. Singular enthusiasm." The page closes with a black band and a footer row of underlined legal links (Legal, Cookies, Imprint, Contact, REACH, EU Battery Regulation), the logo again, and "© MINI 2026".

The measured capture shows the hero photograph and the footer; the middle of the page renders as empty white space, so only what is on screen is documented here. No primary call-to-action button was detected (`ctaCandidates` is empty), so `primary` is the same black as the ink. The brand voice in the measured copy is short, declarative and capitalised: sentence fragments ending in full stops, set in uppercase serif.

## Colors

The palette is monochrome. Backgrounds by area are #ffffff (largest), #e5e5e5, #000000 and #f1f1f1; the only text colors read are #000000 (120 characters) and #ffffff (69 characters, the headline and subline on the photograph). Black is therefore ink, the footer band and the circular control fill; white is canvas and the text-on-image color.

- **canvas #ffffff**: page and header background.
- **ink / primary #000000**: all body text, nav text, underlines, the black band.
- **on-media #ffffff**: headline and subline over the hero photograph.
- **surface-band #e5e5e5** and **surface-soft #f1f1f1**: neutral grey fills measured by area.
- **link-hover #017ea4**: every measured hover state (the header link and all six footer links) changes text and border color from rgb(0, 0, 0) to rgb(1, 126, 164), which is #017ea4. The same teal is the second most frequent color in the stylesheet corpus (194 uses) and forms the keyboard focus ring: `0 0 0 2px #fff, 0 0 0 6px #017ea4, 0 0 0 8px #fff`.

The stylesheet also contains reds (#e42130, #e61d24) and a green (#00a94e); they were not seen on the measured screen, so they are not tokens.

## Typography

Two proprietary families are loaded from the site's own `etc.clientlibs/.../minidigital-white/fonts/latin` folder: the MINI Serif files (Bold, Regular, Italic) and MINI Sans Serif (Regular, Bold), plus BMW Type Next Light and the `md-icon` icon font. On screen the extractor sees two families: MINISansReg (162 characters) and MINIBold (27 characters).

- **display**: MINIBold, Georgia, serif, 64px, weight 400, line-height 64px, uppercase, used on the hero heading (an `h2` element, 540px wide, two lines). On a 390px viewport the same heading measures 20px with 20px line-height.
- **nav / body**: MINISansReg, Arial, sans-serif, 16px, weight 400, line-height 16px. The same style serves the header link, footer links and the uppercase "DOWNLOAD PDF" link.
- Other sizes measured by characters: 18px (42), 14px (11). Weights: 400 and 700.

Font substitutes: MINI's fonts are proprietary. The declared fallbacks are Georgia for the serif display face and Arial for the sans; use those when the MINI files are not licensed.

## Layout

The page is a vertical stack of full-width bands: header (72px, y 0), hero photograph (1197px, y 72), then a white footer region (227px) with a black band inside it. Content inside the hero starts about 100px from the left edge (content box 100 to 640px) and the heading sits 100px from the top of the page. The header content box runs from 192px to 348px. Every band measured has a single column (`maxCardColumns` is 1).

Padding values measured: 140px, 100px, 56px, 50px, 32px, 16px and 4px; the only flex/grid gap is 56px. The footer links sit in one centred row with the logo and copyright centred beneath.

## Elevation & Depth

No box shadows were measured on the rendered elements (`boxShadows` is empty) and no borders (`borderColors` is empty). Depth comes from photography and from contrast between the white canvas and the black band. The one shadow system in the stylesheet is the keyboard focus ring (white 2px, teal 6px, white 8px), which is a focus affordance and not a card elevation. Soft shadows such as `0 0 8px 0 rgba(0,0,0,0.08)` exist in the CSS but were not seen on the measured screen.

## Shapes

`desktop.frequencies.borderRadii` holds one entry: 50%, on two elements, which are the circular buttons (for example the black round control with an upward chevron above the footer, and the translucent white round controls in the hero carousel). Every other measured element, including the header and the body, computes a 0px radius. The stylesheet declares 2px, 4px, 8px, 16px, 20px, 24px and 28px radii as well; they were not rendered on this page and are not tokens. Imagery is rectangular and full-bleed.

## Components

- **Header / nav**: white, 72px high, text #000000 in MINISansReg 16px; logo left, one link "THE NEW MINI FAMILY." The link is not underlined and hovers to #017ea4. On mobile (390px) the header shows 2 links and a toggle labelled "Main menu".
- **Hero**: photograph band with uppercase serif heading, a short white rule and a white 18px subline. The carousel flag is set on the header and hero bands, and small dots at the bottom of the photograph indicate slides.
- **Footer links**: MINISansReg 16px, black, underlined, 32px tall hit area; hover changes color to #017ea4 and keeps the underline.
- **Circular controls**: 50% radius, black fill (rgb(0, 0, 0), hover to rgb(82, 82, 82) under focus) or white at 60% opacity (rgba(255, 255, 255, 0.6), focused rgb(224, 224, 224)).
- **Skip link**: "Skip to main content" appears on focus with a teal background rgb(0, 125, 163) and white text.

## Design System Architecture

No public design-system site for mini.com was opened for this measurement, so no official system is documented here; the de-facto system is described from the shipped site. Assets are served from `https://www.mini.com/etc.clientlibs/settings/wcm/designs/minidigital-white/`, which is the Adobe Experience Manager clientlib path of a design called "minidigital-white" (fonts, logo and favicon all live under it). `rootVars` is empty, so there are no CSS custom properties; styling is class-based. The stylesheet defines breakpoints at min-width 480px, 768px, 1024px, 1280px and 1920px, with 768px (818 declarations) and 1280px (601) used most. Motion durations most used are 200ms (69), 300ms (36) and 400ms (28), with ease-in-out the most used easing (64) and `cubic-bezier(0.165,0.84,0.44,1)` used 16 times. Fonts, logo and favicon are marked "owned by the site owner, reference/prototype only".

## Do's and Don'ts

- Do keep the surface white and the ink pure black; let photography supply color.
- Do set headlines in uppercase serif at 64px with equal line-height, and end them with a full stop as the measured copy does.
- Do show hover on links by changing color to #017ea4, not by changing weight or adding a fill.
- Do use circular 50% controls for icon-only buttons.
- Don't add shadows, borders or rounded corners to cards or bands: none were measured.
- Don't use the stylesheet-only reds or greens as primary colors; they were not on the measured screen.
- Don't treat the capture's blank middle area as a design choice; it was not populated at measurement time.

## Responsive Behavior

Measured at 390px wide: the display heading drops from 64px to 20px (line-height 20px); body text stays 16px and the 18px size is unchanged; the header remains 72px high and white; the header shows 2 links plus a toggle labelled "Main menu" (on desktop: 3 links and a toggle labelled "THE NEW MINI FAMILY."). The hero's mobile band is 134px high with the heading, followed by a 455px band filled #5e5851 and a 770px media band. Cards stay at one column. Any other breakpoint behaviour is not measured here; the stylesheet declares media queries at 480, 768, 1024, 1280 and 1920px.

## Iteration Guide

1. Start from canvas #ffffff and ink #000000 and add color only through photography.
2. Use `display` for one headline per hero and `nav` for every other text style; add 18px and 14px only where the measured page does.
3. Use link-hover #017ea4 for every interactive hover and focus ring.
4. Keep radius at 0 except circular controls at 50%.
5. When re-measuring, wait for lazy sections: the middle of the measured page was blank, so verify copy, buttons and cards before documenting them.
6. Keep every number in this file equal to the frontmatter; cite new values from `web/data/extracted/mini.json`.
