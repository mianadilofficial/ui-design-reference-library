---
version: alpha
name: Qatar Airways
category: "Airlines"
description: "Qatar Airways' US booking home page: pale lavender-grey #f2f3fa canvas, near-black #1f212b ink, burgundy #8e2157 'Search flights' button with 32px corners (hover burgundy #5c0931), white 64px-radius 'Book now' pill, Jotia Light 48px/56px headlines over Graphik 16px/24px body, all driven by --f-brand-* tokens."
colors:
  canvas: "#f2f3fa"
  surface: "#ffffff"
  ink: "#1f212b"
  ink-link: "#333333"
  ink-muted: "#4a525d"
  ink-subtle: "#6e7780"
  primary: "#8e2157"
  primary-hover: "#5c0931"
  on-primary: "#ffffff"
  border-default: "#dbdee8"
  info: "#3a35af"
  loyalty-gold: "#8c5617"
  warning: "#fcc500"
  error: "#d95757"
  success: "#328256"
typography:
  display:
    fontFamily: Jotia, Verdana, Geneva, sans-serif
    fontSize: 48px
    fontWeight: 300
    lineHeight: 56px
  display-mobile:
    fontFamily: Jotia, Verdana, Geneva, sans-serif
    fontSize: 36px
    fontWeight: 300
    lineHeight: 48px
  title-5:
    fontFamily: Jotia, Verdana, Geneva, sans-serif
    fontSize: 24px
    fontWeight: 300
    lineHeight: 32px
  nav:
    fontFamily: Graphik, "Graphik Web", Arial, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 24px
  body:
    fontFamily: Graphik, "Graphik Web", Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"Graphik Web\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 16px
  caption:
    fontFamily: Graphik, "Graphik Web", Arial, sans-serif
    fontSize: 12px
    fontWeight: 500
    lineHeight: 16px
rounded:
  xs: 3px
  sm: 4px
  md: 5px
  lg: 8px
  xl: 16px
  outer: 20px
  2xl: 32px
  3xl: 50px
  4xl: 64px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 7px
  s4: 8px
  s5: 10px
  s6: 11px
  s7: 12px
  s8: 14px
  s9: 14.4px
  s10: 15px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 20px 24px
    height: 58px
    border: "1px solid #8e2157"
  button-white:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.primary-hover}"
    typography: "{typography.body}"
    rounded: "{rounded.4xl}"
    padding: 16px 32px
    height: 58px
    border: "1px solid #ffffff"
  booking-tab:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.xl}"
    height: 56px
  select-button:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    height: 48px
    border: "1px solid #dbdee8"
  trip-type-pill:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    rounded: "{rounded.4xl}"
    height: 44px
    border: "1px solid #dbdee8"
  link:
    textColor: "{colors.ink-link}"
    typography: "{typography.body}"
---

## Overview

The measured page is the Qatar Airways United States home page (finalUrl `https://www.qatarairways.com/en-us/homepage.html`, title "Book Flights - Book & Fly from United States | Qatar Airways"). It opens with a thin white travel-alert strip (a purple "i" icon, "Flights QR914 and QR915 to Auckland", a close cross), then a full-bleed photographic hero with the header laid directly over it: the QATAR AIRWAYS wordmark with its oryx, the oneworld roundel, four main sections (Explore, Book, Experience, Privilege Club), and Help, search, language and "Log in | Sign up" at the right, all in white.

The hero in the capture is a sunlit beach with a surfer, overlaid with thin gold arcs. The headline "Up to 10%* off flights for Privilege Club members" is set in Jotia Light at 48px, with a 16px Graphik line beneath ("Book with promo code PCOCT26 before Oct 22") and a white pill button "Book now" with burgundy text.

A white booking card overlaps the bottom of the hero. It has four tabs with line icons (Book a flight, Stopover / Packages, Manage / Check in, Flight status), radio buttons for Return / One way / Multi-city, a long From ⇄ To field with date and passenger cells, a "Book using Avios" checkbox, "+ Add promo code", and the burgundy "Search flights" pill. Below, on the lavender-grey canvas, the section "Go where it's happening" opens a row of photo cards with light captions ("Explore our offers", "Collect Avios on Turo", "Where will you go next?", "Experience more on a Qatar stopover").

The mood is calm luxury: light type, lots of air, rounded pill controls, and a single burgundy accent taken from the national colour.

## Colors

Qatar's palette is published on the page as `--f-brand-*` and `--f-base-*` custom properties, and the names below follow them.

