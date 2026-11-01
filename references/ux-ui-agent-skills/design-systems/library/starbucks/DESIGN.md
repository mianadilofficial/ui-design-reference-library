---
version: alpha
name: Starbucks
category: "E-commerce & Retail"
description: "Starbucks' homepage alternates full-width #006242 green promo bands with warm food and drink photography on a white canvas, set in SoDoSans (24px/600 headlines, 16px body) with fully rounded 50px pill buttons: a black 33px 'Join now', an outlined 'Sign in', and white-outlined pills on green that brighten to #00754a on hover."
colors:
  canvas: "#ffffff"
  page-largest: "#006242"
  ink: "#000000de"
  ink-muted: "#00000094"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-bar: "#32462f"
  primary-hover: "#000000b3"
  green-accent: "#00754a"
  house-green: "#1e3932"
  green-light: "#d4e9e2"
  gold: "#cba258"
  ceramic: "#edebe9"
  neutral-warm: "#f2f0eb"
  red: "#c82014"
typography:
  display:
    fontFamily: SoDoSans, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 24px
    fontWeight: 600
    lineHeight: 36px
    letterSpacing: "-0.16px"
  display-mobile:
    fontFamily: SoDoSans, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 22px
    fontWeight: 600
    lineHeight: 33px
    letterSpacing: "-0.14px"
  heading:
    fontFamily: SoDoSans, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 19px
    fontWeight: 600
    lineHeight: 33.25px
    letterSpacing: "-0.16px"
  button:
    fontFamily: SoDoSans, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 16.8px
    letterSpacing: "-0.16px"
  body:
    fontFamily: SoDoSans, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-0.16px"
  link:
    fontFamily: SoDoSans, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 19px
    fontWeight: 300
    lineHeight: 33.25px
    letterSpacing: "-0.16px"
rounded:
  pill: 50px
spacing:
  s1: 2px
  s2: 7px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 24px
  s7: 32px
  s8: 40px
  s9: 48px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 7px 16px
    height: 33px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 7px 16px
    height: 33px
    borderColor: "{colors.ink}"
  button-on-green:
    backgroundColor: "{colors.surface-bar}"
    textColor: "{colors.on-primary}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
    padding: 2px 12px
    height: 41px
    borderColor: "{colors.on-primary}"
  button-on-green-hover:
    backgroundColor: "{colors.green-accent}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  footer:
    textColor: "{colors.ink}"
    padding: 24px 0px
    boxShadow: rgba(0, 0, 0, 0.1) 0px -1px 3px 0px, rgba(0, 0, 0, 0.06) 0px -2px 2px 0px, rgba(0, 0, 0, 0.07) 0px 0px 2px 0px
---

## Overview

The captured starbucks.com homepage is a seasonal storefront. A white header carries the green Siren logo, the uppercase links MENU, REWARDS and GIFT CARDS, a "Find a café" locator, a bordered "Sign in" pill and a black "Join now" pill. Under it, a dark olive bar (`{colors.surface-bar}`) reads "It's a great day for coffee" with an outlined "Start an order" pill. Then four 50/50 bands alternate photograph and message: a tall iced espresso drink ("The Aerocano has arrived"), a tray of mini pies ("Fall classics made mini"), three autumn drinks on a table ("Fall is here. Cue the hits."), and a hand holding a white cup ("Free refills and fall vibes"). Each message half is a flat `{colors.page-largest}` green with centered white copy and one outlined "Order now" pill. A footnote and a five-column footer (About Us, Careers, Social Impact, For Business Partners, Ways to Shop) close the page.

The art direction is warm and close-up: soft daylight, wood, amber and cream tones, hands holding cups. White gutters separate the bands, so the page feels like a magazine spread rather than a continuous scroll. Copy is short, friendly and seasonal, and always ends in a single call to action.

