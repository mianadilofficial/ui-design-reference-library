---
version: alpha
name: Zoom
category: "Product & SaaS"
description: "Zoom (www.zoom.com), the AI-first work platform, measured on the live home page: white canvas, navy ink #00053d, Zoom blue #0b5cff primary buttons with 12px radius, Newsreader serif headlines at 54px and 48px, Inter UI text at 14px and 16px, and a blue-to-violet gradient hero with rounded product-preview cards."
colors:
  canvas: "#ffffff"
  ink: "#00053d"
  primary: "#0b5cff"
  on-primary: "#ffffff"
  surface-grey: "#e0e0e6"
  ink-muted: "#696b6e"
  ink-night: "#00031f"
  ink-near-black: "#181819"
  surface-tint: "#e6f0ff"
  surface-faint: "#f3f8ff"
  border-soft: "#d1def2"
  primary-hover: "#0b5cff99"
typography:
  display:
    fontFamily: Newsreader, Helvetica, Arial, "Noto Sans JP", "Noto Sans KR", "Noto Sans SC", "Noto Sans TC", "Noto Sans", sans-serif
    fontSize: 54px
    fontWeight: 500
    lineHeight: 60.48px
  display-mobile:
    fontFamily: Newsreader, Helvetica, Arial, "Noto Sans JP", "Noto Sans KR", "Noto Sans SC", "Noto Sans TC", "Noto Sans", sans-serif
    fontSize: 34px
    fontWeight: 500
    lineHeight: 37.4px
  heading:
    fontFamily: Newsreader, Helvetica, Arial, "Noto Sans JP", "Noto Sans KR", "Noto Sans SC", "Noto Sans TC", "Noto Sans", sans-serif
    fontSize: 48px
    fontWeight: 400
    lineHeight: 52.44px
    letterSpacing: "-1.4px"
  subheading:
    fontFamily: Newsreader, Helvetica, Arial, "Noto Sans JP", "Noto Sans KR", "Noto Sans SC", "Noto Sans TC", "Noto Sans", sans-serif
    fontSize: 32px
    fontWeight: 500
    lineHeight: 38.4px
  body:
    fontFamily: Inter, Helvetica, "Noto Sans JP", "Noto Sans KR", "Noto Sans SC", "Noto Sans TC", "Noto Sans", Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.9px
  button:
    fontFamily: Inter, Helvetica, "Noto Sans JP", "Noto Sans KR", "Noto Sans SC", "Noto Sans TC", "Noto Sans", Arial, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 14px
  nav:
    fontFamily: Inter, Helvetica, "Noto Sans JP", "Noto Sans KR", "Noto Sans SC", "Noto Sans TC", "Noto Sans", Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
  link:
    fontFamily: Inter, Helvetica, "Noto Sans JP", "Noto Sans KR", "Noto Sans SC", "Noto Sans TC", "Noto Sans", Arial, sans-serif
    fontSize: 15px
    fontWeight: 500
    lineHeight: 18px
  button-secondary:
    fontFamily: Inter, Helvetica, "Noto Sans JP", "Noto Sans KR", "Noto Sans SC", "Noto Sans TC", "Noto Sans", Arial, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
    letterSpacing: "-0.64px"
rounded:
  xs: 4px
  sm: 8px
  md: 10px
  lg: 12px
  xl: 16px
  2xl: 20px
  3xl: 24px
  4xl: 100px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 7.78px
  s6: 8px
  s7: 10px
  s8: 11px
  s9: 12px
  s10: 14px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 4px 20px
    height: 46px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.lg}"
    padding: 4px 20px
    height: 46px
    borderColor: "{colors.ink}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.sm}"
    padding: 8px
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    padding: 8px 16px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.lg}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    padding: 60px 0px
---

## Overview

Zoom's home page is measured at `https://www.zoom.com/` (page title "One platform to connect | Zoom"). The opened page's top bar lists Products, AI, Solutions, Pricing, Support, Sign In, Contact Sales and What's New, with a Meet menu (Join a meeting, Host a meeting, Schedule a meeting, Download app) and product groups Zoom Workplace, Business Services, Zoom CX, Zoom AI, Developers, and Apps and Integrations. Its section headings include "Find out what's possible when work connects", "One platform. Endless ways to work together.", "Trusted by millions. Built for you.", "Businesses achieve more with Zoom", "Making news, making impact" and "See what Zoom can do for your business". Calls to action are "Sign Up Free", "Contact Sales", "Explore products", "Find your plan", "Get started today", "Learn more", "Read more", "Register now" and "Get AI support".

