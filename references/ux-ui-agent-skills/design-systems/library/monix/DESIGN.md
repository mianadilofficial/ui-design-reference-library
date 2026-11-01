---
version: alpha
name: Monix
category: "Thai Brands"
description: "Monix (Thai fintech, FINNIX lending app) design system: Rubik headings at 88px weight 500, light grey canvas #f0f2f2, single turquoise action color #40d2d2, near-black #131313 headlines, 6px buttons and 12px shadowed cards."
colors:
  canvas: "#f0f2f2"
  page-largest: "#ffffff"
  ink: "#676767"
  primary: "#40d2d2"
  on-primary: "#ffffff"
  ink-black: "#131313"
  hairline: "#f5f0f0"
typography:
  display:
    fontFamily: Rubik, sans-serif
    fontSize: 88px
    fontWeight: 500
    lineHeight: 88px
    letterSpacing: "-1.5px"
  display-mobile:
    fontFamily: Rubik, sans-serif
    fontSize: 31px
    fontWeight: 500
    lineHeight: 31px
    letterSpacing: "-0.5px"
  heading:
    fontFamily: Rubik, sans-serif
    fontSize: 35px
    fontWeight: 500
    lineHeight: 35px
    letterSpacing: "-0.8px"
  subheading:
    fontFamily: Rubik, sans-serif
    fontSize: 35px
    fontWeight: 400
    lineHeight: 38.5px
    letterSpacing: 0.25px
  button:
    fontFamily: Rubik, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 16px
rounded:
  xs: 2px
  sm: 6px
  md: 8px
  lg: 12px
  xl: 16px
  2xl: 48px
spacing:
  s1: 9px
  s2: 11.25px
  s3: 12px
  s4: 15px
  s5: 16px
  s6: 24px
  s7: 36px
  s8: 48px
  s9: 72px
  s10: 108px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 9px 24px
    height: 48px
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 20px 20px inset
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 9px 36px
    height: 60px
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 20px 20px inset
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-black}"
    rounded: "{rounded.lg}"
    boxShadow: rgba(0, 0, 0, 0.1) 0px 6px 12px 0px
---

# Monix

## Overview
MONIX is the Bangkok fintech company behind the FINNIX lending app. Its home page opens on a full-width rounded photograph of a smiling woman holding a phone, with the headline "A Fintech That Creates Opportunities for Life Fighters." set in white Rubik over a darkened image. The site presents itself as "a fintech joint venture between SCBX Group and Abakus Group, built to champion financial inclusion in Thailand through FINNIX app". The tone is warm, human and promotional rather than bureaucratic: the copy talks about empathy, "Life Fighters" and "Explosive Results", and the layout uses large pastel gradients and soft cards instead of dense tables. The page is a Webflow export (the markup carries `data-wf-*` attributes and the nav contains leftover template menu entries such as "Style Guide" and "Licenses"), so the design is page-builder driven rather than coded from a component library. The overall impression is a light grey canvas, one turquoise action color, near-black headlines and mid-grey body copy.

