---
version: alpha
name: CrossFit
category: "Sports & Fitness"
description: "CrossFit.com home: light grey #f2f2f2 page with black #000000 header and #1a1a1a ink, CrossFit blue #075dc6 pill CTAs at 100px radius, uppercase PF DIN headlines (96px, 56px, 36px) over Inter body at 16px, with full-bleed gym photography."
colors:
  canvas: "#f2f2f2"
  ink: "#1a1a1a"
  primary: "#075dc6"
  on-primary: "#ffffff"
  header-black: "#000000"
  surface-light: "#eeeeee"
  gray-dark: "#6d6d6d"
  gray-mid: "#5f5f5f"
  gray-strong: "#333333"
  gray-nav: "#8e8e93"
  gray-light: "#cccccc"
  hairline: "#dcdcdc"
  blue-pale: "#b5cfee"
  blue-hover: "#397dd1"
  card-text: "#181818"
typography:
  display:
    fontFamily: PFDIN, sans-serif
    fontSize: 96px
    fontWeight: 500
    lineHeight: 96px
    textTransform: uppercase
  display-mobile:
    fontFamily: PFDIN, sans-serif
    fontSize: 56px
    fontWeight: 500
    lineHeight: 56px
    textTransform: uppercase
  subheading:
    fontFamily: PFDIN, sans-serif
    fontSize: 36px
    fontWeight: 500
    lineHeight: 36px
    textTransform: uppercase
  body:
    fontFamily: Inter, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: PFDIN, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 14px
    letterSpacing: 0.56px
    textTransform: uppercase
  utility:
    fontFamily: Inter, Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 14px
  link:
    fontFamily: Inter, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 20px
    textTransform: uppercase
  input:
    fontFamily: "\"Open Sans\", \"Helvetica Neue\", Arial, Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 4px
  md: 5px
  lg: 8px
  xl: 36px
  pill: 100px
spacing:
  s1: 8px
  s2: 12px
  s3: 16px
  s4: 20px
  s5: 24px
  s6: 30px
  s7: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 24px
    height: 38px
  button-utility:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.gray-light}"
    typography: "{typography.utility}"
    rounded: "{rounded.lg}"
    padding: 12px 16px
    height: 44px
    boxShadow: rgba(255, 255, 255, 0.03) 0px 28px 40px 0px, rgba(255, 255, 255, 0.03) 0px 7px 5px 0px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.header-black}"
    textColor: "{colors.gray-nav}"
  text-input:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.gray-nav}"
    typography: "{typography.input}"
    rounded: "{rounded.pill}"
    padding: 10px 24px 10px 38px
    height: 46px
    borderColor: "{colors.gray-strong}"
  card:
    textColor: "{colors.card-text}"
    rounded: "{rounded.sm}"
    borderColor: "{colors.hairline}"
  footer:
    textColor: "{colors.ink}"
    borderColor: "{colors.hairline}"
---

## Overview

CrossFit is the CrossFit.com home page (title "CrossFit | CrossFit: The Path to Better Health"). It is a mix of daily content and a conversion funnel: the page opens on a black header with the white CrossFit wordmark and the menu "GETTING STARTED, EDUCATION & COURSES, GYM OWNERS, WORKOUTS, EXPLORE, GAMES, STORE", an "OPEN A CROSSFIT GYM" link at the top right, a map pin and an account icon. Directly under it sits the "WORKOUT OF THE DAY" block (date line "FRIDAY 261009", the workout text, resource links and an app download panel for the App Store and Google Play), followed by a hero photograph of an athlete with the line "TRAIN WITH PURPOSE. FIND YOUR GYM." and a pill-shaped location search ("Search by location, zip code or gym..."), "Use Current Location" and "VISIT THE CROSSFIT MAP".

Sections that follow, from the page text read: three reassurance columns ("No Gimmicks. Just What Works.", "Hard Work, Scaled to You.", "Community That Holds You Accountable."); a dark world-map band "A GLOBAL COMMUNITY, CLOSER THAN YOU THINK" ("With over 9,000 CrossFit affiliates worldwide...") with a "FIND A GYM" button; "What Is CrossFit?", "Become a Coach" and "Gear Built for the Work" tiles with "Learn More", "Explore Courses" and "Visit the Store"; and a "More Than a Workout" testimonial carousel counting "1 / 6" with member quotes and gym names.

