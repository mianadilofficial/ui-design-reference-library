---
version: alpha
name: "Stanford University"
category: "Education"
description: "Stanford University (stanford.edu), the university home page: Cardinal Red #8c1515 header on a white canvas, edict serif display at 64px/440 and Source Sans 3 body at 20px/28px, #111111 ink, red pill buttons, 12px-radius dark stat cards and 12px-rounded photographs."
colors:
  canvas: "#ffffff"
  ink: "#111111"
  primary: "#8c1515"
  on-primary: "#ffffffb3"
  surface-2: "#eaeaea"
  surface-3: "#7a0000"
  ink-3: "#767674"
  ink-4: "#585754"
  ink-5: "#43423e"
  ink-6: "#ababa9"
  nav-link-bg: "#2e2d29"
  card-bg: "#191919"
typography:
  display:
    fontFamily: edict, "edict Fallback", Georgia, Cambria, "Times New Roman", Times, serif
    fontSize: 64px
    fontWeight: 440
    lineHeight: 70.4px
    letterSpacing: 0.64px
  display-mobile:
    fontFamily: edict, "edict Fallback", Georgia, Cambria, "Times New Roman", Times, serif
    fontSize: 56px
    fontWeight: 440
    lineHeight: 61.6px
    letterSpacing: "-0.8px"
  heading:
    fontFamily: "\"Source Sans 3\", \"Source Sans 3 Fallback\", \"Helvetica Neue\", helvetica, arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
    textTransform: uppercase
  subheading:
    fontFamily: "\"Source Sans 3\", \"Source Sans 3 Fallback\", \"Helvetica Neue\", helvetica, arial, sans-serif"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 24px
  body:
    fontFamily: "\"Source Sans 3\", \"Source Sans 3 Fallback\", \"Helvetica Neue\", helvetica, arial, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  input:
    fontFamily: "\"Source Sans 3\", \"Source Sans 3 Fallback\", \"Helvetica Neue\", helvetica, arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20.8px
rounded:
  xs: 8px
  sm: 12px
  md: 16px
  lg: 20px
  xl: 220px
  pill: 9999px
spacing:
  s1: 1px
  s2: 3px
  s3: 4px
  s4: 6px
  s5: 7px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.heading}"
    rounded: "{rounded.xs}"
    padding: 6px 8px
    height: 32px
  button-primary-hover:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.heading}"
    rounded: "{rounded.xs}"
    padding: 6px 8px
    height: 32px
  nav:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
  nav-link:
    backgroundColor: "{colors.nav-link-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
  text-input:
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    height: 21px
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.sm}"
    padding: 32px 20px 24px
  footer:
    textColor: "{colors.ink}"
---

# Stanford University

The measured page is `https://www.stanford.edu/`, titled "Stanford University", English, 20,490px tall with 878 visible elements. It is a long editorial home page: a two-tier red header, a full-width video hero ("Karl Deisseroth awarded Nobel Prize in physiology or medicine"), a centred mission statement under the heading "Advancing the Frontier", a rounded full-width photograph, a "Stanford News" band on grey, stat cards under "OUR IMPACT", and further sections down to a footer quote from Provost Jenny Martinez. The opened identity page `https://identity.stanford.edu/design-elements/color/` names the two official brand colors as Cardinal Red (Pantone 201C) and Palo Alto Green (Pantone 3298C) and states that website colors are not intended to match Pantone; it gives no hex values or typeface names, so hex values below come from the site's own CSS and measurements.

## Overview

The site pairs a scholarly serif with a plain humanist sans, on a white page, with Cardinal Red as the single institutional color. The red appears as the main navigation bar (`#8c1515`), a darker red utility strip above it (`#7a0000`), the pill buttons ("About Stanford", "Stanford Report") and the small category labels on news cards ("NEWS | COMMUNITY & CULTURE", set in red uppercase). Photography is people-centred and generously sized; images carry 12px rounded corners and the page ends sections with a light-grey band. Headlines are sentence case; the editorial voice is plain and declarative ("Stories to keep you informed and inspired, from one of the world's leading research and teaching institutions.").

## Colors

Background areas: `#ffffff` (24,397), `#eaeaea` (9,919), `#7a0000` (2,392), `#111111` (1,254), `#8c1515` (1,075), `#191919` (228). Text by characters: `#111111` (3,426), `#ffffff` (1,846), `#767674` (1,081), `#585754` (504), `#43423e` (300), `#ababa9` (273).

- `canvas` `#ffffff`; `surface-2` `#eaeaea` (CSS `--color-grey-10`), the news band; `card-bg` `#191919` (`--color-grey-105`) for stat cards.
- `ink` `#111111` (`--color-content-default`); `ink-3` `#767674`, `ink-4` `#585754`, `ink-5` `#43423e`, `ink-6` `#ababa9`: the grey text steps (CSS `--color-grey-60`, `-80`, `-90`, `-40`).
- `primary` `#8c1515` (`--color-cardinal-red`); `surface-3` `#7a0000` (`--color-cardinal-red-xdark`), the utility strip. `on-primary` `#ffffffb3` (`--color-force-white-70`) is the 70%-white text on the topic chips; hover changes chips to white on `#111111`.
- `nav-link-bg` `#2e2d29` (`--color-grey-100`), the skip-link fill.

The stylesheet declares a broad named palette that the home page elements measured here do not use: cardinal-red dark and darker tints (`#820000`, `#541107`), digital red (`#b1040e`, `#e50808`), digital green (`#008566`, `#006f54`), palo alto (`#175e54`), lagunita (`#007c92`), sky (`#4298b5`, `#98d0ec`), poppy (`#e98300`), illuminating (`#fedd5c`), archway (`#5d4b3c`), olive, spirited (`#e04f39`), fog (`#dad7cb`) and stone. They exist in the CSS; they are not claimed as page colors.

