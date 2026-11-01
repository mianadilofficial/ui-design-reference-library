---
version: alpha
name: Bubble
category: "Developer Tools & IDEs"
description: "Bubble's no-code AI app builder site: deep cobalt #051043 bands and translucent white panels, Manrope set at 800 for 51px headlines with -1px tracking, #0c29ab pill CTAs (100px radius) that darken to #091e7c on hover, a #61caff sky-blue eyebrow and focus ring, and floating product screenshots."
colors:
  canvas: "#ffffff"
  ink: "#1a1a1a"
  primary: "#0c29ab"
  on-primary: "#ffffff"
  primary-hover: "#091e7c"
  surface-cobalt: "#051043"
  surface-livid: "#e4eaf1"
  chip-hover-bg: "#ebf3ff"
  ink-secondary: "#525252"
  ink-inverse-muted: "#ffffffbf"
  sky: "#61caff"
  cobalt-50: "#1e6df6"
  card-text: "#000000"
  card-border: "#e6e6e6"
  outline-border: "#afc0d4"
typography:
  display:
    fontFamily: Manrope
    fontSize: 51px
    fontWeight: 800
    lineHeight: 61.2px
    letterSpacing: "-1px"
  display-mobile:
    fontFamily: Manrope
    fontSize: 44px
    fontWeight: 800
    lineHeight: 52.8px
    letterSpacing: "-1px"
  subheading:
    fontFamily: Manrope
    fontSize: 32px
    fontWeight: 700
    lineHeight: 38.4px
    letterSpacing: "-1px"
  eyebrow:
    fontFamily: Manrope
    fontSize: 16px
    fontWeight: 700
    letterSpacing: 2px
  button:
    fontFamily: Manrope
    fontSize: 16px
    fontWeight: 700
    lineHeight: 16px
  button-large:
    fontFamily: Manrope
    fontSize: 22px
    fontWeight: 700
    lineHeight: 22px
  input:
    fontFamily: "\"Open Sans\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
rounded:
  xs: 4px
  sm: 5px
  md: 8px
  lg: 12px
  xl: 16px
  2xl: 20px
  3xl: 24px
  4xl: 100px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 14px
  s9: 16px
  s10: 18px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.4xl}"
    padding: 0px 20px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-large:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-large}"
    rounded: "{rounded.4xl}"
    padding: 0px 32px
    height: 72px
  badge-outlined:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 6px 10px
    height: 28px
    border: "1px solid #afc0d4"
    boxShadow: rgba(0, 0, 0, 0.06) 2px 4px 16px 0px
  prompt-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 12px
    height: 70px
  template-chip-hover:
    backgroundColor: "{colors.chip-hover-bg}"
    textColor: "{colors.primary}"
    rounded: "{rounded.xs}"
  card:
    textColor: "{colors.card-text}"
    rounded: "{rounded.xs}"
    borderColor: "{colors.card-border}"
---

# Bubble

## Overview

