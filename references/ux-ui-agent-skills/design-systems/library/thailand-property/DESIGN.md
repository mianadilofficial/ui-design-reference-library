---
version: alpha
name: Thailand-Property
category: "Thai Brands"
description: "English-language property portal Thailand-Property (thailand-property.com) for buying and renting in Thailand. Helvetica Neue at weights 300 to 500, vermilion #d6410f search button, green #4fb84f menu bar, deep-blue #004375 promo bands, #527bc0 footer, light #ecf0f1 page tint and mostly 4px corners."
colors:
  canvas: "#ffffff"
  page-body: "#ecf0f1"
  ink: "#555555"
  primary: "#d6410f"
  on-primary: "#ffffff"
  footer-blue: "#527bc0"
  surface-grey: "#f1f1f1"
  ink-2: "#666666"
  ink-link: "#353535"
  link-blue: "#4571bb"
  hairline: "#4e4e4e"
  primary-hover: "#a6330c"
  button-secondary-border: "#f05a28"
  text-input-bg: "#eff0f0"
  menu-green: "#4fb84f"
  band-blue: "#004375"
typography:
  display:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, Helmet, Freesans, sans-serif"
    fontSize: 42px
    fontWeight: 300
    lineHeight: 46.2px
    letterSpacing: "-0.5px"
  display-mobile:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, Helmet, Freesans, sans-serif"
    fontSize: 22px
    fontWeight: 300
    lineHeight: 24.2px
    letterSpacing: "-0.5px"
  heading:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, Helmet, Freesans, sans-serif"
    fontSize: 22px
    fontWeight: 500
    lineHeight: 24.2px
    letterSpacing: "-0.5px"
  body:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, Helmet, Freesans, sans-serif"
    fontSize: 12px
    fontWeight: 300
    lineHeight: 17.1429px
  button:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, Helmet, Freesans, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.8571px
  nav:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, Helmet, Freesans, sans-serif"
    fontSize: 14px
    fontWeight: 300
    lineHeight: 20px
  input:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, Helmet, Freesans, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
rounded:
  xs: 4px
  sm: 5px
  md: 10px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 2.5px
  s3: 3px
  s4: 5px
  s5: 6px
  s6: 7px
  s7: 8px
  s8: 9px
  s9: 10px
  s10: 12px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 6px 12px
    height: 45px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.xs}"
    padding: 7px 12px
    height: 36px
    borderColor: "{colors.button-secondary-border}"
  nav-link:
    textColor: "{colors.ink-link}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.hairline}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 6px
    height: 45px
  footer:
    backgroundColor: "{colors.footer-blue}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 20px 0px 0px
---

## Overview

Thailand-Property is measured on `https://www.thailand-property.com/`, titled "Thailand property for sale and rent | Thailand-Property", `lang="en"`. It is an English portal aimed at people buying or renting in Thailand. The home page runs: a white logo strip, a green menu bar (Buy, Rent, List Property, New homes, Commercial, Find agent, Join Us with a red "We're Hiring!" tag, Blog, Awards, Events, a currency selector, a saved-items icon and a Sign in outline button), a night-time Bangkok skyline hero carrying the headline "Move Online" and the line "Search for your next property to buy or rent in Thailand" above a search bar, a deep-blue promo band ("Looking to sell a property? Upload your property" with a white "Get started" button), a "Properties of the month" pair of photo tiles with prices in baht, a magazine promotion ("Dot Property Magazine"), an "alert" side panel in blue, and a list of news articles with thumbnails and dates. The footer is a pale grey "About Thailand Property's website" text block above a blue link footer.

The voice is plain, classified-listing English. Density is high: small 12px to 14px text, thin 300 weights and dense link lists. The single hot color — vermilion — is reserved for the search action.

## Colors

`canvas` #ffffff is the dominant background (3,278 area units) with `page-body` #ecf0f1 as the body background on the measured `body`. `footer-blue` #527bc0 (734 units) is the footer fill, `surface-grey` #f1f1f1 the about-text strip, and `band-blue` #004375 (with a 70% variant #004375b3) the promo and alert bands. `menu-green` #4fb84f is the menu bar background (measured as the header background at the mobile pass and as 54 units of area on desktop). Hero overlays are black at 40% to 50% alpha (#00000066, #00000080).

Text uses `ink` #555555 (1,992 characters), `ink-2` #666666 (1,287), white (1,081), `ink-link` #353535 for nav links and `link-blue` #4571bb for inline links. `primary` #d6410f fills the Search button with white text; `primary-hover` #a6330c is its hover fill; the secondary "Get started" button is white with `primary` text and a #f05a28 border. The input fill is `text-input-bg` #eff0f0 with #4e4e4e text. The hover probe on the "Buy" selector button shows a white fill turning #e6e6e6 with a #adadad border.

## Typography

