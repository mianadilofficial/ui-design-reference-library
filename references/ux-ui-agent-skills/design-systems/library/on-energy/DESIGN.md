---
version: alpha
name: ON.energy
category: "Tech & AI"
description: "ON.energy site (on.energy): acid-yellow #fff313 statement panels against black #000000, Univers Next Pro weight 300 with -4% tracking at 56.89px, ABC Monument Grotesk Mono 12px uppercase labels, square black buttons and a 14.22px-radius yellow action chip, no shadows."
colors:
  canvas: "#fff313"
  page-body: "#000000"
  ink: "#000000"
  primary: "#fff313"
  on-primary: "#000000"
  ink-on-dark: "#eeeeee"
  ink-2: "#202020"
  ink-4: "#7d7d7d"
  ink-5: "#4b4b4b"
  ink-6: "#afafaf"
typography:
  display:
    fontFamily: "\"Univers Next Pro\", sans-serif"
    fontSize: 56.8889px
    fontWeight: 300
    lineHeight: 64px
    letterSpacing: "-2.27556px"
  display-mobile:
    fontFamily: "\"Univers Next Pro\", sans-serif"
    fontSize: 37.44px
    fontWeight: 300
    lineHeight: 43.6925px
    letterSpacing: "-0.7488px"
  heading:
    fontFamily: "\"ABC Monument Grotesk Mono\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 20.04px
    letterSpacing: "-0.48px"
    textTransform: uppercase
  subheading:
    fontFamily: "\"Univers Next Pro\", sans-serif"
    fontSize: 42.6667px
    fontWeight: 300
    lineHeight: 49.792px
    letterSpacing: "-1.70667px"
  body:
    fontFamily: "\"Univers Next Pro\", sans-serif"
    fontSize: 21.3333px
    fontWeight: 300
    lineHeight: 24.896px
    letterSpacing: "-0.853333px"
rounded:
  xs: 4px
  sm: 5.33px
  md: 8px
  lg: 8.89px
  xl: 14.22px
  2xl: 21.33px
  none: 0px
spacing:
  s1: 1px
  s2: 3px
  s3: 3.56px
  s4: 4px
  s5: 4.44px
  s6: 5.78px
  s7: 6px
  s8: 6.22px
  s9: 8px
  s10: 10.67px
components:
  button-primary:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink-on-dark}"
    typography: "{typography.heading}"
    rounded: "{rounded.none}"
    padding: 0px 24px
    height: 40px
  button-secondary:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink-on-dark}"
    typography: "{typography.heading}"
    rounded: "{rounded.none}"
    padding: 0px 24px
    height: 40px
  link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.heading}"
    rounded: "{rounded.xl}"
    padding: 6px 6px 6px 16px
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink-on-dark}"
    rounded: "{rounded.none}"
  nav-link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.heading}"
    rounded: "{rounded.xl}"
    padding: 6px 6px 6px 16px
    transform: matrix(1, 0, 0, 1, 0, 0)
  footer:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.page-body}"
    rounded: "{rounded.none}"
    padding: 17.7778px 14.2222px 142.222px
---

## Overview

ON.energy's site (https://www.on.energy/, title "ON.energy | The Race is ON for Grid-Safe AI Power") sells one product to data-center builders: the AI UPS, a medium-voltage uninterruptible power supply that the company describes as a firewall between a data center and the grid. The opened page states that it is "the only medium voltage UPS validated at NLR, compliant with NOGRR 282", U.S.-manufactured, with 3 GW+ operating or under construction, 10+ GW of production capacity and 75+ projects, and it reports a July 2026 partnership with Crusoe for 5 GW of AI UPS units. The H1 is "Grid-Safe Power for AI Factories." and the intro line is "AI UPS: a grid-safe, medium-voltage UPS engineered to protect data centers from the grid, and the grid from data centers."

