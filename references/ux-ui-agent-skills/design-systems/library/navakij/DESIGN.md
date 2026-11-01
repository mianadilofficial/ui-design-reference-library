---
version: alpha
name: The Navakij Insurance Public Company Limited
category: "Thai Brands"
description: "The Navakij Insurance homepage: navy ink (#223d66) on white, teal-blue (#1694ae) buttons at 10px radius with white text, TradeGothic with the Thai face supermarket as fallback, a charcoal footer band (#1e1e1e), light gray panels (#ebebeb), family photography with a blue duotone wash and a 28px section heading."
colors:
  canvas: "#ffffff"
  page-largest: "#223d66"
  ink: "#223d66"
  primary: "#1694ae"
  on-primary: "#ffffff"
  surface-2: "#1e1e1e"
  surface-3: "#ebebeb"
  ink-3: "#aaaaaa"
  ink-4: "#212529"
  text-input-text: "#000000"
  card-bg: "#224366e6"
typography:
  display:
    fontFamily: TradeGothic, supermarket, helvetica, sans-serif
    fontSize: 28px
    fontWeight: 400
    lineHeight: 28px
  body:
    fontFamily: TradeGothic, supermarket, helvetica, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 20px
  display-mobile:
    fontFamily: TradeGothic, supermarket, helvetica, sans-serif
    fontSize: 28.56px
    fontWeight: 400
    lineHeight: 28.56px
  subheading:
    fontFamily: TradeGothic, supermarket, helvetica, sans-serif
    fontSize: 28px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: TradeGothic, supermarket, helvetica, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
  nav:
    fontFamily: TradeGothic, supermarket, helvetica, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 5px
  sm: 10px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 8px
  s5: 9px
  s6: 10px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 8px 32px
    height: 34px
    borderColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 8px 32px
    height: 34px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.page-largest}"
    typography: "{typography.display}"
    padding: 0px 4px
  nav:
    textColor: "{colors.page-largest}"
    padding: 32px 16px 8px
  nav-link:
    typography: "{typography.nav}"
    padding: 8px 16px
  text-input:
    textColor: "{colors.text-input-text}"
    typography: "{typography.button}"
    height: 19px
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.sm}"
    padding: 16px
    transform: matrix(1, 0, 0, 1, 0, 0)
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.canvas}"
    padding: 16px 0px 0px
---

# The Navakij Insurance Public Company Limited — Design System Notes

## Overview
Measured URL: https://www.navakij.co.th/ (page title "The Navakij Insurance Public Company Limited"). Navakij is a Thai non-life insurer; the site is organized around Motor, Miscellaneous, Marine and Property insurance, service pages (claims, alerts, service centres), company information, news, articles, sustainability and investor relations, and a careers form. The homepage opens with a motor-insurance promotion banner (a large "0%" instalment offer set against a dark blue hero), a mission statement, four product-category cards with "อ่านเพิ่มเติม" (Read more) links, service tiles, a news feed with three thumbnail articles and a footer with the hotline 1748.

Important capture caveat: the capture contains a flood-claim promotional pop-up (two QR codes, the label "คลิก") with a darkening scrim, and the page record lists a removed consent overlay. The extractor was re-run once with `--force`; the grayscale filter was cleared (`grayscale(0.7)` is recorded as removed) but the pop-up scrim still dims the hero in the capture. The pop-up, the close/search icon square at the top right and the cookie-consent panel are temporary UI and are not brand components. Because of the scrim, area-weighted colors are less reliable for the hero than for the lower sections.

The visual language, as far as the measurement shows, is a corporate navy-and-teal palette with a technical sans for headings, warm family photography washed in blue, and generous empty bands before content loads. The logo is a white water-drop mark with the Thai wordmark "นวกิจ ประกันภัย".

## Colors
- **Canvas `#ffffff`**: content sections. A light gray `#ebebeb` (`surface-3`) is used for alternating panels (964 area-weight units in the measurement).
- **Ink / navy `#223d66`**: headings, body links and the largest filled blocks (area-weight 1583, the biggest in the list). It is used for the nav text, the footer band and the section background that appears as a solid blue block in the capture. The tokens `ink` and `page-largest` share this value.
- **Primary teal `#1694ae`**: the fill of every measured call-to-action ("ดูรายละเอียด" and the repeated "อ่านเพิ่มเติม" buttons), with white `#ffffff` text and a border in the same teal.
- **Charcoal `#1e1e1e` (`surface-2`)**: dark blocks (area-weight 1024), including the hero base and the bottom bar.
- **`card-bg` `#224366e6`**: a translucent navy fill for cards laid over photographs (alpha `e6`, about 90%).
- **Gray text `#aaaaaa`** (`ink-3`) is used for tertiary text on dark; **`#212529`** (`ink-4`) is the Bootstrap body color and appears on five characters only. **`#000000`** is the input text color.

The header link color measured as `#007bff` is Bootstrap 4's default `--primary`/`--blue` (declared on the site's `:root`), so it is a framework default, not a brand color, and it has been dropped from the tokens.

