---
version: alpha
name: NS Dutch Railways (NS)
category: "Design Systems"
description: >-
  NS's site uses its own NS Sans (a Frutiger-based face) in bold blue (#003082) on white, with the railway yellow #ffc917 as the hero field, a single action blue (#0063d3) on 6px-radius buttons, 12px-radius cards with soft layered shadows, and real-people photography of travellers on yellow-and-blue
  trains.
colors:
  canvas: '#ffffff'
  surface-subdued: '#f7f7f9'
  ink: '#003082'
  ink-body: '#252528'
  ink-strong: '#070721'
  ink-muted: '#6a6a7a'
  primary: '#0063d3'
  on-primary: '#ffffff'
  brand-yellow: '#ffc917'
  badge-red: '#e2103d'
  hairline: '#e4e5e8'
typography:
  display:
    fontFamily: '"NS Sans", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"'
    fontSize: 28px
    fontWeight: 700
    lineHeight: 35.96px
    letterSpacing: '-0.286px'
  display-mobile:
    fontFamily: '"NS Sans", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"'
    fontSize: 24px
    fontWeight: 700
    lineHeight: 31.68px
    letterSpacing: '-0.198px'
  subheading:
    fontFamily: '"NS Sans", "Segoe UI", Myriad, Verdana, sans-serif'
    fontSize: 16px
    fontWeight: 700
    lineHeight: 25px
  body:
    fontFamily: '"NS Sans", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"'
    fontSize: 16px
    fontWeight: 550
    lineHeight: 24px
  button:
    fontFamily: '"NS Sans", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"'
    fontSize: 18px
    fontWeight: 700
    lineHeight: 22.5px
  nav:
    fontFamily: '"NS Sans", "Segoe UI", Myriad, Verdana, sans-serif'
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25px
  link:
    fontFamily: '"NS Sans", "Segoe UI", Myriad, Verdana, sans-serif'
    fontSize: 16px
    fontWeight: 550
    lineHeight: 24px
rounded:
  sm: 3px
  button: 6px
  card: 12px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 13px
  s7: 14px
  s8: 16px
  s9: 20px
  s10: 25px
components:
  button-primary:
    backgroundColor: '{colors.primary}'
    textColor: '{colors.on-primary}'
    typography: '{typography.button}'
    rounded: '{rounded.button}'
    padding: 8px 20px
    height: 56px
  button-secondary:
    backgroundColor: '#00102f0f'
    textColor: '{colors.ink}'
    typography: '{typography.button}'
    rounded: '{rounded.button}'
    padding: 8px 20px
    height: 56px
  link:
    textColor: '{colors.primary}'
    typography: '{typography.link}'
    rounded: '{rounded.sm}'
  nav:
    backgroundColor: '{colors.canvas}'
    textColor: '{colors.ink-strong}'
    boxShadow: rgba(0, 0, 0, 0.03) 0px 1px 1px 0px, rgba(0, 0, 0, 0.04) 0px 10px 20px 0px
  nav-link:
    textColor: '{colors.ink-strong}'
    typography: '{typography.nav}'
  card:
    backgroundColor: '{colors.canvas}'
    textColor: '{colors.ink}'
    rounded: '{rounded.card}'
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.03) 0px 2px 4px 0px, rgba(0, 0, 0, 0.03) 0px 4px 8px 0px, rgba(0, 0, 0, 0.03) 0px 8px 16px 0px
  footer:
    backgroundColor: '{colors.canvas}'
    textColor: '{colors.ink}'
    borderColor: '{colors.hairline}'
---

## Overview

The ns.nl home page, as captured, is a Dutch-language travel planner dressed in NS's yellow and blue. A thin utility row (Zakelijk, NS International, In English) sits above a white nav bar with the blue NS logo, four bold menu items (Reizen, Producten, Dagje uit, Service en contact) and "Mijn NS" with a search icon. A blue-outlined info bar announces a strike in Belgium with a "Lees meer" link. Below it a full-width railway-yellow hero (`{colors.brand-yellow}`) holds the product itself: a "Plan je reis" journey planner in a white card with two address fields joined by a vertical route line, a Vertrek/Aankomst toggle, small option chips (date, time, "Nu", "Reisopties") and a blue "Plannen" button beside a translucent "Bestel treinkaartje" button. On the right sits a rounded photograph of a smiling traveller by a yellow-and-blue train, with a red "Bekijk alle tips" badge and a bold blue caption.

After the hero come four white tiles with outline icons ("Kaartjes & toeslagen", "Abonnement wijzigen", "Geld terug bij vertraging", "Uitchecken vergeten"), a full-width deep-blue promotional banner in rounded corners with a yellow headline ("Ga voordelig naar het Spoorwegmuseum met de trein") and a red "Boek nu" badge, a grey band with three photo cards, and two bordered link-list cards ("Veel gezocht", "Service en contact"). A small blue "Feedback" tab is fixed to the right edge.

