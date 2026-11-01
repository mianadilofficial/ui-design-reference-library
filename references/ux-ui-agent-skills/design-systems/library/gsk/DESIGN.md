---
version: alpha
name: "GSK"
category: "Pharma"
description: "GSK UK home page measured live: GSK orange #f36633 buttons with 8px radius on white and warm grey #ece8e7, soft-black #151515 text in the proprietary GSK light and regular faces at 22px, and 16px-radius white cards carrying very large orange statistics."
colors:
  canvas: "#ffffff"
  page-largest: "#ece8e7"
  ink: "#151515"
  primary: "#f36633"
  on-primary: "#ffffff"
  ink-black: "#000000"
  primary-hover: "#f25218"
  card-bg: "#ffffffe6"
  footer-border: "#4a4a4a80"
typography:
  display:
    fontFamily: "\"GSK regular\", arial, helvetica, sans-serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 24px
  display-mobile:
    fontFamily: "\"GSK light\", sans-serif"
    fontSize: 28px
    fontWeight: 400
    lineHeight: 33.6px
  heading:
    fontFamily: "\"GSK light\", sans-serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 56px
  subheading:
    fontFamily: "\"GSK light\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 24px
  body:
    fontFamily: "\"GSK light\", sans-serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 26.4px
  button:
    fontFamily: GSK, sans-serif
    fontSize: 20px
    fontWeight: 700
    lineHeight: 24px
rounded:
  xs: 8px
  sm: 10px
  md: 16px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 15px
  s7: 20px
  s8: 30px
  s9: 40px
  s10: 70px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 15px 30px
    height: 54px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 15px 30px
    height: 54px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 15px 0px
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    padding: 30px
    transform: matrix(1, 0, 0, 1, 0, 0)
  footer:
    textColor: "{colors.ink}"
    borderColor: "{colors.footer-border}"
---

# GSK

## Overview

