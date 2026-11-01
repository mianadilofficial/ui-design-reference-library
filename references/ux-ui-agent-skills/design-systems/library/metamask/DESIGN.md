---
version: alpha
name: MetaMask
category: "Tech & AI"
description: "MetaMask home: black #0a0a0a pill CTA on a white page of saturated feature tiles (purple #190066, peach #ffa680, forest #013330, sky #cce7ff), MMPolyVariable 106.67px display, MMSansVariable and MMEuclidCircularB text, 28-89px radii, dark phone frame."
colors:
  canvas: "#ffffff"
  purple-deep: "#190066"
  ink: "#0a0a0a"
  primary: "#0a0a0a"
  on-primary: "#ffffff"
  peach: "#ffa680"
  forest: "#013330"
  ink-muted: "#393d46"
  ink-input: "#3d065f"
  mint: "#e5ffc3"
  hairline: "#e9edf6"
  sky: "#cce7ff"
  lilac: "#eac2ff"
  rust: "#661800"
  phone-frame: "#121416"
  phone-frame-border: "#343434"
typography:
  display:
    fontFamily: MMPolyVariable, "MMPolyVariable Fallback", "Arial Bold", Gadget, sans-serif
    fontSize: 106.667px
    fontWeight: 400
    lineHeight: 106.667px
  display-mobile:
    fontFamily: MMPolyVariable, "MMPolyVariable Fallback", "Arial Bold", Gadget, sans-serif
    fontSize: 39px
    fontWeight: 400
    lineHeight: 39px
  heading:
    fontFamily: MMSansVariable, "MMSansVariable Fallback", Arial, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 21.3333px
    fontWeight: 400
    lineHeight: 21.3333px
  subheading:
    fontFamily: MMEuclidCircularB, "MMEuclidCircularB Fallback", Arial, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 10.6667px
    fontWeight: 500
    lineHeight: 16px
  body:
    fontFamily: MMEuclidCircularB, "MMEuclidCircularB Fallback", Arial, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 10.6667px
    fontWeight: 400
    lineHeight: 16px
  button:
    fontFamily: MMEuclidCircularB, "MMEuclidCircularB Fallback", Arial, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 12.4444px
    fontWeight: 500
    lineHeight: 12.4444px
  nav:
    fontFamily: MMEuclidCircularB, "MMEuclidCircularB Fallback", Arial, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 21.3333px
    fontWeight: 400
    lineHeight: 32px
  input:
    fontFamily: MMEuclidCircularB, "MMEuclidCircularB Fallback", Arial, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 14.2222px
    fontWeight: 500
rounded:
  xs: 0.89px
  sm: 3.56px
  md: 7.11px
  lg: 8px
  xl: 8.89px
  2xl: 10.67px
  3xl: 13.33px
  4xl: 14.22px
  cta: 88.89px
  pill: 9999px
spacing:
  s1: 3.56px
  s2: 4px
  s3: 4.18px
  s4: 5.33px
  s5: 7.11px
  s6: 8px
  s7: 8.89px
  s8: 9.78px
  s9: 10.67px
  s10: 13.33px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    height: 37px
  feature-tile-title:
    backgroundColor: "{colors.forest}"
    textColor: "{colors.mint}"
    typography: "{typography.heading}"
  nav:
    textColor: "{colors.canvas}"
    transform: matrix(1, 0, 0, 1, 0, -0.888889)
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-input}"
    typography: "{typography.input}"
    padding: 29.3333px 39.1111px
    height: 59px
  card:
    backgroundColor: "{colors.phone-frame}"
    textColor: "{colors.mint}"
    borderColor: "{colors.phone-frame-border}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
---

# MetaMask

Measured from https://metamask.io/ (final URL identical; title "MetaMask Crypto Wallet. Buy and Sell Bitcoin, Ethereum, Solana"), 1280px desktop pass (page height 12,931px) and 390px mobile pass. The first extraction captured an Osano cookie banner and a scrim; it was re-measured with the consent scrim hidden (`consentOverlaysHidden: scrim ...`) and the cookie banner is not documented as brand UI.

## Overview

