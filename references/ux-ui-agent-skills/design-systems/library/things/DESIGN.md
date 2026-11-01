---
version: alpha
name: Things
category: "Productivity & SaaS"
description: "Cultured Code's Things site sets everything in the system UI font (ui-sans-serif, 20.25px/26.325px body, 36px/700 section titles) in #303336 and #44474b on a cool #f2f5f7 page with #ffffff panels, #5c9cf5 blue text links that gain a 20% blue fill on hover, 18px-radius platform cards and soft two-layer shadows."
colors:
  canvas: "#ffffff"
  page-body: "#f2f5f7"
  ink: "#303336"
  primary: "#5c9cf5"
  ink-body: "#44474b"
  ink-heading: "#2c3138"
  ink-slate: "#55606e"
  ink-muted: "#000f2475"
  ink-faint: "#00071270"
  ink-grey: "#9299a4"
  surface-soft: "#fbfcfe"
  surface-button-soft: "#cfd8e6"
  ink-button-soft: "#000813bd"
  hairline: "#dfe3e8"
  text-input-text: "#000000"
typography:
  display:
    fontFamily: ui-sans-serif, -apple-system, "system-ui", Roboto, sans-serif
    fontSize: 23.994px
    fontWeight: 400
    lineHeight: 29.9925px
  display-mobile:
    fontFamily: ui-sans-serif, -apple-system, "system-ui", Roboto, sans-serif
    fontSize: 20.25px
    fontWeight: 400
    lineHeight: 25.3125px
  heading:
    fontFamily: ui-sans-serif, -apple-system, "system-ui", Roboto, sans-serif
    fontSize: 36px
    fontWeight: 700
    lineHeight: 36px
  subheading:
    fontFamily: ui-sans-serif, -apple-system, "system-ui", Roboto, sans-serif
    fontSize: 20.25px
    fontWeight: 700
    lineHeight: 24.3px
  body:
    fontFamily: ui-sans-serif, -apple-system, "system-ui", Roboto, sans-serif
    fontSize: 20.25px
    fontWeight: 400
    lineHeight: 26.325px
  nav:
    fontFamily: ui-sans-serif, -apple-system, "system-ui", Roboto, sans-serif
    fontSize: 15px
    fontWeight: 600
    lineHeight: 18px
  link:
    fontFamily: ui-sans-serif, -apple-system, "system-ui", Roboto, sans-serif
    fontSize: 20.25px
    fontWeight: 600
    lineHeight: 26.325px
  footer:
    fontFamily: ui-sans-serif, -apple-system, "system-ui", Roboto, sans-serif
    fontSize: 15.3px
    fontWeight: 700
    lineHeight: 18.36px
  input:
    fontFamily: ui-sans-serif, -apple-system, "system-ui", Roboto, sans-serif
    fontSize: 16px
    fontWeight: 400
rounded:
  xs: 3px
  sm: 4.5px
  md: 5px
  lg: 5.47px
  xl: 6px
  2xl: 6.4px
  3xl: 7.63px
  4xl: 9.6px
  card: 18px
spacing:
  s1: 2px
  s2: 3.25px
  s3: 4.05px
  s4: 5px
  s5: 6.5px
  s6: 8px
  s7: 10.13px
  s8: 12.8px
  s9: 12.96px
  s10: 16px
components:
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
    rounded: "{rounded.xl}"
    padding: 4.05px 10.125px
  link-hover:
    backgroundColor: rgba(92, 156, 245, 0.2)
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
    height: 88px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.xl}"
  nav-link-hover:
    backgroundColor: rgba(4, 15, 26, 0.05)
  button-soft:
    backgroundColor: "{colors.surface-button-soft}"
    textColor: "{colors.ink-button-soft}"
    padding: 6.1824px 14.72px
    height: 31px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.2xl}"
    padding: 8px
    height: 36px
    borderColor: "{colors.hairline}"
  card:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
    rounded: "{rounded.card}"
    padding: 18px
  footer:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink-muted}"
    typography: "{typography.footer}"
---

## Overview

Things is Cultured Code's task manager for Apple platforms, and its home page (measured title "Things - To-Do List App for Mac & iOS") reads like an extension of the app: quiet, light, precise. The desktop capture opens with the glossy blue-and-white checkbox app icon centred on a pale `#f2f5f7` ground, the word "Things" in bold, a short paragraph ("Things is the award-winning personal task manager that helps you plan your day, manage your projects, and make real progress toward your goals.") and a blue "Watch Introduction Video" link with a play icon. Below, a tilted, perspective view of the app's sidebar ("Inbox", "Today", "Upcoming", "Anytime", "Someday") and a "Prepare Presentation" to-do drift across the page.

