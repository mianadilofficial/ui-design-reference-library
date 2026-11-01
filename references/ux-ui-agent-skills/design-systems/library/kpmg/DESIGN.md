---
version: alpha
name: KPMG
category: "Agencies & Studios"
description: "KPMG global home (kpmg.com/xx/en): white canvas, KPMG blue #1e49e2 actions and a deep #00338d band color, OpenSans Regular and SemiBold body with OpenSans Condensed Bold 48px headlines, 32px-radius pill buttons, flat surfaces with no box shadows."
colors:
  canvas: "#ffffff"
  page-largest: "#00338d"
  ink: "#333333"
  primary: "#1e49e2"
  on-primary: "#ffffff"
  button-light: "#ffffff"
  surface-tint: "#f5f6fa"
  ink-on-dark: "#e5e5e5"
  ink-navy: "#0c233c"
  link-visited: "#7213ea"
  hairline: "#1e49e23d"
typography:
  display:
    fontFamily: OpenSans_Condensed--Bold
    fontSize: 48px
    fontWeight: 700
    lineHeight: 56px
  display-mobile:
    fontFamily: OpenSans_Condensed--Bold
    fontSize: 40px
    fontWeight: 700
    lineHeight: 48px
  subheading:
    fontFamily: OpenSans--SemiBold
    fontSize: 18px
    fontWeight: 600
    lineHeight: 24px
  body:
    fontFamily: OpenSans--Regular, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.44px
  button:
    fontFamily: OpenSans--SemiBold, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
    letterSpacing: 0.44px
  nav:
    fontFamily: OpenSans--Regular
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.44px
rounded:
  xs: 32px
  sm: 50px
  pill: 9999px
spacing:
  s1: 8px
  s2: 11px
  s3: 12px
  s4: 16px
  s5: 20px
  s6: 23px
  s7: 24px
  s8: 32px
  s9: 48px
  s10: 64px
components:
  button-primary:
    backgroundColor: "{colors.button-light}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 24px
    height: 48px
  button-secondary:
    backgroundColor: "{colors.button-light}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 24px
    height: 48px
  link:
    textColor: "{colors.ink-navy}"
    typography: "{typography.subheading}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    padding: 0px 8px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.canvas}"
---

## Overview

KPMG's global home page (`kpmg.com/xx/en.html`, title "KPMG International | Home") reads as a corporate editorial site: large photography of people, condensed bold headlines, and wide color bands that alternate between white, a pale tint (#f5f6fa), a bright KPMG blue (#1e49e2) and a deep navy-blue (#00338d). The measured page is 1280px wide and 4502px tall. Copy is confident and human-centered ("Make the Difference with KPMG", "Ten years. Nearly one million students reached.", "Together, we make the difference."), and calls to action are short verbs such as "Learn more", "Watch the video" and "Explore".

The capture was taken from a visitor in Thailand, so a geo-location welcome dialog ("Welcome to KPMG. Looks like you are visiting from Thailand.") and its dark scrim sit over the hero. That dialog, its two buttons and the scrim are not brand UI and are not documented as tokens here. The underlying page is the global firm site, which the dialog itself calls "KPMG Global".

The look is flat. No box shadow was measured on the page, borders are tinted blue hairlines, and depth comes from color blocks and photography rather than elevation.

## Colors

