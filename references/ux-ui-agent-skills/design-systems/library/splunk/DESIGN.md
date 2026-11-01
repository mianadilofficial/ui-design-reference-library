---
version: alpha
name: Splunk
category: "Design Systems"
description: "Splunk's homepage is a near-black stage (#000000 canvas, #ffffff text) in Inter 400-800, with an orange-to-magenta gradient on key headings, a magenta primary (#ce0070) on 24px-radius pill buttons 44px high, a white pill nav bar, and translucent white-10% cards with 24px corners over dark video and product imagery."
colors:
  canvas: "#000000"
  surface-white: "#ffffff"
  page-largest: "#000000"
  ink: "#ffffff"
  ink-muted: "#656c76"
  primary: "#ce0070"
  on-primary: "#ffffff"
  surface-mist: "#f0f3f7"
  surface-near-black: "#131315"
  ink-navy: "#0c1724"
  ink-offwhite: "#fafafa"
  ink-deep-navy: "#07182d"
  link-blue: "#0064da"
  primary-hover: "#a9005c"
  card-glass: "#ffffff1a"
typography:
  display:
    fontFamily: Inter, "Noto Sans", Helvetica, Arial, sans-serif
    fontSize: 55px
    fontWeight: 600
    lineHeight: 60.5px
  display-mobile:
    fontFamily: Inter, "Noto Sans", Helvetica, Arial, sans-serif
    fontSize: 45px
    fontWeight: 600
    lineHeight: 49.5px
  heading:
    fontFamily: Inter, "Noto Sans", Helvetica, Arial, sans-serif
    fontSize: 27px
    fontWeight: 700
    lineHeight: 40.5px
  subheading:
    fontFamily: Inter, "Noto Sans", Helvetica, Arial, sans-serif
    fontSize: 40px
    fontWeight: 800
    lineHeight: 48px
  body:
    fontFamily: Inter, "Noto Sans", Helvetica, Arial, sans-serif
    fontSize: 10px
    fontWeight: 400
    lineHeight: 14px
  button:
    fontFamily: Inter, "Noto Sans", Helvetica, Arial, sans-serif
    fontSize: 15px
    fontWeight: 600
    lineHeight: 17px
    letterSpacing: 0.2px
  nav:
    fontFamily: Inter, "Noto Sans", Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 21px
  link:
    fontFamily: Inter, "Noto Sans", Helvetica, Arial, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
rounded:
  xs: 2px
  sm: 2.5px
  md: 8px
  lg: 16px
  xl: 24px
  pill: 9999px
spacing:
  s1: 8px
  s2: 10px
  s3: 12px
  s4: 13px
  s5: 15px
  s6: 16px
  s7: 20px
  s8: 22px
  s9: 24px
  s10: 25px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.surface-white}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 12px 22px 13px
    height: 44px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.ink-navy}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 12px 22px 13px
    height: 44px
    borderColor: "{colors.surface-white}"
  link:
    textColor: "{colors.link-blue}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
  nav:
    textColor: "{colors.surface-white}"
    rounded: "{rounded.xl}"
    padding: 0px 32px
  nav-link:
    textColor: "{colors.link-blue}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.card-glass}"
    textColor: "{colors.surface-white}"
    rounded: "{rounded.xl}"
    padding: 30px 20px
    boxShadow: rgba(0, 0, 0, 0.08) 0px 0px 8px 0px, rgba(0, 0, 0, 0.08) 0px 2px 2px 0px
---

## Overview

The Splunk homepage (splunk.com, headline "Scale your data strategy, not your costs") is a dark, cinematic enterprise page. The canvas is pure black (`{colors.canvas}`) with a deep purple and ember glow behind the hero, thin vertical orange light streaks, and a top strip reading "Splunk is now a Cisco company" with a "Find out more" link. A wide white pill navigation bar floats over the glow, with a search icon and a "Trials & Downloads" link on the right. The hero is two columns: white headline, a short subhead and two pill buttons ("Take a product tour" in magenta, "Start free trial" in white) on the left, and a framed video still of a green-lit control-room scene on the right with a magenta play button, a speech-bubble teaser and an "Ask Buttercup" chat chip.

