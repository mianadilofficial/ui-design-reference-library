---
version: alpha
name: Zendesk
category: "Design Systems"
description: "Zendesk's marketing site: Vanilla Sans in medium weight at a 68px display size, near-black ink (#11110d) on white and warm grey (#f5f5f2) surfaces, a lime #d1f470 call-to-action button with 16px corners, a deep forest green band (#203524) and a darker lime-green accent (#70a32a) used for emphasis words, with very round 40px content cards and full-bleed photographic heroes."

colors:
  canvas: "#ffffff"
  ink: "#11110d"
  surface-soft: "#f5f5f2"
  hairline: "#d5d5d2"
  primary: "#d1f470"
  on-primary: "#11110d"
  accent-green: "#70a32a"
  forest: "#203524"
typography:
  display:
    fontFamily: "\"Vanilla Sans\", Arial, sans-serif"
    fontSize: 68px
    fontWeight: 500
    lineHeight: 71.4px
  display-mobile:
    fontFamily: "\"Vanilla Sans\", Arial, sans-serif"
    fontSize: 43px
    fontWeight: 500
    lineHeight: 45.15px
  subheading:
    fontFamily: "\"Vanilla Sans\", Arial, sans-serif"
    fontSize: 26px
    fontWeight: 500
    lineHeight: 32.5px
  body:
    fontFamily: "\"Vanilla Sans\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 23.2px
  button:
    fontFamily: "\"Vanilla Sans\", Arial, sans-serif"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 28px
  nav:
    fontFamily: "\"Vanilla Sans\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  input:
    fontFamily: "\"Vanilla Sans\", Arial, sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 21px
rounded:
  xs: 4px
  sm: 12px
  md: 16px
  lg: 20px
  xl: 32px
  2xl: 40px
  pill: 9999px
spacing:
  s1: 2px
  s2: 2.4px
  s3: 4px
  s4: 4.9px
  s5: 8px
  s6: 8.4px
  s7: 9px
  s8: 10px
  s9: 12px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 10px 20px
    height: 48px
  nav:
    textColor: "{colors.ink}"
    padding: 2px 0px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.xs}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    padding: 12px
    height: 48px
    boxShadow: rgb(213, 213, 210) 0px 0px 0px 1px inset
  card:
    backgroundColor: "{colors.surface-soft}"
    textColor: "{colors.ink}"
    rounded: "{rounded.2xl}"
  card-dark:
    backgroundColor: "{colors.forest}"
    textColor: "{colors.surface-soft}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
---

## Overview

The Zendesk homepage capture is warm, rounded and confident. A thin black announcement strip sits at the very top, then a white header row with the Zendesk wordmark, five menu items (Platform, Products, Solutions, Resources, Pricing), a lime "Try for free" button and an outlined "View demo" button. The hero is a large rounded rectangle filled with a photograph of a woman in green headphones, with an overline in small caps ("AI-powered customer service platform"), a 68px white headline "Automate up to 80% of interactions with Zendesk AI agents.", a one-line proof statement, a work-email field and the lime button. A small floating chat-style card ("AI agent: I found the issue...") overlaps the photo.

Below the hero a row of customer logos in monochrome, a centred statement headline with the word "smarter" picked out in green, and then tall soft-grey cards, each holding a headline on the left and a product UI illustration on the right. The voice is declarative and number-led ("Proven across 4.8B+ resolutions", "14-day free trial. No credit card required."). A black circular chat launcher and the announcement strip are page chrome and are not documented as brand components.

## Colors

`canvas` is #ffffff. `ink` is #11110d, a warm near-black that is both the text colour and the colour of the darkest band; it is the second most common background after white. `surface-soft` #f5f5f2 is a warm off-white used for the rounded cards and as light text on dark bands, and `hairline` #d5d5d2 is the 1px inset border of the input field. The site's `forest` band #203524 is a deep green that appears in sections lower on the page.

The action colour is `primary` #d1f470, a pale lime fill with `on-primary` #11110d text; every "Try for free", "Explore the platform" and "Read the report" button uses it, which makes it the single recurring brand signal along with the black wordmark. `accent-green` #70a32a is a deeper green used for emphasis inside headlines (the word "smarter") rather than for fills. There are also several translucent overlays of the ink colour (at roughly 5%, 11% and 18% opacity) used for subtle tints; they are not tokens.

## Typography

One family, "Vanilla Sans", with fallback Arial and sans-serif, loaded at weights 400, 500, 600 and 700. Headlines are medium (500): `display` 68px on a 71.4px line height, dropping to 43px on a 45.15px line height at the 390px mobile width; `subheading` 26px on 32.5px. `body` is 16px regular on 23.2px, `button` is 18px weight 600 on 28px, and `nav` is 14px regular on 21px. Inputs use 15px. Display lines are set very tight (about 1.05) and large, which gives the hero its poster feel; supporting text is much smaller, so the page alternates between shouting and whispering.

