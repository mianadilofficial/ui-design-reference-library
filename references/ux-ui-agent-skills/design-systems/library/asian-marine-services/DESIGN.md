---
version: alpha
name: Asian Marine Services PCL. (Asimar)
category: "Thai Brands"
description: "Asimar, Thailand's listed shipyard (page title 'Asian Marine Service PCL. - Most Awarded Shipyard in Thailand'): navy #273b7b bars and buttons, white #ffffff body, black #000000 hero, Avenir LT light 17px body, Avenir heavy 32px and 60px headings, flat square buttons."
colors:
  canvas: "#000000"
  page-body: "#ffffff"
  ink: "#ffffff"
  primary: "#273b7b"
  on-primary: "#ffffff"
  surface-grey: "#cccccc"
  ink-dark: "#2f2e2e"
  ink-muted: "#605e5e"
  ink-faint: "#a0a09f"
  link: "#2b6da3"
  button-secondary-bg: "#ffcbaa"
  text-input-bg: "#e8e8e8"
typography:
  display:
    fontFamily: avenir-lt-w01_85-heavy1475544, sans-serif
    fontSize: 32px
    fontWeight: 400
  heading:
    fontFamily: "\"open sans\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.2px
  subheading:
    fontFamily: avenir-lt-w01_85-heavy1475544, sans-serif
    fontSize: 60px
    fontWeight: 400
  body:
    fontFamily: avenir-lt-w01_35-light1475496, sans-serif
    fontSize: 17px
    fontWeight: 400
  button:
    fontFamily: avenir-lt-w01_35-light1475496, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
  nav:
    fontFamily: avenir-lt-w01_35-light1475496, sans-serif
    fontSize: 16px
    fontWeight: 700
    letterSpacing: 0.8px
  link:
    fontFamily: anton, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
  button-secondary:
    fontFamily: baskervillemtw01-smbdit, serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 21px
rounded:
  xs: 100px
  sm: 200px
  none: 0px
  pill: 9999px
spacing:
  s1: 3px
  s2: 5px
  s3: 8px
  s4: 10px
  s5: 10.5px
  s6: 20px
  s7: 24px
  s8: 28px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 49px
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    height: 40px
  link:
    textColor: "{colors.link}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 10px
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.ink-muted}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 3px 3px 3px 5px
    height: 36px
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    rounded: "{rounded.none}"
---

## Overview

The measured site is asimar.com, titled "Asimar | Asian Marine Service PCL. - Most Awarded Shipyard in Thailand" (language attribute: en). Asian Marine Services Public Company Limited describes itself on the page as established in 1981 as a marine survey company that later bought a first floating dock, Asimar 1 from Japan, and a second, Asimar 2 from Germany. The home page is an industrial-corporate site: a black hero with the company name in white capitals and the italic motto "We Emphasize on Time and Quality", a solid navy band reading "Ship Repair | Ship Building | Steel Fabrication | Engineering", and full-bleed photographs of vessels in dock and of workers with a propeller, each overlaid by a translucent navy panel carrying a section title ("ABOUT ASIMAR", "Capability") and a short paragraph.

The interface is bilingual: Thai and English flags at the top right switch the language, and a Thai headline ("ประกาศการจ่ายเงินปันผล", a dividend announcement) is among the measured headings. A skip link ("Skip to Main Content"), a "Cybersecurity and Personal Data" notice and a "Supply" link are in the page's measured text. A contact form ends in a "Send" button, which the extractor detected as the primary call to action.

The look is flat and utilitarian. Navy is the only brand hue; everything else is white, black, grey and photography. The extractor measured the page's largest backgrounds as white (7,079 area units), black (3,042), a translucent dark #2423231a (1,174), grey #cccccc (897) and navy #273b7b (593).

## Colors

- **Canvas** `#000000`: the hero and dark bands. **Page body** `#ffffff`: the nav bar and content area; the root body measured #ffffff with black text.
- **Primary** `#273b7b` fills the "Send" button (white text, 49px tall), the nav sub-bar, the motto band and the footer. A translucent #273b7b99 is the panel over photographs.
- **Ink** `#ffffff` is the most-read text color (1,262 characters) because the hero, bands and footer are dark.
- **Ink dark** `#2f2e2e` (411 characters) is the dark text on light areas; black `#000000` text covers another 224 characters.
- **Ink muted** `#605e5e` (149 characters, the Thai h2) and **ink faint** `#a0a09f` (58 characters).
- **Link** `#2b6da3`, the measured link color.
- **Surface grey** `#cccccc`, **text-input background** `#e8e8e8`, and **secondary button background** `#ffcbaa` (a light peach used by the secondary button, 5 area units).

The site's root variables expose the palette as numbered RGB triplets (`--color_12` 204,204,204; `--color_37` 47,46,46; `--color_43` and `--color_55` 160,160,159; `--color_60` 59,88,184). The 59,88,184 value (#3b58b8) was measured on one character and is not promoted to a token. Focus rings are declared as `0 0 0 1px #fff, 0 0 0 3px #116dff`, a platform default and not a brand color.

