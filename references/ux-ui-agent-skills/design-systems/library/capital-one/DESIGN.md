---
version: alpha
name: Capital One
category: "Banking & Insurance"
description: "Capital One (capitalone.com) home page: Optimist at 300/400/600 with Helvetica Neue fallbacks, interactive blue #0276b1, near-black ink #141414, #f4f4f4 and #ffffff surfaces, 40px light headlines, pill and 4px-radius buttons, a sign-in strip above a photographic hero and light illustrations."
colors:
  canvas: "#f4f4f4"
  page-body: "#ffffff"
  ink: "#000000"
  primary: "#0276b1"
  primary-hover: "#026597"
  on-primary: "#ffffff"
  surface-dark: "#3d3d3d"
  ink-heading: "#141414"
  neutral-light: "#d4d4d4"
  ink-muted: "#696969"
  link-blue-dark: "#255f82"
  surface-card: "#fffffff2"
typography:
  display:
    fontFamily: Optimist, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 40px
    fontWeight: 300
    lineHeight: 52px
  heading:
    fontFamily: Optimist, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 32px
    fontWeight: 300
    lineHeight: 41.6px
  body:
    fontFamily: Optimist, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: Optimist, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 21px
  button-large:
    fontFamily: Optimist, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 48px
  link:
    fontFamily: Optimist, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  input:
    fontFamily: Optimist, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
rounded:
  xs: 2px
  sm: 4px
  pill: 9999px
spacing:
  s1: 1px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 12px
  s6: 14px
  s7: 16px
  s8: 20px
  s9: 21px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 24px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button-large}"
    rounded: "{rounded.sm}"
    padding: 0px 16px
    height: 48px
  button-signin:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    rounded: "{rounded.xs}"
    height: 32px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink-heading}"
    height: 65px
  nav-link:
    textColor: "{colors.link-blue-dark}"
    typography: "{typography.body}"
    height: 48px
  text-input:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink-heading}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 5px 8px 5px 32px
    height: 32px
    boxShadow: rgb(105, 105, 105) 0px 0px 0px 1px inset
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink-heading}"
    rounded: "{rounded.sm}"
    padding: 40px
  footer:
    textColor: "{colors.page-body}"
---

## Overview

Capital One's home page (https://www.capitalone.com/, title "Capital One | Credit Cards, Checking, Savings & Auto Loans") is a calm, light banking storefront. It opens with a thin regulatory strip, "FDIC-Insured - Backed by the full faith and credit of the U.S. Government", then a 65px white header with the Capital One wordmark (blue letters with a red swoosh) at left. Directly beneath sits a light-grey sign-in strip in `{colors.canvas}` with "Username" and "Password" fields (each with a leading icon), a "Remember me" checkbox, the links "Forgot username or password?" and "Set up online access", and a blue "Sign in" button. Customers who are already signed up reach their account before they see any marketing.

The hero is a full-width photograph (in the capture, a woman holding a toddler in a greenhouse) with a white card on the left: the eyebrow "360 PERFORMANCE SAVINGS", the 40px light headline "Earn a top rate with no fees", the line "Grow your money for the things that matter most.", and a blue "Start saving" button. Below the hero, a topic bar reads "CHOOSE A TOPIC" with an arrow and three pill options with icons ("Meet Capital One" selected in blue, "Financial wellness", "Built-in benefits"). Three centred tiles follow, each with a flat illustration (credit cards, a piggy bank, a car key): "Find the right card for you", "Bank with confidence" and "Find a car you love", each with a short paragraph and a blue text link with a chevron ("Check My Eligibility", "Explore Banking", "Start Shopping"). Alternating half-width panels come next: a pale blue illustrated panel with a hand tapping a dark card beside a grey text panel ("FIND THE RIGHT CARD" / "More built-in benefits" / "Compare credit cards"), then a grey text panel ("SIMPLIFY YOUR BUSINESS FINANCES" / "Only the best for your business" / "Explore business solutions") beside a photograph of two people working in a shop. The opened page text continues with digital tools, a goals carousel, CreditWise, travel and rewards sections and a footer with the groups Products, Get to Know Us, On the Go, Legal and Support, whose link text is white.

A round announcement button floats at the right edge of the topic bar in the capture; it is a widget, not part of the brand UI, and is excluded here. The voice is plain and benefit-first: sentence-case headlines, uppercase eyebrows, and short imperative links.

## Colors

The page is white and light grey with one interactive blue.

