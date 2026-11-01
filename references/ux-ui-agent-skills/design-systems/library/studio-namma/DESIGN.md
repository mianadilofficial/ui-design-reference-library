---
version: alpha
name: Studio Namma
category: "Portfolio"
description: "Creative studio site: #e4e4e4 canvas with #111111 ink, a 208px uppercase Mixtape Extra Condensed 800 hero tracked at -9.6px, Gt Pressura Mono 14.4px labels at 1.95px tracking, 4.8px to 100px radii, Webflow theme variables and a light/dark pair."
colors:
  canvas: "#e4e4e4"
  ink: "#111111"
  primary: "#111111"
  surface-light: "#fafafa"
  ink-light: "#d3d3d3"
typography:
  display:
    fontFamily: "\"Mixtape Extra Condensed\", Verdana, sans-serif"
    fontSize: 208px
    fontWeight: 800
    lineHeight: 168px
    letterSpacing: "-9.6px"
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Mixtape Extra Condensed\", Verdana, sans-serif"
    fontSize: 88px
    fontWeight: 800
    lineHeight: 72px
    letterSpacing: "-3.04px"
    textTransform: uppercase
  heading:
    fontFamily: "\"Gt Pressura Mono\", Georgia, sans-serif"
    fontSize: 14.4px
    fontWeight: 300
    lineHeight: 16px
    letterSpacing: 1.95px
    textTransform: uppercase
  body:
    fontFamily: "\"Mixtape Extra Condensed\", Verdana, sans-serif"
    fontSize: 96px
    fontWeight: 800
    lineHeight: 96px
    letterSpacing: "-2.88px"
    textTransform: uppercase
  link:
    fontFamily: "\"Mixtape Extra Condensed\", Verdana, sans-serif"
    fontSize: 160px
    fontWeight: 800
    lineHeight: 131.2px
    letterSpacing: "-4.8px"
    textTransform: uppercase
rounded:
  xs: 4.8px
  sm: 6.4px
  md: 8px
  lg: 100px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 17.6px
  s6: 20px
  s7: 22.4px
  s8: 24px
  s9: 30px
  s10: 32px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink-light}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    textColor: "{colors.ink-light}"
    typography: "{typography.heading}"
    padding: 0px 8px 0px 0px
  footer:
    textColor: "{colors.ink}"
    padding: 0px 0px 51.2px
---

## Overview

