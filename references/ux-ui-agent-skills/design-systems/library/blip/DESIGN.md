---
version: alpha
name: Blip
category: "Design Systems"
description: "Blip.ai (blip.ai/en) marketing site — a photo-led hero in white, deep-black type (#000000), cobalt blue (#1968f0) uppercase buttons with 6px to 16px corners, Carbona Blip at weight 800 for 44px headlines, pale grey (#f5f5f5) cards and a near-black (#1f1f1f) logo and industries band."
colors:
  canvas: "#ffffff"
  page-largest: "#f5f5f5"
  ink: "#000000"
  ink-secondary: "#525252"
  ink-muted: "#a3a3a3"
  ink-footer: "#5d5d60"
  ink-navy: "#212a3b"
  primary: "#1968f0"
  primary-hover: "#0b56d8"
  primary-bright: "#375efb"
  on-primary: "#ffffff"
  surface-ink: "#1f1f1f"
typography:
  display:
    fontFamily: "\"Carbona Blip\""
    fontSize: 44px
    fontWeight: 800
    lineHeight: 48px
  display-mobile:
    fontFamily: "\"Carbona Blip\""
    fontSize: 24px
    fontWeight: 800
    lineHeight: 30px
  heading:
    fontFamily: "\"Carbona Blip\", sans-serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 36px
  body:
    fontFamily: "\"Carbona Blip\""
    fontSize: 18px
    fontWeight: 400
    lineHeight: 20px
  button:
    fontFamily: "\"Carbona Blip\", sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 16px
    textTransform: uppercase
  button-large:
    fontFamily: "\"Carbona Blip\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
    textTransform: uppercase
  nav:
    fontFamily: "\"Carbona Blip\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 3px
  sm: 4px
  md: 5px
  lg: 6px
  xl: 8px
  2xl: 9px
  3xl: 12px
  4xl: 14px
  cta: 16px
  card: 24px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 10px
  s7: 12px
  s8: 14px
  s9: 16px
  s10: 17px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 0px 20px
    height: 36px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-hero:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-large}"
    rounded: "{rounded.cta}"
    padding: 16px 24px
    height: 50px
  button-ghost:
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.cta}"
    padding: 16px 24px
    borderColor: "{colors.on-primary}"
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    padding: 16px 24px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-footer}"
---

## Overview

Blip is a conversational-AI company, and its English home page leads with people, not software. A header over a full-bleed photograph of a smiling woman at a wooden table carries the white "blip" speech-bubble wordmark, menu items (Platform, Solutions, Cases, Resources, Partners, Company), a Login link, a language selector (EN) and a blue "CONTACT" button. Over the photograph, white bold text states "Conversations that drive results. Intelligence that never stops learning.", with a supporting sentence and two buttons: a filled blue "SCHEDULE A CONSULTATION" and an outlined white "BLIP PLATFORM".

A dark band of grey customer logos (Itaú, Bradesco, IBM, Claro, XP, BRF, Ambev) follows. The next white section opens with a small uppercase eyebrow "LEARN MORE", a bold headline "From first contact to post-sale: every conversation working toward your results." in which the last words are colored blue, a short paragraph, and a "VIEW DEMOS" button; beside it two pale grey rounded panels show phone mockups of chat flows labelled "Product Catalogs" and "WhatsApp Payments". A near-black section titled "Discover the industries we serve:" lists Utilities, Retail, Banking, Education and Automotive with circular arrow markers, beside a tall rounded photograph with a chat bubble overlay ("Invoices & Payments", "I found this invoice, Ana.") and a case-study panel about Energisa, ending in a wide blue "VIEW ALL CASES" button. A small cookie-preferences icon sits at the lower left.

The tone is confident and results-oriented: outcomes with numbers (94% communication success rate), short imperative buttons in uppercase, and chat-bubble UI used as the visual metaphor. Page language is English although the browser title is Portuguese.

## Colors

- **Canvas** `{colors.canvas}` is white and `{colors.page-largest}` is a light grey used for the card panels and footer.
- **Ink** `{colors.ink}` is pure black for headlines and body; `{colors.ink-secondary}` and `{colors.ink-muted}` are neutral greys for secondary text and logos; `{colors.ink-navy}` is a dark navy used for some headings (the extractor read it as the h2 color), and `{colors.ink-footer}` is the footer text grey.
- **Primary** `{colors.primary}` is Blip's cobalt blue; the site's CSS holds it as `--DUP_Blue-Action1` with the hover shade `{colors.primary-hover}` measured on buttons. `{colors.primary-bright}` is a brighter periwinkle blue measured on a security-portal button and visible as the "VIEW ALL CASES" fill.
- **Surface ink** `{colors.surface-ink}` is the near-black of the logo band and industries section (the CSS names it `--blip-ink`).

The root CSS also contains `--blip-id` (a light sky blue, `#A7D8FF`), `--blip-gray` (`#656C79`) and `--blip-soft` (`#f5f6f7`), alongside WordPress preset colors that are defaults and not part of the brand palette.

## Typography

The site uses Carbona Blip (weights 400, 500, 600, 700 and 800) delivered with a variable Carbona font, plus Font Awesome for icons. Headlines are heavy: the hero `{typography.display}` is 44px at weight 800 on a 48px line, section headings use `{typography.heading}` (32px, 700, 36px line), and the mobile display token drops to 24px/800. Body copy is 18px (`{typography.body}`); buttons are uppercase 16px, weight 600 in the header (`{typography.button}`) and weight 400 in the larger hero buttons (`{typography.button-large}`). Eyebrows ("LEARN MORE", "COMPANIES THAT TRUST BLIP") are small uppercase text.

