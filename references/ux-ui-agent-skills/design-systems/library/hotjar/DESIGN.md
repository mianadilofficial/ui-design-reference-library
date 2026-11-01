---
version: alpha
name: Contentsquare
category: "Product & SaaS"
description: "Contentsquare's Hotjar landing page (where hotjar.com now redirects): white #ffffff and sage-white #f7f8f6 bands, near-black #0d0d0d ink, raspberry #cd3246 'Sign up free' buttons, wine #7c0033 and deep plum #440220 brand tones, NewEdgeRounded 48px/400 headlines over Inter 16px body, 8px cards."
colors:
  canvas: "#ffffff"
  page-largest: "#f7f8f6"
  ink: "#0d0d0d"
  primary: "#cd3246"
  on-primary: "#ffffff"
  surface-plum: "#440220"
  accent-wine: "#7c0033"
  accent-hotjar-orange: "#ff3c00"
  ink-charcoal: "#2f3335"
  ink-indigo: "#1c1263"
  accent-blue: "#3640e8"
  hairline: "#0d0d0d1a"
  card-bg: "#0d0d0d0d"
typography:
  display:
    fontFamily: __NewEdgeRounded_5045de, __NewEdgeRounded_Fallback_5045de, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 52.8px
  display-mobile:
    fontFamily: __NewEdgeRounded_5045de, __NewEdgeRounded_Fallback_5045de, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 28.8px
  heading:
    fontFamily: __Inter_da1787, __Inter_Fallback_da1787, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 22px
    fontWeight: 500
    lineHeight: 26.4px
    letterSpacing: "-0.22px"
  body:
    fontFamily: __Inter_da1787, __Inter_Fallback_da1787, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
  button:
    fontFamily: __Inter_da1787, __Inter_Fallback_da1787, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 16px
rounded:
  xs: 2px
  sm: 2.5px
  md: 4px
  lg: 4.6px
  xl: 8px
  2xl: 12px
  3xl: 16px
  4xl: 20px
  round: 128px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 7.2px
  s5: 8px
  s6: 10px
  s7: 11px
  s8: 12px
  s9: 13px
  s10: 14px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 44px
  button-primary-compact:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 40px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.surface-plum}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 96px 0px 128px
---

# Contentsquare (Hotjar landing page)

## Overview

hotjar.com no longer has its own site: it redirects to https://contentsquare.com/hotjar/, a Contentsquare page titled "Official Hotjar Site – Sign up for free". The page itself explains why — "You're in the right place. Hotjar is now Contentsquare." — and its FAQ states that "Hotjar is now part of Contentsquare. The two platforms have merged into a single, more powerful experience intelligence platform." This document therefore describes the Contentsquare design language as measured on that landing page.

The page is light, warm and friendly. A white header carries the stacked CONTENT/SQUARE wordmark, Platform, Solutions, Why Contentsquare, Resources and Pricing, an outlined "Book a demo" and a raspberry "Start for free" button. The hero is split: on the left, the headline in the rounded NewEdgeRounded face at 48px, weight 400 — "Hotjar" set in Hotjar's orange #ff3c00 and "Contentsquare." in wine #7c0033 — then a short intro, three bullets with small raspberry square markers ("Capture up to 200k sessions per month", "Get attention maps, funnels, and error monitoring", "Connect your favorite AI assistant (MCP)") and two buttons; on the right, a plum-framed product composite with a heatmap and an AI answer card. A sage-white logo strip (Bose, Harrods, Uber, Canyon, Pinecone, reMarkable, alo) follows.

The page continues with a comparison table ("Everything Hotjar offered, and a lot more. All included for free.") whose Contentsquare column is tinted pale pink with a plum header, an accordion-and-visual section ("Everything you need to understand your users") with a heatmap card and a plum funnel card on a pink panel, three AI cards ("Go beyond behavior insights": AI Summaries, Sense Chat, LLM Connect), an FAQ, and a deep plum #440220 closing band ("Get insights that transform") that flows into the footer.

The voice is reassuring and plain ("You're in the right place."), aimed at former Hotjar users.

## Colors

- **Canvas #ffffff** and **page-largest #f7f8f6** — white and a faint sage-white alternate as section backgrounds; #f7f8f6 is the largest painted area.
- **Ink #0d0d0d** — near-black, the most-read text color; **ink-charcoal #2f3335** for secondary text.
- **Primary #cd3246** — raspberry, the "Sign up free" and "Start for free" fill and the bullet markers.
- **On-primary #ffffff** — button labels and footer text.
- **Surface-plum #440220** — the closing band and footer, and the frame of the hero visual.
- **Accent-wine #7c0033** — headline highlight words ("Contentsquare.", "All included for free.").
- **Accent-hotjar-orange #ff3c00** — the word "Hotjar" in the hero headline, a nod to the former brand.
- **Ink-indigo #1c1263** and **accent-blue #3640e8** — small text and icon accents inside product mocks.
- **Hairline #0d0d0d1a** — 10% ink, the standard border; **card-bg #0d0d0d0d** — a 5% ink wash on accordion cards.
- Pale pinks #ffe3e3 and #ffbdbd tint the comparison column and feature panels.

The cookie banner (white card with "Cookies Settings") is a consent overlay and not part of the palette.

## Typography

Two faces are loaded through Next.js font aliases:

