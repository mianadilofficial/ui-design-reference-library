---
version: alpha
name: JPMorganChase
category: "Banking & Insurance"
description: "JPMorganChase corporate home page: white canvas (#ffffff) with black (#000000) text, a warm sand band (#f4efe7), a charcoal footer-style surface (#202020) and a bronze accent (#8f5a39). Headlines are set in the light Tiempos serif (weight 300, 72px desktop, 40px mobile); body and UI in the Sons sans-serif at 20px and 16px. Buttons and links are fully rounded pills (100px) and nothing carries a shadow."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#8f5a39"
  accent-sky: "#a6d7f0"
  surface-sand: "#f4efe7"
  surface-dark: "#202020"
typography:
  display:
    fontFamily: Tiempos, "Iowan Old Style", "Apple Garamond", Baskerville, "Times New Roman", "Droid Serif", Times, "Source Serif Pro", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", serif
    fontSize: 72px
    fontWeight: 300
    lineHeight: 82.8px
    letterSpacing: "-0.72px"
  display-mobile:
    fontFamily: Tiempos, "Iowan Old Style", "Apple Garamond", Baskerville, "Times New Roman", "Droid Serif", Times, "Source Serif Pro", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", serif
    fontSize: 40px
    fontWeight: 300
    lineHeight: 46px
    letterSpacing: "-0.4px"
  subheading:
    fontFamily: Sons, sans-serif
    fontSize: 28px
    fontWeight: 500
    lineHeight: 32.2px
    letterSpacing: "-0.28px"
  body:
    fontFamily: Sons, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 27px
    letterSpacing: "-0.2px"
  nav:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 16px
    fontWeight: 400
  link:
    fontFamily: Sons, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
    letterSpacing: "-0.16px"
rounded:
  xs: 100px
  pill: 9999px
spacing:
  s1: 8px
  s2: 8.7px
  s3: 9px
  s4: 10px
  s5: 11.2px
  s6: 12.5px
  s7: 15px
  s8: 16px
  s9: 24px
  s10: 32px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
---

## Overview

JPMorganChase presents itself on the measured home page (`https://www.jpmorganchase.com/`, page title "Home | JPMorganChase") as an editorial corporate publication rather than a product site. The first screen is a full-width portrait photograph with a large light-weight serif headline, "2025 Annual Report", set on a white panel that overlaps the picture, followed by a short quotation and a "Read letter" pill. Below it the page alternates large photographs with white or sand-colored text blocks: "Our new headquarters", "Serving with purpose", "Creating economic opportunity for all", "Our impact", "Our communities", "Prioritizing talent and career growth", "See impact in action" and "In the news". The page measures 6054px tall at a 1280px viewport and exposes 356 visible elements, so it is a text-light, image-led page.

