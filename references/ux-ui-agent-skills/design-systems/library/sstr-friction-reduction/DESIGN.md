---
version: alpha
name: "SSTR Friction Reduction Systems"
category: "Tech & AI"
description: "SSTR (sstr.tech/en), a drilling-engineering company's site: ABC Monument Grotesk uppercase headlines at 42.67px with -1.49px tracking, a #18191b and #eff0f1 dark/light section rhythm, a single #e75326 orange with #0c0c0c text on 55px-tall angular buttons and a three-tier brand/alias/mapped CSS token system."
colors:
  canvas: "#18191b"
  page-body: "#eff0f1"
  ink: "#eff0f1"
  primary: "#e75326"
  on-primary: "#0c0c0c"
  surface-3: "#c3c4c8"
  ink-secondary: "#2f3032"
  ink-4: "#747576"
  footer-bg: "#201d1d"
typography:
  display:
    fontFamily: "\"ABC Monument Grotesk\", Arial, sans-serif"
    fontSize: 42.6667px
    fontWeight: 400
    lineHeight: 43.5627px
    letterSpacing: "-1.49333px"
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"ABC Monument Grotesk\", Arial, sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 32.672px
    letterSpacing: "-1.12px"
    textTransform: uppercase
  subheading:
    fontFamily: "\"ABC Monument Grotesk\", Arial, sans-serif"
    fontSize: 21.3333px
    fontWeight: 400
    lineHeight: 24.896px
    letterSpacing: "-0.426667px"
    textTransform: uppercase
  body:
    fontFamily: "\"ABC Monument Grotesk\", Arial, sans-serif"
    fontSize: 17.7778px
    fontWeight: 400
    lineHeight: 21.3333px
  button:
    fontFamily: "\"Abc Monument Grotesk\", Arial, sans-serif"
    fontSize: 10.6667px
    fontWeight: 500
    lineHeight: 10.6667px
    letterSpacing: 0.32px
    textTransform: uppercase
  input:
    fontFamily: Arial, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 10.67px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 3.56px
  s3: 4.98px
  s4: 5.33px
  s5: 5.69px
  s6: 6.4px
  s7: 7.11px
  s8: 8px
  s9: 8.89px
  s10: 10.67px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 55px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 55px
  link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.ink-4}"
    rounded: "{rounded.none}"
  text-input:
    textColor: "{colors.page-body}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 8px 12px
    height: 38px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.ink-secondary}"
    rounded: "{rounded.none}"
---

# SSTR Friction Reduction Systems

The measured page is `https://sstr.tech/en/`, titled "SSTR — Friction Reduction Systems", English, 12,510px tall with 1,050 visible elements. The header logotype in the capture reads "CCTP" beside a boxed mark; the footer shows a Moscow street address ("22 Akademika Pilyugina St., Moscow, 117393, Russia"). The page presents engineered friction-reduction tools for drilling: a hero headline "PUSHING THE LIMITS OF DRILLING" with the line "Engineered systems that control friction, vibration, and load transfer — so the BHA stays stable and longer reaches stay on plan.", an About section "FROM WELL DATA TO VERIFIED FIELD RESULTS — ONE ENGINEERING LOOP.", three capability columns (EQUIPMENT, ENGINEERING & MODELING, FIELD SUPPORT), and a "BY THE NUMBERS" block, "RESULTS, PROVEN ON REAL PROJECTS", with a -48% torque figure and a scatter chart (BIT TORQUE with and without FRS). A red "Site of the Day" side tab in the capture is a third-party award widget and is not documented as part of the brand.

## Overview

The design is industrial and technical: dark photography of machined parts, large uppercase grotesque headlines, hairline-ruled grid cells, small monospaced labels in square brackets ("[ ABOUT US ]", "[ BY THE NUMBERS ]", "[ 27 → 14 KN·M ]"), outlined octagon icons, and one hot orange for every action. Sections alternate: a dark hero (`#18191b` family), a light section (`#eff0f1`), then dark again. Copy is terse and quantitative, written in short declarative engineering sentences ("We model the run for the specific well — all constraints, all risks — and turn that into a configuration you can trust.").

## Colors

Background areas: `#eff0f1` (area weight 21,557), `#18191b` (10,147), `#c3c4c8` (4,523), `#2f3032` (3,197), `#e0e1e3` (1,242), `#18191b80` (1,154). Text by characters: `#2f3032` (1,198), `#0c0c0c` (1,014), `#eff0f1` (798), `#747576` (698), `#c3c4c8` (641).

- `canvas` `#18191b` (dark section ground) and `page-body` `#eff0f1` (light section ground); `ink` `#eff0f1` is the text on dark, `ink-secondary` `#2f3032` the body text on light and `#0c0c0c` the headline color on light.
- `primary` `#e75326`: orange; fill of the VIEW CASES and LEARN MORE buttons. `on-primary` `#0c0c0c`: the button text.
- `surface-3` `#c3c4c8`: light grey for rules and chart labels; `ink-4` `#747576`: grey label text (BIT TORQUE); `footer-bg` `#201d1d`.

The CSS declares the full ramps behind these: `--brand-grey-100 #eff0f1` through `--brand-grey-900 #0c0c0c` (with 150, 200, 250, 300, 400, 500, 600 `#464749`, 700 `#2f3032`, 750 `#222326`, 800 `#18191b`, 850 `#141415`) and `--brand-orange-50 #ffefea` through `-900 #6b2612` (500 `#fe5b2a`, 600 `#e75326`). Status colors are declared as `--mapped-icon-success #7bfe2a` and `--mapped-border-error #fe2a2a`; they are not on the measured home screen.

## Typography

