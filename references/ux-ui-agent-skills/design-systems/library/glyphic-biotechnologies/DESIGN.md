---
version: alpha
name: "Glyphic Biotechnologies"
category: "Tech & AI"
description: "Glyphic Biotechnologies, a protein sequencing company: white #ffffff canvas with #2c2d32 graphite ink and #e8e9f5 lavender-white on dark, a custom fontPrimary face at 64.5714px weight 500 with -2.58286px tracking, 15px body, hairline rules, and pale green 3D molecule imagery."
colors:
  canvas: "#ffffff"
  ink: "#2c2d32"
  primary: "#2c2d32"
  on-primary: "#e8e9f5"
  surface-grey: "#f2f2f2"
  ink-muted: "#696a6f"
  ink-faint: "#a4a4a4"
  hairline: "#ffffff1a"
typography:
  display:
    fontFamily: fontPrimary, "fontPrimary Fallback"
    fontSize: 64.5714px
    fontWeight: 500
    lineHeight: 64.5714px
    letterSpacing: "-2.58286px"
  display-mobile:
    fontFamily: fontPrimary, "fontPrimary Fallback"
    fontSize: 34.375px
    fontWeight: 500
    lineHeight: 34.375px
    letterSpacing: "-1.375px"
  subheading:
    fontFamily: fontPrimary, "fontPrimary Fallback"
    fontSize: 32.5714px
    fontWeight: 400
    lineHeight: 35.8286px
    letterSpacing: "-0.651429px"
  body:
    fontFamily: fontPrimary, "fontPrimary Fallback"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 18px
  input:
    fontFamily: fontPrimary, "fontPrimary Fallback"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 26.4px
    letterSpacing: "-0.44px"
rounded:
  xs: 4px
  sm: 5px
  md: 6px
  lg: 10px
  none: 0px
  pill: 9999px
spacing:
  s1: 1.43px
  s2: 1.5px
  s3: 2px
  s4: 3px
  s5: 5px
  s6: 6px
  s7: 8px
  s8: 9px
  s9: 10px
  s10: 12px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    height: 48px
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    height: 48px
  link:
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 10px 0px
    height: 47px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.none}"
    padding: 20px 20px 0px
---

## Overview

Glyphic Biotechnologies (glyphic.bio, "Glyphic Biotechnologies – Next Generation Protein Sequencing Company") presents ProSE, "Protein Sequencing by Expansion", as a precise and calm scientific product. The capture opens with a full-bleed 3D render of pale green, cream and lavender spheres on translucent chains rising from a perforated white surface, with small labelled tags (LKY, TGYVE, TGYVERSPL) pointing at peptide beads. A compact translucent header floats at the top: a logo pill "glyphic//bio" at the left, a group of three pills (Technology, About Us, Careers) at the center and a "Contact Us" pill with an arrow at the right. The headline "Protein Sequencing by Expansion (ProSE™)" is set very large in graphite at the top left; a short paragraph, "Advancing life science discovery with massively parallel, single-molecule proteome sequencing", with underlined links and a dark "Turn the Page" button sits at the top right of the hero, and a faint "Scroll" control at the far right.

Below the hero, a numbered section "1 Introducing ProSE™" leads to a two-column explainer: a bead-ring illustration on the left and a three-step accordion on the right (1 Sample Preparation, 2 Molecular Expansion, 3 Amino Acid Sequencing) with the active step in dark text and inactive steps greyed, a "2026" marker and a dark "Contact Us" button with a square arrow. Thin hairlines divide everything. The voice is concise and scientific: short claims about "precision, scalability, and accessibility".

## Colors

- **Canvas** `#ffffff` is the dominant background (10865 area units); **surface grey** `#f2f2f2` is used for tag and label chips and quiet bands.
- **Ink and primary** `#2c2d32`, a blue-tinted graphite, carries 2401 characters of text, the fill of dark buttons and the footer (1780 area units), so it is both ink and primary.
- **On-dark** `#e8e9f5`, a pale lavender-white, is the text color on graphite surfaces (360 characters); `#ffffff` also appears on dark areas (246 characters).
- **Ink muted** `#696a6f` (342 characters) for secondary copy, and **ink faint** `#a4a4a4` (303 characters) for inactive accordion steps.
- **Hairline** `#ffffff1a` is the measured thin line on dark surfaces; translucent chips use `#383b3e1a`, `#2c2d321a` and `#383b3e0d`, and a near-opaque `#383b3ecc`.

The color of the imagery (sage green, mint, butter yellow, lavender) is photographic and is not tokenized.

## Typography

Only one family is used: `fontPrimary` (4530 characters), with a generated "fontPrimary Fallback" and loaded in 400 and 500. The root exposes `--font-primary`. Its letterforms in the capture are a neutral grotesque. Weights: 400 (3921 characters) and 500 (609).

