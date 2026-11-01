---
version: alpha
name: Amazon
category: "Retail & E-commerce"
description: "Amazon.com storefront system: white #ffffff canvas, near-black #0f1111 text, #131921 navigation bar, a yellow #ffd814 action button with 8px radius, Amazon Ember Modern Display 700 headlines over Arial 400 functional text, and dense bordered card grids where imagery carries all the colour."
colors:
  canvas: "#ffffff"
  ink: "#0f1111"
  primary: "#ffd814"
  on-primary: "#111111"
  surface-2: "#232f3e"
  surface-3: "#131a22"
  ink-2: "#dddddd"
  ink-3: "#999999"
  ink-5: "#2162a1"
  ink-6: "#000000"
  hairline: "#d5d9d9"
  button-primary-border: "#fcd200"
  button-secondary-border: "#848688"
  nav-bg: "#131921"
  nav-text: "#cccccc"
typography:
  display:
    fontFamily: "\"Amazon Ember Modern Display\", \"Amazon Ember\", Arial, sans-serif"
    fontSize: 38.25px
    fontWeight: 700
    lineHeight: 38.25px
  display-mobile:
    fontFamily: "\"Amazon Ember Modern Display\", \"Amazon Ember\", Arial, sans-serif"
    fontSize: 32.6454px
    fontWeight: 700
    lineHeight: 32.6454px
  heading:
    fontFamily: "\"Amazon Ember Modern Display\", \"Amazon Ember\", Arial, sans-serif"
    fontSize: 36.108px
    fontWeight: 700
    lineHeight: 36.108px
  button:
    fontFamily: Arial, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 30px
  nav:
    fontFamily: Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 0px
  input:
    fontFamily: Arial, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 15px
rounded:
  xs: 2px
  sm: 3px
  md: 4px
  lg: 5px
  xl: 8px
  2xl: 12px
  3xl: 16px
  4xl: 100px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 4px
  s5: 5px
  s6: 6px
  s7: 7px
  s8: 7.2px
  s9: 7.8px
  s10: 8px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    height: 33px
    borderColor: "{colors.button-primary-border}"
    boxShadow: rgba(213, 217, 217, 0.5) 0px 2px 5px 0px
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 6px 18px 6px 8px
    height: 35px
    borderColor: "{colors.button-secondary-border}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.nav-text}"
  nav-link:
    textColor: "{colors.ink-5}"
    typography: "{typography.nav}"
    padding: 1px 8px 0px 6px
  text-input:
    textColor: "{colors.on-primary}"
    typography: "{typography.input}"
    rounded: "{rounded.xl}"
    padding: 7px 10px 10px 0px
    height: 38px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
    padding: 16px 20px 20px
    boxShadow: rgba(15, 17, 17, 0.5) 0px 0px 14px 0px

---

# Amazon

## Overview

Amazon.com's storefront is a dense, utilitarian retail system: a near-black navigation header (`nav-bg` #131921), a white canvas (#ffffff), near-black text (#0f1111), and a grid of promotional and category cards that carry nearly all of the colour. The brand does not use colour in its chrome; saturated yellow, purple and blue appear inside the imagery tiles, while the interface itself stays neutral so that product photography does the selling. The one action colour measured on the page is a yellow button fill (#ffd814, border #fcd200, label #111111) with an 8px radius, seen on the account flyout's "Sign in" button. The measured homepage was fetched from https://www.amazon.com/ (final URL identical) at a 1280px desktop viewport.

The capture is a very long single scroll of 4-up card rows. A row of four tall hero tiles (free delivery, a Kindle promotion, a Prime Video title, a "Crazy low prices" haul tile) sits directly under the header, followed by repeating bordered cards, each with a bold two-line title, a chevron at the top right, and a 2x2 grid of product thumbnails with small captions. Microcopy is short and promotional ("Crazy low prices", "Apparel under $25", "Level up your PC here"). A delivery-address tooltip ("Dismiss" / "Change Address") overlaps the top left of the capture; it is a geolocation notice, not brand UI, and the stealth re-run of the extractor still shows it. Its buttons are not documented here as brand controls.

Doubt on record: the primary CTA was auto-detected as the "Sign in" button in the account flyout. It is genuine measured Amazon UI, but it is not visible in the capture, and the capture's search button is a different orange that was not measured as a button fill.

## Colors

