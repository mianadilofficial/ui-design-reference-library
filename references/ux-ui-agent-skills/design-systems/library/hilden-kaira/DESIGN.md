---
version: alpha
name: Hildén & Kaira
category: "Product & SaaS"
description: "hildenkaira.fi, the Finnish-domain social media agency Hildén & Kaira: a #181818 black and #eae9e6 off-white page with lime #ecfdad accents, PP Editorial New serif headlines (55.8545px hero, tight -1.11709px tracking) over PP Neue Montreal 9.30909px copy, chrome 3D-rendered logo and icons, and 9.30909px rounded lime and black buttons."
colors:
  canvas: "#181818"
  page-body: "#eae9e6"
  ink: "#ffffff"
  primary: "#ecfdad"
  footer-bg: "#2b2b2b"
  white: "#ffffff"
  accent-turquoise: "#3fae86"
  accent-red: "#ff4545"
typography:
  display:
    fontFamily: "\"PP Editorial New\", \"Times New Roman\", sans-serif"
    fontSize: 55.8545px
    fontWeight: 400
    lineHeight: 50.2691px
    letterSpacing: "-1.11709px"
  display-mobile:
    fontFamily: "\"PP Editorial New\", \"Times New Roman\", sans-serif"
    fontSize: 42.3382px
    fontWeight: 400
    lineHeight: 38.1044px
    letterSpacing: "-0.846764px"
  heading:
    fontFamily: "\"PP Editorial New\", \"Times New Roman\", sans-serif"
    fontSize: 51.2px
    fontWeight: 400
    lineHeight: 46.08px
    letterSpacing: "-1.024px"
  body:
    fontFamily: "\"PP Neue Montreal\", Arial, sans-serif"
    fontSize: 9.30909px
    fontWeight: 500
    lineHeight: 12.1018px
    letterSpacing: "-0.186182px"
  nav:
    fontFamily: "\"PP Neue Montreal\", Arial, sans-serif"
    fontSize: 11.6364px
    fontWeight: 500
    lineHeight: 12.8px
rounded:
  xs: 9.31px
  pill: 9999px
spacing:
  s1: 1.16px
  s2: 1.31px
  s3: 1.4px
  s4: 2.33px
  s5: 3.49px
  s6: 4.65px
  s7: 5.12px
  s8: 6.98px
  s9: 8.15px
  s10: 9.31px
components:
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.ink}"
---

## Overview

Hildén & Kaira (hildenkaira.fi, page title "Hildén & Kaira") is a social media agency that builds organic content, runs social ads and trains client teams; the case studies named on the page are Finlayson, Kierrätyskeskus, Liikku and Autoliitto. The page offers EN and FI language toggles. The desktop pass measured a 1280px-wide, 8822px-tall page with 1850 visible elements. The extraction was re-run once after the first capture showed a cookie notice; the measurements below come from that second run.

