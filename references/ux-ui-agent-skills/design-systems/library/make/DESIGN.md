---
version: alpha
name: Make
category: "Productivity & SaaS"
description: "Make (make.com) runs a light, lavender-tinted marketing site set entirely in Satoshi: a 60px/500 display headline with -1.2px tracking in plum #342237, muted plum body copy #69586c on white #ffffff, violet #8f4bd2 'Try it free' buttons with 8px radius that darken to #803bbf on hover, 16px-radius feature cards and 1200px content inside a 1280px frame."
colors:
  canvas: "#ffffff"
  ink: "#69586c"
  primary: "#8f4bd2"
  on-primary: "#ffffff"
  surface-soft: "#fafafa"
  ink-strong: "#342237"
  ink-secondary: "#58475a"
  black: "#000000"
  lavender: "#d8c0f6"
  hairline: "#dad4da"
  primary-hover: "#803bbf"
typography:
  display:
    fontFamily: Satoshi, Arial, sans-serif
    fontSize: 60px
    fontWeight: 500
    lineHeight: 72px
    letterSpacing: "-1.2px"
  display-mobile:
    fontFamily: Satoshi, Arial, sans-serif
    fontSize: 41.4583px
    fontWeight: 500
    lineHeight: 49.75px
    letterSpacing: "-0.829167px"
  heading:
    fontFamily: Satoshi, Arial, sans-serif
    fontSize: 36px
    fontWeight: 500
    lineHeight: 43.9992px
    letterSpacing: "-0.72px"
  card-title:
    fontFamily: Satoshi, Arial, sans-serif
    fontSize: 24px
    fontWeight: 500
    lineHeight: 31.9992px
  body:
    fontFamily: Satoshi, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 5px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 24px
  2xl: 28px
  3xl: 32px
  4xl: 100px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 6.5px
  s5: 8px
  s6: 10.5px
  s7: 11px
  s8: 12px
  s9: 16px
  s10: 18px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 10.496px 18px
    height: 47px
    borderColor: "{colors.primary}"
    boxShadow: rgba(10, 13, 18, 0.05) 0px 1px 2px 0px, rgba(10, 13, 18, 0.05) 0px -2px 0px 0px inset, rgba(10, 13, 18, 0.18) 0px 0px 0px 1px inset, rgba(255, 255, 255, 0.12) 0px 0px 0px 2px inset
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 10.496px 18px
    height: 47px
    borderColor: "{colors.primary}"
    boxShadow: rgba(10, 13, 18, 0.05) 0px 1px 2px 0px, rgba(10, 13, 18, 0.05) 0px -2px 0px 0px inset, rgba(10, 13, 18, 0.18) 0px 0px 0px 1px inset, rgba(255, 255, 255, 0.12) 0px 0px 0px 2px inset
  button-outline:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 10.496px 18px
    borderColor: "{colors.hairline}"
    boxShadow: rgba(10, 13, 18, 0.05) 0px 1px 2px 0px, rgba(10, 13, 18, 0.05) 0px -2px 0px 0px inset
  card:
    backgroundColor: "{colors.surface-soft}"
    textColor: "{colors.canvas}"
    typography: "{typography.card-title}"
    rounded: "{rounded.lg}"
    padding: 32px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
---

# Make

## Overview

Make is a visual workflow-automation and AI-agent platform, and its home page at make.com sells that product with a calm, bright, almost pastel surface. The measured page is 1280px wide and 12006px tall, with the page body painted white `#ffffff` and a single soft off-white `#fafafa` field behind most of the content bands. The hero is centred: a two-line 60px Satoshi headline ("Build and manage AI agents and automations in one visual landscape") in deep plum `#342237`, a short muted-plum paragraph underneath, then a pair of buttons — the filled violet "Try it free" and the white outlined "Talk to sales". Below the hero sits a large isometric product illustration: a lavender grid of workflow nodes floating on a pale purple field, which sets the art direction for the whole page.

