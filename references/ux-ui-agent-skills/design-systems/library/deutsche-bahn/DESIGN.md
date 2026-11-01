---
version: alpha
name: Deutsche Bahn
category: "Logistics & Mobility"
description: "Deutsche Bahn international booking site (int.bahn.de/en): DB red #ec0016 buttons with 4px corners on white and #f0f3f5 grey bands, slate #282d37 text, DBScreenHead 900 headings (32px/40px desktop) over DBScreenSans 400/700 at 16px, one 8px-blur nav shadow, built on the DB UX Design System's --db-* variables."
colors:
  canvas: "#ffffff"
  page-body: "#f0f3f5"
  ink: "#282d37"
  ink-strong: "#16181b"
  ink-secondary: "#3c414b"
  ink-card: "#334155"
  ink-muted: "#646973"
  ink-navy: "#0c3992"
  primary: "#ec0016"
  primary-hover: "#c50014"
  on-primary: "#ffffff"
  surface-muted: "#d7dce1"
  warning: "#d96000"
typography:
  display:
    fontFamily: DBScreenHead, Arial, Helvetica, sans-serif
    fontSize: 32px
    fontWeight: 900
    lineHeight: 40px
  display-mobile:
    fontFamily: DBScreenHead, Arial, Helvetica, sans-serif
    fontSize: 20px
    fontWeight: 900
    lineHeight: 24px
  badge:
    fontFamily: DBScreenHead, Arial, Helvetica, sans-serif
    fontSize: 20px
    fontWeight: 900
  heading:
    fontFamily: DBScreenHead, "Helvetica Neue", arial, sans-serif
    fontSize: 18px
    fontWeight: 900
    lineHeight: 24px
  heading-card:
    fontFamily: DBScreenHead, Arial, Helvetica, sans-serif
    fontSize: 18px
    fontWeight: 900
    lineHeight: 21.6px
  heading-mobile:
    fontFamily: DBScreenHead, "Helvetica Neue", arial, sans-serif
    fontSize: 16px
    fontWeight: 900
    lineHeight: 24px
  body:
    fontFamily: DBScreenSans, "Helvetica Neue", arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: DBScreenSans, "Helvetica Neue", arial, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  nav:
    fontFamily: DBScreenSans, "Helvetica Neue", arial, sans-serif
    fontSize: 12px
    fontWeight: 700
    lineHeight: 18px
  nav-main:
    fontFamily: DBScreenSans, "Helvetica Neue", arial, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 16px
  link:
    fontFamily: DBScreenSans, "Helvetica Neue", arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  footer-link:
    fontFamily: DBScreenSans, "Helvetica Neue", arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 12px
  input:
    fontFamily: DBScreenSans, "Helvetica Neue", arial, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 7.5px
  md: 12px
  pill: 9999px
spacing:
  s1: 4px
  s2: 7px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 28px
  s9: 32px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 16px 32px
    height: 56px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 16px
    height: 58px
    borderColor: "{colors.primary}"
  button-outline:
    textColor: "{colors.ink-strong}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 7px 8px
    height: 40px
    borderColor: "{colors.ink-strong}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    padding: 0px 0px 0px 20px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    boxShadow: rgba(0, 0, 0, 0.3) 0px 2px 8px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 20px 16px 16px 48px
    height: 56px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 12px 16px 0px
    borderColor: "{colors.surface-muted}"
  footer:
    textColor: "{colors.ink}"
---

## Overview

This file documents the English home page of Deutsche Bahn's international booking site, https://int.bahn.de/en (the queued address https://www.bahn.com redirects to int.bahn.de, where the first page is an eight-language selector; that selector is not what is described here). The page title measured on the live site is "Cheap Train Tickets | Timetables for Germany & Europe - Deutsche Bahn". It is a transactional page: a full-bleed hero photograph with a connection-search panel on top of it, followed by promotional teasers, a three-column information block, a seat-reservation promo and a footer of destination links.

