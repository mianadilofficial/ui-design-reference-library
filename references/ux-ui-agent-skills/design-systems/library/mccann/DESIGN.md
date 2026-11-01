---
version: alpha
name: "McCann"
category: "Agencies & Studios"
description: "McCann global advertising network home page measured live: black #000000 and #030303 fields, off-white #fcfcfc text, giant light-grey wordmark, Mccan Headline display type up to 360px with Lato 10px fine print, zero radius, no shadows."
colors:
  canvas: "#000000"
  page-body: "#030303"
  ink: "#fcfcfc"
  primary: "#fcfcfc"
  surface: "#efefef"
  ink-2: "#ffffff"
typography:
  heading:
    fontFamily: "\"Mccan Headline\", Arial, Helvetica, sans-serif"
    fontSize: 76.8px
    fontWeight: 300
    lineHeight: 59.136px
  subheading:
    fontFamily: "\"Mccan Headline\", Arial, Helvetica, sans-serif"
    fontSize: 360px
    fontWeight: 300
    lineHeight: 277.2px
  body:
    fontFamily: Lato, Arial, Helvetica, sans-serif
    fontSize: 10px
    fontWeight: 400
    lineHeight: 12px
  link:
    fontFamily: "\"Mccan Headline\", Arial, Helvetica, sans-serif"
    fontSize: 100px
    fontWeight: 300
    lineHeight: 100px
rounded:
  none: 0px
spacing:
  s1: 8px
  s2: 10px
  s3: 16px
  s4: 24px
  s5: 40px
  s6: 48px
  s7: 100px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-2}"
  footer:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
---

# McCann

