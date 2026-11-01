---
version: alpha
name: "ORYZO AI"
category: "Agencies & Studios"
description: "ORYZO AI (oryzo.ai) is a satirical product campaign site by the design studio Lusion: a near-black brown canvas (#100904), cream ink (#ffedd7), burnt-orange accent (#dc5000), halyard-display-variable uppercase at weight 500 and 12px to 32px radii."
colors:
  canvas: "#100904"
  ink: "#ffedd7"
  primary: "#382416"
  on-primary: "#ffedd7"
  accent-orange: "#dc5000"
  hairline: "#ffedd733"
typography:
  display:
    fontFamily: halyard-display-variable
    fontSize: 21.3333px
    fontWeight: 500
    lineHeight: 23.2533px
    textTransform: uppercase
  display-mobile:
    fontFamily: halyard-display-variable
    fontSize: 38.48px
    fontWeight: 500
    lineHeight: 50.024px
    textTransform: uppercase
  heading:
    fontFamily: halyard-display-variable
    fontSize: 36.2667px
    fontWeight: 500
    lineHeight: 32.64px
    textTransform: uppercase
  button:
    fontFamily: halyard-display-variable
    fontSize: 10.6667px
    fontWeight: 500
    lineHeight: 11.7333px
    textTransform: uppercase
  input:
    fontFamily: Arial
    fontSize: 10.6667px
    fontWeight: 500
    lineHeight: 11.7333px
    textTransform: uppercase
rounded:
  xs: 12px
  sm: 20px
  md: 32px
spacing:
  s1: 1px
  s2: 2px
  s3: 5.33px
  s4: 6.67px
  s5: 7.47px
  s6: 12px
  s7: 12.8px
  s8: 16px
  s9: 21.33px
  s10: 36px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 12.8px 21.3333px
    height: 41px
  nav:
    textColor: "{colors.ink}"
    transform: matrix(1, 0, 0, 1, -28, 0)
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 1px 32px 1px 2px
    height: 48px
---

## Overview

