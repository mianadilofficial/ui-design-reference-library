---
version: alpha
name: Logitech
category: "Design Systems"
description: "Logitech's US storefront homepage: white canvas with near-black #1b1b1b headlines, grey #707279 body copy, one electric mint #00fdcf (the site's --brand) on 60px-radius pill buttons, Brown bold at 64px with -3% tracking, 12px-radius image cards and product photography; an email-offer modal overlays the first view in the capture."

colors:
  canvas: "#ffffff"
  ink: "#707279"
  primary: "#00fdcf"
  on-primary: "#000000"
  brand-black: "#1b1b1b"
  brand-dark-green: "#0d3a38"
  ink-charcoal: "#303133"
  grey-light: "#eaebed"
  surface-card: "#b4b7c0"
  brand-light: "#d6f5f0"
typography:
  display:
    fontFamily: Brown, Roboto, "Helvetica Neue", "Arial Nova", "Nimbus Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 64px
    fontWeight: 700
    lineHeight: 70.4px
    letterSpacing: "-3%"
  display-mobile:
    fontFamily: Brown, Roboto, "Helvetica Neue", "Arial Nova", "Nimbus Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 40px
    fontWeight: 700
    lineHeight: 40px
    letterSpacing: "-1%"
  heading:
    fontFamily: Brown, Roboto, "Helvetica Neue", "Arial Nova", "Nimbus Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 52px
    fontWeight: 700
    lineHeight: 57.2px
    letterSpacing: "-3%"
  subheading:
    fontFamily: Brown, Roboto, "Helvetica Neue", "Arial Nova", "Nimbus Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 20.8px
    letterSpacing: "-0.48px"
  body:
    fontFamily: Brown, Roboto, "Helvetica Neue", "Arial Nova", "Nimbus Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20.8px
    letterSpacing: "-0.48px"
  button:
    fontFamily: Brown, Roboto, "Helvetica Neue", "Arial Nova", "Nimbus Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 16.1px
    letterSpacing: 0.42px
  nav:
    fontFamily: Brown, Roboto, "Helvetica Neue", "Arial Nova", "Nimbus Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  link:
    fontFamily: Brown, Roboto, "Helvetica Neue", "Arial Nova", "Nimbus Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 19.5px
    letterSpacing: "-0.54px"
rounded:
  xs: 4px
  sm: 12px
  md: 60px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 17px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 17px 40px 15px
    height: 48px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.brand-black}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 17px 40px 15px
    height: 48px
  link:
    textColor: "{colors.ink-charcoal}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.on-primary}"
  nav-link:
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
    padding: 0px 16px 0px 0px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.brand-black}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    padding: 4px 40px 4px 24px
    height: 40px
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.brand-black}"
    rounded: "{rounded.sm}"
  footer:
    backgroundColor: "{colors.brand-black}"
    textColor: "{colors.brand-black}"
---

## Overview

The measured page is the United States storefront homepage of Logitech (final URL www.logitech.com/en-us, titled "Logitech United States"). It is a consumer-electronics retail page: a dark utility bar with a promotion line ("Embrace every role | Save up to 30%") and links for Logitech G, Business, Education, Outlet and Support; a grey main header with the lowercase "logitech" wordmark, Shop, Software, Deals and Planet links, a search field and icons; a hero for headphones headed "Pure audio. Your vibe."; a warm desk-flat-lay promotion banner reading "Embrace every role. Save up to 30%" with a mint "SHOP NOW" pill; and a white product grid ("Bundle and Save", "Limited Edition", "Introducing your new AI control center") where each card is a photograph, a bold title, a grey description and a "SHOP NOW" text link with a short mint underline bar.

In the capture a promotional modal ("ENJOY 15% OFF*" with an email field and two dark pill buttons) sits over the first screen and dims the hero. It is a marketing overlay, not part of the brand's interface; a stealth re-extraction still showed it, so the hero and its headline ("Pure audio. Your vibe.", white text on a dark photographic ground) were read from the measurements rather than the picture. The modal's buttons are not documented as brand components.

The voice is short and benefit-led: "Embrace every role.", "Bundle and Save", sentence-case body copy and uppercase action labels. The imagery is lifestyle product photography with muted desk tones and occasional playful colourways.

## Colors

