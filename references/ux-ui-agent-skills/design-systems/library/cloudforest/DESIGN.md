---
version: alpha
name: CloudForest
category: "Thai Brands"
description: "CloudForest (cloudforest.co.th), a Thai cloud hosting provider, pairs a deep brand blue #016fb9 and bright action blue #0496ff on white with Line Seed headlines (45px, weight 500) and Prompt uppercase navigation, 10px-radius buttons, a 15px-radius white feature panel with a soft shadow, and isometric cloud illustrations."
colors:
  canvas: "#ffffff"
  ink: "#353b3c"
  primary: "#0496ff"
  on-primary: "#ffffff"
  indigo: "#4054b2"
  brand-blue: "#016fb9"
  surface-charcoal: "#282828"
  ink-muted: "#777777"
  ink-gray: "#7f7f80"
  ink-dark-gray: "#4f4f4f"
  link: "#222222"
  ink-nav: "#252930"
  band-gray: "#e3e3e347"
typography:
  display:
    fontFamily: "\"Line Seed\", sans-serif"
    fontSize: 45px
    fontWeight: 500
    lineHeight: 39px
  display-mobile:
    fontFamily: "\"Line Seed\", sans-serif"
    fontSize: 29px
    fontWeight: 500
    lineHeight: 26px
  subheading:
    fontFamily: "\"Line Seed\", sans-serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 24.2px
  body:
    fontFamily: "\"Line Seed\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"Line Seed\", sans-serif"
    fontSize: 23px
    fontWeight: 500
    lineHeight: 23px
  nav:
    fontFamily: Prompt, sans-serif
    fontSize: 13px
    fontWeight: 300
    lineHeight: 20px
    letterSpacing: 1.3px
    textTransform: uppercase
  link:
    fontFamily: Prompt, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 24px
rounded:
  xs: 5px
  sm: 10px
  md: 15px
spacing:
  s1: 5px
  s2: 10px
  s3: 12px
  s4: 13px
  s5: 14px
  s6: 15px
  s7: 20px
  s8: 24px
  s9: 50px
  s10: 70px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 12px 24px
    height: 47px
  link:
    textColor: "{colors.link}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink-nav}"
  nav-link:
    textColor: "{colors.ink-nav}"
    typography: "{typography.nav}"
    padding: 13px 12px
---

# CloudForest

## Overview

CloudForest (cloudforest.co.th, page title "CLOUDFOREST.CO.TH – ผู้ให้บริการด้าน Cloud Services อย่างครบวงจร") is the Thai-language website of a cloud hosting and IT services company that names itself "บริษัท CloudForest Co.,LTD" in its body text and "บริษัท คลาวด์ฟอเรสต์ จำกัด" in the footer (home page opened for this document). The services listed on the page are Cloud Hosting, Cloud VPS, Dedicated Server, Colocation, Domain Name, Live Streaming, Software Development and VoIP. The footer address is in Bangkok (Pathum Wan district). No English hero text exists; navigation and some section titles are in English, body copy is Thai.

The home page is a classic hosting-provider landing page. A white header carries the CloudForest logo (a blue "C" mark with speed lines and the name in spaced blue capitals) at the left and three uppercase navigation items (SERVICE with a dropdown caret, ABOUT US, CONTACT US) at the right. Below it is a saturated blue hero whose lower edge is cut into a diagonal "V" and layered with a brighter blue wedge; the white headline reads "บริการ Cloud Hosting การันตีความเร็ว แรง ทุกแพ็กเกจ", followed by a short Thai paragraph and two compact blue buttons ("รายละเอียดเพิ่มเติม" and "ติดต่อเรา"). On the right an isometric illustration shows a server stack, a laptop, a monitor and a phone under 3D clouds.

The next section is a blue heading "CLOUD FORST" (as spelled on the page) with the subtitle "ผู้ให้บริการด้าน Cloud Solutions แบบครบวงจร", an intro paragraph in gray with a thin blue rule at its left edge, and faint circuit-line artwork. A pale cloud-edged gray band follows, holding a white rounded panel titled "ทำไมลูกค้าจำนวนมากจึงไว้ใจใช้บริการของเรา?" with five feature items (SAVE, SCALE, SUPPORT, SAFE, SECURE) each with a blue line-and-fill icon. After another cloud-edged transition comes "OUR SERVICES & SOLUTIONS", a carousel of service slides with an isometric illustration and a "CLOUD VPS" title, and "OUR CLIENTS".

The impression is clean, cheerful and technical: blue everywhere, isometric 3D-style illustrations, rounded blue buttons and soft cloud shapes as dividers, with a friendly mix of Thai and English.

## Colors

