---
version: alpha
name: Hersheyland
category: "Food & Beverage"
description: "hersheyland.com (Hersheyland, the Hershey Company's recipes, products and inspiration site, reached from hersheys.com): chocolate-brown #3f000b ink on #f6f6f6 and white, Gazpacho 900 headlines (48px hero) with TT Norms Pro body at 17px, #007bbd pill buttons with 35 to 50px radii, 8px-radius cards with navy #003594 bottom bars and plum #460e3d hero bands."
colors:
  canvas: "#ffffff"
  page-largest: "#f6f6f6"
  ink: "#3f000b"
  primary: "#007bbd"
  on-primary: "#ffffff"
  ink-default: "#363638"
  hairline: "#f5f5f5"
  primary-hover: "#268fc7"
  text-input-text: "#333333"
  surface-plum: "#460e3d"
  surface-purple: "#5a357b"
  accent-navy: "#003594"
  surface-lavender: "#ebebf0"
typography:
  display:
    fontFamily: Gazpacho, "TT Norms Pro", sans-serif
    fontSize: 48px
    fontWeight: 900
    lineHeight: 57.6px
  display-mobile:
    fontFamily: Gazpacho, "TT Norms Pro", sans-serif
    fontSize: 36px
    fontWeight: 900
    lineHeight: 43.2px
  subheading:
    fontFamily: Gazpacho, "TT Norms Pro", sans-serif
    fontSize: 28px
    fontWeight: 900
    lineHeight: 42px
  body:
    fontFamily: "\"TT Norms Pro\", sans-serif"
    fontSize: 17px
    fontWeight: 500
    lineHeight: 25.5px
  button:
    fontFamily: "\"TT Norms Pro\", sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 18px
  nav:
    fontFamily: "\"TT Norms Pro\", sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 36px
  input:
    fontFamily: "\"TT Norms Pro\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
rounded:
  xs: 8px
  sm: 10px
  md: 15px
  lg: 28px
  xl: 30px
  2xl: 35px
  3xl: 44px
  4xl: 50px
  pill: 9999px
spacing:
  s1: 5px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 15px
  s6: 18.5px
  s7: 20px
  s8: 21px
  s9: 25px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.4xl}"
    padding: 18.5px
    height: 55px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 17px 20px
    height: 62px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    height: 44px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
    boxShadow: rgb(128, 128, 128) -7px 0px 12px -16px, rgb(128, 128, 128) 0px 0px 10px -4px
---

## Overview

hersheys.com redirects to https://www.hersheyland.com/ (measured finalUrl), titled "Hersheyland | Explore Hershey Products, Recipes, Crafts & More". Hersheyland is the Hershey Company's consumer site for recipes, products and party ideas; its footer links to The Hershey Company, a Hershey Store, Hershey Careers and Hershey Foodservice. The desktop pass measured 660 visible elements on a 1280px-wide, 5956px-tall page.

