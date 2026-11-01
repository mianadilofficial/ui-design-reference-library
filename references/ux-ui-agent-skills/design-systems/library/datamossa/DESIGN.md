---
version: alpha
name: DataMossa Co., Ltd
category: "Thai Brands"
description: "DataMossa (datamossa.co.th), a Thailand technology consultancy site in dark mode: #1a1a1a and #000000 alternating sections, Inter 400-700 text in light gray #b0b0b0, a purple #881a8a hero gradient and buttons with 5px radius, 10px-radius bordered cards with a soft 0 2px 10px shadow, and a 48px/57.6px bold headline."
colors:
  canvas: "#1a1a1a"
  page-largest: "#000000"
  ink: "#b0b0b0"
  primary: "#881a8a"
  on-primary: "#e0e0e0"
  primary-hover: "#6a1469"
  primary-light: "#a020a0"
  ink-strong: "#ffffff"
  ink-heading: "#e0e0e0"
  ink-soft: "#ffffff99"
  ink-medium: "#ffffffcc"
  hairline: "#333333"
typography:
  display:
    fontFamily: Inter, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif
    fontSize: 48px
    fontWeight: 700
    lineHeight: 57.6px
  display-mobile:
    fontFamily: Inter, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif
    fontSize: 28px
    fontWeight: 700
    lineHeight: 33.6px
  heading:
    fontFamily: Inter, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif
    fontSize: 40px
    fontWeight: 700
    lineHeight: 64px
  subheading:
    fontFamily: Inter, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 38.4px
  body:
    fontFamily: Inter, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif
    fontSize: 17.6px
    fontWeight: 400
    lineHeight: 31.68px
  button:
    fontFamily: Inter, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 25.6px
  link:
    fontFamily: Inter, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 25.6px
  input:
    fontFamily: Inter, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif
    fontSize: 16px
    fontWeight: 400
rounded:
  xs: 5px
  sm: 8px
  md: 10px
  pill: 9999px
spacing:
  s1: 8px
  s2: 12px
  s3: 14px
  s4: 16px
  s5: 20px
  s6: 24px
  s7: 32px
  s8: 48px
  s9: 80px
  s10: 120px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 24px
    height: 50px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
    padding: 12px 24px
    height: 54px
  button-outlined:
    textColor: "{colors.ink-strong}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
    border: "2px solid #ffffff"
    padding: 12px 24px
    height: 54px
  nav:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.primary}"
    padding: 16px 0px
    height: 82px
    boxShadow: rgba(0, 0, 0, 0.5) 0px 2px 10px 0px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.subheading}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.on-primary}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 12px
    height: 48px
    border: "2px solid #333333"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.md}"
    padding: 32px
    borderColor: "{colors.hairline}"
    boxShadow: rgba(0, 0, 0, 0.5) 0px 2px 10px 0px
    transform: matrix(1, 0, 0, 1, 0, 0)
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-strong}"
    padding: 48px 0px 16px
---

## Overview

DataMossa Co., Ltd (title "DataMossa Co., Ltd - Technology Consultancy & Solutions") is a Bangkok-based technology consultancy, and its site at https://www.datamossa.co.th/ is a single page of 4,503px (at 1280px wide) in a dark theme. The hero is a band of purple (#881a8a) fading to black with the white bold headline "Technology Consultancy & Solutions for Thailand", the sub-line "Expert professional guidance delivering technology solutions tailored to your requirements", and two buttons: a filled purple "Explore Solutions" and a white-outlined "Get Free Quote".

The sections follow the page text: "Our Solutions" ("Comprehensive technology services to drive your business forward") with six cards (ICT Solutions, Data Centre Services, Software Development, Power Generation, BEV/EV Solutions, Technology Projects, each with an emoji icon, a short description and a purple "Learn More →" link); "About DataMossa Co., Ltd" (three paragraphs stating that the company is independently owned and "provides the required solution without tying you into prescribed products or technologies"); "Why Choose DataMossa Co., Ltd?" with eight points (Independent, Flexible, Enterprise Expertise, Scalable, Local Presence, Expert Team, 24/7 Monitoring, Transparent Pricing); and "Get In Touch" with a Bangkok address, a phone number and an inquiry form, then a black footer with a tagline, Quick Links and the line "Version 1.0.0".

In the capture the navigation bar shows the logo tile with the wordmark "DataMossa.co.th" (DataMossa in purple, ".co.th" in white), links Home, Solutions, About Us, Contact, a purple "Get Quote" button, a bordered "TH" language button and a round moon-icon button. A purple round chat button floats at the right edge; it is a widget and is not documented as brand UI. The voice is plain, formal English with practical nouns.

