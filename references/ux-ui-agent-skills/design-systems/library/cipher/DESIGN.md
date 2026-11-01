---
version: alpha
name: CIPHER
category: "Portfolio"
description: "CIPHER is a Paris creative production company whose site is a near-monochrome stage: warm black #060403 and bone #e9eae4, ABC Arizona Mix at weight 200 in uppercase for 40px statements, ABC Favorit 12px medium uppercase for navigation, no radii, no shadows, and staggered image grids captioned with index numbers."
colors:
  canvas: "#060403"
  page-body: "#000000"
  ink: "#e9eae4"
  primary: "#e9eae4"
  canvas-light: "#e9eae4"
typography:
  display:
    fontFamily: Favorit
    fontSize: 11px
    fontWeight: 400
  label:
    fontFamily: Favorit
    fontSize: 12px
    fontWeight: 500
    lineHeight: 14.4px
    textTransform: uppercase
  link-small:
    fontFamily: Favorit
    fontSize: 10px
    fontWeight: 400
    lineHeight: 19px
    letterSpacing: 12%
    textTransform: uppercase
  headline:
    fontFamily: Arizona
    fontSize: 40px
    fontWeight: 200
    lineHeight: 40px
    textTransform: uppercase
  headline-mobile:
    fontFamily: Arizona
    fontSize: 24px
    fontWeight: 200
    lineHeight: 24px
    textTransform: uppercase
  footer-display:
    fontFamily: Arizona
    fontSize: 58px
    fontWeight: 400
    lineHeight: 40.6px
rounded:
  none: 0px
spacing:
  s1: 7px
  s2: 10px
  s3: 14px
  s4: 15px
  s5: 16px
  s6: 20px
  s7: 20.5px
  s8: 40px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link-small}"
    padding: 16px 10px
  nav:
    textColor: "{colors.ink}"
    padding: 7px 20.5px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.label}"
    padding: 15px 0px
---

# CIPHER

## Overview

CIPHER (cipher.tv) is the site of a Paris-born creative production company. On its About page (opened for this document) the company describes itself as "a creative production company working between the established and the experimental", says it supports "brands, agencies and artists worldwide — from concept to final delivery", and lists production, casting, studio and post-production as services. The footer tagline reads "FOR CULTURE AND ITS COUNTER", and the address line in the page text is "7 IMPASSE FRANCHEMONT, PARIS".

