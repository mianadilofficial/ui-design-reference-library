---
version: alpha
name: REF Digital
category: "Portfolio"
description: "REF Digital is a digital agency site: a greige canvas (#c4bab0) with black type (#000000), full-width royal-blue case-study bands (#10096b), Habitus light display type at 49.7778px with -1.49333px tracking, tiny uppercase Aeonik labels at 10.6667px, thin black-outlined buttons and no rounded corners anywhere (every computed radius is 0px)."
colors:
  canvas: "#c4bab0"
  ink: "#000000"
  primary: "#ffffff"
  surface-3: "#10096b"
typography:
  display:
    fontFamily: Habitus, Arial, Helvetica, "sans-serif"
    fontSize: 49.7778px
    fontWeight: 300
    lineHeight: 54.7556px
    letterSpacing: "-1.49333px"
  display-mobile:
    fontFamily: Habitus, Arial, Helvetica, "sans-serif"
    fontSize: 32px
    fontWeight: 300
    lineHeight: 35.2px
    letterSpacing: "-0.96px"
  heading:
    fontFamily: Aeonik, "Times New Roman", "serif"
    fontSize: 10.6667px
    fontWeight: 400
    lineHeight: 12.8px
    textTransform: uppercase
  subheading:
    fontFamily: Habitus, Arial, Helvetica, "sans-serif"
    fontSize: 28.4444px
    fontWeight: 300
    lineHeight: 31.2889px
    letterSpacing: "-0.853333px"
  body:
    fontFamily: Habitus, Arial, Helvetica, "sans-serif"
    fontSize: 14px
    fontWeight: 300
    lineHeight: 15.4px
    letterSpacing: "-0.14px"
  nav:
    fontFamily: Habitus, Arial, Helvetica, "sans-serif"
    fontSize: 8.88889px
    fontWeight: 300
    lineHeight: 13.3333px
rounded:
  none: 0px
spacing:
  s1: 0.89px
  s2: 1.07px
  s3: 3.56px
  s4: 5.33px
  s5: 5.69px
  s6: 5.87px
  s7: 7.11px
  s8: 8px
  s9: 10.67px
  s10: 13.33px
components:
  link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.ink}"
    padding: 0px 14.2222px
---

## Overview

The page title is "Move Fast. Build to Last | REF Digital Agency" and the measured URL is https://ref.digital/. The h1 is "Move fast, build to last." and the intro paragraph says "Some say move fast, break things. REF is a digital agency that believes we've broken enough things already." The about statement is "We help businesses navigate the digital-first economy with quick wins and long games. Because it's by doing good that we do well." and the work section says "Instead of adapting to change, we shape it." The tone is dry, confident and compact.

The page opens on a greige canvas with a giant slab "REF" wordmark built from black bars at the top left, a four-item menu (WORK, ABOUT, SERVICES, CAREERS) and two outlined buttons at the right (CONTACT and an accessibility icon). The headline sits right of center. Directly under it a full-width royal-blue band presents a case study slider ("Mission 2035", "REF · PHM · 0524") with three thumbnails and an interface mockup on a pale blue stage. Further down, the "ABOUT" and "WORK" sections use small square-bullet eyebrows at the far left and a text column starting at the page's midline, in a layout like a printed specification sheet.

## Colors

- **Canvas:** `#c4bab0`, a warm greige and the largest background area (2103).
- **Ink:** `#000000`, 593 characters of text. White `#ffffff` is the second text color (43 characters) used inside the blue band and for the invisible hero link layer.
- **Primary:** the generator assigned `#ffffff` because the only recorded link color is white; the site has no filled call-to-action button, and the buttons seen in the capture are outlined in black (border color `#000000`, 7 elements).
- **Blue band:** `#10096b`, a deep ultramarine, the background of the case-study slider (area 922).
- **White field:** `#ffffff` (area 1024) is the white work section.

The CSS variables also name a "greige" scale (`--color-greige-200: #e1ddd7` and `--color-greige-600: #9d958d`), which are palette steps defined in the stylesheet but not measured on rendered elements, so they are not tokens here.

## Typography

Two families are used: Habitus (weight 300) and Aeonik (weight 400), with Arial/Helvetica and Times New Roman fallbacks declared.

- **Display (h1):** Habitus, Arial, Helvetica, sans-serif; 49.7778px, weight 300, line height 54.7556px, letter spacing -1.49333px; 32px / 35.2px / -0.96px on mobile.
- **Subheading (h3, "E-commerce"):** Habitus 28.4444px, weight 300, line height 31.2889px, letter spacing -0.853333px (317 characters).
- **Body:** Habitus 14px, weight 300, line height 15.4px, letter spacing -0.14px.
- **Heading / eyebrow (h2, "ABOUT"):** Aeonik, "Times New Roman", serif; 10.6667px, weight 400, line height 12.8px, uppercase.
- **Navigation:** Habitus 8.88889px, weight 300, line height 13.3333px. On mobile the menu labels (MENU, CLOSE) are Aeonik 14px uppercase.

Letter spacing is tightened in proportion to size: -3 percent at 49.7778px and 28.4444px, -1 percent at 14px and 29.3333px with -0.293333px. The Tailwind variables `--tracking-tight: -.01em` and `--tracking-tighter: -.03em` match. Habitus and Aeonik are commercial typefaces. The `--font-serif` variable is declared with Times New Roman and `"serif"` fallbacks, but the rendered Aeonik text is a sans-serif grotesque in the capture.

