---
version: alpha
name: Appear Here
category: "Design Systems"
description: "Appear Here, the London-based marketplace for renting shops and pop-up retail space: Avenir Next W01 with an 800-weight, widely tracked uppercase hero (43.52px, 8.96px letter-spacing), a near-black #191919 header and footer, a single warm gold #baa082 (hover #dbbd9a) on 2px-radius buttons, white listing grids, and photography of shopfronts. Built on the Bloom React pattern library."
colors:
  canvas: "#ffffff"
  ink: "#383838"
  primary: "#baa082"
  on-primary: "#ffffff"
  surface-grey-light: "#dddddd"
  surface-black: "#191919"
  ink-grey: "#8b8b8b"
  ink-charcoal: "#333333"
  ink-on-dark: "#aaaaaa"
  ink-grey-dark: "#777777"
  primary-hover: "#dbbd9a"
  action-blue: "#19679e"
  danger: "#d55444"
  success: "#48d56c"
  under-offer: "#ea9b52"
  focus-ring: "#5b9dd9"
typography:
  display:
    fontFamily: "\"Avenir Next W01\", \"Helvetica Neue\", Helvetica, \"sans-serif\""
    fontSize: 43.52px
    fontWeight: 800
    lineHeight: 47.872px
    letterSpacing: 8.96px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Avenir Next W01\", \"Helvetica Neue\", Helvetica, \"sans-serif\""
    fontSize: 40px
    fontWeight: 800
    lineHeight: 44px
    letterSpacing: 7px
    textTransform: uppercase
  heading:
    fontFamily: "\"Avenir Next W01\", \"Helvetica Neue\", Helvetica, \"sans-serif\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
    letterSpacing: 0.3px
  subheading:
    fontFamily: "\"Avenir Next W01\", Avenir, Helvetica, Arial"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 19.6px
    letterSpacing: 0.72px
    textTransform: uppercase
  body:
    fontFamily: "\"Avenir Next W01\", Avenir, Helvetica, Arial"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 21.5px
  button:
    fontFamily: "\"Avenir Next W01\", \"Helvetica Neue\", Helvetica, \"sans-serif\""
    fontSize: 12px
    fontWeight: 800
  nav:
    fontFamily: "\"Avenir Next W01\", Avenir, Helvetica, Arial"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22.4px
  link:
    fontFamily: "\"Avenir Next W01\", \"Helvetica Neue\", Helvetica, \"sans-serif\""
    fontSize: 12px
    fontWeight: 700
    lineHeight: 16.125px
    letterSpacing: 0.75px
    textTransform: uppercase
  button-secondary:
    fontFamily: "\"Avenir Next W01\", Avenir, Helvetica, Arial"
    fontSize: 10.992px
    fontWeight: 800
    lineHeight: 50px
  input:
    fontFamily: "\"Avenir Next W01\", \"Helvetica Neue\", Helvetica, \"sans-serif\""
    fontSize: 16px
    fontWeight: 700
    letterSpacing: 0.2px
rounded:
  xs: 2px
  sm: 3px
  md: 14px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 5.71px
  s4: 6px
  s5: 6.74px
  s6: 8px
  s7: 9.14px
  s8: 11.43px
  s9: 16px
  s10: 16.67px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 6.74286px 16px
    height: 30px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.surface-black}"
    textColor: "{colors.ink-on-dark}"
    typography: "{typography.button-secondary}"
    padding: 0px 36.6667px 0px 16.6667px
    height: 50px
  link:
    textColor: "{colors.ink-grey}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.surface-black}"
    textColor: "{colors.ink-on-dark}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.surface-black}"
    typography: "{typography.input}"
    padding: 16px 24px 16px 64px
    height: 70px
  footer:
    backgroundColor: "{colors.surface-black}"
    textColor: "{colors.primary}"
    padding: 35px 0px 45px
---

## Overview

