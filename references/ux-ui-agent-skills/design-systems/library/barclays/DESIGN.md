---
version: alpha
name: Barclays
category: "Banking & Insurance"
description: "The Barclays Group corporate site (home.barclays): a white and #f6f6f6 editorial layout in the proprietary Barclays Effra face with tight negative tracking on 48px and 32px headings, 99px-radius pill buttons filled with action blue #006de3, a deep navy #1a2142 hero panel and cards outlined with a 2px #e2e2e2 border."
colors:
  canvas: "#ffffff"
  ink: "#515151"
  ink-strong: "#272727"
  ink-muted: "#8e8e8e"
  primary: "#006de3"
  on-primary: "#ffffff"
  primary-alt: "#005bbe"
  brand-cyan: "#00aeef"
  surface-soft: "#f6f6f6"
  surface-navy: "#1a2142"
  border: "#e2e2e2"
  error: "#e3000f"
  success: "#09821f"
  warning: "#ffba00"
typography:
  display:
    fontFamily: "\"Barclays Effra\", Arial, sans-serif"
    fontSize: 48px
    fontWeight: 700
    lineHeight: 58px
    letterSpacing: "-1.152px"
  display-mobile:
    fontFamily: "\"Barclays Effra\", Arial, sans-serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 38px
    letterSpacing: "-0.512px"
  heading:
    fontFamily: "\"Barclays Effra\", Arial, sans-serif"
    fontSize: 48px
    fontWeight: 500
    lineHeight: 58px
    letterSpacing: "-1.152px"
  subheading:
    fontFamily: "\"Barclays Effra\", Arial, sans-serif"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 38px
    letterSpacing: "-0.512px"
  body:
    fontFamily: "\"Barclays Effra\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  body-mobile:
    fontFamily: "\"Barclays Effra\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
  button:
    fontFamily: "\"Barclays Effra\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
rounded:
  xs: 8px
  sm: 99px
spacing:
  s1: 2px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 16px
  s6: 24px
  s7: 28px
  s8: 32px
  s9: 40px
  s10: 48px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 2px 16px
    height: 32px
    borderColor: "{colors.primary}"
  button-large:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 10px 28px
    height: 48px
    borderColor: "{colors.primary}"
  button-outline:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 10px 28px
    height: 48px
    borderColor: "{colors.primary}"
  button-outline-inverse:
    backgroundColor: "{colors.surface-navy}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 10px 28px
    height: 48px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.button}"
  nav:
    textColor: "{colors.ink-strong}"
    typography: "{typography.button}"
    height: 60px
  nav-link-hover:
    textColor: "{colors.primary}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.xs}"
    padding: 16px
    borderColor: "{colors.border}"
  footer:
    backgroundColor: "{colors.surface-soft}"
    textColor: "{colors.ink}"
    padding: 0px 0px 12px
    height: 676px
---

## Overview

`https://home.barclays/` is the Barclays Group corporate site (page title "Barclays Group corporate website | Barclays"), not the retail banking site. It is a clean editorial news-and-insights layout, 5,578px tall at 1280px wide: a white header with the cyan eagle-and-wordmark logo, two blue pill buttons ("Contact Us", "Online Banking") and a "Search" link; a single row of six navigation links (News, Insights, Who We Are, Investors, Sustainability, Careers); a split hero with a full-bleed photograph on the left and a deep navy panel on the right carrying a white headline, a short paragraph and an outlined "Read more" pill; then repeating three-card rows under centred headings ("Our Sustainability insights", "Our UK unlocked insights") on alternating white and `#f6f6f6` bands; and a long `#f6f6f6` footer (676px) of link columns headed Policies, News, Important information and Other sites.

The voice is institutional and plain: "Barclays launches Backing Britain's Future", "Working together for a better financial future", "Navigating the future: ideas, analysis and perspectives from Barclays". The hero headline changed between the capture ("Barclays launches Backing Britain's Future") and a later fetch of the page ("Barclays completes acquisition of GoHenry"), so the hero is editorial content, not a fixed brand element. Photography is documentary (energy pylons, wind-farm workers, a commercial kitchen, a city waterfront) and cards sit on a white surface with a visible 2px grey outline.

## Colors

