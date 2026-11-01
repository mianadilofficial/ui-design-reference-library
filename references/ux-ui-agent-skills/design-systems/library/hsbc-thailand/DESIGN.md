---
version: alpha
name: HSBC Thailand
category: "Thai Brands"
description: "HSBC Thailand homepage: square-cornered, white-canvas corporate banking site in the licensed univers-hsbc face (weights 100 to 700), 60px weight-100 display headline, #333333 ink, HSBC red #db0011 on a 41px Log on button, light grey #ededed notice panels and hairline #d7d8d6."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  primary: "#db0011"
  on-primary: "#ffffff"
  surface-grey: "#ededed"
  surface-black: "#000000"
  surface-slate: "#3e505d"
  hairline: "#d7d8d6"
typography:
  display:
    fontFamily: univers-hsbc, Arial, sans-serif
    fontSize: 60px
    fontWeight: 100
    lineHeight: 66px
  heading:
    fontFamily: univers-hsbc, Arial, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 17.6px
  subheading:
    fontFamily: univers-hsbc, Arial, sans-serif
    fontSize: 22px
    fontWeight: 400
    lineHeight: 27.5px
  body:
    fontFamily: univers-hsbc, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 27.2px
  button:
    fontFamily: Arial
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
rounded:
  none: 0px
spacing:
  s1: 1px
  s2: 6px
  s3: 10px
  s4: 15px
  s5: 16px
  s6: 20px
  s7: 30px
  s8: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 10px 20px
    height: 41px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  footer:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
---

## Overview