- **canvas (#ffffff)** is the dominant page background below the hero.
- **ink (#707279)** is the most-read text colour (grey body copy on white); **ink-charcoal (#303133)** is the link text colour; **brand-black (#1b1b1b)** is the site's `--gray-900-brand-black`, used for headlines and the footer fill.
- **primary (#00fdcf)** is the mint brand accent, declared as `--brand` and `--brand-accent` in the stylesheet and used for the pill buttons; **on-primary (#000000)** is the label on it.
- **brand-dark-green (#0d3a38)** is a deep teal-green used for a large dark band and the hero-area button ground; **brand-light (#d6f5f0)** is the stylesheet's `--brand-light`, a pale mint tint used as a background.
- **surface-card (#b4b7c0)** is a cool grey card fill; **grey-light (#eaebed)** is a measured light grey surface and text tone.

The stylesheet defines large teal and cyan ramps (for example #00e4bb, #00987c, #33c6fd, #0093ca); they are not confirmed as painted on the first screen and are not tokenised. The first screen mixes a dark hero (text over photography, where white text sits on a dark image) with the white lower page; the canvas token is white because that is the measured page background and the dominant colour of the capture.

## Typography

The headline family is Brown (loaded at weights 300, 500 and 700), followed by Roboto, Helvetica Neue, Arial Nova, Nimbus Sans, Arial and emoji fallbacks. Brown is a commercial typeface; if it is unavailable, Roboto is the stack's own next step.

- **display**: 64px, weight 700, line-height 70.4px, letter-spacing -3% (hero "Pure audio. Your vibe."). On a 390px viewport: 40px, line-height 40px, -1% tracking (display-mobile).
- **heading**: 52px, weight 700, line-height 57.2px, -3% tracking ("Save up to 30%").
- **subheading**: 16px, weight 700, line-height 20.8px, tracking -0.48px.
- **body**: 16px, weight 400, line-height 20.8px, tracking -0.48px.
- **button**: 14px, weight 700, line-height 16.1px, letter-spacing 0.42px, uppercase labels.
- **nav**: 12px, weight 400, line-height 18px.
- **link**: 15px, weight 400, line-height 19.5px, tracking -0.54px.

Large display type is tight (negative tracking), while buttons use slightly positive tracking in capitals.

## Layout

A full-width header stack (utility bar, main header) sits over full-bleed promotional bands, then a content grid at the centre of the white page with a staggered, asymmetric arrangement: one tall card at left, two shorter columns of different heights at right, over a giant faint "logi" watermark in the background. Spacing values measured are 4px, 5px, 6px, 8px, 10px, 12px, 16px, 17px, 20px and 24px; the button padding is 17px 40px 15px. Density is airy, with large photos and little text per card.

## Elevation & Depth

Almost flat. Depth comes from photography (objects shot with soft shadows on surfaces), the dark image overlay on the hero, and the modal's scrim. The only box-shadow measured is the keyboard-focus ring (a white 2px ring plus a 6px translucent blue ring), and a transparent zero shadow. Cards have no drop shadows.

## Shapes

Radii are 4px (xs), 12px (sm, the card and image radius), 60px (md, the pill-shaped buttons and the search input) and 9999px (pill). The 60px and 9999px values both produce capsules at the control sizes used. Image cards are softly cornered rectangles; controls are always capsules.

## Components

- **button-primary** ("SHOP NOW"): #00fdcf fill, #000000 uppercase 14px bold label, 0.42px tracking, 60px radius, padding 17px 40px 15px, height 48px.
- **button-secondary** ("LEARN ABOUT OUR COMMITMENT"): same fill and size, with a #1b1b1b label.
- **link / text CTA**: "SHOP NOW" in bold uppercase with a short mint bar after it, used on product cards; link text is #303133 at 15px.
- **nav / nav-link**: white nav and 12px links in black with 16px right padding.
- **text-input** (search): white fill, #1b1b1b text, 60px radius, padding 4px 40px 4px 24px, height 40px.
- **card**: #b4b7c0 fill, #1b1b1b text, 12px radius (the extractor's card candidate was an image placeholder).
- **footer**: #1b1b1b fill.

## Design System Architecture

Logitech's design-system documentation is hosted at https://design.logitech.com. The page fetched shows the title "Astra Design System" and a description stating it is design-system documentation made with zeroheight; its content is rendered client-side, so no colour, typeface or token values could be read from it, and it is not confirmed that logitech.com is built from it. No values are taken from it. The homepage stylesheet itself declares about two hundred custom properties, including `--brand` and `--brand-accent` (#00fdcf), `--brand-light`, `--gray-900-brand-black` (#1b1b1b), `--teal-900-dark-green` (#0d3a38), numbered teal and cyan ramps, heading size variables (`--heading1-font-size` to `--heading6-font-size`) and `--font-family`. That is the de-facto token layer used for the roles above.

## Do's and Don'ts

- Do use mint #00fdcf pills with black uppercase labels for primary purchase actions.
- Do set display headlines in Brown 700 with tight negative tracking.
- Do keep body copy grey (#707279) and headlines near-black (#1b1b1b).
- Do round images at 12px and controls as capsules.
- Don't tint photographs with the mint; mint is for actions and small accents only.
- Don't use the promotional modal or its dark pill buttons as a brand pattern.
- Don't add drop shadows to cards.
- Don't replace the lowercase wordmark with title case.

## Responsive Behavior

The hero display falls from 64px to 40px at a 390px viewport, with line-height going from 70.4px to 40px and tracking easing from -3% to -1%. Only the h1 was measured at mobile width, so layout changes of the asymmetric card grid are not specified here. Pill buttons stay 48px high, adequate for touch.

## Iteration Guide

1. Start from white with near-black headlines, Brown 700 and negative tracking.
2. Place one mint (#00fdcf) pill per promotional block, label uppercase in black.
3. Use 12px-radius photographic cards with a grey description beneath a bold title.
4. Bring dark moments only through full-bleed photography or the #1b1b1b footer.
5. Check any new colour against the stylesheet's variable list; describe, don't guess.
