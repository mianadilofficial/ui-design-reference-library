---
version: alpha
name: "LIKOVA"
category: "Architecture & Interiors"
description: "LIKOVA (Class A Business Center, likova.space): all-uppercase TT Norms Pro at weights 400 and 450, white canvas #ffffff against deep navy #070b20 sections, a single 10px radius, architectural photography with a large wide-tracked wordmark."
colors:
  canvas: "#ffffff"
  ink: "#070b20"
  primary: "#070b20"
  surface-3: "#e3e6eb"
  ink-secondary: "#ffffff99"
  ink-3: "#ffffff4d"
  ink-5: "#57566a"
  ink-6: "#232739"
  hairline: "#ffffff33"
typography:
  display:
    fontFamily: "\"TT Norms Pro\", Helvetica, Arial, sans-serif"
    fontSize: 17px
    fontWeight: 450
    lineHeight: 20px
    letterSpacing: "-0.17px"
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"TT Norms Pro\", Helvetica, Arial, sans-serif"
    fontSize: 11px
    fontWeight: 450
    lineHeight: 15px
    letterSpacing: 0.44px
    textTransform: uppercase
rounded:
  xs: 10px
spacing:
  s1: 3px
  s2: 5px
  s3: 6px
  s4: 10px
  s5: 18px
  s6: 19px
  s7: 20px
  s8: 30px
  s9: 40px
  s10: 45px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.display-mobile}"
    rounded: "{rounded.xs}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.display-mobile}"
---

## Overview

LIKOVA presents itself with the page title "Class A Business Center" and a hero line, "WHERE FUTURE GAINS MOMENTUM". It is an office-leasing and architecture showcase. The capture shows a white top bar with a menu glyph at the left and the items SELECT OFFICE SPACE, a heart counter (0) and CONTACT US at the right; below it a very large, widely letter-spaced LIKOVA wordmark sits in a white block that overlaps a dusk photograph of a glass and bronze-fin office building. A small round dark chevron button sits at the edge of the white block. Further down the 45835px-tall document the sections include OUR TEAM, ARCHITECTURE, and LOCATION headings and a line reading "ELEGANT MINIMALIST INTERIORS AND DESIGNER FURNITURE REALIZED".

The mood is formal and restrained: the language is uppercase throughout, the palette is navy, white and cool grey, and photography of the building does the persuading. The measured document is much taller than the 800px viewport recorded for the page, so most of the story is below the capture, which only shows the first screen. A cookie notice ("THIS WEBSITE USES COOKIES" with an ACCEPT button) was present in the capture and is not part of the brand UI documented here.

