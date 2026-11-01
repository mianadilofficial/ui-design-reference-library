---
version: alpha
name: Oimachi
category: "Portfolio"
description: "Copenhagen branding, Webflow and AI-visibility studio site (oimachi.co): light grey canvas #f0f0f0, pure black #000000 headlines and primary buttons, Aeonik at weight 300 with tight negative tracking, an italic Feature Deck accent, and small 3.17px to 5.86px radii with one 79.17px pill. No shadows or borders."
colors:
  canvas: "#f0f0f0"
  page-largest: "#f0f0f0"
  ink: "#000000"
  ink-muted: "#696764"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-panel: "#dfdfdf"
  ink-subtle: "#868481"
typography:
  display:
    fontFamily: Aeonik, Arial, sans-serif
    fontSize: 51.4589px
    fontWeight: 300
    lineHeight: 56.6048px
    letterSpacing: "-1.54377px"
  display-mobile:
    fontFamily: Aeonik, Arial, sans-serif
    fontSize: 36.1036px
    fontWeight: 300
    lineHeight: 39.7139px
    letterSpacing: "-1.08311px"
  heading:
    fontFamily: Aeonik, Arial, sans-serif
    fontSize: 33.6462px
    fontWeight: 300
    lineHeight: 35.3285px
    letterSpacing: "-1.00939px"
  subheading:
    fontFamily: Aeonik, Arial, sans-serif
    fontSize: 11.8751px
    fontWeight: 300
    lineHeight: 11.8751px
  button:
    fontFamily: Aeonik, Arial, sans-serif
    fontSize: 11.8751px
    fontWeight: 500
    lineHeight: 16.6252px
    letterSpacing: "-0.178127px"
  link:
    fontFamily: Aeonik, Arial, sans-serif
    fontSize: 13.8543px
    fontWeight: 500
    lineHeight: 15.2398px
rounded:
  xs: 3.17px
  sm: 4.75px
  md: 5px
  lg: 5.86px
  xl: 79.17px
  cta: 3.17px
spacing:
  s1: 0.4px
  s2: 1.58px
  s3: 2.85px
  s4: 3.17px
  s5: 3.96px
  s6: 4.75px
  s7: 6.33px
  s8: 7.92px
  s9: 9.5px
  s10: 10px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 9.5001px 15.8335px
    height: 36px
  button-secondary:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 9.5001px 15.8335px
    height: 36px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
    padding: 6.3334px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.sm}"
---

## Overview

