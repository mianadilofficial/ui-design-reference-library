---
version: alpha
name: Studio375
category: "Portfolio"
description: "Italian communications and web agency: gradient photographic hero with white text, white #ffffff body, #808080 grey labels, thin hatton serif at weight 200 for statements (64px) with neue sans 20px for navigation, 2px white outlined pill buttons with 29px radius."
colors:
  canvas: "#ffffff"
  ink: "#808080"
  primary: "#ffffff"
  surface-black: "#000000"
  accent-cyan: "#11baff"
  accent-magenta: "#cc0597"
typography:
  display:
    fontFamily: hatton, "hatton Fallback"
    fontSize: 46.08px
    fontWeight: 200
    lineHeight: 46.08px
  display-mobile:
    fontFamily: hatton, "hatton Fallback"
    fontSize: 36px
    fontWeight: 200
    lineHeight: 45px
  heading:
    fontFamily: hatton, "hatton Fallback"
    fontSize: 64px
    fontWeight: 200
    lineHeight: 62.08px
  subheading:
    fontFamily: hatton, "hatton Fallback"
    fontSize: 66.56px
    fontWeight: 200
    lineHeight: 66.56px
  body:
    fontFamily: neue, "neue Fallback"
    fontSize: 20.48px
    fontWeight: 400
    lineHeight: 34px
  nav:
    fontFamily: neue, "neue Fallback"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 24px
  link:
    fontFamily: neue, "neue Fallback"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 17.76px
  button-secondary:
    fontFamily: neue, "neue Fallback"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 20px
    textTransform: uppercase
rounded:
  xs: 26px
  sm: 29px
  pill: 9999px
spacing:
  s1: 3px
  s2: 4px
  s3: 6px
  s4: 7px
  s5: 10px
  s6: 30px
  s7: 50px
  s8: 100px
  s9: 150px
components:
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    padding: 4px 7px
    height: 32px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav:
    textColor: "{colors.canvas}"
    padding: 50px 50px 0px
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.canvas}"
---

## Overview

Studio375 (title "Studio375 | Communications, Web, and Graphic Design Agency | Vicenza", language en) is an Italian communications, graphic design and web agency. The opened page introduces it as "Studio_375_, communications, graphic design, and web agency based in Vicenza" while the footer address is in Thiene (VI); the page itself shows both, and both are reported as found. The home page is long (measured scrollHeight 8968 at 1280px). It opens on a full-viewport hero: a gradient photograph of a bead bracelet on a stone in magenta, teal and green, a spiral-3 logo mark top left, "Studio375" at top center, an IT - EN language toggle top right, two small link groups (Design, Dev, Digital and Works, Studio, Contact) and the headline "The creative studio you've been eager to meet." set in a thin serif with the words "creative" and "meet" in italic, in a salmon-to-mint gradient. "BASED IN ITALY / AVAILABLE WORLDWIDE" sits at lower right.

Below the hero the page is white with small grey section labels ("Info", "Works") and large empty areas in the capture; the opened page text lists the Info paragraph, five featured works (Tamashii, Cantina Beato Bartolomeo, Dimore Palladiane, Mioni Outdoor, Intrapan), a three-column services list (Design, Dev, Digital), a recognitions block with five awards for Sperotto S.p.A., and a contact footer ("Got a vision? Let's make it happen!"). A loading screen reads "ciaohello," "Loading" and a percentage counter. The voice is warm and welcoming, with Italian touches.

## Colors

Measured colors are few and the page switches between a saturated hero and a white body.

- **Canvas #ffffff**: the page background below the hero.
- **Ink #808080**: mid grey, used for the small section labels ("Info", "Works"; 55 characters weighted). It is the only measured text color besides white and meets the gate's readability check on #ffffff.
- **Primary #ffffff**: the color of nearly all text (1047 characters weighted) and the outline of the "About" pill; it is the action color, there is no filled CTA.
- **surface-black #000000**: the largest background area (4096), behind the hero and loader layers.
- **accent-cyan #11baff** (area 1025) and **accent-magenta #cc0597** (area 1024): the two saturated fills measured on the page; the hero's gradient and the blue cursor dot at the top left corner of the capture show these hues.

The salmon and mint gradient on the hero headline is an effect painted over text and was not measured as discrete color tokens.

## Typography

Two families, each registered with a fallback face: "hatton" (weight 200 normal and italic) for display and "neue" (400 and 500) for text.

- **display**: hatton 46.08px / 46.08px, weight 200 (h1 "We are Studio375, communications, graphic design,").
- **heading**: hatton 64px / 62.08px, weight 200 (h2 "The creative studio you've been eager to meet.").
- **subheading**: hatton 66.56px / 66.56px, weight 200.
- **display-mobile**: hatton 36px / 45px (390px pass).
- **body**: neue 20.48px / 34px, weight 400.
- **nav**: neue 20px / 24px, weight 500.
- **link**: neue 16px / 17.76px, weight 500.
- **button-secondary**: neue 20px / 20px, weight 400, uppercase.

