---
version: alpha
name: "Matichon Online"
category: "Thai Brands"
description: "Matichon Online (matichon.co.th), Thai news portal measured live: black masthead on a white canvas (#ffffff, ink #111111), one orange accent #fc7a32 on pill chips (25px radius), DB Heavent headlines at 36px weight 700 with Kanit for navigation."
colors:
  canvas: "#ffffff"
  ink: "#111111"
  primary: "#fc7a32"
  on-primary: "#ffffff"
  surface-2: "#000000"
  surface-3: "#dedede"
  ink-2: "#292d30"
  ink-5: "#2b2b2b"
  ink-6: "#fefefe"
  on-primary-hover: "#ff6d00"
  button-secondary-bg: "#ff8300"
  text-input-bg: "#fff8f2"
typography:
  display:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 39.6px
  display-mobile:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 36px
    fontWeight: 600
    lineHeight: 36px
  button:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 25px
    fontWeight: 400
    lineHeight: 27.5px
  nav:
    fontFamily: Kanit, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 17.6px
  input:
    fontFamily: Kanit, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 3px
  md: 4px
  lg: 8px
  xl: 10px
  2xl: 12px
  3xl: 15px
  4xl: 20px
  cta: 25px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 4px
  s5: 5px
  s6: 6px
  s7: 8px
  s8: 10px
  s9: 12px
  s10: 14px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 6px 16px
    height: 40px
  button-primary-hover:
    textColor: "{colors.on-primary-hover}"
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    padding: 8px 15px
    height: 38px
    borderColor: "{colors.surface-2}"
  nav:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.button-secondary-bg}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.on-primary-hover}"
    typography: "{typography.input}"
    height: 15px
  card:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.lg}"
    padding: 16px
---

# Matichon (มติชนออนไลน์)

## Overview
Matichon Online (matichon.co.th) is the news portal of the Thai publisher Matichon. The measured home page is a dense, Thai-language newspaper front page: a black masthead with the Matichon logotype, a white secondary navigation row of section links, a large lead story with a headline set in the DB Heavent typeface, then horizontally and vertically stacked story modules separated by section headings such as การเมือง (Politics) and Infographic. The page measured 1280px wide and 12197px tall on desktop, which shows how much editorial content is packed into one scroll.

