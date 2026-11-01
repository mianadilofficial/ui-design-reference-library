---
version: alpha
name: Motion
category: "Frontend Frameworks"
description: "Motion (motion.dev, previously Framer Motion) is a near-black #080808 developer site set in TASA Orbiter 700 headlines with grey-green #979d97 body text and #edebe5 highlights, square-cornered uppercase Geist Mono buttons in yellow #fbd509 and green #52cd86, 6px-rounded code cards and a light #f8f8f6 footer."
colors:
  canvas: "#080808"
  ink: "#979d97"
  ink-strong: "#edebe5"
  primary: "#fbd509"
  on-primary: "#080808"
  plus-green: "#52cd86"
  ai-purple: "#a16ce5"
  surface-band: "#141214"
  surface-deep-green: "#0e1312"
  card-bg: "#080b08"
  card-border: "#ffffff1a"
  hairline: "#343034"
  footer-bg: "#f8f8f6"
  footer-ink: "#1a1a1c"
  white: "#ffffff"
  code-red: "#f43f5e"
  code-blue: "#60a5fa"
typography:
  display:
    fontFamily: "\"TASA Orbiter\", sans-serif"
    fontSize: 30.72px
    fontWeight: 700
    lineHeight: 33.1776px
    letterSpacing: "-1.0752px"
  display-mobile:
    fontFamily: "\"TASA Orbiter\", sans-serif"
    fontSize: 30.03px
    fontWeight: 700
    lineHeight: 31.5315px
    letterSpacing: "-1.05105px"
  heading:
    fontFamily: "\"TASA Orbiter\", sans-serif"
    fontSize: 40px
    fontWeight: 700
    lineHeight: 44px
    letterSpacing: "-1.4px"
  subheading:
    fontFamily: "\"TASA Orbiter\", sans-serif"
    fontSize: 30px
    fontWeight: 700
    lineHeight: 33px
    letterSpacing: "-0.9px"
  body:
    fontFamily: "\"TASA Orbiter\", sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 23.25px
    letterSpacing: "-0.15px"
  footer-lead:
    fontFamily: "\"TASA Orbiter\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 25px
    letterSpacing: "-0.4px"
  button:
    fontFamily: "\"Geist Mono\", ui-monospace, SFMono-Regular, Menlo, Consolas, monospace"
    fontSize: 11px
    fontWeight: 400
    lineHeight: 13.75px
    letterSpacing: 1.32px
    textTransform: uppercase
  input:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
rounded:
  none: 0px
  xs: 3px
  sm: 4px
  md: 6px
  pill: 9999px
spacing:
  s1: 1px
  s2: 3px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 9px
  s8: 10px
  s9: 12px
  s10: 14px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12px 18px
    height: 48px
    borderColor: "{colors.primary}"
  button-plus:
    backgroundColor: "{colors.plus-green}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12px 18px
    height: 48px
    borderColor: "{colors.plus-green}"
  button-outline:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 48px
  button-light:
    backgroundColor: "{colors.ink-strong}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 9px 12px
    height: 37px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    padding: 0px 0px 28px
  nav:
    textColor: "{colors.ink-strong}"
  text-input:
    textColor: "{colors.ink-strong}"
    typography: "{typography.input}"
    padding: 3px 0px
    height: 24px
  code-card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    borderColor: "{colors.card-border}"
  floating-panel:
    shadow: "rgba(0, 0, 0, 0.2) 0px 1px 0px 0px, rgba(0, 0, 0, 0.6) 0px 18px 40px -16px"
  subscribe-button:
    backgroundColor: "{colors.footer-ink}"
    textColor: "{colors.footer-bg}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 18px
    height: 48px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.footer-ink}"
    typography: "{typography.footer-lead}"
    padding: 80px 48px 40px
---

# Motion

## Overview

