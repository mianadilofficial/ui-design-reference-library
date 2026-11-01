---
version: alpha
name: The EM District
category: "Thai Brands"
description: "The EM District, The Mall Group's Bangkok district site: pure black #000000 canvas, white #ffffff ink, Prompt 700 headings at 53.3333px, Helvetica Neue LT Std 14px body, translucent white #ffffffcc pill buttons and hashtag chips, with saturated fashion and street photography doing all the colour."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#ffffff"
  on-primary: "#000000"
  button-primary-bg: "#ffffffcc"
  chip-bg: "#ffffff21"
  chip-active-bg: "#ffffff8c"
typography:
  display:
    fontFamily: Prompt, sans-serif, sans-serif
    fontSize: 53.3333px
    fontWeight: 700
    lineHeight: 53.3333px
  display-mobile:
    fontFamily: Prompt, sans-serif, sans-serif
    fontSize: 28.2609px
    fontWeight: 700
    lineHeight: 28.2609px
  heading:
    fontFamily: Prompt, sans-serif, sans-serif
    fontSize: 26.6667px
    fontWeight: 700
    lineHeight: 26.6667px
  body:
    fontFamily: "\"Helvetica Neue LT Std\", \"Helvetica Neue\", Prompt, Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
rounded:
  pill: 9999px
spacing:
  s1: 8px
  s2: 16px
  s3: 24px
  s4: 26.67px
  s5: 48px
components:
  button-primary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.pill}"
    padding: 0px 24px
    height: 48px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  footer:
    textColor: "{colors.ink}"
---

## Overview

The EM District (emdistrict.com) is the umbrella site for the Emporium, EmQuartier and EmSphere properties in Bangkok. Its own page states the tagline "Districts influence evolution and create new culture." and organises itself around a split hero (EMPEOPLE and EMDISTRICT), three portrait posters for the component brands, a row of hashtag filters, and a social-style grid of event images. The site also invites visitors to tag Instagram posts with #EMPEOPLE, and carries a note recommending a portrait orientation for the best experience.

The look is gallery-black. The canvas is `#000000` with white `#ffffff` text and no other interface colours: every hue on screen comes from photography and from the brand posters. The first screen is a two-panel hero. On the left, EMPEOPLE sits over a street-style portrait (in the measured capture, an older woman in a beige jacket and yellow trousers on a bicycle, labelled "Tag Instagram with #EMPEOPLE"); on the right, EMDISTRICT sits over a tree-lined park with a skyline. The hero imagery changes between loads. Below the hero are three equal poster tiles in distinct art directions: EMPORIUM in a lush red-and-green floral scene, EMQUARTIER on teal with a gold shell sculpture, and EMSPHERE with two figures in bright yellow jackets, each with the brand wordmark across the top. A centred all-caps statement follows, then hashtag chips and a masonry of event images.

The page is 9258px tall at 1280px width, a long scroller. A consent banner was shown over the bottom of the hero in an earlier capture; the extractor hides consent overlays (the extraction records `consentOverlaysHidden`), and that banner and the floating cookie icon are not brand UI.

## Colors