- `{colors.page-body}` #ffffff is the header, card and panel white (the largest area, weight 4038); `{colors.canvas}` #f4f4f4 is the sign-in strip and the text panels (weight 1492).
- `{colors.ink}` #000000 is the body paragraph color (795 characters) and `{colors.ink-heading}` #141414 is the headline and nav color (750 characters).
- `{colors.primary}` #0276b1 is the interactive blue: filled buttons (the "Sign in", "Start saving" and "Meet Capital One" pill), text links such as "Forgot username or password?" (169 characters). `{colors.primary-hover}` #026597 is the measured hover fill of the buttons and the hover color of blue links, which also gain an underline.
- `{colors.link-blue-dark}` #255f82 is the nav link color and the color of a 2px inset ring in the stylesheet (`inset 0 0 0 2px #255f82`, 4 rules); a red ring `inset 0 0 0 2px #cc2427` appears in 6 rules.
- `{colors.ink-muted}` #696969 is the muted text (82 characters) and the 1px input ring color. `{colors.neutral-light}` #d4d4d4 is a light text color (467 characters) and the hover fill of the topic pills.
- `{colors.surface-dark}` #3d3d3d is a dark background area (weight 513; #525252 is another, weight 386); which elements carry them was not isolated. `{colors.surface-card}` #fffffff2 is the hero card (white at 95%).

The topic pills use a soft grey hover tint rather than a blue one,. The stylesheet also publishes semantic color variables in HSL (for example `--gds-color-background-interactive-emphasis-high` hsl(200 100% 33%) and its `-hover` form hsl(200 98% 26%)), which sit beside the measured hex values and are not identical to them.

## Typography

One family is loaded: Optimist, at weights 300, 400 and 600 (all 3041 measured characters). The shipped stack adds "Helvetica Neue", Helvetica, Arial and sans-serif as fallbacks; the stylesheet corpus also declares PremiumSerifVF, which was not measured on a visible character.

- `{typography.display}`: 40px, weight 300, line height 52px; the hero headline.
- `{typography.heading}`: 32px, weight 300, line height 41.6px; tile and panel headlines such as "Find the right card for you" and "More built-in benefits". The mobile h1 uses this same size.
- `{typography.body}`: 16px, weight 400, line height 24px; paragraphs and the nav link style (16px, 1215 characters).
- `{typography.button}`: 14px, weight 600, line height 21px; pill buttons. `{typography.button-large}`: 20px, 400, line height 48px; the "Start saving" button. `{typography.link}`: 12px, 400, line height 18px; small blue links in the sign-in strip. `{typography.input}`: 14px, 400, line height 21px.

Headlines are light (300), not bold: weights by characters are 400 (2461), 300 (281), 600 (247) and 700 (52). A 16px / 0.5px tracked style (28 characters) is used for the uppercase eyebrow labels; its weight and line height were not isolated, so it is not a token. The stylesheet declares a fluid type scale (`--gds-font-size-fluid-28-24` is `clamp(1.5rem, 1.25rem + .6667vw, 1.75rem)`, `--gds-font-size-fluid-24-20` is `clamp(1.25rem, 1rem + .6667vw, 1.5rem)`) next to fixed sizes (`--gds-font-size-small-2` 14px, `-medium-2` 20px, `-large-3` 48px, `-xlarge-1` 64px).

## Layout

The page is a 1280px frame, 4366px tall. Bands run in this order: the FDIC strip, the 65px header, the sign-in strip, the full-width hero, the topic bar, a three-column tile row, and then two-column alternating panels with a text half and an image half; the content column of the lower page is inset from the window edges, so the photographs and illustration panels sit within a margin. Paddings measured are 16px (44 uses), 32px (17), 12px, 24px, 40px, 48px, 14px and 5px, mapped to `{spacing.s7}`, `{spacing.s10}` and nearby steps; gaps are 8px, 24px and 16px. The stylesheet declares a named spacing scale (for example `--gds-spacing-12` 12px, `--gds-spacing-18` 18px, `--gds-spacing-32` 32px, `--gds-spacing-56` 56px and `--gds-spacing-72` 72px) and seven layout-breakpoint variables.

The hero card has 40px padding, and text panels in the lower page use generous inner margins, so density is low and each panel carries one eyebrow, one headline, one paragraph and one link.

## Elevation & Depth

Depth is minimal. One light shadow was measured on three elements, `rgba(0,0,0,0.2) 0 1px 4px 0`, and the text fields use a 1px inset ring in #696969 instead of a drop shadow. The stylesheet declares a larger `0 4px 16px #0003` (7 rules) and ring-style focus shadows. Hierarchy comes from surface changes: white header, grey sign-in strip, photographic hero with a white card on top, light-blue illustrated panel and grey text panels.

## Shapes

