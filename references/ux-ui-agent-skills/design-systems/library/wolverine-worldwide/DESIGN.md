---
version: alpha
name: "Wolverine Worldwide"
category: "Fashion & Apparel"
description: "Wolverine World Wide corporate site: black, white and grey with ABC Diatype bold at 168px and -8.4px tracking, 33px statements, translucent #0000001a buttons, 12px radii, a rounded #010101 footer and outdoor lifestyle photography."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#ffffff"
  on-primary: "#010101"
  ink-2: "#757575"
  ink-5: "#9d9d9d"
  hairline: "#cccccc"
  button-primary-bg: "#0000001a"
typography:
  display:
    fontFamily: ABCDiatype, sans-serif
    fontSize: 168px
    fontWeight: 700
    lineHeight: 132.72px
    letterSpacing: "-8.4px"
  display-mobile:
    fontFamily: ABCDiatype, sans-serif
    fontSize: 50.391px
    fontWeight: 700
    lineHeight: 39.8089px
    letterSpacing: "-2.51955px"
  heading:
    fontFamily: ABCDiatype, sans-serif
    fontSize: 128px
    fontWeight: 700
    lineHeight: 101.12px
    letterSpacing: "-6.4px"
  subheading:
    fontFamily: ABCDiatype, sans-serif
    fontSize: 19px
    fontWeight: 400
    lineHeight: 22.8px
    letterSpacing: "-0.38px"
  body:
    fontFamily: ABCDiatype, sans-serif
    fontSize: 33px
    fontWeight: 700
    lineHeight: 33px
    letterSpacing: "-0.99px"
  button:
    fontFamily: ABCDiatype, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: "-0.3px"
  link:
    fontFamily: ABCDiatype-Mono, monospace
    fontSize: 11px
    fontWeight: 400
    lineHeight: 15.4px
    textTransform: uppercase
rounded:
  xs: 8px
  sm: 12px
  md: 16px
  lg: 20px
  none: 0px
spacing:
  s1: 4px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 32px
  s9: 40px
  s10: 48px
components:
  button-primary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 45px
  button-secondary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 50px
  link:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.sm}"
    padding: 4px
  nav:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
  card:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.sm}"
    padding: 4px
  footer:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.lg}"
---

# Wolverine Worldwide

## Overview

wolverineworldwide.com is the corporate website of Wolverine World Wide, Inc., the footwear and apparel group behind Merrell, Saucony, Wolverine, Sweaty Betty, CAT Footwear, Chaco, Hush Puppies, Stride Rite, HYTEST, Harley-Davidson and Bates. The page title is "Home | Wolverine Worldwide". The measured home page is 7640px tall at 1280px wide. It opens on a rounded dark photographic hero with the headline "Make. Every Day. Better." set at 168px in bold sans, a white nav (About, Brands, Careers, Responsibility, Investors) and a small "LATEST NEWS" card for the 2025 Annual Report. Below it, a white band carries a 33px bold statement ("We design trend-right products, build iconic brands, and shape experiences that inspire people to live better.") with a grey "Learn More About Us →" button, then a giant black headline "A portfolio built for every step." with product and lifestyle thumbnails floating around it, followed by an annual report summary, a culture statement, a market snapshot, a latest-news carousel, a careers call to action and a black footer.

The identity is a typographic one: a single grotesque family (ABC Diatype) with very tight tracking, a mono companion for small caps labels, a mostly black-and-white palette, and photography of people outdoors, in motion and in the studio.

The opened homepage lists the sections in order: hero, company introduction, the portfolio headline with a product carousel, the 2025 Annual Report summary, a culture statement ("Many brands, one shared culture, limitless innovation."), a Market Snapshot with stock data, a Latest News carousel with a "View All" link to press releases, and a careers call to action ("Creating Your Future With Us" with a "Work at Wolverine" link). The footer repeats the navigation and brand links, adds Instagram and LinkedIn, legal links (Terms & Conditions, Privacy Policy, Patents, supply chain statement) and a "Manage Cookies" control. The copy voice is short, declarative and brand-forward.

## Colors

- `canvas` `#ffffff` is the page background of the content bands. `ink` `#000000` is the primary text colour (1915 measured characters); `ink-2` `#757575` (417 characters) and `ink-5` `#9d9d9d` (5) are greys for secondary text, and `hairline` `#cccccc` is the thin border colour (3 uses).
- `on-primary` `#010101` is near-black, used for button labels and as the footer background (`#010101` is the largest painted area, 3373 units). White text (157 characters) sits on the hero and footer.
- `primary` is `#ffffff` as detected, and `button-primary-bg` `#0000001a` is black at 10% opacity: the measured fill of both the "Explore Career Opportunities" and "Learn More About Us" buttons, which reads as light grey on white. Other overlay values measured are `#ffffff80`, `#00000033` and `#00000080`, used over imagery.
- No brand hue is used by the interface; colour comes from product and lifestyle photography. The site also ships cookie-consent library variables (`--cc-*`), which are not brand tokens.

