---
version: alpha
name: Harvard University
category: "Education"
description: "harvard.edu, the home page of Harvard University: a light grey #f3f4f4 canvas with #1e1e1e ink, Canela Deck Web serif headlines (54.4px hero, 31.68px card titles) over GT America Standard at 18px/27px, white cards with 8px corners, circular arrow links, full-bleed research photography and a near-black #0e0e0e footer."
colors:
  canvas: "#f3f4f4"
  ink: "#1e1e1e"
  primary: "#8996a0"
  surface-grout: "#e3e5e5"
  surface-footer: "#0e0e0e"
  surface-navy: "#1b2136"
  white: "#ffffff"
typography:
  display:
    fontFamily: "\"Canela Deck Web\""
    fontSize: 54.4px
    fontWeight: 400
    lineHeight: 65.28px
    letterSpacing: "-0.55px"
  display-mobile:
    fontFamily: "\"Canela Deck Web\""
    fontSize: 36px
    fontWeight: 400
    lineHeight: 43.2px
    letterSpacing: "-0.55px"
  subheading:
    fontFamily: "\"Canela Deck Web\""
    fontSize: 31.68px
    fontWeight: 400
    lineHeight: 36.432px
    letterSpacing: "-0.1px"
  body:
    fontFamily: "\"GT America Standard Regular\""
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
    letterSpacing: "-0.25px"
rounded:
  xs: 8px
  pill: 9999px
spacing:
  s1: 2px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 19.2px
  s6: 20px
  s7: 23.2px
  s8: 24px
  s9: 31px
  s10: 32px
components:
  nav:
    textColor: "{colors.white}"
  nav-link:
    textColor: "{colors.white}"
    typography: "{typography.body}"
  link:
    textColor: "{colors.ink}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.canvas}"
    padding: 96px 0px
---

## Overview

harvard.edu is the main site of Harvard University. The desktop pass measured a 1280px-wide page, 8447px tall, with 379 visible elements. The capture opens on a full-width photographic hero with a centred white serif headline, "Transformative Treatments", and a short white supporting paragraph. Directly below sits a white header bar containing the crimson-shielded Harvard wordmark, a one-line notice with a small red bullet, and two near-black blocks labelled "Search" and "Menu". After the bar the page switches to a light grey canvas with a left-aligned serif section heading ("New approaches to long-standing illnesses"), a three-up row of white story cards, and a large full-bleed photographic panel headed "Cancer".

The feel is an editorial, research-led university: restrained greys and near-black text, one display serif and one grotesque, large human photography and microscopy imagery, and generous vertical rhythm (measured paddings of 32px, 52px, 72px, 48px and a 96px footer block). Colour comes from content, not chrome. The live site rotates its lead story; the page text read during research showed a different hero ("Harvard in the World", link "Learn about Worldwide Week") than the captured one, so lead copy should be treated as editorial content and not as a fixed brand element.

## Colors

All colours below were measured on the page.