The look is orderly, flat and functional. Text is slate `#282d37` on white `#ffffff` and light grey `#f0f3f5`; the only saturated colour on the interface is DB red `#ec0016`, used for the search button, the teaser buttons, the circular "The new timetable is here!" badge and small chevrons beside links. The logo is the red DB mark at the top left of a white header bar. Photography is warm and human: rail tracks between a green meadow and a snowy field, travellers on platforms, a passenger asleep by a window. One teaser image carries a visible "AI-generated" label in the capture.

The voice is plain and service-oriented: "Search for a connection", "Find best price", "Select now", "Book a seat", "Further information". Headlines are sentence case, for example "The new annual timetable" and "Seat reservation", and offers state conditions directly ("Book saver fares now up to 12 months in advance.").

Role notes. The extractor's `h1` was the white 20px label inside the red circular badge, which is a decoration rather than a page heading, so SOURCES.json overrides it to the `h2` "Search for a connection". An amber-bordered notice reading "You are using an untested browser" appears in the capture; it is a browser-support alert, not marketing UI, and only its accent colour is recorded as `warning`.

## Colors

All values below were measured on the desktop pass of https://int.bahn.de/en. By area the largest background is `#ffffff` (weight 3849), then `#d7dce1` (310), `#ec0016` (94) and `#f0f3f5` (91); the body element itself is `#f0f3f5`.

- `canvas` `#ffffff`: header bar, search panel, cards and teaser bands.
- `page-body` `#f0f3f5`: the page body and the alternating grey bands in the capture; also the fill of the search text inputs.
- `ink` `#282d37`: the most-read text colour (2085 characters), used for headings, body copy and nav labels.
- `ink-strong` `#16181b`: text and 1px border of the outlined "Find best price" button.
- `ink-secondary` `#3c414b`: footer link text (136 characters).
- `ink-card` `#334155`: card body copy (48 characters), found inside the hero card.
- `ink-muted` `#646973`: secondary text (16 characters on the home page).
- `ink-navy` `#0c3992`: the colour the `body` element declares (45 characters read in it); which elements show it was not isolated.
- `primary` `#ec0016` with `on-primary` `#ffffff`: every filled button; the hover state measured on "Search" and "Search connection" is `primary-hover` `#c50014`.
- `surface-muted` `#d7dce1`: the 1px border of the hero card and a grey footer band.
- `warning` `#d96000`: accent of the browser-support notice (background weight 13, and one border).

Browser defaults are not used: no `#0000ee` links were measured. The Swiper variable `--swiper-theme-color` `#007aff` is declared in `:root` by the carousel library and is not a DB colour.

## Typography

Two families, both proprietary DB faces served by the site: DBScreenHead at weight 900 for headings and DBScreenSans at 400 and 700 for everything else. The loaded-font list reads "DBScreenHead 900", "DBScreenSans 700", "DBScreenSans 400" plus the `db-default` and `db-filled` icon fonts. Characters by family: DBScreenSans 1879, DBScreenHead 557.

Probed headline sizes on the home page (recorded in SOURCES.json): the large teaser and promo headings ("The new annual timetable", "Seat reservation") are 32px/900 with a 40px line-height; card and column headings such as "Deutschland-Ticket" and "Tickets & offers" are 18px/900 with a 21.6px line-height; the "Search for a connection" h2 is 18px/900 with a 24px line-height. Body copy is 16px/400 with a 24px line-height. Buttons are 16px/700. The top utility bar ("Private trips", "Business trips", "Help & contact") is 12px/700 with an 18px line-height, while the main navigation labels ("Tickets & offers", "Info & services", "Login") are 16px/700 with a 16px line-height. Links are 14px/400 with a 21px line-height; footer links are 14px/400 with a 12px line-height. Search inputs are 20px/400.

Letter-spacing is `normal` on every measured role and no text-transform is applied. The font stacks end in Arial and Helvetica Neue as shipped (`DBScreenHead, Arial, Helvetica, sans-serif`). DB's faces are not open-source; this file does not name a drop-in substitute, so the shipped fallback stack is the documented substitute.

## Layout