This file documents https://motion.dev/, the site of **Motion**, the JavaScript and React animation library that the page itself describes as "Previously Framer Motion" and "Free and open source." The page title is "Motion (prev Framer Motion): JavaScript & React animation library". The queue slug is `framer-motion`; the measured site is Motion's, so the name here is Motion.

The site is a dark, editorial developer page. The capture opens on a near-black #080808 canvas with a minimal header: the Motion logomark and wordmark at left, centred uppercase monospace links (DOCS, EXAMPLES, UI, AI KIT, STUDIO), and a bordered "MOTION+" button at right. The hero is a glowing particle sphere in warm gold. Under it, at left: "The animation library loved by humans and agents alike." (TASA Orbiter 700) and the grey line "Layout, scroll, gestures, 3D, and hardware acceleration for React, Vue and JavaScript." At right: "Free and open source. Previously Framer Motion.", a bordered command field (`npm install motion && npx motion-ai`) with a copy icon, and a square yellow "GET STARTED ›" button. A "LEARN MORE" link with a chevron and a sponsor row (Framer, Cursor, Linear, Figma, Sanity, Clerk) follow.

The body walks through features as alternating bands: "Small APIs. Expressive interfaces.", then "Layout animations" (a row of five fashion photographs with RUNWAY / BACKSTAGE / OBJECTS tabs, then a code card showing `<motion.img layoutId={id} … />` with LAYOUT DOCS / LAYOUT EXAMPLES links), "Gesture animations", "Scroll animations", "Spring animations" (a yellow square with sliders), a four-column feature list, a "Motion+ unlocks the full animation workflow." section with a green #52cd86 stats band, a gallery, "Built with Motion.", "Latest from Motion." (examples, changelog and magazine lists), "Choose where to start." (Motion vs Motion+ cards), a guides index, a newsletter and a light #f8f8f6 footer.

Imagery is moody and cinematic (dark fashion photography, 3D objects); copy is short and developer-focused ("It only takes a few lines of Motion to bring an interface to life").

## Colors

- **canvas #080808** — the page background (one continuous band, 12,515px tall).
- **ink #979d97** — the grey-green body colour, the most-read text colour (2,546 characters); also link and outline-button text.
- **ink-strong #edebe5** — headlines and emphasis (1,928 characters); also the fill of light buttons ("Browse all examples", "See all docs") and active tabs.
- **primary #fbd509** — the yellow of "GET STARTED" and the spring demo square; the CSS defines it as `--lab-yellow` / `--cl-motion: oklch(.88 .18 96)`, the colour of the core Motion product.
- **on-primary #080808** — text on yellow and green.
- **plus-green #52cd86** — the "EXPLORE MOTION+" button and the Motion+ stats band; `--cl-plus` / `--lab-rind: oklch(.76 .15 155)`.
- **ai-purple #a16ce5** — a purple accent block; `--cl-ai-kit` / `--lab-blackcurrant: oklch(.64 .18 302)` is the AI Kit colour.
- **surface-band #141214** — the slightly lighter bands behind the demo areas.
- **surface-deep-green #0e1312** — a green-black band.
- **card-bg #080b08** with **card-border #ffffff1a** — code and example cards.
- **hairline #343034** — the most frequent border colour (17 elements) and section dividers.
- **footer-bg #f8f8f6** and **footer-ink #1a1a1c** — the light footer and its text and subscribe button.
- **white #ffffff** — small amounts of pure white text.
- **code-red #f43f5e** and **code-blue #60a5fa** — syntax highlighting in code cards (other measured syntax colours: #ff9e64, #7dcfff, #a78bfa, #34d399).

The root variables also name the product colours by fruit (`--lab-yellow`, `--lab-rind`, `--lab-blackcurrant`, `--lab-blueberry`, `--lab-watermelon`, `--lab-dragonfruit`) and map them to tiers (`--tier-s` … `--tier-f`) and products (`--cl-motion`, `--cl-plus`, `--cl-ai-kit`, `--cl-motion-studio`).

