---
version: alpha
name: CP ALL
category: "Thai Brands"
description: "CP ALL Public Company Limited corporate site (7-Eleven-centred imagery): white page, black ink, CP blue #1c4ca0 footer and headings, #01a7df cyan hover pills with 30px radius, set in the self-hosted Thai/Latin face DB Heavent at 500 weight."
colors:
  canvas: "#ffffff"
  page-body: "#ffffff"
  ink: "#000000"
  ink-muted: "#404040"
  ink-faint: "#717171"
  primary: "#1c4ca0"
  primary-dark: "#153b7c"
  on-primary: "#ffffff"
  on-primary-muted: "#ffffffcc"
  accent-cyan: "#01a7df"
  surface-tint: "#f6fbfd"
  surface-soft: "#f6f6f6"
  tab-surface: "#eaeaea"
  tab-ink: "#818181"
  hairline: "#c6c6c6"
typography:
  display:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 35.2px
    fontWeight: 500
    lineHeight: 35.2px
  display-mobile:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 30.4px
    fontWeight: 500
    lineHeight: 30.4px
  subheading:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 38.4px
    fontWeight: 500
    lineHeight: 42.24px
  body:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 17.6px
  tab:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 22.4px
    fontWeight: 500
    lineHeight: 75px
rounded:
  xs: 10px
  nav-pill: 30px
  none: 0px
  pill: 9999px
spacing:
  s1: 5px
  s2: 10px
  s3: 15px
  s4: 16px
  s5: 20px
  s6: 25px
  s7: 30px
  s8: 40px
components:
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    boxShadow: rgba(0, 0, 0, 0.04) 0px 0px 0px 1px, rgba(0, 0, 0, 0.08) 0px 2px 4px 0px
    height: 110px
  nav-pill-hover:
    backgroundColor: "{colors.accent-cyan}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.nav-pill}"
    height: 44px
  side-tab:
    backgroundColor: "{colors.tab-surface}"
    textColor: "{colors.tab-ink}"
    typography: "{typography.tab}"
    rounded: "{rounded.none}"
    padding: 0px 20px
    height: 75px
  link:
    textColor: "{colors.primary-dark}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.none}"
    height: 235px
---

## Overview

CP ALL is the English home page of CP ALL Public Company Limited (page title "Home - บริษัท ซีพี ออลล์ จํากัด (มหาชน)"), the corporate site of CP ALL, whose hero artwork and news items centre on 7-Eleven. It is an investor-and-stakeholder portal rather than a store: a thin top strip reading "CP ALL PUBLIC COMPANY LIMITED" with a language switch ("English"), a white header with the green-and-red leaf logo and eight text links (About Us, Investor, Sustainability, Education, Store Business Partner, SME, News & Updates, Career Opportunities), a full-width illustrated hero carousel, and then a sequence of bands.

The bands, measured top to bottom at 1280px wide, are: a media band 500px high starting at y=110 (illustrated hero artwork, flagged as a carousel by the extractor, together with four photo tiles titled "Business Opportunity", "Job Opportunity", "Education Opportunity" and "Good Quality of Life Opportunity"); a white "News Update" band with three article cards (each dated, with a category label such as "CSR News" or "Corporate News"); a pale-blue `#f6fbfd` band with a carousel of quick links ("Propose Store Location", "Merchandise", "Whistleblowing") beside an emergency-service banner; a strip with "Investor" and "SME" side tabs and icon links ("Stock price", "Set Announcements", "Financial statements", "Annual report", "Sustainability Report"); a blue band headed "Good stories that we want to tell more." with report covers; a row of group-company logos; and a blue footer with "Contact Us", "Privacy Policy", "Privacy Notice", "Cookies Notice", "Sitemap", "Data Subject Request Form", "Whistleblowing", "DNA Goodness 24hrs" and "Career Opportunities", plus the registered address line "THE TARA Building 58/28 Moo 2 Chaengwattana Rd., Bang Talad, Pakkred, Nonthaburi 11120".

