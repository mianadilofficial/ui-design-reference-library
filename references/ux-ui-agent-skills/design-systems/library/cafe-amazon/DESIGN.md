---
version: alpha
name: Café Amazon
category: "Thai Brands"
description: "Café Amazon (cafe-amazon.com) is the coffee-shop brand of PTT Oil and Retail Business, with a calm forest-green Thai site. FC Iconic at 400/700, primary green #436152, footer green #2b4635, near-black ink #181d27, white page, a 110px hero headline, 0px-radius buttons and cards with soft Tailwind-style shadows."
colors:
  canvas: "#f9fafa"
  page-body: "#ffffff"
  ink: "#181d27"
  primary: "#436152"
  on-primary: "#ffffff"
  surface-subtle: "#f8f9f8"
  surface-latte: "#ebddc7"
  green-deep: "#304b3b"
  ink-light: "#e5e7eb"
  accent-latte: "#977035"
  hairline: "#d5d7da"
  button-secondary-border: "#a9bfa9"
  footer-bg: "#2b4635"
typography:
  display:
    fontFamily: "\"FC Iconic\", sans-serif"
    fontSize: 110px
    fontWeight: 400
    lineHeight: 77px
  heading:
    fontFamily: "\"FC Iconic\", sans-serif"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 40px
    letterSpacing: "-0.2px"
  heading-mobile:
    fontFamily: "\"FC Iconic\", sans-serif"
    fontSize: 30px
    fontWeight: 700
    lineHeight: 36px
  body:
    fontFamily: "\"FC Iconic\", sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 26.4px
  body-mobile:
    fontFamily: "\"FC Iconic\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 17.6px
  button:
    fontFamily: "\"FC Iconic\", sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 28px
  button-mobile:
    fontFamily: "\"FC Iconic\", sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 14px
  nav:
    fontFamily: "\"FC Iconic\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  link:
    fontFamily: "\"FC Iconic\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 100px
  none: 0px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 14px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 28px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8px 16px
    height: 44px
  button-primary-mobile:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button-mobile}"
    rounded: "{rounded.none}"
    padding: 4px 16px
    height: 28px
  button-secondary:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 0px 12px
    height: 64px
    borderColor: "{colors.button-secondary-border}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 6px 8px
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
    padding: 0px 16px 0px 40px
    height: 40px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.page-body}"
    rounded: "{rounded.none}"
    borderColor: "{colors.hairline}"
---

## Overview

Café Amazon is the coffee-shop brand run by PTT Oil and Retail Business; the footer of https://www.cafe-amazon.com/ names "บริษัท ปตท. น้ำมันและการค้าปลีก จำกัด (มหาชน)" as the operator. The site is Thai (`lang` th), titled "Café Amazon", and reads as a sustainability story rather than a menu: the hero line is "กาแฟ ที่แฟร์ กับคน ทั้งโลก" ("coffee that is fair to everyone in the world"), set in large green type around a green Café Amazon paper cup with a trail of leaves.

The page is a long white scroll of distinct bands. A 60px header carries a menu icon, the bird logo in the centre, and utility links on the right ("ตรวจสอบสถานะใบสมัคร" check application status, "ค้นหาสาขา" find a branch, a search icon and a "TH" language switch). Below the hero a four-cell quick-link bar lists "ผลิตภัณฑ์", "งานจัดเลี้ยง", "ร่วมธุรกิจกับเรา" and "OASYS", each with a line icon and a chevron. Then come four small white pillar cards ("แฟร์กับเกษตรกร", "แฟร์กับธรรมชาติ", "แฟร์กับโลกใบนี้", "แฟร์กับทุกคน") with round photo thumbnails, a production-process section ("แฟร์ทุกกระบวนการของขั้นตอนการผลิต") with photo cards beside a coffee-bean illustration, a full-bleed green mountain illustration with a farmer photograph, a partnership row with five line icons ("ร่วมสร้างความแฟร์ให้โลกนี้ ไปกับเรา"), a beige news band ("อัปเดตจากคาเฟ่ อเมซอน") with three news cards, and a deep green footer.

The top of the capture also contains a black memorial tribute slide at the top of the hero. It is a temporary notice, not brand UI, and no value from it (including the black fill measured as a background area) is used in the tokens below. A cookie banner was detected and hidden by the extractor (`consentOverlaysHidden`: or-cookie-banner).

## Colors

The palette is one green family on white, plus a latte beige and a gold accent.

