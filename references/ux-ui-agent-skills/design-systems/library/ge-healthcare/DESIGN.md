---
version: alpha
name: GE HealthCare
category: "Healthcare & Wellness"
description: "GE HealthCare (gehealthcare.com, US) is a medical technology site in Source Sans Pro 400 (48px headlines, 18px body), with GE purple #6022a6 links and top bar, lavender #f4f1f8 category bands with 16px-radius cards, dark #222222 headings, 8px-radius 44px buttons and clinical photography."
colors:
  canvas: "#ffffff"
  ink: "#5b5b67"
  ink-strong: "#222222"
  primary-hover: "#512286"
  on-primary: "#ffffff"
  primary: "#6022a6"
  surface-lavender: "#f4f1f8"
  nav-bg: "#222222b3"
typography:
  display:
    fontFamily: SourceSansPro-Regular
    fontSize: 48px
    fontWeight: 400
    lineHeight: 56px
    letterSpacing: "-1.25px"
  display-mobile:
    fontFamily: SourceSansPro-Regular
    fontSize: 28px
    fontWeight: 400
    lineHeight: 36px
    letterSpacing: "-0.75px"
  subheading:
    fontFamily: SourceSansPro-Regular
    fontSize: 22px
    fontWeight: 400
    lineHeight: 32px
  body:
    fontFamily: SourceSansPro-Regular
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: SourceSansPro-Regular
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-secondary:
    fontFamily: SourceSansPro-Regular
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 8px
  md: 16px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 8px
  s4: 10px
  s5: 13px
  s6: 16px
  s7: 18px
  s8: 24px
  s9: 28px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    padding: 13px 24px 12px
    height: 44px
    borderColor: "{colors.canvas}"
  button-primary-hover:
    textColor: "{colors.primary-hover}"
  select-locale:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 1px
    height: 44px
    borderColor: "{colors.ink}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink-strong}"
  nav-link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.button}"
  card:
    backgroundColor: "{colors.surface-lavender}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.md}"
    padding: 48px
---

## Overview

