---
version: alpha
name: Siemens Energy
category: "Energy & Climate"
description: "Siemens Energy global home page: dark purple #1b1534 ink and navigation, electric purple #8a00e5 pill buttons (30px radius, white 16px bold text), Siemens Sans 700 at 60px/70px headlines and 24px/32px body, a #410d71 deep-purple band and a white canvas."
colors:
  canvas: "#ffffff"
  ink: "#1b1534"
  primary: "#8a00e5"
  on-primary: "#ffffff"
  purple-deep: "#410d71"
  neutral-3: "#dedede"
  neutral-9: "#0d0d0d"
  purple-light: "#b96cff"
typography:
  display:
    fontFamily: "\"Siemens Sans\""
    fontSize: 60px
    fontWeight: 700
    lineHeight: 70px
    letterSpacing: "-0.4px"
  display-mobile:
    fontFamily: "\"Siemens Sans\""
    fontSize: 36px
    fontWeight: 700
    lineHeight: 46px
    letterSpacing: "-0.2px"
  heading:
    fontFamily: "\"Siemens Sans\""
    fontSize: 42px
    fontWeight: 700
    lineHeight: 50px
    letterSpacing: "-0.3px"
  body:
    fontFamily: "\"Siemens Sans\""
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
    letterSpacing: 0.1px
  button:
    fontFamily: "\"Siemens Sans\""
    fontSize: 16px
    fontWeight: 700
    lineHeight: 22px
  link:
    fontFamily: "\"Siemens Sans\""
    fontSize: 18px
    fontWeight: 700
    lineHeight: 22px
  input:
    fontFamily: "\"Siemens Sans\""
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
    letterSpacing: 0.2px
rounded:
  xs: 4px
  sm: 10px
  md: 30px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 5px
  s5: 8px
  s6: 12px
  s7: 14px
  s8: 16px
  s9: 17px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 8px 16px
    height: 40px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 8px 16px
    height: 38px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
    padding: 0px 0px 5px
  nav:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
  text-input:
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    padding: 1px 2px
    height: 30px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    padding: 88px 0px 24px
---

## Overview

siemens-energy.com/global/en/home.html is the global corporate home page of Siemens Energy, titled "Siemens Energy | Let's make tomorrow different today". It is measured at 1280px wide and 5,525px tall. The first screen is a full-bleed photograph of a technician beside a turbine, with the white "SIEMENS energy" logo, a slim 72px-wide dark purple left rail holding search, menu and support icons, a "Global" language/region link at the top right, and a 60px white headline: "Energy technology powering tomorrow's energy systems", with a 24px white lead paragraph beneath.

Below the hero the page alternates photographic and flat-color bands: a split band with an Omterra rebranding announcement (photo of flags on the left, a deep purple panel on the right with an outlined "Read our official announcement" pill), a "Products and services" module with a vertical text list (Products, Services, Solutions by industry, Solutions by use case, References) beside a horizontal card carousel with purple progress line and arrow controls, a hero-size photo band with a career message, and a 770px-high dark purple footer. The voice is confident and corporate: short declarative headlines, sentence-case labels, and a consistent purple duotone on photographs.

Imagery is documentary and human: close portraits of engineers at work, industrial hardware such as turbine blades, substations and power plants, and brand photography of the Omterra flags against a blue sky. Photographs inside cards carry a dark purple gradient at the bottom with white sentence-case captions ("Flexible AC transmission systems (FACTS)", "Gas turbines", "Power plants"). Section titles on white are set in the dark purple ink, and active list items such as "Products" are colored with the electric purple while the other items stay dark, each followed by a small purple chevron at the right edge.

## Colors

Measured page-level fills: #1b1534 (dark purple, the largest area, weight 2,176, used for the navigation rail and footer), #410d71 (479, the deep-purple band), the electric purple #8a00e5 (11, buttons) and its 30% tint #8a00e54d (2). The canvas token is #ffffff (the lower page background) and ink is #1b1534. Text colors by character count: #ffffff (4,416), #1b1534 (551), #8a00e5 (179, links), #dedede (76), #0d0d0d (42) and #b96cff (14, the hover color of the Global link).

The site publishes a named palette in its root variables (122 custom properties were measured): --dark-purple #1b1534, --default-bg-dark-purple #1b1534, --purple-1 #410d71, --purple-2 #4d217a, --purple-3 #38206a, --purple-4 #4d2d6b, --int-purple-1 #8a00e5, --int-purple-2 #641e8c, --int-purple-3 #ada9c2, dark-mode purples --int-purple-1-dark #b96cff and --int-purple-2-dark #cf9bff, --dark-blue #221d43, --dark-grey-purple #5d596e, the neutral ramp --neutral-0 #fff to --neutral-10 #000, --light-grey-1 #f8f8f8 through --light-grey-5 #cdcdcd, and status colors --int-red #da1e28, --int-red-dark #e85960, --int-green-dark #14da79. --swiper-theme-color #007aff belongs to the carousel library and is not a brand color.