One family: "Helvetica Neue" with fallbacks Helvetica, Arial, Helmet, Freesans, sans-serif — it sets all 4,487 measured characters. Weight 300 dominates (3,480 characters), then 700 (748, footer headings), 500 (163) and 400 (96).

Scale: `display` 42px / 46.2px, weight 300, letter-spacing -0.5px, white, for "Move Online"; `heading` 22px / 24.2px, weight 500, letter-spacing -0.5px, for section titles such as "Properties of the month"; `body` 12px / 17.1429px, weight 300; `button` 16px / 22.8571px, weight 400; `nav` 14px / 20px, weight 300; `input` 14px / 20px, weight 500. By character count the most used sizes are 14px (2,120), 12px (847), 16px (629) and 13px (521). The page is small-type heavy; there is no display serif or secondary family.

## Layout

The desktop capture is 1280px wide, 3,084px tall. The header is 142px high including the green menu bar. Content sits in a 1,140px container (the h1 and h2 measure 1,140px wide) with a main column and a right-hand sidebar holding the alert panel. Property-of-the-month tiles sit in a centered pair; news items are rows of a thumbnail plus text. The search form is a single row: keyword input (456px wide, 45px tall), two selects ("Buy", "Property type") and the Search button (151px wide). The most frequent padding is 15px (43 occurrences), then 8px, 10px, 5px and 12px.

## Elevation & Depth

Shadows are used sparingly: the property tiles carry `rgb(51, 51, 51) 2px 2px 6px -2px` and one element has an inset `rgb(85, 85, 85) 1px 4px 9px -6px`. Depth otherwise comes from color bands (green bar, blue promo band, dark photographic hero with a translucent black overlay). The shipped CSS contains further small shadows (`0 2px 6px -2px #666`, `0 2px 6px -2px #999`) and Bootstrap-style input insets which were not observed on screen.

## Shapes

Corners are mostly 4px (six measured elements, `xs`); the search button is square on the left and 4px on the right (`0px 4px 4px 0px`) and the keyword input mirrors it (`4px 0px 0px 4px`) so the two read as one joined control. Other radii on screen: 50% (round avatars/icons), 5px, 10px, 500px (one element) and `0px 0px 4px 4px`. The primary button component is declared with radius 0 for the standalone case.

## Components

**Search button** — vermilion `primary`, white Helvetica Neue 16px / weight 400, padding 6px 12px, 45px tall, 151px wide, border 1px solid #d6410f, right corners 4px. Hover fill #a6330c.

**Secondary button** — white fill, `primary` text 14px weight 300, border 1px solid #f05a28, 4px radius, 36px tall, 255px wide ("Get started").

**Keyword input** — #eff0f0 fill, #4e4e4e text, 14px weight 500, 6px padding, 45px tall, left corners 4px.

**Menu bar** — `menu-green` fill with white 15px weight-300 links and a 3px bordered "List Property"-style outlined item. **Promo band** — `band-blue` with a bold white sentence. **Alert panel** — `band-blue` block with white heading and a white "Create Alert" button. **Footer** — `footer-blue` with white bold 14px headings.

## Design System Architecture

No public design system, brand guideline or token package was found: the homepage HTML links none (it links a "brands" page on lifullconnect.com, which is a parent-company brand listing, not a design resource; no search was run). The measured site uses no CSS custom properties (zero root variables recorded); the only icon font loaded is FontAwesome. The de-facto system is therefore the computed-style set in this file: one font stack, a neutral grey ink ramp, a green bar, blue bands and a vermilion action color.

## Do's and Don'ts

Do keep the search action the only vermilion element on a screen. Do use thin 300-weight Helvetica Neue for body copy and 500 for headings and inputs. Do place a green menu bar under a white logo strip and keep promotional strips in `band-blue`. Do join the keyword input and search button into one control with matching 4px outer radii.

Don't use Bootstrap focus blue (#66afe9) or default link colors as brand colors. Don't enlarge body text above the measured 12px to 14px without re-measuring. Don't use heavy shadows; the measured ones are 2px offsets with negative spread. Don't change the -0.5px tracking on display and heading sizes.

## Responsive Behavior

Measured at a 390px viewport: the h1 drops from 42px to 22px (line height 24.2px) and wraps to 98px height in a 360px column; the h2 stays 22px; body stays 12px / 17.1429px; the header measures 50px tall with a #4fb84f background; the most common mobile font sizes are 14px, 12px, 16px and 13px. No primary-button role was detected on the mobile pass, so the mobile Search button was not measured; menu collapse behavior and the grid behavior of the tiles were not measured.

## Iteration Guide

Start from the frontmatter tokens. For a new listing page keep the logo strip, green menu bar and 1,140px container; headings 22px weight 500, body 12px weight 300, links `link-blue`. Use `primary` only for the main action and `band-blue` for promotional strips. Measure any new component before documenting it; focus, dark-mode and tablet states were not measured on this site.