The US home page of GE HealthCare (https://www.gehealthcare.com/en-us, title "English | GE HealthCare (United States)", measured at 1280px wide with a 5775px scroll height) presents a global medical-technology company in a calm, clinical way. A purple country-selection bar ("Select another country or region to view content specific to your location", a "Global English" dropdown, a white "Continue" button and a close icon) tops the page; below it a white 80px header carries the purple monogram logo with "GE HealthCare" and the menu AI Solutions, Products, Services, Support, Shop and About Us, followed by search, "US / EN", account and cart icons. A tall photographic hero shows a clinician at a workstation viewing imaging scans. A lavender band titled "Explore by category" lists white tiles (Imaging, Ultrasound, Anesthesia Delivery, Diagnostic ECG, Maternal Infant Care, Patient Monitoring, Digital Solutions) in a horizontal carousel, then a "What's new" row of four article cards, and a statement section "Delivering precision care through innovation".

The voice is plain, assured and human-centred: "Three ways to see biology in action", "Healthcare has plenty of data. The real challenge is making it work together" and "We're committed to help solve healthcare's toughest challenges". Purple is the only brand colour; everything else is white, lavender-tinted grey and dark grey type.

## Colors

`{colors.primary}` (#6022a6) is the GE HealthCare purple: it carries 2459 of background area (the top bar), all links ("Read more", "AI-enabled medical devices"), the "Continue" button text and a 2px border and the carousel arrow. On hover the measured text colour darkens to #512286 (`{colors.primary-hover}`), including nav labels. The generator had assigned `primary` to the white fill of the "Global English" country selector; that control is a locale form field, so the purple above is used instead and white is `{colors.on-primary}` on purple.

Surfaces: `{colors.canvas}` (#ffffff, 4759 area), `{colors.surface-lavender}` (#f4f1f8, 1453; the category band and cards, with a 16px radius at 48px padding) and `#fbf9fd` (8). Text: `{colors.ink}` (#5b5b67, 1429 characters, body and secondary copy), `{colors.ink-strong}` (#222222, 855, headings, nav labels and body on cards), purple (251) for links and white (95) on the purple bar. `{colors.nav-bg}` (#222222b3) is the translucent header colour. Border colours: #ffffff, #6022a6 and #5b5b67. No shadows were measured on page elements.

## Typography

Source Sans Pro is the family, loaded as SourceSansPro-Regular, SourceSansPro-Light and "Source Sans Pro" at 400 and 700 (SourceSansPro-Regular covers 2614 characters, Light 16). It is an open-source family by Adobe. Weights by characters: 400 (2478), 700 (117), 600 (19), 300 (16). Sizes: display 48px/56px with -1.25px tracking (h1 and h2), 36px and 88px at the same tracking, 28px/36px with -0.75px tracking on mobile, subheading 22px/32px, body 18px/28px (0.36px tracking on 91 characters), button 16px/24px and bold 16px/24px for the "Continue" link button. Headings are sentence case at weight 400, not bold.

## Layout

The header is 80px high on desktop and 60px on mobile. Content follows a 24px desktop grid gutter (`--mdc-layout-grid-gutter-desktop`, a Material grid with 66px tablet columns). Measured gaps: 8px (97), 24px (32), 16px, 4px, 32px; paddings 42px (12), 32px (10), 16px, 10px, 96px (6), 24px, 48px. Sections alternate white and lavender bands; the "What's new" cards are four-up with image tops and 22px titles, followed by a statement block with a small eyebrow line, a 48px headline and 18px body paragraphs containing a purple inline link. The footer is 537px tall with links such as News and Press, Investors and Suppliers.

## Imagery and Content

Photography is documentary and clinical: a clinician at a multi-monitor imaging workstation, a patient being scanned in a bright suite, hospital staff at a desk, and a surgical team in masks. Images are real people at work, and the hero image runs edge to edge without text on it. The line icons on category tiles are single-weight outline glyphs in dark grey. Eyebrow lines ("Explore by category", "What's new", "We're committed to help solve healthcare's toughest challenges") are set at 16px in #222222 above each section, and section copy mentions concrete facts such as over 130 years of innovation and the FDA's list of AI-enabled medical devices. Story titles are full sentences rather than keywords, and the "More on the Future of Healthcare" link closes the news row.

## Elevation & Depth

Flat. No box shadow was measured on the page. Separation comes from the purple top bar, the lavender #f4f1f8 band, white tiles on that band and photography. A search-widget variable, `--aa-panel-shadow`, is published for the autocomplete panel (`0 0 0 1px rgba(35,38,59,.1), 0 6px 16px -4px rgba(35,38,59,.15)`) but was not measured on a visible element here.

## Shapes

Radii measured: 8px (15 elements: buttons and category tiles), 16px (7: cards), 4px (1: the country selector) and 50% (1: the round arrow button). The "Continue" button is 8px, the cards 16px, the select 4px. `--ais-border-radius-full` is 9999px for search UI.

## Components

- Primary button ("Continue"): white fill, purple #6022a6 bold 16px text, 8px radius, 13px 24px 12px padding, 44px high, 111px wide; the text goes #512286 on hover.
- Locale select ("Global English"): white, #222222 text, 1px solid #5b5b67 border, 4px radius, 44px high, border turns purple on hover.
- Header nav: 80px, translucent dark tint, 16px labels in #222222 that turn #512286 on hover.
- Category tile: white, 8px radius, line icon above a 16px centre-aligned label.
- Story card: 4-up with image, 22px title in #222222; "More on the Future of Healthcare" as a purple link with a chevron.
- Text link: purple 18px/28px.
- Surface card: #f4f1f8, 16px radius, 48px padding.

## Design System Architecture

No public design-system or brand guideline page was opened for this entry. Shipped CSS shows a Material Design Components grid (`--mdc-layout-grid-*` variables), Algolia InstantSearch/Autocomplete variables (`--ais-*`, `--aa-*`) for the site search and chat, and custom styling on top. The brand tokens, purple, lavender and the typographic scale, are applied directly, not through documented root variables.

## Do's and Don'ts

- Do use #6022a6 for links and the top bar; darken to #512286 on hover.
- Do set headlines in Source Sans Pro 400, sentence case, with -1.25px tracking at 48px.
- Do separate sections with white and #f4f1f8 bands and keep corners at 8px or 16px.
- Do pair each story with a clinical photograph and a short plain-language title.
- Don't add shadows or gradients; none were measured on page elements.
- Don't use the locale selector's styling for the main call to action.

## Responsive Behavior

At 390px the h1 and h2 drop to 28px/36px with -0.75px tracking, body to 16px/24px, and the header to 60px. The locale button spans 348px. Sizes by characters on mobile: 16px (1128), 18px (995), 14px (277), 28px (91), 26px (76), 48px (16). Column counts and carousel behaviour on mobile were not measured.

## Iteration Guide

1. Start from white, text in #5b5b67 and headings in #222222 in Source Sans Pro.
2. Use #6022a6 for links and the single accent surface; hover #512286.
3. Add lavender #f4f1f8 bands with white tiles at 8px radius for navigation categories.
4. Keep controls 44px high.
5. Anything not listed (dark mode, focus states, mobile navigation) was not measured.
