---
version: alpha
name: Solartron
category: "Thai Brands"
description: "Solartron (บริษัท โซลาร์ตรอน จำกัด (มหาชน)) language-gate landing page at solartron.co.th, measured as a full-bleed rooftop solar photograph with a light-weight Trirong serif headline (24px, weight 300) in #eeeeee, outlined 3px-radius enter buttons, and a #333333 footer."
colors:
  canvas: "#282828"
  page-body: "#ffffff"
  ink: "#eeeeee"
  primary: "#eeeeee"
  surface-footer: "#333333"
  ink-muted: "#ffffff40"
  footer-border: "#00000033"
typography:
  display:
    fontFamily: Trirong, sans-serif
    fontSize: 24px
    fontWeight: 300
    lineHeight: 36px
  display-mobile:
    fontFamily: Trirong, sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
  link:
    fontFamily: Trirong, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 42px
    letterSpacing: 1px
    textTransform: uppercase
rounded:
  xs: 3px
spacing:
  s1: 15px
  s2: 26px
  s3: 40px
components:
  button-secondary:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
    padding: 0px 26px
    height: 46px
    borderColor: "{colors.ink}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
    padding: 0px 26px
    borderColor: "{colors.ink}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink-muted}"
    borderColor: "{colors.footer-border}"
---

## Overview

The measured page at https://www.solartron.co.th/ is not a full corporate homepage. It is a language gate: one full-bleed aerial photograph of a factory rooftop covered in solar panels, the Solartron logo (an orange and yellow swirl with the wordmark "SOLARTRON" in white capitals) in the upper middle, a single Thai tagline, two outlined buttons, and a dark footer strip. The Thai tagline reads "ผู้นำด้านเทคโนโลยีพลังงานแสงอาทิตย์ในไทย", which the page itself uses as its description of the company: leader in solar energy technology in Thailand. The two buttons enter the Thai site ("เข้าสู่เว็บไซต์") and the English site ("ENTER SITE"). All design facts below describe this gate page only; the inner Thai and English sites were not measured.

The voice is reserved and corporate. There is one sentence of copy, no promotional language, and the photograph does all the persuading. The page height measured at 1280px width is 937px, so the gate is close to a single screen.

## Colors

The extraction records four background colors by area: #ffffff (the document canvas under the photo), #282828 and #333333 (footer bands) and a translucent #00000033 border tone. Text colors by character count are #ffffff40 (the footer copy, white at 25 percent alpha) and #eeeeee (the tagline and the buttons). The generator assigned #eeeeee to both ink and primary because the only interactive elements are the outlined gate buttons drawn in that color. There is no filled brand action color on this page; the orange and yellow of the logo sit inside the image asset and were not measured as CSS values, so they are not declared as tokens.

- canvas #282828: the dark footer band, which is the screen-dominant solid color (the extraction's screen pixel check found #292929 as the largest solid area, 12 percent), used as the canvas because ink #eeeeee needs a dark ground.
- page-body #ffffff: the document background behind the hero image, never visible except around it.
- ink and primary #eeeeee: tagline text and the outline and text of both gate buttons.
- surface-footer #333333: the lighter footer band.
- ink-muted #ffffff40: the legal line, the contact line and the language toggle in the footer.
- footer-border #00000033: the footer border.

On hover the measured gate button inverts: the background becomes #eeeeee, the text becomes #333333 and the border turns transparent. That is the only measured interaction state.

## Typography

Every text run on the page uses Trirong, a serif family, with a generic sans-serif fallback. Loaded font faces are Trirong at weights 300, 400 and 500 plus an icon font named font-icons. Character counts by size are 14px (footer, 151 characters), 24px (tagline, 40 characters) and 16px (buttons, 25 characters).

- display: Trirong 24px, weight 300, line-height 36px, used for the tagline at desktop width. At the 390px mobile pass the same tagline measured 16px, weight 300, line-height 24px (display-mobile).
- link: Trirong 16px, weight 700, line-height 42px, letter-spacing 1px, uppercase, used for the gate buttons. Uppercase only shows on the English label; the Thai label has no case.
- Footer text is 14px at weight 400 in the muted white.

