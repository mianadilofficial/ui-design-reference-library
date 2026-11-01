---
version: alpha
name: Cron
category: "Productivity & SaaS"
description: "Cron's cron.com is a single dark screen: #161412 warm near-black canvas with a #0f0d0a footer, Helvetica Neue throughout (a 140px/700 'It's about time.' headline at -3px tracking, 22px/37.4px body in #cccccc), and one #ff4700 orange pill 'Sign up' button wrapped in a 100px orange glow."
colors:
  canvas: "#161412"
  page-largest: "#0f0d0a"
  ink: "#ffffff"
  primary: "#ff4700"
  on-primary: "#ffffff"
  ink-muted: "#cccccc"
typography:
  display:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 140px
    fontWeight: 700
    lineHeight: 126px
    letterSpacing: "-3px"
  display-mobile:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 80px
    fontWeight: 700
    lineHeight: 72px
    letterSpacing: "-2px"
  body:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 37.4px
  body-mobile:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
  button:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 22px
    fontWeight: 500
    lineHeight: 22px
  badge:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 15px
    fontWeight: 500
    letterSpacing: 0.15px
  footer:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 13px
    fontWeight: 500
    lineHeight: 19.5px
rounded:
  xs: 4px
  pill: 9999px
spacing:
  s1: 12px
  s2: 20px
  s3: 24px
  s4: 140px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 24px
    height: 46px
    boxShadow: rgba(255, 71, 0, 0.2) 0px 0px 100px 0px
  button-primary-hover:
    boxShadow: rgba(255, 71, 0, 0.4) 0px 0px 25px 0px
  announcement-badge:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.badge}"
    rounded: "{rounded.xs}"
    height: 45px
    boxShadow: rgba(255, 71, 0, 0.5) 0px 0px 0px 0.5px inset, rgba(255, 72, 0, 0.2) 0px 0px 28px 0px
  nav:
    textColor: "{colors.ink}"
    padding: 0px 140px
    height: 120px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    typography: "{typography.footer}"
    padding: 20px 140px 40px
---

## Overview

Cron was a calendar app for professionals and teams; its site at cron.com (measured title "Cron Calendar") is now a single-screen landing page that announces the move to Notion Calendar while keeping Cron's original look. The desktop capture shows one dark, warm near-black screen. At the top left is the chunky orange Cron logotype; at the top right, four white links ("Blog", "Changelog", "Docs", "Login") and an orange pill "Sign up" button that glows softly. Centred below is a small dark badge with a thin orange outline and glow — "Cron is now Notion Calendar →" — and then an enormous, tightly tracked white headline, "It's about time.", followed by one line of grey copy: "Cron is the next-generation calendar for professionals and teams."

The lower half of the screen is a product composite: a dark desktop calendar window (mini-month, calendar list, a November 2021 week view with orange, red, green and blue events, and an open command menu searching "meet") overlapped by an iPhone showing the December day view with an orange "Join Zoom meeting" button. A slightly darker footer strip carries four small links: "Privacy Policy", "Terms of Service", "Web app", "Download".

The design is reduced to essentials: one typeface, one accent colour, one headline, one screenshot. The headline's pun and the single supporting sentence carry the message; the product image does the rest. The extractor counted only 32 visible elements on the page.

## Colors

- **Canvas `#161412`** — the body background, a warm (slightly brown) near-black.
- **Footer `#0f0d0a`** (`page-largest`) — a darker warm black for the footer band; it is the largest measured background by area.
- **Ink `#ffffff`** — the headline, nav links, button labels and footer links.
- **Muted ink `#cccccc`** — the supporting sentence.
- **Primary `#ff4700`** — Cron orange: the "Sign up" pill, the logotype, and the outline and glow of the announcement badge (as `rgba(255, 71, 0, …)`).

That is the complete measured palette: two warm blacks, two neutrals and one orange. The event colours inside the calendar screenshot belong to the product image.

## Typography

The site uses one family, **Helvetica Neue** (`"Helvetica Neue", Helvetica, Arial, sans-serif`); no web fonts are loaded, so it renders from the system where installed.

| Role | Size / line-height | Weight | Tracking |
|---|---|---|---|
| Display (h1 "It's about time.") | 140px / 126px | 700 | -3px |
| Display at 390px | 80px / 72px | 700 | -2px |
| Body | 22px / 37.4px | 400 | normal |
| Nav link / button | 22px | 500 | normal |
| Announcement badge | 15px | 500 | 0.15px |
| Footer | 13px / 19.5px | 500 | normal |

Only four sizes appear on desktop — 22px, 13px, 15px and 140px — and three weights — 400, 500 and 700. The headline's line-height (126px) is smaller than its size (140px), so the line sits tight; the body line-height is a generous 1.7. The badge is the only element tracked open (+0.15px).