Below the hero a dark promotional card ("Introducing Splunk Agent Observability") sits under a warm glow, followed by a "Trusted by leaders worldwide" heading and a large three-column section titled "The data platform for trusted AI at scale". Section headings are filled with an orange-to-magenta gradient, a signature of the page; each column has an icon, a bold title, a paragraph and an outlined pill button ("Explore Splunk Platform", "Explore the Agentic SOC", "Explore Agent Observability"). A later section shows product UI mockups beside another gradient headline, "AI for security and observability", with a white pill button.

The capture also shows a cookie notice ("By continuing to use our website, you acknowledge the use of cookies." with "Privacy Statement" and "Change Settings") overlapping the lower-left of the hero. I re-ran the extractor once in stealth mode and the notice persisted; it is consent UI and not part of the brand's components. The voice is confident and outcome-first, with phrases such as "Scale your data strategy, not your costs" and "Defend at machine speed".

## Colors

- **Canvas `{colors.canvas}`** is black, the largest painted background area on the page (also recorded as `{colors.page-largest}`). **`{colors.surface-near-black}`** is a slightly lifted near-black used for banded surfaces.
- **Ink `{colors.ink}`** is white, the most-read text color by a wide margin (all headings and most body text on the dark canvas). `{colors.ink-offwhite}` is a secondary light text; `{colors.ink-muted}` (#656c76, a mid grey) is used in lighter-background contexts such as the white nav bar and form text.
- **White surface `{colors.surface-white}`** fills the nav bar, the white pill buttons, the cookie notice and the chat teaser. `{colors.surface-mist}` is a pale blue-grey fill for light sections, and `{colors.ink-navy}` / `{colors.ink-deep-navy}` are dark navy text colors used on those white surfaces.
- **Primary `{colors.primary}`** is magenta-pink with white text; the measured hover is the deeper `{colors.primary-hover}`.
- **Link blue `{colors.link-blue}`** colors links on the white notice and nav surfaces.
- **Glass `{colors.card-glass}`** is white at 10% alpha, the card fill over dark backgrounds.
- **Gradient**: the page's custom properties (`--splunkNewGradientDarkBackgroundLeft`/`Right`, `--splunkGradient`) define an amber-orange to red-orange to magenta gradient used as a text fill on headings and the stat figures. Gradients are not expressible as a single token here, so they are described rather than tokenised.

The stylesheet also exposes a full named palette (`--splunkPinkDarker`, `--splunkGrayDarkest`, `--splunkBlue`, `--splunkGreenCTA`, and others) as custom properties; the ones above are the ones that appear in the capture.

## Typography

One family: Inter (variable, plus static 500, 600, 700 and 800 weights loaded), with Noto Sans, Helvetica, Arial and sans-serif as fallbacks. An icon font (`splunk_list`) is also loaded. Inter is already the brand's webfont, so no substitution is needed beyond the declared fallbacks.

- `{typography.display}`: 55px, weight 600, line-height 60.5px. On mobile, `{typography.display-mobile}` is 45px/49.5px.
- `{typography.subheading}`: 40px, weight 800, line-height 48px (stat or section figures).
- `{typography.heading}`: 27px, weight 700, line-height 40.5px.
- `{typography.link}`: 18px, weight 400, line-height 27px; 18px is also the most frequent text size on the page (hero and column paragraphs).
- `{typography.nav}`: 14px, weight 500, 21px.
- `{typography.button}`: 15px, weight 600, line-height 17px, letter-spacing 0.2px.
- `{typography.body}`: 10px, weight 400, line-height 14px. This was the measured body role and corresponds to the small text inside product mockups; reading copy in the page itself is 18px.

## Layout

At 1280px the page is about 9,027px tall. The page uses a centered content column with the nav bar spanning nearly the full width with small side gutters. Hero and feature rows are two- and three-column, separated by very large vertical gaps (the black canvas does most of the separating). The spacing scale is `{spacing.s1}` 8px, 10px, 12px, 13px, 15px, 16px, 20px, 22px, 24px and 25px. Button padding is 12px 22px 13px; the nav has 32px horizontal padding; cards use 30px 20px.

## Elevation & Depth

Depth here comes from light, not shadow. Glows of orange and magenta halo the hero and the dark promo card, vertical light streaks fall from the nav, and large product mockups sit on translucent glass panels. Two measured shadows exist: `rgba(0, 0, 0, 0.08) 0px 0px 8px 0px, rgba(0, 0, 0, 0.08) 0px 2px 2px 0px` on cards, and `rgba(0, 0, 0, 0.2) 0px 0px 18px 0px` on one floating element. On black, these are nearly invisible; the glow and the 10% white fill do the work.

## Shapes

The shape language is round. `{rounded.xl}` 24px is the dominant radius (27 occurrences) and applies to buttons, the nav bar, cards and the promo card. Other values are `{rounded.xs}` 2px, `{rounded.sm}` 2.5px, `{rounded.md}` 8px, `{rounded.lg}` 16px and `{rounded.pill}` for fully round chips and the play button. Images such as the hero video are framed with a rounded corner.

## Components

- **button-primary**: `{colors.primary}` fill and border, white `{colors.surface-white}` 15px/600 label, `{rounded.xl}`, padding 12px 22px 13px, 44px high; hover `{colors.primary-hover}`.
- **button-secondary**: white fill, `{colors.ink-navy}` label, same shape and size ("Start free trial", "Discover AI capabilities"). Outlined variants on the dark canvas use a white 1px outline and white label.
- **nav**: white pill bar with 24px radius and 32px horizontal padding; **nav-link** uses `{colors.link-blue}` 14px/500.
- **link**: `{colors.link-blue}` 18px text.
- **card**: `{colors.card-glass}` fill, white text, `{rounded.xl}`, padding 30px 20px, with the soft shadow above.

## Design System Architecture

Splunk publishes the Splunk Design System at https://splunkui.splunk.com (the dsUrl). The page I opened describes it as a UI toolkit and design system for building Splunk interfaces, listing the packages @splunk/react-ui and @splunk/themes, plus themes, design tokens, color nomenclature, typeface specifications and licensing. A deeper sub-page (/Packages/themes) returned no readable content, and the GitHub path github.com/splunk/splunk-ui returned 404, so I could not read specific token values.

Whether the marketing homepage uses it: the HTML shows a different, in-house system. Styles come from AEM clientlibs (`/etc.clientlibs/splunk/core/clientlibs/...`), class names use a `splunk-` prefix (`splunk-btn`, `splunk-container`, `splunk-flex-container`, `splunk-tni-wrapper`), and the root defines about 49 custom properties named `--splunk*` (for example `--splunkPinkDarker`, `--splunkGrayLightest`, `--splunkGrayDarkest`, `--splunkBlue`, `--splunkNewGradientDarkBackgroundLeft`). I found no `@splunk/react-ui` or `@splunk/themes` references in the page, so the design-system site is real but the page's values are its own measurements and no values were taken from the design-system docs.

## Do's and Don'ts

- Do keep the page background black and set text in white Inter.
- Do reserve the magenta `{colors.primary}` for the main action and use white pills for the second action.
- Do use the orange-to-magenta gradient only on headings and key figures.
- Do round buttons, nav and cards at 24px.
- Don't use the muted grey `{colors.ink-muted}` for text on black; it belongs on white surfaces.
- Don't treat the cookie notice or chat chip as brand components.
- Don't add drop shadows to cards on the dark canvas; use the 10% white glass fill.
- Don't set long copy at 10px; that size is for product mockup detail.

## Responsive Behavior

The extraction measured 1280px and 390px. The recorded change is the display heading stepping down from 55px/60.5px to 45px/49.5px. The two-column hero and three-column feature section are expected to stack on narrow screens, but that stacking was not measured. Buttons are 44px high with generous padding, and the floating nav pill keeps its rounded shape.

## Iteration Guide

1. Start from `{colors.canvas}` with white `{colors.ink}` text and add a warm glow behind the first screen.
2. Build the 44px pill buttons first: magenta primary and white secondary.
3. Set headlines in Inter 600 at 55px with a gradient fill and keep paragraphs at 18px.
4. Frame product imagery and cards with 24px radii and `{colors.card-glass}`.
5. Check any new value against the live page; use the design-system site only after its token pages can be read.
