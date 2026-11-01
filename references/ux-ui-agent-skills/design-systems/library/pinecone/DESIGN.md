---
version: alpha
name: Pinecone
category: "Backend, Database & DevOps"
description: "Pinecone, the vector database and AI knowledge platform: #fbfbfc and #ffffff canvases, warm near-black #1c1917 headings over #57534e body text, electric blue #002bff square CTAs (0px radius, hover #222160), gtPlanar at 44px/700 and 16px/24px, JetBrains Mono code tabs, and 1px #e7e5e4 hairline grids."
colors:
  canvas: "#fbfbfc"
  page-largest: "#ffffff"
  ink: "#1c1917"
  ink-secondary: "#57534e"
  primary: "#002bff"
  on-primary: "#ffffff"
  primary-hover: "#222160"
  primary-tint: "#002bff0d"
  ink-slate: "#4b5563"
  ink-deep: "#111827"
  ink-tertiary: "#a8a29e"
  ink-faint: "#9ca3af"
  hairline: "#e7e5e4"
  border-slate: "#cbd5e1"
  border-cool: "#e2e8f0"
  success-green: "#22c55e"
typography:
  display:
    fontFamily: gtPlanar, "gtPlanar Fallback"
    fontSize: 44px
    fontWeight: 700
    lineHeight: 48.4px
    letterSpacing: "-0.88px"
  heading:
    fontFamily: gtPlanar, "gtPlanar Fallback"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 38.4px
    letterSpacing: "-0.6px"
  heading-mobile:
    fontFamily: gtPlanar, "gtPlanar Fallback"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 28.8px
    letterSpacing: "-0.6px"
  subheading:
    fontFamily: gtPlanar, "gtPlanar Fallback"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 28px
  body:
    fontFamily: gtPlanar, "gtPlanar Fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: gtPlanar, "gtPlanar Fallback"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 21px
  tab:
    fontFamily: gtPlanar, "gtPlanar Fallback"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  code-tab:
    fontFamily: "\"JetBrains Mono\", \"JetBrains Mono Fallback\""
    fontSize: 13px
    fontWeight: 400
    lineHeight: 19.5px
rounded:
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 3px
  s3: 4px
  s4: 6px
  s5: 7px
  s6: 8px
  s7: 9px
  s8: 10px
  s9: 11px
  s10: 12px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8px 16px
    height: 39px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.canvas}"
  button-dark:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 10px 20px
    height: 43px
    borderColor: "{colors.hairline}"
  button-outline:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8px 12px
    height: 39px
    borderColor: "{colors.hairline}"
  tab-active:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.tab}"
    rounded: "{rounded.none}"
    padding: 6px 16px
    height: 32px
  tab-inactive:
    textColor: "{colors.ink-secondary}"
    typography: "{typography.tab}"
    rounded: "{rounded.none}"
    padding: 6px 16px
  code-tab-active:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.code-tab}"
    rounded: "{rounded.none}"
    padding: 8px 14px
    height: 38px
    borderColor: "{colors.ink}"
  nav:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    borderColor: "{colors.hairline}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 10px 16px
    height: 46px
    borderColor: "{colors.hairline}"
  footer:
    textColor: "{colors.ink-tertiary}"
    rounded: "{rounded.none}"
    borderColor: "{colors.hairline}"
---

## Overview