The 1280px capture is 6887px tall. The top of the page is a deep blue gradient that lifts to lilac at the bottom of the hero. The header carries the Zoom wordmark, navigation, search and globe icons, a white "Contact Sales" button and a blue "Sign Up Free" button. An announcement banner sits just below the header (an event promotion with a Register now pill and a close icon); it is a promotional overlay and not documented as brand UI. The hero headline "Find out what's possible when work connects" is white Newsreader serif, centered, with a one-line subhead, a navy "Explore products" button and a white "Find your plan" button, and below it a horizontal carousel of rounded product-preview cards (Meetings, My Notes, ZoomMate, AI Productivity Suite, Phone) with dot indicators and round arrow buttons. The page then moves to a white section with a gradient-lettered "My Notes" and the headline "Your new AI note taker" over a large rounded photograph of mountains with a product window.

The voice is confident, benefit-led and direct, using "you" and "your", with short declarative lines ("Bridge the gap between talking and doing with the AI-first work platform built for you.").

## Colors

The canvas is `#ffffff` (5887 area). `ink` is `#00053d`, a deep navy used for headings and for the footer and secondary button fills (1181 area for the navy fill). `primary` is `#0b5cff` (Zoom blue; also `--wm-blue` in the root), the fill of the Sign Up Free button with a white label, with a hover fill of `#0b5cff99`. The blue is also used as text (215 characters) and as border color on 7 elements.

Other measured surfaces: `surface-grey` `#e0e0e6` (691), `surface-tint` `#e6f0ff` (102, the Contact Sales button fill before hover and a soft panel), `surface-faint` `#f3f8ff` (26), `#4488ff` (4), `#d1def2` (2, `border-soft`) and the translucent white `#ffffff1a` (90). Text colors by characters: `#ffffff` (3341, mostly on the dark hero and footer), `#00053d` (911), `#0b5cff` (215), `ink-muted` `#696b6e` (149), `ink-night` `#00031f` (90), `ink-near-black` `#181819` (77) and `#1722f6` (8).

The root also declares a smaller set with a `--wm-` prefix: `--wm-bg` `#f7f9fc`, `--wm-border` `#e7eaf0`, `--wm-text` `#131619`, `--wm-orange` `#f5642d`, `--wm-radius` 12px and `--wm-hover` `rgb(110 118 128 / 0.12)`. Swiper's `--swiper-theme-color` `#007aff` is a library default and not a brand color.

## Typography

Two families: Inter (4253 characters, UI and body) and Newsreader (538, headlines), with a long fallback chain that includes Helvetica, Arial and the Noto Sans JP, KR, SC and TC families for CJK pages. The root declares named stacks: `--font-primary` Inter, `--font-title` Newsreader, `--font-title-light`, `--font-docs` SF Pro, `--font-lomo` LomoCopy LT Std and `--font-digital` Digital Numbers, plus weights 300, 400, 500, 600 and 700. Newsreader loads as a variable font from 200 to 800 and Inter from 100 to 900.

The hero h1 is Newsreader 500 at 54px on 60.48px (34px on 37.4px on mobile). The h2 `heading` is Newsreader 400 at 48px on 52.44px with -1.4px tracking (28px on 31px with -1px on mobile). The `subheading` is Newsreader 500 at 32px on 38.4px. Body is Inter 400 at 14px on 18.9px; the mobile body measured 16px on 22.4px with -0.56px tracking. Buttons are Inter 600 at 14px (primary) and 16px on 24px with -0.64px tracking (secondary); nav is Inter 400 at 16px; links are Inter 500 at 15px on 18px.

Common sizes by characters: 14px (2225), 16px (1495), 20px (245), 10px (205), 46px (139), 12px (109), 18px (89), 15px (88), 32px (82), 54px (42) and 48px (30). Tracking is negative at medium sizes: 20px/-0.4px, 18px/-0.56px, 16px/-0.64px, 14px/-0.28px, 12px/-0.24px, 48px/-1.4px. Weights: 400 (3296), 500 (917), 600 (408), 700 (155) and 450 (15).

## Layout

The page uses a centered hero over a full-width carousel, then white sections with generous padding. The measured gaps are 12px (32), 8px (21), 10px (17), 40px (14), 24px (13), 20px (12), 4px (10), 7.778px, 16px, 5px, 32px, 31px and 37px; the paddings are 16px (61), 20px (41), 6px (40), 8px (22), 10px (20), 4px (16), 40px (11), 32px (9), 12px (8) and 60px (6). Primary and secondary buttons are 46px tall with `4px 20px` padding. The footer has `60px 0px` padding on a navy fill. The Swiper navigation size is 44px in the root.

## Elevation & Depth

