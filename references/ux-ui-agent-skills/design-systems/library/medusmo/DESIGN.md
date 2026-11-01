---
version: alpha
name: Medusmo
category: "Product & SaaS"
description: "Medusmo home: dark #31312f hero canvas turning to #f5f5f5 and #e4e4e4 panels, lime #dafb71 pill CTA, Doumbar uppercase display at 55.98px and 111.96px with negative tracking, Inter 12-15px body, 149px full pills and 11.2px cards."
colors:
  canvas: "#31312f"
  white: "#ffffff"
  ink: "#ffffff"
  primary: "#dafb71"
  on-primary: "#31312f"
  surface: "#e4e4e4"
  surface-light: "#f5f5f5"
  ink-muted: "#8c8c8b"
  ink-dim: "#6d6d6c"
  ink-faint: "#c8c8c8"
  hairline: "#0000001a"
  link: "#333333"
typography:
  display:
    fontFamily: Doumbar, sans-serif
    fontSize: 55.9821px
    fontWeight: 500
    lineHeight: 54.8625px
    letterSpacing: "-2.23929px"
    textTransform: uppercase
  display-mobile:
    fontFamily: Doumbar, sans-serif
    fontSize: 44px
    fontWeight: 500
    lineHeight: 40.48px
    letterSpacing: "-1.76px"
    textTransform: uppercase
  heading:
    fontFamily: Doumbar, sans-serif
    fontSize: 111.964px
    fontWeight: 500
    lineHeight: 103.007px
    letterSpacing: "-4.47857px"
    textTransform: uppercase
  subheading:
    fontFamily: Inter, sans-serif
    fontSize: 33.5893px
    fontWeight: 400
    lineHeight: 37.62px
    letterSpacing: "-1.34357px"
  body:
    fontFamily: Inter, sans-serif
    fontSize: 12.122px
    fontWeight: 400
    lineHeight: 17.4557px
    letterSpacing: "-0.12122px"
  button:
    fontFamily: Inter, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 21px
  link:
    fontFamily: Inter, sans-serif
    fontSize: 14.003px
    fontWeight: 400
    lineHeight: 19.6042px
    letterSpacing: "-0.28006px"
rounded:
  xs: 7.46px
  sm: 11.2px
  md: 149.29px
  cta: 149.29px
  pill: 9999px
spacing:
  s1: 3.73px
  s2: 5.6px
  s3: 7.46px
  s4: 9.33px
  s5: 11.2px
  s6: 12px
  s7: 13.06px
  s8: 14.93px
  s9: 16.79px
  s10: 18.66px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    padding: 12px 20px
    height: 45px
    transform: matrix(1, 0, 0, 1, 0, 0)
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.white}"
    typography: "{typography.button}"
    padding: 12px 20px
    height: 45px
  link:
    textColor: "{colors.link}"
    typography: "{typography.link}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  card:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.link}"
---

# Medusmo

Measured from https://www.medusmo.com/ (final URL identical), 1280px desktop pass (page height 17,015px) and 390px mobile pass. The extractor hid a consent overlay (`dark-slider_wrapper`). Medusmo's headline reads "We create expert teams for mass customer service"; the site sells customer-service staffing and consulting. The capture's first screen is a plain dark `#31312f` block, so the hero's imagery was not rendered at capture time; the measured values still come from the live DOM.

## Overview

A dark-to-light editorial page. The first block is `#31312f` (charcoal) with white uppercase Doumbar headline "WE CREATE EXPERT TEAMS FOR MASS CUSTOMER SERVICE" at 55.98px, then the page switches to white, then to a `#f5f5f5` field where a logo wall (PGE, BNP Paribas, ERGO Hestia, Polskie ePlatnosci) sits in four hairline-bordered cells under the line "Powering the world's best companies". Next is a giant two-tone headline, "CUSTOMER SERVICE SOLUTIONS FOR" in `#31312f` and "TOP MANAGEMENT" in light grey `#c8c8c8`, at 111.96px with tight tracking. Beneath it are numbered feature cards on `#e4e4e4`.