A bold, toy-like crypto wallet home. The top is a deep forest-green field (`#013330`) with a "GET METAMASK" black pill and a round hamburger button at the corners, the logo wordmark top-left, and a grid of rounded feature tiles in distinct hues: a purple tile (`#190066`-family) "Trade on the future with prediction markets", a peach tile (`#ffa680`) "Buy tokenized stocks, funds, and commodities", a light-blue tile "Hundreds of ... network", a green headline "Long or short perps with up to 50x leverage", and in the middle a dark phone mockup showing "Account 1" with "$27,438.60" and Buy / Swap / Send / Receive buttons. The orange fox-head mascot's ears rise from the bottom of the hero. 3D illustrated objects (a green piston, a bitcoin coin with a soccer ball and gavel) sit inside the tiles. The H1 is "Where your money lives" at 106.667px white. The rest of the page is white with a footer listing Trade, Swap, Predict, Perps and RWAs with "NEW" badges.

Measured background areas: `#190066` (3,246), `#ffa680` (3,241), `#013330` (2,352), `#cce7ff` (1,499), `#ffffff` (1,431), `#cee9fd` (1,012), `#000000` (1,012), `#eac2ff` (590), `#121416` (433), `#e5ffc3` (316).

## Colors

- **Canvas `#ffffff`**; ink `#0a0a0a` (873 characters); muted `#393d46` (485).
- **Primary `#0a0a0a`** with white text: the "GET METAMASK" pill.
- **Feature-tile hues:** purple deep `#190066`, peach `#ffa680`, forest `#013330`, sky `#cce7ff` (with `#cee9fd`), lilac `#eac2ff`, mint `#e5ffc3` (142 characters of headline text on dark), rust `#661800` (83 characters, text on peach), input text `#3d065f` (200).
- **Phone frame:** fill `#121416`, 7px border `#343434`.
- **Hairline `#e9edf6`**.
Each tile pairs a pale or saturated fill with a deep contrasting text color from the same family (forest tile with mint text, purple tile with lilac text, peach tile with rust text).

## Typography

Three families: **MMPolyVariable** (display, 63 characters; fallback `"MMPolyVariable Fallback", "Arial Bold", Gadget, sans-serif`), **MMSansVariable** (tile headings and footer, 818 characters) and **MMEuclidCircularB** (UI and body, 1,929 characters). All three are web fonts served by the site; they are proprietary names. Substitutes: Euclid Circular B is a licensed font; Poppins or Inter approximate it.

Scale: display 106.667px/106.667px weight 400 (39px on mobile, solid 1.0 leading), tile heading 21.3333px/21.3333px weight 400 in MMSansVariable, a 42.6667px size (14 characters), nav 21.3333px/32px, link 16px/20px, button 12.4444px weight 500, input 14.2222px weight 500, body and subheading 10.6667px/16px. Sizes are fractional because the page scales type with the viewport. Weights: 400 (1,835 characters), 500 (897), 600 (44), 700 (34).

## Layout

The header height is a CSS variable (`--header-height`). Measured paddings: 21.3333px (23), 14.2222px (19), 14.7344px, 8.88889px, 7.11111px, 17.7778px; gaps 8.88889px (118 uses), 7.11111px (40), 14.2222px (27), 10.6667px. The tile grid is three columns with a center phone column; gutters are tight (gaps of about 9px) so tiles read as one mosaic. The footer measures 954px tall on white with MMSansVariable 14.2222px weight 500 links.

## Elevation & Depth

Depth is done with color blocks and 3D renders, not shadows. Measured shadows: `rgb(255, 255, 255) 0px 0px 0px 3.55556px` (a white ring) and `rgb(128, 128, 128) 0px 0px 5px 0px`. The phone mockup uses a 7px dark border instead of a shadow. The CTA carries a `radial-gradient(rgb(255,255,255), rgb(0,0,0))` mask (a hover-reveal effect; the hover state itself was not measured).

## Shapes

