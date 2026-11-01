---
version: alpha
name: Bangkok Bank
category: "Thai Brands"
description: "Bangkok Bank's personal-banking site sets a full-bleed lifestyle photo hero with an 89.6px BangkokBank-Medium headline over a white canvas, uses one electric blue #0064ff (hover #0048b7) for 7px-radius buttons and links, deep navy #002850 for the footer and #233a58 for the currency converter, grey #4e4e4e body ink, 16px-radius light-blue #4890ff tag pills, and the self-hosted BangkokBank / BangkokBank_Text families (files named BBLSans)."

colors:
  primary: "#0064ff"
  primary-hover: "#0048b7"
  tag-blue: "#4890ff"
  title-blue: "#002087"
  navy: "#002850"
  navy-panel: "#233a58"
  canvas: "#ffffff"
  band-blue: "#e6eef4"
  panel-grey: "#f5f5f5"
  control-grey: "#d6d6d6"
  ink: "#4e4e4e"
  ink-strong: "#000000"
  ink-heading: "#171717"
  ink-muted: "#78787d"
  ink-subtle: "#939399"
  on-primary: "#ffffff"
  hairline: "#0000001a"
  hairline-on-dark: "#ffffff4d"
  arrow-fill: "#ffffffb3"
  arrow-border: "#9e9e9eb3"

typography:
  display-hero:
    fontFamily: "BangkokBank-Medium, Tahoma, Helvetica, Arial, sans-serif"
    fontSize: 89.6px
    fontWeight: 400
    lineHeight: 103.04px
  display-hero-mobile:
    fontFamily: "BangkokBank-Medium, Tahoma, Helvetica, Arial, sans-serif"
    fontSize: 46.2px
    fontWeight: 400
    lineHeight: 53.13px
  section-title:
    fontFamily: "BangkokBank-Medium, Tahoma, Helvetica, Arial, sans-serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 46px
    letterSpacing: -0.2px
  section-title-mobile:
    fontFamily: "BangkokBank-Medium, Tahoma, Helvetica, Arial, sans-serif"
    fontSize: 22.4px
    fontWeight: 400
    lineHeight: 21.994px
    letterSpacing: 0.5px
  card-title:
    fontFamily: "BangkokBank-Medium, Tahoma, Helvetica, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 32px
  title-3:
    fontFamily: "BangkokBank-Medium, Tahoma, Helvetica, Arial, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 26px
  hero-lead:
    fontFamily: "BangkokBank-Regular, Tahoma, Helvetica, Arial, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 27.6px
  body:
    fontFamily: "BangkokBank-Regular, Tahoma, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
  body-mobile:
    fontFamily: "BangkokBank-Regular, Tahoma, Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 17.99px
  body-light:
    fontFamily: "BangkokBank-Light, Tahoma, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
  nav-main:
    fontFamily: "BangkokBank-Medium, Tahoma, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
  nav-utility:
    fontFamily: "BangkokBank-Medium, Helvetica, Arial, sans-serif"
    fontSize: 11.52px
    fontWeight: 400
  button:
    fontFamily: "BangkokBank-Regular, Tahoma, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 44px
    letterSpacing: 0.8px
  button-sm:
    fontFamily: "BangkokBank-Regular, Tahoma, Helvetica, Arial, sans-serif"
    fontSize: 14.4px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: 0.8px
  tag:
    fontFamily: "BangkokBank-Medium, Tahoma, Helvetica, Arial, sans-serif"
    fontSize: 14.4px
    fontWeight: 500
    lineHeight: 22px
  tab:
    fontFamily: "BangkokBank-Medium, Tahoma, Helvetica, Arial, sans-serif"
    fontSize: 14.4px
    fontWeight: 400
    lineHeight: 18px
  link-see-more:
    fontFamily: "BangkokBank-Medium, Tahoma, Helvetica, Arial, sans-serif"
    fontSize: 12.8px
    fontWeight: 400
    lineHeight: 17.92px
  rate-figure:
    fontFamily: "BangkokBank_Text-Medium, Tahoma, Helvetica, Arial, sans-serif"
    fontSize: 24px
    fontWeight: 400
  currency-code:
    fontFamily: "BangkokBank_Text-Medium, Tahoma, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
  footer-heading:
    fontFamily: "Muli-Bold, sans-serif"
    fontSize: 17.6px
    fontWeight: 400
  footer-link:
    fontFamily: "BangkokBank-Regular, Tahoma, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    letterSpacing: -0.2px
  footer-tab:
    fontFamily: "BangkokBank-Bold, Tahoma, Helvetica, Arial, sans-serif"
    fontSize: 12.8px
    fontWeight: 400
    lineHeight: 16.64px

