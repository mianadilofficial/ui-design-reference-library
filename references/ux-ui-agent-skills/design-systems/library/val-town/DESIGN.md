---
version: alpha
name: Val Town
category: "Developer Tools & IDEs"
description: "Val Town's home page sets Sprig Sans at weight 400 (48px/57.6px hero, -1.2px) in pure #000000 on white, with a sky-blue #00bcff 'Sign Up' button (12px radius, #052f4a text), slate-bordered #f8fafc chips, #00598a links and a warm #f8f4f2 prompt card — framed by hand-drawn isometric city illustrations."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#00bcff"
  on-primary: "#052f4a"
  surface-warm: "#f8f4f2"
  surface-chip: "#f8fafc"
  ink-soft: "#1f1f1f"
  link: "#00598a"
  ink-prompt-accent: "#3a7fa6"
  hairline: "#e2e8f0"
typography:
  display:
    fontFamily: "\"Sprig Sans\", -apple-system, sans-serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 57.6px
    letterSpacing: "-1.2px"
  display-mobile:
    fontFamily: "\"Sprig Sans\", -apple-system, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 28.8px
    letterSpacing: "-0.6px"
  heading:
    fontFamily: "\"Sprig Sans\", -apple-system, sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 48px
  body:
    fontFamily: system-ui, -apple-system, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"Sprig Sans\", -apple-system, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  nav:
    fontFamily: "\"Sprig Sans\", -apple-system, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: "\"Sprig Sans\", -apple-system, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28.8px
rounded:
  xs: 8px
  sm: 12px
  md: 16px
  lg: 24px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 12px
  s5: 14px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 32px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 20px
    height: 48px
  button-chip:
    backgroundColor: "{colors.surface-chip}"
    textColor: "{colors.ink}"
    border: "1px solid #e2e8f0"
    rounded: "{rounded.xs}"
    padding: 0px 12px
    height: 32px
  link:
    textColor: "{colors.link}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 0px 8px 0px 16px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.xs}"
    padding: 8px
  prompt-card:
    backgroundColor: "{colors.surface-warm}"
    textColor: "{colors.ink-soft}"
    rounded: "{rounded.sm}"
    boxShadow: >-
      rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, oklab(0 0 0 / 0.1) 0px 0px 0px 1px, rgba(0, 0, 0, 0.12) 0px 28px 38px 0px, rgba(0, 0, 0,
      0.1) 0px 10px 14px 0px
  footer:
    textColor: "{colors.ink}"
    padding: 1013.6px 48px 64px
---

# Val Town

## Overview

Val Town (www.val.town) is a platform for writing and instantly deploying small TypeScript programs ("vals"). The measured home page, titled simply "Val Town", leads with "Instant deployments for you & your agents" and the line "Val Town is how developers and operators instantly ship websites, automations, and other tools to live URLs." It is the most illustrated page in this batch: a hand-drawn, coloured-pencil style isometric town — brick row houses, a shop front, trees, street lamps, a bus, a clock tower, a library with columns and a few small walking potato-like characters — runs diagonally across the white page on pale warm "street" bands. The illustrations carry the personality; the UI around them is restrained and almost entirely black text on white.

The hero is split: at top left a warm-grey prompt card asks "What will you build?" with an example prompt ("Alert us in Slack when a big deal closes in HubSpot"), a model selector ("GPT-5 Luna High") and a round blue send button; beneath it the headline and description. At right, a sky-blue "Sign Up" button sits above "Connect your AI agent" and a row of chips (Claude, ChatGPT, Claude Code, Codex, Cursor) plus a "Setup guides and other agents" link. Then: "Trusted by (vibe) coders at companies we admire" with a greyscale logo row (OpenAI, Anthropic, Shopify, Google, Kilo Code); "This is a val" with a full product screenshot (file tree, code editor, a live "Internal Sales Dashboard" preview and a "Run code, schedule crons, & receive emails" tooltip) in a carousel; four large customer quotes set in big type with small avatars; and a footer whose tagline is the couplet "If GitHub repos could run, / And AWS Lambda were fun".

The voice is playful and plain-spoken — "(vibe) coders", "This is a val" — while the type stays calm.

## Colors