The sections that follow each start with a small coloured icon above a centred bold heading: "Simply Powerful" (with Mac, iPhone, iPad and Watch screenshots), "Get Things Done" (four platform cards — Mac, iPhone & Watch, iPad, Vision Pro — with prices and black App Store badges), a large app icon, "What People Are Saying" (a carousel of social-media quotes in small white cards), "Read All About It" (press and award quotes, Apple Design Award badges), and "Things Newsletter" with an email field and a blue Subscribe button. A four-column footer (Products, Support, News, Company) closes the page.

The copy is calm and confident — "Whatever it is you want to accomplish in life, Things can help you get there." — and the visual language is Apple-native: system font, soft greys, realistic device screenshots, gentle shadows.

## Colors

- **Page ground `#f2f5f7`** (`page-body`) — the body background, header and footer; the largest measured area.
- **Canvas `#ffffff`** — white panels (quote cards, the newsletter field) and the second-largest area; `#fbfcfe` is a slightly blue-tinted near-white panel colour.
- **Ink `#303336`** — the most-read text colour; **`#44474b`** for body paragraphs; **`#2c3138`** for section headings; **`#55606e`** for secondary text.
- **Translucent greys** — `#000f2475` (about 46% navy-black, footer text) and `#00071270` (about 44%, sublines in platform cards); `#9299a4` and `#8e9196` for small captions.
- **Primary `#5c9cf5`** — the blue of text links ("See features", "Watch Introduction Video"); on hover the link gets a `rgba(92, 156, 245, 0.2)` fill. A deeper blue `#4f91fb` was measured as a small background area.
- **Hairline `#dfe3e8`** — the input border; `#001c461f` is a translucent border measured once.
- **Soft button** — `#cfd8e6` fill with `#000813bd` text ("Show More Posts", measured at 390px).

No brand colour is declared in CSS variables; the app icon's blue is imagery.

## Typography

The site uses no web fonts. Every measured character is set in the platform UI font via `ui-sans-serif, -apple-system, "system-ui", Roboto, sans-serif`; no font file is downloaded. Sizes are derived from a scale that produces fractional values (20.25px, 23.994px, 15.3px, 13.5px, 14.4px).

| Role | Size / line-height | Weight | Measured on |
|---|---|---|---|
| Display (intro paragraph) | 23.994px / 29.9925px | 400 | "Things is the award-winning…" |
| Heading | 36px / 36px | 700 | "Simply Powerful" |
| Subheading / card title | 20.25px / 24.3px | 700 | "Mac" platform card |
| Body | 20.25px / 26.325px | 400 | section paragraphs |
| Link | 20.25px / 26.325px | 600 | "See features" |
| Nav | 15px / 18px | 600 | header links |
| Footer heading | 15.3px / 18.36px | 700 | footer columns |
| Input | 16px | 400 | newsletter email |

The most frequent size is 18px (testimonial text), then 15.2px, 20.25px and 15.3px. Weights are 400 for reading, 700 for headings, 800 on 81 characters, and 600 for links and nav. Letter-spacing is normal throughout.

**Substitute:** none required — the system font is the design. On non-Apple platforms the stack resolves to the OS UI font or Roboto.

## Layout

