---
version: alpha
name: Relume
category: "Design & Creative Tools"
description: "Relume's relume.ai marketing site: warm off-white #f1f0ee canvas, #101010 Geist text (56px regular hero, -1.68px tracking), hot magenta #ff00f4 6px-radius buttons and Geist Mono uppercase eyebrows, pink #ff9fff and cyan #98eafd gridded showcase panels, and 16px-radius cards outlined in translucent #1b19191a hairlines."
colors:
  canvas: "#f1f0ee"
  ink: "#101010"
  ink-strong: "#161616"
  ink-secondary: "#343434"
  ink-muted: "#5c5c5c"
  ink-faint: "#8a8a8a"
  primary: "#ff00f4"
  on-primary: "#ffffff"
  panel-pink: "#ff9fff"
  panel-pink-light: "#ffcfff"
  panel-cyan: "#98eafd"
  ai-subtle: "#ffd7ff"
  surface: "#ffffff"
  card-bg: "#ffffffcc"
  hairline: "#1b19191a"
  danger: "#ff4848"
typography:
  display:
    fontFamily: "\"Geist Variable\", Arial, sans-serif"
    fontSize: 56px
    fontWeight: 400
    lineHeight: 67.2px
    letterSpacing: "-1.68px"
  display-mobile:
    fontFamily: "\"Geist Variable\", Arial, sans-serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 44px
    letterSpacing: "-1.2px"
  heading:
    fontFamily: "\"Geist Variable\", Arial, sans-serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 48px
    letterSpacing: "-0.8px"
  eyebrow:
    fontFamily: "\"Geist Mono Variable\", sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
    letterSpacing: "-0.28px"
    textTransform: uppercase
  body:
    fontFamily: "\"Geist Variable\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"Geist Variable\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  nav:
    fontFamily: "\"Geist Variable\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 14px
rounded:
  xs: 2px
  sm: 4px
  md: 4.44px
  lg: 4.74px
  xl: 4.84px
  2xl: 6px
  3xl: 8px
  4xl: 12px
  card: 16px
  pill: 9999px
spacing:
  s1: 1.43px
  s2: 2px
  s3: 2.86px
  s4: 3px
  s5: 4px
  s6: 6px
  s7: 8px
  s8: 9.2px
  s9: 10px
  s10: 12px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 6px 12px
    height: 32px
  button-outlined:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 6px 12px
    height: 34px
    border: "1px solid #1b19191a"
  link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.nav}"
  nav-link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.nav}"
  eyebrow:
    textColor: "{colors.primary}"
    typography: "{typography.eyebrow}"
  prompt-card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.card}"
    border: "1px solid #1b19191a"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 20px
    height: 106px
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.card}"
    borderColor: "{colors.hairline}"
  footer:
    textColor: "{colors.ink}"
---

# Relume — relume.ai

## Overview

Relume's home page (https://www.relume.io, redirecting to https://www.relume.ai/, title "Relume — Build a marketing site you'd actually publish") sells an AI site builder that assembles sites from a human-built component library and then publishes them or exports them to Figma, Webflow or React. The page is calm and editorial on a warm off-white `#f1f0ee` canvas, then punctuated by loud magenta and by gridded pink and cyan panels that look like graph paper.

At the top: a thin header (logo, Products, Pricing, Contact Sales, Component Voting, Learn, a theme toggle, an outlined **Log in** and a magenta **Start for free**). The hero centres a magenta Geist Mono eyebrow "TRUSTED BY 1M+ FREELANCERS & AGENCIES", the 56px headline "Build a marketing site you'd actually publish", a two-line explanation and a white prompt card ("Describe your business…") with Publish/Export chips and a magenta **Generate Website** button, plus a dotted-underlined "Try an example" link. Below sit a pink grid panel with the product editor and a play button, a bordered logo strip ("The system behind millions of websites"), a "CHOOSE YOUR PATH" two-up of Publish and Export feature cards on pink and cyan grids, an "THE ENGINE" pair of cards, a giant yellow pixel-block "PUBLISH" word, a testimonial on a pink grid, demo project cards, a closing prompt card with isometric yellow-and-cyan blocks, and a footer with a wall of community avatars.

