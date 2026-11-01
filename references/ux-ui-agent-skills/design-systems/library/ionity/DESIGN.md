---
version: alpha
name: IONITY
category: "Energy & Climate"
description: "IONITY, the European high-power EV charging network: deep navy canvas #000032, white text, magenta #ff0074 and purple #702283 gradient cards, Foco W Rg and Foco W Bd type with a 97.9px display, pill-shaped white and outline buttons at 999px radius, full-bleed photography."
colors:
  canvas: "#000032"
  ink: "#ffffff"
  primary: "#ffffff"
  on-primary: "#000032"
  purple: "#702283"
  pink: "#ff0074"
  neutral: "#9e9eb7"
typography:
  display:
    fontFamily: "\"Foco W Rg\", sans-serif"
    fontSize: 97.9188px
    fontWeight: 400
    lineHeight: 107.711px
  display-mobile:
    fontFamily: "\"Foco W Rg\", sans-serif"
    fontSize: 51.4864px
    fontWeight: 400
    lineHeight: 56.635px
  heading:
    fontFamily: "\"Foco W Rg\", sans-serif"
    fontSize: 52.8762px
    fontWeight: 400
    lineHeight: 56.5775px
  subheading:
    fontFamily: "\"Foco W Bd\", sans-serif"
    fontSize: 15.667px
    fontWeight: 400
    lineHeight: 15.667px
    letterSpacing: 0.861686px
  body:
    fontFamily: "\"Foco W Rg\", sans-serif"
    fontSize: 11.7503px
    fontWeight: 400
    lineHeight: 17.6254px
  button:
    fontFamily: "\"Foco W Rg\", sans-serif"
    fontSize: 15.667px
    fontWeight: 400
    lineHeight: 23.5005px
  nav:
    fontFamily: "\"Foco W Bd\", sans-serif"
    fontSize: 17.6254px
    fontWeight: 700
    lineHeight: 22.913px
rounded:
  xs: 5.88px
  sm: 7.83px
  md: 11.75px
  lg: 15.67px
  xl: 31.33px
  cta: 7.83px
  pill: 9999px
spacing:
  s1: 2.98px
  s2: 3.92px
  s3: 5.88px
  s4: 7.83px
  s5: 10px
  s6: 11.75px
  s7: 15.67px
  s8: 16px
  s9: 17.63px
  s10: 19.58px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    padding: 19.5838px 15.667px
    height: 63px
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.pill}"
    padding: 15.667px 17.6254px
    height: 57px
    borderColor: "{colors.ink}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.pill}"
    padding: 15.667px 17.6254px
    borderColor: "{colors.ink}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.pill}"
    padding: 15.667px 17.6254px
    borderColor: "{colors.ink}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  card:
    backgroundColor: "{colors.purple}"
    textColor: "{colors.canvas}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink}"
---

## Overview

The measured page is the English home page of IONITY (ionity.eu), titled "IONITY – Seamless, fast & reliable EV charging across Europe". The page is 1280px wide and 7588px tall. The hero headline is "Charge faster, enjoy more." with the supporting line "Enabling electric driving for everyone." and an outlined "Find nearest location" button over a photograph of two smiling people at a charger. Following sections are "Our charging network" (statistics 890 Locations, 24 Countries, 81 Building), "The road to tomorrow, today." over an aerial forest-road photograph, "Fast charging at fair rates" with a country selector, the product names IONITY Power 365, IONITY Motion 365, IONITY App and IONITY Direct, "Say hi to your co-driver.", "Charging for all", "Backed by renowned industry leaders", "Partner with us to win customers.", "About us." and "We need you."

The look is an automotive-tech brand on a night-navy base: a deep blue canvas, white type, a hot magenta-to-purple gradient on the key statistics card, and large lifestyle and landscape photographs. Controls are pills. Copy is short and first-person-plural, with optimistic one-line promises and chevron arrows on buttons.

## Colors

- **Canvas / navy `#000032`** (`--base-color-brand--navy`): the dark ground of the page and the text colour on white pills (1003 characters).
- **Ink / primary `#ffffff`**: white is the most-read text colour (3569 characters) and the fill of the primary button; **on-primary** is navy `#000032`.
- **Neutral `#9e9eb7`** (`--base-color-neutral--neutral-light`): secondary text on navy (1268 characters).
- **Pink `#ff0074`** (`--base-color-brand--pink`): the nav-link hover colour (text and border change from navy to `#ff0074`) and the bright end of the statistics gradient (494 area units); **darker pink `#e50068`** (165 units).
- **Purple `#702283`** (`--base-color-brand--purple`): the other end of the gradient (704 units). Declared brand colours also include blue `#312783`, yellow `#ffa000` and `dark-blue` `#191948`.
- **Lightest neutral `#f2f2f4`** (342 units), **`#dfdfea`**, and **`#60607f`** for darker neutral text; **`#27262b`** is declared as black.
- System colours: error red `#b42318` and light `#fef3f2`, success green `#027a48` and light `#ecfdf3`.
- A black overlay of 30% (`#0000004d`) covers the hero photograph (largest measured area, 1563 units) and `#ffffff40` is a transparent white background variable.

## Typography

The site loads Foco W Rg (weight 400) and Foco W Bd (weight 700). Foco sets 5847 measured characters in total: Rg 4043 and Bd 1804. The fallback is generic `sans-serif`. Foco is a commercial typeface from a type foundry; if it is not available, a humanist sans with rounded terminals is the nearest stand-in.

Measured roles at desktop:

- Display (h1): Foco W Rg 97.9188px / 107.711px, weight 400.
- Heading: Foco W Rg 52.8762px / 56.5775px (declared `--typography--h2--size-desktop` 3.375rem).
- Subheading: Foco W Bd 15.667px / 15.667px, letter-spacing 0.861686px.
- Body: Foco W Rg 11.7503px / 17.6254px.
- Button: Foco W Rg 15.667px / 23.5005px.
- Navigation: Foco W Bd 17.6254px / 22.913px, weight 700.

The most characters are set at 13.7086px (2211) and 15.667px (2189); other sizes are 31.334px (241, the statistic numbers), 19.5838px (209), 9.79188px (82, with 0.66px tracking) and 17.6254px (156). The site declares a type scale as variables: h1 6.25rem desktop, 4.0625rem tablet and 3.375rem mobile; h2 3.375rem; h3 2rem; h4 1.625rem desktop and 1.75rem tablet; h5 1.25rem; h6 1.125rem.

## Layout

A 1280px desktop page with a wide content column (in the capture, content aligns to a common left edge), full-bleed photographic bands and one large rounded gradient card. The measured gaps are 15.667px (51 uses), 7.83351px (38), 31.334px (23), 23.5005px (22), 11.7503px (9), 5.87513px (8) and 47.001px (6); paddings are 7.83351px (60), 15.667px (26), 3.91675px (20), 17.6254px (14), 64px (13) and 31.334px (9). Many spacing values are close multiples of 3.92px (3.91675px, 7.83351px, 11.7503px, 15.667px, 31.334px).

Imagery and voice: photography is warm and human at the top (a couple at a charger, smiling) and scenic lower down (an aerial hairpin road through forest with a pink route line). Statistics are shown as large light numerals with tiny icon labels. Headlines are plain sentences with a full stop, such as "The road to tomorrow, today." and "About us.", and button labels are verb phrases such as "Find nearest location", "Explore now" and "Plan your next adventure". The hero headline mixes a regular-weight first line with a bold second line ("enjoy more.") in the same family, which is the only place the bold face carries display text in the capture.

## Elevation & Depth

Two shadows are measured: `rgba(0, 0, 0, 0.25) 0px 4px 10px 0px` (4 uses) and a layered pair `rgba(0, 0, 0, 0.08) 0px 20px 24px -4px, rgba(0, 0, 0, 0.03) 0px 8px 8px -4px` (1 use). Most depth comes from the photographic backdrops, a 30% black scrim on hero imagery and a radial purple glow in the navy section around the statistics card.

## Shapes

Radii: 999px (35 uses, pills for buttons, nav and links), 11.7503px (13, cards and inputs), 15.667px (5), 5.87513px (3), 7.83351px (1, CTA) and 31.334px (1, the large gradient panel). The nav is a white pill that holds Locations, Charging, About and Stories. Buttons are pills of 57px to 63px height.

## Components

- **Primary button**: white fill, navy text, Foco W Rg 15.667px, padding 19.5838px 15.667px, height 63px ("Plan your next adventure", with a chevron).
- **Outline pill (secondary)**: transparent with a white border, white Foco W Bd 17.6254px text, padding 15.667px 17.6254px, height 57px, radius 9999px ("Find nearest location", "Explore now").
- **Navigation pill**: white capsule with navy links that turn `#ff0074` on hover; "Support" and a language selector (EN) sit at the far right in white.
- **Statistics card**: `#702283` to `#ff0074` gradient over a charger photograph, 31.334px radius, large 31.334px numbers with small icons and labels.
- **Select field**: a white input with 11.7503px radius for "Select country" in the tariff section.
- **Footer**: white text on navy.

## Design System Architecture

No public design-system or brand-guideline page was found: the home page HTML was opened and contained no brand, press, design-system, guideline or GitHub link. The site ships tokenised CSS. The root variables use a Client-First naming scheme: `--base-color-brand--navy`, `--base-color-brand--pink`, `--base-color-neutral--neutral-light`, semantic aliases such as `--background-color--background-alternate`, `--text-color--text-light-grey`, `--border-color--border-primary`, and a per-breakpoint type scale `--typography--h1--size-desktop` and so on. Values in this file are the measured computed values, with the variables used only for naming.

## Do's and Don'ts

- Do set the page on navy `#000032` with white text and `#9e9eb7` secondary text.
- Do use magenta `#ff0074` for hover and highlights, and the `#702283` to `#ff0074` gradient for hero data cards.
- Do make buttons and nav as pills (999px) with chevron arrows.
- Do use full-bleed lifestyle and landscape photography with a light dark scrim.
- Don't use the error red or success green as brand accents; they are system colours.
- Don't introduce a third typeface; Foco Rg and Bd cover everything.
- Don't use hard rectangular buttons; radii are 999px or 11.7503px.

## Responsive Behavior

Measured at 390px: the display role is 51.4864px / 56.635px and the heading is the same family at the reduced scale; common sizes are 13.3483px (2259 characters), 15.2552px (2167), 11.4414px (473), 30.5105px (320), 17.1621px (217) and 19.069px (209). The site declares tablet and mobile type sizes as variables (h1 4.0625rem tablet, 3.375rem mobile). Layout stacking, menu collapse and breakpoint widths were not measured.

## Iteration Guide

1. Set the canvas to `#000032` and text to white, with `#9e9eb7` for secondary copy.
2. Use Foco W Rg for display and body, Foco W Bd for nav and labels.
3. Draw pills at 999px with chevrons; use white fill for the lead call to action.
4. Reserve `#ff0074` for hover and the `#702283` to `#ff0074` gradient for key data.
5. Use big photographs behind the headlines with a 30% black scrim.
6. Check new values against `web/data/extracted/ionity.json`.