The rest of the page alternates between centred section headlines and wide image-led modules: a logo strip ("Trusted by teams worldwide, from startups to global enterprises"), a bento grid of feature cards (Workflow Builder, Observability, Custom code, MCP Server, AI Agents, Make Grid), a row of circular integration app icons, a testimonial panel, security and governance modules, a photographic "One AI Automation platform" panel, a three-column "Choose how to get started" plan chooser, dark photographic customer-story cards with large white figures (300+, 30K+, $250M), an FAQ list and a closing call to action. The voice of the microcopy is direct and second-person: "Try it free", "Explore everything Make can do", "Read their story", "Browse integrations".

The palette is narrow and coherent. Purple carries every action; plum greys carry every word. There is no secondary accent colour in the measured text or background frequencies apart from the purple family, which keeps the page feeling like one product shot in one light.

## Colors

All colours below were measured from the rendered home page (`web/data/extracted/make.json`), and the purple and plum values also appear verbatim as named swatches in the site's own CSS custom properties.

- **canvas `#ffffff`** — the body background and by far the largest painted area (weight 17791 in background-by-area). The site's own variable for it is `--_default---swatch--neutral: white`.
- **surface-soft `#fafafa`** — the second-largest background (weight 1079); the soft field behind content bands and the base of the feature cards. It equals `--_default---swatch--neutral-50`.
- **ink `#69586c`** — the most-read text colour (2678 characters), used for body paragraphs, the logo-strip label and the second line of split headlines ("build with Make"). It equals `--_default---swatch--neutral-600`.
- **ink-strong `#342237`** — the headline plum (882 characters): the hero h1, the first line of section titles and the footer call to action. It equals `--_default---swatch--neutral-900`, which the site also aliases as `--_default---swatch--brand-text`.
- **ink-secondary `#58475a`** — a slightly darker muted plum used for supporting text (127 characters); `--_default---swatch--neutral-700`.
- **black `#000000`** — appears as text inside one light feature card ("Custom code").
- **lavender `#d8c0f6`** — light purple text (48 characters), equal to `--_default---swatch--brand-300`, which the site's link theme names `text-card-link` — the link colour on dark cards.
- **primary `#8f4bd2`** — the filled CTA colour. It equals `--_default---swatch--brand-600`, and `--_theme---button-primary--background` points at that swatch.
- **primary-hover `#803bbf`** — the CTA background after hover, measured by the hover probe and equal to `--_default---swatch--brand-700` (`--_theme---button-primary--background-hover`).
- **on-primary `#ffffff`** — CTA label colour.
- **hairline `#dad4da`** — the most frequent border colour (15 uses), the outline of the "Talk to sales" button; `--_default---swatch--neutral-300`.

The neutrals are not grey: every step of the `neutral` ramp (`#fafafa` to `#221528`) is tinted toward purple, which is why body text reads as plum rather than charcoal. Keep that tint when extending the palette. The site's CSS also declares a full `brand` ramp (`#faf7fe` through `#3a1559`) and a separate `accent` magenta ramp (`#fbf6fe` through `#460d5e`); only the brand values listed above were measured as rendered colours, so only those are tokens here.

## Typography

The whole page is set in one family, **Satoshi**, loaded as a single variable font file (`Satoshi-Variable.woff2`, weights 300–900) from the site's Webflow CDN; it accounts for all 4940 measured characters. The declared stack is `Satoshi, Arial, sans-serif`. The site also declares `Arial, "Helvetica Neue", Helvetica, sans-serif` as a secondary font and `"Geist Mono Latin 300"` as a tertiary font in its typography variables, but neither was measured in rendered text.

Only two weights render: 400 (3274 characters) and 500 (1666 characters). There is no bold in the measured page — hierarchy comes from size and colour, not weight.

- **display** — 60px / 500 / 72px line height, -1.2px tracking. The hero headline. The CSS variable `--_font-size---h1-desktop` is `3.75` (rem), matching 60px.
- **heading** — 36px / 500 / 43.9992px, -0.72px tracking. Section titles such as "Why 500,000+ teams build with Make" and the footer's "Bring automation and AI to your business". These titles are often split across two lines with the first line in `#342237` and the second in `#69586c`.
- **card-title** — 24px / 500 / 31.9992px. Feature-card titles ("Workflow Builder").
- **body** — 16px / 400 / 24px. Paragraphs, button labels and the small h2 above the logo strip, which is styled exactly like body text.

