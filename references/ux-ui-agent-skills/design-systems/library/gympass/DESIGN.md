---
version: alpha
name: Gympass (Wellhub)
category: "Design Systems"
description: "Wellhub (Gympass) marketing is warm and consumer-friendly: cream bands #f6eddf and #fbf8ec, near-black ink #1d1d1f, a raspberry #d8385e pill button (9999px radius, 48px tall), NaN Holo Condensed display at 64px for headlines, Inter 500 body, and lifestyle photography."

colors:
  canvas: "#ffffff"
  page-largest: "#f6eddf"
  ink: "#1d1d1f"
  primary: "#d8385e"
  on-primary: "#ffffff"
  surface-sand: "#fbf8ec"
  ink-muted: "#625e59"
  ink-black: "#000000"
  ink-deep-purple: "#1b1340"
  ink-near-black: "#111111"
  input-border: "#a8a094"
  lilac: "#a880ff"
  neon: "#dcff79"
typography:
  display:
    fontFamily: "\"NaN Holo Condensed\", \"NaN Holo Condensed Fallback\", \"NaN Holo Condensed Second Fallback\", sans-serif"
    fontSize: 64px
    fontWeight: 400
    lineHeight: 60.8px
  display-mobile:
    fontFamily: "\"NaN Holo Condensed\", \"NaN Holo Condensed Fallback\", \"NaN Holo Condensed Second Fallback\", sans-serif"
    fontSize: 36px
    fontWeight: 400
    lineHeight: 34.2px
  heading:
    fontFamily: "\"NaN Holo Condensed\", \"NaN Holo Condensed Fallback\", \"NaN Holo Condensed Second Fallback\", sans-serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 52.8px
  subheading:
    fontFamily: "\"NaN Holo Condensed\", \"NaN Holo Condensed Fallback\", \"NaN Holo Condensed Second Fallback\", sans-serif"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 43.2px
  body:
    fontFamily: Inter, "Inter Fallback", sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 22.4px
  nav:
    fontFamily: Inter, "Inter Fallback", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
  link:
    fontFamily: Inter, "Inter Fallback", sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 15.2px
  button-secondary:
    fontFamily: Inter, "Inter Fallback", sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 14px
rounded:
  xs: 8px
  sm: 12px
  md: 16px
  lg: 20px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 12px
  s7: 14px
  s8: 15px
  s9: 16px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.pill}"
    padding: 0px 24px
    height: 48px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 1px 16px
    height: 32px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.surface-sand}"
    textColor: "{colors.ink}"
    padding: 0px 70px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.md}"
    padding: 16px 52px 4px 15px
    height: 52px
    borderColor: "{colors.input-border}"
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    padding: 24px
    borderColor: "{colors.page-largest}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    padding: 80px 0px
---

## Overview

The Wellhub home page (wellhub.com; the design-system package and docs still carry the name Gympass) is a warm employee-benefit marketing page. The capture opens on a full-bleed photograph of a smiling man in a purple hoodie holding a phone toward the viewer, with an outdoor stadium and sky behind him; the headline "The wellness plans employees love to use" is set in a tall, condensed face in white over the left side with a short supporting paragraph and a raspberry pill "Get started". The page then moves onto cream: a band "Loved by employees at:" with a row of partner logos (Regency Centers, Tokio Marine, AAON, Activision Blizzard, Zendesk, Taboola), a sticky in-page anchor row (ROI, Our Network, Wellness Options, Why Wellhub, Testimonials) with a "Contact sales" pill at the far right, a centred section "You're going to love this network" with three portrait video cards, and a two-column "How to offer and enjoy Wellhub" block pairing a team-meeting photograph with copy and an outlined "Learn how it works for companies" pill.

The voice is plain, benefit-led and second-person ("You're going to love this network", "Find your plan"), with social-proof elements everywhere: logos, testimonials, and short phone-camera videos with burnt-in captions. Photography is candid and diverse; the color is carried by cream surfaces and one saturated action color.

## Colors

