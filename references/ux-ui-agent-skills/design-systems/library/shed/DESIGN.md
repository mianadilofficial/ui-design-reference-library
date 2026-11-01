---
version: alpha
name: Shed
category: "Architecture & Interiors"
description: "Shed (shed.design), a brand design and interior architecture agency: OwnersWeb 600 uppercase display at 205.6px/185.04px, SequelWeb sans for body (48px/48px weight 500 in the intro statement), RecklessWeb serif accents, white canvas #ffffff, ink #1c1c1c, light-blue #6ccaff link accent and 128px/50% rounds."
colors:
  canvas: "#ffffff"
  ink: "#1c1c1c"
  primary: "#6ccaff"
  black: "#000000"
typography:
  display:
    fontFamily: OwnersWeb, sans-serif
    fontSize: 205.6px
    fontWeight: 600
    lineHeight: 185.04px
    letterSpacing: "-2.056px"
    textTransform: uppercase
  display-mobile:
    fontFamily: OwnersWeb, sans-serif
    fontSize: 100px
    fontWeight: 600
    lineHeight: 80px
    letterSpacing: "-1px"
    textTransform: uppercase
  heading:
    fontFamily: SequelWeb, sans-serif
    fontSize: 9.6px
    fontWeight: 400
    lineHeight: 11.904px
    letterSpacing: 0.096px
    textTransform: uppercase
  body:
    fontFamily: SequelWeb, sans-serif
    fontSize: 48px
    fontWeight: 500
    lineHeight: 48px
    letterSpacing: "-0.96px"
  link:
    fontFamily: SequelWeb, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
rounded:
  xs: 128px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6.4px
  s3: 9.6px
  s4: 12.8px
  s5: 17.6px
  s6: 25.6px
  s7: 40px
  s8: 134.4px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  footer:
    textColor: "{colors.ink}"
    padding: 0px 9.6px
---

## Overview