Other measured sizes in rotation: 14px (745 characters), 18px (552), 20px (465) and 30px (102). Negative tracking is applied only to the two largest sizes (60px at -1.2px and 36px at -0.72px, both -0.02em).

**Substitutes:** Satoshi is served from the site's own font file. When it is not available, use the site's declared fallback, Arial, and keep the weight at 400/500 and the negative tracking on display sizes.

## Layout

The measured content box runs from x=40 to x=1240 inside the 1280px viewport — a 1200px column with 40px side margins. The CSS declares `--_default---max-width--small: 50rem` for narrow text blocks. Section headlines and the hero are centre-aligned; content modules beneath them use two- and three-column grids (the extractor counted a maximum of 3 card columns on desktop).

Spacing is generous and fluid. The most common measured gaps are 12px (68 uses), 8px (57) and 16px (36), with 32px (32 uses) between larger groups and 64px and 96px for section-level separation. Cards and panels use 32px internal padding (the most common padding value, 37 uses). The site's spacing variables (`--_spacing---space--16`, `--space--32`, `--space--80`, `--space--112`) are `clamp()` expressions between a minimum and maximum viewport, so section spacing scales with width rather than stepping at fixed breakpoints.

Density is low: one idea per band, a big illustration or photograph per module, and short paragraphs capped at a few lines.

## Elevation & Depth

Depth is mostly built with soft inset shadows on controls rather than drop shadows on surfaces. The primary button carries a four-layer shadow: a 1px 2px outer shadow at 5% opacity, a -2px inset bottom edge at 5%, a 1px inset ring at 18% and a 2px inner white ring at 12% — giving the violet button a subtle pressed-glass edge. The outlined button uses only the first two layers.

Other measured shadows are a stacked soft shadow `rgba(0, 0, 0, 0.1) 0px 1px 2px 0px, rgba(0, 0, 0, 0.1) 0px 3px 3px 0px, rgba(0, 0, 0, 0.05) 1px 8px 5px 0px` with an inset top highlight (5 uses, on small floating UI chips inside illustrations), a single `rgba(0, 0, 0, 0.2) 0px 4px 8px 0px` (2 uses), and a 1px inset hairline `rgb(218, 212, 218) 0px -1px 0px 0px inset` used as a divider. Feature cards themselves have no shadow; they separate from the page by their tinted imagery and 16px radius. The site also declares `--card-hover-lift: -4px` in its root variables; the hover lift was not measured on a card.

## Shapes

Corners are consistently rounded and scale with element size:

- **8px (sm)** — buttons and small controls; the most frequent radius (36 uses), equal to `--_default---radius--small: .5rem`.
- **12px (md)** — mid-sized panels; `--_default---radius--medium: .75rem`.
- **16px (lg)** — feature cards and large modules (20 uses); `--_default---radius--main: 1rem`.
- **24px, 28px, 32px** — large image panels, including top-only rounding (`32px 32px 0px 0px`, `28px 28px 0px 0px`) on stacked panel tops.
- **100px (4xl)** and **pill** — fully round chips and avatars; the site's `--_default---radius--round` is `100vw`, which measured as 1280px on 7 elements.
- **5px (xs)** — one small element.

The integration icons sit in perfect circles; logos in the trust strip are unboxed.

## Components

**Primary button.** Violet `#8f4bd2` fill and border, white 16px/400 Satoshi label, 8px radius, `10.496px 18px` padding, 47px tall, with the four-layer inset shadow described above. On hover the fill moves to `#803bbf` while the border stays `#8f4bd2`. The same style is reused for every in-page action measured — "Explore everything Make can do", "Explore success stories", "Read their story", "Browse integrations" — so `button-secondary` in the tokens is identical to `button-primary`; there is no tonal secondary.

**Outline button.** White fill, `#69586c` label, 1px `#dad4da` border, 8px radius, same padding and height. Used for "Talk to sales" beside the hero CTA.

**Feature card.** `#fafafa` base, 16px radius, 32px padding, a 24px/500 title and short body, with a large product illustration or lavender gradient filling most of the card. Cards are set in a bento grid with mixed widths (584px and 276px measured).