- **Canvas `#ffffff`**: the page background (about 61% of the capture).
- **Ink `#353b3c`**: the most-read text color (1885 characters).
- **Primary `#0496ff`**: the measured fill of the main call-to-action button ("คลิกที่นี่เพื่อเริ่มต้น"), with white text; also a measured background of smaller weight (10).
- **Brand blue `#016fb9`**: the color of the H1 "CLOUD FORST", of section titles and feature headings (393 characters of text), and a measured background (weight 650) that matches the blue hero in the capture.
- **Ink muted `#777777`**: the color of the intro paragraph (490 characters); **ink gray `#7f7f80`** (337 characters) and **ink dark gray `#4f4f4f`** (the "SAVE" feature heading) are secondary text colors; **link `#222222`** is the measured link color and **ink nav `#252930`** the navigation text.
- **Indigo `#4054b2`**: the largest measured background area (weight 11612); the capture shows only the upper half of the page, so the element carrying it is not described here.
- **Surface charcoal `#282828`**: a measured dark background (weight 581), not visible in the part of the page captured.
- **Band gray `#e3e3e347`**: a translucent light gray (weight 1025) that forms the cloud-edged bands between white sections.

White is also the second most frequent text color (1068 characters), used on the blue hero and on buttons. The stylesheet declares WordPress preset colors (for example `#0693e3`, `#9b51e0`, `#f78da7`) and a long list of Bootstrap and Font Awesome defaults (`#337ab7`, `#5bc0de`); none was observed on a visible brand element, so none is a token.

## Typography

Two families carry the page: **Line Seed** (loaded at 100, 400, 700 and 800) for headings and body, and **Prompt** (loaded at 300, 400, 500 and 600) for navigation and links. By characters, Line Seed sets 3704 and Prompt 563. Icon fonts (Font Awesome, eicons) are also loaded and are not text styles.

| Role | Family | Size / line height | Weight |
|---|---|---|---|
| Display (H1 "CLOUD FORST") | Line Seed | 45px / 39px | 500 |
| Display, mobile pass | Line Seed | 29px / 26px | 500 |
| Subheading ("SAVE") | Line Seed | 22px / 24.2px | 400 |
| Body | Line Seed | 16px / 24px | 400 |
| Button | Line Seed | 23px / 23px | 500 |
| Navigation | Prompt | 13px / 20px, 1.3px tracking, uppercase | 300 |
| Link | Prompt | 14px / 24px | 500 |

By size, the page's text is led by 17px (1752 characters), 16px (630), 15px (456), 13px (390), 14px (333) and 35px (294); 36px, 20px, 26px and 44px appear on fewer characters. Weights are 400 (3127 characters), 500 (703), 600 (294), 300 (68), 800 (40) and 700 (35). The Thai script and the Latin capitals share Line Seed, so headings in both scripts have the same rounded geometric look; the 14px labels carry 4px letter spacing on 40 characters.

Headline conventions: English section titles are all caps ("OUR SERVICES & SOLUTIONS", "OUR CLIENTS", "CLOUD VPS"); Thai titles are sentence-like and set at the same blue.

**Font substitutes.** Line Seed and Prompt are served by the site and no foundry page was opened for this document. For prototypes, use a rounded geometric sans with Thai coverage at weights 400 and 500 for Line Seed and a light-to-medium Thai-capable grotesque for Prompt.

## Layout

At 1280px the page is 3486px tall. A white header band (the navigation block measures 46px tall) holds logo and menu; the hero is a full-width blue field with text in the left half and the illustration in the right half. Sections after it alternate between white and the translucent gray band, with cloud-shaped edges instead of straight dividers.

The intro text block is a two-column arrangement with decorative circuit artwork at the left and the copy at the right (the measured paragraph is 622px wide). The feature panel is a wide white rounded card inset from the page edges, with the heading centered and a three-by-two grid of icon-and-text items. The services carousel shows one slide at a time with an illustration at the left and the title, one-line description and a blue button at the right, previous and next arrows at the edges, and a row of dots below.

Measured paddings: 12px (30 uses), 24px (25), 10px (24), 512px (24), 5px (13), 14px, 13px, 20px, 15px, 200px, 70px and 50px. The page does not record flex gaps. Spacing tokens run 5, 10, 12, 13, 14, 15, 20, 24, 50 and 70px.

## Elevation & Depth

Depth is light. Two shadows were measured, one element each: `rgba(99, 115, 129, 0.23) 0px 3px 3px -1px` and `rgba(0, 0, 0, 0.08) 0px 0px 15px 1px` (the elements carrying them were not isolated). The stylesheet also lists several heavier recipes (`0 2px 25px rgba(0,0,0,.2)`, `0px 0px 20px 0px rgba(0,0,0,0.15)`) that were not measured on visible elements.

