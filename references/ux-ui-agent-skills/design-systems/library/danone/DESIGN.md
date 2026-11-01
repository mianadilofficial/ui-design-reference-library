---
version: alpha
name: Danone
category: "Food & Beverage"
description: "Danone's corporate site (danone.com): a saturated #005eb8 blue hero over white pages, DanoneOne Regular 16px body, DanoneOne CondensedBold uppercase headlines (28px hero, 52px and 120px statistics), pale blue #ccdff1 and #cceefb stat cards at 12px radius, and 100px-radius outlined buttons with a 1px black border."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#005eb8"
  on-primary: "#ffffff"
  surface-light: "#e6ebef"
  ink-muted: "#00000099"
  ink-inverse-muted: "#ffffffb3"
  ink-green: "#54ad18"
  ink-violet: "#4e3ff3"
  hairline: "#0000001a"
  card-bg: "#ccdff1"
  card-bg-cyan: "#cceefb"
  card-text: "#0068cc"
  card-text-bright: "#0085eb"
typography:
  display:
    fontFamily: "\"DanoneOne CondensedBold\", sans-serif"
    fontSize: 28px
    fontWeight: 400
    lineHeight: 28px
    textTransform: uppercase
  stat:
    fontFamily: "\"DanoneOne CondensedBold\", sans-serif"
    fontSize: 52px
    fontWeight: 400
    lineHeight: 52px
    textTransform: uppercase
  stat-large:
    fontFamily: "\"DanoneOne CondensedBold\", sans-serif"
    fontSize: 120px
    fontWeight: 400
    lineHeight: 120px
    textTransform: uppercase
  subheading:
    fontFamily: "\"DanoneOne Bold\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
  body:
    fontFamily: "\"DanoneOne Regular\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18.4px
  button:
    fontFamily: "\"DanoneOne Bold\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20px
  nav:
    fontFamily: "\"DanoneOne Regular\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16.8px
rounded:
  xs: 1px
  sm: 8px
  md: 12px
  lg: 44px
  xl: 100px
  pill: 9999px
spacing:
  s1: 3px
  s2: 4px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 18px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-outlined:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    border: "1px solid #000000"
    padding: 4px 32px
    height: 56px
  nav:
    textColor: "{colors.on-primary}"
  nav-link:
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
    padding: 10px
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.card-text}"
    typography: "{typography.stat}"
    rounded: "{rounded.md}"
    padding: 20px 40px 48px
    height: 274px
    width: 540px
  footer:
    backgroundColor: "{colors.surface-light}"
    textColor: "{colors.ink-inverse-muted}"
---

## Overview

Danone's corporate site at https://www.danone.com/ describes the company in its meta description as "a world leading food and beverage company, present in over 120 countries and with the essential business lines such as Waters and Early Life Nutrition." The document title is "Danone: World food company | Danone Group". The page is a long corporate scroll (9,750px at 1280px wide) that alternates a full-bleed brand-blue hero with white editorial sections and pale-blue statistic cards.

The hero is solid #005eb8, the largest background by area (weight 1188). Over it sit a small white dot and the label "Our mission", the headline "BRINGING HEALTH THROUGH FOOD TO AS MANY PEOPLE AS POSSIBLE" in white condensed capitals, a white rounded search field ("Search by subject or article") with a magnifier, a pause control, "Scroll to discover", and a framed video teaser reading "MEET DANONE IN 3 MINUTES" with a white round play button. Below, the section "Newsroom" carries a heading "Renew Danone in action" over a carousel of press-release cards (date, headline, a gray "Corporate news" tag, round arrow controls). The "Our journey" section pairs the heading "More than 100 years of supporting health" with a paragraph beginning "From our first yogurts in pharmacies, we have certainly come a long way", an outlined "Discover Group" button, and a stack of statistic cards: "89 % OF PRODUCTS SOLD belong to healthy categories", "120 + COUNTRIES where our products are sold" and "90,000 DANONERS AROUND THE WORLD".

Each section opens with a small blue dot and a bold label ("Our mission", "Newsroom", "Our journey"). The tone is plain corporate English with short headlines.

Capture note: the capture contains a market-detection dialog ("We've detected your market and language as: Thailand - English", with a blue "Go to Danone Global (EN)" button, a "Remember my choice" checkbox and a close button) and a gray translucent scrim over part of the page. Per the project rules these are not documented as brand UI or tokens; the extractor's primary-button role was that dialog button, so SOURCES.json records a null override for it. The #00000080 area (weight 1028) belongs to that overlay and is not tokenized.

## Colors

