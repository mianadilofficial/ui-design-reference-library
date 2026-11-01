---
version: alpha
name: Artiom Yakushev
category: "Portfolio"
description: "Black-canvas portfolio of a Yerevan-based digital designer: pure white text on #000000, Suisse grotesk at 70.4px headings and 16.64px body with tight negative tracking, Apparel serif italic accents at 24.32px, grey #8a8a8a secondary text, and no buttons or filled controls."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#ffffff"
  surface-grey: "#6d6d6d"
  ink-muted: "#8a8a8a"
  ink-ghost: "#ffffff4d"
typography:
  display:
    fontFamily: Apparel, "Times New Roman", sans-serif
    fontSize: 24.32px
    fontWeight: 400
    lineHeight: 31.616px
    letterSpacing: "-0.4864px"
  display-mobile:
    fontFamily: Apparel, "Times New Roman", sans-serif
    fontSize: 22.737px
    fontWeight: 400
    lineHeight: 29.5581px
    letterSpacing: "-0.45474px"
  heading:
    fontFamily: Suisse, Arial, sans-serif
    fontSize: 70.4px
    fontWeight: 400
    lineHeight: 74.624px
    letterSpacing: "-1.408px"
  subheading:
    fontFamily: Suisse, Arial, sans-serif
    fontSize: 28.16px
    fontWeight: 400
    lineHeight: 36.0448px
    letterSpacing: "-0.5632px"
  body:
    fontFamily: Suisse, Arial, sans-serif
    fontSize: 16.64px
    fontWeight: 400
    lineHeight: 21.9648px
    letterSpacing: "-0.0832px"
  nav:
    fontFamily: Suisse, Arial, sans-serif
    fontSize: 12.16px
    fontWeight: 400
    lineHeight: 15.808px
    textTransform: uppercase
rounded:
  xs: 25.6px
spacing:
  s1: 1.92px
  s2: 2.56px
  s3: 3.84px
  s4: 5.12px
  s5: 5.76px
  s6: 6.4px
  s7: 8.96px
  s8: 12.8px
  s9: 13.95px
  s10: 14.08px
components:
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
---

## Overview

Artiom Yakushev's site (art-yakushev.com, page title "Artiom Yakushev – Creative Digital Designer") is a one-person portfolio built as a near-total black field. The measured body background is #000000 and the most-read text color is #ffffff, so the page is a white-on-black system with almost no chroma of its own. All color comes from the work shown: the capture opens on a dark laptop photograph with a yellow, blue and magenta lettered screen, then a red-tinted portrait, then a very large white "V1.0" set against black. The interface itself stays out of the way and lets the imagery carry the saturation.

The tone is editorial and personal. The first-screen strapline reads "A Creative Partner for companies and brands that decide to move forward", and the body copy opens "My name is Artiom. I'm a passionate creative who works close…". The hero wordmark pairs an upright grotesk "Artiom" with an italic serif "Yakushev" at a very large size, a contrast between the two loaded families, Suisse and Apparel. A live local clock ("YEREVAN" followed by a time) sits at the lower left of the hero, social links (Instagram, Behance, LinkedIn) sit at the center, and the page links (Home, Work, Info, Contact) sit at the lower right, all in small uppercase.

There is no measured primary call-to-action button on the page: the extractor found no CTA candidates, and every interactive element is a text link. For that reason `primary` is the same white as `ink`; the only accent behavior is typographic.

## Colors

The palette is a ladder of white and grey on black, taken from the page's own root variables and text frequencies.

- **Canvas** `#000000` is the page background; it covers about 60% of the capture's pixels.
- **Ink** `#ffffff` is used for 819 of the page's measured characters, including the nav, headings and body copy.
- **Ink muted** `#8a8a8a` is the site's `--text-grey` variable and is used for 169 measured characters of secondary copy.
- **Ink ghost** `#ffffff4d` is the `--light-transparent` variable, a 30% white used for 2 measured characters.
- **Surface grey** `#6d6d6d` is the `--light-grey` variable; it was measured as a background candidate with no area weight.

The root variables also publish `--grey` #4f4f4f, `--dark-grey` #242424 and `--error-color` #c21529; none of these were measured on a rendered element, so they are not promoted to tokens. Treat red as an error-state color only; the red in the capture is photography.

## Typography

Two families are loaded: Suisse (weights 400 and 500) and Apparel (400, normal style). Suisse carries 905 measured characters and Apparel 85.

- Display (the "A Creative Partner" span): Apparel 24.32px, line-height 31.616px, letter-spacing -0.4864px. On a 390px mobile pass the same role measured 22.737px / 29.5581px / -0.45474px.
- Heading (the statement "As a digital designer, I help brands and companies connect…"): Suisse 70.4px, line-height 74.624px, letter-spacing -1.408px.
- Subheading (service names such as "Web Design"): Suisse 28.16px, line-height 36.0448px, letter-spacing -0.5632px. This is the most-used size, covering 348 characters.
- Body: Suisse 16.64px, line-height 21.9648px, letter-spacing -0.0832px; on mobile the body measured 17.94px / 23.6808px.
- Nav: Suisse 12.16px uppercase, line-height 15.808px.