Microcopy is terse and nominal. Navigation labels are verbs or nouns without sentences (SELECT OFFICE SPACE, CONTACT US), section titles are single words (OUR TEAM, ARCHITECTURE, LOCATION), and the one slogan in the capture is two short lines. There is no body paragraph copy in the first screen; the measured text-color weights show that most characters on the whole page are white or translucent white, which means the dark sections hold the bulk of the text. Imagery is photorealistic architectural rendering lit in the blue hour, with warm interior light against a cool sky, and the same blue-navy appears again in the palette (#070b20), so photography and interface tones are tied together.

## Colors

The most area belongs to a deep navy-black, #070b20 (14370 in the area measurement), then white #ffffff (5510), a cool light grey #e3e6eb (2386) and a slightly lighter navy #0e1224 (1024). Because the page opens white and the body background is white, canvas is #ffffff; the navy fills the large photographic and dark sections. Text is mostly white at three opacities: #ffffff99 (787 characters), #ffffff (439) and #ffffff4d (347). On light areas the text is navy #070b20, a purple-grey #57566a and a dark slate #232739 (also measured at 60 percent as #23273999). The only borders are white at 20 percent opacity, #ffffff33, and slate at 20 percent, #23273933.

The page defines no separate action color. The extractor found no primary call-to-action, so primary is set to the navy #070b20, the same value as ink, which matches the dark ACCEPT button style seen in the capture. The root variables expose button tokens such as --t-button-tab-active-background #070b20, --t-background-alternative #e3e6eb and --t-heading #232739, and --c-blue-deep #57566a, which confirm the measured greys.

- Canvas #ffffff; surface-3 #e3e6eb.
- Ink and primary #070b20; ink-5 #57566a; ink-6 #232739.
- White text tones: #ffffff99 (secondary), #ffffff4d (tertiary).
- Hairline #ffffff33.

## Typography

One family: TT Norms Pro, with Helvetica and Arial as fallbacks, loaded at weights 400 and 450 (1681 of the measured characters are at 450, 96 at 400). Every measured text style is uppercase. The most common sizes are 11px (826 characters), 9px (583), 17px (236), 71px (60), 114px (36) and 40px (36).

The hero statement is 17px, weight 450, 20px line-height and -0.17px tracking, white on the photograph. The label and body style is 11px, weight 450, 15px line-height, with +0.44px tracking: small, spaced capitals for navigation and descriptions. The section heading, for example OUR TEAM, is 71px at weight 400 with a 70.0003px line-height and -0.71px tracking, in #232739. Tracking is therefore 4 percent of the size on small labels and -1 percent of the size on large headings. TT Norms Pro is a commercial typeface and its use is measured from the loaded font list; no alternative is specified.

## Layout

The grid is architectural and asymmetric. Navigation sits in a full-width white strip at the top with items placed at the far left and far right. The wordmark block is left-aligned and ends partway across the viewport, leaving the photograph visible to its right; the hero statement then sits in the right half of the image. Spacing values measured are 3px, 5px, 6px, 10px, 18px, 19px, 20px, 30px, 40px and 45px. The 45835px body height shows that the page is a long single-scroll experience. Container padding variables exist (--container-h-padding-right is 0px), but a full column grid was not measured.

## Elevation & Depth

No box shadows were measured. Depth is made by overlapping the white wordmark block on the photograph, by changing between white and navy bands, and by translucent white text (99 and 4d alpha steps) over imagery. Borders are 20 percent opacity lines, not solid strokes.

## Shapes

A single radius, 10px, appears in the measured data (weight 16). The ACCEPT button, the round chevron control and the heart counter are the small rounded elements; the large blocks, the wordmark panel and the photographs have square corners. The link and navigation component tokens reference the 10px value.

## Components

- **Navigation**: white strip, 11px uppercase labels at weight 450 with 0.44px tracking: SELECT OFFICE SPACE, a heart icon with the counter 0, and CONTACT US. A two-line menu icon at the left.
- **Link**: white text on dark sections at the 11px label style, 10px radius.
- **Hero statement**: 17px uppercase, white.
- **Section heading**: 71px uppercase, weight 400.
- **Buttons**: the page's own buttons were not detected as a primary CTA. The root variables declare many button variants (tab, outline, bitten-corner, card corner and favourite), but their rendering was not measured on this capture.

## Design System Architecture

No public design system or brand guideline for LIKOVA was found on the pages opened. The de-facto system is a set of CSS variables with a --t- prefix for theme tokens (for example --t-heading, --t-background-alternative and many --t-button-* variants, including "bitten-corner" and "card-corner" button types) and a --c- prefix for palette colors (--c-blue-deep). This is a named token system shipped in the page CSS rather than a published library. Source page: https://likova.space/.

## Do's and Don'ts

- Do set all text in uppercase TT Norms Pro at weights 400 and 450.
- Do use very large headings (71px, -0.71px tracking) against small spaced labels (11px, +0.44px).
- Do alternate white and #070b20 bands and use #e3e6eb for quiet panels.
- Do keep the radius at 10px for small controls and square for large blocks.
- Don't use shadows or bright accent colors; none are measured.
- Don't use bold; the heaviest weight is 450.
- Don't treat the cookie notice as part of the brand.

## Responsive Behavior

The 390px mobile pass recorded type. The statement and label style are both 11px at weight 450; the section headings fall from 71px to 27px at weight 400 (the mobile h2 reads "LOCATION" at 27px, line-height 28.9999px, tracking -0.27px) and the mobile navigation text is just "CONTACT US" at 9px. The mobile pass did not record whether the layout changes columns, how images crop, or any breakpoints, so those are not measured.

## Iteration Guide

1. Start from #070b20 and white; add #e3e6eb for light panels.
2. Set every string in uppercase TT Norms Pro; choose 11px for labels, 17px for statements and 71px for headings.
3. Apply tracking as measured: +0.44px on 11px, negative on larger sizes.
4. Use 10px only for small controls; keep large blocks square.
5. Verify: node web/scripts/verify-designs.mjs --slug=likova.
