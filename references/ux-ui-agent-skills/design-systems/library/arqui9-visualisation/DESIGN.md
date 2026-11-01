---
version: alpha
name: Arqui9 Visualisation
category: "Architecture & Interiors"
description: "Arqui9 Visualisation: London 3D architectural visualisation studio; pure black canvas #000000, white text, PPNeueMontreal 400 at 41.6px display and 17.3px body, MartianMono uppercase micro-labels, no radii, full-bleed CGI imagery."
colors:
  canvas: "#000000"
  page-body: "#ffffff"
  ink: "#ffffff"
  primary: "#ffffff"
  surface-gray: "#d9d9d9"
  ink-on-black-50: "#ffffff80"
typography:
  display:
    fontFamily: PPNeueMontreal, Arial, sans-serif
    fontSize: 41.5862px
    fontWeight: 400
    lineHeight: 49.9035px
  display-mobile:
    fontFamily: PPNeueMontreal, Arial, sans-serif
    fontSize: 32.252px
    fontWeight: 400
    lineHeight: 38.7024px
  subheading:
    fontFamily: PPNeueMontreal, Arial, sans-serif
    fontSize: 27.7242px
    fontWeight: 400
    lineHeight: 33.269px
  body:
    fontFamily: PPNeueMontreal, Arial, sans-serif
    fontSize: 17.3276px
    fontWeight: 400
    lineHeight: 24.2586px
  nav:
    fontFamily: PPNeueMontreal, Arial, sans-serif
    fontSize: 13.8621px
    fontWeight: 400
    lineHeight: 16.6345px
rounded:
  xs: 3px
  sm: 10px
spacing:
  s1: 3.47px
  s2: 5.2px
  s3: 5.27px
  s4: 6.93px
  s5: 8.66px
  s6: 8.73px
  s7: 10.4px
  s8: 13.86px
  s9: 17.33px
  s10: 20.79px
components:
  link:
    textColor: "{colors.page-body}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
  nav-link:
    textColor: "{colors.page-body}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-on-black-50}"
---

## Overview

arqui9.com is the home of Arqui9 (legal name Arqui9 Visualisation Ltd), a London-based, award-winning 3D creative agency for architectural visualisation, CGI and film. The measured page is 1280px wide and 13264px tall. The first screen is a full-bleed video-like image of blurred night lights in blue and amber with a thin line-drawn "ARQUI9" wordmark spanning the full width; a header strip shows a small square marker, "LDN" with a live clock ("05:05:25 GMT +0"), the logo and "MENU"; a mono tagline "VISUALISING THIS WORLD AND THE NEXT" sits at left and "SCROLL DOWN" at right beside a small thumbnail. After a long black gap (the capture shows a tall empty black area) the page continues with the statement "We envision and create tomorrow's future now. Providing media solutions and visualisations for the world's leading architectural practices, brands, agencies and startups.", an "OUR SERVICES" label, and large service titles beginning "Architectural Rendering and CGI's" beside tiled image stacks.

The page is deliberately austere: a black stage on which imagery is the only color, a single light-weight sans for everything readable and a small monospace for labels and system information (location, time, links). The structured data on the page lists awards (CGarchitect 3D Awards winner 2020 and 2021, Dezeen Awards 2021 Image of the Year nominee) and a founding year of 2014.

## Colors