The page is a single centred column. In the 1280px desktop pass the hero content spans x=184 to x=1080. Text blocks are narrow and centred under their headings; screenshots and card rows are wider. The platform cards sit four across (the extractor's maximum card columns on desktop is four); testimonial cards form a masonry-like grid; press quotes are two-up.

Spacing values come from the same fractional scale: the most frequent padding is 27px (26 instances), then 12.8px, 6.5px, 51.1875px, 18px, 36px and 81px. Gaps are 18px, 16px and 24px. The header is 88px tall with the wordmark at the left and three links ("Features", "Support", "Blog") at the right.

## Elevation & Depth

Shadows are soft and layered. The most frequent is a two-part shadow `rgba(0, 0, 0, 0.1) 0px 2px 8px 0px, rgba(0, 0, 0, 0.1) 0px 0px 2px 0px` (eight elements). Others: `rgba(38, 52, 74, 0.15) 0px 1px 0px 0px` (a 1px bottom edge) and `rgba(0, 0, 0, 0.1) 0px 2px 10px 0px, rgba(0, 0, 0, 0.05) 0px 0px 0px 1px` (a shadow plus a 1px outline ring). The device screenshots and the perspective hero carry their own rendered depth.

## Shapes

The largest repeated radius is 18px (17 instances), measured on the platform cards. Small controls use a family of fractional radii from the same scale — 3px (16), 4.5px (14), 6px (10, nav links and text links), 6.4px (the input), 12.8px (8), 10.8px (4) and single uses of 9.5976px, 5.472px and 5px. The overall impression is softly rounded, like macOS controls; nothing is fully pill-shaped in the measured CSS.

## Components

- **Text link** — `#5c9cf5`, 20.25px/600, 4.05px 10.125px padding and 6px radius so that the hover fill (`rgba(92, 156, 245, 0.2)`) forms a soft pill-like highlight.
- **Nav link** — `#303336` (the wordmark) or 50% slate (`rgba(38, 52, 74, 0.5)`, "Features", "Support", "Blog"), 15px/600, 6px radius; hover adds `rgba(4, 15, 26, 0.05)` and darkens the text to 70%.
- **Platform card** — `#f2f5f7` fill, 18px radius, 18px padding, device icon, 20.25px/700 title ("Mac"), translucent grey requirements and price lines, a "view in your currency" link and an App Store badge.
- **Quote card** — small white card with the two-part soft shadow, quote text and an attribution line (capture).
- **Soft button** — "Show More Posts": `#cfd8e6`, `#000813bd` text, 14.72px/600, 6.1824px 14.72px padding, 31px tall (390px pass).
- **Email input** — white, 1px `#dfe3e8` border, 6.4px radius, 8px padding, 36px tall, 16px text.
- **Footer** — `#f2f5f7`, four link columns with 15.3px/700 headings in about 46% navy-black.

## Design System Architecture

No public design system or brand guideline was found. The footer of https://culturedcode.com/things/ links to a Press page, and https://culturedcode.com/press/ offers only a downloadable press-kit ZIP and a contact link; its text names no colours, typefaces or usage rules (the ZIP was not opened). The measured CSS declares no root custom properties. The de-facto system is visible in the computed values: a system-font stack, a fractional size scale (20.25 = 18 × 1.125, 23.994 ≈ 20.25 × 1.185), a matching fractional spacing and radius scale (27px, 12.8px, 6.4px, 4.5px), translucent navy-black text colours instead of solid greys, and blue `#5c9cf5` reserved for links.

## Do's and Don'ts

**Do**
- Use the system UI font stack; no web font is loaded.
- Keep the ground cool and pale (`#f2f5f7`) with white or `#f2f5f7` cards at 18px radius.
- Use translucent navy-black for secondary text instead of flat greys.
- Show realistic device screenshots and the app icon as the hero imagery.
- Mark links in `#5c9cf5` and give them a soft 20% blue hover fill.

**Don't**
- Don't load decorative web fonts.
- Don't use saturated colour blocks or dark bands; the page stays light.
- Don't use hard or dark shadows — keep to 0.1 alpha with small blur.
- Don't make buttons pills; the radii stay between 3px and 18px.
- Don't crowd sections; each has one icon, one heading, one paragraph and one visual.

## Responsive Behavior

Measured at 390px: the intro paragraph drops from 23.994px to 20.25px (line-height 25.3125px) while the "Simply Powerful" heading stays at 36px/700 and body paragraphs stay at 20.25px; nav text drops from 15px to 14px. The header still shows four visible links and a toggle labelled "Things", as on desktop. Card rows were measured at up to two columns (four on desktop). The hero band content spans x=10 to x=364. A "Show More Posts" soft button (`#cfd8e6`, 31px tall) was measured as the mobile primary call to action. The stylesheet's breakpoints include `min-width 420px`, `512px`, `600px`, `734px`, `740px`, `972px`, `1002px` and `1106px`, and `max-width 340px`, `520px`, `620px`, `734px`, `739px` and `899px`. Other reflow was not measured.

## Iteration Guide

1. Set the page in `ui-sans-serif, -apple-system, "system-ui", Roboto, sans-serif`; body 20.25px/26.325px at 400 in `#44474b`.
2. Ground `#f2f5f7`; white panels with the two-part 0.1-alpha shadow.
3. One centred section at a time: small coloured icon, 36px/700 heading, short paragraph, a blue link, then a large screenshot.
4. Cards at 18px radius and 18px padding; small controls at 6px.
5. Secondary text in translucent navy-black (`#000f2475`, `#00071270`).
6. Links in `#5c9cf5` with a `rgba(92, 156, 245, 0.2)` hover fill.
7. Derive new sizes from the existing fractional scale rather than round numbers.
