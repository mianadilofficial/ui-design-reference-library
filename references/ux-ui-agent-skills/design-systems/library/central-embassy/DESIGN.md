---
version: alpha
name: Central Embassy
category: "Thai Brands"
description: "Central Embassy, Central Group's Bangkok luxury retail flagship, uses a pure black canvas (#000000) with off-white text (#f0f0f0), Raleway in uppercase with 1px tracking (900 weight at 24px for headings, 600 at 10px for navigation), square corners and campaign imagery as its only colour."
colors:
  canvas: "#000000"
  ink: "#f0f0f0"
  primary: "#ffffff"
  on-primary: "#000000"
  surface-light: "#f6f6f6"
  ink-on-light: "#111111"
  ink-cookie: "#333333"
  ink-soft: "#e8e8e8"
  ink-dim: "#cfcfcf"
typography:
  display:
    fontFamily: Raleway, sans-serif
    fontSize: 24px
    fontWeight: 900
    lineHeight: 33.2308px
    letterSpacing: 1px
    textTransform: uppercase
  subheading:
    fontFamily: Raleway, sans-serif
    fontSize: 17px
    fontWeight: 600
    lineHeight: 22.1739px
    letterSpacing: 1px
    textTransform: uppercase
  body:
    fontFamily: Raleway, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 27px
  nav:
    fontFamily: Raleway, sans-serif
    fontSize: 10px
    fontWeight: 600
    letterSpacing: 1px
    textTransform: uppercase
  link:
    fontFamily: Raleway, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 26px
rounded:
  xs: 56px
  none: 0px
spacing:
  s1: 8px
  s2: 9px
  s3: 10px
  s4: 12px
  s5: 14px
  s6: 16px
  s7: 24px
  s8: 25px
  s9: 28px
  s10: 32px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 0px 10px
  footer:
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
---

## Overview

Central Embassy's homepage gives its positioning as "REDEFINING THE NEW LUXURY SHOPPING EXPERIENCE" and describes the property as "Thailand's leading department store" in "Bangkok's hippest neighborhood". The about page calls it "a one-of-a-kind architectural landmark, with its daring curvatures and dynamic facade", Central Group's flagship, built on the former British Embassy gardens. That description fits the web design: a dark, gallery-like frame in which the campaigns are the artwork.

The capture is a black page. A thin black navigation bar holds seven tiny uppercase links centred on one line, separated by vertical rules: HOME, EXPERIENCE, ANCHOR, DIRECTORY, PARK HYATT, SERVICE, ABOUT, then a search icon. Under it a full-width carousel shows the current campaign, "TASTE SENSATIONS: SPEND YOUR HOURS DELICIOUSLY", with arrows and dot pagination. Below, the same three campaigns return as large square cards on a black field: "TASTE SENSATIONS", "ACE OF LUXE" and "TIME & TREASURES: PRIVILEGES", each with a centred uppercase caption block giving the title, tagline and dates. A section titled "EXPERIENCE" sits between two thin white rules and is introduced by "UPCOMING EVENTS, SEASONAL OFFERINGS, BRAND EXHIBITIONS, AND MORE".

A white cookie notice sits at the very top of the capture. It reads "This Website uses cookies. Please accept our cookie policy for your best experience" and includes an "Accept All" button. This is a consent overlay, not part of the brand interface, and it is not documented as a component here; no button style is claimed for the site.

The tone is formal, uppercase and capital-driven, with campaign copy in sentence fragments and dates in the form "1 SEPTEMBER'26 – 31 OCTOBER'26".

## Colors

The interface is black and white with nothing in between except a handful of greys. `canvas` is #000000 and covers by far the largest area. Text on it is `ink` (#f0f0f0), with softer `ink-soft` (#e8e8e8) and `ink-dim` (#cfcfcf) for secondary lines, and pure `primary` white (#ffffff) for navigation labels and the rules around the section title. Where the page uses a light surface (`surface-light`, #f6f6f6, and the white cookie bar), text is `ink-on-light` (#111111), the most-read text color overall, with #333333 (`ink-cookie`) for the consent copy.

There is no chromatic UI accent. The site's color comes from the campaign artwork: gold and black lettering on a marble-white panel, a burgundy fashion image, a slate-blue artwork. These are imagery colors and must not be promoted to tokens. WordPress ships preset colors as root variables (for example #0693e3 and #9b51e0), which are CMS defaults the page does not use. `primary` is therefore assigned the white of the navigation and rules, with `on-primary` black, because no filled brand button was observed once the cookie control is excluded.

## Typography

Raleway is the family for everything on the page, loaded in weights 400, 500, 600, 700 and 900. Helvetica or Arial appears only in the cookie notice and its button, and a Roboto 900 file is also loaded and counts a handful of characters. FontAwesome is loaded for icons.

