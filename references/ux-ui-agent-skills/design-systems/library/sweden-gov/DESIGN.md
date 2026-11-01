---
version: alpha
name: Government Offices of Sweden
category: "Design Systems"
description: "government.se, the English-language site of the Swedish Government Offices: white canvas, near-black text #0c0c0c, link and button blue #145ea5, a dark navy #00406a header nav and Search button, Open Sans-named Light, Regular and Semibold webfonts at 36px, 18px and 14px, light gray #f0f0f0 side boxes, and 4px radii on buttons."
colors:
  canvas: "#ffffff"
  ink: "#0c0c0c"
  primary: "#145ea5"
  on-primary: "#ffffff"
  brand-navy: "#00406a"
  surface-gray: "#f0f0f0"
  ink-muted: "#4b4b4b"
  hairline: "#d7d7d7"
typography:
  display:
    fontFamily: open_sanslight, helvetica, arial, sans-serif
    fontSize: 36px
    fontWeight: 400
    lineHeight: 43.2px
  display-mobile:
    fontFamily: open_sanssemibold, helvetica, arial, sans-serif
    fontSize: 22px
    fontWeight: 700
    lineHeight: 22px
  heading:
    fontFamily: open_sanssemibold, helvetica, arial, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25px
  body:
    fontFamily: open_sansregular, helvetica, arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
  nav:
    fontFamily: open_sansregular, helvetica, arial, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  link:
    fontFamily: open_sanssemibold, helvetica, arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
  input:
    fontFamily: open_sansregular, helvetica, arial, sans-serif
    fontSize: 16px
    fontWeight: 400
rounded:
  xs: 4px
spacing:
  s1: 4.83px
  s2: 5px
  s3: 5.75px
  s4: 6px
  s5: 7px
  s6: 7.11px
  s7: 7.23px
  s8: 7.5px
  s9: 8px
  s10: 10px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    padding: 11px 25.2px 11px 16.8px
    height: 42px
    borderColor: "{colors.hairline}"
  button-secondary:
    backgroundColor: "{colors.surface-gray}"
    textColor: "{colors.primary}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    padding: 10px 0px 10px 16.8px
    height: 43px
    borderColor: "{colors.hairline}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.brand-navy}"
    textColor: "{colors.canvas}"
  nav-link:
    backgroundColor: "{colors.brand-navy}"
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    padding: 20px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 0px 0px 0px 10px
    height: 45px
    borderColor: "{colors.brand-navy}"
  footer:
    backgroundColor: "{colors.brand-navy}"
    textColor: "{colors.canvas}"
    borderColor: "{colors.surface-gray}"
---

## Overview

The capture of https://www.government.se shows the English front page of the Swedish Government Offices as a text-first news publication. A white canvas (#ffffff) carries near-black copy (#0c0c0c), blue links (#145ea5) with small chevron markers, and a single saturated band: a navy bar (#00406a) holding five dropdown labels ("The Government of Sweden", "Government policy in Sweden & the EU", "Documents & publications", "How Sweden is governed", "Press & contacts"). Above it, a crest-and-wordmark lockup reads "Government Offices of Sweden", with utility links "Listen", "Subscribe via email" and "Swedish website" and a wide search field joined to a navy Search button.

The main column opens with a section label ("News from the Government and Government Offices") over a ruled line, then big light-weight headlines such as "Sweden to provide Gripen fighter jets and air defence for NATO operations in Poland", each with a date line in gray and a paragraph of running copy. A right rail of gray boxes ("Shortcuts", "Press conferences") lists chevron links. Below, a four-column row of teasers pairs flat colored illustration panels (navy, green, mint, sky blue, each captioned "Illustration: Government Offices") with a photograph of flags, a bold title and dense small text. The page ends in a large light-weight heading ("Content about the Government and the Government Offices of Sweden") with a "Filter your results" panel.

The voice is institutional and factual, with long, complete sentences, press-release link text ("Press release: ...", "Article: ...") and no promotional language. Density is high and the layout is document-like.

## Colors

The page uses few colors. Canvas is #ffffff. Ink is #0c0c0c, which is the measured color of headlines and body copy. The most frequent text color overall is the link blue #145ea5, which colors links, the "Subscribe to content" button fill and the secondary button text. Navy #00406a is the brand block: the nav bar, the Search button, the footer and the text-input border. On hover the Search button and nav items darken to a deeper navy that the extractor recorded but which is not promoted to a token here. Secondary text such as dates and captions is #4b4b4b. Side boxes and secondary buttons sit on #f0f0f0, and hairlines are #d7d7d7.

The site's root variables also name further palette entries (pastel green, yellow, pink, light blue, red, orange), which appear in illustration panels and component states rather than in the structural UI; they are not elevated to tokens because they were not measured as roles on this page.

## Typography