The home page (https://cipher.tv/) is a loading splash. The capture shows a black field filled with a halftone dot matrix in a light bone color, the lower-case "ciphər" wordmark at the top left, a circled copyright mark at the center and a percentage counter ("62%") at the bottom center. The only text roles the extractor could measure on the home URL are therefore the counter (11px) and the navigation (WORKS, TALENTS, CONTACT, ABOUT in 12px uppercase). The real content lives one click away, so this document also uses a second measured page, https://cipher.tv/works (recorded as the extra page `cipher--works`), for headlines, the project grid and the footer.

The two pages invert each other. The home splash is warm black `#060403` with bone text `#e9eae4`; the works page is bone `#e9eae4` with near-black text `#060403`, closing on a black footer block. Both are built from exactly two colors, which the site exposes as custom properties `--color-light` (`#e9eae4`) and `--color-dark` (`#060403`).

The tone is restrained and editorial. A single statement in uppercase serif ("IT'S SUBTLE YET STRIKING, MEANING SHAPED IN QUIET, INTENTIONAL FORMS.") introduces a staggered grid of fashion, beauty and film stills, each captioned with a small index number and a project title. There are no buttons, no cards with borders, no radii and no shadows.

## Colors

- **Canvas `#060403`**: the home page background (about 90% of the home capture) and the footer block of the works page; the site's `--color-dark`.
- **Page body `#000000`**: the `body` element background on both measured pages.
- **Ink `#e9eae4`**: the only text color on the home page (124 characters) and the footer text color on the works page; `--color-light`. The generator also assigns it as `primary`, because the site has no accent or call-to-action fill; the bone tone is the only foreground color.
- **Canvas light `#e9eae4`**: the works page background, the largest measured background there (area weight 6144), the same value as ink.
- **Ink on light `#060403`**: the works page text color (236 characters), the same value as `canvas`.

A secondary neutral `#dedede` appears as a background of smaller weight (1215) on the works page. The stylesheet also contains `#ffffff` (9 occurrences), `#676767` (4), `#313236`, `#455e53` and a transparent variant of bone; none of them was measured on a visible element of the pages, so they are not tokens. Image content (portraits, packaging, interiors) supplies all the chromatic color on the page.

## Typography

Two variable families are loaded, both as single variable files spanning weights 100 to 900: **Favorit** and **Arizona**. The site's font files are `ABCFavoritVariable.woff2` and `ABCArizonaMixVariable.woff2`. The type foundry's own pages (https://abcdinamo.com/typefaces/favorit and https://abcdinamo.com/typefaces/arizona) describe ABC Favorit as a low-contrast grotesque by Dinamo, and ABC Arizona as a sans-to-serif family by Dinamo with Serif, Text, Mix, Flare and Sans variants, where "Mix is chunky and low-contrast".

| Role | Family | Size / line height | Weight | Case |
|---|---|---|---|---|
| Splash counter (`display`) | Favorit | 11px | 400 | as typed |
| Navigation label (`label`) | Favorit | 12px / 14.4px | 500 | uppercase |
| Small link (`link-small`) | Favorit | 10px / 19px, letter spacing 12% | 400 | uppercase |
| Headline | Arizona | 40px / 40px | 200 | uppercase |
| Headline, mobile pass | Arizona | 24px / 24px | 200 | uppercase |
| Footer display | Arizona | 58px / 40.6px | 400 | as set |

Favorit does all functional work (navigation, captions, index numbers, address) in small uppercase sizes: 12px carries 254 of the works page characters. Arizona is the voice: at weight 200 the headline is extremely light, and the measured works page also contains Arizona at 18px with weight 300 (131 characters). Line height equals font size on the headline and on the mobile headline (40px and 24px), which gives tight, poster-like stacking. In the footer, the words of the tagline alternate between roman and italic Arizona, with small words ("PROD", "AND", "ITS") set tiny beside the large words.

**Font substitutes.** Both families are commercial typefaces; the foundry pages say trial fonts can be requested and a licence purchased, and give no free license terms. For prototypes: a low-contrast grotesque for Favorit and a light-weight transitional serif for Arizona headline text, keeping the uppercase, 200 weight and zero-leading rules above.

## Layout

The works page is 6701px tall at the 1280px viewport. A thin header sits at the top with the wordmark at the left and the four labels (WORKS, TALENTS, CONTACT, ABOUT) distributed along the top in 12px uppercase; the nav element is 88px tall with 7px 20.5px padding and each label has 15px vertical padding. The extractor's layout probe counted three visible header links and no menu toggle.

Below the header is a large empty field with a small mark at its center, then the headline statement (centered, 40px, wrapping to two lines in a 1200px wide element), then the project grid. The grid is staggered rather than aligned: tiles of different widths and aspect ratios alternate between left and right sides of the page, with long vertical gaps between them; the probe recorded up to 5 card columns on desktop. Each tile has a small caption row beneath it: a plus-and-number index at the left ("+ 001") and the project title in uppercase at the right.

Gaps measured on the works page: 5px (50 uses), 8px (28), 10px (18), 88px (4), 40px (2), 14px (2). Paddings: 40px, 90px (6 each), 15px, 118px, 7px, 20.5px, 16px and 10px. The closing footer is an 800px tall black block holding the tagline and the address.

## Elevation & Depth

There is none. No box shadows were measured on either page and the stylesheet corpus has an empty shadow list. Depth comes from photography and from the full inversion between the bone page and the black footer. The home splash creates a sense of depth with the halftone dot matrix, whose dots thicken and thin to form large diagonal bands.

## Shapes

No border radius was measured on any element (the border-radius list is empty on both pages, and the hover probe reports 0px). The token set therefore holds a single `none` value of 0px. Tiles are plain rectangles of photography. The wordmark "ciphər" is lower-case with a macron over the "i" and a schwa in place of the "e"; the extraction recorded no separate logo asset for it.

The only non-rectangular element in the capture is the small circled mark at the center of the splash. The page also carries an unlabeled image link to https://www.studiojour.paris/, which the page does not describe as a credit.

## Components

The site is built from very few components.

- **Navigation label**: Favorit 12px at weight 500, uppercase, `{colors.ink}`; padding 15px 0px per label, with the container padding 7px 20.5px. On hover the measured sample changed the label text (WORKS read WORKI mid-hover) and dropped opacity to 0.5; color, height and radius stayed the same.
- **Small link**: Favorit 10px uppercase with 12% letter spacing and padding 16px 10px (used for compact link rows).
- **Project tile**: a rectangular image with a caption row (index and uppercase title) in Favorit; no border, radius or shadow.
- **Statement block**: Arizona 40px uppercase at weight 200, centered, in near-black on the bone field.
- **Footer**: black block with the CIPHER PROD tagline in Arizona 58px and the address in Favorit uppercase.
- **Splash**: halftone dot field, wordmark top left, circled mark, percentage counter at the bottom center.

There is no primary button, form, input or card with a border in the measured pages. Focus on a nav link draws the browser default outline (`1px auto rgb(0, 95, 204)` at 1px offset), which is a browser default and not a brand color.

## Design System Architecture

No public design system, brand guideline or press kit was found. The home page, https://cipher.tv/works and https://cipher.tv/about were opened; none links to brand guidelines, and the only outbound link is the unlabeled studiojour.paris link. The foundry pages (https://abcdinamo.com/typefaces/favorit, https://abcdinamo.com/typefaces/arizona) were opened for the typefaces.

The de-facto system is small and exposed as custom properties on the root element: `--color-light` `#e9eae4`, `--color-dark` `#060403`, and a type scale of `--fontXXS` 8px, `--fontXS` 10px, `--fontS` 12px and `--fontM` 24px. These match the measured sizes: 12px navigation, 10px small links, 24px mobile headline. Everything else on the page (40px and 58px Arizona, 18px and 19px sizes) is set directly in the stylesheet. Fonts are served from the site itself at `/fonts/`.

## Do's and Don'ts

Do
- Use only warm black `#060403` and bone `#e9eae4`, flipping which is the field and which is the text.
- Set statements in Arizona at weight 200 uppercase; set labels in Favorit 12px at weight 500 uppercase.
- Keep radii at 0px and omit shadows; let photography provide the color.
- Stagger image tiles with generous vertical space and caption them with an index and a title.
- Keep copy short, declarative and in uppercase.

Don't
- Don't add an accent color or a filled button; the site has none.
- Don't round image corners or add borders.
- Don't use Favorit for headlines or Arizona for functional labels.
- Don't use heavy Arizona weights; the measured headline weight is 200.
- Don't treat the `62%` counter as content typography; it belongs to the splash.

## Responsive Behavior

Measured on the works page at 390px (mobile pass): the headline drops from 40px to 24px (weight 200, line height 24px) and gains 20px horizontal padding; the navigation stays 12px weight 500 uppercase; a 27px size (20 characters) takes the place of the desktop 58px size (20 characters); the tagline text role measures 10px against 19px on desktop. The layout probe recorded one card column on mobile against up to five on desktop, with three visible header links and no menu toggle at 390px.

The splash page at 390px keeps the same navigation size (12px). How the dot matrix and the staggered grid reposition on mobile beyond the figures above was not measured.

## Iteration Guide

1. Start from the two colors: `canvas` `#060403` and `ink` `#e9eae4`; flip them for pages that sit on the bone field (`canvas-light`).
2. Load Favorit and Arizona as variable fonts; set navigation at 12px / 14.4px weight 500 uppercase and statements at 40px / 40px weight 200 uppercase (24px on narrow screens).
3. Build the grid as free-floating image tiles of varied sizes with index-and-title captions; do not align them to a column grid.
4. Keep the shape language at 0px radius and no shadow.
5. Reserve the footer for a large black block carrying the 58px Arizona tagline mixing roman and italic words.
6. Mark hover as an opacity drop to 0.5 on navigation labels, which is the only measured hover change.
7. If a new component is needed, measure it on a live page first and add the values to the tokens only after verification.
