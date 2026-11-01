---
version: alpha
name: "Christie's International Real Estate"
category: "Real Estate & PropTech"
description: "Christie's International Real Estate's home page: white and pale blue-grey (#f2f5f7) panels with near-black ink (#171a1c), a champagne-gold (#c9ac77) square Gilroy button, Playfair Display serif headings at 32px and 46px, Gilroy body text tracked at 1.6px, full-bleed property photography and a dark footer."
colors:
  canvas: "#ffffff"
  page-largest: "#f2f5f7"
  ink: "#171a1c"
  primary: "#c9ac77"
  on-primary: "#171a1c"
  ink-muted: "#7e868c"
  black: "#000000"
  line-light: "#d7dce0"
typography:
  display:
    fontFamily: "\"Playfair Display\", Georgia, serif"
    fontSize: 46px
    fontWeight: 100
    lineHeight: 59.8px
  display-mobile:
    fontFamily: "\"Playfair Display\", Georgia, serif"
    fontSize: 28px
    fontWeight: 100
    lineHeight: 36.4px
  heading:
    fontFamily: "\"Playfair Display\", Georgia, serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 41.6px
  body:
    fontFamily: Gilroy, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 1.6px
  button:
    fontFamily: Gilroy, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: 1.6px
  nav:
    fontFamily: Gilroy, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: 1.4px
    textTransform: capitalize
rounded:
  circle-36: 36px
  none: 0px
  pill: 9999px
spacing:
  s1: 8px
  s2: 10px
  s3: 11px
  s4: 12px
  s5: 14px
  s6: 15px
  s7: 16px
  s8: 18px
  s9: 20px
  s10: 22px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 14px 24px
    height: 48px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 14px 24px
    height: 48px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.black}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    height: 24px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
---

## Overview

The measured page is https://www.christiesrealestate.com/ (title "International Homes for Sale and Apartment Rentals | Christie's International Real Estate"), 1280px wide and 4,159px tall. Its own copy, read from the page's embedded content, positions the brand on two claims. "Our Global Network": "tailored solutions and exceptional results for the world's most discerning luxury real estate clientele. Spanning six continents, our distinguished network encompasses the world's premier brokerage firms and the industry's most accomplished real estate professionals." And "Artfully Aligned": "Born out of Christie's auction house – an iconic institution with more than 250 years of history – we uphold a reputation defined by expertise, discretion, and incomparable client service." The footer carries the line "where luxury lives" (with "lives" in italics), "Your connection to the finest homes and experiences no matter the destination or lifestyle," the small tagline "never miss a moment of luxury," and the notice "Each office is independently owned and operated."

The page is a calm editorial property portal. A white header holds the serif wordmark "CHRISTIE'S INTERNATIONAL REAL ESTATE" at the left and capitalized links (Buy, Rent, Sell, Developments, Agents & Offices, Explore) with a round outlined mail button at the right. Below it a full-bleed hero photograph of a luxury house carries the white serif title "Find Your Luxury Home," a wide white search field with the placeholder "Search by Location or Agent," carousel controls at the bottom-left and a white uppercase caption link at the bottom-right. Then come alternating content blocks on pale blue-grey panels with an overlapping photograph ("Our Global Network", "Artfully Aligned"), a "Featured Properties" carousel of photo cards with prices and locations ("$125,000,000", "Villa in Glenbrook, NV"), "A Brand Like No Other" with the magazine promotion, and a dark footer with a newsletter form. Photography is architectural and interior, daylight and dusk, with no people in the captured blocks; the UI stays quiet so the properties carry the page.

## Colors