**Customer story card.** Dark photographic cards with a person, the customer's logo at top left and a large white figure (300+, 30K+, $250M) with a supporting sentence beneath.

**Plan chooser.** Three columns ("Start a paid plan", "Try Make free", "Go Enterprise"), each with a short description and a button; the middle option uses the violet button.

**FAQ.** A two-column layout with "Questions? We've got answers." on the left and a list of questions with circular expand icons on the right.

**Footer.** White background, plum `#342237` text, a centred closing CTA with the Make logo above it, then a multi-column link list.

## Design System Architecture

Make publishes brand guidance on its press page (https://www.make.com/en/press), which links a brand-guidelines PDF (https://cdn.make.com/cms/documents/brand-guidelines.pdf), a logo kit and an app-icon pack. The PDF is a logo manual: primary logo, clearspace of one "m", a 96px / 12mm minimum width, and rules that the full-colour logo may only sit on "100% Sand" or a "20% tint of Make Pink" (solid or as the two lightest gradients), with black or white secondary logos everywhere else. It names those colours but does not give hex values, and it does not document UI components or web typography.

No public UI design system or token package was found. The de-facto web system is visible in the site's shipped CSS custom properties (274 root variables), which follow a Webflow "client-first"-style naming scheme in three layers: raw swatches (`--_default---swatch--brand-600`, `--_default---swatch--neutral-900`, `--_default---swatch--accent-500`), semantic theme variables that point at them (`--_theme---button-primary--background`, `--_theme---text-link--text`, `--_theme---feature-card--border-outer`), and fluid type and space scales (`--_font-size---h1-desktop: 3.75`, `--_font-size---h1-mobile: 2.5`, `--_spacing---space--32` as a `clamp()`). Radii are named `small`, `medium`, `main` and `round`. When extending the system, add to the swatch layer first and route components through theme variables, as the site does.

## Do's and Don'ts

**Do**
- Use `#8f4bd2` for every filled action, and `#803bbf` for its hover.
- Set all text in Satoshi at 400 or 500; use size and the two plums (`#342237`, `#69586c`) for hierarchy.
- Split long section titles into two lines, darker plum first, muted plum second.
- Keep buttons at 8px radius and cards at 16px.
- Use soft lavender, isometric or gradient illustrations and real product UI in cards.
- Keep the inset edge shadow on buttons — it is part of the button's look.

**Don't**
- Don't introduce a neutral grey; the measured neutrals are all purple-tinted.
- Don't use bold (700+) weights; none were measured on the page.
- Don't add drop shadows to feature cards.
- Don't recolour, rotate or re-letter the logo, or place the full-colour logo on colours other than those the brand guidelines allow.
- Don't use the magenta `accent` ramp as a second CTA colour; it was not measured as rendered UI.

## Responsive Behavior

Only the extractor's 390px mobile pass is described here. At 390px the hero headline measured 41.4583px / 500 with a 49.75px line height and -0.829167px tracking (the CSS clamps between `--_font-size---h1-mobile: 2.5` and the 3.75rem desktop value). Section headings measured 28.5833px, and body text stayed at 16px / 24px. The content box measured 16px side margins (x=16 to x=374) and the extractor counted 1 card column. The "Try it free" button measured 358px wide at mobile — the full content width — with the same 47px height, 8px radius and padding as desktop. Navigation behaviour at mobile (menu toggle, link visibility) was not recorded by the extractor; breakpoints were not measured.

## Iteration Guide

1. Start from white `#ffffff` with `#fafafa` bands; set text in Satoshi, body 16px/24px in `#69586c`.
2. Hero: centred 60px/500 headline in `#342237` with -1.2px tracking, a short paragraph, then the violet primary button next to the white outline button.
3. Section titles: 36px/500, -0.72px tracking, centred, optionally split into dark and muted lines.
4. Cards: 16px radius, 32px padding, `#fafafa` base, 24px/500 title and a large illustration.
5. Any new colour must come from the purple-tinted neutral or brand ramps in the site's CSS; verify it against a measurement before adding it as a token.
6. Re-run the gate after every change to tokens: `node web/scripts/verify-designs.mjs --slug=make`.
