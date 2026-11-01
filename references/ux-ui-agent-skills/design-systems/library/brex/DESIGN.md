---
version: alpha
name: Brex
category: "Banking & Insurance"
description: "Brex home page (brex.com) measured 2026-10-09: Inter at weights 400 and 500 with about -2% tracking (72px/72px headline at -1.44px), white and cool-gray (#f3f3f7) bands with ink #15191e, a signature orange-red #ff3d00 for 10px-radius 36px buttons (hover #ff6a17), 12px-radius white cards, and a near-black #000710 footer."
colors:
  canvas: "#f3f3f7"
  page-body: "#ffffff"
  ink: "#15191e"
  primary: "#ff3d00"
  on-primary: "#fcfcfd"
  surface-footer: "#000710"
  ink-secondary: "#b9bbc6"
  ink-muted: "#60646c"
  ink-subtle: "#8b8d98"
  primary-hover: "#ff6a17"
typography:
  display:
    fontFamily: inter, "inter Fallback", sans-serif
    fontSize: 72px
    fontWeight: 500
    lineHeight: 72px
    letterSpacing: "-1.44px"
  display-mobile:
    fontFamily: inter, "inter Fallback", sans-serif
    fontSize: 36px
    fontWeight: 500
    lineHeight: 36px
    letterSpacing: "-0.72px"
  heading:
    fontFamily: inter, "inter Fallback", sans-serif
    fontSize: 20px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: "-0.4px"
  body:
    fontFamily: inter, "inter Fallback", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-0.32px"
  button:
    fontFamily: inter, "inter Fallback", sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22px
  nav:
    fontFamily: inter, "inter Fallback"
    fontSize: 16px
    fontWeight: 400
  link:
    fontFamily: inter, "inter Fallback", sans-serif
    fontSize: 24px
    fontWeight: 500
    lineHeight: 29px
    letterSpacing: "-0.48px"
  input:
    fontFamily: inter, "inter Fallback"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: "-0.35px"
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 10px
  xl: 12px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 28px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 0px 12px
    height: 36px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 8px 2px
    height: 36px
  card:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
    padding: 32px
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.on-primary}"
    padding: 160px 0px
---

## Overview

The measured page is `https://www.brex.com/` (title "Brex: The Modern Finance Software Platform | Spend Smarter", `lang` en-US), the home page of a corporate card and finance software company. The capture shows a clean, product-led fintech page. A white 60px header carries the Brex wordmark, three menus with chevrons (Products, Solutions, Resources), two plain links (Customers, Pricing) and, on the right, Sign in, See a demo and an orange "Get started" button. The hero sits on a very light warm-gray field that fades to a faint peach at the lower left. The headline "Finance built for speed and control." is set large and black, with the sub-line "Modern cards, banking, expenses, accounting, and more — in 120+ countries." beneath it, an email field ("Enter your work email") joined to an orange "Get started" button inside a white rounded box, and an orange text link with a play icon, "See Brex in action". A photograph of a black Brex card and a phone showing the app lies on a white pedestal at the right.

The next bands, in the capture: a light-gray band "Trusted by 35,000+ top companies." with a two-row grid of grayscale customer logos (TikTok, Trustpilot, ServiceTitan, SeatGeek, OpenAI, Plaid, dispatchhealth, Gong, DoorDash, Cursor, reddit, Anthropic); a white band "The card is just the start." with five product cards (Corporate cards, Expense management, Travel, Bill pay, Banking and treasury), each pairing a title, a short description and a product-UI illustration; and a gray band "Solutions for every stage of growth." with three portrait cards (Startups, Mid-size companies, Enterprises), each with orange "Learn more" arrows. The footer is near-black.

The voice is short, benefit-led and direct ("Spend smarter", "Get started", "See a demo"). The measurement saw 898 visible elements at 1,280px, with an 8,673px scroll height. Orange is rare: in the interface chrome it appears on action buttons and action links, so the eye lands on the next step.

## Colors

- **Canvas `#f3f3f7`** is the hero and alternate-band tint (area weight 2,075); **page body `#ffffff`** is the largest measured background (8,100) and the card and header fill.
- **Ink `#15191e`** is the primary text color (2,414 characters) and the body role color. **Muted ink `#60646c`** (2,152 characters) colors secondary descriptions; **subtle ink `#8b8d98`** (369) colors tertiary labels.
- **Primary orange-red `#ff3d00`** fills the "Get started" buttons (area weight 17), is their 1px border, and colors 224 characters of text (the orange link labels). **Primary hover `#ff6a17`** is the measured hover fill. Text on the button is `#fcfcfd` (`on-primary`).
- **Footer `#000710`** is the third-largest background area (2,659), with light text `#fcfcfd` and secondary footer text `#b9bbc6`, which is the most-read text color on the page (4,602 characters, all 12px).
- A faint blue-gray hairline `#42578a26` is the 1px border on the secondary "Get started" button and is measured twice as a border color; `#6f737b` appears in 16 characters.

