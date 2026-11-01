---
version: alpha
name: "Revelatio Studio"
category: "Business & Corporate"
description: "Revelatio Studio site: pure #000000 canvas with white ink at several opacities, Neue Haas Grotesk Text Pro 55 Roman at 31.99px with -0.96px tracking, tiny 9.33px interface labels, translucent #ffffff29 glass buttons with a 3.55px radius, and an ASCII-rendered team portrait hero."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#ffffff"
  on-primary: "#ffffff"
  ink-2: "#ffffff99"
  ink-3: "#ffffffa3"
  ink-4: "#000000a3"
  ink-5: "#ffffff52"
  hairline: "#ffffff29"
typography:
  display:
    fontFamily: "\"Neue Haas Grotesk Text Pro 55 Roman\", Arial, sans-serif"
    fontSize: 31.9872px
    fontWeight: 400
    lineHeight: 35.1859px
    letterSpacing: "-0.959616px"
  display-mobile:
    fontFamily: "\"Neue Haas Grotesk Text Pro 55 Roman\", Arial, sans-serif"
    fontSize: 32.8009px
    fontWeight: 400
    lineHeight: 36.081px
    letterSpacing: "-0.984028px"
  subheading:
    fontFamily: "\"Neue Haas Grotesk Text Pro 55 Roman\", Arial, sans-serif"
    fontSize: 11.9952px
    fontWeight: 400
    lineHeight: 15.5938px
    letterSpacing: "-0.359856px"
  body:
    fontFamily: "\"Neue Haas Grotesk Text Pro 55 Roman\", Arial, sans-serif"
    fontSize: 18.6592px
    fontWeight: 400
    lineHeight: 24.257px
    letterSpacing: "-0.559776px"
  button:
    fontFamily: "\"Neue Haas Grotesk Text Pro 55 Roman\", Arial, sans-serif"
    fontSize: 9.3296px
    fontWeight: 400
    lineHeight: 10.2626px
    letterSpacing: "-0.279888px"
  nav:
    fontFamily: "\"Neue Haas Grotesk Text Pro 55 Roman\", Arial, sans-serif"
    fontSize: 10.6624px
    fontWeight: 400
    lineHeight: 15.9936px
rounded:
  xs: 2.33px
  sm: 3.55px
  md: 213.25px
  cta: 3.55px
  pill: 9999px
spacing:
  s1: 2.33px
  s2: 4.26px
  s3: 4.66px
  s4: 5.33px
  s5: 5.44px
  s6: 5.83px
  s7: 7px
  s8: 7.11px
  s9: 7.34px
  s10: 9.33px
components:
  button-primary:
    backgroundColor: "{colors.hairline}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    padding: 9.3296px
    height: 35px
  button-secondary:
    backgroundColor: "{colors.hairline}"
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
    padding: 13.328px 9.3296px
    height: 40px
  nav:
    textColor: "{colors.ink}"
    padding: 10.6624px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 0px 6.22151px 0px 0px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
---

## Overview

Revelatio (page title "Revelatio | Branding, Product Design & Code") is an independent branding, product design and code studio based in Recife, Brazil. The opened page presents it with the headline "Branding, Product Design & Code. One integrated vision." The capture shows a full-black viewport whose centre is a curved, monitor-like panel in which the studio team photograph is rendered out of text characters (an ASCII-style mosaic), with the headline set small in the bottom-left corner and a cookie notice in the bottom-right.

The page continues beyond the hero (12,472px of scroll height in the final measurement) with: Work (case studies such as Medno, Obliant, Nothing to Show, CareCrowd and BeUni), Approach, About and Careers, an EN/PT language toggle, capability groups (Embedded Teams and Partnerships, Technology and Innovation, Digital Products, Brand and Visual System, Brand Strategy), large-number client results, a testimonial carousel, a client logo grid, news items and three contact paths ("Get a quote", "Join our team", "Just say hello"). The voice is editorial and short: "Nothing here happened overnight." and "What happens after the work goes live."

A red "Site of the Day" award tab and the cookie consent banner appear in the capture. They are third-party or consent controls and are not documented as brand UI or tokens.

## Colors

The palette is monochrome: black with white at different alphas.

- canvas #000000 is the page background (area weight 15,964 in the final measurement).
- ink #ffffff is the main text colour (5428 characters). ink-2 #ffffff99 (1335 characters) and ink-3 #ffffffa3 (869) are secondary and tertiary white tints; ink-5 #ffffff52 is the faintest text (16 characters); ink-4 #000000a3 is black text at 64 percent for the few dark-on-light elements.
- primary #ffffff and on-primary #ffffff are the generated roles; the actual buttons are not white-filled but use hairline #ffffff29 (a 16 percent white glass fill) with white text.
- hairline #ffffff29 is also the border colour (5 uses). A fainter #ffffff0a fill (565 area weight) forms subtle panels.

The site's CSS variables name the same values: --color--neutral--300 #00000029, --color--neutral--500 #000000a3, --color--neutral--600 #ffffff0a, --color--neutral--700 #ffffff14, --color--neutral--900 #ffffff52 and --color--neutral--1000 #ffffffa3, with neutral dark black and light white. No chromatic brand colour was measured in the interface.

## Typography

A single family, Neue Haas Grotesk Text Pro 55 Roman (weight 400, fallback Arial, sans-serif), sets all 7735 measured characters. Everything is tightened with negative tracking proportional to size (about -3 percent).

