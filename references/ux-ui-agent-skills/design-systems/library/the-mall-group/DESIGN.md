---
version: alpha
name: "The Mall Group"
category: "Thai Brands"
description: "Thai retail group corporate site: db_airystd uppercase captions with 6px tracking, SamsungSharpSans-Regular navigation, white #ffffff canvas, #171717 ink, black serif wordmark, hairline #c0c0c0, square content corners, hero photography carrying color."
colors:
  canvas: "#ffffff"
  ink: "#171717"
  primary: "#000000"
  on-primary: "#ffffff"
  ink-3: "#333333"
  nav-active: "#999480"
  hairline: "#c0c0c0"
typography:
  display:
    fontFamily: db_airystd
    fontSize: 28px
    fontWeight: 400
    lineHeight: 30.8px
    letterSpacing: 6px
  display-mobile:
    fontFamily: db_airystd
    fontSize: 25px
    fontWeight: 400
    lineHeight: 27.5px
    letterSpacing: 6px
  subheading:
    fontFamily: SamsungSharpSans-Regular
    fontSize: 16px
    fontWeight: 400
    lineHeight: 17.6px
  body:
    fontFamily: SamsungSharpSans-Regular
    fontSize: 12px
    fontWeight: 400
    lineHeight: 12px
  page-base:
    fontFamily: Kanit
    fontSize: 12px
    fontWeight: 400
rounded:
  xs: 5.6px
  sm: 6.4px
  pill: 9999px
spacing:
  s1: 2px
  s2: 5px
  s3: 7px
  s4: 8px
  s5: 10px
  s6: 14px
  s7: 15px
  s8: 20px
  s9: 40px
components:
  wordmark:
    textColor: "{colors.primary}"
---

## Overview

The Mall Group (themallgroup.com, document title "THE MALL GROUP") is the corporate site of the Thai retail and shopping-centre operator behind The Mall Lifestore, Emporium, EmQuartier, EmSphere, EM District, Siam Paragon and Paragon Department Store. The home page is a small, formal corporate portal: a centred black serif wordmark "THE MALL GROUP", a thin text navigation (HOME, ABOUT US, OUR BUSINESSES, NEWS & ACTIVITIES, JOIN US, CONTACT) with a second-level row (COMPANY PROFILE, AWARDS) shown under the active item, an EN | TH language switch with flags and a magnifier icon, a wide hero slideshow of mall facades with a spaced-out uppercase white caption (for example "PARAGON DEPARTMENT STORE", "THE MALL LIFESTORE NGAMWONGWAN"), a row of business logos (M Lifestore, EM District, Emporium, EmQuartier, EmSphere, Siam Paragon), a row of round social icons (Facebook, Instagram, Twitter, YouTube) and a small copyright and policy footer.

The look is deliberately restrained and white, so the many retail sub-brands, whose logos are very different, can sit side by side without competing. The only large color comes from the hero photography. A cookie-consent bar overlaps the page in the capture; its button is the only button the extractor found, and it is not brand UI, so this file declares no button-primary component.

## Colors

