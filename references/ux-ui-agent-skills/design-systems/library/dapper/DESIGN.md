---
version: alpha
name: Dapper
category: "Agencies & Studios"
description: "Dapper (dapper.agency) is a European B2B demand-generation agency site: a warm light-gray #f3f3f3 canvas with near-black #212121 type, a mint-green #74f5a1 action accent, Helvetica Now Display 700 headlines at 85.3333px with -2.56px tracking, italic serif accent words, white cards, and 5.33px-radius buttons with a small arrow chip."
colors:
  canvas: "#f3f3f3"
  ink: "#212121"
  primary: "#74f5a1"
  on-primary: "#212121"
  surface-card: "#ffffff"
  surface-dark: "#191919"
  ink-inverse: "#f3f3f3"
  primary-dark: "#3c7c52"
  primary-light: "#d5fce3"
  border-light: "#eeeeee"
typography:
  display:
    fontFamily: "\"Helvetica Now Display\", Arial, sans-serif"
    fontSize: 85.3333px
    fontWeight: 700
    lineHeight: 81.0667px
    letterSpacing: "-2.56px"
  display-mobile:
    fontFamily: "\"Helvetica Now Display\", Arial, sans-serif"
    fontSize: 54.2609px
    fontWeight: 700
    lineHeight: 51.5478px
    letterSpacing: "-1.62783px"
  heading:
    fontFamily: "\"Helvetica Now Display\", Arial, sans-serif"
    fontSize: 53.3333px
    fontWeight: 700
    letterSpacing: "-1.06667px"
  subheading:
    fontFamily: "\"Helvetica Now Display\", Arial, sans-serif"
    fontSize: 13.3333px
    fontWeight: 700
    lineHeight: 17.3333px
    letterSpacing: "-0.133333px"
  body:
    fontFamily: "\"Helvetica Now Text\", Arial, sans-serif"
    fontSize: 14.6667px
    fontWeight: 500
    lineHeight: 23.4667px
    letterSpacing: "-0.293333px"
  button:
    fontFamily: "\"Helvetica Now Text\", Arial, sans-serif"
    fontSize: 13.3333px
    fontWeight: 700
    lineHeight: 13.3333px
    letterSpacing: "-0.213333px"
  nav:
    fontFamily: "\"Helvetica Now Text\", Arial, sans-serif"
    fontSize: 10.6667px
    fontWeight: 500
    lineHeight: 13.8667px
rounded:
  xs: 2.67px
  sm: 4px
  md: 5.33px
  lg: 8px
  xl: 10.67px
  2xl: 16px
  3xl: 32px
  4xl: 42.67px
  cta: 5.33px
  pill: 9999px
spacing:
  s1: 1.73px
  s2: 2.67px
  s3: 3.47px
  s4: 5.33px
  s5: 8px
  s6: 8.53px
  s7: 10.67px
  s8: 13.33px
  s9: 16px
  s10: 17.07px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 5.33333px 5.33333px 5.33333px 10.6667px
    height: 37px
  button-white:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 5.33333px 5.33333px 5.33333px 10.6667px
    height: 37px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 0px 13.3333px 0px 8px
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 0px 13.3333px 0px 8px
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
---

## Overview

Dapper presents itself, in the hero eyebrow, as "Dapper - B2B Marketing Agency", and the document title is "Dapper – B2B Marketing Agency | The Demand Agency". The page at https://www.dapper.agency/ is 8,314px tall on a 1280px pass and reads as a calm, editorial agency site: a warm light-gray field (#f3f3f3, the largest background by area, weight 5265), white cards (#ffffff, weight 4968), near-black text (#212121 on 5,298 characters) and a single mint-green accent (#74f5a1).