## Typography
All 1658 measured characters use one family: **TradeGothic** (with a bold file also loaded), with **supermarket** as the Thai-script face, then `helvetica` and generic sans-serif. Icons come from Font Awesome 5 Free/Brands and an `icomoon` font, and `slick` is the carousel font.

Measured sizes by character count are 12px (most frequent), 16px, 26.672px, 15px, 21.28px, 14px and 28px. The extractor picked an h1 of 12px/20px (a small sustainability line in navy), which is not a real page title; the role was overridden to the largest real section heading, the 28px/28px "ข่าวสารและกิจกรรม" (News and activities), so `display` carries 28px. The mobile measurement at 390px records the display at 28.56px.

- `display`: 28px / 28px, TradeGothic.
- `body`: 12px / 20px (measured on the footer copyright text, the extractor's body role; the rest of the page also uses 16px and 15px text).
- `subheading`: 28px / 28px (same measured heading).
- `button`: 16px / 16px, used on buttons and text inputs.
- `nav`: 20px / 20px.

Font substitutes: TradeGothic is a commercial Trade Gothic-style face; use Barlow or Oswald-like condensed sans for Latin and Sarabun for Thai if it is unavailable.

## Layout
The page is 1280px wide and 4342px tall at desktop. A narrow utility strip on top holds secondary links, a search field and a TH / EN switch; below it is the logo and primary navigation, then a full-width carousel (slick) with arrow controls. Content blocks alternate between full-bleed photographic bands and white sections. The spacing steps in the data are 2, 4, 5, 8, 9, 10, 15, 16, 20 and 32px. Navigation items use `8px 16px` padding and the nav container `32px 16px 8px`; buttons use `8px 32px`.

## Elevation & Depth
No box-shadows were measured on the page (the shadow list is empty). Depth is created by color blocks, translucent navy cards over images and blue-tinted photography. Do not add drop shadows.

## Shapes
Radii measured: 10px (19 occurrences, the main one), 5px and 50% (circles for icon buttons and arrows). The generated scale lists `xs` 5px, `sm` 10px and `pill` 9999px. The primary button uses `sm`, 10px, so buttons are rounded rectangles, not pills; the cards also use 10px.

## Components
- **button-primary**: teal `#1694ae` fill and border, white text, 16px type, 10px radius, `8px 32px` padding, 34px high. `button-secondary` has the same measured values on this page.
- **card**: translucent navy `#224366e6`, white text, 10px radius and 16px padding, used over imagery.
- **nav / nav-link**: navy text with 20px type and `8px 16px` link padding.
- **text-input**: black `#000000` text, 16px type, 19px tall (the search field in the utility strip).
- **footer**: navy `#223d66` with white text and `16px 0px 0px` padding.
- **link**: navy, 4px horizontal padding.

## Design System Architecture
No public design system or brand-guidelines page was found: the homepage links were navigation, news, careers and the e-policy download only, so no search was made. The shipped CSS is Bootstrap 4 (`--breakpoint-sm` 576px, `--breakpoint-md` 768px, `--breakpoint-lg` 992px, `--breakpoint-xl` 1200px and the default `--primary` `#007bff`) with site-specific overrides in class styles rather than in custom properties. Brand colors are therefore hard-coded in component CSS; this was inferred from the measured data and not from documentation.

## Do's and Don'ts
- Do use navy `#223d66` for headings and large color fields and teal `#1694ae` only for actions.
- Do keep buttons at 10px radius with 32px side padding.
- Do use family and lifestyle photography with a blue wash.
- Don't use Bootstrap's `#007bff` as a brand blue.
- Don't introduce shadows; the site has none.
- Don't copy the flood-claim pop-up, cookie panel or the top-right close/search buttons into brand UI.

## Responsive Behavior
Bootstrap breakpoints at 576, 768, 992 and 1200px are declared. At 390px the display type measures 28.56px. The multi-column product and news rows are expected to stack, but the stacking itself was not separately measured; only the type size and the breakpoint variables are recorded.

## Iteration Guide
1. Set the page on white with navy `#223d66` ink.
2. Use `#1694ae` buttons: 16px TradeGothic, 10px radius, 34px height.
3. Reserve charcoal `#1e1e1e` and navy for hero and footer bands.
4. Re-capture with the pop-up dismissed to confirm the hero and body sizes, since the 12px body size here may be partly footer text.

## Notes on measurement confidence
The measurement for this brand is partial and should be read with care. Three facts shape how the tokens should be used. First, the capture was taken with a promotional pop-up open, so the hero banner and the first product area are dimmed in the image; colors that appear only inside the banner (for example the glossy blue "0%" artwork) were not measured and are not tokens. Second, the extractor's body role landed on the footer copyright line ("Copyright 2016 © The Navakij Insurance Public Company Limited"), which is white on navy at 12px; larger running text on the page is set at 16px and 15px, and the 26.672px and 21.28px sizes (the second and fourth most common by character count after 12px and 16px) are measured sizes whose roles were not isolated. Third, only the homepage was measured, so no claim is made about inner pages such as claims, branch search or the job form, beyond the fact that their navigation entries exist on the homepage.