rounded:
  converter: 5px
  md: 7px
  tag: 16px
  tab: 32px
  circle: 9999px

spacing:
  xxs: 3px
  xs: 4px
  sm: 7px
  md: 10px
  lg: 16px
  xl: 20px
  xxl: 24px
  section: 30px
  page-x: 84px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 20px
    height: 44px
    border: "1px solid #0064ff"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    border: "1px solid #0048b7"
  button-login:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.md}"
    padding: 6px 10px
    height: 32px
  button-login-hover:
    backgroundColor: "{colors.primary-hover}"
  nav-main:
    textColor: "{colors.on-primary}"
    typography: "{typography.nav-main}"
    padding: 0px 25px 12px 0px
  nav-main-hover:
    textColor: "{colors.primary}"
  nav-utility:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.nav-utility}"
    padding: 0px 84px
  tag:
    backgroundColor: "{colors.tag-blue}"
    textColor: "{colors.on-primary}"
    typography: "{typography.tag}"
    rounded: "{rounded.tag}"
    padding: 4px 7px
    height: 30px
  link-see-more:
    textColor: "{colors.primary}"
    typography: "{typography.link-see-more}"
  card-promo:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.card-title}"
    rounded: "{rounded.md}"
    border: "1px solid #0000001a"
  announcement:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 30px 80px 40px
    boxShadow: "rgba(221, 221, 221, 0.5) 0px 2px 8px 0px"
  announcement-band:
    backgroundColor: "{colors.band-blue}"
    padding: 30px 0px
  rates-panel:
    backgroundColor: "{colors.panel-grey}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.md}"
    padding: 24px
    border: "1px solid #0000001a"
  tab-active:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-heading}"
    typography: "{typography.tab}"
    rounded: "{rounded.tab}"
    padding: 7px 16px 5px
  converter-panel:
    backgroundColor: "{colors.navy-panel}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.converter}"
    padding: 24px
    border: "1px solid #ffffff4d"
  carousel-arrow:
    backgroundColor: "{colors.arrow-fill}"
    rounded: "{rounded.circle}"
    size: 66px
    border: "1px solid #9e9e9eb3"
    boxShadow: "rgba(0, 0, 0, 0.5) 0px 0px 1px 0px"
  footer:
    backgroundColor: "{colors.navy}"
    textColor: "{colors.on-primary}"
    typography: "{typography.footer-link}"
---

## Overview

bangkokbank.com/en/Personal is the personal-banking front door of Bangkok Bank. It opens with a
**full-bleed lifestyle photograph** — on the measured day, two young women reviewing a "B-WEALTH RMF
Series" fund on a laptop — overlaid with a huge white headline (`{typography.display-hero}`, 89.6px),
a 24px white lead line and one blue "Read more" button. The navigation floats on top of the photo:
a white Bangkok Bank lotus wordmark at left, "Personal Banking" and "Business Banking" menus, a
compact blue "Log on" button, and location and search icons. A thin white utility bar above carries
International Banking, Investor Relations, About Bangkok Bank, 華人事務, 日本語 and a TH language switch.

Below the hero, six photo/illustration tiles sit on the white canvas, then a pale-blue band with a
white **announcement** card, a horizontally scrolling **Promotions and Privileges** carousel of tall
cards (tag pill, 32px title, blue button, photograph below), and a **Rates and Bank News** row with a
news list, an exchange-rate table on grey, and a navy currency converter. A deep navy footer closes the page.

The character is **corporate-confident and calm**: very large, medium-weight headlines; a single
saturated blue `{colors.primary}` (`#0064ff`) for every action; navy for weight; generous white space;
lifestyle photography of Thai customers; and modest 7px corners.