The hero headline is "We build high-performing marketing engines for B2B Brands" in Helvetica Now Display 700 at 85.3333px with tight -2.56px tracking, over a grayscale photograph of a leaf. Below it sit the paragraph "Dapper is a European B2B marketing agency specialized in demand generation. From Rotterdam and Lisbon, we build marketing engines that generate pipeline for B2B brands across Europe, the UK, and the US.", a small "Discover more" button with a green arrow chip, and a hairline rule. Each section opens with a green leaf-shaped marker and an eyebrow label ("Results", "Our services", "Demand team").

Headlines mix the grotesque sans with an italic serif for one or two words: "100+ B2B Companies trusted us to improve their marketing" (italic "marketing"), "Level up your marketing, improve marketing ROI", "Your own team of world-class B2B marketing experts", "Driven by a performance mindset". The serif face, Ivy Presto Headline at weight 300 italic, was measured on 173 characters. Result cards show white panels with a client logo at the top and two stat tiles ("200% More inbound sales calls", "53% More qualified pipeline"; "60+ Inbound Leads", "66% Win rate"; "12% More Leads", "400% High-intent Downloads"). Service cards (Content & Creative, Paid Media & Performance, Data & Measurement) are white tiles with a green arrow chip at the lower right. The page continues with Demand Gen and Demand Capture panels, a "Demand Team" hub diagram with green icon chips around a portrait, testimonials, a "Traditional B2B marketing vs modern B2B marketing" comparison, and a dark closing block, "Talk to an expert", above a dark footer.

The voice is confident and short: imperative CTAs ("Talk to us", "Explore all results", "Discover more") and plain form copy. In the capture a dark "Get a quote" form panel and an open services menu overlay parts of the first screen; they are overlays and are not documented as components.

## Colors

| Token | Value | Evidence |
|---|---|---|
| `canvas` | #f3f3f3 | Body background and largest area; `--color-light` |
| `ink` | #212121 | Text on 5,298 characters; `--color-dark` |
| `primary` | #74f5a1 | Accent fill of the "Discover more" buttons and icon chips; `--color-primary` |
| `on-primary` | #212121 | Text on the green button |
| `surface-card` | #ffffff | White cards and the "Talk to us" / "Explore" buttons (weight 4968) |
| `surface-dark` | #191919 | Dark panels (weight 559); `--color-dark-tint` |
| `ink-inverse` | #f3f3f3 | Text on dark panels (474 characters) |
| `primary-dark` | #3c7c52 | Root variable `--color-primary-dark`; its on-screen use was not measured |
| `primary-light` | #d5fce3 | Root variable `--color-primary-light`; its on-screen use was not measured |
| `border-light` | #eeeeee | Root variable `--color-border` |

The extractor recorded the white "Talk to us" button as the primary CTA, but the brand's own variable `--color-primary` is #74f5a1 and it fills the "Discover more" buttons (the CTA role on mobile), so this document reassigns `primary` to the green and keeps white as `surface-card`. Other measured colors: #212121 backgrounds (weight 2411, the dark closing block), #131313 (97), a border color of #212121 (22 elements) and #ffffff (4). Published root variables also include `--color-secondary: #c35fff`, `--greyed-out: #919191`, `--color-dark-tint-hover: #292929` and `--color-light-tint-hover: #e7e7e7`; none was measured on screen.

## Typography

Two Helvetica Now optical sizes plus one serif: Helvetica Now Text (4,942 characters), Helvetica Now Display (1,699) and Ivy Presto Headline (173, weight 300 italic). Declared weights: Text 500 and 700, Display 500 and 700.

| Token | Family | Size / line-height | Weight | Tracking | Use |
|---|---|---|---|---|---|
| `display` | Display | 85.3333px / 81.0667px | 700 | -2.56px | Hero headline |
| `display-mobile` | Display | 54.2609px / 51.5478px | 700 | -1.62783px | Mobile hero |
| `heading` | Display | 53.3333px | 700 | -1.06667px | Section headings (143 characters) |
| `subheading` | Display | 13.3333px / 17.3333px | 700 | -0.133333px | Case-card titles (h3) |
| `body` | Text | 14.6667px / 23.4667px | 500 | -0.293333px | Paragraphs (3,161 characters in the first pass) |
| `button` | Text | 13.3333px / 13.3333px | 700 | -0.213333px | Buttons |
| `nav` | Text | 10.6667px / 13.8667px | 500 | none | Menu links, legal links |