Substitutes: Vanilla Sans is Zendesk's proprietary web font; Arial is the declared fallback, and any friendly grotesque (with round bowls and a double-storey a) approximates it.

## Layout

The page's own variables define the structure: content width 1150px, section padding 88px top and bottom, 24px horizontal padding on sections, content margins of 24px, 48px and 64px (small, medium, large), and a 32px button margin. The hero is a rounded rectangle that sits just inside the viewport edges rather than touching them, so the page frame feels like a soft container. Following sections centre their headline and subhead over a short measure, then drop into wide cards with a text column and an illustration column. Thin vertical connector lines tie the stacked cards together like a timeline.

## Elevation & Depth

Mostly flat. Depth comes from (1) very large photographic imagery, (2) soft grey cards sitting on white, (3) small white UI panels layered over the illustrations, and (4) the dark-on-light switch between sections. The input field uses a 1px inset ring in `hairline` rather than a border. Buttons have no shadow.

## Shapes

Corners are generously round and increase with the size of the object. Text links use `rounded.xs` 4px; inputs `rounded.sm` 12px; buttons `rounded.md` 16px; the page's `--radius` variable is `rounded.lg` 20px; large panels `rounded.xl` 32px; and the big grey feature cards `rounded.2xl` 40px. The `rounded.pill` 9999px value exists in the measured set but the capture shows no pill buttons. Buttons are rounded rectangles rather than pills.

## Components

- **Primary button.** `button-primary`: lime #d1f470 fill, #11110d 18px weight-600 label, 16px radius, 10px by 20px padding, 48px tall. A smaller 16px version (10px by 16px padding, 43px tall) is used inside the header.
- **Outlined button.** "View demo" is an outlined rounded button beside the primary in the header, in ink on white.
- **Email field.** `text-input`: white, 12px radius, 12px padding, 48px tall, with a 1px inset ring in `hairline`, 15px text.
- **Feature card.** `card`: `surface-soft` fill, 40px radius, large internal padding, headline left and product UI right.
- **Dark card.** `card-dark`: `forest` fill with `surface-soft` text and 16px radius, used on the green band.
- **Navigation.** `nav-link`: 14px ink text with a small chevron on dropdown items.

## Design System Architecture

Zendesk publishes [Zendesk Garden](https://garden.zendesk.com), described on its homepage as the design system for Zendesk products and "the source of truth" for tools, standards and best practices, organised into Design, Components and Patterns, with packages under the `@zendeskgarden` namespace and Garden 9 as the current major version. The homepage capture does not use it: the page declares only 19 custom properties, all site-specific (`--space-sectionPadding`, `--space-globalPadding`, `--contentWidth`, `--radius` and similar), and the extracted CSS contains no Garden class prefixes or variables. The typeface also differs from what the Garden homepage states, which names none. The brand page I tried (zendesk.com/brand) returned 404, so no official brand guidelines were read. This document therefore describes the de-facto marketing system from the site's own variables and measured styles, and takes no values from Garden.

## Do's and Don'ts

- Do use lime #d1f470 with ink text for the one primary action in each section.
- Do set headlines in Vanilla Sans medium at large sizes with tight leading.
- Do round everything, scaling the radius with the object (16px for buttons, 40px for big cards).
- Do pair warm greys (#f5f5f2) with white rather than cool greys.
- Don't put white text on the lime button; it uses ink.
- Don't use the deeper green as a fill for buttons; it is for emphasis words and dark bands.
- Don't use drop shadows on buttons.
- Don't use browser-default link colours.

## Responsive Behavior

The display headline shrinks from 68px to 43px at the 390px width; section padding is controlled by variables (88px vertical, 24px horizontal); the capture of the mobile layout was not studied beyond its headline size, so no further mobile behaviour is documented. The `--space-tabletExtraPadding` variable is 0px, so tablet widths use the same padding as phones.

## Iteration Guide

1. Start with white `canvas`, `ink` text, and Vanilla Sans (Arial fallback) in medium weight.
2. Make one lime button per block with `button-primary`.
3. Use `surface-soft` for feature cards at 40px radius and `forest` for dark bands.
4. Colour emphasis words in `accent-green` only on light backgrounds.
5. Keep content to the 1150px width with 88px section padding.

6. Describe imagery as part of the system: warm, human photography with natural light and a single saturated accent object (here, green headphones), and product UI shown in small white panels on soft grey cards.
