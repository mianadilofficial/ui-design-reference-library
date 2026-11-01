---
version: alpha
name: Studio X
category: "Architecture & Interiors"
description: "Commercial interior design studio (Hong Kong, Singapore, Macao): warm cream #f2f0e6 canvas, #1d1d1d ink, orange #ff4101 pill buttons, light-weight Serrif Compressed display at 67.4423px with Saans 15.8606px text, frosted pill dock with inset glass shadows."
colors:
  canvas: "#f2f0e6"
  ink: "#1d1d1d"
  primary: "#ff4101"
  ink-on-dark: "#f2f0e6"
  surface-cream: "#eae7db"
  ink-secondary: "#282828b3"
  ink-light: "#ffffffb3"
  hairline: "#ffffff1a"
typography:
  display:
    fontFamily: "\"Serrif Compressed\", \"Times New Roman\", sans-serif"
    fontSize: 67.4423px
    fontWeight: 300
    lineHeight: 67.4423px
    letterSpacing: "-1.34885px"
  display-mobile:
    fontFamily: "\"Serrif Compressed\", \"Times New Roman\", sans-serif"
    fontSize: 42.001px
    fontWeight: 300
    lineHeight: 42.001px
    letterSpacing: "-0.84002px"
  heading:
    fontFamily: Saans, Arial, sans-serif
    fontSize: 15.8606px
    fontWeight: 500
    lineHeight: 19.0327px
  body:
    fontFamily: Saans, Arial, sans-serif
    fontSize: 15.8606px
    fontWeight: 400
    lineHeight: 20.6187px
rounded:
  xs: 7.93px
  pill: 9999px
spacing:
  s1: 2.77px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 12px
  s6: 16px
  s7: 19.72px
  s8: 20px
  s9: 29.72px
  s10: 31.72px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.display}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
---

## Overview

Studio X (title "Studio X — Commercial Interior Design | HK & Singapore", language en) is a commercial interior design studio with offices in Hong Kong, Singapore and Macao, according to the opened page. The home page is long (measured scrollHeight 8021 at 1280px). It opens on a dark full-bleed photograph of a marble-topped table and timber chair over hexagon tile, with the centered statement "We design high-performance commercial interiors for retail, workplace, and food & beverage brands across Asia-Pacific." in a condensed serif, with "retail", "workplace" and "food & beverage" in italic and underlined as links to sector pages. A floating pill dock at the bottom holds the X logo mark, a Menu control and an orange "Start a Project" button.

Below the hero the page turns warm cream: an "(About)" eyebrow, a large condensed-serif statement ("We deliver physical environments that shape customer experience and directly improve the performance of our clients' businesses."), a tall arched-corridor photograph beside four paragraphs, and an orange "Learn more about us" pill with a round arrow. A dark "(Featured Projects)" band follows, setting project names in large serif with market codes in superscript: Oval (SG), ThreeSixty Group (HK), Tea Chateau (HK), Lee Yuen Housewares (HK), Silvercrest (SG), Private Capital (HK), Mian Cart Noodle Bar (MO). The opened page continues with a nine-stage process (Pre-Concept to Post-Completion Review), fifteen client logos, six testimonials, three insight posts, a contact block and a footer with three offices. The voice is professional and commercial: results, performance and clients' businesses rather than aesthetics.

## Colors

- **Canvas #f2f0e6**: warm cream, the largest background area (8168).
- **surface-cream #eae7db**: a darker cream for alternating sections (2261).
- **Ink #1d1d1d**: primary text (2426 characters weighted) and the dark band background (2104); #262626 (1075) is a second dark band fill.
- **ink-secondary #282828b3**: ink at 70% opacity, used for body and secondary text (1769 characters).
- **ink-on-dark #f2f0e6**: the cream used as text on photographs and dark bands (532 characters).
- **Primary #ff4101**: the orange used on the "Start a Project" and "Learn more about us" pills (background area 38, and a measured border color). The extractor assigned primary to the cream, but the orange is the action color seen on the capture and is measured.
- **ink-light #ffffffb3** and **hairline #ffffff1a**: white at 70% and 10%, for small light text and borders on dark photography.

A translucent black #00000033 (area 1229) is the scrim over the hero photograph; it is a layer, not a token.

## Typography

Two families: Serrif Compressed (weight 300, with a 300 italic) for display, and Saans (400 and 500) for text.

- **display**: Serrif Compressed 67.4423px / 67.4423px, weight 300, tracking -1.34885px (the h1 and the project names).
- **display-mobile**: 42.001px, tracking -0.84002px (390px pass).
- **heading**: Saans 15.8606px / 19.0327px, weight 500.
- **body**: Saans 15.8606px / 20.6187px, weight 400.

Other measured sizes: 52.5577px (tracking -1.05115px, the About statement), 23.4423px and 13.8606px. Weights: 400 (2962 characters), 500 (1086), 300 (707). Display line height equals the font size, giving tight stacked lines. The stylesheet declares fluid type through clamp formulas between `--site--viewport-min` and `--site--viewport-max` (for h1, h2, h3 and spacing), and per-family trim variables (`--_typography---font--primary-trim-top` .4em, `--primary-trim-bottom` .34em). Both fonts are commercial; licenses are not stated on the pages opened.