One family: ABC Monument Grotesk, variable (weights 200 to 1000 loaded), with Arial fallbacks and a Cyrillic Mono Variable cut for small labels (187 characters, 9.6px). Characters: 3,356 in ABC Monument Grotesk, 587 in Arial. Weights measured: 400 (4,115) and 500 (234); the CSS names `--brand-weight-light 300`, `regular 400`, `medium 500` and `bold 700`.

- `display`: 42.6667px, weight 400, line-height 43.5627px, -1.49333px tracking, uppercase. `display-mobile`: 32px, 32.672px, -1.12px.
- `subheading`: 21.3333px, 400, line-height 24.896px, -0.426667px, uppercase (h3 EQUIPMENT).
- `body`: 17.7778px, 400, line-height 21.3333px.
- `button`: 10.6667px, weight 500, line-height 10.6667px, 0.32px tracking, uppercase.
- `input`: Arial 14px, line-height 20px.

Other sizes measured: 12.4444px (1,452 characters, the most used), 17.0667px, 14.2222px and 28.4444px with -0.995556px tracking (the "-48%" style figures). Square-bracket labels are set at 10.6667px with 1.06667px tracking.

## Layout

The layout is a bordered column grid: the About and numbers sections sit inside a centred frame with 1px vertical rules at both edges and horizontal rules between rows, with three equal columns under the About heading and a two-column split (statistic left, chart right) under the numbers heading. Measured gaps: 7.11px (108 elements), 14.22px (60), 28.44px (40), 5.33px (26), 6.4px (16). Paddings: 28.44px (74), 56.89px (42), 21.33px (14), 14.22px (13). All sizes are multiples of a 1/16 unit scale (`--size-unit: 16`, with `--brand-scale-*` em steps). The header holds the logo, CASES, ABOUT, PRODUCTS, ENGINEERING, CONTACTS, a language globe and a CONTACT link.

## Elevation & Depth

One shadow measured: `rgba(0, 0, 0, 0.1) 0px 0px 12px 0px`. Otherwise the surface is flat and layered by tone and by `#18191b80` (50% dark) overlays on photography. Hairline borders (`#c3c4c8` on 3 elements, `#2f3032` on 1) provide structure.

## Shapes

Radii measured: `10.6667px` (10 elements) and `1422.22px` (4 elements, circular controls). Buttons measure `0px` radius, but the capture shows them with clipped, chamfered corners, and the three capability icons are chamfered octagon outlines; the extraction records no clip-path value for the button's own box (the `beforeShape` clip-path is `none` on the mobile primary CTA), so the angled corners are not measured and no value is stated for them.

## Components

- **Primary button** (`button-primary`): `#e75326` fill, `#0c0c0c` 10.6667px/500 uppercase text with a return-arrow glyph, 55px high, 145px wide, padding 0, radius 0. "VIEW CASES", "LEARN MORE". A smaller variant (`#fe5b2a` fill, `#c3c4c8` text, 33px high) is recorded for "VIEW CASE".
- **Input**: Arial 14px, `#eff0f1` text, padding `8px 12px`, 38px high, radius 0.
- **Section tag**: square brackets around uppercase 10.67px labels with 1.07px tracking.
- **Capability cell**: outlined octagon icon, uppercase 21.33px title, three-line 12.44px description.
- **Statistic**: very large figure ("-48%") over a label ("Torque"), with a button and a dot-plot chart using orange for "WITH FRS" and grey for "WITHOUT FRS".
- **Footer**: `#201d1d` ground, `#2f3032` text 12.44px, 417px high.

## Design System Architecture

No public design-system site or brand guideline was opened; `_research` records none. The site's own CSS carries a three-tier token system in `:root` (189 variables): `--brand-*` raw values (grey and orange ramps, weights, font family, spacing scale), `--alias-*` aliases that point at brand values (`--alias-brand-600: var(--brand-orange-600)`, `--alias-grey-900`), and `--mapped-*` semantic roles that point at aliases (`--mapped-text-on-action`, `--mapped-border-action`, `--mapped-text-headings`, `--mapped-border-default`, `--mapped-padding-md`, `--mapped-border-width-sm/md/lg` of 0.0625em, 0.125em and 0.25em). Typography roles are declared as `--type-paragraph-*` sizes in em, and `--button-ease-click: cubic-bezier(0.4, 0, 0.2, 1)` defines the click easing.

## Do's and Don'ts

Do alternate `#18191b` and `#eff0f1` sections. Do use a single orange `#e75326` with near-black `#0c0c0c` text for every action. Do set headlines in uppercase ABC Monument Grotesk with negative tracking. Do bracket small labels. Do back claims with figures and charts.

Don't use more than one accent; status greens and reds in the CSS belong to states. Don't round buttons through border-radius; the measured radius is 0px. Don't add decorative shadows. Don't present the award widget as part of the brand.

## Responsive Behavior

Mobile pass: h1 32px with 32.672px line-height and -1.12px tracking (42.6667px on desktop); h2 the same at 131px height; body 20px with 24px line-height (17.7778px on desktop); the primary button keeps the `#e75326` fill and 10.6667px label. Mobile font sizes by characters: 14px (1,145), 19.2px (643), 12px (564), 20px (491), 16px (380). Column counts and navigation behavior on mobile are not measured.

## Iteration Guide

1. Alternate dark `#18191b` and light `#eff0f1` sections with 1px grid rules.
2. ABC Monument Grotesk uppercase headlines, -1.49px tracking at 42.67px; 17.78px body.
3. One orange `#e75326` button, black text, 55px high, with a return-arrow icon.
4. Bracketed micro-labels and quantified statistics with charts.
5. Write copy as short engineering statements with units (kN·m, depth in metres) and bracketed section tags.
6. Verify with `node web/scripts/verify-designs.mjs --slug=sstr-friction-reduction`.
