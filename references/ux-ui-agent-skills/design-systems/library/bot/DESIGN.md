---
version: alpha
name: Bank of Thailand
category: "Thai Brands"
description: "Bank of Thailand English home page (bot.or.th/en/home.html) measured 2026-10-15: deep navy #003366 on white with light-blue #e6f3ff bands, translucent navy data cards over a photographic hero, outlined 1000px-radius pill buttons, and the Thai-capable Conv_Kanit-Regular and Conv_Kanit-Medium faces at 18px body, 28px section titles and 24px card titles."
colors:
  canvas: "#ffffff"
  page-largest: "#e6f3ff"
  ink: "#003366"
  primary: "#003366"
  on-primary: "#ffffff"
  surface-rule: "#c2d3e2"
  ink-muted: "#666666"
  ink-footer: "#99ccff"
  accent-amber: "#ffa700"
  ink-ghost: "#ffffff99"
  nav-link-text: "#2020e0"
typography:
  display:
    fontFamily: Conv_Kanit-Medium
    fontSize: 24px
    fontWeight: 500
    lineHeight: 28.8px
  heading:
    fontFamily: Conv_Kanit-Medium
    fontSize: 28px
    fontWeight: 500
    lineHeight: 33.6px
  body:
    fontFamily: Conv_Kanit-Regular
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  nav:
    fontFamily: Conv_Kanit-Regular
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  link:
    fontFamily: Conv_Kanit-Regular
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  input:
    fontFamily: Conv_Kanit-Regular
    fontSize: 36px
    fontWeight: 400
    lineHeight: 54px
rounded:
  xs: 8px
  sm: 12px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2.5px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 15px
  s8: 20px
  s9: 30px
  s10: 45px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.pill}"
    padding: 8px 5px
    height: 47px
    borderColor: "{colors.ink}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.canvas}"
    padding: 5px 0px 0px
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
    padding: 10px 0px 5px
  text-input:
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    padding: 0px 0px 0px 20px
    height: 54px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink-footer}"
---

## Overview

The measured page is the English home page of the central bank, `https://www.bot.or.th/en/home.html` (title "Bank of Thailand", `lang` en), with a TH / EN switch at the top right. The capture shows a white header with the bank's circular seal and the bilingual wordmark "ธนาคารแห่งประเทศไทย BANK OF THAILAND", a short utility row (About Us, Contact Us, Helps / Complaints), and a main menu of eight items: News & Media, Our Roles, Laws & Announcements, Thai Economy, Research & Publications, Statistics and Dissemination, Our Services, Financial Innovation.

Under the header, a photographic building hero carries a row of dark, translucent data cards with white text: "Policy Interest Rate" showing 1.00% "as of MPC meeting 26 Aug 2026", "Financial Institutions' Holidays" with a dated list, "Inflation Rate (Sep 2026)" with headline 2.82 and core 1.50 against a stated target of 1 - 3 %, and a savings-rate table whose numbers (0.2500) are amber. Each card ends in a "More Details" link with a circled arrow. Two small circular navy buttons at the right edge hold a search icon and "Aa". The page continues with "WHAT'S NEW AT BOT" in large uppercase navy type beside a news carousel (photo, navy title link, grey date), a centered "Highlight Topics" band on pale blue with an underlined title, then article tiles with small category tags such as "International Cooperations" and "Financial Innovation". A navy footer closes the page.

The voice is institutional and data-forward: numbers are the visual headline and the copy is plain English ("Continue reading", "Read More", "More Details", "View all"). The measurement saw 536 visible elements at a 1,280px viewport and a 4,799px scroll height; a cookie overlay was hidden by the extractor and is not documented.

## Colors

The palette is one navy with pale-blue tints.

- **Ink `#003366`** is the most-read text color (1,594 characters), the footer fill (area weight 1,339) and the h2 color. The generated primary call to action has navy text and a 2px navy border. This document sets `primary` to the same `#003366`, because the navy is the brand action color in the capture (the circled arrows, the "Read More" hover fill and the headings); the generated white button fill is kept as `canvas`.
- **Canvas `#ffffff`** fills the header, the news band and the pill buttons. **Pale blue `#e6f3ff`** is the largest measured background area (weight 2,385), used for the Highlight Topics band. **Rule `#c2d3e2`** (57) is a muted blue-gray surface.
- White text (1,487 characters) sits on the hero cards and the footer. **Muted `#666666`** (121 characters) is the date color; **footer link `#99ccff`** (57) is the footer text color; **amber `#ffa700`** (18) colors the savings-rate numbers; **`#ffffff99`** (15) is translucent white text.
- **`#285079` at 60 percent alpha (`#28507999`)** (weight 61) is the translucent navy behind the data cards.
- **`#2020e0`** was measured as the color of a navigation anchor with no text (230 by 78px); it does not appear among the most-read text colors, so it is kept only as `nav-link-text`.

