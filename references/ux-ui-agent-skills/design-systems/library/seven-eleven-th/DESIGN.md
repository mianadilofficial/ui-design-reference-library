---
version: alpha
name: 7-Eleven Thailand
category: "Thai Brands"
description: "7-Eleven Thailand (7eleven.co.th, operated by CP ALL) is a white-canvas promo catalogue set entirely in the Thai typeface DBHelvethaicaMonX (regular) and DBHelvethaicaMonXBd (bold cut, served at weight 400), with a 24px body size, deep 7-Eleven green #00693e for 36px section titles and the full-bleed footer, brighter green #00a550 for nav hover, grey #525252 body ink, square 0px image tiles on #f2f2f2, and 50% circular carousel controls."

colors:
  primary: "#00693e"
  primary-bright: "#00a550"
  consent-green: "#03a550"
  consent-green-hover-bg: "#a1dfbf"
  promo-red: "#ec1d24"
  canvas: "#ffffff"
  surface-thumb: "#f2f2f2"
  ink: "#525252"
  ink-link: "#353b50"
  ink-button: "#353a41"
  on-primary: "#ffffff"
  hairline-consent-hover: "#e5e5e5"
  overlay-arrow: "#00000073"
  overlay-arrow-disabled: "#777777bf"
  video-placeholder: "#b8b8b84d"
  browser-default-link: "#0000ee"

typography:
  section-title:
    fontFamily: "DBHelvethaicaMonXBd, DBHelvethaicaMonX, sans-serif"
    fontSize: 36px
    fontWeight: 400
    lineHeight: 41.4px
  section-title-mobile:
    fontFamily: "DBHelvethaicaMonXBd, DBHelvethaicaMonX, sans-serif"
    fontSize: 28px
    fontWeight: 400
    lineHeight: 32.2px
  item-title:
    fontFamily: "DBHelvethaicaMonXBd, DBHelvethaicaMonX, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 24px
  body:
    fontFamily: "DBHelvethaicaMonX, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 24px
  body-base:
    fontFamily: "DBHelvethaicaMonX, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 27.6px
  footer-heading:
    fontFamily: "DBHelvethaicaMonX, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.6px
  auth-link:
    fontFamily: "DBHelvethaicaMonX, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: 0.5px
  link-more:
    fontFamily: "DBHelvethaicaMonX, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 20.7px
  nav-label:
    fontFamily: "DBHelvethaicaMonX, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 18px
  footer-link:
    fontFamily: "DBHelvethaicaMonX, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 18px
  button:
    fontFamily: "DBHelvethaicaMonX, sans-serif"
    fontSize: 18px
    fontWeight: 400
    letterSpacing: 0.45px
  button-consent:
    fontFamily: "DBHelvethaicaMonX, sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 22px

rounded:
  none: 0px
  field: 5px
  button-consent: 8px
  panel: 10px
  circle: 9999px

spacing:
  xxs: 4px
  xs: 5px
  sm: 8px
  md: 10px
  field-x: 16px
  lg: 20px
  section-y: 30px
  gutter: 40px
  footer-y: 45px

components:
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav-label}"
    height: 74px
  nav-link-hover:
    textColor: "{colors.primary-bright}"
  auth-link:
    textColor: "{colors.ink}"
    typography: "{typography.auth-link}"
  avatar:
    backgroundColor: "{colors.primary-bright}"
    rounded: "{rounded.circle}"
    size: 46px
  section-title:
    textColor: "{colors.primary}"
    typography: "{typography.section-title}"
  link-more:
    textColor: "{colors.ink-link}"
    typography: "{typography.link-more}"
    textDecoration: underline
  link-more-hover:
    textColor: "{colors.primary}"
  product-thumb:
    backgroundColor: "{colors.surface-thumb}"
    rounded: "{rounded.none}"
    size: 279px
  promo-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  carousel-arrow:
    backgroundColor: "{colors.overlay-arrow}"
    rounded: "{rounded.circle}"
    size: 49px
  carousel-arrow-disabled:
    backgroundColor: "{colors.overlay-arrow-disabled}"
  carousel-dot:
    backgroundColor: "{colors.canvas}"
    rounded: "{rounded.circle}"
    size: 12px
    boxShadow: "rgba(0, 0, 0, 0.5) 0px 2px 4px 0px"
  carousel-dot-active:
    backgroundColor: "{colors.primary}"
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-button}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 16px
    height: 38px
  text-input:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.field}"
    padding: 0px 16px
    height: 40px
    border: "1px solid #ffffff"
  button-consent:
    backgroundColor: "{colors.consent-green}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-consent}"
    rounded: "{rounded.button-consent}"
    padding: 5px 26.5px
    height: 40px
  button-consent-hover:
    backgroundColor: "{colors.consent-green-hover-bg}"
    textColor: "{colors.consent-green}"
    border: "1px solid #e5e5e5"
  video-placeholder:
    backgroundColor: "{colors.video-placeholder}"
    rounded: "{rounded.panel}"
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.footer-link}"
    padding: 45px 0px