Three webfont files are loaded: open_sanslight, open_sansregular and open_sanssemibold. The site's variables name them `--ff-OpenSansBold` and `--ff-OpenSansSemibold`, so the family is Open Sans delivered as separate weight-named faces; this file records the loaded family names exactly, with helvetica and arial as fallbacks. Headlines are the Light file at 36px with 43.2px leading and weight 400. Section titles such as "Shortcuts" use the Semibold file at 18px / 25px. Body copy is Regular at 14px / 19.6px; navigation labels are 20px / 28px Regular; link text in the rail is Semibold at 16px / 22.4px; inputs are 16px Regular. A mobile display style uses Semibold at 22px with 22px leading and weight 700.

Weight contrast comes from switching font files, not from font-weight values, which is why most tokens read 400. Large light headlines against small dense body text give the page its editorial rhythm.

## Layout

A two-column structure: a wide main column (roughly two thirds) for news and a narrower right rail for shortcut boxes, both inside a centered container under a full-width navy nav bar. Further down, a four-column teaser grid. Sections are separated by thin gray rules, not by color changes. Spacing values measured are small and tightly clustered, 4.83px to 10px (s1 to s10), which matches the dense, compact feel of lists and link groups; larger separations are made with margins that the extractor did not record as tokens.

Imagery is a controlled set of illustration panels in flat color with a light-weight title inside, always with a caption strip, plus occasional photographs credited under the image.

## Elevation & Depth

No box shadows were measured. Depth is expressed with tonal blocks only: #f0f0f0 boxes against white, a navy header bar, and 1px #d7d7d7 lines. Focus and hover are shown by color shifts (navy to darker navy) rather than by lifting.

## Shapes

Radius is minimal: the measured radius is 4px (rounded.xs) on buttons. The Search button and nav items measured 0px, and the nav bar, rail boxes and image panels are square-cornered. The overall shape language is rectangular and ruled.

## Components

**Search.** A 45px tall text input with a 1px navy border and 16px Regular text, joined to a navy Search button (white text, 45px high, square). Hover darkens the fill.

**Primary button.** The "Subscribe to content" button fills #145ea5, white 14px text, 4px radius, 42px height, padding 11px 25.2px 11px 16.8px and a #d7d7d7 border.

**Secondary buttons.** Filter toggles ("Content types", "Areas", "Minister", "Date") fill #f0f0f0 with #145ea5 text, 4px radius, 43px high.

**Navigation.** Full-width navy bar, 20px white labels with dropdown chevrons, 63px tall items with 20px padding.

**Link lists.** Semibold #145ea5 text with a leading chevron; external links add an icon.

**Footer.** Navy with white text and a #f0f0f0 border.

## Design System Architecture

No public design system was found for this site. The candidate https://designsystem.se was opened but names no publisher, does not mention government.se, and the site's CSS shows no class prefixes or variables belonging to it, so it is not treated as this site's system and contributes no values.

The de-facto system is visible in the page's root custom properties: a named palette (`--color-bla-mork` is #145ea5, `--color-basbla` is #00406a, `--color-gra1` is #f0f0f0, `--color-gra3` is #d7d7d7, `--color-gra10` is #4b4b4b), Swedish color-name keys, font variables (`--ff-OpenSansSemibold`, `--ff-OpenSansBold`) and component-scoped variables such as `--nav-primary-linkitem-hover-bg`, `--search-btn-hover-bg`, `--accordion-bg` and `--cookie-popup-*`. Components reference palette variables, so hover and focus colors are controlled centrally. Icons come from Font Awesome 6 Free.

## Do's and Don'ts

- Do set headlines in the Light face at 36px and section titles in Semibold at 18px.
- Do use #145ea5 for links and the main action; use #00406a for the nav bar and Search button.
- Do mark links with chevrons and keep link text descriptive ("Press release: ...").
- Do separate sections with #d7d7d7 rules and group shortcuts in #f0f0f0 boxes.
- Don't add shadows or rounded cards; boxes are flat and square.
- Don't use bold font-weight values to emphasize; switch to the Semibold face.
- Don't use decorative photography as hero; illustration panels carry a caption.

## Responsive Behavior

The extractor measured desktop and mobile; the mobile display style (22px Semibold, 22px line height) replaces the 36px Light headline at small widths. Only the type change is recorded as a token here; the mobile layout was not inspected visually. Navigation items are 63px tall on desktop and the input is 45px, which gives comfortably tall touch targets.

## Iteration Guide

1. Start with white canvas, #0c0c0c text, 14px Regular body.
2. Use the Light face at 36px for the page headline and Semibold 18px for box titles.
3. Make links and the primary button #145ea5; build the header with #00406a.
4. Keep buttons at 4px radius and boxes square on #f0f0f0.
5. Write link text as a full descriptive sentence; add a chevron before it.
6. Use flat illustrations with a caption in place of hero photography.
