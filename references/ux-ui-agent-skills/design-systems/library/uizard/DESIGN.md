---
version: alpha
name: Uizard
category: "Design & Creative Tools"
description: "Uizard's uizard.io marketing site (now branded 'miro | LABS'): a black #000000 canvas with a violet glow, near-white #f5f5f5 Satoshi text at weight 480, ClashGrotesk 72px headlines, brand Blue #1e90ff for the Sign up CTA, lavender #a881fe for AI actions, 16px-radius dark cards with #2e2e2e borders, and 8px-radius buttons."
colors:
  canvas: "#000000"
  ink: "#f5f5f5"
  primary: "#1e90ff"
  on-primary: "#ffffff"
  accent-ai: "#a881fe"
  ink-muted: "#aeaeae"
  ink-dark: "#232323"
  hairline: "#212121"
  card-border: "#2e2e2e"
  text-input-text: "#111111"
  brand-black: "#030303"
  brand-yellow: "#ffc600"
typography:
  display:
    fontFamily: ClashGrotesk-Variable, Satoshi-Variable, Helvetica, "Helvetica Neue", Arial, sans-serif
    fontSize: 72px
    fontWeight: 540
    lineHeight: 72px
    letterSpacing: "-0.6px"
  display-mobile:
    fontFamily: ClashGrotesk-Variable, Satoshi-Variable, Helvetica, "Helvetica Neue", Arial, sans-serif
    fontSize: 40px
    fontWeight: 540
    lineHeight: 40px
    letterSpacing: "-0.4px"
  subheading:
    fontFamily: Satoshi-Variable, Helvetica, "Helvetica Neue", Arial, sans-serif
    fontSize: 40px
    fontWeight: 640
    lineHeight: 48px
    letterSpacing: "-1px"
  card-title:
    fontFamily: Satoshi-Variable, Helvetica, "Helvetica Neue", Arial, sans-serif
    fontSize: 24px
    fontWeight: 640
    lineHeight: 32px
    letterSpacing: "-0.2px"
  body:
    fontFamily: Satoshi-Variable, Helvetica, "Helvetica Neue", Arial, sans-serif
    fontSize: 18px
    fontWeight: 480
    lineHeight: 24px
    letterSpacing: "-0.2px"
  button:
    fontFamily: Satoshi-Variable, Helvetica, "Helvetica Neue", Arial, sans-serif
    fontSize: 16px
    fontWeight: 640
    lineHeight: 22px
    letterSpacing: "-0.1px"
  link:
    fontFamily: Satoshi-Variable, Helvetica, "Helvetica Neue", Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18.4px
rounded:
  none: 0px
  xs: 4px
  sm: 8px
  md: 10px
  lg: 12px
  xl: 16px
  2xl: 28px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 16px
    height: 38px
  button-ai:
    backgroundColor: "{colors.accent-ai}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    boxShadow: rgba(168, 129, 254, 0.64) 0px 2px 12px 0px, rgb(168, 129, 254) 0px 1px 1px 0px inset
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  text-input:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 12px
    height: 48px
  card:
    textColor: "{colors.on-primary}"
    typography: "{typography.card-title}"
    rounded: "{rounded.xl}"
    padding: 40px 0px 0px 40px
    borderColor: "{colors.card-border}"
---

# Uizard — uizard.io

## Overview

Uizard's home page (https://uizard.io, title "UI Design Made Easy, Powered By AI | Uizard") is a dark, glowing product page for an AI UI-design tool. The header lockup now reads "uizard | miro LABS". The page is black from top to bottom; the hero is washed with a deep violet light that rises from the bottom corners and fades into black.

The hero headline "Turn product ideas into concepts instantly with GenAI" is set in ClashGrotesk at 72px, centred, with parts of the line in white and parts in grey. Under it, a one-line subhead and a prompt bar: a white input ("A children's education web app") fused to a lavender **Generate** button with a sparkle icon. A large framed video panel follows, then a "Trusted by individuals and teams at the world's boldest companies" logo marquee (Meta, Uber, ingenico, accenture, adidas, Atlassian). The next section opens with an "AI UI design is here!" pill, a lavender-tinted 40px heading "UI design for disruptive product teams" and a lavender **Find out more** button, then a bento grid of dark feature cards (Generate prototypes, Modify any component, Generate screens, Screenshot Scanner, Wireframe scanner, Generate themes) — several bathed in purple gradients. A masonry wall of social-post testimonials, a footer with a blue **Sign up for free** button and six link columns close the page.

