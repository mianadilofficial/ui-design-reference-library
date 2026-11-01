---
version: alpha
name: PlayStation
category: "Media & Consumer Tech"
description: 'The PlayStation Thai-language home page as measured: a white canvas under a black Sony strip, a dark #121314 games band, light-weight (300) Thai-capable headings, and a single PlayStation blue #0070cc on pill-shaped sign-in and learn-more buttons (hover #005499). Condensed uppercase AlternateGotNo1D appears at 52px for promo titles; SST loads at 400/500/700. Photography and console renders carry the color.'

colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#0070cc"
  primary-hover: "#005499"
  on-primary: "#ffffff"
  button-white: "#ffffff"
  on-button-white: "#000000"
  surface-cloud: "#f5f7fa"
  commerce: "#d53b00"
  surface-dark: "#121314"
  surface-silver: "#cecdd2"
  ink-muted: "#6b6b6b"
  ink-nav: "#1f1f1f"
  ink-warm: "#1d1b11"
  link-blue: "#0068bd"
typography:
  display:
    fontFamily: AlternateGotNo1D
    fontSize: 52px
    fontWeight: 400
    lineHeight: 44.2px
    letterSpacing: "-0.2px"
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Hiragino Kaku Gothic Pro\", Meiryo, Osaka, \"MS PGothic\", Arial, sans-serif"
    fontSize: 35px
    fontWeight: 300
    lineHeight: 43.75px
    letterSpacing: "-0.1px"
  heading:
    fontFamily: "\"Hiragino Kaku Gothic Pro\", Meiryo, Osaka, \"MS PGothic\", Arial, sans-serif"
    fontSize: 34.1797px
    fontWeight: 300
    lineHeight: 42.7247px
    letterSpacing: "-0.2px"
  subheading:
    fontFamily: "\"Hiragino Kaku Gothic Pro\", Meiryo, Osaka, \"MS PGothic\", Arial, sans-serif"
    fontSize: 22px
    fontWeight: 300
    lineHeight: 27.5px
    letterSpacing: 0.1px
  body:
    fontFamily: "\"Hiragino Kaku Gothic Pro\", Meiryo, Osaka, \"MS PGothic\", Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: "-0.2px"
  button:
    fontFamily: "\"Hiragino Kaku Gothic Pro\", Meiryo, Osaka, \"MS PGothic\", Arial, sans-serif"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 18px
    letterSpacing: "-0.2px"
  nav:
    fontFamily: SST, helvetica, arial, sans-serif
    fontSize: 14px
    fontWeight: 500
    letterSpacing: "-0.2px"
rounded:
  xs: 3px
  sm: 6px
  md: 8px
  lg: 11px
  xl: 12px
  2xl: 24px
  3xl: 28px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3.5px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 7px
  s7: 8px
  s8: 10px
  s9: 12px
  s10: 14px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.pill}"
    height: 22px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
  button-tab:
    backgroundColor: "{colors.button-white}"
    textColor: "{colors.on-button-white}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 10px 14px
    height: 38px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.ink-nav}"
    padding: 0px 17.5px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    textColor: "{colors.canvas}"
    rounded: "{rounded.sm}"
    padding: 7px
    boxShadow: rgba(0, 0, 0, 0.8) 0px 4px 7px 0px
  footer:
    textColor: "{colors.canvas}"
---

## Overview

This file describes the Thai-language PlayStation home page (`https://www.playstation.com`, which the extractor loaded as `th-TH`, with the title "เว็บไซต์ทางการ PlayStation®: คอนโซล เกม อุปกรณ์เสริม และอีกมากมาย") as captured and measured at 1280px and 390px. Every value in the frontmatter was read from the live page. Where an interpretation is mine rather than a measurement, the prose says so.

