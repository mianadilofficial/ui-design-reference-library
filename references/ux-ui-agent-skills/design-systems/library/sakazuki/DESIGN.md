---
version: alpha
name: SAKAZUKI
category: "Food & Beverage"
description: "SAKAZUKI (sakazuki.io), a Japan culture membership guided by Suntory group: hagrid display and hagrid-text serifs at weight 400 only, warm #e1d6ce canvas, black and #c30d23 red sections, square 52px MINT button with a white border, no shadows."
colors:
  canvas: "#e1d6ce"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  brand-red: "#c30d23"
  surface-cream: "#f3eae4"
typography:
  display:
    fontFamily: hagrid-text, serif
    fontSize: 37.6471px
    fontWeight: 400
    lineHeight: 52.7059px
  display-mobile:
    fontFamily: hagrid-text, serif
    fontSize: 17.5px
    fontWeight: 400
    lineHeight: 24.5px
  heading:
    fontFamily: hagrid, serif
    fontSize: 112.941px
    fontWeight: 400
    lineHeight: 112.941px
    letterSpacing: 1.12941px
  subheading:
    fontFamily: hagrid, serif
    fontSize: 56.4706px
    fontWeight: 400
    lineHeight: 56.4706px
  body:
    fontFamily: hagrid-text, serif
    fontSize: 15.0588px
    fontWeight: 400
    lineHeight: 21.0824px
  button:
    fontFamily: hagrid, serif
    fontSize: 26.3529px
    fontWeight: 400
    lineHeight: 26.3529px
  link:
    fontFamily: hagrid, serif
    fontSize: 84.7059px
    fontWeight: 400
    lineHeight: 84.7059px
rounded:
  xs: 28.24px
  none: 0px
  pill: 9999px
spacing:
  s1: 1.88px
  s2: 3.76px
  s3: 6.59px
  s4: 7.53px
  s5: 9.41px
  s6: 12.05px
  s7: 12.24px
  s8: 13.18px
  s9: 15.06px
  s10: 18.82px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12.0471px
    height: 52px
    borderColor: "{colors.on-primary}"
  link:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.on-primary}"
    rounded: "{rounded.none}"
    padding: 21.6471px 0px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
---

# SAKAZUKI

## Overview

The measured page is https://sakazuki.io/ (title "SAKAZUKI - Unlocking Japan's Hidden Gems"). The page describes SAKAZUKI as "a private membership connecting people, culture, and experience", with the lines "Unlocking Japan's Hidden Gems" and "Guided by Suntory group" flanking a giant lowercase "sakazuki" over a blurred amber photograph. It is a Web3-style membership: the header has a wallet icon, an account icon and two outlined pills (SAKE, TABI), and a boxed "MINT" call to action with five chevrons sits at the bottom right of the hero. Social links are written as parenthesized text, "(X) (IG) (OS)", and a live clock reads "JAPAN, 13:22:53".

