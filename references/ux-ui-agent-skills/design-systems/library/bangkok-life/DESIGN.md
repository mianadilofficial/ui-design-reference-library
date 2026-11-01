---
version: alpha
name: Bangkok Life Assurance
category: "Thai Brands"
description: "Bangkok Life Assurance (กรุงเทพประกันชีวิต) Thai homepage: white canvas, DB Ozone X typeface at 19px body and 30px display, bright cyan #28b2ee action buttons, deep blue #0057a8 headings with #004a8e secondary buttons, #eaf4fa tint, and 2px-radius controls."
colors:
  canvas: "#ffffff"
  ink: "#656565"
  ink-strong: "#212529"
  ink-body: "#444444"
  primary: "#28b2ee"
  on-primary: "#ffffff"
  primary-hover: "#57c3f2"
  brand-blue: "#0057a8"
  button-secondary-bg: "#004a8e"
  surface-tint: "#eaf4fa"
typography:
  display:
    fontFamily: "\"DB Ozone X\""
    fontSize: 30px
    fontWeight: 500
    lineHeight: 36px
  display-mobile:
    fontFamily: "\"DB Ozone X\""
    fontSize: 24px
    fontWeight: 500
    lineHeight: 28.8px
  subheading:
    fontFamily: "\"DB Ozone X\""
    fontSize: 21px
    fontWeight: 500
    lineHeight: 21px
    textTransform: uppercase
  body:
    fontFamily: "\"DB Ozone X\""
    fontSize: 19px
    fontWeight: 400
    lineHeight: 19.2px
  button:
    fontFamily: "\"DB Ozone X\""
    fontSize: 22px
    fontWeight: 400
    lineHeight: 22px
  button-large:
    fontFamily: "\"DB Ozone X\""
    fontSize: 24px
    fontWeight: 500
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 4px
  md: 5px
  pill: 9999px
spacing:
  s1: 1px
  s2: 3.2px
  s3: 4px
  s4: 4.4px
  s5: 5px
  s6: 6px
  s7: 6.4px
  s8: 7.6px
  s9: 8px
  s10: 12px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 4.4px 12px
    height: 33px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-large}"
    rounded: "{rounded.xs}"
    padding: 7.6px 12px
    height: 41px
    borderColor: "{colors.button-secondary-bg}"
---

## Overview