**Substitute:** no font file is loaded; where Helvetica Neue is missing, the declared stack falls back to Helvetica and Arial. Keep the -3px tracking at 140px when substituting.

## Layout

The page is one centred column with 140px side padding: the header uses `0px 140px` and the footer `20px 140px 40px`, and in the desktop pass content spans x=140 to x=1140 of the 1280px viewport. The header is 120px tall. Vertically the order is header → badge → headline → sentence → screenshot → footer, each centred. The extractor measured at most two card columns (the desktop window and the phone in the composite). The only other measured paddings are 24px and 12px (the button) and 20px (footer top).

## Elevation & Depth

Elevation is expressed through glow rather than shadow. The "Sign up" button carries a very wide, faint orange halo — `rgba(255, 71, 0, 0.2) 0px 0px 100px 0px` — which tightens on hover to `rgba(255, 71, 0, 0.4) 0px 0px 25px 0px`. The announcement badge combines a 0.5px inset orange hairline (`rgba(255, 71, 0, 0.5)`, rising to 0.75 on hover) with a `rgba(255, 72, 0, 0.2) 0px 0px 28px 0px` glow. The screenshot composite provides the remaining depth: the phone overlaps the desktop window in the capture.

## Shapes

Only two radii were measured: 9999px on the "Sign up" pill and 4px on the announcement badge. Everything else is either text or the rectangular screenshot. The orange logotype is built from heavy rounded letterforms (capture).

## Components

- **Primary pill** — "Sign up": `#ff4700`, white Helvetica Neue 22px/500, 12px 24px padding, 46px tall, 9999px radius, 100px orange glow; on hover the glow tightens to 25px at 0.4 alpha while the fill stays the same.
- **Announcement badge** — "Cron is now Notion Calendar →": `#161412` fill, white 15px/500 text with +0.15px tracking, 4px radius, 45px tall, 0.5px orange inset outline and 28px orange glow; hover strengthens the outline to 0.75 alpha.
- **Header** — 120px tall, 0 140px padding, logotype left, white 22px/500 links right; the desktop pass counted six visible header links.
- **Hero headline** — 140px/700, -3px, white, centred.
- **Supporting line** — 22px/37.4px, `#cccccc`, centred.
- **Product composite** — desktop calendar window with an overlapping phone (image).
- **Footer** — `#0f0d0a`, 13px/500 links, 20px 140px 40px padding.

## Design System Architecture

No public design system or brand guideline exists among the pages opened: the links on https://www.cron.com/ go to the blog, changelog, Notion Calendar help docs, login, sign-up, privacy, terms, the web app and the download page, and none is a brand, press or design resource. The page ships no CSS custom properties and only three media queries (`max-width 500px`, `768px`, `1000px`). The de-facto system is the handful of values above: warm blacks `#161412`/`#0f0d0a`, white and `#cccccc` text, orange `#ff4700` with glow effects built from the same orange at 0.2–0.75 alpha, Helvetica Neue at four sizes, and two radii.

## Do's and Don'ts

**Do**
- Use a warm near-black (`#161412`) rather than neutral black.
- Keep a single accent, `#ff4700`, for the main action and brand marks.
- Make the headline huge and tight — 140px/700 with -3px tracking — and the rest of the text small and calm.
- Express emphasis with orange glows and hairlines instead of drop shadows.
- Let one product screenshot do the explaining.

**Don't**
- Don't add a second accent colour to the UI.
- Don't use square buttons; the main action is a pill.
- Don't add sections, cards or icons — the page is a single screen.
- Don't use grey drop shadows on dark backgrounds.
- Don't add web fonts; the site uses Helvetica Neue from the system.

## Responsive Behavior

Measured at 390px: the headline drops from 140px to 80px (line-height 72px, tracking -2px) and stays centred; the supporting sentence drops from 22px to 16px; the header padding changes to `28px 16px` with 16px/400 `#cccccc` text and a 96px height; the extractor found one visible header link and no menu toggle, and no primary button was detected at 390px. Content spans x=16 to x=374, and the extractor measured a maximum of one card column. The badge (15px) and footer (13px) sizes are unchanged. The stylesheet's three breakpoints are `max-width 1000px`, `max-width 768px` and `max-width 500px`; what changes at 768px and 1000px was not measured.

## Iteration Guide

1. Warm near-black `#161412` canvas, `#0f0d0a` footer.
2. Helvetica Neue only: 140px/700 headline at -3px (80px/-2px on phones), 22px/37.4px body in `#cccccc`, 22px/500 nav.
3. One orange `#ff4700` pill, 46px tall, with a 100px 0.2-alpha orange glow; hover tightens the glow.
4. Small announcement badges: 4px radius, 0.5px orange inset hairline plus soft orange glow.
5. 140px side padding on desktop, 16px on phones.
6. Finish with one large product composite and a minimal footer.
