---
version: alpha
name: "Nutella"
category: "Food & Beverage"
description: "Nutella international site measured live at nutella.com/int/en: Nutella red #e20019 on white #ffffff, Montserrat in weights 900 and 700 with a 48px h1, 40px-radius pill buttons, a red pill navigation bar and photographic product scenes."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#e20019"
  on-primary: "#ffffff"
  ink-soft: "#303030"
  ink-brown: "#5f3b22"
  button-secondary-border: "#ca1d1d"
typography:
  display:
    fontFamily: Montserrat, sans-serif
    fontSize: 48px
    fontWeight: 900
    lineHeight: 46.56px
  display-mobile:
    fontFamily: Montserrat, sans-serif
    fontSize: 32px
    fontWeight: 900
    lineHeight: 31.04px
  heading:
    fontFamily: Montserrat, sans-serif
    fontSize: 18px
    fontWeight: 600
    lineHeight: 27px
    textTransform: uppercase
  body:
    fontFamily: Montserrat, sans-serif
    fontSize: 18px
    fontWeight: 700
    lineHeight: 21.24px
  button:
    fontFamily: Montserrat, sans-serif
    fontSize: 20px
    fontWeight: 700
    lineHeight: 20px
  nav:
    fontFamily: Montserrat, sans-serif
    fontSize: 28px
    fontWeight: 400
    lineHeight: 42px
  button-secondary:
    fontFamily: Montserrat, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 48px
rounded:
  xs: 12px
  sm: 13px
  md: 15px
  lg: 26px
  xl: 32px
  2xl: 35px
  3xl: 36px
  4xl: 40px
  pill: 9999px
spacing:
  s1: 3.2px
  s2: 5px
  s3: 10px
  s4: 12px
  s5: 13px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 26px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.4xl}"
    padding: 13px 40px
    height: 50px
    borderColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.lg}"
    padding: 0px 32px
    height: 50px
    borderColor: "{colors.button-secondary-border}"
  nav:
    textColor: "{colors.canvas}"
    padding: 56px 0px 0px
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  card:
    textColor: "{colors.canvas}"
    rounded: "{rounded.md}"
    boxShadow: rgba(0, 0, 0, 0.1) 0px 10px 20px 0px
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    padding: 60px 0px 35px
    borderColor: "{colors.canvas}"
---

# Nutella

## Overview

The measured page is https://www.nutella.com/int/en/ (title "Nutella® | Official Website"), 921 visible elements. The page is the Ferrero-owned consumer site for the Nutella hazelnut spread and is bright, warm and playful. At the top is a thin white utility row with Facebook, X and YouTube icons, a search icon and a "Language" selector, then a rounded red pill navigation bar containing the jar-shaped logo and four white bold links: Inside Nutella®, Get inspired, Discover the news, Products.

The hero is a photograph of a Nutella jar beside a stack of pancakes with berries; on the left a red kicker "FEELING YUMMY?" sits over a heavy black headline "There are new recipes to bake and share" and a red pill "Discover More". The carousel's measured h1 is "Try the new Nutella® Plant-Based", so hero slides rotate. Below, a full-width blurred macro photograph of a jar interior carries three small links (Inside Nutella®, Get inspired, The News), a short sentence in white bold and two tall image cards ("Travel with Nutella®", "Nutella® Cafe"), each with a white pill "Discover more". The Products section pairs lifestyle photographs of friends sharing breakfast with a large red headline "One love, different ways to share it" over a red block with round white arrow controls, followed by a white "If you like it, share it on" bar, and a solid red footer with five columns of white links.

The copy is upbeat and second-person ("Feeling yummy?", "Create your own delicious stories"), and the sustainability claims are stated plainly. A floating round red accessibility control sits at the left edge of the viewport; it is not documented as brand UI.

## Colors

Background area: `#ffffff` (3639), `#e20019` (822), `#ff0000` (2). Text by characters: `#ffffff` (1874), `#000000` (375), `#e20019` (346), `#303030` (91), `#007bff` (89), `#5f3b22` (8).

- `canvas` #ffffff: page background.
- `ink` #000000: headings on white (the h1 is black).
- `primary` #e20019 with `on-primary` #ffffff: the Nutella red, used for the nav bar, buttons, kickers, section headline and footer. The site's root variables set `--danger` and `--red` to #e20019.
- `ink-soft` #303030: dark body text.
- `ink-brown` #5f3b22: a dark brown on the "PRODUCTS" label (8 characters).
- `button-secondary-border` #ca1d1d: the border on the secondary red button.

#007bff is Bootstrap's default primary (the root declares `--primary: #007bff` among many Bootstrap color variables) and appears only on unstyled link text such as "Follow us on facebook"; it is not a brand color and is dropped. #ff0000 covers two area units and is also dropped as noise. Red text on white is the brand's headline color for section titles.

## Typography

Montserrat is the family (2701 characters; weights 400, 500, 600, 700 and 900 are used); Metropolis (82 characters) is a secondary one that is not tokenized. The `nutella-icon` font supplies icons.

