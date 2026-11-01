---
version: alpha
name: "Google DeepMind"
category: "AI"
description: "Google DeepMind home page measured live: near-black #121317 canvas, off-white #f8f9fc pill primary button, Google Sans Flex from 98px display down to 17.5px body, 24px card radius and 9999px pill controls, with color supplied by imagery rather than UI chrome."
colors:
  canvas: "#121317"
  page-largest: "#18191d"
  ink: "#b2bbc5"
  primary: "#f8f9fc"
  on-primary: "#121317"
  surface-raised: "#2f3034"
  ink-alpha: "#ffffffb8"
  ink-white: "#ffffff"
  ink-dark-alpha: "#121317b8"
  hairline: "#e6eaf00f"
  link-bg: "#1213172e"
typography:
  display:
    fontFamily: "\"Google Sans Flex\", Arial, Helvetica, sans-serif"
    fontSize: 98px
    fontWeight: 500
    lineHeight: 96.04px
    letterSpacing: "-2.66756px"
  display-mobile:
    fontFamily: "\"Google Sans Flex\", Arial, Helvetica, sans-serif"
    fontSize: 34px
    fontWeight: 500
    lineHeight: 36.04px
    letterSpacing: "-0.32096px"
  heading:
    fontFamily: "\"Google Sans Flex\", Arial, Helvetica, sans-serif"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 33.92px
    letterSpacing: "-0.544px"
  subheading:
    fontFamily: "\"Google Sans Flex\", Arial, Helvetica, sans-serif"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 29px
    letterSpacing: "-0.0888px"
  body:
    fontFamily: "\"Google Sans Flex\", Arial, Helvetica, sans-serif"
    fontSize: 17.5px
    fontWeight: 400
    lineHeight: 25.375px
    letterSpacing: 0.2079px
  button:
    fontFamily: "\"Google Sans Flex\", Arial, Helvetica, sans-serif"
    fontSize: 17.5px
    fontWeight: 450
    lineHeight: 24px
    letterSpacing: 0.2079px
  link:
    fontFamily: "\"Google Sans Flex\", Arial, Helvetica, sans-serif"
    fontSize: 14.5px
    fontWeight: 450
    lineHeight: 18.125px
    letterSpacing: 0.2079px
rounded:
  xs: 4px
  sm: 8px
  md: 16px
  lg: 24px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 24px
  s7: 36px
  s8: 48px
  s9: 64px
  s10: 72px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 24px
    height: 48px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-white}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
    padding: 8px 16px
    height: 34px
  link:
    backgroundColor: "{colors.link-bg}"
    textColor: "{colors.primary}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
    padding: 8px 16px 8px 12px
    boxShadow: rgba(230, 234, 240, 0.12) 0px 0px 0px 1px
  nav:
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  text-input:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.pill}"
    padding: 4px 4px 4px 24px
    height: 44px
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.primary}"
    rounded: "{rounded.lg}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    padding: 72px 72px 0px
---

# Google DeepMind

## Overview

The deepmind.google home page is a dark, product-led showcase. A full-width blue-to-black atmospheric hero ("Our next era of frontier intelligence" over the model name "Gemini 4 Argon") sits on a near-black canvas, followed by a horizontally scrolling row of large rounded cards (Gemini Audio, DeepMind Institute, AlphaGenome), a "Latest news" list with thumbnails, and further sections on models, research and science. The extracted page height is 6668px at a 1280px viewport.

The aesthetic is soft and rounded on a dark ground: pill-shaped buttons, 24px card corners, a single typeface (Google Sans Flex) at light-to-medium weights, and imagery that is abstract 3D, glowing gradients and scientific renders such as a DNA helix. Text is quiet and confident: the fetched page lists the nav as Models, Research, Science, About, with header actions "Build with Gemini" and "Try Gemini", and section headings such as "Explore our next generation AI systems" and "Our mission is to build AI responsibly to benefit humanity". The research fetch of the home page found no brand-guideline, design-system or press-kit link.

