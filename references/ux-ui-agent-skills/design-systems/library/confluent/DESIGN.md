---
version: alpha
name: Confluent
category: "Backend, Database & DevOps"
description: "Confluent, the data streaming platform from the original creators of Apache Kafka: black #000000 hero and demo bands against a white #ffffff canvas, #1e1e1e ink, electric blue #0056f9 buttons at 6px radius (hover #5a91f9), a #0e68bc announcement strip, and Poppins throughout from 53.332px/600 display to 16.732px body with uppercase tracked nav."
colors:
  canvas: "#ffffff"
  ink: "#1e1e1e"
  primary: "#0056f9"
  on-primary: "#fafafa"
  primary-hover: "#5a91f9"
  surface-black: "#000000"
  banner-blue: "#0e68bc"
  link-blue: "#3277f9"
  ink-on-dark: "#e4e4e4"
  ink-muted: "#5d5d5d"
  ink-graphite: "#4a4a4a"
  ink-strong: "#343434"
  ink-silver: "#c2c2c2"
  footer-text: "#404040"
  hairline: "#dedddd"
  slate-tint: "#58788c1a"
  glass-dark: "#1a1a1a66"
typography:
  display:
    fontFamily: Poppins, Arial, sans-serif
    fontSize: 53.332px
    fontWeight: 600
    lineHeight: 71.9982px
  display-mobile:
    fontFamily: Poppins, Arial, sans-serif
    fontSize: 38.291px
    fontWeight: 600
    lineHeight: 51.6929px
  heading:
    fontFamily: Poppins, Arial, sans-serif
    fontSize: 38.8px
    fontWeight: 600
    lineHeight: 52.38px
  subheading:
    fontFamily: Poppins, Arial, sans-serif
    fontSize: 27.068px
    fontWeight: 600
    lineHeight: 36.5418px
  body:
    fontFamily: Poppins, Arial, sans-serif
    fontSize: 16.732px
    fontWeight: 400
    lineHeight: 25.9346px
  button:
    fontFamily: Poppins, Arial, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 14px
  nav:
    fontFamily: Poppins, Arial, sans-serif
    fontSize: 13px
    fontWeight: 500
    lineHeight: 22.4px
    letterSpacing: 1.3px
    textTransform: uppercase
  eyebrow:
    fontFamily: Poppins, Arial, sans-serif
    fontSize: 13.732px
    fontWeight: 600
    lineHeight: 15.7918px
    letterSpacing: 1.4px
    textTransform: uppercase
  link:
    fontFamily: Poppins, Arial, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 20px
    letterSpacing: 1.17px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 10px
  xl: 24px
  2xl: 32px
  3xl: 34px
  4xl: 40px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 6px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 25px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 16px 24px
    height: 46px
    borderColor: "{colors.primary-hover}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
    borderColor: "{colors.on-primary}"
  button-nav:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 24px
    height: 40px
  banner-link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    padding: 0px 25px 0px 0px
  nav:
    backgroundColor: "{colors.surface-black}"
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  card-outline:
    textColor: "{colors.on-primary}"
    typography: "{typography.eyebrow}"
    rounded: "{rounded.md}"
    borderColor: "{colors.ink-graphite}"
  footer:
    textColor: "{colors.footer-text}"
    padding: 40px
---

## Overview

