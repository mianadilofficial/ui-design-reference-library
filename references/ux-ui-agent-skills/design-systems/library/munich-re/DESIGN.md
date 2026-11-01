---
version: alpha
name: "Munich Re"
category: "Banking & Insurance"
description: "Munich Re (munichre.com) home page measured live: the proprietary MunichRENeue typeface in weights 200, 400 and 700, a deep navy #0f1e32 canvas with white text, a #21377c button hover, square corners and a hairline #6d767c, with photographic hero slides and no card shadows."
colors:
  canvas: "#0f1e32"
  page-body: "#ffffff"
  ink: "#ffffff"
  primary: "#0f1e32"
  on-primary: "#ffffff"
  surface-2: "#fee94e"
  ink-2: "#d9dada"
  ink-3: "#d9dadc"
  ink-5: "#000000"
  ink-6: "#0a2540"
  hairline: "#6d767c"
  primary-hover: "#21377c"
typography:
  display:
    fontFamily: MunichRENeue, Arial, Helvetica, sans-serif
    fontSize: 42px
    fontWeight: 200
    lineHeight: 49px
  display-mobile:
    fontFamily: MunichRENeue, Arial, Helvetica, sans-serif
    fontSize: 28px
    fontWeight: 200
    lineHeight: 36px
  body:
    fontFamily: MunichRENeue, Arial, Helvetica, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22px
  button:
    fontFamily: MunichRENeue, Arial, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: MunichRENeue, Arial, Helvetica, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 26px
  input:
    fontFamily: MunichRENeue, Arial, Helvetica, sans-serif
    fontSize: 18px
    fontWeight: 200
    lineHeight: 26px
rounded:
  xs: 50px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 3px
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
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 14px 20px 12px
    height: 50px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.page-body}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.page-body}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.page-body}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    textColor: "{colors.page-body}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 0px 170px 0px 20px
    height: 50px
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
    rounded: "{rounded.none}"
    padding: 49px 0px 60px
---

# Munich Re

## Overview

This system was measured from the English home page of Munich Re, the German reinsurer, at https://www.munichre.com/en.html (document title "Home | Munich Re"). It is a short page, 1,397px tall at 1280px width, built as one tall photographic hero followed by a navy footer. The header shows a white "Munich RE" wordmark with a horizontal-striped mark, the tagline "NOT IF, BUT HOW" at the right, and a thin white rule above a second bar with the primary navigation: Risks, Solutions, Insights, Company and Careers, then an "EN" language control, a globe icon and a search icon.

The hero is a news carousel over full-bleed documentary photography; the slide in the capture is an aerial photograph of collapsed buildings and a hillside neighbourhood. A translucent navy panel carries an eyebrow ("Natural disasters first half of 2026"), a large light-weight headline ("Lower losses, growing risks: the natural disaster review for the first half of 2026") and a rectangular button, "Read the media information". Under the panel, short dashes mark the carousel positions beside a pause control. Another slide measured on the desktop pass has the headline "Munich Re Group to Acquire Cyber Insurtech At-Bay". Along the bottom of the hero three translucent navy strips address audiences: "Insurers: Tackle your risks with our solutions", "Industry Clients: Find tailored solutions for your industry" and "Investors: Investing in Munich Re".

The footer is a solid navy block with link columns (Topics, About Munich Re, Follow us), social icons, a utility row (Contact, Privacy, Cookie Settings, Legal Notice, Sitemap, Imprint) and an underlined statement link, "Munich Re's Statement on the UK Modern Slavery Act". The voice is sober and institutional, with audience labels and no promotional ornament. Color comes from photography; the interface is navy, white and grey.

## Colors

The page the viewer sees is navy, #0f1e32 (`canvas`), the largest measured background by far (area weight 636), plus a 85%-opacity version, #0f1e32d9, over imagery (weight 142). White #ffffff (`ink`, `page-body`) is the main text color (363 characters). Light greys #d9dada (`ink-2`, 295 characters) and #d9dadc (`ink-3`, 184 characters) are used for footer links and secondary text. Dark text colors #000000 (`ink-5`) and #0a2540 (`ink-6`) are measured on a few characters.