Every measured size carries negative tracking: -2.56px on 85.3333px type and -0.293333px on 14.6667px body copy. Other measured sizes by character count: 29.3333px (885, tracking -0.586667px), 17.3333px (198, -0.52px), 12px (186), 16px (178, -0.16px), 21.3333px (168, -0.426667px) and 26px (76). The 29.3333px group is the second most-used size; its element was not recorded. The hero heading is 243px tall at 939px wide.

Helvetica Now is a licensed family; if the files are unavailable use Arial (the declared fallback) with the same sizes and tracking; no other substitute was measured.

## Layout

The root variables define a 1440px ideal container (`--size-container-ideal`), a 992px minimum and a 1920px maximum, an `--nav-bar-height` of 7.5em, a `--container-padding` of 3em, section padding of 12em (9em and 6em variants) and gaps of 1em, 1.5em, 3em and 4.5em, with `--unit-width: 16px`. Measured paddings: 32px (109 elements), 10.6667px (65), 31.9844px (36), 5.33333px (25), 26.6667px (17), 21.3333px (12). Measured gaps: 10.6667px (56), 16px (42), 8px (40), 32px (20), 5.33333px (16), 64px (16).

In the capture the header is a floating white rounded bar at the top with the Dapper logo, the links Services, Expertise, Cases, Blog, About, Careers and a "Talk to us" button with a green arrow chip. Content is a left-aligned column of headline and body text with an eyebrow label at the left margin; two-column sections place the eyebrow at left and the headline at the horizontal center. Cards run in rows of three and the services block is a two-by-two tile grid with a wide tile below. Spacing between sections is large; inside cards it is tight.

## Elevation & Depth

