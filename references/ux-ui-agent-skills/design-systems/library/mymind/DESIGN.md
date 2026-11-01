---
version: alpha
name: mymind
category: "Productivity & SaaS"
description: "mymind.com home: near-white #f9fafc / #ffffff canvas haloed by an orange-pink gradient, oversized 128px headlines with -8.4px tracking, Louize serif and Inter/Nunito sans text in #4a5465, signal orange #ff5924 for pill buttons and a full-bleed band, pastel 16px-radius feature cards (#f3f0e7, #e5eaf2, #dde9d3) and 100px-radius pills."
colors:
  canvas: "#ffffff"
  page-body: "#f9fafc"
  ink: "#4a5465"
  ink-strong: "#000000"
  ink-slate: "#3a475a"
  ink-muted: "#717286"
  link: "#748297"
  primary: "#ff5924"
  on-primary: "#ffffff"
  surface-blush: "#fff1f1"
  surface-stone: "#f6f4f2"
  surface-mist: "#f0f2f5"
  card-sand: "#f3f0e7"
  card-sky: "#e5eaf2"
  card-sage: "#dde9d3"
  tag-amber: "#e98f53"
  tag-pink: "#e48abf"
  tag-blue: "#99d2fb"
  tag-coral: "#ea726b"
  tag-yellow: "#ffcf27"
typography:
  display:
    fontFamily: "\"Avenir LT W01_45 Book1475508\", sans-serif"
    fontSize: 128px
    fontWeight: 400
    lineHeight: 108.8px
    letterSpacing: "-8.4px"
  display-mobile:
    fontFamily: "\"Avenir LT W01_45 Book1475508\", sans-serif"
    fontSize: 50.004px
    fontWeight: 400
    lineHeight: 48.006px
  eyebrow:
    fontFamily: "\"Avenir LT W01_45 Book1475508\", sans-serif"
    fontSize: 16.002px
    fontWeight: 400
    lineHeight: 28.008px
  body:
    fontFamily: "\"Avenir LT W01_45 Book1475508\", sans-serif"
    fontSize: 54px
    fontWeight: 400
    lineHeight: 59.994px
  body-dominant:
    fontFamily: Inter-Regular
    fontSize: 20px
    fontWeight: 400
  nav:
    fontFamily: "\"Open Sans\", Arial, sans-serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 22px
  pill-label:
    fontFamily: Nunito-SemiBold, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 30px
    letterSpacing: "-0.4px"
  button:
    fontFamily: Nunito, -apple-system, "system-ui", "Segoe UI", Roboto, Helvetica, Arial, sans-serif
    fontSize: 19px
    fontWeight: 600
    lineHeight: 19px
    letterSpacing: 0.19px
rounded:
  xs: 12px
  sm: 16px
  md: 20px
  lg: 30px
  xl: 36px
  2xl: 100px
  3xl: 120px
  pill: 9999px
spacing:
  s1: 4px
  s2: 10px
  s3: 11px
  s4: 18px
  s5: 20px
  s6: 24px
  s7: 26px
  s8: 30px
  s9: 32px
  s10: 33px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 14px 24px
    height: 47px
  app-pill:
    textColor: "{colors.link}"
    typography: "{typography.pill-label}"
    rounded: "{rounded.2xl}"
    padding: 10px 24px
  nav:
    textColor: "{colors.ink-strong}"
    padding: 33px 0px 0px
  nav-link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.card-sand}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.sm}"
    padding: 50px
  orange-band:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink-strong}"
---

# mymind

## Overview

This file documents the mymind home page at `https://mymind.com/` (title "mymind is the extension for your mind."). It is a very long (18469px), soft and editorial page. The top is lit by a large white circle with an orange-to-pink-to-lilac glow around its edge. Inside it: a minimal header (the mymind wordmark; "What", "Why", "How" each preceded by a tiny coloured dot; "Log in" and an orange "Sign up" pill), the two-line headline "Remember everything. Organize nothing.", a sentence in which content types appear as coloured outline tags ("notes", "bookmarks", "inspiration", "articles", "images"), and a grey capsule listing "iPhone app", "Browser Extension" and "Android app". Below sits a large product mock-up — a blurred mood board with a watch in focus, "Forget"/"Keep" buttons and a phone overlay.