---

## Overview

7eleven.co.th is the Thai-language storefront of 7-Eleven Thailand, run by CP ALL. It is not a
product-led marketing site but a **promotion catalogue**: almost everything a visitor sees is a
raster banner — Monchhichi stamp campaigns, "แจก แสตมป์จัดหนัก" (heavy stamp giveaways),
"ลดอย่างแรง" (big discounts), new All Select drinks. The HTML layer around those banners is
deliberately quiet: a white canvas, one green for headings, one grey for text, and square tiles.

The page reads top-to-bottom as:

1. A 74px white header with the red-green-orange 7-Eleven logo, six icon+label nav items
   (All Online, ร้านเซเว่น, โปรโมชั่น, สินค้า, ออลล์ เมมเบอร์, ค้นหาร้าน), search / wishlist /
   notification icons, a green circular avatar, and the "เข้าสู่ระบบ / สมัครสมาชิก" text links.
2. A full-width hero carousel of campaign artwork with dark translucent circular arrows and a
   row of white dots with a green active dot, closed by a thin green rule.
3. A sequence of sections, each opened by a green bold section title (`{typography.section-title}`)
   on the left and an underlined grey "ดูเพิ่มเติม" (see more) link on the right.
4. A full-bleed `{colors.primary}` green footer with white link columns and a newsletter field.

The brand's character lives in three measured choices:

- **Green, not red.** Although the 7-Eleven logo is orange/red/green, the site's UI color is the
  deep green `{colors.primary}` (`#00693e`) — every section title, the footer, the active
  carousel dot and the link hover state. A brighter `{colors.primary-bright}` (`#00a550`) is used
  for nav hover and the avatar disc. Red `{colors.promo-red}` (`#ec1d24`) appears only as one
  carousel's active dot and a menu badge — red otherwise lives inside the banner art.
- **One Thai typeface family.** All HTML text is DBHelvethaicaMonX; titles switch to the
  separate font file DBHelvethaicaMonXBd while keeping `font-weight: 400`. The DB family has a
  small x-height, so the measured 24px body size reads visually like a ~16px Latin size — that is
  why the default body token is 24px and must not be "corrected" down.
- **Square geometry.** Banners, product thumbnails, the newsletter button and cards are all
  `{rounded.none}` 0px. The only round shapes are controls: 50% circles for carousel arrows,
  dots and the avatar.

**Key Characteristics:**
- White `{colors.canvas}` page; content inside a 1300px container with 40px side padding.
- Section rhythm: every section is `30px 0px` padded, title row + content grid.
- Green `{colors.primary}` 36px bold-cut section titles; grey `{colors.ink}` 24px body.
- Promo cards are images first, then a 24px bold-cut title and 24px regular date line.
- Product carousels use 279px square thumbnails on `{colors.surface-thumb}` (`#f2f2f2`).
- Interaction color is green: nav hover `#00a550`, link hover `#00693e`.
- No drop shadows on surfaces; the only shadow sits under carousel dots.

## Colors

> **Source:** homepage extraction (`web/data/extracted/seven-eleven-th.json`) plus recorded Playwright probes in `SOURCES.json`.

### Brand & Accent
- **7-Eleven Green** (`{colors.primary}` — `#00693e`): section titles, footer background,
  active carousel dot, hover color of "ดูเพิ่มเติม". This is the site's UI brand color.