A light serif for the tagline against a bold, tracked button label is the single typographic contrast on the page. Trirong supports Thai and Latin, so one family covers both languages. The font is loaded by the site, so no substitute is needed.

## Layout

The page is a stack of two zones: a tall photographic hero and a footer. The tagline box measured 800px wide at the 1280px viewport; the logo sits above it and the two buttons below it, all centered over the image. The footer holds copyright and legal links on the left, and language toggle (EN | TH) with email and phone on the right. Spacing values measured as paddings are 15px, 26px and 40px; the buttons use 0px vertical and 26px horizontal padding and are 46px tall (145px wide for the Thai button).

## Elevation & Depth

No box shadows were measured anywhere on the page. Depth comes from the photograph and from the text sitting directly on the image. The footer is separated by a flat color change and a faint #00000033 border instead of a shadow.

## Shapes

Only one radius was measured: 3px, on the gate buttons (rounded.xs). Buttons are outlined with a 2px solid #eeeeee border. The rest of the page is rectangular: full-width image, full-width footer.

## Components

- button-secondary (gate button): transparent fill, #eeeeee 2px outline, #eeeeee text in the link typography, 3px radius, 46px height, 0px 26px padding. Hover fills with #eeeeee and sets the text to #333333.
- link: same typography and outline treatment as the gate buttons.
- footer: #333333 background, #ffffff40 text, #00000033 border. Footer links are underlined with a thin line in the capture.

There is no primary filled button, navigation bar or form on this page.

## Design System Architecture

No public design system, brand guideline or press page was linked from the page; the homepage links only to the Thai site, the English site, terms and conditions and the personal data protection policy. The de-facto system is a Bootstrap 4 stylesheet: the root variables include the unmodified Bootstrap palette (for example --primary #007bff, --success #28a745 and --danger #dc3545 along with the standard breakpoints at 576px, 768px, 992px). Those are framework defaults, not Solartron brand colors, and none are used by the gate page. The visible styling is custom: Trirong typography, #eeeeee outlines and the #333333 footer.

## Content and Imagery

The photograph is an aerial view of an industrial and commercial rooftop with blue solar panel arrays, white membrane roofing, car parks, and a motorway at the upper right and grass at the lower right. The framing is wide and documentary rather than staged: the product, solar panels installed on a real building, is the hero. There are no people, icons or illustrations on the page apart from the logo and the small envelope and phone glyphs in the footer contact line, which come from the font-icons face. The microcopy is bilingual by structure: the Thai label comes first, the English "ENTER SITE" label second, and the footer toggles between EN and TH. Contact details are given as a plain email address (support@solartron.co.th) and a phone number (+66 02 055 9101-3) with no call-to-action wrapper.

## Do's and Don'ts

- Do keep the full-bleed solar-roof photograph as the main visual and keep copy to one sentence.
- Do use #eeeeee for text and outlines placed over the image.
- Do keep gate buttons outlined with a 3px radius and a 2px border, inverting on hover.
- Do use Trirong for both Thai and Latin text.
- Don't introduce filled bright buttons on the gate; none were measured.
- Don't treat the Bootstrap root variable colors as brand colors.
- Don't add shadows; none were measured.
- Don't document the gate layout as the layout of the inner sites; they were not measured.

## Responsive Behavior

Measured at a 390px mobile viewport: the tagline drops from 24px/36px to 16px/24px at weight 300, and its text box is 310px wide. Button, footer and image behavior at mobile width was not measured. No breakpoint behavior of the page itself is claimed.

## Iteration Guide

1. Start from a full-bleed photograph and place the logo, one Trirong 300 sentence and two outlined 3px-radius buttons over it.
2. Use #eeeeee for all overlay type; use #333333 for the footer and for hover text.
3. Keep the footer at 14px with #ffffff40 text.
4. When extending to the inner sites, measure them first with the extractor; this file documents only the gate page.
5. Re-run `node web/scripts/verify-designs.mjs --slug=solartron` after any token rename.