- display: 31.9872px, line-height 35.1859px, letter-spacing -0.959616px (mobile 32.8009px, line-height 36.081px, tracking -0.984028px).
- body: 18.6592px, line-height 24.257px, tracking -0.559776px.
- subheading: 11.9952px, line-height 15.5938px, tracking -0.359856px.
- button: 9.3296px, line-height 10.2626px, tracking -0.279888px.
- nav: 10.6624px, line-height 15.9936px.

Size usage by characters: 9.3296px (2919), 13.328px (1151), 10.6624px (1131), 18.6592px (1042), 31.9872px (908), 63.9744px (241), 11.9952px (173), 23.9904px (158), 159.936px (12). The interface text is therefore very small, with large statements at 32px and 64px and a single 160px display figure.

Neue Haas Grotesk is a commercial face from Monotype; Arial is the declared fallback and Helvetica is the closest alternative.

## Layout

The viewport is 1280px wide in the measurement. The header is two floating glass groups pinned to the top corners: a navigation group at the left (logo, Work, Approach, About, Careers) and a language and contact group at the right (EN / PT, "Get in touch"). Headlines sit at the lower-left of the viewport, imagery is centred, and consent is bottom-right. Spacing tokens measured: 2.33px, 4.26px, 4.66px, 5.33px, 5.44px, 5.83px, 7px, 7.11px, 7.34px, 9.33px. Navigation pads 10.6624px vertically; links pad 6.22151px on the right. The scale is deliberately small, so density comes from tiny controls and generous black space.

## Elevation & Depth

No box shadows were measured. Depth is made by translucent white layers over black (#ffffff0a and #ffffff29), by 1px #ffffff29 borders, and by the ASCII-rendered imagery itself. A #00000099 scrim appears over imagery in a small area. There is no hover data recorded for this site.

## Shapes

Corners are nearly square: 2.3324px on 14 elements, 3.55058px on 4 (the buttons), with one 213.248px element, one 1066.24px element and one 50% element for circular or pill details. The button radius token cta is 3.55px; the xs token is 2.33px. Use the 9999px pill value only for fully round indicators.

## Components

- Primary button ("Get in touch"): #ffffff29 fill, white text, 9.3296px type, 9.3296px padding on all sides, 35px high, 3.55px radius.
- Secondary button ("Let's talk"): #ffffff29 fill, white text, 11.9952px type, padding 13.328px 9.3296px, 40px high, same radius.
- Navigation: floating glass group with white 10.6624px links and a logo mark; language switch "EN / PT" with the inactive language dimmed.
- Footer: black background with white text; links to Privacy Notice, Instagram, Behance and LinkedIn per the opened page.
- Results block: very large figures with tiny captions.
- Not brand UI: the cookie banner (Deny and Accept buttons) and the red award tab.

## Content and imagery

Imagery is treated as texture rather than decoration: the hero portrait is built from characters in the same typeface family, so the image and the typography share one grain. Case studies are named by client (Medno, Obliant, Nothing to Show, CareCrowd, BeUni) with a "See all projects" link. Testimonials come mostly from Brazilian founders and executives, and the news block carries event posts such as Web Summit Rio 2026 and workshops with CIN UFPE. A live time display compares US and Brazil time next to the contact calls to action. The studio describes its own site as a 2026 refresh ("the next Revelatio") with new photography, and the studio works with clients in nine countries, according to the opened page.

## Design System Architecture

No public design system, token package or brand guideline was linked from the page. The de-facto system is exposed through CSS custom properties on the root: --tfg #000, --tfg-60 and --tfg-40 (black at 60 and 40 percent), --tline hsla(0, 0%, 0%, .85), --tt hsla(0, 0%, 0%, .08), a neutral colour ramp (--color--neutral--300 to --1000, dark and light) and --swiper-navigation-size 44px, which indicates a Swiper carousel. The naming and the single-family, single-weight typography indicate a deliberately minimal system built on opacity steps of black and white.

## Do's and Don'ts

Do:
- Keep the canvas pure black and express hierarchy with white opacity (full, 64 percent, 60 percent, 32 percent).
- Set every string in Neue Haas Grotesk Text Pro 55 Roman at weight 400 with negative tracking.
- Use translucent #ffffff29 buttons with a 3.55px radius.
- Keep interface labels very small and headlines declarative.

Don't:
- Do not add colour accents; none were measured in the interface.
- Do not use bold weights; only 400 was measured.
- Do not use shadows or large corner radii on controls.
- Do not reproduce the cookie banner or award tab as site components.

## Responsive Behavior

Measured on the 390px mobile pass: the display size is 32.8009px (desktop 31.9872px) and the size distribution shifts to 12.7559px (3085 characters), 16.4005px (1128), 18.2227px (1074), 14.5782px (983), 32.8009px (426), 29.1564px (308), 36.292px (241) and 51.0237px (158). Mobile text is therefore larger at the small end than desktop (9.33px to 12.76px). Breakpoints and navigation behaviour on mobile were not measured.

## Iteration Guide

1. Start with {colors.canvas} and white {colors.ink}; derive secondary text from {colors.ink-2} and {colors.ink-3}.
2. Build buttons from {colors.hairline} fills with {typography.button} and the {rounded.cta} radius.
3. Use {typography.display} for headlines and {typography.body} for paragraphs.
4. Keep spacing in the 2 to 10px range for controls.
5. Validate with `node web/scripts/verify-designs.mjs --slug=revelatio-studio`.
