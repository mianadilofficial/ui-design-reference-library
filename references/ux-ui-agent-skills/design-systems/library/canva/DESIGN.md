---
version: alpha
name: Canva
category: "Product & SaaS"
description: "Canva (canva.com) marketing home page: Canva Sans at 400/500/600 with -0.01em tracking on large type, brand purple #8b3dff, near-black ink #0f1015, a white page under a purple-to-aqua gradient hero, 12px-radius buttons with layered inset shadows and 9999px-radius tab pills."
colors:
  canvas: "#ffffff"
  ink: "#0f1015"
  primary: "#8b3dff"
  on-primary: "#ffffff"
  ink-soft: "#0f1015d9"
  ink-muted: "#101219b2"
  glass-white: "#ffffffe5"
  nav-hover-bg: "#a370fc33"
  tab-hover-bg: "#404f6d0f"
typography:
  display:
    fontFamily: "\"Canva Sans\", \"IBM Plex Sans Arabic\", \"Noto Sans Variable\", \"Noto Sans\", Helvetica, Arial, sans-serif"
    fontSize: 64px
    fontWeight: 400
    lineHeight: 70.4px
    letterSpacing: "-0.64px"
  display-mobile:
    fontFamily: "\"Canva Sans\", \"IBM Plex Sans Arabic\", \"Noto Sans Variable\", \"Noto Sans\", Helvetica, Arial, sans-serif"
    fontSize: 45px
    fontWeight: 400
    lineHeight: 49.5px
    letterSpacing: "-0.45px"
  heading:
    fontFamily: "\"Canva Sans\", \"IBM Plex Sans Arabic\", \"Noto Sans Variable\", \"Noto Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Helvetica, Arial, sans-serif"
    fontSize: 56px
    fontWeight: 400
    lineHeight: 61.6px
    letterSpacing: "-0.56px"
  heading-mobile:
    fontFamily: "\"Canva Sans\", \"IBM Plex Sans Arabic\", \"Noto Sans Variable\", \"Noto Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Helvetica, Arial, sans-serif"
    fontSize: 36px
    fontWeight: 400
    lineHeight: 43.2px
  subheading:
    fontFamily: "\"Canva Sans\", \"IBM Plex Sans Arabic\", \"Noto Sans Variable\", \"Noto Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Helvetica, Arial, sans-serif"
    fontSize: 28px
    fontWeight: 500
    lineHeight: 35px
    letterSpacing: "-0.28px"
  body:
    fontFamily: "\"Canva Sans\", \"IBM Plex Sans Arabic\", \"Noto Sans Variable\", \"Noto Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.2px
  body-mobile:
    fontFamily: "\"Canva Sans\", \"IBM Plex Sans Arabic\", \"Noto Sans Variable\", \"Noto Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
  button:
    fontFamily: "\"Canva Sans\", \"IBM Plex Sans Arabic\", \"Noto Sans Variable\", \"Noto Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 22px
rounded:
  xs: 8px
  sm: 10px
  md: 12px
  lg: 24px
  pill: 9999px
spacing:
  s1: 4px
  s2: 7px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 32px
  s9: 48px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 16px
    height: 40px
    boxShadow: >-
      rgba(255, 255, 255, 0.16) 0px 24px 24px -18px inset, rgba(255, 255, 255, 0.25) 0px 1px 0.5px 0px inset, rgba(21, 30, 130, 0.12) 0px -1px 0.5px 0px inset, rgba(21, 30, 130, 0.07) 0px 1px 2px 0px,
      rgba(21, 30, 130, 0.03) 0px 3px 4px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px inset
  button-secondary:
    backgroundColor: "{colors.glass-white}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 20px
    height: 40px
    boxShadow: >-
      rgba(255, 255, 255, 0.08) 0px 24px 24px -18px inset, rgba(255, 255, 255, 0.25) 0px 1px 0.5px 0px inset, rgba(0, 0, 0, 0.25) 0px -1px 0.5px 0px inset, rgba(0, 0, 0, 0.14) 0px 1px 2px 0px, rgba(0,
      0, 0, 0.07) 0px 3px 4px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px inset
  button-compact:
    backgroundColor: "{colors.glass-white}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    height: 32px
  button-card:
    backgroundColor: "{colors.glass-white}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    height: 40px
  nav-pill-hover:
    backgroundColor: "{colors.nav-hover-bg}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.md}"
    height: 32px
  tab-pill:
    textColor: "{colors.ink}"
    rounded: "{rounded.pill}"
    height: 64px
  tab-pill-hover:
    backgroundColor: "{colors.tab-hover-bg}"
  footer:
    textColor: "{colors.ink-soft}"
    padding: 48px 0px 0px
---

## Overview

Canva's home page (https://www.canva.com, title "Canva: Visual Suite for Everyone") is a product showcase built on one idea: the page is a canvas with objects floating on it. It opens with a full-width purple-to-aqua gradient hero. A translucent bar carries the script "Canva" wordmark at left, six labels ("Design", "Product", "Plans", "Business", "Education", "Help") in the centre, and "Sign up" and "Log in" at the right. The h1 is a single line in white, "What will you design today?", with a subline, "Make AI-powered social posts, videos, presentations, and more with Canva.", and one white button, "Start designing". Under the subline, a loose scatter of glossy 3D-style stickers (a letter T tile, a portrait, a heart with sparkle, a colour wheel, a sticky note, a "C" badge, a checkerboard beach ball, a code tag) floats over the gradient before it fades to white.

