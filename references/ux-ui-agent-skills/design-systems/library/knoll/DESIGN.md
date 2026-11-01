---
version: alpha
name: Knoll (Home shop)
category: "Home & Furniture"
description: "Knoll's home-furnishings shop (knoll.com/shop) is a restrained gallery-style store in Haas Grotesk Display Web, charcoal #333333 on white with warm #f1f1e9 bands, a red-orange #dc3a0f accent rule, square 0px buttons and full-bleed room photography."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  primary: "#333333"
  on-primary: "#ffffff"
  surface-warm: "#f1f1e9"
  surface-ivory: "#f9f7f5"
  ink-muted: "#63656a"
  accent-red-orange: "#dc3a0f"
typography:
  display:
    fontFamily: "\"Haas Grotesk Display Web\", Arial, -apple-system, \"system-ui\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 40.0451px
    fontWeight: 500
    lineHeight: 44.0496px
    letterSpacing: 0.3px
  heading:
    fontFamily: "\"Haas Grotesk Display Web\", Arial, -apple-system, \"system-ui\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 16.5488px
    fontWeight: 500
    lineHeight: 26.4781px
    letterSpacing: 0.4px
  subheading:
    fontFamily: "\"Haas Grotesk Display Web\", Arial, -apple-system, \"system-ui\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 13.6993px
    fontWeight: 500
    lineHeight: 16.4392px
    letterSpacing: 0.4px
  body:
    fontFamily: "\"Haas Grotesk Display Web\", Arial, -apple-system, \"system-ui\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 16.5488px
    fontWeight: 400
    lineHeight: 26.4781px
    letterSpacing: 0.4px
  button:
    fontFamily: "\"Haas Grotesk Display Web\", Arial, -apple-system, \"system-ui\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 12px
    fontWeight: 500
    lineHeight: 14.4px
    letterSpacing: 0.4px
  link:
    fontFamily: "\"Haas Grotesk Display Web\", Arial, -apple-system, \"system-ui\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 14px
    fontWeight: 500
    lineHeight: 14px
    letterSpacing: 0.4px
    textTransform: capitalize
  input:
    fontFamily: "\"Haas Grotesk Display Web\", Arial, -apple-system, \"system-ui\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 14px
    fontWeight: 400
rounded:
  xs: 2px
  sm: 5px
  none: 0px
spacing:
  s1: 3px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 11px
  s7: 12.5px
  s8: 14px
  s9: 15px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 15px
    height: 35px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
    padding: 14px 20px
    height: 44px
    borderColor: "{colors.canvas}"
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
    padding: 14px 20px
    borderColor: "{colors.canvas}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 16.5488px 24.8232px
  text-input:
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 11px
    height: 44px
    borderColor: "{colors.canvas}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 80px 0px 0px
---

## Overview

The queued URL https://www.knoll.com/ is a two-choice entry page ("Welcome to Knoll / How can we help you today?", with tiles "Shop for Home" and "Plan for Workplace" and a "Located outside North America?" strip linking to knoll-int.com) whose measurement showed no radius and a Helvetica Neue font stack. That splash links to /shop, which is the real storefront, so https://www.knoll.com/shop (title "Knoll | Modern & Contemporary Furniture Design for the Home") was re-measured and is documented here, named for the measured site.

The shop page opens with a slim utility row (Shop for Home, Plan for Workplace, Shop New Arrivals, Favorites, Support, Trade, Locations), a header with the red Knoll wordmark and category links (Living, Dining, Bedroom, Home Office, Outdoor, Designers, New Arrivals, Bestsellers, Explore Knoll) plus search, account and bag icons, then a full-bleed hero photograph of a concrete-and-glass interior with a white headline "An architectural evolution", the subline "Introducing the Knoll Chermayeff Storage Collection" and a white "Shop The Collection" button. Next are "Browse by category" (eight square photo tiles with underlined captions: Lounge Chairs, Side & Coffee Tables, Storage, Sofas & Sectionals, Dining Chairs, Dining Tables, Bedroom, Outdoor Dining), editorial split sections ("Meet Sam Chermayeff", "Florence Knoll expansion"), a warm band of four trust icons (Authenticity guaranteed, Up to 12-year warranty, Made for you, Affirm financing), "Shop new arrivals" product rows with prices, an "Explore" row, and a charcoal footer with a newsletter field.

A regional-site modal ("Are you visiting Knoll.com from outside the US?") and its scrim appear in the capture; the extractor recorded the scrim as hidden (page.consentOverlaysHidden) and it is not documented as brand UI.

## Colors

The palette is neutral and warm. Charcoal #333333 is the dominant text color (1,842 characters) and the footer fill; white #ffffff is the canvas (highest-weight background) and the text on the footer and hero. A warm putty #f1f1e9 fills the trust-icon band, and a lighter ivory #f9f7f5 appears in a smaller area. Secondary text is #63656a. The one saturated color is a red-orange, measured as background #dc3a0f on small elements (the short rule beneath "Shop new arrivals" and "Explore" headings), and the Knoll wordmark is also drawn in a red-orange. Photography supplies the rest: forest green, burgundy, deep blue and red furniture. The shipped CSS includes Bootstrap defaults (--yellow #ffc107, --green #28a745, --pink #e83e8c, --teal #20c997) alongside --black #111, --gray-dark #63656a and --danger #a60415; the Bootstrap hues are framework defaults and are not brand colors.

