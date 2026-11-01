---
version: alpha
name: Studio DADO
category: "Architecture & Interiors"
description: "Hospitality interior design studio site in Coral Gables: #ffffff canvas, #000000 ink, #5d5346 warm brown footer, uppercase high-contrast serif display at 138.24px with -2.7648px tracking and a 17.0667px sans text face, every corner 0px radius, WordPress-built."
colors:
  canvas: "#ffffff"
  page-body: "#5d5346"
  ink: "#000000"
  primary: "#ffffff"
  text-input-bg: "#554d42"
typography:
  display:
    fontFamily: disp
    fontSize: 138.24px
    fontWeight: 400
    lineHeight: 110.592px
    letterSpacing: "-2.7648px"
    textTransform: uppercase
  display-mobile:
    fontFamily: disp
    fontSize: 67.9104px
    fontWeight: 400
    lineHeight: 54.3284px
    letterSpacing: "-2.71642px"
    textTransform: uppercase
  subheading:
    fontFamily: sans
    fontSize: 17.0667px
    fontWeight: 400
    lineHeight: 20.48px
    letterSpacing: "-0.341333px"
  body:
    fontFamily: sans
    fontSize: 25.6px
    fontWeight: 400
    lineHeight: 26.112px
    letterSpacing: "-0.512px"
rounded:
  none: 0px
spacing:
  s1: 1.71px
  s2: 4.27px
  s3: 8.53px
  s4: 17.07px
  s5: 25.6px
  s6: 34.13px
  s7: 51.2px
  s8: 128.92px
  s9: 153.6px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.subheading}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.subheading}"
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.subheading}"
    padding: 17.0667px 25.6px
    height: 55px
  footer:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.canvas}"
    padding: 25.6px 0px 34.1333px
    transform: matrix(1, 0, 0, 1, 0, -197.5)
---

## Overview

Studio DADO (title "Home - Studio Dado", language en-US) is the website of an interior design studio for hospitality based in Coral Gables, Florida, per the address on the opened page. The tagline is "Form Follows Feeling", set huge over a full-bleed photograph of a marble spa interior, followed by the statement "Empathy shapes everything we create, from the first impression to the final detail." The mission line reads "We create innovative and thought-provoking environments that foster deeper human experiences."

The measured page is 1280px wide and 6130px tall. Sections on the opened page: hero, an About block ("Interior design for hospitality" with two paragraphs on empathy and client relationships), Featured Projects (AP House Miami, Allura Vista Suite, Serene Spa and Wellness, Grand Atrium), a blog block (three articles dated 2026), a Studio Dado block, a "Work together?" contact call, an Updates newsletter signup and a footer sitemap. The site is built on WordPress, visible from `--wp-*` variables and wp-content image paths. The voice is calm and first-person plural; the art direction relies on photography of hotel interiors, white space and large serif capitals.

## Colors

The page is white, black and a single warm brown.

- **Canvas #ffffff**: the largest background (area 7735).
- **page-body #5d5346**: a warm brown, the second-largest area (7156), used for the footer panel.
- **Ink #000000**: the most-read text color (1707 characters weighted), for headings and paragraph copy on white.
- **Primary #ffffff**: no colored CTA exists; white is the color of navigation, link text and the hero overlay text on photography (691 characters weighted).
- **text-input-bg #554d42**: the newsletter field fill in the footer, slightly darker than the footer.

Also measured as backgrounds are #1b1b1c and #1b1b1c1a, a near-black and a 10% tint used for overlays. Root variables beginning `--wp-admin-theme-color` (#007cba and similar) belong to WordPress admin tooling and are not brand colors.

## Typography

The page loads two web fonts, registered under the family names "disp" (display) and "sans" (text). Their commercial names are not stated in the stylesheet read or on the pages opened. The display face is a high-contrast serif in capitals as seen in the capture; the text face is a sans serif.

- **display**: disp 138.24px / 110.592px, letter-spacing -2.7648px, uppercase (h1 "FORM FOLLOWS FEELING", h2 "FEATURED PROJECTS").
- **display-mobile**: disp 67.9104px / 54.3284px, -2.71642px (390px pass).
- **body**: sans 25.6px / 26.112px, letter-spacing -0.512px (the statement paragraphs).
- **subheading**: sans 17.0667px / 20.48px, letter-spacing -0.341333px (nav, links, labels and long-form paragraphs).

Other measured sizes are 59.7333px (-1.19467px tracking, the large statement lines), 11.9467px (small labels like "About"), and 34.1333px. Weights are 400 (2371 characters), 700 (16) and 500 (11). Tracking is negative throughout.

## Layout

