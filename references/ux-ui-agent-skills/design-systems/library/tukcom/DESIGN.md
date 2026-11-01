---
version: alpha
name: Tukcom
category: "Thai Brands"
description: "Tukcom is the Thai IT and family shopping-mall brand; its site pairs a full-bleed aerial mall photograph with Montserrat 800 white 40px headlines, Open Sans 14px body, a white header with #2ea3f2 navigation, a 79px-radius outlined More Info button and black and #222222 footer fields."
colors:
  canvas: "#000000"
  page-body: "#ffffff"
  ink: "#ffffff"
  primary: "#2ea3f2"
  accent-amber: "#e09900"
  on-primary: "#ffffff"
  surface-teal: "#7ebec5"
  ink-body: "#666666"
  ink-dark: "#444444"
  ink-pale: "#cecece"
  ink-grey: "#808080"
  ink-scrim: "#00000099"
  hairline: "#d8d8d8"
  footer-bg: "#222222"
typography:
  display:
    fontFamily: Montserrat, Helvetica, Arial, Lucida, sans-serif
    fontSize: 40px
    fontWeight: 800
    lineHeight: 40px
  display-mobile:
    fontFamily: Montserrat, Helvetica, Arial, Lucida, sans-serif
    fontSize: 28px
    fontWeight: 800
    lineHeight: 28px
  body:
    fontFamily: "\"Open Sans\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 23.8px
  link:
    fontFamily: Montserrat, Helvetica, Arial, Lucida, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 23.8px
  button-secondary:
    fontFamily: "\"__DB Helvethaica X It\", Helvetica, Arial, Lucida, sans-serif"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 34px
    letterSpacing: 1px
  input:
    fontFamily: Arial
    fontSize: 13.3333px
    fontWeight: 400
rounded:
  xs: 3px
  sm: 79px
spacing:
  s1: 1px
  s2: 2px
  s3: 6px
  s4: 8px
  s5: 15px
  s6: 19px
  s7: 20px
  s8: 25.59px
  s9: 30px
  s10: 33px
components:
  button-secondary:
    textColor: "{colors.page-body}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    padding: 6px 20px
    height: 48px
    borderColor: "{colors.page-body}"
  link:
    textColor: "{colors.ink-grey}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.primary}"
    boxShadow: rgba(0, 0, 0, 0.1) 0px 1px 0px 0px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.ink-body}"
---

## Overview

The measured page is tukcom.com (the homepage redirects from www.tukcom.com and its title reads "Tukcom | IT & Shopping Mall"). It is the English-language version of the Tukcom mall group's website, with a language switcher beside the navigation. The hero is a full-width carousel of aerial photographs of mall buildings, captioned with the building's name in heavy white uppercase ("TUKCOM UDONTHANI" in the captured slide, with "TUKCOM SRIRACHA" as another slide title in the extraction) and the tagline "The IT & Family Shopping Mall in Udonthani" set in wide-tracked light text over a translucent dark strip. An outlined pill button, "More Info", sits below the caption.

Measurement caveats are important. The capture was taken with a Thai cookie banner at the bottom of the first screen (white bar, blue "Allow" button, close icon); that banner and its blue `#3860be` button are consent chrome and are not documented as brand UI, so the extractor's primary-CTA guess was overridden. In addition, the middle of the captured page is solid black: sections below the hero did not render at capture time (they are lazily loaded), so only the hero, the footer and the header are described. A second extraction attempt for this brand was blocked by a hosting captcha, so the existing measurement is the one used.

The footer is black with the white Tukcom logo (a heavy italic wordmark with a red and yellow square mark on the O, shown in the capture), a list of four mall locations (Tukcom Sriracha, Tukcom Pattaya, Tukcom Chonburi, Tukcom Udonthani), an amber "Contact" heading and mobile, Line and Facebook details, followed by a dark strip with the copyright line "Copyright 2018 Tukcom Co.,Ltd." and five social icons.

Imagery is the entire visual argument. The hero photograph is a daytime drone shot of a faceted black-and-white façade carrying the red Tukcom signs and a "Landmark" lettering, under a blue sky with scattered cloud and the surrounding low-rise city below. There is no illustration, no iconography beyond the social icons, and no product photography in the rendered portion. The voice is brief and promotional in English: a place name in capitals, one descriptive tagline and a single "More Info" action. Letter-spacing on the tagline is deliberately wide, which makes the thin strip of text feel like a signboard.

## Colors

- **Canvas `{colors.canvas}`**: pure black, the largest measured background area (the footer and the unrendered middle).
- **White `{colors.page-body}`**: header and cookie bar background, text on dark.
- **Navigation blue `{colors.primary}`**: the colour of the active "Home" link and nav text colour on the white header; the only blue accent in the interface once the cookie button is excluded.
- **Amber `{colors.accent-amber}`**: footer "Contact" heading.
- **Teal `{colors.surface-teal}`**: a measured background region (area weight 952) in a section that is not visible in the capture; its role is unverified so it is listed only as a token.
- **Greys**: `{colors.ink-body}` (the most-read text colour, 858 characters), `{colors.ink-dark}`, `{colors.ink-grey}`, `{colors.ink-pale}`; the footer strip is `{colors.footer-bg}`.
- **Hairline `{colors.hairline}`**.