- `{colors.page-body}` #ffffff is the page background (the largest measured background area, weight 3060) and the text color on green fills and in the footer.
- `{colors.canvas}` #f9fafa and `{colors.surface-subtle}` #f8f9f8 are off-white section fills (the last measured band, from y 1299 to the page end, 3174px, has a dominant fill of #f8f9f8).
- `{colors.ink}` #181d27 is the main text color (weight 1444 characters), also the color of nav links and the quick-link bar labels. The stylesheet calls it `--colorGray900`.
- `{colors.primary}` #436152 is the brand green: the "ดูทั้งหมด" button fill, the hero headline color, the section heading color, and `--colorPrimary` / `--fg-brand-primary` in the stylesheet.
- `{colors.footer-bg}` #2b4635 is the footer fill and `--button-primary-bg` / `--bg-brand-solid`; a darker `--button-primary-bg_hover` #26352e and `--colorBrand950` #17261d are declared beside it.
- `{colors.green-deep}` #304b3b is a deeper text green (`--text-brand-secondary`), used for the pillar and section sub-titles.
- `{colors.accent-latte}` #977035 is the gold/latte label color (`--colorLatte700`), used for the small pillar titles. `{colors.surface-latte}` #ebddc7 is the beige band behind the news cards.
- `{colors.button-secondary-border}` #a9bfa9 is the 1px border of the quick-link bar cells; `{colors.hairline}` #d5d7da is the common divider and card border (11 measurements).
- `{colors.ink-light}` #e5e7eb is a light text color measured on the dark footer and news band.

In the hover pass, the main menu items and the utility links ("ค้นหาสาขา", "TH") change text color from `{colors.ink}` to #436152, and the quick-link bar cells change to #698c69 (`--colorPrimaryOn` in the stylesheet).

## Typography

The site uses a single Thai-capable family, FC Iconic, loaded at weights 400 and 700; it covers all 3217 measured characters. The font-face list in the shipped CSS also declares Sarabun, DBHelvethaicaMonX, DBHelvethaicaMonXMed and Font Awesome 5, and if FC Iconic is unavailable, Sarabun is the Thai family the site's own stylesheet declares.

- `{typography.display}`: 110px, weight 400, line height 77px, in `{colors.primary}`; the words of the hero headline "กาแฟ / ที่แฟร์ / กับคน / ทั้งโลก". The line height (77px) is below the font size.
- `{typography.heading}`: 36px, weight 700, line height 40px, letter spacing -0.2px; section titles and the white card titles on green ("โรงแปรรูปเมล็ดกาแฟ").
- `{typography.body}`: 24px, weight 400, line height 26.4px; this is the most-read size (1699 characters). The 20px, 24px, 36px and 48px sizes all carry -0.2px letter spacing in the frequency table.
- `{typography.button}`: 20px, 700, line height 28px, for filled buttons. `{typography.nav}` is 20px/400 for menu items; `{typography.link}` is 16px/400 for utility links and the search input.

Weights measured by characters are 700 (1554), 400 (1279), 300 (197) and 600 (187). A 130px size and a 48px and 32px size also appear; they are not declared as tokens because their weights and line heights were not isolated.

## Layout

The desktop extraction recorded five bands: a 60px header band with two columns and content from x 80 to 1197; a 574px band (four columns, content x 123-1135); a 199px band (one column, content x 98-957); a 466px band (one column, content x 282-1159); and a 3174px last band on #f8f9f8 with one column (content x 72-1137). The page scroll height is 4473px at a 1280px viewport.

The page is built from alternating full-width bands, each with its own atmosphere: white hero with watercolour smoke, grey-white production section, a deep green mountain illustration, a beige news band and the dark footer. Content is mostly centred and left-aligned inside bands. The extraction recorded up to nine card columns (`maxCardColumns` 9).

Spacing follows a 4px base: the gap table lists 4px (44 uses), 16px, 8px, 24px, 12px, 20px, 36px and 48px, and the paddings 12px, 16px, 8px, 20px, 6px and 14px. These map to `{spacing.s1}` through `{spacing.s10}`. The stylesheet also declares `--space-xxl` as 48px.

## Elevation & Depth

Cards float on soft Tailwind-style shadows. Four measured shadow values: `0 10px 15px -3px rgba(0,0,0,0.1), 0 4px 6px -4px rgba(0,0,0,0.1)` (8 elements), `0 25px 50px -12px rgba(0,0,0,0.25)` (3 elements), `0 20px 25px -5px rgba(0,0,0,0.1), 0 8px 10px -6px rgba(0,0,0,0.1)` (1) and `0 1px 4px -1px rgba(10,13,18,0.1)`. Surfaces are otherwise flat: sections change fill instead of casting shadows, and the hero has layered watercolour smoke and leaf illustrations behind the cup. Borders use `{colors.hairline}` for cards and `{colors.button-secondary-border}` for the quick-link bar.

## Shapes

The shape language mixes square and circular. Buttons, nav items, the search input and the quick-link bar cells are square (`{rounded.none}` 0px). A 9999px radius (`{rounded.pill}`) was measured on 15 elements and a 100px radius (`{rounded.xs}`) on one; the capture shows round photo thumbnails on the pillar cards, round bullets beside the production section and round chevron buttons. Photography inside cards is rectangular and full-bleed with no radius.