Bubble (bubble.io) sells a no-code, AI-assisted builder for web and mobile apps. The home page was measured at 1280px (11691px tall) and 390px. The page is a long scroll of deep cobalt bands with white and translucent panels floating on them. A 96px top band (#030b30 measured) holds the Bubble wordmark, menus and a "Get started" pill. The hero follows on #051043 navy: a sky-blue tracked eyebrow, "BUILD APPS WITH AI, NO CODE REQUIRED", a 51px extra-bold headline, "Launch apps, not prototypes", and a large AI prompt box with template chips (SaaS platform, AI app, Marketplace, Internal tool, Blank app). A large editor screenshot sits below the prompt.

The page continues with a stat row (6M, 8M, 8K), a client logo strip, "Your app, your way" with a fan of app screenshots and a "See more apps" pill, a split "Take your ideas all the way to the App Store" feature with a video, a Bubble/Enterprise toggle and testimonial, a three-column "Bring your exact vision to life" block, "How Bubble works" with Design, Data and Logic steps, a business-type grid (Enterprise, Agencies, Freelancers, Founders), a community testimonial wall, a "Join millions of builders" closing CTA, an FAQ list, and the footer.

The voice is direct and builder-focused ("Launch apps, not prototypes", "Your app, your way"). Visually the brand is blue throughout: cobalt grounds, a saturated #0c29ab action color, sky-blue #61caff accents, and translucent white glass panels with soft shadows over the navy.

## Colors

- **Canvas — #ffffff.** The body background and the white panels: the prompt box, the testimonial wall, the FAQ and the footer.
- **Ink — #1a1a1a.** The most-read text color (6058 characters).
- **Ink secondary — #525252.** Supporting paragraph text (1037 characters).
- **Ink inverse muted — #ffffffbf.** 75% white for paragraphs on cobalt; the same value is a large translucent panel fill (area 1376).
- **Primary — #0c29ab.** Every measured CTA fill ("Get started", "See more apps", "Start building for free", "Get started for free", "Get started with mobile"), with white #ffffff text. Also used as link and chip-hover text color.
- **Primary hover — #091e7c.** The measured hover fill of the primary button. Bubble's brand color page lists #091E7C in the Cobalt ramp.
- **Surface cobalt — #051043.** The deep navy of the hero and dark bands. Bubble's color page lists #051043 as the darkest Cobalt step, and the CSS declares it as `--cc-cobalt-90`.
- **Sky — #61caff.** The eyebrow text color and the 2px focus outline. It is the Sky blue primary step on the brand color page.
- **Cobalt 50 — #1e6df6.** A measured text accent (37 characters), listed in the Cobalt ramp and declared as `--cc-cobalt-50`.
- **Surface livid — #e4eaf1.** A pale blue-grey surface (area 527) and the most common border color (18 elements).
- **Chip hover background — #ebf3ff.** The hover fill behind the template chips, a Cobalt tint on the brand color page.
- **Outline border — #afc0d4.** The border of the "Built on Bubble" badge (`--cc-livid-40`).
- **Card border — #e6e6e6** and **card text — #000000** belong to the embedded app-preview cards.

The largest measured background area is the translucent tint #f2f3fd4d (area 8122). That is Periwinkle #F2F3FD from the brand palette at 30% alpha, layered over the navy.

## Typography

**Manrope** is the brand typeface. Bubble's typography page says: "Our brand font is Manrope, a sans serif font that's also open source. It's flexible and variable. No gatekeeping." It lists Extrabold, Bold, Semibold and Regular. Per that spec, H1 and H2 use Extrabold, H3 uses Bold, H4 and H5 use Semibold, body sizes use Regular, and eyebrows use Bold in all caps with 2px letter-spacing. The site loads Manrope at 300–800 and Open Sans at 300–700. Open Sans is only measured in the AI prompt field (77 characters). Other faces loaded on the page (Reddit Mono, Roboto, founders grotesk) were not measured on visible home-page text.

Measured roles:

- **Display** — Manrope 51px / 61.2px, weight 800, -1px tracking ("Launch apps, not prototypes", "Your app, your way").
- **Section headings** — 40px weight 800 with -1px tracking ("Bring your exact vision to life", "How Bubble works") and 32px / 38.4px weight 700, -1px tracking ("Take your ideas all the way to the App Store").
- **Eyebrow** — 16px weight 700, 2px tracking, uppercase as set in the copy, #61caff on cobalt.
- **Buttons** — 16px/16px weight 700 for standard pills, 19px for mid pills, 22px/22px for the 72px-tall "See more apps" pill.
- **Prompt input** — Open Sans 14px / 21px, weight 400.

By character count the page is 16px (5696) and 19px (1455) for body copy, with 14px, 32px, 40px and 20px next. Most text is weight 400 (6740 characters); 700, 600, 500 and 800 follow.

## Layout

The desktop layout centers content within about 900–1100px on full-bleed navy bands. The hero copy runs from 190px to 1090px, and later feature blocks use the area from 48px to 1238px. Bands change background in a continuous navy sequence (#030b30, #051043, #08134b, #0a1339, #0d1b41), interrupted by white and near-white sections (#fbfbfe, #ffffff) for the App Store feature, the three-column benefit block and the testimonial wall.

Grids: the stat row and the "Bring your exact vision to life" block use 3 columns, the business-types section uses a 2×2 grid next to a portrait testimonial, and the screenshot fan shows up to 7 card columns. Gaps cluster at 8px, 12px and 24px, then 40px, 64px and 80px between blocks. The most common padding is 20px (47 uses), then 16px and 8px.

## Elevation & Depth

Depth matters on this page because screenshots and panels float over navy. The most frequent shadow is `rgba(0, 0, 0, 0.14) 0px 15px 15px 0px` (8 elements, the app-preview cards). Small controls use `rgba(0, 0, 0, 0.1) 0px 1px 2px 0px`. The outlined badge uses `rgba(0, 0, 0, 0.06) 2px 4px 16px 0px`. Individual panels use `rgba(0, 0, 0, 0.35) 2px 4px 20px 0px`, `rgba(0, 0, 0, 0.04) 3px 4px 24px 0px` and a two-layer `rgba(0, 0, 0, 0.06) 0px 1px 6px 0px, rgba(0, 0, 0, 0.16) 0px 2px 32px 0px`. Translucent fills (#ffffffbf, #ffffff66, #ffffff0d, #f2f3fd4d) create a glass layer over the navy. Bubble's brand color page notes that "Gradients give our digital product depth and convey motion."

## Shapes

- **100px** — every CTA pill (45 elements); 1000px pills (14) for other rounded controls.
- **4px** — template chips and app-preview cards (31 elements).
- **8px**, **12px**, **16px**, **20px**, **24px** — panels and media cards.
- **Asymmetric corners**: `20px 0px 20px 20px` on showcase cards (one square corner), `24px 24px 0 0` and `16px 16px 0 0` on top-rounded panels, `0 24px 24px 0` on right-rounded panels.
- **5px** — the "Built on Bubble" outlined badge; 6px on the "Log in" button.

## Components

- **Primary pill.** #0c29ab fill, white Manrope 16px/700 text, 100px radius, padding `0px 20px`, 48px tall. On hover the fill changes to #091e7c (measured).
- **Large pill.** Same color, 22px/700 text, padding `0px 32px`, 72px tall ("See more apps"). A 19px/60px variant ("Start building for free") and a 19px/56px variant ("Get started for free") were also measured.
- **Outlined badge.** "Built on Bubble": white fill, #1a1a1a 14px text, `1px solid #afc0d4` border (hover border rgb(132, 159, 189)), 5px radius, padding `6px 10px`, 28px tall, soft shadow.
- **AI prompt box.** A white panel with an Open Sans 14px/21px textarea (padding 12px, 70px tall), Web/Mobile toggles, and a row of template chips. Chips have a 4px radius; on hover their text turns #0c29ab and a #ebf3ff background appears.
- **Text button.** "Log in": #0c29ab text that turns #091e7c and underlines on hover, 6px radius.
- **Focus ring.** `2px solid` #61caff with 2px offset (measured).
- **App-preview card.** 4px or 8px radius, `1px solid #e6e6e6` or the 15px drop shadow.
- **Business-type tiles.** On cobalt: 25px weight-600 white titles with muted supporting text.

## Design System Architecture

Bubble publishes brand guidelines at https://bubble.io/brand, with sub-pages for logo, color, imagery, typography and terms, and a "Download full brand kit" button:

- https://bubble.io/brand/color defines a primary palette of three eight-step ramps: **Cobalt** (#F5FAFF, #EBF3FF, #D5E5FB, #AFCEF8, #1E6DF6, #0947D7, #091E7C, #051043), **Periwinkle** (#F2F3FD … #625DFE … #341A9E) and **Sky blue** (#F5FBFF … #61CAFF, #09A4F1 … #056494). The page describes the palette as "blue, a simple foundation designed for clarity". A saturated secondary palette (red, yellow, green, purple and orange ramps, e.g. #EF2F15, #FFB505, #2EA84A, #AE07DA, #FF9A1F) is "bringing a pop of color and reinforcing the breadth of possibility on Bubble."
- https://bubble.io/brand/typography specifies Manrope with the heading and body weight mapping described above.

The shipped site exposes the same ramps as CSS custom properties with a `--cc-` prefix and numeric steps: `--cc-cobalt-10`, `--cc-cobalt-50` (rgba(30,109,246,1)), `--cc-cobalt-90` (rgba(5, 16, 67, 1)), `--cc-periwinkle-50`, `--cc-sky-blue-70`, `--cc-livid-30`/`-40`, `--cc-gray-*`, `--cc-orange-*`, `--cc-purple-*`, `--cc-red-*`, `--cc-green-*`, plus `--cc-primary_contrast`. The page itself is built in Bubble, so the editor also emits generated variables (e.g. `--color_coIJl2_default: rgba(12, 41, 171, 1)` for the #0c29ab action color). The CTA color #0c29ab does not appear in the published ramps; it is measured on the live site.

## Do's and Don'ts

**Do**
- Use cobalt navy (#051043 family) as the stage and float white or translucent panels on it.
- Set headlines in Manrope Extrabold (800) with -1px tracking, and keep body copy at 400.
- Make actions #0c29ab pills with a 100px radius and white bold text. Darken to #091e7c on hover.
- Use #61caff for eyebrows (bold, 2px tracking, caps) and for the 2px focus ring.
- Show the real product: editor screenshots, app previews, phone mock-ups.
- Draw extra colors from the published Cobalt, Periwinkle and Sky blue ramps first. Use the secondary palette for small pops.

**Don't**
- Don't square off CTAs; every measured action is a pill.
- Don't use Open Sans outside form fields; Manrope is the brand font.
- Don't use the secondary reds or yellows as page grounds.
- Don't use flat grey shadows on navy; the measured shadows are soft, low-opacity black over glassy fills.

## Responsive Behavior

Measured at 390px:

- The headline drops from 51px/61.2px to **44px/52.8px**, still Manrope 800 with -1px tracking.
- The eyebrow drops from 16px to **14px** (weight 700, #61caff).
- The stat numerals drop from 40px to **35px**. "How Bubble works" measured 38px, and the Design/Data/Logic step titles measured 28px.
- The primary CTA "Start building for free" is 48px tall and 209px wide, with Manrope 14px/700 text, the #0c29ab fill and the 100px radius.
- Mobile content is inset 20px each side (content from 20px to 370px).
- Most frequent mobile text sizes by character count: 14px (4089), 16px, 17px, 18px and 28px.
- The navy band sequence is kept on mobile (#030b30 top band, #051043 hero, #0a134b stats).

Header links, the mobile menu and breakpoint values were not measured; the extractor recorded no visible header links or menu toggle at either width.

## Iteration Guide

1. Build the stage first: a white body with full-bleed bands in the measured navy sequence (#051043 and neighbours), plus a few white or #fbfbfe sections.
2. Load Manrope (open source). Set 51/61.2 at 800 with -1px for display, 40px/800 and 32/38.4 at 700 for sections, 16px for body.
3. Add the #0c29ab pill family at 48px, 56–60px and 72px heights, with the #091e7c hover.
4. Add glass: #ffffffbf and #ffffff66 panels, the 15px drop shadow on screenshots, 4–24px radii, and asymmetric corners on showcase cards.
5. Use #61caff for eyebrows and focus. Take any new tints from bubble.io/brand/color rather than inventing them.
6. Check new sections against the live page and the brand pages before adding tokens.