- **Canvas `#000000`:** the page background, the largest area by far (weight 1024).
- **Ink `#ffffff`:** all body and heading text (272 characters, against 14 for black).
- **Primary `#ffffff`:** the brand has no coloured action colour; the call to action is white. Its fill is `#ffffffcc` (white at 80 percent alpha), with black text `#000000`.
- **Chip fill `#ffffff21`:** white at about 13 percent alpha, behind inactive hashtag chips; the selected chip (#EMDISTRICT) uses `#ffffff8c`.

The WordPress root variables (`--wp--preset--color--vivid-purple: #9b51e0`, `--wp-admin-theme-color-darker-20: #005a87`) are framework defaults and are not used as brand colours. The Thai cookie banner button is a third-party style and is excluded.

## Typography

Two families. **Prompt** (loaded at weight 800 in the font list; measured at 700 on headings) is used for headings: "EMDISTRICT" at 53.3333px with a line height of 53.3333px, and "EMPEOPLE" at 26.6667px. **Helvetica Neue LT Std** (declared in `--font-body` with Helvetica Neue, Prompt, Helvetica and Arial fallbacks) is the body at 14px/21px, weight 400, and carries 215 measured characters against 71 for Prompt. The 20px size (76 characters) belongs to the hashtag and statement text.

- Display: Prompt 700, 53.3333px/53.3333px; on mobile 28.2609px.
- Heading: Prompt 700, 26.6667px.
- Body: Helvetica Neue LT Std 400, 14px/21px.
- The large all-caps statement "DISTRICTS INFLUENCE EVOLUTION AND CREATE NEW CULTURE." uses heavy, tightly leaded Prompt-style capitals.

Helvetica Neue LT Std is a commercial face; Helvetica or Arial approximate it, and Prompt (a Thai and Latin sans) is the declared fallback.

## Layout

The grid is full-bleed at the hero and padded below. Measured paddings are 24px (207 elements), 48px and 26.6667px; gaps are 8px, 48px, 16px and 24px; `--spacing-md` is 28px and `--spacing-xm` is 36px in the root variables. The poster tiles sit three across with a narrow gutter; hashtag chips wrap in two rows; the event images are a masonry of mixed aspect ratios with a view toggle and a search icon above them. A header height variable `--header-nav-height-minus` of -48px shows a 48px header bar.

## Elevation & Depth

The page is flat: no box shadows were measured. Depth is expressed by overlaying translucent white shapes (chips, button) on black and by white text laid directly over photographs. Hero headings sit on the image with no scrim shape of their own. The WordPress preset shadows in the root variables are not seen on measured elements.

## Shapes

Every measured radius is 640px (9 elements), which renders as a full pill; the token is expressed as 9999px. Poster tiles and event photographs have square corners, and the hashtag chips and Explore buttons are pills.

## Components

- **Primary button ("Explore"):** `#ffffffcc` fill, black text, Helvetica Neue LT Std 14px weight 400, padding 0px 24px, height 48px, pill radius; it measures 95px wide.
- **Hashtag chips:** pill chips at 48px height with white 20px bold text on `#ffffff21`; the active chip uses `#ffffff8c`.
- **Hero panels:** two equal panels with large white Prompt titles, one for EMPEOPLE and one for EMDISTRICT.
- **Brand posters:** three portrait tiles for Emporium, EmQuartier and EmSphere with the brand wordmark, linked to the brands' own sites.
- **Link and footer:** white text on black.

## Imagery and Voice

The imagery rule is simple: nothing in the interface competes with the pictures. Titles are placed over the middle of each photograph in white, and the sub-brand posters carry their own wordmarks, so the black canvas works as a neutral frame around very different art directions.

Photography is the identity. The hero and poster images are staged, stylised portraits with strong single colours: red and green for Emporium, teal and gold for EmQuartier, yellow for EmSphere, and a pink backdrop in one hero variant. The event grid below mixes documentary photos of crowds in matching light-blue shirts and an exercise stage with a full promotional poster in Thai and English (an "EM-ROBIC" dance event), so the system accepts third-party artwork at its own colours without recolouring it. Microcopy is short and English-led: "Explore", all-caps hashtags such as #EMDINING, #NEIGHBORHOOD and #EMFASHIONICON, and a Thai-language consent line. The voice is confident and slogan-like, as in "Districts influence evolution and create new culture."

## Design System Architecture

No public design system, brand guideline or press kit was found: https://emdistrict.com/about and https://emdistrict.com/brand both returned HTTP 404. The shipped CSS shows a WordPress theme (`--wp-*` variables) with a small custom layer of tokens: `--font-body`, `--spacing-md: 28px`, `--spacing-xm: 36px`, `--header-nav-height-minus: -48px` and RGB triplet variables such as `--color-black-rgb: 0,0,0`. Source: https://emdistrict.com/.

## Do's and Don'ts

- Do keep the interface strictly black and white and let photography carry colour.
- Do use pill-shaped translucent white buttons and chips.
- Do set headings in bold Prompt capitals and body in Helvetica Neue LT Std at 14px.
- Do give each sub-brand its own art-directed poster.
- Don't add coloured buttons, borders or shadows.
- Don't present the cookie banner or cookie icon as part of the brand system.
- Don't use WordPress preset colours.

## Responsive Behavior

At the 390px viewport the display heading is 28.2609px (against 53.3333px at 1280px), and the h2 is the same 28.2609px. Body and button text stay at 14px. The site's own copy recommends portrait orientation for the best experience, and it keeps 24px of padding as the horizontal rhythm. Only these size changes were measured.

## Iteration Guide

1. Start from `canvas #000000`, `ink #ffffff`, and the `button-primary-bg` `#ffffffcc` with black text.
2. Use Prompt 700 for headings (53.3333px desktop, 28.2609px mobile) and Helvetica Neue LT Std 14px for body.
3. Make every action a 48px pill; use `#ffffff21` for inactive chips and `#ffffff8c` for the active one.
4. Let imagery carry colour: art-directed posters per sub-brand, wordmarks in white across the top.
5. Re-measure with the extractor if the live site changes.