- **Canvas {colors.canvas}** (#f3f4f4): the body background, the largest background area (weight 5566).
- **Ink {colors.ink}** (#1e1e1e): body and card text (3977 characters). It is also the only measured border colour (#1e1e1e).
- **Grout {colors.surface-grout}** (#e3e5e5): the second-largest background (3675). The theme names it `--color-grout` in its root variables, and it is used behind the card row and as a divider tone.
- **Footer {colors.surface-footer}** (#0e0e0e): the footer background and the Search/Menu blocks (the Search button hover record shows rgb(14, 14, 14) with a white label).
- **Navy {colors.surface-navy}** (#1b2136): a measured background area (909) that the extractor could not tie to a named role; it is kept as a measured colour.
- **White {colors.white}** (#ffffff): card surfaces (700 area weight) and text over photography and the dark bar (978 characters).
- **Slate {colors.primary}** (#8996a0): the generator's `primary`, a muted blue-grey measured as text colour (252 characters). It matches the circular arrow badges beside the card links in the capture. No filled primary button was detected (ctaPrimary is null), so no saturated brand hue is promoted into the tokens. The Harvard shield and the small bullet before the notice are red in the capture, but that red was not measured as a colour value on an element, so it is not a token.

The theme also declares `--color-focus-blue: #00f` and `--color-twitter: #0084b4` among its root variables; these are focus and social-platform values and not used as brand colours here.

## Typography

Two families carry the page, both proprietary web fonts loaded by the site: **Canela Deck Web** (a serif, 538 characters) for headlines and **GT America Standard** in Regular (4346), Medium (589) and Bold (358) for everything else. The loaded-font list also contains a `core-icons` icon font.

- **Display** {typography.display}: Canela Deck Web 54.4px, weight 400, line-height 65.28px, letter-spacing -0.55px. This is the hero headline.
- **Display (mobile)** {typography.display-mobile}: 36px/43.2px at the same weight and tracking, measured on the mobile pass.
- **Subheading** {typography.subheading}: Canela Deck Web 31.68px, line-height 36.432px, letter-spacing -0.1px: the card titles (Alzheimer's, ALS, Diabetes) and similar.
- **Body** {typography.body}: GT America Standard Regular 18px, line-height 27px, letter-spacing -0.25px. 4671 characters use 18px, by far the most.

Other measured sizes: 24px (227 characters), 42.24px (142, letter-spacing -0.45px, the section heading size), 16px (99, -0.2px) and 36px, 15px. All tracking is slightly negative: -0.25px at 18px and 24px, -0.1px at 31.68px, -0.55px at 54.4px. Weights are 400 (4901), 500 (520) and 700 (410). The footer renders in GT America Standard Bold at 18px on #0e0e0e.

Canela Deck and GT America are commercial typefaces. Substitutes are a recommendation, not a measurement: any low-contrast transitional serif for the headings and any neo-grotesque at 18px for the body.

## Layout

The page is a single centred column with wide gutters and full-bleed photographic bands. Measured paddings in descending frequency: 32px, 52px, 72px, 48px, 23.2px, 24px, 2px and 96px; the only recorded flex/grid gap is 64px (twice). The card row in the capture is three equal columns separated by narrow gaps; its gap was not recorded as a measured value, so the exact size is not stated. The header bar is 90px tall, per the Search button hover measurement (height 90), with the Search and Menu blocks flush right and the wordmark flush left.

Section headings are left aligned in the 42.24px serif, hero text is centred, and the "Cancer" panel sets text at lower left over a dark gradient on a microscopy image, with underlined inline links in white.

## Elevation & Depth

No box shadows were measured (boxShadows is empty). Depth is created by contrast alone: white cards on the #f3f4f4 canvas, a near-black bar against light content, and dark gradients laid over photographs to keep white text legible. There is no blur, glass or drop-shadow vocabulary.

## Shapes

Two radii were measured: 8px ({rounded.xs}) and 50%. The pill token {rounded.pill} (9999px) comes from the generator's token set and corresponds to the circular arrow badges (50% on a square element); the 50% itself is not expressible in the token format. Cards, photographs and the header bar edges are square in the capture; the radius frequency table has only one element each at 8px and 50%, so rounding is the exception.

## Components

Only roles measured by the extractor are declared:

- **nav / nav-link**: white {colors.white} text in {typography.body} on the dark bar. The Search button measures rgb(255, 255, 255) text on rgb(14, 14, 14), 90px high, 0px radius.
- **link**: card links ("Learn more about the breakthrough") in {colors.ink}. The extractor recorded the link's own font-size as 0px because the text sits in a nested span, so no link typography token is declared.
- **footer**: {colors.surface-footer} background, {colors.canvas} text, 96px top and bottom padding, GT America Standard Bold 18px.
- **Story card** (described, not tokenised): white surface, a photograph at top, a 31.68px serif title, 18px body, and a circular slate arrow badge before a two-line link label.

No filled button, form input role or card role was detected. A theme form-control height variable (--form-control-height: 48px) exists in the root variables but no input was rendered on the home page.

## Design System Architecture

No public design system or brand guideline page was found on the site: the home page content links Media Relations (/media-relations) and a Trademark Notice at https://trademark.harvard.edu/pages/trademark-notice, but no visual identity or design system. No search was run. The de-facto system is a WordPress theme: root variables use a `--color-*`, `--spacer-*`, `--form-*` and `--ease-*` naming scheme (for example --color-grout #e3e5e5, --color-neutral-10 #e1e1e1, --spacer-70 clamp(4rem, 5vw + 2rem, 6rem), easing curves such as cubic-bezier(0.25, 0.46, 0.45, 0.94)) and WordPress preset variables (--wp--preset--font-size--large: 36px). Components are theme classes and Gravity Forms variables (--gf-control-*).

## Do's and Don'ts

- Do set headlines in Canela Deck Web with slightly negative tracking and body in GT America Standard 18px/27px.
- Do keep the canvas #f3f4f4 and use white cards for stories.
- Do lead with human, researcher and microscopy photography.
- Do use circular arrow badges to mark "learn more" links.
- Don't add drop shadows; none were measured.
- Don't round cards beyond the measured 8px.
- Don't promote the crimson of the shield into UI fills; it was not measured as a token.
- Don't hard-code the lead headline; it changes with editorial.

## Responsive Behavior

Mobile (390px) was measured. Recorded there: the hero headline drops from 54.4px to 36px with line-height 43.2px; the body stays 18px/27px in GT America Standard Regular; the heading sizes appear at 26px (231 characters) and 36px (228), with 24px, 20px, 30px and 14px also present; the header is #0e0e0e with white text. Column counts, breakpoints and the menu pattern are not measured.

## Iteration Guide

1. Start from the #f3f4f4 canvas, #1e1e1e text and the 18px/27px body.
2. Use Canela Deck Web for any heading at 31.68px, 42.24px or 54.4px with the measured tracking.
3. Compose stories as white cards with 8px corners, a photo, a serif title and a circular arrow link.
4. Close pages with the #0e0e0e footer at 96px vertical padding.
5. Measure additional pages with `node web/scripts/extract-tokens.mjs --slug=harvard-university--<page> --url=<url> --force --no-motion` before adding new tokens.