The measured page is gsk.com/en-gb/, the UK-English home page of the global biopharma company GSK. It is a clean corporate-editorial page on white and a warm light grey (`page-largest`, #ece8e7), with one saturated brand color: GSK orange (`primary`, #f36633). The fetched site shows a top navigation of Behind the Science magazine, Company, Innovation, Products, Responsibility, Investors, Media and Careers, plus utility links (Healthcare professionals, Contact us, Search, Change location, Dark mode). The extracted page height is 4351px at a 1280px viewport.

The first fold pairs an editorial story ("Behind the Science": "If 400m+ people live with COPD, why aren't we talking about it?") with a video tile and an orange "Listen to the podcast" button. A grey section with a curved top edge follows under the label "Who we are", carrying a large centered mission statement ("As a focused biopharma company, we discover, develop and deliver medicines and vaccines to create value for patients and shareholders...") and an orange "Purpose, strategy and culture" button above an underlined "Why invest in GSK?" link. Below, a carousel of white cards presents therapeutic areas, each with an uppercase label, a very large orange statistic ("7m", "~10m", "40m"), a one-line description and an underlined "Go to ..." link ending in an orange arrow. A "Behind the Science" photo-card row closes the visible page.

The capture was taken with the site's search panel open (a dark bar reading "Enter a search term..." across the first fold) and shows a round orange back-to-top control and a teal edge tab on the left; none of these are brand components and none are tokenized. The tone is professional, science-led and patient-focused, with statistics used as proof.

Imagery is scientific and human at once: a soft-focus purple-and-orange cell illustration glows behind the statistic cards, while the editorial row uses candid interview photography and a video tile with a duration badge and a pause control. The wordmark "GSK" in orange sits at the left of the header with the globe, search and menu icons at the right. The overall effect is warm and approachable for a pharmaceutical company, built from one color, one family and generous space.

## Colors

- `canvas` #ffffff and `page-largest` #ece8e7 are the white and warm-grey surfaces; `card-bg` #ffffffe6 is the 90%-alpha white of cards.
- `ink` #151515 is the main text color (a soft black, by far the most-read); `ink-black` #000000 is pure black used on a few elements.
- `primary` #f36633 is GSK orange (also declared in the page's root variables as `--gsk-orange`). It fills buttons, colors statistics and arrows, and is used for the logo. `on-primary` #ffffff is the label on it. `primary-hover` #f25218 is the measured hover fill.
- A teal #17717d appears in a small number of elements (the side tab) and a dark translucent #3a3a3ae6 and #151515bf form the header and overlay scrims; these are utility surfaces and are not tokenized.
- `footer-border` #4a4a4a80 is a half-alpha grey rule.

Swiper's default blue `--swiper-theme-color` #007aff is declared in the root but is a library default, not a brand color.

## Typography

GSK uses its own proprietary family loaded as separate files named `GSK light`, `GSK regular`, `GSK` (700) and `GSKCombined` (700), with Arial and Helvetica as fallbacks. The root also defines `--sans-serif-regular` as "GSK regular", arial, helvetica, sans-serif and `--sans-serif-bold` as "GSK bold", arial, helvetica, sans-serif.

- `display` is GSK regular 22px, weight 400, line height 24px (`display-mobile` is GSK light 28px, line height 33.6px, which is the mobile h1).
- `heading` is GSK light 48px, weight 400, line height 56px.
- `subheading` is GSK light 18px, line height 24px.
- `body` is GSK light 22px, weight 400, line height 26.4px (the large mission statement and card copy).
- `button` is GSK 20px, weight 700, line height 24px.

The weight axis is carried by file choice: light for most reading text (1895 characters measured in GSK light versus 1015 in regular), regular for headings and navigation, bold for buttons and links. The measured size set is 18px (most used), 22px, 13px, 17px, 36px, 20px, 16px, 14px, 48px, 28px, 60px and 100px; the 100px size is the large statistic numeral. A substitute should be a rounded geometric sans with a distinct light weight.

## Layout

Content runs in a centered container with large vertical rhythm. The hero is a two-column story: text and button left, video right. The mission block is a single centered column with wide line length, followed by a horizontally scrolling card carousel with previous/next arrows and a thin orange progress rule. Section separators use a curved top edge on the grey band rather than a straight line.

The spacing scale is 1, 2, 6, 8, 10, 15, 20, 30, 40 and 70px (`s1`-`s10`); cards use 30px padding and buttons use padding 15px 30px at a height of 54px. Footer rules use `footer-border`.

## Elevation & Depth

No box shadows were measured. Depth comes from the tone steps (white cards on the `page-largest` grey band), from the 90%-alpha card fill that lets a blurred purple cell illustration show through, and from the curved band edge. Borders recorded are #000000, #4a4a4a80, #d6d6d6 and #151515, each used once.

## Shapes

The radius scale is `xs` 8px (buttons), `sm` 10px, `md` 16px (cards, video and photo tiles) and `pill` 9999px, plus a 100% radius for circular controls. Primary buttons are therefore slightly rounded rectangles (8px, height 54px), not pills. Cards at 16px are the dominant rounded shape.

## Components

- **button-primary**: fill `primary` (#f36633), text `canvas`, GSK 20px/700, padding 15px 30px, height 54px, radius 8px ("Listen to the podcast", "Purpose, strategy and culture").
- **button-primary-hover**: fill `primary-hover` (#f25218).
- **button-secondary**: same measurement as the primary, a second orange button instance.
- **link**: text `ink`, GSK 20px/700 with padding 15px 0px, underlined, often followed by an orange arrow.
- **card**: fill `card-bg`, text `ink`, radius 16px, padding 30px; holds an uppercase label, a large orange statistic, a sentence and a link.
- **footer**: text `ink`, border `footer-border`.

## Design System Architecture

No public design-system, brand-guideline or press-kit page is linked from the home page; the closest items found by the fetch were the Media library, Media contacts, Media statements, Press releases and Podcasts under Media. The shipped CSS has a very small variable layer: `--gsk-orange` (#f36633), `--sans-serif-regular`, `--sans-serif-bold` and Swiper's navigation variables (`--swiper-theme-color`, `--swiper-navigation-size` 44px). The rest of the system lives in compiled component styles, so the numbers in this document are measurements of the live page. The site offers a "Dark mode" utility link; the dark theme was not measured and is not described.

## Do's and Don'ts

Do:
- Keep orange for actions, statistics and arrows; keep text soft black #151515.
- Use the light weight for reading text and set statistics at the very large size.
- Round cards at 16px and buttons at 8px.
- Use warm grey #ece8e7 for banded sections with a curved top edge.

Don't:
- Use Swiper's #007aff or other library defaults.
- Turn the search overlay, back-to-top control or side tab into brand components.
- Use pill buttons; the measured primary is 8px.

## Responsive Behavior

Measured at the mobile viewport: the h1 is GSK light 28px with line height 33.6px and body text is 22px. Other mobile behavior (navigation collapse to icons, carousel card count) was not measured.

## Iteration Guide

1. Set surfaces: white, `page-largest` and white 90% cards.
2. Write the story headline in GSK light and add one orange 8px-radius button.
3. Show proof with a large orange statistic, uppercase label and underlined link with arrow.
4. Keep body type light and text color #151515.
5. Check that orange appears only on actions, numerals and arrows.