Measured background areas: `#e4e4e4` (7,341), `#f5f5f5` (7,315), `#31312f` (6,759), `#474746` (3,072), `#0000ff` (2,560), `#272727` (2,048), `#dddddd` (1,024). Text colors by character weight: `#31312f` (1,413), `#8c8c8b` (1,240), `#ffffff` (634), `#6d6d6c` (342), `#f5f5f5` (248), `#c8c8c8` (199).

## Colors

- **Canvas `#31312f`**: Webflow variable `--black`; also `--dark-9`. It is both the dark hero field and the main text color on light surfaces.
- **White `#ffffff`** (`page-body`, the body background) and **`#f5f5f5`** (`--gray-100`, `surface-light`), **`#e4e4e4`** (`--gray-200`, card fill).
- **Primary `#dafb71`**: lime; Webflow variable `--yellow`. It fills the "Consultation" button, with `#31312f` text.
- **Greys:** `#8c8c8b` (`--dark-6`), `#6d6d6c` (`--gray-600`), `#c8c8c8` (`--dark-4`), `#d6d6d6`, `#ababaa`, `#4f4f4e`.
- **Strokes:** `#0000001a` (`--swatch--dark-stroke`) on light, `#ffffff1a` (`--swatch--light-stroke`) on dark.
- `#0000ff` (2,560 area) and the red/yellow helper fills are not brand colors: the page's inline stylesheet assigns `background-color: blue` to `.dark-slider_trigger-item`, `red` to `.dark-slider_triggers-wrapper` and `.home-steps2_table-triggers-wrapper`, and `yellow` to `.home-sticky_lottie-trigger`, each with `opacity: 0`. They are invisible scroll-trigger elements and are excluded.

## Typography

Two families. **Doumbar** (weight 500, 854 characters) is the display face: always uppercase, always negatively tracked (-4%: `-2.23929px` at 55.98px, `-4.47857px` at 111.96px). **Inter** (weights 300, 400, 500; 3,283 characters) sets everything else. The CSS variables confirm the roles: `--font--heading-family: Doumbar,sans-serif`, `--font--body-family: Inter,sans-serif`, with `--title-large--letter-spacing: -0.04em` and `--body-medium--letter-spacing: -0.02em`.

Scale: heading 111.964px/103.007px, display 55.9821px/54.8625px, subheading 33.5893px/37.62px Inter 400 (e.g. "Goals achieved, control maintained."), link 14.003px (the most common size, 2,614 characters), body 12.122px/17.4557px, button 15px/21px. A 149.286px size appears for 233 characters (very large numerals). Mobile: display 44px/40.48px, the section heading 60px/55.2px.

Doumbar is a licensed display face; a condensed grotesque such as Bebas Neue or Anton is a stand-in.

## Layout

A 1280px desktop frame with 28px-ish side gutters visible in the capture: the logo cells and cards run nearly edge to edge. Webflow spacing variables run from `--space--10px` to `--space--220px` (e.g. 48px, 96px, 120px, 180px). Measured paddings cluster around 29.86px, 35.46px, 37.32px, 16.79px, 18.66px; gaps around 3.73px, 18.66px, 14.93px, 7.46px. The page is long and vertically paced by big headings with generous empty bands between sections.

## Elevation & Depth

Flat. Measured shadows: `rgba(0, 0, 0, 0.15) 0px 2px 15px 0px` and a `rgba(0, 192, 192, 0.03)` 14.3px spread ring. Depth comes from surface contrast (`#f5f5f5` page, `#e4e4e4` cards, `#31312f` blocks) and 1px hairlines (`#0000001a` x9, `#ffffff1a` x7).

## Shapes

Measured radii: `1000%` (120 elements, fully round: pills and dots), `11.1964px` (43, cards), `100%` (18), `7.46429px` (7), `149.286px` (6, buttons), `50%` (1). Tokens: xs 7.46px, sm 11.2px, md and cta 149.29px, pill 9999px. Buttons are full pills; cards are softly rounded rectangles.