Pinecone builds a fully managed vector database and now positions itself as "The trusted AI knowledge company" (the page title). The measured home page (https://www.pinecone.io/, 5,628px at a 1280px viewport) is a precise, engineer-friendly layout: off-white surfaces, warm near-black type, one saturated electric blue, square corners everywhere, and thin hairlines that divide the page into a visible grid. It feels like a well-designed developer console rather than a marketing brochure.

The capture shows a blue announcement strip ("Pinecone Bring Your Own Cloud is Now Generally Available"), a white header with the Pinecone logo, five nav items and a blue "Start for free" button, then a "SELECT EXPERIENCE: Builder | Business Leader" toggle. The hero reads "Give agents **knowledge**" with the last word in blue, beside a dotted halftone pattern that fades to the right. Below: a customer logo row (Workday, L'Oréal, Microsoft, Mercado Libre, OpenAI, Cohere); "One API key. Every way you build." with code tabs (Claude Code, Cursor, Copilot, Codex, Gemini, CLI, MCP, API) and a terminal snippet; a cost estimator built from sentence-style selects ("I'm building a RAG pipeline for a production app"); "The knowledge engine for agents" with big blue statistics ("97%", "30x", "94%"); a live-looking console screenshot with charts; "How Pinecone works" in three numbered columns (01 · Write, 02 · Index, 03 · Query); enterprise trust cards (Governed, Compliant, Reliable); a closing CTA; a newsletter field; and a five-column footer.

Microcopy is short, technical and confident: "<100ms acknowledgment", "Automatic, no tuning required", "Consistent at any scale".

## Colors

Pinecone's CSS defines named colour variables, and the measured values match them:

- **Canvas `#fbfbfc`** (`--background`) — the body background and the main page band.
- **Page largest `#ffffff`** (`--color-paper`) — the header, panels and cards; the largest painted area (4,726).
- **Ink `#1c1917`** (`--text-primary`) — headings and strong text (1,249 characters), also the fill of the dark "Start building" button and the active code tab.
- **Ink secondary `#57534e`** (`--color-text-secondary`) — the most-read colour (1,432 characters), for paragraphs.
- **Primary `#002bff`** (`--primary-main`, `--color-brand-blue`) — the announcement strip, CTAs, the active experience tab, highlighted words and big statistics. Hover turns the button **`#222160`** (`--color-primary-dark`) with #fbfbfc text.
- **Primary tint `#002bff0d`** — a 5% blue wash used behind small highlights.
- **Ink tertiary `#a8a29e`** (`--color-tertiary`) — footer text and eyebrows.
- **Ink slate `#4b5563`**, **ink deep `#111827`** and **ink faint `#9ca3af`** — cool greys used inside the console screenshot and code areas.
- **Hairline `#e7e5e4`** (`--border`, `--color-border`) — the dominant border (42 uses) on the header, cards, inputs and section dividers; **border slate `#cbd5e1`** and **border cool `#e2e8f0`** are secondary rules.
- **Success green `#22c55e`** — small status indicators.

The CSS also declares `--color-brand-violet` #3d11a0, `--color-navy2` #1a194c, `--color-alpha6` #8cf1ff and status colours (`--success` #15b077, `--error` #e31957, `--warning` #dd815d), which do not appear as measured areas on this page.

## Typography

Two families:

- **gtPlanar** (`--font-gt-planar`) — a crisp geometric grotesque for everything except code: 4,168 measured characters. The h1 is 44px/48.4px at 700 with -0.88px tracking (`--text-h1` 2.75rem); h2 32px/38.4px at 700 with -0.6px; h3 20px/28px at 700; body 16px/24px at 400; buttons 15px/21px at 400; tabs 14px/20px at 500.
- **JetBrains Mono** (`--font-mono`, loaded 100-800) — code, the code tabs (13px/19.5px), and small uppercase eyebrows such as "GET STARTED", "PINECONE NEXUS" and "ARCHITECTURE". The letter-spacing table shows many small sizes with positive tracking: 11px/0.6px, 12px/1.8px, 14px/1.8px, 10px/1px.

Weights split clearly: 700 for headings, 400 for reading and buttons, 500-600 for tabs and labels. Body copy has no tracking; headings are slightly tightened (-2%). JetBrains Mono is open source; gtPlanar is a custom webfont with only a metric "gtPlanar Fallback" face declared.

## Layout

The page is a single long band of #fbfbfc with content between about 105px and 1183px, organised on a visible grid: each section is a white panel framed by #e7e5e4 hairlines, often split into columns by more hairlines. The widest measured grid has 4 columns; the "How Pinecone works" and enterprise sections use 3. The header is 75px tall with a bottom hairline; the announcement strip is 34px.

Spacing is fine-grained: gaps of 1, 4, 6, 8, 10, 12, 14, 16, 18, 22, 32 and 80px; paddings dominated by 32px (78 uses) with 4-20px for controls and 96px for section padding. Headings sit left-aligned with a secondary button aligned right on the same row ("View docs", "See full pricing", "Explore Nexus").

## Elevation & Depth

Almost flat. Only two shadows are measured: a floating panel with `rgba(0, 0, 0, 0.1) 0px 8px 32px 0px, rgba(0, 0, 0, 0.06) 0px 2px 8px 0px`, and a 1px blue ring `rgb(0, 43, 255) 0px 0px 0px 1px` used as a selection outline. Hierarchy comes from the white-on-off-white panels, hairline frames, and the blue accent.

## Shapes

Square. No border radius is measured on any button, card, input or panel; the only radius is 50% on 6 small circular elements. The CSS declares a Tailwind-style radius scale (`--radius-sm` .25rem, `--radius-md` .375rem, `--radius-lg` .5rem, `--radius-2xl` 1rem), but none of it renders on the home page. The halftone dot pattern in the hero is the only soft texture.

## Components

- **Primary button** — "Start for free": #002bff fill and 1px border, white gtPlanar 15px/21px, 0px radius, 8px 16px padding, 39px tall; hover #222160 fill with #fbfbfc text. "Subscribe" uses the same blue at 10px 20px padding and 46px.
- **Dark button** — "Start building": #1c1917 fill, #fbfbfc text, 1px #e7e5e4 border, 10px 20px padding, 43px tall.
- **Outline button** — "Contact", "View docs": transparent, #1c1917 text, 1px #e7e5e4 border, 8px 12px padding, 39px tall.
- **Experience toggle** — "Builder" active: #002bff fill, white 14px/20px at 500, 6px 16px, 32px tall; "Business Leader" inactive in #57534e.
- **Code tabs** — JetBrains Mono 13px/19.5px; the active tab ("Claude Code") is #1c1917 with #fbfbfc text, 8px 14px padding, 38px tall; a terminal block below with grey comments.
- **Console button** — "+ CREATE INDEX": blue, 12px/12px at 500, uppercase, 0.4px tracking, 8px 14px, 28px tall.
- **Text input** — #fbfbfc fill, 1px #e7e5e4 border, 0px radius, 10px 16px padding, 46px tall, gtPlanar 15px/24px.
- **Stat row** — a JetBrains Mono tag ("{lower cost}"), a short sentence, and a large blue percentage on the right.
- **Footer** — #a8a29e text at 14px/21px, a top hairline, five link columns, social icons.

## Design System Architecture

Pinecone publishes no public design system or brand guidelines that we could open: https://www.pinecone.io/brand/ returns 404, and the newsroom (https://www.pinecone.io/newsroom/) offers a "Media Kit" with logo and photo downloads but no guidelines. The shipped CSS (357 root variables) is a Tailwind v4 build with a Pinecone semantic layer on top: brand colours (`--primary-main` #002bff, `--color-brand-blue`, `--color-primary-dark` #222160, `--color-brand-violet` #3d11a0, `--color-alpha1` … `--color-alpha6`), text roles (`--text-primary` #1c1917, `--text-secondary` #57534e, `--color-tertiary` #a8a29e, `--text-contrast` #fff), surfaces (`--background` #fbfbfc, `--paper` #fff, `--surface` #f2f3f6, `--border` #e7e5e4, `--divider` #d8dddf), a type scale with desktop and mobile pairs (`--text-h1` 2.75rem, `--text-h1-mobile--line-height` 2.4rem, `--text-h2-mobile` 1.75rem, `--text-body` 1rem with `--text-body--line-height` 1.6rem), and font tokens (`--font-gt-planar`, `--font-mono`). The cookie-consent widget's own `--osano-*` variables are third-party and not part of the brand.

## Do's and Don'ts

**Do**
- Keep every button, card and input square (0px radius).
- Use #002bff for actions, highlighted words and key numbers, and #222160 for hover.
- Set headings in gtPlanar 700 with slight negative tracking, in #1c1917.
- Set paragraphs in #57534e at 16px/24px.
- Frame sections with 1px #e7e5e4 hairlines on a #fbfbfc / #ffffff surface pair.
- Use JetBrains Mono for code, tabs and small tracked eyebrows.

**Don't**
- Don't round corners; the declared radius scale does not render on this page.
- Don't add heavy shadows to cards.
- Don't introduce a second accent colour for actions; violet and cyan are declared but not used here.
- Don't use pure black text; ink is the warm #1c1917.
- Don't set body copy in the mono face.
- Don't document the cookie-consent banner colours as brand tokens.

## Responsive Behavior

The extractor's 390px mobile pass recorded:
- The h1 unchanged at gtPlanar 44px/48.4px, -0.88px, in a 326px width.
- The h2 at 24px/28.8px with -0.6px tracking (32px/38.4px on desktop); the CSS declares `--text-h2-mobile` 1.75rem.
- The paragraph sampled on mobile measured 14px/21px in #57534e.
- The announcement strip 67px tall (34px on desktop); the header 75px tall with a #e7e5e4 bottom border.
- 1 visible header link and a menu toggle labelled "Show navigation" (7 links and no toggle on desktop).
- The "Builder" toggle detected as the primary action, 52px tall; the widest card grid 2 columns (4 on desktop).

Breakpoint values were not measured.

## Iteration Guide

1. Set up a #fbfbfc page with white #ffffff panels framed by 1px #e7e5e4 hairlines and 0px radius.
2. Set headings in gtPlanar (or a geometric grotesque) at 44px/48.4px and 32px/38.4px, 700, in #1c1917.
3. Set body at 16px/24px, 400, #57534e.
4. Add a square #002bff CTA (8px 16px, 39px) with #222160 hover, and pair it with a #e7e5e4-outlined secondary.
5. Use JetBrains Mono for code tabs (active tab #1c1917) and tracked uppercase eyebrows.
6. Highlight one word in a headline and key metrics in #002bff.
7. Check against the capture: the page should feel like a precise console — square, gridded, quiet, with blue as the only colour.
