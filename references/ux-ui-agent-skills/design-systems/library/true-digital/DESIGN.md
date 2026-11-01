---
version: alpha
name: True Digital Group
category: "Thai Brands"
description: "True Digital Group (English site): white canvas, gray #6b7280 body text, True red #ca0008 for emphasis words and numerals, Satoshi with IBM Plex Sans Thai fallback, white pill LEARN MORE buttons with a blue and pink glow shadow and 8px-radius bordered cards."
colors:
  canvas: "#ffffff"
  ink: "#6b7280"
  primary: "#ca0008"
  black: "#000000"
  surface-footer: "#f5f5f5"
  ink-muted: "#a3a3a3"
  ink-grey: "#848484"
  hairline: "#e5e7eb80"
  link: "#404040"
  button-secondary-border: "#a3a3a333"
  text-input-text: "#112337"
  text-input-border: "#c7c7c7"
  card-border: "#c7c7c740"
typography:
  display:
    fontFamily: Satoshi, "IBM Plex Sans Thai", sans-serif
    fontSize: 48px
    fontWeight: 700
    lineHeight: 48px
  display-mobile:
    fontFamily: Satoshi, "IBM Plex Sans Thai", sans-serif
    fontSize: 36px
    fontWeight: 700
    lineHeight: 40px
  heading:
    fontFamily: Satoshi, "IBM Plex Sans Thai", sans-serif
    fontSize: 30px
    fontWeight: 600
    lineHeight: 45px
  subheading:
    fontFamily: Satoshi, "IBM Plex Sans Thai", sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  body:
    fontFamily: Satoshi, "IBM Plex Sans Thai", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: Satoshi, "IBM Plex Sans Thai", sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 16px
    textTransform: uppercase
  input:
    fontFamily: Satoshi, "IBM Plex Sans Thai", sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
rounded:
  xs: 6px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 40px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 12px
  s6: 14px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.link}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
    padding: 14px 20px 12px
    height: 44px
    borderColor: "{colors.button-secondary-border}"
    boxShadow: rgba(103, 165, 254, 0.176) -5.11644px 0.883564px 16px 0px, rgba(233, 90, 147, 0.235) 5.11644px -0.883564px 24px 0px
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.link}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
    padding: 14px 20px 12px
    borderColor: "{colors.button-secondary-border}"
    boxShadow: rgba(103, 165, 254, 0.176) -5.11644px 0.883564px 16px 0px, rgba(233, 90, 147, 0.235) 5.11644px -0.883564px 24px 0px
  nav:
    textColor: "{colors.black}"
  nav-link:
    textColor: "{colors.black}"
    typography: "{typography.body}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 12px
    height: 38px
    borderColor: "{colors.text-input-border}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px
  card:
    textColor: "{colors.black}"
    rounded: "{rounded.sm}"
    padding: 16px 24px
    borderColor: "{colors.card-border}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.black}"
---

## Overview

The measured page is `https://www.truedigital.com/en`, titled "True Digital Group – Empowering Digital Equity". It is the English corporate site of a Thai telecom-technology group and is organised as a polished, airy marketing page rather than a store: 5,734px tall with 401 visible elements. The header shows a "truedigital" logo (a red bold "true" followed by a grey "digital"), a five-item menu (OUR BUSINESS, TDG STORY, ABOUT US, CAREER, CONTACT US) and a TH | EN language switch with EN in bold.

