---
version: alpha
name: "Government Savings Bank (GSB)"
category: "Thai Brands"
description: "Government Savings Bank of Thailand English home page measured live: magenta #ec008c brand color on #f5f5f5 and white surfaces, DB Heavent type at 21px body and 32px titles, 30px-radius pill buttons with a #ed017f hover and a full-width magenta footer."
colors:
  canvas: "#f5f5f5"
  page-body: "#ffffff"
  ink: "#333333"
  primary: "#ec008c"
  on-primary: "#ffffff"
  ink-4: "#000000"
  ink-5: "#212529"
  primary-hover: "#ed017f"
typography:
  display:
    fontFamily: "\"DB Heavent Bold\""
    fontSize: 32px
    fontWeight: 500
    lineHeight: 38.4px
  body:
    fontFamily: "\"DB Heavent\""
    fontSize: 21px
    fontWeight: 400
    lineHeight: 31.5px
  button:
    fontFamily: "\"DB Heavent\""
    fontSize: 18px
    fontWeight: 400
    lineHeight: 36px
  nav:
    fontFamily: "\"DB Heavent\""
    fontSize: 22px
    fontWeight: 400
    lineHeight: 33px
  button-secondary:
    fontFamily: "\"DB Heavent\""
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
rounded:
  xs: 2.5px
  sm: 7px
  md: 10px
  lg: 30px
  xl: 50px
  pill: 9999px
spacing:
  s1: 2.5px
  s2: 3.75px
  s3: 5px
  s4: 7.5px
  s5: 10px
  s6: 15px
  s7: 30px
  s8: 32px
  s9: 54px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 3.75px 7.5px
    height: 46px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    textColor: "{colors.ink-5}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 10px 5px
    height: 52px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.page-body}"
    rounded: "{rounded.sm}"
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
---

# Government Savings Bank (GSB)

## Overview

The measured page is the English home page of the Government Savings Bank of Thailand, gsb.or.th/en/. It is a magenta-and-white institutional banking site. A black square holding the GSB emblem sits at the top-left of a white navigation bar; a magenta secondary bar beneath it lists About GSB sub-pages (History, Vision / Mission, Board of Committee, Management Team, Organization Structure); a wide hero banner carries a magenta geometric overlay and a smiling person saving coins in a jar; and the page continues with sections titled "Our Products", "About GSB", "Performance" and "Social Mission & Sustainability", closing in a full-width magenta footer. The extracted page height is 2740px at a 1280px viewport.