- **Canvas `#ffffff`** — the body and the dominant background (by far the largest measured area).
- **Ink `#000000`** — pure black for almost all text: nav, headings, quotes, footer. It is the most-read color.
- **Ink-soft `#1f1f1f`** — prompt-card text and paragraph copy in system-ui.
- **Primary `#00bcff`** with **on-primary `#052f4a`** — the "Sign Up" button: a bright sky blue with very dark navy-blue text (not white). On hover the fill moves one step deeper on the same sky ramp (the stylesheet's `--color-sky-500`), measured in the hover pass.
- **Link `#00598a`** — inline links ("other tools", "Setup guides and other agents"); on hover they darken further. The same blue is the hover text color of the secondary chips and nav links.
- **Ink-prompt-accent `#3a7fa6`** — the "Val Town" mention highlighted inside the prompt text.
- **Surface-warm `#f8f4f2`** — the prompt card's warm grey; the illustration's street bands sit in the same warm family.
- **Surface-chip `#f8fafc`** with **hairline `#e2e8f0`** — the agent chips and the secondary "Sign up" in the header: off-white with a 1px slate border. Hover tints them pale sky blue.

Black `#000000` also fills a few small elements, `#e5e5e5` and `#d4d4d4` appear as small neutral fills, and `#5db9ef` was measured once as a small background.

## Typography

- **Sprig Sans** (weights 400 and 700) is the brand face and sets nearly everything: 1,525 of 1,677 measured characters. The hero `display` is 48px/57.6px at weight 400 with -1.2px tracking; section headings (`heading`) and the customer quotes are 32px/48px at 400; links are 18px/28.8px; nav and buttons use 14px–16px, with 700 reserved for buttons and the header links.
- **system-ui** sets paragraph `body` text (16px/24px) and the prompt card (30px/36px with -0.75px tracking for "What will you build?").
- The stylesheet also declares **iA Writer Mono** (as `--font-mono`, used in the product's code editor), **iA Writer Quattro** and **IBM Plex Sans**, which did not measure on visible marketing text.

The page avoids bold headlines entirely — large type is weight 400 — which, together with the illustrations, gives it a gentle, bookish feel. Sprig Sans is not a common web font; if unavailable, substitute a humanist sans with similar open forms (for example Instrument Sans or Figtree) at 400, keeping the -2.5% tracking on display sizes.

## Layout

At 1280px the page is 5,008px tall. The header is 64px (`--header-height: 64px`), white, with the wordmark and four links (Product, Blog, Docs, Pricing) at left and "Log in" plus a "Sign up" chip at right; seven header links/buttons were counted. Content runs from 120px to 1272px in the header band; most text sections are left-aligned rather than centred. The hero uses two columns (headline left, sign-up right) and the testimonials alternate left and right of a single wide column, interleaved with illustration.

Spacing is loose and sparse: gaps of 8px, 16px, 24px and 20px dominate, with 48px and 64px between sections; paddings run 8px, 12px, 16px and 48px, with very large section paddings of 80px, 128px and 160px measured once each. The footer has 1013.6px of top padding because the final illustration (library, clock tower, characters) is drawn into the footer's top area. The footer itself lays out the large wordmark and tagline at left and three link columns (Features, Docs, Blog groups) at right, with a primary "Sign Up" and a "Connect your AI agent" chip under social icons.

## Elevation & Depth

The page is mostly flat. The prompt card is the only strongly elevated element: a 1px ring at 10% black plus `rgba(0, 0, 0, 0.12) 0px 28px 38px` and `rgba(0, 0, 0, 0.1) 0px 10px 14px`, so it floats above the illustrated street. Other measured shadows appear once each: `rgba(0, 0, 0, 0.06) 0px 4px 16px`, `rgba(0, 0, 0, 0.25) 0px 24px 64px -12px`, and a 5px sky ring `rgba(56, 189, 248, 0.45) 0px 0px 0px 5px` combined with `rgba(0, 0, 0, 0.35) 0px 16px 32px -12px`. Depth otherwise comes from the illustrations' own isometric perspective and shading.

## Shapes

- **8px** — the most frequent radius (12 elements): agent chips, header "Sign up", nav-link hover areas.
- **Pill (9999px)** — 12 elements: carousel dots, avatars, the round send button.
- **12px** — the primary "Sign Up" button and the prompt card.
- **16px** and **24px** — one element each, larger frames.

Buttons are rounded rectangles, not pills; the only fully round controls are small icon buttons and dots. Borders are 1px slate `#e2e8f0`.

## Components

- **button-primary** — "Sign Up": `#00bcff` fill, `#052f4a` Sprig Sans 16px/24px weight 700, 12px radius, `0px 20px` padding, 48px tall. Hover steps the fill deeper on the sky ramp.
- **button-chip** — Claude / ChatGPT / Claude Code / Codex / Cursor and the header "Sign up": `#f8fafc` fill, 1px `#e2e8f0` border, 8px radius, `0px 12px` padding, 32px tall, black 14px/20px bold text; hover turns the text `#00598a` and the fill pale sky.
- **nav-link** — black Sprig Sans, 8px padding and 8px radius; hover adds a pale sky-blue fill and blue text.
- **prompt-card** — `#f8f4f2`, 12px radius, ring-plus-drop shadow; contains a 30px system-ui question, a white input with the prompt, a model dropdown and a blue circular send button.
- **link** — `#00598a` Sprig Sans 18px/28.8px, underlined.
- **Testimonial** — a 32px/48px quote in black, then a small round avatar, bold name and grey role.
- **Product screenshot** — a carousel of IDE views with dots below.

## Design System Architecture

Val Town has a brand assets page at https://www.val.town/brand which offers the logotype and mark (black-on-white and white-on-black, PNG and SVG) and notes the name may be written "Val Town" or "val town"; it lists no colors, typefaces or illustration rules. The GitHub organisation https://github.com/val-town pins the `vt` CLI, the TypeScript `sdk` and `val-town-docs`, with no design-system or token repository. The site's CSS is a Tailwind v4 build: the root declares the stock Tailwind palette as `--color-*` variables in `lab()` (the CTA uses the sky ramp — sky-400 fill, sky-950 text, sky-800 links), `--radius-sm/md/lg/2xl`, `--header-height: 64px`, and `--font-mono: "iA Writer Mono", "Menlo", "Consolas", …`. In practice the system is Tailwind's sky and slate scales plus Sprig Sans and the illustration set.

## Do's and Don'ts

**Do**
- Keep text pure black on white and let the illustrations supply colour.
- Set headlines in Sprig Sans 400 with -2.5% tracking; never bold display type.
- Use the sky-blue `#00bcff` button with dark `#052f4a` text for the single sign-up action.
- Use slate-bordered `#f8fafc` chips for secondary choices.
- Use isometric, hand-drawn coloured-pencil scenes as section dividers.
- Write plain, slightly playful microcopy.

**Don't**
- Don't put white text on the sky-blue button; the measured text is `#052f4a`.
- Don't introduce a second saturated colour for UI; blues come from one sky ramp.
- Don't make buttons fully round; the CTA radius is 12px and chips are 8px.
- Don't add shadows to every card; only the prompt card is lifted.

## Responsive Behavior

The extractor's mobile pass at 390px recorded: the hero `display` drops from 48px/57.6px to 24px/28.8px with -0.6px tracking; the section heading "Trusted by (vibe) coders…" drops from 32px/48px to 24px/36px; paragraph text drops from 16px to 14px (line height stays 24px); the "Sign Up" button keeps its 48px height, 12px radius and `0px 20px` padding. The mobile header measured 105px tall with `0px 8px` padding and 7 header links still visible; no menu toggle was detected. Mobile content spans 8px–382px in the header band and 24px–366px in the hero; 1 card column was counted. Mobile font sizes recorded: 14px, 18px, 16px, 24px, 12px. Breakpoint widths and the illustrations' mobile treatment were not measured.

## Iteration Guide

1. Start on white with black Sprig Sans 400 text; add the 64px header.
2. Set the hero in `display` (48px/57.6px, -1.2px) next to a single `button-primary`.
3. Add the warm prompt card as the one elevated element.
4. Use `button-chip` for agent and secondary choices.
5. Separate sections with illustration rather than background colour bands.
6. Check link and hover colours stay on the sky ramp; compare with https://www.val.town before shipping.