- **Bright Green** (`{colors.primary-bright}` — `#00a550`): nav item hover text and the avatar disc in the header.
- **Consent Green** (`{colors.consent-green}` — `#03a550`): the filled buttons of the cookie banner
  ("ยอมรับทั้งหมด") and of the cookie-gated video panel ("ตั้งค่าคุกกี้").
- **Consent Green Hover** (`{colors.consent-green-hover-bg}` — `#a1dfbf`): hover fill of those buttons.
- **Promo Red** (`{colors.promo-red}` — `#ec1d24`): active dot of one promotional carousel and a menu badge.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): the page and header background; what the viewer sees between banners.
- **Thumb Grey** (`{colors.surface-thumb}` — `#f2f2f2`): the square `item-thumb` behind product photos.
  It is the largest measured background by area because the product carousels repeat it.
- **Video Placeholder** (`{colors.video-placeholder}` — `#b8b8b84d`): translucent grey panel (10px radius)
  that replaces a YouTube embed until targeting cookies are accepted.
- **Overlay Arrow** (`{colors.overlay-arrow}` — `#00000073`, i.e. rgba(0,0,0,0.45)): carousel arrow discs.
- **Overlay Arrow Disabled** (`{colors.overlay-arrow-disabled}` — `#777777bf`): arrow at the start/end of a carousel.

### Text
- **Ink** (`{colors.ink}` — `#525252`): body text, nav labels, card titles and dates. The most-read text color.
- **Ink Link** (`{colors.ink-link}` — `#353b50`): the underlined "ดูเพิ่มเติม" link.
- **Ink Button** (`{colors.ink-button}` — `#353a41`): text on the white newsletter "เข้าร่วม" button.
- **On Primary** (`{colors.on-primary}` — `#ffffff`): footer headings, footer links, newsletter input text.
- **Browser Default Link** (`{colors.browser-default-link}` — `#0000ee`): measured on icon-only header
  anchors (logo, icon links) that never set a color; it is not visible because those anchors contain only images.

### Semantic
The homepage exposes no error / success / warning palette, and no official source documents one. None is declared.

## Typography

### Font Family

The site serves its own font files from `/static/fonts/`:

- **DBHelvethaicaMonX** — regular; used for all body, nav, link, footer and button text.
- **DBHelvethaicaMonXBd** — the bold cut as a *separate family*, used for h2 section titles and
  h3 card titles. It is applied with `font-weight: 400`; the boldness comes from the file, not from synthesis.

The served `DBHelvethaicaMonX.ttf` name table reads: "DBHelvethaicaMonX Reg", "Version 3.100 2008",
"Copyright (c) 2008 by Prinya R. nont", trademark "DB HelvethaicaMon X 55", designer "Prinya Rojarayanont",
vendor URL dbfonts.biz. The same stylesheet also declares DBHelvethaicaMonXCond, db_heaventroundedcond,
db_helvethaica_x75_bd / x65_med / x55_regular and digital_display_tfbregular, which the homepage did not render.

### Hierarchy

| Token | Family | Size | Weight | Line Height | Letter Spacing | Use |
|---|---|---|---|---|---|---|
| `{typography.section-title}` | DBHelvethaicaMonXBd | 36px | 400 | 41.4px | — | Section h2 ("พิเศษสำหรับคุณ") |
| `{typography.section-title-mobile}` | DBHelvethaicaMonXBd | 28px | 400 | 32.2px | — | Section h2 at 390px |
| `{typography.item-title}` | DBHelvethaicaMonXBd | 24px | 400 | 24px | — | Card / product h3 |
| `{typography.body}` | DBHelvethaicaMonX | 24px | 400 | 24px | — | Card subtitles, dates, paragraphs |
| `{typography.body-base}` | DBHelvethaicaMonX | 24px | 400 | 27.6px | — | Body default (inherited) |
| `{typography.footer-heading}` | DBHelvethaicaMonX | 24px | 400 | 24px | 0.6px | Footer column title (h3) |
| `{typography.auth-link}` | DBHelvethaicaMonX | 20px | 400 | 20px | 0.5px | เข้าสู่ระบบ / สมัครสมาชิก |
| `{typography.link-more}` | DBHelvethaicaMonX | 18px | 400 | 20.7px | — | "ดูเพิ่มเติม" |
| `{typography.nav-label}` | DBHelvethaicaMonX | 18px | 400 | 18px | — | Label under nav icon |
| `{typography.footer-link}` | DBHelvethaicaMonX | 18px | 400 | 18px | — | Footer list links |
| `{typography.button}` | DBHelvethaicaMonX | 18px | 400 | — | 0.45px | Newsletter button & input |
| `{typography.button-consent}` | DBHelvethaicaMonX | 18px | 700 | 22px | — | Cookie-consent buttons |

