---
version: alpha
name: NerdWallet
category: "Banking & Insurance"
description: "NerdWallet personal-finance homepage nerdwallet.com: emerald #008254 buttons with white 13px uppercase Gotham labels, deep green hero, cream #fff7ea footer, 52px bold Gotham display, radii 2px to 16px, soft 5% shadows on white cards."
colors:
  canvas: "#ffffff"
  page-largest: "#fff7ea"
  ink: "#000000"
  primary: "#008254"
  on-primary: "#ffffff"
  ink-secondary: "#3d4045"
  ink-muted: "#64666a"
  link-blue: "#005fb9"
  hairline: "#ebebec"
  surface-mint: "#effcf8"
  accent-lime: "#9ae600"
  primary-hover: "#006642"
  text-input-text: "#101828"
  footer-text: "#016630"
typography:
  display:
    fontFamily: Gotham, system-ui, sans-serif
    fontSize: 52px
    fontWeight: 700
    lineHeight: 57.2px
    letterSpacing: "-0.52px"
  display-mobile:
    fontFamily: Gotham, system-ui, sans-serif
    fontSize: 30px
    fontWeight: 700
    lineHeight: 36px
    letterSpacing: "-0.3px"
  heading:
    fontFamily: Gotham, system-ui, sans-serif
    fontSize: 40px
    fontWeight: 500
    lineHeight: 48px
    letterSpacing: "-0.8px"
  subheading:
    fontFamily: GothamDisplay, system-ui, sans-serif
    fontSize: 20px
    fontWeight: 500
    lineHeight: 25px
  body:
    fontFamily: Gotham, system-ui, sans-serif
    fontSize: 10px
    fontWeight: 400
    lineHeight: 16px
  button:
    fontFamily: Gotham, system-ui, sans-serif
    fontSize: 13px
    fontWeight: 700
    lineHeight: 11.7px
    letterSpacing: 1.76px
    textTransform: uppercase
  nav:
    fontFamily: Gotham, system-ui, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.08px
  link:
    fontFamily: Gotham, system-ui, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 24.75px
    letterSpacing: "-0.45px"
  button-secondary:
    fontFamily: Gotham, system-ui, sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 15px
    letterSpacing: 0.8125px
    textTransform: uppercase
rounded:
  xs: 2px
  sm: 6px
  md: 8px
  lg: 10px
  xl: 12px
  2xl: 16px
  3xl: 64px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 10px
  s5: 11px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 26px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 16px
    height: 44px
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.md}"
    padding: 0px 48px
    height: 44px
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.xl}"
    padding: 20px 16px
    boxShadow: >-
      rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(100, 102, 106, 0.05) 0px 4px 16px 0px, rgba(100, 102,
      104, 0.05) 0px 16px 40px 0px
  nav:
    backgroundColor: "{colors.canvas}"
    padding: 24px
    boxShadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.1) 0px 2px 4px -2px
  nav-link:
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.text-input-text}"
    typography: "{typography.nav}"
    height: 20px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
    padding: 20px 16px
    boxShadow: >-
      rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(100, 102, 106, 0.05) 0px 4px 16px 0px, rgba(100, 102,
      104, 0.05) 0px 16px 40px 0px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.footer-text}"
---

## Overview

nerdwallet.com is the homepage of NerdWallet, titled "NerdWallet: Finance smarter". The measured page is 1280px wide and 7,335px tall with 1,083 visible elements and `lang="en"`. The h1 reads "Smart financial decisions start with NerdWallet" and the sub-line "Navigate every money move with guidance you can trust."

The capture opens with a white header: a green N-and-wordmark logo, nine underlined text links (Credit cards, Banking, Home, Loans, Insurance, Personal finance, Investing, Small business, Taxes), a search icon and two buttons, a light "SIGN IN" and a filled green "SIGN UP". Below it a deep-green hero holds a bold white headline with "NerdWallet" picked out in lime, an AI question box ("Ask me about credit cards...") with a green "NERD AI" footer strip, and a photograph of a smiling man on a sofa using a phone. Overlapping the hero is a pale-mint panel (`#effcf8`) containing ten white category tiles in two rows of five (Credit cards, Insurance, Mortgages, Personal Loans, Small Business, Banking, Investing, Student Loans, Financial Advisors, Travel), each with a 3D-style illustration, a bold title and a grey one-line description, plus an arrow at the upper right.