Other measured sizes: 13px (174 characters weighted), 9.2px with 2px tracking (32 characters, the uppercase micro labels). Weights: 500 (657), 400 (376), 200 (69). The commercial names of "hatton" and "neue" are not given on the pages opened; hatton is a serif display face and neue a neo-grotesque in the capture.

## Layout

A fixed header, then a hero with generous side margins: the headline starts at about 112px from the left edge in the capture. Navigation groups sit in the center of the hero. The nav padding is 50px 50px 0px (17 uses of 50px padding), and other paddings are 100px (3), 7px, 4px, 6px and 10px. Spacing tokens measured: 3, 4, 6, 7, 10, 30, 50, 100 and 150px. Below the hero, sections begin with small grey labels at the left and content spans the remaining width. The root declares only `--vh: 8px`.

## Elevation & Depth

No shadows measured. Depth is photographic: a colored gradient with a shallow-focus product shot, glitch-like block slices over the beads, and gradient text. Do not add CSS shadows.

## Shapes

Radii: 29px (5 elements, the pill outline button), 26px (2) and 50% (1, a circle). The "About" button is a 2px white outlined pill with radius 29px and padding 4px 7px at 32px height. Photos are square-cornered.

## Components

- **button-secondary** ("About"): transparent, 2px solid #ffffff border, neue 20px uppercase, radius 29px, padding 4px 7px, height 32px. Its text is rendered as doubled letters in the source for a roll animation.
- **nav**: "Works, Studio375, Contact, IT - EN" at 20px weight 500, white, padding 50px 50px 0px.
- **link**: neue 16px weight 500 in white (Design, Dev, Digital).
- **Language toggle**: IT - EN.
- **Ticker**: "DISCOVER" repeated with a view control.
- **Footer**: "CALL US", phone, "MEET US", address, social links, privacy and cookie policy links.
- **Work list**: project names with service tags (for example "Website, Graphic design, SEO").

Hover states were not recorded (hover list empty).

## Design System Architecture

No public design system or brand guidelines exist: the opened page (https://375.studio/en) names no fonts or guidelines; it references only a logo file and images. The de-facto system is tiny: one root variable (`--vh: 8px`), two font families with generated fallback faces ("hatton Fallback", "neue Fallback", the pattern used by font-loading tooling), white text, grey labels and one outlined pill. Source: https://375.studio/en (measured rootVars).

## Do's and Don'ts

Do:
- Pair a thin serif (hatton, weight 200) for statements with a medium neo-grotesque (neue) for navigation.
- Use white text over saturated gradient photography, and #808080 grey labels on white.
- Italicize a word or two inside the headline.
- Use 2px white outlines for secondary buttons.

Don't:
- Use heavy weights for the serif; the display weight is 200.
- Add drop shadows or filled buttons.
- Treat the cyan and magenta as UI fills without measuring them in context.

## Responsive Behavior

In the 390px pass the h1 measures 36px / 45px; sizes by character weight are 18px (307), 24px (284), 12px (126) and 16px (104). The opened page lists a mobile menu with "Menu" and "Close" labels and the items Works, Studio, Contact, Design, Dev, Digital and IT-EN; its layout was not measured.

## Iteration Guide

1. Start with a gradient hero, white text, canvas #ffffff below it.
2. Load hatton (200, 200 italic) and neue (400, 500).
3. Set hero heading 64px/62.08px and body 20.48px/34px.
4. Build the outlined pill: 2px white, radius 29px, padding 4px 7px.
5. Hover not measured.
6. Re-run `node web/scripts/verify-designs.mjs --slug=studio375-2`.

## Content Notes for Reproduction

Service lists on the opened page: Design (brand identity, graphic design, web design, packaging design, user experience, user interface, art direction, iconography, illustration, 3D), Dev (front-end, back-end, e-commerce, digital publishing, cloud software, app) and Digital (web marketing, mail marketing, social media, digital advertising, communication strategy, photo, video, editorial, SEO and SEM). The awards listed are Orpetron Site of the Day, CSS Design Awards Site of the Day, UX Design Award, UI Design Award and Innovation Design Award, all for Sperotto S.p.A. The legal line reads "© 2026 Studio375 S.r.l." with links to Privacy Policy and Cookie Policy.

Reproduction detail: the five featured works are tagged with the services delivered, such as "Website, Graphic design, SEO", so each work row pairs a project name with a short comma-separated service list in the small neue size. The nav appears both in the header (Works, Studio375, Contact with the IT - EN toggle) and as two stacked link groups in the hero (Design, Dev, Digital and Works, Studio, Contact). Spacing tokens are measured values: s1 3px, s2 4px, s3 6px, s4 7px, s5 10px, s6 30px, s7 50px, s8 100px and s9 150px.