Visually the page alternates a dark industrial hero (a grey 3D render of the equipment under a white light-weight headline) with a full-width acid-yellow panel (`#fff313`) holding a long statement, "ON.energy is setting the standard for large load interconnection...", then a black field. The top bar is a row of grey translucent dropdown buttons (Expertise, Solutions, Financing, About, Resources) beside a yellow "Get in touch" button and the ON logo mark in yellow. Copy is declarative and technical, in short sentences with numbers.

## Colors

- **Canvas `#fff313`**: the signature yellow, used as the statement panel, the nav accent and the root variable `--color-yellow`. Its area weight is 1821 against 2865 for `#eeeeee` (off-white) and 1016 for black. **Page-body `#000000`**: the body background and hero base.
- **Primary `#fff313`** with **on-primary `#000000`**: the "Get in touch" and "EXPLORE AI UPS" action chips are yellow with black text. The generated roles had assigned black to primary because the extractor's candidate buttons ("Explore projects", "See Why") are black with `#eeeeee` text; both treatments are measured, and the yellow chip is the brand's accent action.
- **Ink `#000000`** is the most-read text (1020 characters, on yellow and white areas); **ink-2 `#202020`** (976 characters) is the paragraph and H3 color; **ink-on-dark `#eeeeee`** (220) is text on black. **Ink-4 `#7d7d7d`**, **ink-5 `#4b4b4b`** and **ink-6 `#afafaf`** are grey steps (89, 79 and 26 characters).
- The stylesheet also declares `--color-yellow-secondary: #c0b400`, `--color-red: #f14d3d`, `--color-charcoal: #323232` and `--color-light-grey: #cdcdcd`; none appeared in the rendered color lists.

## Typography

**Univers Next Pro** (weights 250, 300, 400) carries 2330 characters and **ABC Monument Grotesk Mono** (400) carries 92. The root variables name them `--font-base` and `--font-accent`.

- **Display (H1):** Univers Next Pro 56.8889px, weight 300, line-height 64px, letter spacing -2.27556px. Mobile: 37.44px, line-height 43.6925px, letter spacing -0.7488px.
- **Subheading (H3 "Testimonials"):** 42.6667px, weight 300, line-height 49.792px, letter spacing -1.70667px.
- **Body:** 21.3333px, weight 300, line-height 24.896px, letter spacing -0.853333px (mobile 20.8px).
- **Heading / label:** ABC Monument Grotesk Mono 12px, weight 400, line-height 20.04px, letter spacing -0.48px, uppercase. This style is used for the section eyebrow ("OUR EXPERTISE") and for button labels.

Letter spacing is -4 percent of size throughout (for example -0.853333px at 21.3333px, -1.70667px at 42.6667px, -2.27556px at 56.8889px). Weights: 300 (2289 characters), 400 (121), 600 (12). Sizes by characters: 21.3333px (997), 14.2222px (717), 42.6667px (321), 12px (259).

The 12px mono label has two tracking values in the measurements: -0.48px (80 characters, the button and eyebrow style) and -0.24px (126 characters), so mono text is slightly looser than the sans. The 14.2222px size (717 characters) is the second most frequent and sits between the 12px labels and the 21.3333px body; at 14px (33 characters) and 32px (57 characters, letter spacing -1.28px) a few further steps appear. The eyebrow "OUR EXPERTISE" is split into one element per letter in the DOM, which is how the page animates its labels.

## Layout

The page is 13947px tall at 1280px. The grid variables are `--grid-column-count: 2`, `--grid-gutter: 1.6vw` and `--grid-outer-gutter: 4.2666666667vw`. The header is a floating row of buttons rather than a bar. Gaps: 14.2222px (22 occurrences), 17.7778px (12), 10.6667px (7), 6.22222px (5). Paddings: 32px (9), 4.44444px (7), 12.4444px (5), 21.3333px (5), 106.667px (4), 24px (4). The footer padding is 17.7778px 14.2222px 142.222px. Sections are rounded full-width panels inset slightly from the viewport edge (visible in the capture as a yellow rectangle with small corner rounding).