The canvas is white (#ffffff). Text is near-black: #171717 is the most-read text color, #333333 is used for the footer copyright and secondary text, and #000000 is the wordmark and the darkest ink; the generated primary is #000000. The hairline rule color is #c0c0c0 (the thin horizontal dividers above the social icons). The active navigation item, HOME, is a muted khaki-taupe, #999480, and shows with an underline.

The extractor also measured social-network colors on the round icons: #4d67a4 (Facebook blue), #41729a, #26a7e0 (Twitter blue) and #cd181f (YouTube red). These are third-party platform colors, not brand colors. The link color #1890ff on the cookie notice is a UI-library default blue (the "Cookie Policy" link) and is not used on the site's own pages; both are excluded from the tokens.

- Page: #ffffff with #171717 text.
- Wordmark and strong text: #000000.
- Active nav: #999480.
- Rules: #c0c0c0.

## Typography

Four faces are loaded. db_airystd (400) is the display face, used for the large uppercase hero captions with 6px letter spacing. SamsungSharpSans-Regular is the interface face for navigation, headings and footer text. Kanit is the body and Thai text face used by the page's base styles (12px, weight 400) and by the cookie notice. FontAwesome supplies the social icons.

Measured sizes: the hero caption (h1 role) is 28px, weight 400, line height 30.8px, letter spacing 6px, uppercase and white over the photograph; at the 390px mobile pass it is 25px with a 27.5px line height and 6px letter spacing in a 360px box. The navigation heading role (h3, "HOME") is 16px in SamsungSharpSans-Regular at weight 400 with a 17.6px line height. Body text, such as the copyright line, is 12px in SamsungSharpSans-Regular with a 12px line height; it is the same at mobile in a 390px box. The wide tracking on the caption gives a luxury-retail feel, while the small regular-weight navigation keeps the chrome quiet.

## Layout

The layout is a centred, narrow header (wordmark above the navigation), a full-width hero banner running edge to edge, and a centred content column below. Under the hero, six logos are laid out in one row, evenly spaced and vertically centred. Below, a centred stack of social icons sits between two thin #c0c0c0 rules, with the copyright and policy links beneath. The second-level navigation sits on top of the hero's upper edge as small white uppercase text. Spacing values measured: 2px, 5px, 7px, 8px, 10px, 14px, 15px, 20px and 40px. The page has 136 visible elements, which reflects how small it is.

## Elevation & Depth

Depth is almost absent. A single shadow was measured, rgba(0, 0, 0, 0.2) 0px 0px 6px 0px, and it belongs to the floating cookie bar rather than to the site's own content. Everything else is flat white, separated by thin rules and white space.

## Shapes

Measured radii: 50% (the four round social icons and the flags), 5.6px and 6.4px (the cookie notice controls and panel). The brand's own content (logos, hero photograph, navigation) has square corners. Because the rounded values come only from the circular icons and the consent component, the site's own style should be read as square-cornered with circular icon buttons.

## Components

- Wordmark: black serif "THE MALL GROUP" with a smaller "GROUP" line, centred.
- Navigation: uppercase SamsungSharpSans-Regular text at 16px, #171717, with the active item in #999480 underlined; a second row in small white uppercase over the hero.
- Language switch: flag icons with EN and TH labels separated by a vertical rule.
- Hero caption: db_airystd 28px, 6px tracking, white, uppercase, bottom of the hero.
- Social icons: 50% radius circles in the platform colors, each with a small triangle below.
- Footer: #333333 12px text with underlined policy links.
- Hover: the TH language link is #000000 with no fill; the cookie button drops to opacity 0.65 on hover, but that control is not part of the brand UI.

The capture also shows how the page speaks. Copy is minimal and formal: navigation labels are two or three words in capitals, hero captions are the names of properties rather than slogans, and the footer offers contractor, privacy and cookie-setting links. The consent notice appears in Kanit with a short explanation and a pair of choices, which sets the page's base type at 12px. The site is bilingual (English and Thai), and the language switch is always visible beside the search icon. Imagery is architectural: sunlit exterior facades of the malls with the "M" logo and tenant signage visible.

## Design System Architecture

No public design system or brand guideline was found: the home page text and links were opened and contain only company navigation, so no external research was done. The site declares no custom CSS variables (the root variable set is empty), which means its system is plain stylesheet rules with web fonts and an icon font. The sub-brands (Emporium, EmQuartier, EmSphere, EM District, Siam Paragon, M Lifestore) each keep their own wordmarks, shown as logos rather than themed pages.

## Do's and Don'ts

- Do keep a white page with a black serif wordmark and quiet uppercase navigation.
- Do let the hero photography carry the color.
- Do set hero captions in db_airystd with wide letter spacing.
- Do show sub-brand logos in a single balanced row.
- Don't tokenise the social-network colors or the cookie-notice blue as brand colors.
- Don't document the cookie banner and its black "Accept All Cookies" button as brand UI.
- Don't round brand content; only icons are circular.

## Responsive Behavior

Measured at the 390px mobile pass: the hero caption is 25px with a 27.5px line height and 6px letter spacing in a 360px box, and the body text is 12px with a 12px line height in a 390px box. Navigation collapse and logo-row behavior at small widths were not measured.

## Iteration Guide

1. White #ffffff, text #171717 and #333333, wordmark #000000, rules #c0c0c0.
2. db_airystd 28px uppercase with 6px tracking for captions; SamsungSharpSans-Regular 16px and 12px for text.
3. Keep the layout centred and spare, with square content corners.
4. No shadows on brand content.
5. Hover colors for navigation, dark mode and the mobile menu were not measured; no brand button was measured.
