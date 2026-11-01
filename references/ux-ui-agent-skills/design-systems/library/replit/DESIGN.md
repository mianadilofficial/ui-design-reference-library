---
version: alpha
name: Replit
category: "Developer Tools & IDEs"
description: "Replit sets everything in its own Replit Diatype (64px/400 headlines at -3.84px, 20px/26px body) in warm #312e2e on a #faf6f1 off-white canvas, with #ff3c00 orange 8px-radius buttons, 24px-radius feature cards in peach #f9aa8b, coral #ff764d and dark #2c3328, 6px-radius prompt chips and a mono uppercase eyebrow style."
colors:
  canvas: "#faf6f1"
  surface-card: "#ffffff"
  page-body: "#f6f5f4"
  page-largest: "#faf6f1"
  ink: "#312e2e"
  primary: "#ff3c00"
  on-primary: "#ffffff"
  surface-sand: "#f3f2ee"
  ink-footer: "#4b5563"
  ink-muted: "#6f6c6a"
  ink-nav: "#37383c"
  ink-card: "#322f2f"
  hairline: "#c5c5c599"
  text-input-text: "#18191b"
  card-peach: "#f9aa8b"
  footer-bg: "#faf5f0"
  card-dark: "#2c3328"
  card-gray: "#ededed"
  accent-coral: "#ff764d"
  accent-peach: "#ffb199"
  chip-bg: "#efeeec"
  chip-text: "#212225"
typography:
  display:
    fontFamily: "\"Replit Diatype\", sans-serif"
    fontSize: 64px
    fontWeight: 400
    lineHeight: 64px
    letterSpacing: "-3.84px"
  display-mobile:
    fontFamily: "\"Replit Diatype\", sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 32px
    letterSpacing: "-1.92px"
  heading:
    fontFamily: "\"Replit Diatype\", sans-serif"
    fontSize: 68.92px
    fontWeight: 400
    lineHeight: 68.92px
    letterSpacing: "-4.1352px"
  subheading:
    fontFamily: "\"Replit Diatype\", sans-serif"
    fontSize: 36px
    fontWeight: 400
    lineHeight: 36px
    letterSpacing: "-1.08px"
  body:
    fontFamily: "\"Replit Diatype\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 26px
    letterSpacing: "-0.4px"
  button:
    fontFamily: "\"Replit Diatype\", sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
    letterSpacing: "-0.28px"
  nav:
    fontFamily: "\"Replit Diatype\", sans-serif"
    fontSize: 14px
    fontWeight: 400
  button-secondary:
    fontFamily: "\"Replit Diatype\", sans-serif"
    fontSize: 15px
    fontWeight: 400
  chip:
    fontFamily: "\"Replit Diatype\", sans-serif"
    fontSize: 14px
    fontWeight: 460
    lineHeight: 21px
  eyebrow:
    fontFamily: "\"Replit Diatype Mono\", monospace"
    fontSize: 13px
    fontWeight: 500
    letterSpacing: "1.56px"
    textTransform: uppercase
rounded:
  xs: 4px
  sm: 6px
  md: 7px
  lg: 8px
  xl: 12px
  2xl: 16px
  3xl: 20px
  4xl: 24px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 7px
  s5: 8px
  s6: 10px
  s7: 11px
  s8: 12px
  s9: 14px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 8px 12px
    height: 38px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.lg}"
    padding: 12px 24px
    height: 45px
    borderColor: "{colors.primary}"
  button-outlined:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    border: "1px solid #ff3c00"
    padding: 12px 24px
    height: 44px
  chip:
    backgroundColor: "{colors.chip-bg}"
    textColor: "{colors.chip-text}"
    typography: "{typography.chip}"
    rounded: "{rounded.sm}"
    padding: 0px 8px
    height: 32px
    boxShadow: "rgb(219, 217, 211) 0px 0px 0px 1px inset, rgba(0, 0, 0, 0.02) 0px 1px 2px 0px"
  nav:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-nav}"
  nav-link:
    textColor: "{colors.ink-nav}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.text-input-text}"
    typography: "{typography.nav}"
    rounded: "{rounded.sm}"
    padding: 6px 6px 0px
    height: 24px
  card:
    backgroundColor: "{colors.card-peach}"
    textColor: "{colors.ink-card}"
    rounded: "{rounded.4xl}"
    padding: 40px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.ink-footer}"
---

# Replit

## Overview

Replit's home page (title "AI App and Website Builder | Replit") is warm, light and product-first. The whole page sits on #faf6f1, an off-white with a peach cast, and every word is set in the company's own typeface, Replit Diatype. An 80px header carries the Replit logo, Products, Solutions, Pricing, Enterprise and Resources, then "Contact sales", an outlined-looking "Log in" and an orange "Create account" button.