The page is built from creams, not white. `{colors.page-largest}` (#f6eddf) is the biggest filled area, a sand cream used for alternate bands and cards; `{colors.surface-sand}` (#fbf8ec) is the lighter cream used for the sticky anchor bar and section backgrounds; `{colors.canvas}` (#ffffff) is the white of the top strip. Text is `{colors.ink}` (#1d1d1f) with `{colors.ink-muted}` (#625e59) for secondary copy, `{colors.ink-black}` (#000000) and `{colors.ink-near-black}` (#111111) in smaller amounts, and `{colors.ink-deep-purple}` (#1b1340), a very dark violet used for dark blocks.

The action color is `{colors.primary}` (#d8385e), a raspberry pink-red, always with `{colors.on-primary}` (#ffffff) text. `{colors.lilac}` (#a880ff) and `{colors.neon}` (#dcff79) are measured as accent backgrounds, and a deeper purple is visible on the "Find your plan" button in the capture, but only the lilac hex was measured, so no other purple is declared. Form borders are `{colors.input-border}` (#a8a094), a warm grey. These values match entries in Gympass's published Yoga color tokens: upliftNew #D8385E, sand #FBF8EC, staminaNew #1D1D1F, relaxNew #A880FF, neon #DCFF79.

## Typography

Headlines use **NaN Holo Condensed** (a style of [NaN Holo](https://www.nan.xyz/fonts/nan-holo/), a commercial neo-grotesk from the NaN foundry), loaded with two named fallbacks, at regular weight: the hero is 64px/60.8px (`{typography.display}`), 36px/34.2px on mobile (`{typography.display-mobile}`), section headings 48px/52.8px (`{typography.heading}`) and bold 36px/43.2px sub-headings (`{typography.subheading}`). Body and UI text is **Inter** at 500 weight, 16px/22.4px (`{typography.body}`); navigation is 16px regular (`{typography.nav}`), inline links 16px bold (`{typography.link}`) and small button labels 14px at 500 (`{typography.button-secondary}`). Yoga's token package declares Rubik and Inter as its font families, and the Yoga docs buttons render in Rubik; Wellhub's marketing page uses Inter for UI text. NaN Holo is a commercial font sold by the foundry; no free substitute is verified here, so a generic condensed grotesque is the fallback and the site's own fallback names fill in until the font loads.

## Layout

Sections are full-width bands that alternate between cream tones, with content held in a centred column. The hero is an edge-to-edge photograph with left-aligned text. Three-column layouts (the video cards, the benefits columns) are the main grid; the final section uses a two-column image-and-copy split with rounded image corners. The sticky anchor bar is a single row with a left label "Jump to", underlined text anchors and a right-aligned pill. Measured spacing steps run 1, 2, 4, 6, 8, 12, 14, 15, 16 and 24px, with section padding much larger (the footer pads 80px top and bottom).

## Elevation & Depth

Elevation is subtle and warm. The one shadow measured on the page is a three-layer shadow tinted with the warm grey (rgba 98, 94, 89) at low opacity; which element carries it was not identified. Primary buttons also gain a raspberry glow on hover: the Yoga button page measures a shadow of rgba(216, 56, 94, 0.45) at 0 4px 8px. Most separation comes from alternating cream fills and rounded corners.

## Shapes

Buttons are full pills (`{rounded.pill}`, 9999px). Cards use `{rounded.lg}` (20px), images and containers `{rounded.md}` (16px), smaller components `{rounded.xs}` (8px) and inputs or chips `{rounded.sm}` (12px). Several containers round only their top or bottom corners at 20px, as paired top-only and bottom-only rounded edges. Video cards are tall portrait rectangles with rounded corners.

## Components

**Primary button** (`button-primary`): raspberry fill, white 16px/500 Inter label, pill radius, 48px high, padding 0 24px ("Get started", "Contact sales").

**Compact button** (`button-secondary`): same fill, 14px/500 label, 32px high, padding 1px 16px, used in the header ("Get Wellhub").

**Outline pill**: transparent with a dark 1px border and dark label ("Learn how it works for companies"); in Yoga's Button.Outline it measures a 1px #d8385e border and #d8385e label.

**Text input** (`text-input`): white fill, 16px radius, 52px high, `{colors.input-border}` border, padding 16px 52px 4px 15px.

**Card** (`card`): cream `{colors.page-largest}` fill, 20px radius, 24px padding.

**Navigation** (`nav`): sand background with ink text and 70px side padding, links at 16px.

**Footer** (`footer`): near-black ink background, white text, 80px vertical padding.

## Design System Architecture

Wellhub's design system is **Yoga**, documented at [gympass.github.io/yoga](https://gympass.github.io/yoga/) and open-sourced at [github.com/Gympass/yoga](https://github.com/Gympass/yoga). The README describes it as "Design system at Wellhub", published as `@gympass/yoga` for React and React Native, organised as a monorepo of versioned packages (tokens, icons, illustrations, common, system and doc among them), with all apps wrapped in a `ThemeProvider`. The docs site (v7.144.9 at the time of reading) has Guidelines, Components and System tabs, with token pages for colors, radii and borders, and component pages such as Button with Default, Outline and Text variants.

How well the marketing site follows Yoga: its palette equals Yoga's color tokens (upliftNew #D8385E, sand #FBF8EC, staminaNew #1D1D1F, relaxNew #A880FF, neon #DCFF79), its primary button geometry matches the Yoga Button measurement (pill radius 9999px, 48px and 32px heights, #d8385e fill with white label), and its radius scale overlaps Yoga's radii tokens (0, 4, 8, 16, 9999). It differs in places: the page uses Inter where the Yoga button renders Rubik, and 12px and 20px radii that Yoga's radii page does not list. The site's HTML contains no reference to the `@gympass/yoga` package, so what is established is that values coincide, not that the site imports the library. The marketing page ships Next.js chunks and class names prefixed `sc-`.

## Do's and Don'ts

- Do alternate warm cream bands (#f6eddf, #fbf8ec) instead of white-on-white sections.
- Do use raspberry only for actions and keep labels white on it.
- Do use pill buttons at 48px for page CTAs and 32px in the header.
- Do pair condensed display headlines with Inter body.
- Don't use pure black for large areas; use #1d1d1f and the deep purple #1b1340 for dark blocks.
- Don't use sharp corners on buttons.
- Don't use more than one saturated accent per section.
- Don't use stock-looking imagery; the page relies on candid photography and phone-shot video.

## Responsive Behavior

The display heading drops from 64px/60.8px to 36px/34.2px on a 390px viewport (measured). The anchor bar and header pills are desktop compositions; their narrow-screen behavior was not measured. Yoga's docs navigation lists a Media helper and its token package has a breakpoints file, but their values were not read here, so none are asserted.

## Iteration Guide

1. Start from `{colors.surface-sand}` and `{colors.page-largest}` backgrounds and `{colors.ink}` text.
2. Set headings in `{typography.display}` and body in `{typography.body}`.
3. Make one raspberry pill CTA per band using `button-primary`.
4. Use 20px for cards, 16px for images and inputs, 9999px for buttons.
5. Put people photography before icons; add logos as social proof in a cream band.
6. Check any new color against Yoga's published tokens before adding it.