## Layout

The desktop pass is 1280px wide and 4129px tall. The grid is two-column in spirit: the left 40 percent holds the wordmark or a tiny eyebrow label, the text column starts at the midline (the h1 is 619px wide). Large vertical gaps separate sections. The blue band spans the full width and is 720px tall as measured on its overlay link. The footer is 333px high with uppercase Aeonik links (WORK, ABOUT, SERVICES, CONTACT) separated by bracket glyphs and padding `0px 14.2222px`.

Measured gaps: 14.2222px (17), 7.11111px (9), 21.3333px (6), 13.3333px, 5.86667px, 0.888889px, 5.33333px, 39.1111px. Paddings: 14.2222px (14), 8px, 10.6667px, 3.55556px, 7.11111px, 17.7778px, 5.68889px, 28.4444px. The stylesheet declares `--size-ref: 375` and `--breakpoint-xs: 375px`, `--breakpoint-xl: 1280px`.

## Elevation & Depth

No box shadow was measured. The only shadows in the CSS are Tailwind's empty ring variables and an `inset 0 0 0 4em var(--page-bg-color)` used to colour autofill states. The product mockups inside the blue band show soft shadows, but they are part of the case-study imagery and not interface tokens. Hierarchy is made with color fields (greige, blue, white) and type size.

## Shapes

`borderRadii` is empty: every rendered element has a computed radius of 0px. Buttons, bands and image frames are sharp rectangles; the only round shapes in the capture are inside project imagery. This is recorded as `rounded.none: 0px`.

## Components

- **Outlined button:** small uppercase Aeonik text, 1px black border, no fill, square corners, used for "CONTACT" at the top right and "SEE WHAT REF IS ALL ABOUT" and "SEE OUR WORK" in the sections. The extractor did not classify these as call-to-action buttons, so their exact padding and height were not recorded.
- **Link / menu:** Habitus 8.88889px in black (WORK, ABOUT, SERVICES, CAREERS) and Aeonik 10.6667px uppercase in the header and footer. Bracket glyphs "[ ]" separate items in the footer and carry the case-study slider controls.
- **Eyebrow:** a small black square bullet followed by an uppercase word (ABOUT, WORK).
- **Case-study slider:** blue `#10096b` band with a title at left ("Mission 2035"), a code at right ("REF · PHM · 0524"), three thumbnails in the center with the active one outlined, and bracketed arrow controls.
- **Footer:** black Aeonik 10.6667px uppercase links, height 333px.

Imagery and voice: the work imagery is product-interface mockups (an energy-mix dashboard with gauges for greenhouse gases and costs, an energy-source picker, an isometric map card) shown on a pale blue stage, and a white work index listing client names in tiny uppercase type at the left with project codes in the same small type at the right, with a stack of colorful project photographs in the center. The microcopy is short and dry, in sentence case for statements and uppercase for labels, and project metadata is formatted like catalog codes.

## Design System Architecture

No public design-system documentation or brand guideline was opened. The CSS is a Tailwind v4 build with a custom theme: `--font-sans`, `--font-serif`, `--font-mono`, `--font-code`, `--tracking-tight`, `--tracking-tighter`, `--leading-snug: 1.2`, `--leading-normal: 1.3`, `--leading-relaxed: 1.4`, `--text-h5-mobile: 1rem`, `--ease-power2Out: cubic-bezier(.32,.94,.6,1)`, `--spacing-grid-margin`, `--size-ref: 375` and a greige palette. The extraction data is in `web/data/extracted/ref-digital.json` for https://ref.digital/.

## Do's and Don'ts

- Do use the greige `#c4bab0` canvas with black type and full-width ultramarine `#10096b` bands for case studies.
- Do set display text in Habitus 300 with strong negative tracking and small labels in uppercase Aeonik.
- Do keep corners square; every measured radius is 0px.
- Do outline buttons in 1px black and keep them small.
- Don't add fills, shadows or rounded corners to interface elements.
- Don't use more than the three colors measured (greige, black, blue) plus white.
- Don't enlarge navigation text; it is 8.88889px to 10.6667px by design.

## Responsive Behavior

The 390px pass measured: h1 32px with line height 35.2px and -0.96px tracking, 358px wide; h2 eyebrow 10px with line height 12px; body 14px / 15.4px, 358px wide; the header shows "MENU" and "CLOSE" and bracket glyphs in Aeonik 14px uppercase and is 48px high. Layout of the sections, the slider and the footer at mobile width were not measured.

## Iteration Guide

1. Canvas `#c4bab0`, ink `#000000`, blue band `#10096b`, white section `#ffffff`.
2. Display: Habitus 300, 49.7778px / 54.7556px with -1.49333px tracking.
3. Labels: Aeonik 400, 10.6667px uppercase.
4. Buttons: outlined 1px black, square.
5. Sections: eyebrow with a square bullet at the left, text starting at the midline.
6. Re-measure with `node web/scripts/extract-tokens.mjs --slug=ref-digital --url=https://ref.digital/ --force --no-motion` and gate with `node web/scripts/verify-designs.mjs --slug=ref-digital`.
