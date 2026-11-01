---
version: alpha
name: Butter
category: "Product & SaaS"
description: "Butter (butter.video) is an online video editor whose marketing page is a near-white #fafafa canvas with #0f0f0f type at 40% and 50% opacity tiers, set in DieGrotesk at up to 99.8px with slightly positive tracking, rounded 20px to 32px cards in #ededed and near-black #0a0909, a 3D keychain hero, and monospaced eyebrow labels."
colors:
  canvas: "#fafafa"
  page-body: "#ffffff"
  page-largest: "#fafafa"
  ink: "#0f0f0f"
  primary: "#fafafa"
  surface-light-grey: "#ededed"
  surface-dark: "#0a0909"
  surface-dark-raised: "#151515"
  skip-link-bg: "#1e1e1e"
  ink-secondary: "#0f0f0f66"
  ink-tertiary: "#0f0f0f80"
  ink-faint: "#0f0f0f4d"
  text-on-dark: "#b6b6b6"
  hairline: "#212121"
  accent-blue: "#4dc5e5"
  accent-pink: "#f9abff"
  accent-green: "#63ad45"
  charcoal: "#3c3c3c"
typography:
  display:
    fontFamily: DieGrotesk, "DieGrotesk Fallback"
    fontSize: 99.8211px
    fontWeight: 400
    lineHeight: 99.0225px
    letterSpacing: 0.319427px
  display-mobile:
    fontFamily: DieGrotesk, "DieGrotesk Fallback"
    fontSize: 56.7263px
    fontWeight: 400
    lineHeight: 61.8317px
  heading:
    fontFamily: DieGrotesk, "DieGrotesk Fallback"
    fontSize: 56.1333px
    fontWeight: 400
    lineHeight: 54.4493px
    letterSpacing: 0.3368px
  heading-mobile:
    fontFamily: DieGrotesk, "DieGrotesk Fallback"
    fontSize: 32.4px
    fontWeight: 400
    lineHeight: 29.16px
    letterSpacing: 0.1944px
  subheading:
    fontFamily: DieGrotesk, "DieGrotesk Fallback"
    fontSize: 43.4316px
    fontWeight: 400
    lineHeight: 41.6943px
    letterSpacing: 0.347453px
  body:
    fontFamily: DieGrotesk, "DieGrotesk Fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 21px
    letterSpacing: 0.7px
  nav:
    fontFamily: DieGrotesk, "DieGrotesk Fallback"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  ui-label:
    fontFamily: ABCDiatype, "ABCDiatype Fallback"
    fontSize: 13.2702px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.477726px
rounded:
  xs: 5px
  sm: 8px
  md: 10px
  lg: 11px
  xl: 12px
  2xl: 16px
  3xl: 20px
  4xl: 22px
  5xl: 32px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 8px
  s4: 10px
  s5: 10.5px
  s6: 11px
  s7: 14px
  s8: 15px
  s9: 16px
  s10: 16.5px
components:
  nav-link:
    backgroundColor: "{colors.skip-link-bg}"
    textColor: "{colors.page-largest}"
    typography: "{typography.nav}"
    rounded: "{rounded.sm}"
    padding: 10px 14px
  nav:
    textColor: "{colors.page-largest}"
  card:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.text-on-dark}"
    typography: "{typography.ui-label}"
    rounded: "{rounded.5xl}"
    padding: 19px
  block-card:
    backgroundColor: "{colors.surface-dark-raised}"
    textColor: "{colors.text-on-dark}"
    typography: "{typography.ui-label}"
    rounded: "{rounded.lg}"
    padding: 59px 0px 55px
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.surface-light-grey}"
    textColor: "{colors.ink-tertiary}"
    padding: 160px 0px 60px
---

## Overview

Butter is an online video editor "engineered for creativity", and https://www.butter.video/ (title "Butter Video | Online Video Editor Engineered for Creativity") is its marketing home page, 1,280px wide and 13,382px tall in the desktop capture. The product is a timeline editor where users remix pre-built "blocks" (text effects, shaders, 3D) and write their own, so the page is a showcase of motion graphics set inside a restrained, almost empty layout. The first capture contained a cookie-consent overlay (a dark panel with toggles and a yellow "Accept all" button); the page was re-extracted afterwards and that overlay is not documented here.