The grid is a three-column editorial layout seen in the capture: a left column with small labels ("Interior design for hospitality"), a middle column starting near the center with the body text and thumbnail, and a right column with arrow links ("Approach →", "All projects →"). Fine hairlines separate bands. Measured gaps are 17.0667px (20 uses), 4.26667px, 51.2px, 34.1333px; paddings include 17.0667px, 25.6px, 153.6px and large side paddings of 208.078px and 444.297px. The featured projects use a row of one wide image and two or more narrow images. The root declares `--size: 402` and `--clamp: 13px`.

## Elevation & Depth

None measured: no box shadows. Depth is imagery: full-bleed photographs with white overlay type, plus translucent near-black tint areas. The footer is a flat brown block. Do not add shadows or gradients.

## Shapes

The border radius list is empty: every rendered element computes 0px. Image tiles, inputs and the footer are sharp rectangles. The DADO logo is a circle-based monogram (four rounded letter forms) drawn as an image, not a CSS radius.

## Components

- **Nav**: "Studio DADO" at left, the monogram logo at center, a stacked center list (Projects, Approach, About Us) and right list (News, Blog, Contact), in white sans 17.0667px over the hero photograph. Hover measured: the Contact link's opacity goes from 0.9132 to 1; color and decoration do not change.
- **Link**: sans 17.0667px, with a trailing arrow glyph for "Approach →" and "All projects →".
- **text-input**: newsletter field with fill #554d42, white text, padding 17.0667px 25.6px, height 55px and an arrow button.
- **footer**: fill #5d5346, white text, padding 25.6px 0px 34.1333px, with the "Work together?" call, contact block, sitemap, Instagram and LinkedIn links, "© Studio DADO 2025", Privacy policy and Back to top. Its recorded transform includes a -197.5px vertical translation, a scroll-driven reveal.
- **Project card**: image with a category label (Featured Project, Guestrooms & Suites, Spa & Fitness, Public Spaces).

## Design System Architecture

No public design system or brand guidelines are published: the page opened (https://www.studiodado.com) mentions none and shows only the WordPress theme. The de-facto system is a WordPress theme with two registered fonts ("disp", "sans"), a clamp variable `--clamp: 13px`, `--size: 402`, standard `--wp--preset--font-size--normal` 16px and `--wp--preset--font-size--huge` 42px, and the default WordPress admin variables. Sixteen root variables were recorded. Text sizes are fluid, as the odd decimals (17.0667px, 25.6px, 138.24px) indicate a viewport-proportional scale rather than fixed steps. Source: https://www.studiodado.com (measured rootVars).

## Do's and Don'ts

Do:
- Use white and black as the base with the warm brown #5d5346 for the footer and #554d42 for form fields.
- Set display headings in uppercase serif with strong negative tracking and tight line height (below the font size).
- Lay copy on a three-column editorial grid with small labels at the left.
- Lead with interior photography and overlay white text.

Don't:
- Round corners or add shadows; every radius measures 0px.
- Add a saturated accent color; none is measured.
- Use the WordPress admin blue as a brand color.
- Use positive letter spacing.

## Responsive Behavior

In the 390px pass the h1 measured 67.9104px / 54.3284px with -2.71642px tracking and 0px 9.70149px 29.1045px padding. The most-read sizes were 19.403px (1204 characters weighted), 27.1642px (674), 38.806px (221) and 13.5821px (148), which are the desktop sizes scaled to the narrower viewport. Layout changes (column collapse, menu behavior) were not measured.

## Iteration Guide

1. Set canvas #ffffff, ink #000000, brown #5d5346 for the footer only.
2. Register two fonts: a serif capital display at 138.24px/110.592px and a sans at 17.0667px with -0.341333px tracking.
3. Build the nav in white over a hero photo.
4. Keep every corner square.
5. Hover: only the opacity change on links is measured (0.9132 to 1).
6. Re-run `node web/scripts/verify-designs.mjs --slug=studio-dado`.

## Content Notes for Reproduction

Blog titles on the opened page are "Slow Travel and the Future of Cruise Design" (Jul 08, 2026), "The Return of Authenticity" (Apr 27, 2026) and "C+F Cover Story: A Decade of Redefining Cruise Design" (May 31, 2026). The newsletter block is headed "Updates" with the line "Get occasional updates on all things DADO." and a privacy-policy consent note. The contact block lists 800 South Douglas Road, Suite 130, La Puerta Del Sol, Coral Gables, FL 33134 and a phone number. These details are page content; they do not affect the tokens.

The nav labels, in order on the opened page, are Projects, Approach, About Us, News, Blog and Contact, and the same list repeats as the footer sitemap with Home added. The hero repeats the label "Interior design for hospitality" at left and an "Approach →" link at right, a pattern that returns in the About band below. Project categories shown on the featured cards are Featured Project, Guestrooms & Suites, Spa & Fitness and Public Spaces, each set as a small sans label beneath a project image. In a rebuild, preserve the lowercase-and-capitalized sentence case of the navigation and keep display headings in uppercase only.
