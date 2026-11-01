---
version: alpha
name: Affinity
category: "Design & Creative Tools"
description: "Affinity (affinity.studio, by Canva) is a black #000000 page with huge Affinity Serif Variable headlines (148px/700 display, 80px section titles), Canva Sans body at 24px/33.6px in #c4c4c4, lime #a7f175 'Free for individuals' buttons with dark #0e1318 labels and 12px radius (hover #96d969), stone #e0dcd6 secondary buttons and warm-black #211d1d panels."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#a7f175"
  on-primary: "#0e1318"
  primary-hover: "#96d969"
  stone: "#e0dcd6"
  stone-hover: "#ccc8c2"
  surface-warm: "#211d1d"
  surface-ink: "#0f1015"
  ink-muted: "#c4c4c4"
  violet: "#a370fc"
  magenta: "#f075f1"
  taupe: "#b0a79e"
typography:
  display:
    fontFamily: "\"Affinity Serif Variable\", \"Canva Sans\", \"Noto Sans Variable\", \"Noto Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Helvetica, Arial, sans-serif"
    fontSize: 148px
    fontWeight: 700
    lineHeight: 153.92px
  display-mobile:
    fontFamily: "\"Affinity Serif Variable\", \"Canva Sans\", \"Noto Sans Variable\", \"Noto Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Helvetica, Arial, sans-serif"
    fontSize: 64px
    fontWeight: 700
    lineHeight: 66.56px
  heading:
    fontFamily: "\"Affinity Serif Variable\", \"Canva Sans\", \"Noto Sans Variable\", \"Noto Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Helvetica, Arial, sans-serif"
    fontSize: 80px
    fontWeight: 700
    lineHeight: 78.4px
  subheading:
    fontFamily: "\"Affinity Serif Variable\", \"Canva Sans\", \"Noto Sans Variable\", \"Noto Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Helvetica, Arial, sans-serif"
    fontSize: 56px
    fontWeight: 700
    lineHeight: 56px
  body:
    fontFamily: "\"Canva Sans\", \"Noto Sans Variable\", \"Noto Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Helvetica, Arial, sans-serif"
    fontSize: 24px
    fontWeight: 401
    lineHeight: 33.6px
  button:
    fontFamily: "\"Canva Sans\", \"Noto Sans Variable\", \"Noto Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  button-small:
    fontFamily: "\"Canva Sans\", \"Noto Sans Variable\", \"Noto Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 22px
  link:
    fontFamily: "\"Canva Sans\", \"Noto Sans Variable\", \"Noto Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 401
    lineHeight: 22px
rounded:
  xs: 6px
  sm: 8px
  md: 10px
  lg: 12px
  xl: 16px
  2xl: 20px
  3xl: 100px
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
  s9: 22px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 8px 16px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-small:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-small}"
    rounded: "{rounded.lg}"
    padding: 8px 16px
    height: 40px
  button-secondary:
    backgroundColor: "{colors.stone}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 8px 16px
    height: 48px
  button-secondary-hover:
    backgroundColor: "{colors.stone-hover}"
  text-link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
  panel:
    backgroundColor: "{colors.surface-warm}"
    textColor: "{colors.ink}"
    rounded: "{rounded.2xl}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    borderColor: "{colors.taupe}"
---

# Affinity

## Overview

Affinity is a professional design suite — vector, pixel and page layout in one app — now presented as "Craft in Affinity, scale in Canva". The queued URL affinity.serif.com redirects to the measured site, **www.affinity.studio** (1280px wide, 9345px tall, `lang="en"`), which carries an "Affinity by Canva" lockup.

The page is black and loud. A thin header holds the lowercase "affinity" logotype, two menus (Product, Discover) and Help, with a lime "Get Affinity" button at right. The hero is a dense collage of colourful illustrations around a massive centred serif headline, "Create freely" — "freely" set in the italic of the same serif — followed by "Professional design, photo editing, and page layout in one app.", a lime "Free for individuals" button, a stone "Get for enterprise" button and a small "by Canva" mark. A bright lime band of customer logos (University of Washington, Public School, WPP, Pentagram, Twitch, Expedia, Hey, T-Mobile) follows.

