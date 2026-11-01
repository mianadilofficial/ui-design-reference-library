---
version: alpha
name: Heroku
category: "Design Systems"
description: "Heroku's marketing site pairs a deep-purple gradient hero (Purple 15 #300b60 to Purple 30 #5a1ba9) with white content bands, Avant Garde 600 headlines (40px/48px), Salesforce Sans body at 16px, Salesforce Blue (#0176d3) buttons with a 4px radius, and flat line-art icons."
colors:
  canvas: "#ffffff"
  ink: "#181818"
  primary: "#0176d3"
  on-primary: "#ffffff"
  surface-soft: "#f9f9fb"
  surface-cloud: "#eef1f6"
  ink-purple-15: "#300b60"
  ink-purple-10: "#240643"
  ink-slate: "#333d47"
  primary-hover: "#0b5cab"
  purple-30: "#5a1ba9"
  purple-light: "#d7bff2"
  purple3-product: "#79589f"
  purple3-danger: "#de0a0a"
typography:
  display:
    fontFamily: "\"Avant Garde\", Arial, Helvetica, sans-serif"
    fontSize: 40px
    fontWeight: 600
    lineHeight: 48px
  display-mobile:
    fontFamily: "\"Avant Garde\", Arial, Helvetica, sans-serif"
    fontSize: 30px
    fontWeight: 600
    lineHeight: 39px
  heading:
    fontFamily: "\"Avant Garde\", Arial, Helvetica, sans-serif"
    fontSize: 32px
    fontWeight: 600
    lineHeight: 40px
  subheading:
    fontFamily: "\"Avant Garde\", Arial, Helvetica, sans-serif"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 32px
  body:
    fontFamily: "\"Salesforce Sans\", Arial, Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
  button:
    fontFamily: "\"Salesforce Sans\", Arial, Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
    letterSpacing: "-0.032px"
  nav:
    fontFamily: "\"Salesforce Sans\", Arial, Helvetica, sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 14px
    letterSpacing: 0.25px
  purple3-button:
    fontFamily: salesforce-sans
    fontSize: 13px
    fontWeight: 600
    lineHeight: 22px
rounded:
  xs: 3px
  sm: 4px
  md: 5px
  pill: 9999px
spacing:
  s1: 2px
  s2: 5px
  s3: 6px
  s4: 10px
  s5: 11px
  s6: 12px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 12px 32px
    height: 52px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.ink-purple-10}"
  purple3-button:
    backgroundColor: "{colors.purple3-product}"
    textColor: "{colors.canvas}"
    typography: "{typography.purple3-button}"
    rounded: "{rounded.sm}"
    padding: 4px 15px
    height: 32px
  purple3-button-danger:
    backgroundColor: "{colors.purple3-danger}"
    textColor: "{colors.canvas}"
    typography: "{typography.purple3-button}"
    rounded: "{rounded.sm}"
    padding: 4px 15px
    height: 32px
---

# Heroku

## Overview

Heroku's homepage is a developer-platform marketing page with two clear halves. The top is a saturated purple gradient: a thin announcement bar ("Build Your Next Big Thing on Heroku. Sign Up Now!"), a header with the Heroku mark and "from Salesforce" lockup, a menu (Products, Developers, Customers, Pricing, Resources, Search, Login) and a white "Sign Up" button. The hero below carries a centred two-line h1, "The Cloud Application Platform For Building, Deploying, and Scaling Apps", a short paragraph, one blue "Get Started Now" button and a tonal line-art illustration of a skyline, mountains and clouds along the bottom edge. Everything after that is white (`canvas`, #ffffff) or very pale grey (`surface-soft`, #f9f9fb), set in dark purple headings and near-black body text.

The tone is plain and confident: feature names are short noun phrases (Heroku Runtime, Heroku Postgres, Fast Rollback, Continuous Delivery), explanations are one to three sentences, and the voice speaks to the developer ("git push heroku main"). Illustration is limited to purple outline icons and the hero line-art; there is no photography in the captured area.

## Colors

Heroku's own brand guidelines (https://brand.heroku.com) define the digital palette as Purple and Cloud Blue lanes plus Salesforce Blue. Values the page actually uses are: `ink` #181818 for body copy; `ink-purple-15` #300b60 (the guideline's "Purple 15", "Dark Purple") for headlines; `ink-purple-10` #240643 ("Purple 10") for footer headings; `purple-30` #5a1ba9 ("Purple 30", "Heroku Purple") as the lighter end of the hero gradient; `purple-light` #d7bff2 ("Purple 80", "Light Purple") from the guideline list; `ink-slate` #333d47 for secondary text; and `primary` #0176d3 (Salesforce Blue) for buttons and inline links, darkening to `primary-hover` #0b5cab on hover. Surfaces are `canvas` #ffffff, `surface-soft` #f9f9fb and `surface-cloud` #eef1f6.

The guideline recommends a linear background gradient from 100% Purple 15 to 100% Purple 30 with an optional radial glow, no more than two colours in a gradient, and says paired colours should be at least 50 numeric points apart for AA+ contrast. The hero follows that recipe.

## Typography

Two typefaces are specified by the brand page: Avant Garde (Demi weight, headlines) and Salesforce Sans (Regular, body and captions). The shipped CSS lists `"Avant Garde", Arial, Helvetica, sans-serif` for headings and `"Salesforce Sans", Arial, Helvetica, sans-serif` for body, so Arial is the actual fallback. The brand page calls Salesforce Sans "a custom font designed for long-form messaging", and the design hub lists a Fonts ZIP download; where the real files are unavailable, Arial is the fallback the site itself ships.