## Components

- Primary button ("ดูทั้งหมด"): fill `{colors.primary}`, white text, 20px/700, 44px high, padding 8px 16px, 0px radius. On mobile it is 28px high with 4px 16px padding and 14px/700 text.
- Quick-link bar cell ("ผลิตภัณฑ์", "OASYS"): transparent, `{colors.ink}` label at 24px/400, 64px high, padding 0 12px, 1px `{colors.button-secondary-border}` border, with a line icon on the left and a chevron on the right.
- Navigation: 20px/400 items with a padding of 6px 8px and 40px height, a chevron after each dropdown item, hover color #436152.
- Search input ("ตรวจสอบสถานะใบสมัคร" row): 40px high, 16px text, padding 0 16px 0 40px so the leading magnifier icon sits inside the field, ending in a green round submit button.
- Pillar card: a white card with a gold `{colors.accent-latte}` title, a one-line description and a round photo thumbnail that overlaps its edge.
- Facility card: photo on the left, dark green panel on the right with a white 36px/700 title, 24px description and a "ข้อมูลเพิ่มเติม" link.
- Footer: `{colors.footer-bg}`, white text, 396px high, 1px `{colors.hairline}` border, with a phone number, link columns, store badges and social icons.

## Design System Architecture

No public or official Café Amazon design system, brand guidelines or press kit is published on https://www.cafe-amazon.com/ (the page links none). The de-facto system lives in the shipped stylesheet, which exposes about 400 CSS variables in two naming schemes. Role-named variables such as `--bg-brand-solid` (#2b4635), `--bg-brand-primary` (#f3f6f3), `--bg-brand-secondary` (#d3ded3), `--bg-brand-section` (#17261d), `--fg-brand-primary` (#436152), `--text-brand-secondary` (#304b3b), `--text-placeholder` (#717680), `--button-primary-bg`, `--button-secondary-border` (#d5d7da) and hover variants ending in `_hover`. Scale-named variables such as `--colorPrimary` (#436152), `--colorPrimaryOn` (#698c69), `--colorPrimaryLight` (a `color-mix` of #436152 and white), `--colorPrimaryDark`, plus beverage-named ramps: `--colorLatte50`, `--colorLatte700`, `--colorLatte800`, `--colorLatte950`, `--colorEspresso*`, `--colorThaiTea*`, `--colorIcedTea*`, `--colorMoss*` and `--colorFolioGreen*`. Utility classes come from Tailwind (the `--tw-*` variables and the shadow strings above). The home-page measurement is dominated by the green, gray and latte families; the other ramps (pink, indigo, cyan and so on) are declared but were not isolated on the page.

## Do's and Don'ts

- Do keep the page white and let green (`{colors.primary}`, `{colors.footer-bg}`) carry the brand.
- Do use 0px radius on buttons, inputs and nav cells; round only photo thumbnails and chevron controls.
- Do use FC Iconic 700 for titles and 400 for reading text, with -0.2px tracking at 20-48px.
- Do keep gold `{colors.accent-latte}` for small labels.
- Don't use the black memorial slide or its black fill as a brand color.
- Don't add a second saturated accent; the latte beige `{colors.surface-latte}` is the only warm field.
- Don't round the primary button; it is square.
- Don't show shadow on the footer or flat sections.

## Responsive Behavior

Measured at the 390px mobile pass only. The primary button shrinks to 28px high, 95px wide, with 14px/700 text and 4px 16px padding (`{components.button-primary-mobile}`). The section h2 is `{typography.heading-mobile}` (30px, 700, line height 36px, 20px horizontal padding, 366px wide) and body text in cards is `{typography.body-mobile}` (16px, line height 17.6px). The mobile character-weighted sizes are 20px (1166), 16px (785), 12px (483), 14px (413) and 24px (105). The layout probe recorded 3 visible header links and a menu toggle labelled "Open menu" on desktop, 0 visible header links on mobile, and a mobile band structure of a 60px header, a 686px hero band with one column (content x 27-345) and a 2752px white band with one column (content x 24-373). Tablet widths, breakpoints and what the toggle opens are not measured.

## Iteration Guide

1. Start with a `{colors.page-body}` page and one `{colors.primary}` green; reserve `{colors.footer-bg}` for the closing band.
2. Set the hero in `{typography.display}` with the product object at the centre of the headline.
3. Build section titles with `{typography.heading}` and body copy with `{typography.body}`.
4. Make cards white with the first measured shadow and a `{colors.hairline}` border; keep buttons square.
5. Use `{colors.surface-latte}` for exactly one editorial band (news) and `{colors.accent-latte}` for labels.
6. Before shipping, re-measure dark-section text sizes (the 130px, 48px and 32px sizes were not tokenised).
