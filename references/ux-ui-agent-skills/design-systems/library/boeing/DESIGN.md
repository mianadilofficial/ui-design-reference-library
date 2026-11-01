---
version: alpha
name: Boeing
category: "Airlines"
description: "Boeing.com measured on 2026-10-09: white canvas (#ffffff) with deep navy (#0a2240) utility header, cobalt (#0033a1) cards and pill buttons (50px radius, uppercase 16px/500 with 1.3px tracking), and sky-blue (#82d4f6) nav links, all set in the Meso family at weights 300/400/500/700 with a 68px light display headline over full-bleed aerospace photography."
colors:
  canvas: "#ffffff"
  ink: "#0078b8"
  primary: "#0033a1"
  on-primary: "#ffffff"
  navy: "#0a2240"
  surface-dark: "#151b17"
  ink-sky: "#82d4f6"
  accent-cyan: "#009bdf"
  ink-pale: "#bbd8f2"
  text-input-text: "#66737e"
typography:
  display:
    fontFamily: Meso, sans-serif
    fontSize: 68px
    fontWeight: 300
    lineHeight: 78.2px
  display-mobile:
    fontFamily: Meso, sans-serif
    fontSize: 36px
    fontWeight: 300
    lineHeight: 41.4px
  subheading:
    fontFamily: Meso, sans-serif
    fontSize: 43px
    fontWeight: 700
    lineHeight: 49.45px
  body:
    fontFamily: Meso, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28.8px
  button:
    fontFamily: Meso, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 16px
    letterSpacing: 1.3px
    textTransform: uppercase
  nav:
    fontFamily: Meso, sans-serif
    fontSize: 13.008px
    fontWeight: 400
    lineHeight: 20.8128px
  link:
    fontFamily: Meso, sans-serif
    fontSize: 22px
    fontWeight: 400
    lineHeight: 33px
  input:
    fontFamily: Meso, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
rounded:
  xs: 8px
  sm: 10px
  md: 50px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 32px
  s7: 64px
  s8: 80px
  s9: 96px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 8px 16px
    height: 50px
    borderColor: "{colors.canvas}"
    boxShadow: rgba(0, 0, 0, 0.25) 2px 7px 13px 2px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 8px 16px
    height: 50px
    borderColor: "{colors.primary}"
  link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    clipPath: inset(0px round 10px)
  nav:
    backgroundColor: "{colors.navy}"
    textColor: "{colors.ink-sky}"
  nav-link:
    textColor: "{colors.ink-sky}"
    typography: "{typography.nav}"
    rounded: "{rounded.sm}"
    padding: 4px 8px
  text-input:
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    padding: 8px 0px
    height: 54px
  card:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.sm}"
    boxShadow: rgba(0, 0, 0, 0.25) 2px 2px 6px 0px
  footer:
    textColor: "{colors.canvas}"
    padding: 96px 0px
---

## Overview

Boeing's home page (`https://www.boeing.com/`, title "The Boeing Company Official Website", `lang` en-US) is a corporate aerospace site that leads with full-bleed photography and then settles into a white page with deep cobalt content cards. The capture shows a navy utility bar of six underlined links (Safety & Quality, Employees and Retirees, Emergency Information, Investors, Suppliers, Newsroom), a blue gradient main navigation with the Boeing wordmark, seven section links (Commercial, Defense, Space, Services, Safety, Innovation, Company), an outlined "Careers" pill and a search icon. Beneath it a video-style hero shows a helicopter in flight with the light 68px headline "Connect, protect and explore our world and beyond" in white.

Below the hero the page alternates between two surfaces. White bands carry cobalt (`#0033a1`) section headings such as "Recent news" and "Featured products". Those bands hold a swipeable row of cobalt news cards, each with a photo on top and a white 22px title beneath, and a three-by-two grid of product tiles whose photos are darkened by a scrim so a small category label (Commercial, Defense, Space), a bold product name and a "PRODUCT INFO" link remain legible. The voice is declarative and institutional: "Innovating aerospace since 1916" is the measured h2, and the nav and buttons use plain section nouns and uppercase verbs ("VIEW ALL FEATURE STORIES", "VIEW ALL PRESS RELEASES", "PRODUCT INFO").

