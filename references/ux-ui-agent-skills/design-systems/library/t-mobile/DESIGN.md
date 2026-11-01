---
version: alpha
name: T-Mobile
category: "Telecom"
description: "T-Mobile USA home page design system: TeleNeo 800 headlines (48px/24px), system-ui body, magenta #e20074 actions with #770141 hover, white and #f5f5f5 surfaces, 8px card radius, square 0px primary button, #333333 footer."
colors:
  canvas: "#333333"
  page-body: "#f5f5f5"
  page-largest: "#ffffff"
  ink: "#fbfbfb"
  primary: "#e20074"
  on-primary: "#fbfbfb"
  ink-secondary: "#141414"
  ink-2: "#6a6a6a"
  ink-4: "#000000"
  ink-5: "#2b2b2b"
  hairline: "#cccccc"
  primary-hover: "#770141"
typography:
  display:
    fontFamily: TeleNeo
    fontSize: 48px
    fontWeight: 800
    lineHeight: 50px
  display-mobile:
    fontFamily: TeleNeo
    fontSize: 28px
    fontWeight: 800
    lineHeight: 30px
  subheading:
    fontFamily: TeleNeo
    fontSize: 24px
    fontWeight: 800
    lineHeight: 26px
  body:
    fontFamily: "\"system-ui\", -apple-system, Roboto, Helvetica, \"Segoe UI\", Arial, sans-serif"
    fontSize: 11px
    fontWeight: 400
    lineHeight: 15px
  button:
    fontFamily: "\"system-ui\", -apple-system, Roboto, Helvetica, \"Segoe UI\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 23.1px
  link:
    fontFamily: "\"system-ui\", -apple-system, Roboto, Helvetica, \"Segoe UI\", Arial, sans-serif"
    fontSize: 12px
    fontWeight: 600
    lineHeight: 16px
  button-secondary:
    fontFamily: "\"system-ui\", -apple-system, Roboto, Helvetica, \"Segoe UI\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 18px
rounded:
  xs: 4px
  sm: 8px
  md: 12px
  lg: 60px
  xl: 90px
  none: 0px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 7px
  s6: 8px
  s7: 12px
  s8: 14px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 16px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 7px 16px
    height: 34px
  link:
    textColor: "{colors.ink-5}"
    typography: "{typography.link}"
    rounded: "{rounded.md}"
    padding: 16px 14px
    borderColor: "{colors.hairline}"
  nav:
    textColor: "{colors.ink-5}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink-5}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-secondary}"
    rounded: "{rounded.sm}"
    boxShadow: rgba(65, 65, 65, 0.11) 0px 2px 20px 3px, rgba(65, 65, 65, 0.03) 0px 2px 20px 10px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
---

# T-Mobile