The stylesheet declares only Swiper variables in `:root` (`--swiper-theme-color: #007aff`), a framework default that is not a Bank of Thailand color.

## Typography

Two faces from the same family are measured: **Conv_Kanit-Regular** (2,879 characters) and **Conv_Kanit-Medium** (413). The stylesheet also declares Conv_Kanit-Light and Conv_Kanit-Bold, a serif set **Pridi** (Light, Regular, Medium, Bold; Pridi-Light is among the loaded fonts) and the `icomoon` icon font. Medium and Regular are separate font files (both register as weight 400 in the loaded-font list), and the Medium face is used at `font-weight: 500`. No source or license page for these font files was opened.

| Role | Face | Size / line height | Weight |
| --- | --- | --- | --- |
| Hero card title (h3 / display) | Conv_Kanit-Medium | 24px / 28.8px | 500 |
| Section title (h2) | Conv_Kanit-Medium | 28px / 33.6px | 500 |
| Body | Conv_Kanit-Regular | 18px / 27px | 400 |
| Nav | Conv_Kanit-Regular | 20px / 30px | 400 |
| Link / footer | Conv_Kanit-Regular | 14px / 21px | 400 |
| Input | Conv_Kanit-Regular | 36px / 54px | 400 |

The most-read sizes are 18px (1,552 characters), 14px (1,143), 56px (125), 24px (111), 38px (110), 12px (107), 32px (47), 15px (32) and 28px (16); 64px (15), 40px (12) and 60px (5) are the large display values on numeric figures and headings. Weights by character: 400 (2,929), 500 (317), 700 (46). No letter spacing was measured. **Font substitutes:** use a Thai-capable sans with true 400 and 500 weights and a taller line box (1.5 on 18px body); the face must cover Thai because this site is bilingual.

## Layout

The layout is a full-width header, a photographic hero with a horizontally arranged card row, then centered content bands. The measured paddings are 5px (54 times), 15px (42), 10px (23), 20px (17), 8px (13), 30px (8), 1px (7), 2.5px (6), 55px (5), 6px (3) and single uses of 45, 50, 60, 70, 80 and 90px; no gaps were measured. The header block measured 170px high.

News content is a carousel, with a left rail holding the "WHAT'S NEW AT BOT" title and two circular arrow buttons, and large image cards to its right. "Highlight Topics" is a centered title above a one-large-plus-two-small tile layout. The footer is 284px high; its text begins "Supports", "Contact Us", "Useful Links", "Financial Institutions Holi...".

## Elevation & Depth

Elevation is carried by translucency rather than shadow. No resting box shadow was measured on visible elements. The hero cards are translucent navy (`#28507999`) over a photograph, which creates a glass-like layering; the pale-blue band `#e6f3ff` separates the Highlight Topics area from the white news area; and the navy footer anchors the page. The stylesheet corpus lists shadows such as `0 5px 5px 0 rgba(0,0,0,.1)` (8 declarations), `0 5px 6px 0 rgba(0,0,0,.16)` (4) and `0 0 9px 0 rgba(0,0,0,.75)` (3), plus 171 `none!important` overrides; where the declared shadows apply on this page was not measured.

## Shapes

Measured radii: 8px (31 elements; 235 declarations in the stylesheet), 1000px (15; the pill buttons), 50% (5; the circular icon buttons), 12px (2), and asymmetric `8px 0 0 8px` and `0 8px 8px 0` (1 each). The tokens are `xs` 8px, `sm` 12px and `pill` 9999px. The 1000px pill is the signature shape for calls to action, and 8px is the shape for cards, images and tags. The seal and circular arrow glyphs follow the round motif.

## Components

