---
version: alpha
name: Trawelt
category: "Architecture & Interiors"
description: "Trawelt, a Salesforce consultancy for travel and hospitality: black canvas with white text, mint #d3ffc3 navigation and CTA, forest green #2d9b4c ticket cards and footer, Labour Grotesk 400 with Reckless Neue 250 serif accents and 10px/15px radii."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#d3ffc3"
  on-primary: "#000000"
  surface-sage: "#e4e9dc"
  surface-sand: "#e7d5ba"
  green: "#2d9b4c"
  sage-light: "#eaefde"
  surface-card: "#efefe7"
typography:
  display:
    fontFamily: "\"Labour Grotesk\", sans-serif"
    fontSize: 28.928px
    fontWeight: 400
    lineHeight: 34.7136px
  display-mobile:
    fontFamily: "\"Labour Grotesk\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
  heading:
    fontFamily: "\"Reckless Neue\", serif"
    fontSize: 40.928px
    fontWeight: 250
    lineHeight: 45.0208px
    letterSpacing: "-0.40928px"
  button:
    fontFamily: "\"Labour Grotesk\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
  link:
    fontFamily: "\"Labour Grotesk\", sans-serif"
    fontSize: 22.304px
    fontWeight: 400
    lineHeight: 24.5344px
    letterSpacing: "-0.22304px"
rounded:
  xs: 10.08px
  sm: 15.04px
  pill: 9999px
spacing:
  s1: 4.96px
  s2: 10.08px
  s3: 15.04px
  s4: 16.76px
  s5: 17.76px
  s6: 25.47px
  s7: 30.43px
  s8: 35.55px
  s9: 45.47px
  s10: 55.55px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 25.472px
    height: 72px
  button-secondary:
    backgroundColor: "{colors.green}"
    textColor: "{colors.sage-light}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 10.08px
    height: 52px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 0px 25.472px
  nav-link:
    backgroundColor: "{colors.green}"
    textColor: "{colors.sage-light}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 10.08px
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.sm}"
  footer:
    backgroundColor: "{colors.green}"
    textColor: "{colors.canvas}"
---

## Overview

Trawelt presents itself as "a boutique transformation consultancy specializing in Salesforce solutions and consulting for the travel and hospitality industry", and the home page is built like a boarding pass. The page opens on solid black with a floating mint-green header made of three rounded pieces: the black Trawelt wordmark, a circular up-arrow button and a long bar holding Services, About, Projects, AgentForce, Blog and a separate "Get in touch" tab. Under it, a white sentence states the offer: "Get the most out of your travel and hospitality business with tailored solutions and specialized consulting that give measurable results."

The first story beat is an animated slot-style card: "Upgrade your" / a rotating business type (Resort chain, Tour operator, Boutique retreat, Heritage…) with a photograph of a lounge interior / "to first class." with a small green "Get in Touch" button. A second beat, "One way ticket to travel + hosting success", is followed by a forest-green ticket graphic with perforation, a postage stamp and "Book a free consultation. trawelt.com". Client logos (Boket, Carr Golf) lead into a pale sand section opening with "Services" and an underlined "Explore our services" link. The measured page is 8,145px tall with 480 visible elements, and the footer is a 898px green block whose first line reads "Your journey to business innovation begi…". The voice is travel-metaphor wordplay: first class, one-way ticket, boarding.

## Colors