Voice is direct and imperative: "Stop chasing random workouts. Start training with purpose." The page measures 5,838px tall with 602 visible elements. Photography is dark, high-contrast gym imagery with people in motion, set full width.

## Colors

- **Canvas `#f2f2f2`** is the page background (area weight 5,120) and is declared `--cf-light-gray`; `#eeeeee` (1,828) is the lighter content band and `#ffffff` (1,369) the white panels.
- **Header black `#000000`** (2,326) fills the header and the dark world-map band; **ink `#1a1a1a`** (declared `--color-brand-black`) is the main text colour (3,156 characters) and the fill of utility buttons (1,729).
- **Primary `#075dc6`** is CrossFit blue (`--color-brand-blue`, `--cf-blue`). It fills the pill CTAs "FIND A GYM NEAR YOU", "START GETTING STRONGER", "FIND YOUR LOCAL GYM" and "FIND A GYM" with white text, and colours 122 characters of text links. A pale `#b5cfee` fills the "SUBSCRIBE" button; hover links show `#397dd1`.
- **Greys.** `#6d6d6d` (361 characters, `--cf-dark-gray`), `#5f5f5f` (358), `#333333` (314), `#8e8e93` (172, header menu text), `#cccccc` (139), and the hairline `#dcdcdc` (6 borders; `--color-neutral-grey200`).
- **Declared scales.** The variables define full ramps: `--cf-blue-dark-10` to `-80`, `--cf-blue-light-10` to `-90`, `--cf-red`, `--cf-red-dark-*`, `--cf-red-light-*`, `--cf-green #3a8138`, `--cf-green-secondary #67c607`, `--cf-orange #f59032`, `--cf-yellow #ffba08`, `--cf-sea-green`, `--cf-burgundy`, `--cf-navy`, and `--cf-white-10` to `-90` / `--cf-black-10` to `-90` alpha steps. They are declared, not all measured on the home page.

## Typography

Three families. **PF DIN** (`PFDIN`, 584 characters; `--cf-header-font-stack`) is used for uppercase headlines and the pill buttons; there is also an expanded cut (`--header-expanded-font-stack: "PFDINExpanded"`). **Inter** (6,197 characters; `--body-font-stack`) carries body copy, loaded at 400, 500, 600 and 700. **Roboto Mono** (30 characters; `--cf-caption-font-stack`) is used for captions. The form field uses Open Sans.

- **Display, PFDIN 96px / 500, line-height 96px, uppercase:** "TRAIN WITH PURPOSE. FIND YOUR GYM.", white on the photograph. Mobile: 56px / 56px.
- **Section heading, PFDIN 56px / 500, uppercase:** "A GLOBAL COMMUNITY, CLOSER THAN YOU THINK" (white); mobile sizes list 56px as well.
- **Subheading, PFDIN 36px / 500, uppercase:** "WORKOUT OF THE DAY" in `#1a1a1a`.
- **Body, Inter 16px / 400, line-height 24px.** **Link, Inter 16px / 600, line-height 20px, uppercase** ("FRIDAY 261009").
- **Button, PFDIN 14px / 500, letter-spacing 0.56px, uppercase.** Utility button: Inter 14px / 500.
- Other sizes by characters: 16px (5,241), 14px (558), 12px (416), 20px (214), 56px (108), 24px (91), 36px (53), 10px (51), 28px (45). Letter-spacings: 0.6px at 14px (446 characters), 0.64px at 16px (153), 0.32px at 16px (73).

**Substitutes.** PF DIN is licensed; Inter and Roboto Mono are the other loaded families; the stack ends in Helvetica, Arial, sans-serif.

## Layout

The theme declares container widths `--cf-mainsite-container-sm: 640px`, `-md: 768px`, `-lg: 1024px`, `-xl: 1280px`, a main-site gutter of 130px (20px for the small gutter) and a 4px spacing unit (`--cf-spacing`). The header is 118px high. The page stacks the Workout-of-the-Day band on `#f2f2f2`, a full-bleed hero, a three-column reassurance row, a black map band with two columns (text left, map right) and three tiles, then the testimonial carousel.