**Key Characteristics:**
- Huge display type: 89.6px hero headline, 48px section titles, 32px card titles, all BangkokBank-Medium at weight 400.
- One action color: `#0064ff` buttons and links, darkening to `#0048b7` on hover.
- 7px radius on buttons and cards; 16px pills for tags; 32px for the active rate tab; 5px for converter panels.
- Navy family for depth: `#002850` footer, `#233a58` converter, `#002087` announcement title.
- Proprietary BangkokBank type family in Light / Regular / Medium / Bold plus a BangkokBank_Text cut for figures.
- Shadows are rare and soft; borders are `rgba(0,0,0,0.1)` hairlines.

## Colors

> **Source:** homepage extraction (`web/data/extracted/bangkok-bank.json`) and recorded probes in `SOURCES.json`. No official palette was found.

### Brand & Accent
- **Bangkok Blue** (`{colors.primary}` — `#0064ff`): all filled buttons ("Read more", "Log on", "ดูรายละเอียด"), "See more" links, nav hover, footer tab link.
- **Blue Hover** (`{colors.primary-hover}` — `#0048b7`): hover fill and border of every blue button.
- **Tag Blue** (`{colors.tag-blue}` — `#4890ff`): category pill on promo cards ("Promotion", "Debentures", "Travel card").
- **Title Blue** (`{colors.title-blue}` — `#002087`): the "Announcement" heading.

### Navy
- **Navy** (`{colors.navy}` — `#002850`): footer background.
- **Navy Panel** (`{colors.navy-panel}` — `#233a58`): currency-converter From / To panels.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): page background, cards, announcement card, utility bar.
- **Band Blue** (`{colors.band-blue}` — `#e6eef4`): full-width band behind the announcement.
- **Panel Grey** (`{colors.panel-grey}` — `#f5f5f5`): exchange-rate panel.
- **Control Grey** (`{colors.control-grey}` — `#d6d6d6`): the round "Convert" button between converter panels.
- **Hairline** (`{colors.hairline}` — `#0000001a`): 1px card and rate-panel borders.
- **Hairline on Dark** (`{colors.hairline-on-dark}` — `#ffffff4d`): converter-panel borders.
- **Arrow Fill / Border** (`{colors.arrow-fill}` `#ffffffb3`, `{colors.arrow-border}` `#9e9e9eb3`): carousel arrows.

### Text
- **Ink** (`{colors.ink}` — `#4e4e4e`): body default and announcement paragraph.
- **Ink Strong** (`{colors.ink-strong}` — `#000000`): card titles, "Promotions and Privileges", utility nav, rate figures.
- **Ink Heading** (`{colors.ink-heading}` — `#171717`): "Rates and Bank News" title and rate tabs.
- **Ink Muted** (`{colors.ink-muted}` — `#78787d`): news paragraphs and light links.
- **Ink Subtle** (`{colors.ink-subtle}` — `#939399`): "News and Activities" label.
- **On Primary** (`{colors.on-primary}` — `#ffffff`): text on blue, on photos, on navy.

### Semantic
No success / error / warning colors are shown on the page or documented in an opened official source. None are declared.

## Typography

### Font Family
The site serves its own families, declared in `/dist/css/bundle.min.css`:
- **BangkokBank-Regular / -Medium / -Light / -Bold** — the UI and display family. The @font-face rules point to files named
  `BBLSans-regular.woff` and `BBLSans-medium.woff`. Weight is chosen by family name; `font-weight` stays 400 almost everywhere.
- **BangkokBank_Text-Medium** — used for figures: exchange-rate numbers and currency codes.
- **Muli-Bold** — footer column headings only.
- The stylesheet also declares BangkokBank-Black, BangkokBank_Text-Regular / -Bold, italic cuts and Muli-Regular / -Light,
  which the homepage did not render.

### Hierarchy

