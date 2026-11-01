---
version: alpha
name: KDDI
category: "Telecom"
description: "KDDI Corporation Japanese corporate site (kddi.com, 'Spark Your Journey'): pale blue-grey page (#f1f2f6) with white (#ffffff) cards, near-black text (#222222) and a deep indigo key color (#0e0d6a) for the contact button and View All arrows, with sky accents (#1eace5, #ebf6ff). DM Sans with Noto Sans JP at 15px/1.7, 8px-radius controls, no shadows."
colors:
  canvas: "#ffffff"
  ink: "#222222"
  primary: "#0e0d6a"
  on-primary: "#ffffff"
  surface-light: "#f1f2f6"
  ink-muted: "#626262"
  link: "#0066aa"
  ink-subtle: "#7a7a7a"
  surface-sky: "#ebf6ff"
  accent-sky: "#1eace5"
  alert: "#c50018"
  hairline: "#dde0e7"
typography:
  display:
    fontFamily: "\"DM Sans\", \"Noto Sans JP\", \"Helvetica Neue\", Helvetica, Helvetica, Arial, sans-serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 60px
    letterSpacing: 3.2px
  display-mobile:
    fontFamily: "\"DM Sans\", \"Noto Sans JP\", \"Helvetica Neue\", Helvetica, Helvetica, Arial, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 38.4px
    letterSpacing: 1.92px
  heading:
    fontFamily: "\"DM Sans\", \"Noto Sans JP\", \"Helvetica Neue\", Helvetica, Helvetica, Arial, sans-serif"
    fontSize: 15px
    fontWeight: 500
    lineHeight: 27px
  subheading:
    fontFamily: "\"DM Sans\", \"Noto Sans JP\", \"Helvetica Neue\", Helvetica, Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 23.8px
    letterSpacing: 0.56px
  body:
    fontFamily: "\"DM Sans\", \"Noto Sans JP\", \"Helvetica Neue\", Helvetica, Helvetica, Arial, sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 25.5px
    letterSpacing: 1.2px
  link:
    fontFamily: "\"DM Sans\", \"Noto Sans JP\", \"Helvetica Neue\", Helvetica, Helvetica, Arial, sans-serif"
    fontSize: 10px
    fontWeight: 400
    lineHeight: 21px
    letterSpacing: 0.5px
rounded:
  xs: 5.6px
  sm: 6px
  md: 7px
  lg: 7.46px
  xl: 8px
  2xl: 13.06px
  3xl: 14px
spacing:
  s1: 3px
  s2: 3.73px
  s3: 5px
  s4: 7px
  s5: 8px
  s6: 10px
  s7: 11.2px
  s8: 12px
  s9: 13.99px
  s10: 14px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.xl}"
    padding: 6px 15px
    height: 35px
    borderColor: "{colors.ink}"
  button-secondary:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.xl}"
    padding: 6px 15px
    height: 35px
    borderColor: "{colors.ink-muted}"
  link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.link}"
    padding: 0px 0px 0px 3px
  footer:
    textColor: "{colors.ink-subtle}"
    padding: 110px 58px 120px
    borderColor: "{colors.canvas}"
---

## Overview

The queued address `https://www.kddi.com` resolves to `https://www.kddi.com/` (title "KDDI株式会社――Spark Your Journey", language `ja`), the Japanese corporate home of the telecom group. It is a large, text-rich portal (11482px tall, 819 visible elements) that frames the company through its brand message "Spark Your Journey" and links to individual services, news, sustainability, corporate, investor and recruiting information. The page opens with a white header holding the italic navy KDDI logo with the tagline "Spark Your Journey", a top-right utility row ("お問い合わせ" contact button in indigo, "ENGLISH" language toggle, "サイト内検索" site search), and a main menu ("理念・ビジョン, サービス, ニュース, サステナビリティ, 企業情報, 株主・投資家情報, 採用情報" followed by an accessibility entry "障害情報" and a toggle "[個人・法人]" for individual or corporate visitors).

