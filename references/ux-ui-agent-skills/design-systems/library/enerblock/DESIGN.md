---
version: alpha
name: Enerblock
category: "Product & SaaS"
description: "Enerblock (enerblock.net), industrialized digital construction: signal orange #ff5949 ground, paper #f0efeb and ink #0c0b11 planes divided by hairline grid rules, Neue Corp at 72px/64.8px display and 16px/20px body, square black buttons with arrows."
colors:
  canvas: "#ff5949"
  page-largest: "#f0efeb"
  ink: "#0c0b11"
  primary: "#0c0b11"
  on-primary: "#ffffff"
  surface-dark: "#0b0b10"
  on-dark: "#ffffff"
  ink-muted: "#9f9da0"
  ink-soft: "#212121"
typography:
  display:
    fontFamily: "\"Neue Corp\", sans-serif"
    fontSize: 72px
    fontWeight: 600
    lineHeight: 64.8px
    letterSpacing: "-0.72px"
  display-mobile:
    fontFamily: "\"Neue Corp\", sans-serif"
    fontSize: 54.3284px
    fontWeight: 600
    lineHeight: 48.8955px
    letterSpacing: "-0.543284px"
  heading:
    fontFamily: "\"Neue Corp\", sans-serif"
    fontSize: 46.2222px
    fontWeight: 500
    lineHeight: 42.7556px
    letterSpacing: "-0.462222px"
  subheading:
    fontFamily: "\"Neue Corp\", sans-serif"
    fontSize: 28.4444px
    fontWeight: 600
    lineHeight: 31.2889px
    letterSpacing: "-0.213333px"
  body:
    fontFamily: "\"Neue Corp\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 20px
    letterSpacing: "-0.213333px"
  button:
    fontFamily: "\"Neue Corp\", sans-serif"
    fontSize: 14.2222px
    fontWeight: 500
    lineHeight: 0px
    letterSpacing: "-0.213333px"
  link:
    fontFamily: "\"Neue Corp\", sans-serif"
    fontSize: 13.3333px
    fontWeight: 600
    lineHeight: 13.3333px
    letterSpacing: 0.133333px
rounded:
  xs: 6px
  none: 0px
spacing:
  s1: 1.78px
  s2: 3.56px
  s3: 4.44px
  s4: 5.33px
  s5: 7.11px
  s6: 8.89px
  s7: 9.78px
  s8: 10.67px
  s9: 11.56px
  s10: 14.22px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 36px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
---

## Overview

enerblock.net/en is the English home page of Enerblock, titled "Enerblock | Next-Gen Buildings", a construction-technology company ("EST. 2025" in the capture) that sells an industrialized, digital building system. The design reads as an engineering drawing: a signal-orange sheet divided by hairline grid rules, a very large black isometric logomark, headline "Next-Gen Buildings" with the line "The future of construction is industrialized and digital.", small technical labels ("SYSTEM", "EST. 2025") and then, in sequence, a full-bleed video of a gloved hand applying a QR-coded label to a steel profile, a paper-colored section, a black section containing an orange line drawing of a floor plan, and project cards with titles such as "36 social housing units in Eibar".

The paper section states the proposition: "Governable, replicable, and sustainable processes." with two paragraphs ("An industrialized and digital process that integrates architectural design, engineering, production and on-site assembly to achieve precision, control, certainty and measurable results." and "Operating as a single structure, aligning teams and processes to deliver reliable, traceable and replicable projects with greater predictability and control."), each followed by an outlined "Learn more" button with an arrow. The page is 10,496px tall with 1,053 visible elements.

A Spanish cookie panel ("VALORAMOS TU PRIVACIDAD", with Personalizar, Rechazar todo, Aceptar todo) overlays the capture. It is a consent control and is not documented as brand UI.

## Colors

Three planes carry the system. Signal orange #ff5949 (`--color-orange`) is the page's top plane and the measured canvas value; paper #f0efeb (`--color-grey-50`) is the light content plane and the largest-area background; ink-black #0c0b11 (`--color-black`, also #0b0b10 for the dark section) is for type, the logomark and the dark sections. A grey ramp is declared: #bebdbf (grey-100, 190,189,191), #9f9da0 (grey-200), #737074 (grey-300), #585459 (grey-400), #2e2930 (grey-500), #2a252c (grey-600), #211d22 (grey-700), #19171a (grey-800), #131114 (grey-900). White (#ffffff) is used for text on the video and on the black button. Measured text colors are ink #0c0b11, white, #9f9da0 and #212121.

The primary action color is ink black: the "Contact" button is a black fill with white text and an arrow. The generator reported the button label color as black; the measured visible label is white, so `on-primary` is set to #ffffff from the measured white text color. Orange is used as a ground and as line-work in drawings, not as a button fill.

## Typography