Sections alternate between #000000 (weight 3579) and #1a1a1a (weight 3420), with purple (#881a8a, weight 49) reserved for actions and the hero.

## Colors

| Token | Value | Evidence |
|---|---|---|
| `canvas` | #1a1a1a | Body background (area weight 3420) |
| `page-largest` | #000000 | Alternate section, nav and footer background (weight 3579) |
| `ink` | #b0b0b0 | Body text color (2,164 characters) |
| `primary` | #881a8a | CTA fill, hero gradient, nav wordmark, link color (117 characters); `--primary-color` |
| `on-primary` | #e0e0e0 | Button text (426 characters); h2 and h3 color |
| `primary-hover` | #6a1469 | Hover fill of the button; `--primary-dark` |
| `primary-light` | #a020a0 | Root variable `--primary-light`; its on-screen use was not measured |
| `ink-strong` | #ffffff | h1 and outlined button text (338 characters) |
| `ink-heading` | #e0e0e0 | Section and card headings |
| `ink-soft` | #ffffff99 | White at 60% (62 characters) |
| `ink-medium` | #ffffffcc | White at 80% (50 characters) |
| `hairline` | #333333 | Card and input border (18 elements) |

The hover record shows the "Get Quote" button changing from a #881a8a fill with #e0e0e0 text to a #6a1469 fill with #881a8a text, a #881a8a border and a `rgba(0, 0, 0, 0.7) 0px 4px 20px 0px` shadow. The root variables describe a light theme as well (`--bg-white: #ffffff`, `--bg-light: #f5f5f5`, `--navbar-bg: #ffffff`, `--text-dark: #1a1a1a`, `--border-color: #e0e0e0`) alongside `--success-color: #28a745` and `--error-color: #dc3545`; the measured pass is dark, and how the themes are switched was not measured. The stylesheet also contains #4caf50, #f44336 and alert tints, not measured on screen.

## Typography

One family: Inter with system fallbacks (3,143 characters; Arial on 14). Weights loaded: 400, 500, 600 and 700.

| Token | Size / line-height | Weight | Use |
|---|---|---|---|
| `display` | 48px / 57.6px | 700 | Hero h1 (1160px wide) |
| `display-mobile` | 28px / 33.6px | 700 | Mobile h1 |
| `heading` | 40px / 64px | 700 | Section titles (h2, "Our Solutions") |
| `subheading` | 24px / 38.4px | 700 | Card titles (h3), wordmark |
| `body` | 17.6px / 31.68px | 400 | Paragraphs (900px wide) |
| `button` | 16px / 25.6px | 500 | "Get Quote" |
| `link` | 16px / 25.6px | 600 | "Explore Solutions", "Get Free Quote" |
| `input` | 16px | 400 | Form fields |

Sizes by character count: 16px (1,732), 17.6px (915), 20px (215), 24px (119), 40px (79), 48px (77), 12px (12), 32px (6) and 14.4px (2). Weights: 400 (2,578), 700 (382), 600 (160), 500 (37). Body line-height is 1.8 (31.68px on 17.6px) and the section headline line-height is 1.6 (64px on 40px), so the page reads loose and airy; headlines are always bold.

## Layout

The nav is a black bar 82px tall and 1280px wide with 16px vertical padding and a `0 2px 10px` shadow. Content is a centered column (the h1 is 1,160px wide); the About text is a narrower 900px column; solution cards run three across in two rows; the "Why Choose" cards run four across. Measured gaps: 32px (10 elements), 24px (8), 12px (2), 16px (2), 48px (2), 8px (2). Paddings: 32px (23), 12px (13), 20px (7), 80px (4), 24px (3), 14px (2), 16px (1), 120px (1), 48px (1). The 80px and 120px paddings are the section insets. Density is moderate with generous section spacing.

## Elevation & Depth

Cards and the nav share one shadow, `rgba(0, 0, 0, 0.5) 0px 2px 10px 0px`, measured on 11 elements; the hover state adds `rgba(0, 0, 0, 0.7) 0px 4px 20px 0px` (1 element). The stylesheet's variable `--shadow` is `0 2px 10px rgba(0, 0, 0, 0.1)` and `--shadow-hover` is `0 4px 20px rgba(0, 0, 0, 0.15)` (the light-theme values); `0 4px 12px rgba(0, 0, 0, 0.3)` is also declared. Depth in the capture is also tonal: #1a1a1a cards on #000000 sections with a #333333 hairline border, and the purple-to-black hero gradient.