| Token | Family | Size | Weight | Line Height | Letter Spacing | Use |
|---|---|---|---|---|---|---|
| `{typography.display-hero}` | BangkokBank-Medium | 89.6px | 400 | 103.04px | — | Hero h1 |
| `{typography.display-hero-mobile}` | BangkokBank-Medium | 46.2px | 400 | 53.13px | — | Hero h1 at 390px |
| `{typography.section-title}` | BangkokBank-Medium | 48px | 400 | 46px | -0.2px | Section h2 |
| `{typography.section-title-mobile}` | BangkokBank-Medium | 22.4px | 400 | 21.994px | 0.5px | Section h2 at 390px |
| `{typography.card-title}` | BangkokBank-Medium | 32px | 400 | 32px | — | Promo card h3 |
| `{typography.title-3}` | BangkokBank-Medium | 24px | 400 | 26px | — | "Announcement" |
| `{typography.hero-lead}` | BangkokBank-Regular | 24px | 400 | 27.6px | — | Hero sub-headline |
| `{typography.body}` | BangkokBank-Regular | 16px | 400 | 22px | — | Paragraphs |
| `{typography.body-mobile}` | BangkokBank-Regular | 14px | 400 | 17.99px | — | Paragraphs at 390px |
| `{typography.body-light}` | BangkokBank-Light | 16px | 400 | — | — | Light links |
| `{typography.nav-main}` | BangkokBank-Medium | 16px | 400 | 22px | — | Main nav |
| `{typography.nav-utility}` | BangkokBank-Medium | 11.52px | 400 | — | — | Utility bar |
| `{typography.button}` | BangkokBank-Regular | 16px | 400 | 44px | 0.8px | 44px buttons |
| `{typography.button-sm}` | BangkokBank-Regular | 14.4px | 400 | 18px | 0.8px | "Log on" |
| `{typography.tag}` | BangkokBank-Medium | 14.4px | 500 | 22px | — | Tag pills |
| `{typography.tab}` | BangkokBank-Medium | 14.4px | 400 | 18px | — | Rate tabs |
| `{typography.link-see-more}` | BangkokBank-Medium | 12.8px | 400 | 17.92px | — | "See more" |
| `{typography.rate-figure}` | BangkokBank_Text-Medium | 24px | 400 | — | — | Rate numbers |
| `{typography.currency-code}` | BangkokBank_Text-Medium | 16px | 400 | 22px | — | USD / GBP |
| `{typography.footer-heading}` | Muli-Bold | 17.6px | 400 | — | — | Footer column titles |
| `{typography.footer-link}` | BangkokBank-Regular | 16px | 400 | — | -0.2px | Footer links |
| `{typography.footer-tab}` | BangkokBank-Bold | 12.8px | 400 | 16.64px | — | Footer tab links |

### Principles
- **Weight lives in the family name.** Use BangkokBank-Medium for headings and BangkokBank-Regular for body, both at `font-weight: 400`.
- **Tight display leading.** 48px titles sit on 46px line-height; 32px card titles on 32px; the hero on 1.15.
- **Tracking:** buttons +0.8px; large titles and footer links -0.2px; the "Promotions and Privileges" title uses +0.5px (measured — two section titles disagree).
- **Fractional sizes.** Several sizes equal 0.8 / 0.9 / 1.1 / 5.6 × 16px (12.8, 14.4, 17.6, 89.6px) — keep them exact.
- **Figures in the Text cut.** Rates and currency codes use BangkokBank_Text-Medium.

### Note on Font Substitutes
The BangkokBank families are self-hosted brand files (served as BBLSans). No public substitute is documented. The site's own fallback
chain is `Tahoma, Helvetica, Arial, sans-serif`; use it when the brand files are unavailable and keep the measured sizes.

## Layout

### Spacing System
- **Tokens:** `{spacing.xxs}` 3px · `{spacing.xs}` 4px · `{spacing.sm}` 7px · `{spacing.md}` 10px · `{spacing.lg}` 16px ·
  `{spacing.xl}` 20px · `{spacing.xxl}` 24px · `{spacing.section}` 30px · `{spacing.page-x}` 84px.
- Most frequent paddings: 20px and 24px; panels use 24px; buttons `0px 20px`.
- Flex gap measured: 24px.

### Grid & Container
- Utility bar and content are inset by 84px each side, giving a 1112px content width at 1280px.
- Hero: full-bleed photo, text left-aligned in the content column; the tile row overlaps its bottom edge.
- Tile row: six equal image tiles across the content width.
- Promotions: a horizontally scrolling carousel of tall cards that bleeds past both edges, with a round arrow.
- Rates and Bank News: three equal columns (news list, rate panel, converter).

