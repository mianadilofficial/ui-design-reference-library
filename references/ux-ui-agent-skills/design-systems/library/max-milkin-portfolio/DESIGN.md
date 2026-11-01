---
version: alpha
name: "Max Milkin Portfolio"
category: "Portfolio"
description: "Creative frontend developer portfolio measured live: near-black #10120f bands alternating with pale sage #c2cabb, white uppercase RF Dewi at 12px, Bebas Neue wordmark, 40px outlined pill links, no shadows."
colors:
  canvas: "#10120f"
  page-body: "#c2cabb"
  ink: "#ffffff"
  primary: "#c2cabb"
  surface-3: "#3b4039"
  ink-5: "#f5f5f5"
  ink-6: "#0b0c0a"
typography:
  display:
    fontFamily: "\"RF Dewi\""
    fontSize: 12px
    fontWeight: 600
    lineHeight: 12px
    letterSpacing: "-0.2px"
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Bebas Neue\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: "-3%"
    textTransform: capitalize
  heading:
    fontFamily: "\"RF Dewi\""
    fontSize: 12px
    fontWeight: 400
    lineHeight: 12px
    letterSpacing: "-0.3%"
    textTransform: uppercase
  subheading:
    fontFamily: "\"RF Dewi\""
    fontSize: 9.33335px
    fontWeight: 400
    lineHeight: 9.33335px
    letterSpacing: "-0.2px"
    textTransform: uppercase
  body:
    fontFamily: "\"RF Dewi\""
    fontSize: 6.66668px
    fontWeight: 400
    lineHeight: 6.66667px
    letterSpacing: "-0.2px"
  nav:
    fontFamily: "\"RF Dewi\""
    fontSize: 9.33335px
    fontWeight: 300
    lineHeight: 9.33335px
    letterSpacing: "-0.266667px"
    textTransform: uppercase
  link:
    fontFamily: "\"RF Dewi\""
    fontSize: 12px
    fontWeight: 300
    lineHeight: 12px
    letterSpacing: "-0.2px"
    textTransform: uppercase
rounded:
  xs: 33.33px
  sm: 40px
spacing:
  s1: 3.33px
  s2: 4px
  s3: 6.67px
  s4: 8.67px
  s5: 10px
  s6: 13.33px
  s7: 14.67px
  s8: 26.67px
  s9: 43.33px
  s10: 53.33px
components:
  button-secondary:
    textColor: "{colors.surface-3}"
    typography: "{typography.link}"
    rounded: "{rounded.sm}"
    padding: 8.66668px 26.6667px
    height: 31px
    borderColor: "{colors.surface-3}"
  link:
    textColor: "{colors.surface-3}"
    typography: "{typography.link}"
    rounded: "{rounded.sm}"
    padding: 8.66668px 26.6667px
    borderColor: "{colors.surface-3}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.canvas}"
    typography: "{typography.subheading}"
    padding: 0px 0px 6.66668px
    height: 19px
  footer:
    textColor: "{colors.ink}"
    padding: 216.667px 0px 26.6667px
---

# Max Milkin Portfolio

## Overview
maxmilkin.com is the personal portfolio of Max Milkin, titled "Max Milkin · Creative Frontend Developer". The measured home page is a long, dark, art-directed scroll of 8261px at a 1280px desktop width. It opens on a full-screen hero: a photographic render of a dark boulder and smaller stones on a pale sage ground, with the white statement "MINIMALISM IS NOT EMPTINESS. IT'S ESSENCE." set directly on the rock, the name wordmark "MAX MILKIN" at top left in a condensed face, and five navigation items at top right: ABOUT, AWARDS, WORKS, EXPERTISE, CONTACT. Below the hero, the page moves into a near-black field, a pale sage band, and an "(ABOUT.)" section where individual letters of the biography are scattered across the screen, with a small portrait photo set in the middle of the letters.