Further down, "Why millions trust NerdWallet" pairs a portrait on mint with three green statistics (10M+, 15,000+, 100+) and a row of partner logos (Chase, SoFi, Progressive, American Express). "News That Impacts Your Wallet" is a centre-focused carousel of full-bleed article cards with a dark gradient and white headlines, round arrow buttons and dots. A "Find smarter rates today" band begins at the bottom of the capture. A floating lime sparkle button at the right edge is a chat-assistant control and is not documented as brand UI.

Imagery combines friendly stock photography, 3D icons and editorial news photos. Tone is plain and helpful: short imperative labels ("Compare car insurance quotes in just minutes"), numerals as proof points, and uppercase tracked button labels.

## Colors

Background areas by weight: `#fff7ea` (4,591), `#ffffff` (3,177), `#000000` (1,765), `#effcf8` (1,468), `#006642` (640), `#008254` (165), `#e3faf2` (143), `#f7f7f7`, `#e5ffc0`. Text colors by characters: `#ffffff` (3,757), `#000000` (3,596), `#3d4045` (941), `#64666a` (928), `#008254` (613), `#005fb9` (246), `#6a7282`, `#ecfdf5`, `#8b8c8f`, `#016630`, `#9ae600` (10).

- **Primary emerald `#008254`** fills the primary and secondary buttons and colours stat figures, text links and the 5 green borders. On hover the primary button goes to **`#006642`** (measured as the hover state and as a 640-weight background area, which is the deep-green hero).
- **Ink `#000000`**, with **`#3d4045`** (secondary) and **`#64666a`** (muted) for supporting copy.
- **Link blue `#005fb9`** appears on 246 characters of inline links.
- **Lime `#9ae600`** colours the word "NerdWallet" in the h1 (10 characters, matching the word's length).
- **Cream `#fff7ea`** is the largest background area and the footer fill (footer text `#016630`); **mint `#effcf8`** and **`#e3faf2`** sit behind category tiles and portrait panels.
- **Hairline `#ebebec`** is the most frequent border color (9 elements); `#b7ecda`, `#a8ea4c` and white at 25% and 50% alpha are also measured.
- "SIGN IN" is a `#f7f7f7` button with emerald text and border; on hover its fill becomes `#d8d9da`.

The `:root` also exposes Tailwind and NerdWallet variables such as `--color-blue-dark: #02427e`, `--color-neutral-lighter-2: #ebebec`, `--color-green-lightest: #e3faf2` and `--font-chronicle-display: "Chronicle Display", serif`. Chronicle Display was not measured as rendered text, so it is not a typography token.

## Typography

Gotham is the main family (8,999 characters), with GothamDisplay (1,268) for some headings and buttons. Loaded weights are Gotham 300, 400, 500, 700 and 900; computed weights by characters are 400 (6,226), 500 (2,083), 325 (922), 900 (640), 300 (252) and 700 (144).

| Role | Family | Size / line | Weight | Tracking |
| --- | --- | --- | --- | --- |
| display (h1) | Gotham | 52px / 57.2px | 700 | -0.52px |
| display-mobile | Gotham | 30px / 36px | 700 | -0.3px |
| heading (h2) | Gotham | 40px / 48px | 500 | -0.8px |
| subheading | GothamDisplay | 20px / 25px | 500 | normal |
| nav, text input | Gotham | 16px / 24px | 400 | 0.08px |
| link | Gotham | 18px / 24.75px | 500 | -0.45px |
| button | Gotham | 13px / 11.7px | 700 uppercase | 1.76px |
| button-secondary | Gotham | 14px / 15px | 700 uppercase | 0.8125px |
| body (disclaimer) | Gotham | 10px / 16px | 400 | normal |

Sizes by character count: 12px (2,907), 16px (2,592), 18px (1,226), 14px (1,212), 10px (699), 24px (670), 13px, 20px, 40px, 11px, 28px, 52px, 36px. Display sizes carry negative tracking while uppercase button labels are tracked open.

## Layout

The page is 1280px wide. The header has 24px padding. Measured gaps: 8px (96), 16px (36), 4px (34), 24px (24), 20px (20), 64px (10), 10px (10), 12px (6). Paddings: 16px (68), 24px (26), 4px (22), 20px (13), 2px (12), 32px (12), 8px (11), 12px (6). Category tiles use `20px 16px` padding. The mint panel overlaps the hero. Tiles sit in two rows of five on the capture; column widths were not measured.

## Elevation & Depth

The dominant shadow (35 elements) is two faint layers: `rgba(100, 102, 106, 0.05) 0px 4px 16px 0px, rgba(100, 102, 104, 0.05) 0px 16px 40px 0px`, applied to cards and tiles. The sticky header uses `rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.1) 0px 2px 4px -2px`. A deeper `rgba(100, 102, 106, 0.15) 0px 5.143px 20.571px 0px, rgba(100, 102, 104, 0.15) 0px 20.571px 51.429px 0px` was measured once, and an oklab 4% pair on 3 elements.

## Shapes

Radii by frequency: 16px (26), 8px (17), 12px (13), a very large value (12, effectively a pill; normalised to 9999px in tokens), 6px (6), 10px (4), 2px (2), 64px (2), 9999px (1), 1000px (1). The primary button is squared with a 2px radius; the secondary button and the "BEST CASH BACK CARDS" style use 8px; tiles use 12px and large panels 16px; round arrow buttons and dots are the fully rounded shapes.

## Components

- **Primary button (SIGN UP).** `#008254` fill, white 13px bold uppercase Gotham with 1.76px tracking, 2px radius, 44px high, 16px padding; hover `#006642`.
- **Secondary button.** `#008254` fill, white 14px bold uppercase, 8px radius, `0px 48px` padding, 44px high.
- **Sign-in button.** `#f7f7f7` fill, emerald label and border, 2px radius, hover `#d8d9da`.
- **Category tile.** White, 12px radius, `20px 16px` padding, soft 5% shadow, centred illustration, bold title, grey description.
- **Navigation.** White header, 24px padding, 16px Gotham links with underline rules, search icon.
- **Text input.** Text `#101828`, 16px Gotham, 20px field height (the AI ask box).
- **Footer.** Cream `#fff7ea` fill with `#016630` heading text.

## Design System Architecture

No NerdWallet design-system site was opened and none was searched for; the source is the shipped CSS of https://www.nerdwallet.com/. The page is built on Tailwind v4 (variables such as `--tw-ring-shadow`, `--text-2xl: 1.5rem`, `--text-lg: 1.125rem`, `--leading-normal: 1.5`, oklch color variables like `--color-blue-700`, `--color-green-100`) with NerdWallet's own named variables (`--color-blue-dark`, `--color-green-lightest`, `--color-neutral-lighter-2`, `--font-chronicle-display`, `--nw-chatbot-fab-offset-bottom: 24px`). Neutral and green steps carry the system; the Tailwind blues and greens exposed as oklch variables were not matched to rendered elements except where listed above.

## Do's and Don'ts

Do:
- Use emerald `#008254` for every primary action, uppercase and tracked, with white text.
- Put category tiles on a mint panel, white with 12px radius and a 5% shadow.
- Set statements in Gotham 700 at 52px with negative tracking and highlight one word in lime.
- Show numeric proof points in green.

Don't:
- Don't use the lime chat button as a UI pattern.
- Don't add heavy shadows; the main one is 5% alpha.
- Don't use Tailwind default blues as brand colors; the only measured blue is `#005fb9` for links.

## Responsive Behavior

On mobile the h1 is 30px bold (36px line height, -0.3px tracking, 358px wide, 108px high), the h2 is 28px at weight 500 (34px line height, -0.3px tracking), the disclaimer text stays 10px/16px, and the hero button reads "UNLOCK 3.9% TODAY" at 14px bold uppercase in GothamDisplay, 358px by 44px, 8px radius, `16px 48px` padding. Breakpoints, nav collapse and tile columns were not measured.

## Iteration Guide

1. Start from white, cream `#fff7ea` and mint `#effcf8`; text black with `#3d4045` and `#64666a`.
2. Use `#008254` with white uppercase labels for buttons; hover `#006642`.
3. Set headings in Gotham with negative tracking, buttons with positive tracking.
4. Build tiles with 12px radius and the dual 5% shadow.
5. Measure any new page before adding tokens: `node web/scripts/extract-tokens.mjs --slug=nerdwallet--<page> --url=<url> --force --no-motion`.
