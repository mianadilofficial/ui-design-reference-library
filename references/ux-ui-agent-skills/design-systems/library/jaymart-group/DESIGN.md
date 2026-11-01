---
version: alpha
name: Jaymart Group Holdings
category: "Thai Brands"
description: "Bangkok holding company's English investor home page: white canvas with black #000000 text, Jaymart red #ed1c24 accents, Mukta 800 uppercase headings (80px display, 42px section) over 20px/30px body, a 100px side rail, 4px radii and soft grey card shadows #d6d6d6."
colors:
  canvas: "#ffffff"
  page-largest: "#000000"
  ink: "#000000"
  primary: "#ed1c24"
  surface-mist: "#eff3f3"
  ink-inverse-80: "#ffffffcc"
  hairline: "#ffffff33"
typography:
  display:
    fontFamily: Mukta, Prompt
    fontSize: 80px
    fontWeight: 800
    lineHeight: 80px
    letterSpacing: 1px
    textTransform: uppercase
  display-mobile:
    fontFamily: Mukta, Prompt
    fontSize: 50px
    fontWeight: 800
    lineHeight: 50px
    letterSpacing: 1px
    textTransform: uppercase
  heading:
    fontFamily: Mukta, Prompt
    fontSize: 42px
    fontWeight: 800
    lineHeight: 48.3px
    textTransform: uppercase
  body:
    fontFamily: Mukta, Prompt
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  nav:
    fontFamily: Arial
    fontSize: 24px
    fontWeight: 400
    lineHeight: 36px
  link:
    fontFamily: Mukta, Prompt
    fontSize: 16px
    fontWeight: 800
    lineHeight: 24px
    textTransform: uppercase
rounded:
  xs: 4px
  sm: 4.8px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 15px
  s4: 16px
  s5: 20px
  s6: 24px
  s7: 32px
  s8: 48px
  s9: 56px
  s10: 80px
components:
  button-secondary:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
    height: 32px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    padding: 8px 16px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-largest}"
    boxShadow: rgba(0, 0, 0, 0.15) 2px 3px 6px 0px
  nav-link:
    textColor: "{colors.page-largest}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.canvas}"
---

## Overview

The measured page is `https://www.jaymart.co.th/en/home`, titled "Jaymart Group Holdings" (language `en`); the queued site is the parent and group site of the Jaymart family, so the DESIGN.md is named for the measured site. The page is 1,280px wide and 4,510px tall. A shareholder invitation pop-up, a consent banner and carousel arrows over the hero are overlays; they are not documented as brand UI or tokens.

Per the page text, Jaymart Group Holdings Public Company Limited is a Bangkok-based holding company whose home page presents Commerce, Finance and Technology businesses, an investor section and subsidiary logos. The page opens with a hero carousel under a left side rail: a 100px wide grey strip with "MENU", a home icon, the vertical Jaymart Group wordmark, an "EN" language switch and a search icon. Top links read ABOUT US, BUSINESSES, INVESTORS and SUSTAINABILITY in white 16px uppercase. Hero slides pair a red diagonal panel with photography and a giant uppercase word (the extracted h1 is "SYNERGY"; other slides read "TECHNOLOGY", "PARTNERSHIP"), plus a muted subtitle line ("Jaymart Group believes…" / "for Retail and Consumer…").

Below the hero: a red triangular logo mark above a circular infographic with a black disc and fingerprint icon, orbited by coloured dots labelled "Digital Transformation", "Exponential Growth Business Model", "Fintech" and "Synergy"; a pale `#eff3f3` band with a phone mock-up and an accordion of "Retail Business" (expanded: "Jaymart Group core business operates Mobile phone, accessories and Gadget distribution with more than 200 shops all nationwide." with a red "Read more →"), "Finance Business" and "Technology Business"; a diagonal red "INVESTOR HIGHLIGHTS" band with a share price (JMART 10.50 THB, +0.20 / 1.94%, volume 9,580,395); "Quarterly Results" and "SET Announcements" columns with red download icons; three document cards (Annual Report, Presentation, Webcast); a "THE POWER OF SYNERGY" band with subsidiary logos; and a black footer with the company address (187, 189 Jaymart Building, Ramkhamhaeng Road, Phatthana, Saphan Sung, Bangkok 10240).

## Colors

- **Canvas `#ffffff`** (`colors.canvas`): the main reading surface (960 area weight).
- **Page-largest and ink `#000000`** (`colors.page-largest`, `colors.ink`): the footer and hero areas (1,524 area weight) and body text on white (578 characters).
- **Primary `#ed1c24`** (`colors.primary`): Jaymart red, used for the View/download controls (30 characters), the "Read more" links and large diagonal red bands. It is measured as the text color of the "View" button; the diagonal red gradients in the hero and investor band are artwork built on the same red.
- **Surface mist `#eff3f3`** (`colors.surface-mist`): the pale band behind the business accordion (962 area weight).
- **Ink inverse 80 `#ffffffcc`** (`colors.ink-inverse-80`): white at 80% for secondary text on dark (148 characters).
- **Hairline `#ffffff33`**: white at 20%, the one border color.
- Also seen in backgrounds: `#f4f4f4` (307), `#d3d3d3` (215). The root variables are Bootstrap 4 defaults (`--primary` `#007bff`, `--danger` `#dc3545`, `--success` `#28a745`, `--warning` `#ffc107`, and so on) and are not brand colors; likewise `#212529` (Bootstrap body text) is not tokenised.
- The infographic dots use pink, red, blue and grey accents that are illustration colours.

## Typography