Then comes "OUR MANIFESTO", a long passage in large serif text that opens with an oversized italic "In", followed by a pink list of things mymind refuses ("NO social features", "NO vanity metrics", "NO social pressure", "NO collaboration", "NO ads") with "NO" in orange. The page continues through "Welcome to your new mind", browser icons, "The first and only extension for your real mind.", "Just save it. Artificial Intelligence takes care of the rest." (with an outlined "AI" lozenge in the headline and floating furniture photos), a full-bleed orange band ("Folders are dead. This is your personal search engine."), a grid of pastel feature cards ("A treasure trove of ideas, inspiration & references"), testimonial bubbles ("Trusted by thinkers & doers everywhere."), and "For visual minds of all kinds."

The voice is intimate and opinionated — privacy-first, anti-social-media, calm. Imagery is curated objects (a chrome chair, an orange lamp, a steel watch) on pale backgrounds.

## Colors

Backgrounds by area: `#ffffff` (12637), `#fff1f1` (6500), `#f9fafc` (5120), `#f6f4f2` (2211), `#ff5924` (1712), `#e5eaf2` (1665), `#ccddd8` (935), `#f3f0e7` (772), `#dde9d3` (434). Text by characters: `#4a5465` (1461), `#000000` (1057), `#3a475a` (536), `#ffffff` (216), `#717286` (177), `#f0f2f5` (157), `#748297` (152), `#ff5924` (148).

- **canvas `#ffffff`** and **page-body `#f9fafc`** — the white field and the faintly blue-white first band.
- **ink `#4a5465`** — the most-read colour: sans-serif paragraphs and UI text.
- **ink-strong `#000000`** — headlines and nav. **ink-slate `#3a475a`** — the manifesto serif text. **ink-muted `#717286`**, **link `#748297`** — captions and the app-link capsule.
- **primary `#ff5924`** — mymind orange: Sign up and Get the app pills, the "NO" words, the play icons, the full-bleed band. Below that band the measured background steps through a long gradient from `#ff5f2d` to `#fff5f3`.
- **surface-blush `#fff1f1`**, **surface-stone `#f6f4f2`**, **surface-mist `#f0f2f5`** — soft section grounds.
- **card-sand / card-sky / card-sage** — pastel feature-card fills.
- **tag-amber / pink / blue / coral / yellow** — the outline-tag text colours in the hero sentence.

## Typography

Fonts loaded: Louize Regular/Italic/Medium/Bold (205TF), Inter Regular/Medium, Nunito Regular/SemiBold, Avenir LT W01 45 Book, and an icon font "mymindai". By characters: Inter-Regular 1793, Louize-Regular-205TF 1271, Nunito-SemiBold 408, Inter-Medium 320, Nunito-Regular 291, Avenir 28. Louize, Avenir and Inter are referenced by single-weight face names rather than one family with weights, so the weight axis shows only 400 (4146 chars) and 500 (13).

- **display** — the `h1` element computes to Avenir 128px / 108.8px, 400, -8.4px. The capture shows serif letterforms in the headline; the text is set by inner elements whose family was not separately measured. Louize is the only serif family loaded.
- **body** — the manifesto paragraph element computes to Avenir 54px / 59.994px; its visible text is also serif in the capture.
- **body-dominant** — Inter-Regular 20px, the most frequent size (1837 chars).
- **eyebrow** — 16.002px / 28.008px ("OUR MANIFESTO", "NO WASTED TIME OR ENERGY"); positive tracking 16.002px/1.998px is measured on 77 characters.
- **pill-label** — Nunito-SemiBold 18px / 30px, -0.4px. **button** — Nunito 19px / 19px, 600, 0.19px (mobile CTA).
- **nav** — Open Sans 22px / 22px.

Large sizes are tightly tracked: 95.994px/-4.194px, 54px/-2.106px, 41.994px/-0.792px, 39.996px/-1.404px, 79.992px/-1.8px. The fractional sizes come from viewport-relative CSS.

