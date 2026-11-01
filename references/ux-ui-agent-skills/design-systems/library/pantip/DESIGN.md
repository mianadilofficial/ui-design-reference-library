---
version: alpha
name: "Pantip"
category: "Thai Brands"
description: "Pantip Thai community forum measured live in its dark theme: purple-navy canvas #353156, cards #3c3963, primary #7459c8 follow buttons with white Arial 600 text, Roboto 16px reading text in translucent lilac #e9e5f6de, yellow #fbc02d panel titles and 2px to 4px radii."
colors:
  canvas: "#353156"
  page-body: "#3c3963"
  ink: "#e9e5f6de"
  primary: "#7459c8"
  on-primary: "#ffffff"
  surface-panel: "#2d2a49"
  ink-lavender: "#b39ddb"
  ink-faint: "#e9e5f64d"
  ink-dim: "#9d9ac0"
  ink-muted: "#e9e5f699"
  accent-yellow: "#fbc02d"
  hairline: "#7976a0"
  button-primary-border: "#9575cd"
  text-input-bg: "#44416f"
  text-input-border: "#1f1d33"
typography:
  display:
    fontFamily: Roboto, RobotoDraft, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  heading:
    fontFamily: Roboto, RobotoDraft, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: Arial
    fontSize: 14px
    fontWeight: 600
    lineHeight: 26px
  nav:
    fontFamily: Roboto, RobotoDraft, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 24.5px
  input:
    fontFamily: Arial
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
rounded:
  xs: 2px
  sm: 4px
  md: 18px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 8px
  s5: 9px
  s6: 10px
  s7: 12px
  s8: 14px
  s9: 15px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 4px 16px
    height: 36px
    borderColor: "{colors.button-primary-border}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 12px 16px
  nav:
    textColor: "{colors.ink-muted}"
  nav-link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 1px 32px 1px 2px
    height: 30px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 16px 16px 8px
    boxShadow: rgba(0, 0, 0, 0.16) 0px 2px 2px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px
---

# Pantip

## Overview

pantip.com (title "Pantip - Learn, Share & Fun", page language `th`) is Thailand's long-running community forum. The measured home page is a dense, dark-themed feed: a purple-navy canvas `#353156`, a left sidebar and a top bar, a large promotional banner (the "Pantip Rewind 2026" campaign for the 30th anniversary in the capture), a panel titled "Announce" with highlight and announce tags, a "เลือกห้อง" (choose a room) grid of icon tiles, a "Highlight" carousel of image cards, "Pantip Realtime" (topics with the most readers right now, per the page copy), "Pantip Pick" (quality topics chosen by the Pantip team) and a "แท็กฮิต" trending-tag list. The page is 1280px wide and 6195px tall. The voice is Thai, informal and community-driven, with emoji inside topic titles, small meta lines (username, time ago, reply and vote counts) and a bright yellow for section titles. It reads as a content-first utility: every panel is a dark card, and typographic hierarchy is small and tight.

## Colors

The canvas is `#353156` (weight 7597); card and panel surfaces are `#3c3963` (page-body, 622), `#2d2a49` (979, the sidebar and header areas, renamed `surface-panel`), and `#1f1d33` (524, the dark panel header bars, also the text-input border). The primary purple is `#7459c8` (206), used for the full-width "ดูเพิ่มเติม" (see more) bar and for the follow button, with a `#9575cd` border; the page also measures `#212121`, `#0000003d`, `#2e7d32` (a green button, "ข่าวประชาสัมพันธ์"), `#44416f` (text-input fill) and `#7976a0` (hairline).

Text colors are translucent lilac on the dark: `#e9e5f6de` (main, 4919 characters), `#b39ddb` (1953, lavender accents, renamed `ink-lavender`), `#e9e5f64d` (835, faint, `ink-faint`), `#9d9ac0` (780, `ink-dim`), `#e9e5f699` (491, `ink-muted`, used by navigation), `#fbc02d` (148, yellow for section titles, renamed `accent-yellow`), plus `#ffffff` on the purple button. Borders are `#7976a0` (15 elements), `#565380`, `#1f1d33`, `#9575cd` and `#388e3c`. A hover on the follow button was not measured in the re-run; the earlier pass recorded `#8e6fcc`, but that value is no longer in the current measurement and is dropped.

## Typography

Roboto (with RobotoDraft, Helvetica Neue, Helvetica, Arial, sans-serif) carries 8792 characters; Material Icons carries 451 (icon glyphs) and Arial 37 (form buttons and inputs). No Thai-specific font is named in the measured stack, so Thai text relies on the system fallback; the rendered Thai glyph face was not measured. Weights: 400 (7971), 500 (1191), 700 (64), 600 (54). Sizes by characters: 16px (4044), 12px (3921), 14px (757), 18px (383), 20px, 10px, 24px and 48px. Roles: display 16px / 24px at 500 (the "Announce" panel title, in `#fbc02d`); heading 16px / 24px at 400 (the highlight rows); nav 14px / 24.5px at 500; button 14px / 26px at 600 in Arial; input 14px / 14px at 400 in Arial. Letter spacing is normal everywhere. The scale is small and flat: most reading text is 16px, meta is 12px.