| Token | Value | Evidence |
|---|---|---|
| `canvas` | #ffffff | Body background |
| `ink` | #000000 | 3,116 characters of text |
| `primary` | #005eb8 | Largest background by area (hero, weight 1188); also the `--colors-button-active` variable |
| `on-primary` | #ffffff | White text on the hero (184 characters) |
| `surface-light` | #e6ebef | Footer background (weight 874) |
| `ink-muted` | #00000099 | Black at 60%, 180 characters (dates, meta text in the capture) |
| `ink-inverse-muted` | #ffffffb3 | White at 70%, 13 characters; footer text color |
| `ink-green` | #54ad18 | Text on 6 characters; element not recorded |
| `ink-violet` | #4e3ff3 | Text color of the "90,000" statistic |
| `hairline` | #0000001a | Border color on 3 elements |
| `card-bg` | #ccdff1 | Background of the "89 %" statistic card |
| `card-bg-cyan` | #cceefb | Background of the "120 +" and "90,000" cards (weight 411) |
| `card-text` | #0068cc | Number color on the first card |
| `card-text-bright` | #0085eb | Number color on the second card |

Each statistic card pairs a tinted background with a saturated number in the same hue family: blue on #ccdff1, brighter blue on #cceefb, violet on #cceefb. Blue is the one constant: it is the hero, the section dots and the numbers. Other measured border colors are #000000 (2 elements), #00000026 and #cccccc. The site also publishes a larger token palette as root variables (for example `--color-primary-500: #2b3c90`, `--color-feedback-success-base: #1e824c`, `--color-feedback-error-base: #e00000`, `--color-favourite-500: #ffd200`, `--color-neutral-900: #4e4e4e`); those were not measured on visible elements and are not tokens here. The browser default link color #0000ee was recorded on a "Play video" link and is not a brand color.

## Typography

Three DanoneOne faces carry the page; every weight is declared as 400 because each style is its own font file. By characters: DanoneOne Regular 2,019, DanoneOne Bold 1,372, DanoneOne CondensedBold 121. The CSS also declares DanoneOne Italic, Quicksand Bold and MrsLollipop Regular, and an icon font, Base-Icons.

| Token | Family | Size / line-height | Measured use |
|---|---|---|---|
| `display` | CondensedBold | 28px / 28px, uppercase | Hero headline (620px by 56px) |
| `stat` | CondensedBold | 52px / 52px, uppercase | "89 %" and "120 +" numbers and labels |
| `stat-large` | CondensedBold | 120px / 120px, uppercase | "90,000" |
| `subheading` | Bold | 20px / 24px | Press-release headlines (h3, 347px wide) |
| `body` | Regular | 16px / 18.4px | Paragraphs (540px wide) |
| `button` | Bold | 16px / 20px | "Discover Group" |
| `nav` | Regular | 14px / 16.8px | Header links |

Sizes by character count: 16px (1,291), 20px (933), 14px (484), 12px (387), 52px (140), 32px (114), 28px (108), 23px (43), 120px (11). The 32px group (114 characters) and the 23px group (43 characters) have no recorded element, so they have no token. The pairing is consistent: condensed capitals for the mission statement and numbers, bold mixed case for section headings, regular for reading text. The fonts are proprietary; if unavailable, use a condensed bold sans-serif for display and a humanist sans for text, noting no substitute was measured.

## Layout

The header is 4rem tall (`--header-height: 4rem`); in the capture it shows the round Danone logo at left and a "Menu" control at right once the page scrolls, and the desktop nav role (white on the blue hero) lists Group, Brands, Innovation, Newsroom, Investors and Careers in a 64px-tall, 544px-wide block with links padded 10px (59px by 37px for "Group"). Content blocks start at the same left margin; text columns are narrow (540px for body copy) and the statistic cards are 540px wide and 274px tall, stacked in a right-hand column beside the "Our journey" text.

Spacing from the published scale: `--spacing-200: 16px`, `--spacing-250: 20px`, `--spacing-300: 24px`, `--spacing-600: 48px`, `--spacing-1000: 80px`. Measured gaps: 8px (37 elements), 40px (21), 12px (16), 4px (10), 18px (4), 16px (3), 24px (2). Paddings: 4px (17), 10px (12), 16px (10), 12px (7), 104px (6), 3px (6), 40px (5), 8px (4), 32px (4), 20px (4). The 104px padding is the largest recurring section inset. The page is spacious around headlines and tight inside cards (20px 40px 48px).

## Elevation & Depth