The voice is upbeat and promise-led: "No ideas left behind…", "Iterate at speed..", "in no time at all".

## Colors

Measured values come from `web/data/extracted/uizard.json`; brand values come from Uizard's "Rules for Logo and Colors" PDF in the official press kit (https://uizard.io/press_kit.zip, linked from https://uizard.io/press/).

- **Canvas `#000000`** — the body background; the capture is 69% near-black pixels.
- **Ink `#f5f5f5`** — the dominant text color by far; pure white `#ffffff` (`on-primary`) for headings and button labels.
- **Primary `#1e90ff`** — the brand guideline's **Blue** (HEX 1E90FF, RGB 30, 144, 255), filling the header and footer Sign up for free buttons.
- **Accent AI `#a881fe`** — lavender on AI actions (Generate, Find out more), with a matching glow `rgba(168, 129, 254, 0.64) 0px 2px 12px 0px` plus a 1px inset highlight. A violet `rgba(68, 20, 187, 0.75) 0px -20px 200px 0px` shadow produces the hero light.
- **Ink muted `#aeaeae`** — secondary copy and faded testimonial text; **ink dark `#232323`** — dark text on light chips.
- **Hairline `#212121`** and **card border `#2e2e2e`** — the 1px borders that outline dark cards; the generated `#21212152` translucent fill covers most card areas.
- **Text input text `#111111`** — the prompt bar's text on white.
- **Brand black `#030303`** and **brand yellow `#ffc600`** — the guideline's other primary colors (with White `#FFFFFF`); yellow was not measured on the home page.

The guideline also lists tint ramps for each primary (Blue `44A3FF`, `69B5FF`, `8FC8FF`, `B4DAFF`; Black `181818`, `262626`, `333333`, `7F7F7F`; and White and Yellow ramps).

## Typography

Two variable families are self-hosted:

- **ClashGrotesk-Variable** (loaded range 200–700) for the hero only: 72px / 72px, weight 540, -0.6px tracking.
- **Satoshi-Variable** (loaded range 300–900) for everything else. Body 18px / 24px at weight 480 with -0.2px tracking is the overwhelming majority of text; buttons are 16px / 22px at 640 with -0.1px; section headings 40px / 48px at 640 with -1px; card titles 24px / 32px at 640 with -0.2px.

Measured sizes by character count: 18px, 14px, 16px, 24px, 40px, 72px, 12px, 20px. Measured weights: 480, 560, 640, 540 — the in-between values only a variable font provides. The fallback chain is Helvetica, "Helvetica Neue", Arial, sans-serif. When Satoshi or ClashGrotesk is unavailable, use the fallback stack and keep the weights near 480 and 640.

## Layout

At 1280px the hero content spans x = 140 to x = 1140 and is centred. The measured bands are a 175px black header zone, a 126px `#100226` violet band behind the headline, a 1,290px media band (prompt bar, video frame, logos), and a single 6,070px near-black band holding everything else with up to 6 columns detected. The feature bento uses unequal two-column rows of large cards; testimonials use a three-column masonry. Measured gaps: 12px, 4px, 20px, 2px, 8px, 24px, 32px; paddings: 32px, 12px, 40px, 24px.

## Elevation & Depth

Depth is light, not shadow. The hero's violet glow (`rgba(68, 20, 187, 0.75) 0px -20px 200px 0px`) and purple gradient fills inside cards create the atmosphere; lavender buttons glow with `rgba(168, 129, 254, 0.64) 0px 2px 12px 0px`. Neutral shadows also exist — `rgba(3, 3, 3, 0.12) 0px 12px 30px -4px`, `rgba(0, 0, 0, 0.55) 0px 10.679px 33.371px 0px` and `rgba(3, 3, 3, 0.16) 0px 2px 8px 0px` — but on black they mostly disappear; cards rely on 1px `#2e2e2e` borders.