Fonts loaded: **Mukta** (300, 400, 500, 800), Font Awesome 5 Pro (300, 900) and icomoon; the declared font stack is `Mukta, Prompt`. By characters Mukta covers 1,350 and Arial 269; weights 400 (855), 500 (362), 800 (318), 300 (83).

| Role | Size / weight / line-height | Notes |
| --- | --- | --- |
| Display (h1) | 80px / 800 / 80px | uppercase, 1px tracking, white on hero |
| Display, 390px | 50px / 800 / 50px | uppercase, 1px tracking |
| Section heading (h2) | 42px / 800 / 48.3px | uppercase, e.g. INVESTOR HIGHLIGHTS |
| Body | 20px / 400 / 30px | black on light, 16px / 24px at 390px |
| Link / button | 16px / 800 / 24px | uppercase links; "View" in red |
| Nav (rail icons) | Arial 24px / 400 / 36px | |
| Rail labels | Mukta 14px / 800 / 14px uppercase | MENU, EN |

Other sizes by characters: 20px (748), 14px (363), 16px (192), 22px (137), 30px (51), 26px (49), 80px (44), 42px (25). The footer's large "THE POWER OF SYNERGY" statement is Mukta 300 at 30px uppercase. Mukta is an open-source family on Google Fonts; it is the actual font and needs no substitute.

## Layout

- Desktop 1,280px; Bootstrap 4 breakpoints are published (576, 768, 992, 1,200px).
- A fixed 100px side rail runs the full viewport height (800px at desktop) at the left, so content starts at 100px.
- Spacing: paddings 15px (33), 16px (23), 8px (17), 32px, 48px, 80px, 24px (2 each) and 160px (1); the spacing scale tokens are 4, 8, 15, 16, 20, 24, 32, 48, 56 and 80px.
- Content sections are centred columns with diagonal-cut colour bands (red investor band, grey slanted sections) and generous whitespace around the circular infographic.
- The footer is a 684px tall black block, 1,180px wide content.

## Elevation & Depth

Two shadows were measured: `rgb(214, 214, 214) 0px 3px 15px 0px` on 18 elements (cards and document tiles) and `rgba(0, 0, 0, 0.15) 2px 3px 6px 0px` on 4 elements (the side rail and nav). Both are soft, low-contrast drops. The hero uses overlays and diagonal planes for depth rather than shadows.

## Shapes

Radii: 4px on 9 elements (`rounded.xs`, buttons and cards), 50% on 5 and 100% on 4 (circular controls, dots, the infographic disc) and 4.8px on 1 (`rounded.sm`). Section edges are cut on diagonals instead of curved.

## Components

- **View button (`button-secondary`)**: transparent with red `#ed1c24` 16px/800 text, 32px high, 80px wide, 4px radius, 1px border.
- **Top links (`link`)**: white 16px/800 uppercase, padding 8px 16px, 105px by 40px for ABOUT US.
- **Side rail (`nav`)**: white, 100px wide, black 14px/800 labels, `rgba(0, 0, 0, 0.15) 2px 3px 6px 0px` shadow.
- **Accordion rows**: Retail Business, Finance Business and Technology Business with a +/- toggle and a red rule; the open row shows body copy and a "Read more →" link.
- **Document tiles**: Annual Report, Presentation and Webcast cards with red icon chips and "View" links.
- **Footer**: black with white 30px uppercase statement and a 4-column link grid.

## Design System Architecture

No public design system or brand guideline site was found and the page links none. The site is a Bootstrap 4 build: the root carries Bootstrap's default custom properties (`--blue`, `--indigo`, `--primary` `#007bff`, `--breakpoint-*`), plus the Swiper slider variables (`--swiper-theme-color`, `--swiper-navigation-size` 44px). The brand's own palette (the red `#ed1c24`) and type (Mukta 800 uppercase) are therefore applied in component CSS, not published as variables, and the tokens here are read from computed styles. Font Awesome 5 Pro and icomoon supply icons.

## Do's and Don'ts

- Do pair Jaymart red `#ed1c24` with white and black; use it for links, download icons and diagonal bands.
- Do set headings in Mukta 800 uppercase and body in Mukta 400 at 20px/30px.
- Do cut section edges on a diagonal and keep generous whitespace.
- Do use soft grey shadows (`#d6d6d6`, 3px 15px) for cards.
- Don't use Bootstrap default blue `#007bff` or other Bootstrap variables as brand colors.
- Don't document the shareholder pop-up, consent banner or carousel arrows as brand UI.
- Don't round corners beyond 4px except for circular controls.

## Responsive Behavior

Measured at 390px: the header shows 2 visible links and a menu toggle labelled "Menu"; the card layout maxes at 3 columns; the h1 drops to 50px / 50px with 1px tracking (215px by 84px); body to 16px / 24px; the nav measures 90px by 390px. The mobile bands are, from the top: a 90px white header, a 102px near-black strip, a 3,363px media hero band, a 137px `#1a1d22` band, a 676px media band and a 1,058px `#020307` footer. Mobile text sizes by characters: 16px (603), 18px (480), 14px (363), 20px (51), 50px (44). Other breakpoints are not measured.

## Iteration Guide

1. White canvas, black text, red `#ed1c24` for accents; `#eff3f3` for alternate bands.
2. Mukta 800 uppercase: 80px display, 42px sections; Mukta 400 20px/30px body.
3. Buttons: red text, 4px radius, 32px high; links 16px/800 uppercase.
4. Cards with `rgb(214, 214, 214) 0px 3px 15px 0px`; side rail with `rgba(0, 0, 0, 0.15) 2px 3px 6px 0px`.
5. Use spacing 8, 15, 16, 24, 32, 48, 80px.
6. Keep investor content factual and the hero messages as single uppercase words.
