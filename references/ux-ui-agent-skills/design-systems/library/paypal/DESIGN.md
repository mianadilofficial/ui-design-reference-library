---
version: alpha
name: PayPal
category: "Banking & Insurance"
description: "PayPal US homepage: white canvas with a sky-blue #60cdff hero, brand blue #0066f5 and navy #002991 panels, proprietary PayPal Pro 900-weight headlines (82.9px, tight tracking), 24px body in PayPal Pro Text VF, and 48px pill buttons with an 8 percent navy tint fill."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#0066f5"
  on-primary: "#000000"
  surface-navy: "#002991"
  surface-warm: "#f1efea"
  sky: "#60cdff"
  ink-on-dark: "#ffffffb8"
  ink-muted: "#000000a1"
  hairline: "#ffffff3d"
  primary-tint: "#05378214"
typography:
  display:
    fontFamily: "\"PayPal Pro\", \"Century Gothic\", Helvetica, Arial, sans-serif"
    fontSize: 82.9291px
    fontWeight: 900
    lineHeight: 91.222px
    letterSpacing: "-2.48787px"
  display-mobile:
    fontFamily: "\"PayPal Pro\", \"Century Gothic\", Helvetica, Arial, sans-serif"
    fontSize: 56.5px
    fontWeight: 900
    lineHeight: 62.15px
    letterSpacing: "-1.695px"
  heading:
    fontFamily: "\"PayPal Pro\", \"Century Gothic\", Helvetica, Arial, sans-serif"
    fontSize: 48.2857px
    fontWeight: 900
    lineHeight: 53.1142px
    letterSpacing: "-1.44857px"
  subheading:
    fontFamily: "\"PayPal Pro\", \"Century Gothic\", Helvetica, Arial, sans-serif"
    fontSize: 178px
    fontWeight: 900
    lineHeight: 195.8px
    letterSpacing: "-7px"
  body:
    fontFamily: "\"PayPal Pro Text VF\", Helvetica, Arial, sans-serif"
    fontSize: 24.0001px
    fontWeight: 400
    lineHeight: 28.8001px
    letterSpacing: "-0.480001px"
  button:
    fontFamily: "\"PayPal Pro Text VF\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
    letterSpacing: "-0.24px"
  nav:
    fontFamily: "\"PayPal Pro Text VF\", Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 700
    lineHeight: 16px
    letterSpacing: "-0.18px"
rounded:
  xs: 8px
  sm: 12px
  md: 16px
  lg: 24px
  xl: 26.66px
  2xl: 32px
  3xl: 68.57px
  4xl: 96px
  pill: 9999px
spacing:
  s1: 2px
  s2: 2.01px
  s3: 4px
  s4: 8px
  s5: 9.6px
  s6: 10px
  s7: 12px
  s8: 16px
  s9: 17.42px
  s10: 18.89px
components:
  button-primary:
    backgroundColor: "{colors.primary-tint}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 20px
    height: 48px
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 1px inset
  button-secondary:
    backgroundColor: "{colors.primary-tint}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 20px
    height: 48px
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 1px inset
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 10px 16px
  nav:
    backgroundColor: "{colors.hairline}"
    textColor: "{colors.ink}"
    rounded: "{rounded.4xl}"
    padding: 2px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 10px 16px
  card:
    backgroundColor: "{colors.surface-navy}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"

---

# PayPal — Design System

## Overview
The measured page is the US consumer homepage, https://www.paypal.com/us/webapps/mpp/home (a second pass at https://www.paypal.com/us/home gave an identical layout), titled "Pay, Send and Save Money with PayPal | PayPal US". The first screen is a bright sky-blue band (`{colors.sky}`, #60cdff) carrying a centered, very heavy black headline, "Pay, send, and save smarter", a small Personal / Business toggle above it, a phone-style product card below it and a black "Get the PayPal app" QR tile at the right. A white header holds the "P" monogram, four menu items (Personal, Business, Advertiser, Developer), "Help", a pale grey "Log In" pill and a solid black "Sign Up" pill. Below, the page flips to white sections with large left-aligned black headlines ("Shop in stores and online", "Get rewards from the brands you love"), photographic product shots (a hand holding a phone, a red sneaker, headphones, groceries) and soft grey rounded brand cards. A rounded white panel with a small close icon at the top right overlaps the hero in the capture; it is part of the page's stacked-section layout and is not treated as a brand control. Voice is plain and benefit-led: pay, send, save, rewards.