Radii measured: `3.55556px` (15), `88.8889px` (14, pills), `35.5556px` (14, inputs and large pills), `10.6667px` (7), `8.88889px` (6), `28.4444px` (4, tiles and phone), `14.2222px` (4). Tokens range from 0.89px to 14.22px with `cta: 88.89px` and `pill`. Feature tiles and the phone frame are generously rounded (28.4444px); buttons are full pills (88.8889px); the email input uses 35.5556px.

## Components

- **Primary button:** `#0a0a0a` fill, white MMEuclidCircularB 12.4444px weight 500 label "GET METAMASK" (the label is duplicated in the DOM for a text-swap effect), height 37px, radius 88.8889px.
- **Hamburger:** black circle with two white bars.
- **Feature tile:** large rounded rectangle in one of the palette hues with a 21.3333px heading in the paired text color and a 3D illustration.
- **Phone mockup:** `#121416` fill, 7px `#343434` border, 28.4444px radius, 318px wide by 674px tall.
- **Text input:** white fill, `#3d065f` text, 14.2222px weight 500, padding `29.3333px 39.1111px`, height 59px, radius 35.5556px (newsletter/contact form).
- **Footer:** white, `#0a0a0a` text, link columns with "NEW" tags.
- **Announcement strip:** small "UPDATE — Win a share of $20K." line at 10.6667px weight 500 with a close icon.

## Content and Voice

Copy read from the home page HTML is short, imperative and money-forward. Section titles: "Trade anything", "Save, send, spend, earn, all in MetaMask", "Maximum Security", "New to crypto?". Tile lines: "Long or short perps with up to 50x leverage", "Swap thousands of tokens on every popular network", "Trade on the future with prediction markets", "Buy tokenized stocks, funds, and commodities", "Earn up to 4% with the Money Account", "Send and receive money globally, instantly", "Spend anywhere with MetaMask Card, get up to 3% back", "One account that connects to everything". Proof points are numeric and concrete: "Securing billions of assets for over 10 years", "24/7 customer support in 134 languages", "Transaction protection available up to $10k", "Rated the #1 most secure wallet by Coinspect", "Billions of transactions since 2016". Footnote markers (¹, ²) qualify rates and card legal copy. The beginner prompt reads "You're in the right place. Explore guides that cover everything from setting up your wallet to making your first trade." The developer menu lists MetaMask Connect, Smart Accounts Kit, Embedded Wallets and Web3 Services.

## Design System Architecture

The home page links to the MetaMask GitHub organization (https://github.com/MetaMask). MetaMask's product design tokens live in `@metamask/design-tokens`, whose README (https://raw.githubusercontent.com/MetaMask/design-tokens/main/README.md) states the package has been migrated to the `metamask-design-system` monorepo and that the repository is archived; its consumers are named as metamask-mobile, metamask-extension and metamask-portfolio, and its docs are a Storybook. That is the wallet product's system; no token value from it was used here because the marketing site's values were measured directly. The marketing site itself ships fluid, viewport-scaled sizes, three custom font families and an Osano consent widget (`--osano-*` variables), plus a `leva` debug-panel variable set (`--leva-*`) that is not brand styling.

## Do's and Don'ts

- Do use one saturated hue per tile and pair it with a deep or pale text color from the same family.
- Do keep the CTA a black pill with white 12.4444px weight 500 text.
- Do round large tiles to about 28px and buttons fully.
- Do use 3D illustrated objects as the imagery; the fox mascot anchors the hero.
- Don't use drop shadows; use color fields and 7px frames.
- Don't use the cookie banner's blue as a brand color.
- Don't use Osano or leva variables as brand tokens.

## Responsive Behavior

Measured at 390px: display 39px/39px weight 400 (desktop 106.667px), and the "GET METAMASK" button 14px/14px weight 500 on `#0a0a0a`. Column counts, tile stacking and menu behavior at mobile width were not measured.

## Iteration Guide

1. White page, black pill CTA, hero on `#013330`.
2. Tiles: `#190066` / `#ffa680` / `#cce7ff` / `#013330` fills with paired text colors; radius 28.4444px.
3. Display in a poly variable face at 106.667px solid leading; UI in a circular geometric sans.
4. No shadows; add a 7px dark frame around the phone.
5. Run `node web/scripts/verify-designs.mjs --slug=metamask`.
