---
version: alpha
name: EASY TOMORROW
category: "Food & Beverage"
description: "EASY TOMORROW (easytomorrow.com/en), a Samyang hangover-relief brand: a white page of bento cards with 33.73px to 66px rounded corners on #f5f5f5, Pretendard type at 34px weight 600 with -0.68px tracking, cyan #00a5e7 title accents, a navy #21439c About tile, 70%-black #000000b3 body text and round white arrow buttons."
colors:
  canvas: "#ffffff"
  ink: "#000000b3"
  ink-strong: "#000000"
  primary: "#00a5e7"
  surface-card: "#f5f5f5"
  brand-navy: "#21439c"
  surface-dark: "#282828"
  ink-mid: "#555555"
  ink-muted: "#767676"
  hairline: "#ffffff6b"
typography:
  display:
    fontFamily: __pretendard_f911f7, __pretendard_Fallback_f911f7
    fontSize: 34px
    fontWeight: 600
    lineHeight: 47.6px
    letterSpacing: "-0.68px"
  display-mobile:
    fontFamily: __pretendard_f911f7, __pretendard_Fallback_f911f7
    fontSize: 26.0001px
    fontWeight: 700
    lineHeight: 31.2002px
    letterSpacing: "-0.520003px"
  subheading:
    fontFamily: __pretendard_f911f7, __pretendard_Fallback_f911f7
    fontSize: 24px
    fontWeight: 600
    lineHeight: 33.6px
    letterSpacing: "-0.72px"
    textTransform: uppercase
  body:
    fontFamily: __pretendard_f911f7, __pretendard_Fallback_f911f7
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22.4px
    letterSpacing: "-0.4px"
  body-mobile:
    fontFamily: __pretendard_f911f7, __pretendard_Fallback_f911f7
    fontSize: 16.0001px
    fontWeight: 400
    lineHeight: 25.6002px
    letterSpacing: "-0.4px"
  nav:
    fontFamily: __pretendard_f911f7, __pretendard_Fallback_f911f7
    fontSize: 15px
    fontWeight: 400
rounded:
  xs: 28.11px
  sm: 33.73px
  md: 41.23px
  lg: 48px
  xl: 50px
  2xl: 66px
  3xl: 99px
  4xl: 100px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 9px
  s5: 10px
  s6: 11px
  s7: 12px
  s8: 13.3px
  s9: 15px
  s10: 16px
components:
  tile:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.subheading}"
    rounded: "{rounded.sm}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.2xl}"
    padding: 40px 40px 31px
  nav-link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.nav}"
---

## Overview

easytomorrow.com/en (title "EASY TOMORROW", description "EASY TOMORROW is a hangover relief brand, designed for those seeking a refreshing morning after drinking.") is the brand site of a hangover-relief product line made by Samyang Corporation (the footer lists Samyang Corp., Samyang Holdings and the Q.one smartstore as related sites). The page measured here is short (1158px tall at 1280px) and is built as one screen of rounded "bento" cards on a white page.