ORYZO AI (https://oryzo.ai/, title "ORYZO AI") is not a product shop. The page states that it is a fictional creative project by the design studio Lusion: "Oryzo doesn't exist. No products are for sale", and the footer pitch reads "We caught your attention with a non-existent product. If we can sell a coaster, imagine what we can do for your brand." The invented product is an AI-branded cork coaster, "The world's most unnecessarily sophisticated cork coaster", with the tagline "MADE FOR MUGS. BUILT FOR TABLES." and the line "Designed to lift, insulate, and grip in all the right ways. Oryzo makes the simplest moment feel considered." The extraction measured a page 1280px wide and 50404px tall, so the experience is a very long scrolled story.

Section headings listed by the page, in order, include "Designed by Lusion, the award-winning design studio.", "Powered by AI*", "Oryzo-1", "So portable, it's wearable", "Warning", "AI SLOP IDEAS FOR THIS WINTER", "We Are So Cooked!", "Rise above mediocrity", "Thermodynamic stability", "Perfectly Round, Seriously", "Now 37.9% More Circular", "Precision Grip, Zero Drama", "100% Plant-based", "People all around the world love Oryzo", "Runs on the edge / Refuses the cloud", "Drop-Tested", "Choose you own", "Our SOTA Open Weight model", and an academic tail (Abstract, Acknowledgements, Peer Review, BibTeX). The voice is deadpan parody of AI-product marketing and research papers; the interface even offers "Encode Message" and "Decode Message" tools and a "Try to hover hand" prompt.

The capture shows the first screen only (the lower part of the full-page capture is the empty dark canvas): a photographic top-down scene of a green cutting mat with printed measurement grid on a wooden table, a dark circular coaster at its centre, the giant cream wordmark "ORYZO" at the top left, a frosted translucent panel at the left reading "DESIGNED BY LUSION, THE AWARD-WINNING DESIGN STUDIO.", a small video thumbnail with "PLAY" at bottom right, a "SCROLL TO CONTINUE" cue, and a vertical cream tab reading "ORYZO-1 MODEL" on the right edge.

## Colors

Only three colours were measured on rendered elements: background areas #ffedd7 (weight 12), #382416 (6) and #100904 (0), and text colours #ffedd7 (869 characters), #dc5000 (23) and #100904 (13). The page body role has no own background; the canvas #100904 is the site's `--color-black`.

- **Canvas #100904**: the espresso-black ground behind the story sections.
- **Ink #ffedd7**: cream text (`--color-white` in the site's variables).
- **Primary #382416**: the button fill (`--color-brown`), with cream text.
- **Accent-orange #dc5000**: used on 23 characters of text (`--color-orange`).
- **Hairline #ffedd733**: a 20% cream border.

Variables also define a green set from the photography palette (`--color-green` #445231, `--color-green-light` #5d6c49, `--color-green-lightest` #f6e0c6), `--color-grey-brown` #6c5f51, `--color-pure-black` #000 and `--color-pure-white` #fff, plus transparent variants of cream and black. Their on-screen use was not measured on the first screen and they are not tokens. Two orange glow shadows (rgba(255, 140, 0, 0.6) and the inset rgb(255, 160, 0) / rgb(224, 112, 16) stack) belong to the video thumbnail frame.

## Typography

The display family is halyard-display-variable (variable weights 100 to 900); the site's variables name `--display-font` as "halyard-display-variable" and `--text-font` as "halyard-text-variable". Literata (200 to 900) and DM Mono 400 are also loaded; Arial appears on 14 characters (the input). All measured text is uppercase except the tagline paragraph in the capture.

- **Display** 21.3333px / 23.2533px, weight 500, uppercase: the detected hero text "DESIGNED" (the giant wordmark itself is not measured as DOM text).
- **Heading** 36.2667px / 32.64px, weight 500, uppercase (117 characters).
- **Button** 10.6667px / 11.7333px, weight 500, uppercase (375 characters, the most-used size).
- **Input** Arial 10.6667px / 11.7333px, weight 500.
- **Display-mobile** 38.48px / 50.024px, weight 500, uppercase: the "INTRO" link in the 390px pass.

Other sizes measured: 12px (159 characters), 25.3333px (91), 16px (83), 15px, 6.66667px, 8.53333px. Weight 500 covers 758 characters and 400 covers 147. Letter-spacing is default (none measured). Line-heights are tight, below the font size for headings (32.64px at 36.2667px).

## Layout

The layout uses a 16-column grid defined in CSS variables: `--grid-columns` 16, `--grid-rows` 1, `--grid-gap-scale` calc(24 / 90), `--site-padding-x` 3.125vw, `--site-row-height` and `--site-padding-y`, with span helpers `--grid-span-1` and following. The header height is `--site-header` 21px. In the capture, the top row holds a dot, the tagline, and four nav labels (INTRO with a dotted underline, FEATURES, PRODUCT, CONTACT); the left column carries the frosted caption panel; the paragraph sits right of the central coaster. Measured gaps: 12px, 36px, 5.33333px, 21.3333px, 7.46667px, 16px. Measured paddings: 16px (4 uses), 21.3333px, 40px, 181.333px, 12.8px.

## Elevation & Depth

Depth comes from photography, translucency and glow, not stacked UI shadows. The frosted panel in the capture is a semi-opaque cream-brown layer with a dotted divider; the video thumbnail has an orange glow (`rgba(255, 140, 0, 0.6) 0px 0px 10px 3px`) and an inset orange stack (`rgb(255, 160, 0) 0px 0px 3px 2px inset, rgb(224, 112, 16) 0px 0px 8px 4px inset`). These are the only two box shadows measured.

## Shapes

Measured radii: 12px (4 uses), 32px (1) and 20px (1). Tokens: xs 12px, sm 20px, md 32px. The primary button uses 32px with a height of 41px (padding 12.8px 21.3333px), so it reads as a rounded pill; the video thumbnail and panel use the smaller radii. The central coaster is a perfect circle in the 3D scene, which is imagery.

## Components

- **button-primary**: background #382416, text #ffedd7, halyard 10.6667px weight 500 uppercase, padding 12.8px 21.3333px, height 41px, radius 32px. In the mobile pass the extractor's primary CTA measured 10.4px text on #382416.
- **nav / nav-link**: cream text at 10.6667px uppercase; four labels (Intro, Features, Product, Contact) and a Menu / Close control.
- **text-input**: Arial 10.6667px, cream text, padding 1px 32px 1px 2px, height 48px (the Encode/Decode message field).
- **Frosted caption panel**, **vertical model tab** ("ORYZO-1 MODEL"), **play thumbnail** and **scroll cue**: visible in the capture; dimensions not extracted.
- **Share and download actions**: "Copy URL", "Paper", "MODEL (.OBJ)", "Code coming soon" per the page text.

## Design System Architecture

No public design system or brand guidelines are linked; the closest item is Lusion's own site (https://lusion.co/), and the page links the project's GitHub repository (https://github.com/lusionltd/ORYZO-1) for the paper, model checkpoints and a "Code coming soon" entry. The de-facto system is the CSS-variable set: colour variables (`--color-white`, `--color-black`, `--color-brown`, `--color-orange`, `--color-green*`, `--color-grey-brown`), font variables (`--display-font`, `--text-font`), the 16-column grid variables and viewport helper `--vh`. Naming follows material or ingredient words (brown, green, grey-brown), matching the cork-and-mat theme.

## Do's and Don'ts

- Do keep a dark espresso canvas (#100904) with cream text (#ffedd7).
- Do set all interface text uppercase in the halyard display family at weight 500.
- Do use orange (#dc5000) sparingly for emphasis and glow.
- Do pair tiny labels (10.6667px) with oversized wordmark and headings.
- Don't add outlined or filled button variants beyond the brown pill.
- Don't invent product claims beyond the satire; the site discloses that it is fictional.
- Don't use the green photography colours as UI fills.
- Don't present the page as a real store.

## Responsive Behavior

The 390px pass measured the nav label "INTRO" at 38.48px / 50.024px, an h2 ("WE CAUGHT YOUR ATTENTION WITH A NON-EXISTENT PRODUCT...") at 31.616px / 28.4544px, 357px wide and 246px tall, and the primary CTA with 10.4px text on #382416 (its text was measured as stacked single letters, "L U S I O N . C O"). Grid and column behaviour at mobile width are not measured beyond the 16-column variable definition.

## Iteration Guide

1. Set canvas #100904, ink #ffedd7, button fill #382416, accent #dc5000.
2. Use uppercase halyard-display-variable at weight 500; keep body labels near 10.6667px and headings near 36px.
3. Keep the radius set 12px / 20px / 32px.
4. Build with the 16-column grid and 3.125vw side padding.
5. Re-measure scroll sections (`--slug=oryzo-ai--page --url=<url> --force --no-motion`) before adding tokens; only the first screen was captured.