The WordPress preset palette and gradients in the CSS are platform defaults and are not brand colours.

## Typography

Three families appear: Open Sans (weights 400, 600, 700 loaded; 1,339 characters) for body and navigation, Montserrat (500, 700, 800; 178 characters) for headlines and links, and a Thai italic face named DB Helvethaica X (50 characters) used for the "More Info" button label.

- **Display** (`{typography.display.fontSize}` / `{typography.display.lineHeight}`, weight `{typography.display.fontWeight}`, Montserrat): hero captions; `{typography.display-mobile.fontSize}` on a 390px viewport.
- **Body** (`{typography.body.fontSize}` / `{typography.body.lineHeight}`, weight `{typography.body.fontWeight}`, Open Sans): nav and paragraphs.
- **Link** (Montserrat `{typography.link.fontSize}`): footer and inline links.
- **Button** (`{typography.button-secondary.fontSize}`, letter-spacing `{typography.button-secondary.letterSpacing}`): the outlined hero button.

Open Sans and Montserrat are open-source Google fonts. DB Helvethaica X is a commercial Thai typeface; Sarabun or Prompt are reasonable free substitutes.

## Layout

The page is 1280px wide and 1,899px tall in the capture. A white sticky-style header (logo left, five links right) sits above a full-bleed hero, which is followed by the unrendered body area and a footer of left-aligned stacked text. Spacing values measured include `{spacing.s3}`, `{spacing.s4}`, `{spacing.s5}`, `{spacing.s7}` and `{spacing.s9}`.

Navigation is a simple row of five text links with small chevrons on the dropdown items (All Tukcom and the language selector), which means the header is quiet and lets the photograph dominate. The footer contact block uses wide letter-spacing on its small white lines, echoing the hero tagline, so the two ends of the page feel typographically related.

## Elevation & Depth

The header carries a one-pixel shadow rgba(0, 0, 0, 0.1) 0px 1px 0px 0px. A five-layer stacked shadow of rgba(0, 0, 0, 0.1) values from 0 2px 2px up to 0 16px 32px was also measured on one element (the cookie bar). The hero text sits on a translucent dark strip (`{colors.ink-scrim}` is the measured 60% black) rather than a shadow.

## Shapes

Two radii were measured: `{rounded.xs}` on small controls (the cookie button) and `{rounded.sm}` on the "More Info" pill. The pill is the characteristic shape. Everything else, including the header, photographs and footer, is rectangular.

## Components

- **Outlined pill button** (`button-secondary`): transparent, 1px white border, white text, 20px with 1px tracking, padding 6px 20px, 48px tall, radius `{rounded.sm}`. It is the hero action.
- **Header and nav**: white background, `{colors.primary}` link colour, Open Sans 14px; items Home, All Tukcom, Activities & Events, About Us, Contact Us, plus an English language dropdown.
- **Footer**: `{colors.footer-bg}` copyright strip with greyed text, social icons for Facebook, Twitter, Instagram, Line and YouTube.

## Design System Architecture

No public design system for Tukcom was found, and the fetch of the site returned no readable content because of a captcha, so no brand page was opened. The de-facto system is a WordPress site using the Divi theme conventions (the extraction includes the "ETmodules" icon font and WordPress `--wp--preset--*` variables) with Montserrat and Open Sans. Hover behaviour was measured only for the cookie button, which is excluded. Source of identity: https://tukcom.com/.

## Do's and Don'ts

- Do lead with large aerial photography of the building.
- Do set captions in Montserrat 800 white at `{typography.display.fontSize}`.
- Do use the outlined pill for the main hero action.
- Do keep the footer black with the white logo.
- Don't use the cookie banner's blue button as a brand button.
- Don't introduce additional rounded rectangles; the system is pill or square.
- Don't rely on the unrendered middle of the capture for layout decisions.
- Don't set body copy larger than 14px on the header.

Spacing in the footer is generous: the logo, the four location links, the contact heading and the contact lines are stacked on the left with large empty areas to the right, so the black field reads as a deliberate stage rather than a dense sitemap. Link colour in that block is a pale grey rather than white, with only the "Contact" heading breaking the monochrome with amber.

## Responsive Behavior

On a 390px viewport the extractor measured the main headline at 28px (`{typography.display-mobile.fontSize}`) against 40px on desktop. The behaviour of the carousel, header collapse and footer at mobile width was not measured, so it is not described.

## Iteration Guide

1. Start with a full-bleed building photograph and a white header.
2. Set the headline in Montserrat 800 at `{typography.display.fontSize}` in white.
3. Add one outlined pill button.
4. Use black for the footer with the white logo and amber headings.
5. Keep navigation text in `{colors.primary}`.
6. Re-extract lazy sections before documenting them.
