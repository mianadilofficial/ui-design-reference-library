---
version: alpha
name: ServiceTitan
category: "Design Systems"
description: "ServiceTitan's marketing site sets Sofia Pro headlines (44px/700, -2.2px tracking) and Nunito Sans body text on a white canvas with a #22252a charcoal hero card, a coral-red #e24f4f call to action with 8px corners, a #0265dc blue secondary, and documents its product system, Anvil2, with the same two typefaces."
colors:
  canvas: "#ffffff"
  page-largest: "#ffffff"
  ink: "#22252a"
  primary: "#e24f4f"
  on-primary: "#ffffff"
  primary-hover: "#b53f3f"
  surface-footer: "#17191c"
  ink-muted: "#737475"
  ink-secondary: "#444445"
  ink-black: "#000000"
  hairline: "#d9d9d9"
  action-blue: "#0265dc"
  ink-input: "#000000de"
  anvil-ink: "#040404"
  anvil-danger: "#d62100"
  anvil-success: "#077e50"
typography:
  display:
    fontFamily: "\"Sofia Pro\""
    fontSize: 44px
    fontWeight: 700
    lineHeight: 52.8px
    letterSpacing: "-2.2px"
  display-mobile:
    fontFamily: "\"Sofia Pro\""
    fontSize: 28px
    fontWeight: 700
    lineHeight: 33.6px
    letterSpacing: "-0.84px"
  heading:
    fontFamily: "\"Sofia Pro\""
    fontSize: 35px
    fontWeight: 700
    lineHeight: 42px
    letterSpacing: "-1.4px"
  body:
    fontFamily: "\"Nunito Sans\""
    fontSize: 13px
    fontWeight: 400
    lineHeight: 19.5px
  body-lg:
    fontFamily: "\"Nunito Sans\""
    fontSize: 16px
    fontWeight: 400
  button:
    fontFamily: "\"Sofia Pro\""
    fontSize: 20px
    fontWeight: 700
  button-secondary:
    fontFamily: "\"Sofia Pro\""
    fontSize: 18px
    fontWeight: 700
    lineHeight: 27px
  input:
    fontFamily: "\"Sofia Pro\""
    fontSize: 16px
    fontWeight: 500
    lineHeight: 23px
    letterSpacing: 0.15008px
rounded:
  xs: 4px
  sm: 5px
  md: 8px
  lg: 20px
  xl: 50px
  anvil-medium: 6px
  pill: 9999px
spacing:
  s1: 4px
  s4: 8px
  s5: 10px
  s7: 12px
  s8: 15px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 15px 24px
    height: 61px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.action-blue}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.md}"
    padding: 16px 24px
    height: 55px
  link:
    textColor: "{colors.surface-footer}"
    typography: "{typography.body}"
  text-input:
    textColor: "{colors.ink-input}"
    typography: "{typography.input}"
    padding: 25px 12px 8px
    height: 59px
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.canvas}"
    padding: 24px 28px
---

## Overview

The capture of servicetitan.com (title "ServiceTitan - Home and Commercial Software for the Trades") is a polished, photography-led SaaS homepage for trade businesses. A thin utility bar sits on top with a promo line ("Stay Ahead: Download our Latest Commercial Industry Report Today"), a phone number, "Customer Resource Hub" and "Sign In". The main header has the ServiceTitan wordmark with its muscular-figure mark, dropdown links (Commercial, Residential, Max, Products, Resources) and a coral "Get Demo" button.

