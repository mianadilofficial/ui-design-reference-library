---
version: alpha
name: "China Mobile Limited"
category: "Telecom"
description: "China Mobile Limited's English investor and corporate site: a white page with #f9f9f9 bands, #333333 and #666666 Roboto Light text, a three-color accent system of blue (#008ed4), magenta (#dc1779) and green (#8dc642) with pastel tint cards at 8px radius, and a header menu whose links fill blue on hover."
colors:
  canvas: "#ffffff"
  page-largest: "#f9f9f9"
  ink: "#333333"
  primary: "#008ed4"
  surface-grey: "#f3f3f3"
  tint-blue: "#e5f3fb"
  ink-muted: "#666666"
  accent-magenta: "#dc1779"
  accent-green: "#8dc642"
  tint-pink: "#fbe7f1"
  tint-green: "#f1fae3"
typography:
  nav-label:
    fontFamily: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 106px
  section-tab-mobile:
    fontFamily: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 21px
    fontWeight: 300
    lineHeight: 21px
  section-tab:
    fontFamily: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 23px
    fontWeight: 300
    lineHeight: 23px
rounded:
  xs: 8px
  pill: 9999px
spacing:
  s1: 10px
  s2: 15px
  s3: 20px
  s4: 23px
  s5: 25px
  s6: 30px
  s7: 40px
  s8: 100px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.section-tab}"
  card:
    backgroundColor: "{colors.tint-pink}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
  nav-link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.nav-label}"
  nav-link-hover:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.nav-label}"
  card-blue:
    backgroundColor: "{colors.tint-blue}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
  card-green:
    backgroundColor: "{colors.tint-green}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
---

## Overview

This is China Mobile Limited's English investor and corporate site (https://www.chinamobileltd.com/en/global/home.php, title "China Mobile Limited"), not a consumer telecom storefront. Its Overview page (https://www.chinamobileltd.com/en/about/overview.php) says the company was incorporated in Hong Kong in 1997, is listed in Hong Kong and Shanghai, and provides "communications, computing and AI services" across mainland China and Hong Kong SAR. The main navigation has four items: About China Mobile, Investor Relations, Media Centre and ESG. The page offers three language options, shown as EN, 繁 and 简, and a Tools set (RSS Feeds, Print this Page, Add to Favourites, Email this Page, Share this Page, Download Centre). Home page headings are Results Highlights, Latest News, Upcoming Events, Operating Data, Financial Highlights, Financial Reports and Stock Quotes.

The measured page is 1280px wide and 4,317px tall. It opens with a full-width banner illustration: a pale sky-blue to white gradient with soft wave-form particles and translucent glass cubes carrying line icons, labelled in the image 通信 Communications, 算力 Computing and 智能 AI, with the in-image green headline 奮力開新局 "Forge New Horizons." Beneath it the page becomes a plain data-and-disclosure layout: a news list with dates, a row of pastel document tiles for the 2026 interim results, and a row of operating-data tiles with large figures. Imagery is minimal and symbolic; the tone is factual and bilingual. Color is used as a sorting system: blue, magenta and green mark different content groups.

## Colors

