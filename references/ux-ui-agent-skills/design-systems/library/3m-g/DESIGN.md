---
version: alpha
name: 3M
category: "Business & Corporate"
description: "3M's US corporate home (3m.com) sets everything in the proprietary 3MCircular face, uses 3M red #d10411 for buttons and active tabs, a deep #8a041f burgundy band for news cards, #4b4b4b/#202024 text on white, 2px button corners and a 20px-radius search pill."
colors:
  canvas: "#ffffff"
  ink: "#4b4b4b"
  ink-body: "#202024"
  ink-black: "#000000"
  primary: "#d10411"
  on-primary: "#ffffff"
  burgundy: "#8a041f"
  gray-light: "#d3d3d3"
  hairline: "#e5e5e5"
  text-input-bg: "#fafafa"
  text-input-border: "#d6d6d6"
typography:
  display:
    fontFamily: "\"3MCircular\", Arial, sans-serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 40px
  display-mobile:
    fontFamily: "\"3MCircular\", Arial, sans-serif"
    fontSize: 18px
    fontWeight: 700
  heading:
    fontFamily: "\"3MCircular\", Arial, sans-serif"
    fontSize: 42px
    fontWeight: 700
    lineHeight: 50px
  heading-mobile:
    fontFamily: "\"3MCircular\", Arial, sans-serif"
    fontSize: 26px
    fontWeight: 700
    lineHeight: 38px
  subheading:
    fontFamily: "\"3MCircular\", Arial, sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 28px
  body:
    fontFamily: "\"3MCircular\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  body-mobile:
    fontFamily: "\"3MCircular\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22px
  button:
    fontFamily: "\"3MCircular\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: normal
  tab:
    fontFamily: "\"3MCircular\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  small:
    fontFamily: "\"3MCircular\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
  link:
    fontFamily: "\"3MCircular\", Arial, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
rounded:
  none: 0px
  xs: 2px
  sm: 20px
spacing:
  s1: 1px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 7px
  s6: 10px
  s7: 15px
  s8: 20px
  s9: 30px
  s10: 35px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 35px
    height: 45px
  industry-tab-active:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.tab}"
    rounded: "{rounded.none}"
    padding: 15px
    height: 56px
    borderColor: "{colors.primary}"
  news-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-black}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
    boxShadow: rgba(75, 75, 75, 0.1) 0px 10px 20px 0px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 0px 0px 1px
  search-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 6px 60px 5px 15px
    height: 40px
    borderColor: "{colors.text-input-border}"
---

## Overview

3m.com (US English, measured at 1280px and 390px) is a corporate gateway for a science and manufacturing conglomerate. The page title is "3M Science. Applied to Life. 3M United States", and the logo lockup in the header repeats that line beside the red 3M wordmark. The home page is short on selling and long on routing: a wide search pill, three top categories (Products, Industries, Brands), a hero statement, a news grid, an AI-assistant promotion, an industry tab panel, a "Who we are" link block and a dense multi-column footer.

The look is corporate and restrained. Everything is set in one family, the proprietary 3MCircular, in three weights. Colour is concentrated in two reds: the bright 3M red `#d10411` used for buttons, the active industry tab, the red promo tile and in-text links, and a deep burgundy `#8a041f` that fills the full-width "What's new" band behind white news cards. The rest of the page is white with grey and black type.

Photography is industrial and documentary: a macro shot of a perforated material in the hero, a robot arm over a red car body, a person at a monitor, product shots inside news cards. Icons in the "Who we are" block are thin red line drawings on a black textured background.

Note on the capture: the screenshot shows a country-selector dialog (Thailand / United States) over the hero. It is a geolocation prompt, not brand UI, and is not documented here.

## Colors