The HSBC Thailand site (https://www.hsbc.co.th/) is a restrained, text-forward corporate banking page that belongs to the HSBC group look: the hexagon logo with the "HSBC" wordmark at top left, a single red "Log on" button at top right, and a plain row of five navigation labels beneath (HSBC Thailand, Corporate Banking, Global Banking, Global Markets, Global Private Banking). There is no hero marketing slogan; the page opens with a full-width black announcement banner, then a 60px thin "Important Information" heading over a light-grey notice panel that announces the bank's office move (in English and Thai), then a thin "Welcome to HSBC Thailand" heading with a short strapline, and a three-column set of image cards for Corporate Banking, Global Banking and Markets, and Global Private Banking.

In the capture, the black banner is a memorial message with a black-and-white portrait and the notice panel is operational content; both are time-bound content, not system components. A cookie notice container (`c-cookie-notification`) was hidden before measurement and a "Go to top" control exists in the footer; neither is brand UI.

The tone is formal, global and calm: lots of white, very light type, quiet photography (a figure at a window, a night city skyline, a field of pink lotus) and a single colour of emphasis.

## Colors

All values are measured.

- **canvas #ffffff** covers the vast majority of the page (about 12,600 of the measured area units).
- **ink #333333** is the text colour for about 3,300 characters; the root body role reports #000000 on the body element, but running text is #333333.
- **primary #db0011** is HSBC red, the fill of the "Log on" button with white text (**on-primary #ffffff**). It occupies very little area (4 units); red is used as a rare signal, with the small red chevron after each card title as the other appearance in the capture.
- **surface-grey #ededed** is the notice panel and quiet-block background (737 units).
- **surface-black #000000** fills the announcement banner (486 units) and **surface-slate #3e505d** is a slate fill (224 units) that carries white text elsewhere on the page; white text totals 1,082 characters.
- **hairline #d7d8d6** is the single measured border colour, used for rules such as the line above "Important Information".

The palette is therefore white, grey, black and one red.

## Typography

The family is **univers-hsbc**, a custom-named web font, loaded in four weights (100, 300, 400 and 700) with Arial as the fallback. The weight 100 hairline cut dominates by character count (2,439 characters), which is why large headings and a lot of body copy look extremely light; 400 is used for 1,849 characters, 300 for 75 and 600 for 44.

Roles: display 60px / 66px line-height / weight 100 ("Important Information", "Welcome to HSBC Thailand"); subheading 22px / 27.5px / 400 (card titles and linked notices such as "Changes to the Generic Terms and Conditions"); heading 16px / 17.6px / 600 (footer group titles); body 16px / 27.2px / 400; button Arial 14px / 21px / 400. Sizes by character count are 16px (2,817), 14px (982), 12px (398), 22px (114), 28px and 60px. The HTML body element itself measures 14px / weight 300 / 40px line-height. If univers-hsbc cannot be licensed, use Helvetica Neue Light or Arial with a light weight.

## Layout

The page is a full-width, left-aligned flow on a 1280px viewport (3,511px tall). The black banner is nearly full width, and the three-column card row at the end of the capture divides the width evenly with gutters. The navigation is a plain horizontal list below the logo row with a hairline under it. Measured paddings are 20px (20 uses), 10px (9), 15px, 30px, 6px, 16px and 32px. Vertical rhythm is generous: very large headings are followed by small, light body copy.

## Elevation & Depth

Almost flat. One shadow was measured: `rgba(0, 0, 0, 0.2) 0px 1px 4px 0px` (1 use), consistent with a thin shadow beneath the navigation bar in the capture. All other separation is by grey panels, hairline rules and whitespace. There are no gradients and no layered cards.

## Shapes

Corners are square. No border-radius was measured anywhere on the page, the Log on button is a plain rectangle, and photographs in the cards are rectangular and unrounded. The token set records this as `rounded.none: 0px`.

## Components

- **Log on button**: #db0011 fill, white Arial 14px text, padding 10px 20px, 41px tall, square corners, with a small chevron indicating a drop-down.
- **Navigation row**: five text labels in #333333 on white, with a hairline beneath.
- **Notice panel**: full-width #ededed block with 16px body text, bold lead sentence and an underlined text link at 22px.
- **Image card**: a rectangular photograph, a 22px-scale title in #333333 with a red chevron, and 16px body text in a lighter weight; no card border or shadow.
- **Footer**: white text on a dark fill with a list of Contact Us, Find a branch, About HSBC and Tools & Resources links, headed by 16px weight-600 group titles.

## Design System Architecture

No public design system or token package was found on the pages opened. The page uses no CSS custom properties (zero root variables were measured), so the system is de-facto and literal: one family (univers-hsbc), one red, a short grey scale, square corners and a spacing set of 6, 10, 15, 16, 20, 30 and 32px. The group's visual identity is applied through the font loading (four weights of one family) and through restraint in colour rather than through a published token layer. When extending the pages, keep the type weights light, keep red for the single primary action, and keep corners square.

## Do's and Don'ts

- Do use weight-100 type for very large headings and weight 400 for reading text.
- Do keep red #db0011 to the primary button and small signals such as chevrons.
- Do keep corners square and the page mostly white and grey.
- Do write formal, plain bilingual notices (English and Thai) in the grey panel.
- Don't round buttons or cards.
- Don't introduce additional accent colours beyond grey, black and the one red.
- Don't treat the cookie notice or the black memorial banner as brand components.
- Don't use heavy shadows or gradients.
- Don't replace the light-weight headings with bold ones; the thin-weight display type is the page's most recognisable typographic trait.

## Responsive Behavior

The mobile extraction keeps the display role at 60px and the body at 16px with the same family; no other mobile behaviour (menu collapse, column stacking) was measured, so none is documented. For narrow screens expect the three-card row to need to stack and a 60px thin headline to need a smaller size; those would be design decisions rather than measured facts.

## Iteration Guide

This guide summarises how to continue the system using only what was measured on the page.


1. Set white canvas, #333333 text, and univers-hsbc (or a light Univers equivalent) with weights 100 and 400.
2. Use 60px weight-100 headings with 66px line height for page titles.
3. Reserve #db0011 for the primary action; build it 41px tall with 10px 20px padding, 14px text and no radius.
4. Use #ededed panels for notices and #d7d8d6 hairlines for rules.
5. Keep cards unframed: image, 22px title with red chevron, light body copy.
6. Re-extract after campaign changes; the banner and notices rotate, but the system does not.