The voice is institutional and declarative: short noun-phrase headlines ("Making opportunities happen", "Committed to service, innovation and growth"), one or two sentences of body copy, and one understated call to action per block. There is no promotional urgency, no price, no product grid. Color is almost absent from the interface itself; the only chromatic notes are a bronze accent (#8f5a39) used for the section numeral "01", outlined button labels and the focus outline, and a pale sky blue (#a6d7f0) used for the filled pills "Join our team" and "Read letter".

## Colors

The palette is deliberately small and measured directly from the live page.

- **Canvas `#ffffff`**: the dominant background by area (weight 10420 in the area-weighted survey) and the header background.
- **Ink `#000000`**: the text color for headings, body, nav and links (2732 characters of text weight, against 141 for the next color).
- **Primary `#8f5a39`**: bronze. It is the second most-read text color (the "01" numeral, "Learn more" and "See how we do business" outlined-button labels), the color of the thin rule under the hero, and the value of the site's own `--cwm-focused-outline` and `--cwm-focused-bold-outline` variables. The extractor did not detect a filled primary button, so this value is the accent rather than a button fill.
- **Accent sky `#a6d7f0`**: the value of the root variable `--cwm-actionable-accented-bold-background` and of the filled pills in the header and hero. On hover the text of "Join our team" and "Read letter" switches to this color (measured: `rgb(166, 215, 240)`).
- **Surface sand `#f4efe7`**: the second largest background by area (667), used for the "Creating economic opportunity for all" band.
- **Surface dark `#202020`**: the third background (361), used as a dark block; text on it is `#ffffff`.

Other measured values in the stylesheet (for example `#936846`, `#a8a8a8`, `#666666`, `#cecece`) exist but are not used for large areas; `#cecece` appears once as a border color. The browser default link blue `#0000ee` appears in the extraction for an unstyled anchor and is not a brand color; it is not used here.

## Typography

Two families carry the whole page.

- **Tiempos** (loaded at weight 300) is the display serif. The h1 "2025 Annual Report" is 72px, weight 300, line-height 82.8px and letter-spacing -0.72px on desktop; on the 390px mobile pass it measures 40px with line-height 46px and letter-spacing -0.4px. The measured fallback stack is "Iowan Old Style", "Apple Garamond", Baskerville, "Times New Roman", "Droid Serif", Times, "Source Serif Pro", serif.
- **Sons** (loaded at 400, 500, 600 and 700) is the sans-serif for everything else. It is the family for 2793 characters of text, against 187 for Tiempos. The h3 "Our impact" is 28px weight 500 (line-height 32.2px, letter-spacing -0.28px); body copy is 20px weight 400 (line-height 27px, letter-spacing -0.2px); buttons and links are 16px weight 600 (line-height 24px, letter-spacing -0.16px).

Letter-spacing is consistently slightly negative, about -1% of the font size. The size ladder by character weight is 16px, 20px, 28px, 14px, 64px, 24px, 32px, 72px. Font Awesome 6 (Brands, Sharp Light, Pro) is also loaded as an icon font.

Font substitutes: only the site's own declared fallbacks were measured (the serif stack above and the generic `sans-serif` after Sons).

## Layout

The page is a stack of full-width bands. The hero overlaps a photograph with a white panel that holds the numeral, the headline and the quotation, with a "1 / 4" carousel counter and two circular arrow buttons (radius 50%) to its right. Content bands are two-column: a photograph occupying half of the viewport edge-to-edge on one side and a text block on the other, alternating left and right ("Our new headquarters" has the image on the right, "Serving with purpose" on the left). The sand band stacks a large serif heading beside a short paragraph, followed by columns separated by thin vertical rules ("Our impact", "Our communities").

The measured gap scale in the stylesheet is 16px (18 occurrences), 24px (14), 60px (6), 8px (5), 48px (4), 32px, 64px and 10px. The header is a white bar with the JPMorganChase wordmark on the left and, on the right, the sky "Join our team" pill, a search icon and a menu icon.

## Elevation & Depth

No box-shadow was measured anywhere on the page (`boxShadows` is empty). Depth comes from three things: photographs that bleed to the viewport edge, the white hero panel that overlaps the portrait, and a thin horizontal bronze rule that separates the hero from the header. Surface separation otherwise relies on flat fills (white, sand `#f4efe7`, charcoal `#202020`) and hairlines.

## Shapes

The measured radii are 100px (22 elements) and 50% (6 elements). The 100px value is applied to links and buttons, which render as stadium pills 44px tall; 50% is used for the circular carousel arrows. The site's own variable `--cwm-palette-corner-default` is `999`, consistent with the pill treatment. Photographs and content bands are square-cornered, which sets a sharp rectangle against soft pill controls.

## Components

- **Filled pill**: sky `#a6d7f0` fill, black label in Sons 600 at 16px, trailing arrow icon, 44px tall, 100px radius ("Join our team", "Read letter").
- **Outlined pill**: transparent fill, bronze `#8f5a39` label and a visible outline in the capture, same 44px height and 100px radius ("Learn more", "See how we do business"). On hover the label color measures `rgb(0, 0, 0)`.
- **Circular arrow buttons**: 50% radius with an outline; paired with the "1 / 4" counter in the hero.
- **Header**: white background, black text, wordmark left, pill and two icon buttons right, "Skip to main content" link first in the DOM.
- **Footer links**: "About us", "How we do business", "Leadership", "Awards and recognition" and legal links ("Privacy and security", "Terms and conditions", "Cookies", "Accessibility").
- **News list**: the "In the news" section lists headlines such as funding announcements as text links.

## Design System Architecture

No public design-system documentation or brand-guideline link was found on the pages opened. The de-facto system is visible in the shipped CSS: root variables prefixed `--cwm-` ("actionable-accented", "actionable-accented-bold", "focused-outline", "palette-corner-default") define states for two button tiers. The accented tier uses a transparent background with a bronze foreground (`#8f5a39`) and a black border on hover; the bold tier uses the sky background `#a6d7f0` with a black foreground, and inverts to a black background with a sky foreground on hover (`--cwm-actionable-accented-bold-background-hover: #000`). The focus ring is bronze. Everything else is plain typography on white, sand or charcoal blocks, which keeps the token surface very small.

## Do's and Don'ts

Do:
- Set headlines in Tiempos weight 300 and keep letter-spacing slightly negative.
- Use black on white for text, and reserve bronze `#8f5a39` for numerals, outlined buttons and focus rings.
- Make every button a 100px-radius pill, 44px tall, with an arrow icon.
- Use the sand `#f4efe7` band for editorial emphasis instead of a shadow.

Don't:
- Do not add shadows or gradients; none were measured.
- Do not use bronze or sky as large background fields; the large fields are white, sand and charcoal.
- Do not use the browser blue `#0000ee` for links.
- Do not mix in rounded photographs; images are square-cornered and full-bleed.

## Responsive Behavior

Measured on the 390px mobile pass: the h1 drops from 72px to 40px (line-height 46px, letter-spacing -0.4px); the size ladder shifts so that 64px text becomes 36px and 28px becomes 24px, while 16px, 20px and 14px body sizes are unchanged. Breakpoint values, column collapse, navigation behavior and touch-target sizes on mobile were not measured.

## Iteration Guide

1. Start from white `#ffffff` and black `#000000`; add the sand `#f4efe7` band only for a single emphasized section.
2. Write a serif headline (Tiempos 300, 72px / 40px on mobile) and a 20px Sons paragraph of one or two sentences.
3. Add one pill call to action: sky `#a6d7f0` fill for the primary action, bronze `#8f5a39` outline for secondary.
4. Pair every text block with a full-bleed, square-cornered photograph; alternate sides down the page.
5. Verify against `web/data/extracted/jpmorgan-chase.json` and run `node web/scripts/verify-designs.mjs --slug=jpmorgan-chase`.