Studio Namma (page title "Branding, Design & Webflow Development | Studio Namma", language en-US) is a creative studio whose opened page says it is based in Paris, Lyon and Barcelona, with a French version at /fr. The hero says "WE THINK CRAFT AND DESIGN" in enormous condensed capitals; the capture adds the live label "BARCELONA, SPAIN" with a ticking clock and a monospaced top bar (STUDIO NAMMA, DARK MODE, MENU, LET'S TALK!). The measured page is 7569px tall at 1280px width.

The statement below the hero is the studio's pitch: "IT'S NEVER "JUST A WEBSITE." EVERY DETAIL MATTERS. WE CRAFT DIGITAL EXPERIENCES. YOUR DESIGN. OUR OBSESSION. YOUR BRAND. OUR PLAYGROUND." with "DETAIL" and "PLAYGROUND" underlined, introduced by the monospaced label "CREATIVE STUDIO BUILDING PREMIUM BRANDS". Other opened-page content: selected projects (Matera Visual, Chance Visuals, Silvr, Intramuros Magazine), a services list (art direction, storytelling, branding, identity, Webflow, integration, UI/UX design, wireframes, GSAP animations, transitions, 3D and motion, immersive, creative ads, SEO and content), a "Let's work together" call to action with a "say hello" button, a contact panel with Name, Email, Phone, Interest and Message fields, and a footer with YouTube, LinkedIn and Instagram links. The tone is confident, short and a little cheeky.

## Colors

The theme is driven by Webflow-style variables: `--light` (default #e4e4e4), `--dark` (#111111), `--background` and `--text` resolve through `--_theme---*` variables, which is how the "Dark mode" toggle swaps the pair. A `--yellow` #f9fe02 and `--black` #000 are also declared.

- **Canvas #e4e4e4**: the light theme background.
- **Ink #111111**: the text color of nearly all copy (1009 characters weighted) and the dark card fill.
- **Primary #111111**: no colored CTA was detected, so the near-black is the action color.
- **surface-light #fafafa**: the largest measured background area (1024), seen as a layer behind the hero.
- **ink-light #d3d3d3**: the top bar text color (129 characters weighted) in the monospace labels.

Dark mode was not measured; only the light theme is documented. The bright blue circle (#0000ff) at the bottom right of the capture is a chat widget and the black panel at the lower left is a cookie notice; neither is brand UI and neither is tokenized. The yellow variable was not measured in use on the home page.

## Typography

Three families are loaded: Mixtape Extra Condensed (weight 800) for display, Mixtape (weight 400) for medium text, and Gt Pressura Mono (weight 300) for labels. Lato (400 and 700) is also registered but was not measured in use.

- **display**: Mixtape Extra Condensed 208px / 168px, weight 800, tracking -9.6px, uppercase (h1).
- **display-mobile**: 88px / 72px, tracking -3.04px (390px pass).
- **body**: Mixtape Extra Condensed 96px / 96px, weight 800, tracking -2.88px, uppercase (the statement paragraph).
- **link**: Mixtape Extra Condensed 160px / 131.2px, tracking -4.8px (menu items such as HOME).
- **heading**: Gt Pressura Mono 14.4px / 16px, weight 300, tracking 1.95px, uppercase (the h2 label and top bar).

Other measured sizes: 22.4px, 16px (tracking -0.48px), 128px (-4.8px). The root declares responsive tokens: `--_responsive---font-size--h1` 13rem, `--h2` 10rem, `--h3` 3.5rem, `--h4` 1.9rem, `--main` 1.4rem, `--mono` .9rem, with line heights 10.5rem, 8.6rem, 3.2rem, 2rem, 1.7rem and 1rem. The fonts are commercial; their licenses are not stated on the pages opened.

## Layout

The container padding is 1.25rem (20px; the measured padding of 20px appears 11 times). Gaps are 24px (16 uses), 4px, 32px, 12px, 8px and 30px. The top bar runs a four-part row: studio name at left, dark-mode toggle, menu at center, "LET'S TALK!" at right. Headlines are centered; the statement block is centered under a monospace eyebrow. A world-clock strip (Paris, Los Angeles, Barcelona, Hong Kong) is on the page. The footer has padding of 0px 0px 51.2px.

## Elevation & Depth

Almost none. One soft shadow measured: `rgba(0, 0, 0, 0.15) 0px 3px 12px 0px` on a single element. The hero includes a 3D rotated stack of project covers (colored panels in yellow, pink, orange, black) that overlaps the headline; that is imagery. The headline itself overlaps the artwork through negative tracking and tight line height rather than with shadows.

## Shapes

Radii measured: 6.4px (9 elements), 4.8px (7), 8px (4) and 100px (2). The root variable `--_responsive---other--border-radius` is .4rem, which is 6.4px. Tokens: xs 4.8px, sm 6.4px, md 8px, lg 100px. Most of the layout is square; the radii belong to small panels and pill controls.

## Components

- **nav-link**: Gt Pressura Mono 14.4px uppercase in #d3d3d3 with 0px 8px 0px 0px padding.
- **link**: the oversized menu item (HOME, WORK, SERVICES, STUDIO) in Mixtape Extra Condensed 160px.
- **Statement**: 96px uppercase text with underlined keywords.
- **Contact panel**: fields Name, Email, Phone, Interest (Design, Webflow development, Full package) and Message, with consent text and success and error messages.
- **"say hello" button**: a button in the closing call to action; its measured style was not extracted.
- **footer**: link lists, social links, legal and language switch.

Cookie notice and chat widget are not documented as components. Hover was not recorded.

## Design System Architecture

No public design system or brand guidelines exist: the opened page (https://studionamma.com) names no fonts or style guide. The page is built in Webflow, as its CDN image paths show. The de-facto system lives in 28 root variables: a light/dark theme pair resolved through `--_theme---background` and `--_theme---text`, responsive typography and line-height variables for h1 to h4, main and mono text, `--_responsive---container--padding` 1.25rem, `--_responsive---container--pixel` 10% and `--_responsive---other--border-radius` .4rem. Source: https://studionamma.com (measured rootVars).

## Do's and Don'ts

Do:
- Keep the near-black #111111 on #e4e4e4 as the default pair.
- Set display copy in Mixtape Extra Condensed 800, uppercase, with strongly negative tracking and a line height below the font size.
- Use Gt Pressura Mono 14.4px, 1.95px tracking, for labels and the top bar.
- Underline keywords inside statements rather than coloring them.

Don't:
- Use the blue chat button or the cookie panel as brand elements.
- Add bright accents on the interface; the only measured accent variable is the yellow, unseen on the home page.
- Round large containers; radii are 4.8px to 8px.
- Put Lato in the design; it is registered but not measured in use.

## Responsive Behavior

The 390px pass measured the h1 at 88px / 72px with -3.04px tracking. Measured sizes by weight: 14.4px (461), 19.2px (222), 46.8px (116) and 51.2px (79). Layout changes, menu behavior and the clock strip on mobile were not measured.

## Iteration Guide

1. Use canvas #e4e4e4 and ink #111111; add surface #fafafa only as a hero layer.
2. Register Mixtape Extra Condensed 800, Mixtape 400 and Gt Pressura Mono 300.
3. Set h1 at 208px/168px with -9.6px tracking; statement at 96px/96px with -2.88px.
4. Use the radius ladder 4.8, 6.4, 8 and 100px.
5. Dark mode and hover are not measured.
6. Re-run `node web/scripts/verify-designs.mjs --slug=studio-namma`.

## Content Notes for Reproduction

The French hero line on the opened page is "Studio créatif pour marques ambitieuses.", and the tagline "We craft bold design & clean Webflow." appears in the header. Project taglines: Matera Visual "le syndic du 21e siècle", Chance Visuals "rencontrer l'amour pro", Silvr "supercharge business loan". The closing invitation reads "Work with us if average isn't your thing. Drop it, we'll build it!" and the footer asks "Big project? Crazy thought? Or just feel like chatting?". The site also links its Awwwards entry from the header.
