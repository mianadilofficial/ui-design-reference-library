---
version: alpha
name: Carrd
category: "Design & Creative Tools"
description: "Carrd's carrd.com is a dark one-page site: #24252d charcoal canvas, a purple-to-blue gradient hero, Arial throughout (56px/700 headlines at -1.4px tracking, 16px/28px body in 75% white #ffffffbf), teal #33ada9 6px-radius buttons that hover to #39c1bc, and ghost buttons drawn with a 2px inset white ring."
colors:
  canvas: "#24252d"
  ink: "#ffffffbf"
  primary: "#33ada9"
  on-primary: "#ffffff"
  primary-hover: "#39c1bc"
  ink-faint: "#ffffff60"
  nav-link-text: "#ffffff66"
  hairline: "#ffffff13"
  band-overlay: "#24252d99"
  surface-white: "#ffffff"
typography:
  display:
    fontFamily: Arial, Helvetica, sans-serif
    fontSize: 56px
    fontWeight: 700
    lineHeight: 89.6px
    letterSpacing: "-1.4px"
  display-mobile:
    fontFamily: Arial, Helvetica, sans-serif
    fontSize: 44px
    fontWeight: 700
    lineHeight: 70.4px
    letterSpacing: "-1.1px"
  heading:
    fontFamily: Arial, Helvetica, sans-serif
    fontSize: 34px
    fontWeight: 700
    lineHeight: 42.5px
    letterSpacing: "-0.85px"
  subheading:
    fontFamily: Arial, Helvetica, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 38.4px
    letterSpacing: "-0.6px"
  body:
    fontFamily: Arial, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: Arial, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 52.8px
  footer:
    fontFamily: Arial, Helvetica, sans-serif
    fontSize: 12.8px
    fontWeight: 400
    lineHeight: 12.8px
rounded:
  xs: 6px
  sm: 16px
spacing:
  s1: 16px
  s2: 19.2px
  s3: 20.8px
  s4: 24px
  s5: 32px
  s6: 64px
  s7: 72px
  s8: 96px
  s9: 112px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 24px
    height: 53px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-ghost:
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 24px
    height: 53px
    boxShadow: rgba(255, 255, 255, 0.25) 0px 0px 0px 2px inset
  button-ghost-hover:
    backgroundColor: rgba(255, 255, 255, 0.075)
  nav:
    textColor: "{colors.ink}"
    height: 56px
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.body}"
  feature-panel:
    backgroundColor: "{colors.band-overlay}"
    textColor: "{colors.on-primary}"
    typography: "{typography.heading}"
    padding: 64px 64px 32px
  footer:
    textColor: "{colors.ink-faint}"
    typography: "{typography.footer}"
    padding: 0px 32px
---

## Overview

Carrd builds "Simple, free, fully responsive one-page sites for pretty much anything" (the measured page title), and its own home page is itself a single long column that could have been made in the product. The desktop capture opens on a full-height hero with a diagonal purple-to-blue gradient and a faint hexagon pattern. Centred in it are a line-drawn page-stack logo, the word "Carrd" in white bold Arial, one line of 75%-white copy, a teal "Choose a Starting Point" button, a ghost "Log In" button and, lower down, a small ghost "What is Carrd?" button with a vertical line dropping from it into the next section.

That thin line is the page's connecting device: it runs down the centre between sections, linking the hero to "Build one-page sites for pretty much anything", then to a wide template preview (a mountain-top "JOHN SMITH" profile next to a "Cayce Pollard" card), then to three alternating image/text tiles — "Simple", "Responsive", "Free" — with phone and card mock-ups on gradient backgrounds. "Optional: Go Pro!" lists six Pro features with teal check marks (Custom Domains, More Sites, Forms, Widgets + Embeds, Site Analytics, No Branding), followed by a "Learn More" ghost button, a bordered "Sound good?" box with the teal button again, and a four-link footer.

The voice is casual and compact — "Simple, responsive, and yup — totally free.", "$19 / year (yup, per year)". There is no photography outside the template previews, and no decorative illustration beyond the hexagon texture.

## Colors

- **Canvas `#24252d`** — the dark charcoal body background behind every section after the hero.
- **Band overlay `#24252d99`** — 60% charcoal laid over gradient areas; it is the largest measured background by area, and also fills the text halves of the feature tiles.
- **Ink `#ffffffbf`** — 75% white, the most-read text color (body copy, nav text).
- **White `#ffffff`** — headings and button labels; also the background of the small white preview cards.
- **Faint `#ffffff60`** and **`#ffffff66`** — footer text and header links.
- **Hairline `#ffffff13`** — the only measured border color (about 7% white).
- **Primary `#33ada9`** — the teal call-to-action fill and the Pro feature check marks; hover measured `#39c1bc`.

The purple-to-blue hero gradient is part of a background image and was not measured as CSS values; the extractor recorded pixel fills around `#2a4584` at the top of the hero band.

## Typography

The whole site is set in **Arial** (`Arial, Helvetica, sans-serif`); no web fonts are loaded. Hierarchy comes from size, weight 700 and tight negative tracking on headings, applied at exactly -0.025em at every heading size.

| Role | Size / line-height | Weight | Letter-spacing |
|---|---|---|---|
| Display ("Carrd", section h2) | 56px / 89.6px (h1), 70px (h2) | 700 | -1.4px |
| Heading (feature tiles) | 34px / 42.5px | 700 | -0.85px |
| Subheading (Pro features) | 24px / 38.4px | 700 | -0.6px |
| Body | 16px / 28px | 400 | normal |
| Button | 16px / 52.8px | 700 | normal |
| Footer | 12.8px / 12.8px | 400 | normal |

