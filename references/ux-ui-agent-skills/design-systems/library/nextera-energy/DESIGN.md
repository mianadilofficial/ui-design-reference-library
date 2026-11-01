---
version: alpha
name: NextEra Energy
category: "Energy & Climate"
description: "NextEra Energy's corporate home page: all-Arial type with uppercase bold 36px hero and 32px section headings, #404040 and #000000 text on #ffffff and #f2f2f2 bands, a #0073a8 link blue, a #0c2739 navy notice band and footer base, and white outlined pill buttons with a 23px radius."
colors:
  canvas: "#ffffff"
  surface-grey: "#f2f2f2"
  ink: "#404040"
  ink-strong: "#000000"
  ink-muted: "#666666"
  primary: "#0073a8"
  navy: "#0c2739"
  on-dark: "#ffffff"
typography:
  display:
    fontFamily: Arial
    fontSize: 36px
    fontWeight: 700
    lineHeight: 43px
    textTransform: uppercase
  display-mobile:
    fontFamily: Arial
    fontSize: 27px
    fontWeight: 700
    lineHeight: 34px
    textTransform: uppercase
  heading:
    fontFamily: Arial
    fontSize: 32px
    fontWeight: 700
    lineHeight: 40px
    textTransform: uppercase
  subheading:
    fontFamily: Arial
    fontSize: 32px
    fontWeight: 400
    lineHeight: 40px
  body:
    fontFamily: Arial
    fontSize: 15px
    fontWeight: 400
    lineHeight: 21px
  link:
    fontFamily: Arial
    fontSize: 15px
    fontWeight: 700
    lineHeight: 21px
rounded:
  pill: 23px
spacing:
  s1: 10px
  s2: 12px
  s3: 15px
  s4: 16px
  s5: 20px
  s6: 30px
  s7: 40px
  s8: 60px
  s9: 97.5px
components:
  button-outline:
    textColor: "{colors.on-dark}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
    padding: 0px 40px
    height: 42px
    borderColor: "{colors.on-dark}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  footer:
    backgroundColor: "{colors.surface-grey}"
    textColor: "{colors.primary}"
    padding: 30px 30px 0px
---

## Overview

The measured page is https://www.nexteraenergy.com/ with the title "Enabling American Energy Dominance | NextEra Energy" (language `en`). It is the parent corporate site for NextEra Energy, which in the capture introduces two operating businesses: Florida Power & Light Company (FPL) and NextEra Energy Resources. The scroll height is 4930px at 1280px wide.

The page reads as a confident utility-scale corporate site. Reading the capture top to bottom: a white header with the NextEra Energy logo at left and four uppercase nav items (About Us, Investor Relations, Newsroom, Careers); a dark navy notice band carrying a white message about a planned combination with Dominion Energy and an underlined "GET MORE INFORMATION" link; a full-bleed hero photograph of a power plant with a US flag, with a translucent panel holding the white uppercase headline "POWERING TODAY. BUILDING TOMORROW.™"; a white band with "100+ YEARS OF POWERING PROGRESS" beside a silhouetted worker photograph; a light grey band with the centered headline "NEXTERA ENERGY IS DELIVERING FOR AMERICA"; then alternating image and text rows for FPL and NextEra Energy Resources, each ending in a blue chevron link; and a dark navy base. The tagline in the hero is "Powering Today. Building Tomorrow."

Imagery is documentary photography of infrastructure, field crews and solar arrays, cropped edge to edge. Copy is plain, declarative and superlative-led ("largest", "America's leading" appear in the page text).

## Colors

Three surfaces make up the page: `#f2f2f2` (the largest measured background area, 2992 weighted units), `#0c2739` navy (1114) and `#ffffff` (876, also the body canvas). The capture shows grey and white as the two dominant fields on screen, so both are kept.

- **Ink `#404040`** is the most-read text color (1532 characters) and the h2 color.
- **Strong ink `#000000`** colors body paragraphs and the large h3 headlines such as "FPL: Shaping Florida's Energy Future" (1436 characters).
- **Muted `#666666`** colors the header nav links (99 characters); on hover the nav link text and its border computed to `#0c2739`.
- **Link blue `#0073a8`** is the color of the "Visit FPL" and "Visit NextEra Energy Resources" links and the footer text (229 characters). No filled button was detected, so the link blue serves as `primary`.
- **Navy `#0c2739`** is the notice band and the dark base; a translucent variant (`#0c273980`) appears as a measured background and is not recorded as a token.
- **White `#ffffff`** is text on the hero, the notice band and the navy base.

The brand logo's green and blue are raster artwork and were not measured as page colors.

## Typography

Every measured character uses Arial (4027 weighted characters, no webfont; the only loaded font is FontAwesome for icons). The scale is:

- h1 (hero): 36px, weight 700, line height 43px, uppercase; 27px / 34px uppercase on the 390px mobile pass.
- h2 (band titles): 32px, weight 700, line height 40px, uppercase, color `#404040`; 25px / 30px on the mobile pass.
- h3 (story titles): 32px, weight 400, line height 40px, mixed case.
- Body: 15px, weight 400, line height 21px.
- Links: 15px, weight 700, line height 21px.
- Small text at 14px and 11.25px appears in minor roles.

Uppercase is a signature of headings and nav. Arial is a system font on most platforms, so no substitute is required.

## Layout

The page is a stack of full-width bands at 1280px: header, notice, hero, white split row, grey intro band, then two alternating image/text rows that run flush to the viewport edges. Text blocks sit in padded halves (15px, 16px and 30px paddings measured); the footer uses `30px 30px 0px` padding. Measured paddings: 15px (18 uses), 10px, 16px, 12px, 40px, 30px, 60px and 97.5px. A single 20px gap was measured.

Rows alternate image-left and image-right, and the intro headings are centered while story text is left-aligned.

## Elevation & Depth

Two shadows were measured: `rgba(0, 0, 0, 0.4) 0px 0px 4px 0px` (four elements) and `rgb(196, 200, 199) 0px 1px 7px 0px` (one element). Everything else is flat; depth comes from photography and from the contrast between navy, grey and white bands. The translucent hero panel is a color overlay and not a shadow.

## Shapes

Only one radius was measured: 23px, on the two outlined pill buttons (`button-outline`). All other measured elements compute to 0px, so photographs, bands and text blocks are rectangular. The one border color measured is `#ffffff` (the 2px outline of the pill).

## Components

- **button-outline**: transparent fill, 2px `#ffffff` border, white uppercase Arial 15px / 700 text, 0 40px padding, 23px radius, 42px height. Measured as the secondary and outlined CTA candidate (the extractor found no filled primary).
- **link**: `#0073a8` Arial 15px / 700, usually with a trailing chevron icon ("Visit FPL").
- **nav link**: `#666666` uppercase, with chevron icons on About Us and Careers; hover color `#0c2739`.
- **notice band**: `#0c2739` field with white bold text and an underlined link.
- **footer**: `#f2f2f2` background, `#0073a8` uppercase bold text, padding `30px 30px 0px`.

## Content and Voice

The page text comes from the opened home page. Headlines are short and declarative: "Powering Today. Building Tomorrow.", "100+ Years of Powering Progress", "NextEra Energy is Delivering for America". Body paragraphs are two to six lines of 15px text that name concrete facts, for example that FPL serves more than 6 million accounts and that NextEra Energy Resources offers solutions across renewables, storage, natural gas and nuclear. Calls to action are labelled by destination ("Visit FPL", "Visit NextEra Energy Resources", "Get more information") rather than by verbs such as "learn more". The newsroom, investor relations and careers areas live on separate subdomains, so this site stays a compact brand-level introduction.

## Design System Architecture

No public design system or brand guideline is linked from the site. The home page at https://www.nexteraenergy.com was opened and links only to About Us, Investor Relations (investor.nexteraenergy.com), Newsroom (newsroom.nexteraenergy.com), Careers, the affiliates (nexteraenergyresources.com and fpl.com), a merger microsite and footer policy pages; no press kit or brand portal is among them. The extraction found no CSS custom properties (`rootVars` is empty), so the de-facto system is a compact set of values: one family (Arial), two weights (400 and 700), five measured text colors, three background fields and a single 23px radius.

## Do's and Don'ts

- Do set headlines in uppercase bold Arial at 36px and 32px, and keep story titles at 32px regular weight.
- Do alternate full-bleed photographs with text halves on `#ffffff` and `#f2f2f2`.
- Do use `#0073a8` for inline calls to action and `#0c2739` for the notice band and base.
- Do use the white outlined 23px pill on dark photography.
- Don't add webfonts; the site measures Arial only.
- Don't round photographs or cards; their radius measured 0px.
- Don't add additional accent colors; none were measured besides the link blue.
- Don't use heavy shadows; the two measured shadows are subtle (4px and 7px blur).

## Responsive Behavior

Only the 390px mobile pass was measured, and it recorded type values: h1 27px / 34px uppercase 700, h2 25px / 30px uppercase 700, and body 15px / 21px unchanged. Breakpoints, how the header nav and the split rows reflow, and touch target sizes were not measured.

## Iteration Guide

1. Set Arial everywhere; body 15px / 21px in `#000000` or `#404040`.
2. Build headline bands in uppercase 700 (36px hero, 32px section) and keep story titles at 400.
3. Alternate `#ffffff` and `#f2f2f2` bands, with `#0c2739` for notices and the base.
4. Use `#0073a8` bold 15px for links with a chevron.
5. For hero buttons, use the 23px white-outline pill with 0 40px padding.
6. Re-measure with `node web/scripts/extract-tokens.mjs --slug=nextera-energy --url=https://www.nexteraenergy.com --force --no-motion` and gate with `node web/scripts/verify-designs.mjs --slug=nextera-energy`.