- **3M red `#d10411`** (`primary`) — the "Try Ask 3M" button, the active industry tab ("Automotive"), the large red tile in "Who we are", and red in-text links in the industry panel ("Auto Care", "Collision Repair", "Solventum"). 93 measured characters of text use it.
- **Burgundy `#8a041f`** — the second-largest background area on the page: the full-width "What's new" band.
- **Canvas `#ffffff`** — page background, header, news cards.
- **Ink `#4b4b4b`** — the body element's text color, header navigation, the search field text.
- **Body text `#202024`** (`ink-body`) — paragraph copy such as "Our solutions help manufacture, maintain, or advance nearly every vehicle in the world".
- **Black `#000000`** (`ink-black`) — news card headlines and section headings on white ("What we do").
- **Light grey `#d3d3d3`** — a large grey background area; **`#e5e5e5`** — hairline borders and a small background area.
- **Search field** — `#fafafa` fill with a `#d6d6d6` border.

White text (`#ffffff`) is the single most-read text color by character count, because the hero, burgundy band and "Who we are" block all set type in white.

A `#0033cc` text color was measured; in the capture the only visible text of that color is the link inside the country-selector dialog, so it is not a token here.

## Typography

One family, **3MCircular** (loaded as normal, bold and 200), with Arial as the declared fallback. It is proprietary to 3M; a freely available geometric sans such as DM Sans can stand in as a fallback, since 3MCircular itself is the brand voice.

| Role | Size / line-height | Weight |
| --- | --- | --- |
| Section heading ("What's new") | 42px / 50px | 700 |
| Hero headline (h1) | 32px / 40px | 700 |
| Card headline (h3) | 18px / 28px | 700 |
| Link (large) | 18px / 28px | 400 |
| Body | 16px / 24px | 400 |
| Button | 16px / normal | 700 |
| Tab | 16px / 24px | 700 |
| Small / utility | 14px / 14px | 400 |

Other measured sizes are 36px, 22px, 13px and 12px; 14px carries the most characters (footer and utility links). One letter-spacing value was measured: 2px at 14px, used for the tracked uppercase footer column labels (OUR COMPANY, NEWS, REGULATORY, HELP, FOLLOW US). Weight 200 carries 684 measured characters. All headings are sentence case.

## Layout

The measured desktop page is 1,280px wide and 4,871px tall, with content between x=85 and x=1190 in the band analysis. Measured gaps are 30px (16 times), 20px and 45px; paddings cluster at 15px, 10px, 30px and 50px.

Order of sections in the capture:

1. **Header** — logo lockup, a wide search field with an attached dark search button, locale switch (US - EN) at right; a second row with Products, Industries, Brands and Account.
2. **Hero** — a full-width photograph with the h1 "What the world needs next, we are making now." in a translucent dark box (`#00000099` measured background) at lower left.
3. **What's new** — burgundy band, centered 42px white heading, a 3-column grid of white news cards (image, date, bold headline), two rows.
4. **Ask 3M promo** — left-aligned headline, paragraph and red button over a photo that fades to white at the left.
5. **What we do** — left column of industry tabs (the active one red), right panel with photo, 18px headline, paragraph and a row of red underlined links, all inside a red-bordered box.
6. **Who we are** — black textured band with a red tile ("People. Ideas. Science. Reimagining what's possible.") and a two-column list of red line icons with underlined white links.
7. **Footer** — five columns with tracked uppercase labels, then a legal row with the 3M logo.

The maximum card column count measured on desktop is 3.

## Elevation & Depth

One shadow was measured: `rgba(75, 75, 75, 0.1) 0px 10px 20px 0px`, on 8 elements (the news cards). Everything else is flat. Depth otherwise comes from colour blocks — white cards on burgundy, a red tile on black — and from the translucent black box behind the hero headline.

## Shapes

Corners are nearly square. Measured radii: **0px** on tabs and cards, **2px** on buttons and header links, **20px** on the search field, `0px 20px 20px 0px` on the attached search button (rounding only the right side so the field and button read as one pill), and `0px 0px 3px 3px` on one element. News images are hard-cut rectangles at the top of each card.

