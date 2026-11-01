---
version: alpha
name: Shake Shack
category: "Food & Beverage"
description: "Shake Shack's US home page shakeshack.com measured live — white #ffffff header, black #000000 footer, Shack green #418613 pill 'Order Now' button (40px radius) that inverts to white on hover, white 'ORDER NOW' pills (30px) on 80%-black #000000cc hero panels, and Jost throughout: 60px/700 headlines, 17px/700 capitalised buttons, a bold 32px Roboto MENU label."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#418613"
  on-primary: "#ffffff"
  surface-black: "#000000"
  hero-panel: "#000000cc"
  ink-near-black: "#111111"
  ink-light: "#e6e6e6"
  border-grey: "#757575"
typography:
  display:
    fontFamily: Jost, Arial, serif
    fontSize: 60px
    fontWeight: 700
    lineHeight: 72px
  subheading:
    fontFamily: Jost, Arial, serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  menu-label:
    fontFamily: Roboto, Helvetica, Arial, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 24px
    textTransform: uppercase
  body:
    fontFamily: Roboto, Helvetica, Arial, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 19.92px
    letterSpacing: 0.39996px
  button:
    fontFamily: Jost
    fontSize: 17px
    fontWeight: 700
    lineHeight: 24px
    textTransform: capitalize
  button-hero:
    fontFamily: Jost, Arial, serif
    fontSize: 17px
    fontWeight: 700
    lineHeight: 24px
    textTransform: uppercase
  button-small:
    fontFamily: Jost
    fontSize: 14px
    fontWeight: 700
    lineHeight: 36px
    textTransform: capitalize
  nav:
    fontFamily: Jost, Arial, serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  input:
    fontFamily: Roboto, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 23px
    letterSpacing: 0.15008px
rounded:
  xs: 22px
  sm: 30px
  md: 35px
  lg: 40px
  pill: 9999px
spacing:
  s1: 5px
  s2: 7px
  s3: 10px
  s4: 11px
  s5: 15px
  s6: 20px
  s7: 22px
  s8: 25px
  s9: 30px
  s10: 33px
  s11: 75px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 7px 20px
    height: 43px
  button-primary-hover:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    borderColor: "{colors.primary}"
  button-outlined:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-near-black}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    border: "1px solid #111111"
    padding: 9px 18px
    height: 43px
  button-outlined-hover:
    backgroundColor: "{colors.ink-near-black}"
    textColor: "{colors.on-primary}"
  hero-button:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button-hero}"
    rounded: "{rounded.sm}"
    border: "1px solid #000000"
    padding: 11px 20px
    height: 48px
  hero-button-hover:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
  hero-panel:
    backgroundColor: "{colors.hero-panel}"
    textColor: "{colors.on-primary}"
    typography: "{typography.display}"
  button-submit:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button-small}"
    rounded: "{rounded.lg}"
    padding: 0px 20px
    height: 36px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    height: 100px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  email-input:
    textColor: "{colors.on-primary}"
    typography: "{typography.input}"
    padding: 4px 0px 5px
    height: 28px
  footer:
    backgroundColor: "{colors.surface-black}"
    textColor: "{colors.on-primary}"
    typography: "{typography.subheading}"
---

## Overview

This is the US home page of Shake Shack at `https://shakeshack.com/` ("Home Page | Shake Shack"), measured live on 2026-10-17 at 1280px. The desktop page is short — 1,205px — because it is an ordering front door: a header, one promotional carousel, and a footer. The mobile pass did not reach the site (see Responsive Behavior).

The 100px white header carries the green burger-stack logo (SVG, 44 × 48px), a hamburger icon with a bold uppercase "MENU" label and chevron, then utility links on the right — "Select a location" with a pin icon, "Sign In | Sign Up", "Offers" with a bell — and two pill buttons: an outlined "Reorder" with a circular-arrow icon and the green "Order Now", followed by a bag icon.

The hero is a full-width carousel. In the capture the slide is a saturated orange field with a chocolate Reese's shake on the right and a dark, 80%-black text panel on the left holding a 60px bold Jost headline ("Reese's® Peanut Butter Cup Shake"), a two-to-four-line description in white and a white "ORDER NOW" pill. Pause and dash-style pagination controls sit below the panel. The measured h1 belongs to another slide: "Every Sunday is Shack Sunday!". A narrow white gap then leads to a black footer with four columns — About Us, Explore, Inquiries, Download Our App (App Store and Google Play badges) — a "Join Our Mailing List" email field with a white "Submit" pill, social icons, and legal links.

The voice is upbeat and direct ("Crack it now!"). The brand reads through the green logo and button, round friendly Jost letterforms, generous pills and big appetising product photography on bold campaign colour.

## Colors

- **canvas #ffffff** — header and the gap below the hero; the largest painted area in the extraction (weight 2,256).
- **ink #000000** — header text, menu label and outlined-button text (354 characters); 223 occurrences in the CSS.
- **primary #418613** — Shack green: the "Order Now" button fill and the logo; 129 occurrences in the CSS, the most frequent non-neutral colour.
- **on-primary #ffffff** — the most-read text colour (2,726 characters), on the green button, hero panels and footer.
- **surface-black #000000** — the footer (weight 666).
- **hero-panel #000000cc** — the 80%-black text panel inside hero slides (weight 2,224). Over the orange slide it reads as dark chocolate brown in the capture.
- **ink-near-black #111111** — the "Reorder" outline and label; it is also that button's hover fill.
- **ink-light #e6e6e6** — 158 characters of light-grey text; 48 occurrences in the CSS.
- **border-grey #757575** — a single grey border.