Mixed color inside a headline is a recurring device: the key phrase is set in blue within a black heading. Carbona is a licensed typeface; a geometric humanist sans such as Nunito Sans (which the Blip design-system library itself lists first in its font stack) is a reasonable stand-in.

## Layout

The 1280px capture is a sequence of full-width sections with content aligned to a shared left edge; the hero splits text left and the supporting copy plus buttons right. Two-column sections pair text at the left with a media block at the right. The sizes measured on the page are 12, 14, 16, 18, 20, 24, 32 and 44px. Spacing steps are 2, 3, 4, 5, 6, 10, 12, 14, 16 and 17px for components, with larger section padding in the layout. The page is built on WordPress with Elementor and its mega-menu, tabs and carousel widgets.

## Elevation & Depth

Almost flat. A single shadow is measured, black at 20% opacity, 4px down with an 8px blur. Depth otherwise comes from section color blocks (white, light grey, near-black), inset rounded photos, and white phone mockups sitting on grey panels. The hero uses a photograph under a dark gradient to lift white text.

## Shapes

Radii are small on controls and larger on media. The header "CONTACT" button is 6px (`{rounded.lg}`), hero and section buttons are 16px (`{rounded.cta}`), other measured radii are 3px to 14px for inputs and small items, 12px and 24px for panels (`{rounded.card}`), and photos are cropped with large rounded corners. The 16px radius is the most frequent value on the page.

## Components

- **Header button** — "CONTACT": blue fill, white uppercase 16px/600 text, 36px tall, 20px side padding, 6px radius; hover darkens to `{colors.primary-hover}`.
- **Hero button** — "SCHEDULE A CONSULTATION": blue fill, 50px tall, 16px 24px padding, 16px radius, uppercase 16px/400.
- **Ghost button** — "BLIP PLATFORM": transparent with a white 1px border, same size as the hero button.
- **Wide button** — "VIEW ALL CASES": the brighter blue `{colors.primary-bright}`, stretched to the width of its column.
- **Panel card** — light grey `{colors.page-largest}` rounded panel with a phone mockup and a bold caption.
- **List with markers** — industries list with outlined circular arrow icons, active item in bold with a filled marker.
- **Logo band** — grey logos on `{colors.surface-ink}`.

## Design System Architecture

The dsUrl, [takenet.github.io/blip-ds](https://takenet.github.io/blip-ds), is a Storybook titled "Welcome" for the Uai Design System ("blip-ds"): I opened it, its colors tokens page and its installation page. It is real and published by the same organization (the Take Blip GitHub organization; npm package [blip-ds](https://www.npmjs.com/package/blip-ds), which I downloaded and read at version 1.321.0). It is a web-component library (components such as `bds-grid`, `bds-typo`) with documentation in Portuguese, Sass color variables (`$color-brand`, `$color-primary`, `$color-surface-0`, `$color-content-default`) with light, dark and high-contrast themes, and a font stack of Nunito Sans, Carbona, Tahoma, Helvetica and Arial.

That system does not describe this website. The package's light theme defines primary as `rgba(30, 107, 241, 1)` (#1e6bf1) and a brand color of `rgba(0, 150, 250, 1)`, while the site's button blue is `#1968f0`; the library's first font is Nunito Sans, while the site loads Carbona Blip; the rendered page has no `bds-` elements; and the site's stylesheet list is a WordPress build (Hello Elementor theme and child theme, Elementor, JetEngine, JetMenu, JetTabs and the Adobe Typekit font stylesheet). I also measured a blip-ds button story, which came out as #1e6bf1 buttons in Nunito Sans, confirming the difference. For these reasons blip-ds values are not used here.

The de-facto system of the marketing site is its own handful of custom properties: `--blip-ink` (#1F1F1F), `--blip-gray` (#656C79), `--blip-id` (#A7D8FF), `--blip-soft` (#f5f6f7), `--blip-ease` (cubic-bezier(0.22, 1, 0.36, 1)), Blue-Action and Gray named variables prefixed `--DUP_`, and a large set of WordPress and HubSpot-form variables.

## Do's and Don'ts

- Do use cobalt blue for actions and for one highlighted phrase in a headline.
- Do set buttons in uppercase and keep their copy to short imperatives.
- Do alternate white, light grey and near-black sections.
- Do use chat-bubble mockups and real photography of smiling customers.
- Don't use more than one blue accent per section apart from the wide case-study button.
- Don't use light-weight headlines; weights are 700 to 800.
- Don't mix the library's Nunito Sans styling with this site; the site type is Carbona Blip.
- Don't put grey logos on white; the logo band is dark.

## Responsive Behavior

The page sets a separate mobile display size of 24px at weight 800 (against 44px on desktop), and the builder (Elementor) generates separate desktop, tablet and mobile stylesheets for the home page, which were listed in the page's stylesheets. Narrow-screen section layout was not measured: only the 1280px desktop capture was reviewed visually, and exact breakpoints were not read.

## Iteration Guide

1. Start with white, `{colors.page-largest}` and `{colors.surface-ink}` sections, black text and `{colors.primary}` for actions.
2. Build uppercase buttons at 16px with 6px radius in the header and 16px radius in the hero.
3. Set headlines in a heavy geometric sans at 44px and 32px; color the key phrase blue.
4. Use rounded photography and chat-bubble UI as visuals, grey panels at 24px radius.
5. Keep copy short, outcome-led and numeric.
6. Validate new colors against the measured set and the CSS variables.