The Bangkok Life Assurance site (https://www.bangkoklife.com/, which redirects to /th) is a bright, friendly life-insurance homepage. The measured page title is simply "กรุงเทพประกันชีวิต" and the capture shows the logo (a blue drop-and-figure symbol with the Thai name and "BANGKOK LIFE") top left, a row of small utility links with icons above the main navigation (agents and advisers, corporate customers, investor relations, sustainability, a phone number 02-777-8888, and an EN language toggle), a main navigation (ผลิตภัณฑ์, ซื้อประกันออนไลน์, บริการลูกค้า, ร่วมงานกับเรา, รู้รอบด้าน, ติดต่อเรา) and a cyan "ระบบบริการออนไลน์" button.

Below the header comes a full-width carousel hero (the capture shows "สร้างเงินออม กรุงเทพ สุดคุ้ม" beside a cyclist in a suit), an insurance-plan finder bar on a blue panel with age and interest fields and a deep-blue "ค้นหาผลิตภัณฑ์" button, a large banner of a mother and child, a promotional block for the "BLA Happy Life" mobile app with a deep-blue download button, and a horizontally scrolling set of cards ("โปรโมชั่นพิเศษ", "เอกสารยื่นภาษี", "บีแอลเอ แฮปปี้ ไลฟ์ คลับ", "คำถามที่พบบ่อย") headed "ครอบครัวแอลเอ". Photography is warm, clean and people-led; illustrations include a friendly water-drop mascot. Gradients of light blue sky tones give the banners an airy feel.

A live-chat widget with a consent notice and a cookie banner (`onetrust-banner-sdk`, hidden before measurement) overlap the capture; they are third-party utilities and are not brand UI.

## Colors

All values are measured.

- **canvas #ffffff** is the main background (957 area units), with **surface-tint #eaf4fa** as the pale blue tint behind panels (219 units).
- **ink #656565** is the most-read text colour (about 730 characters); **ink-strong #212529** (283 characters) and **ink-body #444444** (203) also carry body copy.
- **primary #28b2ee** is the bright cyan of the "ระบบบริการออนไลน์" button and other fills (157 area units), with white text (**on-primary #ffffff**) and a lighter hover state **primary-hover #57c3f2**.
- **brand-blue #0057a8** is the deep blue that colours headings such as "ให้เราช่วยหาแผนความคุ้มครองที่เหมาะกับคุณ" (199 characters); **button-secondary-bg #004a8e** fills the deep-blue buttons such as "ค้นหาผลิตภัณฑ์".

Bootstrap's default blue #007bff (21 characters of link text) and the default grey #adb5bd for placeholders also appear, as do Bootstrap's `--primary`, `--green`, `--pink` and similar root variables; these are framework defaults and are not brand colours.

## Typography

One family, **DB Ozone X**, supplies the whole page (about 1,700 characters), loaded in weights 400 and 500. The measured roles are display 30px / 36px / 500 (mobile 24px / 28.8px), an uppercase subheading 21px / 500 used for labels such as "CALL CENTER", body 19px / 400, primary button 22px / 400 and secondary button 24px / 500. The size mix by characters is 22px (481), 21px (337), 18px (319), 27px (202), 24px (120), 19px (61), 37px (43), 26px (42), 30px (41) and 50px (24). Thai type is set generously (22px is the most used size). A small amount of text uses Open Sans and Helvetica (13 characters each), from embedded widgets. Substitute with a Thai-capable rounded sans (for example Noto Sans Thai) if the licensed face is unavailable.

## Layout

The desktop page is 1280px wide and 3,516px tall. Content sits in a centred container with the hero and banners spanning the container width, and rows of tiles below. Paddings are 15px (40 uses), 16px (39), 3.2px (21), 8px, 12px and 32px. The finder bar is a rounded blue panel overlapping the bottom of the hero. The card carousel runs off the right edge, suggesting a horizontal slider (the site loads the Slick carousel library). The navigation row, top-right utility row and the logo sit in a two-tier header.

## Elevation & Depth

Shadow use is light and mixed. Four elements use an inset 1px ring `rgb(233, 236, 239) 0px 0px 0px 1px inset`, one uses a soft drop `rgba(0, 0, 0, 0.2) 0px 4px 6px 0px`, one a top-facing `rgba(0, 0, 0, 0.1) 0px -2px 6px 0px`, and one a thin black halo; the extraction does not say which elements they belong to. Depth in the page mainly comes from photography, tinted panels and overlap between the hero and finder bar.

## Shapes

Controls are almost square with a 2px radius (22 uses), including the buttons and form fields, while the other measured radii are 50% (13 uses, on circles such as the EN badge and carousel arrows), 5px, 4px, a 4px-top-only radius, and a 19.5px pill on the third-party chat widget (excluded). The tokens keep 2px (xs), 4px (sm), 5px (md) and the circle (pill).

## Components

- **Primary button**: cyan #28b2ee, white 22px text, 2px radius, 33px tall, padding 4.4px 12px; hover lightens to #57c3f2.
- **Secondary button**: deep blue #004a8e, white 24px / 500 text, 2px radius, 41px tall, padding 7.6px 12px.
- **Plan finder**: a blue panel with white inputs for age and interest, plus a deep-blue search button; the inputs show a muted grey placeholder.
- **Banner and app promotion**: large photographic or illustrated banners with a centred or right-aligned headline and a button.
- **Content cards**: image on top, a blue icon badge, a bold title and grey caption, in a horizontally scrolling row.
- **Header**: logo, a utility link row with icons, and the main nav with a thin search icon.

## Design System Architecture

No public design system or brand guideline was found on the pages opened. The homepage links vendor stylesheets (jQuery mmenu, Slick, bootstrap-select, bootstrap-datepicker and fancybox) and an icon font at `/icon/style.css`. The root variables (28 measured) are Bootstrap 4's defaults (`--primary`, `--breakpoint-sm` 576px, `--breakpoint-md` 768px, `--breakpoint-lg` 992px, font-family stacks), which are the stock Bootstrap 4 variable names; the brand colours are applied in custom styles, not through variables. The de-facto system is: DB Ozone X, a cyan and a deep blue, 2px radii and a light tinted background.

## Do's and Don'ts

- Do use cyan #28b2ee for the main action and deep blue #004a8e for search and download actions.
- Do set headings in deep blue #0057a8 and body in grey #656565 or #444444.
- Do keep controls at a 2px radius and use circles only for icon badges and carousel arrows.
- Do use warm, people-led photography and the friendly water-drop mascot.
- Don't use Bootstrap's default #007bff or #28a745 as brand colours.
- Don't treat the live-chat widget or cookie banner as brand UI.
- Don't shrink Thai running text below the sizes measured here; the most used sizes are 18px to 22px.
- Don't place sharp, dark shadows on cards.

## Responsive Behavior

At 390px the extraction reports the H1-level display at 24px / 28.8px and the body at 15.6px, against 30px and 19px on desktop. The root variables include Bootstrap's breakpoints at 576px, 768px and 992px, and the page loads mmenu, a library for off-canvas mobile menus, though the menu itself was not measured. Other behaviour is not documented here.

## Iteration Guide

1. Set the canvas to white and use DB Ozone X at 19px for body, with Thai-friendly line spacing.
2. Use #28b2ee for primary buttons and #004a8e for secondary search and download buttons, both at a 2px radius.
3. Use #0057a8 for headings and #eaf4fa for tint panels.
4. Keep banners photographic and warm, headline in deep blue.
5. Reuse the finder bar overlapping the hero as the key pattern.
6. Re-measure after campaign changes; hero and banners rotate, but the tokens remain steady.