The root variable `--mr-page-bg-color` is #fff, which is why the extractor's body role is white; the hero and footer, however, are navy, and the capture shows navy and photography as the page. `primary` is #0f1e32, the fill of the "Media Release" and "Read the media information" buttons, so the button and the canvas are the same navy and the button is distinguished by position and, on hover, by a brighter blue: the hover fill is #21377c (`primary-hover`). Hover on navigation labels changes white to a pale periwinkle (rgb(176, 189, 227)); that value is measured as a hover color on nav links and is not in the frontmatter. Footer links turn from #d9dadc to white on hover.

The hairline #6d767c is the 1px border color on the search input and a rule color. A bright yellow, #fee94e (`surface-2`), is measured as a background at area weight 7, and a blue #146ff8 at weight 2; the capture shows neither on the home page above the fold, and the element carrying them was not identified. Theme variables give a black radar accent (#000) and a library blue (#007aff for the Swiper carousel), which are not brand colors.

## Typography

One family, "MunichRENeue", with fallbacks Arial, Helvetica and generic sans-serif, is the declared `--mr-font-family` and measures on 975 characters (Arial on 54, mostly form text). The loaded faces are MunichRENeue at 400 and 700; weight 200, measured on headlines, is declared as `--mr-font-weight-light`. An "Icons" font supplies glyphs.

Measured roles:
- `display`: carousel headlines at 42px, weight 200, line-height 49px, white.
- `display-mobile`: 28px, weight 200, line-height 36px.
- `body`: 14px, weight 400, line-height 22px (the statement link and small copy).
- `button`: 16px, weight 400, line-height 24px.
- `nav`: 18px, weight 400, line-height 26px.
- `input`: 18px, weight 200, line-height 26px (the search field).

Character counts by size are 10px (300, the small audience labels such as "Insurers"), 14px (277), 16px (188), 18px (146), 42px (49), 13.3333px (35) and 11px (33). Weights are 400 (925), 200 (79), 500 (13) and 700 (12). The shape of the hierarchy is a very light, very large headline over photography against small regular-weight supporting text, with bold reserved for the eyebrow and rare emphasis. Root variables declare an editorial scale in a `--mr-font-size-*` family (for example `h1-medium` 42, `h1-large` 52, `h2-large` 34, `h4-small` 20, `h5` 18, `copy-regular-medium` 18, `copy-small-small` 14, `copyright-text` 12), of which 42, 18 and 14 appear in the rendered measurements. MunichRENeue is a proprietary face; Arial and Helvetica are the declared fallbacks.

## Layout

The page is a stack of two full-width regions. The hero fills the first viewport and more: a content column roughly one third of the width sits at the left over the photograph (the translucent panel), and the audience strips span the content width at the bottom of the hero as three equal cells separated by thin vertical rules. The header is two stacked bars: a taller logo and tagline row, then a slim navigation bar divided by white 1px rules above and below. The footer arranges link columns in a grid with hairline rules above each column heading, a right-aligned utility row and a full-width bottom rule above the statement link.

Paddings by weight are 7px (9), 3px (6), then 10px, 15px, 20px and 12px (5 each), 6px and 4px (4 each), 14px and 25px (3 each). The footer has 49px top and 60px bottom padding. The spacing tokens list 1, 3, 4, 5, 6, 7, 8, 10, 12 and 14px. The layout is sparse and left-aligned, with generous empty photographic space and small type.

## Elevation & Depth

