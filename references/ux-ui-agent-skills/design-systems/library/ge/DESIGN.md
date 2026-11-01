---
version: alpha
name: GE
category: "Business & Corporate"
description: "GE.com (General Electric) is a short corporate hub on a #f0f3f7 grey canvas set in GE Sans (gesans-regular/bold), with a #1e2f46 dark blue-grey header and footer, #0870d8 GE primary-blue links, a 69px light-weight hero headline with tight tracking, and three square company cards in navy #00003d, teal #005e60 and purple #6022a6."
colors:
  canvas: "#f0f3f7"
  ink: "#000000"
  primary: "#0870d8"
  on-primary: "#ffffff"
  dark-blue-grey: "#1e2f46"
  dark-indigo: "#0d1623"
  ink-body: "#171414"
  ink-bootstrap: "#212529"
  aerospace-navy: "#00003d"
  vernova-teal: "#005e60"
  healthcare-purple: "#6022a6"
  footer-deep: "#18273b"
  white: "#ffffff"
typography:
  display:
    fontFamily: gesans-regular
    fontSize: 69.08px
    fontWeight: 500
    lineHeight: 69.08px
    letterSpacing: "-2.61px"
  display-mobile:
    fontFamily: gesans-regular
    fontSize: 37.04px
    fontWeight: 500
    lineHeight: 44.448px
    letterSpacing: "-1.27px"
  heading:
    fontFamily: gesans-regular
    fontSize: 44.496px
    fontWeight: 500
    lineHeight: 53.3952px
    letterSpacing: "-1.22px"
  subheading:
    fontFamily: gesans-regular
    fontSize: 35.056px
    fontWeight: 500
    lineHeight: 49.0784px
    letterSpacing: "-1.3px"
  body:
    fontFamily: gesans-regular
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: gesans-regular
    fontSize: 24px
    fontWeight: 500
    lineHeight: 24px
  label:
    fontFamily: gesans-bold
    fontSize: 14px
    fontWeight: 400
    lineHeight: 15.96px
    letterSpacing: 2px
    textTransform: uppercase
  footer:
    fontFamily: gesans-regular
    fontSize: 22px
    fontWeight: 400
    lineHeight: 33.99px
rounded:
  xs: 26px
  sm: 50px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 15px
  s8: 24px
  s9: 25px
  s10: 28px
components:
  carousel-arrow:
    backgroundColor: "{colors.dark-blue-grey}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.none}"
    height: 80px
  learn-more-pill:
    backgroundColor: "{colors.white}"
    textColor: "{colors.aerospace-navy}"
    typography: "{typography.label}"
    rounded: "{rounded.xs}"
    height: 52px
    border: "2px solid #ffffff"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.dark-blue-grey}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.none}"
    padding: 0px 24px
  nav-link:
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 5px 0px
  nav-link-hover:
    backgroundColor: "{colors.primary}"
  company-card:
    backgroundColor: "{colors.aerospace-navy}"
    textColor: "{colors.white}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.dark-blue-grey}"
    textColor: "{colors.on-primary}"
    typography: "{typography.footer}"
    rounded: "{rounded.none}"
    padding: 48px 0px 0px
---

# GE

## Overview

The measured site is https://www.ge.com/ (title "GE Companies: Next Generation and Future | General Electric", `lang="en"`), captured at 1280px wide with an 1809px scroll height and at 390px for the mobile pass. It is no longer a product site. A dismissible grey banner at the top explains: "GE.com has been updated to serve our three go-forward companies. Please visit these standalone sites for more information — GE Aerospace | GE Vernova | GE HealthCare". The About page (https://www.ge.com/about-us) confirms that GE has split into three standalone public companies and presents its history since 1892 as continuing through them.

The page is short and ceremonial. Below the banner and a bright-blue rule, a 147px `#1e2f46` header holds the circular GE monogram on the left and five white links on the right — About us, Investors, News, FAQs, Contact. The 521px hero is a three-panel photo carousel (a jet engine, a wind turbine, an MRI scanner) with square `#1e2f46` previous/next arrows and the white headline "GE - Once, Now, Forever", ending in a gradient strip running from navy through teal to purple. Under the heading "Now three standalone and publicly traded companies", three square cards pair a photograph with a coloured text panel: navy "The future is our starting point / VISIT GE AEROSPACE", teal "The energy to change the world / VISIT GE VERNOVA" and purple "Every patient has a story to tell / VISIT GE HEALTHCARE". A `#1e2f46` footer with four link columns and a `#18273b` copyright strip close the page.

