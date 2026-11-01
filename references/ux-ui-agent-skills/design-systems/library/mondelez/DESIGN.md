---
version: alpha
name: "Mondelēz International"
category: "Food & Beverage"
description: "Mondelēz International corporate site in brand purple #4f2170 with green #287819 headings on white, set in the custom MDLZ BITE TYPE display face (100px uppercase) over Calibri 21px body, with outlined pill buttons of 40px radius and a brand-logo strip."
colors:
  canvas: "#ffffff"
  ink: "#4f2170"
  primary: "#287819"
  surface-2: "#fafafa"
  ink-3: "#000000"
typography:
  display:
    fontFamily: "\"MDLZ BITE TYPE\""
    fontSize: 100px
    fontWeight: 400
    lineHeight: 100px
    letterSpacing: 1.25px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"MDLZ BITE TYPE\""
    fontSize: 42px
    fontWeight: 400
    lineHeight: 42px
    letterSpacing: 1.25px
    textTransform: uppercase
  body:
    fontFamily: Calibri
    fontSize: 21px
    fontWeight: 400
    lineHeight: 31.5px
    letterSpacing: 0.53px
  link:
    fontFamily: CalibriBold
    fontSize: 21px
    fontWeight: 700
    lineHeight: 21px
    letterSpacing: 2.2px
    textTransform: uppercase
rounded:
  xs: 40px
  sm: 100px
spacing:
  s1: 6px
  s2: 10px
  s3: 14px
  s4: 15px
  s5: 20px
  s6: 40px
  s7: 44px
  s8: 45px
  s9: 50px
  s10: 75px
components:
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
    padding: 20px 45px
    height: 65px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
    padding: 20px 45px
    borderColor: "{colors.canvas}"
---

# Mondelēz International

## Overview
The measured site is www.mondelezinternational.com (page title "Home | Mondelēz International, Inc.", language en). It is the corporate site of a global snack company, with a top utility strip showing the stock quote ("NASDAQ: MDLZ $60.67 USD 1.29 (2.17%)") and the dropdowns INVESTORS, MEDIA and COUNTRIES plus CONTACT US and a search icon. The main navigation is a solid purple bar holding the Mondelēz International logo with the tagline "SNACKING MADE RIGHT" and the links ABOUT US, OUR BRANDS, SNACKING MADE RIGHT, CAREERS and NEWS in white custom display type.

