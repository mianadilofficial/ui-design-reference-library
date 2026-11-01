---
version: alpha
name: ConocoPhillips
category: "Energy & Climate"
description: "ConocoPhillips (conocophillips.com), the global oil and gas exploration and production company. White #ffffff canvas with near-black #111111 type, electric blue #0b2cd9 actions and highlights, red #b00024 hover states, Sora 300 headlines at 64px, Public Sans text and square 0px buttons."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  ink-strong: "#111111"
  primary: "#0b2cd9"
  on-primary: "#ffffff"
  blue-bright: "#158eff"
  blue-indigo: "#1f0aa5"
  blue-deep: "#080072"
  red-hover: "#b00024"
  red-bright: "#e40015"
  teal: "#077065"
  teal-bright: "#21af90"
  ink-muted: "#6e6e6e"
  surface-gray: "#f5f5f5"
  footer-border: "#d2d2d2"
typography:
  display:
    fontFamily: Sora, "Noto Sans SC", sans-serif
    fontSize: 64px
    fontWeight: 300
    lineHeight: 83px
    letterSpacing: "-1.92px"
  display-mobile:
    fontFamily: Sora, "Noto Sans SC", sans-serif
    fontSize: 36px
    fontWeight: 300
    lineHeight: 46.6875px
    letterSpacing: "-1.08px"
  heading:
    fontFamily: Sora, "Noto Sans SC", sans-serif
    fontSize: 18px
    fontWeight: 700
    lineHeight: 13.86px
    letterSpacing: 1px
    textTransform: uppercase
  subheading:
    fontFamily: Sora, "Noto Sans SC", sans-serif
    fontSize: 26px
    fontWeight: 600
    lineHeight: 32px
  body:
    fontFamily: "\"Public Sans\", \"Noto Sans SC\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: Sora, "Noto Sans SC", sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 21px
  nav:
    fontFamily: Sora, "Noto Sans SC", sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 14.95px
rounded:
  xs: 4px
  none: 0px
spacing:
  s1: 4px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 11px
  s7: 12px
  s8: 14px
  s9: 15px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 18px 20px
    height: 57px
  button-neutral:
    backgroundColor: "{colors.surface-gray}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 18px 20px
    height: 57px
  link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 16px 0px
  nav-link-hover:
    backgroundColor: "{colors.red-hover}"
    textColor: "{colors.canvas}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    borderColor: "{colors.footer-border}"
---

## Overview

ConocoPhillips describes itself on its home page as "a leading global exploration and production company ... uniquely equipped to deliver reliable, responsibly produced oil and gas", and the page title is "Oil & Natural Gas, Exploration & Production ConocoPhillips". The page text says "We explore for, produce, transport and market crude oil, bitumen, natural gas, liquefied natural gas and natural gas liquids", with operations in Alaska, Asia Pacific, Canada, Europe, Middle East & North Africa and the Lower 48, a "spiritnow" editorial channel, owner relations and supplier relations, and a gated "Corporate logos & standards" link that opens a brand center.

The page is a corporate portal with an editorial front. A thin gray utility bar carries "Where we operate", "Reports & resources", "News & media", "spiritnow stories", "U.S. Owner Relations" and "Supplier Relations". Under it a white header holds the ConocoPhillips wordmark with its red swoosh, a five-item menu (About us, What we do, Sustainability, Careers, Investors, most with dropdown chevrons), a "Choose location" globe link and a search icon. The hero sets a three-line headline, "Energy for tomorrow, and today.", in Sora Light with the words "Energy" and "today" in bold electric blue, next to a landscape video of a drilling rig on open pasture (with a "Play Motion" control), over a composition of blue and indigo shapes. Two square buttons follow ("What we do" in light gray, "About us" in blue), and an investor card shows the NYSE ticker "COP" with a live quote and a "Learn More" link. The quote values change with the market and are not part of the design.

Below the hero is "Latest news & updates" with a gray "News releases" button and a blue "All spiritnow stories" button, then a card grid mixing photography-led feature stories (labelled "SPIRITNOW | FEATURE STORIES", with a blue square bullet) and bordered news-release cards (labelled "NEWS RELEASE" with a red square bullet). Story titles use a bold blue lead-in followed by a slash and a regular-weight continuation ("Operational excellence / Safety and precision guide maintenance…"). The measured page is 1280px wide and 6813px tall.

## Colors