The capture is a tall, theatrical single page. It opens on an off-white (#eae9e6) screen dominated by a giant "hildén & kaira" wordmark in chrome-rendered 3D letters with a liquid-metal ampersand, small tilted portrait photographs, a four-link nav (Our approach, Story, Work, Blog) in tiny sans type, then the hero statement "If you can't reach a million people with 0€ ad spend, your branding sucks." with the line "We will 10x your social presence or work for free until it's done.", a black "Our approach" button and a lime "Work with us" button with an arrow icon. A dark band follows with a photograph of a gym and the lime serif line "Content only you can post because it's built around your people.", then star-rated testimonials. Below: a carousel of case-study cards (white cards with a serif headline such as "Finlayson's social media is built to carry the spirit of a bold brand.", big metric tiles in lime and chrome showing views and likes, and a phone-style video preview), an "Our services" section on black with floating chrome 3D icons (a heart, a microphone, a bird) and a lime "Organic content" card, a large serif testimonial quote, a "Does your brand have self-esteem issues?" band over a photograph, and a "Ready to work with us?" contact block with a lime "We'll call you" card and a dark "Contact us" card. It closes with the chrome wordmark again and a footer (Sitemap: Home, Our approach, Our story, Work, Blog, Contact; Podcast and Social link cards; Privacy Policy, Cookies, a design credit).

The voice is blunt and funny; the visual language mixes editorial serif, tiny grotesque UI text, tactile chrome 3D objects and one acid-lime accent.

## Colors

The theme exposes named swatches in its root variables, and the same values are measured on rendered elements:

- **Canvas {colors.canvas}** (#181818, `--_colors---swatch--black`): the largest background (6537 area), used by the dark bands and the black buttons.
- **Page body {colors.page-body}** (#eae9e6, `--swatch--off-white`): the light ground of the hero and case-study sections (1193 area; 302 characters of text).
- **Ink {colors.ink}** (#ffffff): the most-read text colour (7037 characters), because most body copy sits on dark; dark text on light is #181818 (3762 characters). White also fills cards (4383 area).
- **Primary {colors.primary}** (#ecfdad, `--swatch--lime`): the "Work with us" button, metric tiles, service card, the display headings on dark (472 characters of text) and one of the larger fills (1508 area).
- **Footer {colors.footer-bg}** (#2b2b2b, `--swatch--dark-grey`): the footer (1238 area).
- **Turquoise {colors.accent-turquoise}** (#3fae86, 232 area): a minor measured green, also the `--swatch--turquoise`.
- **Red {colors.accent-red}** (#ff4545): declared as `--_colors---swatch--red` in the root variables; not measured as a background area. It is cited from that variable only and appears as a small dot in the capture.
- Translucent overlays #00000033 (2048 area), #0000000a (83) and #64646433 (45).

## Typography

Two families carry nearly everything: **PP Neue Montreal** (9577 characters, weight 500) for UI and copy, and **PP Editorial New** (2374, weight 400) for all headlines. Inter (300 to 700) is also loaded; it is not among the measured families by characters.

- **Display** {typography.display}: PP Editorial New 55.8545px/50.2691px, tracking -1.11709px (the h1); mobile {typography.display-mobile} 42.3382px/38.1044px.
- **Heading** {typography.heading}: PP Editorial New 51.2px/46.08px, tracking -1.024px (h2 and h3, e.g. "Training").
- **Body** {typography.body}: PP Neue Montreal 500, 9.30909px/12.1018px, tracking -0.186182px.
- **Nav** {typography.nav}: PP Neue Montreal 500, 11.6364px/12.8px.

Sizes by characters: 9.30909px (6577), 37.2364px (1754), 11.6364px (1203), 13.9636px (619), 10.4727px (411), 41.8909px (397), 8.72727px (165), 11.7818px (156), 51.2px (122), 55.8545px (113), 74.4727px (38). All tracking is -0.02em of size (9.30909px at -0.186182px; 37.2364px at -0.744727px). The sizes are fractional because the layout scales with the viewport. The footer headings use PP Editorial New at 18.6182px. PP Editorial New and PP Neue Montreal are commercial faces.

## Layout

A single scrolling column of full-width bands, each with its own ground: off-white, black, white cards on off-white, black, off-white, photo, black, chrome. Content widths inside bands are narrow and centred in the hero and carousel; the services band uses a large empty black field with floating 3D icons. Measured paddings: 4.65455px (111), 3.49091px (102), 18.6182px (87), 6.98182px (30), 9.30909px (19). Gaps: 6.98182px (118), 4.65455px (112), 2.32727px (92), 9.30909px (81), 1.16364px (30). The root variables define a spacing scale (for example `--spacing--tablet-96px` at 5em and `--spacing--tablet-48px` at 2.5em) and em-based paragraph sizes such as `--_paragraphs---paragraph-regular--font-size: 1.25em`.

## Elevation & Depth

No box shadow is measured. Depth comes from the rendered chrome 3D objects, overlapping tilted photographs, translucent black layers (#00000033) and card stacking in the carousel. UI elements are flat.

## Shapes

Radii: 9.30909px (60 elements), 1280px (20, full capsules), 50% (15, circles), 4.65455px (1) and 930.909px (1). {rounded.xs} is 9.31px. Buttons and cards use the 9.31px radius; arrow badges and some tags are circles or capsules; photographs in the hero are slightly rotated rectangles.

## Components

No primary CTA role was detected by the extractor (ctaPrimary is null), but the capture shows two buttons: a black "Our approach" button with white text and a lime "Work with us" button with black text and an arrow in a small square. These are described from the capture; their numeric sizes were not measured as a CTA role.

- **Nav links / link**: {colors.ink} text on {colors.canvas}, PP Neue Montreal 11.6364px weight 500, e.g. "Our approach" (white on #181818).
- **Footer**: {colors.footer-bg} fill, white text, PP Editorial New 18.6182px headings.
- **Metric tile**: lime fill with a large sans numeral (for example views and likes counts) and a small label.
- **Cards**: white cards on off-white with serif headlines; dark-grey and lime cards in the contact block.

## Design System Architecture

No public design system or brand guideline is linked: the page links Our story, Our approach, Work, client pages and Privacy Policy/Cookies; there is no press page or guideline page, and no search was run. The de-facto system is a variable stack in the stylesheet: `--_colors---swatch--*` colours (black #181818, off-white #eae9e6, lime #ecfdad, dark-grey #2b2b2b, turquoise #3fae86, red #ff4545, white), `--_theme---border`, `--_paragraphs---paragraph-*` size, line-height and letter-spacing variables (paragraph-xs line-height 1.3em, paragraph-m letter-spacing 0em), `--spacing--*` and `--_layout---grid--gap-*` variables. The footer credits the design to "Dylan".

## Do's and Don'ts

- Do pair PP Editorial New headlines with small PP Neue Montreal copy and tight negative tracking.
- Do keep the palette to black, off-white, white and lime, with turquoise rare.
- Do use chrome 3D objects as illustration.
- Do round buttons and cards at 9.31px.
- Don't add shadows; none are measured.
- Don't use the red outside tiny status accents.
- Don't treat the cookie notice as brand UI.

## Responsive Behavior

Mobile (390px) was measured. The h1 shrinks from 55.8545px to 42.3382px (line-height 38.1044px, tracking -0.846764px); body 9.30909px becomes 9.77036px/12.7015px; the nav CTA "Our approach" measures 14.6555px/16.1211px, white on #181818; the mobile header background is #ecfdad. Layout and breakpoints are not measured.

## Iteration Guide

1. Alternate #eae9e6 and #181818 bands; use lime #ecfdad for emphasis.
2. Headlines in PP Editorial New 51px to 56px with -0.02em tracking.
3. UI text in PP Neue Montreal 500 at 9.3px to 11.6px.
4. Buttons: black or lime, 9.31px radius, with an arrow badge.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=hilden-kaira--<page> --url=<url> --force --no-motion` before adding tokens.