The capture reads from top to bottom as a stack of bands with different backgrounds:
1. A black strip with a white SONY wordmark at the right edge.
2. A white 64px header: PlayStation logo, a seven-item menu (ร้านค้า store, PS5, เกม games, PS Plus, อุปกรณ์เสริม accessories, ข่าวสาร news, การสนับสนุน support), a small blue pill labeled ลงชื่อเข้าใช้ (sign in) and a search icon.
3. A yellow promotional banner for a Marvel's Wolverine game, with an uppercase condensed title.
4. A full-bleed photographic hero (sports-game key art) with a light-weight headline, a short paragraph and a white pill button "เล่นเลย" (play now), plus a strip of eight thumbnails below it.
5. A white band introducing PS5 consoles and accessories: a 34px light headline, a blue subheading, a blue pill "เรียนรู้เพิ่มเติม" (learn more), a console and controller render, and a card carousel.
6. A near-black band (`{colors.surface-dark}`) of game cover art in a six-column grid with titles beneath, two tab pills at the top and a grey "Load_More" pill at the bottom. The label renders with an underscore in the capture.
7. A lavender-grey band (`{colors.surface-silver}`) starting at the bottom of the captured area.

**Key Characteristics**
- One interface blue: `{colors.primary}` (`#0070cc`) on the small pill buttons. The root variable for the light-theme primary button role is `rgba(0,104,189)` (`#0068bd`), which is also the measured color of the blue h3 and link text.
- Light weight display: the headings measure at weight 300, with letter-spacing of -0.2px and 0.1px. This is read from the page, not inferred from the brand.
- Alternating light and dark bands, with cover art and product renders supplying the color.
- Small, dense text: 12px is the dominant text size (3002 of the counted characters), with 14px for navigation.
- Pill buttons (`{rounded.pill}`) for actions; 6px radius on game cards and 12px on larger tiles.
- A commerce orange, `{colors.commerce}`, exists as a separate role for buy buttons in the site's variables.

## Colors

### Brand and action
- **PlayStation blue** (`{colors.primary}`, `#0070cc`): the background of the sign-in button, recorded in the hover probe (`rgb(0, 112, 204)` before, `rgb(0, 84, 153)` after) and present in the background tally (weight 23). Text on it is `{colors.on-primary}` (`#ffffff`).
- **Blue hover** (`{colors.primary-hover}`, `#005499`): the measured hover background. The root variables `--role-button-primary-hover-light` and `--role-button-primary-pressed-light` also hold `rgba(0,84,153)`.
- **Link blue** (`{colors.link-blue}`, `#0068bd`): measured as the color of the h3 "คอนโซล PlayStation 5" and in the text tally (30 chars). The root variables show `--role-button-primary-light: rgba(0,104,189)` and `--color-role-text-link-base-light: rgb(0 104 189/1)`, i.e. the same value.
- **Commerce orange** (`{colors.commerce}`, `#d53b00`): measured in the background tally (weight 3) and defined as `--role-button-commerce-light`; hover and pressed variants are defined as `rgba(163,45,0)` and `rgba(163,45,0)` in the variables. No orange button is visible in the captured region, so its on-page use is not shown here.

### The extractor's choice, and why it was changed
The generator picked the white tab pill "เกมออกใหม่" (new releases) as the primary CTA, giving a white fill and black text. That pill is a content-filter tab above the game grid, not the page's main action, so its values are kept under the names `{colors.button-white}` and `{colors.on-button-white}` and used by `button-tab`. The blue pill is the brand action seen on the header and the PS5 section. The measured evidence for blue is the hover probe above.

### Text
- **Ink** (`{colors.ink}`, `#000000`): headings and body copy on light bands (642 characters).
- **Ink nav** (`{colors.ink-nav}`, `#1f1f1f`): the header's computed text color (77 characters). On hover, the "ร้านค้า" item changes to `rgb(0, 112, 209)`.
- **Ink muted** (`{colors.ink-muted}`, `#6b6b6b`): 329 characters; the root variable `--color-role-text-secondary-light` is `rgb(107 107 107/1)`.
- **Ink warm** (`{colors.ink-warm}`, `#1d1b11`): the color of the Wolverine banner title; it measured on 40 characters.
- White text (`#ffffff`) is the most-read color by character count (3251) because the dark game band holds most of the page's text; it is represented by `{colors.canvas}` and `{colors.on-primary}`.

