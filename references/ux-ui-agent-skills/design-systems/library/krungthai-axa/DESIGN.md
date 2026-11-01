---
version: alpha
name: Krungthai-AXA Life
category: "Thai Brands"
description: "Krungthai-AXA Life English homepage: white canvas (#ffffff) with deep navy ink (#2a2e80) and brand blue (#00008f) headings, a coral CTA (#f07662) at 8px radius, DB Helvethaica X 75 Bd display at 52px and DB Helvethaica X 55 body at 22px, line-icon product tiles and warm lifestyle photography."
colors:
  canvas: "#ffffff"
  ink: "#2a2e80"
  primary: "#f07662"
  on-primary: "#ffffff"
  surface: "#00008f"
  surface-2: "#b5d0ee"
  ink-5: "#a3a3a3"
  hairline: "#d7e1ed"
  nav-link-text: "#000000e6"
typography:
  display:
    fontFamily: "\"DB Helvethaica X 75 Bd\", source_sans_probold, sans-serif"
    fontSize: 52px
    fontWeight: 400
    lineHeight: 60px
  display-mobile:
    fontFamily: "\"DB Helvethaica X 75 Bd\", source_sans_probold, sans-serif"
    fontSize: 42px
    fontWeight: 400
    lineHeight: 60px
  heading:
    fontFamily: "\"DB Helvethaica X 55\", source_sans_probold, sans-serif"
    fontSize: 56px
    fontWeight: 400
    lineHeight: 56px
  body:
    fontFamily: "\"DB Helvethaica X 55\", source_sans_probold, sans-serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 22px
  nav:
    fontFamily: "\"DB Helvethaica X 55\", source_sans_probold, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
rounded:
  xs: 5px
  sm: 8px
  md: 100px
spacing:
  s1: 5px
  s2: 8px
  s3: 9.44px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 25px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 0px 25px
    height: 50px
  link:
    textColor: "{colors.surface}"
    typography: "{typography.body}"
    padding: 0px 0px 15px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.surface}"
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
    padding: 5px 0px
  footer:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.surface}"
    borderColor: "{colors.hairline}"
---

# Krungthai-AXA Life — Design System Notes

## Overview
The measured page is the English homepage of Krungthai-AXA Life (https://www.krungthai-axa.co.th/en), a Thai life and health insurer. The page is a long single column of centered sections on a white canvas: a section title in deep blue, a row of six outline-icon tiles separated by thin vertical rules, a quiet text link with an arrow, and then a full-bleed lifestyle photograph with a headline and a coral button. The mood is calm and reassuring rather than promotional; saturation lives in the blue of the type and icons, with coral reserved for the single action on each banner.

During capture the site showed a black-and-white memorial overlay (a framed portrait in a modal with a "Don't show up again the next time" checkbox) above the hero, and a green cookie-preferences button at the lower left. These are temporary site states and are not part of the brand's UI language; the measurement was re-run once with the capture filter reset (the page record notes `siteFilterRemovedForCapture: grayscale(0)`), but the overlay's black scrim still appears in the area-weighted background list (`#000000d9`) and in a 2000px black box-shadow. Those two values are deliberately not carried into the tokens.

The voice is plain and service-oriented. Product tiles read "Life, Accident and Critical Insurance", "Health Insurance and Hospital Income", "Saving for Retirement", "Saving for Legacy", "Online Insurance" and "Plan right for you"; service tiles read "Document Download", "Health Centre Networks", "Claims Procedure", "Online Service", "News" and "Privilege". The hotline "1159" is shown in the header. Banner copy is Thai, with an English page chrome around it, for example the WealthPlus Ready 90/8 banner with the button label "รายละเอียดเพิ่มเติม" ("More details").

## Colors
- **Canvas `#ffffff`** is the page background of the content sections. A second, very pale blue band separates "Customer Services" from the product section in the capture; its exact value was not recorded as a token, so it is described only qualitatively.
- **Ink `#2a2e80`** is the most-read text color by character count after white-on-photo text. It is a muted indigo used for body and descriptive text.
- **Brand blue `#00008f` (`surface`)** is the strongest brand color. It is also Bootstrap's `--bs-primary` and `--bs-blue` on this site's root, i.e. the site overrides the framework default with its own blue. It colors the section headings, the icon strokes, links and the product captions.
- **Primary coral `#f07662`** fills the one measured call-to-action (the banner button, white text `#ffffff` on it). The same value is the site's `--bs-orange`. It also colors the "All Products →" and "All Services →" text links.
- **Soft blue `#b5d0ee` (`surface-2`)** is the footer background in the component data.
- **Hairline `#d7e1ed`** is the border color for dividers; **`#a3a3a3` (`ink-5`)** is the faint gray used for disabled or tertiary text; **`#000000e6` (`nav-link-text`)** is the near-black translucent text of the header links.

Other values in the site's CSS (the `#1890ff` and `#f5f5f5`/`#d9d9d9` family, Bootstrap's `--bs-info`, `--bs-yellow`, `--swiper-theme-color` `#007aff`) are framework or widget defaults and are not brand colors.