One card in the carousel (DeepMind Institute) is light (#f8f9fc fill with black text and a blueprint-style line drawing) among otherwise dark cards, which is the only measured light surface of any size.

Headlines in the news list are written as product announcements with a version number or a plain noun phrase ("Introducing SynthID Bio", "Introducing Gemini 3.8 Live with Live Avatar", "EmbeddingGemma 2: an open, lightweight multimodal embedding model"), each followed by a small metadata line of month, category tag and a "Learn more" chevron link. Card descriptions are a single short sentence ("Using AI to understand the human genome"). This restraint, with generous empty dark space between sections, is what makes the page feel calm despite the vivid imagery.

## Colors

- `canvas` #121317 is the page background (a blue-tinted near-black); `page-largest` #18191d is the largest single background area and the card/input fill; `surface-3` #2f3034 is a raised grey used on controls and card edges.
- `ink` #b2bbc5 is the most-read text color (secondary copy, blue-grey). `primary` #f8f9fc is the off-white used for headings, navigation text and the filled primary button. `ink-3` #ffffffb8 is a 72%-alpha white; `ink-5` #ffffff is pure white used on secondary button labels. `ink-6` #121317b8 is alpha dark ink used on light cards.
- `on-primary` #121317 is the dark text on the off-white button.
- `hairline` #e6eaf00f is a 6%-alpha border; `link-bg` #1213172e is the translucent fill of link pills. The pill outlines use the shadow `rgba(230, 234, 240, 0.12) 0px 0px 0px 1px` rather than a border.

The site's root custom properties publish an extended palette that includes `--ai-brand-blue` #3186ff, `--green-900` #00694e, `--pink-600` #ff4ebd, `--purple-200` #969dff and `--grey-650` #4e4f56, plus data-visualization tokens such as `--theme-datavis-data-yellow-on-low-emphasis` #fcffad. These are declared in the CSS but are not used for the home page UI chrome; the chromatic color on the page comes from imagery.

## Typography

One family: Google Sans Flex (variable, weight axis 1 to 1000), with Arial and Helvetica fallbacks. Weights in use are 400, 450 and 500 (450 is used for buttons and links).

- `display` 98px, weight 500, line height 96.04px, letter-spacing -2.66756px (hero model name). `display-mobile` 34px, line height 36.04px, letter-spacing -0.32096px.
- `heading` 32px, weight 500, line height 33.92px, letter-spacing -0.544px ("Latest news" and card-section titles).
- `subheading` 20px, weight 500, line height 29px, letter-spacing -0.0888px (card titles).
- `body` 17.5px, weight 400, line height 25.375px, letter-spacing 0.2079px.
- `button` 17.5px, weight 450, line height 24px; `link` 14.5px, weight 450, line height 18.125px, both with letter-spacing 0.2079px.

Tracking tightens as size grows (large negative at 98px) and turns slightly positive at body sizes. Google Sans Flex is Google's own face; for a substitute choose a geometric-humanist sans with a variable weight axis.

## Layout

The page uses a wide container with 72px side padding in the footer (`footer` padding 72px 72px 0px). The spacing scale is 1, 4, 8, 12, 16, 24, 36, 48, 64 and 72px; the root also declares `--space-7` as 2.5rem, `--spacer-block-lg` as 11.25rem and `--width-max-width-third` as 400px, and `--width-section-title-description-short` as 400px. The carousel shows three cards with the next partially visible, with previous/next controls below in the same pill style. The news section is a two-column list: one large featured story on the left with a big square image, and a stack of text-plus-thumbnail rows on the right, each with a date, a category and a "Learn more" link.

## Elevation & Depth

Depth is created by tone, not by drop shadows. The measured shadow list contains only the 1px ring `rgba(230, 234, 240, 0.12) 0px 0px 0px 1px` used on pill links. Layers are `canvas` (#121317), `page-largest` (#18191d) and `surface-3` (#2f3034); light cards invert this. The hero uses a blurred blue gradient image that fades into `canvas`.

## Shapes

The radius scale is `xs` 4px, `sm` 8px, `md` 16px, `lg` 24px and `pill` 9999px. Buttons, link chips, the search-style input and carousel controls are pills; cards use 24px; small thumbnails use 8px or 16px; 4px is the most frequent measured radius by count (small controls and tags). One 50% radius (circle) was recorded.

## Components

- **button-primary**: fill `primary` (#f8f9fc), text #121317, 17.5px/450, padding 12px 24px, height 48px, pill radius ("Read blog").
- **button-secondary**: fill `canvas`, label `ink-5` (#ffffff), 14.5px/450, padding 8px 16px, height 34px, pill radius ("Build with Gemini", "View news").
- **link**: translucent fill `link-bg`, text `primary`, 14.5px/450, padding 8px 16px 8px 12px, pill radius, 1px ring shadow.
- **text-input**: fill `page-largest`, text `ink`, body type, padding 4px 4px 4px 24px, height 44px, pill radius.
- **card**: fill `page-largest`, text `primary`, radius 24px; carousel cards hold a title, a one-line description, a graphic and one or two pill buttons ("Learn more", "Try").
- **nav / nav-link**: text in `primary` over the hero, body type.
- **footer**: fill `canvas`, text `primary`, padding 72px 72px 0px.

## Design System Architecture

No public design-system or brand-guidelines page was found: the home page footer links to Google AI, Google Labs, Google Research, Responsibility, Careers, Privacy and Terms only. The shipped CSS, however, exposes a large token layer: the root element declares roughly four hundred custom properties covering color ramps (`--green-900`, `--pink-600`, `--purple-200`, `--grey-650`), semantic themes (`--theme-button-states-tonal-hovered`, `--theme-button-states-outlined-disabled`, `--theme-outline-outline-variant`, `--theme-datavis-*`), spacing (`--space-7`, `--spacer-block-lg`), widths, letter-spacing tokens by size (`--letter-spacing-9xl`: -0.02312em) and an icon font fill (`--icon-font-fill`: Google Symbols). Buttons are described as tonal, outlined and filled states, which matches the measured primary (filled), secondary (outlined) and link (tonal) controls.

## Do's and Don'ts

Do:
- Keep the canvas near-black and let gradients and 3D imagery carry color.
- Use pill buttons and 24px cards; keep 4px for tiny tags only.
- Tighten letter-spacing on large headlines and open it slightly on body.
- Use one filled off-white button per section.

Don't:
- Use saturated brand colors for UI chrome; they appear only in imagery and data-visualization tokens.
- Add heavy drop shadows; use the 1px translucent ring.
- Mix in a second typeface.

## Responsive Behavior

Measured at the mobile viewport: the h1 becomes 34px with line height 36.04px and letter-spacing -0.32096px, and body text stays at 17.5px. Other mobile behavior (carousel card count, navigation collapse, column changes) was not measured.

## Iteration Guide

1. Begin on `canvas`; place content on `page-largest` cards with 24px radius.
2. Set headings in Google Sans Flex 500 with the listed tracking.
3. Add one `button-primary` pill and outlined `button-secondary` pills for secondary actions.
4. Use imagery for color; keep UI neutral.
5. Verify all interactive shapes are pills and all separations are tonal or 1px ring.
