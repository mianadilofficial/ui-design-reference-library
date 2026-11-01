---
version: alpha
name: Thai News Agency (สำนักข่าวไทย อสมท)
category: "Thai Brands"
description: "Thai News Agency (TNA) of MCOT at tna.mcot.net: Kanit throughout (16px weight 300 body, 600 headings), navy #003183 pill navigation, red #be0217 section bars on royal-blue #2a3a90 bands, white cards with 16px radius, hard navy offset shadows and a black footer."
colors:
  canvas: "#ffffff"
  page-body: "#d6dbdc"
  ink: "#000000"
  primary: "#003183"
  on-primary: "#ffffff"
  surface-light: "#f3f3f3"
  surface-dark: "#242424"
  surface-gray: "#4a4a4a"
  band-blue: "#2a3a90"
  accent-red: "#be0217"
  accent-gold: "#ffd500"
  shadow-navy: "#20396d"
  ink-muted: "#bdbdbd"
  ink-navy: "#0a1737"
  hairline: "#e5e7eb"
typography:
  display:
    fontFamily: __Kanit_8d5f5e, __Kanit_Fallback_8d5f5e
    fontSize: 30px
    fontWeight: 600
    lineHeight: 36px
  body:
    fontFamily: __Kanit_8d5f5e, __Kanit_Fallback_8d5f5e
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
  button:
    fontFamily: __Kanit_8d5f5e, __Kanit_Fallback_8d5f5e
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  link:
    fontFamily: __Kanit_8d5f5e, __Kanit_Fallback_8d5f5e
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 12px
  xl: 16px
  2xl: 24px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 28px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 12px
    height: 36px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
    padding: 12px
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.1) 0px 4px 6px -4px
---

## Overview