Shed (https://shed.design/, page title "Shed | Home") describes itself as "Building brands through experience for more than 25 years", a brand design and interior architecture agency whose services run from brand strategy to interior design and production across Retail, Hospitality, Workplace and Exhibition. The navigation lists About, Services, Work (with See Featured and See Index), News & Views and Contact. Sections on the page are Introduction, Shed Spirit, Core services and sectors, Selected Clients, Latest Updates and a contact form headed "GOT A PROJECT IN MIND? WE'D LOVE TO HEAR ABOUT IT."

The capture is image-first and colour-saturated. A full-bleed split-screen photograph of a tiled washroom, green on the left and red on the right with numbered floor markings, sits behind a huge white wordmark headline, "THIS IS SHED", that spans the full viewport width (the measured h1 is 205.6px on a 1,280px page). A small serif "Shed." logo sits at top left, a ticker of the tagline runs along the top, a "+ MENU" control is at top right, and a round "SCROLL" disc sits bottom right. Below that, a white band holds a large paragraph statement at 48px; further down, a project film with a play button sits beside a narrow column of small text; then a full-width saturated ultramarine blue band (hex not measured, because its background is not in the measured background areas) with "RETAIL" and "HOSPITALITY" in enormous white caps.

The tone of the copy, from the page itself, is first-person plural, direct and confident: "We're devoid of a house style, believing in purposeful, relevant design for every project." The design echoes that claim: the interface is neutral (white, near-black, tiny uppercase labels) so each project's own colour can dominate.

## Colors

- **Canvas #ffffff.** The page background (5,132 area weight) and the colour of the hero headline text over photography.
- **Ink #1c1c1c.** The main text (1,223 characters) and footer text. A 10% tint of it, #1c1c1c1a, is the second largest background area (676 weight).
- **Primary #6ccaff.** A light sky blue measured on 36 characters of text; it is the only chromatic text colour on the rendered page. It is named `primary` here because the extractor found no filled button (there are no CTA candidates).
- **Black #000000.** 6 characters.
- **Overlay #00000066.** A measured background colour with zero area weight, an overlay layer.

The blue band and the red and green photography in the capture are content, not tokens; their hexes were not measured and are not documented as brand values.

## Typography

Three self-hosted families: **OwnersWeb** (weight 600) for the giant uppercase wordmark, **SequelWeb** (weights 400 and 500) for interface and body text, and **RecklessWeb** (weight 400, a serif) for the logotype and the blue-band intro. By character count: SequelWeb 1,121, RecklessWeb 355, OwnersWeb 84. These are commercial or foundry-licensed faces; for substitution use a neo-grotesque sans (such as Inter or Helvetica Neue) for SequelWeb, a heavy grotesque for OwnersWeb and a text serif for RecklessWeb. These substitutes are suggestions, not measurements.

- **Display:** OwnersWeb 600, 205.6px / 185.04px, letter spacing -2.056px, uppercase; mobile 100px / 80px, -1px.
- **Heading (section label):** SequelWeb 400, 9.6px / 11.904px, letter spacing 0.096px, uppercase ("INTRODUCTION"), shown in the capture inside a thin outlined pill.
- **Body (intro statement):** SequelWeb 500, 48px / 48px, letter spacing -0.96px. Mobile measured 27px / 27px, -0.54px.
- **Link:** SequelWeb 400, 16px / 16px.

Other measured sizes by character count: 14.4px (316), 9.6px (242), 34.4px (229), 19.2px (210), 11.2px (84, uppercase with 0.336px tracking in the footer), 128px (72), 12.8px (27). Weights are 500 (775 chars), 400 (701) and 600 (84). Tracking is negative at every large size (48px -0.96px, 34.4px -0.688px, 19.2px -0.192px, 128px -1.28px).

## Layout

The desktop page is 1,280px wide and 4,808px tall. The page runs edge to edge: text starts about 9.6px from the viewport edge (the footer and h1 carry 9.6px horizontal padding) and the h1 measures 1,280px wide with 40px top padding. The measured padding values are 9.6px (16 uses), 4px (7), 17.6px, 134.4px, 40px and 25.6px; gaps are 9.6px, 6.4px, 12.8px and 40px. The intro is a single wide text column (1,153px wide, 336px tall), followed by a two-column split of a video block and a narrow text column divided by a vertical hairline. The footer is 327px tall and lists Instagram, LinkedIn, About, Services, Work, News & Views and Contact in 11.2px uppercase.

## Elevation & Depth

No box shadows were measured (`boxShadows` is empty; the only stylesheet entry is `none!important`). The design is flat: depth comes from photography, full-bleed colour bands and overlapping large type over images. A dark translucent overlay (#00000066) exists but with no measured area.

## Shapes

Measured radii: 50% (2 elements, the round Scroll disc and similar circles) and 128px (1 element, the pill-shaped video chip at bottom left of the hero). The tokens keep `xs: 128px` and `pill: 9999px` as generated. The small outlined section labels in the capture are pills as well, though their individual radius was not measured separately. The stylesheet corpus lists 20.8px, 32px and 256px radii, which were not measured on rendered elements. Images and bands are rectangular.

## Components

- **Section label.** SequelWeb 9.6px uppercase in #1c1c1c inside a thin outlined pill.
- **Text link with underline.** "OUR WORK" and "OUR SERVICES" appear as small bold uppercase words with an underline in the capture; the extractor recorded the nav link at 16px/16px SequelWeb, white, 77px by 26px.
- **Menu control.** "+ MENU" at the top right in white over the hero.
- **Scroll disc and play button.** Round white controls over imagery (50% radius).
- **Footer.** #1c1c1c text at 11.2px / 12.32px uppercase, 0.336px tracking, 9.6px side padding.

No filled button, input or card was detected (`ctaCandidates` is empty). Hover states were not recorded.

## Design System Architecture

No public design system or brand guidelines exist on the pages opened: the home page links only to a Terms & Conditions PDF and website terms PDF and credits IJP and TA for the build. Root custom properties were empty (`rootVars` is `{}`), so the de-facto system lives in the self-hosted font faces (OwnersWeb, SequelWeb, RecklessWeb) and in hard-coded sizes that use fractional values (9.6px, 11.2px, 14.4px, 19.2px, 34.4px, 205.6px). No scale source was found on the pages opened.

## Do's and Don'ts

- Do set the wordmark and section titles in OwnersWeb 600 uppercase with tight negative tracking.
- Do use SequelWeb 500 at 48px with -0.96px tracking for long statements, and tiny 9.6px uppercase labels for categories.
- Do keep the interface neutral (#ffffff and #1c1c1c) so photography and colour bands lead.
- Do use round (50%) or fully rounded controls on imagery.
- Don't add a house style of drop shadows, gradients or cards; none were measured.
- Don't use #6ccaff for large fills; it was measured only as text.
- Don't invent a body size; the measured body statement is 48px desktop and 27px mobile.

## Responsive Behavior

The mobile pass measured: h1 100px / 80px (desktop 205.6px / 185.04px) with letter spacing -1px and 50px top padding, h2 label 10px / 12.4px, body statement 27px / 27px with -0.54px tracking. Character counts by size on mobile: 27px (575), 10px (236), 16px (191), 18px (160), 15px (145), 14px (84), 56px (72), 13px (27), 100px (12). Menu behavior, breakpoints and layout stacking were not measured.

## Iteration Guide

1. Start from a white page with #1c1c1c text and a full-bleed photographic hero carrying a giant OwnersWeb 600 uppercase headline.
2. Use SequelWeb for everything else: 48px/48px statements, 9.6px uppercase labels, 11.2px uppercase footer.
3. Add one saturated full-width colour band per scroll for sector titles.
4. Keep controls round; avoid shadows and filled buttons.
5. Run `node web/scripts/verify-designs.mjs --slug=shed` after edits.