## Typography

One family: Siemens Sans (5,278 characters), weights 400 (3,467) and 700 (1,811). The display role is 60px weight 700 / 70px with -0.4px letter-spacing (the hero h1; 36px / 46px with -0.2px on mobile). The heading is 42px weight 700 / 50px with -0.3px. The lead body is 24px weight 400 / 32px with 0.1px tracking; the mobile body is 18px / 24px. Buttons use 16px weight 700 / 22px; links use 18px weight 700 / 22px; the search input uses 18px weight 400 / 28px with 0.2px.

Sizes by characters: 14px (1,927), 18px (1,461), 24px (1,350), 16px (203), 28px (100), 42px (93), 60px (92), 20px (52). Letter-spacing is tuned per size (18px at 0.2px and 0.4px, 24px at 0.1px, 42px at -0.3px, 60px at -0.4px), tighter at large sizes and slightly open at body sizes.

## Layout

The desktop page is 1280px with a 72px dark purple vertical rail on the left (the nav is 72px wide and 800px tall) and content offset to the right of it. Hero copy spans 1,038px. Measured paddings are 3px (42), 8px (11), 16px (11), 12px (9), 32px (7) and 88px (5); the footer pads 88px 0px 24px. Gaps are 8px (28 uses), 24px (12), 17px (6), 32px (2) and 65px, 14px and 12px once each. Content bands are generous with vertical space and alternate full-bleed images with two-column split bands.

## Elevation & Depth

No box shadows were measured. Depth is created with color: the #1b1534 and #410d71 purple panels, purple-tinted photo overlays that darken the lower portion of hero and card images so white text stays legible, and thin lines. Measured border colors are #ffffff (5, outlines on dark), #8a00e5 (4), #c0c0c0 (3) and #969696 (2).

## Shapes

Radii: 30px (7 elements, the pill buttons), 50% (4, round icon controls), 10px (4) and 4px (2). Buttons are pills with a 30px radius; carousel and support controls are circles; cards and image tiles are square-cornered in the capture.

## Components

Button-primary: #8a00e5 fill, white Siemens Sans 16px weight 700 text, 30px radius, padding 8px 16px, 40px high (the "Read more" measurement is 139px wide). Button-secondary (Visit website): the same fill and padding at 38px high. Outlined button: transparent with a 2px solid #ffffff border, white text, 30px radius, padding 8px 16px, 42px high, used on dark purple bands. Link: #8a00e5 18px bold text with 5px bottom padding. Navigation: the #1b1534 left rail with white icons. Text-input: white 18px text, 1px 2px padding, 30px high, in the search layer. Footer: #1b1534 background, white text, 88px top padding. Hover: the Global link changes from #ffffff to #b96cff (measured).

## Design System Architecture

Siemens Energy runs a tokenized stylesheet: the root variables define named color ramps (purple, int-purple with -dark variants, neutral, light-grey, status colors), default background variables (--default-bg-white #fff, --default-bg-dark-purple #1b1534, --default-bg-neutral #f2f2f2), navigation item colors (--navigation-item-color-one #f5f5f5 to -four #ddd) and component variables such as --aem-latest-news-teaser__item-content-offs..., --teaser-focus-min-img-no-title-offset 176px and --navi-scrollbar-border-radius 70px. Variable names carry an --aem- prefix for component-specific values. No public design-system site or brand guideline page was opened; the home page was the only page read, so those sources are recorded as not found rather than assumed.

## Do's and Don'ts

Do use #1b1534 for navigation and footer surfaces and #8a00e5 for buttons and links. Do make buttons pills with a 30px radius, 16px bold white text and 8px 16px padding. Do use Siemens Sans 700 for headlines with negative tracking. Do keep a purple duotone over photographs.

Don't use #007aff (the carousel library color) as a brand color. Don't put purple text on the dark purple surfaces; links on dark use #b96cff in hover. Don't add drop shadows; none were measured. Don't use more than the two measured weights, 400 and 700.

## Responsive Behavior

A mobile pass recorded: h1 36px / 46px weight 700, body 18px / 24px, navigation 14px / 16px and button 16px / 22px. Character usage on mobile is led by 14px (1,914), 16px (1,336), 20px (970), 18px (696), 22px (100) and 28px (93). Mobile layout, column counts, breakpoints and menu behavior were not measured.

## Iteration Guide

Rebuild in order: left dark rail with search, menu and support icons; hero photo with the white 60px headline and 24px lead; the Omterra split band with the outlined pill; the Products and services list and carousel; photo band; footer. Use canvas #ffffff, ink #1b1534, primary #8a00e5, deep band #410d71, 30px pill radius and Siemens Sans. Values not in web/data/extracted/siemens-energy.json, such as tablet layout or other themes beyond the -dark variables, are not measured.