The white body continues with the h2 "Tools to power your best work", a floating pill-shaped tab bar ("AI", "Presentations", "Social", "Video", "Print Shop", each with a colourful icon; "Social" is selected and drawn as a blue-purple gradient pill), and a grid of large rounded cards: a red-to-pink card "Effortlessly create your next video with trending templates" with a phone mockup and a carousel, a pale pink card "Remove image and video backgrounds in one click" with a photograph of two smiling men, "Sharpen any photo with Image Upscaler" and "Resize designs instantly for any channel". Each card holds a white "Explore ..." button. Lower sections, from the opened page text and the capture, include "All the tools. All in one place." and a footer headed "Download Canva for free" with Windows and Mac links. The voice is friendly, imperative and product-led: short sentences, "your" and "you", feature names capitalised (Magic Resize, Background Remover, Image Upscaler).

## Colors

The page is white (`{colors.canvas}` #ffffff) with near-black text (`{colors.ink}` #0f1015) and one saturated accent.

- `{colors.primary}` #8b3dff is the brand purple. It is the fill of the "Start designing for free" button (189px by 40px) and the value of more than a dozen of the 307 root CSS variables. The root variables also declare deeper purples (#612dae, #7630d7, #4a2e7e, #352459), a blue (#3d8bff and #1a62ff), a red (#db142c) and a green (#008009); their roles were not measured on screen.
- `{colors.ink}` #0f1015 is the main text color (3079 characters) and a large dark background area (weight 4088) that the capture's visible top does not show.
- `{colors.ink-soft}` #0f1015d9 (85% ink) colors body paragraphs and the footer; `{colors.ink-muted}` #101219b2 (70%) is a secondary text color.
- `{colors.glass-white}` #ffffffe5 (90% white) is the fill of secondary buttons and the text color on dark fills; on hover the button fills become solid #ffffff.
- `{colors.nav-hover-bg}` #a370fc33 is the pill behind a header label on hover; `{colors.tab-hover-bg}` #404f6d0f is the faint hover tint of a tab pill.

The gradients in the hero, the red-to-pink card and the selected tab are not in the measured background table, so their stops are not recorded; describe them but do not invent hex values. Card fields in the capture are pale pink and red; those are also not in the measured table.

## Typography

One family carries everything: Canva Sans, loaded as a variable face from weight 400 to 700 (the only loaded font). Its fallback stack, as shipped, is "IBM Plex Sans Arabic", "Noto Sans Variable", "Noto Sans", then (on body styles) -apple-system, system-ui, "Segoe UI", Helvetica, Arial and sans-serif. The Canva developer guidelines (https://www.canva.dev/docs/apps/design-guidelines/typography.md) describe two product typefaces, Canva Sans Display for medium and large titles and Canva Sans for small titles and body text; the home page loads only Canva Sans, at weights 400, 500 and 600 by the measured character counts (600: 1666, 400: 1426, 500: 1202).

- `{typography.display}`: 64px, 400, line height 70.4px, letter spacing -0.64px; the white h1.
- `{typography.heading}`: 56px, 400, line height 61.6px, letter spacing -0.56px; section titles such as "Tools to power your best work".
- `{typography.subheading}`: 28px, 500, line height 35px, letter spacing -0.28px; card titles (1087 characters, the second most-used size).
- `{typography.body}`: 18px, 400, line height 25.2px; the hero subline and feature paragraphs. `{typography.button}`: 14px, 600, line height 22px, the most-used size (1804 characters), for every button and tab label.

Large type is tracked at -0.01em: -0.64px at 64px, -0.56px at 56px, -0.36px at 36px and -0.28px at 28px. Display weights are light (400) at 56-64px and medium (500) at 28px; there is no bold display. A 16px/500 style (line height 22.4px) is used in the footer.

## Layout

The page is a 1280px frame with a scroll height of 7677px. The hero is a centred column: h1, subline, button, then the sticker field. Below it the grid uses a two-up row of one wide card and one narrow card, followed by a row of two cards of different widths; the whole grid spans nearly the full width with a consistent gutter. Measured gaps are 4px (16 uses), 24px (15), 12px (14), 8px, 16px and 32px; paddings are 4px, 12px, 32px, 16px, 24px, 8px and 48px (mapped to `{spacing.s1}` through `{spacing.s9}`). The footer is 1420px high with 48px top padding and starts its columns with "Download Canva for free", "Windows" and "Mac", then "Product", "Latest" and more link groups.

Density is moderate: large headings with generous white space around them, cards with one headline and one button, and illustration doing the persuasion.

## Elevation & Depth

Raised elements carry layered shadows. Buttons use a stack of five visible layers (plus a transparent sixth): an inset white highlight at the top (`rgba(255,255,255,0.08)` or `0.16` at `0 24px 24px -18px`), a 1px inner top light (`rgba(255,255,255,0.25) 0 1px 0.5px inset`), a 1px inner bottom edge (`rgba(0,0,0,0.25) 0 -1px 0.5px inset` on white buttons, `rgba(21,30,130,0.12)` on the purple button), and two soft drops (`0 1px 2px` and `0 3px 4px`). These appear on 15 elements each. A third shadow, `rgba(64,79,109,0.07) 0 0 0 0.5px, rgba(21,30,130,0.12) 0 2px 5px, rgba(21,30,130,0.06) 0 6px 12px`, was measured on 6 elements, and inset 1px rings (`rgba(53,65,90,0.2)` and `rgba(255,255,255,0.2)`) on 4. In the capture the tab bar floats on a soft shadow above the white body. Gradients and illustration provide the rest of the depth.

## Shapes

Radii are generous and graded by element size: 12px is the working corner (130 elements: buttons, nav pills and the "Explore" buttons), 24px (26 elements) is the large-card corner, 10px (12) is the compact button, 8px (1) is the secondary "Start designing" button, and 9999px (9) plus 50% (3) are pills and circles; the tab pills measure 9999px, and round carousel arrows are visible in the capture. In the capture the feature cards have the largest corners on the page, and the sticker objects are rounded tiles and discs.

## Components

- Primary button ("Start designing for free"): `{colors.primary}` fill, white 14px/600 label, 40px high, padding 0 16px, 12px radius, layered shadow stack.
- Secondary button ("Start designing", "Get started for free"): `{colors.glass-white}` fill, `{colors.ink}` label, 40px high, padding 0 20px, 8px radius on the hero button and 12px on the "Explore ..." buttons inside cards.
- Compact button ("Log in"): same glass fill, 32px high, 10px radius. "Sign up" is a transparent button with white text and a faint white hover tint (`rgba(255,255,255,0.07)`).
- Header labels: white text; on hover a 12px-radius, 32px-high pill fills with `{colors.nav-hover-bg}`.
- Tab bar: a 64px-high pill group; each tab is 9999px radius, hover tint `{colors.tab-hover-bg}`; the selected tab has white text on a gradient.
- Cards: large rounded fields with an h3 at 28px/500, one "Explore ..." button, and a photograph, mockup or carousel in the lower half. Carousel controls are round white buttons with an outlined chevron.
- Footer: ink-soft text on white, 48px top padding.

## Design System Architecture

Canva documents its in-editor app design system at https://www.canva.dev/docs/apps/design-guidelines/ and https://www.canva.dev/docs/apps/app-ui-kit/colors/, which publish token groups and names (for example Actions: Primary, Secondary, Tertiary; Feedback: Positive, Info, Warn, Critical; Surface backgrounds; `colorPrimary` with `colorPrimaryFore`) but no hex values on the pages that were opened. Those guidelines cover Canva apps, not the marketing home page. The shipped marketing CSS exposes 307 root variables with generated names (for example `--RzZG4Q`, `--x1660u1e`, `--gFgXSg`) that hold colors, font weights (400, 600) and em or px values, and many hold the purple #8b3dff or the ink #0f1015; `--gFgXSg` equals the tab hover tint #404f6d0f. The font stack and the shadow stack above are the stable pieces to reuse.

## Do's and Don'ts

- Do keep the page white and let illustration and the one purple carry the color.
- Do set large headings at weight 400 with -0.01em tracking; use 500 for card titles and 600 for buttons.
- Do give every raised button the layered inset-plus-drop shadow.
- Do use 12px radius as the default, 24px for large cards and 9999px for tabs.
- Don't set display type in bold; the measured display weights are 400 and 500.
- Don't invent gradient stops; only the hex values listed here were measured.
- Don't treat the hidden skip link (purple text, 1px wide) as a link style.
- Don't use Times or the browser default; the measured `Times` 10px role is the unstyled document body, not a brand style.

## Responsive Behavior

Measured at the 390px mobile pass only. The h1 is `{typography.display-mobile}` (45px, 400, line height 49.5px, -0.45px), the h2 is `{typography.heading-mobile}` (36px, 400, line height 43.2px), body text is `{typography.body-mobile}` (14px, line height 19.6px, 310px wide) and the primary button is unchanged at 189px by 40px, 12px radius, padding 0 16px. The mobile header text contains only "Canva home" and "Log in". Mobile character-weighted sizes are 14px (1067), 24px (426), 36px (153), 16px (61), 10px (59), 18px (46), 12px (36) and 45px (27). Card layout, tab bar behavior and the footer at mobile width are not measured.

## Iteration Guide

1. Build a white page and a gradient hero; set the h1 in `{typography.display}` in white.
2. Use `{components.button-primary}` for the one purple action and `{components.button-secondary}` on gradient or colored fields.
3. Make a floating `{components.tab-pill}` bar and cards with 24px corners.
4. Keep tracking at -0.01em above 28px and weights 400/500/600 only.
5. Add the layered shadow stack to every button; add hover tints only from the measured values.
6. Re-measure the dark sections (ink fill) before declaring dark-section tokens.
