---
version: alpha
name: Asset World Corporation
category: "Thai Brands"
description: "Asset World Corporation (AWC), Thailand's integrated lifestyle real-estate group: white #ffffff canvas, charcoal #1a1a1a ink, burgundy #a32035 for section labels and hover, Arial throughout with 6px-tracked 30px uppercase statements, full-bleed hotel photography and 3px to 4px radii."
colors:
  canvas: "#ffffff"
  ink: "#1a1a1a"
  primary: "#a32035"
  surface-soft: "#f5f5f5"
  surface-rule: "#ebebeb"
  ink-muted: "#6d6f72"
  ink-bootstrap: "#212529"
  text-input-text: "#000000"
typography:
  heading:
    fontFamily: Arial, sans-serif
    fontSize: 18px
    fontWeight: 700
    lineHeight: 27px
    letterSpacing: 0.5px
  subheading:
    fontFamily: Arial, sans-serif
    fontSize: 30px
    fontWeight: 400
    lineHeight: 45px
    letterSpacing: 6px
  body:
    fontFamily: Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.5px
rounded:
  xs: 3px
  sm: 4px
spacing:
  s1: 2px
  s2: 3px
  s3: 6px
  s4: 7px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 15px
  s9: 16px
  s10: 17px
components:
  link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.body}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.body}"
    padding: 6px 20px 8.8px 44px
    height: 55px
  footer:
    textColor: "{colors.ink}"
    padding: 48px 0px
    borderColor: "{colors.surface-rule}"
---

## Overview

The measured page is assetworldcorp-th.com/en/home, titled "Asset World Corporation" (English). AWC introduces itself as "Thailand's leading integrated lifestyle real estate group with a sustainable development pipeline for future growth and the potential for long-term capital appreciation." The home page is a corporate-portfolio site: a centered logo with a stepped-roof pyramid mark above the wordmark "ASSET WORLD CORPORATION", a single-row uppercase menu (About Us, Businesses and Brands, Corporate Governance, Sustainability, Investors, News and Media, AWC Digital, Growing with AWC), a language selector "EN" and a search icon.

Below the menu a full-width hero photograph of a resort pool and bridge at dusk carries a hotel-brand mark ("Marriott Hua Hin") at the upper right, and its lower corners are visibly rounded. Under it is a short statement, "BUILDING BETTER FUTURE", set in wide-tracked grey capitals with a small burgundy swoosh above it, then a three-column statistics row: Hospitality 25 Properties, Commercial 5 Buildings, Retail and Wholesale 11 Properties. A tabbed carousel on a dark photograph lists property logos (Fairmont Bangkok Sukhumvit selected, with "EXPLORE MORE"), and a night skyline closes the first screens with "BUILDING BETTER FUTURE FOR ALL" in white.

The tone is formal and restrained. There is one accent, a deep burgundy, used for labels, swooshes and hover, while photography carries warmth and scale.

## Imagery and Voice

Photography shows hospitality interiors, resort exteriors and city skylines at wide aspect ratios, shot at dusk or in warm interior light, with brand marks of managed hotels (Marriott, Fairmont, InterContinental and others visible in the capture) shown as small white logos on the image. The statistic labels name the three business lines and counts only: "Properties" and "Buildings". Copy is third-person and corporate, with short mission lines in capitals ("BUILDING BETTER FUTURE") and longer descriptive sentences in grey. The page offers an English and Thai version through the EN selector.

## Colors

