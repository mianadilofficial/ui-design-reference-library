---
version: alpha
name: Imperial College London
category: "Education"
description: "Imperial College London pairs a white page and charcoal ink (#161a1d) with a bright spring green (#00ff7f) used for links on dark panels and the course-finder band, setting everything in its own variable font ImperialText at 19.447px body and 700-weight headlines from 26.8243px to 60.1061px, with square corners (0px) throughout."
colors:
  canvas: "#ffffff"
  ink: "#161a1d"
  primary: "#161a1d"
  on-primary: "#ffffff"
  surface-panel: "#22262b"
  accent-green: "#00ff7f"
  accent-green-pale: "#98fb98"
  link-navy: "#000080"
  link-blue: "#0000cd"
  tag-magenta: "#c71585"
typography:
  display:
    fontFamily: ImperialText, "Helvetica Neue", Arial, sans-serif
    fontSize: 60.1061px
    fontWeight: 700
    lineHeight: 60.1061px
    letterSpacing: "-0.601061px"
  display-mobile:
    fontFamily: ImperialText, "Helvetica Neue", Arial, sans-serif
    fontSize: 39.2782px
    fontWeight: 700
    lineHeight: 39.2782px
    letterSpacing: "-0.392782px"
  heading:
    fontFamily: ImperialText, "Helvetica Neue", Arial, sans-serif
    fontSize: 26.8243px
    fontWeight: 700
    lineHeight: 26.8243px
    letterSpacing: "-0.268243px"
  subheading:
    fontFamily: ImperialText, "Helvetica Neue", Arial, sans-serif
    fontSize: 31.5094px
    fontWeight: 700
    lineHeight: 31.5094px
    letterSpacing: "-0.315094px"
  body:
    fontFamily: ImperialText, "Helvetica Neue", Arial, sans-serif
    fontSize: 19.447px
    fontWeight: 400
    lineHeight: 25.2812px
  input:
    fontFamily: Arial
    fontSize: 19.447px
    fontWeight: 400
    lineHeight: 23.3364px
rounded:
  none: 0px
spacing:
  s1: 4.86px
  s2: 9.72px
  s3: 14.03px
  s4: 14.59px
  s5: 16.59px
  s6: 19.45px
  s7: 28.06px
  s8: 29.17px
  s9: 36.68px
  s10: 38.89px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 16.5853px 19.447px
    height: 60px
    borderColor: "{colors.ink}"
  button-primary-hover:
    backgroundColor: "{colors.link-blue}"
  link:
    textColor: "{colors.accent-green}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.link-blue}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  text-input:
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 14.5853px
    height: 53px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 0px 0px 56.1293px
---

## Overview