Oimachi describes itself, in the page title and H1, as "Design, AI & Webflow Excellence Studio" and "Branding, Website & AI Visibility. Innovation Studio." It is a Copenhagen studio of two founders, Casper Nielsen and Daniel Bech, a Webflow Partner that calls itself "Small by choice and entrepreneurial by heart" (opened at https://www.oimachi.co/). The home page is a studio portfolio: a large two-line headline whose second line mixes upright and italic type ("Innovation Studio" with an italic word), a hero tile reading "Wealth management. Made effortless." for the client Evooq, a column of studio news (About Oimachi, "Oimachi is now a B-maerket certified agency") and a client list with Evooq, Danelec, Bequant, Anthill and Veo in rows of three project images.

The overall feel is a quiet grey gallery. A light grey canvas (`#f0f0f0`) holds black light-weight Aeonik type and full-bleed project imagery that carries all the saturated color: orange Danelec, purple Anthill, green Veo. The interface itself uses almost nothing except black, white and two warm greys. Copy is concise and collaborative, with phrases like "Partnering with ambitious teams to build relevant digital experiences in the age of prompting." Services named in the navigation are Webflow Development, Branding & Design (including Brand Guidelines) and AI & Conversion (GEO and AEO).

## Colors

- **Canvas `#f0f0f0`**: page background and largest background area (2592 area units). A darker neutral **`#dfdfdf`** (815 units) is the secondary panel surface.
- **Primary `#000000`**: the fill of the main button ("Book a meeting"), the headline color and link color. **On-primary `#ffffff`**: text on the black button and the fill of the secondary button (with black text) as well as the white pill navigation items.
- **Ink `#000000`** is used for headlines and body text in the extraction roles; **ink-muted `#696764`** is the most-read text color by characters (1913 against 1572 for black) and is used for secondary descriptions; **ink-subtle `#868481`** (59 characters) is the lightest text tone and is also the root variable `--neutral-60`.
- Root variables include `--_theme---nav--background-hover: #f7f7f7`, and the Webflow variable naming uses neutral and system color scales; the extractor listed deleted variables too, which are not used as tokens.

Client imagery colors (orange, purple, green) are content, not interface tokens. The palette therefore reads as a strict neutral ramp: white, `#f0f0f0`, `#dfdfdf`, `#868481`, `#696764` and black, with warm undertones in the two mid greys, and there is no chromatic accent in the interface layer at all.

## Typography

One sans family, **Aeonik** (weights 300, 400, 500), carries 3581 characters; a secondary **Feature Deck** italic (400) appears for 19 characters, which is the italic accent word in headlines ("ambitious", "Innovation"). The fallback stack is Arial, sans-serif.

- **Display (H1):** 51.4589px, weight 300, line-height 56.6048px, letter spacing -1.54377px.
- **Heading (H2):** 33.6462px, weight 300, line-height 35.3285px, letter spacing -1.00939px. The mobile H2 is 21.6621px at weight 500.
- **Subheading and body:** 11.8751px, weight 300; body paragraphs have a 13.0626px line-height. The most common size by characters is 11.8751px (2547), then 13.8543px (812).
- **Button:** 11.8751px, weight 500, line-height 16.6252px, letter spacing -0.178127px.
- **Link:** 13.8543px, weight 500, line-height 15.2398px.
- **Mobile display:** 36.1036px, weight 300, line-height 39.7139px, letter spacing -1.08311px.

Letter spacing is consistently negative, roughly -3 percent on large sizes (for example -1.54377px at 51.4589px), and -0.118751px on small text at 11.8751px. Sizes are fractional because the site scales with the viewport.

## Layout

The page is 6683px tall at 1280px wide. The top is a thin pill navigation (Work, Services, Posts, Products, About, Contact plus a theme toggle) on the left over a two-line display headline, then a split: a large hero tile on the left and a column of news cards on the right. Lower sections use a three-column image row beside a text column holding the client logo tile, name and sector label (Fintech, Maritime, Networks, Pharma, Sports Tech). Gaps are small and dense: 7.91675px (114 occurrences), 4.75005px (66), 6.3334px (58), 3.1667px (28), with larger gaps of 23.7503px and 63.334px. Padding occurrences include 7.91675px (48), 4.75005px (17), 6.3334px (15) and 158.335px (3).

## Elevation & Depth

No box shadows and no border colors were measured (both lists are empty). Separation comes from tone: `#f0f0f0` canvas, `#dfdfdf` panels, white pills and the black button. The page also uses fine horizontal rules between client rows in the capture, but no border value was recorded, so none is declared.

## Shapes

Radii measured: 4.75005px (97 elements, the most common, including links and cards), 3.1667px (42, buttons and nav pills), 5.8584px (5), 5px (2) and 79.1675px (1, a fully rounded element). The button radius is 3.1667px. Thumbnails and tiles in the capture are rounded at the small radii. There is one pill-like element, so pills are an exception.

## Components

- **Button primary:** black fill `#000000`, white text, Aeonik 11.8751px weight 500, radius 3.1667px, padding 9.5001px 15.8335px, height 36px ("Book a meeting").
- **Button secondary:** white fill, black text, same type, radius and padding as primary (the "About" pill).
- **Link:** black, Aeonik 13.8543px weight 500, radius 4.75005px, padding 6.3334px.
- **Card:** `#f0f0f0` background, black text, radius 4.75005px; project and news cards sit directly on the canvas.
- **Hover:** the Services navigation item has a white background and 3.1667px radius before hover (24px tall); on hover its background changes from white to `#dfdfdf` (the panel grey), while text stays black, radius stays 3.1667px and no shadow appears. This is the only hover behaviour recorded.
- A "Webflow Partner" badge sits at the bottom of the hero area.

## Design System Architecture

The site is built in Webflow. The Webflow variable names exposed as root custom properties (for example `--neutral-60: #868481`, `--_theme---nav--background-hover: #f7f7f7`, `--_responsive---h4: 1.25rem`, `--_responsive---h6: 1rem` and `--_text-style---font-weight: 300`) show a variable layer for neutral colors, theme-level navigation colors and responsive heading sizes. The studio sells brand guidelines (https://www.oimachi.co/services/brand-guidelines) and a "Scalable Component Build" service (https://www.oimachi.co/services/scalable-component-build), and lists FlowGuide, a component-based brand guide template for Webflow. No public brand guidelines or design-system documentation for Oimachi's own site is linked from the home page.

## Do's and Don'ts

- Do use black on `#f0f0f0` with Aeonik at weight 300 for headlines and negative letter spacing.
- Do keep buttons small: 36px high, 3.1667px radius, 11.8751px label at weight 500.
- Do let imagery carry saturated color.
- Do use `#696764` for secondary descriptions and `#868481` for the lightest labels.
- Don't add shadows or visible borders; none were measured.
- Don't round buttons into pills; the one 79.1675px radius is an exception.
- Don't use the deleted Webflow variables in the root list as brand tokens.

## Responsive Behavior

Measured at 390px: H1 is 36.1036px weight 300 (line-height 39.7139px, letter spacing -1.08311px), H2 is 21.6621px weight 500, body is 10.8311px with a 11.9142px line-height, and the primary button reads "Book a call" at 12.9973px with radius 2.88828px and padding 8.66485px 17.3297px. The mobile text size distribution is 10.8311px (1854 characters), 12.6362px (547), 14.4414px (163) and 28.8828px (125). Navigation presence on mobile was not detected by the extractor. Breakpoint values and tablet widths were not measured.

## Iteration Guide

1. Start with the canvas `#f0f0f0`, black ink and Aeonik 300.
2. Scale headlines with letter spacing near -3 percent of size, following the measured -1.54377px at 51.4589px.
3. Keep controls at 36px height and 3.1667px radius; use black for the main action and white for secondary.
4. Reserve the Feature Deck italic for a single emphasized word per headline.
5. Record any new measurement in SOURCES.json before adding a token.