### Surfaces
- **Canvas** (`{colors.canvas}`, `#ffffff`): the largest background by area (3801).
- **Surface dark** (`{colors.surface-dark}`, `#121314`): the games band (weight 1009); the root variable `--color-role-section-gradients-emphasis-start-dark` is `rgb(18 19 20/1)`.
- **Surface silver** (`{colors.surface-silver}`, `#cecdd2`): weight 871; visible as the lavender-grey band at the bottom of the capture.
- **Surface cloud** (`{colors.surface-cloud}`, `#f5f7fa`): weight 608; `--color-2-light` is `245 247 250`, the same value.
- Measured but not promoted: `#00439c` (722), `#26254f` (588), `#feeb37` (82, the Wolverine banner yellow, a partner promotion) and `#000000` (46).

### Semantic roles named in the site's variables
`--color-role-text-success-light` is `rgb(0 122 98/1)`; `--color-role-text-warning-light` is `rgb(200 27 58/1)`; `--role-text-error-and-warning-dark` is `rgba(255,20,63)`; `--color-role-text-ps-plus-light` is `rgb(252 199 29/1)`. These are variables the page defines; none of them was observed rendered in the captured viewport, so they are not frontmatter tokens.

## Typography

### Font families
- Most of the page's text (4252 characters) is set in a Hiragino Kaku Gothic Pro stack: `"Hiragino Kaku Gothic Pro", Meiryo, Osaka, "MS PGothic", Arial, sans-serif`. This is the computed family on body, headings and buttons; the variable names `--dk-font`, `--font-sst-condensed` and others resolve to the same stack. A browser without those system fonts falls back to Arial or the next available family.
- **SST** (75 characters) is loaded as 400, 500 and 700 and is the family on the navigation items; the stack is `SST, helvetica, arial, sans-serif`.
- **AlternateGotNo1D** (44 characters) is loaded and used for the 52px uppercase Wolverine banner title.
- `Shared-Nav-Icons` is an icon font.