Magenta (`primary`, #ec008c) is everything: section titles, product labels, text links, "view" arrows, the primary pill button and the footer. Photography is warm and tinted: most section tiles overlay a pink-magenta gradient on a photograph (coins, handshake, hands, the bank's building, a seedling), with large uppercase white titles ("VISION / MISSION", "BOARD OF COMMITTEE", "MANAGEMENT TEAM", "GSB STRUCTURE", "SOCIAL MISSION", "SUSTAINABILITY") and a white pill button ("learn more", "get involved") sitting over the picture.

The tone is formal and informational, as the page's own copy shows: "Government Savings Bank was established by H.M. King Vajiravudh, King Rama VI who realized the importance of keeping property safe from thieves." Calls to action are short lowercase or sentence-case phrases ("learn more", "view", "get involved", "GSB History"). Products are presented as a four-by-two grid of thin-line magenta icons with uppercase labels (Savings, Home Loan, Personal Loan, MyMo (Mobile Banking), GSB Savings Certificate, Card, Insurance, Exchange / International Money Transfer).

The iconography is thin-line and single-color in magenta, drawn with an icon font (fontello), and the bank's heritage appears through a sepia portrait inside a circular frame in the About tile. Together with the pink-tinted photography this gives the site a consistent, friendly institutional look: one color family, rounded pills for actions and and large legible type.

## Colors

- `canvas` #f5f5f5 is the page background and `page-body` #ffffff is the white used for the navigation bar, cards and button labels. Backgrounds measured: #ffffff (largest), #f5f5f5, #ec008c and #df5497.
- `ink` #333333 is the main text color; `ink-4` #000000 and `ink-5` #212529 are used for a few headings and button labels.
- `primary` #ec008c is the brand magenta; `on-primary` #ffffff is the label on it; `primary-hover` #ed017f is the measured hover fill of the primary button. #df5497 and #ef5da8 are lighter magenta tints seen on the geometric overlay and a border.
- The footer and sub-navigation bar are filled `primary`; their text is white.

The site's root variables also list Bootstrap defaults (for example `--pink` #e83e8c, `--yellow` #ffc107, `--success` #28a745) and an Ant Design wave color (#1890ff). These are framework defaults and are not brand colors; the GSB brand magenta is #ec008c.

## Typography

The site uses DB Heavent in two files, `DB Heavent` (regular) and `DB Heavent Bold`, a Thai-and-Latin typeface, plus a `fontello` icon font. The numbers below are measured on the English page.

- `display` is DB Heavent Bold 32px, weight 500, line height 38.4px (section titles such as "Our Products"; same 32px on mobile).
- `body` is DB Heavent 21px, weight 400, line height 31.5px.
- `button` is DB Heavent 18px, weight 400, line height 36px; `button-secondary` is 20px, line height 30px.
- `nav` is DB Heavent 22px, weight 400, line height 33px.

The measured size set is 21px (most used), 20px, 32px, 42px, 24px, 22px and 18px. Body text is therefore large for a bank site, matching the high x-height of DB Heavent. Weights 400 and 500 appear, with the bold file used for headings. A substitute needs Thai coverage: use a Thai-capable humanist sans such as Sarabun-style faces and keep sizes.

## Layout

The page content sits in a centered container with consistent left and right margins. Sections are stacked vertically: a four-column product icon grid; a two-column "About GSB" row (image left, text and a pill button right); a two-by-two grid of photo tiles; a four-card "Performance" row on white cards; and two wide photo tiles for social mission and sustainability. The measured spacing set is 2.5, 3.75, 5, 7.5, 10, 15, 30, 32 and 54px (`s1`-`s9`). The primary button uses padding 3.75px 7.5px at height 46px; the secondary button uses padding 10px 5px at height 52px. A language switcher (EN / ไทย) sits at the right of the navigation.

## Elevation & Depth

Minimal. One soft shadow was measured: `rgb(238, 238, 238) 0px 0px 5px 0px` (four uses), a faint grey glow used on white cards. Layers are otherwise created by the alternation of #f5f5f5 and white, and by the gradient-tinted photography. Border colors measured are #ffffff, #ef5da8 and #ec008c.

## Shapes

Radii follow a clear ladder: `xs` 2.5px, `sm` 7px (cards and thumbnails), `md` 10px, `lg` 30px (the primary button is 30px, a full pill at its 46px height), `xl` 50px (the white "learn more" pills over photography and round markers), and `pill` 9999px. A 50% radius is used for circular badges, such as the framed portrait in the About tile. One element has a 10px radius on its left corners only (`10px 0px 0px 10px`).

## Components

- **button-primary**: fill `primary` (#ec008c), text `page-body` (#ffffff), DB Heavent 18px/400, padding 3.75px 7.5px, height 46px, 1px border in `primary`, radius 30px ("GSB History").
- **button-primary-hover**: fill `primary-hover` (#ed017f).
- **button-secondary**: text `ink-5`, DB Heavent 20px, padding 10px 5px, height 52px, radius 2.5px.
- **link**: text `ink`, 21px body type.
- **nav / nav-link**: white bar (`page-body`) with `primary`-colored 22px link text; a magenta sub-bar carries white sub-links.
- **card**: white fill, radius 7px, the 5px grey glow; Performance cards use a magenta bold title, a "Performance" caption and a "view" arrow link.
- **footer**: fill `primary`, text `page-body`.

## Design System Architecture

No public brand-guidelines or design-system page was opened for this entry: the fetched home page shows only a greyscale logo asset and no CI document link. The shipped CSS is a Bootstrap 4 build (root variables such as `--breakpoint-md` 768px and `--breakpoint-xl` 1200px, plus Bootstrap color names) extended with Ant Design styles (`--antd-wave-shadow-color`) and a `fontello` icon font. The brand layer is applied in component CSS: magenta #ec008c for actions, white for surfaces and DB Heavent for text. Values in this document are measurements of the live page, not an official token file.

## Do's and Don'ts

Do:
- Use #ec008c for all actions, titles, links and the footer, and white for text on it.
- Overlay photography with a pink-magenta gradient and add a white pill button.
- Keep body type at 21px DB Heavent for readability in Thai and Latin.
- Present products as thin-line magenta icons with uppercase labels.

Don't:
- Use Bootstrap or Ant Design default colors as brand colors.
- Use sharp corners on primary buttons; they are 30px pills.
- Add colors other than magenta tints, grey and white.

## Responsive Behavior

Measured at the mobile viewport: the h1 is 32px with line height 38.4px and the body text is 21px, the same as desktop. Other mobile behavior (menu collapse, column counts) was not measured.

## Iteration Guide

1. Build the shell: white nav with magenta links, magenta sub-bar, `canvas` background.
2. Use section titles in magenta DB Heavent Bold 32px.
3. Add tiles: photo, magenta gradient, uppercase white title and white pill button.
4. Put the main action in a 30px-radius magenta button with the 46px height.
5. Finish with a full-width magenta footer in white text.
