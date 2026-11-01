---
version: alpha
name: PhonePe
category: "Design Systems"
description: "PhonePe's home page sets Inter Tight at 32px/500 headlines and 22px grey body on white, with a deep-space dark hero (#040417), a brand purple #5e2b9d for 160px-radius pill buttons, a #21153d dark purple card surface and soft illustrated product cards."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#5e2b9d"
  on-primary: "#ffffff"
  surface-night: "#040417"
  surface-dark: "#1a1a1a"
  ink-near-black: "#05020a"
  ink-grey: "#696969"
  ink-charcoal: "#1e1e1e"
  ink-grey-2: "#6f6f6f"
  primary-dark: "#361968"
  ink-purple: "#3b2968"
  surface-deep-purple: "#21153d"
typography:
  display:
    fontFamily: "\"Inter Tight\", sans-serif, Helvetica, Arial"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 36.48px
  display-mobile:
    fontFamily: "\"Inter Tight\", sans-serif, Helvetica, Arial"
    fontSize: 26px
    fontWeight: 500
    lineHeight: 29.64px
  subheading:
    fontFamily: "\"Inter Tight\", sans-serif, Helvetica, Arial"
    fontSize: 22px
    fontWeight: 500
    lineHeight: 28.6px
  body:
    fontFamily: "\"Inter Tight\", sans-serif, Helvetica, Arial"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 33px
  button:
    fontFamily: "\"Inter Tight\", sans-serif, Helvetica, Arial"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  nav:
    fontFamily: "\"Inter Tight\", sans-serif, Helvetica, Arial"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18.4px
rounded:
  xs: 16px
  sm: 32px
  md: 44px
  lg: 100px
  xl: 140px
  2xl: 160px
  3xl: 200px
  pill: 9999px
spacing:
  s1: 5px
  s2: 7px
  s3: 8px
  s4: 10px
  s5: 16px
  s6: 18px
  s7: 20px
  s8: 22px
  s9: 30px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 10px 36px
    height: 44px
  button-light:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-near-black}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 10px 36px
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.surface-deep-purple}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.pill}"
    padding: 20px 0px 120px
  footer:
    textColor: "{colors.ink}"
---

## Overview

Measured at https://www.phonepe.com/ (title "PhonePe: UPI Payments, Investment, Insurance, Recharges, DTH & More", 1280px viewport, 16660px tall). The page opens with a slim white header (purple PhonePe logo, uppercase links: Company, Our Solutions, Investor Relations, Contact Us, Trust & Safety) and a full-width dark carousel. The slide in the capture is "PhonePe Pulse - The Beat of Progress", with the line "Every transaction tells a story. Together, they tell India's." and a white "Know More" pill, set over a glowing purple halo around a dark globe with India lit up. Pagination dots sit at the bottom of the hero. The extraction caught a different slide whose h1 reads "₹10 lakh Personal Loan with zero paperwork", so the hero rotates between campaigns.

Below the hero are product cards on white: Payments ("Manage all your payments seamlessly"), Investments ("Build, manage & grow your wealth") and Insurance ("Protect, plan & secure your future"), each with a soft flat illustration, a purple title, grey support copy and a purple arrow. The capture was taken mid scroll-animation: the Insurance card is half-faded and later sections show as empty white space or a large dark-purple circle with a QR code. Those are animation states, not final layout, and are described only qualitatively.

The voice is plain, reassuring and nationwide in scale ("One in three Indians uses the PhonePe app to send money, rec..." appears as body copy). Slides mix English product claims with Indian context such as lakh and Bharat.

## Imagery and Art Direction

Two visual registers coexist. The hero is cinematic and dark: a glowing violet arc, concentric translucent rings, tiny star-like dots and a globe silhouette with India highlighted by points of light, used to give the Pulse data campaign a sense of scale. The product section is the opposite, bright and friendly: each card carries a small flat illustration in purple, blue, peach and gold (a wallet with coins, a bar chart with a rupee coin, an umbrella and shield for Insurance). Illustrations are rounded and simple, with no photography of people on the first screen. The logo is a white glyph in a purple circle followed by a bold purple wordmark in the header, and the same glyph appears in white on the dark hero beside the words "PhonePe Pulse".

## Microcopy Voice

Headlines are short and declarative ("The Beat of Progress", "₹10 lakh Personal Loan with zero paperwork"), and card descriptions are one-line promises that start with a verb: "Manage all your payments seamlessly", "Build, manage & grow your wealth", "Protect, plan & secure your future". Buttons are brief ("Know More", "Explore Now"). Header links are uppercase, which sets them apart from the sentence-case body copy.

## Colors