The measured scale: `display` 40px/48px at 600 (hero h1), `display-mobile` 30px/39px, `heading` 32px/40px (section titles), `subheading` 24px/32px (feature names), `body` 16px/25.6px at 400, `button` 16px/24px at 700 with -0.032px tracking and `nav` 14px at 700 with 0.25px tracking. Small 12px text with 1.2px to 1.5px tracking also appears in the extraction. Inline code uses a monospace stack (SFMono-Regular) on a light grey chip.

## Layout

The page is 1280px wide at capture and about 7,414px tall. Content is centred, with feature blocks arranged as a 3 by 4 grid of icon, title and paragraph. Section headings are centred; the feature descriptions inside the grid are left-aligned in the capture. Bands alternate white and `surface-soft`, and the final footer is about 886px tall with 18px bold headings in `ink-purple-10`. Measured gaps cluster at 30px and 50px, with 10, 15, 20, 40 and 60px also present; measured padding is mostly 10px, 50px and 12px. The language logos ("Officially supported languages") sit in a single row of nine bordered tiles.

## Elevation & Depth

Depth is nearly absent. Only one box shadow is measured on the home page, `rgba(0, 0, 0, 0.1) 0px 10px 15px 0px, rgba(0, 0, 0, 0.05) 0px 4px 6px 0px`, used once. Hierarchy comes from colour: the saturated purple hero against white, and pale grey bands against white. Language tiles use a thin #dddddd border rather than a shadow. The Purple3 product framework adds layered soft shadows (for example a 1px blue-grey ring plus a 20px blur) on its docs cards, which marketing pages do not use.

## Shapes

Corners are small and consistent: `rounded.sm` 4px on buttons (37 of the measured radii), `rounded.md` 5px, `rounded.xs` 3px, and `rounded.pill` for fully round items. The extraction also measures 10% and 50% radii on a few elements. Cards and tiles are bordered rectangles with the same small radii; nothing on the page is a pill-shaped button.

## Components

**Primary button** (`button-primary`): `primary` fill and 2px border, white 16px/700 label, 4px radius, 12px 32px padding, 52px tall. The same blue button is used for "Get Started Now" and "Learn more about Heroku AI". On hover it moves to `primary-hover`. **Header Sign Up**: white fill, blue text and border, 4px radius, 38px tall (hover state measured in the extraction). **Navigation**: white 14px/700 labels on the purple bar with 0.25px tracking and chevrons on dropdown items. **Feature block**: 24px/600 `ink-purple-15` title, 16px body, outline icon in purple, inline blue links underlined. **Purple3 product buttons** (measured on the design hub documentation): `purple3-product` #79589f fill, 13px/600 text, 4px radius, 4px 15px padding, 32px tall, with a red variant `purple3-danger` #de0a0a and an outlined variant using a 1px purple border; inputs there are 32px tall with a #cfd7e6 border and a 4px radius.

## Design System Architecture

Heroku publishes its design hub at https://design.herokai.com (title "Heroku Design"). It lists three libraries: Purple3, "the atomic CSS library to build and style Heroku products"; Shibori3, the atomic CSS library for Heroku marketing properties; and Malibu, an SVG icon system with over 100 icons used in both. The hub states that the GitHub repositories (https://github.com/heroku/design-systems) are private to Heroku employees, so this document does not describe their source. Each library is a CSS file served from the Heroku CDN (https://design.herokai.com/purple3 and https://design.herokai.com/shibori3).

The documentation (https://design.herokai.com/purple3/docs/) explains that Purple3 and Shibori3 are built on the functional-CSS system Tachyons and PostCSS: atomic classes that each do one thing, with the stated contrast to Bootstrap-style frameworks that "impart a lot of presumptions". Class names map to single properties such as `.flex` or `.b--light-purple`, which resolves to a CSS variable border colour. Malibu (https://design.herokai.com/malibu) uses an SVG sprite, a `fill-purple` class and `aria-labelledby` titles for informational icons. The hub's "Interface Guidelines" entry is labelled "Shipping soon". Brand rules, colours, logo and typefaces live separately at https://brand.heroku.com, which also notes that "Heroku is a Salesforce company and also an independent product and brand."

I measured the Purple3 documentation page with the extractor. It shows buttons 13px/600 in `purple3-product` #79589f at a 4px radius, a 32px input and 5px, 6px and 4px radii, while the marketing home page uses Salesforce Blue buttons. The two surfaces therefore draw on the same palette family but different button colours; Shibori3, the marketing library, was not separately measured.

## Do's and Don'ts

Do keep one blue `primary` button per section and let purple carry headlines, icons and the hero. Do use Avant Garde 600 only for headlines and Salesforce Sans for everything else. Do keep corners at 4px. Do build gradients from Purple 15 to Purple 30 with a subtle glow.

Don't use gradients in type, circular gradients as backgrounds, or harsh colour breaks (all stated on the brand page). Don't pair colours less than 50 numeric points apart. Don't recolour or skew the logo, and don't change the Salesforce lockup. Don't use the product purple (#79589f) button on the marketing page or the marketing blue inside product screens without checking which library you are in.

## Responsive Behavior

The extraction records a mobile hero style, `display-mobile` at 30px/39px, down from 40px/48px on desktop. The capture shows only the desktop layout, so no mobile breakpoints are asserted here. Buttons keep 16px labels and a 52px height on desktop.

## Iteration Guide

Start from `canvas` and `ink`, set headlines in `display` or `heading`, then add one `primary` button. For hero treatments use `ink-purple-15` to `purple-30` gradients. When a new component is needed for product screens, measure it on the Purple3 documentation page rather than copying marketing styles, and cite the library (Shibori3 for marketing, Purple3 for product). Keep new radii in the 3px to 5px range, and keep spacing to the measured 10, 15, 20, 30 and 50px steps.
