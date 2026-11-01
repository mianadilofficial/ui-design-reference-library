---
version: alpha
name: Thai President Foods Plc (mama.co.th corporate site)
category: "Thai Brands"
description: "Corporate site of Thai President Foods, maker of MAMA noodles - warm orange #ff7e00 buttons and headings on a #f5f5f5 canvas with white #ffffff cards at 16px radius, set in the Prompt family (promptregular, promptlight, promptmedium) with Roboto and arial/tahoma fallbacks, 6px button corners and a fixed 1180px content column."
colors:
  canvas: "#f5f5f5"
  page-largest: "#ffffff"
  ink: "#666666"
  primary: "#ff7e00"
  on-primary: "#ffffff"
  surface-2: "#cccccc"
  ink-2: "#555555"
  ink-4: "#808080"
  ink-5: "#585858"
  ink-6: "#1f680e"
  hairline: "#d7dee2"
  text-input-bg: "#fafafa"
typography:
  display:
    fontFamily: promptregular
    fontSize: 22px
    fontWeight: 400
    lineHeight: 26px
  heading:
    fontFamily: promptregular
    fontSize: 22px
    fontWeight: 400
    lineHeight: 26px
  subheading:
    fontFamily: promptregular
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16px
    textTransform: uppercase
  body:
    fontFamily: promptlight
    fontSize: 15px
    fontWeight: 400
    lineHeight: 20px
  button:
    fontFamily: promptregular
    fontSize: 16px
    fontWeight: 400
    lineHeight: 29px
  input:
    fontFamily: arial
    fontSize: 14px
    fontWeight: 400
    lineHeight: 29px
rounded:
  xs: 6px
  sm: 8px
  md: 10px
  lg: 16px
  xl: 20px
  2xl: 30px
  pill: 9999px
spacing:
  s1: 1px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 9px
  s6: 10px
  s7: 12px
  s8: 15px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 5px 15px
    height: 39px
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 8px 0px
    height: 47px
    borderColor: "{colors.surface-2}"
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    padding: 25px
---

## Overview

This file describes the corporate website of Thai President Foods Public Company Limited, the company behind MAMA instant noodles. The queued entry was the MAMA address `https://www.mama.co.th/`, but that root URL is only a language and memorial splash page: a black-and-white tribute portrait, two orange buttons labelled "เข้าสู่เว็บไซต์" and "Enter Site", and a cookie notice. A splash page is not the brand's design, so the real English home page, `https://www.mama.co.th/en/index.php`, was re-measured and this document is named after that measured site (page title "Thai President Foods Plc"). The site is the parent and operator site; consumer MAMA properties such as mamalover.net are linked from it but were not measured.

The look is a plain corporate Thai website with a warm accent. A pale grey canvas (`#f5f5f5`) carries white (`#ffffff`) rounded cards, orange (`#ff7e00`) headings and buttons, and soft grey body text (`#666666`, with `#555555` as the page-level text color). A deep green (`#1f680e`) is used for small uppercase section labels such as "BACKGROUND". The first screen is a full-viewport slider whose slides are image-led, with a white text card laid over the picture. The photographic carousel, the orange-on-white headline and the compact 6px button corners make the site feel friendly and food-industry rather than editorial or technical.

Capture note: the stored capture still shows a tribute popup with a dark scrim above the page. That popup and its scrim, and the cookie notice, are not brand UI and none of their colors (including the scrim black and its translucent blacks) are used as tokens here. The black `#000000` surface in the generated tokens was dropped for that reason.

## Colors

All hex values below are measured from the live page (web/data/extracted/mama.json) and the page's own inline CSS.