Below the header is a notice strip with two emergency-support items (flood relief in Nepal and typhoon-related disaster donations), then a full-width hero slider with a dark navy background and luminous digital flowers for the event "KDDI SUMMIT 2026" (dates "2026 10.27 TUE - 28 WED", "TAKANAWA GATEWAY Convention Center", a "参加費無料" free-entry badge, a "View More" arrow control and a slide counter "03 / 05"). Next comes a white card "重要なお知らせ" (important notices) listing dated, tagged items with external-link icons, a "View All" button, and "Spark Journal by KDDI", a magazine-like card mosaic of photo-led articles tagged "みらい", "暮らし", "つなぐ" and "テクノロジー" (future, life, connect, technology). The tone is polite, informative and optimistic, written in formal Japanese with English only for labels (View All, View More, Spark Journal).

Imagery is editorial and human: children programming a drone, a diver on a boat, mascot characters at an event stage, a housing-complex street scene; the hero uses generated, glowing botanical artwork on deep blue to signal technology. Every photo card carries a small dark rounded category tag at its lower left, and article headlines wrap at the card width without truncation. Long Japanese headlines are the primary text content of the page, so the interface keeps its chrome small and neutral and gives the text and photography the contrast.

## Colors

The site exposes a named palette in its root variables, which agrees with the measured computed styles:

- **Canvas `#ffffff`** (area 4333): cards, header and notices.
- **Surface light `#f1f2f6`** (`--color_mono_bg_light`, area 1133): the page background behind the cards, and the fill of the ENGLISH and search buttons.
- **Ink `#222222`** (`--color_text_main`, `--color_mono_bg_black`): the main text color (2137 characters) and the fill of the "ニュースリリース" button.
- **Primary `#0e0d6a`** (`--color_main_key`): the key indigo. The contact button "お問い合わせ" measures this background (hover turns it to `rgb(28, 145, 244)`), and the View All arrows in the capture use it.
- **Ink muted `#626262`** (`--color_text_darkgray`) for secondary text and the secondary button border; **ink subtle `#7a7a7a`** (`--color_text_sub`) for footer text.
- **Link `#0066aa`** (`--color_link_main`, 130 characters), with `--color_link_hover: #1D9BFF`.
- **Surface sky `#ebf6ff`** (`--color_main_base01`) and `--color_main_base02 #D5EDFF`; **accent sky `#1eace5`** (`--color_main_accent`).
- **Alert `#c50018`** (`--color_other_alert`) and **hairline `#dde0e7`** (`--color_mono_bg_dark`, 7 border occurrences).

The measured `#0000ee` on an unstyled anchor is the browser default, not a brand color. White overlays at 70% (`#ffffffb3`, area 1147) are measured on the header and cards, and the Swiper default `#007aff` is a library variable.

## Typography

**DM Sans** (variable, weights 100-1000) leads the Latin text and **Noto Sans JP** (variable, 100-900) covers Japanese; the measured stack is `"DM Sans", "Noto Sans JP", "Helvetica Neue", Helvetica, Arial, sans-serif`, and DM Sans accounts for the measured characters (3200).

- Display (h1 "新ブランドメッセージ"): 40px, weight 400, line-height 60px, letter-spacing 3.2px; on mobile 24px, line-height 38.4px, letter-spacing 1.92px (0.08em at both sizes).
- Heading ("重要なお知らせ"): 15px, weight 500, line-height 27px.
- Subheading (list titles): 14px, line-height 23.8px, letter-spacing 0.56px.
- Body: 15px, weight 400, line-height 25.5px, letter-spacing 1.2px (0.08em).
- Link label: 10px, line-height 21px, letter-spacing 0.5px.

Size ladder: 15px (876 characters), 14px (858), 12px (348), 16.793px (252), 13.9942px (251), 18px, 16px, 11.1953px, 36px, 24px, 10px, 40px. The mobile ladder is led by 12px (1185), 13px (985), 15px, 14px and 16px.

## Layout

Root variables define the grid: `--content-width: 1256px`, `--content-side--pc: 58px`, `--content-grid-width--pc: 68px`, `--content-grid-gap--pc: 40px` (16px on small screens, `--content-grid-gap--sp`), and header heights of `--header-height--pc: 121px` and `--header-height--sp: 78px`. Content is a grid of white cards on the pale page: the journal mosaic combines one large card (image, tag, headline) with narrower cards of mixed orientation. Section titles ("Spark Journal by KDDI") are large, light and left-aligned with a "View All" button at the far right. Footer padding is 110px 58px 120px.