The page is flat. Only one shadow was measured, `rgba(0, 0, 0, 0) 0px 0px 26.6667px 0px` (fully transparent), and the CSS lists `0 0 2.5em rgba(0, 0, 0, 0)`, `0 0 2.5em rgba(0, 0, 0, 0.1)` and `0 0 2.5em rgba(0, 0, 0, 0.33)`. Separation comes from fill: white cards on the gray canvas, dark panels (#212121 and #191919) for contrast blocks, and 1px borders in #212121. A grayscale leaf photograph provides the only soft depth in the hero.

## Shapes

Corners are small. Measured: 2.66667px (52 elements), 5.33333px (48, buttons and tiles), 16px (13, cards), 4px (8), 8px (8), 50% (8, round controls), plus single 42.6667px, 32px, 16px 16px 0 0 and 10.6667px. The root variables express the same idea in em: `--border-radius: .5em`, `--border-radius-m: 1em`, `--border-radius-l: 1.5em`. Buttons use 5.33333px; the arrow chip inside a button is a small rounded square in green; carousel arrows are small rounded squares (one gray, one black in the capture).

## Components

**Primary button.** Green (#74f5a1) fill, #212121 text, Helvetica Now Text 13.3333px/700, padding 5.33333px 5.33333px 5.33333px 10.6667px, 37px tall, 5.33333px radius ("Discover more", 138px wide), with a square arrow chip at the right.

**White button.** Same geometry on #ffffff ("Talk to us", 108px; "Explore our cases", 159px; "Explore all results", 158px).

**Navigation.** Helvetica Now Text 10.6667px/500 links with padding 0px 13.3333px 0px 8px, 37px tall; the header role spans 1280px.

**Result card.** White, 16px radius, logo at top, two stat tiles in a light gray fill with a bold number and a small caption.

**Service tile.** White tile with a Helvetica Now Display title and a green arrow chip at the lower right.

**Eyebrow.** A green leaf-shaped marker and a small label.

**Form fields.** The quote form measured an input 480px wide and 46px tall with a dark #212121 fill, `1px solid #212121` border, 5px radius, #f3f3f3 text at 13.3333px/500 and padding 13.3333px 56.6667px 13.3333px 13.3333px; it belongs to the overlay panel measured before the overlay was hidden.

## Design System Architecture

No public design system, brand guideline or press kit is linked from the home page (opened via WebFetch); the closest items are legal links, including an "AI Manifesto". The de-facto system is visible in the shipped CSS at https://www.dapper.agency/.

Variables follow a semantic naming scheme: colors (`--color-light`, `--color-dark`, `--color-primary`, `--color-primary-dark`, `--color-primary-light`, `--color-secondary`, `--color-border`, `--color-dark-tint`, plus `-hover` and `--color-rgb-*` triplets, and `--color-ignore-*` duplicates), spacing (`--gap`, `--gap-s`, `--gap-l`, `--gap-xl`, `--section-padding`, `--container-padding`), radii (`--border-radius`, `-s`, `-m`, `-l`) and motion (`--animation-default: 0.6s cubic-bezier(0.625, 0.05, 0, 1)`, `--animation-default-fast: 0.3s`, `--animation-default-slow: 0.9s`, `--animation-grow: 0.45s cubic-bezier(0.35, 1.5, 0.6, 1)`). The stylesheet declares a `webflow-icons` font face. The page footer credits "Design by Dylan" and "Code by Dennis".

## Do's and Don'ts

**Do**
- Keep the canvas #f3f3f3 and text #212121; use #74f5a1 only for primary actions, arrow chips and markers.
- Set headlines in Helvetica Now Display 700 with negative tracking and put one key word in an italic serif.
- Put content on white (#ffffff) cards with 16px radius; use dark #212121 or #191919 blocks for contrast sections.
- Give each section an eyebrow label with the green marker.
- Use 5.33333px radius on buttons with a right-side arrow chip.

**Don't**
- Don't add a second accent color to the interface; #c35fff exists in the variables but was not measured on screen.
- Don't use shadows; none visible were measured.
- Don't set text without negative tracking.
- Don't document the open quote panel or mega-menu as components.

## Responsive Behavior

The extractor re-loaded the page at 390px. Measured: the hero heading becomes 54.2609px / 51.5478px with -1.62783px tracking, 363px wide and 294px tall (85.3333px, 939px by 243px on desktop). Body text is 14.9217px / 23.8748px (363px by 143px). The CTA measured at that width is the green "Discover more" button at 16.9565px/700 with 6.78261px radius, padding 6.78261px 6.78261px 6.78261px 13.5652px, 47px tall and 175px wide. The header role is 390px by 844px with 13.5652px/500 text. Many fractional mobile sizes were recorded (for example 14.9217px, 23.7391px, 13.5652px, 11.8696px). Breakpoints and media queries are not measured; the layout of cards and menus at 390px is not measured.

## Iteration Guide

1. Start with canvas #f3f3f3, ink #212121, green #74f5a1, white cards, Helvetica Now Display/Text.
2. Build the hero: eyebrow, 85.3333px/700 headline with -2.56px tracking, paragraph, green "Discover more" button with an arrow chip.
3. Build white result cards with two stat tiles, then service tiles with green arrow chips.
4. Add italic serif accent words (Ivy Presto Headline 300 italic) to headlines.
5. The extractor first captured an open quote panel; the batch re-extraction hid it. If it reappears, re-run `node web/scripts/extract-tokens.mjs --batch=web/data/batches/phase2.json --only=dapper --force --no-motion` and `node web/scripts/generate-frontmatter.mjs --slug=dapper`.
6. Run `node web/scripts/verify-designs.mjs --slug=dapper` after any token edit.