The capture shows: the Korean wordmark 상쾌환 in navy at top left and a round navy menu button at top right; on the left a column of three light-grey (#f5f5f5) cards, "EASY TOMORROW JELLY STICK ZERO" (title in black and cyan, a pink ZERO badge, product sticks in pastel colours), an intro block "EASY TOMORROW Products" with two cartoon mascots beside a smaller card "Quick and easy hangover relief", and "EASY TOMORROW BOOSTER ZERO" with two product bottles; on the right a very large rounded video card with a 3D-rendered city street, a cartoon character and the white title "EASY TOMORROW STREETS" with a round white arrow button; and beneath it two smaller cards: a navy "About Us" card with a 3D character and a photo card "Media" with outlined pill chips "TV Commercials" and "Viral Videos". The footer has Contact Us and Site Map links, a hairline rule, small company details, round social icons (Instagram, YouTube, X) and a "Family site" pill dropdown.

Copy is short, friendly and English with a cartoon-mascot tone. The navigation labels in the source are Street, View Products, Brand, Products, Media, News, Easy Tomorrow US, About Us and History, with language links EN, KR, JP and CN.

## Colors

The palette is white, soft grey and two blues. `canvas` #ffffff is the page (2011 area units); #f5f5f5 (627) is the fill of the product cards and Media/Products tiles; translucent white #ffffffb3 and #ffffff99 are layered over imagery (431 and 86 units). Text is `ink` #000000b3, black at 70% (478 characters), for body copy, and `ink-strong` #000000 (472 characters) for titles; #555555 (73) and #767676 (13) are used for small secondary lines in the footer and captions.

`primary` #00a5e7 is the cyan used for accent words in titles ("STICK ZERO", "BOOSTER", "EASY TOMORROW") and for the first word of the mobile h1 (47 characters). The brand navy `brand-navy` #21439c (51 units) fills the About Us card and matches the 상쾌환 wordmark in the capture; #282828 (51 units) is another dark area. Borders are #ffffff6b (2 uses), #ffffff and #f0f0f0 (1 each); a #0000006b and #00000066 black overlay (260 and 51 units) darkens photographic cards behind white text and is a scrim, not a brand colour. The Swiper carousel library declares `--swiper-theme-color` #007aff, a library default that is not part of the brand palette.

## Typography

A single family, Pretendard, loaded through Next.js font optimisation (the measured family name is `__pretendard_f911f7` with a metric fallback), covers all 1188 measured characters. Noto Sans JP and Noto Sans SC are also loaded for the JP and CN language versions. The hierarchy is made from weight and tracking: the h1 "EASY TOMORROW STREETS" is 34px weight 600 on a 47.6px line with -0.68px tracking; card titles are uppercase 24px weight 600 on 33.6px with -0.72px; the mobile h1 is 26.0001px weight 700 with -0.520003px; body is 14px weight 400 on a 22.4px line with -0.4px tracking; navigation is 15px.

Sizes by characters: 11px (538, footer fine print), 14px (236), 12px (154), 16px (98), 24px (64), 26.0006px (38), 34px (21), 30px (20, -0.6px). Weights: 400 (819), 600 (165), 500 (150), 700 (54). Tracking is negative at every size (about -0.02em to -0.03em), and uppercase is used for product titles. Pretendard is an open-licence typeface; no other family needs substituting.

## Layout

The page is a 1280px-wide, 1158px-tall single screen. No column grid is declared in the root variables; the cards form a two-column bento: the left column holds three stacked cards, the right column a tall video card above two side-by-side small cards. The navigation block measures 108px tall at desktop with a logo at the left margin and a round menu button at the right. Gaps are mostly 6px (12 uses) and 12px (7), with 42px (4), 10px (4), 33px (2) and 15px (2); paddings 16px, 6px and 22px (4 each), 20px, 40px and 18px (3 each). The large card padding is 40px 40px 31px. The footer sits below with a hairline above company details and a right-aligned cluster of round social icons.

## Elevation & Depth

No box shadow was recorded on a measured element; the stylesheet declares `0 2px 5px 0 rgba(0, 0, 0, 0.26)` for a carousel control. Depth comes from card fills against the white page, from 3D-rendered artwork inside the cards (a cartoon street, mascots, product packs that overlap card edges) and from dark overlays on photo cards. Product images deliberately break out of their card bounds at the top edge.

## Shapes

Radii are very large and varied: 33.7331px on the product tiles (6 elements), 100px on pills (9), 100% on circles (8), 50% (4), 99px (2), 41.2288px (2), 28.1114px (2) and a left-only 66px (`66px 0px 0px 66px`, 1 element) on a card end. The stylesheet also lists 32px, 48px, 64px, 80px and 96px. Rounded corners define the whole system: cards, chips, icon buttons and the dropdown are all rounded, and the arrow buttons and social icons are circles.

## Components

**Product tile** (`tile`): #f5f5f5 fill, 33.7331px radius, uppercase 24px weight-600 title in black with an accent phrase in cyan, a grey 14px description and a product image bleeding past the top-right corner; sizes include 568px by 249px and 195px tall. A pink "ZERO" pill badge sits at the top-right on two tiles. Recorded hover: the title colour changes (to white on the Jelly tile; the Products tile text changes from cyan to white) while the fill stays #f5f5f5.

**Hero video card**: a 3D city scene under a dark overlay, a white 34px title and a white circular button with a black arrow.

**About Us card**: #21439c fill with a lighter blue circular shape and a 3D character, white title.

**Media card**: photograph with outlined translucent pills (border #ffffff6b), small white text.

**Round icon button**: white circle with an arrow; navy circle for the menu; light grey circles for social icons.

**Family site select**: a light pill-shaped dropdown with a chevron.

**Footer text**: 11px grey company details separated by thin vertical lines, "COPYRIGHT (C) 2024 SAMYANG CORPORATION. ALL RIGHTS RESERVED."

## Design System Architecture

No public design system, brand guidelines or press kit was found on the pages opened (https://www.easytomorrow.com/en and its navigation and footer); the footer links only to Samyang corporate and shop sites. The site is a Next.js app (`/_next/static/css/*.css` and the font-loader family names `__pretendard_f911f7`), with Swiper for carousels. The root custom properties are minimal (only `--swiper-theme-color`), so the system lives in compiled CSS rather than named tokens: a single typeface, a few card fills, one cyan accent and large radii.

## Do's and Don'ts

Do compose pages from rounded cards on a white page with generous 40px padding, and let product renders overflow the card edges. Do use cyan #00a5e7 for one accent phrase in each title and navy #21439c for brand panels. Do keep tracking negative and titles uppercase. Do make icon buttons circular.

Don't use square corners or drop shadows on cards. Don't use Swiper's default blue #007aff as a brand colour. Don't put body text at full black: running copy is 70% black. Don't treat the dark overlay on photo cards as a surface colour. Don't introduce a second typeface.

## Responsive Behavior

At 390px the h1 reduces to 26.0001px (weight 700, line-height 31.2002px, -0.520003px tracking) and its first word "EASY" is cyan (#00a5e7); body copy is 16.0001px on a 25.6002px line (the block measured 175px wide); the navigation block is 72px tall (108px at desktop) and its text is 11px weight 700. Mobile sizes by characters: 12px (598), 16.0001px (221), 18px (74), 14px (60), 21.9999px (50), 20px (38), 11.9999px (26), 10px (24). How the bento grid rearranges on mobile is not measured.

## Iteration Guide

Start with canvas #ffffff, ink #000000b3, ink-strong #000000, primary #00a5e7 and navy #21439c. Build one screen of rounded cards (33.73px radius on #f5f5f5, 66px on large panels) with a tall video card and small image cards, uppercase Pretendard titles at 24px/600 and -0.72px tracking, and round arrow buttons. Check that every control is rounded, that text tracking is negative, and re-measure before adding pink or other badge colours.