The art direction mixes flat vector illustration (hero) with warm, smiling photography (opportunity tiles and news). Imagery carries colour; the interface stays white, black and one blue. Copy is bilingual: English interface labels with Thai headlines inside campaign artwork and news titles. The measured page holds 756 visible elements and is 3,058px tall.

## Colors

All values are from the measured live page. After the consent overlay was removed from the capture, the page background reads as white.

- **Canvas `#ffffff`** is the page and header background (area weight 618) and the body background; `page-body` carries the same value.
- **Ink `#000000`** is the most-read text colour (3,048 characters). **Muted ink `#404040`** (134 characters) and **faint ink `#717171`** (14 characters) follow.
- **Primary `#1c4ca0`** is CP blue: the footer and large blue band background (area weight 2,187), the "News Update" heading and the headings of the quick-link and story bands. It is also text colour on 169 characters. The extractor's automatic pick for primary was the grey `#eaeaea` of the "SME" side tab, which is a tab, not the brand action; that grey is kept as `tab-surface`.
- **Primary dark `#153b7c`** colours 422 characters (card category links such as "News & Updates", "CSR News") and is the darkest blue measured.
- **Accent cyan `#01a7df`** is the fill of the white-text pill links measured on hover (see Components).
- **On-primary `#ffffff`** and `#ffffffcc` (white at 80%, 520 characters) are the text on the blue footer.
- **Surfaces.** `#f6fbfd` (area weight 579) is the pale-blue band behind the quick links; `#f6f6f6` (206) is a soft grey band; `#eaeaea` is the "SME" tab; `#c6c6c6` is the only measured border colour (4 uses).

The stylesheet also declares Kadence and WordPress variables such as `--global-palette1: #3182CE` and `--wp--preset--color--vivid-purple: #9b51e0`; those are theme defaults that match no measured element and are not used as brand colours here.

## Typography

One family carries every measured character: **DB Heavent** (4,645 characters), self-hosted from the theme folder `/wp-content/themes/cpall-2020/fonts/db-heavent/` as three WOFF2 files for 400, 500 and 700. Two icon fonts, `seed-icons` and `cp-icons`, are loaded for glyph icons. The fallback is generic `sans-serif`. Measured weights by characters: 400 (1,611), 500 (1,316), 300 (1,198) and 700 (520).

Sizes in order of use: 22px (1,718 characters), 19.2px (1,270), 21.6px (435), 25.6px (422), 20.8px (249), 23.52px (136), 16px (115), 35.2px (89), 11.2px (68) and 30.4px (47). Roles:

- **Display, 35.2px / 500, line-height 35.2px:** the opportunity-tile titles, in black on the photo tiles.
- **Subheading, 38.4px / 500, line-height 42.24px:** "Good stories that we want to tell more.", in blue. The "News Update" heading is 40px / 500 in `#1c4ca0`.
- **Quick-link headings: 30.4px / 500** in blue, centred.
- **Body, 16px / 400, line-height 17.6px:** the footer address line.
- **Side tab, 22.4px / 500:** the "SME" tab label, with line-height equal to the 75px tab height.

The visible header link size was not isolated in the extraction; the body element itself measures 17.6px / 500 with a 40px line-height.

**Substitutes.** DB Heavent is the site's own web font; no foundry page was opened, so no licence or source is cited. For a stand-in use a humanist Thai-capable sans at the same weights.

## Layout

Desktop content sits inside two measured widths: the tile band runs from x=110 to x=1170 (four columns), while the news, quick-link and story bands run from x=85 to x=1195 or 1169. The header is 110px high with a thin 5px grey strip (`#e9e9e9`) above it. Band heights: media band with hero and tile titles 500px, news 996px, quick links 528px, a 75px strip, stories 396px, logo row 218px and footer 235px.

Cards sit on a 3-column grid in the news band; gaps are 30px (22 uses), 15px (16) and 40px (2). Paddings measured most often are 10px (55), 16px (32), 30px (16), 15px (15) and 25px (12). The mood is open and airy with generous white between bands, and photography is cropped to rectangles with no radius.

## Elevation & Depth

