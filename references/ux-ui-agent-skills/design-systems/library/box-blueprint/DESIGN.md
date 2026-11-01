---
version: alpha
name: Box
category: "Design Systems"
description: "Box's home page (box.com/home) uses Inter at 80px/600 for the hero, 20px grey #767676 body copy, a Box blue #0061d5 fully rounded 100px pill button, a near-white #fbfbfb card surface and a black #000000 footer, with a rainbow gradient on the headline and product-UI collage imagery."
colors:
  canvas: "#ffffff"
  ink: "#767676"
  primary: "#0061d5"
  on-primary: "#ffffff"
  surface-black: "#000000"
  surface-card: "#fbfbfb"
  ink-secondary: "#595959"
  ink-on-dark: "#ffffffb3"
  ink-card: "#030303"
  ink-heading: "#151f26"
  hairline: "#ffffff1a"
  primary-hover: "#0057c2"
  nav-link-bg: "#0000000d"
typography:
  display:
    fontFamily: Inter, sans-serif
    fontSize: 80px
    fontWeight: 600
    lineHeight: 101.28px
  display-mobile:
    fontFamily: Inter, sans-serif
    fontSize: 48px
    fontWeight: 600
    lineHeight: 60.768px
  subheading:
    fontFamily: Inter, sans-serif
    fontSize: 36px
    fontWeight: 400
    lineHeight: 46.08px
  body:
    fontFamily: Inter, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 32px
  button:
    fontFamily: Inter, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
rounded:
  xs: 6px
  sm: 12px
  md: 30px
  lg: 100px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 20px
  s9: 26px
  s10: 28px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 8px 16px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 16px 40px
    height: 48px
    boxShadow: color(srgb 0 0 0 / 0.1) 0px 20px 20px 0px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
  nav:
    textColor: "{colors.surface-black}"
  nav-link:
    backgroundColor: "{colors.nav-link-bg}"
    textColor: "{colors.surface-black}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 8px 16px
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink-card}"
    padding: 0px 0px 24px
  footer:
    textColor: "{colors.ink-on-dark}"
    padding: 0px 0px 26px
---

## Overview

The measured site is Box at https://www.box.com/home (title "Box | AI-Powered Content Management, Workflow & Collaboration", 1280px viewport, 9979px tall). The list entry called it "Box Blueprint"; the page measured is the Box marketing home page, so the name used is Box. The hero headline alternates between phrases ("Data rooms + AI" in the extraction, "Knowledge + AI" in the capture); both are 80px Inter 600 with a multicolor gradient fill on the first word. Beneath it sits a 36px subline, "Intelligent content management, secure collaboration, and agentic workflow", with "Intelligent" in gradient, then two pill buttons: "Get started" (black with an arrow-in-circle icon) and "Contact us" (white with a blue outline and blue label).

A large collage of product windows follows: the Box file browser with a left blue rail, AI prompt boxes ("How can we speed up our roadmap?"), a workflow badge, an AI agent chat bubble and floating icons for Slack, ChatGPT and Google. A "Trusted by the world's leading organizations" row shows monochrome-ish customer logos (Cisco, NASA, Airbnb, Samsung, Uber, Spotify, Morgan Stanley, Robinhood). The lower sections pair an illustration on one side with an h2-style heading and grey paragraph on the other, for example "Collaborate easily and securely" with a blue pill button, "Explore collaboration", and a "Watch video" text link; then "Get AI insights from content".

A thin purple-magenta gradient promotional strip with arrows and a close icon runs along the very top, above the header. The header holds the Box logo, links (Products, Solutions, Developer, Resources, News, Pricing, Contact), a light-grey "Log in" pill and a blue "Get started" pill. The voice is calm, enterprise and AI-forward.

## Imagery and Microcopy

Imagery is illustrative product storytelling. Instead of photographs, each section has a composed scene: a meeting-notes card, a purple-to-pink "Campaign Proposal" document with a presenter avatar and a PDF badge, a PowerPoint icon, name tags such as Samuel, Nadia and Adam, and a dark pill reading "Edited and approved file" with a green check. A bubble of concentric rings sits behind the collaboration scene. The scenes show real activity, with cursors, comments and AI chips, to suggest people and agents working in the same file.

Microcopy is short and verb-first: "Get started", "Contact us", "Explore collaboration", "Watch video", "See customers", "Register now". Section titles are plain statements in sentence case ("Collaborate easily and securely", "Get AI insights from content"). Inline emphasis is done with blue bold links inside grey paragraphs, and the supporting paragraphs name concrete content types, such as sales presentations, product specs and employee handbooks.

## Colors

