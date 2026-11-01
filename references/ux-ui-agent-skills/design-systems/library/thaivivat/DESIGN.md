---
version: alpha
name: "Thaivivat Insurance"
category: "Thai Brands"
description: "Thai insurer (ประกันภัยไทยวิวัฒน์) home page: PSL Kanda headlines and Prompt body at 20px, brand green #00a350, gray text ladder #666666, light band #f1f2f2, 4px and 8px radii, dark #323232 footer."
colors:
  canvas: "#ffffff"
  page-largest: "#f1f2f2"
  ink: "#666666"
  primary: "#00a350"
  brand-green-alt: "#00a651"
  accent-yellow: "#ffcb05"
  surface-2: "#323232"
  ink-3: "#adadad"
  ink-4: "#58595b"
  ink-5: "#000000"
  ink-6: "#231f20"
  hairline: "#e5e5e5"
typography:
  display:
    fontFamily: psl_kandaboldSVG, psl_kandabold
    fontSize: 42px
    fontWeight: 400
    lineHeight: 46.2px
  display-mobile:
    fontFamily: psl_kandaboldSVG, psl_kandabold
    fontSize: 21px
    fontWeight: 400
    lineHeight: 23.1px
  heading:
    fontFamily: Prompt
    fontSize: 40px
    fontWeight: 600
    lineHeight: 56px
  body:
    fontFamily: Prompt
    fontSize: 20px
    fontWeight: 400
    lineHeight: 26px
  button-secondary:
    fontFamily: psl_kanda_extraregularSVG, psl_kanda_extraregular
    fontSize: 16px
    fontWeight: 100
    lineHeight: 22.8571px
rounded:
  xs: 4px
  sm: 8px
spacing:
  s1: 2px
  s2: 6px
  s3: 8px
  s4: 9px
  s5: 10px
  s6: 12px
  s7: 15px
  s8: 22px
  s9: 24px
  s10: 40px
components:
  button-secondary:
    textColor: "{colors.ink-4}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 6px 12px
    height: 37px
  footer:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.canvas}"
---

## Overview

Thaivivat Insurance (บริษัท ประกันภัยไทยวิวัฒน์ จำกัด (มหาชน)) is a Thai general insurer; the measured page is the Thai home at thaivivat.co.th/th/index.php. The page opens with a bright green header bar carrying the logo, the main menu (แบบประกันภัยของเรา, บริการลูกค้า, รู้จักเรา, ข้อมูลนักลงทุน, บทความ, ร่วมงานกับเรา, ติดต่อเรา), a TH / EN language switch and a "buy insurance online" cart link. Below it is a full-width promotional hero in green tones ("Thaivivat Caring Forward", a tax-deduction campaign for motor insurance) with a rounded green registration button, a row of campaign partner logos, and a tab strip (Caring Forward, special promotions 75th Thaivivat, Well Being, Thaivivat app).

Further down are a story block with a video thumbnail, a promotions section with three round green icon links (รถยนต์ car, เดินทาง travel, สุขภาพ health) set against a faint city illustration, and a dark gray footer with company address, license number, social icons, payment-method logos and policy links. The visual language is friendly and optimistic: saturated green, light mint and gray backgrounds, round icons and photographs of families. The brand's yellow (#ffcb05) is measured only as small accent text, matching the yellow in the company logo.

## Colors