**Key Characteristics:**
- Flat green message panels against food photography, laid out as alternating left-right halves.
- White canvas and generous white gaps between bands.
- A single humanist sans, SoDoSans, at 600 for headlines and 400 for body, with slight negative tracking (-0.16px).
- Fully rounded pill buttons: solid black on white, outlined white on green.
- Black text is always opacity-based (87% or 58%), never solid grey.
- Hover on the green-band pill lightens to a brighter green (#00754a).

## Colors

Measured on the live page, with named variables from its CSS.

- **Canvas** `{colors.canvas}` #ffffff. **Green band** `{colors.page-largest}` #006242 is the largest painted area (1,911 weight; the page's variable `--colorGreenStarbucks` is #006241). **Bar** `{colors.surface-bar}` #32462f is the olive promo strip.
- **Ink** `{colors.ink}` #000000de (black at 87%, `--colorTextBlack`) is the text color of navigation and the secondary button; `{colors.ink-muted}` #00000094 (about 58%, `--colorTextBlackSoft` .58) is the most-read text on white (footer links, footnotes). White text on green is the most-read color overall.
- **Primary** `{colors.primary}` #000000 is the fill of "Join now" (the detected primary CTA), with `{colors.on-primary}` white text; hover drops to `{colors.primary-hover}` black at 70%.
- **Brighter green** `{colors.green-accent}` #00754a (`--colorGreenAccent`) is what the "Start an order" pill becomes on hover (measured).
- **Brand palette in CSS** (declared, mostly not visible in the capture): `{colors.house-green}` #1e3932 (`--colorHouseGreen`), `--colorGreenUplift` #2b5148, `{colors.green-light}` #d4e9e2, `{colors.gold}` #cba258 and `--colorGoldLight` #dfc49d, `{colors.ceramic}` #edebe9, `{colors.neutral-warm}` #f2f0eb, `--colorNeutralCool` #f9f9f9, `{colors.red}` #c82014 and `--colorYellow` #fbbc05.

Official guidance could not be read: the Starbucks creative-expression site returned a certificate error when fetched, and no other brand-guideline page was reachable, so no color-naming or usage rule is cited beyond the page's own CSS.

## Typography

**SoDoSans** is loaded at 400, 600 and 700 (a fallback face named SodoSans_Normal is also declared), with Helvetica Neue, Helvetica and Arial as fallbacks. The CSS also names `--rewardsFont` ("Lander Tall", Iowan Old Style, Georgia, serif) and `--careersCupFont` ("Kalam"); neither appears in the main capture.

| Role | Size / line | Weight | Tracking |
|---|---|---|---|
| Display (band headline) | 24px / 36px | 600 | -0.16px |
| Display, mobile | 22px / 33px | 600 | -0.14px |
| Heading ("It's a great day for coffee") | 19px / 33.25px | 600 | -0.16px |
| Body and nav links | 16px / 24px | 400 | -0.16px |
| Band copy / large link | 19px / 33.25px | 300 | -0.16px |
| Button | 14px / 16.8px | 600 | -0.16px |

Sizes measured by character count: 16px (710), 19px (574), 14px (306), 24px (101). The CSS uses a rem scale with a 10px root: `--textSize1` 1.3rem through `--textSize10` 5.0rem (for example textSize3 1.6rem = 16px, textSize4 1.9rem = 19px, textSize7 2.4rem = 24px), `--buttonLineHeight` 1.2 and `--letterSpacingNormal` -0.01em. Headlines in the capture are modest: the top of the hierarchy is 24px, so emphasis comes from color blocking and photography.

### Font substitutes
SoDoSans is a proprietary face and its provenance was not confirmed from any opened page. Use a friendly humanist or geometric sans such as Nunito Sans or DM Sans at the same weights, keeping the -0.16px tracking.

## Layout

The page uses 1:1 split bands, each about 280px tall in the 960px-wide capture, with white 24px gaps between them. Copy blocks are centered within their half, roughly 330 to 400px wide. The footer is five equal columns. CSS variables define the grid: outer gutters of 1.6rem (16px), 2.4rem (24px) and 4.0rem (40px) by breakpoint, column widths of 343px (small), 500px (medium), 720px (large) and 1440px (XL), and navigation heights of 64px (extra small), 72px (mobile), 83px (tablet) and 99px (desktop), plus a 48px/53px subnav.

The spacing ladder in the CSS is `--space-1` .4rem (4px), space-2 .8rem, space-3 1.6rem, space-4 2.4rem, space-5 3.2rem, space-6 4rem, space-7 4.8rem, space-8 5.6rem and space-9 6.4rem. Measured spacing in elements: 2, 7, 8, 12, 16, 24, 32, 40 and 48px.

## Elevation & Depth

The page is nearly flat. The only measured shadows are the header and footer edge stacks: `rgba(0,0,0,0.1) 0 1px 3px, rgba(0,0,0,0.06) 0 2px 2px, rgba(0,0,0,0.07) 0 0 2px` (and its inverse above the footer). The CSS defines more for components not seen here: `--cardBoxShadow` (0 0 .5px rgba(0,0,0,.14) plus 0 1px 1px rgba(0,0,0,.24)), `--boxShadowPrimary` 0 8px 4px rgba(0,0,0,.12), and frappuccino-button shadows (`--frapShadow*`). Depth in the capture comes from color blocks and photography, not shadow.

## Shapes

One measured radius: 50px (`--buttonBorderRadius`), which makes every button a pill. The CSS also declares `--cardBorderRadius` 12px for cards, but no card was measured on this page, so it is not in the token set. Photography is full-bleed and unrounded, edges meeting the green panels directly. Buttons use a 1px border (`--buttonBorderWidth`), and the active state scales to 0.95 (`--buttonActiveScale`) with a 0.2s ease transition.

## Components

**Black pill.** `button-primary` "Join now": #000000 fill, white 14px/600, 7px 16px padding, 33px tall, 50px radius, 1px black border; hover fills black at 70%.

**Outline pill.** `button-secondary` "Sign in": transparent fill, 1px border and text in `{colors.ink}` (#000000de), same size.

**Pill on green.** `button-on-green`: the olive bar's "Start an order" is 41px tall, white text and a white border on `{colors.surface-bar}`; on hover the fill becomes `{colors.green-accent}`. The "Order now" pills in the green bands share the white-outline treatment in the capture (they were not measured separately).

**Header.** White, with the Siren logo at the left, uppercase wide-tracked links, a location pin with "Find a café", then the two pills. Navigation text is 16px at 400 in `{colors.ink}`.

**Promo band.** 50/50 split; green half holds a centered 24px/600 white headline, a 19px white paragraph and one pill.

**Footer.** Five link columns in 16px `{colors.ink-muted}` text, column headings in 19px, with a top-edge shadow.

## Design System Architecture

No public Starbucks design-system or brand-guideline page was reachable. The Starbucks creative-expression site (creative.starbucks.com) failed with an expired TLS certificate and was not bypassed; the about.starbucks.com press page returned 403 and a brand-assets path on starbucks.com returned 404. Web search was not available for this entry.

The shipped CSS reveals the de-facto system through about 190 root variables: color names (`--colorGreenStarbucks`, `--colorGreenAccent`, `--colorHouseGreen`, `--colorGreenUplift`, `--colorGreenLight`, `--colorGold*`, `--colorCeramic`, `--colorNeutralWarm`, `--colorNeutralCool`, `--colorBlack10` to `--colorBlack90`, `--colorWhite10` to `--colorWhite90`), HSL twins of most colors for alpha mixing, `--textSize1` to `--textSize10`, `--space-1` to `--space-9`, button tokens (`--buttonHeight` = space-5 = 32px, `--buttonPadding` 7px 16px, `--buttonBorderRadius` 50px, `--buttonSpacing`), form tokens (`--fieldPadding` 12px, floating-label sizes, valid and invalid tint backgrounds) and feature-specific names (`--frap*`, `--rewards*`, `--careers*`).

## Do's and Don'ts

**Do**
- Alternate photo and flat `{colors.page-largest}` green halves, with white gaps.
- Use 50px pill buttons: solid black on white, white outline on green.
- Set headlines in SoDoSans 600 with -0.16px tracking and keep body at 400.
- Use alpha black (87% and 58%) for text on white.
- Keep copy brief, seasonal and focused on one action.

**Don't**
- Don't use rectangular or lightly rounded buttons.
- Don't use grey hex values for text; use the alpha black tokens.
- Don't add heavy shadows or gradients to bands.
- Don't mix `{colors.house-green}` or gold into primary actions; they are declared in CSS but the capture's actions are black and white.
- Don't crop food photography to circles or rounded boxes.

## Responsive Behavior

On mobile (390px) the display headline measures 22px (from 24px), with 33px line height. The CSS declares navigation heights of 72px at mobile and 64px at extra-small, 83px at tablet and 99px at desktop, and outer gutters that grow from 16px to 24px and 40px. How the split bands behave at narrow widths was not captured, so it is not asserted. Pills stay the same height (33px), so tap targets are modest.

## Iteration Guide

1. White canvas; add a header with two pills (outline and black).
2. Add a 50/50 band: photo on one side, `{colors.page-largest}` green on the other with a 24px/600 white headline.
3. Add one white-outlined pill per band; use `{colors.green-accent}` as the hover fill.
4. Set body at 16px/24px and text in `{colors.ink}` or `{colors.ink-muted}`.
5. Add a five-column footer with 19px headings.
6. Run `node web/scripts/verify-designs.mjs --slug=starbucks`.