The stylesheet (https://www.conocophillips.com/css/site.css) defines colour "themes" of four steps each, named `--theme_1` to `--theme_4`:

- **Blue theme:** `#158eff`, `#0b2cd9`, `#1f0aa5`, `#080072`.
- **Red theme (also the default and light themes):** `#e40015`, `#b00024`, `#8c0021`, `#60001d`.
- **Teal theme:** `#21af90`, `#077065`, `#004f5c`, `#003e44`.
- **Gray theme:** `#d2d2d2`, `#6e6e6e`, `#515151`, `#111`.

On the home page:

- **Primary — `#0b2cd9`** (blue step 2). The largest chromatic background area (1574) and the fill of the "About us" and "All spiritnow stories" buttons; it also colors the bold lead words in the headline and story titles (70 weighted characters of text). The bright `#158eff`, the indigo `#1f0aa5` and the deep `#080072` are the other steps of the same theme, and the capture shows a bright-blue wave and a deep-indigo band under the hero.
- **Red hover — `#b00024`** (red step 2). A text color (597 weighted characters) and the hover color throughout: measured hover turns utility-link text to `#b00024` and fills the main-menu items `rgb(176, 0, 36)` with white text. `#e40015` (red step 1) is measured as a border color on 2 elements, and the capture shows red square bullets before the "NEWS RELEASE" labels; steps 3 and 4 (`#8c0021`, `#60001d`) exist in the stylesheet and belong to a back-to-top control, which is not documented here.
- **Ink — `#000000`** (1208 weighted characters) for body text, and **`#111111`** (808; background area 328 and 12 borders) for headings, links and nav text. White text totals 1207 weighted characters.
- **Muted ink — `#6e6e6e`** for the "COP" ticker label and small captions; **surface gray — `#f5f5f5`** (area 361) for the neutral buttons; **`#d2d2d2`** for the footer border (the gray theme's first step; measured on 3 borders).
- **Teal — `#077065`, `#21af90`** are declared theme colors for other sections; they are not measured in a role on the first screens.
- A green `#008000` colors the positive change in the stock quote (12 characters).

## Typography

Two Google Fonts: **Sora** (weights 300 and 600 are loaded and requested) for display, navigation, buttons and labels, and **Public Sans** (300, 400, 700, with italics) for running text. Both carry `"Noto Sans SC"` as the next fallback in the measured stacks. Measured characters: Sora 2649, Public Sans 1339. Weights measured are 400 (2433 weighted characters), 600 (1105), 700 (295) and 300 (155).

Roles:

- **Display** — Sora 64px / 300, line-height 83px, letter-spacing -1.92px (the hero headline; the blue words are set heavier). On a 390px viewport it is 36px / 300 with line-height 46.6875px and letter-spacing -1.08px.
- **Section title** — a 40px size (141 weighted characters, 53 of them with -1.44px letter-spacing).
- **Subheading** — Sora 26px / 600, line-height 32px (card titles).
- **Ticker label** — Sora 18px / 700, uppercase, 1px letter-spacing (the "COP" label).
- **Body** — Public Sans 16px / 400, line-height 24px.
- **Button** — Sora 14px / 600, line-height 21px; "Learn More" links are 14px / 600 with capitalized text.
- **Navigation** — Sora 13px / 400, line-height 14.95px; an 11px size with 0.5px letter-spacing was measured on 89 weighted characters, and the capture shows small uppercase meta labels.

The most-used sizes are 16px (1184 weighted characters), 14px (1148), 26px (486), 18px (400) and 40px (141).

## Layout

The header measures 167px tall (`--header-height: 167px`, including the utility bar). A `--gutter: 50px` and a `--fs-row-width: calc(100vw - 2.5rem)` are declared, with a three-column default (`--fs-column-count: 3`). The hero is a two-column split: text and buttons on the left, a video panel bleeding to the right edge, with the blue-shape composition and the investor card below. The news section is a three-column grid of one large feature story and two narrower columns of stacked cards.

Measured gaps are 8px (42), 10px (30), 20px (25), 15px (16), 4px (12) and 6px (10); paddings are 20px (48), 14px (43), 6px (25), 30px (11), 15px (11) and 10px (11), with 80px used 5 times. The footer is 571px tall and carries a 1px `#d2d2d2` border. Density is moderate and editorial: large light headlines, small uppercase labels, and compact metadata lines.

## Elevation & Depth

Almost flat. The extractor recorded one box-shadow, a stacked multi-layer shadow in `rgb(157, 166, 170)`, and the stylesheet's declared shadows are `0 0 3px 1px blue` (focus), `0px 2px 10px -3px #999`, `0px 0px 12px 2px #c7c5c7` and `-3px -3px 5px -2px #c7c5c7`. Cards are separated by thin borders rather than shadows (`#d2d2d2` is measured on 3 borders), and the hero gets depth from the layered blue shapes over the video.

## Shapes

Right angles dominate. Buttons, the nav, cards and the footer all measure a 0px radius; the only measured radius is 4px (1 occurrence). The stylesheet declares small radii (2px, 3px, 4px, 6px and a few larger ones for specific widgets), but the home page's structure is square and the hero uses angular and curved vector shapes. Status and category markers are small square bullets.

## Components

- **Primary button (`button-primary`).** "About us", "All spiritnow stories": `#0b2cd9` fill, white Sora 14px / 600 label, 0px radius, 18px 20px padding, 57px tall (119px and 198px wide), followed by a small chevron.
- **Neutral button (`button-neutral`).** "What we do", "News releases": `#f5f5f5` fill, `#111111` label, same padding and height; its measured hover turns the label white.
- **White button.** "Learn more" buttons in other sections: white fill, `#111111` text, 57px tall and 134px wide.
- **Navigation (`nav`, `nav-link`).** Sora 13px / 400, `#111111`, 16px vertical padding; hover fills `#b00024` with white text (`nav-link-hover`). Utility links hover to `#b00024` text.
- **Text link (`link`).** "Learn More" with a chevron, Sora 14px / 600, `#111111`.
- **Story and news cards.** Photograph on top for feature stories, 1px-bordered white cards for news releases; each has a category line (blue square for spiritnow, red square for News Release), a title, a date in small bold caps ("SEPTEMBER 24, 2026") and sometimes a one-line summary. A gray "HIGHLIGHT" tab marks a highlighted card.
- **Investor card.** White card with a left accent border, the "COP" label, a large quote and a "Learn More" link; its numbers are live.
- **Video control.** A "Play Motion" / "Pause Motion" control over the hero video.
- **Footer (`footer`).** White with a 1px `#d2d2d2` border, "ConocoPhillips" and social links (Instagram, LinkedIn, X).

## Design System Architecture

The site publishes no public design-system documentation. Its "Media resources" page (https://www.conocophillips.com/news-media/media-resources/) links to "Corporate logos & standards" at https://www.copbrandcenter.com/request-access, a "ConocoPhillips Brand Center" that is gated behind an access request (the page read shows only its title), so the brand standards themselves are not publicly documented. The de-facto system is the hand-written stylesheet https://www.conocophillips.com/css/site.css (about 112 KB, with `@media print` blocks in the hundreds of rules), organised around underscore-named component classes such as `.spirit_landing_menu` and `.header_search_open`, and around themeable classes (`.theme_blue`, `.theme_red`, `.theme_teal`, `.theme_gray`, plus `body.theme-blue`) that set four colour variables (`--theme_1` to `--theme_4`) and background-pattern images (`--theme_pattern_1_*`, `--theme_pattern_2_*`). Fonts come from Google Fonts (`family=Public+Sans:...&family=Sora:wght@300;600`).

## Do's and Don'ts

Do:
- Keep the page white with near-black text and use blue `#0b2cd9` for buttons and the emphasised words in headlines.
- Use red `#b00024` for hover and interactive emphasis, and red `#e40015` for news-release markers.
- Set headlines in Sora Light (300) at 64px with tight negative tracking and emphasise key words in a heavier blue.
- Keep buttons square, 57px tall, with 18px 20px padding and a trailing chevron.
- Use themed four-step palettes (blue, red, teal, gray) rather than ad-hoc tints.

Don't:
- Don't round buttons or cards: the measured radius is 0px.
- Don't put drop shadows on cards; separate them with 1px `#d2d2d2` borders.
- Don't treat the live stock quote, the back-to-top control or the video control as brand components.
- Don't use red for large fills on the home page; it appears as hover, labels and markers.
- Don't use heavy weights for headlines: the display weight is 300.

## Responsive Behavior

Measured at 390px wide: the headline word is 36px / 300 (line-height 46.6875px, letter-spacing -1.08px); the body paragraph stays 16px / 400 with line-height 24px in a 344px-wide, 96px-tall block; the "About us" button keeps its `#0b2cd9` fill, 14px / 600 label and 119px by 57px size; the header text begins with "SKIP MAIN NAVIGATION" and "ConocoPhillips".

Declared in `site.css`: `@media(min-width:980px)` (465 rules), `(min-width:740px)` (334), `(min-width:1220px)` (218), `(min-width:500px)` (65), `(min-width:1402px)` (35), `(hover: hover)` (265), `(prefers-reduced-motion: reduce)` (181) and a large set of print rules. How the menu and grids reflow between these widths was not measured. Dark mode was not measured.

## Iteration Guide

1. Set a white page, `#000000` body text and `#111111` headings and links; use `#0b2cd9` for actions.
2. Build the hero headline in Sora 300 at 64px / 83px with -1.92px tracking, setting the emphasised words in bold blue.
3. Make buttons square: 57px tall, 18px 20px padding, Sora 14px / 600, blue with white label or `#f5f5f5` with a dark label.
4. Use red `#b00024` only for hover fills and link hover colors.
5. Lay out the news section as one large story plus stacked cards with category bullets and small bold date lines.
6. Verify with `node web/scripts/verify-designs.mjs --slug=conocophillips`.