Below the hero the page changes to a warm beige canvas (#e1d6ce) with very large white capital statements ("THE HEART OF SAKAZUKI"), small centered captions and a "Philosophy" paragraph about people behind each work ("across craft, art, and culture"). Further sections use black and a saturated red. The voice is quiet, curatorial and brief: "Connection, beyond access. Access opens the door."

The page reads as a slow editorial scroll. The hero is dark and warm, a blurred close-up of amber glass in oranges and deep reds, so the white type is the only sharp element. After it the page goes quiet: the beige section holds very little content, with long empty stretches between the statement, the supporting lines and the "Philosophy" label. White text on a light beige canvas is low contrast in the capture, and the smaller captions in the same white are the faintest text on the page. The 1px white border on the black MINT button and the thin outlines of the SAKE and TABI pills are the only line work.

## Colors

Four fills divide the page by painted area: `ink`/`primary` black #000000 (8075 weight), `brand-red` #c30d23 (7705), `canvas` #e1d6ce (5135) and a lighter cream #f3eae4 (1637, the site's `--light-color`). The site's variables name them: `--primary-color` #c30d23, `--secondary-color` #000, `--third-color` #e1d6ce, `--light-color` #f3eae4, `--white` #fff, and utility values `--border-color` #afafaf, `--placeholder-color` #aca8a8, `--input-color` #f5f1ea and `--error-color` #e53e3e. Text is black #000000 on beige and cream (16790 characters), #e1d6ce on black (2680) and white #ffffff (685) on photographs and the beige sections' large headings. The extractor's primary pick is the black MINT button with white text (`on-primary` #ffffff), so black carries actions while red is the section color.

The extraction also recorded `--privy-*` variables (a wallet-login widget, such as #5B4FFF and #DCFCE7); those belong to the third-party login modal and are not brand colors.

## Typography

Two serif-fallback families, both weight 400 only (20155 characters): `hagrid` for display and large labels (1231 characters) and `hagrid-text` for body and small text (18924). The site's root variables are `--font-hagrid` and `--font-hagrid-text`. Sizes in the extraction are fractional pixels as measured: the largest style, 131.765px (11840 characters), is the giant statement text; `heading` is hagrid 112.941px / 112.941px with 1.12941px letter-spacing ("THE HEART OF SAKAZUKI"); `link` (the MINT block) is hagrid 84.7059px / 84.7059px; `subheading` is 56.4706px; `display` is hagrid-text 37.6471px / 52.7059px (the "(X)" social marks); `button` is hagrid 26.3529px; `body` is hagrid-text 15.0588px / 21.0824px; the nav measures 13.1765px / 18.4471px. Other sizes: 12.2353px (1673 characters), 28.2353px (900), 30.1176px (637), 18.8235px (278). Mobile measurements: the giant statement is 61.25px and the first heading role is hagrid-text 17.5px / 24.5px; mobile body-size counts include 12.25px, 14px, 13.125px, 10.5px and 17.5px.

There is no bold weight in the measured data; hierarchy comes from scale. Text transform is not set; the capitals are typed in the copy.

## Layout

The hero is a full-viewport photograph with a three-part title row: left caption, center wordmark, right caption. The header row holds text nav at left (PHILOSOPHY, COLLECTION, BENEFITS, FOUNDER, FAQ), a logo mark at center and the pills and icons at right. The content sections are centered single columns. Variables define the grid: `--container-padding` 1.625rem, `--container-padding-md` .9375rem, `--container-width` 45.5rem, `--container-width-md` 59.125rem and `--content-max-width` 67.75rem, plus a design width `--size` 1360. The tall hero and section rhythm come from the viewport rather than fixed spacing tokens. Measured paddings include 12.2353px (14 uses), 9.41177px (12), 24.4706px (11), 37.6471px (10), 35.7647px (9) and 6.58824px (9).

Other measured paddings are 7.52941px (4 uses), 144.612px (3 uses), 51.2px (3 uses), 1.88235px (2 uses) and 12.0471px (2 uses, the button padding). The fractional values are reported exactly as the extraction measured them at the 1280px desktop viewport.

## Elevation & Depth

No box shadows are measured. Layering comes from full-bleed photography with white type over it, color blocks (black, red, beige), and 1px borders (#000000 on 10 elements, #ffffff on 4). The nav items and a menu panel are animated with a translate on hover: `--hover-translate-y` is -100% and `--hover-duration` is .6s with an `--ease-quint-out` curve of cubic-bezier(.23,1,.32,1), recorded as variables rather than visible states.

## Shapes

Mostly square. `rounded.none` 0px applies to the button, links, nav and footer. Measured exceptions: 50% (3 uses, round controls) and 28.2353px (2 uses, `xs`, the outlined SAKE and TABI pills). The wordmark and logo mark are vector shapes.

## Components

**Button (MINT)**: black #000000 fill, white hagrid text at 26.3529px, 1px solid white border, padding 12.0471px, 52px high and 175px wide, square corners; five chevron glyphs follow the label in the capture.

**Pills (SAKE, TABI)**: outlined with a thin border, rounded 28.2353px, small hagrid-text.

**Nav**: hagrid-text 13.1765px / 18.4471px, white over the photograph and black on beige.

**Large link block**: "MINT" at hagrid 84.7059px in #e1d6ce on black.

**Footer**: black fill, #e1d6ce text in hagrid-text 15.0588px / 21.0824px, with the nav links repeated.

**Social marks**: "(X)", "(IG)", "(OS)" in hagrid-text 37.6471px, white.

## Design System Architecture

No public SAKAZUKI design system, brand-guideline page or token package was opened for this brief, so there is no official source to cite. The shipped CSS has 114 root variables. Brand variables are `--primary-color`, `--secondary-color`, `--third-color`, `--light-color`, `--white`, `--black`, `--border-color`, `--input-color`, `--font-hagrid`, `--font-hagrid-text`, the container and padding variables above, and animation variables (`--animatedDefaultStart` .18s, `--animatedDefaultDiff` .14s, `--hover-duration` .6s). The rest are `--privy-*` variables from a third-party wallet login widget.

## Do's and Don'ts

- Do set all type in hagrid or hagrid-text at weight 400 and let scale create hierarchy.
- Do use the four fills: black, #c30d23, #e1d6ce and #f3eae4.
- Do keep buttons square, black, with a 1px white border.
- Do write social links as parenthesized text.
- Do use huge white capitals on beige for statements.
- Don't add drop shadows; none are measured.
- Don't use the `--privy-*` colors in brand UI.
- Don't add bold weights; none are loaded.

## Responsive Behavior

A 390px mobile pass was recorded. The giant statement measured 61.25px (against 131.765px on desktop), the first heading role is hagrid-text 17.5px / 24.5px in white, and mobile size counts include 12.25px (1966 characters), 14px (1826), 13.125px (1263), 10.5px (796), 17.5px (727) and 15.75px (520). Navigation behavior, column counts and breakpoints were not measured.

## Iteration Guide

1. Start with #e1d6ce canvas, #f3eae4 cream, black and #c30d23 red sections.
2. Use hagrid for display and hagrid-text for text, weight 400.
3. Build the MINT button black, square, 1px white border, 52px high.
4. Use white capital statements on beige and parenthesized social marks.
5. Gate: `node web/scripts/verify-designs.mjs --slug=sakazuki`.