The visual identity is journalism first. Photographs carry most of the colour; the interface itself is restrained to black, white, near-black text and one orange accent, `{colors.primary}` (#fc7a32). That orange appears on pill-shaped section chips, "ดูทั้งหมด" (view all) buttons, timestamps and the like, giving the page a single recognisable signal colour against otherwise neutral chrome. Headlines are bold and large (36px, weight 700), timestamps are small and coloured, and story thumbnails use rounded corners.

At the time of capture the site carried a royal tribute banner under the masthead (a dark ornamental band with portraits and Thai honorific text). That banner is a temporary editorial overlay, not brand UI, and none of its colours or imagery is documented as a token here. The capture was re-measured with the tribute filter handling used by the extraction pipeline, and the tokens below come from that re-measurement.

## Colors
The palette is neutral with one accent, all measured from the live page.
- `canvas` #ffffff is the dominant page background by area, with `surface-card` #000000 used for the masthead and some dark modules, and `surface-3` #dedede for grey panels.
- `ink` #111111 is the most-read text colour by character count, followed by `ink-headline` #292d30 on lead headlines, `ink-5` #2b2b2b, and `ink-6` #fefefe for text on dark bands.
- `primary` #fc7a32 is the orange used for the measured primary pill button fill and for much of the accent text; `on-primary` #ffffff is the label colour on it. `on-primary-hover` #ff6d00 is the deeper orange measured on hover and focus. `button-secondary-bg` #ff8300 fills the secondary button (the lottery check button) and `text-input-bg` #fff8f2 is the pale peach used for the search input and for the hover/outline chip background.
- Other measured backgrounds include #f2f2f2, #fff0e3, #696969, #e8e8e8, #360800, #efefef, #262626 and #019d00; these are section tints and promotional modules rather than a systematic scale, so only the roles above are tokenised.

The usage rule that emerges from the measurement: orange marks navigation chips, "view all" actions and timestamps; black marks the masthead; everything else is neutral so photographs dominate.

## Typography
Two families do the work, plus a third that is only loaded.
- **DB Heavent** (`display`, `button`) is the headline and body face: the extraction reports it covering by far the most characters on the page. It is loaded at weights 300, 400, 500 and 700. Headlines measure 36px at weight 700 with a 39.6px line height (`display`); the primary pill label is DB Heavent at 25px, weight 400 (`button`).
- **Kanit** (`nav`, `input`) is a Thai-capable sans used for navigation links and the search field at 16px and 12px respectively, weight 400.
- **Sarabun** is loaded at weights 300 and 400 but covers few characters.
- The most-used font sizes by character weight are 24px, 22px, 20px, 26px and 36px, so DB Heavent text runs in the 20 to 26px range for most body and card copy, which is larger than usual Latin web text because the typeface has small Thai glyphs.
- `display-mobile` records the 390px mobile h1 measurement: 36px, weight 600, 36px line height.

Font substitutes: DB Heavent is a commercial Thai typeface family. Where it is not available, Kanit or Sarabun, both already loaded on the site, are the in-system fallbacks, and the font stack the site itself declares ends in the generic `sans-serif`.

## Layout
The desktop page is a 1280px measurement with content inset from the edges: the first full-width band is the black masthead, then a media band for the lead story whose content runs from about the left gutter to a text and image column split. The extraction recorded 15 visible header links on desktop, a menu toggle labelled "Toggle Menu", and a maximum card row of 20 columns detected in the layout probe.

Content modules follow a repeated newspaper pattern: a section heading with an orange pill "ดูทั้งหมด" link, a large lead card on the left, a column of smaller cards on the right, and a row of four compact cards underneath, each with a thumbnail, a two-line headline and a small orange timestamp (date and time, for example "09.10.26 | 10:30 u."). A right rail holds a promotional poster and a front-page image of the printed newspaper. Gaps and paddings follow a small pixel scale (`spacing` s1 through s10: 1px to 14px) typical of dense editorial layouts.

## Elevation & Depth
The measurement found no box shadows: the `boxShadows` frequency list is empty. Depth comes from colour blocks instead, which is the measured behaviour: black against white, peach (#fff8f2) tint on chips, grey (#dedede) panels, and photographs with rounded corners. There is a gradient-like dark band behind the lead story media in the capture, but it is image content. No elevation tokens are defined.

## Shapes
Radii measured on the live page, most used first: 8px (the most frequent, used on cards and thumbnails), 10px, 50px, 20px, 3px, 12px, 9999px, 50%, 25px, 2px, 4px and 15px, plus a 50px 0px asymmetric corner and an 8px 8px 0px 0px top-rounded corner. In tokens: `xs` 2px, `sm` 3px, `md` 4px, `lg` 8px, `xl` 10px, `2xl` 12px, `3xl` 15px, `4xl` 20px, `cta` 25px (the primary pill) and `pill` 9999px. Pills are the signature shape for chips and actions, while story images use the 8px radius.

## Components
- **button-primary**: background `{colors.primary}`, white label in DB Heavent 25px, rounded `{rounded.cta}` (25px), padding 6px 16px, height 40px. The measured instance is the "การเมือง" section chip. Its hover state measures the label going to `{colors.on-primary-hover}`.
- **button-secondary**: `{colors.button-secondary-bg}` fill, white Kanit 16px label, padding 8px 15px, height 38px, black border. Measured on the "ตรวจผลรางวัล" (check lottery results) button.
- **Outline chips** such as "ดูทั้งหมด": orange text and orange border on a peach fill with a 50px radius and 36px height; on hover the background measured as a deeper peach (rgb 255, 211, 172) with the text unchanged.
- **Masthead pill** "Matichon Weekly": transparent with a white border at 9999px radius and 32px height; on hover text and border turn the primary orange.
- **nav**: black band (`{colors.surface-2}`) with white text for the masthead; **nav-link** uses Kanit 16px.
- **text-input**: peach `{colors.text-input-bg}` background, Kanit 12px, orange-toned text.
- **card**: black `{colors.surface-2}` background, white text, 8px radius, 16px padding as measured on dark story modules.

Focus state was measured on the "เมนูเพิ่มเติม" (more menu) button: the outline style measured was "none" with a 3px width and border colour #ff6d00, so no visible focus ring was recorded.

## Design System Architecture
No public design system or brand guideline was found: the site shows no link to one, and no search was run. The de-facto system is inferred only from shipped CSS. The page is a WordPress theme: root custom properties include `--wp--preset--*` values, `--wp-admin-theme-color-darker-20` and Font Awesome variables (`--fa-style-family-classic`), and Swiper carousel variables (`--swiper-theme-color` #007aff, `--swiper-navigation-size` 44px). The Swiper blue is a library default, not a brand colour, and is excluded. The loaded icon fonts are Font Awesome 5 Free and a custom "newspaper" icon font. Breakpoints extracted from the CSS include max-width 767px, max-width 1018px, min-width 768px and min-width 1019px, among others (1140px, 1366px, 500px). Brand tokens (orange, black, the fonts) are applied through theme CSS rather than a named token system.

## Do's and Don'ts
Do:
- Use `{colors.primary}` for section chips, "view all" links and timestamps, and keep everything else neutral.
- Set headlines in DB Heavent bold at the `display` size and keep body copy in the 20 to 26px DB Heavent range.
- Use pill radii (`{rounded.cta}`, `{rounded.pill}`) for actions and 8px for image cards.
- Keep photography large and uncropped by chrome.

Don't:
- Do not document or reuse the royal tribute banner as brand UI; it is an editorial overlay.
- Do not use the Swiper blue (#007aff) or WordPress preset colours as brand colours.
- Do not add shadows; none were measured.
- Do not replace DB Heavent with a Latin-only face for Thai headlines.

## Responsive Behavior
Measured on the 390px mobile pass: the menu toggle remains visible and only 2 header links are visible (against 15 on desktop). The mobile h1 measures 36px at weight 600 and 36px line height; the mobile h2 measures 28px, weight 700, 30.8px line height in DB Heavent; the mobile primary CTA measures 18px with 19.8px line height; mobile navigation measures Kanit 16px with 17.6px line height. The CSS declares a 767px max-width breakpoint most often. How individual card grids reflow on mobile was not measured beyond these values; everything else about responsive behaviour is not measured.

## Iteration Guide
1. Start from the black masthead and a white canvas; add `{colors.primary}` only for chips, view-all links and timestamps.
2. Set headlines with `{typography.display}` and the chip labels with `{typography.button}`.
3. Build story cards with 8px radius thumbnails, a two-line bold headline and a small orange timestamp.
4. Re-measure with `node web/scripts/extract-tokens.mjs --slug=matichon --url=https://www.matichon.co.th/ --force --no-motion` after any redesign, and re-run `node web/scripts/verify-designs.mjs --slug=matichon`.
5. Treat any memorial banner or promotional poster present at capture time as content, not as a token source.
