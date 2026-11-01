---
version: alpha
name: Mandarin Oriental
category: "Travel & Hospitality"
description: "Luxury hotel group site: white and #f5f5f5 canvas with black #000000 ink, sage #b7cdc2 pill buttons (22px and 28px radii), gold #b59060 utility links, Futura PT headlines in uppercase and AvenirNext LT Pro 14px body, over full-bleed destination photography."
colors:
  canvas: "#ffffff"
  page-largest: "#f5f5f5"
  ink: "#000000"
  primary: "#b7cdc2"
  on-primary: "#000000"
  surface-dark: "#242021"
  ink-muted: "#676060"
  accent-gold: "#b59060"
typography:
  display:
    fontFamily: "\"Futura PT\", Garamond, \"Times New Roman\", serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 38.4px
  heading:
    fontFamily: "\"Futura PT Medium\", Garamond, \"Times New Roman\", serif"
    fontSize: 40px
    fontWeight: 500
    lineHeight: 44px
    textTransform: uppercase
  subheading:
    fontFamily: "\"Futura PT Medium\", Garamond, \"Times New Roman\", serif"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 34px
    textTransform: uppercase
  body:
    fontFamily: "\"AvenirNext LT Pro\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  button:
    fontFamily: "\"Futura PT Medium\", Garamond, \"Times New Roman\", serif"
    fontSize: 14px
    fontWeight: 400
  link:
    fontFamily: "\"AvenirNext LT Pro Bold\", Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 14.4px
    letterSpacing: 0.5px
    textTransform: uppercase
rounded:
  xs: 22px
  sm: 28px
spacing:
  s1: 4px
  s2: 5px
  s3: 10px
  s4: 16px
  s5: 20px
  s6: 24px
  s7: 32px
  s8: 40px
  s9: 56px
  s10: 64px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 20px
    height: 36px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 24px
    height: 44px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.accent-gold}"
  nav-link:
    textColor: "{colors.accent-gold}"
    typography: "{typography.button}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
---

## Overview

Mandarin Oriental's global site (`https://www.mandarinoriental.com/en`, page title "Luxury 5-Star Hotels & Resorts | Mandarin Oriental", measured 1280px wide and 5795px tall) is a photography-first luxury hospitality page. A thin black utility bar ("Global Home" at left; "Our Hotels & Resorts", "Sign In / Join Now" and "Languages" at right, all in gold `#b59060`) sits over a full-bleed hero image of a hotel facade with the fan logo in white at top left, a hamburger menu, a sage "Book Stay" pill at top right, and a row of eight white icon-and-label entries along the bottom of the hero: Hotels, Residences, Exceptional Homes, Dine, Wellness, Celebrate, Explore, Gift.

Under the hero a light grey (`#f5f5f5`) band holds a long introductory paragraph set in a 32px light geometric sans: "Mandarin Oriental's acclaimed collection of luxury hotels, resorts and private vacation homes awaits you..." A split promotional block pairs a photograph (a pale green suitcase with the fan emblem) with a dark `#242021` text panel and a sage "Discover" pill. The "STAY" section then shows a tabbed destination carousel (New Destinations, Asia-Pacific, The Americas, Europe, Middle East & Africa) with tall portrait photo cards labelled with an eyebrow ("OLD CATARACT", "OPENING NOVEMBER 2026") and a destination name in white uppercase, plus a white "See More" pill on each card.

The page meta description reads: "World-class accommodations, spas and fine dining await in prestigious destinations." The voice is formal and understated; labels are short and uppercase. The page is deliberately quiet: no bright colors besides a pale sage and a muted gold, no shadows, and generous white space.

## Colors

- **Canvas `#ffffff`** and **page-largest `#f5f5f5`**: white is the page surface; `#f5f5f5` was the largest background area in the extraction (the intro band).
- **Ink `#000000`**: the dominant text color (1069 character-weight) and the utility bar and footer background (`#000000` background had 981 weight).
- **Primary `#b7cdc2`**: a pale sage green used on "Book Stay", "Discover" and secondary pill buttons, with black text (`on-primary #000000`).
- **Surface-dark `#242021`**: the charcoal panel next to the suitcase image; text on it is white.
- **Ink-muted `#676060`**: secondary grey text and the single measured border color.
- **Accent-gold `#b59060`**: utility-bar links and the navigation text color. The measured hover pass shows these links dropping from opacity 1 to 0.9 on hover with no color change.

White text (`#ffffff`, 810 weight) is used over photography and on dark panels, and the measured body paragraph in the dark panel is white.

## Typography

The site loads Futura PT (Book, weight 400) and Futura PT Medium (500) for display, and AvenirNext LT Pro in regular, bold and a "Bold" named face for UI text, plus a face named "MO Exceptional" and FontAwesome. The root variables name them `--FuturaBook`, `--FuturaMedium`, `--FuturaBookItalic`, `--AvenirRegular`, `--AvenirBold`, `--AvenirItalic` and `--MOExceptional`. What "MO Exceptional" is used for was not determined.