The hero wordmark is far larger than any token: measured sizes in the page include 276.48px, 192px and 189.44px with letter-spacing of -16.5888px, -11.52px and -11.3664px (about -6% of the size). A 59.52px size also appears. Every size uses negative tracking proportional to its scale.

Font substitutes: Suisse and Apparel are commercial families and no webfont licence is documented here. Use a neo-grotesk such as Inter or Helvetica Neue for Suisse and a high-contrast italic serif for the Apparel accent when the originals are unavailable; the declared fallbacks on the site are Arial and "Times New Roman".

## Layout

The page is one long scroll, 10,911px tall at a 1280px viewport. Sections are separated by large empty black fields rather than rules or cards. The root variables define the spacing scale in rem: gutter 2.56rem, margin 1.09rem, `--_spacing---small` 1.46rem, 30 at 2.2rem, 35 at 2.6rem, 40 at 2.9rem, 45 at 3.3rem, 80 at 6rem, 125 at 9.2rem, 180 at 13.2rem, 200 at 14.6rem, big 17.6rem, and margin-big 9.5rem. The measured pixel spacings in the tokens (1.92px to 14.08px) are small paddings and gaps inside text lines.

Images are placed asymmetrically: in the capture a portrait sits flush to the left edge at roughly 40% of the width, and the "V1.0" numeral is flush to the right edge with a small "(A®_FOLIO)" label above it. Full-bleed hero media sits behind the first-screen wordmark.

## Elevation & Depth

No box shadows were measured on the text elements, and the page uses no cards, so depth comes only from photography and from the overlap of the hero wordmark on the hero image. The hero wordmark has a light gradient fill over the laptop photo. There are no drop shadows, borders or blur surfaces recorded as tokens.

## Shapes

The one measured radius is 25.6px (`rounded.xs`), found in the stylesheet and present as a token but not attached to a button because the page has none. Images and text blocks in the capture have square edges. Apart from the circular "R" mark at the upper right of the first screen, the interface contains no pills or rounded buttons.

## Components

- **Nav / nav-link:** uppercase Suisse 12.16px in white, three groups across the bottom of the hero: location and time, social links separated by slashes, and page links. Hover was recorded on "HOME": the text changed to "HEMO" while color, background and box shadow stayed the same, a letter-swap animation rather than a color change.
- **Logo mark:** a single capital "A" at the upper left and a circular mark at the upper right, both white.
- **Section label:** small parenthesised labels in grey such as "(A®_FOLIO)".
- **Buttons, inputs, cards:** none measured.

## Design System Architecture

No public design system, token package or brand guidelines exist for this portfolio; the pages opened were the site's own home page (art-yakushev.com) and its stylesheet-derived extraction, and neither links to guidelines. The de-facto system is a set of CSS custom properties on the root: color names (`--white`, `--black`, `--grey`, `--dark-grey`, `--light-grey`, `--text-grey`, `--light-transparent`, `--dark-transparent`, `--error-color`) and a spacing scale named `--_spacing---<n>` with the underscore-prefixed naming that matches an exported site-builder stylesheet. Typography is also variable-driven (`--_typography---text-hero`). Component classes are not documented.

## Do's and Don'ts

- Do keep the canvas pure #000000 and let photography supply color.
- Do set headings in Suisse with negative letter-spacing proportional to size.
- Do use Apparel only for short italic accents such as the strapline and the surname.
- Do keep navigation as small uppercase text links.
- Don't add filled buttons, borders or card containers; none were measured.
- Don't use the default blue link color #0000ee that appears in the hover probe's border; it is a browser default, not a brand color.
- Don't tint the black canvas or add gradients behind text.

## Responsive Behavior

Only a 390px mobile pass of roles was recorded. It measured the display span at 22.737px (line-height 29.5581px, letter-spacing -0.45474px), body text at 17.94px (line-height 23.6808px), and no h2 and no primary CTA. The mobile nav role measured a 3.9px font size with empty text, which is an artifact and not a usable value. Breakpoints, column counts, menu behavior and image sizing on mobile: not measured.

## Iteration Guide

1. Start from `canvas` #000000 and `ink` #ffffff; add `ink-muted` #8a8a8a only for secondary copy.
2. Set the largest type first (the wordmark scale), then the 70.4px heading, 28.16px subheading and 16.64px body, applying each size's measured tracking.
3. Keep nav at 12.16px uppercase; reproduce the HOME letter-swap hover if motion is needed.
4. Use full-bleed photography with strong color; leave generous empty black between sections using the rem spacing variables.
5. Before shipping, run `node web/scripts/verify-designs.mjs --slug=artiom-yakushev` and re-measure mobile layout, which this document leaves as not measured.