SST is described by Monotype (https://www.monotype.com/fonts/sst) as designed by Akira Kobayashi with Hiroshige Fukuhara of Sony Creative Center, in six weights from ultra light to heavy with italics, three condensed and two monospaced variations, supporting 93 languages including Thai. Monotype's page lists bespoke licensing and MyFonts purchase as options.

### Font substitutes
SST and AlternateGotNo1D are proprietary or licensed; the page's own fallbacks (Helvetica, Arial, and the Japanese system fonts above) are the substitutes the CSS itself declares. No other substitute is claimed.

### Hierarchy

| Token | Size | Weight | Line height | Tracking | Where measured |
|---|---|---|---|---|---|
| `{typography.display}` | 52px | 400 | 44.2px | -0.2px | Wolverine banner title, uppercase, AlternateGotNo1D |
| `{typography.display-mobile}` | 35px | 300 | 43.75px | -0.1px | mobile h1 (at 390px) |
| `{typography.heading}` | 34.1797px | 300 | 42.7247px | -0.2px | h2 "DLC ใหม่พร้อมให้เล่นแล้ว" |
| `{typography.subheading}` | 22px | 300 | 27.5px | 0.1px | h3 "คอนโซล PlayStation 5" |
| `{typography.body}` | 12px | 400 | 18px | -0.2px | paragraph text |
| `{typography.button}` | 12px | 500 | 18px | -0.2px | the tab pill |
| `{typography.nav}` | 14px | 500 | not recorded | -0.2px | navigation, SST |

Other sizes in the tally: 14px (617 chars), 10px (164), 22px (162), 34px (127), 12.25px (87), 43px (57), 52px (27), 27.3437px (22), 13.3333px (20), 20px (17), 11px (13). Weights: 400 (3728), 300 (378), 600 (136), 500 (102), 700 (49). Fractional sizes like 34.1797px suggest scaled values (for example from a fluid size); the cause was not investigated.

### Principles seen on the page
- Large headings are weight 300; small text is weight 400 and buttons 500.
- Thai script is set at the same sizes as Latin; the capture shows Thai headings rendered with a Thai-capable fallback rather than Hiragino.
- The one uppercase, condensed treatment appears only on the Wolverine banner in the captured region.

## Layout

- **Header**: 64px tall (the nav role); nav padding `0px 17.5px`; the menu buttons are 64px high with a downward chevron beside each label.
- **Mobile header**: 60px tall at 390px, holding search and sign in.
- **Hero**: full-bleed image, text column left, about 148px from the left edge in the 960px-wide capture.
- **Product row**: left text block and a right product image; below it a horizontally scrolling card carousel with round arrow buttons at both ends, a pale blue outline on the selected card and a dotted progress bar.
- **Game grid**: six columns, two rows visible, each cover with a one-line truncated title (ellipsis) below.
- **Spacing**: the root variables define a 7px-based scale: `--space-1` 2px, `--space-3` 7px, `--space-4` 10px, `--space-5` 14px, `--space-6` 21px, `--space-7` 28px, `--space-8` 35px, `--space-9` 42px, `--space-10` 56px, `--space-11` 70px, `--space-12` 112px. Measured paddings include 7px (81 elements), 14px (30), 42px (14) and 28px (12); gaps are 21px, 42px, 14px.
- **Page length**: 5929px scroll height at 1280px.

## Elevation & Depth

Measured shadows:

| Level | Treatment | Count |
|---|---|---|
| 1 | `rgba(0,0,0,0.06) 0 4px 7px 0` | 3 |
| 2 | `rgba(0,0,0,0.16) 0 4px 7px 0` | 22 |
| 3 | `rgba(0,0,0,0.8) 0 4px 7px 0` | 24 |
| 4 | `rgba(0,0,0,0.18) 0 2px 6px 0` | 1 |

The same geometry (4px offset, 7px blur) is used at three opacities. The generator assigned the 0.8 version to `card`. In the capture the carousel cards and cover art show soft shadows. A yellow-tinted shadow `rgba(254, 235, 55, 0) 0 6px 18px 0` is also in the tally at zero opacity. Beyond shadows, depth comes from the full-bleed photographs and from the contrast between light and dark bands.

## Shapes

Measured radii by frequency: 6px (57 elements), 12px (29), 3px (16), 100% (12, circles), 28px (8), 11px (8), 24px (6), 9999px (3), 8px (2), 999px (1).

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 3px | small elements |
| `{rounded.sm}` | 6px | cards and covers (most common) |
| `{rounded.md}` | 8px | rare |
| `{rounded.lg}` | 11px | 8 elements |
| `{rounded.xl}` | 12px | tiles (29 elements) |
| `{rounded.2xl}` | 24px | 6 elements |
| `{rounded.3xl}` | 28px | 8 elements |
| `{rounded.pill}` | 9999px | pill buttons and tabs |

The hover probe measured the sign-in button's radius as 999px and its height as 22px.

## Components

### Buttons
- **`button-primary`**: fill `{colors.primary}`, text `{colors.on-primary}`, pill radius, 22px tall as measured on the sign-in button. Hover fill `{colors.primary-hover}`. The "เรียนรู้เพิ่มเติม" button in the capture has the same blue pill look; its size was not measured separately.
- **`button-tab`**: the white pill (`{colors.button-white}` fill, `{colors.on-button-white}` text), padding `10px 14px`, 38px tall, radius pill, type `{typography.button}`. The adjacent inactive tab "เร็วๆ นี้" (coming soon) shows white text on a dark pill in the capture.
- The hero button "เล่นเลย" is a white pill with dark text in the capture; its measurement was not taken separately.
- "Load_More" is a mid-grey pill on the dark band.
- A skip-to-content button ("ข้ามไปยังเนื้อหาหลัก") was measured at 57px tall with a `2px outset #000000` border and 0 radius; it is an accessibility control, not part of the visual system, and was dropped from the tokens.

### Navigation
- **`nav`**: text `{colors.ink-nav}`, padding `0px 17.5px`. **`nav-link`**: `{colors.ink}`, `{typography.nav}`. Hover changes the item's text and border color to `rgb(0, 112, 209)`.

### Cards
- **`card`**: radius `{rounded.sm}` (6px), padding 7px, shadow `rgba(0, 0, 0, 0.8) 0px 4px 7px 0px`, text `{colors.canvas}` as measured (the card text is white on the dark band). In the capture each game card is a cover image with a plain one-line title beneath.

### Footer
- **`footer`**: text `{colors.canvas}`; the extracted footer text is "Load_More", which means the extractor's footer element is not the visual footer and no further footer values are claimed.

## Design System Architecture

No official public PlayStation design system or current brand-guideline page was found. The playstation.com copyright and trademark notice (https://www.playstation.com/tr-tr/legal/copyright-and-trademark-notice/) states that "PlayStation", "PS5", "PS4" and "DualSense" are trademarks of Sony Interactive Entertainment Inc. and says nothing about visual rules.

The de-facto system is visible in the page's CSS custom properties, which expose a role-based structure:
- Numbered colors with light and dark suffixes: `--color-1-light` (`255 255 255`), `--color-2-dark` (`9 10 10`), `--color-brand-1-dark` (`0,54,151`), `--color-brand-3-light` (`0,125,234`), `--color-brand-4-light` (`0,59,156`), `--color-brand-5-light` (`0,15,85`).
- Role tokens: `--role-button-primary-light`, `--role-button-secondary-light` (`rgba(0,0,0,.06)`), `--role-button-secondary-dark` (`rgba(255,255,255,.08)`), `--role-button-commerce-light`, `--color-role-text-link-base-light`, `--color-role-borders-*`, `--color-role-gradients-*`.
- A spacing scale named `--space-1` to `--space-12`.
- Font roles named `--dk-font`, `--dk-font-bebas-neue`, `--dk-font-condensed`, `--dk-font-mont`.
- Theme pairs: nearly every role has a `-light` and `-dark` variant, which matches the page's alternating light and dark bands.

The secondary button on dark is a translucent white (`rgba(255,255,255,.08)` at rest, `.12` on hover, `.06` pressed), which is consistent with the grey "Load_More" pill, though the link between that pill and this variable was not verified. A `--tw-ring-color: rgba(59,130,246,.5)` variable shows that Tailwind CSS defaults also ship in the CSS.

## Do's and Don'ts

**Do**
- Use `{colors.primary}` for sign-in and learn-more actions and `{colors.primary-hover}` on hover.
- Alternate light bands (`{colors.canvas}`, `{colors.surface-cloud}`) with a dark band (`{colors.surface-dark}`) for game content.
- Set headings at weight 300 with small negative or 0.1px tracking, as measured.
- Use pill radius for buttons and tabs, 6px for cards and cover art.
- Keep orange (`{colors.commerce}`) reserved for the purchase role defined in the variables.

**Don't**
- Do not use the white tab pill as the primary action; it is a filter control.
- Do not put body text above 12px on dense grids; the page's dominant size is 12px.
- Do not use the yellow `#feeb37` as a brand color; it belongs to a partner promotion in the capture.
- Do not use the logo or marks without checking the owner's rights notice linked above.

## Responsive Behavior

Two viewports were measured. At 390px the extractor reported:
- h1 35px / 300 (the PS5 section headline) and h2 20.16px / 300 (the hero headline).
- Body text 12px / 400 in white on dark.
- Header 60px tall with search and sign in only; the seven-item menu is not part of the mobile nav text.
- The Wolverine promo banner is 64px tall and spans the full 390px width.

Column counts for the game grid and the carousel at 390px were not measured and are not described here.

## Iteration Guide

1. Choose the band: light (`{colors.canvas}`) for products, dark (`{colors.surface-dark}`) for game content.
2. Place a `{colors.primary}` pill for the one main action; use `{colors.button-white}` pills for filters.
3. Set headings in weight 300; keep body at 12px and navigation at 14px/500.
4. Give covers and cards a 6px radius and the 4px/7px-blur shadow family.
5. For any value not in the frontmatter, measure it on the live page first (`node web/scripts/extract-tokens.mjs --slug=playstation--<page> --url=<url> --force`).
6. If the sign-in button's text size or the hero button's geometry matters, measure them; they were not captured.
