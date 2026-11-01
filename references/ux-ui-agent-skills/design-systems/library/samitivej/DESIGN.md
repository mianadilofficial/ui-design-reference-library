---
version: alpha
name: Samitivej Hospital
category: "Thai Brands"
description: "Samitivej Hospital (samitivejhospitals.com), Bangkok private hospital: Helvetica Neue uppercase headings with 1px to 2px tracking, deep green #004729 and brass gold #b18e50, sage #dce0d6 bands, square 50px buttons, soft white and gold-tinted panels, no shadows."
colors:
  canvas: "#ffffff"
  page-largest: "#cccccc"
  ink: "#004729"
  primary: "#004729"
  on-primary: "#ffffff"
  surface-black: "#000000"
  gold: "#b18e50"
  ink-dark: "#212529"
  ink-brown: "#342e25"
  footer-bg: "#bca988"
typography:
  display:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 40px
    fontWeight: 700
    lineHeight: 48px
    letterSpacing: 1px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 30px
    fontWeight: 700
    lineHeight: 36px
    letterSpacing: 1px
    textTransform: uppercase
  subheading:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: 1.2px
  body:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 300
    lineHeight: 30px
  button:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
    letterSpacing: 1px
    textTransform: uppercase
  link:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 1px
    textTransform: uppercase
rounded:
  xs: 4px
  sm: 50px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 15px
  s9: 20px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 6px 12px
    height: 50px
  link:
    textColor: "{colors.surface-black}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  text-input:
    textColor: "{colors.gold}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 1px 2px
    height: 23px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.gold}"
    rounded: "{rounded.none}"
    padding: 0px 0px 100px
---

# Samitivej Hospital

## Overview

The measured page is https://www.samitivejhospitals.com/ (title "Hospital in Bangkok, Thailand | Samitivej"), the English home of Samitivej, a private hospital group in Bangkok. The page feels more like a luxury hotel than a clinic: a pale glass-blue hero slider ("ARE YOU AT RISK FOR GENETIC DISEASE?" at slide 2 of 3, with a family inside a bubble over a DNA backdrop) carries a gold three-part action panel (FIND A DOCTOR, INQUIRY, APPOINTMENT) with a clipped corner at its upper right. Beneath it a sage-green band presents "OUR SPECIALTY CENTERS" as a row of tall photo tiles with white captions on a dark gradient (Cardio-Neuro-Vascular Intervention Center, Newborn and Pediatric Surgery Center, Pediatric Gastrointestinal and Liver Center, Pediatric Orthopedic Clinic) with a "SEE ALL" link and three pagination dots. A white section follows ("LEADING INTERNATIONAL HOSPITAL IN THAILAND"). A round Messenger-style chat button and a small accessibility widget float over the page; they are third-party and are not documented as brand UI.

The brand mark is a green-and-gold cross in a square beside Thai and Latin wordmarks ("สมิติเวช SAMITIVEJ"). Two-tone headings are a signature: the first line in bold gold capitals, the second in light gold ("OUR SPECIALTY" / "CENTERS").

Microcopy is short and directive: capitalised verbs and nouns such as "SEE ALL", "READ MORE", "SEE DETAILS", "FIND A DOCTOR" and "APPOINTMENT", each paired with a small chevron or line icon. The hero headline asks a question in capitals and answers with a lighter sentence-case subline ("Personalized Healthcare Roadmaps for All Ages"). Imagery is bright, clean and clinical: families, children, equipment and hands, shown with soft focus.

## Colors

The brand pair is deep green `primary` #004729 (also `ink`, the fill of the SEE DETAILS buttons and the color of body copy on 432 characters) and brass `ink-2` #b18e50 (renamed `gold` below), used on 602 characters: the two-tone headings, input text, the footer text and the border of one element. `canvas` is white #ffffff; `page-largest` #cccccc (3072 weight) is the largest painted fill in the capture, with white (2765), a translucent #ebebeb66 (1541), black (1121), the sage band #dce0d6 (1042), #f9f9f9 (883), #dedede (838) and #ebebeb (656). `footer-bg` #bca988 (a muted gold-beige) fills the footer, whose text is gold #b18e50. Text colors: white on photographs and the gold panel (1017 characters), #000000 for the hero headline and READ MORE links (235), #212529 (209) and a warm dark brown #342e25 (80). Black fills (#000000, 1121 weight) are the dark gradient under tile captions. Borders measured: #000000 (2), #b18e50, #004729, #ffffff and #e8e8e8 (1 each).

## Typography

