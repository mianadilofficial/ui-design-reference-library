---
version: alpha
name: Micro
category: "Tech & AI"
description: "Micro (micro.so) home page measured: warm off-white #f5f5f5 canvas, near-black warm ink #221f1c, haffer sans at 72px weight 900 mixed with a perfectlyNineties serif accent, 10px-radius dark Sign up button with an inset bottom edge, #fafafa cards at 14px radius with soft layered shadows."
colors:
  canvas: "#f5f5f5"
  ink: "#221f1c"
  primary: "#221f1c"
  on-primary: "#f5f5f5"
  surface-2: "#fafafa"
  surface-3: "#00bcff"
  ink-secondary: "#797267"
  ink-3: "#0000001a"
  ink-4: "#ffffff"
  ink-5: "#ffffffcc"
  ink-6: "#e4e4e4"
  hairline: "#ffffff24"
  nav-text: "#2c2925bf"
  text-input-border: "#00000014"
typography:
  display:
    fontFamily: haffer, "haffer Fallback"
    fontSize: 72px
    fontWeight: 900
    lineHeight: 68.4px
  display-mobile:
    fontFamily: haffer, "haffer Fallback"
    fontSize: 36px
    fontWeight: 900
    lineHeight: 34.2px
  heading:
    fontFamily: haffer, "haffer Fallback"
    fontSize: 28px
    fontWeight: 700
    lineHeight: 35px
  subheading:
    fontFamily: haffer, "haffer Fallback"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 28px
  body:
    fontFamily: haffer, "haffer Fallback"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.25px
  button:
    fontFamily: haffer, "haffer Fallback"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  nav:
    fontFamily: haffer, "haffer Fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  input:
    fontFamily: haffer, "haffer Fallback"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
rounded:
  xs: 1px
  sm: 2px
  md: 3px
  lg: 4px
  xl: 6px
  2xl: 8px
  3xl: 10px
  4xl: 14px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 0px 24px
    height: 44px
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.2) 0px -2px 0px 0px inset
  link:
    textColor: "{colors.ink-secondary}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 8px 12px
  nav:
    textColor: "{colors.nav-text}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.3xl}"
    padding: 4px 28px 4px 10px
    height: 38px
    borderColor: "{colors.text-input-border}"
    boxShadow: >-
      rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.1) 0px
      1px 2px -1px
  card:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.ink}"
    rounded: "{rounded.4xl}"
    padding: 20px
    boxShadow: >-
      rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, oklab(0.241527 0.00279061 0.00670661 / 0.065) 0px 0px 0px 1px, oklab(0 0 0 / 0.05) 0px 4px
      6px -1px, oklab(0 0 0 / 0.05) 0px 2px 4px -2px
  footer:
    textColor: "{colors.ink-secondary}"
    padding: 96px 0px
---

# Micro

## Overview

This file documents the home page measured at `https://www.micro.so/`, titled "Micro — One place for email, CRM, meetings, tasks, and AI". Micro presents itself as an agent plus an "everything app": the hero headline reads "An agent to do your work & An everything app to manage it", with a "Sign up" button and a "Request a Demo" button beneath a one-paragraph description of connecting email, messages, calendar, CRM, docs and tasks. A large product screenshot follows (sidebar, "How can I help, Sarah?" prompt, suggested actions and a Threads list), then a row of company logos (Google, Meta, OpenAI, Anthropic, Dropbox) under the line "Built, supported and used by people at top startups, enterprises, and investment funds.", a second statement headline "Meet your most capable & intelligent assistant", and an "Available via" row (Web, Mac, iPhone, iMessage, Slack).

The identity is warm minimalism. The canvas `{colors.canvas}` #f5f5f5 and the card color `{colors.surface-2}` #fafafa are off-whites, the ink `{colors.ink}` #221f1c is a warm near-black, and the secondary text `{colors.ink-secondary}` #797267 is a warm grey. Headlines pair a heavy grotesque with a light-weight, tightly set serif for the second half of each phrase, which is how the hero is split into a black clause and a grey clause. A round black mascot with large eyes appears twice, sitting on the product window edge and inside the second headline. The tone of copy is first person and plain ("How can I help, Sarah?", "Ask or do anything").