Body copy is {colors.ink} (#767676), the most-read text color by character count, with {colors.ink-secondary} (#595959) for darker supporting text and {colors.ink-heading} (#151f26) for subheadings. Card text uses {colors.ink-card} (#030303). The canvas is {colors.canvas} (#ffffff); cards sit on {colors.surface-card} (#fbfbfb), and {colors.surface-black} (#000000) fills the dark sections and footer, where text is {colors.ink-on-dark} (white at roughly 70% opacity, #ffffffb3). A hairline {colors.hairline} (white at 10% opacity) divides items on dark.

The brand action color is {colors.primary} (#0061d5), a saturated Box blue, used for the "Get started" header pill, the "Explore collaboration" button and inline links such as "See customers" and "security and compliance". Hover darkens to {colors.primary-hover} (#0057c2). {colors.on-primary} (#ffffff) is the label color. The nav "Log in" pill uses {colors.nav-link-bg} (black at 5%). A multicolor gradient (orange to magenta to purple to blue) appears on headline words and in the AI imagery, but it is a gradient fill and is not tokenized here.

## Typography

Inter is the one family, loaded at 400, 500 and 600 plus italics. Display ({typography.display}) is 80px at 600 with a 101.28px line height; the mobile display ({typography.display-mobile}) is 48px on 60.768px. The subheading ({typography.subheading}) is 36px at 400. Body ({typography.body}) is 20px at 400 on a 32px line height, which is large for body text and gives the page an airy, editorial reading rhythm. Buttons and nav links ({typography.button}) are 16px at 700 on 24px. Footer text is 14px.

An icon font named icomoon is also loaded for glyphs. Inter is open source, so no font substitution is needed.

## Layout

The page is centered with generous vertical rhythm: the hero, the collage, the logo row and each feature section are separated by large empty bands. Feature sections use a two-column split with illustration and text alternating sides. The logo row wraps onto two lines (six logos, then two). Spacing values measured include {spacing.s1} (4px), {spacing.s3} (8px), {spacing.s5} (12px), {spacing.s7} (16px) and {spacing.s8} (20px); buttons use 8px 16px (40px tall) in the header and 16px 40px (48px tall) in the hero.

## Elevation & Depth

Shadows are soft and large: the hero buttons carry "color(srgb 0 0 0 / 0.1) 0px 20px 20px 0px", and other measured shadows are "rgba(0, 0, 0, 0.05) 0px 4px 50px 0px" and "rgba(5, 68, 121, 0.15) 0px 30px 60px 0px" (a blue-tinted shadow). Product windows in the collage float over a faint rounded-outline grid, with white UI panels casting diffuse shadows to give a layered, glassy feel.

## Shapes

Buttons and nav links are pills with {rounded.lg} (100px) radius. Other measured radii are {rounded.xs} (6px), {rounded.sm} (12px), {rounded.md} (30px) and {rounded.pill} (9999px). The BoxWorks card measured a mixed radius of "0px 24px 24px 0px" (square on the left, rounded on the right). Collage windows have gently rounded corners.

## Components

**button-primary**: {colors.primary} fill, white Inter 16px 700 label, 100px radius, 8px 16px padding, 40px tall (header); the hero variant is 16px 40px, 48px tall, with a soft drop shadow. **button-secondary** (the generated second CTA, "Explore collaboration") shares the blue fill and the same pill shape. **nav-link** is a {colors.nav-link-bg} pill with black bold 16px text. **link** is bold 16px. **card** is a {colors.surface-card} block with a 20px 600 title and a blue link, used for event announcements such as BoxWorks 2026. **footer** is dark with 14px {colors.ink-on-dark} links (Sitemap, Subscriptions, Terms of Service, Privacy Policy).

## Design System Architecture

The brief supplied https://opensource.box.com/box-ui-elements as the design-system URL. That site is a Storybook for Box UI Elements, which the project README at https://github.com/box/box-ui-elements describes as "pre-built UI components that allow developers to add features of the main Box web application into their own applications", available as React components. It is a real Box open-source library but it is not what this page runs on: the served HTML of box.com/home only links to developer.box.com/box-ui-elements from its navigation, and the page exposes a single custom property (--default-page-background-image: #fff). No values were taken from Box UI Elements. The de-facto system of the marketing page is a set of utility styles with Inter, three greys, one blue, pill buttons and gradient accents.

## Do's and Don'ts

- Do use {colors.primary} for the main call to action and keep buttons as 100px pills.
- Do set hero headlines large (80px, 600) and keep body copy at 20px in grey.
- Do use gradient fills sparingly for AI emphasis words.
- Do alternate illustration and text sections with large white space.
- Don't add hard borders; use soft shadows and fill changes.
- Don't set long paragraphs in black; body text here is grey ({colors.ink}).
- Don't use the promotional strip color for UI controls.

## Responsive Behavior

The mobile display size is 48px against 80px on desktop. Menu collapse and other breakpoint behavior were not measured in the extraction and are not described as fact.

## Iteration Guide

1. Set Inter on {colors.canvas}; headline 80px 600, subline 36px 400, body 20px {colors.ink}.
2. One {colors.primary} pill button per section, with {colors.primary-hover} hover.
3. Place cards on {colors.surface-card} and dark blocks on {colors.surface-black}.
4. Keep shadows large and low-opacity, as measured above.
5. Show the product through UI collages rather than stock photography.