## Components

- **Primary button** ("Try Ask 3M") — `#d10411` fill, white 3MCircular 16px/700, padding 0px 35px, 45px tall, 2px radius, no border, no shadow.
- **Active industry tab** ("Automotive") — `#d10411` fill with a 1px `#d10411` border, white 16px/700 label, 15px padding, 56px tall, 0px radius. Inactive tabs are plain black text on white.
- **News card** — white, 0px radius, the 10px/20px soft shadow, image on top, small date line, 18px/700 black headline.
- **Search field** — `#fafafa` fill, 1px `#d6d6d6` border, 20px radius, padding 6px 60px 5px 15px (the right padding leaves room for the attached button), 40px tall, 605px wide.
- **Header navigation** — white, `#4b4b4b` text; hover on Products/Industries keeps the color and background unchanged in the measured hover pass.
- **Industry panel links** — red, underlined, inline in a row.
- **Footer** — tracked 14px uppercase column labels, plain link lists, social icons, legal row.

## Design System Architecture

No public design system or brand-guidelines page for 3M could be opened in this session: the fetch of https://www.3m.com/3M/en_US/company-us/about-3m/ timed out (recorded in SOURCES.json), and the re-extraction of the home page failed with an HTTP/2 protocol error. The site exposes no CSS custom properties at `:root` (zero root variables measured), so the de-facto system is read from the computed styles: a single proprietary family (3MCircular) with a custom icon font (`3MThemeIconFont`), one primary red, one burgundy, a grey ramp (`#4b4b4b`, `#d3d3d3`, `#d6d6d6`, `#e5e5e5`, `#fafafa`), radii of 0/2/20px and one card shadow.

## Do's and Don'ts

**Do**
- Set all text in 3MCircular; bold (700) for headings and buttons, regular (400) for body.
- Use `#d10411` for actions, the active state and in-text links.
- Use `#8a041f` only as a full-width band colour behind white cards.
- Keep corners at 0px for cards and tabs and 2px for buttons; reserve 20px for the search pill.
- Write headings in sentence case and keep microcopy plain ("What's new", "What we do", "Who we are").

**Don't**
- Don't put long body copy in red; the reds are for actions and accents.
- Don't introduce gradients or extra shadows beyond the single card shadow.
- Don't round buttons into pills.
- Don't document or imitate the country-selector dialog as part of the brand UI.
- Don't mix in a second typeface for headings.

## Responsive Behavior

Measured at 390px:

- The header shows 3 links and a menu toggle labelled "Open Navigation" (desktop: 6 header links, no toggle).
- The hero headline measured 18px/700; the "What's new" heading measured 26px/38px; body paragraphs measured 14px/22px (16px/24px on desktop).
- Card grid: maximum card columns measured 1 (desktop 3).
- Content runs from x=15 to x=375 in most bands.
- The burgundy "What's new" band measured 1,105px tall; the "Who we are" photo band 726px; a `#d10411` 54px strip sits above the industry photo in the "What we do" section.
- The page ends with a `#f2f2f2` band (234px).

Breakpoints between 390px and 1280px were not measured.

## Iteration Guide

1. Start from white, `#4b4b4b`/`#202024` text and 3MCircular at 16px/24px.
2. Add one red action per section: a 45px, 2px-radius `#d10411` button with 35px side padding.
3. For a news or story section, use a burgundy `#8a041f` band with a 3-column grid of white, square-cornered cards carrying the `rgba(75,75,75,0.1) 0 10px 20px` shadow; set gaps at 30px.
4. For category navigation, use a vertical tab list with a solid red active tab (0px radius, 56px tall) beside a red-bordered content panel.
5. Keep section headings at 42px/700 on desktop and 26px/700 on mobile.
6. Use industrial or laboratory photography; avoid stock lifestyle imagery that does not show a material, product or process.
7. Anything outside these measured values should be checked against a fresh extraction before use.