The hero sits on a pale lavender-to-white wash. A small kicker "Empowering Digital Equity:" (grey, with "Digital Equity" in red) precedes a large black "Elevate Thailand" and a second line, "Digital Infrastructure", filled with a pink-to-blue gradient. Beneath are the line "Entire startup ecosystem under one roof", a white "LEARN MORE >" pill and carousel dots. A portrait of a woman holding a tablet is cropped inside an organic blue and violet blob at the right. A "Scroll down to explore more" cue ends the hero. Next come a centred "Empowering Digital Equity" heading with an "ABOUT US" pill, five staggered stat cards in pink, peach and grey gradients (Thailand No.1, Future-Ready Performance, World-Class Customer Experience, 36 Million monthly active users, Thailand's leading Telecom-Tech company), a large pink-peach rounded banner with a photo and "Empowering with innovative technology", and a "Modernize Digital Lifestyles" row of cards for True Digital businesses such as Digital Media and Digital Home. Copy is short, upbeat and corporate.

## Colors

`{colors.canvas}` is white (#ffffff, 4,325 area units). The most-read text colour is the grey `{colors.ink}` (#6b7280, 976 characters), used for descriptions, with pure `{colors.black}` (#000000, 851 characters) for headings, menu items and stat labels, `{colors.link}` (#404040) for button labels, `{colors.ink-muted}` (#a3a3a3, 217 characters) for the soft kicker words and `{colors.ink-grey}` (#848484, 207 characters). Surfaces are `{colors.surface-footer}` (#f5f5f5, 416 units, the footer) and a translucent `#0000001a` wash (410 units).

The one brand colour is True red, `{colors.primary}` (#ca0008, 84 characters), applied to emphasis words ("Digital Equity"), the numeral "No.1" and the red "true" in the logo; no solid red button was measured. Gradients carry the rest of the colour: pink-to-blue headline fill, pink and peach card fills, and a blue-violet blob. The gradients' stops were not measured as tokens. Hairlines are `{colors.hairline}` (#e5e7eb80), with `{colors.button-secondary-border}` (#a3a3a333), `{colors.card-border}` (#c7c7c740), input text `{colors.text-input-text}` (#112337) and input border `{colors.text-input-border}` (#c7c7c7). The WordPress presets in the root (for example `--wp--preset--color--secondary: #15803d`, `--wp--preset--color--tertiary: #0369a1`) are declared but not seen on measured elements.

## Typography

Satoshi (400, 500 and 700 loaded; 2,756 characters) is the only family, with IBM Plex Sans Thai as the fallback for Thai script. The hero figure "No.1" (`{typography.display}`) is 48px bold on a 48px line; section headings (`{typography.heading}`) are 30px weight 600 on 45px; body text (`{typography.body}`) is 16px on 24px; small descriptions (`{typography.subheading}`) are 14px on 20px; the uppercase button and menu labels (`{typography.link}`) are 16px weight 500 and inputs (`{typography.input}`) are 18px on 28px.

Weights are 400 (1,475 characters), 500 (638), 700 (319), 600 (306) and a trace of 300. Sizes in use are 14px, 16px, 24px, 30px, 12px, 60px, 20px and 18px, with 24px weight 600 on card titles; 60px is also in the measured size list. Button text is set in uppercase ("LEARN MORE", "ABOUT US").

## Layout

A full-width hero is followed by contained sections. Stat cards sit in one row with deliberately uneven heights and vertical offsets, which gives a staircase rhythm. Measured gaps are 8px (30 uses), 2px (16), 6px (11) and 32px (6); paddings are 16px (37 uses), 12px (12), 24px (12), 20px (10), 8px (9), 14px (8) and 32px (7), with large single paddings of 160px, 80px and 64px for sections.

The header is 72px tall. Root WordPress size variables (`--wp--style--global--content-size: 40rem`, `--wp--style--global--wide-size: 60rem`) are declared for editor content.

## Elevation & Depth

Two shadow recipes are measured. Cards use a standard soft drop, `0px 4px 6px -1px rgba(0, 0, 0, 0.1), 0px 2px 4px -2px rgba(0, 0, 0, 0.1)` (10 elements). The signature one is the coloured glow on pill buttons: `rgba(103, 165, 254, 0.176) -5.11644px 0.883564px 16px 0px, rgba(233, 90, 147, 0.235) 5.11644px -0.883564px 24px 0px` (8 elements), which casts a blue haze on one side and a pink haze on the other. Everything else is flat, separated by 1px translucent borders.

## Shapes

Pills and soft rectangles. 9999px (`{rounded.pill}`) is the most common radius (15 elements: buttons and tags), 8px (`{rounded.sm}`, 13) rounds bordered cards, 16px (`{rounded.lg}`, 11) the banners and image blocks, 6px (`{rounded.xs}`, 6) the input field, 12px (3) and 40px (2) larger panels. A single element has a `0px 0px 80px` radius, a container with an 80px bottom-right curve. The hero photo is cropped to an organic blob rather than a rectangle.

## Components

**Secondary button ("LEARN MORE").** White fill, `{colors.link}` label in Satoshi 500 uppercase, 14px 20px 12px padding, 44px tall, pill radius, 1px `{colors.button-secondary-border}` border and the blue and pink glow. A chevron follows the label in the hero.

**Text input.** White, 18px text, 38px tall, 12px padding, 6px radius, 1px #c7c7c7 border.

**Card.** 8px radius, 1px `{colors.card-border}`, 16px 24px padding, black 24px weight 600 titles with a small grey caption.

**Navigation.** Black Satoshi 16px, uppercase, no underline, 72px header.

**Tags.** A small "CONSUMER" label on a photo card and "TRUE DIGITAL" overlines on business cards.

**Footer.** `{colors.surface-footer}` fill, 325px tall, black text at 20px weight 500 for column heads (Our Business, For Consumer, For Enterprise).

## Design System Architecture

No public design-system or brand-guideline page was opened. The CSS exposes WordPress block-editor variables (`--wp--preset--*`) with the default WordPress palette and shadow presets, plus Tailwind-style internals (`--tw-ring-shadow`, `--tw-ring-offset-shadow`) and a carousel library's variables (`--swiper-theme-color: #007aff`). These are platform defaults, and several of them (vivid purple, pale pink, #007cba admin blue) are not brand tokens. A site-specific preset `--wp--preset--color--grey: #959696` is also declared.

The brand system is therefore read from rendered values: one family, one red, grey-black text, pill buttons with a two-colour glow and 8px bordered cards.

## Do's and Don'ts

- Do keep the page white and airy, with grey body text and black headings.
- Do reserve red for emphasis words and numerals, and use pink-to-blue gradients for display emphasis.
- Do shape buttons as white pills with the blue and pink glow.
- Do round cards at 8px with a hairline border.
- Don't fill buttons solid red; no solid red button was measured here.
- Don't use WordPress preset colours or the carousel blue as brand colours.
- Don't add heavy shadows; use the soft drop on cards only.

## Responsive Behavior

The 390px mobile pass recorded the hero numeral "No.1" at 36px weight 700 on a 40px line (down from 48px) and body copy unchanged at 16px on 24px. The most common mobile sizes are 14px (1,248 characters), 18px (381), 16px (335), 20px (229), 24px (189) and 12px (134). No mobile button was detected. Column collapse, menu behaviour and card stacking were not measured.

## Iteration Guide

1. White canvas, `{colors.ink}` descriptions, `{colors.black}` headings.
2. Red `{colors.primary}` only for key words and figures.
3. White uppercase pill buttons, 44px tall, with the blue and pink glow.
4. Cards at 8px radius with translucent 1px borders; banners at 16px.
5. Satoshi throughout; 30px weight 600 for headings.
6. Gradients for display emphasis; measure stops before using them as tokens.