## Overview
mccann.com ("Home | McCann") is the website of the global advertising network McCann, and its home page is a pure typographic statement. The measured page is 1280px wide and 2400px tall for the document, with an inner scroller of 7988px, so most of the content scrolls inside a container. The capture shows a near-black field with a hamburger menu icon at the top left, Instagram and LinkedIn icons at the top right, a gigantic "McCANN" wordmark spanning the full width in a heavy condensed face filled with light grey (#efefef, the dominant measured area at 24576 weight), the tagline "TRUTH WELL TOLD™" in white capitals at the vertical centre, and a tiny "© McCann 2026" in the bottom-right corner. Further text found in the page includes the headline "THE FINAL COPY OF ILON SPECHT", "CONTACT US" and "HELLO@MCCANN.COM", and a footer with Terms and Conditions, Privacy Policy and cookie links.

The identity is a black and white poster. There is no photography in the capture, no colour accent and no interface chrome beyond a few icons. Scale does the work: the wordmark, the tagline and the headline are set at sizes between 76.8px and 360px, while supporting text sits at 10px to 18px, a ratio that makes the page feel like a billboard with fine print.

The page's voice is as spare as its look. The only sentences visible on the first screen are the tagline, a copyright line and, further down the scroller, a contact invitation with an email address. The brand therefore presents itself through one phrase repeated as a signature rather than through descriptions of services or case-study imagery on the measured screen. A designer extending the system should treat the tagline, the wordmark and the contact block as the three content primitives that the page demonstrably uses.

## Colors
The palette is monochrome and entirely measured.
- `canvas` #000000 is the nav and primary background; `page-body` #030303 is the body and footer background (3159 area weight, against 2765 for pure black).
- `ink` and `primary` #fcfcfc is the off-white used for nearly all text (366 characters weight); there is no separate action colour, so `primary` takes the same value. `ink-2` #ffffff is pure white for the largest headings and the nav (21 weight).
- `surface` #efefef is the light grey of the giant wordmark (24576 area weight, the largest area on the page).
Third-party WordPress preset colours (vivid cyan blue #0693e3, vivid red #cf2e2e and similar `--wp--preset--color--*` values) exist in the root variables; they are editor defaults and are not used on visible brand elements, so none is tokenised. The hover probe on the footer links shows the links keeping near-black text on an off-white fill (#030303 on #fcfcfc) with an underline.

## Typography
Two families are loaded and measured.
- **Mccan Headline** (loaded at 400, measured at weight 300; 273 characters weight) is a heavy condensed display face with an "Arial, Helvetica, sans-serif" fallback. Tokens: `heading` 76.8px, weight 300, line height 59.136px (the "Truth Well Told" tagline); `subheading` 360px, weight 300, line height 277.2px (the large h3 headline); `link` 100px, weight 300, line height 100px (the CONTACT US links). The nav role reports 220px.
- **Lato** (131 characters weight) with Arial and Helvetica fallbacks sets small text: `body` 10px, weight 400, line height 12px (the copyright line) and 14px for footer links.
Other measured sizes: 40px (70 characters weight), 18px, 36px and 23.04px. The scale is extreme at one end, with 360px display text and 10px fine print and little in between.

Font substitutes: "Mccan Headline" is a custom face loaded by the site; the site declares Arial and Helvetica as fallbacks.

## Layout
The layout is edge-to-edge and symmetrical. The header sits at the top with the menu icon left and social icons right, and the wordmark runs the full width beneath it with only the page gutter on each side. The tagline is centred in the middle of the first viewport with large empty black space above and below. Additional sections scroll inside the inner container.

The stylesheet defines a spacing scale in root variables: `--spacings--body-padding` 20px, `--spacings--gap-l` 128px, `--spacings--gap-m` 56px, `--spacings--gap-s` 16px, `--spacings--gap-xs` 8px, `--spacings--padding-m` 16px, `--spacings--padding-s` 8px, `--spacings--padding-xl` 40px, `--spacings--padding-xxl` 60px, `--spacings--padding-xs` 4px, `--spacings--padding-xxs` 1px, plus `--icon-size` 20px. Measured gaps were 40px (18 occurrences) and 10px, and paddings 48px (13), 8px, 16px, 24px and 100px. Tokens: s1 8px, s2 10px, s3 16px, s4 24px, s5 40px, s6 48px, s7 100px.

## Elevation & Depth
No box shadows were measured (the list is empty) and no borders either. The WordPress shadow presets in the root variables (outlined, natural, deep, sharp, crisp) are editor defaults and are not used on measured elements. The page is flat: the only layering is white type on black and a grey wordmark on black.

## Shapes
No border radius was measured: `desktop.frequencies.borderRadii` is empty, so every element computes 0px, recorded as `rounded.none`. The hover probe on social links also reports a 0px radius. The visual shapes in the page are letterforms and simple icons.

## Components
Only a few components were measured.
- **nav**: black `{colors.canvas}` header with `{colors.ink-2}` text; it holds the hamburger and the wordmark text.
- **link**: `{colors.ink}` in `{typography.link}` (100px Mccan Headline), used for the CONTACT US block and the email address.
- **footer**: `{colors.page-body}` background with `{colors.ink}` text at 14px Lato: Terms and Conditions, Privacy Policy, cookies.
- **Social icons**: Instagram and LinkedIn icons at the top right with underline on hover for the text labels; icon size `--icon-size` is 20px.
- **Hamburger menu**: two horizontal bars at the top left (visible in the capture).
No buttons, inputs or cards were detected, so none are declared.

## Design System Architecture
No public design system or brand guideline was found, and no search was run; the page opened was https://mccann.com/. The site is a WordPress build (59 root variables, many being `--wp--preset--*` color, font-size, spacing, gradient, shadow and aspect-ratio presets) with its own `--spacings--*` scale and `--icon-size`. The custom spacing scale is the only brand-authored token set: body padding 20px and gaps and paddings from xxs (1px) to l (128px). Colours and fonts are applied as literal values in the theme's CSS, with Mccan Headline and Lato as the two families.

## Do's and Don'ts
Do:
- Keep the page black and off-white; use `{colors.ink}` for text on `{colors.canvas}`.
- Set the wordmark and key statements in Mccan Headline at very large sizes, with Lato for fine print.
- Keep every corner square (`{rounded.none}`) and avoid shadows.
- Use the `--spacings--*` scale for gaps.

Don't:
- Do not use WordPress preset colours or shadow presets as brand values.
- Do not add accent colours, gradients or photography to the home page treatment; none were measured.
- Do not set mid-size body copy; the measured scale has only display and fine-print sizes.

## Responsive Behavior
At 390px the extraction measured: h2 at 35.1px, weight 300 and line height 27.027px in Mccan Headline, body text at 10px with a 12px line height in Lato, and navigation text at 64px with a 48px line height. How the wordmark scales and the inner scroller behaves on mobile was not measured.

## Iteration Guide
1. Start with a `{colors.canvas}` page and a full-width wordmark in the light grey `{colors.surface}`.
2. Add the white `{typography.heading}` tagline centred in the first viewport.
3. Use `{typography.body}` for the copyright and footer text.
4. Use the root `--spacings--*` values for spacing and keep radii at 0px.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=mccann --url=https://mccann.com/ --force --no-motion`, then run `node web/scripts/verify-designs.mjs --slug=mccann`.