The home page of Imperial College London (title "Imperial College London", lang en-GB) is a confident, high-contrast university site. A hero photograph of a laboratory scientist in safety glasses and a white coat, holding a phone to a microscope, runs behind the white letter-spaced wordmark IMPERIAL set in a heavy slab-like sans, with a search field and a "Menu" button at the top right separated by hairlines. A charcoal box (#22262b) overlaps the photograph and carries the headline "A world-leading university", the line "Imperial has been named University of the Year 2027 by The Times and Sunday Times." and a green arrow link, "See how Imperial ranks more widely".

Directly below, a full-width bright green band holds the "Find a course" tool: a "Study level" select, a "Subject area or course name" input and a black "Search" button with a chevron. The page then runs a feature card (a dark text panel over a San Francisco skyline photograph, tagged "Imperial Global"), a "More news" strip of three underlined stories with magenta category labels (Engineering, Campus and community), a deep aubergine-black ranking block ("Ranked No.1 in Europe and UK", "Ranked No.2 in the world", "Gold Award", "University of the Year", "14 Nobel Prize winners", "3 Fields Medal winners"), and a pale-green and photographic "Centre for AI" band.

The measured page is 5051px tall at 1280px wide. The voice is declarative and statistic-led: short bold headings, one-line proof points, and links that begin with a verb ("Find out more", "View more league table rankings", "Read more news"). A round blue cookie-preferences button sits at the lower left of the capture; it is a consent control and is not documented as brand UI.

## Colors

- **Charcoal ink (#161a1d, `ink` and `primary`)** is the page text, the 60px "Search" button fill, and the footer background. It carries 1248 characters of text in the measurement.
- **Panel charcoal (#22262b, `surface-panel`)** fills the headline box over the hero and the feature-card text panel (931 area weight).
- **Spring green (#00ff7f, `accent-green`)** is the brand highlight: the "Find a course" band (150 area), link text on dark panels (319 characters), the small "Imperial Global" tag and the arrow icons.
- **Pale green (#98fb98, `accent-green-pale`)** fills the large "Centre for AI" band (344 area).
- **Link blue (#0000cd) and navy (#000080)** color links on white: "Read more news" is #0000cd, and navy appears in 147 characters of text and in 2 borders. #0000cd is also the hover fill of the Search button (it turns from #161a1d to rgb(0, 0, 205)) and the stylesheet's `--swiper-pagination-color`. They are site colors, not the browser default link blue.
- **Magenta (#c71585, `tag-magenta`)** colors the small category labels above news headlines (42 characters).
- **White (#ffffff)** is the canvas and the dominant text color on dark panels (1410 characters).
- **Borders:** #ffffff, #708090 (2), #161a1d (2), #000080 (2).

## Typography

A single variable family, ImperialText, is loaded (weights 100 to 900), and it sets all 3237 measured characters. Form inputs fall back to Arial.

- **Display (h1):** 60.1061px / 60.1061px, weight 700, -0.601061px letter spacing. In the 390px pass: 39.2782px, weight 700, -0.392782px.
- **Subheading (h3):** 31.5094px, weight 700, -0.315094px.
- **Heading (h2):** 26.8243px, weight 700, -0.268243px ("Find a course"); 20.8962px on the 390px pass.
- **Body:** 19.447px / 25.2812px, weight 400 (16.2513px / 21.1268px on the 390px pass).
- **Input:** Arial 19.447px / 23.3364px.
- **Other measured sizes:** 16.5643px (743 characters), 14.107px (235), 22.8369px (148), 37.0257px (137, the "More news" heading), 43.5094px (38).

Display and heading lines have line-height equal to font size, so headlines are set solid. Letter spacing is a constant -1% of size on every bold size. The stack is ImperialText, "Helvetica Neue", Arial, sans-serif; Helvetica Neue and Arial are the named fallbacks. The fluid-type root variable `--fluid-min-width: 320` is declared.

## Layout

The capture shows a centered container with equal side margins and full-width bands. Measured spacings are 4.86px, 9.72px, 14.03px, 14.59px, 16.59px, 19.45px, 28.06px, 29.17px, 36.68px and 38.89px. Layout moves in bands: hero with an overlapping box, course finder, feature card, three-column news, two-column ranking grid with hairline dividers, a half-and-half colored band with a photograph, then a footer with link columns on #161a1d (padding 0px 0px 56.1293px).

## Elevation & Depth

Flat. Only one shadow value is measured, `rgba(0, 0, 0, 0.2) 0px 4px 8px 0px`, on 2 elements. Separation is created by solid color panels overlapping photographs (the charcoal headline box overlaps the hero image) and by hairline rules, white on dark panels.

## Shapes

Corners are square. The rounded token is `none: 0px`: the Search button, input, links, navigation and footer all compute 0px, and the stylesheet sets the swiper bullet radius to 0 (`--swiper-pagination-bullet-border-radius`). Only 2 elements in the measurement carry a 100px radius; the cookie button in the capture is round and is not part of the content design, so no pill token is defined.

## Components

- **Search button.** #161a1d fill, #ffffff 19.447px ImperialText 400 label, 2px solid #161a1d border, 0px radius, 60px high with 16.5853px 19.447px padding, with a chevron. Hover changes fill and border to rgb(0, 0, 205), that is #0000cd.
- **Course-finder band.** Spring-green background containing the bold "Find a course" label, a select and a text input (53px high, 14.5853px padding, 0px radius) and the button.
- **Headline box.** #22262b box over the hero photograph holding the h1, a 19.447px line of text and a #00ff7f arrow link.
- **Feature card.** A dark panel with a green tag ("Imperial Global"), a 31.5094px headline, copy and a green link, overlapping a photograph.
- **News list.** Three columns, each with a magenta 14.107px bold label and an underlined 700 headline; the "Read more news" link is #0000cd.
- **Ranking panel.** A dark band with a two-column grid of bold statistics, each over a hairline rule with an underlined green source link.
- **Footer.** #161a1d background, white text, bold section headings ("Useful Links", "Popular links") and link lists.

## Design System Architecture

No public Imperial design system or brand-guideline page was reachable from the home page: https://www.imperial.ac.uk/brand, /press and /design returned 404, and https://www.imperial.ac.uk/about/ is a corporate about page without a design-system link. The de-facto system is the shipped stylesheet: a single custom variable font (ImperialText, 100 to 900) with negative tracking on bold sizes, third-party widget variables (Tobii lightbox `--tobii-*`, Swiper `--swiper-pagination-*`), and a fluid-type variable (`--fluid-min-width: 320`). Brand colors are applied directly rather than through named variables.

## Do's and Don'ts

- Do set headlines in ImperialText 700 with -1% letter spacing and solid line height.
- Do use #00ff7f on #22262b or #161a1d panels for links and highlights.
- Do overlap solid charcoal boxes on photography.
- Do keep corners square (0px) and shadows rare.
- Do use real laboratory and campus photography.
- Don't style the cookie control as part of the brand.
- Don't use spring green for body text on white; it is measured only on dark and as a band fill.
- Don't add rounded buttons.

## Responsive Behavior

The 390px pass measured: h1 39.2782px / 39.2782px weight 700, h2 20.8962px, body 16.2513px / 21.1268px, the "More news" heading 26.8874px, and the Search button at 16.2513px with the same 2px #161a1d border and 0px radius. The extractor's mobile pass does not record column counts, the form of the navigation or breakpoints, so those are not measured.

## Iteration Guide

1. Start on white with #161a1d text in ImperialText 19.447px.
2. Build the hero with a photograph, a #22262b overlap box and the 60.1061px bold headline.
3. Put the primary tool in a #00ff7f band with a 60px #161a1d button.
4. Use #0000cd for in-page links on white and #c71585 for category labels.
5. Keep all corners at 0px.
6. Add statistics blocks on dark panels with hairline dividers.