- **Display**: 64.5714px, weight 500, line height 64.5714px, letter spacing -2.58286px (34.375px with -1.375px tracking on the 390px mobile pass).
- **Subheading**: 32.5714px, weight 400, line height 35.8286px, letter spacing -0.651429px.
- **Body**: 15px, weight 400, line height 18px.
- **Input**: 22px, weight 400, line height 26.4px, letter spacing -0.44px.

Other measured sizes: 14px (573), 21.4286px (217), 168.571px (46 characters, the giant section numerals) and 14.2857px. Line height equals font size in the display style, so the large type sits as compact blocks. A font substitute is not named by the site beyond the generated fallback.

## Layout

The page is 1280px wide and 13091px tall. The header height is `--header-h` 5rem in the root. The hero is a full-viewport image with text anchored top-left and top-right. Numbered sections use a wide first column for the numeral and a title offset to the right, with 1px rules separating sections. The explainer splits into a left illustration and a right text column with a vertical hairline between them. Measured spacing: 1.43, 1.5, 2, 3, 5, 6, 8, 9, 10 and 12px; the footer padding is 20px 20px 0 and the input padding 10px 0.

## Elevation & Depth

No drop shadows are measured. The only box-shadows are inset 1px outlines: `rgb(44, 45, 50) 0px 0px 0px 1px inset` (four uses) and `rgb(0, 0, 0) 0px 0px 0px 1px inset` (once), used as hairline outlines on controls. Depth is photographic: depth-of-field blur in the hero, translucent chips over imagery and semi-transparent layers.

## Shapes

Radii: 4px (53 uses), 5px (19), 10px (4), 100% (3, circular dots) and 6px (1). The detected primary CTA role itself has a 0px radius; the visible small chips, tag labels and header pills use the 4px and 5px radii. Tokens: `none` 0px, `xs` 4px, `sm` 5px, `md` 6px, `lg` 10px and `pill` 9999px.

## Components

- **Primary button**: `#2c2d32` fill, `#e8e9f5` 15px text, 48px high, paired with a square arrow button ("Contact Us", "Turn the Page").
- **Header pills**: translucent chips with 15px text for Technology, About Us, Careers and Contact Us.
- **Accordion step**: a small numbered square, a 32.5714px title, a body paragraph in 15px and a dot indicator at the right; inactive steps use `#a4a4a4`.
- **Annotation tags**: small translucent labels with a dot and thin connector line over the hero image.
- **Text input**: 22px, 47px high, 10px vertical padding, no border box (underline-style).
- **Footer**: `#2c2d32` background, `#e8e9f5` text, a "JOIN OUR MAIL LIST" subscribe form and information links.

## Design System Architecture

No public Glyphic design system or brand guideline was found; the measured page links to none. The root has only two CSS custom properties, `--header-h` (5rem) and `--font-primary`, so the system is a minimal hand-built stylesheet: one typeface in two weights, a graphite and white palette with a pale lavender for dark surfaces, 1px hairlines, tiny radii and scientific imagery. Typography does most of the structural work: huge numerals, large negative tracking and a strong size jump from 15px to 64.5714px.

## Do's and Don'ts

- Do use white `#ffffff` with graphite `#2c2d32`, and `#e8e9f5` on dark.
- Do set display type at weight 500 with negative tracking and line height equal to size.
- Do separate sections with 1px hairlines and large numerals.
- Do use calm green-toned 3D imagery with labelled annotations.
- Don't add accent hues; the interface itself is monochrome.
- Don't use drop shadows; only 1px inset outlines are measured.
- Don't round corners beyond 10px.

## Responsive Behavior

The mobile pass at 390px recorded: h1 "Protein" at 34.375px, weight 500 (111px wide, 34px high); body text at 15px, weight 400 (350px wide); and the primary button "Contact Us" 350px wide and 48px high at 15px. Mobile sizes by character are 15px (2669), 34.375px (604), 14px (573), 24.625px (290), 18.25px (217), 18px (78) and 49.375px (46). Column changes and menu behavior are not measured.

## Iteration Guide

1. Begin with a full-bleed image and `{typography.display}` in `{colors.ink}` at the top left.
2. Use numbered sections with 1px rules and `{typography.subheading}` for step titles.
3. Use dark `{components.button-primary}` with an adjoining arrow button.
4. Keep inactive content in `{colors.ink-faint}`.
5. Run `node web/scripts/verify-designs.mjs --slug=glyphic-biotechnologies` after changes.

Imagery and microcopy: the capture shows rendered 3D scenes in a soft, desaturated palette (sage, mint, pale yellow and lavender spheres with translucent cube-like chains, a perforated white plate with blurred depth of field), a ring of beads as the explainer diagram, and short peptide strings in uppercase monospace-like labels. Copy is declarative and technical: "Protein Sequencing by Expansion (ProSE™)", "Introducing ProSE™", step names such as Sample Preparation, Molecular Expansion and Amino Acid Sequencing, and the supporting sentence that the product "will revolutionize proteomics by delivering unprecedented precision, scalability, and accessibility". The button label "Turn the Page" invites scrolling instead of using a generic "Learn more".