The hero is a centred prompt: "What will you build?" in large, tightly tracked type, a small line ("You can always make changes later."), then a big rounded prompt box ("Describe your idea, Replit will bring it to life…") with an orange send button, a row of mode icons (Website, Mobile, Design, Slides, Animation) and three example chips ("AI sales assistant", "Student budget tracker", "Startup analytics dashboard"). There is no hero image; the input is the hero.

"Meet Replit" (with "Replit" in orange) introduces a 2×2 grid of large 24px-radius feature cards in contrasting fills: peach "Free Mode — Create without token costs" with Free/Power/Max tiers, dark green-black "Replit Chat — Chat that flows", light grey "Infinite Canvas — Design Freely", and an orange-gradient "Intelligent Model Routing — The best model for every task". Then come a template gallery with filter tabs (Featured, Landing Pages, Mobile, Prototypes, Posters, Social Posts, Email) and visual template thumbnails, "Powered by the Replit platform" with four tall cards graded from white to deep orange, a testimonial carousel ("Trusted by builders"), a four-tier pricing table ("Start Small. Scale Fast."), a logo strip, a centred closing CTA ("What are you waiting for?") with an orange button, and a four-column footer.

The voice is friendly and short: "Describe it. Publish it.", "Build & Scale Your Apps Easily.", "Maximize Making on Replit".

## Colors

- **Canvas #faf6f1** — the page background and header (5,222 area units; the captured screen is 47% #fbf6f3). The body element itself is **page-body #f6f5f4**; **page-largest #faf6f1** equals the canvas.
- **Surface-card #ffffff** — cards, pricing tiers, the prompt box (3,061 units).
- **Surface-sand #f3f2ee** — neutral panels (1,233 units). **Footer-bg #faf5f0** — the footer.
- **Ink #312e2e** — the most-read text (3,005 characters), a warm near-black. **Ink-nav #37383c** — header and h1. **Ink-card #322f2f** — card text. **Ink-muted #6f6c6a** and **ink-footer #4b5563** — secondary text.
- **Primary #ff3c00** — the Replit orange: all solid buttons, the outlined button border and text, "Replit" in "Meet Replit" (112 characters of orange text). **On-primary #ffffff**.
- **Card-peach #f9aa8b**, **accent-peach #ffb199**, **accent-coral #ff764d** — the orange-family card fills that grade toward the primary.
- **Card-dark #2c3328** — the dark Replit Chat card. **Card-gray #ededed** — the Infinite Canvas card.
- **Chip-bg #efeeec / chip-text #212225** — example-prompt chips, hovering to #e7e6e2.
- **Hairline #c5c5c599** — the standard border (12 uses); also #dbd9d3 and #d8d5cf.
- **Text-input-text #18191b** — text typed into the prompt.

The CSS defines its palette in HSL tokens, for example `--brand-surface-color-600: hsl(14deg, 100%, 42.5%)` and `--brand-off-white-surface-color-600: hsl(33deg, 47%, 87.3%)`.

## Typography

One family in two cuts, both loaded as variable fonts covering weights 200–1000: **Replit Diatype** (5,709 characters) and **Replit Diatype Mono** (78 characters, for eyebrows).