## Typography

Three families are measured:

- **TASA Orbiter** (variable 400–800) — headlines and body (4,138 characters), declared as `--font-sans`.
- **Geist Mono** (variable 100–900) — buttons, nav links, labels and code (1,418 characters), declared as `--font-mono`.
- **-apple-system** — small UI text inside example cards and inputs (218 characters).

TASA Orbiter and Geist Mono are both open-source families.

- **display** — TASA Orbiter 30.72px / 33.1776px, weight 700, -1.0752px (-0.035em). The hero headline is deliberately modest in size.
- **display-mobile** — 30.03px / 31.5315px, -1.05105px.
- **heading** — 40px / 44px, weight 700, -1.4px ("Small APIs. Expressive interfaces.").
- **subheading** — 30px / 33px, weight 700, -0.9px ("Layout animations").
- **body** — 15px / 23.25px, weight 400, -0.15px. The most-read size (2,509 characters).
- **footer-lead** — 20px / 25px, weight 400, -0.4px.
- **button** — Geist Mono 11px / 13.75px, weight 400, +1.32px, uppercase.
- **input** — system sans 12px / 18px.

Headlines use tight negative tracking (-0.03em to -0.035em); uppercase mono labels use wide positive tracking (1.1px–1.32px at 11px, i.e. 0.1em–0.12em, matching `--kicker-tracking-tight: .1em` and `--kicker-tracking-loose: .18em`).

## Layout

The desktop capture is 1,280px wide; the page measured 12,515px tall with content from x 48 to x 1232. The root variables declare `--max-width: 980px` and `--gallery-gap: 20px`. Feature sections follow a fixed pattern: a section title, a full-width darker band with the live demo, then a two-column row with a short description at left and a code card at right, followed by two uppercase doc/example links. Hairlines divide sections. The extraction reports a maximum of eight card columns (the gallery and logo rows).

Spacing tokens: 1px, 3px, 4px, 5px, 6px, 8px, 9px, 10px, 12px and 14px. The dominant gap is 12px (112 uses), then 16px and 8px; the most frequent padding is 3px (199 uses, inside code and tabs), then 12px and 9px. Section padding reaches 48px and 96px.

## Elevation & Depth