Helvetica Neue is the only family (2575 characters) in weights 300, 400 and 700 (plus 500 in use), with Noto Sans SC loaded at 400 and 700 for Chinese text. Measured roles: `display` is 40px / 48px, weight 700, uppercase, 1px tracking (the hero headline, #000000); `display-mobile` is 30px / 36px with the same weight and tracking; `subheading` is 20px / 24px, weight 500, 1.2px tracking; the "OUR SPECIALTY" heading measured 30px / 36px, weight 700, 2px tracking, uppercase, gold; `body` is 20px / 30px, weight 300, green #004729; `button` is 14px / 21px, weight 400, 1px tracking, uppercase; `link` is 16px / 24px, weight 400, 1px tracking, uppercase ("READ MORE"). Size counts: 20px (1452 characters), 16px (612), 30px (206), 40px (186), 14px (59), 24px (38), 60px (16). Weights: 300 (982), 400 (755), 500 (474), 700 (364). The system pairs light 300 body at a generous 20px with tracked bold capitals for headings and labels.

## Layout

The header is a transparent bar over the hero: logo at left, a search field with a gold underline ("What are you looking for?"), an EN language selector box and a phone icon at right; a vertical "Menu" button with a hamburger icon hangs at the left edge and "Scroll" sits at the right edge. The hero text column starts at the center of the page; the gold action panel is anchored at the bottom right of the hero. The specialty row is a horizontal carousel of equal tall tiles with 1px light gaps and a cropped fifth tile. Paddings measured: 20px (33 uses), 15px (22), 55px (14), and 1px, 6px, 10px, 30px and 75px (3 each). The footer padding is `0px 0px 100px`. Buttons measured 50px high with `6px 12px` padding.

## Elevation & Depth

Flat. The only shadow measured is `rgba(204, 204, 204, 0.5) 0px 2px 10px 0px` (1 use). Depth comes from translucent layers (#ebebeb66 over the hero), photographs with dark bottom gradients, a faint geometric triangle pattern on the sage band, and the clipped-corner gold panel.

## Shapes

Square by default. `rounded.none` 0px applies to buttons, links, inputs and the footer. Measured non-zero radii are few: 100% (3 uses, round dots and icons), 4px (1, `xs`), 50px (1, `sm`) and 999px (1). The gold action panel has a diagonal clipped corner in the capture rather than a radius; tiles and photographs are rectangular.

## Components

**Primary button (SEE DETAILS)**: green #004729 fill, white Helvetica Neue uppercase 14px with 1px tracking, 50px high, `6px 12px` padding, 0 radius.

**Link (READ MORE)**: black uppercase 16px with 1px tracking, an underline rule and a chevron.

**Action panel**: gold #b18e50-family fill with three icon-above-label items (FIND A DOCTOR, INQUIRY, APPOINTMENT) separated by thin white rules.

**Specialty tile**: photograph with a dark gradient and a white 20px caption at the bottom left.

**Text input**: gold #b18e50 text, 14px / 21px, 0 radius, `1px 2px` padding, 23px high, with a gold underline in the header search.

**Footer**: #bca988 fill with gold text: "To top", "Contact Us", a phone number and the copyright line.

## Design System Architecture

No public Samitivej design system, brand-guideline page or token package was opened for this brief, so there is no official source to cite. The shipped CSS has 30 root variables that are the Bootstrap defaults (`--light` #f8f9fa, `--indigo` #6610f2, `--yellow` #ffc107, `--green` #28a745, `--pink` #e83e8c, `--purple` #6f42c1 and a system font stack); the page does not use them for brand UI. The brand's actual values are literals: green #004729, gold #b18e50, sage #dce0d6, footer #bca988 and Helvetica Neue.

## Do's and Don'ts

- Do set headings in uppercase Helvetica Neue bold with 1px to 2px tracking.
- Do use the two-tone heading: first line bold gold, second line light gold.
- Do use green #004729 for buttons and body copy and gold #b18e50 for headings and footer text.
- Do keep buttons and inputs square.
- Do place white captions over dark gradients on photo tiles.
- Don't use Bootstrap's green #28a745 or yellow for brand UI.
- Don't add drop shadows; only a 0.5-alpha gray hairline shadow is measured.
- Don't document the chat bubble or accessibility widget as brand UI.

## Responsive Behavior

A 390px mobile pass was recorded. The h1 measured Helvetica Neue 700 at 30px / 36px, uppercase, 1px tracking, color #000000. Mobile size counts are 20px (2090 characters), 30px (478), 16px (183), 18.11px (61), 24px (38), 13px (31), 60px (16) and 14px (13). Column counts, navigation behavior and breakpoints were not measured.

## Iteration Guide

1. Start with white, sage #dce0d6, green #004729 and gold #b18e50.
2. Set Helvetica Neue 300 20px / 30px body; headings 700 uppercase with 1px to 2px tracking.
3. Build square 50px buttons with `6px 12px` padding and 1px tracked capitals.
4. Use dark gradient overlays for photo captions.
5. Gate: `node web/scripts/verify-designs.mjs --slug=samitivej`.