The stylesheet also declares focus rings in blue (`inset 0 0 0 2px rgba(0,110,245,.80)`, 4 declarations, and `0 0 0 1px rgba(0,110,245,.80)`), which belong to keyboard focus, not to the brand palette. Hero and band tints are flat fills apart from the soft peach fade in the hero imagery; the footer and gray bands are flat.

## Typography

**Inter** (loaded as a single 400 to 700 variable face, `inter 400 700 normal`) carries 9,849 of 9,965 measured characters, with `flecha` at 400 for the other 116. The stylesheet also declares `bronzea`, `Space Mono` and InterVariable; the font variables in `:root` are `--font-inter`, `--font-flecha`, `--font-space-mono` and `--font-bronzea`. Inter is an open typeface, while no license or source page was opened for flecha or bronzea, so those two are treated as proprietary.

| Role | Size / line height | Weight / tracking |
| --- | --- | --- |
| Display (h1) | 72px / 72px | 500, -1.44px (36px / 36px, -0.72px at 390px) |
| Link / card title | 24px / 29px | 500, -0.48px |
| Heading (h2, h3) | 20px / 24px | 500, -0.4px |
| Body | 16px / 24px | 400, -0.32px |
| Button | 14px / 22px | 400 |
| Input | 14px / 20px | 400, -0.35px |

Measured sizes by characters: 12px (4,600), 16px (2,049), 14px (1,559), 24px (736), 20px (328), 36px (267), 48px (262), 10px (128) and 72px (36). Weights: 400 (7,921), 500 (2,011), 600 (33). Tracking is negative almost everywhere: 72px/-1.44px, 48px/-0.96px, 24px/-0.48px, 20px/-0.4px, 16px/-0.32px, 14px/-0.28px and 12px/-0.24px, all about -2% of the font size. 48px text measured 262 characters (239 of them at -0.96px tracking) and 36px text measured 267 characters at desktop. **Font substitutes:** Inter itself is the right fallback; apply the -2% tracking and keep weights at 400 and 500.

## Layout

The page is a stack of full-width bands that alternate white and `#f3f3f7`, each with a centered title and a centered content grid; the hero is left-aligned with the photograph bleeding off the right. The header is 60px high (the root variable `--brex-nav-height` is 60px, and `--brex-sticky-padding` is 24px). The five product cards run in a row; each measured 214px wide by 326px high. Three portrait cards sit in a three-column row beneath the "Solutions" title.

Measured paddings: 8px (42 times), 72px (24), 4px (16), 32px (13), 48px (12), 80px (7), and singles from 1px to 28px; the footer measured 160px top and bottom. Measured gaps: 8px (28 times), 24px (20), 4px (8), 20px and 16px (4 each), 48px (2) and 12px (1). The vertical rhythm uses large band padding (72px and 80px), while internal card spacing is 32px.

## Elevation & Depth

Elevation is nearly absent. Only two shadows were measured: a hairline `rgba(66, 87, 138, 0.15) 0px 1px 0px 0px` and `rgba(0, 0, 0, 0.04) 0px 1px 1px 0px`, each on a single element. The stylesheet declares slightly larger shadows (`0 5px 10px rgba(0,0,0,.1)`, `0px 4px 16px rgba(0,0,0,.12)`, `0px 0.5px 5px 1.5px rgba(0,0,0,0.12)`) that were not matched to a visible element. Depth otherwise comes from band color changes (white, `#f3f3f7`, `#000710`) and from product imagery with soft shadows inside the photographs. Cards in the capture are white on gray bands and rely on the tonal difference rather than visible borders.

## Shapes

Measured radii: 12px (18 elements; cards), 6px (12), 10px (9; the primary button), 50% (2), 8px (1; the secondary button) and 4px (1). Tokens: `xs` 4px, `sm` 6px, `md` 8px, `lg` 10px, `xl` 12px and `pill` 9999px. The stylesheet's most frequent radius is 12px (28 declarations), followed by 10px (12), 0px (10) and 8px (5).