Gaps: 8px (62 uses), 12px (38), 16px (22), 32px (20), 20px (16), 24px (10). Paddings: 24px (33), 12px (11), 16px (11), 30px (7), 8px (7), 48px (6), 80px (5). A footer strip of "2 Comments / EXPAND / VIEW ALL WORKOUTS" measures 89px with a 1px `#dcdcdc` border.

## Elevation & Depth

Shadows are faint: `rgba(0, 0, 0, 0.03) 0px 28px 40px 0px, rgba(0, 0, 0, 0.03) 0px 7px 5px 0px` (5 uses), a white-alpha version of the same pair on the dark utility button (1 use) and `rgba(0, 0, 0, 0.2) 0px 0px 5px 0px` (1 use). Depth otherwise comes from the black/grey/white band changes and overlaid text on photographs with a dark gradient.

## Shapes

Radii: 4px (33 uses, cards), 5px (18), 100px (10, pills), 100% (4, circles), 36px (2), 8px (1) and 2px (1). Primary CTAs and the search field are fully pill-shaped (100px); the language utility button is 8px; cards are 4px.

## Components

- **Primary CTA.** `#075dc6` fill, white PF DIN 14px uppercase text with 0.56px tracking, radius 100px, padding 12px 24px, height 38px. A larger variant, "START GETTING STRONGER", is 16px / 400 with 8px 28px padding and 48px high.
- **Utility button.** The "Change Language: English" selector: `#1a1a1a` fill, `#cccccc` Inter 14px / 500 text, radius 8px, 44px by 263px. It is a widget over the hero, not a CTA.
- **Search field.** White, 100px radius, 46px high, 340px wide, 1px `#333333` border, Open Sans 16px, padding 10px 24px 10px 38px, with a search icon at the left.
- **Header.** Black, 118px, Inter 12px / 600 uppercase labels in `#8e8e93` that turn white on hover.
- **Workout card.** Light panel with a PF DIN 36px title, Inter text and underlined blue resource links.
- **Card.** 4px radius with a `#dcdcdc` border.
- **Expand link.** "EXPAND" is `#1a1a1a` and turns `#397dd1` on hover; "VIEW ALL WORKOUTS" is an outlined pill that fills `#1a1a1a` with white text on hover.

## Design System Architecture

No public design-system documentation was found on the page opened (https://www.crossfit.com/). The site ships a tokenised CSS layer in root variables: brand colours (`--color-brand-black`, `--color-brand-white`, `--color-brand-blue`), semantic colours (`--color-semantic-info-dark`), button states (`--color-button-black-pressed`, `--color-button-black-focus`, `--color-button-red-disabled`, `--color-button-white-disabled-strokes`, `--color-button-white-pressed`), neutrals (`--color-neutral-grey200`), the `--cf-*` ramps, three font stacks, `--base-font-size: 10px`, container widths and gutters. Component states (pressed, focus, disabled) are tokenised per button colour.

## Do's and Don'ts

- Do use `#075dc6` pills with white uppercase PF DIN for primary actions and keep corners at 100px.
- Do set headlines in uppercase PF DIN 500 and body in Inter 16px / 24px.
- Do alternate `#f2f2f2`, `#eeeeee`, white and `#000000` bands with full-bleed photography.
- Do write imperative, plain copy ("Train with purpose.").
- Don't add heavy shadows; measured shadows are 3% black.
- Don't treat the language selector as the primary CTA.

## Responsive Behavior

Measured at 390px: the h1 is 56px (desktop 96px), 358px wide and 168px high; the blue "FIND A GYM NEAR YOU" CTA is 358px wide and 38px high (full width of the column); the black header is 74px high (desktop 118px). Mobile sizes by characters: 16px (3,878), 12px (1,502), 20px (216), 28px (107), 36px (99), 24px (91). Layout changes of the columns and the map band at 390px were not measured (no band or layout data in this extraction).

## Iteration Guide

1. Canvas `#f2f2f2`, ink `#1a1a1a`, header `#000000`, primary `#075dc6`.
2. Headlines in PFDIN 500 uppercase (96 / 56 / 36px); body Inter 16px / 24px.
3. Pill CTAs at 38px high (14px, 0.56px tracking); search field at 46px with a 1px `#333333` border.
4. Build: header, workout band, hero with search, three columns, black map band, tiles, testimonials.
5. Use the `--cf-*` ramps for any new colour and measure before adding tokens.