### Principles
- **24px is body.** The DB family's small Latin/Thai x-height makes 24px the reading size. Do not
  shrink body below 24px; 18px is already the small/meta size.
- **Bold = a different file.** Titles use DBHelvethaicaMonXBd at weight 400. Only the consent
  buttons ask for weight 700 on the regular file.
- **Tight leading.** Titles and card copy set line-height equal to the font size (24px/24px) or 1.15
  (36px/41.4px, 24px/27.6px). Thai stacked vowels sit inside that tight box.
- **Small positive tracking on UI labels.** 0.45px at 18px, 0.5px at 20px, 0.6px at 24px — always 2.5% of the size.
- **No uppercase transforms.** Text is mostly Thai; Latin product names stay in sentence case.

### Note on Font Substitutes
DB HelvethaicaMon X is a commercial Thai typeface (trademark of Prinya R. nont, per the font's own
name table). No official substitute is documented by 7-Eleven. When the licensed files are not available,
keep the fallback generic (`sans-serif`) and keep the measured pixel sizes; do not swap in a large-x-height
Thai font at the same sizes without re-checking, because the 24px body size depends on DB's small x-height.

## Layout

### Spacing System
- **Tokens:** `{spacing.xxs}` 4px · `{spacing.xs}` 5px · `{spacing.sm}` 8px · `{spacing.md}` 10px ·
  `{spacing.field-x}` 16px · `{spacing.lg}` 20px · `{spacing.section-y}` 30px · `{spacing.gutter}` 40px ·
  `{spacing.footer-y}` 45px.
- **Section padding:** every homepage section is `30px 0px`.
- **Container:** `.container` max-width 1300px with `0px 40px` padding.
- **Footer:** `45px 0px` padding; columns padded `0px 20px`.
- **Nav items:** 74px tall links with `4px 0px 0px` top padding; icon above an 18px label.

### Grid & Container
- Hero: full-bleed carousel, 1280px wide at desktop.
- "พิเศษสำหรับคุณ": a two-column split — one tall portrait banner left, one wide banner right with two
  small image+text cards beneath it.
- "มีอะไรใหม่อยากให้ลอง": a 4-up carousel of 279px square product tiles with title + English subtitle.
- "โปรดีๆ มีให้ทุกวัน" / "ลดอย่างแรง": two half-width sections side by side, each with its own title row.
- "สมาชิก ALL member": two wide banners side by side.

### Whitespace Philosophy
Whitespace is modest and uniform: 30px above and below every section, inside a 1300px container with
40px side padding. Density comes from
the banners themselves, which are saturated and text-heavy — the HTML frame stays calm so the art can shout.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat, no shadow | Header, sections, cards, banners, footer |
| 1 | `rgba(0, 0, 0, 0.5) 0px 2px 4px 0px` | Carousel dots only |
| Overlay | `{colors.overlay-arrow}` translucent black disc | Carousel arrows over imagery |

Depth is not a design tool here. Separation comes from color (green footer, grey thumbs) and from the
images. Do not add card shadows.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.none}` | 0px | Banners, product thumbs, cards, newsletter button |
| `{rounded.field}` | 5px | Newsletter field wrapper (1px white border) |
| `{rounded.button-consent}` | 8px | Cookie-consent buttons |
| `{rounded.panel}` | 10px | Cookie-gated video placeholder panel |
| `{rounded.circle}` | 9999px (measured as 50%) | Carousel arrows, dots, header avatar |

### Imagery Geometry
- Promotional banners are rectangular raster art with their own baked-in CTA pills ("กดเลย") — those
  pills are pixels, not HTML; do not try to reproduce them as components.
- Product images are squares (279x279) on `{colors.surface-thumb}`.
- No clip-paths, skews or masks were measured.

## Components

### Navigation
**`nav`** — 74px white header. Logo left; six nav items each made of a 30px icon above an 18px
`{typography.nav-label}` label in `{colors.ink}`; hover turns the item `{colors.primary-bright}` (`#00a550`).
Right side: search, heart and bell icons, a 46px `{components.avatar}` disc in `{colors.primary-bright}`,
and two `{typography.auth-link}` text links (20px, 0.5px tracking). On mobile the header is 44px tall.