Further down: "No more app switching" over an app screenshot with Vector / Pixel / Layout / Canva AI mode tabs; large serif testimonials on black ("Affinity lets us focus on the work…"); "The new standard" with warm-black and cream feature panels (File compatibility, Cross-collaboration); a Cavalry integration section; "Just dropped" product updates (Blend Tool, In-App Scripting); an "Inspired.af" article carousel; "Zero bucks given" with Mac / Windows / iPad download cards; and a footer that ends in a giant "affinity" wordmark.

The voice is cheeky and confident — "Zero bucks given", "Inspired.af", "Affinity is free for individuals (seriously)".

## Colors

Measured on the rendered page (`web/data/extracted/affinity.json`).

- **canvas `#000000`** — the body and largest area (10054).
- **ink `#ffffff`** — the most-read text colour (1880 characters): headlines and key copy on black.
- **ink-muted `#c4c4c4`** — paragraph copy on black (698 characters), including the 24px intro paragraphs.
- **primary `#a7f175`** — lime: the fill of every main action ("Free for individuals", "Get Affinity", "Download for free") and of the logo band. Hover: **primary-hover `#96d969`**.
- **on-primary `#0e1318`** — near-black label on lime and stone buttons.
- **stone `#e0dcd6`** — the secondary "Get for enterprise" button; hover **stone-hover `#ccc8c2`**.
- **surface-warm `#211d1d`** — warm-black panels (6961 by area): feature cards and the "Just dropped" tiles.
- **surface-ink `#0f1015`** — a cooler near-black panel colour (1167).
- **violet `#a370fc`** — purple text accents (282 characters), such as category tags.
- **magenta `#f075f1`** — one of three tool-mode outline colours, alongside `#2ec7ff` (cyan) and `#ff6124` (orange), each measured on 5 borders around the mode tabs.
- **taupe `#b0a79e`** — footer border colour.

Light black text `#000000` (1193 characters) appears on the cream panels (`#efe9de`, `#f0e7de`) and white cards. Tinted cards measured in coral `#e35b67`, aqua `#92dcde` and pink `#ffa9db`, each covering the same area (398) — a set of colour-coded tiles.

## Typography

- **Affinity Serif Variable** — a variable serif with roman and italic, used for all headlines (731 characters).
- **Canva Sans** (400–700) — all body and UI text (3467 characters), shared with Canva.

Measured roles:

- **display** — Affinity Serif 148px / 700 / 153.92px: "Create freely".
- **heading** — 80px / 700 / 78.4px (line height below the size): "No more app switching", "Zero bucks given".
- **subheading** — 56px / 700 / 56px: panel titles such as "File compatibility".
- A 48px serif size carries the testimonial quotes (487 characters) and 32px appears in card titles.
- **body** — Canva Sans 24px / 401 / 33.6px for intro paragraphs; 16px is the most common size (2106 characters).
- **button** — 16px / 500 / 24px; **button-small** — 14px / 500 / 22px.
- **link** — 14px / 401 / 22px for footer and inline links.

The computed body weight is 401 (2798 characters) — the variable Canva Sans is set one unit above regular. No letter-spacing was measured on any size. Headline weight is always 700; the italic of the serif is used for single emphasised words ("freely").

**Substitute:** both families are served by the site; the declared fallbacks are Noto Sans, system UI fonts, Helvetica and Arial.

## Layout

The hero band measured content from x=152 to x=1240; the main black band from x=279 to x=1001 for centred headline blocks. Feature panels sit in two-up rows, the download section in three columns (Mac, Windows, iPad), and the article carousel three-up with arrows. The extractor counted up to 5 card columns (the logo band).

Spacing: gaps of 16px (58 uses), 2px (52), 4px (30), 8px and 24px; paddings of 4px, 12px, 16px, 24px and 40px, with 64px and 120px for section padding. Section headlines are centred; panel content is left-aligned.

## Elevation & Depth