## Components

- **Primary button:** `#dafb71` fill, `#31312f` text, Inter 15px weight 400, padding `12px 20px`, height 45px, radius 149.286px; label "Consultation" (the label is duplicated in the DOM, consistent with a text-swap hover; the hover state was not measured).
- **Secondary button:** `#31312f` fill, white text, same size and radius; label "Services".
- **Logo cell:** transparent on `#f5f5f5`, 1px `#0000001a` border, rounded corners.
- **Feature card:** `#e4e4e4` fill, 11.1964px radius, 482px wide by 640px tall in the first measured instance, numbered with a small "1".
- **Round chips:** `#272726` circles (100% radius) holding large 59.7px numerals.
- **Link:** `#333333` Inter 14.003px weight 400.
No nav or footer element was detected by the role finder.

## Motion and Scroll Architecture

The home page's inline stylesheet (opened at https://www.medusmo.com/) shows how the page is paced rather than only how it looks. Smooth scrolling is provided by Lenis (`html.lenis`, `.lenis-smooth`, `.lenis-stopped`). Several sections are sticky scenes driven by invisible trigger lists: a `sphere-move` scene with a trigger list of `min-height: 250vh`, a `home-sticky` parent set to `height: 232vh` at 991px and wider, and `home-steps2_table` and `dark-slider` scenes. The hero component is `position: fixed` and covers the viewport, so later sections scroll over it; this is consistent with the dark `#31312f` first screen in the capture, where the hero media had not painted. A Splide carousel and a Lottie player are also present in the stylesheet. Hover and animation states were not measured (no motion recording was taken).

## Content and Voice

Copy is short, confident and operational. The H1 is "We create expert teams for mass customer service"; the second headline is "Customer service solutions for top management"; a card title reads "Goals achieved, control maintained." The logo wall caption is "Powering the world's best companies". Calls to action are single words ("Consultation", "Services"). A legal line (the mobile body-text role) states that Medusmo and its logo are registered trademarks. Numbers and step counters ("1") are set very large, as plain digits in round chips, which gives the page a diagrammatic, process-chart feel.

## Design System Architecture

No public Medusmo design system exists in the pages opened (https://www.medusmo.com/ exposes no brand or guideline link). The de-facto system is a Webflow variable set in :root: named color variables (`--black`, `--gray-100/200/300/600`, `--dark-1…9`, `--yellow`, `--swatch--*`), a type scale per role (`--title-large--font-size: 2.250rem`, `--heading-medium--font-size: 7.500rem`, `--body-small--line-height: 1.44em`) and a spacing scale (`--space--12px` through `--space--220px`). Class naming and the `webflow-icons` font confirm a Webflow build.

## Do's and Don'ts

- Do set all display type in Doumbar uppercase with negative tracking; use Inter for everything else.
- Do split a headline into `#31312f` and `#c8c8c8` halves for emphasis.
- Do use `#dafb71` only for the primary pill action.
- Do keep surfaces flat; separate by tone and 1px hairlines.
- Don't add drop shadows beyond the single 15px-blur one measured.
- Don't use sharp-cornered buttons; the radius is 149px.
- Don't introduce a second hue: the measured palette is one lime on neutrals.

## Responsive Behavior

Measured at 390px: h1 44px/40.48px weight 500 uppercase with `-1.76px` tracking (desktop 55.98px), the section heading 60px/55.2px (desktop 111.96px), and the primary button rendered as a link with 14px/20.16px weight 500 Inter and 160px radius. Layout changes (column counts, nav) were not measured.

## Iteration Guide

1. Start with `#31312f` hero, white text, Doumbar uppercase 56px, tracking -4%.
2. Switch to `#f5f5f5` for content bands and `#e4e4e4` for cards (11.2px radius).
3. One lime `#dafb71` pill per view.
4. Inter 14px for links, 12px for fine print, 33.6px for card titles.
5. Run `node web/scripts/verify-designs.mjs --slug=medusmo`.