The palette is two values. `canvas` ({colors.canvas}, #000000) accounts for nearly all measured background area (weight 16098), and `ink` ({colors.ink}, #ffffff) for nearly all text (2124 characters). A white at 50% (`ink-on-black-50`, #ffffff80, 59 characters) is the quiet text color and is used for the footer. `page-body` is #ffffff: the Webflow body background, which is covered by the black stage; `surface-gray` (#d9d9d9) is measured with no area weight. Black text (#000000, 80 characters) appears only where white elements carry text. The stylesheet declares Swiper's default blue (--swiper-theme-color #007aff), a library default and not a brand color. No saturated brand accent exists in the measured UI: all color comes from photography.

## Typography

Two families are loaded: PPNeueMontreal (400) and MartianMono (400, 500, plus a SemiExpanded cut). PPNeueMontreal carries 1560 measured characters, MartianMono 599 and MartianMono SemiExpanded 104. All sizes are fractional, which indicates a viewport-scaled system (the root also contains `--size--*` clamp() formulas such as clamp(1.75rem, 1.678rem + 0.36vw, 2rem)).

- `display`: PPNeueMontreal 400, 41.5862px, 49.9035px line height (the large "Arqui9 is an award-winning London based 3D Creative Agency" statement).
- `subheading`: 400, 27.7242px, 33.269px line height.
- `body`: 400, 17.3276px, 24.2586px line height.
- `nav`: 400, 13.8621px, 16.6345px line height.

Other measured sizes: 10.3966px (426 characters, the mono micro-labels), 12.1293px, 20.7931px, 31.1897px, 48.5173px and 55.4483px. Headings use the same family and weight as body (`--all-headings--heading-font-family` is set to the primary family and heading letter-spacing to 0em); hierarchy comes from size alone.

## Layout

A 12-column grid defined in custom properties (`--site--column-count`, `--site--gutter`, `--column-width--1` to `--column-width--12`, `--column-margin--1` to `--11`), with container variants (`--container--main`, `--container--full`, `--container--small`, `--container--tiny`). Content blocks start on specific columns: the statement at left, service titles beginning near the center. Spacing values measured: 3.47, 5.2, 5.27, 6.93, 8.66, 8.73, 10.4, 13.86, 17.33 and 20.79px, all multiples of a viewport-scaled unit. Section spacing uses clamp-based tokens such as `--section-space--tiny: clamp(2rem, 1.714rem + 1.43vw, 3rem)`.

## Elevation & Depth

There is no elevation on the page. Shadow values in the CSS are leftovers from Webflow form and slider components (`0 0 0 1px #0000001a, 0 1px 3px #0000001a`, `0 0 3px #3336`, `0 0 3px 1px #3898ec`) and none is visible in the capture. Depth is built from imagery, motion and blur.

## Shapes

Visible elements on the page are square. The `rounded` tokens (`xs` 3px and `sm` 10px) come from the CSS corpus, which lists 10px (2 uses) and 3px (1 use); they are not tied to any component seen in the capture. The stylesheet also defines radius variables, `--radius--main: 1rem`, `--radius--large: 1.5rem` and `--radius--xlarge: 3rem`, which are not measured on a visible component and are not promoted. The wordmark is built from straight line segments with a single angled stroke.

## Components

- `nav` / `nav-link`: transparent over imagery, white 13.8621px text; "MENU" is a text link in mono at the top right.
- `link`: white text, underlined in the capture ("SCROLL DOWN").
- Statement block: white PPNeueMontreal 41.5862px.
- Service row: a large title at right with a tiled image stack at left, collaged from square crops.
- `footer`: black background with {colors.ink-on-black-50} text.

No button was detected on the home page: the primary roles are links and text. The generated tokens correspondingly have no `button-primary`.

## Design System Architecture

No public design-system or brand-guidelines page was found; the home page is a Webflow site (assets served from cdn.prod.website-files.com) and its design system lives in custom properties: a 12-column grid, `--size--*` fluid spacing, `--section-space--*`, type scales (`--h1` to `--h6`, `--display-large`, `--display-small`, `--text-large`, `--text-main`, `--text-small`, `--text-tiny`) each with font-family, weight and letter-spacing variables, `--radius--main/large/xlarge` and a letter-spacing set (`--letter-spacing--0em`, `--letter-spacing--0-02em: -.02em`). The page has structured data of type Organization and ProfessionalService. Source: [arqui9.com](https://www.arqui9.com/).

## Content and Imagery

The imagery is photoreal architectural CGI: high-rise towers lit at dusk, tiled stacks of square and rectangular crops that overlap like a contact sheet, and a moving night-light backdrop in the hero. Text is sparse and declarative. The tagline "VISUALISING THIS WORLD AND THE NEXT" is set in mono capitals, the statement paragraph in sentence-case sans, and service names ("Architectural Rendering and CGI's") are given large size. The header's live London clock and "GMT +0" label are a signature detail: system information is treated as a decorative typographic element rather than hidden.

## Interaction and Motion

The stylesheet hides header text, words, characters, backgrounds, buttons and subtitles (`[data-animation=header-text]`, `header-word`, `header-bg`, `header-button` and others) with `visibility: hidden` until a page-load transition completes, then reveals them. A `.transition_wrap` element is displayed during the intro and hidden afterwards. The capture shows a large empty black area below the hero; whether these hidden elements are the cause was not tested. Hover states were not recorded on this page (the hover list is empty), so link and menu hover behavior is not measured.

## Do's and Don'ts

- Do keep the page black with white text and let imagery supply all color.
- Do use one sans at regular weight for headings and body, and differentiate by size.
- Do set system information and labels in small uppercase MartianMono.
- Do keep corners square on this page.
- Don't introduce an accent color, button fills or shadows.
- Don't use the Swiper default blue.
- Don't leave the tall empty black gap in a static reproduction; its cause was not determined.

## Responsive Behavior

Measured at 390px: the h1 and h2 statement drops from 41.5862px to 32.252px (line height 38.7024px), and body paragraphs measure 18.126px on a 25.3764px line height in white. The mobile statement wraps to four short lines. The extractor recorded no mobile navigation or column layout, so those are not measured.

## Iteration Guide

1. Black ground, white text, white-at-50% for quiet text.
2. PPNeueMontreal 400 at 41.5862px/49.9035px for statements; 17.3276px/24.2586px for body.
3. MartianMono uppercase at about 10.4px for labels and the live clock.
4. Square corners, no shadows, no fills on controls.
5. Run `node web/scripts/verify-designs.mjs --slug=arqui9-visualisation` after edits.