Two shadows were measured. The header and some cards use `rgba(0, 0, 0, 0.04) 0px 0px 0px 1px, rgba(0, 0, 0, 0.08) 0px 2px 4px 0px` (11 uses): a hairline plus a very soft drop. Larger lifted elements use `rgba(0, 0, 0, 0.2) 0px 10px 30px 0px` (4 uses). The report covers in the blue story band appear lifted in the capture. Everything else is flat colour.

## Shapes

Measured radii: 50% (4 uses), 30px (3) and 10px (2); everything else is square (0px). The 30px radius belongs to the cyan hover pills, which are 44px high. Photo tiles, cards, the footer, the header and the "SME" tab measure 0px. The 10px radius was not attributed to a specific element.

## Components

- **Header navigation.** White, 110px high, with the shadow above. The eight text links measure 41px high with transparent background and 0px radius at rest.
- **Hover pill.** For links such as "Store Business Partner", "SME", "Work with us", "Scholarship" and "Sustainability", the measured hover state shows a `#01a7df` fill, white text, 44px height and 30px radius, with the element's opacity rising between the before and after states.
- **Side tab.** "SME" (and "Investor") sit in a 75px-high, 180px-wide block; the measured "SME" tab has `#eaeaea` fill, `#818181` text, 22.4px / 500 and padding 0 20px.
- **Opportunity tiles.** Photo tiles with the title at the lower left in blue-black 35.2px text.
- **News cards.** White cards with a photo on top, a bold title, a date and a coloured category label at the right.
- **Footer.** Blue `#1c4ca0`, 235px high, white links.
- **Consent, cookie, back-to-top and chat controls** present in the page are not brand UI and are excluded from the tokens.

## Design System Architecture

CP ALL does not publish a design system or brand guideline that the pages opened link to; the request for the English home page via WebFetch returned HTTP 403, so the only evidence is the browser extraction of https://www.cpall.co.th/en/. The de-facto system is a custom WordPress theme named `cpall-2020` (the font path and the logo at `/wp-content/uploads/2020/01/cp-all-logo.svg`) that uses Kadence Blocks variables (`--global-palette1` to `--global-palette9`, `--global-kb-font-size-*`) and WordPress presets (`--wp--preset--*`). The brand blue `#1c4ca0` is not one of those variables, so brand colours are written directly in the theme CSS. Typography is the self-hosted DB Heavent at three weights.

## Do's and Don'ts

- Do keep the page white with black text and use `#1c4ca0` for footers, bands and headings.
- Do set Thai and Latin text in DB Heavent at 500 for headings and 400 for body copy.
- Do keep photo tiles, cards and the header square; use 30px pills only for hover states.
- Do use `#f6fbfd` as the quiet band colour between white sections.
- Don't use the Kadence default palette (`#3182CE`, `#2B6CB0`) as brand blue.
- Don't use `#eaeaea` or `#818181` as an action colour; they belong to the inactive side tab.
- Don't reproduce cookie banners, scrims or back-to-top controls as brand UI.

## Responsive Behavior

Measured in the extractor's 390px pass: 11 header links are visible (46 at 1280px), a menu toggle was not detected as visible, and the maximum card columns is 5 in both passes. The media band flagged as a carousel is 398px high at 390px (the desktop media band that also holds the four tile titles is 500px). The four opportunity tiles are laid out in 2 columns between x=32 and x=358, with centred 30.4px / 500 blue headings (desktop: 4 columns, left-aligned 35.2px black headings). Quick-link headings stay 30.4px. The page is 5,083px tall at mobile width as the bands run to y=5083 (desktop 3,058px). Mobile body text stays 16px / 17.6px. How the navigation is re-presented at 390px was not measured.

## Iteration Guide

1. Start with canvas `#ffffff`, ink `#000000`, primary `#1c4ca0`; add `#01a7df` only for the hover pill.
2. Set text in DB Heavent: 35.2px / 500 titles, 38.4px / 500 for the story heading, 16px / 400 for body.
3. Build bands in order: hero carousel, four tiles, news cards, pale-blue quick links, side tabs with icon links, blue story band, logo row, blue footer.
4. Keep corners square; use 30px only on the 44px hover pills.
5. Measure any new component with the extractor before adding a token.