The microcopy is plain-spoken and opinionated: "The AI does the work. You make the calls.", "No hallucinated layouts.", "Assembled, not generated".

## Colors

All values are measured in `web/data/extracted/relume.json`; role names follow the site's own root variables where they exist.

- **Canvas `#f1f0ee`** — the page (`--color-background-primary: #f1f0ee`), 57% of the capture's pixels.
- **Ink `#101010`** — main text (`--color-brand-black: #101010`); **ink strong `#161616`** — nav links; **ink secondary `#343434`** (`--color-neutral-600`); **ink muted `#5c5c5c`** and **ink faint `#8a8a8a`** — captions such as "Sub-second load times anywhere".
- **Primary `#ff00f4`** — hot magenta. The CSS names it the AI color (`--color-background-ai`, `--color-foreground-ai`, `--color-border-ai`), and it fills every CTA, colors the eyebrows and the footer heart icon.
- **Panel pink `#ff9fff`**, **panel pink light `#ffcfff`** and **panel cyan `#98eafd`** — the gridded showcase panels; **AI subtle `#ffd7ff`** — light pink backgrounds (`--color-background-ai-subtle`).
- **Surface `#ffffff`** and **card bg `#ffffffcc`** — the white prompt card and translucent cards.
- **Hairline `#1b19191a`** — the 10%-alpha border used on cards, outlined buttons and dividers (`--color-border-subtle`).
- **Danger `#ff4848`** — `--color-border-danger` / `--red`.

The many other colors measured on the page (olive, rust, sand, browns) belong to customer website previews inside the screenshots and are not Relume UI colors.

## Typography

- **Geist Variable** (self-hosted, 100–900) is the UI family: hero 56px / 67.2px with -1.68px tracking at weight 400; section headings 40px / 48px with -0.8px; body and feature titles 16px / 24px; buttons 14px / 20px at 400; nav 14px at 500.
- **Geist Mono Variable** sets the uppercase magenta eyebrows ("CHOOSE YOUR PATH", "THE ENGINE", "PUBLISH") at 14px / 20px, weight 500, -0.28px tracking.
- Measured sizes by character count: 14px, 16px, 18px, 12px, 28px, 16.54px, 32px, 23.35px, 6.348px, 56px, 40px. The fractional sizes and families such as Helvetica Now Display, PP Writer, Kaftan Serif and P22 Mackinac Pro come from scaled-down customer site previews, not from Relume's own UI.

Geist and Geist Mono are open-source; no substitute is needed.

## Layout

At 1280px the hero content is centred between x = 320 and x = 1204 in a 500px band; after a 377px media band the main `#f1f0ee` band runs 5,545px with up to 5 columns. Sections follow a consistent two-column header pattern: magenta eyebrow and 40px title on the left, a short paragraph on the right, then full-width bordered cards. Showcase cards split into a text half and an image half on a gridded colored panel. Gaps are tight and frequent — 8px, 4px, 6px, 2px, 12px — with 32px, 80px and 77.84px for larger separation; paddings cluster at 8px, 12px and 4px, with 64px and 80px section padding.

## Elevation & Depth

There are no drop shadows. Depth is drawn entirely with 1px lines: `rgba(27, 25, 25, 0.1) 0px 0px 0px 1px inset` rings, `rgba(27, 25, 25, 0.1) 0px -1px 0px 0px inset` bottom rules, single-side hairlines, and a solid `rgb(27, 25, 25) 0px 0px 0px 1.25px inset` ring on emphasized elements. A pink `rgb(255, 159, 255) 0px 0px 0px 1px inset` ring outlines pink chips. The graph-paper panels and pixel-block illustrations add visual depth instead of shadow.

## Shapes