Depth is mostly flat. Two box shadows were measured, each on one element whose identity was not recorded: `rgba(0, 0, 0, 0.12) 0px 8px 16px 0px` and `rgba(0, 0, 0, 0.1) 0px 2px 10px 0px`. The shipped CSS lists a set of `rgba(0,0,0,.12)` shadows at 2px, 4px, 8px, 16px and 24px offsets. Separation otherwise comes from tinted fills (#ccdff1, #cceefb, #e6ebef) and photography (circular-cropped lifestyle images in the news carousel). The close-button hover was measured on the dialog and is not a site component.

## Shapes

Radius is clearly two-tier. Measured: 12px (37 elements: cards and image frames), 100px (19: pills and outlined buttons), 44px (6), 50% (3, round controls), 8px (1), 1px (1), plus single asymmetric values (12px 16px 16px 12px, 12px 12px 0 0, 0 0 12px 12px, 0 0 8px 8px). Cards and photographs use 12px; buttons, tags and the language pill use 100px; the news carousel's featured image is a full circle in the capture. The search field is a white rounded rectangle.

## Components

**Outlined button.** "Discover Group": transparent over white, black DanoneOne Bold 16px/20px text, `1px solid #000000` border, 100px radius, padding 4px 32px, 56px tall and 180px wide.

**Statistic card.** 540px by 274px, 12px radius, padding 20px 40px 48px, a tinted background, a large condensed uppercase number with a smaller unit sign ("%", "+"), a condensed uppercase label and a sentence-case caption in black.

**News card.** Photograph with rounded corners, a muted date line, a bold headline and a gray "Corporate news" tag (pill).

**Navigation.** White DanoneOne Regular 14px/16.8px links over the blue hero with 10px padding; menu control "Menu" with a two-line icon.

**Search field.** White, rounded, placeholder "Search by subject or article", magnifier button at the right.

**Section label.** A small blue dot followed by a bold 14-16px label.

**Footer.** 651px tall, #e6ebef background; groups "Follow us on:" (Linkedin, Instagram, Twitter, youtube) and "About us" with links to Group, Brands, Sustainability, Newsroom, Investors, Join us and Contact, plus legal links (Privacy statement, Cookie statement, Legal notice, Accessibility Statement).

## Design System Architecture

No public design-system site or brand-guideline link was found: the home page (opened via WebFetch and curl) links only to Newsroom, Press releases and brand pages (/brands.html and individual brand pages), and its media comes from a digital asset host that the page does not offer as a download. The system is visible in the shipped code at https://www.danone.com/.

The site is built on Adobe Experience Manager: assets load from /etc.clientlibs/ paths including `corp-global-danone-renew/clientlibs/clientlib-base`, and components use `cmp-` class names (for example `cmp-videoteaser__video`). The CSS publishes roughly 340 root custom properties as semantic tokens: color scales (`--color-primary-300` #717cb5 to `--color-primary-700` #1f2b66, `--color-neutral-100` #eaeaea to `--color-neutral-900` #4e4e4e), surfaces (`--color-surface-primary-subdued: #eaecf4`), text roles (`--color-text-body-base: #000`, `--color-text-body-inverse: #fff`, `--color-text-heading-hover: #4e4e4e`), feedback colors, spacing (`--spacing-200` to `--spacing-1000`, `--spacing-rem-*`), type (`--fonts-title: "DanoneOne Bold",sans-serif`, `--font-size-xs: 0.75rem`, `--font-size-specialExtraLarge: 7.5rem`, `--line-height-body: 1.6875rem`) and `--header-height: 4rem`. Search is provided by Algolia (clientlibs and `--aa-*` variables).

## Do's and Don'ts

**Do**
- Use #005eb8 for the hero field and blue accents, with white text on it.
- Set missions and statistics in DanoneOne CondensedBold capitals; section headings in DanoneOne Bold; body in DanoneOne Regular 16px.
- Round cards and images at 12px and buttons at 100px.
- Tint statistic cards (#ccdff1, #cceefb) and color the number in a saturated hue of the same family.
- Open sections with a blue dot and a small bold label.

**Don't**
- Don't document the market-selection dialog, its button or the gray scrim as brand UI.
- Don't use the browser default link color #0000ee.
- Don't add heavy shadows; only two faint shadows were measured, each on a single element.
- Don't rely on font-weight to build bold: each DanoneOne style is its own file declared at weight 400.

## Responsive Behavior

The extractor re-loaded the page at 390px. Measured: the hero headline is DanoneOne CondensedBold 20px/20px, 350px wide and 40px tall (28px, 620px by 56px on desktop); body text stays 16px/18.4px and measures 350px by 110px (540px by 74px on desktop); the dialog button is 303px wide. The nav role is null at that width, which means no navigation block was recorded; whether a menu control replaces it is not measured. Mobile character counts by size: 16px (1,958), 12px (690), 14px (368), 24px (138), 18px (114), 20px (108). Breakpoints, media queries and the card layout at this width are not measured.

## Iteration Guide

1. Start with #005eb8 hero, white canvas, black text and the three DanoneOne faces.
2. Build the hero (blue field, dot label, 28px condensed headline, search field, video teaser) and the section pattern (dot label, bold heading, paragraph, outlined button).
3. Build statistic cards at 540px by 274px with 12px radius and 20px 40px 48px padding.
4. Close any market dialog before re-measuring; re-run `node web/scripts/extract-tokens.mjs --batch=web/data/batches/phase2.json --only=danone --force --no-motion` and `node web/scripts/generate-frontmatter.mjs --slug=danone`.
5. Run `node web/scripts/verify-designs.mjs --slug=danone` after any token edit.
