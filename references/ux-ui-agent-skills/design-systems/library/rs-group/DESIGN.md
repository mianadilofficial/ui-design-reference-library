---
version: alpha
name: RS Group
category: "Thai Brands"
description: "RS Group (rs.co.th), Thai entertainment and commerce company, brand purpose \"Life Enriching\": a single serif family gt_sectra (Trirong, serif fallback) at 15px body and 26px headings, black on white with #f7f7f7 bands and #505052 secondary text, zero radius, no shadows."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#505052"
  surface-2: "#f7f7f7"
typography:
  display-mobile:
    fontFamily: gt_sectra, Trirong, serif
    fontSize: 21px
    fontWeight: 500
    lineHeight: 26.25px
  heading:
    fontFamily: gt_sectra, Trirong, serif
    fontSize: 26px
    fontWeight: 500
    lineHeight: 32.5px
    textTransform: capitalize
  subheading:
    fontFamily: gt_sectra, Trirong, serif
    fontSize: 25.5px
    fontWeight: 500
    lineHeight: 31.875px
  body:
    fontFamily: gt_sectra, Trirong, serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 22.5px
rounded:
  none: 0px
spacing:
  s1: 15px
  s2: 20px
  s3: 30px
  s4: 40px
  s5: 75px
  s6: 80px
  s7: 100px
  s8: 150px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 75px 0px
---

# RS Group

## Overview

The measured page is https://www.rs.co.th/ (title "RS Group - Life Enriching"). RS Public Company Limited, in the page's own words, is "the entertainment pioneer in Thailand ... inspiring the industry and the public since 1982". The page is an editorial corporate home: a full-bleed photographic hero with the line "Brand Purpose : Life Enriching" over a golden retriever eating from a bowl, overlaid with a thin white line-drawn emblem; a white row of four subsidiary logos (RS Multimedia & Entertainment, RS Music, RS LiveWell, RS petall); a light-gray "Latest News" band with a horizontal strip of white article cards; and a white "About RS GROUP" text block set in a narrow reading column.

The visual system is a serif newspaper in monochrome. There are no buttons, no colored accents and no rounded shapes in the measured data. Color arrives only through photographs and the subsidiaries' own logos. The header navigation was hidden by the extractor's consent-overlay handling (the extraction records `consentOverlaysHidden: ["header"]`), so no navigation styling is documented here.

The copy voice is formal corporate English translated for an international audience. The About text explains that the group "differentiate[s] itself" by blending entertainment and commerce into an "'Entertainmerce' business model", and it closes on the purpose line "Life Enriching" for all. The Latest News titles are short press-release headlines truncated with an ellipsis after two lines (for example "RS Group launches 'Sustainable Life...", "RS Group achieves 'Excellent' CGR Rating..."), each followed by a three-line summary and the same "Read More" link. This repeated pattern is the page's only microcopy device.

## Colors

The palette is three neutrals. `canvas` #ffffff is the page and the largest painted background (2851 weight). `surface-2` #f7f7f7 is the light gray band behind Latest News (2056 weight). Black #000000 (1024 weight in painted background area, and the most frequent text color at 7776 characters) is `ink`; it is used for headings, article titles and links. `primary` #505052 is a dark gray used for 4800 characters, which in the capture are the card summary lines and the About paragraphs. No button exists in the page, so the extractor's primary slot is a text color, not an action color.

The page's WordPress root variables expose only the default `--wp--preset--color--*` palette (black, white, cyan-bluish-gray #abb8c3, pale-pink #f78da7 and others). Those are the platform defaults and are not used by the measured page; they are not brand colors.

## Typography

One family carries every character measured: `gt_sectra`, with `Trirong, serif` named after it in the stack, so the fallback is Trirong and then the generic serif. The extraction lists loaded faces "gt_sectra 400 normal" and "gt_sectra 500 normal", plus an `icomoon` icon font. Because gt_sectra is loaded as a web font by the site, a substitute is needed where it cannot be licensed; the site's own declared fallback, Trirong (a serif that includes Thai glyphs), is the substitute to use.