## Colors

- `{colors.canvas}` #f5f5f5: page background (area weight 21,079).
- `{colors.surface-2}` #fafafa: cards, the input and the product window (6,127). It is also the root variable `--card`.
- `{colors.surface-3}` #00bcff: a saturated cyan measured as a background (2,657). The extraction did not attach it to a named component.
- `{colors.ink}` #221f1c: primary text (6,574 characters) and, as `{colors.primary}`, the Sign up button fill.
- `{colors.on-primary}` #f5f5f5: text on the dark button.
- `{colors.ink-secondary}` #797267: the most-read text color by characters (10,167), used for descriptions and footer text.
- `{colors.nav-text}` #2c2925bf: translucent navigation text.
- `{colors.ink-3}` #0000001a: very light text (5,460 characters; the structured monospace labels in the product mock).
- `{colors.ink-4}` #ffffff, `{colors.ink-5}` #ffffffcc and `{colors.ink-6}` #e4e4e4: light text on dark regions.
- `{colors.hairline}` #ffffff24 and `{colors.text-input-border}` #00000014: borders.

Other measured colors include a coral #ff6257 text (118 characters) and a root variable `--violet-main` #bf89cd; neither is assigned a role here because no component use was measured.

## Typography

Fonts loaded: `haffer` at 400, 500, 700 and 800, with a generated `haffer Fallback`, and `perfectlyNineties` (a serif). By characters: haffer 17,639, ui-monospace 5,753, perfectlyNineties 757. The names suggest Haffer (a grotesque) and Perfectly Nineties (a serif); no foundry or license page was opened, so no substitute is claimed.

Scale: `{typography.display}` haffer 72px, weight 900, line-height 68.4px (below 1.0 times size; tight); `{typography.heading}` 28px/35px weight 700 ("How can I help, Sarah?"); `{typography.subheading}` 18px/28px weight 600; `{typography.body}` 14px/19.25px weight 400; `{typography.button}` 16px/24px weight 500; `{typography.nav}` 16px/24px weight 400; `{typography.input}` 18px/28px weight 400. Sizes by characters: 14px (11,401), 10px (6,284), 18px (1,975), 16px (1,286), 12px (1,158), 20px, 7px, 24px, 48px, 36px, 11px. Weights by characters: 400 (17,486), 500 (5,031), 700, 600, 900.

## Layout

Single centered column. The navigation is a floating, bordered, rounded capsule in the middle (Product, Resources, Pricing, Careers) with "Log in" and a dark "Sign up" at the right. The hero is centered text; below it a feature-tab strip (Agent, CRM, Email, Messaging, Profiles, Meetings, Projects, Custom apps) leads into a wide product window. Sections are separated by large empty bands; the footer has 96px vertical padding. The spacing tokens are `{spacing.s1}` 2px, 4px, 6px, 8px, 10px, 12px, 16px, 20px, 24px and `{spacing.s10}` 32px; measured paddings by frequency are 8px (198), 12px (175), 6px (103), 16px (93), 20px, 32px, 48px.

## Elevation & Depth

Depth is made of thin, layered, low-opacity shadows. The most common (125 elements) is `0 1px 3px` plus `0 1px 2px -1px`, both at 10% black. Cards combine a 1px ring (`oklab` approximately 6.5% dark) with `0 4px 6px -1px` and `0 2px 4px -2px`, both 5%. The primary button has a pressed edge: an inset `0 -2px 0` at 20% black, so it reads as a slightly dimensional key. The product window sits on a larger soft shadow in the capture (value not isolated in the measurement).

## Shapes