## Typography

Haas Grotesk Display Web (400, 500, 700) is the sole brand face, with Arial and system fonts as fallbacks. The h1 "An architectural evolution" is 40.0451px at weight 500 with 44.0496px line height and 0.3px tracking, in white over the hero. Body and nav copy is 16.5488px/26.4781px with 0.4px tracking; weight 400 for body, 500 for headings of that size. Category captions (h3) are 13.6993px/16.4392px at 500 with 0.4px tracking, underlined. Buttons are 12px/14.4px at 500 and secondary links are 14px at 500 with capitalized text. Inputs use 14px. Positive letter-spacing of 0.3px to 0.4px on every role gives the page an airy, gallery-label feel.

## Layout

The page is 1280px wide and 5116px tall. Content sits in a centered container with large vertical gaps. Category tiles form a four-column, two-row grid of square photographs with captions below; editorial sections alternate image and text halves; new-arrival products scroll horizontally with a fifth item cut by the container edge; the explore row is four equal tiles. The trust band is a full-width putty strip with four equal columns. The shipped CSS defines --breakpoint-md: 769px and --breakpoint-xxl: 1680px. Measured spacing steps: 3px, 4px, 6px, 8px, 10px, 11px, 12.5px, 14px, 15px and 16px; footer padding is 80px at the top, nav-link padding 16.5488px 24.8232px, input padding 11px.

## Elevation & Depth

Flat. The only box-shadow measured is rgb(255, 255, 255) 0px 0px 0px 1px inset, a 1px white inner ring on a control. Separation is by whitespace, tonal bands (#f1f1e9) and the red-orange hairline rules under section titles. The regional modal is a white card on a dimmed scrim, not part of the page design.

## Shapes

Corners are square. The extraction recorded only two radius values: 2px and 5px, each on two elements; buttons, nav links, inputs and the footer compute 0px. Imagery is rectangular and cropped square or wide without rounding.

## Components

- Primary button: white fill, charcoal #333333 Haas Grotesk 500 12px text with 0.4px tracking, 0px radius, padding 0px 15px, height 35px ("Shop for Home"; on the hero, "Shop The Collection" is the same white style).
- Secondary link-button: white fill, charcoal 500 14px text, capitalized, padding 14px 20px, height 44px.
- Category tile: square photograph with an underlined 13.7px caption below.
- Product card: photo on white, name at 500, price, color count ("129 Colors"), and a small label (Bestseller, New Arrival, New options).
- Section title: 500-weight title with a short red-orange rule beneath it.
- Text input: 14px text, padding 11px, height 44px, square, with a "Sign Up" button in the newsletter row.
- Footer: charcoal #333333, white text, padding 80px 0px 0px, link columns and a currency select.

## Design System Architecture

No public design system or brand guideline page was opened. The shipped CSS uses Bootstrap variables (--breakpoint-*, --yellow, --green, --pink, --teal) and Swiper carousel variables (--swiper-navigation-size: 44px, --swiper-scrollbar-bg-color), plus a few brand variables (--black: #111, --gray-dark: #63656a, --danger: #a60415). The brand is therefore expressed through typography, photography and tone rather than a published token set.

## Do's and Don'ts

Do let room photography carry each section, use charcoal on white with putty bands, set everything in Haas Grotesk with slight positive tracking, and underline captions. Do use the red-orange only as a short rule or small accent.

Don't round buttons, tiles or inputs. Don't use Bootstrap greens, yellows or pinks. Don't add shadows or gradients to cards. Don't use more than one typeface, and don't document the regional modal as a component.

## Responsive Behavior

Not measured. The mobile pass for this page landed on a security-check page ("This website uses a security service to protect against malicious bots", title "www.knoll.com", system-ui font), so no valid mobile data exists for the storefront. The only responsive facts from the shipped CSS are the --breakpoint-md: 769px and --breakpoint-xxl: 1680px variables, and their use was not measured.

## Iteration Guide

1. White canvas, charcoal #333333 text and footer, putty #f1f1e9 for supporting bands.
2. Haas Grotesk Display Web at 16.5488px body with 0.4px tracking; 40px headlines at 500.
3. Square buttons (white fill, charcoal text on photographs; charcoal fill for solid buttons) and square image tiles with underlined captions.
4. Add a short red-orange #dc3a0f rule under section titles.
5. Never invent mobile behavior; re-measure it from a page that is not behind a bot check.

## Additional Notes

Imagery is the brand's strongest asset: lived-in, daylit interiors with architectural concrete, large windows and plants, shot with a documentary rather than showroom feel, and cut-out product photographs on plain white for the new-arrivals row. The editorial sections use a small square "+" hotspot button at the lower left of the photograph. Microcopy is short and declarative ("Authenticity guaranteed", "Made for you", "Buy now, pay over time"), and calls to action are underlined text links such as "Learn More" and "Shop the Collection" as well as the white button. The hover state measured on the modal close control changes text from rgb(51, 51, 51) to rgb(17, 17, 17); no other hover treatment was measured. Product labels (Bestseller, New Arrival, New options) are small plain text rather than filled badges.