Three radii carry the system. Pills (measured 1000px on the "Meet Capital One" button, declared as `{rounded.pill}`) mark the selected topic; 4px (`{rounded.sm}`, 5 elements plus `4px 4px 0 0` on 3) is for the large "Start saving" button, cards and panels; and 2px (`{rounded.xs}`, 3 elements) is for the sign-in fields and the small "Sign in" button. The stylesheet declares `--gds-corner-radius-small` 4px, `-medium` 6px, `-x-large` 12px and `-none` 0px, and `--gds-button-corner-radius-small` 4px. Illustrations are flat vector with soft rounded shapes; photographs are rectangular.

## Components

- Pill button (`{components.button-primary}`): `{colors.primary}` fill, white 14px/600 label, 48px high, padding 12px 24px; on the home page this is the selected topic. Mobile makes it a 342px-wide pill.
- Rectangular button (`{components.button-secondary}`): same blue fill, white 20px label, 48px high, padding 0 16px, 4px radius; the hero "Start saving".
- Small sign-in button (`{components.button-signin}`): blue, 32px high, 2px radius.
- Text links: 12px blue links in the sign-in strip, 16px blue links with a trailing chevron under each tile; hover shifts to `{colors.primary-hover}` with an underline.
- Topic pills: icon plus label, unselected pills transparent with a `{colors.neutral-light}` hover fill.
- Text input (`{components.text-input}`): white, 32px high, 2px radius, a leading 32px inset for the icon, a 1px inset ring in #696969, 14px text.
- Hero card (`{components.card}`): `{colors.surface-card}` fill, 4px radius, 40px padding, eyebrow, headline, line of copy and button.
- Nav: a 65px white bar with 16px links in `{colors.link-blue-dark}` (items 48px high): "Credit Cards", "Checking & Savings", "Auto", "Business", "Commercial", "Benefits & Tools".
- Footer: white link text in groups; the fill behind it was not measured.

## Design System Architecture

No public or official Capital One brand guideline or press kit was found; the home page links none (it links the Newsroom at https://www.capitalone.com/about/newsroom/ and Technology at https://www.capitalone.com/tech/, which are not design references), and the guessed address https://design.capitalone.com/ did not resolve. The shipped CSS exposes an internal design system through its variables: 392 custom properties prefixed `--gds-`, in groups for color (text-and-icon, background, border and brand colors in HSL), chart colors (104 variables), font size, font weight (`--gds-font-weight-light` 300, `-regular` 400), letter spacing, line height, spacing and margin and padding, corner radius, layout breakpoints and maximum widths, animation easing, and component families (button, checkbox, radio, toggle, circular loading indicator, inline alert, search bar, avatar). Interactive states are tokenised as `-hover` and `-press` suffixes. The measured hex values in the frontmatter are the computed results of that variable layer.

## Do's and Don'ts

- Do keep headlines light (weight 300) and sentence-case; use uppercase only for small eyebrow labels.
- Do use `{colors.primary}` for every action and link, and `{colors.primary-hover}` for hover.
- Do separate sections by surface (white, light grey, pale illustrated panel), not by borders or shadows.
- Do use pills for topic selection and 4px or 2px corners for form-like buttons.
- Don't add a second brand hue to UI chrome; red appears in the logo and in one stylesheet ring.
- Don't put drop shadows on cards; the only measured shadow is `0 1px 4px` at 20% black.
- Don't bold headings; the weight 700 text (52 characters) is rare.
- Don't treat the floating announcement button as a component.

## Responsive Behavior

Measured at the 390px mobile pass. The h1 and h2 are `{typography.heading}` (32px, 300, line height 41.6px, 294px wide), body text 16px/400 with 24px line height (342px wide), and the primary pill is 342px wide and 48px high with 12px 24px padding and a 1000px radius, so it spans the content width. The mobile nav is 64px high and 390px wide on `{colors.page-body}`. Mobile character-weighted sizes are 16px (1251), 12px (738), 24px (200), 32px (133), 14px (81), 20px (12) and 18px (9). Layout bands, column counts, the tile and carousel layout and the menu at mobile width are not measured.

## Iteration Guide

1. Put the sign-in strip on `{colors.canvas}` under a white header, then a photographic hero with a `{components.card}` on the left.
2. Set the hero headline in `{typography.display}`, tile headlines in `{typography.heading}` and copy in `{typography.body}`.
3. Make one blue action per area with `{components.button-primary}` or `{components.button-secondary}`; add the hover fill from `{colors.primary-hover}`.
4. Alternate half-width illustration and text panels in `{colors.canvas}` and pale blue.
5. Use flat vector illustrations with rounded forms for product tiles.
6. Re-measure the footer fill and the 16px / 0.5px eyebrow style before adding tokens for them.