One shadow was measured: `rgba(0, 0, 0, 0.2) 0px 1px 0px 0px, rgba(0, 0, 0, 0.6) 0px 18px 40px -16px` (3 elements), a tight contact line plus a deep, soft drop used on floating demo panels. Everything else is flat; depth comes from the dark band changes (#080808 → #141214) and from lit photography and 3D renders.

## Shapes

Shapes are almost entirely square. Buttons, the command field and nav controls are 0px. The measured radii are 6px (code and example cards), 4px, 3px (small tags) and 50% circles (avatars, dots). Square corners plus uppercase mono labels give the site a technical, instrument-like feel.

## Components

**Primary button.** Yellow #fbd509, 1px yellow border, #080808 Geist Mono 11px uppercase (+1.32px), 12px 18px padding, 48px tall, square, with a small "›" chevron ("GET STARTED"). On hover the border lightens while the fill stays yellow.

**Motion+ button.** Same shape in green #52cd86 ("EXPLORE MOTION+").

**Outline button.** #080808 with a 16% cream border and #979d97 mono text ("MOTION+" in the header); hover raises the border to 32%.

**Light button.** #edebe5 fill, #080808 TASA Orbiter 15px, 9px 12px padding, 37px tall ("Browse all examples", "See all docs").

**Command field.** Bordered, square, monospace install command with a copy button.

**Tabs.** Uppercase mono labels; the active tab is a light filled chip (RUNWAY).

**Code card.** #080b08, 6px radius, 1px #ffffff1a border, syntax-highlighted code, a toolbar of framework icons (React, JS, Vue) and a copy icon.

**Uppercase link.** Geist Mono 11px with a chevron ("LAYOUT DOCS ›", "LEARN MORE").

**Subscribe button.** #1a1a1c with #f8f8f6 text on the light footer, square, 48px tall.

**Footer.** #f8f8f6, #1a1a1c text, a 20px lead line ("Motion is supported by…"), sponsor tiers, newsletter field and link columns; padding 80px 48px 40px.

## Design System Architecture

Motion does not publish brand guidelines or a design system for its website; the home page (https://motion.dev/) links no brand or press page, only the GitHub organisation (https://github.com/motiondivision), whose repositories are the libraries (motion, motion-vue, motion-solid, motionone), developer tools and an AI kit — none holds website design tokens. Motion UI (https://motion.dev/ui) is a product of animated components, not a style guide.

The site's own CSS exposes a compact token set (52 root variables): surfaces (`--background: #0d1111`, `--layer: #13181a`, `--surface-deepest: #030304`, `--code-bg: #111112`), text (`--foreground: #ededec`, `--foreground-feint: #7a8180`), borders (`--border: #1e2427`, `--code-border: #1e1e20`), accents (`--accent: #e8eeee`, `--accent-3: #a5b4fc`, `--on-accent: #fff`, `--error: #ff5f57`), the fruit palette and product mapping described under Colors, typography (`--font-sans`, `--font-mono`, kicker tracking) and layout (`--max-width: 980px`, `--gallery-gap: 20px`, `--dossier-stripe-*`). Several of these declared values differ slightly from the colours rendered on the home page, which uses #080808 as the canvas.

## Do's and Don'ts

**Do**
- Keep the canvas near-black (#080808) with grey-green #979d97 body text and #edebe5 for headlines.
- Set headlines in TASA Orbiter 700 with tight tracking; keep them moderate in size (30px–40px).
- Use Geist Mono uppercase with ~0.12em tracking for buttons, nav and labels.
- Make buttons square; colour-code them by product (yellow Motion, green Motion+).
- Pair every feature with a live demo band and a 6px-rounded code card.
- Use dark, cinematic photography and 3D objects as demo content.

**Don't**
- Don't round buttons or the command field.
- Don't use pure white for body text.
- Don't set labels in the sans; labels are mono and uppercase.
- Don't add shadows except on floating demo panels.
- Don't mix product colours inside one component.

## Responsive Behavior

At 390px the mobile pass measured the hero headline at 30.03px / 31.5315px (-1.05105px), the section heading at 28px / 30.8px (-0.98px), body text unchanged at 15px / 23.25px, and the "GET STARTED" button unchanged (Geist Mono 11px, 12px 18px padding, 48px tall). The first band stays #080808; the second measured band is #141214. The extractor reported a "menu toggle" at both widths, but its label is "Motion home" (the logo link), so mobile navigation behaviour was not reliably measured.

The mobile capture shows the hero text, command field and button in one column and the demos and code cards one under another.

The stylesheet is desktop-first, with `max-width` queries at 600px (25 rules), 900px (23), 620px (19), 760px (14), 800px (11), 700px (10), 1100px (9) and 480px (7). Behaviour at those intermediate widths was not measured.

## Iteration Guide

1. Set canvas #080808, body #979d97, headings #edebe5; alternate #141214 demo bands.
2. Load TASA Orbiter (400–800) and Geist Mono; display 30.72px / 33.1776px at 700, heading 40px / 44px, body 15px / 23.25px.
3. Build square 48px buttons with Geist Mono 11px uppercase labels: yellow #fbd509 primary, green #52cd86 for Motion+, bordered dark for secondary.
4. For each feature: title, demo band, then description + 6px code card with #ffffff1a border.
5. Separate sections with #343034 hairlines; keep 12px gaps and 3px / 12px padding inside components.
6. End with the light #f8f8f6 footer and dark square subscribe button.
7. Compare against the captures; animations themselves, hover states beyond the buttons and intermediate widths were not measured.