Measured styles: the section heading "EXPERIENCE" is 24px, weight 900, uppercase, 1px letter spacing, line height 33.2308px (`display`). Captions use a 17px 600 uppercase style (`subheading`, same spacing). Reading text is 15px at weight 400 with a roomy 27px line height (`body`). Links are 14px with 26px line height (`link`). Navigation is the smallest and most tracked: 10px, weight 600, uppercase, 1px spacing (`nav`). Other sizes measured are 13px, 12px and 11px for fine print. The consistent 1px tracking on every uppercase style is the signature of the typography.

Raleway is an open-source family on Google Fonts, so no substitute is needed.

## Layout

The page is 3891px tall at 1280px. The navigation is a centred single row with 10px horizontal padding per link. The hero carousel runs full bleed; campaign cards then sit in a two-column grid inside a narrower black field, with the third card dropping to the first column of the next row and leaving the right column empty. Captions are centred under each image.

Spacing values in the tokens (8px to 32px) are padding and margin values measured on components; 10px is the most common padding by count (42 occurrences), followed by 12px. Vertical rhythm between sections is generous, with long stretches of empty black separating the card grid from the "EXPERIENCE" heading.

## Elevation & Depth

Essentially flat. Two faint shadows were measured, one of them a 1px hairline ring in rgba(0, 0, 0, 0.04) and one a soft upward glow rgba(172, 171, 171, 0.3) 0px -1px 10px 0px, each on a single element. Depth otherwise arises from photography and from the contrast between white rules and black ground. WordPress preset shadows appear in the root variables but are defaults. Do not add shadows on the black canvas.

## Shapes

Corners are square: `none` is 0px for navigation, links and footer. The only radius measured on the page is 56px, which appears on two elements in the measurement. Cards and images are sharp rectangles, which supports the gallery look. Thin 1px white borders and rules are the only linework.

## Components

**Navigation (`nav`, `nav-link`).** Black bar, white 10px uppercase links with 1px tracking, 0px 10px padding, separated by thin vertical rules, followed by a search icon.

**Campaign card.** A square image with the campaign poster, then a centred caption: title in bold uppercase, tagline, and date range, all uppercase.

**Section header.** The word "EXPERIENCE" centred in 24px 900 uppercase text between two horizontal white rules; a 15px-or-smaller uppercase intro line follows.

**Carousel controls.** Arrows at the sides and dots at the bottom of the hero.

**Link (`link`).** `ink` text, 14px with 26px line height.

**Footer (`footer`).** White text on black; contact content includes "Service Hours", "CONTACT US", address "1031 Ploenchit Road, Pathumwan, Bangkok 10330, Thailand" and the hours "10 am – 10 pm".

## Design System Architecture

No public design system, brand book or token package was found. The home and about pages contain editorial copy only. The shipped system is a WordPress theme: root variables are the `--wp--preset--*` set (font sizes 13px and 36px, spacing presets, color presets, shadow presets) that WordPress emits by default. The brand-specific choices live in theme CSS rather than in variables: black background, Raleway, 1px tracked uppercase, 0px radius. Rebuild the system from the measured tokens, not from the WordPress presets.

## Do's and Don'ts

- Do keep the page black with off-white #f0f0f0 text and let campaign imagery carry color.
- Do set every heading, caption and nav label in uppercase Raleway with 1px letter spacing.
- Do keep corners square on all cards and navigation.
- Do centre captions beneath images and use "1 SEPTEMBER'26 – 31 OCTOBER'26" date format.
- Don't copy the cookie consent bar or its button styling as a brand component.
- Don't use WordPress preset colors such as #0693e3.
- Don't round cards or add drop shadows.
- Don't introduce a colored button; none exists on the page.

## Responsive Behavior

The mobile pass was taken at 390px. In that pass the "EXPERIENCE" h2 measures 24px at weight 900 in Raleway, uppercase with 1px tracking, in #f0f0f0 and 370px wide. Body text measures 15px with a 27px line height in 294px width. The header measures 120px tall, #000000 background, with 14px/26px text. Navigation measures 10px on the desktop capture. Mobile layout beyond these roles was not measured.

## Iteration Guide

1. Start from #000000 with #f0f0f0 text and Raleway.
2. Set headings at 24px weight 900 uppercase, 1px tracking; captions at 17px 600; body at 15px with 27px line height.
3. Navigation at 10px, 600, uppercase, 1px tracking, white on black.
4. Build campaign cards as sharp images with centred uppercase captions.
5. Add color only through imagery, never UI chrome.
6. Re-measure before adding any new value.