The page is quiet and monochrome. The canvas is an off-white (`#fafafa`), type is a near-black (`#0f0f0f`), and hierarchy is built almost entirely from opacity steps of that one black (100%, 40%, 50%, 30%). All colour comes from the work shown: a glossy 3D keychain at the top (a chrome logo tag, a pink and a lime-green charm, an orange carabiner), neon-gradient effect thumbnails, and brand logos. Cards are very round (20px to 32px) and alternate between pure black or near-black (`#0a0909`) for editor UI and pale grey (`#ededed`) for light panels.

The capture, from the top: a floating header made of two light rounded plates, at the left the italic script "Butter" wordmark with a vertical dots menu, at the right "Login" and a dark "Try for free" pill; the keychain render hanging into the hero; the h1 "Engineered for Creativity" at 99.8211px in one line, with "Butter, the first video editor you can build on." beneath and a dark "Get Started" pill; a quiet line "Teams from top brands and agencies build with Butter" in grey over a row of customer logos (The Atlantic, Ritual, IDEO, hims & hers, HARRY'S, grüns, OLIPOP, OLLY, airbnb); a large statement ("Butter is the first video editor where creatives can build and remix custom design tools right on timeline.") with irregular gaps between words; a rounded black timeline mock-up carrying five effect tiles; feature rows with tiny monospaced eyebrow labels ("Explore features", "Create in 3 ways", "Get the look"), headings like "Your new all-in-one video editor.", a four-up Import / Edit / Enhance / Ship grid of rounded cards, a "Remix / Describe / Code" list in which the inactive items are grey, two light-grey panels ("Turn anything into everything.", "High performance. Totally programmable."), a "Get the look" strip of black rounded-square block thumbnails with "All Blocks & Templates" in a pale pill; and a `#ededed` footer in four link columns (Explore, Socials, Resources, Legal) under a giant cropped black "Butter" wordmark.

Voice is confident and compact: short declaratives ("Engineered for Creativity", "Import", "Edit", "Enhance", "Ship"), and product-led copy such as "Drop in photos, videos, audio, and assets from anywhere, instantly."

## Colors

- **Canvas `#fafafa`.** The body and the largest background area (5,247 units); it is the site's `--butter-white`. `#ffffff` is a secondary page colour.
- **Light grey `#ededed`.** Footer background, hero gradient base, light panels and pills (2,786 units); it is `--butter-light-grey`. The stylesheet also declares `--butter-light` `#ebebeb`, `--butter-dark-grey` `#e2e2e2` and `--butter-off-white` `#f7f7f7`.
- **Ink `#0f0f0f`.** Headlines and primary text (2,431 characters), the site's `--butter-true-black`. Secondary tiers are the same black at alpha: `#0f0f0f66` (2,146 characters, body paragraphs and inactive list items), `#0f0f0f80` (140, footer column labels) and `#0f0f0f4d` (210).
- **Dark surfaces.** `#0a0909` (385 units) is the editor-UI card, `#151515` (287) the block thumbnail card with a `#212121` hairline, `#2e2e2e` (10) a lighter dark. Text on them is `#b6b6b6` (90 characters).
- **`#1e1e1e`.** The fill of the skip-to-content link (the only dark-filled control the extractor recorded) and a text colour on 404 characters.
- **Accent palette (declared).** `--butter-blue` `#4dc5e5`, `--butter-pink` `#f9abff`, `--butter-green` `#63ad45` and `--butter-charcoal` `#3c3c3c` are declared on `:root`; their on-screen use was not mapped, though the keychain render shows pink and green.

The generated `primary` is `#fafafa`: the extractor found no call-to-action button, and the dark "Try for free" and "Get Started" pills in the capture have no recorded fill (their wrapper elements and pseudo-elements report no background in computed style), so no brand action colour is asserted beyond this. The yellow of the consent dialog's "Accept all" button is a cookie control, not a brand colour.

## Typography

**DieGrotesk** (400, with a declared `"DieGrotesk Fallback"`) sets all headlines, body text and navigation, 5,045 of the page's characters; `--butter-font-primary` names it. **ABCDiatype** (400, with `"ABCDiatype Fallback"`; `--butter-font-secondary`) sets 532 characters of small UI labels (13px and 13.2702px). The CSS also references `var(--font-abcd-mono)` 13 times; the eyebrow labels in the capture are monospaced, but which family renders them was not recorded. Weight is 400 everywhere (5,577 characters).

Scale: h1 99.8211px/99.0225px with +0.319427px tracking; h2 (the statement) 56.1333px/54.4493px with +0.3368px; h3 43.4316px/41.6943px with +0.347453px; body 16px/21px with +0.7px; navigation 18px/27px. Other sizes by characters: 16px 1,860, 20.6351px 1,548 (+0.680958px), 56.1333px 836, 13.2702px 490, 43.4316px 358, 13px 210, 23.8105px 138, 39.2857px 72, 99.8211px 50. Tracking is slightly positive at every size. The mobile pass (390px) measured h1 56.7263px/61.8317px, h2 32.4px/29.16px, 20.0105px, 12.0211px and 32.1895px as the other main sizes.

No foundry or licence page was opened, so the substitutes recorded are the declared fallbacks only.

## Layout

A 1,280px canvas with a 1,160px content column (the hero content block measures 1,160px wide, the h1 1,004px). Sections are separated by very large empty bands: the hero content block has `200px 0px 140px` padding (measured in a probe), 140px was measured on six elements and the footer has `160px 0px 60px`. Measured gaps: 10px (48 elements), 25px (24), 16px (18), 15px, 27px, 26px and 5px (8 each). Measured paddings: 50px (32), 59.9298px (14), 8px (11), 140px (6), 30px (5).

Features sit in a four-column card grid; the two-up "Turn anything into everything" panels, the "Remix" and "Get the look" rows are two-column splits with a card at one side and text at the other. The bottom of the page is a rounded sheet in `#fafafa` lying over the `#ededed` footer.

## Elevation & Depth

Flat. The extractor found no box shadows on screen. Depth comes from tone (black cards on pale grey, pale cards on near-white), huge radii, overlapped UI mock-ups that bleed off the right edge of their cards, and light rounded plates for the header. The shipped CSS declares inset ring shadows (`inset 0 0 0 1px rgba(0,0,0,0.15), 0 1px 1px -1px rgba(0,0,0,0.15)`, 4 declarations) and `0 8px 16px 4px rgba(0,0,0,.2)` (2); where they apply was not mapped.

## Shapes

Radii measured on the page: 8px on 29 elements, 20px and 22px on 24 each, 32px on 23, 16px on 8, 11px on 4, 50px on 4, 10px on 3, 12px on 2. The editor-UI cards are 32px, the block thumbnails 11px, small controls 8px, light panels 20px to 22px, circles 50px. Edges are always soft; the block thumbnails are rounded squares.

## Components

- **Skip link / dark button style.** `#1e1e1e` fill, `#fafafa` 18px/27px text, 8px radius, `10px 14px` padding, 47px tall; this is the one dark-filled control recorded.
- **Floating header.** Two light rounded plates over the hero: wordmark and menu dots at the left; "Login" and a dark "Try for free" pill at the right (the right plate measured 200px by 60px, `#ededed`, 16px radius, `10.5px 12px 10.5px 22px` padding in a separate probe).
- **Pale pill link.** "View All Features" and "All Blocks & Templates" are light-grey pills with an arrow icon.
- **Editor card.** `#0a0909`, 32px radius, 19px padding, ABCDiatype 13px/13px with 0.468px tracking and `#b6b6b6` text, measured 469px by 821px.
- **Block card.** `#151515`, `1px solid #212121`, 11px radius, `59px 0px 55px` padding, 213px by 336px, 13.2702px labels ("Inflate", "Glow").
- **Feature card.** Black or `#ededed` rounded square image area, then a title ("Import") and a grey description at 40% ink.
- **Customer logo row.** Grey caption and a single row of monochrome logos.
- **Footer.** `#ededed`, `160px 0px 60px` padding, four link columns with tiny monospaced headings, and a giant black wordmark cropped at the bottom edge.

## Design System Architecture

No public design system or brand guidelines for Butter were found: the home page at https://www.butter.video/ links to product, pricing, contact, blog, terms, the app at app.butter.video, a Figma community plugin ("Figma to Butter") and social profiles, none of which is a brand or token page. The page is a Next.js build (`_next` paths in the HTML) whose component class names follow the pattern `index-style__ButtonMain-sc-482eeec2-0` (for example `ButtonMain`, `HeaderRight`, `FeatureCardsCta`, `PageBackgroundMain`, `SplitTextWrapper`).

The `:root` declares a small, named palette: `--butter-white` `#FAFAFA`, `--butter-off-white` `#F7F7F7`, `--butter-light` `#EBEBEB`, `--butter-light-grey` `#EDEDED`, `--butter-dark-grey` `#E2E2E2`, `--butter-charcoal` `#3C3C3C`, `--butter-true-black` `#0F0F0F`, `--butter-blue` `#4DC5E5`, `--butter-pink` `#F9ABFF`, `--butter-green` `#63AD45`; two easings (`--butter-ease-out: cubic-bezier(0.200, 0.715, 0.205, 0.990)`, `--butter-ease-in-out: cubic-bezier(0.835, 0.120, 0.225, 0.770)`); and the two font stacks. The root also holds `--leva-*` and `--perf-*` variables: those belong to a debugging GUI library and a performance overlay, not to the brand, and are excluded from the tokens.

## Do's and Don'ts

Do:
- Keep the page near-monochrome: `#fafafa` canvas, `#0f0f0f` ink, with 66, 80 and 4d alpha tiers for secondary text.
- Set display text large (99.8211px) with slightly positive tracking and weight 400.
- Use 20px to 32px radii on cards and soft rounded-square thumbnails.
- Alternate near-black editor-UI cards (`#0a0909`) with `#ededed` panels.
- Let the product imagery (3D renders, effect tiles) carry the colour.
- Use tiny monospaced eyebrow labels above sections.

Don't:
- Don't use bold weights; all measured text is 400.
- Don't add drop shadows; none were measured on screen.
- Don't use the cookie dialog's yellow or its dark panel as brand UI.
- Don't use `--leva-*` or `--perf-*` values (debug tooling) as tokens.
- Don't colour headings; accents live in imagery, not type.

## Responsive Behavior

Measured at 390px: h1 56.7263px/61.8317px in a 339px-wide box, h2 32.4px/29.16px (+0.1944px) in a 339px-wide box, body 16px/21px (+0.7px) in a 279px-wide box, and the header block 76px tall with a "Close" control in its text. Mobile character counts by size: 16px 1,772, 20.0105px 1,548, 32.4px 836, 12.0211px 490, 32.1895px 358, 20.0632px 138, 26.0417px 72, 56.7263px 50. Column counts, card reflow and the behaviour of the floating header and mock-ups on mobile were not measured.

## Iteration Guide

1. Set canvas `#fafafa`, ink `#0f0f0f`, light grey `#ededed`, dark surface `#0a0909`.
2. Load DieGrotesk for text and ABCDiatype for small UI labels; apply +0.7px tracking to 16px body text.
3. Build the hero: floating header plates, a one-line 99.8211px h1, a 23.8105px subtitle and a dark pill.
4. Build a four-up feature grid with 32px-radius cards and 40%-ink captions.
5. Add the dark editor card (`#0a0909`, 32px) and block cards (`#151515`, 11px, 1px `#212121`).
6. Finish with the `#ededed` footer in four columns and run `node web/scripts/verify-designs.mjs --slug=butter`, then compare with `web/data/captures/butter.jpg`.