The orange in the capture belongs to the campaign slide (its pixels measure about #fe5300) and is not declared in the site CSS, so it is not a brand token. The CSS also contains #dc0000 (17 occurrences, rendered use not measured) and #707070 (81).

## Typography

**Jost** is the house face: 3,277 of the 3,286 measured characters, loaded at 400, 600 and 700 (the CSS declares the full Jost family from ExtraLight to Black Italic). Fallback stack: `Jost, Arial, serif`.

- **display** 60px / 72px, 700 — hero headlines.
- **subheading** 16px / 24px, 700 — footer column heads ("About Us", "Explore").
- **button** 17px / 24px, 700, capitalised — "Order Now", "Reorder".
- **button-hero** 17px / 24px, 700, uppercase — "ORDER NOW" inside slides.
- **button-small** 14px / 36px, 700, capitalised — the footer "Submit".
- **nav** 16px / 24px, 400 — header links and footer links.

20px is the most-read size (1,859 characters); the extractor did not isolate which element carries it. Roboto appears on only nine characters: the 32px / 700 uppercase **menu-label** ("MENU"), the email **input** (16px / 23px, +0.15px) and a 12px / 19.92px paragraph style (**body**) measured on an empty spacer paragraph.

## Layout

The header spans x=175 to x=1171 with the logo and menu at the left and utilities and pills at the right. The hero is full-bleed; its text panel starts at x=97 and is about 500px wide (content right edge 603). The footer runs x=75 to x=1205 in four columns, with the app and newsletter column at the right.

Measured spacing: gaps of 30px (most frequent) and 25px between footer items and header elements, 10px, 5px; paddings of 75px (footer side padding), 20px, 33px, 22px, 15px and 11px. The extractor recorded up to 11 columns in a row (header utilities and footer links).

## Elevation & Depth

No box shadows were measured on rendered elements. Depth comes from the hero composition — product photography breaking out of a flat colour field, with the translucent black panel layered over it — and from the hard switch to a black footer. The CSS declares a few shadows (`0 10px 20px rgba(0,0,0,.2)`, `0px 2px 10px -3px #999`) for components not visible in the measured state.

## Shapes

Everything interactive is a pill. Measured radii: 30px on the slide "ORDER NOW" buttons (the most frequent, 11 elements), 40px on "Order Now" and "Submit", 22px on "Reorder", 50% on round icon targets, and top-only radii of 40px 40px 0 0 and 35px 35px 0 0 on two elements. The hero panel and photographs are square. Borders are 1px — black on the hero pills, #111111 on "Reorder", white on "Submit".

## Components

- **Order Now (button-primary)** — #418613 fill, white Jost 17px/700 capitalised label, 7px 20px padding, 43px high, 40px radius. Hover inverts: white fill, green text and a green border.
- **Reorder (button-outlined)** — white fill, 1px #111111 border and text, 9px 18px padding, 43px, 22px radius, leading circular-arrow icon. Hover fills #111111 with white text.
- **Hero ORDER NOW (hero-button)** — white fill, black uppercase 17px/700, 1px black border, 11px 20px padding, 48px, 30px radius. Hover inverts to black with white text.
- **Hero panel** — 80% black box with a white 60px headline, white paragraph and the hero button.
- **Header** — white, 100px, logo, hamburger + "MENU", underlined utility links ("Select a location", "Sign In | Sign Up", "Offers") and the two pills.
- **Footer** — black; Jost 16px/700 column heads, 16px links, app-store badges with white outlines, an underlined-box email input with white text and a white "Submit" pill (14px/700, 36px, 40px radius), social icons, and pipe-separated legal links whose "See Terms" links underline on hover.

## Design System Architecture

No public design system or brand guideline for Shake Shack was linked from the home page, and no official source was opened. The shipped site exposes no CSS custom properties (rootVars is empty); colours and radii are hard-coded. Icons come from a private icon font, `ss-icons` (147 declarations), and carousels use the `slick` library. The full Jost family is self-hosted as individual weight files. Breakpoints in the CSS split at 767/768px, 1024/1025px, 1279/1280px and 479/480px, with a few at 1440px.

## Do's and Don'ts

**Do**
- Use Shack green #418613 for the primary ordering action; invert to white-with-green on hover.
- Make every button a pill (22–40px radius) with a 1px border.
- Set headlines in Jost 700 at 60px and buttons in Jost 700 at 17px.
- Put white type on an 80%-black panel over campaign photography.
- Close with a black footer and white type.

**Don't**
- Don't use the slide's orange as a brand colour; it is campaign art.
- Don't add drop shadows to buttons or cards.
- Don't set body copy in Roboto; it is limited to the MENU label and form input.
- Don't use square buttons.
- Don't promote CSS-only colours such as #dc0000 to UI roles; their rendered use was not measured.

## Responsive Behavior

Not measured. The mobile pass of the extractor received a Cloudflare block page ("Sorry, you have been blocked — You are unable to access shakeshack.com") instead of the site, so no mobile typography, layout or navigation values exist for Shake Shack. On desktop the extractor recorded a visible "Open navigation menu" toggle and four header links. The CSS declares breakpoints at 479/480px, 767/768px, 1024/1025px and 1279/1280px.

## Iteration Guide

1. Start with a 100px white header: logo, hamburger + MENU, utilities, then outlined "Reorder" and green "Order Now" pills.
2. Build hero slides as full-bleed campaign art with a `hero-panel` text box (white `display` headline, white paragraph, `hero-button`).
3. Keep one green action per view.
4. Footer: black, four columns, newsletter input and white `button-submit`.
5. Re-run the extractor for mobile before writing any responsive rule; the current mobile pass is a block page.
6. Look up new values in `web/data/extracted/shake-shack.json`; the site has no CSS variables.