- **canvas `#f2f3fa`** (`--f-base-color-solid-grey-10`): the body background, a pale lavender-grey visible behind the offers section.
- **surface `#ffffff`**: the alert strip, the booking card and the photo cards.
- **ink `#1f212b`** (`--f-base-color-solid-grey-900`): the most-read text color, used for headings and form text.
- **ink-link `#333333`**: the travel-alert link text in the header strip.
- **ink-muted `#4a525d`** (`--f-brand-color-text-muted`) and **ink-subtle `#6e7780`** (`--f-brand-color-text-subtle`): secondary text.
- **primary `#8e2157`** (`--f-brand-color-background-primary`, `--f-button-primary`): the burgundy of the "Search flights" button and of the active "Book a flight" tab icon and label.
- **primary-hover `#5c0931`** (`--f-brand-color-primary-hover`): the deeper burgundy that is also the text color of the white "Book now" pill.
- **on-primary `#ffffff`**: text on burgundy and on the hero.
- **border-default `#dbdee8`** (`--f-brand-color-border-default`): borders of select buttons and trip-type pills. `--f-brand-color-border-hover` is ink `#1f212b`.
- **info `#3a35af`**: the circular info icon in the alert strip.
- **loyalty-gold `#8c5617`**, **warning `#fcc500`**, **error `#d95757`** and **success `#328256`**: status and Privilege Club colors from the brand tokens; none is prominent on the home page.

The token set also defines gradients for loyalty tiers (`--f-base-color-gradient-silver`, `--f-base-color-gradient-platinum`) and an overlay `#1F212BB2`.

## Typography

Two families carry the brand. **Jotia**, loaded at weights 100, 300 and 400, is the display face; **Graphik** (loaded as "Graphik Web" 300, 400, 500) is the text face. By characters, Graphik Web dominates (1186), Graphik follows (284) and Jotia covers the headlines (48).

