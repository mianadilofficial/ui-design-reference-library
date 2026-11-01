---
version: alpha
name: "The Creative Website Manual™"
category: "Business & Corporate"
description: "Editorial web-craft microsite by Huy and Ivor: PPNeueMontreal display with negative tracking, Rand Mono uppercase labels, near-black #070707 stage, #eaeaea ink, amber #ffb700 accent, square panels and pill controls, flat with no shadows."
colors:
  canvas: "#070707"
  ink: "#eaeaea"
  primary: "#ffb700"
  ink-3: "#262626"
  ink-4: "#515151"
typography:
  display:
    fontFamily: PPNeueMontreal, Arial, sans-serif
    fontSize: 30px
    fontWeight: 500
    lineHeight: 33px
    letterSpacing: "-0.6px"
  display-mobile:
    fontFamily: PPNeueMontreal, Arial, sans-serif
    fontSize: 24.4375px
    fontWeight: 500
    lineHeight: 26.8813px
    letterSpacing: "-0.48875px"
  heading:
    fontFamily: PPNeueMontreal, Arial, sans-serif
    fontSize: 128px
    fontWeight: 500
    lineHeight: 128px
    letterSpacing: "-2.56px"
  body:
    fontFamily: PPNeueMontreal, Arial, sans-serif
    fontSize: 17.5px
    fontWeight: 400
    lineHeight: 26.25px
    letterSpacing: "-0.35px"
  link:
    fontFamily: "\"Rand Mono\", Arial, sans-serif"
    fontSize: 13.5px
    fontWeight: 400
    lineHeight: 20.25px
    letterSpacing: "-0.35px"
    textTransform: uppercase
rounded:
  xs: 4px
  sm: 5.6px
  md: 8px
  pill: 9999px
spacing:
  s1: 0.56px
  s2: 2px
  s3: 2.4px
  s4: 3.2px
  s5: 5.28px
  s6: 7.5px
  s7: 11.2px
  s8: 11.5px
  s9: 15.5px
  s10: 16px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
    padding: 0px 16px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.pill}"
    borderColor: "{colors.ink}"
    transform: matrix(1, 0, 0, 1, 0, 0)
---

## Overview

