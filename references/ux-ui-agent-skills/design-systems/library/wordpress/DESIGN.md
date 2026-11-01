---
version: alpha
name: WordPress
category: "Design Systems"
description: "The WordPress.org homepage pairs EB Garamond display headlines at 70px with Inter body text at 16px, a single blueberry action color #3858e9 on 2px-radius rectangular buttons, light-grey #f6f6f6 bands, and a near-black #1e1e1e showcase section. Pill-shaped 9999px rounding appears only on small items; everything else is flat with hairline #d9d9d9 borders."
colors:
  canvas: "#f6f6f6"
  page-body: "#ffffff"
  page-largest: "#1e1e1e"
  ink: "#1e1e1e"
  primary: "#3858e9"
  on-primary: "#ffffff"
  surface-dark: "#23282d"
  ink-charcoal-0: "#1a1919"
  black: "#000000"
  ink-muted: "#979aa1"
  hairline: "#d9d9d9"
  primary-hover: "#213fd4"
typography:
  display:
    fontFamily: "\"EB Garamond\", serif"
    fontSize: 70px
    fontWeight: 400
    lineHeight: 73.5px
  heading:
    fontFamily: Inter, sans-serif
    fontSize: 18px
    fontWeight: 700
    lineHeight: 33.84px
  body:
    fontFamily: Inter, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26px
  button:
    fontFamily: Inter, sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 16.1px
  nav:
    fontFamily: Inter, sans-serif
    fontSize: 21px
    fontWeight: 400
    lineHeight: 39.9px
  button-secondary:
    fontFamily: Inter, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 20.8px
rounded:
  xs: 2px
  pill: 9999px
spacing:
  s1: 5px
  s2: 10px
  s3: 12px
  s4: 14px
  s5: 15px
  s6: 16px
  s7: 18px
  s8: 19px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 10px 19px
    height: 36px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 15px 33px
    height: 51px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.surface-dark}"
  nav-link:
    textColor: "{colors.surface-dark}"
    typography: "{typography.nav}"
    padding: 15px 20px
  footer:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.page-body}"
    padding: 69px 80px 58px
---

## Overview