- **Display** — 64px/64px, 400, -3.84px (-0.06em) — "What will you build?".
- **Heading** — 68.92px/68.92px, 400, -4.1352px — "Meet Replit".
- **Subheading** — 36px/36px, 400, -1.08px — card titles. 32px at -1.28px and 28px at -1.12px are also used.
- **Body** — 20px/26px, 400, -0.4px (the most common tracked size, 1,664 characters).
- **Button** — 14px/20px, 500, -0.28px. **Button-secondary** — 15px, 400.
- **Chip** — 14px/21px, weight 460 (the body element's own weight is 460 too — the variable font allows in-between weights).
- **Eyebrow** — Replit Diatype Mono 13px, 500, uppercase, +1.56px ("FREE MODE", "INFINITE CANVAS").
- **Nav** — 14px, 400.

Display tracking is extremely tight (-0.06em) at regular weight; that combination is the brand's typographic signature. Replit Diatype is the company's own typeface; if it is unavailable, a neutral grotesque at weight 400 with heavy negative tracking is the closest substitute.

## Layout

Measured at 1280px. The page is one continuous #faf6f1 band 6,307px tall. Feature cards are 616px wide (2 per row) with 40px padding; platform cards are 4 across; the template gallery shows 4 per row; pricing has 4 tiers; the footer 4 link columns plus a brand column. The hero is centred.

Gaps: 8px (201 times), 16px, 2px, 12px, 24px, 4px, 80px, 32px, 48px. Paddings: 24px, 4px, 16px, 8px, 12px, 40px, 32px, 17px, 11px, 10px, 28px. Sections are separated by about 80px gaps; within them, cards sit on a tight 16px grid.

## Elevation & Depth

Very light. Chips use a 1px inset ring `rgb(219, 217, 211)` plus `rgba(0, 0, 0, 0.02) 0px 1px 2px 0px`; one input uses a 1px `rgb(216, 224, 228)` inset ring. The CSS defines an overlay shadow `--shadow-overlay: 0px 8px 16px -4px #00000014, 0px 24px 48px -12px #0000001a` for menus and popovers. Depth on the page comes from color — peach, coral, orange-gradient and dark cards against the off-white canvas — and from the prompt box's soft orange glow. Hovering "Create account" drops it to 75% opacity.

## Shapes

Radii: 16px (24 elements), 9999px pills (15), 8px (buttons, 14), 6px (chips and inputs, 13), 24px (feature cards, 8), 12px, 28px, 20px, 100px, 7px, 4px. Large cards are very round (24px) while controls stay at 6–8px. Template thumbnails are rounded rectangles; the pricing tier for the free plan is outlined in orange.

## Components

- **Primary button** — #ff3c00, white Replit Diatype 14px/500, 8px radius, 38px tall, 8px 12px padding ("Create account"); hover 75% opacity.
- **Large primary** — #ff3c00 with #ff3c00 border, 15px/400, 8px radius, 45px tall, 12px 24px ("Start for free"); 52px tall with 0px 24px padding for "Get started for free".
- **Outlined button** — transparent, `1px solid #ff3c00`, orange 14px/500 label, 8px, 44px ("Try Free Mode").
- **Prompt box** — white, large rounded rectangle with placeholder text and a round orange send button; mode icons below.
- **Chip** — #efeeec, #212225 text 14px/460, 6px radius, 32px tall, inset ring; hover #e7e6e2.
- **Feature card** — 24px radius, 40px padding, mono uppercase eyebrow, 36px title, short text, illustration.
- **Template tile** — rounded image thumbnail with filter tabs above (pill tabs, the active one dark).
- **Pricing tier** — white card with plan name, large price, feature checklist and a full-width button; the free tier outlined in orange.
- **Footer** — #faf5f0, logo and tagline, Product / Resources / Company / Legal columns, social icons.

## Design System Architecture

Replit has a brand page at https://replit.com/brand (title "Replit Brand Guidelines, Logos & Assets | Replit"), but it renders its content client-side and the fetched HTML contained only the title, so no guidance could be read from it; https://replit.com/brand-kit returned HTTP 404. The shipped CSS shows a semantic token system in HSL: `--brand-surface-color-600`, `--brand-off-white-surface-color-600`, `--default-text-color-1300`, `--text-input-text-color--100`, `--notice-surface-color--100`, `--notice-text-color--900`, `--warning-text-color-100`, `--destructive-text-color-400`, `--interactive-border--hover: #AFB1B3`, and composed shadows (`--shadow-overlay`, `--shadow-overlay-overlay-border` using `color-mix(in srgb, currentColor 10%, transparent)`). Tokens are named by role (brand, default, notice, warning, destructive), property (surface, text, border) and a numeric step, with negative steps (`--100`) alongside positive ones. Breakpoints: 480, 640, 768, 900, 1024 and 1200px.

## Do's and Don'ts

**Do**
- Use Replit Diatype at weight 400 with very tight tracking (-0.06em) for display sizes.
- Keep the canvas warm off-white #faf6f1 and text warm #312e2e.
- Use #ff3c00 for every primary action; 8px radius.
- Build feature cards at 24px radius in peach/coral/orange or dark fills.
- Lead with the prompt input rather than a hero image.
- Label sections with uppercase mono eyebrows.

**Don't**
- Don't bold headlines; measured headings are weight 400.
- Don't use pure white for the page; white is for cards.
- Don't use cool blue or grey accents.
- Don't round buttons into pills; pills are for tabs and small badges.
- Don't add heavy shadows to cards.

## Responsive Behavior

Measured at a 390px viewport: the h1 drops from 64px to 32px/32px with -1.92px tracking, and the h2 from 68.92px to 32px/32px at -1.92px. Body text stays 20px/26px. The first primary button on mobile is "Start for free" at 45px tall and 276px wide with 12px 24px padding. The header is 64px with 1 visible header link and a visible "Open mobile navigation" toggle, as recorded by the mobile pass. Content spans x=66 to x=316 in the single measured band, and the mobile page is 8,664px tall versus 6,307px on desktop. Card and gallery arrangement on mobile were not measured.

## Iteration Guide

1. Set #faf6f1 canvas and Replit Diatype throughout; #312e2e text.
2. Make the hero a centred 64px/400 question with -3.84px tracking and a large prompt box.
3. Add example chips (#efeeec, 6px, 32px) under the prompt.
4. Build features as 24px-radius cards in peach, coral, gray and dark fills with mono eyebrows.
5. Use #ff3c00 8px-radius buttons; outlined orange for secondary.
6. Close with a centred CTA and a warm #faf5f0 footer.
7. Re-run the gate after edits.