Confluent sells a cloud data streaming platform built around Apache Kafka; the hero line says it is "the World's Data Streaming Platform, by the original co-creators of Apache Kafka®", and its About page lists its headquarters in Mountain View, California. The measured home page (https://www.confluent.io/, "Confluent | The Data Streaming Platform", 6,328px at a 1280px viewport) alternates hard between pure black and pure white bands, with a single electric blue for every action and Poppins as the only typeface.

The capture shows: a 45px blue announcement strip ("The Future Starts at Current: Where real-time data and AI come together | Register now", with Login and Contact Sales links); a black header with the CONFLUENT wordmark, uppercase nav (WHY CONFLUENT, PRODUCTS, PRICING, SOLUTIONS, RESOURCES) and a blue "Try Confluent" button; a black hero "Build Faster. Scale Smarter." with a blue "Start for Free" button and an "Explore the Platform →" link above a glowing blue network illustration (data sources flowing into a central hub); three value columns in a dark rounded panel; a carousel of blog and report cards; a white "Building Data-Driven, AI-First Companies" section with use-case tabs and a diagram plus a small fluffy mascot; a dark dotted "Industry Solutions That Drive Results" band with a vertical industry list; a white "The Confluent Difference" section in three columns (Cloud-Native, Complete, Everywhere) headed in blue; a black "See Confluent In Action" band with three outlined demo cards; a FAQ accordion; and a light footer. A third-party chat assistant overlays the hero in the capture and is not part of the design.

## Colors

The page exposes no CSS custom properties on `:root`, so the palette comes from the measured computed styles:

- **Canvas `#ffffff`** — the body background and white sections (4,771 by area).
- **Surface black `#000000`** — the header, hero, industry band and demo band (3,755 by area). Black and white together cover almost the whole page.
- **Ink `#1e1e1e`** — the most-read text colour (5,437 characters), on white sections. Section headings on white are pure #000000.
- **Ink on dark `#e4e4e4`** — body text on black (1,997 characters); headings on black are **`#fafafa`**.
- **Primary `#0056f9`** — every primary button ("Start for Free", "Try Confluent", "Confluent vs. Apache Kafka", "Get a Practical Guide"). Hover: **`#5a91f9`** fill with a #fafafa border.
- **Link blue `#3277f9`** — text links and blue column headings ("Cloud-Native", "Complete", "Everywhere").
- **Banner blue `#0e68bc`** — the announcement strip.
- **Greys** — `#5d5d5d` (muted), `#4a4a4a` (card borders on black), `#343434`, `#c2c2c2` and `#404040` (footer text).
- **Hairline `#dedddd`** — the most frequent border (12 uses), for FAQ rows and dividers on white.
- **Slate tint `#58788c1a`** and **glass dark `#1a1a1a66`** — translucent panel fills on the black hero.

## Typography

**Poppins** is the only brand typeface (11,190 measured characters), in weights 300, 400, 500 and 600. The scale uses fractional fluid sizes:

- h1 53.332px/71.9982px at 600 (1.35 line height).
- h2 38.8px/52.38px at 600.
- h3 27.068px/36.5418px at 600; further sizes of 23.464px and 20.484px.
- Body 16.732px/25.9346px at 400 — the dominant size (5,942 characters); 18.732px for leads.
- Buttons 14px/14px at 500.
- Header nav 13px/22.4px at 500, uppercase, 1.3px tracking.
- Card eyebrows 13.732px/15.7918px at 600, uppercase, 1.4px tracking ("TRY NOW FOR FREE").
- Banner links 14px/20px at 600 with 1.17px tracking.

Headings are sentence or title case and never tracked; only small uppercase labels carry positive tracking. Poppins is an open-source Google Font, with Arial as the shipped fallback.

## Layout

Band structure: a 45px blue strip, a 1,496px black hero (content 69px to 1225px, 3 columns, with a carousel), a 2,392px white section (3 columns), a 759px black demo band (3 columns), and a 1,636px white FAQ and footer area (2 columns). Content is centred within roughly 1,156px.

Spacing values measured: gaps of 10, 12 (the most common, 62 uses), 20, 24, 32, 64 and 80px; paddings of 2, 6, 12, 15, 16, 20, 24, 32, 40 and 96px. Section headings are centred with a short centred paragraph beneath; content then splits into 3 columns or a 2-column list-and-detail layout. The FAQ uses a 2-column layout with the heading on the left and the accordion on the right.

## Elevation & Depth

Flat, with one exception: `rgba(0, 0, 0, 0.2) 0px 4px 8px 0px` (2 uses) on raised panels. Depth on the black bands comes from glowing blue illustration, translucent panels (#58788c1a, #1a1a1a66) and 1px #4a4a4a outlines. On white bands, separation comes from #dedddd hairlines.

## Shapes

Radii range widely. Buttons use 6px; demo cards 8px (with 8px 8px 0px 0px tops on their images); small elements 4px and 10px; large rounded panels 24px, 32px, 34px (the most frequent radius, 11 uses) and 40px; and one 9999px pill. The capture shows the dark value-proposition panel in the hero and the use-case diagram panel with large rounded corners, while buttons stay nearly square.

## Components

- **Primary button** — #0056f9 fill, #fafafa Poppins 14px/14px at 500, 6px radius, 16px 24px padding, 46px tall; hover fill #5a91f9 with a #fafafa border.
- **Header button** — "Try Confluent": same colours and radius, 0px 24px padding, 40px tall.
- **Text link with arrow** — "Explore the Platform →", "Try for Free →": blue text with a trailing arrow.
- **Announcement strip** — #0e68bc, white 14.732px text with 1.17px tracking and a 600-weight "Register now" link.
- **Header** — black, 85px tall, uppercase 13px nav with 1.3px tracking, search and language icons on the right.
- **Use-case tabs** — a row of text tabs with the active one underlined ("Event-Driven Apps & Agents").
- **Demo card** — 1px #4a4a4a border, 8px radius, a product screenshot on top, an uppercase 13.732px eyebrow, a short paragraph and a blue arrow link, on black.
- **FAQ accordion** — questions in bold #1e1e1e with chevrons, separated by #dedddd hairlines.
- **Footer** — white, #404040 text, 40px padding, six link columns and social icons.

## Design System Architecture

Confluent publishes no public design system or brand guidelines that we could open: https://www.confluent.io/brand/ returns 404, and the About page (https://www.confluent.io/about/) links only to a news listing, not a press kit. The site exposes no `:root` custom properties, so there is no readable token layer; the de-facto system is a fixed set of computed values — Poppins in four weights, a fluid size scale with fractional values (16.732px, 27.068px, 38.8px, 53.332px), one blue (#0056f9) with one hover (#5a91f9), black/white band alternation, and a radius set of 6px for controls and 24-40px for panels. The stylesheet's breakpoints are Bootstrap-style: min-width 768px (279 rules), max-width 767px (267), min-width 992px (223), max-width 991px (170), max-width 1199px (82) and min-width 1200px (49).

## Do's and Don'ts

**Do**
- Alternate full-width black (#000000) and white (#ffffff) bands.
- Use #0056f9 for every primary button, with 6px radius and #5a91f9 on hover.
- Set everything in Poppins, headings at 600 and body at 400.
- Use uppercase, tracked (1.3-1.4px) 13px labels for nav and card eyebrows only.
- On black, outline cards with 1px #4a4a4a and use #e4e4e4 body text.
- Use blue glowing network illustrations to show data flowing into a central platform.

**Don't**
- Don't introduce a second action colour.
- Don't track headings or body text.
- Don't use heavy shadows; one light 4px/8px shadow is the maximum.
- Don't round buttons into pills; the measured button radius is 6px.
- Don't put #1e1e1e text on black or #e4e4e4 text on white.
- Don't treat the cookie-consent placeholder or chat widget as brand components.

## Responsive Behavior

The extractor's 390px mobile pass recorded:
- h1 at Poppins 38.291px/51.6929px, 600 (53.332px on desktop), 350px wide.
- h2 at 32.125px/43.3688px (38.8px on desktop).
- Body at 15.041px/23.3135px (16.732px on desktop) in a 330px column.
- The "Start for Free" button unchanged in height (46px, 16px 24px padding, 6px radius) but 350px wide.
- A 70px announcement strip (45px on desktop) and an 85px black header.
- 1 visible header link and a visible menu toggle (3 links counted and no toggle on desktop).

The stylesheet breakpoints are listed in Design System Architecture; which component changes happen at each was not measured.

## Iteration Guide

1. Start with a black header and hero, then alternate white and black full-width bands.
2. Set the hero headline in Poppins 53.332px/71.9982px at 600 in #fafafa, centred.
3. Add a #0056f9 button (6px radius, 16px 24px, 46px) and a blue arrow text link beside it.
4. Use Poppins 16.732px/25.9346px for body: #1e1e1e on white, #e4e4e4 on black.
5. Put demo cards on black with 1px #4a4a4a borders and 8px radius; use uppercase 13.732px eyebrows with 1.4px tracking.
6. Use large 24-40px radii only for big panels and illustrations.
7. Check against the capture: high-contrast black and white, one confident blue, and glowing data-flow imagery.
