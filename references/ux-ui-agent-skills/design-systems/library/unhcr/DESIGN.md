---
version: alpha
name: UNHCR
category: "Government & Nonprofit"
description: "UNHCR, the UN Refugee Agency (unhcr.org): white #ffffff and light grey #f5f5f5 bands, black #000000 text, UN blue #0072bc for navigation, hero and help actions, a yellow #faeb00 DONATE button with #212529 label, charcoal #343a40/#333333 emergency and footer bands. ProximaNova 400/700 — 42px hero, 32px section titles, 18px/25.2px body — with 4px button and 8px card radii."
colors:
  canvas: "#ffffff"
  page-largest: "#f5f5f5"
  ink: "#000000"
  primary: "#faeb00"
  on-primary: "#212529"
  primary-hover: "#fcf366"
  brand-blue: "#0072bc"
  on-brand-blue: "#ffffff"
  brand-blue-hover: "#338ec9"
  surface-charcoal: "#343a40"
  alert-pink: "#ffe7e8"
  ink-soft: "#404041"
  ink-muted: "#666666"
  ink-charcoal: "#333333"
  danger: "#ef4a60"
  text-input-border: "#cccccc"
typography:
  display:
    fontFamily: >-
      ProximaNova, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto
      Color Emoji"
    fontSize: 42px
    fontWeight: 700
    lineHeight: 46.2px
  display-mobile:
    fontFamily: >-
      ProximaNova, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto
      Color Emoji"
    fontSize: 28px
    fontWeight: 700
    lineHeight: 32.76px
  heading:
    fontFamily: >-
      ProximaNova, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto
      Color Emoji"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 39.36px
  subheading:
    fontFamily: >-
      ProximaNova, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto
      Color Emoji"
    fontSize: 26px
    fontWeight: 700
    lineHeight: 33.41px
  body:
    fontFamily: >-
      ProximaNova, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto
      Color Emoji"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.2px
  button:
    fontFamily: >-
      ProximaNova, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto
      Color Emoji"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 22.4px
    textTransform: uppercase
  nav:
    fontFamily: >-
      ProximaNova, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto
      Color Emoji"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 19.6px
rounded:
  xs: 4px
  sm: 8px
spacing:
  s1: 5.01px
  s2: 7.01px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 15.01px
  s8: 16px
  s9: 16.48px
  s10: 17.01px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 5.008px 7.008px
    height: 36px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-blue:
    backgroundColor: "{colors.brand-blue}"
    textColor: "{colors.on-brand-blue}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 5.008px 7.008px
    height: 36px
    borderColor: "{colors.brand-blue}"
  button-blue-hover:
    backgroundColor: "{colors.brand-blue-hover}"
  button-blue-small:
    backgroundColor: "{colors.brand-blue}"
    textColor: "{colors.on-brand-blue}"
    typography: "{typography.nav}"
    rounded: "{rounded.xs}"
    padding: 5.008px 10px
    height: 34px
    borderColor: "{colors.brand-blue}"
  link:
    textColor: "{colors.brand-blue}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
  text-input:
    textColor: "{colors.ink-charcoal}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    padding: 5.008px 45.008px 5.008px 16.48px
    height: 38px
    borderColor: "{colors.text-input-border}"
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 8px
    borderColor: "{colors.page-largest}"
  footer:
    backgroundColor: "{colors.ink-charcoal}"
    textColor: "{colors.canvas}"
    padding: 0px 15px
---

# UNHCR

## Overview

This is the global website of UNHCR, the UN Refugee Agency (unhcr.org), measured on its English home page. It is
an institutional news-and-appeal site: clear, high-contrast and functional, with UN blue `#0072bc` as the identity
colour and a bright yellow `#faeb00` reserved for giving. The layout alternates full-width colour bands — blue
hero, white mission statement, grey data panels, blue help band, charcoal emergency appeal — so each section reads
as a distinct block.