The hero is a large rounded charcoal (#22252a) card containing the headline "AI software for commercial and residential trades" in white Sofia Pro Bold, an email field next to a coral "Get Started" button, two review badges (Capterra 4.5 stars, Software Advice 4.5 stars) and, on the right, a photograph of a technician in a van reading a tablet. Beneath, a row of partner logos (FLOW, DEL-AIR, ENCON, INTERSTATE, Southland) runs in white on the dark card.

The page then moves through white sections with centred bold statements ("Build your legacy on a strong foundation. Build your legacy with ServiceTitan.", "Built for the Trades, Built for Your Business"), a video block with a blue circular play button on black, and two cards with documentary photographs (electricians on a ladder in a timber building, an HVAC technician kneeling at a condenser) each topped by "Commercial Software" and "Residential Software" titles and an outlined "Explore ..." button. Copy is plain, benefit-first and addresses owners directly: "Power your business with a platform designed to give you better profit margins, a faster cash flow, and workflows that encourage productivity."

## Colors

White (#ffffff) is the canvas (5,917 weighted area units), followed by the charcoal #22252a hero card (2,851) and a darker #17191c footer (1,572). Ink is #22252a, the same charcoal, which is the most-read text colour (1,478 characters); white text on dark follows with 1,234. Secondary greys are #737475 and #444445, with #000000 appearing in smaller labels and #000000de in the email field. Hairlines are #d9d9d9 (13 uses) and #bcbcbd (6 uses).

The call-to-action is coral #e24f4f (white text), darkening to #b53f3f on hover. The blue #0265dc fills the "Subscribe" secondary button and is also the Anvil2 design system's info/primary status colour: the official Anvil2 token page lists status.color.info as #0265dc, danger #d62100 and success #077e50, and a foreground default of #040404. The homepage uses blue only in small places (the video play button, secondary buttons), keeping coral as the single conversion colour.

## Typography

Two families share the page: Sofia Pro for headlines, buttons and form fields (2,284 weighted characters) and Nunito Sans for running text (2,530). The Anvil2 token page assigns the same pairing, font.family.display as Sofia Pro and font.family.base as Nunito Sans. Headlines are bold with tight negative tracking: 44px/700 on a 52.8px line with -2.2px letter-spacing for the hero, 35px/700 with -1.4px for section statements, and 28px with -1.12px at the next level; the mobile hero is 28px/700 with -0.84px. Buttons are Sofia Pro 20px/700 (primary) and 18px/700 (secondary). The most common text sizes are 16px (2,054 characters) and 20px (1,497), with 13px used for the smallest copy and the top utility bar.

Sofia Pro is a commercial typeface and Nunito Sans is open source; a humanist geometric sans such as Nunito Sans at 700 with the same negative tracking is a reasonable stand-in for Sofia Pro headlines.

## Layout

A wide, near-full-bleed layout with a 15px outer margin at the 960px capture scale. The hero card spans the whole width; below it sections are centred, with headings centred and body copy left-aligned. The Commercial/Residential cards sit in two equal columns with roughly 30px between them. Measured gaps include 20px (6 uses), 80px (5), 10px and 30px; measured paddings include 20px, 30px, 25px and 12px. The email field is 59px tall (padding 25px 12px 8px), and the primary button is 61px tall.

## Elevation & Depth

Shadows are soft and cool. Cards use rgba(11, 26, 33, 0.08) 0px 3px 10px (four uses), a blue-tinted rgba(8, 19, 79, 0.16) 0px 4px 13.333px shadow appears once, and one large rgba(11, 26, 33, 0.15) 0px 30px 60px shadow appears once; which elements carry those two was not verified. Most of the depth is tonal: charcoal hero, white sections, near-black footer.

## Shapes

The coral and blue buttons have 8px corners; the most frequent measured radius is 4px (ten uses) followed by 8px (seven uses), with one 20px, one 5px and one 50px radius, which were not individually mapped to elements. Photographs inside cards are square-cornered, and the play button and avatar-like elements are circular (50%). Anvil2's token page defines its own radius scale; border.radius.medium resolves to 0.375rem (6px at a 16px root), which is the radius its buttons reference.

## Components

Primary button: coral #e24f4f, white Sofia Pro 20px/700, 8px radius, 15px 24px padding, 61px tall; hover #b53f3f. The header "Get Demo" button is the same coral. Secondary button: #0265dc, white 18px/700, 8px radius, 16px 24px padding, 55px tall. Outlined buttons ("Explore Commercial", "Explore Residential") are white with a dark 1px border and bold centred labels. Email field: white, #000000de text at Sofia Pro 16px/500, 59px tall. Review badges are small icon-plus-text pairs with star glyphs. The footer is #17191c with white text and 24px 28px padding.

Anvil2 specifies three button kinds in its token reference: primary uses the info colour #0265dc with white text (and #1a1a1a text in dark mode), secondary uses the default foreground on a 6%-alpha neutral fill, and ghost is transparent; danger variants use #d62100. The documentation shows its component previews as images, so those buttons were not measured live.

## Design System Architecture

ServiceTitan's design system is Anvil2, documented at https://anvil.servicetitan.com. Its home page describes Anvil2 as empowering product teams "to create great experiences for ServiceTitan software with inclusive tools, alignment, and processes", and lists core libraries (Anvil2 Web, Icons, Tokens), React Native (Anvil2 RN for agentic surfaces, themed with Carto), and extended libraries (Atlas, Common, Charts). Its Library Architecture page says the core web library is @servicetitan/anvil2, a set of React components, with a matching Figma library and an Illustrations package, and that all source code lives in the Hammer monorepo (https://github.com/servicetitan/hammer).

Tokens are tiered at https://anvil.servicetitan.com/docs/web/design-tokens: primitives (raw values), semantic tokens (such as background.color.primary) and component tokens (such as button.primary.background.color), published as CSS custom properties with the --a2- prefix, SCSS variables and JS exports, with light and dark values. The Core Principles page lists six principles: Consistency that scales, Efficient and Sustainable, Built for everyone, Quality you can trust, Provide and Curate, and Anchor the core, enable the rest. The marketing homepage shares the Sofia Pro and Nunito Sans type pairing and the #0265dc blue with Anvil2, but its coral CTA and 8px corners are not taken from the Anvil2 button tokens.

## Do's and Don'ts

Do use coral #e24f4f for the one conversion action per view and keep it 61px tall with 8px corners. Do set headlines in Sofia Pro Bold with negative tracking and body in Nunito Sans. Do pair dark rounded hero cards with real tradesperson photography. Do show social proof (ratings, partner logos) near the first call to action. Do use Anvil2 semantic tokens in product UI.

Don't use blue #0265dc as the main marketing CTA; it is for secondary actions and product status. Don't mix Anvil2's 6px radius into the 8px marketing buttons without checking. Don't use stock illustration where documentary photography fits. Don't set headlines at normal tracking; the tight -2.2px tracking is part of the voice.

## Responsive Behavior

At the measured 390px mobile width the hero headline falls from 44px to 28px with 33.6px leading and -0.84px tracking. The Anvil2 token set includes breakpoint tokens, but their values were not read for this file. Mobile arrangement of the header, the two-card section and the partner logo row was not captured, so it is not described here.

## Iteration Guide

Begin with a white canvas and #22252a ink. Place a rounded charcoal hero card, a 44px Sofia Pro Bold headline with -2.2px tracking, an email field, and a coral 61px button. Follow with centred 35px statements, documentary photographs and outlined buttons. Use #0265dc only for secondary actions. For product UI, defer to Anvil2 semantic tokens from https://anvil.servicetitan.com/docs/web/design-tokens, and measure any marketing value before adding it.