The page canvas is {colors.canvas} (#ffffff); text is {colors.ink} (#000000) with {colors.ink-near-black} (#05020a, which the site names --text-color-primary), {colors.ink-grey} (#696969, the body-paragraph color), {colors.ink-grey-2} (#6f6f6f) and {colors.ink-charcoal} (#1e1e1e). The heading on the loan slide is {colors.ink-purple} (#3b2968), with a lighter purple word (#7d47ce) as a child color.

The brand purple is {colors.primary} (#5e2b9d), declared as --button-color-primary and used on filled pill buttons ("Explore Now") with {colors.on-primary} (#ffffff) labels. A deeper {colors.primary-dark} (#361968, --button-color-primary-dark and --text-color-secondary) is used for supporting text and pressed states. Dark surfaces are {colors.surface-night} (#040417, the hero), {colors.surface-dark} (#1a1a1a) and {colors.surface-deep-purple} (#21153d, --primary-color-variant-one, the QR circle). Other named variables are --primary-color-variant-two (#5838a3), --black-color-variant-one (#3d3256), --button-color-tertiary (#dfd8eb), --color-grey-lighter (#d4dff3) and --button-color-secondary (#07c3de, a cyan not seen in the capture).

The developer docs branding page (https://developer.phonepe.com/docs/branding) says to write the name as "PhonePe" and not to change the color scheme without notification, but lists no hex values, so no brand values were taken from it.

## Typography

Inter Tight is the only family, loaded at 300, 400, 500 and 600 with Helvetica and Arial in the fallback stack. Display ({typography.display}) is 32px at 500 on 36.48px; the mobile display ({typography.display-mobile}) is 26px. Subheads ({typography.subheading}) are 22px at 500 on 28.6px. Body ({typography.body}) is 22px at 400 on 33px, large and open. Buttons ({typography.button}) are 16px at 500, and navigation ({typography.nav}) is 16px at 400, set in uppercase on the header links.

Font substitutes: Inter Tight is open source (a tighter-spaced cut of Inter); Inter or Helvetica are suitable fallbacks.

## Layout

The header is a full-width white bar with the logo at far left and links spread across the center. The hero spans the whole viewport width with centered text and a large illustrative globe. Product cards sit in a row of three on a white band, each with generous bottom padding (the generated card padding is 20px 0px 120px). Spacing measured: {spacing.s3} (8px), {spacing.s5} (16px), {spacing.s7} (20px), {spacing.s9} (30px) and {spacing.s10} (32px). Buttons use 10px 36px padding and are 44px tall. The page is long, with marquee strips of merchant and payment logos (width and padding variables like --marquee-image-width: 100px).

## Elevation & Depth

White product cards have a faint shadow and a white face on a white page, so they read as lifted tiles. The hero builds depth with a purple radial glow and concentric translucent rings. A black translucent overlay (#0000004d) was measured as a large background area. No other shadow values were extracted.

## Shapes

Shapes are very round. The primary button is {rounded.2xl} (160px, effectively a pill). Measured radii also include {rounded.xs} (16px), {rounded.sm} (32px), {rounded.md} (44px), {rounded.lg} (100px), {rounded.xl} (140px), {rounded.3xl} (200px) and {rounded.pill} (9999px). The cards in the capture have modest rounded corners; the QR panel is a full circle.

## Components

**button-primary**: {colors.primary} fill, {colors.on-primary} Inter Tight 16px 500, 160px radius, 10px 36px padding, 44px tall. **button-light**: a white pill with {colors.ink-near-black} text, used over the dark hero ("Know More"). **nav** is plain black text; **nav-link** uses the 16px navigation style. **card** is the dark purple tile style ({colors.surface-deep-purple}, white text) in the generated tokens; the visible home page cards in the capture are white with purple titles and purple arrow icons. **footer** text is {colors.ink}.

## Design System Architecture

The brief listed https://design.phonepe.com as PhonePe's design-system site. The page opened at that URL describes itself as PhonePe's design hub, a portfolio of design work and essays rather than a token or component reference, and phonepe.com does not link to it in the served HTML. So it is a real PhonePe domain but not a design system the site uses, and no values were taken from it. The de-facto system on phonepe.com is a plain custom-property set: 38 root variables named by role, such as --button-color-primary, --text-color-primary, --primary-color-variant-one and marquee sizing variables with -tablet and -mobile suffixes, which implies separate tablet and mobile sizing for marquees.

## Do's and Don'ts

- Do use {colors.primary} pill buttons with white labels and a 160px radius.
- Do put hero content on {colors.surface-night} with a purple glow and white text.
- Do pair illustrated product cards with a purple title and grey description.
- Do use Inter Tight with 22px body text for readable marketing copy.
- Don't use browser-default blue for links; the extraction's #0000ee is a browser default, not a brand color.
- Don't alter the purple without approval, as the developer branding page asks.
- Don't write the name as two words.

## Responsive Behavior

Mobile measurements show smaller display type (26px against 32px). The marquee variables define distinct widths for desktop (100px), tablet (60px for payments) and mobile (80px) items per the root variables, though the exact breakpoints were not measured. No other breakpoint values are claimed.

## Iteration Guide

1. Use {colors.canvas} sections with {colors.ink-grey} 22px body and Inter Tight 500 headings.
2. Make the primary action a {colors.primary} pill, 44px tall.
3. Use {colors.surface-night} with a purple radial glow for hero moments.
4. Draw product illustrations in a flat, rounded, purple-led palette.
5. Verify any new color against the --*-color-* variables before use.