The measurement pass saw 1,030 visible elements at a 1,280px desktop viewport with a scroll height of 7,237px. Everything is typeset in a single family, Meso, which accounts for all 4,856 measured characters. The personality is confident and engineered: one hue family (navy to cobalt to sky), paddings up to 96px, pill-shaped actions and rounded 10px cards. Photography does the emotional work; color and type stay disciplined.

## Colors

The palette is a single blue family on white. The generated tokens keep every measured value.

- **Canvas `#ffffff`** is the page background of the content bands.
- **Primary cobalt `#0033a1`** is the fill of the primary pill button ("VIEW ALL FEATURE STORIES"), of the news cards, and the color of the h3 section headings ("Recent news"). It is also the text and 1px border color of the secondary outlined button.
- **Navy `#0a2240`** is the header and utility-bar background and the single largest measured background area (weight 3,394, just ahead of cobalt at 3,201).
- **Ink `#0078b8`** is the generated reading color on the white canvas. It appeared in 162 measured characters and is the color of the secondary text inside the cards.
- **Sky `#82d4f6`** colors the utility and nav links (819 characters) and is also the hover color for news-card text.
- **Cyan `#009bdf`** colors the h2 "Innovating aerospace since 1916", and **pale blue `#bbd8f2`** appears in a few characters.
- **Dark surface `#151b17`** is a measured background area of 614 weight; the page footer additionally carries a linear gradient from `rgb(25, 18, 138)` through `rgb(15, 15, 108)`, `rgb(14, 8, 93)`, `rgb(6, 3, 62)` to `rgb(2, 1, 27)` at 225 degrees.
- **Input text `#66737e`** is the measured color of the search field text and its 1px border.
- White (`#ffffff`) is also the dominant text color by character count (3,651 characters) because the hero, the cards and the footer set white type on photography, cobalt and navy.

Semi-transparent black scrims (`#00000040`, `#00000033`, `#0000004d`) cover photography behind tile labels. The Bootstrap variables found in `:root` (`--bs-primary: #0d6efd`, `--bs-success`, `--bs-danger` and similar) are framework defaults, not Boeing colors, and are not used in the tokens.

## Typography

Meso is the only family measured on the page (4,856 of 4,856 characters) and the loaded font faces list Meso at 300, 400, 500 and 700, plus Ubuntu 400, Material Symbols Rounded for icons, and Noto Korean, Japanese, Arabic, Turkish and Hebrew faces declared in the stylesheet. The fallback is the generic `sans-serif`. No public source for Meso, and no license, was found on any page that was opened, so treat it as a proprietary face and see the substitution note below.

| Role | Size / line height | Weight | Notes |
| --- | --- | --- | --- |
| Display (h1) | 68px / 78.2px | 300 | White over the hero photo; 36px / 41.4px at the 390px mobile pass |
| Subheading (h3) | 43px / 49.45px | 700 | Cobalt `#0033a1` section titles |
| Link / card title | 22px / 33px | 400 | White on cobalt cards |
| Body | 18px / 28.8px | 400 | Measured on the lead paragraph |
| Button | 16px / 16px | 500 | Uppercase, 1.3px letter spacing |
| Nav | 13.008px / 20.8128px | 400 | Utility links in sky blue |
| Input | 16px / 28px | 400 | Search field |

The most-read sizes by character are 22px (1,667), 16px (1,432), 18px (676), 28px (403), 20px (144), 13.008px (139), 30px (111) and 68px (109). Weight 400 carries 4,073 characters, 700 carries 520, 500 carries 154 and 300 carries 109, so the light weight is reserved for the display headline. The only measured letter spacing is 1.3px on 16px uppercase button text.

**Font substitutes.** If Meso is unavailable, use a neutral humanist or geometric sans that has real 300, 400, 500 and 700 weights, and keep the light 300 weight for the large headline so the contrast between thin display type and bold section titles survives. The substitute must be checked against the measured sizes and line heights above rather than against the glyph shapes.

## Layout

