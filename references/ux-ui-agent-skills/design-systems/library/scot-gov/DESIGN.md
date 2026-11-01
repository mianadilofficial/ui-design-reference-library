---
version: alpha
name: Scottish Government
category: "Design Systems"
description: "gov.scot is built on the Scottish Government Design System: Roboto throughout (44px/56px bold H1, 19px/32px body), near-black ink (#1a1a1a), brand blue (#0065bd) for links and the primary button, a white canvas (#ffffff) with light grey panels (#f8f8f8, #ebebeb), square 0px corners and a thick blue top rule above each content section. Hover blue is #00437d."
colors:
  canvas: "#ffffff"
  ink: "#1a1a1a"
  primary: "#0065bd"
  on-primary: "#ffffff"
  surface-panel: "#ebebeb"
  surface-alt: "#f8f8f8"
  ink-secondary: "#5e5e5e"
  hairline: "#b3b3b3"
  primary-hover: "#00437d"
  secondary-brand: "#333e48"
  negative: "#d32205"
typography:
  display:
    fontFamily: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 44px
    fontWeight: 700
    lineHeight: 56px
  display-mobile:
    fontFamily: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 30px
    fontWeight: 700
    lineHeight: 40px
  subheading:
    fontFamily: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 19px
    fontWeight: 700
    lineHeight: 32px
  body:
    fontFamily: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 19px
    fontWeight: 400
    lineHeight: 32px
  button:
    fontFamily: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
rounded:
  none: 0px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 18px
  s8: 23px
  s9: 24px
  s10: 31px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 16px 72px 16px 16px
    height: 56px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.surface-alt}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 6px 56px 6px 10px
    height: 48px
    borderColor: "{colors.ink-secondary}"
  footer:
    backgroundColor: "{colors.surface-panel}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    borderColor: "{colors.hairline}"
---

## Overview

The captured page is the gov.scot home page. It is an unadorned, text-forward government portal: a white page with a header logo ("Scottish Government / Riaghaltas na h-Alba") at left and a search field with a square blue search button at right, a one-line navigation (About, Topics, News, Publications, Statistics and research, Consultations, Blogs), and then a 44px bold H1 "The Scottish Government". Below it a lead block pairs a photograph of the Saltire flag with the linked headline "Programme for Government", beside a column of two image-led promos (Bank holidays on a solid blue calendar tile, Cost of living support).

The rest of the page is a stack of sections (Publications, Consultations and Topics; News; Statistics and research), each introduced by a short thick blue bar above a bold black heading. Content is lists of blue linked titles with small grey category and date lines. The Topics column sits on a pale grey panel and holds a keyword search, a checkbox filter list and a blue "Search policies" button. "See all ..." links end each section with a chevron and a blue underline.

At the very top of the capture a green strip shows a cookie-preference message; it is a consent notice, not part of the brand layout, and is not described further here. The voice is plain and sentence-case ("Find out the dates of upcoming Scottish bank holidays"), with bilingual English and Gaelic in the logo only.

## Colors