Content sits in a centred column; the desktop pass ran at a 1280px viewport and the measured header box is 1200px wide and 112px tall with a white fill. The structure top to bottom, from the capture and the opened page: a utility row (Private trips, Business trips on the left; Help & contact and the language button EN on the right), the main nav row with the DB logo, four main links, a search icon and Login; a hero photograph with a floating white teaser card ("Summer or winter? Both!") and the red circular badge; the "Search for a connection" panel overlapping the hero; a two-column teaser with image and headline; a three-card row with red full-width buttons; a three-column information block with line icons and bullet lists; a seat-reservation promo; four columns of tourist-destination links; a payment-options row; and the legal footer.

Measured spacing values: paddings of 20px (36 uses), 8px (18), 16px (14), 72px (9), 32px (5), 12px, 40px and 7px; gaps of 4px, 16px and 8px. The scale in the frontmatter follows these. Grey `#f0f3f5` and white bands alternate vertically to separate sections instead of rules.

The shipped `:root` declares container widths `--db-container-3xs` 14rem up to `--db-container-3xl` 48rem and screen widths `--db-screen-xs` 20em, `--db-screen-sm` 48em, `--db-screen-md` 64em, `--db-screen-lg` 90em and `--db-screen-xl` 120em.

## Elevation & Depth

Depth is minimal and always the same recipe. The header carries the only box shadow measured on the page, `rgba(0, 0, 0, 0.3) 0px 2px 8px 0px`. The shipped CSS also declares `0 .125rem .25rem #0000001a`, `0 .125rem .5rem #0000004d` and `0 0 1.25rem #0000001a`, which are the shadows the search panel and floating cards use in the capture; the per-element assignment was not measured.

Everything else is flat: buttons have no shadow (`boxShadow: none` before and after hover), cards use a 1px `#d7dce1` border instead of a shadow, and sections are separated by background colour. Layering is limited to the white search panel and hero card sitting over the photograph, and the red badge overlapping the hero's top left.

## Shapes

The corner language is small and consistent. Buttons measure 4px (the most common radius, weight 10 on the page and 195 uses in the shipped CSS). The hero card measures 7.5px and carries a 1px `#d7dce1` border. A 12px radius appears four times, and a `100%` radius once (recorded as the `pill` token); the one circular element in the capture is the red "new timetable" badge. Two-corner radii (`4px 4px 0px 0px` and `0px 0px 4px 4px`) appear once each. Inputs, the header and the footer have 0px radius.

Chevrons before links and inline icons come from DB's icon fonts (`db-default`, `db-filled`). The information block uses large line illustrations in dark ink with a red accent stroke.

## Components

Primary button. Red `#ec0016` fill, white 16px/700 label, 4px radius, `16px 32px` padding, 56px high ("Search"). The anchor variant used on teasers ("Select now", "Select route", "Search connection") has 16px padding, a 1px `#ec0016` border and a 58px height. On hover the fill becomes `#c50014`.

Outline button. "Find best price": transparent fill, `#16181b` 16px/700 text, 1px `#16181b` border, 4px radius, `7px 8px` padding, 40px high.

Text input. 20px/400 slate text on `#f0f3f5`, 0px radius, 56px high, `20px 16px 16px 48px` padding (the left padding leaves room for a start or destination icon).

Card. The floating hero card: white fill, 1px `#d7dce1` border, 7.5px radius, `12px 16px 0px` padding, 18px/900 heading, slate body text, an outlined button at the bottom.

Navigation. White header with the shadow above; nav labels at 12px/700 (utility row) and 16px/700 (main row). Links in teaser lists use 14px/400 with 20px of left padding that holds a red chevron.

Segmented control. A "1st class / 2nd class" toggle sits at the right of the search panel; its colours were not isolated in the measurement.

Notice. An amber-accented alert box with a warning icon, a bulleted list of supported browsers and a close icon; it uses `#d96000` for its accent.

## Design System Architecture