The page is built on a Bootstrap 5 foundation: `:root` exposes `--bs-breakpoint-lg: 992px`, `--bs-breakpoint-xxl: 1400px` and `--bs-breakpoint-huge: 2260px`, and the compiled sheets are named `clientlib-bootstrap.min.css` and `clientlib-version2.min.css`. The measured desktop viewport is 1,280px wide. Sections run full-bleed; the content-width container was not measured.

The measured padding scale is 4, 6, 8, 12, 16, 32, 64, 80 and 96px (counts: 16px 98 times, 8px 62, 4px 51, 12px 46, 32px 38, 80px 7, 64px 3, 96px once) and the measured gaps are 8px (19 times) and 16px (6 times). The footer measured 96px top and bottom padding. Vertical rhythm is generous: a section title, a card row, a button pair, then a large gap before the next section.

Grids visible in the capture: a horizontally scrolling card carousel with dot pagination and circular arrows, and a three-column product grid on two rows. Card geometry measured at 254px wide by 406px tall for the news cards. Spacing, gaps and card sizes beyond these values were not measured.

## Elevation & Depth

Elevation is mostly photography and scrims rather than layered surfaces. Two shadows dominate the measured frequencies: `rgba(0, 0, 0, 0.25) 2px 2px 6px 0px` on 47 elements (the news cards) and `rgba(0, 0, 0, 0.25) 2px 7px 13px 2px` on 5 elements (the primary button). The stylesheet corpus also contains `0 4px 4px 0 rgba(0,0,0,.25)`, `2px 4px 8px 2px rgba(0,0,0,.25)`, and inset ring shadows of 1px and 2px in white or cobalt (`inset 0 0 0 2px #fff`, `inset 0 0 0 2px #0033a1`). None of these was matched to a specific component in this measurement.

Depth in the hero and product tiles comes from semi-transparent black gradients laid over photos so that white type reads. Hover on a news card was measured: the text changes from `rgb(255, 255, 255)` to `rgb(130, 212, 246)` while the card background stays `rgb(0, 51, 161)` and the box shadow remains `none` on both states. No other hover or focus states were measured.

## Shapes

Radius is a four-step system. Measured radii by frequency: 10px (72 elements), 8px (38), `0 0 10px 10px` (29), 50% (21 elements; the capture shows round dots and arrow buttons), `10px 10px 12px 12px` (12), 50px (7) and `0 10px 10px 0` (6). The tokens expose `xs` 8px, `sm` 10px, `md` 50px and `pill` 9999px.

- Primary and secondary buttons use 50px, which at a 50px height renders as a full pill.
- News cards and the nav-link hit area use 10px.
- Elements measured at 50% radius (21) correspond to the round dots and arrow buttons visible in the capture.
- The search input measured 0px radius and `#66737e` is the only measured border color besides cobalt and white.

Material Symbols Rounded is loaded as the icon font, and the capture shows a circled arrow inside the primary button. The logo is the Boeing wordmark with the swoosh. The mix of pills, 10px cards and circles gives the page a soft, engineered feel against the hard photography.

## Components

**Primary button.** Cobalt `#0033a1` fill, white text, 1px solid white border, 50px radius, `8px 16px` padding, 50px height, Meso 16px/500 uppercase with 1.3px tracking and the `2px 7px 13px 2px` shadow. Measured width 325px for "VIEW ALL FEATURE STORIES". At the 390px mobile pass the same button measured 286 by 50px with the same radius and padding.

**Secondary button.** White fill, cobalt text, 1px solid cobalt border, 50px radius, same type and padding, 50px height, no shadow (measured on "VIEW ALL PRESS RELEASES", 317px wide).

**Navigation.** The header background is navy `#0a2240`; nav links are 13.008px Meso in sky `#82d4f6` with `4px 8px` padding and a 10px radius, measured 26px high. The Careers item in the capture is an outlined pill.

**News card.** Cobalt fill, white 22px/33px title, 10px radius and `2px 2px 6px 0` shadow, 254 by 406px. An image fills the top, and a short white rule sits under the title in the capture.

**Product tile.** A photograph with a dark scrim, a small category label, a bold white product name and a "PRODUCT INFO" link with a chevron. These tiles were not given their own token because only the news-card role was measured.