The measured 2-column grid with a 1.6vw gutter and a 4.2666666667vw outer gutter means margins and gutters scale with the viewport width rather than being fixed pixel values. In the capture the headline sits at the left edge of that outer gutter, the product teaser chip ("EXPLORE AI UPS") floats at the lower right of the hero, and the statement panel text starts at the same left edge, so the page reads as a single left-aligned column over a 2-column grid.

## Elevation & Depth

No box shadows and no border colors were measured. Depth is tonal: dark photographic hero, flat yellow panel, black field. Translucent fills (`hsla(0,0%,93%,.2)` as `--color-off-white20`, `rgba(0,0,0,.4)` as `--color-black40`) layer the nav buttons over imagery.

## Shapes

Radii measured: 5.33333px (7 elements, the nav buttons), 4px (4), and one each of 8px, 8.89058px, 14.2222px (the yellow "Get in touch" chip) and 21.3333px. The action buttons ("Explore projects", "See Why") are square (0px). The scale therefore mixes soft nav buttons and square action buttons.

## Components

- **Button primary / secondary:** black fill, `#eeeeee` text, ABC Monument Grotesk Mono 12px uppercase, radius 0px, padding 0px 24px, height 40px ("Explore projects", "See Why").
- **Yellow chip (link / nav-link):** `#fff313` fill, black mono 12px text, radius 14.2222px, padding 6px 6px 6px 16px ("EXPLORE AI UPS", "Get in touch").
- **Nav button:** translucent grey fill (`#ededed33`), `#eeeeee` text, radius 5.33333px, 25px tall; on hover it turns solid `#eeeeee` with black text.
- **Footer:** black, padding 17.7778px 14.2222px 142.222px.

## Design System Architecture

No public design system or brand guidelines are linked from https://www.on.energy/ (WebFetch showed product claims, news, testimonials, financing and a blog only). The shipped CSS shows a small named token set: color variables (`--color-yellow`, `--color-black`, `--color-off-white`, `--color-dark-grey`, `--color-mid-grey`, `--color-arsenic`, `--color-silver`), two font variables (`--font-base`, `--font-accent`), two easing curves (`--ease-expo-out: cubic-bezier(.16,1,.3,1)`, `--ease-expo-in-out: cubic-bezier(.87,0,.13,1)`) and the three grid variables listed above.

## Do's and Don'ts

- Do use yellow `#fff313` as a full-width statement panel and for the single accent action.
- Do set headlines in Univers Next Pro 300 with -4 percent tracking.
- Do use ABC Monument Grotesk Mono 12px uppercase for labels and buttons.
- Do keep action buttons square (0px) and nav buttons at 5.33333px.
- Don't add shadows or borders; none were measured.
- Don't use the declared red `#f14d3d` or `#c0b400` until measured on a page.
- Don't use bold weights; the site uses 300 for almost all text.

## Responsive Behavior

Measured at 390px: H1 37.44px (line-height 43.6925px, letter spacing -0.7488px), body 20.8px (line-height 24.96px, letter spacing -0.832px), and the "Explore projects" button unchanged at 12px mono with 0px 24px padding. The mobile size distribution is 20.8px (997 characters), 14.56px (630), 29.12px (378), 12px (206) and 37.44px (29). The header navigation presence at that width is not measured, and breakpoints were not read from the stylesheet.

## Iteration Guide

1. Choose the field: black for hero and closing sections, yellow `#fff313` for the statement panel.
2. Use Univers Next Pro 300, -4 percent tracking; labels in ABC Monument Grotesk Mono 12px uppercase.
3. One yellow chip as the accent action; black square buttons elsewhere.
4. Keep panels inset with small rounding and no shadow.
5. Record any new measurement in SOURCES.json before adding tokens.