## Shapes

**16px** (`rounded.xl`) is the card radius; **12px** (`rounded.lg`) the most frequent radius overall (inner panels, chips); **8px** (`rounded.sm`) the button radius; **10px** (`rounded.md`) the prompt input. **28px** appears on large frames and **4px** on small elements; 50% circles are avatars. The primary CTA is an anchor wrapper that computes 0px (`rounded.none`) around an inner button that computes 8px; the visible shape is the 8px button.

## Components

- **Primary button** — `#1e90ff`, white Satoshi 16px weight 640, 8px radius, 0px 16px padding, 38px tall ("Sign up for free").
- **AI button** — `#a881fe` with white label, sparkle icon and lavender glow ("Generate", "Find out more").
- **Prompt bar** — white input, `#111111` text, 10px radius, 12px padding, 48px tall, joined to the Generate button.
- **Feature card** — transparent/translucent dark fill, 1px `#2e2e2e` border, 16px radius, padding 40px 0px 0px 40px so the screenshot bleeds off the bottom-right; 24px title, 14–16px description.
- **Announcement pill** — dark pill with a thin border and sparkle icon ("AI UI design is here!").
- **Testimonial card** — dark bordered card with avatar, name, verified badge, handle and social icon; the first and last rows fade out.
- **Header** — logo lockup, Product, AI Design (lavender with sparkle), Templates, Solutions, Blog on the left; Pricing, Contact sales, Log in and the blue button on the right.
- **NEW badge** — a small lavender tag in the footer.

## Design System Architecture

Uizard has no public UI design system or token package among the pages we opened. Its official brand reference is the press kit (https://uizard.io/press_kit.zip from https://uizard.io/press/), whose "Rules for Logo and Colors" PDF ("Uizard Brand Guidelines") defines the primary colors White `#FFFFFF`, Black `#030303`, Yellow `#FFC600` and Blue `#1E90FF` with RGB, CMYK and four-step tint ramps. The live site's CSS exposes no root custom properties (`rootVars` is empty); the font stack and class-level values are the de-facto system. The site's dark violet palette and the lavender `#a881fe` AI accent are not in the 2023 press-kit guideline.

## Do's and Don'ts

**Do**
- Keep the page black with `#f5f5f5` Satoshi text at weight 480.
- Use brand Blue `#1e90ff` for sign-up and lavender `#a881fe` for AI actions.
- Use ClashGrotesk only for the hero headline, at 540 weight with slight negative tracking.
- Outline dark cards with 1px `#2e2e2e` and round them 16px.
- Let violet light and gradients provide depth instead of drop shadows.

**Don't**
- Don't use the browser-default link blue; links take the text color.
- Don't put Yellow `#ffc600` into UI controls on the dark site — it was not measured there.
- Don't use heavy weights; the measured range stays between 480 and 640.
- Don't round buttons beyond 8px.

## Responsive Behavior

The 390px mobile pass recorded the hero headline at 40px / 40px with -0.4px tracking, body text at 16px / 20px with weight 480, the lavender Generate button as the main CTA (14px weight 640, 42px tall, 350px wide), zero visible header links with no menu toggle detected, and a maximum of 2 card columns. Mobile content spans x = 20 to x = 370. Mobile font sizes by frequency: 16px, 14px, 18px, 26px, 40px, 12px. The stylesheet declares breakpoints at max-width 480px and min-width 481px. Other reflow behavior was not measured.

## Iteration Guide

1. Start from a black `#000000` canvas with `#f5f5f5` Satoshi 18px / 24px body text at 480.
2. Centre a ClashGrotesk 72px / 72px headline at 540 weight with -0.6px tracking.
3. Put a white prompt input with a lavender `#a881fe` Generate button under it; keep the blue `#1e90ff` button for sign-up.
4. Build features as a bento of 16px-radius dark cards with 1px `#2e2e2e` borders and violet gradients.
5. Add violet glow behind the hero; no other strong shadows.
6. Measure any value not in the frontmatter before using it.