- **Canvas `#f5f5f5`** is the body background (the page's own CSS sets `background: #f5f5f5`). It is the widest surface and reads as a very light grey.
- **Page-largest / card white `#ffffff`** is the surface of content cards and the text color on orange buttons.
- **Primary `#ff7e00`** is the single brand action and accent color: button fill, `h2` headline color (22px section titles), and the hover color for links (`a:hover { color: #ff7e00 }` in the page CSS). The same value was measured on the "Sitemap" button in the mobile pass.
- **Ink `#666666`** is the paragraph color of body text; **ink-2 `#555555`** is the base body and link color; **ink-5 `#585858`** is used on banner paragraphs; **ink-4 `#808080`** is a lighter grey text value.
- **Ink-6 `#1f680e`** is a dark green used for the uppercase `h3` labels.
- **Surface-2 `#cccccc`** is the input border color; **hairline `#d7dee2`** is a measured border color; **text-input-bg `#fafafa`** is the fill of text fields.

The measured page CSS also sets a dark brown (`#5b2b05`) on the second line of banner headlines; it was measured as a child color of an orange `h2` but is not promoted to a token. The hover state of the primary button was not re-measured on the home page (the measured hover list is empty), so no hover color is documented.

## Typography

The page loads local `@font-face` files from `font-face/style.min.css` named `promptlight`, `promptregular` and `promptmedium`, all weight 400 in the CSS (the weight is encoded in the family name, not in `font-weight`), plus Roboto 400 and 700 and FontAwesome for icons. The head also links Prompt (weights 300, 400, 500, 700, Thai subset) from Google Fonts. The base page font is declared as `arial, tahoma`, which is also what the form controls use.

- **Display / heading (`promptregular`, 22px, line-height 26px)**: the orange section headline. The page's own `h1` is hidden (empty text, `arial, tahoma` 30px) so the visible headline level is the `h2`.
- **Subheading (`promptregular`, 14px, 16px line-height, uppercase)**: the green section labels.
- **Body (`promptlight`, 15px, 20px line-height)**: paragraphs. In the white banner card the CSS sets 17px with 22px line height.
- **Button (`promptregular`, 16px, 29px line-height)**.
- **Input (`arial`, 14px)**.

Thai and English use the same Prompt family, so the Thai and English home pages share one typographic voice. The Prompt files are served by the site itself; no proprietary face is involved, so no font substitution is needed. If `promptlight` and `promptregular` are unavailable, the Google Fonts Prompt family linked in the page head is the same design.

## Layout

The content column is a fixed `width: 1180px; margin: 0 auto` block (the page's `.content` class), inside a full-width wrapper. The header is `position: fixed` at the top, with a semi-transparent white background (`rgba(255, 255, 255, 0.6)`), a 1px bottom border and 12px vertical padding. The first section is a Slider Pro slider configured at `100vw` by `100vh` with fade transitions, no autoplay, bullets enabled and arrows off; the home page measured 1280px wide and 8965px tall on desktop.

The measured band structure shows a full-bleed media band first, followed by content bands; the measured maximum card columns is 4. The spacing scale in the tokens (1px, 5px, 6px, 8px, 9px, 10px, 12px, 15px, 16px, 20px) comes from measured paddings and gaps. Cards carry 25px padding. The banner card measured in the CSS is 520px wide and 320px tall. The desktop pass counted three visible header links.

## Elevation & Depth

The extraction recorded no box shadows on the real home page: the box-shadow frequency list is empty. Depth comes instead from tonal layering: white (`#ffffff`) cards on a `#f5f5f5` canvas, a translucent white sticky header, and photography behind the text card in the slider. The header's 1px bottom border and the input's `#cccccc` border are the only line work measured. No shadow tokens are declared. The earlier shadow values seen in the first extraction belonged to the memorial splash/cookie panel and are not brand tokens.

## Shapes

Radius is a family of mostly-small curves. The measured border radius frequencies were `100%` (55 elements, circular items such as bullets and avatars), `6px` (46 elements, buttons and fields), `16px` (4 elements, cards), `50%` (4), `20px` (2), `30px`, `10px` and `8px` once each, plus a split-corner `6px 0px 0px 6px` and `0px 6px 6px 0px` pair used for joined controls. The tokens map these to `xs 6px`, `sm 8px`, `md 10px`, `lg 16px`, `xl 20px`, `2xl 30px` and `pill 9999px`. Buttons use `6px` (rounded.xs); the banner text card uses `16px` (rounded.lg).

## Components

- **Primary button**: fill `#ff7e00`, white text, `promptregular` 16px, corner radius 6px, padding `5px 15px`, height 39px. The same orange 6px button style appears as the larger 18px "Sitemap" link button in the mobile pass.
- **Text input**: `#fafafa` fill, `#666666` text, `arial` 14px, 47px tall, vertical padding 8px, `#cccccc` border color.
- **Card / banner box**: white `#ffffff`, 16px radius, 25px padding, `promptlight` text in `#666666`, with an orange `h2` headline inside.
- **Header**: fixed, translucent white bar with three visible links on desktop.
- **Slider**: full-viewport fade slider with bullet pagination and no arrows.
- **Section label**: uppercase 14px green (`#1f680e`) `h3`.

The footer navigation lists company, investor-relations, career and "MAMA LOVER / MAMA GLOBAL / MAMA TVC" links, with the credit line "Copyrights 2017 Thai President Foods Public Company Limited ... Web Design by 1001Click".

## Design System Architecture

No public design system, token package or brand-guideline page is published by the site: the pages opened (`/`, `/en/index.php`, `/en/about`) link to no such resource, and the page declares no CSS custom properties (the root-variable list is empty). The de-facto system is ordinary hand-written site CSS: inline rules in the page head plus `css/mama.css`, `css/footer.min.css` and `css/responsive.css`, layered on third-party widgets (animate.css, Font Awesome, fancybox, FlexSlider, fullPage.js, Owl Carousel, Slider Pro) loaded from the site's own `js/` and `css/` folders. Class names are descriptive and page-specific, for example `.box-bg-w`, `.txtbanner-1`, `.txtbanner-2`, `.txt-banner-p` and `.content`. The footer credits the web agency 1001Click as builder. Colors are hard-coded hex values rather than variables.

## Do's and Don'ts

Do:
- Use `#ff7e00` for the one primary action and for `h2` headlines, with white text on it.
- Keep cards white (`#ffffff`) on the `#f5f5f5` canvas with a 16px radius and 25px padding.
- Set Thai and English text in the Prompt family; use `promptlight` for paragraphs.
- Keep the 1180px content column and the 6px button corner.

Don't:
- Don't use the memorial splash, tribute scrim, its blacks, or the cookie notice as brand tokens.
- Don't add shadows: none were measured on the home page.
- Don't use a second accent color for buttons; green `#1f680e` is only for small uppercase labels.
- Don't treat the hidden `arial, tahoma` 30px `h1` as the headline style.

## Responsive Behavior

Only what the mobile pass recorded is stated here. In the mobile pass the page reported one visible header link (desktop reported three), no visible menu toggle, and a maximum of 4 card columns. The mobile `h2` was measured as uppercase "ABOUT US" at 25px with a 30px line-height in `promptregular`, and the orange "Sitemap" link button measured 18px with a 6px radius. Breakpoint widths, mobile paddings, the mobile menu pattern, and image behavior are not measured. The site ships a `css/responsive.css` file, but its contents were not read, so nothing is claimed about it.

## Iteration Guide

1. Start from the tokens in the frontmatter; every value is measured on `https://www.mama.co.th/en/index.php`.
2. Build the canvas as `#f5f5f5`, put white 16px-radius cards on it, and set headings in orange `promptregular` 22px.
3. Add orange `#ff7e00` buttons with white `promptregular` 16px text, 6px radius and `5px 15px` padding.
4. Use `promptlight` 15px with 20px line height for body copy in `#666666`.
5. Re-measure the Thai home page (`/th/index.php`) before claiming Thai-specific values; only the English page was measured.
6. Unmeasured items (hover colors, focus states, dark mode, breakpoints) should be measured before being documented.