- **display**: Jotia 48px/56px, weight 300, for the hero h1. The brand token `--f-brand-type-page-title-thin` defines a 100-weight 48px/56px variant.
- **Section heading**: "Go where it's happening" measures 36px, weight 100; its family was not recorded (Jotia's 48 measured characters are the hero h1).
- **title-5**: Jotia 24px/32px, weight 300, declared as `--f-brand-type-title-5`.
- **nav**: Graphik 18px/24px, weight 400, the header section labels (Explore, Book…).
- **body**: Graphik 16px/24px, weight 400; 16px is by far the most frequent size (1370 characters). A 0.5px letter-spacing is recorded on 332 characters of 16px text, with 0.25px and 0.35px on a few more.
- **button**: Graphik Web 16px/16px, weight 500, the "Search flights" label (`--f-button-base-font-weight: 500`).
- **caption**: Graphik 12px/16px, weight 500, from `--f-brand-type-caption-medium`.

The weight scale is light: 400 for text, 300 and 100 for headlines, 500 for buttons and links without underline. The site's own fallbacks are Verdana/Geneva for Jotia and Arial for Graphik, and the Romanian locale tokens swap in Noto Sans.

## Layout

At 1280px the measured page is 1232px tall in three bands. The 48px white alert strip holds its content between x=90 and x=891. The hero band is 528px of media with content from x=56 to x=1224, and the offers band below is 656px on `#f2f3fa` with the same 56–1224 content edges, so the page works on a 1168px content width with 56px side margins. The photo cards sit four across in the capture, and the extraction counted up to five card columns.

Spacing tokens run on a 4px base (`--f-base-space-1` 4px, `-2` 8px, `-4` 16px, `--f-brand-space-sm` 12px, `-xl` 32px, `-3xxl` 56px, `-4xl` 64px, `-6xl` 80px, `--f-base-space-24` 96px). On the page the most used gaps are 8px and 10px, and the most used paddings 8px, 12px, 4px and 16px.

## Elevation & Depth

Elevation is soft. The base shadow token is `--f-base-shadow-1: 0 2px 8px #1F212B14` (an 8% ink shadow), with a mirrored `-1n` for upward shadows. Measured shadows on the page are `rgba(0, 0, 0, 0.12) 0px 2px 8px 0px`, `rgba(0, 0, 0, 0.1) 0px 4px 12px 0px` and `rgba(134, 134, 134, 0.4) 0px 0px 10px 0px`, each used once. The booking card gains depth mostly by overlapping the hero photograph; the inactive booking tabs are tinted the canvas grey against the white active tab. The hero uses a horizontal overlay gradient token (`--f-base-color-gradient-overlay-horizontal`) for legibility of white text on imagery.

## Shapes

Shapes are rounded and soft. Primary actions are pills: "Search flights" uses 32px corners on a 58px button and "Book now" uses 64px (`--f-base-radius-full` and `--f-brand-border-radius-rounded` are both 64px). Select buttons such as the cabin selector use 8px (`--f-brand-radius-base`), and the booking card's tab strip uses 16px on its outer corners only (`16px 0px 0px` on the first tab, `0px 16px 0px 0px` on the last). Radio buttons and icon buttons are circles (`50%`, ten uses). Other measured radii are 3px, 4px, 5px and 50px; the token set adds 12px (`--f-brand-radius-small`) and 20px (`--f-brand-border-radius-outer`). Photo cards have rounded top corners in the capture.

## Components

- **Primary button** ("Search flights"): `#8e2157` fill and 1px border, white Graphik Web 16px/500 label, 32px corners, 20px 24px padding, 58px tall.
- **White pill** ("Book now"): white fill and 1px white border, `#5c0931` label in Graphik 16px/400, 64px corners, 16px 32px padding, 58px tall. On hover its faint shadow is removed; on focus it shows a 2px solid `#faf7f9` outline with a 1px offset.
- **Booking tabs**: white, 56px tall, ink text with a line icon; the active tab is burgundy.
- **Select button** ("Economy"): white, 1px `#dbdee8` border, 8px corners, 48px tall.
- **Trip-type pill** ("One way"): white, 1px `#dbdee8` border, 64px corners, 44px tall; on hover the border darkens to `#242630`.
- **Header navigation**: white Graphik 18px labels over the hero, 61px tall targets with 0 8px padding.
- **Alert strip**: white bar, purple info icon, `#333333` link text, close icon at right.
- **Offer card**: photo on top, white panel, light caption below.

## Design System Architecture

No public Qatar Airways design-system documentation or brand guideline was reached; the corporate about page returned HTTP 403. The shipped CSS shows a layered token system in the `--f-` namespace: `--f-base-*` primitives (solid colours such as `--f-base-color-solid-grey-900`, spacing `--f-base-space-*`, type scale `--f-base-type-scale-*`, line heights, radii, shadows and a breakpoint `--f-base-breakpoint-md: 768`), `--f-brand-*` semantic tokens (background-primary, primary-hover, text-muted, border-default, type roles such as page-title-thin, title-5, subheading-medium, caption-medium), and component tokens (`--f-button-primary`, `--f-button-secondary-text-color`, `--f-button-white-outlined-text`). Locale-specific families are tokens too (`--f-base-type-family-ro-primary`). The page also ships Bootstrap variables (`--bs-*`) and Angular Material variables (`--mat-*`), whose default colors are not brand colors. Rebuild with the same three layers: primitives, brand semantics, component tokens.

## Do's and Don'ts

**Do**
- Use burgundy `#8e2157` for the one main action per view and `#5c0931` for its hover.
- Set the hero headline in Jotia at a light weight (300) and keep body in Graphik 16px/24px.
- Use pill shapes (32–64px) for buttons and trip-type toggles, 8px for selects.
- Let photography fill the hero and lay the white header over it.
- Keep the page canvas `#f2f3fa` and put content on white cards.

**Don't**
- Don't use bold headlines; the measured headlines are weight 100 and 300.
- Don't use Bootstrap or Material default colors (`--bs-cyan`, `#212529`) as brand colors.
- Don't add strong shadows; the tokens stay at 8–12% opacity.
- Don't document the "Feedback" tab or the "Need help? Let's chat" bubble as Qatar components; they are support widgets.

## Responsive Behavior

The extractor's mobile pass recorded: the h1 drops from 48px/56px to 36px/48px Jotia Light; body text stays Graphik 16px/24px; the primary CTA becomes the white "Book now" pill (64px corners); the header has a visible toggle labelled "Toggle navigation" with seven header links counted; and the extraction counted up to two card columns (five on desktop). Mobile bands are a 122px white header band, a 1191px media band with content from x=15 to x=365, and a 169px `#f2f3fa` band. Mobile font sizes by frequency are 16, 36, 12, 20, 14 and 17px.

The stylesheet declares Bootstrap-style breakpoints, most often `min-width 992px` (108 rules), `min-width 768px` (81), `min-width 1200px` (79), `max-width 991px` (57) and `min-width 576px` (49), and the brand tokens name 768 as `--f-base-breakpoint-md`. The booking card's mobile arrangement is not measured.

## Iteration Guide

1. Start from the three-layer token set: `#f2f3fa` canvas, white surfaces, `#1f212b` ink, `#8e2157` primary.
2. Set the hero headline in Jotia 48px/56px weight 300 and section titles at 36px weight 100 (measure their family before fixing it).
3. Build buttons as 58px pills: burgundy filled for search, white with burgundy text over imagery.
4. Use `#dbdee8` 1px borders and 8px corners for form selects; switch the border to ink on hover.
5. Keep shadows at the `--f-base-shadow-1` level.
6. Measure deeper pages (booking results, Privilege Club) before adding tokens for tables, alerts or loyalty tiers.
