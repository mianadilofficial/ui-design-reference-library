---
version: alpha
name: Pluralsight
category: "Design Systems"
description: "Pluralsight's marketing site uses PS TT Commons at weight 400 for 56px headlines with -2px tracking, a deep ink-purple #130f25 for pill buttons and dark bands, warm #f7f5f4 surfaces, white 20px-radius cards with soft shadows, and hot pink (#ff1675, #e7005e) and lime (#cfff6e) accents."
colors:
  canvas: "#ffffff"
  ink: "#555555"
  primary: "#130f25"
  on-primary: "#ffffff"
  surface-warm: "#f7f5f4"
  ink-muted-light: "#bfbfbf"
  ink-black: "#000000"
  ink-secondary: "#45424d"
  accent-pink: "#ff1675"
  pink-action: "#e7005e"
  lime: "#cfff6e"
typography:
  display:
    fontFamily: "\"PS TT Commons Regular\", Helvetica, Roboto, Arial, sans-serif"
    fontSize: 56px
    fontWeight: 400
    lineHeight: 62px
    letterSpacing: "-2px"
  display-mobile:
    fontFamily: "\"PS TT Commons Regular\", Helvetica, Roboto, Arial, sans-serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 54px
    letterSpacing: "-2px"
  heading:
    fontFamily: "\"PS TT Commons Regular\", Helvetica, Roboto, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 26px
  subheading:
    fontFamily: "\"PS TT Commons Regular\", Helvetica, Roboto, Arial, sans-serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 48px
    letterSpacing: "-1px"
  body:
    fontFamily: "\"PS TT Commons Regular\", Helvetica, Roboto, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"PS TT Commons Regular\", Helvetica, Roboto, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  input:
    fontFamily: Arial
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 4px
  sm: 16px
  md: 20px
  pill: 9999px
spacing:
  s2: 4px
  s3: 8px
  s5: 10px
  s6: 12px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 32px
    height: 50px
    borderColor: "{colors.primary}"
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 32px
    borderColor: "{colors.primary}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    height: 20px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.md}"
    padding: 40px 24px
    boxShadow: rgba(0, 0, 0, 0.08) 0px 4px 40px 0px
  footer:
    textColor: "{colors.canvas}"
---

# Pluralsight

## Overview

The captured Pluralsight homepage ("Build team skills in AI, data, cloud, and security") is a calm, light enterprise page with one dark band and a few hot-pink accents. It opens with an announcement bar ("Shift 2026: Don't miss your chance to join us. Secure your spot by Oct 12. Register") and a header: the pink play-button logomark with the Pluralsight wordmark, a wide pill search field ("What do you want to learn?"), a Sign in link, then a menu (Why Pluralsight, Solutions, Learn, Resources, For individuals), an outlined "Contact sales" pill and a pink "View plans" pill.