Only two weights were measured: 400 (body) and 700 (headings, buttons, inline emphasis such as "$19 / year"). Body line-height is generous at 1.75. Inline links inside paragraphs are underlined in the capture ("dozens of templates", "Let's Encrypt", "Mailchimp").

## Layout

Everything is centred on one vertical axis. Text blocks are narrow; the template preview and the feature tiles are wider. The "Simple / Responsive / Free" tiles form a two-column checkerboard — image left/text right, then reversed — and the Pro features use a two-column list with icons. The extractor recorded a maximum of ten card columns on desktop.

Spacing is generous and vertical: measured paddings are led by 64px, then 72px, 24px, 16px, 96px, 112px and 32px; feature panels use 64px 64px 32px. The root variables set `--box-padding-tb` and `--box-padding-lr` to 2.5em. The header is 56px tall with a single visible link and a "Menu" toggle.

## Elevation & Depth

Elevation is minimal. The template previews and phone mock-ups carry a soft `rgba(0, 0, 0, 0.1) 0px 8px 16px 0px` shadow (four elements). Ghost buttons are drawn with inset rings — `rgba(255, 255, 255, 0.25) 0px 0px 0px 2px inset`, and a fainter `rgba(255, 255, 255, 0.125)` variant — instead of borders. Layering comes mainly from translucency: the 60% charcoal overlay lets the gradient show through.

## Shapes

Radii are small and consistent: 6px on buttons and most containers (13 instances), 16px on three larger elements, and split-corner variants (`0px 0px 6px 6px`, `6px 6px 0px 0px`, single-corner 6px) where a tile's corners meet its neighbours. There are no pills or circles in the measured CSS. The "Sound good?" box is a rectangle outlined by a thin light border.

## Components

- **Primary button** — "Choose a Starting Point": `#33ada9`, white Arial 16px/700, 0 24px padding, 53px tall, 6px radius; hover `#39c1bc`.
- **Ghost button** — "Log In", "What is Carrd?", "Learn More": transparent, white text, 2px inset ring at 25% white, 6px radius, same height; hover adds a 7.5% white fill.
- **Feature tile** — a half-width `#24252d99` panel with a 34px/700 heading and two lines of 75%-white copy, paired with a gradient image half showing a template mock-up.
- **Pro feature item** — teal check icon, 24px/700 title, 16px/28px description with underlined links.
- **Connector line** — a thin vertical line centred between sections (capture).
- **Header** — 56px, logo at left, "Menu" toggle at right.
- **Footer** — "Home | Terms | Privacy | Contact" and "© Carrd Inc. All rights reserved." in 12.8px at about 38% white, 0 32px padding.

## Design System Architecture

No public design system or brand guideline exists among the pages opened: the home page's header and footer links (https://carrd.com/) go to Log In, Sign Up, Documentation, Changelog, Go Pro!, Contact, Terms and Privacy, none of which is a brand, press or design-system resource. The shipped CSS is lean and builder-generated: only two root custom properties (`--box-padding-tb` and `--box-padding-lr`, both 2.5em), Arial for all type, and a small repeated set of values — 6px radius, 0.025em negative tracking on headings, 75%/60%/38% white text, one teal accent. Those repetitions are the de-facto system.

## Do's and Don'ts

**Do**
- Keep the canvas dark charcoal `#24252d` and text in white at 100%/75%/38% opacity.
- Use teal `#33ada9` for the one primary action per screen and for check icons.
- Pair each teal button with a ghost button drawn by a 2px 25%-white inset ring.
- Track bold headings at -0.025em and set body at 16px/28px.
- Centre everything and connect sections with a thin vertical line.

**Don't**
- Don't introduce a web font; the site is Arial only.
- Don't use pills or large radii — 6px is the default, 16px the maximum.
- Don't add heavy shadows; only previews carry the 0.1-alpha shadow.
- Don't use teal for large surfaces.
- Don't fill the page with photography; imagery is limited to template previews.

## Responsive Behavior

Measured at 390px: the "Carrd" h1 drops from 56px to 44px (line-height 70.4px, tracking -1.1px), the section h2 drops to 25.6667px, and body text drops from 16px to 14.6667px — a proportional scale-down. The primary button shrinks to 48px tall with 0 22px padding while keeping its teal fill. The header keeps one visible link and the "Menu" toggle, and its height measured 44px. The hero content spans x=40 to x=350, leaving 40px side margins. The stylesheet's breakpoints are `max-width 1680px`, `1280px`, `980px`, `736px`, `480px` and `360px`. How the checkerboard feature tiles reflow at 390px was not measured.

## Iteration Guide

1. Dark charcoal `#24252d` canvas; a gradient hero is optional but should sit under a 60% charcoal overlay further down.
2. Arial only: 56px/700 at -1.4px for the top heading, 34px and 24px for sections, 16px/28px body at 75% white.
3. One teal `#33ada9` button (53px tall, 6px radius, hover `#39c1bc`) with a ghost companion.
4. Centre a narrow text column and use generous 64–112px vertical padding.
5. Use 6px radius everywhere; reserve 16px for large previews.
6. At 390px, scale type to 44px / 25.67px / 14.67px and buttons to 48px tall.
