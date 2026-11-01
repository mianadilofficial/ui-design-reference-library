---
version: alpha
name: "Ping An Group"
category: "Banking & Insurance"
description: "Ping An Group (group.pingan.com) is a corporate finance site: white canvas, Ping An orange #f05a23 headlines and buttons, GothamRounded at weights 400 and 500, dark warm-grey #4b4a48 footer, 3px solid buttons and pill outline secondary."
colors:
  canvas: "#ffffff"
  ink: "#646565"
  primary: "#f05a23"
  surface-footer: "#4b4a48"
  ink-on-dark: "#ffffff80"
  ink-grey: "#9d9a9a"
  ink-on-dark-soft: "#ffffffbf"
  button-secondary-border: "#9d9a9a4d"
typography:
  display:
    fontFamily: GothamRounded, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  heading:
    fontFamily: GothamRounded, sans-serif
    fontSize: 40px
    fontWeight: 500
    lineHeight: 48px
  subheading:
    fontFamily: GothamRounded, sans-serif
    fontSize: 30px
    fontWeight: 500
    lineHeight: 36px
  nav:
    fontFamily: GothamRounded, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  button-secondary:
    fontFamily: GothamRounded, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
rounded:
  xs: 3px
  sm: 5px
  pill: 9999px
spacing:
  s1: 5px
  s2: 6px
  s3: 6.4px
  s4: 11.2px
  s5: 12px
  s6: 14px
  s7: 16px
  s8: 20px
  s9: 25px
  s10: 30px
components:
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-grey}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 6.4px 17.6px
    height: 36px
    borderColor: "{colors.button-secondary-border}"
  link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.display}"
    rounded: "{rounded.xs}"
    padding: 11.2px 30.4px
    borderColor: "{colors.primary}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-grey}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    padding: 16px 0px 10px
  text-input:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    padding: 28.8px 0px
    height: 58px
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.primary}"
    padding: 76px 0px 20px
---

## Overview