- **Canvas** `#ffffff` is the body background (3,132 area units); **surface soft** `#f5f5f5` (1,009) is the alternate band; **surface rule** `#ebebeb` is the footer border color; a translucent `#00000033` overlay (590) darkens photographs under white text.
- **Ink** `#1a1a1a` covers 3,139 measured characters and is the body color; white text covers 1,442 characters on photographs.
- **Ink muted** `#6d6f72` (443 characters) is the grey of the statement and secondary links.
- **Primary** `#a32035` (68 characters) colors section labels such as "Hospitality", the swoosh, and the menu item hover (the "ABOUT US" link measured moving from #1a1a1a to rgb(163, 32, 53)).
- **Ink bootstrap** `#212529` (22 characters) is a framework default text color carried in the stylesheet; it is kept because it was measured, but it is not a brand color.

The root variables also list Bootstrap defaults (`--yellow` #ffc107, `--green` #28a745, `--danger` #dc3545, `--gray` #6c757d, `--dark` #343a40). These are framework values, not brand colors, and are not used as tokens. Focus shadows `0 0 0 .2rem rgba(0,123,255,.25)` are likewise framework defaults.

## Typography

Arial carries all 5,114 measured characters (weights 400 and 700 split 2,751 to 2,363). A face named Prompt (400) is loaded for Thai text; the icon fonts Font Awesome 5 Brands/Pro and icomoon supply symbols.

- Heading (h2, e.g. "Hospitality" in burgundy): Arial 700, 18px / 27px, letter-spacing 0.5px. On a 390px mobile pass the same role measured 14px / 21px.
- Subheading (h3 "BUILDING BETTER FUTURE FOR ALL"): Arial 400, 30px / 45px, letter-spacing 6px, in white.
- Body: Arial 400, 16px / 24px, 0.5px tracking. The most-used sizes are 13px (1,366 characters), 18px (1,299), 30px (986), 14px (982) and 16px (319). Mobile body measured 14px / 21px in #6d6f72.
- Menu: Arial 700, 12px, uppercase, 18px line-height, 0.5px tracking, #1a1a1a.

No h1 was detected on the page. Font substitutes: none needed for Arial; Prompt (a Google font) covers Thai script.

## Layout

The page is 5,879px tall at 1280px. The header height variable is 153.406px. The first screen is a centered stack: logo, menu row, hero. Content blocks are center-aligned with a narrow text column (about 640px for the white statement) and generous vertical whitespace between the hero and the statement. The statistics row has three equal columns separated by thin vertical rules. Tabs under the carousel title (Hospitality, Retail and Wholesale, Commercial) have a burgundy underline for the active tab. The stylesheet declares Bootstrap breakpoints `--breakpoint-md` 768px and `--breakpoint-xl` 1200px.

## Elevation & Depth

Measured shadows: none (11 elements) and `none!important` (8), framework focus rings, and a card shadow `0 4px 6px 0 rgba(0,0,0,0.2),5px 5px 10px 0 rgba(0,0,0,0.19)` on 5 elements. A translucent #00000033 scrim sits between photographs and white headings. Depth in the capture comes from photograph layering and the selected property tile, which gets a white square frame.

## Shapes

The stylesheet's radii are 4px (47 uses), 5px (18), 3px (13), 16px (8), 4.8px, 20px and 2px, and the tokens carry 3px and 4px. The hero photograph has a large rounded bottom edge visible in the capture; its exact radius was not isolated. Carousel arrows are circles with white outlines. The property logo tiles are square.

## Components

- **Menu link:** Arial 700 12px uppercase, #1a1a1a, burgundy on hover.
- **Search/text input:** white fill, black text, 55px tall, padding 6px 20px 8.8px 44px (left padding leaves room for a search icon).
- **Stat block:** burgundy 18px bold label, large bold number, small bold unit, divided by vertical rules.
- **Tabs:** 12px bold white label on photograph, burgundy underline on the active one.
- **Explore link:** white uppercase "EXPLORE MORE" with a small burgundy arrow.
- **Carousel controls:** circular outlined arrows beside brand-logo tiles.
- **Footer:** padding 48px 0px, border color #ebebeb, #1a1a1a text. No primary button was detected.

## Design System Architecture

No public design system or brand guideline was found on the pages opened (the English home page via extraction); it links to none. The stylesheet is Bootstrap 4-based, evident from root variables (`--breakpoint-md`, `--font-family-sans-serif`, the standard color names) with the Swiper carousel (`--swiper-navigation-size` 44px) and custom components layered over it. The brand layer is the use of #a32035 and #1a1a1a with Arial; the Bootstrap color variables are defaults and not part of the brand.

## Do's and Don'ts

- Do use wide letter-spacing (6px at 30px) for statement headlines and uppercase menu labels.
- Do reserve burgundy #a32035 for labels, swooshes, active tab lines and hover.
- Do lead with large landscape photography of properties.
- Do separate statistics with thin vertical rules.
- Don't use Bootstrap defaults (#007bff, #28a745, #dc3545) as brand colors.
- Don't invent a button style; none was detected on the home page.
- Don't place text on photographs without the dark scrim.

## Responsive Behavior

A 390px mobile pass measured: h2 14px bold (line-height 21px, burgundy), body text 14px / 21px in #6d6f72, no h1 and no primary CTA. The stylesheet declares breakpoints at 768px and 1200px. Menu form, column counts and image behavior on mobile: not measured.

## Iteration Guide

1. White canvas, #1a1a1a text, Arial; add #a32035 only for labels and hover.
2. Use wide-tracked uppercase for statements; 18px bold for section labels; 16px body.
3. Use full-bleed property photography with a #00000033 scrim for white text.
4. Show portfolio statistics as three columns divided by vertical rules.
5. Run `node web/scripts/verify-designs.mjs --slug=asset-world` and measure mobile layout before describing it.
