---
version: alpha
name: Kit
category: "Product & SaaS"
description: "Kit (formerly ConvertKit) email-marketing site: custom KitSansFont headlines at 80px/500 over Libre Franklin 16px body, soft black #1e1e1e ink on white and warm-white #f2efe9 bands, Kit bright blue #44b1ff pill-free buttons with 14px corners, 16px dark creator cards and a #1e1e1e footer."
colors:
  canvas: "#ffffff"
  ink: "#1e1e1e"
  primary: "#44b1ff"
  on-primary: "#1e1e1e"
  surface-warm: "#f2efe9"
  surface-peach: "#ffe7d6"
  surface-card-dark: "#000000"
  ink-on-dark-muted: "#ffffffbf"
  accent-purple: "#e4acff"
  accent-purple-hover: "#e7c9f1"
  accent-green: "#65dc8d"
  accent-orange: "#ff7647"
  hairline: "#eae5dc"
  primary-hover: "#a2d1f1"
typography:
  display:
    fontFamily: KitSansFont, "KitSansFont Fallback"
    fontSize: 80px
    fontWeight: 500
    lineHeight: 76px
  display-mobile:
    fontFamily: KitSansFont, "KitSansFont Fallback"
    fontSize: 48px
    fontWeight: 500
    lineHeight: 48px
  heading:
    fontFamily: KitSansFont, "KitSansFont Fallback"
    fontSize: 40px
    fontWeight: 500
    lineHeight: 50px
  body:
    fontFamily: "\"Libre Franklin\", \"Libre Franklin Fallback\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-0.16px"
  button:
    fontFamily: "\"Libre Franklin\", \"Libre Franklin Fallback\""
    fontSize: 20px
    fontWeight: 600
    lineHeight: 20px
    letterSpacing: "-0.14px"
  button-small:
    fontFamily: "\"Libre Franklin\", \"Libre Franklin Fallback\""
    fontSize: 14px
    fontWeight: 600
    lineHeight: 24.003px
    letterSpacing: "-0.14px"
  card-title:
    fontFamily: "\"Libre Franklin\", \"Libre Franklin Fallback\""
    fontSize: 24px
    fontWeight: 700
    lineHeight: 30px
    letterSpacing: "-0.16px"
rounded:
  xs: 8px
  sm: 10px
  md: 12px
  lg: 14px
  xl: 15.2px
  2xl: 16px
  3xl: 20.27px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 12px
  s6: 14px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 28px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 20px
    height: 60px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-primary-small:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button-small}"
    rounded: "{rounded.xs}"
    padding: 4px 8px
    height: 32px
  button-outline-on-dark:
    textColor: "{colors.surface-warm}"
    typography: "{typography.button-small}"
    rounded: "{rounded.xs}"
    border: "1px solid #f2efe9"
    padding: 4px 8px
    height: 34px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.surface-warm}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  card:
    backgroundColor: "{colors.surface-card-dark}"
    textColor: "{colors.canvas}"
    typography: "{typography.card-title}"
    rounded: "{rounded.2xl}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
---

## Overview