Deutsche Bahn publishes an open design system, the DB UX Design System, at https://design-system.deutschebahn.com/ (the page returned only its title when fetched) with its code at https://github.com/db-ux-design-system/core-web. The repository README describes it as the monorepo for "DB UX Design System – Generation 3", providing "Design Tokens and components for Web UIs", licensed Apache-2.0. Packages named there: `@db-ux/core-foundations` (CSS/SCSS/Tailwind styles and assets), `@db-ux/core-components`, framework builds for Angular, React, Vue and Web Components, and `@db-ux/db-theme` for Deutsche Bahn websites. The README notes that DB brand colours require the DB Theme, and that brand assets are restricted to DB websites and applications.

The live site ships that system's naming. `:root` declares `--db-container-*`, `--db-screen-*`, `--db-icon-default-font-family` and `--db-icon-filled-font-family`; the CSS font faces include `db-ux-default` and `db-ux-filled`; button labels carry the class `db-web-button__label`. Page-level classes are BEM-style (`content-teaser__headline`, `content-teaser__headline--large`, `quick-finder__headline`, `sld-tsr__headline`). The foundations package's colour documentation (https://raw.githubusercontent.com/db-ux-design-system/core-web/main/packages/foundations/docs/Colors.md) describes variant/level placeholders such as `%db-informational-bg-1` and light and dark modes selected by `data-mode`; the live page's own mode handling was not measured.

All colour, size and radius values in this file are measured from the live page, not taken from the repository.

## Do's and Don'ts

Do reserve `#ec0016` for actions and the badge; every filled button on the page uses it with white text and a 4px radius.

Do set headings in DBScreenHead 900 (32px/40px for promo headings, 18px for card and panel headings) and everything else in DBScreenSans (16px body, 700 for buttons and nav).

Do separate sections with alternating `#ffffff` and `#f0f3f5` bands and a 1px `#d7dce1` border on cards.

Do darken filled buttons to `#c50014` on hover.

Don't add shadows beyond the header's `0 2px 8px` recipe; cards and buttons are flat.

Don't use `#d96000` as a decorative accent; it belongs to the notice component.

Don't use the Swiper default `#007aff` or browser-default link blue; neither is a DB colour.

Don't round corners beyond 4px on buttons or 7.5px on cards, and don't give inputs a radius.

Don't reproduce the DB logo or the brand assets outside Deutsche Bahn properties; the repository states they are restricted.

## Responsive Behavior

Measured at the extractor's 390px mobile pass on https://int.bahn.de/en, and by a probe at the same width: the header is 56px tall (112px on desktop) and its nav text is 16px/400 with a 24px line-height; the large promo heading "Seat reservation" measures 20px/900 with a 24px line-height (32px/40px on desktop); the "The new annual timetable" h3 and "Tickets & offers" measure 18px/900 with a 23.9994px line-height; the "Search for a connection" h2 is 16px/900 with a 24px line-height; body copy (the browser-notice paragraph) stays 16px/400 with a 24px line-height. The teaser button "Search connection" keeps 16px/700, 16px padding, 4px radius and a 58px height. The hero card is 320px wide with its 7.5px radius and `12px 16px 0px` padding. Mobile font sizes by character count are 16px (1439), 14px (376), 18px (172), 20px (130), 24px (109) and 13px (45).

Breakpoint variables declared in `:root`: `--mobileMax` 767 and `--tabletMax` 960, plus the `--db-screen-*` set listed under Layout. How columns reflow between those widths was not measured, and neither was any hover or dark-mode state on mobile.

## Iteration Guide

1. Start from the three fills: `canvas` `#ffffff`, `page-body` `#f0f3f5` and `primary` `#ec0016`. Text is `ink` `#282d37`.
2. Build headings in DBScreenHead 900: `display` 32px/40px for promo headings (20px/24px at 390px), `heading` 18px for panels and cards.
3. Make every filled action a 4px-radius red button with a 16px/700 white label; use `button-outline` (1px `#16181b`) for the secondary action.
4. Put inputs on `#f0f3f5` with 0px radius, 56px height and 20px text.
5. Keep depth to one shadow on the header and 1px `#d7dce1` borders on cards.
6. Pull from the open DB UX packages (`@db-ux/core-foundations`, `@db-ux/db-theme`) before drawing components by hand, and re-measure a value on the live page before changing it.