### Whitespace Philosophy
Generous. Section titles get large top margins, cards have big image areas, and the announcement card is padded
`30px 80px 40px`. White space plus very large type gives the page an institutional calm.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat, `1px solid #0000001a` | Promo cards, rate panel |
| 1 | `rgba(221, 221, 221, 0.5) 0px 2px 8px 0px` | Announcement card |
| Arrow | `rgba(0, 0, 0, 0.5) 0px 0px 1px 0px` | Carousel arrow |
| Fade | `rgb(255, 255, 255) 0px -110px 40px -50px inset` | Inset white fade measured on 7 elements |

Depth comes mostly from photography and from navy blocks, not from shadows.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.converter}` | 5px | Converter panels |
| `{rounded.md}` | 7px | Buttons, promo cards, rate panel |
| `{rounded.tag}` | 16px | Tag pills |
| `{rounded.tab}` | 32px | Active rate tab |
| `{rounded.circle}` | 9999px (measured 50%) | Carousel arrows, convert button, search icon, flags |

### Imagery
Lifestyle photography of Thai customers (cafés, travel, family) and flat vector illustrations on periwinkle blue in the tile row.
Card photos are full-bleed inside the card bottom; no clip-path or skew was measured.

## Components

### Buttons
**`button-primary`** — `{colors.primary}` fill and 1px border, white `{typography.button}` (16px, 0.8px tracking, 44px line-height),
padding `0px 20px`, 44px tall, 7px radius. Hover: `{colors.primary-hover}` fill and border. Used for "Read more", "ดูรายละเอียด",
"Available in Thai".

**`button-login`** — the header "Log on": same blue, `{typography.button-sm}` 14.4px, padding `6px 10px`, 32px tall, 120px wide, 7px radius;
hover `{colors.primary-hover}`.

### Navigation
- **`nav-utility`** — 21px white strip, `0px 84px` padding, 11.52px BangkokBank-Medium black links and a TH flag switch.
- **`nav-main`** — over the hero: white 16px BangkokBank-Medium items with chevrons, padding `0px 25px 12px 0px`, the active item underlined
  by a short white bar; hover turns blue `{colors.primary}`. Header block is 121px tall.

### Cards
**`card-promo`** — tall carousel card, white, 7px radius, `1px solid #0000001a`. Top: a `tag` pill, a 32px `{typography.card-title}` in black,
a `button-primary`; bottom half: a photograph.

**`tag`** — `{colors.tag-blue}` pill, white `{typography.tag}` 14.4px/500, padding `4px 7px`, 30px tall, 16px radius.

**`announcement`** — white card (900px) on the `{colors.band-blue}` band, level-1 shadow, padding `30px 80px 40px`, an "!" icon in a circle,
`{typography.title-3}` title in `{colors.title-blue}`, body in `{typography.body}` `{colors.ink}` with bold date runs and an underlined "Read more".

### Data widgets
**`rates-panel`** — `{colors.panel-grey}`, 7px radius, 24px padding, hairline border. Tabs Exchange / Rates / NAV in `{typography.tab}`;
the active tab is a white 32px-radius pill (`7px 16px 5px`). Table: flag + `{typography.currency-code}`, buy/sell in `{typography.rate-figure}` 24px.

**`converter-panel`** — `{colors.navy-panel}` From / To boxes, 5px radius, 24px padding, `1px solid #ffffff4d`, white labels and a currency dropdown;
a 66px `{colors.control-grey}` round Convert button with arrows sits between them.

### Links
**`link-see-more`** — "See more ›" in `{colors.primary}` `{typography.link-see-more}` 12.8px, right-aligned to section titles.

### Carousel
**`carousel-arrow`** — 66px white-translucent circle, `1px solid #9e9e9eb3`, hairline shadow, blue chevron.

### Footer
**`footer`** — `{colors.navy}`; tab links in `{typography.footer-tab}` blue; column headings in Muli-Bold 17.6px white (`20px 0px` padding);
links in `{typography.footer-link}` white with -0.2px tracking.

## Design System Architecture

