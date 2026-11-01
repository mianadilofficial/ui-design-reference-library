---
version: alpha
name: Capcom USA
category: "Gaming"
description: "Capcom USA (capcomusa.com), the site of Capcom U.S.A., Inc. linked from the capcom.com region splash: Roboto 300/400/500 on a #f0f2f5 and #ffffff page, Capcom blue #1059a4 for section titles and the social bar, black ink #000000, a full-width hero carousel, 4px-radius cards and a Bootstrap grid."
colors:
  canvas: "#ffffff"
  page-body: "#f0f2f5"
  ink: "#000000"
  primary: "#1059a4"
  ink-muted: "#555555"
  ink-deep: "#222222"
  text-input-text: "#373737"
  text-input-border: "#dadce0"
  footer-border: "#dedede"
typography:
  display:
    fontFamily: Roboto
    fontSize: 24px
    fontWeight: 300
    lineHeight: 36px
  heading:
    fontFamily: Roboto
    fontSize: 24px
    fontWeight: 500
    lineHeight: 32px
  body:
    fontFamily: Roboto
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
  link:
    fontFamily: Roboto, sans-serif
    fontSize: 20px
    fontWeight: 300
    lineHeight: 24px
  input:
    fontFamily: Roboto, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 46.4px
rounded:
  xs: 4px
  sm: 5px
  md: 25px
spacing:
  s1: 5px
  s2: 6px
  s3: 8px
  s4: 12px
  s5: 14px
  s6: 15px
  s7: 24px
  s8: 30px
  s9: 32px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    height: 47px
  nav-link:
    textColor: "{colors.ink}"
    height: 36px
  text-input:
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 6px 12px
    height: 40px
    borderColor: "{colors.text-input-border}"
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
    boxShadow: rgba(0, 0, 0, 0.2) 0px 1px 2px 0px
  social-bar:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
  footer:
    textColor: "{colors.ink-muted}"
    borderColor: "{colors.footer-border}"
---

## Overview

This file documents Capcom USA at https://www.capcomusa.com/, not the bare capcom.com address. The address capcom.com is a region-selector splash: a grey page with a large grey "CAPCOM" outline logo, a small world map, five blue bevelled buttons ("CAPCOM JAPAN", "CAPCOM U.S.A.", "CAPCOM EUROPE", "CAPCOM ASIA", "CAPCOM TAIWAN") and a paragraph about the company's history. The splash links to the regional sites; Capcom USA is the English-language site of Capcom U.S.A., Inc. (its footer copyright line), so it was measured as the real home page and the file is named after it.

Capcom USA is a games publisher's catalogue in a white-and-grey Bootstrap shell. A 47px white header carries the yellow-and-blue "CAPCOM" wordmark at left, then the labels "Capcom Global" (with a dropdown caret), "News", "Games", "Company" and "Support", and at right search, account and settings icons and an "English" language button; a thin blue rule closes the header. Under it a full-width hero carousel shows key art (in the capture, the "PRAGMATA" slide with the line "PRAGMATA is Available Now!" and a "LEARN MORE" link with a circled chevron), with a dark pager pill (dots and previous/next arrows) at its lower right.