The page is white (`{colors.canvas}` #ffffff) with the largest measured background area in a very light grey, `{colors.page-largest}` (#f9f9f9); `{colors.surface-grey}` (#f3f3f3) is the next grey. Text is neutral: `{colors.ink}` (#333333) on 881 measured characters and `{colors.ink-muted}` (#666666) on 604, the latter being the color of the header menu labels before hover.

Three accents do all the brand work. `{colors.primary}` (#008ed4) is the China Mobile blue; it fills the header menu item on hover (with white text) and colors the "Operating Data" icon, the "Second quarter of 2026" subtitle and some of the large figures in the capture. `{colors.accent-magenta}` (#dc1779) is the second accent (51 characters of text, plus the "Upcoming Events" circle icon and the corner tabs on the announcement tiles in the capture). `{colors.accent-green}` (#8dc642) is the third (28 characters of text, the "Latest News" and "2026 Interim Results" icons, and a 1px green rule measured as a border under the news tabs). Each accent has a pale tint used as a tile background: `{colors.tint-pink}` (#fbe7f1) for the announcement tiles, `{colors.tint-blue}` (#e5f3fb) for the press release and webcast tiles, and `{colors.tint-green}` (#f1fae3) for the presentation tile. A translucent black (`#00000099`) was measured on a very small area and is not documented as a brand color. No dark theme was measured.

## Typography

Roboto only, at light weight. The font stack is Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif, and the page loads two faces named Roboto and Roboto-Light (by character count: Roboto 1,591 and Roboto-Light 51). Weight 300 covers 1,622 measured characters and weight 700 only 20, so bold is almost absent. The extractor found no h1 element (its h1 role came from the largest hero text and landed on the header menu link "About China Mobile"), so the first typography token is named for what it measures.

- `{typography.nav-label}`: 16px, weight 300, line-height 106px (the height of the header row), used for the four menu labels in `{colors.ink-muted}`.
- `{typography.section-tab}`: 23px, weight 300, line-height 23px, used for section titles such as "Latest News" (a link role in the extraction).
- `{typography.section-tab-mobile}`: 21px, weight 300, line-height 21px, the same "Latest News" title measured at the 390px viewport.

Other measured sizes by character count: 18px (520, the card label size), 15px (453), 16px (148), 23px (109), 14px (103), 13px (100), 20px (98), 17px (60), 44px (32) and 45px (19). The 44px and 45px sizes are the largest on the page; the capture shows the operating-data figures (for example 1,011,046) at that scale, but the extractor did not isolate them as a role, so their line-height and weight are not recorded. Tracking is default (no letter-spacing was measured). Substitute: Roboto Light is available from Google Fonts; fall back to Helvetica Neue Light or Arial.

## Layout

The page keeps a consistent left and right gutter in the capture. Measured paddings are 20px (25 elements), then 30px, 15px, 100px and 25px (5 each), 23px and 40px (4 each) and 10px (1). The header is a single white row, 106px tall by the measured nav line-height, with the dual logo (5G++ mark, a vertical rule, then the Chinese and English China Mobile logo) at the left, the four menu items at the center-left, and the language switch (EN in a light-blue circle), a search icon and a settings icon at the right.

Under the banner, each content block starts with a large circular icon (green, magenta or blue) at the left edge with the section title beside it. "Latest News" and "Upcoming Events" are paired tabs sharing one row, with the active tab marked by a small notch in a green rule. News rows are full-width: a title, a small date line ("21 Sep 2026"), and a circular outline chevron at the right edge, separated by thin grey dividers. Document tiles for the interim results sit in a row of five, wrapping the fifth tile onto a second row; operating-data tiles sit in a row of four, each with a person-and-device icon, a small label and a large figure. The measured card boxes are 240px wide by 196px tall.

## Elevation & Depth

Flat. No box-shadow was measured anywhere on the page. Separation comes from color tints (the pastel tile backgrounds against white), thin dividers (a 1px #eeeeee border and a 1px `{colors.accent-green}` border were measured) and the large banner image above the content. The corner tabs on the document tiles are solid-color triangles in the accent color rather than elevated layers.

## Shapes

Tiles are rounded at `{rounded.xs}` (8px, measured on 15 elements). Circular elements use a 50% radius (7 elements); in the capture the section icons, the language chip and the news-row chevrons are circular. Two elements have a half-rounded `0px 10px 10px 0px` radius. The tile corner tabs are right-angled triangles pinned to the bottom-right corner of each tile, and the banner is a full-bleed rectangle with no rounding.

## Components

- **Header menu** (`nav-link`, `nav-link-hover`): labels at `{typography.nav-label}` in `{colors.ink-muted}`; on hover the item fills with `{colors.primary}` and the text turns `{colors.canvas}` (measured on About China Mobile, Investor Relations, Media Centre and ESG).
- **Section tab / title** (`link`): `{typography.section-tab}` in `{colors.ink}`, paired with a circular accent icon.
- **Document tile** (`card`, `card-blue`, `card-green`): pastel tint fill, 8px radius, a centered line icon in the accent color, an 18px label in `{colors.ink}`, and a solid corner tab. The two announcement tiles use `{colors.tint-pink}`, the press release and webcast tiles `{colors.tint-blue}`, and the presentation tile `{colors.tint-green}`.
- **News row**: title and date in neutral text on white with a thin divider and a circular outline chevron at the right.
- **Operating-data tile**: tint background by accent (green, blue, magenta, green in the capture), a small label and a very large figure in the accent color.
- **Language switch**: EN, 繁, 简 as text, the current language marked with a light-blue circular chip.

## Design System Architecture

No public design system, brand-guideline page or token package was found on the pages opened. The Media Centre's Corporate Images page (https://www.chinamobileltd.com/en/media/corpimage.php) lists five JPG images under the headings Corporate Identity, 5G Business and Main Brand, with no usage rules, colors or fonts. The home page links a Download Centre (https://www.chinamobileltd.com/en/download/index.php) whose contents were not opened. The de-facto system is the shipped stylesheet: it declares no CSS custom properties (zero root variables measured), loads two Roboto font faces, and expresses the palette through fixed hex values (#008ed4, #dc1779, #8dc642, their pastel tints and the greys listed above) and fixed pixel sizes and paddings.

## Do's and Don'ts

- Do keep the page white and neutral, and use color only as the blue, magenta and green accent system with matching pastel tints.
- Do set all text in Roboto Light at 300; reserve 700 for rare emphasis.
- Do round tiles at 8px and use circles (50%) for icons and chevrons.
- Do mark hover on the header menu with a solid `{colors.primary}` fill and white text.
- Don't add shadows; none were measured.
- Don't use bold headings; weight 700 covers only 20 measured characters.
- Don't treat the translucent black (`#00000099`) as a brand surface.
- Don't present the header link measurement (16px with a 106px line-height) as a heading style; it is a menu label.

## Responsive Behavior

Measured at a 390px viewport: the section title "Latest News" is 21px (23px at desktop), and the 18px size stays the most common (520 characters). Other mobile sizes by character count are 21px (109), 20px (98), 16px (93), 11px (78), 14px (55), 12px (48), 44px (32), 24px (27) and 45px (19). The 44px and 45px sizes stay unchanged from desktop. Header layout, tile wrapping, banner crop and navigation behavior at this width were not measured.

## Iteration Guide

1. Start with `{colors.canvas}`, `{colors.ink}` text and `{colors.page-largest}` bands; set everything in Roboto Light.
2. Give each content group one accent (blue, magenta or green), a circular icon in that accent and, for tiles, the matching pale tint at 8px radius.
3. Keep section titles at `{typography.section-tab}` and labels at 18px; keep the header as a single white row with hover fills in `{colors.primary}`.
4. Use large light-weight figures (44px to 45px) in accent colors for data.
5. Do not add shadows, gradients on UI, or bold weights.
6. Check any value against `web/data/extracted/china-mobile.json` before adding it.
