---
version: alpha
name: Citi (Citigroup corporate site)
category: "Banking & Insurance"
description: "The Citigroup corporate site (citigroup.com) uses Citi Sans Text at 400 weight on a pale #f6f8fa page with a deep navy #0f1632 band, a cobalt #255be3 button with 6px radius that darkens to #163788, 20px-radius cards in #f0f5f7, 36px headlines, and no drop shadows beyond a single soft blue lift."
colors:
  surface-navy: "#0f1632"
  page-body: "#f6f8fa"
  ink-on-dark: "#ffffff"
  primary: "#255be3"
  on-primary: "#ffffff"
  surface-card: "#f0f5f7"
  ink: "#000000"
  ink-bronze: "#966425"
  ink-oxblood: "#460303"
  ink-gray: "#a4acaf"
  primary-hover: "#163788"
  input-border: "#bcc5c9"
  canvas: "#f6f8fa"
  citi-blue: "#0041a5"
typography:
  display:
    fontFamily: Citi-Sans-Text-Regular
    fontSize: 36px
    fontWeight: 400
    lineHeight: 46px
  display-mobile:
    fontFamily: Citi-Sans-Text-Regular
    fontSize: 24px
    fontWeight: 400
    lineHeight: 30px
  subheading:
    fontFamily: Citi-Sans-Text-Regular
    fontSize: 30px
    fontWeight: 400
    lineHeight: 42px
  body:
    fontFamily: Citi-Sans-Text-Regular
    fontSize: 32px
    fontWeight: 400
    lineHeight: 40px
  button:
    fontFamily: Citi-Sans-Text-Regular
    fontSize: 14px
    fontWeight: 400
    lineHeight: 15px
rounded:
  xs: 1px
  sm: 6px
  md: 20px
  pill: 9999px
spacing:
  s1: 6px
  s2: 8px
  s3: 14px
  s4: 16px
  s5: 30px
  s6: 32px
  s7: 40px
  s8: 42px
  s9: 44.25px
  s10: 48px
components:
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 14px 16px
    height: 45px
    borderColor: "{colors.primary}"
  button-secondary:
    textColor: "{colors.ink-on-dark}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 14px 16px
    height: 45px
    borderColor: "{colors.ink-on-dark}"
  text-input:
    backgroundColor: "{colors.ink-on-dark}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 8px 12px
    height: 42px
    borderColor: "{colors.input-border}"
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink-oxblood}"
    rounded: "{rounded.md}"
---

# Citi (Citigroup corporate site)

## Overview

This document describes the corporate home page of Citigroup, measured at https://www.citigroup.com (the final URL resolved to the `/global` home; page title "Citi | Global Investment Bank and Financial Services"). It is the group and investor-facing site, not the consumer banking site, and is named after the measured site accordingly. On the About Us page (opened for this document) Citi states its mission as "to serve as a trusted partner to our clients" by "responsibly providing financial services that enable growth and economic progress", and says it serves clients in more than 180 countries and jurisdictions.

The page is an institutional communications surface. Its content blocks, taken from the measured text and the opened home page, are a hero for the current earnings or editorial story (the measured hero heading is "Responsibility in the Age of AI"; the live page at the time of fetching led with "Third Quarter 2026 Results and Key Metrics", so the hero rotates), a navy band that pairs a photograph of colleagues with the sentence "We are dedicated to responsibly providing financial services to enable growth and economic progress." and a "Learn more about Citi" outline button, an "OUR BUSINESSES" block ("We offer products and services as one integrated institution while treating our clients as one global relationship.") with a six-item arrow list (Overview, Services, Markets, Banking & International, Wealth, U.S. Consumer Cards), and a row of press-release cards.

In the capture, the header and hero are rendered faint because their entrance transitions had not finished when the screenshot was taken, so their colors in this document come from computed styles and not from pixels. The remaining sections are fully drawn.

The overall impression is calm and corporate: one neutral typeface at a single regular weight, large type, a pale blue-gray page, generous 20px rounding on cards and photographs, a deep navy for the brand moment and a single saturated cobalt for actions. Photography shows people in conversation and at work. Press cards carry a small uppercase label ("PRESS RELEASE") above the title.

## Colors

All values are measured on the live page.