**Search input.** 16px/28px Meso, text color `#66737e`, `8px 0px` padding, 54px height.

**Footer.** White text on the gradient listed above with 96px vertical padding; the footer begins with "Top Pages" and the list "Commercial Home, Defense Home, Innovation Home".

## Design System Architecture

No public Boeing design system exists. The site's brand page at https://www.boeing.com/company/brand states that the Boeing logo is a registered trademark, that logo standards, "Boeing Brand Guidelines" and a trademark agreement are sent only after an approved written request, and that no public link to the guidelines is provided. That page gives no colors or typeface.

The de-facto system is visible in the shipped code. The homepage HTML references Adobe Experience Manager client libraries under `/etc.clientlibs/theboeingcompany/` (`clientlib-base.min.css`, `clientlib-bootstrap.min.css`, `clientlib-dependencies.min.css`, `clientlib-version2.min.css`) and a component sheet `components/card-carousel/clientlibs/swiper.min.css`. The `:root` custom properties are Bootstrap 5 `--bs-*` variables plus Swiper variables (`--swiper-theme-color: #007aff`) and a site variable `--header-spacer-height`. Components are class-named `card`, `card-body`, `card-img-top`, `card-text-holder`, `card-content-holder`, `card-action-holder` and `card-carousel`. Bootstrap's blue `#0d6efd` and Swiper's `#007aff` are framework defaults and are not Boeing's brand blue; the measured brand blue is `#0033a1`.

## Do's and Don'ts

**Do**
- Set display headlines in Meso 300 at 68px with a 78.2px line height, and pair them with 700-weight section titles in `#0033a1`.
- Use pill buttons (50px radius, 50px height, uppercase 16px/500, 1.3px tracking) for every call to action; fill with cobalt for the main action, outline in cobalt for the secondary.
- Put news and feature content on cobalt cards with a 10px radius and the `2px 2px 6px` shadow.
- Keep navigation in navy `#0a2240` with sky `#82d4f6` links.
- Darken photography with a black scrim wherever white text sits on it.

**Don't**
- Don't use Bootstrap's default `#0d6efd` or Swiper's `#007aff` as a brand color.
- Don't mix a second type family into the interface; every measured character is Meso.
- Don't use sharp-cornered buttons; the measured button radius is 50px.
- Don't reproduce the Boeing logo or wordmark from this document; the brand page restricts its use to approved requestors.
- Don't invent hover or focus styles beyond the measured sky-blue text shift on cards.

## Responsive Behavior

Only one mobile pass was recorded, at a 390px viewport. Measured values: the h1 becomes 36px/41.4px weight 300 (down from 68px/78.2px) and the h2 is also 36px/41.4px; body text stays 18px/28.8px; the primary button keeps its 50px radius, `8px 16px` padding and 50px height and measured 286px wide; the header measured 390px wide and 89px high with navy `#0a2240` background and 11px/500 text whose first labels read "SEARCH" and "MENU". The most-read mobile font sizes by character were 20px (1,814), 18px (820), 16px (762) and 22px (463). Stylesheet breakpoints exposed as variables are 992px (`lg`), 1400px (`xxl`) and 2260px (`huge`). The layout of the card carousel, product grid and footer at mobile width was not measured.

## Iteration Guide

1. Start from tokens: canvas `#ffffff`, primary `#0033a1`, navy `#0a2240`, sky `#82d4f6`, Meso at 300/400/500/700.
2. Build the header first: navy utility strip, blue main bar, outlined Careers pill.
3. Add the hero: full-bleed photo, white 68px/300 headline, then pill buttons.
4. Add white content bands with cobalt 43px/700 section titles, then cobalt cards at 10px radius with the `2px 2px 6px 0 rgba(0,0,0,0.25)` shadow.
5. Check every button against the measured geometry: 50px height, 50px radius, `8px 16px` padding, 16px/500 uppercase with 1.3px tracking.
6. Verify mobile against only the measured values: 36px h1, 18px body, 286px by 50px primary button.
7. When extending, measure the new component first with `node web/scripts/extract-tokens.mjs --slug=boeing--<page> --url=<url> --force --no-motion`; leave anything unmeasured out.