## Typography

ABCDiatype (weights 400 and 700) is the family for almost everything (2134 characters), with ABCDiatype-Mono for small labels (464 characters). Tracking is tight and scales with size. Display: 168px bold, line height 132.72px, letter spacing -8.4px for "Make."; the same role is 50.391px with 39.8089px line height and -2.51955px tracking on the measured mobile pass. Heading: 128px bold, line height 101.12px, -6.4px tracking for "A portfolio built for every step." Body: 33px bold with a 33px line height and -0.99px tracking for the statement. Subheading and small copy: 19px regular, 22.8px line height, -0.38px tracking (1311 characters, the most used size). Buttons and navigation: 15px regular, 18px line height, -0.3px tracking. A 24px size (-0.72px) and a 57px size (-2.28px) also appear. The mono label style is 11px, 15.4px line height, uppercase, for tags such as "LATEST NEWS".

Weights are 400 (1958 characters) and 700 (640). ABC Diatype and its Mono are commercial typefaces from Dinamo; Helvetica Neue and a monospace such as JetBrains Mono are the nearest alternatives.

## Layout

The page is a vertical stack of full-width bands: a hero inside a rounded frame, then white bands with generous whitespace. The statement paragraph sits in a narrow column offset to the right half of the page, with its button below. The portfolio headline is set staggered, each line indented further than the previous one, with small thumbnails scattered around it at different depths. The footer is a 1453px tall black panel with 20px rounded top corners. The spacing values measured are 4px, 8px, 10px, 12px, 16px, 20px, 24px, 32px, 40px and 48px; the site's CSS defines `--unit-sm` 12px, `--spacing-unit-md` 20px and `--radius-2xs` 4px.

## Elevation & Depth

No box shadows were measured. Depth is made with translucent layers (white at 50%, black at 20% and 50%) over photographs, scattered thumbnails stacked behind the headline, and the contrast of the dark rounded hero and footer against white bands.

## Shapes

Radii are `xs` 8px, `sm` 12px (the most used, 14 elements, for cards and tags), `md` 16px, `lg` 20px (the footer's top corners are "20px 20px 0px 0px" and the hero frame is rounded), and a "12px 12px 0px 0px" variant. The measured button elements compute 0px radius, so the button component is declared with `none`; the rounded appearance in the capture belongs to the measured 12px-radius containers around them.

## Components

- **button-primary** ("Explore Career Opportunities"): `#0000001a` fill, `#010101` label in 15px regular with -0.3px tracking, 45px high; the secondary "Learn More About Us →" button is the same fill at 50px high with an arrow icon.
- **nav-link**: white 15px regular text with -0.3px tracking; on hover the opacity changes from 1 to 0.8.
- **news card (link)**: 11px uppercase mono tag over a title ("2025 Annual Report"), white on a `#0000001a` panel with 12px radius and 4px padding, with an external-link icon.
- **statement**: 33px bold, tightly tracked.
- **market snapshot and careers blocks**: stock data and a "Work at Wolverine" link, as listed on the opened homepage.
- **footer**: `#010101` background, white 16px links, 20px rounded top corners.

## Design System Architecture

No public design system, brand guideline or press kit is linked from https://wolverineworldwide.com/ (the opened page links to a Press Releases page and Investor Relations, plus the 2025 Annual Report PDF). The de-facto system is a Tailwind-style stylesheet: the shipped CSS defines `--unit-sm`, `--spacing-unit-md`, `--radius-2xs` and `--tw-*` variables, plus a cookie-consent library layer (`--cc-*`) that is not part of the brand. Tokens in this file were measured from the rendered page.

## Do's and Don'ts

- Do set headlines in bold grotesque with strongly negative tracking (-8.4px at 168px, -6.4px at 128px).
- Do keep the palette black, white and grey, and let photography supply colour.
- Do use light grey translucent buttons (`#0000001a`) with near-black labels.
- Do use the mono face at 11px uppercase for tags.
- Don't add brand colours or gradients to the interface.
- Don't use shadows; none were measured.
- Don't leave tracking at zero on large type.

## Responsive Behavior

The extraction's mobile pass recorded the "Make." display at 50.391px with 39.8089px line height and -2.51955px tracking, 366px wide, against 168px on desktop. Navigation behaviour, band stacking and touch targets on small screens were not measured. Breakpoints are not measured.

## Iteration Guide

1. Start with `#ffffff`, `#000000`, `#010101` and the grey ramp `#757575`, `#9d9d9d`, `#cccccc`.
2. Set display type in ABC Diatype bold with tracking of about -5% of the font size (-8.4px at 168px), body at 19px and labels at 11px mono.
3. Make buttons 45px to 50px high with a 10% black fill.
4. Frame the hero and footer with 20px rounded corners and scatter thumbnails around the large headline.
5. Re-run the extractor and gate after changes.
