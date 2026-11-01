---
version: alpha
name: Documenso
category: "Product & SaaS"
description: "Documenso.com home: white #ffffff canvas, Inter 44px/600 headlines (-0.88px) in #171717 over #4d4d4d body text, lime #a2e771 6px-radius buttons with dark-green #1f3d0a labels (hover #6bbd36), deep forest #101f05 bands with mint #c9f1ac headings, PT Mono code panels, #fbfbfb 18px-radius feature cards and a near-black #0f0f0f footer."
colors:
  canvas: "#ffffff"
  ink: "#4d4d4d"
  ink-strong: "#171717"
  ink-muted: "#919191"
  ink-code: "#bdbdbd"
  primary: "#a2e771"
  on-primary: "#1f3d0a"
  primary-hover: "#6bbd36"
  primary-hover-sm: "#5cb31e"
  eyebrow-green: "#18ab46"
  mint: "#c9f1ac"
  mint-tint: "#daf5c6"
  surface-soft: "#fbfbfb"
  surface-forest: "#101f05"
  surface-black: "#0f0f0f"
  card-dark: "#3b3b3b"
  hairline: "#e7e7e7"
typography:
  display:
    fontFamily: Inter, "Inter Placeholder", sans-serif
    fontSize: 44px
    fontWeight: 600
    lineHeight: 58px
    letterSpacing: "-0.88px"
  section:
    fontFamily: Inter, "Inter Placeholder", sans-serif
    fontSize: 30px
    fontWeight: 600
    letterSpacing: "-0.6px"
  body:
    fontFamily: "\"PT Mono\", monospace"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 17px
  button:
    fontFamily: Inter, "Inter Placeholder", sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
    letterSpacing: "-0.14px"
  link:
    fontFamily: Inter, "Inter Placeholder", sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: "-0.14px"
rounded:
  xs: 3.41px
  sm: 4px
  md: 6px
  lg: 8px
  xl: 9.1px
  2xl: 10px
  3xl: 16px
  4xl: 18px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 7px
  s7: 7.39px
  s8: 8px
  s9: 9px
  s10: 9.24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 10px 16px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-nav:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 6px 16px
    height: 32px
  button-nav-hover:
    backgroundColor: "{colors.primary-hover-sm}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  feature-card:
    backgroundColor: "{colors.surface-soft}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.4xl}"
  mock-card:
    backgroundColor: "{colors.card-dark}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.3xl}"
  forest-band:
    backgroundColor: "{colors.surface-forest}"
    textColor: "{colors.mint}"
  footer:
    backgroundColor: "{colors.surface-black}"
    textColor: "{colors.canvas}"
---

# Documenso

## Overview

This file documents the Documenso home page at `https://documenso.com/` (title "Documenso - The Open Source DocuSign Alternative"). The page is clean and product-forward. A white header has the circular Documenso logo and wordmark, links ("Solutions", "Enterprise", "Platform", "Self-Hosted", "Resources", "Developers", "Pricing" — dropdowns marked with chevrons), a white "Sign In" button and a lime "Sign Up". The hero is split: on the left, "Enterprise-Grade E-Signatures. For Everyone." in Inter 600, two short grey paragraphs and two buttons ("Get Started" lime, "Check out the Platform Plan" outlined); on the right, a dark embedded-signing mock-up ("Your App — Embed Documenso's signing experience to your application with ease.", a green "Start" button and a cursive signature) sitting on a lime dotted panel.

A deep forest-green strip follows with "Trusted by fast-growing companies around the world." and a scrolling logo row (Mautic, Cal.com, Citizen X, Orrick). Then a rounded forest-green panel with a dotted texture holds "What Our Customers Say" in mint, two white testimonial cards (Prisma, Vial) and square lime arrow buttons. "Do More With Documenso" presents feature cards — signing, API (with a code panel), teams, compliance ("21 CFR Part 11"), templates and direct links, integrations (Zapier, Vue) — followed by an FAQ ("Frequently Asked Questions" with "+" toggles), a nine-card "That's not all" grid, a centred closing CTA ("Ready to Supercharge Document Signing?") and a near-black footer with SOC 2 and HIPAA badges.

Illustration is built from the product itself: miniature signing dialogs, recipient chips, a compliance status pill reading "Compliant", integration logos and a JSON snippet, each cropped inside a soft card. Real people appear only as small round avatars beside testimonials.

The voice is plain and confident, with open-source credibility ("Open Company — Documenso is open source and we share our code, designs and metrics.").

## Colors

Backgrounds by area: `#ffffff` (5690), `#fbfbfb` (2135), `#101f05` (1284), `#0f0f0f` (923), `#3b3b3b` (571), `#e0ded3` (335), `#f7f4eb` (272), `#272727` (194), `#daf5c6` (183). Text by characters: `#4d4d4d` (2867), `#171717` (1665), `#bdbdbd` (1628), `#919191` (317), `#18ab46` (256). The capture is 67% near-white.

- **canvas `#ffffff`** — the page.
- **ink `#4d4d4d`** — body paragraphs and nav links. **ink-strong `#171717`** — headlines.
- **ink-muted `#919191`** — captions. **ink-code `#bdbdbd`** — code text in the API panel.
- **primary `#a2e771` / on-primary `#1f3d0a`** — lime buttons with dark-green labels. Measured hover: `#6bbd36` on "Get Started", `#5cb31e` on the header "Sign Up".
- **eyebrow-green `#18ab46`** — small uppercase labels above feature titles ("SIGNING", "API", "TEAMS", "COMPLIANCE").
- **mint `#c9f1ac`** — headline on the forest panel. **mint-tint `#daf5c6`** — light green fills.
- **surface-forest `#101f05`** — logo strip and testimonial panel.
- **surface-soft `#fbfbfb`** — feature cards. **surface-black `#0f0f0f`** — footer. **card-dark `#3b3b3b`** — the hero product mock-up.
- **hairline `#e7e7e7`** — card outlines.