### Section header
**`section-title`** — h2 in `{colors.primary}`, `{typography.section-title}` 36px (28px on mobile) left;
**`link-more`** "ดูเพิ่มเติม" right-aligned on the same baseline row — `{colors.ink-link}` `#353b50`,
18px, underlined, hover `{colors.primary}`.

### Cards
**`promo-card`** — image (0px radius) followed by a `{typography.item-title}` title and a
`{typography.body}` date line ("24 ก.ย. - 23 ต.ค. 69"), both `{colors.ink}`. No border, no shadow, no padding box.

**`product-thumb`** — 279px square on `{colors.surface-thumb}` holding a product photo; below it a Thai
name in `{typography.item-title}` and an English name in `{typography.body}`.

### Carousels
**`carousel-arrow`** — 49px circle, `{colors.overlay-arrow}` fill with a white chevron, vertically centered
on the slide edge; disabled state `{colors.overlay-arrow-disabled}`.
**`carousel-dot`** — 12px white circle with the level-1 shadow; active dot `{colors.primary}` (one promo
carousel uses 10px dots with `{colors.promo-red}` active).

### Buttons
**`button-primary`** — the newsletter "เข้าร่วม" (join) button in the footer: `{colors.canvas}` fill,
`{colors.ink-button}` text, `{typography.button}` 18px with 0.45px tracking, padding `0px 16px`, 38px tall,
0px radius, 1px white left border. It sits flush inside the newsletter field. No hover change was measured.

**`button-consent`** — cookie banner / video-panel button: `{colors.consent-green}` fill, white
`{typography.button-consent}` 18px/700, padding `5px 26.5px`, 8px radius, 1px border in the same green,
40px tall (51px in the video panel). Hover inverts to `{colors.consent-green-hover-bg}` fill,
`{colors.consent-green}` text and a `#e5e5e5` border.

### Inputs & Forms
**`text-input`** — the footer newsletter field: a wrapper with `1px solid #ffffff` border and 5px radius,
40px tall, sitting on the green footer; the input inside is transparent with white `{typography.button}`
text, padding `0px 16px`, placeholder "ใส่อีเมล์ของคุณ". The white `button-primary` is attached on its right.

### Footer
**`footer`** — full-bleed `{colors.primary}` with `45px 0px` padding: 80px logo at left, then link columns.
Column titles are white `{typography.footer-heading}` (24px, 0.6px tracking); links are white
`{typography.footer-link}` 18px with 18px line-height, about 23px apart. The newsletter field sits in the last column.

### Signature Components
- **Icon-over-label nav** — every top-level nav item is an outline icon with a small Thai label below.
- **Green section titles + underlined "ดูเพิ่มเติม"** — the repeating section header.
- **Banner-led promo grid** — mixed-size raster banners with dates beneath.

## Design System Architecture

7-Eleven Thailand / CP ALL publishes **no public design system**, token package, component library or
brand guideline for the website. Searches for a DB Helvethaica foundry page, CP ALL brand guidelines,
a 7eleven.co.th design system on GitHub / npm / Figma, and a CP ALL corporate identity manual returned
only logo aggregators and font mirrors (listed in `SOURCES.json`). The one primary artifact opened is the
site's own font file, https://www.7eleven.co.th/static/fonts/DBHelvethaicaMonX.ttf, whose name table
identifies the typeface and its designer.

What is measurable is the de-facto system on the live site:

- **Token architecture:** none exposed — the page defines **zero** CSS custom properties on `:root`.
  Colors and sizes are hard-coded per component in CSS-in-JS. Class names are generated
  styled-components hashes with readable prefixes (`cookie-baner__AcceptAllBtn-sc-…`,
  `HideVideoPanel__BtnContainer-sc-…`, `highlight-sc-…`, `promotion-sc-…`, `all-member-sc-…`) mixed with
  hand-written BEM-ish classes (`section-header__title`, `section-header__more`, `site-menu-links-item`,
  `item-title`, `item-thumb`, `footer-colomn`, `footer-widget`).
- **Theming:** a single light theme. No dark mode, density mode or theme switch was observed.
- **Type & spacing:** one font family in two files; sizes 36 / 28 / 24 / 20 / 18px; line-heights equal to
  the size or 1.15x. Spacing values repeat 30px (section), 40px (gutter), 20px (columns), 16px (field padding).
- **Component model:** carousels are `slick-carousel` (`slick-arrow`, `slick-prev`, `slick-disabled`);
  the cookie banner close button uses Material-UI classes (`MuiButtonBase-root MuiIconButton-root`), so MUI
  is present for at least that widget. Components seen: header nav, section header, promo card, product
  tile, carousel, newsletter form, cookie banner, cookie-gated video panel, footer.
- **Accessibility:** no published rules. Measured: body text `#525252` on white; small 12px carousel dots;
  icon-only header buttons are 24x24px.
- **Delivery:** self-hosted fonts under `/static/fonts/` (woff2 / woff / ttf). No npm package or Figma kit is public.

## Do's and Don'ts

### Do
- Set all body copy in DBHelvethaicaMonX at 24px — the family's small x-height requires it.
- Use DBHelvethaicaMonXBd (weight 400) for section titles and card titles.
- Color section titles `{colors.primary}` `#00693e` and pair each with an underlined "ดูเพิ่มเติม" link.
- Keep banners, thumbs and cards at 0px radius; reserve circles for carousel controls and the avatar.
- Use `{colors.primary-bright}` `#00a550` for nav hover, `{colors.primary}` for link hover.
- Put product photos on the `#f2f2f2` square thumb.
- End every page with the full-bleed green footer with white text.

### Don't
- Don't use the logo's red/orange as a UI color — the UI is green; red stays in banner art.
- Don't add drop shadows to cards or banners; only carousel dots carry a shadow.
- Don't apply synthetic `font-weight: 700` to titles — swap to the Bd file instead.
- Don't round the newsletter button or images; only the field wrapper has 5px.
- Don't build HTML versions of the "กดเลย" pills inside banners — they are part of the artwork.
- Don't introduce pure black text; ink is `#525252`.

## Responsive Behavior

### Breakpoints
Only two widths were measured: 1280px (desktop) and 390px (mobile).

| Width | Measured changes |
|---|---|
| 1280px | 74px header with icon+label nav; section titles 36px; container 1300px max with 40px padding |
| 390px | Header 44px tall with a "หน้าแรก" item added to the nav list; section titles 28px / 32.2px; body stays 24px; newsletter button unchanged (38px, `0px 16px`) |

### Touch Targets
- Newsletter button 38px and field 40px tall.
- Carousel arrows 49px circles; dots 12px (10px in one carousel) — small for touch.
- Header icon buttons 24x24px.

### Collapsing Strategy
- Section titles step 36px → 28px; body and card text keep 24px.
- The measured card paragraph narrows from 382px (desktop) to 166px (mobile) and wraps from 2 to 4 lines (48px → 96px tall).

### Image Behavior
Banners are raster artwork scaled to the column width; product thumbs stay square.

## Iteration Guide

1. Start from a white `{colors.canvas}` page and a 1300px container with 40px side padding.
2. Add the 74px header with icon-over-label nav items (`{typography.nav-label}`), hover `{colors.primary-bright}`.
3. Build each section as `30px 0px` padding + a row of `{components.section-title}` and `{components.link-more}`.
4. Fill sections with 0px-radius banners and `promo-card` / `product-thumb` items; text in `{typography.item-title}` + `{typography.body}`.
5. Use `{components.carousel-arrow}` and `{components.carousel-dot}` for any slider.
6. Close with `{components.footer}` on `{colors.primary}` and the white newsletter field + `{components.button-primary}`.
7. Check that no text goes below 18px and body stays 24px in DBHelvethaicaMonX.
8. Keep everything flat — no shadows other than the carousel dots.