The capture shows a seasonal hero band on deep plum (#460e3d) with the headline "Make It a Magical Halloween" in white Gazpacho, the supporting copy "Scary-good sweets, ghoulish gatherings, creepy crafts, we have the sweetest Halloween inspiration all in one place.", a blue pill "Let's Get Spooky", and a circular photo of Halloween candy, a pumpkin and a ghost, with product packs (Jolly Rancher, KitKat, Pirate's Booty) overlapping the circle. Beneath the hero comes a white navigation bar with a script-style "hersheyland" wordmark, five labels (Recipes, Inspiration, Our Brands, Products, About) with chevrons and a rounded search field ("Search tons of products, recipes and activity ideas"). The next band is light grey #f6f6f6 with a purple curved corner at upper left, the heading "Welcome to Hersheyland" in brown, and three white cards (Recipes, Products, Stories & Inspiration) with a photograph on top and a thick royal-blue bar on the bottom edge. Candy cut-outs (twists of licorice, a Hershey's bar) spill across the band edges. A section "Hershey's Newest Treats" follows on white. An accessibility toggle at the left edge is a third-party widget and is not documented as brand UI.

The voice is warm and playful ("Let's Get Spooky", "Welcome to Hersheyland") and the page is generous with food photography.

## Colors

- **Canvas {colors.canvas}** (#ffffff) and **page-largest {colors.page-largest}** (#f6f6f6, the largest background area, 4004): the two content grounds.
- **Ink {colors.ink}** (#3f000b): a very dark chocolate-brown used for headings and body (2923 characters) and as a large background (2990 area) in dark bands such as the footer.
- **Primary {colors.primary}** (#007bbd): the blue of all measured CTAs and nav-link text (274 characters). Hover: {colors.primary-hover} (#268fc7).
- **On primary {colors.on-primary}** (#ffffff).
- **Default text** {colors.ink-default} (#363638, 20 characters): the body element's colour.
- **Hairline {colors.hairline}** (#f5f5f5): the most common border colour; #cfcfcf appears once.
- **Plum {colors.surface-plum}** (#460e3d, 1068 area) and **purple {colors.surface-purple}** (#5a357b, 1106 area): the seasonal hero and decorative curve.
- **Navy {colors.accent-navy}** (#003594, 8 area): the bar along the bottom of each card.
- **Lavender {colors.surface-lavender}** (#ebebf0, 2 area) and form text #333333.

The theme's root variables list search-component (`--aa-*`) variables such as --aa-panel-shadow and --aa-icon-color-rgb 119,119,163; they belong to the search dropdown and were not measured on the home page, so they are not tokens.

## Typography

Three families by character count: **TT Norms Pro** (3028 characters), **Gazpacho** (721) and system-ui (20, the body element's default). Icon fonts Font Awesome 6 Pro and Brands are also loaded. Weights: 400 (1307), 700 (1172), 500 (1073), 900 (217).

- **Display** {typography.display}: Gazpacho 900, 48px/57.6px, white on the hero; mobile {typography.display-mobile} 36px/43.2px. The h2 "Welcome to Hersheyland" is Gazpacho 900 36px/46.8px in #3f000b.
- **Subheading** {typography.subheading}: Gazpacho 900 28px/42px (e.g. "Brownie Recipes").
- **Body** {typography.body}: TT Norms Pro 500, 17px/25.5px.
- **Button** {typography.button}: TT Norms Pro 700, 18px, line-height 18px; the secondary buttons use a 27px line-height.
- **Nav / link** {typography.nav}: TT Norms Pro 700 24px/36px (the card titles and footer-style links).
- **Input** {typography.input}: TT Norms Pro 400 16px.

The size ladder by characters: 15px (1395), 17px (587), 22px (516), 16px (328), 24px (180), 20px (176), 12px (164), 18px (152), 36px (126), 14px (66), 28px (52), 48px (27). No letter-spacing is recorded. Gazpacho and TT Norms Pro are commercial faces; a heavy soft serif for display with a rounded geometric sans for text is the nearest open pairing, as a suggestion.

## Layout

The page is a stack of bands: a plum hero with text left and a circular image right, a white nav bar, a grey card band with three equal cards inside a centred column, then white content sections with left-aligned headings. Measured paddings: 10px (31), 15px (24), 25px (17), 346.516px (17, the centred column offset), 20px (12), 8px (10), 12px (8), 21px (5). The body has 80px of top padding (the nav height). The only recorded gap is 30px (2). Theme search variables set the input height to 44px.

## Elevation & Depth

Cards use a very soft brown-tinted shadow rgba(39, 1, 7, 0.08) 0px 0px 12px 0px (24 elements); other recorded shadows are rgb(128, 128, 128) -7px 0px 12px -16px, rgb(128, 128, 128) 0px 0px 10px -4px (3), rgba(0, 0, 0, 0.24) 0px 1px 2px 0px (2) and rgba(1, 1, 1, 0.2) 0px 0px 8.1px 0.9px (2). Depth is subtle: cards float over grey with a diffuse glow, and candy cut-outs overlap band edges.

## Shapes

Radii: 8px (62 elements), 15px (21), 10px (21), "8px 8px 0px 0px" (6, card tops), 50% (5), 50px (4), 90px (2), 30px (2), 28px (1), 44px (1). The primary button measures 50px ({rounded.4xl}); the secondary "See All Recipe Collections" 35px ({rounded.2xl}); "Discover Creme Bars" 44px ({rounded.3xl}). Cards are 8px rounded at the top with a square navy bar at the bottom. The hero photo is a circle.

## Components

- **Primary button** ("Let's Get Spooky", "Discover Creme Bars"): {colors.primary} fill, white 18px bold label, 50px/44px radius, padding 18.5px, 55px tall; hover rgb(38, 143, 199) (#268fc7).
- **Secondary button** ("See All Recipe Collections"): same blue fill, 35px radius, padding 17px 20px, 62px tall, 27px line-height.
- **Nav**: white bar, 24px bold links in {colors.primary} for social links ("Visit Hersheyland on Instagram") and brown ({colors.ink}) for the main labels such as "Recipes".
- **Card** (Recipes / Products / Stories): white fill, {colors.ink} text, 8px top radius, the soft shadow above, navy bottom bar.
- **Search input**: 44px tall, #333333 text, 16px.
- **Footer**: not detected as a role; the page ends in the dark brown band described in Colors.

## Design System Architecture

No public design system or brand guideline is linked from the site: the home page links About Hersheyland (/about.html), Our History, Stories & Inspiration, FAQs and Visit Hershey, PA, and footer legal pages; no search was run. The de-facto system is a stylesheet using numbered Font Awesome 6 icon fonts (--fa-style-family-classic: 'Font Awesome 6 Pro'), a search-component variable set (--aa-search-input-height 44px, --aa-panel-max-height 650px, --aa-detached-modal-max-width 991px, --aa-font-weight-bold 700), and two proprietary web font families (Gazpacho, TT Norms Pro).

## Do's and Don'ts

- Do set headlines in Gazpacho 900 and text in TT Norms Pro 500 at 17px/25.5px.
- Do use chocolate #3f000b for text and white or #f6f6f6 grounds.
- Do keep buttons as blue pills in the 35 to 50px radius range.
- Do give cards an 8px top radius, a diffuse brown-tinted shadow and a navy base bar.
- Do change the hero band seasonally (plum #460e3d for Halloween).
- Don't use the plum or navy as general text colours.
- Don't treat the accessibility toggle as brand UI.

## Responsive Behavior

Mobile (390px) was measured. The h1 drops from 48px to 36px (line-height 43.2px); the primary CTA drops from 18px/55px to 16px, line-height 16px, with padding 13px and the same 50px radius; body copy stays 17px/25.5px; the nav stays 24px bold in the blue. Mobile size ladder: 16px (1698 characters), 18px (1313), 17px (608), 22px (516), 24px (399), 14px (336), 15px (108), 20px (91). Column and menu behaviour are not measured.

## Iteration Guide

1. Use #ffffff and #f6f6f6 grounds with #3f000b text.
2. Pair Gazpacho 900 headlines (48/36/28px) with TT Norms Pro 500 17px body.
3. Use blue #007bbd pill buttons; hover #268fc7.
4. Use seasonal bands (#460e3d) with a circular product photograph.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=hersheys--<page> --url=<url> --force --no-motion` before adding tokens.