Radii by frequency: 8px (183), 14px (182), 4px (105), 10px (72), pill (70, as a very large pixel value), 18px (35), then 1px, 3px, 6px, 32px, 2px. Tokens: `{rounded.2xl}` 8px, `{rounded.4xl}` 14px for cards, `{rounded.lg}` 4px, `{rounded.3xl}` 10px for buttons and inputs, `{rounded.pill}` 9999px for the round controls, plus `{rounded.xs}` 1px, `{rounded.sm}` 2px, `{rounded.md}` 3px and `{rounded.xl}` 6px.

## Components

- **Primary button** (`button-primary`): `{colors.ink}` fill, `{colors.canvas}` text, 16px/500, 44px tall on desktop, `0 24px` padding, 10px radius, inset bottom edge. At 390px the same button measured 48px tall and 342px wide.
- **Secondary button**: a smaller 14px/500 Sign up (28px tall, 8px radius) in the nav; "Request a Demo" is a light bordered button next to the primary (visible in the capture; not separately measured).
- **Link** (`link`): `{colors.ink-secondary}`, 16px/500, `8px 12px` padding, 10px radius (for example "CRM").
- **Navigation** (`nav`, `nav-link`): capsule bar; links in `{colors.ink}` 16px/400.
- **Text input** (`text-input`): `{colors.surface-2}` fill, 18px/28px text, 38px tall, `4px 28px 4px 10px` padding, 10px radius, 1px `{colors.text-input-border}`.
- **Card** (`card`): `{colors.surface-2}`, 14px radius, 20px padding, layered shadow described above.
- **Footer** (`footer`): `{colors.ink-secondary}` text, `96px 0` padding.

## Design System Architecture

No public design system, brand guideline or token package was found: the home page links only to blog images and a GitHub icon asset, and no brand, press, guideline or design-system page was linked. The de-facto system is Tailwind CSS v4 with shadcn-style tokens: `:root` carries `--card` #fafafa, `--border` #00000014, `--sidebar-primary-foreground` #fff, `--container-md` 28rem, `--blur-lg` 16px, `--color-zinc-100` and Tailwind's `--tw-*` utilities. Fonts are self-hosted web fonts. Semantic naming (card, border, sidebar-primary) points to a shadcn/ui-derived component layer, which is an observation of variable names, not a documented claim by the company.

## Do's and Don'ts

- Do keep the canvas warm off-white and set text in `{colors.ink}` or `{colors.ink-secondary}`.
- Do split headlines into a heavy haffer clause and a lighter serif clause.
- Do use 10px radius for buttons and inputs and 14px for cards.
- Do build depth from hairline rings and low-opacity shadows only.
- Don't use pure black or pure white as the main text or canvas.
- Don't introduce a filled brand blue; the action color is the ink itself.
- Don't use heavy drop shadows; the measured maximum offset is 4px for cards.
- Don't treat the cyan #00bcff area or the coral text as a component color without measuring where it is used.

## Responsive Behavior

Measured at 390px: the h1 becomes 36px/34.2px weight 900 (`{typography.display-mobile}`), the h2 stays 28px/35px weight 700, body paragraphs are 14px/22.75px, and the Sign up button is 48px tall at 342px wide. Sizes by characters at 390px: 14px (10,982), 10px (5,872), 18px (2,103), 12px, 16px, 36px, 7px, 24px, 11px. Navigation and layout reflow at mobile, breakpoint widths and tablet behavior were not measured.

## Iteration Guide

1. Set the page on `{colors.canvas}` with `{colors.ink}` text and `{colors.ink-secondary}` for supporting copy.
2. Build the hero from `{typography.display}` plus a serif accent clause, then two buttons: `button-primary` and a light bordered secondary.
3. Place content in `{colors.surface-2}` cards with `{rounded.4xl}` radius and the layered shadow.
4. Use `{rounded.3xl}` for all interactive controls.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=micro --url=https://www.micro.so/ --force --no-motion` before changing any value.
