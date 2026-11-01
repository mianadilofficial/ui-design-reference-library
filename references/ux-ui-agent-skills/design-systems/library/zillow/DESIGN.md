---
version: alpha
name: Zillow
category: "Real Estate & PropTech"
description: "Zillow home page: Object Sans 900 60px hero headline over photography, Inter 400/700 for UI with #535364 body and #111116 headings on #ffffff, Zillow blue #0041d9 buttons with 12px corners (hover #0033ab), outlined blue 'Sign in' variants, 20px-radius white cards with #cdcdd3 borders, a #f7f7f7 band and #d03c0b listing badges."
colors:
  canvas: "#ffffff"
  ink: "#535364"
  primary: "#0041d9"
  on-primary: "#ffffff"
  primary-hover: "#0033ab"
  outline-hover-bg: "#eef6ff"
  surface-muted: "#f7f7f7"
  surface-subtle: "#eeeef0"
  sky-blue: "#65b4ff"
  badge-orange: "#d03c0b"
  ink-strong: "#111116"
  ink-footer: "#2a2a37"
  ink-black: "#000000"
  hairline: "#cdcdd3"
typography:
  display:
    fontFamily: "\"Object Sans\", \"Adjusted Arial\", Tahoma, Geneva, sans-serif"
    fontSize: 60px
    fontWeight: 900
    lineHeight: 72px
  card-figure:
    fontFamily: "\"Object Sans\", \"Object Sans Fallback\", sans-serif"
    fontSize: 20px
    fontWeight: 900
    lineHeight: 24px
  body:
    fontFamily: Inter, "Adjusted Arial", Tahoma, Geneva, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: Inter, "Adjusted Arial", Tahoma, Geneva, sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 24px
  button-large:
    fontFamily: Inter, "Inter Fallback", sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  nav:
    fontFamily: Inter, "Adjusted Arial", Tahoma, Geneva, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
  footer:
    fontFamily: Inter, "Adjusted Arial", Tahoma, Geneva, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 24px
  legal:
    fontFamily: Inter, "Adjusted Arial", Tahoma, Geneva, sans-serif
    fontSize: 10px
    fontWeight: 400
    lineHeight: 16px
  input:
    fontFamily: Inter, "Inter Fallback", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 12px
  sm: 20px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 4.38px
  s5: 5px
  s6: 8px
  s7: 9px
  s8: 12px
  s9: 14px
  s10: 16px
  s11: 24px
  s12: 32px
  s13: 48px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 5px 16px
    height: 36px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-large:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-large}"
    rounded: "{rounded.xs}"
    padding: 16px
    height: 56px
    boxShadow: rgba(255, 255, 255, 0) 0px 0px 0px 1px inset
  button-outlined:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button-large}"
    rounded: "{rounded.xs}"
    padding: 9px 16px
    height: 44px
    borderColor: "{colors.primary}"
  button-outlined-hover:
    backgroundColor: "{colors.outline-hover-bg}"
    textColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.legal}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.nav}"
    height: 80px
  text-input:
    textColor: "{colors.ink-strong}"
    typography: "{typography.input}"
    padding: 24px 0px
    height: 72px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.sm}"
    padding: 24px
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-footer}"
    typography: "{typography.footer}"
---

# Zillow

## Overview

The measured site is Zillow's home page at https://www.zillow.com/ (title "Zillow: Real Estate, Apartments, Mortgages & Home Values"), a compact 2,834px page at 1280px. The header is an 80px white bar with the Zillow wordmark centred, five task links on the left (Buy, Rent, Sell, Get a mortgage, Find an agent), three on the right (Manage rentals, Advertise, Get help) and a blue "Sign in" button. A slim left rail of icons (Search, Updates, Favorites, Plan, Inbox) runs down the page. The hero is a sunny photograph of a family walking past a craftsman house, with the four-word, heavy-weight headline "Rentals. Homes. Agents. Loans." and a large white search box ("Enter an address, neighborhood, city, or ZIP code").

Below the hero: a "Get home recommendations" block with an outlined "Sign in" button and an illustration of stacked listing cards; "Find homes you can afford with BuyAbility℠" with a Zillow Home Loans calculator card, a full-width blue "Get your BuyAbility" button and a rail of listing photos tagged "Within BuyAbility" in orange; three large white cards on a #f7f7f7 band ("Buy a home", "Rent a home", "Sell a home"), each with a flat, colourful people-and-buildings illustration, a short paragraph and an outlined button ("Find a local agent", "Find rentals", "See your options"); then an "About Zillow's Recommendations" explainer, dropdown link groups (Real Estate, Rentals, Mortgage Rates, Browse Homes) and a dense legal footer. The voice is helpful and plain-spoken ("No matter what path you take to sell your home, we can help you navigate a successful sale.").

## Colors

- **canvas #ffffff** — page, header, cards and footer.
- **ink #535364** — the most-read text colour (paragraphs and card copy).
- **ink-strong #111116** — headings, nav labels and input text. **ink-footer #2a2a37** — footer links. **ink-black #000000** — small amounts of pure black.
- **primary #0041d9** — Zillow blue: filled buttons, outlined button borders and labels, links, and nav hover colour. **on-primary #ffffff**.
- **primary-hover #0033ab** — measured hover for filled buttons and for outlined-button text.
- **outline-hover-bg #eef6ff** — measured hover background of the outlined "Sign in" button.
- **surface-muted #f7f7f7** — the band behind the Buy / Rent / Sell cards; **surface-subtle #eeeef0** — measured light grey area (skeleton placeholders in listing cards).
- **hairline #cdcdd3** — card borders and dividers.
- **sky-blue #65b4ff** — a measured background area used in the illustrations.
- **badge-orange #d03c0b** — the "Within BuyAbility" listing badge.

