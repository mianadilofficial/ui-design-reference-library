---
version: alpha
name: Greenpeace International
category: "Government & Nonprofit"
description: "Greenpeace International (greenpeace.org/international) is a Planet 4 WordPress site: white #ffffff and beige #f6f4ef bands, #1c1c1c ink, GreenpeaceSans headlines at 40px regular, Source Serif Pro body copy, action-yellow #ffe100 4px-radius buttons, a green #80d643 Donate button and a dark-green #1f4912 footer."
colors:
  canvas: "#ffffff"
  page-largest: "#f6f4ef"
  ink: "#1c1c1c"
  primary: "#ffe100"
  on-primary: "#1c1c1c"
  primary-hover: "#fece00"
  ink-meta: "#6f7376"
  green-text: "#198700"
  required-red: "#c02b0a"
  grey-light: "#ececec"
  hairline: "#a3a5a7"
  footer-bg: "#1f4912"
  footer-deep: "#1a3c10"
  donate-green: "#80d643"
  donate-green-hover: "#66cc00"
typography:
  display:
    fontFamily: GreenpeaceSans
    fontSize: 40px
    fontWeight: 400
    lineHeight: 48px
  display-mobile:
    fontFamily: GreenpeaceSans
    fontSize: 28px
    fontWeight: 400
    lineHeight: 39.2px
  subheading:
    fontFamily: GreenpeaceSans
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
  body:
    fontFamily: SourceSerifPro
    fontSize: 16.496px
    fontWeight: 400
    lineHeight: 24.744px
  button:
    fontFamily: GreenpeaceSans
    fontSize: 16px
    fontWeight: 400
    lineHeight: 32px
  button-donate:
    fontFamily: GreenpeaceSans
    fontSize: 17px
    fontWeight: 400
    lineHeight: 40px
  input:
    fontFamily: SourceSans3
    fontSize: 16px
    fontWeight: 400
    lineHeight: 68px
rounded:
  xs: 4px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 10.25px
  s8: 12px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 28px
    height: 58px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.footer-bg}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    height: 50px
    borderColor: "{colors.footer-bg}"
  button-donate:
    backgroundColor: "{colors.donate-green}"
    textColor: "{colors.ink}"
    typography: "{typography.button-donate}"
    rounded: "{rounded.xs}"
    padding: 2px 32px 2px 16px
    height: 44px
  button-donate-hover:
    backgroundColor: "{colors.donate-green-hover}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 0px 0px 12px
  text-input:
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    padding: 0px 8px 0px 12px
    height: 68px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
    boxShadow: rgba(0, 0, 0, 0.16) 0px 1px 8px 0px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.canvas}"
    padding: 24px 0px 0px
---

# Greenpeace International

## Overview

The queued URL, https://www.greenpeace.org, resolves to https://www.greenpeace.org/global/ — a country selector ("Together we can change the world", "GO TO GREENPEACE THAILAND" or "SELECT ANOTHER COUNTRY/REGION", then an alphabetical list of national sites). Because that is an entry page, this document describes the international home page reached from it: https://www.greenpeace.org/international/ (title "Greenpeace International - Greenpeace International", `lang="en"`), re-measured at 1280px wide (4236px scroll height) and at 390px.

The page is an editorial campaign site. A 68px white header carries the green hand-drawn GREENPEACE wordmark on the left, the menu (Issues we work on, Get involved, News and stories, and more) and a lime-green "Donate today" button. The 620px hero is a full-bleed photo carousel with a dark overlay, a white 40px GreenpeaceSans headline ("Gaza: voices of resistance against genocide"), a serif standfirst, a yellow "Read more" button and slide controls. Below come alternating beige (`#f6f4ef`) and white bands: "The issues we work on" (a serif paragraph, three circular photos labelled Climate & Energy, Biodiversity, Social & Economic, and an outlined "Learn more about what we do" button), "Stories from around the world" (horizontal story rows with green hashtags such as "#Photography" and "#ExtremeWeather", a bold headline, serif summary, author and date), "Get to know us" (text beside a photo of the Rainbow Warrior with an "OIL & GAS ARE NOT GREEN" banner), a "Join Us" carousel of three white shadowed cards with yellow buttons, a "Subscribe for updates" form, and a dark-green footer.

The tone is activist and collective: "Imagine a world where forests flourish and oceans are full of life", "Together we are part of a growing, global movement". The photography is documentary — protests, volunteers, ships, nature.

## Colors