## Layout

Desktop capture: 1280px wide, 18469px tall, measured as 40 bands. The first band (2873px, `#f9fafc`) holds hero, mock-up and manifesto with content between x=143 and x=1200. Text columns are narrow and centred; the manifesto measures 747px wide. The orange band starts at y=7113 and is 1382px tall before the gradient steps. Feature cards are 458–658px wide with 50px padding. The header has 33px top padding and 6 visible links. Spacing values in use: 4, 10, 11, 18, 20, 24, 26, 30, 32, 33px.

## Elevation & Depth

Shadows are rare and warm: `rgba(0, 0, 0, 0.15) 0px 0px 120px 0px` (a huge soft halo around the product mock-up), `rgba(255, 154, 36, 0.1) 0px 8px 16px 2px`, a two-part orange glow `rgba(255, 167, 129, 0.44) 0px 57px 60px -54px, rgba(255, 128, 36, 0.27) 0px -27px 50px -40px`, and `rgba(140, 142, 151, 0.32) 0px 4px 7px -4px`. The radial gradient glow behind the hero circle supplies most of the depth.

## Shapes

Measured radii: 100px (26 — tags and app capsule), 16px (10 — feature cards), 36px (5), 120px (4), 12px (3), 30px, 20px, `20px 20px 0px 0px`, 50% (the hero circle and icons), and a clamp-based elliptical radius on the mock-up. Buttons are full pills (999px on mobile).

## Components

- **button-primary** — "Sign up" / "Get the app": `#ff5924`, white Nunito 19px/600, full pill, padding 14px 24px, 47px tall (measured on mobile).
- **app-pill** — the grey capsule with platform icons: `#748297` Nunito-SemiBold 18px, 100px radius, padding 10px 24px, 50px tall.
- **content tag** — outline pill around a word in the hero sentence, each tag in its own colour.
- **card** — pastel fill, 16px radius, 50px padding, a serif title and short sans paragraph above a product screenshot.
- **orange-band** — full-bleed `#ff5924` section with black serif headline, white sans paragraph and a "WATCH THE VIDEO" link with play icon.
- **nav** — transparent over the hero, dot-prefixed links, Log in text link, orange Sign up pill.

## Design System Architecture

No public mymind design system or brand-guideline page was opened for this file (no design-system link appears on the home page; see SOURCES.json). The shipped root variables are WordPress block presets (`--wp--preset--*`) and a set of easing curves (`--ease-out-back: cubic-bezier(0.175, 0.885, 0.32, 1.275)`, `--ease-in-out-quint`, `--ease-out-cubic` and others); colours and type are set per component, not tokenised.

## Do's and Don'ts

- Do keep grounds pale and let one orange carry every action.
- Do set headlines very large with tight negative tracking.
- Do mix a serif for statements with a quiet sans for explanation.
- Do use pastel cards with generous 50px padding and 16px corners.
- Don't add hard shadows; use soft halos and glows.
- Don't introduce new bright colours; the five tag colours are the full accent set.
- Don't crowd the hero; it is one headline, one sentence, one capsule.

## Responsive Behavior

Measured at 390px: the headline drops from 128px/108.8px to 50.004px/48.006px; the manifesto paragraph from 54px/59.994px to 30.006px/39.996px; the eyebrow stays 16.002px/28.008px. The mobile pass found the "Get the app" CTA (`#ff5924`, 999px, 47px tall, 153px wide), 2 visible header links and a menu toggle labelled "Menu" (desktop: 6 links, no toggle), and 1 card column (desktop up to 5). Mobile font sizes by characters are led by 16.002px, 28.008px, 20px and 30.006px.

## Iteration Guide

1. Start with `canvas` white and the radial orange-pink glow behind a centred headline.
2. Set the headline huge with negative tracking; follow with a sans sentence containing coloured outline tags.
3. Add the `app-pill` capsule and one `button-primary`.
4. Use pastel `card`s and one `orange-band` to break the long scroll.
5. Keep ink `#4a5465` for paragraphs and black for headlines.