**Primary button ("Continue reading").** White fill, navy `#003366` text, 2px solid navy border, 1000px radius, Conv_Kanit-Regular 18px/27px, padding `8px 5px`, 47px high and 174px wide. At the 390px mobile pass the same button was 16px/24px type, 174 by 44px with the same padding and radius. On hover (measured on a "Read More" pill, 40px high) the fill becomes navy `rgb(0, 51, 102)` and the text and border become white.

**Hero data card.** Translucent navy with a 24px/500 white title, a small white subtitle and a large figure, plus a "More Details" link with a circled arrow.

**Navigation.** Main menu items are navy text on white in the capture; the generated nav-link role is Conv_Kanit-Regular 20px/30px with `10px 0 5px` padding, and the nav block's base text is 14px/21px, the same size as the footer links.

**Search input.** Conv_Kanit-Regular 36px/54px, white text, 54px high and 440px wide, padding `0 0 0 20px`; it has no fill or border of its own.

**Circular icon buttons.** Navy round buttons carrying a search icon and "Aa" at the right edge, and outlined round arrow buttons in the news rail.

**Tags.** Small rounded labels over images ("International Cooperations", "Financial Innovation").

**Footer.** Navy `#003366` fill with `#99ccff` Conv_Kanit-Regular text at 18px/25px.

No `card` component with border or shadow was detected; news and topic items are image-plus-title tiles.

## Design System Architecture

No public Bank of Thailand design system or brand-guideline page was found: the home page opened at https://www.bot.or.th/en/home.html links to About Us pages (about-us, committee, governors, history, organization, strategic plan) but to no design-system or brand-guideline page. The site is built on Adobe Experience Manager client libraries: the page references `/etc.clientlibs/bot/clientlibs/` stylesheets named `clientlib-base`, `clientlib-site`, `clientlib-cookies`, `clientlib-dependencies` and `clientlib-react`, plus the AEM Core Components forms runtime stylesheet.

The `:root` contains only Swiper custom properties (`--swiper-theme-color`, `--swiper-navigation-size: 44px`), so the system is expressed in compiled CSS and class styling rather than in design tokens. The de-facto rules are the navy `#003366` brand color, the Kanit-based Thai and Latin type pair, 8px corners and 1000px pills.

## Do's and Don'ts

**Do**
- Use `#003366` for text, headings, outlines and the footer, on white or `#e6f3ff`.
- Make calls to action pill-shaped: 1000px radius, 2px navy border, white fill, hover inverted to navy fill with white text.
- Present key figures large (rates, indexes) on translucent navy cards.
- Use Conv_Kanit-Medium at weight 500 for titles and Conv_Kanit-Regular at 400 for body, at 18px/27px.
- Keep Thai and English labels in the same face.

**Don't**
- Don't use Swiper's `#007aff` as a brand color.
- Don't add drop shadows to tiles; none were measured at rest.
- Don't present the cookie overlay as part of the interface.
- Don't use pure black for text; the measured ink is `#003366`.

## Responsive Behavior

One mobile pass was recorded at 390px. Measured values: the card title (h3) stays 24px/28.8px weight 500 and the h2 stays 28px/33.6px; body text is 18px/27px and the first paragraph spans the full 390px width; the primary pill measures 174 by 44px with 16px/24px type; the nav block measured 390px wide and 91px high with 16px/24px text in `#000000` and padding `15px 0px`. Mobile font sizes by character are 18px (1,279), 14px (862), 16px (401), 38px (165), 12px (116) and 24px (111). The mobile arrangement of the hero cards, menu and footer was not measured.

## Iteration Guide

1. Set canvas `#ffffff`, ink and primary `#003366`, pale-blue band `#e6f3ff`, footer `#003366` with `#99ccff` text.
2. Load Conv_Kanit-Regular and Conv_Kanit-Medium (or a Thai-capable substitute) and apply 18px body, 24px and 28px titles.
3. Build the header (seal, wordmark, utility links, eight-item menu), a photographic hero with translucent navy cards, then the news rail and the pale-blue Highlight Topics band.
4. Make every call to action a navy-outlined pill with the measured hover inversion.
5. Check mobile only against the measured numbers: 24px and 28px titles, 18px body, 174 by 44px pill.
6. Measure any additional component first with `node web/scripts/extract-tokens.mjs --slug=bot--<page> --url=<url> --force --no-motion`.
