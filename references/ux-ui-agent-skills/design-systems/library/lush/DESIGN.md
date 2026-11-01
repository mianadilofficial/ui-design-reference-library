---
version: alpha
name: LUSH
category: "Beauty & Personal Care"
description: "LUSH UK home page (lush.com/uk/en), measured — black #000000 84px header and footer, white #ffffff canvas, full-bleed product photography under curved dark caption bands, Inter 14–18px with a custom 'handwritten' 39.2px display face, white 40px-radius Sign me up! button and 16px-radius #333333 input."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#ffffff"
  on-primary: "#000000"
  surface-input: "#333333"
  light-grey: "#f6f4f4"
typography:
  display:
    fontFamily: handwritten, sans-serif
    fontSize: 39.2px
    fontWeight: 700
    lineHeight: 43.12px
  footer-title:
    fontFamily: inter, sans-serif
    fontSize: 30px
    fontWeight: 700
    lineHeight: 39.99px
    letterSpacing: -0.5px
  subheading:
    fontFamily: inter, sans-serif
    fontSize: 18px
    fontWeight: 700
    lineHeight: 28px
  body:
    fontFamily: inter, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21.994px
  button:
    fontFamily: inter, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 16px
  nav:
    fontFamily: inter, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
rounded:
  xs: 10px
  sm: 16px
  md: 40px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 13px
  s6: 16px
  s7: 19.01px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 19.008px 24px
    height: 64px
    borderColor: "{colors.primary}"
  hero-title-link:
    textColor: "{colors.canvas}"
    typography: "{typography.display}"
  header:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    height: 84px
  text-input:
    backgroundColor: "{colors.surface-input}"
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.sm}"
    padding: 20px 16px
    height: 62px
    borderColor: "{colors.canvas}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
---

# LUSH

## Overview

This document describes the LUSH UK home page at `https://www.lush.com/uk/en` (title: "LUSH Fresh Handmade Cosmetics | Vegetarian & Cruelty Free | LUSH", `lang="en-GB"`), measured at 1,280px. The extractor hid a cookie banner and a scrim before measuring. The 390px mobile pass did not reach the shop: it landed on a "Performing security verification" page from the site's bot-protection service, so no mobile storefront values exist.

LUSH builds its home page out of photography. The capture opens with a black 84px header — white LUSH wordmark on the left, three centered links (Products, Experiences, Places) and search, account, country flag and basket icons on the right. Below it, a full-bleed seasonal photograph (a white bath bomb held by green-gloved hands in front of a green velvet curtain) carries a dark, gently curved caption band at its foot, with the campaign title "HALLOWEEN" set in a brush-style handwritten face and a row of underlined sub-links (Cosy Season, Pumpkin, Hot Chocolate Orange, Build Your Own Boo Basket). A white "Find your perfect product" strip follows with a carousel of rounded photo tiles (Fragrance, Hair, Gifting & Lifestyle, Shower, Bath, Body Care). After that the page alternates the same pattern: big image, curved dark band, handwritten title, underlined links — "LUSH × THE GRINCH", "NEW PRODUCTS", "ADVENT CALENDARS", "FRAGRANCE", "HAIR CARE". Several of those images had not loaded when the capture was taken, so they appear as blank white areas with alt text; that is a capture artefact, not a design choice.

The voice is warm and direct ("Want more LUSH?", "Be the first to hear about limited edition products", "Sign me up!"). Colour lives in the product photos; the interface around them is strictly black and white.

## Colors

- **Canvas `#ffffff`** — the page body and the "Find your perfect product" strip.
- **Ink `#000000`** — the header, the footer and dark text on white (148 measured characters). LUSH's stylesheet declares `--black: #000`.
- **Primary `#ffffff`** — the only detected button, "Sign me up!" in the footer, is a white fill with black text on black ground. In this layout white is the action color.
- **On-primary `#000000`** — the button label.
- **Surface input `#333333`** — the footer email field fill; declared as `--charcoal: #333`.
- **Light grey `#f6f4f4`** — a small measured background, declared as `--light-grey`; it covers only 2 area units on this page.

White is the most-read text color on the page (1,362 characters) because nearly all copy sits on dark caption bands, the black header or the black footer. Large translucent black areas (`#000000bf`, 774 units) form those caption bands over the photographs.

The shipped CSS carries a much larger named palette as custom properties — product-named colours such as `--good-karma: #ffa379`, `--rose-jam: #fd726f`, `--magnaminty: #a2c9a4`, `--intergalactic: #00b7d5`, `--sleepy: #bd8dc8`, `--synaesthesia: #061455`, `--ultrabland: #fcf0e3`, `--skin-drink: #f4d9b9`, and functional colours `--success: #138645`, `--error: #eb0000`, `--warning: #ffe838`, `--focus: #535afa`, `--we-are-lush-green: #18a957`. None of them was measured on this page's visible elements, so they are not frontmatter tokens; use them only when rebuilding a page that shows them.

## Typography

Two families are loaded: **Inter** (400, 600, 700) and a custom face registered as **handwritten** (700), exposed as `--font-handwritten: "handwritten", sans-serif` and `--font-inter: "inter", sans-serif`. Inter carries 1,456 characters; handwritten 54.