## Layout

A single centered column for the hero statement, then two-column editorial rows: a large image at left (about 36% of the width in the capture) and a narrow text column of about 290px at the right of center, with a small second image dropped lower right. Eyebrows in parentheses, "(About)" and "(Featured Projects)", mark each section. Gaps measured: 4px (48 uses), 39.4423px, 31.7211px, 77.7211px, 8px, 19.7211px; paddings: 6px, 31.7211px, 16px, 20px. Section bands alternate cream, darker cream and near-black.

## Elevation & Depth

Depth is made with inset glass shadows on the floating dock: `rgba(179, 179, 179, 0.5) 3px 4.5px 1.5px -3px inset`, `rgba(179, 179, 179, 0.3) -3px -4.5px 1.5px -3px inset` and `rgba(242, 242, 242, 0.3) 0px 0px 33px 0px inset`, each on two elements. This gives the pill dock a frosted, beveled look over the photograph. The rest of the page has no drop shadows.

## Shapes

Radii measured: 1280px (50 elements, a full pill) and 7.93029px (1). Buttons, the dock and chips are full pills; the round arrow button is a circle; photographs are square-cornered. The root declares `--radius--large: 1.5rem`, not seen in the measured values. Tokens: `xs: 7.93px`, `pill: 9999px`.

## Components

- **Dock**: a frosted pill centered at the bottom with the X mark, "Menu" with a two-line icon and the "Start a Project" button.
- **Primary pill button** (#ff4101): "Start a Project", "Learn more about us", followed by a separate round orange arrow button. Its text color was not extracted.
- **Sector links**: italic, underlined words inside the hero headline.
- **Project name list**: display serif names with superscript market codes; hover measured on the sector link "retail": opacity goes from 1 to 0.2296 (color unchanged).
- **Process list**: nine stages, each with a "Learn more" link and a modal.
- **Client logo wall**, **testimonial slider** with a "Next" control, **insight cards** and **footer** with offices.
- **Form**: Send an enquiry and Book a call links; success and error messages exist.

## Design System Architecture

No public design system or brand guideline exists: the opened page (https://www.thisisstudiox.com) names none; the only "guideline" mentions describe client deliverables (the Guideline Package service). The site is built in Webflow, from variable names such as `--_theme---background`, `--_button-style---background-hover` and `--_typography---font-size--h1`. The de-facto system has 123 root variables: theme, button-style and text-style variables, fluid clamp-based type and spacing steps (`--_spacing---space--2rem`, `--_spacing---space--1-25rem`), font family slots including a Chinese fallback (`--_typography---font--chinese-family` Noto Sans), `--focus--width` .125rem, `--radius--large` 1.5rem and animation timings (`--animation-default-quarter` .15s, `--animation-default-half` .3s, `--animation-default-double` 1.2s, all cubic-bezier(.65, 0, 0, 1)). Source: https://www.thisisstudiox.com (measured rootVars).

## Do's and Don'ts

Do:
- Use warm cream #f2f0e6 and ink #1d1d1d, with orange #ff4101 reserved for the project-start actions.
- Set headlines in light-weight Serrif Compressed with tight leading and italic underlined sector words.
- Use pill shapes for every control.
- Mark sections with parenthesized eyebrows.

Don't:
- Use orange for decoration or text on cream.
- Add heavy drop shadows; only the inset glass shadows on the dock are measured.
- Use the serif for body text; Saans 15.8606px does that job.

## Responsive Behavior

In the 390px pass the h1 is 42.001px with -0.84002px tracking; sizes by characters are 15.0627px (3908), 42.001px (494), 33.499px (213) and 20.251px (108). Layout reflow, dock and nav behavior on mobile were not measured.

## Iteration Guide

1. Set canvas #f2f0e6, ink #1d1d1d and the orange #ff4101 for calls to action.
2. Register Serrif Compressed (300 and 300 italic) and Saans (400, 500).
3. Build the hero at 67.4423px/67.4423px with -1.34885px tracking.
4. Make all controls pills (full radius) and add the dock's inset shadows.
5. Hover on sector links: opacity to about 0.23.
6. Re-run `node web/scripts/verify-designs.mjs --slug=studio-x`.

## Content Notes for Reproduction

The nine process stages are 01 Pre-Concept, 02 Concept Design, 03 Schematic Design, 04 Detail Design, 05 Tender Documentation, 06 Tender Management, 07 Construction Support, 08 Guideline Package and 09 Post-Completion Review. Clients named on the page include Vita Green, Shangri-La, Piaget, Lululemon, L'Occitane, K11, Ikea, Huawei and ASUS. The insights list dates are August 29, 2026, August 10, 2026 and March 18, 2026. Offices are Hong Kong (Wong Chuk Hang), Singapore (Pasir Panjang Road) and Macao (Avenida Comercial de Macau).