One family: Neue Corp (500, 600 and 700), sans-serif fallback, set with negative tracking (`--body-letter-spacing` -.015em). Measured desktop styles: display 72px/64.8px at 600 with -0.72px tracking ("Next-Gen Buildings"); heading 46.22px/42.76px at 500 with -0.46px; subheading 28.44px/31.29px at 600 with -0.21px (project titles); body 16px/20px at 500 with -0.21px; button 14.22px at 500; link and nav labels 13.33px at 600 with +0.13px tracking. Other sizes: 21.33px, 36px, 11.56px and 10.67px (tiny technical labels). Display lines are set tighter than 1.0 (64.8 over 72), and the small uppercase labels are tracked slightly open. Neue Corp is a commercial face; a compact grotesque with semibold weight is the substitution role.

## Layout

The layout is a drawn grid. The 12-column system is declared (`--grid-columns` 12), with `--grid-margin` and `--grid-gutter` of 1.25rem and `--context` 1440, and the header is 57px high (`--header-height`). In the hero, the left third holds the headline and a tagline, divided from the right two-thirds by a vertical rule, and the right area is cut into cells by thin horizontal and vertical lines, with technical labels in the cells. Content sections are split in half or in quarters by the same ruled lines; the paper section places the proposition in the right half and its two paragraphs in two side-by-side cells. Spacing tokens are small (1.78px to 14.22px); gaps measured are 17.78px, 10.67px, 7.11px, 5.33px, 4.44px and 3.56px.

## Elevation & Depth

One shadow was measured: rgba(172, 171, 171, 0.3) 0 -1px 10px, an upward-cast soft edge. Otherwise depth is flat and graphic: color planes, hairline rules and full-bleed photography. `--filter-blur` is declared as blur(5rem).

## Shapes

Radius is small. `--border-radius` is .1875rem (3px), and the measured radius is 6px; the "Contact" button and the large controls measure 0px radius in the extraction and appear square in the capture. Outlined buttons have square or barely rounded corners with a 1px ink border; the arrow sits in a separate cell divided by a vertical line. The logomark is made of parallelogram bars in isometric projection.

## Components

Contact button: ink-black fill, white Neue Corp 14.22px label, arrow icon in a divided cell at right, 36px high in the extraction. Menu control: an outlined box reading "Menu" with a two-line icon cell. Learn more button: outlined with a 1px ink border, label at left and an arrow cell at right, set on paper. Section labels: 10.67px uppercase technical text. Project card: image with the title in the 28.44px subheading style in white. Floor-plan drawing: orange line art on the black section. The cookie panel is excluded.

## Design System Architecture

No public design system or brand guideline was found; none was opened. The shipped CSS declares 28 root variables: a rgb-triplet color ramp (`--color-black`, `--color-white`, `--color-grey-50` to `--color-grey-900`, `--color-orange`), grid (`--grid-columns`, `--grid-margin`, `--grid-gutter`, `--context`), motion easing (`--ease` and `--menu-handle` cubic-bezier(.53, 0, 0, 1), `--link-handle` cubic-bezier(.4, 0, .25, 1)), `--header-height`, `--border-radius` and a Swiper theme color (#007aff, third-party). The de-facto system is therefore a three-plane color scheme, one typeface and a ruled grid.

## Do's and Don'ts

Do divide surfaces with hairline rules to expose the grid. Do use orange, paper and black as full planes and ink for type. Do set headings tight at 600 with negative tracking. Do pair every action with an arrow. Do use the isometric logomark as a large graphic.

Don't use the Swiper blue or the consent panel styles as brand UI. Don't round the corners generously. Don't use orange for body text. Don't add gradients or heavy shadows.

## Responsive Behavior

Measured at 390px: display 54.33px/48.9px at 600 with -0.54px tracking, heading 38.81px/38.81px, body 17.46px/21.83px, nav 14.55px/14.55px. Grid reflow, menu behavior and hover or focus were not measured.

## Iteration Guide

New pages should start from a ruled grid: orange or paper plane, ink type, 72px/64.8px display, 16px/20px body, 12-column margins of 1.25rem. Add actions as black rectangular buttons with a white label and arrow, or as outlined buttons on paper. Keep drawings in orange line on black. Measure any new interaction before specifying it.

## Voice and Content Model

Enerblock speaks in the register of a technical specification: nouns such as precision, control, certainty, traceability, replicability and predictability recur, and claims are phrased as outcomes ("measurable results", "reliable, traceable and replicable projects"). The English home page pairs a confident one-line vision ("The future of construction is industrialized and digital.") with a second statement in the section heading style, "Industrialized vision and digital control to execute...". Proof is shown through projects, for example "36 social housing units in Eibar", rather than through numbers or testimonials in the measured text. Labels are minimal and uppercase ("SYSTEM", "EST. 2025"), as in a drawing title block. The language switcher is implied by the /en path and the Spanish cookie text visible in the capture; the page language is declared as en.