The first content screen is a large hero: a red-to-dark gradient field, the label "TRENDS", the headline "STATE OF SNACKING 2026 REPORT", an outlined "VIEW REPORT" pill, and a smiling person eating a Ritz Toasted Chips cracker beside the pack. Under it a light-grey (#fafafa) strip holds the logos of eight owned brands in their own colors (Oreo, belVita, Tang, Cadbury, Philadelphia, Toblerone, Clif, Milka). The content then alternates image and text blocks, each with a small purple uppercase category label (SUSTAINABILITY, BUSINESS), a large green headline ("Snacking Made Right", "Reporting Second Quarter 2026 Earnings"), a black one-line summary and an outlined purple "LEARN MORE" pill. The tone is corporate but warm and food-led: saturated product photography, plain headlines and short descriptors.

## Colors
Purple `{colors.ink}` (#4f2170) is both the brand's dominant surface and its main text color: it is the header band (671 weighted area, the largest painted color), the purple body text on white (529 weighted characters) and the border and text color of the outlined "LEARN MORE" buttons. `{colors.primary}` green (#287819) is used for the large content headlines (87 weighted characters). White (`{colors.canvas}`, #ffffff) is text on purple and the page ground; `{colors.surface-2}` (#fafafa) is the brand-logo strip (226 area); `{colors.ink-3}` black (#000000) is used for the top utility links, ticker and descriptor lines (237). The hero red gradient and product colors come from photography and are not tokens.

The CSS root contains only Tailwind-style utility variables (--tw-ring-color rgba(59,130,246,.5), --tw-ring-offset-color #fff), which are framework defaults, not brand colors.

## Typography
Four web faces are loaded for text: "MDLZ BITE TYPE" (the custom condensed display face for the large headlines and navigation, 167 weighted characters), Calibri (body, 989), CalibriBold (101, buttons and links) and CalibriLight (87). Font Awesome 5 and an icon font are also loaded for icons. "Bw Surco" and "Bw Surco Bold" appear in the @font-face list but were not measured on rendered text. MDLZ BITE TYPE is the brand's own typeface; no foundry or guideline source was opened, so no further claim is made.

`{typography.display}`: MDLZ BITE TYPE 100px, line-height 100px, letter-spacing 1.25px, uppercase ("STATE OF SNACKING"); `{typography.display-mobile}`: 42px, 42px line-height, 1.25px tracking. A 42px, normal-case display style with 0.53px tracking is also used for "2026 Report". `{typography.body}`: Calibri 21px, line-height 31.5px, letter-spacing 0.53px. `{typography.link}`: CalibriBold 21px weight 700, line-height 21px, letter-spacing 2.2px, uppercase (button labels). Other sizes by characters read: 18px (371), 30px (135), 60px (98), 14px (98), 24px, 32px. Weights are 400 and 700. Small body sizes carry proportional tracking of about 2.5% (18px / 0.45px, 14px / 0.35px) and uppercase labels have wide tracking (18px / 1.8px).

## Layout
The desktop page is 1280px wide and 4272px tall. A stacked header (utility strip plus purple nav bar) is followed by a full-width hero, a full-width logo strip and then two-column feature blocks in which text and image swap sides. Padding values by frequency: 6px (16), 15px (14), 20px, 45px, 75px, 40px, 10px, 44px, 50px and 125px; no flex/grid gaps were measured. The spacing tokens `{spacing.s1}` to `{spacing.s10}` list 6px to 75px. The vertical rhythm is open, with large white margins around each feature block.

## Elevation & Depth
No box-shadow was measured. Depth comes from color planes (purple header, red hero gradient, grey logo strip) and photography. The header's lower edge is drawn as a wavy line in the capture; that edge is image or SVG art and was not tokenized.

## Shapes
Two radii were measured: 40px (`{rounded.xs}`, the outlined buttons) and 100px (`{rounded.sm}`, five elements, pill-like containers). All text containers and images are square-cornered. Buttons are fully rounded outlines with a 2px border.

## Components
**Outlined button** (`{components.button-secondary}`, `{components.link}`): transparent fill, CalibriBold 21px uppercase with 2.2px tracking, 2px solid border, padding 20px 45px, 65px tall, 240px wide, 40px radius. On the purple hero it is white text with a white border (`{colors.canvas}`); on white sections the same shape uses purple text and a purple 2px border. No filled primary button was detected (the extraction found no primary CTA). **Navigation:** purple bar, MDLZ BITE TYPE white uppercase links at large size; the top strip uses small uppercase Calibri with gold chevrons beside dropdown names. **Logo strip:** eight brand logos on #fafafa. **Feature block:** small purple uppercase label, green 60px headline, black descriptor and one outlined button.

## Design System Architecture
No public design system or brand-guidelines page was opened for this brief. The shipped CSS shows a Tailwind-style utility build (only default `--tw-*` variables on :root) with locally hosted fonts and icon fonts. There are no named brand color tokens in the root; brand values live in compiled component styles.

## Imagery, Voice and Hierarchy
The page is organized so that the brand's products do the persuading. The hero uses an expressive portrait with a pack in frame, the second feature uses a green report cover beside a shelf of packaged snacks held by a hand, and the logo strip shows eight consumer brands in their native colors and lettering. The corporate voice stays clear and factual: "Snacking Made Right", "2025 Sustainability Report", "Robust Q2 Results Underpinned By Solid Execution". Small purple category labels (TRENDS, SUSTAINABILITY, BUSINESS) set the topic before each headline, and the actions are always short imperative phrases in capitals (VIEW REPORT, LEARN MORE). Hierarchy is carried by three jumps in scale: 100px display for the hero, 60px for feature headlines, 21px for everything read as text. The measured body weight is 400 throughout, with 700 reserved for buttons and links, so emphasis is created by size, color and the display face rather than by bold running text.

## Do's and Don'ts
- Do use purple #4f2170 for navigation, body text and outlines, and green #287819 for large content headlines.
- Do set headlines in MDLZ BITE TYPE, uppercase, at 100px on desktop and 42px on mobile.
- Do make every call to action an outlined 40px-radius pill with wide-tracked bold uppercase text.
- Do show owned brands as a logo strip on #fafafa.
- Don't use drop shadows; none were measured.
- Don't use the Tailwind ring blue (rgba(59,130,246,.5)) as a brand color.
- Don't fill buttons; the measured buttons are outline only.

## Responsive Behavior
The mobile pass measured the "STATE OF SNACKING" heading at 42px with 42px line-height and 1.25px tracking, in green (#287819) instead of white, in a 320px column, with body copy kept in #4f2170. Column order, menu collapse and breakpoints were not measured.

## Iteration Guide
1. Start with white, purple #4f2170 text and Calibri 21px.
2. Put brand moments in purple bars or photo heroes with MDLZ BITE TYPE uppercase headlines.
3. Use green #287819 for large headlines on white.
4. Make actions outlined pills, 65px tall.
5. Re-run `node web/scripts/verify-designs.mjs --slug=mondelez` after edits.