## Overview
The measured site is the T-Mobile USA home page (https://www.t-mobile.com/), a retail-first telecom storefront. The page is a stack of full-width promotional bands on a white (#ffffff) and light-grey (#f5f5f5) ground, punctuated by one saturated magenta (#e20074) that carries every primary action and the brand tile. Headlines are set in the proprietary face TeleNeo at weight 800, which gives the page a heavy, confident, slightly rounded-geometric voice, while almost all other text is a small system-font stack. The capture shows large device photography (iPhone 18 Pro, Samsung Galaxy S26+), a solid magenta "$0 out of pocket" tile, plan-comparison cards with price figures set in magenta, and a dark charcoal (#333333) footer with link columns. Microcopy is deal-led and plain: "Switch to America's Best Network.", "Get up to $1,000 off iPhone 18 Pro.", "Shop now", "Join today". Fine print is abundant and set very small (11px body). The overall density is high and commercial; the brand relies on colour and heavy type rather than ornament.

## Colors
The palette is measured from the live page. Magenta `primary` (#e20074) is the fill of the detected primary button ("My account") and of the smaller "Start your switch" secondary button; its hover state is a deep plum, `primary-hover` (#770141). On-primary text is the off-white #fbfbfb. Surfaces: `page-largest` (#ffffff) is the biggest background by area and the card fill; `page-body` (#f5f5f5) is the body/main background; `canvas` (#333333) and `ink` (#fbfbfb) are the footer pair that the generator selected as the dominant canvas/ink roles (the footer is the one dark band on the page). Text on light surfaces is `ink-secondary` (#141414, the most-read colour, used for headlines and body copy), with `ink-2` (#6a6a6a) for supporting copy and `ink-4` (#000000) and `ink-5` (#2b2b2b) for navigation and link text. `hairline` (#cccccc) is the one measured border colour. The site's root CSS variables also publish a magenta ramp (`--tdds-color-brand-primary-100` #ffcee7, `-200` #ff52a3, `-300` #f6288f, `-400` #e20074, `-500` #a7005a, `-600` #770141); only the measured values are declared as tokens here.

## Typography
Two families are measured. TeleNeo (loaded at weights 700 and 800) is used for display and headings: `display` is 48px / 50px at weight 800 on desktop, `display-mobile` is 28px / 30px at weight 800 at a 390px viewport, and `subheading` is 24px / 26px at weight 800. Everything else is the system stack `system-ui, -apple-system, Roboto, Helvetica, "Segoe UI", Arial, sans-serif`: `body` is 11px / 15px at weight 400 (the fine print dominates by character count), `button` is 14px / 23.1px at weight 700, `button-secondary` is 14px / 18px at weight 600 and `link` is 12px / 16px at weight 600. Small eyebrow labels (for example "APPLE", "SAMSUNG") use 10px with 0.9px letter-spacing. TeleNeo is proprietary and not published on the page for download; a heavy geometric sans at 800 is the nearest substitute, and the system stack is the fallback the site itself ships.

## Layout
The desktop capture is measured at 1280px width with a total scroll height of 5351px. Content sits inside generous side gutters; the hero is centered text with two buttons, followed by a two-up row of large promo tiles (a solid magenta tile beside a white device card), a horizontally scrolling carousel of deal cards with previous/next arrow buttons, a three-column plan comparison, another carousel, an icon row ("Explore T-Mobile.") and a four-plus column footer. The measured spacing scale runs 1px, 2px, 4px, 6px, 7px, 8px, 12px, 14px, 16px, 20px (tokens `s1` to `s10`); common gaps on the page are 8px, 16px and 24px, and the most frequent padding is 7px (button vertical padding).

## Elevation & Depth
Depth is soft and diffuse. Cards carry a two-layer shadow, `rgba(65, 65, 65, 0.11) 0px 2px 20px 3px, rgba(65, 65, 65, 0.03) 0px 2px 20px 10px`, measured on 22 elements. Other measured shadows appear once each: a three-layer `rgba(0, 0, 0, 0.05)` stack, `rgba(0, 0, 0, 0.08) 0px 2px 8px 0px`, and `rgba(65, 65, 65, 0.19) 0px 8px 24px 0px`. Flat colour blocks (the magenta tile, the dark footer) provide the stronger hierarchy; shadows are only used to lift white cards off the grey ground.

## Shapes
Radii measured on the page: 4px (`xs`, secondary button and links), 8px (`sm`, cards, the most frequent value), 12px (`md`, outlined quick-link tiles), 60px (`lg`) and 90px (`xl`) for one element each, and 0px (`none`) for the primary button, the navigation and the footer. The primary "My account" button is a hard rectangle, 48px tall with 16px horizontal padding; the smaller secondary button is 34px tall with 7px 16px padding and a 4px radius.

## Components
- **button-primary**: magenta #e20074 fill, #fbfbfb text, 14px weight 700, 0px radius, 48px tall; hover fills #770141.
- **button-secondary**: magenta fill, #ffffff text, 14px weight 600, 4px radius, 34px tall (the "Start your switch", "Shop now" and "Join today" buttons).
- **link**: 12px weight 600, #2b2b2b, 12px radius, 16px 14px padding, `hairline` border (the outlined quick-link tiles such as "Pick a phone plan").
- **nav / nav-link**: #2b2b2b text, 14px weight 700, 0px radius, 48px tall bar on the #f5f5f5 body background.
- **card**: white fill, #141414 text, 8px radius, the two-layer shadow above.
- **footer**: #333333 fill, #fbfbfb text, 0px radius.
Survey pop-ups, chat widgets ("Need help ordering?") and cookie controls seen in earlier captures are third-party or transient overlays and are not part of the component set.

## Design System Architecture
No public design-system documentation was reachable: fetching https://www.t-mobile.com/brand returned HTTP 403 Forbidden. The shipped CSS shows the de-facto system. Root custom properties use two prefixes: `--tdds-` (for example `--tdds-color-brand-primary-400`, `--tdds-color-fill-onLight-background-secondary`, `--tdds-spacing-size-16`, `--tdds-typeset-body-lg-strong`, `--tdds-elevation-onDark-shadow-close`) and `--phx-` (for example `--phx--spacer-8`, `--phx--type-title2-size-md`). The naming separates onLight and onDark fills, a brand-primary ramp from 100 to 600, a grayscale ramp, status colours (info, caution) and named typesets (body-sm-strong 600 12px/16px, body-lg-strong 600 16px/20px). Tokens in this file are limited to what was measured on rendered elements.

## Do's and Don'ts
- Do use #e20074 for the single most important action in a band, with #fbfbfb or #ffffff label text.
- Do set headlines in a heavy (800) geometric sans and keep sentences short and deal-led.
- Do put white cards with 8px radius and the soft shadow on a #f5f5f5 ground.
- Don't round the primary button; it measures 0px radius.
- Don't use the browser-default blue for links; measured link text is #2b2b2b or magenta.
- Don't treat survey, chat or cookie overlays as brand UI.
- Don't add a second saturated accent next to the magenta.

## Responsive Behavior
Measured at a 390px viewport: the h1 drops from 48px to 28px (line-height 30px), the header shows 3 links with a visible "Menu" toggle, and the first band is a single column with its headline centered and a carousel present. Breakpoint values, grid column counts below the first band, and touch-target sizes were not measured.

## Iteration Guide
1. Start from the generated tokens: magenta #e20074 action, #141414 text, #ffffff and #f5f5f5 surfaces.
2. Use TeleNeo (or a heavy substitute) at 800 for 48px / 24px headings; use the system stack for UI.
3. Build cards at 8px radius with the measured two-layer shadow; keep buttons at 48px (primary) and 34px (secondary).
4. End the page with the #333333 footer in #fbfbfb text.
5. Re-run `node web/scripts/verify-designs.mjs --slug=t-mobile` after every token change and keep every value traceable to web/data/extracted/t-mobile.json.