Measured roles: `heading` 26px / 32.5px, weight 500, capitalized ("Latest News"); `subheading` 25.5px / 31.875px, weight 500 (the "About RS GROUP" heading); `body` 15px / 22.5px, weight 400, for summaries and paragraphs; the link role is 15px / 18.75px. Card titles in the capture are 18.75px (506 characters) at weight 500. By character count 15px dominates (11951), then 18.75px (506), 25.5px (108) and 26px (11). Weights are 400 (11951 characters) and 500 (625). On the 390px mobile pass the h1 is 21px / 26.25px at weight 500 (`display-mobile`). No letter-spacing, italic or uppercase styling is recorded.

## Layout

The document is 1280px wide and 6160px tall. The hero fills the full width of the viewport. Below it the subsidiary logos sit in a single centered row. The news band is a 1200px-wide section (the h2 measured 1200px wide) holding a horizontally scrolling strip of cards, with the last card cropped at the right edge; each card has an image, a two-line title, a three-line summary and a "Read More" link. The About block is a single narrow column of paragraphs under a left-aligned heading.

Spacing measured in the extraction: paddings of 15px (21 uses), 30px (20), 20px, 40px, 75px, 80px, 100px and 150px; one gap of 40px (4 uses). The footer is padded `75px 0px`, white fill with black 15px text, and is 842px high.

## Elevation & Depth

None. `borderRadii`, `boxShadows` and `borderColors` are all empty in the extraction. Separation comes from three flat background steps (white, #f7f7f7, white) and from white cards sitting directly on the gray band without borders or shadows. The hero's depth is photographic: the white emblem line is drawn over the image, and the headline is white on the photo.

## Shapes

No radius was measured: the extraction's `borderRadii` is empty, so every rendered element computes 0px. The tokens therefore declare `rounded` with `none: 0px`. Cards, images and the article strip all show square corners, and the logo row consists of the subsidiaries' own marks.

## Components

**Article card**: white fill on the #f7f7f7 band, square corners, no border and no shadow. Contents: a photograph, a title in gt_sectra at 18.75px / weight 500 in black, a three-line summary at 15px in #505052, and "Read More" at 15px in black. Cards are separated by a 40px gap.

**Section heading**: "Latest News" 26px / 32.5px / 500, black, capitalized, left-aligned at the strip's left edge.

**Text link**: 15px / 18.75px, weight 400, black; there is no underline or color change recorded (no hover states were captured).

**Subsidiary logo row**: four logos set on white, spaced evenly in one row; they carry the group's brands rather than the interface's colors.

**Hero**: photograph with centered-right overlay text, "Brand Purpose :" in a smaller light serif above "Life Enriching" in a larger serif, both white.

**Footer**: white background, 75px vertical padding, black 15px text.

## Design System Architecture

No public RS Group design system, brand-guideline page or token package was opened for this brief, so there is no official source to cite. The shipped CSS shows a WordPress site: the 39 root variables are `--wp--preset--*` block-editor presets (colors, font sizes such as normal 16px and huge 42px) and a viewport helper `--vh`. The brand's actual system is not in custom properties; it is the repeated literal values measured on the page: black, #505052, #f7f7f7, white, a single serif family in two weights and 15px body type.

## Do's and Don'ts

- Do set everything in one serif family at weights 400 and 500.
- Do keep body copy at 15px with a 22.5px line height and secondary copy in #505052.
- Do alternate white and #f7f7f7 bands to separate sections.
- Do let photography and the subsidiary logos supply color.
- Do keep all corners square.
- Don't add borders, shadows or radii; none are measured.
- Don't use WordPress preset colors such as #f78da7 or #abb8c3; they are platform defaults.
- Don't add buttons or accent colors to the corporate page without measuring a source first.

## Responsive Behavior

A 390px mobile pass was recorded. The mobile h1 is gt_sectra at 21px / 26.25px, weight 500, in black. Mobile body text stays 15px / 22.5px at weight 400. Character counts by size on mobile are 15px (11951), 18.75px (506), 21px (108) and 26px (11). The mobile layout, navigation and breakpoints were not measured.

## Iteration Guide

1. Start from #ffffff, #f7f7f7, black and #505052.
2. Use gt_sectra (Trirong, serif fallback) at 15px / 22.5px for text and 26px / 500 for section headings.
3. Build cards without radius, border or shadow, on the gray band with 40px gaps.
4. Keep the hero photographic with a white serif overlay.
5. Gate: `node web/scripts/verify-designs.mjs --slug=rs-group`.