Ping An Group (group.pingan.com, title "Ping An Group - Expertise Creates Value") is the corporate site of the Chinese financial group. The measured English home page is white, with a single saturated orange (#f05a23) and cool greys. The first screen has a slim header (logo "PING AN" with the line "Expertise Creates Value", nav links About Us, Media, Investor Relations, Sustainability, a language box 中文版 | 繁 | 简, and a round orange search button), a rotating hero card ("Ping An Strategy 2024", subtitle "Business Model Unveiled", a filled orange "Watch Now" button), a numbered list of four feature tiles (01 to 04, with ghost outlined numerals), and a "Latest News" column with dated headlines and an "All News" link. Below are the group structure triangle diagram in orange ("A world-leading integrated finance, health and senior care services group", Integrated finance, Health and senior care, Technology Enablement), a "Ping An Member Companies" pill button, "More About Ping An" with photo and color tiles (Financial Reports, Sustainability Reports, Policies and Research, Our Leadership), and a dark-grey footer with "What's happening? Be the first to know." and a newsletter field.

The tone is corporate and informational: sentence-case headings, short nouns, and "Learn More", "Watch Now", "Hear Now" and "All News" as calls to action. The extraction hid a browser-notification overlay (`consentOverlaysHidden: browser-notification`); it is not documented here.

## Colors

Measured values from `web/data/extracted/ping-an.json`:

- **canvas `#ffffff`**: the page background.
- **primary `#f05a23`**: Ping An orange. It colors headings ("More About Ping An", "What's happening?..."), nav hover, the "Watch Now" button fill and border, numbered markers and the group triangle. The root variable `--orange` is `#F05A23`.
- **ink `#646565`**: the main readable text on white (210 characters).
- **ink-grey `#9d9a9a`**: nav and secondary labels (116 characters); declared as `--grey` and `--secondary`.
- **surface-footer `#4b4a48`**: the dark warm-grey footer (largest area weight, 1,041).
- **ink-on-dark `#ffffff80`** (559 characters) and **ink-on-dark-soft `#ffffffbf`** (30): translucent white text on dark and image tiles. Opaque white text is also measured (799 characters).
- **button-secondary-border `#9d9a9a4d`**: the outline of the pill button.

Other variables in the shipped CSS: `--green #005E3C` and `--success #005E3C`, `--stock-green #24A15A`, `--stock-red #D80404`, `--light #F9F9F9`, `--border-grey rgba(157,154,154,0.3)`, `--white-75`, `--yellow #ffc107`, `--teal #20c997`, `--pink #e83e8c`, `--danger #dc3545`, `--info #17a2b8` and `--gray-dark #343a40`. The yellow, teal, pink, danger, info and gray values are Bootstrap defaults; they are not treated as brand colors.

## Typography

One family: **GothamRounded** (1,790 characters) at weights 400 (1,365 characters), 500 (415) and 700 (10). No letter-spacing is applied (`letterSpacingBySize` is empty), and text is sentence case.

- **heading**: 40px / 48px, weight 500, orange ("What's happening? Be the first to know."). Mobile: 27.2px / 32.64px.
- **subheading**: 30px / 36px, weight 500, orange ("More About Ping An").
- **display** (the extractor's h1, "Who We Are" tile label): 16px / 24px, weight 400.
- **nav**: 20px / 30px, weight 400; the header link text measures 15px / 66px, weight 500, in #9d9a9a.
- **button-secondary**: 14px / 21px, weight 400.

By character count the sizes are 16px (993), 40px (307), 14px (222), 20px (152), 15px (51), 14.4px (39), 30px (18) and 80px (8, the ghost numerals). On the 390px pass the most-read sizes are 14px (523), 18.4px (322), 24px (268), 16px (123), 27.2px (39). No font-license source was opened.

## Layout

The page is 1280px wide and 3,483px tall. The header is 68px high (84px on the mobile pass). The first row is a hero card carousel at left, a column of four numbered tiles in the center, and a "Latest News" column at right with hairline separators between items. The root variables declare breakpoints `--breakpoint-md 768px`, `--breakpoint-xl 1200px`, `--breakpoint-xxl 1440px`. Measured paddings: 40px (16 occurrences), 20px (15), 60px (12), 11.2px and 30.4px (button), 30px (11), 6px and 12px. The footer pads 76px 0px 20px and is 813px tall. A single gap value of 30px was measured.

## Elevation & Depth

No box shadows were measured. Depth is made with photographs, gradient tiles (orange to lighter orange and grey), and the layered, outlined triangle diagram. Borders measured: #f05a23 (12), #9d9a9a (1), #9d9a9a4d (1), #ffffff80 (1). Footer and card separation uses color blocks and thin dividers (`--border-grey`).

## Shapes

Measured radii: 5px (25 elements, tiles and cards), 3px (13 elements, the Watch Now button), and 800px (1, the pill "Ping An Member Companies" button). Circular controls such as the search button appear round in the capture. The tokens record `xs 3px`, `sm 5px` and `pill 9999px`. The group triangle with rounded vertices and an orange house-like inner shape is an identity element of the diagram.

## Components

- **link (Watch Now)**: orange #f05a23 fill and border, white label, GothamRounded 16px / 24px, padding 11.2px 30.4px, height 48px, width 190px, radius 3px.
- **button-secondary (Ping An Member Companies)**: white fill, #9d9a9a text, 1px #9d9a9a4d border, 14px / 21px, padding 6.4px 17.6px, height 36px, width 265px, pill radius.
- **nav**: white header 68px high with #9d9a9a links that turn orange on hover (hover measured: About Us goes from rgb(157,154,154) to rgb(240,90,35)). Nav-link text is orange 20px / 30px with padding 16px 0px 10px.
- **text-input**: footer newsletter field, white text, 20px / 30px, padding 28.8px 0px, height 58px, width 501px.
- **footer**: #4b4a48, orange headline, padding 76px 0px 20px.
- **News list item**: date in grey (for example "28 Sep 2026"), headline in dark grey, hairline between items.

## Design System Architecture

No public design system or brand-guideline link appears on the opened page. The shipped CSS is a Bootstrap-based stylesheet: the root variables include Bootstrap's standard color and breakpoint names (`--breakpoint-md`, `--breakpoint-xl`, `--gray-dark`, `--danger`, `--info`, `--font-family-monospace`) with Ping An additions (`--orange #F05A23`, `--green #005E3C`, `--grey #9D9A9A`, `--stock-green`, `--stock-red`, `--border-grey`, `--light`). Source: https://group.pingan.com/ (measured with `web/scripts/extract-tokens.mjs`). The swiper navigation size variable `--swiper-navigation-size: 44px` is declared for the carousel.

## Do's and Don'ts

- Do use orange #f05a23 for headings, primary actions and diagrams on white.
- Do set GothamRounded in sentence case at weights 400 and 500, with no tracking.
- Do use a 3px radius for solid buttons and a full pill for the outlined secondary.
- Do keep the footer in #4b4a48 with orange headlines.
- Don't use Bootstrap default hues (#0d6efd family, yellow, teal, pink) as brand colors.
- Don't add shadows; none are measured.
- Don't document the browser-notification overlay.

## Responsive Behavior

Measured on the 390px pass: the h2 "What's happening? Be the first to know." is 27.2px / 32.64px at weight 500 in orange, height 65px, width 350px; the header is 84px high at 390px wide, with 14px / 21px #646565 text; no h1 or CTA was found; the most-read sizes are 14px (523 characters), 18.4px (322) and 24px (268). Declared breakpoints are 768px, 1200px and 1440px. Nav, carousel and triangle diagram behavior on mobile are not measured.

## Iteration Guide

1. Canvas #ffffff, ink #646565, accent #f05a23, footer #4b4a48.
2. GothamRounded, weights 400 and 500, headings 40px and 30px in orange.
3. Solid buttons 48px high with 3px radius; secondary pills 36px high.
4. Use photography with gradient tiles and an orange triangle diagram for structure.
5. Run `node web/scripts/verify-designs.mjs --slug=ping-an` after edits.

## Content Structure

Menu groups read on the opened page: About Us (Who We Are, Our Leadership, Governance, History, Our Businesses), Media (News, Media Gallery, Insights, Stories and Videos, Press Contacts, Podcasts), Investor Relations (Share Information, Major Shareholders, Announcements, Results and Presentations, Library, Investor Contacts) and Sustainability (Our Commitment, Sustainability Governance, Rating and Participation, Environment, Social, Corporate Governance, Reports, Policies and Research, FAQ). Section headings include Interim Results 2026, Annual Results 2025, Ping An Podcast Series and Health and Senior Care Ecosystem. Calls to action are Learn More, Watch Now, Hear Now, Watch our video and All News.