Kit is the email marketing platform that was called ConvertKit until its rebrand; the footer of the measured home page (https://kit.com/) still carries the line "Formerly ConvertKit". The page sells to "creator business owners" — authors, newsletter writers, YouTubers, podcasters, coaches — and the whole design is built around that audience: big portrait photography of real creators, product screenshots shown as floating cards, and a calm, warm palette that keeps the one saturated colour, Kit bright blue #44b1ff, for actions.

The page opens on a dark, photographic hero band with a centered KitSansFont headline at 80px ("Turn your audience insights into revenue"), a one-line subhead and a single blue "Start free trial" button. A large blue product panel with a play button sits under it, followed by a carousel of creator portraits. The middle of the page alternates white #ffffff, warm-white #f2efe9 and peach #ffe7d6 bands, each led by a small icon-and-label eyebrow ("Automation", "Subscriber Signals", "Kit App Store", "Growth") and a two-line left-aligned headline paired with a short blurb and a button pair on the right. The page closes with a dark migration banner, an FAQ grid of collapsible rows and a soft black #1e1e1e footer.

A purple #e4acff promotion bar ("25% OFF PRO ANNUAL … Claim your offer") sits above the navigation in the capture. It is part of the site's own chrome, not a third-party popup, so its purple is recorded as an accent; it is a seasonal promotion and should not be treated as the main brand colour.

## Colors

The palette is small and warm. Kit's own brand assets page (https://kit.com/brand) publishes one official colour: **Kit bright blue #44B1FF** (RGB 68/177/255, CMYK 59/11/0/0, PMS 299 C). That is exactly the measured fill of the primary CTA, so `primary` is both measured and documented.

- **canvas #ffffff** — the body background and the most common section fill.
- **ink #1e1e1e** — "soft black" (`--color-soft-black` in the shipped CSS). It is the most-read text colour on the page and also the footer background. Kit never uses pure black for type.
- **primary #44b1ff** with **on-primary #1e1e1e** — the button fill carries dark text, not white. This is the single most distinctive choice in the system: a bright, light blue with soft-black label.
- **primary-hover #a2d1f1** — measured on hover of the primary CTA; it equals `--color-blue-200` in the stylesheet. Hover lightens the button instead of darkening it.
- **surface-warm #f2efe9** — `--color-warm-white`, used for whole bands and for the nav text and outline button on the dark hero.
- **surface-peach #ffe7d6** — `--color-orange-100`, used for the "Kit App Store" band.
- **surface-card-dark #000000** — the fill behind the creator-category photo cards (Authors, Bloggers, Podcasters…).
- **ink-on-dark-muted #ffffffbf** — white at 75% alpha for secondary copy on photo cards and dark bands.
- **hairline #eae5dc** — `--color-warm-white-300`, the most common border colour.
- **accent-purple #e4acff** (`--color-purple-500`) and its hover **#e7c9f1** — the promotion bar button and the "Start free trial" button in the purple Automation band.
- **accent-green #65dc8d** (`--color-green-500`) and **accent-orange #ff7647** — measured background fills used for section-specific buttons (the green "Start free trial" in the Growth band and the orange one in the App Store band). Each feature band borrows one accent for its own CTA.

The stylesheet exposes a full Tailwind-style scale per hue (`--color-blue-50` #f0f9ff up to `--color-blue-1000` #020a0f, plus purple, orange, green, yellow, gray and warm-white ramps), but the page itself uses only the handful listed above.

## Typography

Two families, both named on the brand page: **Kit Sans**, "a custom font used for headlines", and **Libre Franklin** for body text. In the browser the custom face loads as `KitSansFont` with a `KitSansFont Fallback` metric-matched fallback; Libre Franklin loads in weights 400, 500, 600 and 700.

- **display** — KitSansFont 80px / 500 / 76px line height. The line height is tighter than the size, so two-line headlines sit as a compact block.
- **display-mobile** — the same h1 measured at a 390px viewport: 48px / 500 / 48px.
- **heading** — KitSansFont 40px / 500 / 50px for h2 (the "trusted by 550,000+ creator business owners" line). The font-size frequencies also record a 56px size used for the band headlines.
- **body** — Libre Franklin 16px / 400 / 24px with a −0.16px letter-spacing. Kit applies −0.16px across 12px, 14px, 16px, 18px and 24px text, so a slight negative tracking is part of the voice.
- **button** — Libre Franklin 20px / 600 / 20px, −0.14px for the large hero CTA; **button-small** is 14px / 600 for nav and in-band buttons.
- **card-title** — Libre Franklin 24px / 700 / 30px for the creator-category card titles.

Libre Franklin is a free Google Font. Kit Sans is proprietary with no public download; a substitute must be a condensed-leaning grotesque in a medium weight, set with tight line height. Name the substitution in your build so it is not mistaken for the real face.

## Layout

The desktop measurement is at 1280px wide with a page height of 12,296px. Content in the hero band spans from x=93 to x=1240. The rhythm is a sequence of full-width bands rather than a single canvas:

1. Promotion bar, then a transparent navigation over the dark hero (Features, Pricing, Use Cases, Resources with chevrons; Log in, Request a demo, Start free trial on the right).
2. Centered hero headline and CTA, then a wide rounded blue product panel.
3. A horizontal carousel of creator portraits with name and credentials under each.
4. Feature bands: eyebrow + left headline + right blurb and paired buttons, then a two-column (or three-card) product illustration row.
5. A 3×2 grid of creator-category photo cards.
6. A dark migration banner ("Switch without the stress. We'll move your list for you.") with outline and blue buttons.
7. A two-column FAQ accordion, then a multi-column link footer.

Measured gaps cluster at 16px (by far the most common), then 4px, 8px, 12px, 24px and 32px, with 48px, 64px and 80px between larger blocks. Paddings of 20px, 28px and 32px recur inside cards and buttons. The spacing scale in the frontmatter (1px–28px) lists the generated steps.

## Elevation & Depth

The extraction recorded **no box-shadows** on the home page. Depth comes from three other means: photography (the dark hero image, the portraits), colour contrast between bands (white against warm-white and peach, then black and soft black), and product screenshots presented as flat rounded cards that overlap one another inside the illustrations. Translucent white fills (#ffffff0f and #ffffff14) and a 75% black overlay (#000000bf) appear in the background measurements for layered panels on dark areas. Do not add drop shadows to recreate Kit; use band colour and image contrast.

## Shapes

Corners are soft but never fully round on main controls. The hero CTA uses **14px** (`rounded.lg`), the small nav and band buttons **8px** (`rounded.xs`), the photo cards and product panels **16px** (`rounded.2xl`), and 12px (`rounded.md`) is the second most common radius. Rarer values — 10px, 15.2px and 20.27px — come from scaled illustrations. The most common radius entry overall is a percentage value (22%), which belongs to the round-cornered app icons in the App Store logo row; `pill` (9999px) is kept for these fully round elements. The stylesheet's named radii run `--radius-xs` .125rem through `--radius-3xl` 1.5rem.

## Components

- **Primary button** — #44b1ff fill, #1e1e1e text, Libre Franklin 20px/600, 14px radius, 20px padding, 60px tall, no border, no shadow. Hover changes the fill to #a2d1f1.
- **Small primary button** — same colours at 14px/600, 8px radius, 4px 8px padding, 32px tall; used in the nav.
- **Outline button on dark** — transparent with a 1px solid #f2efe9 border and #f2efe9 text, 8px radius, 34px tall ("Request a demo").
- **Band CTAs** — each feature band pairs a filled button in that band's accent (blue, purple, green or orange) with a white outlined "Explore …" button.
- **Navigation** — 58px tall, warm-white text over the hero, dropdown chevrons on the first four items, the Kit wordmark (an SVG, 53×25) at left.
- **Creator card** — #000000 base under a full-bleed portrait, 16px radius, 24px/700 white title with a 75%-white one-line description at the bottom.
- **Feature card** — a product screenshot on a coloured tile, then a bold title, a short grey description and a "Learn more →" text link; arranged in a carousel with dot pagination and round arrow buttons.
- **FAQ row** — white row with question text and a chevron, in two columns.
- **Footer** — #1e1e1e with white text, the wordmark plus "Formerly ConvertKit", a blue CTA, and link columns (Get started, Use cases, Product, Features, Resources, Company).

## Design System Architecture

Kit does not publish a public design system or component library. What it does publish is a brand assets page, https://kit.com/brand, which gives the logo files (soft black, warm white, soft black on blue), the bright blue #44B1FF with RGB/CMYK/PMS values, and the two typefaces (Kit Sans for headlines, Libre Franklin for body). It links to a brand identity article at https://kit.com/resources/blog/kit-brand-identity.

The de-facto system is visible in the shipped CSS: Tailwind-style custom properties (`--tw-*` utilities, `--text-*` sizes such as `--text-10` 2.5rem and `--text-20` 5rem, `--radius-*`, `--ease-in`) plus Kit-named colour ramps — `--color-soft-black`, `--color-warm-white`, `--color-warm-white-100`/`-300`, `--color-blue-50`…`-1000`, and purple, orange, green and yellow scales. Build from those names: the brand colours are the 500 steps (blue-500 #44b1ff, purple-500 #e4acff, green-500 #65dc8d) and the soft black / warm white pair.

## Do's and Don'ts

**Do**
- Use #44b1ff with #1e1e1e text for the main action; lighten to #a2d1f1 on hover.
- Set headlines in Kit Sans (or a declared substitute) at weight 500 with tight line height, and body in Libre Franklin with −0.16px tracking.
- Use soft black #1e1e1e for type and the footer instead of pure black.
- Alternate white, warm-white #f2efe9 and peach #ffe7d6 bands; give each band an eyebrow label and its own accent CTA.
- Show real creators in large photography and real product UI in rounded cards.

**Don't**
- Don't put white text on the blue button; the measured label is soft black.
- Don't add drop shadows — none were measured.
- Don't make primary buttons pill-shaped; they are 14px (large) or 8px (small).
- Don't treat the purple promotion bar as the brand colour; the official brand colour is the blue.
- Don't use the Swiper default #007aff found in the CSS variables; it is a library default, not Kit.

## Responsive Behavior

The extractor's mobile pass at 390px recorded: the h1 drops from 80px to **48px** with 48px line height, the h2 from 40px to **32px** with 40px line height, and body text stays at 16px/24px. Content runs from x=16 to x=374, a 16px side gutter. Only 2 header links remain visible and a menu toggle labelled "Toggle mobile menu" is shown (on desktop, 9 header links are visible). The primary CTA keeps its blue fill, 20px/600 label and 14px radius. How the feature bands and card grids reflow at intermediate widths was not measured.

## Iteration Guide

1. Start with canvas #ffffff, ink #1e1e1e and the band surfaces #f2efe9 and #ffe7d6.
2. Load Libre Franklin 400/600/700 and set body to 16px/24px with −0.16px tracking.
3. Set the h1 at 80px/500/76px (48px/48px at 390px) and h2 at 40px/50px in Kit Sans or a declared substitute.
4. Build the primary button exactly: #44b1ff, #1e1e1e text, 20px/600, 14px radius, 20px padding, 60px height, hover #a2d1f1.
5. Add the dark photographic hero with warm-white nav and an outline "Request a demo" button.
6. Compose feature bands with an eyebrow, left headline and right blurb with paired buttons; use 16px-radius cards and 16px gaps.
7. Finish with the #1e1e1e footer and check there are no shadows anywhere.
8. Compare against https://kit.com/ at 1280px and 390px.