`{colors.canvas}` (#ffffff) is the page; the largest measured background is the pale panel `{colors.page-largest}` (#f2f5f7, 2,969 area units), which the content blocks configure as "background-gray." Text is `{colors.ink}` (#171a1c, a very dark blue-black) on 2,132 measured characters; white text covers 943 (including the hero title and caption); `{colors.ink-muted}` (#7e868c) covers 133, and `{colors.black}` (#000000) is the color of text typed in the search field and a measured background (512 area units). `{colors.line-light}` (#d7dce0) is a measured light divider tone (44 area units).

The one hue is a muted champagne gold, `{colors.primary}` (#c9ac77), which fills the "Subscribe" and "Explore" buttons (23 area units) and colors 32 characters of text; it is also the border color on 3 elements. Text on the gold is `{colors.on-primary}` (#171a1c). A dark #171a1c fill covers 1,187 area units (the footer). The stylesheet declares a large unrelated palette (a blue-grey neutral ramp from #8593aa to #232b39, red, green and orange ramps, a blue `--c-pill-background-color` of #1458a9); none of these colors were measured on the rendered buttons or text (the rendered primary button is gold with #171a1c text, while `--c-button-primary-color` is declared as #ffffff), so they are not tokenized. Header and nav hover changes were not measured in color (the nav links measured the same color before and after hover).

## Typography

Two families. Playfair Display, a high-contrast serif, sets display and section headings (254 measured characters); the loaded range is 400 to 900, with Georgia as the declared fallback. Gilroy, a sans, sets everything else (3,013 characters) and loads at 400, 500, 600 and 700. The signature is wide tracking: letter-spacing is 1.6px at 12px, 14px, 16px and 18px alike (1,202, 736, 688 and 133 characters), plus 0.84px, 1.4px and 1.2px on small text and 4px on 20px text.

- `{typography.display}`: Playfair Display 46px, computed weight 100, line-height 59.8px, the white hero title "Find Your Luxury Home" (the loaded font range begins at 400).
- `{typography.display-mobile}`: the same at 28px, line-height 36.4px, measured at the mobile viewport.
- `{typography.heading}`: Playfair Display 32px, weight 400, line-height 41.6px: "Featured Properties", "Our Global Network".
- `{typography.body}`: Gilroy 16px, weight 400, line-height 24px, letter-spacing 1.6px.
- `{typography.button}`: Gilroy 16px, weight 500, line-height 24px, letter-spacing 1.6px.
- `{typography.nav}`: Gilroy 14px, weight 400, line-height 20px, letter-spacing 1.4px, capitalized.

By character count the sizes are 16px (1,265), 12px (807), 14px (779), 32px (230), 18px (133), 20px (29), 46px (21) and 100px (3, content not recorded). Weights: 400 covers 3,111 characters, 500 covers 76, 700 covers 30, 600 covers 29 and 100 covers 21. Substitutes if the licensed face is unavailable: Gilroy can be approximated by Montserrat or Poppins with the same 0.1em tracking;

## Layout

The header element measured 130px tall. Measured gaps are 24px (28 elements), 16px (24), 48px (12), 8px (4) and 60px or 80px a couple of times each; measured paddings are 10px (21), 24px (13), 18px (12), 11px (6), 60px (5), 14px (5) and 48px (4). The content blocks are configured in the page's own JSON with a position of "left" or "right," an image width of 40 percent and an "overlap" flag, which is consistent with the capture, where the photo straddles the edge of the grey panel and the two blocks mirror each other. Property cards sit in a four-up row with a "View All" link and prev/next arrows at the right of the section title. Section titles are left-aligned in Playfair Display at the content edge, and the hero title is centered.

## Elevation & Depth

Nearly flat. One shadow was measured, `rgba(0, 0, 0, 0.25) 0px 2px 5px 0px` (1 element), alongside 15 fully transparent zero shadows; the capture shows a faint shadow line under the white header. Everything else relies on tonal panels (`{colors.page-largest}` against white), overlapping photography and the dark footer for separation. The only measured border colors are white (5 elements), gold #c9ac77 (3) and #7e868c (1).

## Shapes

Buttons and inputs are square (0px). Round forms are limited to a 50% radius (5 elements) and one 36px radius element, which was not identified; the capture shows a circular outlined mail button at the top right of the header. Photographs and panels have square corners.

## Components

- **Primary button** (`button-primary`): `{colors.primary}` fill, `{colors.on-primary}` text, `{typography.button}`, square, padding 14px 24px, 48px tall; "Subscribe" measured 130px wide.
- **Secondary button** (`button-secondary`): the same gold fill and type, 113px wide, labelled "Explore".
- **Navigation** (`nav`, `nav-link`): `{colors.ink}` text at `{typography.nav}` over a white header, links Buy, Rent, Sell, Developments, Agents & Offices, Explore, plus Login and Preferences links in the utility group.
- **Hero search** (`text-input`): white field, `{colors.black}` text, `{typography.body}`, 24px inner height and 838px wide, with a magnifier icon at the right.
- **Hero caption link** (`link`): white uppercase 16px Gilroy over the photo, for example "721 FIFTH AVENUE, 57AB, MANHATTAN" in the measured state (the capture shows a different slide's caption, "LUXURY ESTATE IN ESCALERAS, UVITA, COSTA RICA," followed by an arrow).
- **Content block**: pale `{colors.page-largest}` panel, a Playfair Display 32px heading, 16px tracked body copy with underlined inline links, and an overlapping photograph.
- **Property card**: photograph, a price (for example "$69,000,000") and a place line ("Home in Aspen, CO") in small tracked sans text.
- **Footer** (`footer`): dark `{colors.ink}` fill; the extractor measured the footer's own text color as the same #171a1c as its fill, so the token points at white, the color measured on 943 characters elsewhere; the footer's 32px Playfair Display text was measured, and the page JSON gives the newsletter title "Get luxury real estate updates in your inbox" and the "where luxury lives" statement.

## Design System Architecture

No public brand guideline or design system page was found: the home page content (read via its embedded JSON at https://www.christiesrealestate.com/) lists only About Us, Contact Us, Corporate Directory, Magazine, Marketing Programs, Development Marketing, Luxury Perspectives, Privacy Policy, Site Map, Terms of Service and country and market links. The page is assembled from content blocks named "CIRE Custom Arc Block" and "Full Width Chain - CIRE Custom Arc Chain," with images served from images.arcpublishing.com. The stylesheet declares 400 root custom properties in layers: `--global-*` scales (39: font sizes, spacing, font weights, border radii of 0.25rem and 100vmax, z-index, and neutral, red, green and orange ramps), `--c-*` component variables (70: button, pill, link, overline, input) and `--b-*` block variables (270: header, login, social sign-on, article body, right rail). An icon font named revicons is loaded with Georgia, Gilroy and Playfair Display. Many declared values do not match what the page renders, so the rendered measurements, not the declarations, are used for the tokens above.

## Do's and Don'ts

- Do pair a serif (Playfair Display) for titles with a tracked sans (Gilroy) for everything else.
- Do track body and navigation text at 1.6px (0.1em at 16px) and keep nav links capitalized.
- Do reserve the champagne gold `{colors.primary}` for the main buttons and keep them square at 48px tall.
- Do alternate photo-and-text blocks on `{colors.page-largest}` panels with an overlapping image.
- Don't use rounded buttons; the measured buttons have a 0px radius.
- Don't use the declared blue (#1458a9) or neutral ramp colors for buttons; they are not what the page renders.
- Don't set headings in Gilroy or body copy in Playfair Display.
- Don't add heavy shadows; one 0.25-alpha shadow was measured on the whole page.

## Responsive Behavior

Measured at a 390px viewport: the h1 drops from 46px/59.8px to 28px/36.4px and the h2 from 32px to 28px (line-height 36.4px); body copy drops from 16px/24px to 14px/21px with the 1.6px tracking unchanged; the "Explore" button keeps its 16px weight-500 label and becomes 303px wide (113px at desktop). The header measures 56px tall at mobile and its text becomes uppercase 18px weight 600 (line-height 23.4px, letter-spacing 1.7px) for BUY, RENT, SELL, DEVELOPMENTS and further items. By character count mobile sizes are 14px (1,918), 12px (822), 28px (251), 18px (179), 16px (70) and 11px (30). Breakpoint widths, card column counts and the footer layout at mobile were not measured.

## Iteration Guide

1. Start with a white page, `{colors.ink}` text and `{colors.page-largest}` panels for content blocks.
2. Set titles in Playfair Display (32px, weight 400) and everything else in Gilroy 16px with 1.6px tracking.
3. Use champagne-gold square buttons, 48px tall, with `{colors.on-primary}` text.
4. Lead with a full-bleed property photograph and a centered white title over a wide search field.
5. Build content blocks as an overlapping photo and text panel, alternating left and right.
6. Check any value against `web/data/extracted/christies-international-real-estate.json` before adding it.