- `display` Montserrat 48px / 46.56px, weight 900: hero h1 (32px / 31.04px at 390px, `display-mobile`).
- `heading` Montserrat 18px / 27px, weight 600, uppercase: the h2 kicker label (PRODUCTS).
- `body` Montserrat 18px / 21.24px, weight 700: bold body lines over photographs.
- `button` Montserrat 20px / 20px, weight 700: primary button label.
- `button-secondary` Montserrat 16px / 48px, weight 700.
- `nav` Montserrat 28px / 42px, weight 400.

Sizes by characters: 18px (517), 16px (461), 20px (458), 12px (395), 48px (289), 24px (256), 40px (102). Weights: 700 (1707 chars), 400 (583), 900 (403), 500 (82), 600 (8).

## Layout

The root declares Bootstrap-style breakpoints: sm-small 576px, sm 640px, md 768px, lg 992px and xl 1218px, so the grid is Bootstrap-based. Section structure at 1280px: floating pill nav, hero carousel, a photographic news block with two cards, a product carousel in which cards overflow the left edge and navigation arrows sit in a red block at the right, a share bar, and the footer with 60px top padding and 35px bottom. Measured paddings: 26px (28 uses), 10px (20), 5px (18), 12px (17), 32px (15), 16px (15), 24px (12).

## Elevation & Depth

One shadow dominates: `rgba(0, 0, 0, 0.1) 0px 10px 20px 0px` on 29 elements (cards and the nav bar), plus a single `rgba(0, 0, 0, 0.2) 0px 5px 5px 0px`. It is a soft, offset-downward lift. Cards are given this shadow with a 15px radius; photography sits flat inside.

## Shapes

Radii: 15px (42 elements, cards), 13px (15), 12px (15), 32px (14), 50px (10), 40px (7, the primary button), 36px (4). Controls are large capsules; cards and images are rounded rectangles; arrow controls are circles. Tokens: `xs` 12px, `sm` 13px, `md` 15px, `lg` 26px, `xl` 32px, `2xl` 35px, `3xl` 36px, `4xl` 40px, `pill` 9999px.

## Components

- **button-primary**: red #e20019 fill, 2px solid red border, white 20px bold label, 40px radius, 50px height, padding 13px 40px, 300px wide in the measured hero ("Discover what’s new").
- **button-secondary**: red fill, #ca1d1d border, 16px bold label, 26px radius, 50px height, 32px side padding.
- **white pill**: white fill with red bold label over photographs ("Discover more"), seen in the capture.
- **nav**: red pill bar with white bold links and a white jar logo.
- **card**: white text over a photograph, 15px radius and the 10px/20px soft shadow.
- **footer**: red `{colors.primary}` fill, white text, 60px 0 35px padding, five link columns with bold headings.

## Design System Architecture

No brand guideline or design system link appears on https://www.nutella.com/int/en/ (the footer links to Ferrero group sites, contact, cookie, terms and privacy pages). The de-facto system is Bootstrap 4: root variables `--primary`, `--secondary`, `--breakpoint-*`, `--font-family-sans-serif` ("Montserrat", sans-serif) and the full Bootstrap color list, overlaid by the Nutella red (`--danger`, `--red` = #e20019). Source file: `web/data/extracted/nutella.json`.

## Do's and Don'ts

- Do use Nutella red for the nav bar, buttons and footer and white for text on red.
- Do set headlines in Montserrat 900 and keep hero copy short.
- Do show the jar in real food scenes (pancakes, breakfast tables).
- Don't use Bootstrap blue #007bff; it is only an unstyled-link default.
- Don't put the accessibility widget or cookie dialogs into the system.
- Don't use sharp corners; every measured control is rounded.

## Responsive Behavior

The 390px pass measured the h1 at 32px / 31.04px weight 900 in a 350px wide box (48px on desktop) and the h2 kicker unchanged at 18px / 27px uppercase. The root declares breakpoints at 576px, 640px, 768px, 992px and 1218px. How the nav and cards rearrange is not measured.

## Iteration Guide

1. White canvas, black headlines, red actions.
2. Montserrat 900 for display and 700 for most reading text.
3. Capsules with 40px radius for CTAs; 15px radius and soft shadow for cards.
4. Photography of the jar in food scenes, with red blocks behind carousels.
5. Gate: `node web/scripts/verify-designs.mjs --slug=nutella`.

### Content and imagery notes

Imagery follows two rules visible in the capture. First, the product is shown in use: a jar next to pancakes and berries, a jar opened by a hand on a breakfast table with friends, a Nutella B-ready pack held in hand, and a macro of the spread inside a jar used as a full-width background. Second, text over imagery is always white and bold with a pill button, or black bold on a light photographic area. The wordmark appears twice in lowercase rounded script, once in white on the red nav bar with the jar icon and once as a sticker at the bottom left of the product photograph. Section labels use a small kicker line above a large headline, in red on white. The footer repeats the main navigation as column headings in bold white with small links beneath, and ends with outlined white pills "Contact Us" and "Change country".