- **Canvas #ffffff** is the page background and the card background (1823 area-weight in the measurement). **#f5f6fa** is a pale blue-grey tint used for alternating sections (1781). 
- **KPMG blue #1e49e2** is the action and link color: `--button-primary-background-color`, `--text-link-color-rest`, and the default color of the header, nav links and the "Learn more" arrow links. It is also used as a full-bleed section background (1252 area-weight), as in the "Make the Difference with KPMG" band.
- **Deep blue #00338d** is the largest background by area (2555) and the footer fill. It is also the hover color of primary buttons (`--button-primary-background-color-hover`) and of links (`--text-link-color-hover`).
- **Ink #333333** is the main reading color on white (headings 1 to 6 all resolve to #333 in the root variables). **#0c233c** is a dark navy used for card titles and the active/rest state of title links. **#e5e5e5** is soft text on dark fields.
- **#7213ea** is the visited-link color (`--text-link-color-visited`) and also appears as the purple outline on the small icon badges in the "key areas" cards.
- **White button fill (#ffffff)** is what the extractor detected as the primary CTA: pill buttons placed on blue or navy bands carry white fill with blue (#1e49e2) text. On white surfaces the same button role flips to blue fill with white text (`--button-primary-color: #fff`).
- **Hairline #1e49e23d** is the translucent blue border on cards.

The measured palette stays inside one blue family plus neutrals, with purple reserved for visited links and icon outlines.

## Typography

Two families from one superfamily, both self-hosted as web fonts: **OpenSans_Condensed--Bold** for display and **OpenSans--Regular / OpenSans--SemiBold** for everything else. Icons come from Material Icons (Filled and Outlined) and an `icomoon` set.

- Display (h1, h2): condensed bold, 48px on 56px line-height at desktop, 700 weight, normal letter-spacing. The mobile pass measures h1 at 40px/48px and h2 at 32px/44px.
- Subheading (h3, card titles): OpenSans SemiBold 18px on 24px.
- Body: OpenSans Regular 16px on 24px with 0.44px letter-spacing. Small text is 12px with 0.25px tracking (1403 area-weight, mostly footer and metadata). 
- Button: SemiBold 16px/24px, 0.44px tracking, no text-transform.
- Nav: Regular 16px/24px, 0.44px tracking.

Other measured sizes are 20px, 24px, 32px (section sub-titles) and 14px. Weights in use are only 400, 600 and 700. No substitute is needed to describe the system: Open Sans is publicly available, but the page loads custom-named files (`OpenSans--Regular`) so a fallback of any humanist sans will approximate it; this is a description of the files loaded, not a measured fallback.

## Layout

Cards in the "Global Cyber Day" strip and in "Discover our perspectives across key areas" form a four-column grid with no gap between them (cards share hairline borders). Hero blocks are split: a solid navy panel carrying a headline and a pill button on the left, a full-bleed photograph on the right. The most common gaps are 8px, 16px, 32px, 24px and 48px; the most common paddings are 24px, 12px, 32px, 11px and 20px. The spacing scale in the frontmatter lists these measured values.

The header is a 113px band: a thin utility row (Submit RFP, Login, Global (EN)) above a white bar with a circular blue menu button, the KPMG logo and a search button.

## Elevation & Depth

No box shadows were measured on the page (the `boxShadows` frequency list is empty). Separation is created by: color blocks (white, #f5f6fa, #1e49e2, #00338d), 1px blue hairlines (#1e49e23d) around cards, and a thin accent bar to the left of card titles seen in the capture. A dark translucent scrim appears only behind the geo-location dialog and is not part of the design system.

## Shapes

Buttons are pill-shaped. Measured border radii: 32px (20 elements, the standard button), 50% (8, circular icon buttons such as the menu and search buttons), 50px (7) and 100% (1). Cards themselves are square-cornered. The frontmatter keeps 32px (`xs`), 50px (`sm`) and a 9999px `pill` for fully round controls; button-primary uses 32px.

## Components

- **Primary button**: 48px tall, padding 12px 24px, 32px radius, SemiBold 16px label. On photographic or colored bands it is white with #1e49e2 text ("Learn more", "Watch the video", "Explore our Client Stories"). On white it is #1e49e2 with white text, and turns #00338d on hover (root variables).
- **Outlined button**: transparent with a 1px #ffffff border and white text ("Create an account" in the footer band), same 48px height and 32px radius.
- **Cards**: white, square corners, hairline border, a short accent rule before the title, an OpenSans SemiBold 18px title in #0c233c, 16px body, and an arrow link ("Learn more", "Explore") in blue at the bottom.
- **Link**: 18px SemiBold in #0c233c at rest, #00338d on hover, #7213ea visited.
- **Navigation**: white 113px header, blue (#1e49e2) 16px Regular items, circular icon buttons.
- **Footer**: #00338d background with white text (655px tall).

## Design System Architecture

KPMG does not publish a public design system or brand-guideline page that this research could open: `https://kpmg.com/brand` returned a 404 page, and the opened pages https://kpmg.com/xx/en/about.html and https://kpmg.com/xx/en/media.html contain no design-token documentation; no public system was found. The de-facto system is visible in the shipped CSS: 231 CSS custom properties on `:root` named by component and state (for example `--button-primary-background-color`, `--button-secondary-border-color-hover`, `--text-link-title-color-rest`, `--heading-1-color`, `--cardteaser-border-color`, `--hero-people-title-color`). Naming follows `--component-property-state`, with states rest/enabled, hover, active, selected, visited and disabled, which gives a component-first token architecture built on an AEM-style teaser and hero component library.

## Do's and Don'ts

- Do use #1e49e2 for actions and links, #00338d for hover states and the darkest bands, and keep text on white at #333333.
- Do use OpenSans Condensed Bold at 48px/56px for display lines and sentence-case headlines.
- Do make buttons 48px tall pills with a 32px radius.
- Do separate cards with blue hairlines, not shadows.
- Don't add drop shadows: none were measured.
- Don't use #7213ea as a button or fill color: it is the visited-link color and icon outline.
- Don't document or copy the geo dialog and its scrim as a KPMG component.
- Don't mix in a second display typeface.

## Responsive Behavior

Measured at a 390px mobile pass: h1 40px/48px, h2 32px/44px, body 16px/24px, primary button 48px tall with 12px 24px padding and 32px radius. The mobile header text content is two icon controls, a menu icon and a search icon, set in Material Icons Outlined 24px). Breakpoint widths, column counts at tablet sizes and image behavior were not measured.

## Iteration Guide

1. Start from the frontmatter tokens; never hardcode a value that has a token.
2. For a new band, pick one of #ffffff, #f5f6fa, #1e49e2 or #00338d and set the text and button colors accordingly (white fill and blue label on blue bands).
3. Headlines: condensed bold, 48px/56px desktop, 40px/48px mobile.
4. Verify against `web/data/extracted/kpmg.json` before adding anything new; if a value is not there or in a cited source, leave it out.
5. Re-run `node web/scripts/verify-designs.mjs --slug=kpmg` after every edit.