`{colors.canvas}` is pure black (#000000, 5,460 area units) and `{colors.ink}` is white (1,180 characters), so most text is white on black. The page then shifts to light surfaces: `{colors.surface-sage}` (#e4e9dc, the largest painted area at 6,332 units) and `{colors.surface-sand}` (#e7d5ba, 2,473 units), with cards in `{colors.surface-card}` (#efefe7). Black text (#000000, 2,444 characters) sits on these.

The action colours are a mint, `{colors.primary}` (#d3ffc3), filling the header and the "Get in touch" CTA with black `{colors.on-primary}` text, and a forest green, `{colors.green}` (#2d9b4c), filling the secondary "Get in Touch" button and the footer, with `{colors.sage-light}` (#eaefde) text on the button. The root variables list the same hues under the names `--mint-green`, `--green`, `--light-gray-green`, `--ultra-light-brown`, `--almost-white` and `--very-light-gray-green`, plus unused accents (brown #a96d35, yellow #e0c84b, blue #4987ff, purple #d08ce8, olive #acbc85) that are not measured on the page itself.

## Typography

Two faces: Labour Grotesk (a grotesque sans, weight 400) for nearly everything (3,561 characters) and Reckless Neue (a serif, weight 250) for expressive headings (111 characters). At the 1280px measurement width the h1 and body paragraphs are 28.928px on a 34.7136px line (`{typography.display}`), the h2 in Reckless Neue is 40.928px on 45.0208px with -0.40928px tracking (`{typography.heading}`), links such as "Explore our services" are 22.304px with -0.22304px tracking (`{typography.link}`) and buttons are 16px on a 16px line (`{typography.button}`). The footer statement is larger still, 49.696px on 59.6352px.

The fractional pixel sizes are computed values of fluid `clamp()` variables: the root declares `--heading-1: clamp(2rem, 2.22vw + 1.33rem, 4rem)`, `--heading-2: clamp(2rem, 1.11vw + 1.67rem, 3rem)`, `--paragraph-l: clamp(1.25rem, 0.28vw + 1.17rem, 1.5rem)`, `--link-s` and similar. Both fonts are loaded as web fonts; no substitute was measured.

## Layout

The layout is full-bleed black and pale sections with centred, narrow text blocks and generous vertical gaps. The black header region is 832px tall in the measurement, and the first card stack is centred. Spacing follows a fluid scale named `--s-5` through `--s-220` with clamp values (for example `--s-20: clamp(0.94rem, 0.35vw + 0.83rem, 1.25rem)`), and the header height is `--navigation-height: 72px`.

Measured gaps are 25.472px (17 uses), 15.04px (14) and 35.552px (4); paddings include 106.667px (12 uses) for section insets, 4.96px (10) and 25.472px (8). Declared breakpoints are 480px, 640px, 800px, 960px, 1140px, 1280px, 1440px, 1920px and 3840px.

## Elevation & Depth

None. No box shadows were measured (the list is empty), and the only border colour recorded is #000000 on two elements. Depth comes from layering colour planes (black, sage, sand, green) and from the stacked-card device in the hero, where pale cards sit on a black field. The ticket graphic uses a dashed perforation and a dotted stamp outline instead of a shadow. The root declares `--wp--preset--shadow--outlined` and `--wp--preset--shadow--deep` values from the WordPress block editor, but they were not measured on any rendered element.

## Shapes

Two radii are measured. 15.04px (`{rounded.sm}`, 7 elements) is used on the large mint CTA, the header pieces and cards, and 10.08px (`{rounded.xs}`, 4 elements) on the smaller green button and the nav tab. A 50% radius appears on 2 elements (the circular arrow button and icons). The header's radius is bound to `--navigation-border-radius: var(--s-15)`, which is 0.94rem (15.04px at a 16px root). Everything else is square-edged photography.

## Components

**Primary CTA.** `{colors.primary}` fill, black label, Labour Grotesk 16px, 72px tall with 25.472px side padding and a 15.04px radius ("Get in touch" in the header).

**Secondary button.** `{colors.green}` fill, `{colors.sage-light}` label, 52px tall, 10.08px padding, 10.08px radius ("Get in Touch" inside the slot card and on the footer).

**Header.** Mint-green rounded pieces over black, 72px high by the root variable; links are 16px Labour Grotesk.

**Cards.** `{colors.surface-card}` fill, 15.04px radius, black text; the slot card stacks three panels with a hairline between them.

**Link.** Black, 22.304px, underlined ("Explore our services").

**Footer.** `{colors.green}` fill with black text at 49.696px for the statement line. The page begins on black and ends on this same green, which is also the ticket graphic's colour, so the footer closes the ticket metaphor.

## Design System Architecture

No public design-system or brand-guideline page was opened. The root variables include WordPress block-editor entries (`--wp--preset--*`, `--wp-admin-theme-color-*`) alongside a hand-written token layer. Colours are named `--black`, `--white`, `--green`, `--mint-green`, `--almost-white`, `--light-gray-green`, with opacity ramps `--black-10` to `--black-90` and `--white-10` to `--white-90`. Type uses `--heading-0` to `--heading-4`, `--paragraph-s` to `--paragraph-xxl`, `--link-s`, `--link-m` and `--statistic-number`, all fluid. Spacing uses `--s-5` to `--s-220`.

This is a coherent, designer-authored system even though it is not published: the names match the values that render on the page.

## Do's and Don'ts

- Do open on black with white text and let pale sage and sand sections follow.
- Do use mint for the header and primary CTA, and forest green for secondary actions and the footer.
- Do mix Labour Grotesk 400 with Reckless Neue 250 for one or two display lines.
- Do keep corners at 10px and 15px and avoid shadows.
- Don't use pure white backgrounds; light surfaces are sage (#e4e9dc), sand (#e7d5ba) or #efefe7.
- Don't set body copy in the serif.
- Don't use the unused root accents (brown, purple, blue) as brand colours.

## Responsive Behavior

The mobile pass at 390px measured the h1 at 20px on a 24px line (Labour Grotesk 400, down from 28.928px) and body text at 20px on a 24px line. The most frequent mobile sizes are 20px (1,989 characters), 32px (902), 16px (585) and 36px (145). A primary CTA was not detected on mobile. Declared breakpoints are 480px to 3840px as listed under Layout; layout reflow was not otherwise measured.

## Iteration Guide

1. Start black, white text, mint header at 72px.
2. Alternate with `{colors.surface-sage}` and `{colors.surface-sand}` bands.
3. Display in Labour Grotesk 400; one Reckless Neue 250 heading per section.
4. Mint 72px CTA at 15.04px radius; green 52px button at 10.08px.
5. Use fluid clamp sizes; do not hard-code mobile sizes that were not measured.
6. No shadows; separate with colour, perforation lines and radius.