- **NewEdgeRounded** (`--font-NewEdgeRounded`, weight 400) — display only, a rounded sans. Display 48px / 52.8px; the closing statement reaches 72px; the FAQ title is 40px. Headlines are never bolded.
- **Inter** (`--font-Inter`, 400, 500, 600) — everything else. Heading 22px / 26.4px weight 500 with -0.22px ("Trusted and used by 1.3+ million websites"); body 16px / 22.4px weight 400; button 16px / 16px weight 500. 18px with -0.18px tracking is common for lead paragraphs; uppercase micro labels use 13.12px with 0.656px tracking.

The hero headline mixes three colors inside one NewEdgeRounded line, which is the page's main typographic gesture. For prototypes without the licensed rounded face, a rounded grotesk such as Nunito Sans or Varela Round approximates the display tone; Inter is the body face.

## Layout

At 1280px content spans 48px to 1232px; the hero splits 62px–637px text on the left and the visual on the right. The comparison table sits in a centred block (186px to 1094px). Feature sections use a two-column accordion-plus-visual layout; AI cards run three across; logo rows four or more. Five header items are visible on desktop.

Spacing: 20px is the most frequent padding (cards, table cells), then 14px, 24px and 48px; gaps are small (4px most often, then 16px and 24px). Sections are separated by 96px paddings, and the footer pads 96px top and 128px bottom.

## Elevation & Depth

Elevation is minimal: three shadows were measured — 5% black 0px 1px 2px, 12% black 0px 0px 8px, and 20% black 0px 0px 18px — on floating cards inside the hero visual and mocks. Sections rely on the white/sage alternation, pale pink panels and the deep plum frame for depth.

## Shapes

8px is the most common radius (accordion cards, table, panels), then 4px; 128px rounding was measured on eight elements; 12px, 16px, 2px, 2.5px and 4.6px appear on small parts; full pills (9999px) on tags such as "Funnels"; feature panels use 20px 20px 0px 0px and 0px 0px 20px 20px halves. The primary button anchor reports a 0px radius in the measurement; the capture shows the raspberry buttons with rounded ends, so check the live element before reproducing the corner.

## Components

- **Primary button** — #cd3246 fill, white Inter 16px weight 500, 44px tall in the hero ("Sign up free") and 40px in the header ("Start for free"); the label text appears twice in the DOM.
- **Outlined button** — white with #0d0d0d text and border ("Book a demo"); its label turns white on hover (measured).
- **Dark button** — #1a1c1e fill with white text, 44px ("Start for free" under the comparison table).
- **Bullet list** — small raspberry squares before each benefit line.
- **Comparison table** — 20px cell padding, #0d0d0d1a dividers, the Contentsquare column on pale pink with a plum header.
- **Accordion card** — #0d0d0d0d wash, 8px radius, #0d0d0d1a border, 22px weight 500 titles.
- **AI feature card** — white card with a small pink icon tile, title and short description.
- **Footer** — #440220, white text, CSQ monogram, link columns, language selector.

## Design System Architecture

No public design system or token package was found for the marketing site. Contentsquare publishes brand guidelines (logos, colors, typography and usage) at https://brand.contentsquare.com/ — linked from https://contentsquare.com/press/ as "Explore brand guidelines" — but the guideline pages are client-rendered and returned no readable values, so none are used here. The shipped CSS exposes only the font aliases `--font-NewEdgeRounded` and `--font-Inter` (Next.js font loader names such as `__Inter_da1787`) and a third-party `--swiper-theme-color`; colors are compiled into utility classes.

## Do's and Don'ts

**Do**
- Alternate #ffffff and #f7f8f6 sections with #0d0d0d text.
- Use raspberry #cd3246 for the primary action and bullet markers.
- Highlight key words in headlines with wine #7c0033 (or #ff3c00 when referencing Hotjar).
- Set headlines in a rounded sans at weight 400; keep body in Inter.
- Close the page with a deep plum #440220 band.

**Don't**
- Don't bold the display headlines.
- Don't use heavy shadows; the strongest measured is a 20% black 18px blur.
- Don't present the cookie banner or chat-like overlays as brand components.
- Don't reuse Hotjar's orange beyond the reference word.

## Responsive Behavior

The extractor's mobile pass at 390px measured: the h1 at 24px / 28.8px (NewEdgeRounded 400); the h2 at 17px / 20.4px weight 500 with -0.17px; body text at 15px / 21px; the primary button at 15px, 39px tall. One header item remains visible with a menu toggle labelled "Show menu"; cards measured two columns at most; content spans 20px to 370px and the plum band remains at the bottom. The stylesheet's media queries are chiefly min-width 768px and 1024px, plus 400px, 426px, 550px, 640px, 1280px and 1536px minimums and max-width 425px, 530px, 600px, 640px, 767px and 896px. Other behaviour was not measured.

## Iteration Guide

1. Alternate white and #f7f8f6 bands; set text in #0d0d0d.
2. Write the hero in a rounded sans at 48px / 400 with one or two colored words.
3. Use #cd3246 for primary buttons (44px hero, 40px header) and an outlined secondary.
4. Present plans and features with 8px cards, 20px padding and 10% hairlines.
5. Use pale pink panels and plum frames around product visuals.
6. End with a #440220 band and footer.
7. Check the 24px mobile headline and 15px body at 390px.