The capture shows: a slim top bar ("UNHCR global website: Change site" and language links English, Français,
Español, العربية); a white header with the UNHCR logo and a "75 Years of the Refugee Convention" lockup, search and
globe icons, a yellow "DONATE" and a blue "GET HELP" button; a blue navigation bar (About UNHCR, What we do, Where
we work, News and stories, Get involved); a blue hero with a yellow "STORIES" kicker, a 42px white headline "UNHCR's
Salih: We must protect refugees, but tackle indefinite displacement", outlined white buttons and a photograph; a
pale pink alert strip with a "Visit HELP site" button; a mission statement in two text columns; "Key facts and
figures" with bar and donut charts on white cards; a light-blue "Need help?" band; "Latest from UNHCR" news; a
charcoal "Venezuela emergency" appeal with a yellow "Help now" button and three donation tiers (US$ 550, US$ 150,
US$ 23); flagship report cards; three promotional tiles; and a charcoal footer.

The voice is direct and humanitarian: "UNHCR helps to save lives and build better futures for the millions of
people forced to flee their homes." "Please donate today."

## Colors

- **Canvas `#ffffff`** and **page largest `#f5f5f5`** — white content bands and the light grey data and
  publication bands (`--light` in the stylesheet).
- **Ink `#000000`** — the most-read text colour.
- **Primary `#faeb00`** — the yellow of "DONATE" and "Help now". The stylesheet declares `--primary: #faeb00` (and
  `--warning: #faeb00`), so yellow is the theme's primary action; label **`#212529`**; measured hover **`#fcf366`**.
- **Brand blue `#0072bc`** — UN blue: the navigation bar, hero band, "GET HELP" and "Visit HELP site" buttons, and
  text links. Declared `--secondary` and `--info`. Hover **`#338ec9`** (measured), which is also the fill of the
  "Need help?" band.
- **Surface charcoal `#343a40`** — the emergency appeal band (`--dark`, `--gray-dark`).
- **Ink charcoal `#333333`** — footer band and input text.
- **Alert pink `#ffe7e8`** — the help-site alert strip under the hero.
- **Ink soft `#404041`** and **ink muted `#666666`** — secondary text and the top-bar text.
- **Danger `#ef4a60`** — declared `--danger`, measured on a single character.
- **Text input border `#cccccc`**.

Navigation links measured an inverted hover: white text on blue becomes blue `#0072bc` text on a white background.
The outlined "Read more" hero button gains a 20%-white fill on hover. The stylesheet also carries Bootstrap's
stock palette (`--bs-primary: #0d6efd`, `--blue: #007bff` and others); those are framework defaults and are not
UNHCR colours.

## Typography

One family, **ProximaNova**, in regular (400) and bold, served from the site theme's fonts folder. Weight 900
appears on a small number of characters.

- Hero headline: 42px / 700 / 46.2px.
- Section titles: 32px / 700 / 39.36px ("Key facts and figures", "Latest from UNHCR").
- Sub-headings: 26px / 700 / 33.41px.
- Body: 18px / 400 / 25.2px — the most common size by far; 22px is the next most common (fact headlines).
- Buttons: 16px / 700 / 22.4px uppercase ("DONATE", "GET HELP"); smaller buttons and navigation 14px / 700.