- **Canvas `#ffffff`** — the body background (`--white`).
- **Page largest `#f6f4ef`** — `--beige-100`, the warm off-white bands; the largest measured background area (2553).
- **Ink `#1c1c1c`** — `--grey-900`, used for text (2397 chars) and declared as `--color-text-body` and `--color-text-heading`.
- **Primary `#ffe100`** — `--p4-action-yellow-500`, the call-to-action yellow (`--color-background-button--cta`), always with `#1c1c1c` text; hover `#fece00` (`--p4-action-yellow-600`).
- **Donate green `#80d643`** — `--gp-green-400`, the header "Donate today" button; hover `#66cc00` (`--gp-green-500`).
- **Green text `#198700`** — `--gp-green-800`, the story category and hashtag links.
- **Footer `#1f4912`** — `--p4-dark-green-800`, the footer band and the text/border of the outlined secondary button (`--color-text-button--secondary`); the bottom strip is `#1a3c10` (`--p4-dark-green-900`).
- **Ink meta `#6f7376`** — `--grey-600`, author names and dates (`--color-text-meta_item`).
- **Hairline `#a3a5a7`** — `--grey-500`, form field borders.
- **Required red `#c02b0a`** — the "(Required)" markers in the subscribe form.
- **Grey light `#ececec`** — `--grey-200`, light text on the dark footer.

The stylesheet also declares a red scale (`--red-500` `#d43b57` for errors), more beiges (`--beige-200` `#eceae4`, `--beige-300` `#dad8d1`), greens (`--gp-green-100` `#d9f1c5` to `--gp-green-600` `#55bc00`) and yellows (`--p4-action-yellow-100` `#fff6bd`, `-700` `#fcb600`).

## Typography

Three families, declared as `--font-family-primary: "GreenpeaceSans"`, `--font-family-secondary: "SourceSerifPro"` and `--font-family-tertiary: "SourceSans3"`; headings and buttons use the primary, paragraphs the secondary.

- **Display** — GreenpeaceSans 40px/48px, weight 400: the hero headline and every section title ("The issues we work on", "Stories from around the world", "Join Us").
- **Subheading** — GreenpeaceSans 20px/24px, weight 400: story and card titles.
- **Body** — SourceSerifPro 16.496px/24.744px, weight 400: summaries and standfirsts. The most common measured size overall is 20.496px (1576 chars).
- **Button** — GreenpeaceSans 16px/32px weight 400 inside 58px yellow buttons; the Donate button is 17px/40px.
- **UI / forms** — SourceSans3 16–17px for inputs, labels and the body default (17.008px/32px).

Weights are almost all 400 (3815 chars) with some 600 (274). GreenpeaceSans is a condensed, bold-looking display face even at weight 400, which is why headlines need no heavier weight. Substitutes: a condensed grotesque such as Oswald or Barlow Condensed for GreenpeaceSans, and any Source Serif / Source Sans build for the text faces.

## Layout

The desktop page is 1280px wide; story and form content sit in a centred column of about 767px (the measured story heading width), while issue circles and Join Us cards spread three across. Bands, top to bottom: 620px media hero, 70px white gap, 560px beige issues band (three columns), 1015px white stories band, a 424px "Get to know us" media band, an 873px white Join Us band (three columns), a 486px beige subscribe band (two columns), a 363px `#1f4912` footer and a 50px `#1a3c10` strip.

Spacing is relaxed: paddings of 12px (21), 24px (16), 8px (12) and 28px (7), some large 180px and 50px paddings, and gaps of 8px, 20px and 10.248px. Five header links were visible on desktop with a navigation toggle.

## Elevation & Depth

Depth is used sparingly. The Join Us cards carry `rgba(0, 0, 0, 0.16) 0px 1px 8px 0px` (3 elements) and a second soft shadow `rgba(28, 28, 28, 0.2) 0px 1px 8px 0px` was measured twice. The hero uses a dark photo overlay so white text reads. Otherwise the page separates sections by alternating white and beige bands and by photography.

## Shapes

Small, consistent corners: 4px on buttons, cards and inputs (19 elements), 50% on the issue photos and carousel arrows (8), and `4px 4px 0px 0px` on card image tops (3). Nothing is pill-shaped. The circular issue images are the main soft shape on the page; story thumbnails are rectangles.

## Components

**Primary button** — `#ffe100` fill, `#1c1c1c` GreenpeaceSans 16px/32px text, 4px radius, `12px 28px` padding, 58px tall ("Read more", "Five reasons why this matters", "Read the blog", "See the photos"); hover `#fece00`. A smaller variant is 14px/32px with `8px 24px` padding, 50px tall ("See Our Vacancies").