Visual depth comes mainly from illustration: isometric servers and clouds with blue gradients, layered wedges in the hero, and cloud-edged section transitions.

## Shapes

Measured radii: `5px` (24 elements), `10px` (3 elements, the buttons) and `15px` (2 elements, the white feature panel). Tokens: `xs` 5px, `sm` 10px, `md` 15px.

Buttons are rounded rectangles at 10px, not pills. The white feature panel has 15px corners. Section dividers are drawn as organic cloud outlines in the artwork rather than CSS radii. Icons in the feature grid are circles and shields in blue line style.

## Components

- **Primary button**: `{colors.primary}` fill, white Line Seed 23px at weight 500 ("คลิกที่นี่เพื่อเริ่มต้น", 213px wide, 47px tall), radius 10px, padding 12px 24px. At 390px the same button measures 17px type, 41px tall and 170px wide. Hero buttons in the capture ("รายละเอียดเพิ่มเติม", "ติดต่อเรา") are smaller blue buttons of the same shape. Hover state of buttons was not measured.
- **Service button ("รายละเอียดเพิ่มเติม")**: blue rectangle with white bold text beneath each service description in the carousel.
- **Navigation**: Prompt 13px light uppercase with 1.3px letter spacing, 13px 12px padding, 46px tall; on hover the text color becomes `rgba(22, 32, 47, 0.91)`.
- **Link**: Prompt 14px at weight 500 in `{colors.link}`.
- **Feature item**: blue icon, a 22px heading in `#4f4f4f` (SAVE, SCALE, SUPPORT, SAFE, SECURE) and a short gray Thai description.
- **Feature panel**: white card, 15px radius, soft shadow.
- **Carousel**: one slide at a time, arrows and a dot row.

Not documented as brand UI: the cookie consent bar (hidden during capture).

## Design System Architecture

No public brand-guideline or design-system page was found. The home page (https://cloudforest.co.th) was opened; it lists no brand assets, designer credit or theme attribution. Its resource paths reference `wp-content` (WordPress), `revslider` (Slider Revolution) and a cookie-consent plugin, and the stylesheet variables include `--wp--preset--*` WordPress preset variables and `--e-global-typography-*` Elementor global typography variables (used on 95 and 55 font-family declarations).

So the de-facto system is the shipped WordPress and Elementor CSS: font-family declarations are routed through Elementor global typography variables (primary, text, accent and secondary slots), while the measured fonts are Line Seed and Prompt. The WordPress presets (36px "large" and 13px "small" font sizes; spacing steps 0.67rem, 1.5rem and 3.38rem) are present in the variable list.

## Do's and Don'ts

Do
- Use brand blue `#016fb9` for headings and the hero, with `#0496ff` as the brighter action fill.
- Set headings in Line Seed at weight 500 and navigation in Prompt light uppercase with 1.3px tracking.
- Keep buttons at 10px radius with 12px 24px padding and white text.
- Present features as icon-plus-heading-plus-description groups inside a white 15px-radius panel.
- Use isometric server and cloud illustrations and cloud-edged section transitions.

Don't
- Don't use pill-shaped buttons; the measured radius is 10px.
- Don't treat WordPress or Bootstrap default colors as brand colors.
- Don't use more than the two families, Line Seed and Prompt.
- Don't use heavy shadows; the measured ones are soft.
- Don't present the cookie bar as part of the design.

## Responsive Behavior

The mobile pass (390px) recorded: H1 29px / 26px at weight 500, 337px wide (from 45px / 39px); the intro paragraph 13px with 22.1px line height, 337px wide (from 16px / 24px); the primary button 17px with 41px height and 170px width (from 23px, 47px and 213px). The mobile size list is led by 12px (1752 characters), 13px (853), 11px (596), 19px (369) and 14px (342). The extraction recorded no mobile layout data, so how the hero, the feature grid and the service carousel rearrange was not measured.

## Iteration Guide

1. Start from `canvas` `#ffffff`, `ink` `#353b3c`, `brand-blue` `#016fb9` and `primary` `#0496ff`.
2. Load Line Seed (400, 500) and Prompt (300, 500); set headings at 45px / 39px weight 500, body at 16px / 24px, navigation at 13px uppercase with 1.3px tracking.
3. Build buttons at 10px radius with 12px 24px padding and white text on `#0496ff`.
4. Build a blue hero with a diagonal lower edge and a right-side isometric illustration.
5. Use cloud-edged bands in a translucent gray (`#e3e3e347`) between white sections, and a white 15px-radius panel for feature grids.
6. For mobile, use the recorded sizes (29px headline, 13px body, 17px button) and mark other narrow behavior as not measured.
7. Measure any new color on the live page before adding it as a token.