No letter-spacing was measured; every size tracks normally. Substitute: any geometric-humanist sans with a strong
bold (the site's own fallback is the system UI stack).

## Layout

The desktop viewport measured 1280px. Sections are full-width bands with content in a centred container; inner
padding of 15px recurs most often, with 48px and 25px around blocks. The mission
statement uses a three-column split (heading row, two text columns, button column); the facts row two white chart
cards plus a social column; the news row a large lead story beside three stacked items; the reports row three
cards. The widest card row measured five columns.

## Elevation & Depth

Mostly flat. One box shadow was measured, `rgba(0, 0, 0, 0.16) 0px 20px 24px 0px`, on a single element. Depth comes
from coloured bands and white cards on the grey `#f5f5f5` ground, bordered with 1px `#f5f5f5`.

## Shapes

Buttons use a 4px radius (the most frequent value) with a 2px solid border in their own fill colour; cards use 8px.
Photos and bands are square-edged. The emergency "Help now" button is wide and taller (49px).

## Components

- **Donate button (primary)** — `#faeb00` fill and 2px border, `#212529` ProximaNova 16px / 700 uppercase label,
  5.008px 7.008px padding, 36px tall, 4px radius; hover `#fcf366`.
- **Blue button** — `#0072bc` fill and border, white uppercase label, same metrics; hover `#338ec9`. A smaller
  variant ("Visit HELP site") is 14px / 700, 34px tall.
- **Outlined hero buttons** — white outline and text on blue ("Read more", "More news and stories").
- **Fact card** — white, 8px radius, a bold fact headline, a chart, a "View data table" button and a source line.
- **News item** — photo, small blue uppercase category ("SPEECHES AND STATEMENTS"), bold headline, date.
- **Search input** — 38px tall, 4px radius, `#cccccc` border, 5.008px 45.008px 5.008px 16.48px padding.
- **Footer** — `#333333`, four columns (Support our work, Stay connected, Stay informed, Contact us), white text,
  outlined "Donate now" and "Subscribe" buttons, then the white UNHCR logo.

## Design System Architecture

No public UNHCR design system could be opened: https://www.unhcr.org/brand returned HTTP 403 (see SOURCES.json).
The shipped theme at https://www.unhcr.org/ is a Bootstrap-based theme (fonts served from
`/themes/contrib/unhcr/fonts/`, icons from `/themes/custom/project/`) that overrides the Bootstrap theme colours with
brand values: `--primary: #faeb00`, `--secondary: #0072bc`, `--info: #0072bc`, `--warning: #faeb00`, `--danger:
#ef4a60`, `--success: #00b398`, `--light: #f5f5f5`, `--dark: #343a40`, with breakpoints at 576px, 768px, 992px and
1200px. A second `--bs-*` variable layer keeps Bootstrap's stock values.

## Do's and Don'ts

**Do**
- Use UN blue `#0072bc` for identity, navigation and help actions.
- Keep yellow `#faeb00` for donation actions, always with a dark `#212529` label.
- Write headlines as plain bold ProximaNova statements; keep body at 18px.
- Separate sections with full-width colour bands.
- Cite sources and data under every figure, as the fact cards do.

**Don't**
- Don't put white text on the yellow.
- Don't use Bootstrap's stock blue `#0d6efd` or `#007bff`; they are framework defaults.
- Don't add heavy shadows or large radii; buttons are 4px and cards 8px.
- Don't use the yellow for decoration; it is the giving colour.

## Responsive Behavior

From the extraction's mobile pass:

- The hero headline drops from 42px / 46.2px to 28px / 32.76px; section titles from 32px to 24px / 32.16px.
- Body copy drops from 18px / 25.2px to 16px / 21.92px.
- The "GET HELP" button measured 18px / 700 / 25.2px on mobile.
- A menu toggle labelled "Open navigation" is visible on mobile; visible header links drop from 15 to 11.
- The widest card row measured 1 column on mobile.

The stylesheet declares breakpoints at 576px, 768px, 992px and 1200px; behaviour at each was not measured.

## Iteration Guide

1. Load ProximaNova 400/700; set black ink on white and `#f5f5f5`.
2. Build the header with a yellow DONATE and a blue GET HELP button (4px, 36px, uppercase 16px).
3. Use blue bands for hero and help, charcoal for emergencies, grey for data.
4. Present facts on white 8px cards with charts and sources.
5. Take new colours from the theme's overridden Bootstrap variables, not the stock `--bs-*` set.