Appear Here (https://www.appearhere.co.uk) is a marketplace for renting shops, market stalls and pop-up spaces, and the homepage presents it in a dark, premium retail tone. A near-black header bar (logo "appear [here]", links "Location guides" and "Magazine", a "How it works" menu, an outlined "Login" and a gold "Sign up") sits over a full-width hero photograph of a clothing rail that is darkened with an overlay. Centered over it, "FIND SPACE FOR YOUR IDEA" appears in white, very widely tracked, 800-weight uppercase at 43.52px, with a one-line description, "Rent shops, markets and pop up stores in cities around the world.", and a white search bar made of a location field, an "APPEAR / Choose date" selector, a "DURATION / Less than 1 month" selector and a square gold search button.

Below, a black "TRUSTED BY" band shows white logos (Apple, Nike, Chanel, Supreme, adidas, Netflix, Spotify). The page then turns white and quiet for a "Spaces we love" grid: two rows of four listing cards, each a photograph of a shopfront above a few lines of gray text ("from £300 /day", the street name, "London • 693 sq ft"), with small carousel arrows over the image. An "EXPLORE FEATURED SPACES →" text link with an underline follows. Then a full-width gold panel, "[ ] PLUS", says "Exclusive spaces. Exceptional Landlords. Verified for quality." beside a bright interior photograph with arched windows, with an outlined "Learn more" button, and a further row of listing cards with "PLUS" tags. A vertical "GIVE FEEDBACK" tab clings to the right edge of the screen.

The voice is brisk and aspirational ("Find space for your idea"), with practical labels in the cards (price per day, area in sq ft). Photography of real London streets (Chelsea, Soho, Covent Garden, Mayfair, Shoreditch) does most of the emotional work, and the interface stays out of its way in white, black and gold.

## Colors

The palette is small and matches the Bloom pattern library's declared brand colors: white, near-black, gold and a gold-light.

- **Canvas #ffffff** is the ground of the listing area and of the search bar; the hero is a photograph with an overlay, so the hero itself is not a flat color. **Surface-black #191919** is the header, nav, footer and the black logo band (Bloom's `--color-black`). **Surface-grey-light #dddddd** is the light gray measured as the largest background area on the capture and is Bloom's `greyLighter`.
- **Ink #383838** is the main text on white (Bloom's `greyDarker`); **ink-charcoal #333333**, **ink-grey-dark #777777** and **ink-grey #8b8b8b** step down for card details, labels and the "TRUSTED BY" caption; **ink-on-dark #aaaaaa** is the nav link color on the black bar, turning white on hover.
- **Primary #baa082** is the gold (Bloom's `--color-gold`), used for "Sign up", the search button, the PLUS panel, tags and the footer link color; **on-primary #ffffff** is the label color; **primary-hover #dbbd9a** is the lighter gold (Bloom's `--color-gold--light`) that the button takes on hover.
- **Action-blue #19679e** is Bloom's action color (`--color-blue`, aliased as `--color-action`), measured on the page as a link color.
- Application colors from the Bloom source file: **danger #d55444**, **success #48d56c**, **under-offer #ea9b52** and **focus-ring #5b9dd9**; they cover states in the product apps and are not prominent on the homepage.

Gold is the only chromatic brand color, and it is a muted metallic tan rather than a bright accent, which is why the page reads as upscale retail.

## Typography

The family is Avenir Next W01 (a web-font build of Avenir Next), loaded at 400, 700 and 800 with Helvetica Neue, Helvetica and sans-serif as fallbacks, plus "soleil" (loaded at 400 and 700) and an icon font named "ah-icons". Bloom's typography file names the same stack, with weights bold (800), demi (700) and regular (400).

- **Display 43.52px / 47.872px**, weight 800, letter-spacing 8.96px, uppercase, white on the hero; on a 390px mobile viewport **40px / 44px** with 7px letter-spacing, also uppercase.
- **Heading 16px / 22.4px**, weight 400 with 0.3px letter-spacing, for section headings like "Spaces we love".
- **Subheading 14px / 19.6px**, weight 700, uppercase with 0.72px letter-spacing for small labels such as "APPEAR" and "DURATION".
- **Body 16px / 21.5px**, weight 400; **nav 14px / 22.4px**, weight 400.
- **Button 12px**, weight 800, for "Sign up"; **button-secondary 10.992px**, weight 800, on a 50px line; **link 12px / 16.125px**, weight 700, uppercase with 0.75px letter-spacing ("EXPLORE FEATURED SPACES"); **input 16px**, weight 700 with 0.2px letter-spacing.

Avenir Next is a licensed family; where unavailable the declared Helvetica Neue and Helvetica fallbacks keep the geometric, open feeling. Hierarchy relies on weight (800 versus 400), uppercase and extreme letter-spacing for headings; body text is small and quiet.

## Layout

The page is a wide, edge-to-edge hero followed by a contained grid. The header is a full-width dark bar 50px tall. The hero is a tall dark image with a centered stack: headline, description and the search bar. Listing sections use a four-column card grid with equal gutters inside side margins, and each card is a photograph on top of a white text block with a hairline border. Secondary content bands (the "TRUSTED BY" strip, the gold PLUS panel) run full width. The PLUS panel is a split: gold text half at the left, photograph half at the right.

Measured spacing includes 4, 5, 5.71, 6, 6.74, 8, 9.14, 11.43, 16 and 16.67px, and the footer pads 35px at the top and 45px at the bottom. The search input is 70px tall with a 64px left padding that leaves room for a magnifier icon. Gray detail text is small, so the grid is dense and information-rich while the imagery stays large.

## Elevation & Depth

Elevation is almost absent. Of the box-shadow values on the stylesheet, `none` dominates, with a faint 4px light-gray shadow (0 2px 4px) on a few elements and a hard-edged double shadow used for a menu-icon effect. Depth is created instead by contrast: a black header, a black logo band and a dark photo overlay against white cards, and by photography. Cards are flat with hairline borders, and the carousel arrows on each photo are small translucent controls.

## Shapes

Shapes are rectangular and sharp. The measured radii are 2px on almost everything (buttons, inputs and cards, 28 occurrences), 3px, and a rare 14px, plus a few 20px and fully round (100%) values on small elements. The effect is crisp and architectural, like retail signage. Buttons are rectangles, the search button is a flat gold square beside the search bar, and the PLUS tags are small gold rectangles.

## Components

**Primary button.** Gold #baa082 fill, white 12px weight-800 label, 2px radius, 6.74px by 16px padding, 30px tall, with a 1px gold border. Hover lightens the fill to #dbbd9a. It is used for "Sign up".

**Outlined buttons.** "Login" in the header and "Learn more" in the PLUS panel are transparent with a thin light outline and light text on dark or gold grounds. Their dimensions were not recorded.

**Secondary button style.** The measured style for secondary controls is a 50px-tall control on #191919 with an #aaaaaa label at 10.992px weight 800 and padding of 16.6667px at left and 36.6667px at right (room for an icon). Which element in the capture carries it was not established.

**Search bar.** A white bar with a 70px-tall text input (16px bold text, 64px left padding for the magnifier), two labeled selectors with uppercase micro-labels and chevrons, and a gold square submit.

**Navigation.** 50px bar on #191919 with 14px links in #aaaaaa that turn white on hover.

**Listing card.** Photograph with carousel arrows, then "from £300 /day" in gray with the price, a street name in darker text, and a "London • 693 sq ft" meta line; PLUS listings add a small gold "PLUS" tag and a gold bottom border.

**Footer.** Black with gold link text and 35px/45px vertical padding.

**Feedback tab and privacy toggle.** A dark vertical "GIVE FEEDBACK" tab on the right and a small round toggle at the lower left are utilities and not part of the brand's components.

## Design System Architecture

Appear Here maintains Bloom, described in its GitHub README as "a central repository for reuseable React components and common styles to promote consistency across various projects at Appear Here" (https://github.com/appearhere/bloom), with a Storybook at https://bloom.appearhere.co.uk. Its source files define the brand colors (white, a #191919 black, gold #baa082 and gold-light #dbbd9a), application colors, a seven-step gray scale, semantic aliases such as `--color-primary` (gold), `--color-action` (blue), `--color-success` and `--color-danger`, and a typography file that composes `font` shorthands from separate variables for weight, size, line height and letter spacing.

The homepage uses it. The page's HTML is a Next.js build whose CSS-module class names carry the prefix `Bloom__` (for example `Bloom__DestinationListingCard__imageContainer`, `Bloom__BtnContainer__root` and `Bloom__typography__fontSmallI`), and its measured colors and font stack equal Bloom's tokens (gold, gold-light, black, greyLighter, greyDarker and the Avenir Next W01 stack). So the system is a React component library plus global CSS custom properties, with components such as listing cards, buttons and icons.

## Do's and Don'ts

- Do use gold #baa082 as the only accent and #dbbd9a for hover; keep everything else black, white and gray.
- Do set hero headlines in 800-weight uppercase with wide tracking and white text over a darkened photograph.
- Do keep corners at 2px; this is a sharp, rectangular system.
- Do let photography carry the page and keep cards flat with hairline borders.
- Do use small, gray detail text for price, location and area.
- Don't add drop shadows to cards or buttons.
- Don't round buttons into pills.
- Don't use the application colors (red, green, orange) as decoration; they signal state.
- Don't set long text in uppercase; reserve it for headings and micro-labels.
- Don't treat the feedback tab or privacy toggle as brand components.

## Responsive Behavior

Measurements were taken at 1280px and at a 390px mobile viewport. The hero headline changes from 43.52px with 8.96px letter-spacing to 40px with 7px letter-spacing, and the line height from 47.872px to 44px, so the headline remains large on phones while its tracking tightens. Bloom's typography tokens use rem sizes, so type scales with the root size. How the four-column card grid and the search bar reflow was not captured at mobile width and is not documented here.

## Iteration Guide

1. Start with canvas #ffffff, ink #383838, surface-black #191919 and primary #baa082 with white labels.
2. Make buttons 2px-radius rectangles, 12px weight-800 labels, 6.74px by 16px padding, hover to #dbbd9a.
3. Set the hero headline in Avenir Next W01 weight 800, uppercase, 43.52px with 8.96px letter-spacing, white over a dark photo overlay.
4. Build listing cards flat and white with a hairline border, a large photograph and three lines of gray text.
5. Use #aaaaaa for nav links on the black bar, and white on hover.
6. Pull state colors (#d55444, #48d56c, #ea9b52, #5b9dd9) from Bloom's colors file, not from new values.