## Shapes

Measured radii: 10px (11 elements, cards), 5px (10, buttons and inputs), 8px (2) and 50% (2, round buttons such as the theme toggle). Buttons and inputs use 5px; cards use 10px; the logo tile in the capture is a rounded square. The stylesheet declares only 5px, 8px and 10px radii.

## Components

**Primary button.** "Get Quote": #881a8a fill, #e0e0e0 Inter 16px/500 text, padding 12px 24px, 50px tall, 125px wide, 5px radius; hover #6a1469 with a stronger shadow.

**Solid hero button.** "Explore Solutions": #881a8a fill, white 16px/600 text, padding 12px 24px, 54px tall, 182px wide, 5px radius.

**Outlined button.** "Get Free Quote": transparent, white 16px/600 text, `2px solid #ffffff` border, 5px radius, padding 12px 24px, 54px tall, 168px wide.

**Navigation.** Black bar, 82px tall; the wordmark link is #881a8a Inter 24px/700 (258px wide); links are white in the capture; also the "TH" language button and the round theme toggle.

**Card.** #1a1a1a fill, `#333333` border, 10px radius, 32px padding, `0 2px 10px` shadow; an emoji icon, a bold white 24px title, a description in #b0b0b0, and a purple "Learn More →" link.

**Input.** 601px wide, 48px tall, #1a1a1a fill, `2px solid #333333` border, 5px radius, #e0e0e0 16px text, padding 12px.

**Footer.** #000000, padding 48px 0 16px, 358px tall, white text with the tagline "Expert technology consultancy and solutions for your business".

## Design System Architecture

No public design system, brand guideline or press kit is linked from the home page (read via WebFetch). The system is a small hand-written stylesheet at https://www.datamossa.co.th/ driven by named root variables: `--primary-color: #881a8a`, `--primary-light: #a020a0`, `--primary-dark: #6a1469`, `--secondary-color: #000000`, `--bg-white`, `--bg-light`, `--bg-section: #f8f9fa`, `--card-bg: #ffffff`, `--navbar-bg: #ffffff`, `--footer-bg: #1a1a1a`, `--text-dark: #1a1a1a`, `--text-light: #666666`, `--border-color: #e0e0e0`, `--success-color`, `--error-color`, `--shadow` and `--shadow-hover`.

The font is Inter only, declared in four weights. The page text shows "Version 1.0.0" and a "© 2024-2025" notice. The variables name a light palette while the measured render is dark; no theme mechanism was recorded.

## Do's and Don'ts

**Do**
- Use #1a1a1a and #000000 as alternating surfaces with #b0b0b0 body text and white headlines.
- Reserve purple (#881a8a) for actions, the hero gradient and links; darken to #6a1469 on hover.
- Set headlines in Inter 700 with open line-height and body in 400 at 17.6px/31.68px.
- Give cards a 10px radius, a #333333 border and the `0 2px 10px` shadow.
- Keep buttons at a 5px radius, 50-54px tall.

**Don't**
- Don't add a second accent; the stylesheet's greens and reds are status colors only.
- Don't use pill buttons; the measured button radius is 5px.
- Don't document the floating chat button as brand UI.
- Don't use the light-theme variable values (#ffffff navbar) on the dark render.

## Responsive Behavior

The extractor re-loaded the page at 390px. Measured: the h1 is 28px / 33.6px (350px wide, 67px tall; desktop 48px / 57.6px, 1160px by 58px); the h2 is 32px / 51.2px (350px by 51px; desktop 40px / 64px); body text stays 17.6px / 31.68px at 350px by 253px (900px by 95px on desktop); the CTA is "Explore Solutions" at 16px/600, 50px tall and 182px wide; the nav is 390px wide and 67px tall with 19.2px/700 text (24px on desktop). The nav text still lists Home, Solutions, About Us, Contact, Get Quote and TH. Mobile character counts by size: 16px (1,732), 17.6px (1,005), 20px (125), 24px (104), 32px (61), 28px (47), 48px (30), 40px (24). Breakpoints, media queries and the card grid at 390px are not measured.

## Iteration Guide

1. Start with #1a1a1a and #000000 sections, #b0b0b0 text, #881a8a actions, Inter.
2. Build the hero (purple to black gradient, 48px/57.6px bold headline, solid and outlined buttons), then the nav bar.
3. Build the six solution cards with the 10px radius, #333333 border and shadow; then the About column and the Why Choose grid.
4. Add the contact form with 5px-radius inputs and the black footer.
5. Run `node web/scripts/verify-designs.mjs --slug=datamossa` after any token edit.