The voice is direct and practical Dutch, imperative and short ("Plan je reis", "Bestel treinkaartje"), and the photography shows real passengers and staff in NS uniforms rather than stock models.

**Key Characteristics:**
- Yellow (`{colors.brand-yellow}`) as the brand field and deep blue (`{colors.ink}`) as the text and banner color: a two-color identity.
- One action blue (`{colors.primary}`), reserved for "Plannen" and links.
- NS Sans in bold for every heading and label; body and links are set at weight 550.
- Rounded containers: 12px cards with very soft layered shadows, 6px buttons, pill badges.
- Task-first layout: the planner is the first thing on the page, and service shortcuts follow as icon tiles.
- Photography of real travellers, trains and staff in motion.

## Colors

> **Source pages:** home (`https://www.ns.nl`) at 1280px and 390px, plus a pixel read of the capture for the hero field.

- **Ink / brand blue** `{colors.ink}` #003082: the most-read text color (headings, body on white, nav) and the fill of the large promotional banner. The page CSS names it `--nes-core-color-brand-blue`.
- **Primary** `{colors.primary}` #0063d3: the "Plannen" button fill and link color (`--nes-core-color-brand-light-blue`).
- **Brand yellow** `{colors.brand-yellow}` #ffc917: the hero field (a pixel read of the capture gives #fec919) and the headline color on the blue banner; CSS variable `--nes-core-color-brand-yellow`.
- **Body ink** `{colors.ink-body}` #252528 for card descriptions, `{colors.ink-strong}` #070721 for nav text, `{colors.ink-muted}` #6a6a7a for secondary text.
- **Surfaces:** `{colors.canvas}` white and `{colors.surface-subdued}` #f7f7f9 for the grey photo-card band.
- **Badge red** `{colors.badge-red}` #e2103d: the small "Bekijk alle tips" and "Boek nu" badges.
- **Hairline** `{colors.hairline}` #e4e5e8: footer and divider borders. The translucent secondary button fill is `#00102f0f` (a 6% navy over yellow).

The design guide's color page says palettes use an 11-step scale from 50 to 950 per family, that four core brand colors were separated into their own palette, that there are 8 saturated families plus gray and alpha ramps, that every color has a dark-mode counterpart, and that all 600-level colors reach 4.5:1 contrast on white ([Color](https://design.ns.nl/4a05a30ad/p/44f5db-color)).

## Typography