On black, depth is drawn with light edges rather than shadows: the most common shadow (6 uses) combines `rgba(255, 255, 255, 0.12) 0px 1px 0.5px 0px inset` and `rgba(255, 255, 255, 0.1) 0px 0px 0px 0.5px inset` with dark outer shadows `rgba(0, 0, 0, 0.21) 0px 2px 5px 0px, rgba(0, 0, 0, 0.14) 0px 6px 12px 0px` — a lit top edge on floating UI. 1px white inset rings at 15% and 50% opacity outline selected controls. Most depth comes from imagery: illustrations, app screenshots and photo collages with saturated colour against black.

## Shapes

- **12px (lg)** — the dominant radius (58 uses): all buttons and many cards.
- **10px** (23) and **20px** (17) — tiles and larger panels.
- **9999px** (19) — pills such as the mode tabs and small tags.
- **6px**, **8px**, **16px** and **100px** — small UI, the header's Product/Discover menu buttons (6px) and circular arrow buttons.

## Components

**Primary button** — lime `#a7f175`, `#0e1318` label in Canva Sans 16px/500, 12px radius, `8px 16px`, 48px tall. Hover `#96d969`. The header and download cards use the 40px, 14px version.

**Secondary button** — stone `#e0dcd6` with the same label colour and geometry; hover `#ccc8c2`.

**White button** — `#ffffff` with black 14px/500 text, 40px tall ("Learn more" in the Just dropped tiles).

**Mode tabs** — a pill row under the app screenshot: Vector, Pixel, Layout, Canva AI, each with its own outline colour.

**Feature panel** — warm-black `#211d1d` or cream, 20px radius, a small overline, a 56px serif title, a paragraph and a large collage.

**Testimonial** — a lime quote mark, a 48px serif quote in white on black, the author's avatar and name, and the client logo at right.

**Download card** — platform name, short description and a small lime "Download for free" button above a product image.

**Footer** — black, four link columns (Product, Discover, Help, Contact), then a full-width "affinity" wordmark with "by Canva".

## Design System Architecture

No public Affinity design-system documentation was found in the sources checked: https://www.affinity.studio/press and https://www.affinity.studio/brand both returned 404.

The site is built on Canva's web stack: fonts load from `static.canva.com`, the favicon from `static.canva.com/domain-assets/affinity/`, and the 397 root custom properties have hashed names (for example `--Mm01yw: #612dae`, `--d-GAYw: #0e1318`, `--A4X7Bw: #373434`), which are compiler output rather than a public token API. The brand layer on top is small: Affinity Serif Variable for headlines, Canva Sans for UI, lime as the action colour, stone as the secondary, and warm blacks for surfaces.

## Do's and Don'ts

**Do**
- Set headlines in Affinity Serif at 700, very large, and use its italic for one emphasised word.
- Use lime `#a7f175` with a `#0e1318` label for every primary action; stone `#e0dcd6` for the secondary.
- Keep the page black with `#c4c4c4` body copy at 24px for intros.
- Put saturated illustration and product screenshots against black.
- Round buttons at 12px; use pills only for tabs and tags.

**Don't**
- Don't put white text on the lime button; the measured label is `#0e1318`.
- Don't use a sans for headlines.
- Don't add letter-spacing; none was measured.
- Don't use heavy drop shadows on cards; use light inset edges.
- Don't treat the browser-default link colours recorded on empty links as brand colours.

## Responsive Behavior

From the extractor's 390px pass: "Create freely" measured 64px / 700 with a 66.56px line height (148px on desktop); intro paragraphs measured 18px / 25.2px (24px / 33.6px on desktop); the "Free for individuals" button measured 14px / 22px text, 40px tall and 162px wide (48px tall on desktop). The extractor recorded a visible menu toggle labelled "Show main menu" and 1 header link. Content measured from x=32 to x=358. Breakpoint widths were not measured.

## Iteration Guide

1. Black `#000000` canvas, white headlines, `#c4c4c4` paragraphs.
2. Headline: Affinity Serif 148px/700 in the hero, 80px for sections, 56px in panels.
3. Actions: lime `#a7f175` buttons with `#0e1318` labels, 12px radius, 48px or 40px tall.
4. Panels: `#211d1d` or cream with 20px radius and big imagery.
5. Keep colour in imagery and the lime band; take any new colour from the measured set.
6. Run `node web/scripts/verify-designs.mjs --slug=affinity` after changes.