## Typography

Six faces are loaded: avenir-lt-w01_35-light (body, 1,804 characters), avenir-lt-w01_85-heavy (headings, 176), open sans (149), helvetica-w01-roman, anton, and baskervillemtw01-smbdit.

- Display (the h1 motto band): Avenir LT 85 Heavy, 32px, weight 400 (the heaviness is in the font file), line-height normal.
- Subheading (the h3 company name): Avenir LT 85 Heavy, 60px.
- Heading (Thai announcement h2): Open Sans 18px, line-height 25.2px, in #605e5e.
- Body: Avenir LT 35 Light, 17px (624 characters); the next most used sizes are 16px (561) and 14px.
- Button: Avenir LT 35 Light, 14px, line-height 19.6px.
- Nav: Avenir LT 35 Light, 16px, weight 700, letter-spacing 0.8px.
- Link: Anton 16px / 22.4px. Secondary button: Baskerville MT semibold italic 15px / 21px.

Headings in the capture are set in italic; the italic is the face (the Baskerville file is named smbdit) or a style on the heavy face, and the extractor recorded no font-style value, so treat italic as visible in the capture, not a token. Font substitutes: Avenir LT is commercial; use Nunito Sans or Avenir Next as a stand-in, Open Sans stays as is.

## Layout

The page is 5,768px tall at 1280px. A white header holds the logo (a navy boxed ship emblem with "ASIMAR") at the left, a primary row of links (Home, About Asimar, Activities, Services, Facilities, Investor, Career) and, below it, a navy bar with About asimar, Capability, Services, News and Contact. Seven small circular dots at the right edge of the hero act as a section indicator. Sections are full-width bands: black hero, navy motto band, then photographic sections with an off-center overlay panel. Measured spacing steps are 3px, 5px, 8px, 10px, 10.5px, 20px, 24px and 28px.

## Elevation & Depth

Measured shadows are mostly none (11 elements) with a few theme shadows: `var(--shd,0 1px 4px #0009)` (6), `var(--box-shadow)` (5), and focus rings `0 0 0 1px #fff,0 0 0 3px #116dff` (6). Depth is produced by translucent navy panels (#273b7b99) laid on photographs rather than by shadows.

## Shapes

Primary button, nav, links, input and footer are square (radius 0px). The secondary button has a 100px radius, and measured stylesheet radii include 4px, 16px, 12px, 24px, 50px and 300px; the tokens carry 100px, 200px and a 9999px pill. The brand reads as squared and structural, with rounding limited to the secondary button.

## Components

- **Primary button** ("Send"): #273b7b fill, white 14px Avenir Light, 0px radius, 49px tall, 196px wide.
- **Secondary button:** #ffcbaa fill, black text, Baskerville 15px, 100px radius, 40px tall.
- **Nav links:** 16px bold with 0.8px tracking; the sub-bar links are white on navy; on hover the "About asimar" link was measured changing from white text on #273b7b to #273b7b text on white, with the border fading to transparent.
- **Text input:** #e8e8e8 fill, #605e5e text, 36px tall, padding 3px 3px 3px 5px.
- **"Read More" button:** white fill on the translucent navy panel in the capture.
- **Footer:** #273b7b with white text.

## Design System Architecture

No public design system or brand guidelines for Asimar were found on the pages opened (asimar.com home, via extraction); the site links to none. The de-facto system is the site builder's variable theme: `--wst-color-fill-background-primary`, `--wst-font-style-body-large`, `--wst-button-color-border-second…` and numbered `--color_N` and `--font_N` variables (for example `--font_9` is `normal normal normal 13px/1.4em avenir-lt-w01_35-light1475496,sans-serif`). No component library or token package is published.

## Do's and Don'ts

- Do use #273b7b for bars, buttons and the footer, and keep corners square.
- Do put white capitals on black for the company name and white italic on navy for the service line.
- Do overlay translucent navy panels on full-bleed work photography.
- Do offer Thai and English side by side.
- Don't use #116dff; it is a platform focus ring, not a brand color.
- Don't introduce additional hues; peach #ffcbaa is limited to the secondary button.
- Don't treat the measured dots at the right edge as brand decoration; they are a section indicator.

## Responsive Behavior

A 390px mobile pass was recorded, but it returned the same h1 box width (975px) and font sizes as the desktop pass, so no mobile adaptation was captured. Mobile layout, menu form and breakpoints: not measured.

## Iteration Guide

1. Start with white page body, black hero, navy #273b7b for primary surfaces.
2. Use Avenir Light 17px body, Avenir Heavy 32px/60px headings, and keep letters in capitals for the company name.
3. Build the "Send" button at 49px tall, 0px radius.
4. Overlay translucent navy panels (#273b7b99) on photographs.
5. Run `node web/scripts/verify-designs.mjs --slug=asian-marine-services`, and measure mobile before documenting any narrow-screen behavior.