Three shadow recipes were measured. Two are very soft layered ambient shadows for cards: `rgba(0, 0, 0, 0.05) 0px 6px 80px 0px, rgba(0, 0, 0, 0.03) 0px 1.34px 17.869px 0px, rgba(0, 0, 0, 0.02) 0px 0.399px 5.32px 0px` and a slightly stronger variant at 0.07, 0.04 and 0.03 with a 9px offset. The third is a tight two-layer shadow `rgba(19, 22, 25, 0.1) 0px 4px 8px 0px, rgba(19, 22, 25, 0.1) 0px 2px 4px 0px`. Photographic product windows float on a gradient or photograph rather than on shadow.

## Shapes

Radii are a graded scale: 20px (28 elements, the large cards), 12px (24, buttons), 8px (21, links and small controls), 50% (17, round icon buttons and dots), 16px (5), 10px (4), 4px (2) and mixed corners such as `12px 12px 0px 0px`, `0px 0px 16px 16px`, `20px 20px 0px 0px` and `0px 0px 20px 20px` for stacked cards. The system tokens are `xs` 4px, `sm` 8px, `md` 10px, `lg` 12px, `xl` 16px, `2xl` 20px, `3xl` 24px and `4xl` 100px. Primary and secondary buttons use `lg` 12px; on mobile the secondary measured 10px.

## Components

- **Primary button.** `#0b5cff` fill and border, white Inter 600 at 14px, 46px tall, 12px radius, `4px 20px` padding; hover `#0b5cff99`.
- **Secondary button.** `#00053d` fill and border, white Inter 600 at 16px with -0.64px tracking, 12px radius; used for Explore products.
- **Soft button.** `#e6f0ff` fill with navy text, 12px radius, 46px tall (Contact Sales); on hover the fill becomes `rgba(243, 248, 255, 0.6)`.
- **Text link.** Navy Inter 500 at 15px with 8px radius and 8px padding (My Notes).
- **Skip link.** White 16px text on `#0b5cff` with `8px 16px` padding for accessibility navigation.
- **Product-preview card.** Gradient-blue cards 20px radius with an icon and title, a screenshot panel and a photographic variant.
- **Footer.** Navy `#00053d`, white Inter 600 at 14px links, `60px 0px` padding.
- **Promotional banner and chat launcher.** A top announcement and a round chat bubble are overlays, not brand components.

## Design System Architecture

Zoom publishes brand guidance outside the home page. The opened Media Kit page (`https://www.zoom.com/en/about/media-kit/`) lists no colors or typefaces itself; it links a card titled "Zoom Brand Guidelines" to `https://brand.zoom.us/`, which redirects to `https://brand.zoom.com/` and returned only the title "Zoom Brand Center" to the fetch, so no guideline values could be read and none are cited. The shipped CSS shows the de-facto system: named font stacks and weights as custom properties (`--font-primary`, `--font-title`, `--font-title-light`, `--font-docs`, `--font-lomo`, `--font-digital`, `--font-*-weight`), a `--wm-*` set for background, border, text, hover, blue, orange and radius, and Swiper variables. Colors outside `--wm-*` are hard-coded.

## Do's and Don'ts

- Do set headlines in Newsreader at weights 400 and 500 and UI in Inter.
- Do use `#0b5cff` for the main action, `#00053d` for secondary and footer, and `#e6f0ff` for soft buttons.
- Do round buttons at 12px and large cards at 20px.
- Do keep shadows soft and layered, as measured.
- Don't treat the announcement banner or chat bubble as brand UI.
- Don't use Swiper's `#007aff` as a brand blue.
- Don't use weights between 600 and 800 for the serif headlines; measured weights are 400 and 500.

## Responsive Behavior

The mobile pass at 390px recorded: h1 34px on 37.4px with `0px 12px` padding (54px on 60.48px on desktop), h2 28px on 31px with -1px tracking (48px on 52.44px with -1.4px), body 16px on 22.4px with -0.56px tracking and `0px 20.8px` padding (14px on 18.9px), and the secondary button radius at 10px (12px). Mobile font sizes by characters were 16px (985), 14px (969), 12px (261), 20px (245), 10px (231), 28px (132), 24px (66), 32px (53), 34px (42) and 18px (29). Column counts and the navigation collapse were not measured.

## Iteration Guide

1. Base: white with navy `#00053d` text; hero on a blue-to-lilac gradient with white serif type.
2. Headline: Newsreader 500 at 54px (hero) and 400 at 48px with -1.4px tracking (section).
3. Buttons: 46px tall, 12px radius; blue for sign-up, navy for explore, soft blue-tint for sales.
4. Cards: 20px radius with the layered ambient shadow; carousels with round arrow buttons.
5. Do not add colors without measurement; the `--wm-orange` `#f5642d` is declared but its use on this page was not measured.