- **Canvas (#ffffff)** is the page background and the primary background in the design system.
- **Ink (#1a1a1a)** is the most-read text colour for headings and body.
- **Brand blue (#0065bd)** colours links, linked headlines, the section-top bars, the search button, the primary button fill and the Bank holidays tile. The design system lists the brand and link colour as #0065bd.
- **Hover blue (#00437d)** is the pressed and hover state of the primary button, measured on the page. The design system documents link hover as #00437e, one unit different, so only the measured value is used.
- **Panel grey (#ebebeb)** fills the footer and the largest panel areas; **alt grey (#f8f8f8)** is the secondary background (the Topics panel, text-field fill).
- **Secondary ink (#5e5e5e)** is the grey of category and date lines and the input border.
- **Hairline (#b3b3b3)** draws dividers and borders.
- **Secondary brand (#333e48)** is a dark slate listed in the design system and **negative (#d32205)** its error red; neither is prominent on this page.

The design system's colour page also lists Positive #1a7032 (the green used for the cookie strip), and states that default component colours meet accessible contrast standards and that an extended illustration palette comes in 10% tints.

## Typography

**Roboto** at weights 400 and 700, with "Helvetica Neue", Helvetica, Arial and sans-serif fallbacks, loaded from self-hosted Roboto web-font files. The system's typography page mandates Roboto and gives the large-screen sizes the page measures: H1 44px/56px bold, body 19px/32px regular; and the small-screen sizes of 30px for the H1 and 16px for body. The page uses 30px/40px bold for section-lead headings, 19px/32px bold for list titles, 16px bold for buttons, and 14px for the small grey metadata lines. Headings are sentence case without terminal punctuation, and links are blue with underlines.

## Layout

A single centred wrapper (`ds_wrapper`); the home page uses a lead block of two thirds and one third, separated by a thin vertical hairline, then three equal columns for Publications, Consultations and Topics, then three columns for News and for Statistics. Measured gaps of 32px separate columns; sections are spaced with 24px to 40px paddings. Lists use generous 32px line height, so link titles breathe. Every section opens with a short blue bar and a heading, giving the page a ruled, document-like rhythm.

## Elevation & Depth

None. There are no measured box shadows or radii. Panels are flat grey fills and boxes are defined by borders (#b3b3b3 or #5e5e5e on inputs). The only emphasis devices are colour blocks (blue tiles and buttons) and the blue top rules. Do not add shadows.

## Shapes

Square geometry is applied consistently so that nothing on the page looks decorative: the same sharp corner appears on the search button, the filter checkboxes, the promo tiles and the primary button, which makes the interface feel official and legible rather than playful.

Everything is square: buttons, text inputs, checkboxes, tiles and photographs have 0px corner radius. The search button is a blue square attached to the right edge of the field. Icons (calendar, search, chevrons, back-to-top arrow) are simple linear glyphs. The few non-rectangular elements are the circular speech bubble inside a photograph and the Saltire in the logo.

## Components

- **Search field and button.** 48px tall field on #f8f8f8, 1px dark border, square blue button with magnifier at the right.
- **Primary button.** Blue (#0065bd) fill, white 16px bold label, 56px tall, left-aligned text with a chevron at the right (padding 16px 72px 16px 16px), 0px radius; hover darkens to #00437d.
- **Section heading.** Short blue bar above a bold black heading.
- **Linked title list.** 19px bold blue titles, grey 14px category and date lines, thin divider between items.
- **Link with chevron ("See all publications").** Bold blue text, chevron icon, blue underline.
- **Checkbox filter.** Square outlined boxes with 16px labels inside the grey Topics panel.
- **Promo tile.** Solid blue square with a white icon, or a photograph, a blue bold title and a short paragraph with an underlined link.
- **Footer.** Grey (#ebebeb) with a hairline top border.

## Design System Architecture

The site runs on the Scottish Government's own design system, documented at [designsystem.gov.scot](https://designsystem.gov.scot) (maintained by the Scottish Government; the page shows version 4.3.0, an npm package `@scottish-government/design-system`, and source at [github.com/scottish-government-design-system/design-system](https://github.com/scottish-government-design-system/design-system)). The system supplies styles, components and patterns. gov.scot demonstrably uses it: its stylesheet `/webfiles/.../assets/css/main.css` and markup use the `ds_` BEM-style class family (`ds_wrapper`, `ds_button`, `ds_site-navigation__link`, `ds_checkbox--small`, `ds_icon`, `ds_skip-links`), and the measured colours match the colour page (brand #0065bd, text #1a1a1a, secondary text #5e5e5e, border #b3b3b3, secondary background #f8f8f8).

## Do's and Don'ts

- Do use Roboto and sentence-case headings, with blue underlined links.
- Do keep corners square and surfaces flat.
- Do mark each section with the short blue rule and a bold heading.
- Do use #0065bd for links and the primary button, darkening to #00437d on hover.
- Don't use colour alone to describe a control in copy.
- Don't add shadows, gradients or rounded corners.
- Don't use the green (#1a7032) as a brand accent; it is the system's positive-message colour.
- Don't use more than one H1 per page.

## Responsive Behavior

The design system gives small-screen and large-screen type sets: the H1 drops from 44px to 30px and body from 19px to 16px; the 390px capture measured the H1 at 30px/40px. The nav, three-column grids and side-by-side promo layout are described by the system's responsive grid, but only the type scale was measured at mobile. Buttons stay at a generous 56px tall tap height.

## Iteration Guide

1. White canvas (#ffffff), ink #1a1a1a, grey panels #f8f8f8 and #ebebeb.
2. Roboto: 44px/56px bold H1, 19px/32px body, 16px bold button labels.
3. Links and primary buttons in #0065bd; hover #00437d.
4. 0px radius everywhere; no shadows.
5. Open each section with a short blue bar and a bold heading; list items with grey metadata lines.
6. Use the 4px to 31px spacing steps and 32px column gaps.