This document describes wordpress.org as measured on its home page (final URL https://wordpress.org/, title "Blog Tool, Publishing Platform, and CMS – WordPress.org") at a 1280px viewport. The page is editorial rather than app-like. It opens with a large serif headline, "Meet WordPress", beside a hand-painted blue brushstroke illustration, then moves down through alternating bands: white, a light grey band holding three feature cards (Design, Build, Extend), a release announcement with a product collage, and a dark charcoal "One platform, a universe of possibilities" section with greyed customer logos (Rolling Stone, TIME, NASA, Microsoft, TechCrunch, Harvard) followed by a mosaic of showcase site screenshots running off the edge of the page.

The voice is plain and confident: short declarative headings, sentences such as "Customize every detail—no code needed", and inline text links for secondary actions. The single saturated color is blueberry {colors.primary}; the rest of the palette is neutral greys and white, so the screenshots and illustrations carry the visual variety.

## Colors

The most-read text color is charcoal {colors.ink} (#1e1e1e), which is also the largest background area (the dark showcase band) and the h1 color on white. The page body background is {colors.page-body} (#ffffff) and the second major surface is {colors.canvas} (#f6f6f6), the band behind the three feature cards. Navigation text and the footer fill use {colors.surface-dark} (#23282d). Secondary body text measured as {colors.ink-charcoal-0} (#1a1919), pure {colors.black} (#000000), and a muted grey {colors.ink-muted} (#979aa1) used on the dark band. Borders use {colors.hairline} (#d9d9d9).

The action color is {colors.primary} (#3858e9). It fills the "Get WordPress" button in the header and the "Explore WordPress 7.1" and "Explore the Showcase" buttons, and colors inline links ("blocks", "theme", "plugins", "Try the Block Editor"). On hover the button fill measured {colors.primary-hover} (#213fd4) and links lose their underline. Text on the button is {colors.on-primary} (#ffffff).

The site's own CSS variables define a larger named palette (blueberry-1 through -4, charcoal-0 through -5, light-grey-1 and -2, pomegrade, lemon, acid-green and purple families, plus WordPress core presets such as vivid-red). Those extra families were not seen in the visible home page chrome, so they are not tokens here.

## Typography

Two families are loaded on the page: EB Garamond (400-700 variable) and Inter (100-900 variable). The CSS variables --wp--preset--font-family--eb-garamond and --wp--custom--heading--typography--font-family show the heading font is a serif by design; the WordPress design handbook page on typography (https://make.wordpress.org/design/handbook/foundations/typography) states the WordPress.org site uses Inter and E.B. Garamond, while Open Sans is the general-purpose brand face for other uses.

Display ({typography.display}) is EB Garamond 400 at 70px with a 73.5px line height, used for "Meet WordPress". Card titles ({typography.heading}) are Inter 700 at 18px. Body ({typography.body}) is Inter 400 at 16px on a 26px line height. The header button ({typography.button}) is Inter 700 at 14px, the larger call-to-action ({typography.button-secondary}) is Inter 600 at 16px, and navigation links ({typography.nav}) measured at 21px on a 39.9px line height. Other sizes seen by character weight are 14, 24, 36, 50 and 120px; the 120px size is a large decorative heading with -2px letter spacing.

Font substitutes: both faces are open source, so no substitution is needed. If they fail to load, the CSS falls back to the generic serif and sans-serif families.

## Layout

The header height variable is --wp-global-header-height: 60px, and the measured navigation links are 60px tall with 15px 20px padding. Content width variables are --wp--custom--layout--content-size: 680px and --wp--custom--layout--wide-size: 1160px. The home page wraps content in the wide size with generous band padding (80px was the most frequent padding value) and gaps of 30px between the three feature cards. Spacing values measured include 5, 10, 12, 14, 15, 16, 18, 19, 20 and 24px ({spacing.s1} through {spacing.s10}). The page is 5083px tall at desktop width. The footer carries padding of 69px 80px 58px on a dark fill.

The hero is two columns: the headline and intro on the left, the brush illustration on the right. Below it, a three-column card row, then a two-column text plus image block, then a full-bleed dark band, then an edge-to-edge screenshot mosaic.

## Elevation & Depth

No box shadows were measured on the home page. Depth comes from color bands (white, light grey, near-black) and from thin hairline borders around the white feature cards and the product collage. Illustrations and screenshots supply the visual layering. The WordPress presets define shadows (natural, deep, crisp) in the global stylesheet, but none appeared on the visible components.

## Shapes

Buttons are nearly square: {rounded.xs} (2px) radius, matching --wp--custom--button--border--radius: 2px. {rounded.pill} (9999px) appears on a handful of small elements. Cards and screenshots are square-cornered with a hairline frame. The brand's hand-painted brushstroke illustration is the one organic shape on the page.

## Components

**button-primary** is the header "Get WordPress" button: {colors.primary} fill, white Inter 700 14px text, 2px radius, 10px 19px padding, 36px tall. **button-secondary** is the larger in-page call-to-action ("Explore WordPress 7.1"): same fill and radius, Inter 600 16px, 15px 33px padding, 51px tall. Both darken to {colors.primary-hover} on hover.

**link** is {colors.primary} Inter 16px, underlined at rest and un-underlined on hover. **nav** is a white bar of Inter 21px links colored {colors.surface-dark}; on hover a link gains a {colors.canvas} background and an underline. **footer** is a {colors.surface-dark} block with white text. Feature cards are white boxes with a hairline border containing a UI illustration, an h2 title, and two or three lines of body text.

## Design System Architecture

No standalone public design-system site for wordpress.org itself was confirmed. The page is built as a WordPress block theme: the shipped CSS exposes 257 custom properties on the root, prefixed --wp--preset-- (colors, font families, font sizes, shadows) and --wp--custom-- (button, form, layout, heading, pullquote settings), which is the global-styles variable scheme WordPress generates from theme configuration. Colors are named by hue and step (blueberry-1, charcoal-1, light-grey-2).

The brief listed https://wordpress.github.io/gutenberg as a design-system URL. That page is a JavaScript-rendered Storybook whose content could not be read through the fetch tool, so it is not confirmed as this site's system and no values are taken from it. The older WordPress design handbook colors page (https://make.wordpress.org/design/handbook/foundations/colors) lists a legacy palette (WordPress Blue #0073aa; grays including Dark Gray #23282d), of which only #23282d matches a measured value here; the blueberry #3858e9 is not on that page. Logo rules are on https://wordpress.org/about/logos/, which points to the trademark policy and gives no color or type guidance.

## Do's and Don'ts

- Do use {colors.primary} for the one primary action per band, with white Inter text and a 2px radius.
- Do set headlines in EB Garamond at weight 400 and everything functional in Inter.
- Do alternate white, {colors.canvas} and {colors.ink} bands to pace the page.
- Do keep links blue and underlined in running text.
- Don't round buttons beyond 2px or add shadows to them.
- Don't introduce other saturated brand colors into page chrome; leave color variety to imagery.
- Don't use the legacy #0073aa blue for the current site.

## Responsive Behavior

Mobile measurements were taken alongside desktop, but the capture shows the desktop layout at 1280px. Based on the root variables, the content and wide widths (680px and 1160px) cap line length and the page width. The header uses a fixed 60px height variable. Beyond these, breakpoints were not measured, so no breakpoint values are claimed.

## Iteration Guide

1. Start from {colors.canvas} or white, set text in {colors.ink}, and add exactly one {colors.primary} button.
2. Use EB Garamond 400 at large sizes for the headline; keep body at Inter 16px.
3. Add structure with full-width bands rather than shadows.
4. When adding a new surface, take its color from the measured set: {colors.page-body}, {colors.canvas}, {colors.surface-dark}, {colors.ink}.
5. Verify new tokens against the root variables before use, and keep radius at {rounded.xs}.