The grey body (#f0f2f5) holds a "Games" row, introduced by a blue 24px title and an "All" drop-down, with portrait cover art for "Dragon's Dogma 2: Dark Arisen Expansion", "Dragon's Dogma 2: Dark Arisen", "Onimusha: Way of the Sword" and "Monster Hunter Wilds" and round previous/next buttons at the right. A "Latest News" row follows with three white cards ("Capcom Snapshots: Orange", "Get the Guile Movie Color during Twitch Rivals!", "Capcom Snapshots: Musashi"), each with an image, a title, a two-line excerpt and a "READ MORE" link, then a "MORE NEWS" link. A solid blue band holds seven white social icons (X, Instagram, Bluesky, YouTube, Twitch, TikTok, Facebook), then a "JOIN THE CAPCOM NEWSLETTER" banner with an illustrated character, and a four-column footer (Offices; Online Store and Mobile; Capcom IR and Careers; Capcom News | RSS and Support) with the line "©CAPCOM U.S.A., INC. ALL RIGHTS RESERVED." and legal links (Terms, Privacy Policy, Video Policy, Cookie Policy, Fan Content Guidelines). The voice is short and promotional: "is Available Now!", "Get the ...", "LEARN MORE".

## Colors

The shell is neutral and the brand color is a single blue.

- `{colors.page-body}` #f0f2f5 is the body background (the stylesheet calls it `--capcom-lt-3`); `{colors.canvas}` #ffffff is the header, card and banner white and the largest measured area (weight 543). Text on the hero image and on the blue band is white (472 characters).
- `{colors.ink}` #000000 is the main text color (697 characters; `--capcom-lt-0`). `{colors.ink-deep}` #222222 (`--capcom-lt-1` and `--capcom-dk-3`) and `{colors.ink-muted}` #555555 (248 characters, the footer text) are the other two text colors.
- `{colors.primary}` #1059a4 is Capcom blue: the "Games" and "Latest News" titles (16 characters) and the social band fill (area weight 48). A darker #004099 appears in the stylesheet as `0 1px 0 0 #004099` (12 rules) and `inset 0 0 0 1px #004099` (8 rules); the element using each was not isolated.
- `{colors.text-input-text}` #373737, `{colors.text-input-border}` #dadce0 and `{colors.footer-border}` #dedede are the form-field text, field border and footer top border.

The stylesheet also holds the stock Bootstrap variables, including `--primary` #007bff and `--blue` #007bff; those are framework defaults, not Capcom brand colors, and were not measured on any visible element. The hero is key art, so its colors vary slide to slide and are not tokens.

## Typography

The live site is set in Roboto, loaded at weights 300, 400 and 500, and Roboto covers 1074 of the measured characters. Character weights are strongly light: 300 for 1394 characters, 700 for 64, 500 for 16 and 400 for 13. The header navigation is declared with Helvetica at 14px (`--capcombar-nav-font` and `--capcombar-nav-font-size`), and the footer uses a stack whose first entries are garbled text ("繝偵Λ繧ｮ繝手ｧ偵ざ Pro W3", a mis-encoded Japanese font name) followed by "Hiragino Kaku Gothic Pro", Meiryo, Osaka, "MS PGothic" and sans-serif, at 14px weight 700. The extractor measured the nav container at 0px font size, so no nav size is claimed beyond the declared 14px.

- `{typography.display}`: Roboto 24px, weight 300, line height 36px; the white carousel headline on the hero image.
- `{typography.heading}`: 24px, weight 500, line height 32px, in `{colors.primary}`; "Games" and "Latest News".
- `{typography.body}`: 16px, weight 300, line height 24px; card excerpts and descriptions (with 8px padding).
- `{typography.link}`: 20px, weight 300, line height 24px; the titles under the game covers.
- `{typography.input}`: 16px, weight 400, line height 46.4px; the "All" drop-down.

Character-weighted sizes are 24px (504), 14px (291), 20px (230), 16px (217), 12px (116) and 10px (113). Letter spacing is normal in every role.

## Layout

The page is a 1280px frame, 2530px high, on a Bootstrap grid; the stylesheet declares the breakpoints `--breakpoint-sm` 576px, `--breakpoint-md` 768px, `--breakpoint-lg` 992px and `--breakpoint-xl` 1200px. The extraction recorded three desktop bands: a 47px white header (content x 261 to 1260), a 600px hero (content x 0 to 576, the left-aligned slide text), and a 1883px band on `{colors.page-body}` with four columns and content x 32 to 1248. The layout probe recorded 6 visible header links and, at most, 10 card columns (the cover carousel), and no menu toggle.

Spacing steps are 5px (12 uses), 15px, 24px, 8px, 6px, 12px, 32px and 14px (`{spacing.s1}` to `{spacing.s9}`). The Games row shows four covers at a time with a gutter between them; the news row shows three cards. Titles sit left-aligned above each row, and the newsletter banner is centred between wider margins.

## Elevation & Depth

Cards float on one measured shadow, `rgba(0,0,0,0.2) 0 1px 2px 0` (16 elements), a close and soft drop that separates white cards from the grey body. One element carries a large dark shadow (`rgba(0,0,0,0.9) 0 8px 17px 0, rgb(0,0,0) 0 6px 20px 0`) and one a hard offset shadow (`rgba(0,0,0,0.25) 5px 5px 10px 0`). The stylesheet declares Material-style shadows in large numbers (`0 5px 11px 0 rgba(0,0,0,.18), 0 4px 15px 0 rgba(0,0,0,.15)` in 824 rules), but those were not measured on visible elements. The hero uses a dark gradient on the left edge of the key art so the white headline stays readable.

## Shapes

Corners are small. The measured radii are 4px (11 elements: cards and the form field), 5px (3) and `5px 5px 0 0` (3, rounded top corners), and one 25px pill (`{rounded.md}`). In the capture, the round previous/next buttons beside the Games row and the circled chevrons before "LEARN MORE", "READ MORE" and "MORE NEWS" are circles; the carousel pager is a dark pill. Cover art is rectangular.

## Components

- Header: a 47px white bar (`{components.nav}`) with the wordmark, five text links and three icons; the links measure 36px high, and a link's text turns rgb(0, 86, 179) on hover. The "English" button is 45px high and gains a 5% black tint on hover.
- Hero slide: key art with a left-aligned white 24px/300 headline and a "LEARN MORE" link with a circled chevron; a pager pill with dots and arrows at the lower right.
- Games filter: a 40px-high select with 4px radius, a 1px `{colors.text-input-border}` border, 6px 12px padding and 16px text (`{components.text-input}`).
- Game cover and title: a portrait cover with a 20px/300 centred title below it; the covers show ESRB rating marks as part of the packaging art.
- News card (`{components.card}`): white, 4px radius, the 1px-2px shadow, an image, a title, a two-line excerpt cut with an ellipsis and a "READ MORE" link with a circled chevron.
- Social bar (`{components.social-bar}`): a full-width `{colors.primary}` band with seven white icons.
- Newsletter banner: an illustrated character on a patterned pale-blue field with a lettered "JOIN THE CAPCOM NEWSLETTER" and a hard drop shadow.
- Footer (`{components.footer}`): `{colors.ink-muted}` link columns, a 1px `{colors.footer-border}` top border, the copyright and legal row, and a privacy-certified badge.

## Design System Architecture

No public or official Capcom design system, brand guideline or press kit was found; the pages https://www.capcom.com/ and https://www.capcomusa.com/ link none (the closest link is "Fan Content Guidelines", which covers fan-made content). The system is a Bootstrap 4 build with a thin Capcom layer: the root declares the stock Bootstrap colors (`--blue`, `--indigo`, `--purple`, `--pink`, `--red`, `--yellow` #ffc107, `--green`, `--teal`, `--cyan`) and the four breakpoints, then Capcom variables `--capcom-lt-0` #000, `--capcom-lt-1` #222, `--capcom-lt-2` #373737, `--capcom-lt-3` #F0F2F5 and the darker `--capcom-dk-1` #E6E6E6, `--capcom-dk-2` #474747, `--capcom-dk-3` #222, plus the shared global-bar variables `--capcombar-bg` #ffffff, `--capcombar-nav-font` Helvetica, `--capcombar-nav-font-size` 14px and `--capcombar-nav-font-color` #000000, and rating-icon sizes (`--rating_ico_w` 50px, `--rating_ico_h` 76px). The same `--capcombar-*` variables (background, nav font, font size, font color) are present in the capcom.com splash page's stylesheet.

## Do's and Don'ts

- Do keep the shell neutral (white header and cards on #f0f2f5) and let key art carry the color.
- Do use Capcom blue `{colors.primary}` for section titles and the social band only.
- Do set titles at 24px/500 and descriptions at 300 weight; the light weight is the house voice.
- Do keep cards at 4px radius with the 1px-2px shadow.
- Don't use Bootstrap's `#007bff` as a brand color; it is a declared default.
- Don't copy the garbled footer font names; use Meiryo or a Japanese system face with sans-serif as the footer stack declares.
- Don't treat ESRB rating marks or the privacy badge as part of the visual style.
- Don't use the splash page's grey bevelled buttons as a design reference for the regional sites; they belong to the capcom.com splash only.

## Responsive Behavior

Measured at the 390px mobile pass. The mobile header is 47px high and 390px wide with a white fill; the layout probe recorded 1 visible header link on mobile against 6 on desktop, and its menu-toggle flag was false on both. The mobile band list is a 47px header, a 195px hero (content x 0 to 195) and a 3425px band on `{colors.page-body}` with one column (content x 10 to 390). The heading remains 24px/500 with line height 32px, and body text 16px/300 with 24px line height and 8px padding. Mobile character-weighted sizes are 11.2px (392), 14px (255), 20px (230), 16px (217), 10px (193) and 19.2px (96). The cover carousel records at most 10 card columns on both viewports. What the one visible header link opens, and the breakpoints at which layout changes, are not measured.

## Iteration Guide

1. Start with a white header and `{colors.page-body}` body; place a full-width hero carousel at the top.
2. Titles in `{typography.heading}` and `{colors.primary}`; descriptions in `{typography.body}` at weight 300.
3. Use `{components.card}` for news, with an image, title, excerpt and a circled-chevron "READ MORE".
4. Add a full-width `{components.social-bar}` before the footer.
5. Reuse the global-bar variables (`--capcombar-*`) for any shared header.
6. Re-measure the header link font size (the nav container reports 0px) and the dark pager before declaring nav tokens.