**Secondary button** — white fill, `#1f4912` text and border, 4px radius, 50px tall ("Learn more about what we do", "Who we are").

**Donate button** — `#80d643` fill, `#1c1c1c` GreenpeaceSans 17px/40px, 4px radius, `2px 32px 2px 16px` padding with a chevron, 44px tall; hover `#66cc00`.

**Story row** — rectangular photo left; on the right green `#198700` category and hashtag links, a GreenpeaceSans 20px headline, a serif summary, author and date in `#6f7376`.

**Issue tile** — circular photo with a GreenpeaceSans label underneath.

**Join Us card** — white, 4px radius, soft shadow, photo with rounded top corners, 20px title, short text and a yellow button aligned right.

**Subscribe form** — beige band, labels with red "(Required)" markers, white inputs with `#a3a5a7` borders, a country select, a consent checkbox and a yellow "Subscribe" button.

**Footer** — `#1f4912` band with white text over a `#1a3c10` strip.

## Design System Architecture

The site runs on Planet 4, Greenpeace's WordPress platform. The theme repository https://github.com/greenpeace/planet4-master-theme describes itself as the "Wordpress master theme for the Greenpeace Planet 4 project", and the main repository https://github.com/greenpeace/planet4 links a design system at https://p4-designsystem.greenpeace.org/ and a handbook at https://planet4.greenpeace.org/handbook/. The design-system URL returned only its title ("Planet 4 Design System") to the fetch tool, so no values here come from it.

The shipped CSS shows the token architecture. A base palette holds named steps (`--grey-100` … `--grey-900`, `--beige-100` … `--beige-300`, `--gp-green-100` … `--gp-green-800`, `--p4-dark-green-800/900`, `--p4-action-yellow-100` … `-700`, `--red-50` … `--red-800`). A semantic layer maps them to roles: `--color-background-button--cta` → action yellow, `--color-background-button--cta-hover` → yellow-600, `--color-background-button--donate--hover` → green-500, `--color-text-button--secondary` → dark green-800, `--color-background-navigation_bar` → white, `--color-background-country_list_block` → dark green-900, `--color-text-meta_item` → grey-600. Typography tokens pair each size step with a family, e.g. `--font-size-xl--font-family-primary` 1.75rem and `--line-height-3xl--font-family-primary` 3.75rem.

## Do's and Don'ts

**Do**
- Use action yellow `#ffe100` with dark `#1c1c1c` text for every primary action, and the green `#80d643` only for Donate.
- Set headlines in GreenpeaceSans at regular weight and long text in Source Serif.
- Alternate white and warm beige `#f6f4ef` bands between sections.
- Keep corners at 4px; use circles only for issue imagery.
- Tag stories with green `#198700` hashtags.

**Don't**
- Don't put white text on the yellow buttons.
- Don't use pill buttons or large radii.
- Don't use cold greys for section backgrounds; the system's light neutral is beige.
- Don't use the country-selector splash as the model for the home page; it is an entry page.

## Responsive Behavior

Measured at 390px wide:

- The header becomes 110px tall and shows "Menu", "Donate today" and a search toggle; five header links were reported visible, as on desktop.
- The hero headline moves below the image as dark text on white: GreenpeaceSans 28px/39.2px, weight 400, with `0px 8px 8px` padding; section titles also measured 28px.
- Body serif text stays 16.496px with a 24px line height.
- The primary button keeps 16px, 4px radius and `12px 28px` padding but drops to 50px tall with a 24px line height.
- The mobile band sequence alternates white, beige and media bands in a single column; up to three card columns were reported in carousels.

Behaviour between 390px and 1280px was not measured.

## Iteration Guide

1. Start with a white canvas, `#1c1c1c` ink, GreenpeaceSans for headings and Source Serif for paragraphs.
2. Build a 68px white header with the green wordmark, menu links and a `#80d643` "Donate today" button (4px radius, 44px).
3. Add a full-bleed photo hero with a dark overlay, a 40px/48px white headline and a 58px yellow `#ffe100` button.
4. Alternate beige `#f6f4ef` and white bands; centre each with a 40px section title and a serif intro.
5. Use story rows with green hashtags and 20px titles; cards with a 4px radius and `rgba(0, 0, 0, 0.16) 0px 1px 8px 0px` shadow.
6. Use the white-and-dark-green outlined button for secondary actions.
7. Close with a `#1f4912` footer over a `#1a3c10` strip.