So: buttons are 10px (8px in the header variant), cards and portrait images are 12px, and the hero email form is a white rounded box. Icons are thin outline glyphs (chevrons, an arrow, a play icon) and customer logos are grayscale marks.

## Components

**Primary button.** `#ff3d00` fill and 1px border, `#fcfcfd` text, Inter 14px/22px weight 400, 10px radius, padding `0 12px`, 36px high (148px wide for "Get started" in the hero form). Hover changes the fill and border to `rgb(255, 106, 23)` (`#ff6a17`); the text and radius stay the same.

**Secondary "Get started" button.** Orange fill, white 14px/20px text at weight 500 with -0.28px tracking, 8px radius, 1px `#42578a26` border, padding `0 16px`, 40px high and 106px wide. At the 390px pass the primary measured 106 by 40px with the same 8px radius and padding.

**Text input.** 14px/20px, -0.35px tracking, `#15191e` text, padding `8px 2px`, 36px high and 243px wide, inside a white rounded box with the button.

**Product card.** White fill, 12px radius, 32px padding, 24px/500 title in `#15191e`, 214 by 326px; a short description in `#60646c` and a product-UI illustration under it.

**Header.** White, 60px high, 14px/21px text with -0.28px tracking in `#15191e`.

**Link rows.** Orange text links with a trailing arrow ("Learn more", "See Brex in action").

**Footer.** Fill `#000710`, text `#fcfcfd` and `#b9bbc6`, 14px/500 headings, 160px vertical padding, 1,657px high.

## Design System Architecture

No public Brex design system exists. The press page https://www.brex.com/journal/press offers a press kit with logos, founder headshots, product images and a fact sheet, hosted on `brand.brex.com`; that portal (https://brand.brex.com/) shows only a sign-in screen (Brex SSO or username and password), so its guidelines were not readable. The page gives no colors or typefaces.

The shipped code shows the de-facto system. The site is a Next.js application (stylesheet at `/_next/static/css/`, fonts as `/_next/static/media/*.woff2`). The extraction recorded 400 root custom properties, 394 of them with generated names beginning `--_1k5xs26` that hold single values (for example `--_1k5xs2618: 24px`, `--_1k5xs263u: 400`, `--_1k5xs268u: 0.1em`). The readable ones are `--font-inter`, `--font-flecha`, `--font-space-mono`, `--font-bronzea`, `--brex-nav-height: 60px` and `--brex-sticky-padding: 24px`.

## Do's and Don'ts

**Do**
- Set everything in Inter at 400 or 500 with roughly -2% letter spacing, with 72px/72px for the hero headline.
- Use `#ff3d00` only for actions and action links, with `#ff6a17` on hover and `#fcfcfd` text.
- Alternate white and `#f3f3f7` bands, with white 12px-radius cards.
- Keep the footer `#000710` with `#b9bbc6` secondary text.
- Pair every product claim with an interface illustration.

**Don't**
- Don't use the blue focus-ring color `rgba(0,110,245,.80)` as a brand accent.
- Don't add heavy shadows; measured shadows are 1px hairlines.
- Don't give buttons pill radii; the measured button radius is 10px (8px in the header).
- Don't set body text in pure black; the measured ink is `#15191e` with `#60646c` for secondary copy.

## Responsive Behavior

One mobile pass was recorded at 390px. Measured values: the hero headline is 36px/36px weight 500 with -0.72px tracking and 342px wide (72px at desktop); body text stays 16px/24px at 342px wide; the primary button measured 106 by 40px with an 8px radius, 14px/20px weight 500 and `0 16px` padding; the header block measured 390px by 60px with a white background. Mobile font sizes by character: 12px (4,993), 16px (1,815), 14px (1,659), 24px (1,010), 30px (262), 10px (128) and 36px (36). How the menus, product cards and logo grid reflow was not measured.

## Iteration Guide

1. Set canvas `#f3f3f7`, white surfaces, ink `#15191e`, muted `#60646c`, primary `#ff3d00` (hover `#ff6a17`), footer `#000710`.
2. Use Inter with the measured size and tracking pairs, 72/20/16/14px.
3. Build the 60px header, then the hero with the joined email field and orange button.
4. Add alternating bands with large centered titles, 12px-radius cards and grayscale logos.
5. Check hover and mobile only against the measured values (`#ff6a17`; 36px headline, 106 by 40px button).
6. Measure any new component first with `node web/scripts/extract-tokens.mjs --slug=brex--<page> --url=<url> --force --no-motion`.