**6px** (`rounded.2xl`) is the button radius (Generate Website, Start for free, Log in) and the most frequent radius. **4px** is used on chips and inner elements, **8px** and **12px** on medium containers, **16px** (`rounded.card`) on the prompt card and feature cards, and a 999px pill on round elements. The fractional 4.44px–4.84px radii come from scaled previews. Images inside cards keep square corners where they bleed into the grid panels.

## Components

- **Primary button** — `#ff00f4`, white Geist 14px / 20px, 6px radius, padding 6px 12px, 32px tall. The CSS defines its hover as `#ff00f4` mixed 8% toward black.
- **Outlined button** — transparent, `#101010` text, 1px `#1b19191a` border, 6px radius, 34px tall ("Log in", "Explore Publish"); hover fills `rgba(22, 22, 22, 0.08)`.
- **Nav link** — `#161616` Geist 14px weight 500; hover fills `rgba(22, 22, 22, 0.06)`.
- **Prompt card** — white translucent card, 16px radius, 1px hairline, a 106px-tall textarea with 20px padding, attachment icon, Publish/Export chips and the Generate Website button.
- **Eyebrow** — Geist Mono 14px uppercase magenta.
- **Feature card** — 16px radius, hairline border, 16px titles and 14px descriptions with small line icons.
- **Logo strip** — a long bordered container with a left label and grey customer logos.

## Design System Architecture

Relume does not publish a brand page for itself (https://www.relume.ai/brand returned 404, and the home page header and footer show no brand, press or design-system link); no public brand system exists among the pages opened. Its products are themselves component systems (the Relume Library, the React Library at /react/components and a Figma Kit at /figma-library), but those are products, not Relume's own brand UI. The shipped CSS shows a semantic token layer in root variables: `--color-background-primary`, `--color-background-ai`, `--color-border-subtle`, `--color-brand-black`, pink and neutral scales (`--color-pink-brand-100`, `--color-neutral-600`), and state tokens that derive hover/pressed values with `color-mix(in oklab, …, black 8%/12%)`. Separate `--_publish-*` and `--_hipages-*` prefixes hold tokens for embedded product and customer-preview content.

## Do's and Don'ts

**Do**
- Use `#ff00f4` magenta for CTAs and eyebrows only; keep everything else black on `#f1f0ee`.
- Set headings in regular-weight Geist with negative tracking, and eyebrows in uppercase Geist Mono.
- Draw structure with 1px `#1b19191a` hairlines and inset rings instead of shadows.
- Use pink `#ff9fff` and cyan `#98eafd` graph-paper panels behind product imagery.
- Keep buttons small: 32px tall, 6px radius, 14px text.

**Don't**
- Don't add drop shadows or gradients to cards.
- Don't make headlines bold; the hero is weight 400.
- Don't treat colors and fonts from customer site previews as Relume's palette.
- Don't round buttons into pills.

## Responsive Behavior

The 390px mobile pass recorded the hero headline at 40px / 44px with -1.2px tracking, section headings at 28px / 33.6px, the primary CTA "Start for free" at 14px weight 500, zero visible header links with a menu toggle labelled "Open menu", and content spanning x = 20 to x = 371 in one continuous `#f1f0ee` band with a carousel detected. Mobile font sizes by frequency start 16px, 14px, 18px, 12px, 20px. The stylesheet declares breakpoints at max-width 991px, 767px and 479px. Other reflow behavior was not measured.

## Iteration Guide

1. Start from `#f1f0ee` with `#101010` Geist text.
2. Centre a magenta Geist Mono eyebrow, a 56px / 67.2px regular headline at -1.68px, and a 16px / 24px paragraph.
3. Add a white 16px-radius prompt card with a hairline border and a 32px magenta button with 6px radius.
4. Introduce sections with a left eyebrow + 40px heading and a right paragraph; follow with hairline-bordered cards.
5. Use gridded pink/cyan panels for screenshots.
6. Measure anything not listed in the frontmatter before using it.