This is the Thai-language home page of the Thai News Agency, สำนักข่าวไทย อสมท (https://tna.mcot.net/tna/th), the news arm of MCOT. It is a very long portal page, 12,438px tall at 1280px, and is built with NextUI and Tailwind (per its root variables). When first loaded the page shows a full-screen intro overlay (`intro-page-overlay`, `fixed inset-0 z-[9999]`) with a black and white royal mourning tribute, a cookie consent dialog and display ads. The first capture was dominated by that overlay; after re-measuring, the extractor hid the overlay (`consentOverlaysHidden`: "DIV", "intro-page-overlay fixed inset-0 z-[9999]") and the capture shows the real page. The tribute, consent dialog, intro overlay and the floating ad units are not documented as brand UI.

The page below the intro is a stack of news bands. A white strip of recent-story cards with Prev and Next buttons leads to a section titled "เจาะลึกศึกเลือกตั้ง 69" (an election special) with a left black bar and a "ดูเพิ่มเติม" (see more) link, then "Hot News" with a large lead story on the left and a column of four small stories on the right, with a pagination of dashes. Then a royal-blue band with a red full-width pill header "การเมือง" (politics) over a row of white story cards with 16px radius, followed by further colored bands for economy, sports and culture, an "English News" block and a "PR News" block, and a dark footer.

## Colors

The page background is a gradient from `#d6dbdc` to white (`--background-start-rgb: 214,219,220`, `--background-end-rgb: 255,255,255`), with white `#ffffff` as the largest measured area (16,392) and `#000000` text on it (13,690 characters). The brand blue is navy `#003183`, the fill of the active "หน้าหลัก" (Home) pill with white text and the color of 154 characters of link text; around it a lighter royal blue `#2a3a90` (1,165) fills the colored section bands, and `#20396d` is the hard offset shadow color on story cards. Red `#be0217` (523) fills the full-width section header pills and `#ff0000` (96) is a second measured red. Dark surfaces are `#242424` (711), `#4a4a4a` (1,166) and `#000000` (5,275), and `#f3f3f3` (1,505) is the light gray band. `#ffd500` gold (8 area, 49 characters) is measured on small text. White text is 3,448 characters; muted gray `#bdbdbd` is 1,788 characters (meta lines on dark bands); `#0a1737` is a dark navy text (293). `--swiper-theme-color: #007aff` is the carousel library default and is not used on brand chrome.

## Typography

A single family: Kanit (the site's self-hosted Next.js font file, named `__Kanit_8d5f5e` with a `__Kanit_Fallback_8d5f5e` metric fallback), 12,909 measured characters at the time of the first measurement, with weights 300, 400, 500, 600 and 700 in use. Inter and Anton are also referenced in the CSS corpus and not found on measured text. Sizes: 16px (15,131 characters, body and card titles), 18px (2,908), 14px (2,172, pills and meta), 12px (378), 30px (172), 24px (115) and 36px (81, large section titles), 10px (13). Body text is 16px/24px weight 300; the first heading-like role is 30px/36px weight 600; pills and buttons are 14px/20px weight 400. The extractor's first heading role was a paragraph inside the hidden intro overlay, so the 30px value is a measured value of the site's type scale and not a visible page heading.

## Layout

A full-width stack of bands with a centered container; the page body inside the container uses horizontal card rows with Prev and Next controls below the row. The Hot News block is a two-column layout (a large 16px-radius lead image with a white caption over a dark gradient at the left, four small story rows with a thumbnail at the right). Colored bands (blue, red and others) carry a pill title and a "ดูทั้งหมด" link on the right. Measured paddings: 4px (107), 8px (82), 12px (61), 16px (56), 64px (19), 32px (15). At the top of the viewport there are small utility controls for font size (ก ก ก) and color contrast (c c c), and a version tag "v.prd:0.0.158".

## Elevation & Depth

Two systems. Cards use the Tailwind medium shadow, `0px 10px 15px -3px rgba(0,0,0,0.1), 0px 4px 6px -4px rgba(0,0,0,0.1)` (60 elements). Some highlighted tiles use a hard offset shadow with no blur in navy `#20396d`: 7px 7px (6 elements), 8px 8px (5) and 4px 4px (2), giving a neo-brutalist stacked look. NextUI shadow variables are declared (`--nextui-box-shadow-small/medium/large`) but the measured shadows are the Tailwind and offset ones above.

## Shapes

Radii: 8px (115 elements), 16px (92, cards and lead images), 12px (74), 4px (41, the dark Prev/Next squares), 9999px (29, pills), 6px with top-only and bottom-only variants (tab-like headers) and single 24px, 8px top and 117.14px values. `--nextui-radius-medium` is 12px and `--nextui-radius-large` is 14px. Thumbnails are rounded; the navigation and section headers are full pills.

## Components

**Navigation pill.** Active item "หน้าหลัก": navy `#003183`, white 14px Kanit, full pill, 36px high, 72px wide, padding `8px 12px`. **Section header pill.** Full-width red `#be0217` pill with white bold Thai title (for example "การเมือง"), plus a small red "ดูทั้งหมด" pill at the right. **Story card.** White, 16px radius, Tailwind medium shadow, a 16:9-style thumbnail with a small dark tag inside, a date and view-count meta row in gray with calendar and eye icons, and a two-line title at 16px. **Lead story.** Large 16px-radius image with a dark gradient and a 24-36px white Thai headline. **Prev/Next.** Small dark `#4a4a4a` rectangles with 4px radius. **Accessibility controls.** Font-size and contrast switches at the top. **Footer.** Black, with the MCOT logo and link columns.

## Design System Architecture

No public design system or brand guideline was found; the pages opened exposed none. The site uses NextUI (the root variables include `--nextui-radius-medium`, `--nextui-radius-large`, `--nextui-box-shadow-small/medium/large`, `--nextui-font-size-medium` and `--nextui-divider-weight`) and Tailwind (the `--tw-ring-*` variables), plus Swiper for carousels (`--swiper-theme-color`, `--swiper-navigation-size: 44px`). Brand values (navy, royal blue, red) are applied as literal colors in Tailwind classes rather than as named tokens.

## Do's and Don'ts

Do use navy `#003183` for navigation and links, royal blue `#2a3a90` for section bands and red `#be0217` for section header pills. Do set Thai text in Kanit 300 at 16px/24px and titles at weight 600. Do give cards a 16px radius and the Tailwind medium shadow, and use hard navy offset shadows only for highlighted tiles.

Don't reproduce the full-screen tribute intro overlay, the cookie consent dialog or the ad units as brand UI. Don't use the Swiper default blue `#007aff`. Don't mix extra families; the site uses Kanit only on its measured text.

## Responsive Behavior

Measured on the 390px mobile pass: the page reports no visible header links and no menu toggle in the extraction, a maximum of 1 card column, body text 16px/24px weight 300 in a 302px-wide column, and a measured 16px, 18px and 14px size census similar to desktop. The intro overlay's consent button on mobile was a pill with a 1px white border. Layout reflow of the colored bands is not measured.

## Iteration Guide

1. White canvas over the `#d6dbdc` to white gradient; text `#000000` weight 300 at 16px/24px.
2. Navy `#003183` pill navigation (14px, 36px high); red `#be0217` full-width section header pills on `#2a3a90` bands.
3. White cards: 16px radius, Tailwind medium shadow, gray meta row.
4. Use the navy hard offset shadow (4px, 7px or 8px) for highlight tiles only.
5. Add Prev/Next 4px dark squares to carousels.
6. Re-measure article pages and the English edition before documenting them; only the Thai home page was measured.