Elevation is nearly absent. One shadow is measured, rgba(8, 19, 79, 0.16) 0px 4px 13.333px 0px, on one element. Depth is built from translucency: the hero panel and audience strips are navy overlays (#0f1e32d9 is the measured 85% navy) laid over the photograph so that text stays legible while the image remains visible. Borders are hairlines (#6d767c) and white 1px rules in the header. No gradients are measured in the CSS.

## Shapes

The geometry is rectangular. The "Media Release" and "Read the media information" buttons, navigation, links, footer and search field all compute a 0px radius (`rounded.none`). The only measured radii are 50px on one element and 50% on one, on elements that were not identified. The theme variable `--mr-border-radius` is declared as a 4px value but no rendered element on this page measured 4px. `rounded.xs` is 50px and `rounded.pill` is 9999px as recorded.

## Components

**Primary button** (`button-primary`): rectangular, navy #0f1e32 fill, white 16px label, padding 14px 20px 12px, height 50px, 0px radius. Hover changes the fill to #21377c. It labels hero actions such as "Media Release" and "Read the media information".

**Navigation** (`nav`, `nav-link`): white text at 18px, weight 400, on a navy bar framed by white hairlines; links turn pale periwinkle on hover. Items: Risks, Solutions, Insights, Company, Careers. The language selector "EN" and the globe and search icons sit at the right.

**Link** (`link`): white 14px text, underlined in the statement link at the bottom of the footer.

**Text input** (`text-input`): the search field, transparent over navy, white 18px weight 200 text, left padding 20px and right padding 170px, height 50px, 1px #6d767c border, square corners.

**Footer** (`footer`): navy fill, white text, 49px top and 60px bottom padding, column headings (Topics, About Munich Re, Follow us) set over hairline rules, link text in #d9dadc.

**Audience strips**: translucent navy cells containing a tiny label (10px) and a one-line prompt in white. They are not captured as a token set separately from the navy overlay values above.

The accessibility launcher, the back-to-top arrow and the carousel pause control are utility controls and are not tokenized.

## Design System Architecture

No public design-system page was opened for this document, and none was found linked from the home page. The shipped CSS shows a named internal system: root variables prefixed `--mr-` such as `--mr-font-family`, `--mr-page-bg-color`, `--mr-font-weight-light` (200), `--mr-font-weight-medium` (600), `--mr-font-weight-bold` (700), `--mr-tab-height` (4.5rem), `--mr-unit-converter` (1rem) and a long list of `--mr-font-size-*` names (`h1-large` 52, `h1-medium` 42, `h2-large` 34, `h4-small` 20, `h5` 18). There is also a `--mr-radar-*` group for a tabbed component and a Swiper carousel variable (`--swiper-navigation-size: 44px`). Where a variable declares a size in unitless numbers, the rendered values were taken from the measurements, not from the declaration. Source reviewed: https://www.munichre.com/en.html only.

## Do's and Don'ts

Do set everything in MunichRENeue, with weight 200 at 42px for hero headlines and 400 for interface text.

Do keep the interface navy (#0f1e32) and white, and let the photography supply color.

Do keep every control rectangular with 0px radius and use #21377c for the button hover.

Do use translucent navy overlays (85% opacity) behind text on photographs.

Don't add card shadows, rounded buttons or gradients; the measured system has none.

Don't use the Swiper blue #007aff or the black radar accent as brand colors.

Don't present the accessibility launcher, back-to-top button or carousel pause control as brand UI.

## Responsive Behavior

Only the 390px mobile pass was recorded. In it the hero headline ("Lower losses, growing risks: the natural disaster review for...") is 28px, weight 200, line-height 36px, white, in a 348px-wide box; body text is 14px, weight 400, line-height 22px; and the hero button measures 16px, weight 400, line-height 24px with padding 14px 20px 12px on a #0f1e32 fill at 348px wide. Character counts by size on mobile are led by 14px (412), 16px (143) and 28px (83). Breakpoint values, how the navigation or audience strips are arranged on mobile and the footer layout were not measured.

## Iteration Guide

1. Start from `canvas` #0f1e32, `ink` #ffffff, `ink-2` #d9dada, `hairline` #6d767c and `primary-hover` #21377c.
2. Set text in MunichRENeue (fallback Arial, Helvetica); 42px weight 200 for hero headlines, 18px for navigation, 14px for supporting copy.
3. Build the page as a photographic hero with a translucent navy panel, one rectangular button and three audience strips, then a navy footer with hairline-ruled columns.
4. Keep radii at 0px and shadows out.
5. Run `node web/scripts/verify-designs.mjs --slug=munich-re` after edits.
6. Leave out any value that is not in the frontmatter or `web/data/extracted/munich-re.json`.