## Typography
Two weights of one family carry the site: **"DB Helvethaica X 75 Bd"** for display and **"DB Helvethaica X 55"** for text, both with `source_sans_probold` and generic sans-serif as fallbacks. The loaded-font list also includes Publico Black (900, used for a small amount of English display text such as the banner product name), and UbuntuMed/UbuntuBold. Sizes by character count are 22px (the clear majority), 26px, 32px, 56px, 52px, 20px and 42px.

- `display`: 52px / 60px, weight 400 in the bold-cut family (this is the section title "Interesting insurance").
- `display-mobile`: 42px / 60px, measured at a 390px viewport.
- `heading`: 56px / 56px in the regular-cut family (the banner headline "Complete care").
- `body`: 22px / 22px — Thai-script-oriented fonts are set larger than Latin text is.
- `nav`: 20px / 30px for the header links.

Font substitutes: DB Helvethaica X is a commercial Thai/Latin family; when it is unavailable use a Thai-capable humanist sans such as Sarabun or Noto Sans Thai and keep the same sizes.

## Layout
The measured document width is 1280px and the page height 5396px. Content sections are centered, with six equal-width icon tiles in a row and slim vertical separators in `hairline`-style gray between them. The generated spacing scale is 5, 8, 9.44, 10, 12, 16, 20, 24, 25 and 30px; padding values measured most frequently are 12px, 5px, 20px, 30px and 10px. Sections are separated by generous vertical white space rather than borders, and banner sections run edge to edge with text anchored to the left third over the photograph.

## Elevation & Depth
Depth is minimal. Measured shadows are `rgba(0, 0, 0, 0.2) 0px 4px 8px 0px` (a light card/menu lift) and `rgba(0, 0, 0, 0.16) -6px 0px 8px 0px` (a shadow cast to the left, belonging to the right-edge "Menu" tab). The 2000px black spread shadow belongs to the memorial overlay and is not a design token. Hierarchy comes from color blocks, full-bleed photography and a thin coral rule, not from stacked elevations.

## Shapes
Three radii are measured: `xs` 5px, `sm` 8px and `md` 100px (fully rounded). The primary button uses `sm` 8px, so it reads as a softly squared rectangle, not a pill. The 100px radius is applied to small round elements. Icons are single-weight outline drawings in brand blue with no fill.

## Components
- **button-primary**: coral `#f07662` fill, white text, 22px body type, 8px radius, `0px 25px` padding and a 50px height. It appears on the photographic banner with the Thai label "รายละเอียดเพิ่มเติม".
- **link**: brand-blue text in body type with `0px 0px 15px` padding; the "All Products" and "All Services" links are coral with a right arrow.
- **nav**: white background, brand-blue text; **nav-link**: 20px/30px, `#000000e6`, `5px 0px` padding. The header holds the Krungthai and AXA logo pair, "All Insurance Plan", "Customer Service", "Contact Us", "Distributor", a "Buy Online Insurance" item, the 1159 hotline, a Thai/English toggle and a search icon.
- **footer**: `#b5d0ee` background with brand-blue text and a `#d7e1ed` border.
- **Product/service tile**: outline icon above a two-line caption, no card chrome.

## Design System Architecture
No public design system or brand-guideline page was found in the pages opened (the homepage lists only products, services and app links). The de-facto system is Bootstrap 5 (its `--bs-*` custom properties are on `:root`), re-themed: `--bs-primary` and `--bs-blue` are `#00008f`, and `--bs-orange` is `#f07662`, while most other Bootstrap color variables remain defaults. Swiper is used for carousels (`--swiper-navigation-size` 44px). An Ant Design-style color set (`#1890ff`, `#d9d9d9`) also appears in the CSS corpus, suggesting a second library for some widgets; this is an observation about shipped CSS, not documentation.

## Do's and Don'ts
- Do use `#00008f` for headings and icons and reserve `#f07662` for the one primary action in a block.
- Do pair a 52px bold-cut display title with 22px regular body text.
- Do keep icons outline-only and in a single blue.
- Don't use Bootstrap's default blue, yellow or cyan as brand colors.
- Don't add shadows beyond the two light ones measured.
- Don't treat the memorial overlay, cookie button or side "Menu" tab as brand components.

## Responsive Behavior
A mobile measurement at 390px shows the display title reduced from 52px to 42px while keeping the 60px line height. A "Menu" tab sits on the right edge in the desktop capture. Wrapping of the six-up tile rows on narrow screens was not measured.

## Iteration Guide
1. Start from white, then set headings in `#00008f` and text in `#2a2e80`.
2. Add exactly one coral `#f07662` button (8px radius, 50px high, 25px side padding) per banner.
3. Use hairline-separated icon rows for navigation to products and services.
4. Use full-bleed, warm lifestyle photography with the headline at left.
5. Verify Thai text at 22px before changing any size, and re-measure if the memorial state is removed, since the site's background mix will change.