- **Display — handwritten 39.2px / 700 / 43.12px.** The campaign titles in the caption bands (HALLOWEEN, LUSH × THE GRINCH). It is a brush-lettered face; the titles read as uppercase in the capture.
- **Footer title — Inter 30px / 700 / 39.99px, −0.5px tracking.** "Want more LUSH?"
- **Subheading — Inter 18px / 700 / 28px.** Caption sub-links such as "Cosy Season"; 18px also carries 325 characters across the page.
- **Body — Inter 14px / 400 / 21.994px.** The newsletter paragraph. The most frequent sizes are 14.4px (453 characters) and 14px (435).
- **Button — Inter 16px / 600 / 16px.**
- **Nav — Inter 16px / 400 / 16px.**

Measured letter-spacing pairs: 11px with 1.5px, 12px with 1px, 14px with 0.5px, 25px with −0.5px and 30px with −0.5px — small text is opened up, large text is tightened.

**Substitute:** Inter is free on Google Fonts. The handwritten face is proprietary; a brush-script display face of similar weight can stand in, but keep it to short uppercase titles.

## Layout

The page measured 4,588px tall at 1,280px wide. The CSS declares `--content-width: 72.5rem` and `--site-width: 110.5rem`, with `--header-height: 84px`. The extractor's bands: black header (0–84px), a full-bleed media block, two narrow cream bands (`#fdf7f0` and `#f8f3e7`), then a long media section holding the alternating image-and-caption modules. Image modules run edge to edge; text inside the caption bands starts at the left content margin. The product carousel shows six tiles across with arrow buttons below on the right.

Measured gaps are 4px (28), 8px, 16px and 40px (8 each), 32px, 24px, 20px and 12px; the most frequent paddings are 20px (25), 4px (16) and 32px (11). The header shows five visible links on desktop.

## Elevation & Depth

No box-shadows were measured anywhere on the page. Depth comes from photography and from the translucent black caption bands whose curved top edge overlaps the image above. The header and footer are flat black.

## Shapes

Four radii were measured: 10px (24 elements — the product carousel tiles), 16px (the footer email input), 40px (the Sign me up! button) and 9999px pills (2 elements — the round carousel arrows). The curved top edge of each caption band is a wave shape drawn over the photograph, not a border radius.

## Components

- **Primary button** — "Sign me up!": white fill, `1px solid #ffffff` border, black Inter 16px/600 label, 64px tall, 352px wide, `19.008px 24px` padding, 40px radius. It sits on the black footer.
- **Email input** — `#333333` fill, white text, `1px solid #ffffff` border, 16px radius, 62px tall, `20px 16px` padding.
- **Header** — black, 84px, white wordmark and Inter links, utility icons on the right.
- **Hero title link** — handwritten 39.2px white title inside a caption band, followed by underlined Inter sub-links.
- **Product tile** — photo tile with 10px radius and a white label at the bottom-left over the image.
- **Footer** — black with "Want more LUSH?" at 30px/700 and the newsletter form.

## Design System Architecture

No public LUSH design system or brand-guideline site was opened: `https://www.lush.com/uk/en/about` returned HTTP 403 to the fetcher. The shipped front end shows the system directly. Its `:root` declares 91 custom properties: a product-named colour library (each with `-shade-1` / `-shade-2` tints, e.g. `--rose-jam`, `--rose-jam-shade-1: #ff9d9d`, `--rose-jam-shade-2: #feeeee`), neutral names (`--noir`, `--liquorice`, `--charcoal`, `--slate`, `--smoke`, `--stone`, `--silver`, `--mist`, `--cloud`, `--dove`), state colours (`--success`, `--error`, `--warning`, `--focus`, each with a `-dark` variant), font variables and layout variables. Tailwind's `--tw-*` variables are also present, and class names such as `box__Box-sc-…` show styled-components. The de-facto rule is black-and-white chrome around product photography, with brand colour reserved for product-specific moments.

## Do's and Don'ts

**Do**
- Keep the header and footer solid black with white type.
- Let full-bleed photography lead every section, with a dark curved caption band carrying the title.
- Set campaign titles in the handwritten face and everything else in Inter.
- Use the white 40px-radius button on black.
- Tighten large type (−0.5px) and open up small labels (1–1.5px).

**Don't**
- Don't add drop shadows; none exist.
- Don't spread the product-named colours across the interface chrome.
- Don't use the handwritten face for body copy or long text.
- Don't treat the cookie banner as part of the design.

## Responsive Behavior

Not measured. The 390px mobile pass was served a bot-protection page ("Performing security verification", with an `h1` reading "www.lush.com" at 40px/600 in a system font), not the LUSH home page. Mobile header, navigation, carousel and caption-band behaviour are therefore not recorded, and no mobile type sizes from the real site exist.

## Iteration Guide

1. Start with a black 84px header, white canvas and Inter.
2. Add a full-bleed image with a translucent black wave-topped caption band.
3. Put a handwritten 39.2px/700 title and Inter 18px/700 underlined links in the band.
4. Follow with a white strip of 10px-radius photo tiles.
5. Repeat image + caption modules; vary only the photograph and title.
6. Close with the black footer, "Want more LUSH?" at 30px/700 and the white 40px-radius button beside a `#333333` input.
7. Pull any additional colour from the declared `:root` palette, not from eyedropping photos.