## Typography

Two families plus an icon font. edict (variable, with an "edict Fallback" and a Georgia, Cambria, Times serif stack) sets display text, 937 characters. Source Sans 3 (weights 200 to 900) sets everything else, 6,798 characters. A custom `stanford` icon font (weight 300) appears for 38 characters. Weights measured: 400 (6,299), 500 (876), 440 (344, edict), 700 (195), 600 (59).

- `display`: edict 64px, weight 440, line-height 70.4px, +0.64px (hero headline on the photograph). `display-mobile`: 56px, line-height 61.6px, -0.8px ("Advancing the Frontier" in the mobile pass).
- `heading`: Source Sans 3 14px, weight 400, line-height 19.6px, uppercase ("OUR IMPACT").
- `subheading`: 20px, weight 500, line-height 24px (news item titles).
- `body`: 20px, weight 400, line-height 28px.
- `input`: 16px, line-height 20.8px.

Other measured display sizes: 80px with -0.8px tracking (99 characters), 48px with -0.48px (184 characters, rendered as 51.132px) and 56px with -1.12px for the stat figures in the cards. Sans text sizes: 20px (2,829 characters), 16px (2,727), 14px (987).

## Layout

The top strip holds "OUR IMPACT" and chips (Civics, Cancer Research, Artificial Intelligence, See all) at left and a "How can we help?" search field at right; the second tier holds the "Stanford University" wordmark at left and seven items (About, Academics, Research, Health & Medicine, Athletics, Admissions & Aid, Life on the Farm) at right; the measured header height is 119px. Sections use a centred text block about the width of a paragraph, full-bleed or near-full-bleed images inside page margins, and two-up or three-up cards. Gaps: 20px (29 elements), 32px (12), 12px (12), 8px (12), 40px (8), 16px (6). Paddings: 40px (19), 8px (19), 7px (19), 6px (16), 20px (13), 32px (12). CSS declares responsive spacing variables (`--responsive-spacing-md-1: 2.6rem`, `--responsive-spacing-md-6: 9rem`, `--responsive-spacing-2xl-9: 17.1rem`) and `--spacing-chapter-padding-top-lg: 12.8rem`; `--container-md` is 768px.

## Elevation & Depth

No box shadows were measured. Depth comes from rounded photographs on white, dark `#191919` stat cards, a grey `#eaeaea` news band, and a gradient scrim over the hero image that carries white serif text.

## Shapes

Radii measured: effectively pill (`3.35544e+07px`, 20 elements, the red buttons and chips), `12px` (18, cards and photographs), `220px 220px 12px 12px` (9, arch-topped images), `16px` (6), `8px` (4, the topic chips in the top strip) and a pill-topped variant (3). Tokens: `xs 8px`, `sm 12px`, `md 16px`, `lg 20px`, `xl 220px`, `pill 9999px`.

## Components

- **Topic chip** (`button-primary`): `#8c1515` fill, 14px Source Sans 3 text at 70% white, padding `6px 8px`, 32px high, radius 8px; hover inverts to white text on `#111111`.
- **Pill button**: `#8c1515` fill, white 16px text, padding `10px 12px`, 39px high, fully rounded ("Stanford Athletics" and "About Stanford" in the capture).
- **Stat card**: `#191919`, white text, 12px radius, padding `32px 20px 24px`, 218px high, figures at 56px/500 with -1.12px tracking ("$B", "+" labels with captions).
- **News card**: image with rounded top, red uppercase category line, 20px title.
- **Search field**: 16px, white text, 21px high, in the top strip.
- **Header**: `#8c1515` bar with white 20px navigation text; `nav` component.

## Design System Architecture

Stanford publishes an identity site (https://identity.stanford.edu/design-elements/color/, opened) that defines brand colors by Pantone and links to typography pages; no hex or type values were available from the opened page. The site's own CSS is a utility-class Tailwind-style build (variables such as `--tw-ring-shadow`, `--container-md`, `--spacing-08em`) with a named color system (`--color-cardinal-red`, `--color-grey-0` to `--color-grey-110`, `--color-digital-*`, `--color-content-default`, `--color-force-white-70`), spacing tiers (`--responsive-spacing-*`), media-player variables (`--media-range-track-height: 5px`) and Font Awesome 7 icon families. The token tiers are the site's de-facto system.

## Do's and Don'ts

Do use Cardinal Red `#8c1515` for the navigation bar and buttons, with `#7a0000` for the strip above it. Do set display text in edict with generous line-height and Source Sans 3 elsewhere. Do round photographs to 12px and buttons to pills. Do use sentence-case headlines and uppercase 14px labels.

Don't set body text in the serif. Don't use shadows. Don't use the CSS's secondary accents (poppy, digital green) as page chrome without measurement. Don't use 70% white text on `#8c1515` for long copy; it is used on small chips only.

## Responsive Behavior

Mobile pass: section heading 56px edict with 61.6px line-height and -0.8px tracking; body text 18px with 25.2px line-height (20px on desktop); the pill button "Stanford Athletics" keeps 16px text, `10px 12px` padding and 39px height. Mobile font sizes by characters: 16px (2,578), 18px (2,171), 14px (900), 20px (852), 24px (390). Navigation behavior and column counts on mobile were not measured.

## Iteration Guide

1. White canvas, `#111111` ink, Cardinal Red `#8c1515` for chrome and actions.
2. edict for display, Source Sans 3 20px/28px for text, 14px uppercase for labels.
3. Pill buttons, 12px photo corners, `#191919` stat cards, `#eaeaea` bands.
4. Verify with `node web/scripts/verify-designs.mjs --slug=stanford-university`.