- **Canvas `#f6f8fa`** (also `page-body`): the body background, a pale cool gray. The capture is mostly white (46%) and navy (26%) by pixels.
- **Surface navy `#0f1632`**: the largest background area by DOM weight (8804) and the full-width band behind the photo card and the "Our Businesses" block.
- **Ink `#000000`**: the most-read text color (1678 characters) and the color of headings (H1, H3) on light grounds.
- **Ink on dark `#ffffff`**: the second most-read color (1412 characters); body copy, button labels and links on navy and cobalt.
- **Primary cobalt `#255be3`**: fills the "Read More" button (1px border in the same color) and colors the hover borders on navigation items. On-primary text is white.
- **Primary hover `#163788`**: the measured fill and border of "Read More" on hover.
- **Surface card `#f0f5f7`**: the fill of the press-release cards.
- **Ink oxblood `#460303`**: the measured color of the "PRESS RELEASE" label on cards (204 characters).
- **Ink bronze `#966425`** (236 characters) and **ink gray `#a4acaf`** (14 characters): further measured text colors. Which elements carry them was not isolated.
- **Input border `#bcc5c9`**: the 1px border of the search-style text field.
- **Citi blue `#0041a5`**: declared as `--citi-blue-200` on the root element and present 21 times in the stylesheet; it is the brand blue in the site's variables, while the measured button fill is the brighter `#255be3`.

The root variables define a large palette of tinted scales (blue, gray, olive, plum, forest, yellow, orange and others, each with alpha steps such as `-10`, `-20`, `-40` and `-70`) plus `--citi-red`. Only the colors above were observed on visible elements, so the remaining scale values are not tokens here.

## Typography

One family is in use on every measured character: **Citi Sans Text** (CSS family name `Citi-Sans-Text-Regular`), 3600 characters in total, with weights 400 (3258 characters) and 700 (342). The icon font `ICGDSIcons` is also loaded. The stylesheet declares a wider family set: Citi Sans Text (Regular, Italic, Bold, Bold Italic), Citi Sans Display (the same four), Citi Sans Condensed Regular (and italic), Citi Serif Display (Regular and Italic), Overpass and Overpass Mono.

| Role | Size / line height | Weight |
|---|---|---|
| Display (H1 "Responsibility in the Age of AI") | 36px / 46px | 400 |
| Display, mobile pass | 24px / 30px | 400 |
| Subheading (H3) | 30px / 42px | 400 |
| Body (lead statement on navy) | 32px / 40px | 400 |
| Button | 14px / 15px | 400 |

By characters, the size list is led by 30px (956), then 15px (579), 14px (539), 16px (394), 28px (239), 32px (215) and 11px (204). The 11px size at weight 700 in uppercase labels the press cards; 20px uppercase text carries 2.22px letter spacing (57 characters).

Hierarchy depends on size and color rather than weight: headlines, lead statements and the business list are all weight 400, and bold appears only in small labels.

**Font substitutes.** No public license or download page for the Citi typefaces was found on the pages opened. The stylesheet itself declares Overpass and Overpass Mono, which are available for stand-in use where the Citi faces cannot load.

## Layout

The measured viewport is 1280px wide and the page is 4807px tall. The root variables define five container widths: `--container-max-width-sm` 560px, `md` 752px, `lg` 1040px, `xl` 1232px and `2xl` 1616px. The measured search field is 1040px wide (the `lg` width), the H1 and its text column are 496px wide, and the press cards are 476px wide and 626px tall.

The page alternates full-width bands: a light hero, a navy band containing a rounded photo-and-statement card (photo on the left, a blue panel with the statement and an outline button on the right), a second navy area with a two-column "Our Businesses" block (a lead statement on the left, a column of arrow links on the right), and a light band with a row of press-release cards separated by thin vertical rules.

Measured paddings: 48px (17 uses), 30px and 40px (12 each), 14px and 16px (8 each), 8px, 96px, 42px, 56px, 61.5px and 90px. Gaps measured: 6px and 8px. Buttons use 14px 16px padding and are 45px tall.

## Elevation & Depth

The page is flat. Only two box shadows were measured, one element each: `rgb(255, 255, 255) 0px 0px 0px 2px, rgb(37, 91, 227) 0px 0px 0px 4px` (a white-plus-cobalt focus ring) and `rgba(0, 65, 165, 0.2) 0px 5px 12px 1px` (a soft blue lift based on `#0041a5` at 20% alpha). The component default is declared as `--comp-box-shadow: none`.

Separation comes from color bands (light, navy, light), from rounded cards in a slightly darker tint (`#f0f5f7` on `#f6f8fa`) and from thin cobalt-tinted vertical rules between cards. On hover the navigation items' border color changes from black to `#255be3`, and arrow-list items change border color from `#255be3` to `#17355f`.

## Shapes

Measured radii: `20px` (43 elements: cards and photographs), `6px` (8 elements: buttons and the text field), `20px 20px 0px 0px` (3 elements: images rounded at the top), single-side variants `20px 0px 0px 20px` and `0px 20px 20px 0px` (1 element each), `50%` (2 elements) and `1px`. Tokens: `xs` 1px, `sm` 6px, `md` 20px and `pill` 9999px.