The Creative Website Manual™ (creativewebmanual.com) is a long-form, award-style editorial microsite by "Huy + Ivor" about the creative process of crafting stand-out websites. The page title is "The Creative Website Manual™" and the home is a near-black stage (#070707) on which a giant two-line wordmark ("The ©reative Website Manual™") in light gray (#eaeaea) occupies the top of the page. Below it sit a small tagline ("The creative process of crafting stand-out websites"), an index of "Active ingredients" (Webflow, GSAP) and "Chapters" (01. About, 02. Design + Dev and so on), a pixel-art "[X].0PX / [Y].0PX" cursor readout, a barcode graphic, a "MENU [+]" control, and a centred light card ("CHAPTER 1: ABOUT", "WHY CREATIVE WEBSITES?") with a plus button and a pixel-font code glyph. The measured page is 25,382px tall, built as a scroll-driven sequence of chapters; in the static capture most of the page below the first card is empty because content is revealed by scroll animation.

The look is technical and typographic: monospace labels in uppercase, tight negative letter-spacing on the grotesque display type, hairline frames with corner crop marks, and alternating dark and light chapter backgrounds. The warm amber #ffb700 is the single accent. It is a site about web craft, made with Webflow and GSAP, and its own interface is the demonstration.

## Colors

The canvas is a near-black, #070707 (the site's --swatch--black), which covers nearly all measured area. Text on dark is light gray #eaeaea (--swatch--white). Frames, rules and dividers use #262626 (--swatch--dark) and #515151 (--swatch--gray); translucent overlays measured include #26262626 and #ffffff1a. The primary accent is amber #ffb700 (--swatch--main-accent). The light chapters invert the scheme: background #eaeaea with #070707 text and a secondary light surface #ebebeb (--swatch--light-dim, --_theme---background-2).

The site defines a lime swatch, --swatch--brand-500 #c6fb50, which is a published variable; it is not among the measured background areas of the home page, so it is not tokenised. Other measured small-area colors include #47a0ff (blue), #ffd900 (yellow), #fff6e5, #120c00, #265855 and #193937 (deep teal), #fbf6c0 and #eee2cd; these belong to project thumbnails and chapter illustrations, not to the interface palette.

- Dark stage: #070707 with #eaeaea text.
- Light chapter: #eaeaea with #070707 text.
- Accent: #ffb700, used sparingly.
- Structure: #262626 and #515151 lines.

## Typography

Two families define the voice. PPNeueMontreal (loaded at 400, 500 and as a variable font 200 to 800), with Arial and sans-serif fallbacks, carries the display and body copy. Rand Mono, loaded at 400, is the label and link face; PPMondwest (400) is a pixel face loaded for graphic glyphs like the code mark.

Measured sizes: the display wordmark role, labelled "heading" here, is 128px at weight 500 with a 128px line height and -2.56px letter spacing (the CREATIVITY chapter title; the home wordmark is larger-scale in the capture). The tagline (h1 role) is 30px, weight 500, line height 33px, letter spacing -0.6px; at the 390px mobile pass it is 24.4375px with 26.8813px line height. The mobile h2 is 48px. Body paragraphs are 17.5px, weight 400, line height 26.25px, letter spacing -0.35px; mobile body is 16.1094px with 24.1641px line height. Links and labels in Rand Mono are 13.5px, weight 400, line height 20.25px, letter spacing -0.35px, uppercase. Letter spacing is consistently negative on the grotesque, and labels are small uppercase mono, which creates a strong contrast between large and small text.

## Layout

The layout is a 1280px-wide desktop canvas with a 16px outer gutter and thin outlined frame lines at the viewport edges. The home screen splits into a huge headline across the full width and a lower two-column area: left holds coordinates, credit and barcode, right holds the tagline and a ruled two-column index (label at left, value at right, separated by hairline rules). Chapter cards are centred portrait panels. Corner marks at the edges of the index frame emphasise the technical-drawing feel. Spacing values measured: 0.56px, 2px, 2.4px, 3.2px, 5.28px, 7.5px, 11.2px, 11.5px, 15.5px and 16px; navigation padding is 0px 16px.

## Elevation & Depth

The site is flat: no box shadows were measured at all. Depth comes from contrast between dark and light panels, hairline frames, and motion. The dark #070707 stage with a lighter #eaeaea card is the only depth device on the home screen.

## Shapes

Measured radii: 4px, 8px (--radius--small is .5rem, --radius--main is 1rem), 5.6px 5.6px 0px 0px (tab-like tops), 50% (circular buttons such as the plus), and 1280px and 100vw (--radius--round) for full pills. Panels and frames are mostly square-cornered; interactive controls (the plus button, pills) are fully round. The card component uses a pill radius with a #eaeaea border.

## Components

- Navigation: "MENU [+]" in Rand Mono, #eaeaea, padding 0px 16px.
- Link: Rand Mono uppercase 13.5px in #eaeaea.
- Card: #070707 fill, #eaeaea text, pill radius, 1px #eaeaea outline.
- Chapter panel: light #eaeaea portrait panel with mono labels and a pixel glyph; plus button circular in #070707.
- Index table: two columns separated by hairline rules in #262626.
- Buttons: the site's theme variables set primary button background #eaeaea with text #070707, and a hover state of background #070707 with text #eaeaea; secondary buttons use the same text colors with a border. No primary CTA was detected on the home page, so no button-primary token is declared.

## Design System Architecture

No public design system or brand guideline was found; the site itself is the specimen. It is built with Webflow and GSAP (named in its own "Active ingredients" index) and exposes a structured variable system in the root: swatches (--swatch--black #070707, --swatch--white #eaeaea, --swatch--gray #515151, --swatch--dark #262626, --swatch--main-accent #ffb700, --swatch--brand-500 #c6fb50, --swatch--light-dim #ebebeb), theme roles (--_theme---background, --_theme---text, --_theme---button-primary--*, --_theme---button-secondary--*, --_theme---text-link--*), radii (--radius--small .5rem, --radius--main 1rem, --radius--round 100vw) and a typography system with trim variables (for example --_typography---font--primary-trim-top .33em) and fluid clamp() sizes.

The microcopy voice is terse and self-referential. Labels read like a technical spec sheet: coordinates ("[X].0PX", "[Y].0PX") that track the cursor, "PROJECT BY", "ACTIVE INGREDIENTS", numbered chapters ("01. ABOUT", "02. DESIGN + DEV") and bracketed controls ("MENU [+]"). Chapter cards name the question each chapter answers ("WHY CREATIVE WEBSITES?"). Graphic elements are deliberately raw: a black-and-white barcode strip, a pixel-art code bracket glyph and crop marks. The art direction treats a website as a printed manual, with a cover, index and chapters, while the interactions (scroll reveal, cursor readout) remind the reader it is a live page.

## Do's and Don'ts

- Do set massive, tight, negative-tracked grotesque headlines on near-black.
- Do pair them with tiny uppercase Rand Mono labels.
- Do invert to #eaeaea with #070707 text for light chapters.
- Do use amber #ffb700 as a rare accent.
- Don't add shadows; the site has none.
- Don't round panels; reserve full rounding for controls.
- Don't use extra accent colors from thumbnails as interface colors.

## Responsive Behavior

Measured at the 390px mobile pass: the tagline is 24.4375px with a 26.8813px line height in a 275px box; the h2 is 48px with a 48px line height in a 256px box; body is 16.1094px with a 24.1641px line height in a 358px box. Other mobile layout behavior was not measured.

## Iteration Guide

1. Canvas #070707, ink #eaeaea, accent #ffb700, rules #262626.
2. PPNeueMontreal 500 for display with negative tracking, Rand Mono 400 uppercase for labels.
3. Keep corners square and shadows absent.
4. Build chapters as alternating dark and light panels.
5. Hover states beyond the theme variables, and scroll-driven reveals, were not measured.