## Typography

Fonts: Inter 400/500/600/700 (5562 chars) and PT Mono 400 (2260 chars, code panels). Both are open source. Special faces "Delight Mother" (a signature script) and Helvetica-Bold appear only inside the mock-up.

- **display** — Inter 44px / 58px, 600, -0.88px. Hero and the closing CTA.
- **section** — 30px, 600, -0.6px. "Do More With Documenso", "Frequently Asked Questions", "That's not all", "What Our Customers Say".
- **button** — Inter 14px / 20px, 500, -0.14px. **link** — Inter 14px / 20px, 400, -0.14px.
- **body** — the extractor's body role is the PT Mono 12px / 17px code text; prose paragraphs are Inter at 14–20px (14px/-0.14px on 1596 chars, 20px/-0.4px on 1086 chars).

Every Inter size carries slight negative tracking of roughly 1–2% (16px/-0.16px, 20px/-0.5px, 30px/-0.6px). Weights: 400 (5636), 600 (1872), 500 (310), 700 (32).

## Layout

Desktop capture: 1280px wide, 6264px tall. The header band is 144px including spacing; the hero band (586px) has the text column starting at x=120 and the mock-up bleeding off the right edge. The forest logo strip is 156px. The testimonial panel is inset (about 10px from each side) and rounded. Feature cards sit in a centred column in one- and two-column arrangements; the "That's not all" grid has three columns. Gaps: 8px (110), 16px (80), 10px (60), 9px (50), 4px (32). Paddings: 16px, 18px, 40px, 10px, 24px.

## Elevation & Depth

The signature element is a stacked "paper" shadow on cards: `rgba(23, 23, 23, 0.1) 0px 1.11765px 3.35294px 0px, rgb(227, 227, 227) 0px 6px 0px -1px, rgba(166, 166, 166, 0.4) 0px 6px 0px 0px` (20 uses), which draws a second sheet peeking out below each card. Outlines use `rgb(231, 231, 231) 0px 0px 0px 1px`; small elements use `rgba(23, 23, 23, 0.05) 0px 1px 2px 0px`. The hero mock-up and the forest panel add depth through colour contrast and dotted textures.

## Shapes

Measured radii: 70px (36 — round avatars and toggles), 18px (22 — feature cards), 16px (17 — mock-up panels), 3.41px (17 — scaled UI inside the mock-up), 6px (10 — buttons), 100% (9), 10px (9), 4px, 8px, 40px, 80px. Buttons are 6px; cards 16–18px; the testimonial arrow buttons are square lime tiles.

## Components

- **button-primary** — "Get Started": `#a2e771`, `#1f3d0a` Inter 14px/500, 6px radius, padding 10px 16px, 40px tall. Hover `#6bbd36`.
- **button-nav** — header "Sign Up": same colours, padding 6px 16px, 32px tall. Hover `#5cb31e`. "Sign In" is white with `#454545` text; hover `#f6f6f6`.
- **outlined button** — "Check out the Platform Plan": white with a thin grey outline.
- **feature-card** — `#fbfbfb`, 18px radius, paper-stack shadow, green uppercase eyebrow, `#171717` title, `#4d4d4d` text and a UI illustration.
- **mock-card** — `#3b3b3b`, 16px radius, white UI text; the dark product preview.
- **forest-band** — `#101f05` with mint headline and dotted texture; holds white 18px testimonial cards.
- **footer** — `#0f0f0f`, logo, social icons, compliance badges and link columns ("Solutions", "Help & resources", "Developers", "About", "Company", "Compliance", "Features").

## Design System Architecture

Documenso is open source (https://github.com/documenso/documenso — "The Open Source DocuSign Alternative."). Its README lists the product's UI stack as "shadcn/ui + Radix UI - Component Library" with "Tailwind CSS - CSS". A brand page was not found (documenso.com/brand returned 404). The marketing page itself ships 131 root variables named by UUID (`--token-b76d7218-…: #171717`, `--token-37361e10-…: #a2e771`, `--token-8aa1575b-…: #1f3d0a`, `--token-e41fc416-…: #101f05`), and its font stacks use "Inter Placeholder" fallbacks; the colour roles above are mapped from these values.

## Do's and Don'ts

- Do use lime `#a2e771` with dark-green `#1f3d0a` text for every primary action.
- Do pair white sections with one deep forest `#101f05` band.
- Do give cards the stacked-paper shadow and 18px corners.
- Do keep headlines Inter 600 with slight negative tracking.
- Do show code in PT Mono on dark panels.
- Don't put white text on the lime; the measured label is `#1f3d0a`.
- Don't use the lime as a large background; it appears on buttons, small tiles and the dotted hero panel.

## Responsive Behavior

Measured at 390px: the hero headline keeps 44px and -0.88px but its line height tightens from 58px to 38px; the Get Started button is unchanged (lime, 6px radius, 40px tall, 107px wide). The mobile pass recorded 0 visible header links and no menu toggle. Mobile font sizes by characters: 12px, 14px, 16px, 20px, 15px, plus scaled sizes inside the mock-ups (5.71px, 7px, 15.93px). Card stacking at mobile width was not measured.

## Iteration Guide

1. White canvas, `#171717` Inter 600 headline, `#4d4d4d` paragraphs.
2. Add one lime `button-primary` and an outlined secondary button.
3. Show the product in a dark `mock-card` on a lime dotted panel.
4. Insert a `forest-band` for logos and testimonials.
5. Build features as `feature-card`s with green eyebrows and the paper-stack shadow.