The shape language is two sizes: small 6px for controls and a large 20px for containers. The stylesheet's component default radius is declared as `--comp-border-radius: 2px`, and the measured controls use 6px.

## Components

- **Primary button ("Read More")**: `{colors.primary}` fill, white 14px label at weight 400, 1px border in the fill color, radius 6px, padding 14px 16px, 45px tall, 101px wide in the measured instance. Hover fill and border `{colors.primary-hover}`.
- **Outline button ("Learn more about Citi")**: transparent fill, white 14px label, 1px white border, radius 6px, padding 14px 16px, 45px by 169px; used on the navy panel.
- **Text field**: white fill, black 14px text at 18px line height, 1px `{colors.input-border}` border, radius 6px, padding 8px 12px, 42px tall, 1040px wide.
- **Press card**: `{colors.surface-card}` fill, 20px radius, 476px by 626px, with an uppercase 11px bold "PRESS RELEASE" label in `{colors.ink-oxblood}`, a title and a date line.
- **Header navigation**: About Us, Businesses, Our Impact, News, Insights, Investors, Careers and My Account; on hover each item's border turns cobalt.
- **Business list**: six arrow-prefixed links in white on navy.

The Citi logo mark sits at the left of the header; it is an image and is not described as a token.

## Design System Architecture

No public brand-guidelines or design-system site was found. The home page (https://www.citigroup.com/global) and the About Us page (https://www.citigroup.com/global/about-us) were opened; neither links to brand guidelines, a media kit, logo downloads or a design system, and the footer was cut off in the fetched content, so footer links were not read.

The shipped CSS exposes a structured system: about 266 root custom properties were captured. They include component-scoped variables (`--comp-font-size` 14px, `--comp-font-size-lg` 16px, `--comp-font-size-sm` 12px, `--comp-font-weight` 400, `--comp-border-width` 1px, `--comp-border-style` solid, `--comp-border-radius` 2px, `--comp-box-shadow` none, `--comp-transition` `cubic-bezier(0.6,0,1,1)`), named color scales with alpha steps (`--blue-100` `#219DFF`, `--blue-400` `#17355F`, `--gray-150` `#D9E2EA`, `--citi-blue-200` `#0041A5`, `--citi-red` `#f00`) and container widths. The icon font is named `ICGDSIcons`. The system is therefore the de-facto one described from shipped CSS; no public specification was found.

## Do's and Don'ts

Do
- Use `#255be3` for the primary action with white 14px text and a 6px radius; darken to `#163788` on hover.
- Alternate the pale `#f6f8fa` ground with the navy `#0f1632` band for brand moments.
- Round containers and photographs at 20px; keep controls at 6px.
- Keep headings and lead statements at weight 400; reserve bold for tiny uppercase labels.
- Use the `#f0f5f7` card tint for press releases with an oxblood `#460303` label.

Don't
- Don't use drop shadows on cards; the page is flat apart from focus.
- Don't introduce additional chromatic colors from the variable scales without measuring them on a page.
- Don't set uppercase labels without the widened letter spacing used on the 20px labels.
- Don't mix 2px radii (the declared component default) with the measured 6px buttons.

## Responsive Behavior

The mobile pass (390px) recorded: H1 24px / 30px at 351px wide (from 36px / 46px); the lead statement 22px / 30px at 311px wide (from 32px / 40px); the primary button unchanged at 14px, 45px tall and 101px wide with the same padding. The mobile size list is led by 30px (956 characters), 14px (610), 16px (384), 22px (338), 20px (239), 11px (204) and 24px (169).

How the navigation, navy band, business list and press-card row rearrange on mobile was not measured, and the extraction recorded no mobile layout data.

## Iteration Guide

1. Start from `canvas` `#f6f8fa`, `ink` `#000000`, `surface-navy` `#0f1632` and `primary` `#255be3`.
2. Use Citi Sans Text at weight 400: 36px / 46px for the display, 30px / 42px for subheads, 32px / 40px for the lead statement on navy, 14px for buttons.
3. Build the button at 45px tall, 14px 16px padding, 6px radius; the outline variant has a 1px white border on navy.
4. Build cards and photos at a 20px radius, press cards at `#f0f5f7` with the small uppercase label.
5. Keep the page flat: no shadows except the white-plus-cobalt focus ring.
6. For narrow screens use only the recorded drops (36px to 24px, 32px to 22px) and mark everything else as not measured.
7. Check any new color against the measured text and background lists before adding it as a token.