No root CSS variables were exposed on the page (`rootVars` is empty), so the colours above are measured computed values.

## Typography

- **Object Sans** — the brand display face (loaded at 800; the h1 computes 900). **display** 60px / 900 / 72px for "Rentals. Homes. Agents. Loans.", white over the hero image. **card-figure** 20px / 900 / 24px for the "$ - -" figures in the BuyAbility card. Card titles such as "Buy a home" render in a heavy weight in the capture; their exact face was not isolated.
- **Inter** — everything else (variable font 400–800). **body** 16px / 400 / 24px; **nav** 16px / 400 / 28px; **button** 14px / 700 / 24px; **button-large** 16px / 700 / 24px; **footer** 14px / 400 / 24px; **legal** 10px / 400 / 16px for the disclosure text and its inline links; **input** 16px / 400 / 24px.

Measured sizes are 10, 12, 14, 16, 20, 24 and 60px with weights 400, 700 and 900. The CSS corpus also declares "Ivar Headline" and "Open Sans" font faces, not measured on rendered text.

**Substitutes:** Object Sans is a commercial geometric sans (its stack falls back to "Adjusted Arial", Tahoma, Geneva). Inter is open source.

## Layout

At 1280px the header content spans x 94 to x 1242 and main content x 102 to x 1256 after the icon rail. Bands: 80px header, 408px hero, a 932px white band with the recommendations and BuyAbility sections (two columns), a 484px #f7f7f7 band with the three task cards, and a 930px footer area (up to 4 columns). Measured gaps are 4, 8, 16, 24, 32 and 48px, and paddings follow the same 4/8-based steps (8, 12, 16, 24, 32, 48px). The page is sparse and centred, with large white margins around each module.

## Elevation & Depth

Cards are lifted gently: `rgba(0, 0, 0, 0.15) 0px 4px 15px 0px` is the only drop shadow measured on the page. Inputs and outlines use inset rings instead of borders: `rgb(126, 127, 142) 0px 0px 0px 1px inset` and a transparent `0px 0px 0px 1px inset` on the large button. The BuyAbility card uses a 1px #cdcdd3 border. The hero search box is white on the photo without a visible border.

## Shapes

Measured radii: 12px (all buttons), 20px (cards), 999px (pills, such as the recommendation chips) and `12px 12px 0px 0px` (listing cards with a photo on top). There are no square buttons. Icon tiles in the left rail are simple glyphs without containers.

## Components

- **button-primary** — #0041d9 fill and border, white 14px/700 Inter, 12px radius, 5px 16px padding, 36px tall (header "Sign in"); hover #0033ab.
- **button-large** — #0041d9, white 16px/700, 12px radius, 16px padding, 56px tall, full card width (372px) for "Get your BuyAbility"; hover #0033ab.
- **button-outlined** — white fill, 1px #0041d9 border, #0041d9 16px/700 label, 12px radius, 9px 16px padding, 44px tall; hover background #eef6ff and text #0033ab.
- **nav** — 80px white header; nav labels #111116 16px change to #0041d9 on hover (measured).
- **text-input** — hero search: 16px #111116 text, 72px tall with 24px vertical padding, magnifier icon at right.
- **card** — white, 20px radius, 1px #cdcdd3 border, 24px padding (BuyAbility calculator).
- **listing card** — photo with 12px top corners, orange #d03c0b badge, grey skeleton lines while loading.
- **footer** — white, #2a2a37 14px/24px links, centred link rows, 10px legal copy with #0041d9 links.

## Design System Architecture

No public Zillow design-system page was found or opened: the Zillow Group site redirects to https://www.zillow.com/news/, which returned HTTP 403, and the Zillow GitHub organisation (https://github.com/zillow) lists no design-system or token repository among its public repos (only YUI-era tooling such as yuigen and yui3-cookbook). There is no public documentation cited here. On the live page the system is not exposed as CSS custom properties (no root variables were found); styles are compiled into component CSS. The de-facto system therefore consists of the measured values: two families (Object Sans for display, Inter for UI), a blue action colour with darker hover, 12px button and 20px card radii, a 4/8px spacing rhythm and inset-ring outlines. Note the different font stacks on different components ("Adjusted Arial" fallback in older parts, "Inter Fallback" in newer ones), which shows two generations of components on the same page.

## Do's and Don'ts

- Do use #0041d9 for every action and link, darkening to #0033ab on hover.
- Do keep buttons at 12px radius and cards at 20px.
- Do set hero and card headlines in heavy Object Sans; keep all UI text in Inter.
- Do write short, helpful copy that names the task ("Find a local agent", "See your options").
- Do use outlined blue buttons for secondary actions inside cards.
- Don't use square corners or pill-shaped primary buttons.
- Don't use the orange #d03c0b for anything but listing badges.
- Don't use pure black for text; headings are #111116 and body #535364.

## Responsive Behavior

Not measured. The 390px mobile pass recorded no roles or bands and only 18px and 12px text, which does not correspond to the home page. The stylesheet declares breakpoints at max-width 480px (the most used), min-width 768px, 1024px, 1280px, 481px and 320px. How the header, rail and cards adapt was not measured.

## Iteration Guide

1. Start with an 80px white header, centred wordmark and a blue 36px "Sign in" button.
2. Open with a photographic hero, a 60px Object Sans 900 headline and a 72px search field.
3. Use white 20px-radius cards with #cdcdd3 borders on #ffffff or #f7f7f7.
4. Make the main action a #0041d9 button (12px radius); secondary actions outlined in the same blue.
5. Space in 8px steps (8, 16, 24, 32, 48px).
6. Use #535364 for paragraphs and #111116 for headings.
7. Add the soft `0px 4px 15px` shadow only to floating cards.
8. Re-measure on a working mobile pass before documenting phone layouts.