## Colors

- **Canvas `#f0f3f7`** — the body background and the top banner; declared as `--ge-grey`.
- **Ink `#000000`** — body default text; most visible text on this page is white on dark fills (1011 chars of `#ffffff`).
- **Primary `#0870d8`** — `--ge-primary-blue`: the company links in the banner (132 chars) and the background of header links on hover. Related tokens are `--ge-primary-blue-button-hover` `#095eb4` and `--ge-primary-blue-button-border-hover` `#0962bb`.
- **Dark blue-grey `#1e2f46`** — `--ge-dark-blue-grey`: header, footer, carousel arrows and the section heading colour.
- **Dark indigo `#0d1623`** — `--ge-dark-indigo`: the mobile header and a 30% overlay (`#0d16234d`).
- **Ink body `#171414`** — the banner paragraph; **`#212529`** is the Bootstrap body colour also present.
- **Company colours** — navy `#00003d`, teal `#005e60` and purple `#6022a6`, each measured as a card panel (189 area weight each) and as the text colour of each company's "LEARN MORE" pill.
- **Footer deep `#18273b`** — the copyright strip.

Also declared: `--ge-light-blue` `#00b5e2`, `--ge-purple` `#3e439b`, `--ge-dark-purple` `#32356e`, `--ge-dark-light-grey` `#e5e9ee`, `--ge-dull-light-grey` `#f4f4f6` and `--ge-dark-grey` `#979797`. The Bootstrap 5 variables (`--bs-primary` `#0d6efd` and the rest) are framework defaults, not GE colours.

## Typography

The site uses the **GE Sans** family, served as separate font-face names: `gesans-regular`, `gesans-bold`, `gesans-italic` and `gesans-bolditalic`, plus the `ge-corporate-icons` and `icomoon` icon fonts.

- **Display** — gesans-regular 69.08px/69.08px, weight 500, −2.61px: "GE - Once, Now, Forever".
- **Heading** — 44.496px/53.3952px, weight 500, −1.22px: "Now three standalone and publicly traded companies".
- **Subheading** — 35.056px/49.0784px, weight 500, −1.3px: carousel slide titles such as "We were meant to fly".
- **Banner headline** — 28.74px with +0.5px tracking.
- **Card text** — 25px (335 chars).
- **Body / nav** — 20px/24px, weight 400.
- **Company links** — 24px/24px, weight 500, in `#0870d8`.
- **Footer** — 22px/33.99px, weight 400.
- **Label** — gesans-bold 14px/15.96px, +2px tracking, uppercase: "VISIT GE AEROSPACE" and "LEARN MORE".

The display sizes are fluid values (69.08px, 44.496px, 35.056px) with tight negative tracking, which gives the large type its light, elegant look despite the 500 weight. If GE Sans is unavailable, a humanist sans with open apertures (e.g. Source Sans or Open Sans) is the closest free match.

## Layout

The page is a single centred column on the 1280px viewport. Measured bands: a 111px `#f0f3f7` banner in two columns, a 147px `#1e2f46` header, a 521px media hero, a 750px white section with three company cards, a 224px `#1e2f46` footer and a 56px `#18273b` strip. The cards sit three across with the text panel overlapping the bottom of each photo; the footer has four link columns. The header showed twelve visible links counting the banner links, with no menu toggle. Spacing is sparse: paddings of 10px, 8px and 29px; the footer has `48px 0px 0px` padding; the nav `0px 24px`.

## Elevation & Depth

One shadow was measured (`rgba(8, 19, 79, 0.16) 0px 4px 13.333px 0px`, a single element). The page is otherwise flat: depth comes from the dark header and footer framing the white card section, the photo overlap of the coloured text panels, and the gradient strip under the hero.

## Shapes