NS Sans is the only family measured (400, 550 and 700 loaded). The Typography page says it "is based on the Frutiger font", designed by Adrian Frutiger for airports and therefore suited to stations ([Typography](https://design.ns.nl/4a05a30ad/p/2024f1-typography)). Weights are assigned by role there: Bold for display, headings and form labels; Demi for links, chips, list labels and form values; Regular for body and descriptions. NS Sans is proprietary; Frutiger-like humanist sans fallbacks such as Segoe UI or Myriad are what the page's own fallback stacks use.

| Role | Size / line | Weight | Tracking |
|---|---|---|---|
| Display (`{typography.display}`) | 28px / 35.96px | 700 | -0.286px |
| Display, mobile (`{typography.display-mobile}`) | 24px / 31.68px | 700 | -0.198px |
| Subheading (`{typography.subheading}`) | 16px / 25px | 700 | normal |
| Body (`{typography.body}`) | 16px / 24px | 550 | normal |
| Link (`{typography.link}`) | 16px / 24px | 550 | normal |
| Nav (`{typography.nav}`) | 16px / 25px | 400 | normal |
| Button (`{typography.button}`) | 18px / 22.5px | 700 | normal |

The H1 is small by marketing standards (28px "Plan je reis"); the page's hierarchy comes from weight and color, not scale. Card titles measure 18px bold.

## Layout

The design guide's web layout page defines a default container max-width of 1728px (1600px excluding padding) for navigational and inspirational pages, a narrow one of 1328px (1200px excluding padding) for functional pages like checkout, and a full-width variant with 32px base padding; vertical section spacing comes in default, tight and loose variants; and it says explicitly "We do not use a 12-column grid", preferring gutter tokens and a content-driven number of columns, usually no more than four ([Layout for Web](https://design.ns.nl/4a05a30ad/p/245260-layout-for-web)). The home page follows that: a two-column hero, a two-by-two tile grid, a full-width banner, a three-up card row and two bordered link cards. Spacing values measured include 2, 4, 8, 10, 12, 13, 14, 16, 20 and 25px (`{spacing.s1}` to `{spacing.s10}`).

## Elevation & Depth

Depth is gentle. Cards carry three stacked low-opacity shadows (`rgba(0,0,0,0.03)` at 2px/4px, 4px/8px and 8px/16px offsets); the nav bar has a faint one-pixel plus 10px/20px shadow. Hairline borders (`{colors.hairline}`) separate list cards and the footer. The blue banner and the yellow hero are flat color fields with no gradient.

## Shapes

Buttons measure 6px corners (`{rounded.button}`); cards 12px (`{rounded.card}`); badges are pills (`{rounded.pill}`); small inline elements 3px (`{rounded.sm}`). A 24px radius and a 14px radius were each measured on a single element; they are not promoted to tokens.

## Components

- **Primary button** (`{components.button-primary}`): `{colors.primary}` fill, white NS Sans 18px bold, 6px radius, padding 8px 20px, 56px high ("Plannen").
- **Secondary button** (`{components.button-secondary}`): translucent navy fill (`#00102f0f`) with `{colors.ink}` text, same geometry ("Bestel treinkaartje", "Reisopties").
- **Journey planner card:** white, with two stacked inputs ("adres, station, postcode") joined by a route line and a swap control; a segmented Vertrek/Aankomst toggle and option chips below.
- **Tiles:** white 12px cards with a blue outline icon above a bold blue label.
- **Photo cards:** photo on top, bold 18px title, regular description, 12px radius and soft shadow.
- **Badges:** small pill labels in `{colors.badge-red}` with white text.
- **Link lists:** bordered cards headed by a 24px bold title, with blue links beneath.
- **Navigation:** white bar, 16px text (`{typography.nav}`), faint shadow below.

## Design System Architecture

NS publishes its design system as the **Nessie Design System** at [design.ns.nl](https://design.ns.nl) (a zeroheight site titled "Nessie Design System", tagline "Establishing quality, uniformity and inclusivity across our digital experiences"). Its top sections are Get started, Guidelines, Fundamentals and Design System. The designers page says "At NS we work with Figma" and lists three Figma libraries: NES Fundamentals (colors, text styles, layout, effects), NES Web Components and NES App Components ([For Designers](https://design.ns.nl/4a05a30ad/p/13e96b-for-designers)). It also states that components are based on "Visual direction 3.0".

For web developers ([Installation](https://design.ns.nl/4a05a30ad/p/692011-installation)), NS "strongly recommend[s] using webcomponents in combination with Tailwind CSS", installable from an internal npm registry or loaded from a CDN, with guides for Astro, Angular, React, Tailwind config and fonts. Release notes cover design tokens (a first and a "2G" generation), Web, Android and iOS. The component catalog includes Button, Button Group, Journey Pill, Price, Route, Rush, Section Heading, Tabs and Tag, among others, documented with Examples, Guidelines and Copywriting tabs ([Button](https://design.ns.nl/4a05a30ad/p/15d4f2-button)). Components are developed in Storybook with the axe accessibility add-on ([Storybook](https://design.ns.nl/4a05a30ad/p/57f3c0-development-support/b/0721b5)).

The live page confirms the system: its root CSS carries `--nes-core-*` and `--nes-base-*` variables (for example `--nes-core-color-brand-yellow: #ffc917`, `--nes-base-color-brand-primary-default`, `--nes-core-border-radius-0`), a core-to-base-to-applied token layering that matches the guide's description of tokens. The Nessie component demos are not DOM buttons the extractor can measure, so component geometry above is taken from the live ns.nl page.

## Do's and Don'ts

**Do**
- Put the task (the planner) first, in a white card on the yellow field.
- Use NS Sans bold for headings and labels; keep tracking slightly negative on display sizes.
- Use `{colors.primary}` for the one main action and the translucent navy button for secondary actions.
- Round cards to 12px with very soft stacked shadows; round buttons to 6px.

**Don't**
- Don't use yellow for body text on white; the guide notes yellow needs a 700 step to reach 4.5:1.
- Don't use a 12-column grid for layout decisions; use gutter tokens and content-led columns.
- Don't add gradients to the yellow hero or blue banner.
- Don't use stock-looking imagery; show real travellers and staff.

## Responsive Behavior

At 390px the H1 drops from 28px to 24px (`{typography.display-mobile}`, -0.198px tracking). The guide supplies a default, tight and loose vertical spacing system and container variants that cap at 1728px; "gutter-dense" is preferred when two rows of tiles stack on mobile. Breakpoints are placed on uncommon viewport sizes so edge cases do not land on popular devices ([Layout for Web](https://design.ns.nl/4a05a30ad/p/245260-layout-for-web)).

## Iteration Guide

1. Start with a white page, `{colors.ink}` text, and a full-width `{colors.brand-yellow}` hero holding the main task.
2. Use one `{components.button-primary}` per view; pair it with the translucent secondary.
3. Build content tiles and photo cards at 12px radius with three-layer 3% shadows.
4. Keep headings bold and compact; vary hierarchy by weight and color.
5. Run `node web/scripts/verify-designs.mjs --slug=ns-nl` after edits.