- **Canvas (#ffffff)** is the page background and the card background.
- **Ink (#0f1111)** is the most-read text colour across the page.
- **Primary (#ffd814)** is the measured button fill; `on-primary` (#111111) is its label colour, `button-primary-border` (#fcd200) its border.
- **Navigation:** `nav-bg` #131921 with `nav-text` #cccccc; the secondary dark panels are `surface-2` (#232f3e) and `surface-3` (#131a22), the footer-like dark bands.
- **Text greys:** `ink-2` (#dddddd) and `ink-3` (#999999) are light-on-dark label colours measured by character count; `ink-6` is pure black (#000000).
- **Links:** `ink-5` (#2162a1) is the measured link blue.
- **Hairline (#d5d9d9)** is the most frequent border colour, used on card outlines and dividers; `button-secondary-border` (#848688) outlines the language/currency selector.

No browser-default link colours were retained. Imagery-driven colour (yellow, purple, sky blue tiles) is not tokenised because it belongs to campaign artwork rather than the interface.

## Typography

Headlines use **Amazon Ember Modern Display** at weight 700, falling back to Amazon Ember and then Arial; the measured desktop h1 is 38.25px on a line height of 38.25px (solid leading, tight stacked headlines), and the mobile h1 is 32.6454px. The section-heading style is 36.108px / 700. Everything functional uses **Arial** at 400: navigation at 14px, the currency selector button at 13px, and the search input at 15px. The page's loaded font list includes Amazon Ember, Amazon Ember Modern Display and Amazon Ember Modern Text in several weights, which fits Amazon's own developer page for Alexa branding that names Amazon Ember Light, Ember Bold and Ember Display as brand typefaces (https://developer.amazon.com/alexa/branding/echo-guidelines/identity-guidelines/typography: Bold for subheads and calls to action, Display for headlines and brand names). That page covers Echo branding, so it is cited only as evidence of the typeface family, not as rules for the storefront.

Amazon Ember is proprietary. Substitutes: Arial is already the declared fallback; Helvetica Neue or Inter for headlines, kept at weight 700 with tight leading, reproduces the bold, compact look.

## Layout

The layout is a card grid. Cards use 8px radius (`rounded.xl`) with 16px 20px 20px padding on white (#ffffff) and a soft shadow `rgba(15, 17, 17, 0.5) 0px 0px 14px 0px` for floating panels. The spacing scale is dense and small: 1px through 8px steps (s1 to s10), reflecting how tightly rows of captions, thumbnails and links are packed. Common measured gaps are 8px, 12px, 10px and 4px. The header is two tiers: a top bar with logo, delivery location, a wide search field and account, language and cart controls, and a secondary bar of department links. The measured header is 99px tall. Page width at the 1280px measurement is fully used; cards run edge to edge with narrow gutters.

## Elevation & Depth

Depth is modest. Cards are mostly flat, separated by hairline borders (#d5d9d9) and white space. Light shadows (`rgba(15, 17, 17, 0.15) 0px 2px 5px 0px`, `rgba(0, 0, 0, 0.13) 0px 2px 4px 0px`) appear on small controls; the measured primary button carries `rgba(213, 217, 217, 0.5) 0px 2px 5px 0px`, and large floating panels (flyouts, the address tooltip) use the 14px-blur shadow listed in the card component. Layering is functional: header above content, flyout above header.

## Shapes

The measured radius ladder is 2px, 3px, 4px, 5px, 8px, 12px, 16px and 100px. The 3px radius belongs to the currency selector, the 8px radius to buttons, the search input and cards, 12px and 16px to image tiles and larger cards, and 100px to pill elements. Buttons are therefore softly rounded rectangles rather than pills. Thumbnails in the 2x2 grids are square-edged or lightly rounded images over pale tinted backgrounds.

## Components

- **button-primary:** fill #ffd814, label #111111, 13px Arial, 8px radius, 33px height, border #fcd200, light shadow.
- **button-secondary:** outlined selector with border #848688, 3px radius, 35px height, padding 6px 18px 6px 8px, text on the dark header.
- **nav / nav-link:** dark header #131921 with #cccccc text, links measured in #2162a1, 14px.
- **text-input:** 15px Arial text in #111111, 8px radius, 38px tall; the search field sits wide in the header.
- **card:** white, 8px radius, 16px 20px 20px padding, the shadow noted above.

## Design System Architecture

No public design system for the Amazon.com storefront was found among the pages opened. The de-facto system is visible in the shipped CSS: hashed custom properties such as `--nav-search-scope-hover` (#d4d4d4) and `--nav-search-labels` (#fff) show a navigation-specific token layer, while many generated names (`--__dChw-...`) hold colours such as #0f1111, #1c89e3 and #ffa41c, indicating a compiled, componentised token set rather than a documented public one. Amazon's developer site publishes Echo/Alexa typography rules (link above), which is the only official typography source consulted.

## Do's and Don'ts

- Do keep chrome neutral: white canvas, #131921 header, #0f1111 text.
- Do reserve #ffd814 for the action button and keep its label #111111.
- Do let product and campaign imagery carry colour.
- Do use 8px radius for buttons and cards.
- Don't introduce gradients or heavy shadows into the interface.
- Don't use Ember Display below headline sizes; use Arial for functional text.
- Don't treat the delivery-address tooltip buttons as brand buttons.
- Don't use the browser default link blue; use #2162a1.

## Responsive Behavior

A separate mobile measurement at 390px shows the h1 reduced from 38.25px to 32.6454px with the same bold Display face. The desktop 4-up card grid was only measured at desktop width; only the type step-down was measured, so no card-column counts are claimed for smaller screens. The header keeps the search field as the dominant control.

## Iteration Guide

1. Start from canvas #ffffff, ink #0f1111, header #131921.
2. Build cards with 8px radius, 16px 20px 20px padding and a #d5d9d9 hairline.
3. Set headlines in Display 700 with line height equal to font size; body in Arial 400 at 14px.
4. Make the single action button #ffd814 with #111111 text and a #fcd200 border.
5. Let imagery supply every other colour; check any new colour against the measured list before adding it.
6. Keep spacing in the 4px, 8px, 12px range for dense rows.