## Colors
The palette is mostly achromatic with two blues. `{colors.canvas}` is white (#ffffff), covering about half of the capture; `{colors.ink}` is black (#000000) for headlines and body; `{colors.ink-muted}` (#000000a1, black at about 63 percent) appears on hover states and secondary text. `{colors.primary}` (#0066f5) is the brand blue measured as text and action color; `{colors.surface-navy}` (#002991) is a deep navy panel color used for dark cards; `{colors.sky}` (#60cdff) is the hero band and accent text on dark; `{colors.surface-warm}` (#f1efea) is a warm light grey for alternate sections. `{colors.ink-on-dark}` (#ffffffb8) is white at about 72 percent for text on navy, and `{colors.hairline}` (#ffffff3d) is a faint white border used on dark surfaces. The button fill `{colors.primary-tint}` (#05378214) is a navy at 8 percent opacity, which renders as a pale cool grey on white. `{colors.on-primary}` is black.

## Typography
Two proprietary families are loaded: "PayPal Pro" (weight 900 only) for display and "PayPal Pro Text VF", a variable face spanning 400 to 900, for text. The H1 `{typography.display}` is 82.9291px at weight 900 with 91.222px line height and tight tracking of -2.48787px; on mobile it becomes `{typography.display-mobile}` at 56.5px. Section headings are `{typography.heading}` at 48.2857px/900. A 178px/900 style (`{typography.subheading}`) was measured for oversized numeric or decorative text. Body copy is `{typography.body}` at 24.0001px/400 with -0.480001px tracking, a large reading size, while controls use `{typography.button}` at 16px/700 and navigation `{typography.nav}` at 12px/700. Negative letter-spacing scales with size on every style, which is what makes the headlines look compressed and confident.

### Font substitutes
PayPal Pro and PayPal Pro Text VF are proprietary. The site's own fallback stack is "Century Gothic", Helvetica, Arial, sans-serif for display and Helvetica, Arial, sans-serif for text; use those where the faces are unavailable, keeping weight 900 for headlines and the negative tracking.

## Layout
The page is a full-bleed vertical sequence of bands at a 1280px desktop width. Hero content is centered; later sections switch to a two-column arrangement with headline and short paragraph at the left and imagery at the right, then to carousels of cards that bleed off both screen edges. Measured gaps include 4, 8, 9.6, 16, 17.42, 20, 22.85 and 24px; paddings of 8, 12, 20, 44.8, 61.71 and 72px. The generous 72px padding and big type give the page a spacious, scroll-driven rhythm.

## Elevation & Depth
Shadows are soft and large: `rgba(0, 0, 0, 0.08) 0px 24px 48px 0px` for floating cards and `rgba(0, 0, 0, 0.14) 4px 4px 28px 6px` for overlay panels. Buttons carry only a transparent 1px inset ring. Depth otherwise comes from layered panels: white sheets with large top radii sliding over the colored hero, and grey cards on white.

## Shapes
Radii measured: 8, 12, 16, 24, 26.66, 32, 68.57, 96px, 50 percent and a 1000px pill (also a computed 3.35544e+07px pill). Buttons and toggles use the pill (`{rounded.pill}`); cards use 24px (`{rounded.lg}`) to 32px; the stacked sheet's top corners are visibly larger. The overall language is rounded and friendly.

## Components
`button-primary` is a 48px-tall pill, background `{colors.primary-tint}`, label `{colors.ink}` in `{typography.button}`, padding 12px 20px and a transparent 1px inset ring; the same style serves "See How You're Safe", "Get the Debit Card", "Browse Offers" and "Start Saving". One variant on a dark panel ("Learn About Pay in 4") uses white text on a translucent grey fill. In the header the capture shows a solid black "Sign Up" pill with white text and a pale grey "Log In" pill; these were not captured as measured elements, so no numeric values are given for them. The nav is a segmented control with a faint border `{colors.hairline}`; nav links are 12px/700 with 10px 16px padding. The `card` is a 24px-radius panel on `{colors.surface-navy}`; brand cards in the rewards row are light grey with a logo chip and product photo.

## Design System Architecture
No public PayPal design-system documentation was opened for this write-up, so this describes the de-facto system read from the page at https://www.paypal.com/us/home. The measured root variables are Tailwind utility internals (`--tw-ring-offset-shadow`, `--tw-gradient-*`, `--tw-shadow`), which indicates the page is styled with Tailwind CSS utilities rather than a named token namespace. Color and size values therefore live in utility classes and component styles, not in documented variables, and consistency is carried by the single typeface pair and the shared pill and 24px radii.

## Do's and Don'ts
Do set headlines in the 900-weight display face with negative tracking. Do keep pages white with one saturated sky or navy band at a time. Do use pill buttons at 48px height. Do pair product photography showing real hands, devices and goods with short benefit headlines. Don't use thin weights for headings. Don't add colored outlines to pills; their fill is a quiet tint. Don't reuse the browser default link colors. Don't introduce additional hues beyond the two blues and the warm grey.

## Responsive Behavior
A 390px mobile pass was captured: the H1 drops from 82.9291px to 56.5px (`{typography.display-mobile}`) with tracking scaled to -1.695px. The card rows are carousels that bleed past the viewport edge on desktop, which implies horizontal scrolling at narrower widths. Exact breakpoint widths were not recorded, so none are stated.

## Iteration Guide
Start with a white canvas and a pale blue or navy hero band. Set the H1 at 82.9291px/900 and headings at 48.2857px/900, body at 24.0001px/400. Make every action a 48px pill using the quiet tint fill, with a black pill reserved for sign-up in the header. Use 24px radii for cards, photographic crops without borders, and soft 48px-blur shadows for floating elements. Validate any new color against the measured palette above.

### Imagery and voice
Photography is tightly cropped lifestyle and product imagery: a hand holding a phone showing a debit card screen, a red sneaker, cream headphones, a bag of fresh vegetables. Backgrounds behind products are flat light grey or deep red, never busy. Copy is in short, active phrases such as "Browse Offers", "Start Saving" and "Get the Debit Card", with small superscript footnote markers after claims about rewards. The result is approachable fintech: large type, big tap targets, and very little visual noise beyond the one colored hero band per screen.