The identity is quiet and sculptural: almost-black (#10120f), one pale sage (#c2cabb), white small capitals, and a great deal of empty space. The site states its own brief in the hero line: restraint as the content. Text is tiny and uppercase, so the type works as texture and signage rather than reading matter. The extractor splits some labels into one character per element (the nav and footer words read letter by letter in the extraction), which is the site's character-animation technique.

## Colors
All values are measured.
- `canvas` #10120f is the dominant background by area (4096 weight) and also the most-used text colour in the measurement (the dark text on the sage band): a green-tinted near-black.
- `primary` #c2cabb is the pale sage; it is the measured band colour (1024 area weight) and the CSS custom property `--bg-color`. `page-body` shares the value because the body background resolved to it.
- `ink` #ffffff is white text on dark; `ink-5` #f5f5f5 is the off-white (`--text-color`) used for much of the light text.
- `surface-3` #3b4039 is a dark olive grey (`--about-color`) used for secondary text and borders on the sage band.
- `ink-6` #0b0c0a is the even darker `--dark-color`.
The root custom properties are `--dark-color` #0b0c0a, `--white` #fff, `--bg-color` #c2cabb, `--about-color` #3b4039, `--text-color-black` #10120f, `--text-color` #f5f5f5 and `--grey-color` grey. The Swiper blue #007aff (`--swiper-theme-color`) is a library default and is not a brand colour. Usage: dark and sage alternate as full-width bands, and white type sits on the dark and the photographic hero.

## Typography
**RF Dewi** is the interface family (1764 characters weight), loaded at 300, 400, 600 and 900. **Bebas Neue**, a condensed all-caps face loaded at 400, covers 58 characters (the "MAX MILKIN" wordmark and mobile headings).
- `display` RF Dewi 12px weight 600, line height 12px, letter spacing -0.2px, uppercase.
- `heading` RF Dewi 12px weight 400, line height 12px, letter spacing -0.3%, uppercase: the large statement lines.
- `subheading` RF Dewi 9.33335px weight 400, uppercase, for labels such as "( CONTACT FORM. )".
- `body` RF Dewi 6.66668px weight 400, letter spacing -0.2px, the footer copyright text.
- `nav` RF Dewi 9.33335px weight 300 uppercase; `link` RF Dewi 12px weight 300 uppercase for the "ABOUT ME" link.
- `display-mobile` Bebas Neue 16px weight 400 capitalised, letter spacing -3%.
Text sizes are measured as small because the stylesheet scales sizes with the viewport; very large display sizes exist too: 140px, 101.333px, 68.6668px and a 553.334px glyph size appear in the size-by-characters list. The most used size is 12px (803 weight).

Font substitutes: RF Dewi is self-hosted by the site and its foundry licence was not checked; the measured font stack declares no fallback, so none is documented. Bebas Neue is an open-source Google Font.

## Layout
The layout is full-bleed bands. Top navigation spans the width with the wordmark at the left and five links evenly spaced at the right. Content bands run from the hero (a 600px-high viewport in the capture) through a tall dark band, a sage band and the About section. The About section places a "(ABOUT.)" label at the left, a section number "[ N.002 ]" at the right and the scattered letters between. The footer carries a large top padding of 216.667px and a bottom padding of 26.6667px, with the nav words repeated.

Spacing measured on the page: 3.33px, 4px, 6.67px, 8.67px, 10px, 13.33px, 14.67px, 26.67px, 43.33px and 53.33px (`spacing` s1 to s10), plus larger paddings of 60px, 116.667px, 126.667px, 176.667px, 200px and 216.667px for section spacing. These are viewport-scaled values, which is why they are fractional.

## Elevation & Depth
No box shadows were measured. Depth is photographic: the hero render has real shadows cast by the stones on the ground, which are part of the image. The interface layer stays flat: type and thin elements on solid bands. A translucent white (#ffffff4d) also appears as a background on a small element.

## Shapes
Two radii were measured: 40px (10 elements) and 33.3334px (3 elements), recorded as `rounded.sm` and `rounded.xs`. They belong to pill-shaped outlined links such as "ABOUT ME", which carry a 40px radius, padding of 8.66668px 26.6667px and a border. The portrait photo in the About section is a small rectangle with square corners in the capture, and no other rounded shapes were measured.

## Components
- **button-secondary / link**: an outlined pill, text and border in `{colors.surface-3}`, `{typography.link}`, radius `{rounded.sm}` (40px), padding 8.66668px 26.6667px, height 31px; the "ABOUT ME" link. No filled primary button was detected.
- **nav**: white text, `{typography.nav}`, five uppercase links.
- **text-input**: the contact form field, text in `{colors.canvas}`, `{typography.subheading}`, no side padding and 6.66668px bottom padding, height 19px: an underline-style input rather than a boxed one.
- **footer**: white text with 216.667px top padding and 26.6667px bottom padding.
No hover changes were recorded (the hover list is empty).

## Design System Architecture
No public design system was found, and no search was run; the page opened was https://www.maxmilkin.com/. The de-facto system lives in root custom properties: `--dark-color`, `--white`, `--bg-color`, `--about-color`, `--text-color-black`, `--text-color` and `--grey-color`, which define the entire palette, plus the Swiper carousel properties `--swiper-navigation-size` (44px) and `--swiper-theme-color`. Sizes are viewport-scaled, which explains the fractional pixel values. Fonts are self-hosted as RF Dewi and Bebas Neue.

## Do's and Don'ts
Do:
- Alternate `{colors.canvas}` and `{colors.primary}` bands and keep type uppercase and small.
- Use white `{colors.ink}` on the dark bands and on the hero image.
- Use outlined pill links at 40px radius.
- Leave very large empty regions; they are part of the composition.

Don't:
- Do not use the Swiper blue (#007aff) or the plain `grey` custom property as brand colours.
- Do not add shadows or filled buttons; none were measured.
- Do not set long paragraphs; the measured body size is only 6.66668px and is used for footer text.
- Do not set Bebas Neue as the main interface face; it covers only 58 characters.

## Responsive Behavior
The mobile pass at 390px measured different font sizes: the most used sizes are 12px, 14px, 10px and 16px; the h1 and h2 are 16px at weight 400 with 16px line height (Bebas Neue and RF Dewi respectively), body text is 9px, the primary call to action is 12px, and navigation is Bebas Neue 20px weight 300 with 20px line height. Large display sizes on mobile include 90px and 50px. Layout and stacking changes were not measured.

## Iteration Guide
1. Start with a `{colors.canvas}` page, a sage `{colors.primary}` band and a full-bleed hero image.
2. Set every label in RF Dewi uppercase at the small sizes in `typography`.
3. Use outlined 40px pills for secondary links.
4. Keep all values as viewport-scaled; re-measure with `node web/scripts/extract-tokens.mjs --slug=max-milkin-portfolio --url=https://www.maxmilkin.com/ --force --no-motion` if the viewport assumptions change.
5. Run `node web/scripts/verify-designs.mjs --slug=max-milkin-portfolio` after any edit.