Bangkok Bank publishes **no public design system**, token package or web brand guideline. Four searches (listed in `SOURCES.json`) found
only logo aggregators; one possibly relevant official PDF could not be opened and is not used. The only first-party artifact opened is the
site's stylesheet [bundle.min.css](https://www.bangkokbank.com/dist/css/bundle.min.css), which maps the `BangkokBank-*` font families to `BBLSans-*` files.

The de-facto system measured on the live site:
- **Token architecture:** no CSS custom properties on `:root` (0 root variables). Colors are hard-coded in a compiled bundle (`/dist/css/bundle.min.css`).
  Utility/helper classes carry the system instead: `btn btn-primary`, `btn-login`, `title-1`, `title-3`, `text-blue`, `text-default`,
  `bgd-blue`, `pad-top`, `pad-bot`, `mar-bot-10`, `full-width`, `cursor-point`, `inner-container`, `item_meta`. Naming mixes Bootstrap-style
  (`btn-primary`) with in-house abbreviations (`bgd-`, `pad-`, `mar-`).
- **Theming:** a single light theme; no dark or high-contrast mode was observed.
- **Type & spacing:** measured sizes include 11.52, 12.8, 14.4, 16, 17.6, 24, 32, 48 and 89.6px (equal to 0.72, 0.8, 0.9, 1, 1.1, 1.5, 2, 3, 5.6 × 16px). Spacing repeats 20 / 24 / 30 / 84px.
- **Component model:** carousels use `slick-carousel` (`slick-prev`, `slick-next`, `slick-disabled`); icons come from an `icomoon` icon font.
  Components seen: utility bar, mega-nav header, hero, image tiles, announcement, promo carousel card, tag pill, rate panel with tabs,
  currency converter, news list, footer with tabs.
- **Accessibility:** no published rules. Measured: 44px main buttons; 32px Log on; 12.8px "See more" links are the smallest interactive text.
- **Delivery:** self-hosted fonts and a single compiled CSS bundle; no public npm package or Figma kit.

## Do's and Don'ts

### Do
- Use BangkokBank-Medium at weight 400 for every heading, at the measured large sizes (89.6 / 48 / 32 / 24px).
- Use `{colors.primary}` `#0064ff` for all buttons and inline action links; hover to `#0048b7`.
- Keep buttons at 7px radius with `0px 20px` padding and 0.8px letter-spacing.
- Use navy (`#002850`, `#233a58`) for heavy blocks — footer and data widgets.
- Pair each promo with a `#4890ff` tag pill and a photograph.
- Set rate figures in BangkokBank_Text-Medium.

### Don't
- Don't add bold weights via `font-weight`; switch families instead.
- Don't use more than one blue for actions; tag blue is for labels only.
- Don't round cards beyond 7px or buttons into full pills.
- Don't put heavy shadows on cards; use the 0.1-alpha hairline.
- Don't set body text in pure black; body ink is `#4e4e4e`.

## Responsive Behavior

### Breakpoints
Measured at 1280px and 390px.

| Width | Measured changes |
|---|---|
| 1280px | 121px header (utility bar + main nav); hero h1 89.6px; section titles 48px; body 16px/22px |
| 390px | Header 56px; hero h1 46.2px / 53.13px; section titles 22.4px / 21.994px; body 14px / 17.99px; "Read more" button keeps 44px height and `0px 20px` padding at 14px |

### Touch Targets
- Main buttons 44px tall at both widths; carousel arrows 66px; Log on 32px.

### Collapsing Strategy
- The mobile header was not measured.
- Type scales down roughly by half for display sizes; body drops from 16px to 14px.

### Image Behavior
The hero photo is full-bleed at all widths; promo cards keep image-below-text composition in the carousel.

## Iteration Guide

1. Start with a full-bleed photo hero, white `{typography.display-hero}` headline, `{typography.hero-lead}` and one `{components.button-primary}`.
2. Float `{components.nav-main}` and `{components.button-login}` over the hero; put `{components.nav-utility}` above.
3. Build sections inside an 84px side inset with `{typography.section-title}` and a right-aligned `{components.link-see-more}`.
4. Use `{components.card-promo}` with a `{components.tag}` for offers.
5. Put data in `{components.rates-panel}` and `{components.converter-panel}`.
6. Close with the navy `{components.footer}`.
7. Keep every radius on the 5 / 7 / 16 / 32px scale and every action blue `#0064ff`.