## Elevation & Depth

No shadow was measured (`boxShadows` is empty). Cards are white on `#f1f2f6`, 70% white overlays soften the header, and the hero is a full-bleed dark image. Separation otherwise comes from 1px `#dde0e7` lines and radius.

## Shapes

Rounded rectangles throughout: radii measured are 8px (62 elements; buttons and tags), 7.46356px (27; cards, scaled), 5.59767px (8), 13.0612px (8), 6px, 7px and 14px. Buttons, tags and cards share a soft 8px-scale corner; the arrow buttons next to "View All" and the notice icons are small rounded squares.

## Components

- **Contact button ("お問い合わせ")**: indigo `#0e0d6a` fill, white 12px label, 8px radius, 25px tall.
- **Utility buttons ("ENGLISH", "サイト内検索")**: `#f1f2f6` fill, `#222222` text and 1px border, 8px radius; hover changes the fill to `rgb(222, 225, 232)` and the text to 44% black.
- **Pill button ("ニュースリリース")**: `#222222` fill, white 15px label, padding 6px 15px, 35px tall, 8px radius; the outlined twin ("トピックス") has a 1px `#626262` border.
- **View All**: text plus a small indigo rounded-square arrow button.
- **Notice row**: date, a small outlined tag ("災害支援"), the title and an external-link icon, separated by hairlines.
- **Journal card**: white, 7.46px radius, 22.39px padding, image with a dark rounded tag, headline in 14-15px.
- **Footer**: `#7a7a7a` 12px link columns with "新規ウィンドウで開く" (opens in new window) annotations.

## Design System Architecture

No public design-system documentation was opened; the site links to a brand section (`/brand/`, `/brand/tsunagu/`) for brand campaigns, which was not read. The CSS exposes a clear internal token system in the root: semantic color names (`--color_text_main`, `--color_text_sub`, `--color_text_darkgray`, `--color_main_key`, `--color_main_accent`, `--color_main_base01/02`, `--color_link_main`, `--color_link_hover`, `--color_mono_bg_light/dark/black`, `--color_mono_white`, `--color_other_alert`), RGB triplets and CSS filters for recoloring icons (`--color_text_main--filtered`, `--color_link_hover--filtered`), layout variables (`--content-width`, `--content-side--pc`, grid width and gap, header heights) and transition variables (`--transition_duration: 0.5s`, `--transition_easing: ease-out`, `--transition_animation-set: 0.3s ...`).

## Do's and Don'ts

Do:
- Use `#222222` text on white or `#f1f2f6`, with indigo `#0e0d6a` as the single strong action color.
- Round controls and cards at about 8px; keep surfaces flat.
- Set Japanese text with generous line-height (about 1.7) and 0.08em letter-spacing.
- Tag articles with small rounded labels ("みらい", "暮らし", "つなぐ", "テクノロジー").

Don't:
- Do not use the browser blue `#0000ee`.
- Do not add shadows.
- Do not mix in bright accent colors outside the sky `#1eace5` family.

## Responsive Behavior

Measured on the 390px mobile pass: the h1 is 24px (from 40px); the "ニュースリリース" button measures 13px with a 6px radius (from 15px and 8px); body stays 15px; the size ladder is 12px (1185 characters), 13px (985), 15px (636), 14px (514), 16px, 11px, 7px, 18px and 28px. The root variables set a 78px header and a 16px grid gap for small screens. Menu collapse and column reflow were not measured.

## Iteration Guide

1. White cards on `#f1f2f6`, `#222222` text, indigo `#0e0d6a` for the one primary action.
2. DM Sans with Noto Sans JP; 15px body at line-height 25.5px and 0.08em tracking.
3. 8px radii for buttons, tags and cards; 1px `#dde0e7` hairlines.
4. Photo-led journal cards with a small category tag; a dark full-bleed hero slider.
5. Verify with `node web/scripts/verify-designs.mjs --slug=kddi`.