## Colors
The canvas is `#f0f2f2` (declared in the site's own root variable `--monix-bg-neutral`), with `#ffffff` as the largest background area (header bar, cards). The single action color is turquoise `#40d2d2` (`--monix-primary`), used as the fill of the "Download FINNIX App" and "Learn More" buttons, with white `#ffffff` text on top. Body text is the mid-grey `#676767` (`--monix-secondary`), while headlines and card titles use near-black `#131313` (`--monix-black`). The root variables also publish a secondary accent palette: `--primary-1` `#ff715b`, `--primary-2` `#ff934f`, `--primary-3` `#3ccf91`, `--primary-4` `#3c5ccf`, `--primary-5` `#5132c0` and `--primary-6` `#8f2df0`, plus translucent white grays for dark sections (`--gray-2` `#ffffff0d`, `--gray-3` `#ffffff1a`, `--gray-4` `#ffffff80`). In the capture the stat blocks ("2020", "50M+", "฿72Bn") are painted with soft lilac, peach, rose, mint and periwinkle gradients; only `#3ccf91` among these appears in the measured background areas (weight 2), so the gradient stops themselves are not recorded as tokens. The turquoise also colors the word "FINNIX" inside the intro paragraph. A hairline border color `#f5f0f0` was measured once.

## Typography
Rubik is the working family: 1,915 characters of the measured text use it against 25 for Inter. The font files loaded are Inter, Mitr and Rubik, each in weights 300 to 700. The desktop h1 is 88px, weight 500, line-height 88px, letter-spacing -1.5px. The h2 ("Introducing MONIX") is 35px, weight 500, letter-spacing -0.8px; the h3 intro paragraph is 35px, weight 400, line-height 38.5px, letter-spacing 0.25px. Buttons and navigation links are 16px weight 500 with 0.5px letter-spacing in the nav. Other measured sizes by character count are 24px, 20px, 14px, 49px and 15px. Thai-capable Mitr is loaded but the measured text is English. No proprietary face is used, so no substitutes are needed: Rubik, Inter and Mitr are all available as open web fonts.

## Layout
The desktop capture is 1280px wide and 5,063px tall. A white top bar holds the Monix logo at left, six text links (About Us, Product, Newsroom, Careers, Internship, Contact Us) and the turquoise download button at right. The hero is an inset photograph with rounded corners rather than an edge-to-edge band. Below it the intro paragraph sits in a left-aligned column of about two thirds of the width, followed by three horizontal stat bars stacked vertically, then three equal feature cards with round icon badges, then a "In The Media Spotlight" heading. Measured paddings cluster on 24px, 36px, 48px, 72px and 108px, and measured gaps are 12px, 16px, 24px and 72px. Whitespace is generous; sections are separated by roughly one hero-height of empty canvas.

## Elevation & Depth
Depth is minimal. The only repeated shadow is `rgba(0, 0, 0, 0.1) 0px 6px 12px 0px`, applied to the white feature cards (7 occurrences). Buttons carry a zero-opacity inset shadow `rgba(0, 0, 0, 0) 0px 0px 20px 20px inset` that the hover pass changes to a visible value on "Download FINNIX App". The hero uses a dark overlay on the photograph to keep white type readable. There are no heavy drop shadows or glassmorphism effects.

## Shapes
Radii measured on the page: 2px, 6px, 8px, 12px, 16px and 48px. The buttons use 6px (`rounded.sm`), cards use 12px (`rounded.lg`), and the hero image corners and larger panels use 12px and 16px; 48px appears three times on pill-shaped elements. Card tops are sometimes rounded only at the top (`12px 12px 0px 0px`). The shape language is soft and friendly but not fully pill-shaped.

## Components
**button-primary**: turquoise `#40d2d2` fill, white text, Rubik 16px weight 500, radius 6px, padding 9px 24px, height 48px (the "Download FINNIX App" link in the header, 214px wide).
**button-secondary**: same fill, text and radius, but padding 9px 36px and height 60px (the "Learn More" link, 163px wide, 0.5px letter-spacing).
**nav-link**: text-only, Rubik 16px weight 500 in `#676767`.
**card**: white `#ffffff` background, near-black text, 12px radius, shadow `rgba(0, 0, 0, 0.1) 0px 6px 12px 0px`; the three measured cards are 355px wide and 261px tall, each with a round turquoise-tinted icon badge, a bold lead phrase ("Human-Centric Design.") and a short grey sentence.
The cookie preference widget and the template menus visible in the markup are not brand components and are not documented as tokens.

## Design System Architecture
No public design system, brand guideline or token package was found on the site. The page is built in Webflow, and the de-facto system is its root variables: `--monix-primary`, `--monix-secondary`, `--monix-black`, `--monix-dark-gray`, `--monix-light-gray` `#f9fafc`, `--monix-bg-neutral`, `--gray-1` `#12141d`, `--white` and `--black`, together with the numbered `--primary-1` to `--primary-6` accent set. The footer credits "Made by Flinch 77". Naming is a mix of brand-prefixed variables (`--monix-*`) and generic ones (`--primary-*`, `--gray-*`, `--white`, `--black`); the nav also still lists template menu groups (Landing 1 to 5, Company Pages, Pricing Pages, Blog Pages, Account Pages, Style Guide, Licenses, Changelog) in the page markup.

## Do's and Don'ts
- Do use `#40d2d2` only for the primary action and the "FINNIX" product mention; keep text on it white.
- Do set headlines in Rubik 500 with negative letter-spacing at display sizes (-1.5px at 88px).
- Do keep body copy in `#676767` on the `#f0f2f2` canvas and reserve `#131313` for headings.
- Do round buttons to 6px and cards to 12px.
- Don't add heavy shadows; the measured card shadow is the only elevation.
- Don't use the six accent hexes as button fills; they only appear as gradient and illustration colors.
- Don't treat the cookie preference button as a design element.

## Responsive Behavior
Measured at a 390px mobile pass: the h1 drops from 88px to 31px (weight 500, line-height 31px, letter-spacing -0.5px) and wraps into four lines in a 318px column. The primary "Learn More" button keeps its 6px radius, 16px type and 9px 36px padding but its height is 48px on mobile (60px on desktop). Mobile font sizes by character count are 16px, 20px, 24px, 14px, 31px and 35px. Navigation behavior on mobile (menu collapse, breakpoints) was not measured, and no breakpoint widths were recorded.

## Iteration Guide
1. Start from the tokens: canvas `#f0f2f2`, ink `#676767`, primary `#40d2d2`, headings `#131313`.
2. Build the hero as an inset rounded photo with a darkened overlay and a white 88px Rubik 500 headline.
3. Add stat rows and three-up cards on white with the 12px radius and the single soft shadow.
4. Keep gradients pastel and low-contrast, as in the capture; do not introduce new saturated colors beyond the published `--primary-*` variables.
5. For Thai copy, Mitr is already loaded by the site; verify line-height before reusing the 88px/88px ratio.
6. Re-run `node web/scripts/verify-designs.mjs --slug=monix` after any token rename.