- **Display** (Futura PT, 32px, line-height 38.4px, weight 400): the intro paragraph (its tag is a `div`, not a heading).
- **Heading** (Futura PT Medium 40px / 44px, uppercase): the "STAY" section title.
- **Subheading** (Futura PT Medium 32px / 34px, uppercase): headings such as "MAKE YOUR EXPERIENCE EXCEPTIONAL."
- **Body** (AvenirNext LT Pro, 14px / 21px).
- **Button** (Futura PT Medium, 14px) and **link** (AvenirNext LT Pro Bold 12px, 14.4px line height, 0.5px letter-spacing, uppercase) for icon labels such as "HOTELS".

Fallback stacks measured: `Garamond, "Times New Roman", serif` after the Futura faces and `Arial, sans-serif` after Avenir. These are proprietary commercial faces; the closest widely available substitutes are Jost (for Futura PT) and Nunito Sans (for AvenirNext), noted as substitution suggestions, not measurements.

## Layout

Hero, intro text and cards share one left edge in the capture; the inset value itself was not measured. The spacing scale measured from paddings and gaps is 4, 5, 10, 16, 20, 24, 32, 40, 56 and 64px; the most common paddings were 40px and 24px (12 elements each) and gaps were 4px. Sections stack as full-bleed bands: hero, grey intro, split promo (image left, dark text panel right), destination carousel with three portrait cards visible, and a black footer. The carousel shows pagination dots below. The measured page height is 5795px.

## Elevation & Depth

No elevation system is declared. The only measured box shadow is `rgb(255, 255, 255) -1px 0px 0px 0px`, a 1px white left edge, appearing on two elements. Depth is conveyed by photography and by tonal contrast between white, `#f5f5f5`, `#242021` and black.

## Shapes

Buttons are pills. Measured radii: `28px` on 7 elements (the 44px-tall pill buttons such as "Discover" and "See More") and `22px` on 1 element (the 36px-tall "Book Stay" button). Photographs, panels and cards are square-cornered: no other radius was measured. Tokens: `xs 22px`, `sm 28px`.

## Components

- **Book Stay button (button-primary)**: sage `#b7cdc2` fill, black text, Futura PT Medium 14px, 22px radius, 36px tall, horizontal padding 20px.
- **Secondary pill (button-secondary)**: same sage fill and text, 28px radius, 44px tall, horizontal padding 24px. Used on "Discover". The white "See More" pill on image cards is visible in the capture but its fill was not separately measured.
- **Utility links / nav**: gold `#b59060` 12px uppercase Avenir Bold links with small outline icons (magnifier, user, globe).
- **Hero service strip**: eight icon-over-label items in white uppercase 12px type along the bottom of the hero image.
- **Destination card**: tall photo, white uppercase name, small eyebrow label, pill button.
- **Tabs**: plain text tabs; the active tab is bold black with an underline and inactive ones are grey.
- **Footer**: black background with white text.

## Design System Architecture

No public design system, token package or brand guideline is published on the pages opened. The home page links to a press site (`https://press.mandarinoriental.com/`, titled "Mandarin Oriental - Media Centre"), which was opened; it returned a WordPress-based media center page without any readable design guidance in the fetched HTML, so nothing is cited from it. The de-facto system is shipped CSS: the page loads `/corporate/corporate.css` and declares only font-name variables on `:root` (`--FuturaBook`, `--FuturaMedium`, `--AvenirRegular`, `--AvenirBold` and others); no color or spacing variables are declared. Colors and sizes are written directly in component CSS.

## Do's and Don'ts

Do:
- Keep the palette restrained: white, `#f5f5f5`, black, charcoal `#242021`, with sage `#b7cdc2` for buttons and gold `#b59060` for utility links.
- Use uppercase Futura PT Medium for section titles and short uppercase labels for navigation.
- Use pill buttons with black text on sage.
- Lead each section with large photography.

Don't:
- Don't add drop shadows or bright accent colors.
- Don't round photographs or cards; no radius was measured on them.
- Don't set long body copy smaller than 14px / 21px.
- Don't use gold for fills; it was measured only as text color.

## Responsive Behavior

The mobile pass recorded roles and font-size frequencies only. It measured the intro text at the same 32px / 38.4px as desktop, rendered in an element 358px wide, and the "Book Stay" button with the same sage fill and black text; font-size weights on mobile were led by 14px (1138), then 32px, 16px, 12px, 10px, 40px, 24px and 20px. Breakpoints, the mobile menu pattern, the carousel's mobile card count and mobile spacing are not measured.

## Iteration Guide

1. Set the canvas to `#ffffff`, intro bands to `#f5f5f5`, text to `#000000`.
2. Add sage `#b7cdc2` pill buttons (36px or 44px tall, 22px or 28px radius) with black Futura PT Medium 14px text.
3. Use gold `#b59060` only for utility links, at 12px uppercase.
4. Use `#242021` panels for editorial promos with white copy.
5. Show destinations as tall full-bleed photo cards with uppercase white names.
6. Measure hover, focus and mobile breakpoints before documenting them.