The hero headline, "Technology is ready. Is your workforce?", is set large and light in `primary` ink-purple (#130f25) on white with a short paragraph, a pink icon line ("Up-skill with hands-on practice") and two pill buttons, "Request a demo" (filled) and "Explore solutions" (outlined). On the right, a dark product screenshot sits under a chat widget; a cookie panel and the chat widget overlapped the capture. A greyscale customer-logo strip follows (Cisco, GE, GSK, Intel, Lockheed Martin, Merck, PepsiCo, Pfizer, Rolex). Then come a lime tag ("What sets Pluralsight apart"), a 40px headline, four text columns, a full-width ink-purple band holding four white cards, and a customer story card with a pink panel. Copy is outcome-led and executive-facing ("Prove teams can perform", "Show business impact"). Images in some columns had not loaded in the capture and show alt text.

## Colors

`primary` #130f25 is a near-black purple used for the main button fill, headlines, and the dark band. `canvas` is #ffffff and `surface-warm` #f7f5f4 is the pale warm-grey band. Text uses `ink` #555555 for most paragraph copy, `ink-black` #000000 in some body blocks, `ink-secondary` #45424d for link text and `ink-muted-light` #bfbfbf for body copy on the dark band. Accents are `accent-pink` #ff1675 (the customer-story panel), `pink-action` #e7005e (measured on the page and set as its `--error-bg-color` variable) and `lime` #cfff6e (the small tag chip).

Pluralsight's design system documentation (https://pando.zeroheight.com/92687036d/p/236779-design-tokens), shown in its default dark colour mode, lists tokens such as `neutral.surface-initial #130f25` and `danger.border #ff1675`, so those two measured page colours also appear as documented token values. Its other values (for example `action.background-initial #4a33d1`, `neutral.surface-100 #1b1834`) are not used on the measured homepage and are not added here.

## Typography

The font is PS TT Commons (loaded as "PS TT Commons Regular" at 400 and 600, with a "PS Commons" family also present). Helvetica, Roboto and Arial follow in the stack. Headlines are light, not bold: `display` 56px/62px at 400 with -2px tracking, `display-mobile` 48px/54px with -2px, `subheading` 40px/48px at 400 with -1px, `heading` 20px/26px at 500 (card titles), `body` 16px/24px at 400 and `button` 16px/24px at 600. Form fields (`input`) fall back to Arial 14px/20px. Material Symbols Rounded supplies icon glyphs at 24px.

The Pando documentation specifies a heavier scale (heading 1 at 40px DemiBold with 110% leading, display sizes 88, 72 and 56px ExtraBold, text styles at Medium weight) and says to align text to the leading edge and to set the gap under a heading at 50% of its font size. The marketing page measured here is lighter than those specifications, so the page values above govern this file.

## Layout

The page is 1280px wide and 5,120px tall at capture. In the hero the text is left-aligned with the screenshot at the right; sections alternate white, warm `surface-warm`, dark `primary`, and white. The nav height variable is 133px and the logo height 40px (both read from the live page's root variables). Common gaps are 4px, 16px, 10px, 8px, 12px, 24px, 40px and 32px; paddings include 24px, 60px, 40px and 100px. Cards have 40px 24px padding.

Pando's grid guidance at the 1280 to 1439px breakpoint is 40px outer margins, 32px between header and content and 24px content padding, with content plus aside capped at 1328px; the tokens here come from the measured page rather than that guidance.

## Elevation & Depth

Elevation is soft and wide. White cards carry `rgba(0, 0, 0, 0.08) 0px 4px 40px 0px`; smaller floating items use `rgba(19, 15, 37, 0.08) 0px 4px 16px 0px`. On the dark band, the white cards read as raised purely by contrast. Elsewhere hierarchy comes from tinted bands (white versus `surface-warm`) and the single dark section. Pando documents elevation through neutral surface steps (`neutral.surface-100`, `-200`, `-300`) in its dark mode, which the marketing page does not use.

## Shapes

The page is pill-and-card. Buttons use a 999px radius (`rounded.pill`), cards 20px (`rounded.md`), medium containers 16px (`rounded.sm`) and small elements 4px (`rounded.xs`); 50% radii also appear on a few elements. Pando's shape page states a different scale: interactive 4, container 8, focus 8, ornamental 2, non-interactive 1, round 9999. Only the 4px and round values overlap with the marketing page.

## Components

**Primary button** (`button-primary`): `primary` fill and 1px border, white 16px/600 label, pill radius, 12px 32px padding, 50px tall ("Request a demo"). **Outline button / link** (`link`): white fill, `primary` text and border, same pill radius and padding ("Explore solutions", "Explore AI Academy →" in cards is a text link). **Header pills**: a pink "View plans" and an outlined "Contact sales", both pill-shaped in the capture. **Card** (`card`): white, 20px radius, 40px 24px padding, `primary` text, a small image and an icon at top, a 20px/500 title, grey body and a bold link with an arrow, with the 0.08 shadow. **Text input** (`text-input`): white background, `ink` text, Arial 14px, 20px tall (a native control); the header search is a large pill. **Footer** (`footer`): white text with 20px/500 column headings ("Support", "Contact", "Help center").

## Design System Architecture

Pluralsight's system is called Pando and is documented at https://pando.zeroheight.com/92687036d/p/498dc1-pando-design-system. That page is titled "Pando Design System", is copyrighted "2025 Pluralsight" and links to a Storybook, a GitHub repository and a Figma "Pando UI-kit (Web)". Its navigation lists Get started, Components, Design tokens, Content strategy, Foundations (accessibility, colour, elevation, grids and spacing, icons, logos, shape, typography, UX good practices) and Legacy PS Design Systems.

"What is Pando v1?" (https://pando.zeroheight.com/92687036d/p/5482a5-what-is-pando-v1) says Pando v1 is Pluralsight's latest design system, built with React and TypeScript, shipping a primary `@pluralsight/react` library with supporting `@pluralsight/panda-preset`, `@pluralsight/icons` and `@pluralsight/design-tokens` packages; earlier versions used `@pluralsight/headless-styles` and Panda CSS. The setup page (https://pando.zeroheight.com/92687036d/p/6450f6-step-2---include-fonts-theme-and-mode) requires preloading the PS TT Commons variable font and setting `data-theme="inkyBlue"` plus a `data-color-mode`. Its colour page defines sentiment palettes (Neutral, Action, Info, Success, Warning, Danger) with prominence levels (initial, inverse, 100, 200, 300).

Limits: the Storybook (https://pando-storybook.pluralsight.com/storybook) redirects to a GitLab single-sign-on page, and the documentation's component examples are images, so I could not measure real Pando buttons or inputs with the extractor; the measurement I ran on the Button page returned only zeroheight's own chrome (DM Sans) and was not used. The marketing homepage itself exposes root variables from a survey widget and a few site variables (`--nav-height`, `--logo-height`, `--error-bg-color`), not Pando tokens.

## Do's and Don'ts

Do set headlines in PS TT Commons at weight 400 with negative tracking, use `primary` for headline text and the main button, and use pill-shaped buttons with 12px 32px padding. Do alternate white, `surface-warm` and one dark band, and place white 20px cards on the dark band. Do keep the pink and lime for small accents.

Don't switch headlines to the heavier Pando heading styles on marketing pages. Don't use the lime or pink as large background fills outside a single story panel. Don't use square-cornered buttons; the shape on this page is pill. Don't add Pando's blue action colours (`#4a33d1` and similar), since they were not measured on the page.

## Responsive Behavior

The page measures a 48px/54px headline at a 390px viewport (`display-mobile`) against 56px/62px on desktop, both with -2px tracking. Pando defines breakpoints XS 320 to 479, S 480 to 767, M 768 to 1023, L 1024 to 1279, XL 1280 to 1439 and XXL 1440 and up, with 24px outer margins up to M, 32px at L and 40px at XL. The root variables show a smaller global nav height on mobile (6.6rem) than on desktop (13.1rem). The capture shows only the desktop layout of the four-column text and card rows.

## Iteration Guide

Start with `canvas` and `primary`, set one `display` headline and one pill `button-primary`. Add `surface-warm` for alternating bands and one `primary` band holding white `card` components with `rounded.md`. Reserve `accent-pink` and `lime` for tags or one story panel. Before adding a component, check Pando's documentation (https://pando.zeroheight.com/92687036d/p/939017-components) but verify values on the live page, because the marketing site differs from Pando's published scales.