- **Surfaces:** `canvas` `#ffffff` (9,623 area units) and `surface-soft` `#f6f6f6` (5,622) alternate by band; `surface-navy` `#1a2142` (621) fills the hero text panel.
- **Text:** `ink` `#515151` is the most-read colour (3,403 characters, body copy); `ink-strong` `#272727` (1,115) is for headings, nav and links; white (334) on navy and blue; `primary` `#006de3` (136) for outline-button text and nav hover.
- **Action:** `primary` `#006de3` fills the pill buttons and also appears as their 2px border (18 measured uses). `primary-alt` `#005bbe` is declared as the alternate interactive blue (`--t-color-interactive-alt`). On hover the nav links change from `#272727` to `#006de3`.
- **Brand:** `brand-cyan` `#00aeef` is declared as `--t-color-primary` and `--t-brand-logo-color` (the logo's declared colour). Buttons use the action blue `#006de3`, not the cyan.
- **Lines and neutrals:** `border` `#e2e2e2` is the card border (13 uses; `--t-color-40`); `ink-muted` `#8e8e8e` is the declared mid-grey (`--t-color-50`).
- **Status:** `error` `#e3000f`, `success` `#09821f` and `warning` `#ffba00` are declared on `:root` (`--t-color-error`, `--t-color-success`, `--t-color-warning`); no status colour is visible on the home page.

## Typography

One family: Barclays Effra, loaded at 400, 500 and 700 (4,988 measured characters), with `Arial, sans-serif` as the declared fallback (the shared `--scl-font-family` lists `Arial, Verdana, sans-serif`). Effra is a proprietary face; only the declared fallback is documented.

- `display` 48px / 700 / 58px with -1.152px letter-spacing, the white hero headline (`display-mobile`: 32px / 700 / 38px with -0.512px).
- `heading` 48px / 500 / 58px with -1.152px, centred section titles ("Our Sustainability insights").
- `subheading` 32px / 500 / 38px with -0.512px, card titles.
- `body` 16px / 400 / 24px in `{colors.ink}`; `button` 16px / 500 / 24px for buttons, nav links and links.

Measured sizes by characters: 16px (4,227), 32px (630) and 48px (131). Weights: 400 (3,556), 500 (1,322), 700 (110). Tracking tightens as size grows: 0 at 16px, -0.512px at 32px, -1.152px at 48px. The stylesheet declares `--t-type-font-size-*` steps from 0.75rem to 3rem and light (300) and heavy (900) weights, though only 400, 500 and 700 are loaded.

## Layout

The stylesheet declares `--t-max-width` as 1280px and `--t-hero-max-width` as 1440px. The page is a full-width stack of sections: header (logo and actions on one row, nav on a second 60px row), split hero, then card bands. Card rows are three columns of 395px-wide cards (each 765px tall in the Sustainability row) separated by a measured 24px gap; the section heading is centred above and a 395px-wide, 48px-tall pill ("Read more insights", "Visit our UK unlocked hub", "Our IB Insights hub") follows each row. Cards carry an image, a 32px title, a 16px description and a "Read more" outline pill pinned to the bottom. Some cards overlay a pill-shaped label ("EXPERT INSIGHTS", "POLICY LAB") on the image.

Measured gaps: 24px (38 uses), 8px (34), 16px (9). Paddings: 16px (41), 12px (28), 8px (21), 10px (17), 28px (17), 24px (11), 40px (9), plus single 48px and 32px values. The declared spacing scale runs 2px, 4px, 8px, 12px, 16px, 24px, 32px, 40px, 56px, 72px, 80px and 120px (`--t-spacing-3xs` to `--t-spacing-6xl`).

## Elevation & Depth

No box-shadow was measured on the home page; separation comes from 2px borders (`{colors.border}` on cards, `{colors.primary}` on outline buttons) and from band colour changes. The stylesheet does declare shadows for other contexts: `--t-raised-box-shadow` `0 0 20px rgba(var(--t-color-70-rgb),0.2)`, `--t-header-box-shadow` `0 -6px 16px #0003`, and a focus ring `--t-focus-box-shadow` of `0 0 0 2px #fff, 0 0 0 4px` in the interactive blue. Those are declared, not measured on the rendered page.

## Shapes

Two radii were measured: 99px (19 elements: every pill button) and 8px (26: cards and images). The stylesheet declares a wider scale: `--t-border-radius-sm` 4px, `--t-border-radius` 8px, `--t-border-radius-lg` 12px, `--t-border-radius-xl` 16px, `--t-border-radius-2xl` 24px and `--t-border-radius-3xl` 32px, with `--t-button-border-radius` 99px. Chips on card images are also pill-shaped in the capture.

## Components

- **Header pill ("Online Banking", "Contact Us"):** `{colors.primary}` fill and 2px border, white Barclays Effra 16px / 500, 99px radius, `2px 16px` padding, 32px tall (142px and 115px wide).
- **Large pill ("Read more insights", "Visit our UK unlocked hub", "Our IB Insights hub"):** same fill, `10px 28px` padding, 48px tall, 395px wide.
- **Outline pill ("Read more" on cards):** white fill, `{colors.primary}` text and 2px border, 135px by 48px.
- **Inverse outline pill (hero "Read more"):** `{colors.surface-navy}` fill, white text and 2px white border.
- **Nav:** a 60px row of 16px / 500 `{colors.ink-strong}` links; hover turns the text `{colors.primary}`.
- **Card:** white, 8px radius, 16px padding, 2px `{colors.border}` outline, image on top.
- **Chip:** pill-shaped label over a card image (fill not measured).
- **Footer:** `{colors.surface-soft}` with `{colors.ink}` text, 676px tall.

## Design System Architecture

No public design-system or brand-guideline page was found: the home page and `https://home.barclays/who-we-are/` link no brand guidelines, brand assets, design system, developer portal or GitHub (the closest are press-release pages). The de-facto system is a token layer in the shipped CSS: 308 custom properties on `:root`, mostly prefixed `--t-` plus a shared `--scl-` set. Colours are numbered greys (`--t-color-10` `#fff`, `--t-color-30` `#f6f6f6`, `--t-color-40` `#e2e2e2`, `--t-color-50` `#8e8e8e`, `--t-color-60` `#515151`, `--t-color-70` `#272727`, `--t-color-100` `#000`) plus semantic names (`--t-color-primary` `#00aeef`, `--t-color-interactive` `#006de3`, `--t-color-error`, `--t-color-success`, `--t-color-warning`). `--scl-brand-blue` is `#006de3`, matching the interactive colour. Radius, spacing and type scales are declared as t-shirt sizes. Component variables exist for buttons, chips, banners, heroes, promo panels, forms, loading indicators and a multimedia control, so the token layer reaches down to component level.

## Do's and Don'ts

- Do use `{colors.primary}` pills (99px radius) for actions and keep labels in Barclays Effra 500.
- Do outline cards with 2px `{colors.border}` and use 8px corners, with no shadow.
- Do tighten letter-spacing as headings grow (-0.512px at 32px, -1.152px at 48px).
- Do alternate white and `{colors.surface-soft}` bands and centre section headings.
- Don't use `{colors.brand-cyan}` as a button fill; it is the logo and graphic colour.
- Don't add shadows to cards or buttons on the home layout; none was measured.
- Don't use hero copy as a fixed brand statement: it rotates.

## Responsive Behavior

Measured at 390px: the h1 steps from 48px to 32px / 700 / 38px (342px by 76px) with -0.512px tracking; the h2 steps from 48px to 32px / 500 / 38px; body text keeps 16px / 400 but its line height is 22px instead of 24px (306px wide by 242px tall); the header "Online Banking" pill is unchanged (142px by 32px, `2px 16px` padding). By characters, the mobile sizes are 16px (4,179), 24px (630) and 32px (131), so card titles drop from 32px to 24px. The mobile pass detected no nav role, and the header fetch lists a "Menu" button, so the mobile navigation layout is not measured; breakpoint widths and card column counts are not measured either.

## Iteration Guide

1. Set `canvas` `#ffffff`, `ink` `#515151`, `ink-strong` `#272727`, `primary` `#006de3`, `surface-soft` `#f6f6f6`, `surface-navy` `#1a2142`.
2. Use Barclays Effra (or the Arial fallback) at 400, 500 and 700; apply -1.152px tracking to 48px and -0.512px to 32px.
3. Build a split hero: photo left, `#1a2142` panel right with a white headline and an inverse outline pill.
4. Compose three-card rows of 8px-radius, 2px-bordered cards with 24px gaps; end each row with one centred 48px pill.
5. Keep pills at 99px radius and `10px 28px` (large) or `2px 16px` (header) padding.
6. Check mobile against the 390px values above; the mobile menu is not measured.