## Layout

The 1280px layout has a fixed left sidebar (home, My Feed, Pantip Pick, Pantip Hitz, Explore, then points and activities, then a text list of policy links and copyright "© 2026 Internet Marketing co., ltd" per the capture), a top bar with a hamburger, the Pantip wordmark, a wide search field (`#44416f` fill) and links ("ตั้งกระทู้" create a topic, "คอมมูนิตี้", "Pantip MALL", login/register), then a centre column of stacked panels with a right rail on lower sections (the trending-tag list and a promotional image). Paddings measured: 16px (96 elements), 8px (64), 2px (47), 116px (33), 12px, 14px, 10px; the spacing tokens are 1, 2, 4, 8, 9, 10, 12, 14, 15 and 16px. The room-picker grid is two rows of icon tiles with Thai labels (such as กินรัว, กรุงโซล, การ์ตูน, ภูมิภาค, ก้อง, ไกลบ้าน and more) and arrow buttons at the edges.

## Elevation & Depth

Elevation is Material-style. Box shadows measured: `rgba(233, 229, 246, 0.3) 0px 0px 0px 1px inset` (38 elements, a lilac inner outline), `rgba(0, 0, 0, 0.16) 0px 2px 2px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px` (33, the card shadow), `rgba(0, 0, 0, 0.2) 0px 3px 8px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px` (1, a raised surface) and `rgb(255, 235, 59) 0px 3px 0px 0px inset` (1, a yellow underline on the active item). On the dark canvas the black shadows are subtle, so panel separation mostly comes from the lighter `#3c3963` fill against `#353156` and dark `#1f1d33` header bars.

## Shapes

Radii: 2px (59 elements, buttons and inputs), 4px (31, cards), 4px 4px 0 0 (18) and 0 0 4px 4px (14) for stacked panel top and bottom edges, 2px 2px 0 0 (14), 50% (2, round carousel arrows) and 18px (1). Tokens: `xs` 2px, `sm` 4px, `md` 18px, `pill` 9999px.

## Components

- **Primary button ("ติดตาม" follow)**: `#7459c8` fill, white text, Arial 600 14px / 26px, radius 2px, padding 4px 16px, 36px tall, border `#9575cd`.
- **Green button**: `#2e7d32` fill ("ข่าวประชาสัมพันธ์"), 36px tall.
- **See-more bar**: full-width `#7459c8` bar with the label "ดูเพิ่มเติม" and a chevron under the realtime list.
- **Text input**: `#44416f` fill, `#e9e5f6de` text, Arial 14px, radius 2px, height 30px, border `#1f1d33`.
- **Card** (highlight carousel item): `#3c3963` fill, 4px radius, padding 16px 16px 8px, the card shadow above; 205px wide, 218px tall.
- **Navigation link**: Roboto 500 14px, `#e9e5f699`, with 12px 16px padding for the sidebar items.
- **Round arrow button**: 36px tall, `#e9e5f6` fill, black 87% icon, 50% radius.
- **Topic row**: image thumbnail left, 16px title, 12px meta line (author, time, reply and vote counts).

Pop-ups such as the consent notice at the bottom of the capture are not documented as brand UI.

## Design System Architecture

No public design system or brand guideline is linked: the WebFetch of https://pantip.com/ listed footer links (about, rules, privacy, careers, advertising, press releases and a developer program) and stated none to brand guidelines or a design system; no search was run. The de-facto system has no CSS custom properties (the extractor found none at :root); styling is by Material-style classes: Material Icons in several variants (Outlined, Round, Sharp, Two Tone), the slick carousel library, Roboto, and Material-like elevation shadows and 36px buttons.

## Do's and Don'ts

- Do keep the lilac-tinted translucent text on the purple-navy ground (`#e9e5f6de`).
- Do use `#fbc02d` for panel titles and `#7459c8` for actions.
- Do build panels as `#3c3963` cards with 4px radius and the 2px/1px Material shadow.
- Do keep buttons 36px tall with a 2px radius and Arial 600.
- Don't introduce rounder corners; 2px and 4px dominate.
- Don't use pure black or white backgrounds in the dark theme.
- Don't document the consent banner or ads as brand UI.

## Responsive Behavior

Measured at 390px: type sizes by characters were 16px (3829), 12px (1916), 18px (310), 14px (274), 20px and 24px; the 16px "Announce" title, 16px headline and the 14px follow button with 36px height and 2px radius were unchanged. Layout, sidebar collapse and breakpoints were not measured.

## Iteration Guide

1. Canvas `#353156`, cards `#3c3963`, sidebar `#2d2a49`, panel headers `#1f1d33`.
2. Roboto 16px for reading, 12px for meta, 14px 500 for navigation; titles in `#fbc02d`.
3. Primary actions `#7459c8` with white Arial 600 14px, 36px tall, 2px radius.
4. Use the 0.16/0.08 black card shadow and a lilac 30% inset outline.
5. Verify any new color against `web/data/extracted/pantip.json`.