The page canvas is white (#ffffff) with a light gray band color #f1f2f2 that covers the largest background area. The measured brand greens are #00a350 and #00a651 (backgroundColorsByArea, used by the header and the round icon buttons); they are the identity color of the site, so the primary token here is #00a350 rather than the generator's yellow. The generated primary, #ffcb05 yellow, is kept as accent-yellow because it is measured only as text color on two characters.

Text colors: #666666 is the most-read body text (the site's --gray-700), #58595b is used for secondary labels and the secondary button, #231f20 for the h1 and strong headings, #000000 for the h2, and #adadad for muted text. A dark gray #323232 fills the footer. The hairline color is #e5e5e5 (--gray-300). The site's root variables define a gray scale (--gray-50 #fbfbfb through --gray-900 #252525) and --tertiary #adadad. The Swiper carousel's default blue (#007aff, --swiper-theme-color) is a library default and not a brand color.

- Green (#00a350, #00a651) for the header and action icons.
- Yellow (#ffcb05) as a small accent only.
- Gray text ladder: #231f20, #58595b, #666666, #adadad.

## Typography

The page mixes two Thai families. Headlines use the PSL Kanda family (psl_kandabold for the h1), body and section text use Prompt (--font-prompt: Prompt with psl_kanda_extraregular as fallback), and the page body base is psl_kanda_extraregular at 16px with a 22.8571px line height. Loaded faces: psl_kandabold, psl_kanda_extraregular, Prompt 400 and Prompt 600.

Measured sizes: the promotions h1 is 42px (46.2px line height) at weight 400 in psl_kandabold, 21px with a 23.1px line height at the 390px mobile pass. The story h2 is 40px at weight 600 in Prompt with a 56px line height; on mobile it is 32px with a 44px line height. Body paragraphs are 20px at weight 400 with a 26px line height; on mobile they are 18px with a 23.4px line height. Secondary buttons are 16px with weight 100 and a 22.8571px line height. The bold appearance of PSL Kanda comes from the bold font file itself, which is why the measured weight is 400.

## Layout

The layout is a series of full-width bands: green header, hero banner, tab strip on #f1f2f2, a content card with a drop shadow, a mint-tinted story band with text left and a rounded video thumbnail right, a pale promotions band, and the dark #323232 footer in three columns (company info, contact and social, payments and policies). Content is left-aligned in the story band and centred in the promotions band. Spacing values measured on the page are 2px, 6px, 8px, 9px, 10px, 12px, 15px, 22px, 24px and 40px.

## Elevation & Depth

Depth is limited to one measured shadow on the white content card in the tab area: rgba(0, 0, 0, 0.2) 0px 4px 8px 0px, rgba(0, 0, 0, 0.19) 0px 6px 20px 0px. The rest of the page separates areas by background color (mint, light gray, white, dark footer) and by imagery. The live-chat mascot in the right margin is a third-party-style overlay widget and not documented as brand UI.

## Shapes

Only two radii are measured: 4px (the common value, used on small buttons and chips) and 8px (the video thumbnail and cards). The round icon buttons in the promotions band and the rounded green hero button are pill/circle shapes in the capture but their computed radii were not part of the measured radius list, so only the 4px and 8px values are tokens here.

## Components

- Secondary button: #58595b text, 16px weight 100, 37px high, padding 6px 12px, 4px radius.
- Header navigation: white bold Thai labels on #00a350, separated by thin vertical rules.
- Tab strip: dark text labels on #f1f2f2 with a green underline on the active tab.
- Promotion icon link: circular green icon with a Thai label (car, travel, health).
- Footer: #323232 fill, white (#ffffff) text, three columns.
- Content card: white with the shadow above and an 8px class radius.
No primary CTA button was detected by the extractor, so no button-primary token is declared.

## Design System Architecture

No public design system or brand guideline link was found on the home page, so no external research was done. The de-facto system is a small custom stylesheet with CSS variables: a gray scale (--gray-50 #fbfbfb, --gray-100 #f6f6f6, --gray-200 #f1f1f1, --gray-300 #e5e5e5, --gray-400 #c2c2c2, --gray-500 #a4a4a4, --gray-600 #7a7a7a, --gray-700 #666666, --gray-800 #474747, --gray-900 #252525), --tertiary #adadad and --font-prompt. A Swiper carousel (navigation size 44px) is used for sliders.

The page's tone in microcopy is warm and campaign-driven: the hero names a social-good program ("Caring Forward"), the story block explains in plain Thai that safe driving leads the insurer to donate to a foundation chosen by the customer, and calls to action are short verbs such as register, buy online and view promotions. Imagery is photographic and people-centred (children, families) with green tint overlays on the hero, which keeps the saturated brand green consistent across photos and flat color areas. Illustrations of a skyline and a plane sit behind the promotions block at very low contrast so that the three category links remain the focus. Product categories are presented by life situation (car, travel, health) rather than by policy codes.

## Do's and Don'ts

- Do use green (#00a350) for the header and icon actions, with white text.
- Do use PSL Kanda for display headlines and Prompt for readable text.
- Do keep a calm gray text ladder (#231f20, #666666, #adadad) on white or #f1f2f2.
- Do use round green icons with a short Thai label for product categories.
- Don't use the Swiper blue (#007aff) as a brand color.
- Don't use yellow (#ffcb05) as a large fill; it is measured only as accent text.
- Don't document the live-chat mascot as a brand component.

## Responsive Behavior

Measured at the 390px mobile pass: the h1 is 21px with a 23.1px line height in a 390px box; the h2 is 32px with a 44px line height in a 360px box; body text is 18px with a 23.4px line height in a 360px box; the button text is 14px with a 15.4px line height in a 350px box. Menu collapse, column stacking and breakpoints were not measured.

## Iteration Guide

1. Set canvas #ffffff, bands #f1f2f2, text #666666, headlines #231f20, accent #00a350.
2. Use PSL Kanda for display and Prompt 400/600 for text; body 20px with 26px line height.
3. Keep radii small (4px and 8px) except for round icon buttons.
4. Footer in #323232 with white text.
5. Hover, dark mode and button states were not measured.