Mostly square. Cards, header, arrows and footer are 0px. The measured radii are 26px (3 elements — the white "LEARN MORE" pills), 50% (2) and 50px (1). Bootstrap's radius variables are declared but are not part of the visible design.

## Components

**Header link** — white gesans-regular 20px/24px with `5px 0px` padding; hover fills the link with `#0870d8` primary blue.

**Carousel arrow** — 80×80px square `#1e2f46` button with a thin white chevron.

**Company card** — square photograph above a square coloured panel (navy, teal or purple) with white 25px text and a gesans-bold 14px uppercase "VISIT …" label with +2px tracking. A white 26px-radius "LEARN MORE" pill (52px tall, `2px solid #ffffff` border, text in the card's colour) was measured in the DOM but is not visible in the capture.

**Update banner** — `#f0f3f7` strip with a 28.74px headline, a 20px paragraph in `#171414`, underlined `#0870d8` company links, a close "×" and a bright-blue rule below.

**Footer** — `#1e2f46`, four columns of white 22px links with external-link icons, then a `#18273b` copyright strip ("© 2026 General Electric Company").

## Design System Architecture

No public GE design system or brand guideline was found: https://www.ge.com/about-us links none, and the only brand-related file it references is the site theme logo at `/themes/custom/ge_com_unified/logo.svg`.

The shipped CSS shows a custom site theme (`ge_com_unified`, under `/themes/custom/`) built on Bootstrap 5 (`--bs-*` variables) with a small layer of GE custom properties: `--ge-primary-blue`, `--ge-primary-blue-button-hover`, `--ge-primary-blue-button-border-hover`, `--ge-dark-blue-grey`, `--ge-dark-indigo`, `--ge-grey`, `--ge-light-blue`, `--ge-purple`, `--ge-dark-purple`, `--ge-dark-light-grey`, `--ge-dull-light-grey`, `--ge-dark-grey` and `--ge-white`. Fonts are loaded per style as separate families (gesans-regular, gesans-bold, gesans-italic, gesans-bolditalic) rather than as weights of one family, and a `slick` icon font is loaded for the carousel controls.

## Do's and Don'ts

**Do**
- Frame the page with `#1e2f46` header and footer on a `#f0f3f7` canvas.
- Use GE primary blue `#0870d8` for links and hover states.
- Set large headlines in GE Sans with tight negative tracking (−2.61px at 69.08px).
- Give each successor company its own colour panel: navy `#00003d`, teal `#005e60`, purple `#6022a6`.
- Keep cards and buttons square; use uppercase tracked labels for calls to action.

**Don't**
- Don't treat Bootstrap's `#0d6efd` or other `--bs-*` defaults as GE colours.
- Don't add heavy shadows or rounded cards.
- Don't present GE.com as a product catalogue; the measured page is a hub pointing to three companies.
- Don't mix the three company colours inside one card.

## Responsive Behavior

Measured at 390px wide:

- The header becomes an 81px `#0d1623` bar with one visible link and a "Toggle navigation" control (desktop: twelve links, no toggle).
- The hero headline drops from 69.08px/69.08px to 37.04px/44.448px with −1.27px tracking.
- The section heading drops from 44.496px to 30.523px/36.6276px with −0.78px tracking.
- Body text stays 20px/24px.
- The "LEARN MORE" pill measured gesans-bold 11px/12.54px, 46px tall and 296px wide.
- The banner grows to 157px; the header band measured `#19283b`; the footer is 376px tall.

Behaviour between 390px and 1280px was not measured.

## Iteration Guide

1. Use a `#f0f3f7` canvas and GE Sans (regular and bold faces).
2. Build a `#1e2f46` header: circular monogram left, white 20px links right, `#0870d8` fill on hover.
3. Add a photo hero with a 69.08px/500 white headline at −2.61px and square 80px `#1e2f46` arrows.
4. Title the next section at 44.496px in `#1e2f46`.
5. Lay out three square cards, each a photo plus a colour panel (`#00003d`, `#005e60`, `#6022a6`) with white 25px text and a 14px uppercase label tracked +2px.
6. Close with a `#1e2f46` footer of 22px/33.99px white links and a `#18273b` strip.
