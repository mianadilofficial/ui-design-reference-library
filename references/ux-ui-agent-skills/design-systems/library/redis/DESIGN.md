---
version: alpha
name: Redis
category: "Backend, Database & DevOps"
description: "Redis (redis.io), real-time data for agents and apps: a midnight #091a23 canvas with #0d212c cards, Redis red #ff4438 on dark-red #351d22 'Try Redis' buttons, dusk #163341 secondary buttons, acid yellow #dcff1e highlights, a condensed uppercase primaryFont display at 100px/85px over Space Grotesk 16px/25.6px body, 5px button and 10px card radii."
colors:
  canvas: "#091a23"
  ink: "#b9c2c6"
  white: "#ffffff"
  primary: "#ff4438"
  on-primary: "#ffffff"
  primary-fill: "#351d22"
  primary-hover: "#8a221c"
  primary-border-hover: "#eb352a"
  dusk: "#163341"
  dusk-hover: "#2d4754"
  dusk-border-hover: "#5c707a"
  surface-card: "#0d212c"
  ink-muted: "#8a99a0"
  ink-soft: "#b8c2c6"
  ink-light: "#d9d9d9"
  yellow: "#dcff1e"
  red-light: "#fd736a"
  blue-text: "#0073e6"
typography:
  display:
    fontFamily: primaryFont, "primaryFont Fallback", sans-serif
    fontSize: 100px
    fontWeight: 400
    lineHeight: 85px
    letterSpacing: "-1px"
    textTransform: uppercase
  display-mobile:
    fontFamily: primaryFont, "primaryFont Fallback", sans-serif
    fontSize: 80px
    fontWeight: 400
    lineHeight: 68px
    letterSpacing: "-1px"
    textTransform: uppercase
  heading:
    fontFamily: "\"Space Grotesk\", \"Space Grotesk Fallback\", sans-serif"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 38.4px
  card-title:
    fontFamily: "\"Space Grotesk\", \"Space Grotesk Fallback\", sans-serif"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 29px
  body:
    fontFamily: "\"Space Grotesk\", \"Space Grotesk Fallback\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
  button:
    fontFamily: "\"Space Grotesk\", \"Space Grotesk Fallback\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  nav:
    fontFamily: "\"Space Grotesk\", \"Space Grotesk Fallback\", sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 21px
  mono:
    fontFamily: "\"Space Mono\", monospace"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 15.6px
    letterSpacing: 1.5px
  input:
    fontFamily: "\"Space Grotesk\", \"Space Grotesk Fallback\", sans-serif"
    fontSize: 12px
    fontWeight: 400
rounded:
  xs: 4px
  sm: 5px
  md: 10px
  lg: 14px
  xl: 200px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 11px
  s8: 12px
  s9: 14px
  s10: 15px
components:
  button-primary:
    backgroundColor: "{colors.primary-fill}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 10px 24px
    height: 43px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
    borderColor: "{colors.primary-border-hover}"
  button-secondary:
    backgroundColor: "{colors.dusk}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 12px 40px
    height: 47px
    borderColor: "{colors.dusk-hover}"
  button-secondary-hover:
    backgroundColor: "{colors.dusk-hover}"
    borderColor: "{colors.dusk-border-hover}"
  chip-tab:
    backgroundColor: "{colors.dusk}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 10px 20px
    height: 43px
    borderColor: "{colors.dusk-hover}"
  icon-button:
    backgroundColor: "{colors.dusk}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.xs}"
    padding: 8px
    borderColor: "{colors.dusk-hover}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink-light}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    height: 30px
  card-prompt:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.yellow}"
    typography: "{typography.mono}"
    rounded: "{rounded.md}"
    padding: 20px
    borderColor: "{colors.dusk}"
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.white}"
    typography: "{typography.card-title}"
    rounded: "{rounded.md}"
    padding: 32px
    borderColor: "{colors.dusk}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    padding: 44px 0px 92px
---

## Overview

Redis is the in-memory data platform; its home page now leads with AI: the title is "Redis - Real-time data for agents & apps" and the hero shouts "INQUIRING AGENTS WANT TO KNOW:" above a prompt card for its "Redis Iris" product. The measured page (https://redis.io/, 5,363px at a 1280px viewport) is fully dark: a deep midnight teal-black (#091a23) with slightly lighter card surfaces (#0d212c), dusky blue-grey secondary buttons (#163341), the Redis red (#ff4438) on a dark maroon fill for the main "Try Redis" actions, and an electric yellow-green (#dcff1e) for highlighted words.

The capture shows a 38px dusk announcement strip ("86.5% accuracy, ~$0.07 per session. See how Redis stacks up in the Agent Memory Benchmark." with a yellow "Read the report" link); a header with the red Redis wordmark, a red-outlined "Redis Iris" pill, dropdown nav items (Platform, Deploy, Solutions, Devs, Resources), search and account icons, "Book a meeting" and a red-bordered "Try Redis" button; the condensed uppercase hero headline; a prompt card ("$ PROMPT — How can I use Redis Iris as a real-time context engine for AI apps?") with small icon buttons and a "Copy" action; a red "Try Redis Iris" button next to a dusk "Get a demo" button; and the section "What's your **problem**?" with "problem" in yellow. The capture's lower part rendered blank and a third-party chat assistant overlays the right edge, so the rest of the page is described from the extraction: problem tabs ("Hallucinating agents", "Inconsistent answers", "Wrong decisions", "Poor app performance", "Token costs", "Feature inconsistencies", "Expensive memory"), "Find the right context, right away.", deployment cards ("In the cloud", "On-prem/hybrid cloud"), and a dark footer.

## Colors

Redis's CSS names its colours in families (midnight, dusk, hyper, yellow, violet, sky-blue), and the measured values map onto them:

- **Canvas `#091a23`** (`--midnight`) — the page background, by far the largest area (7,052).
- **Surface card `#0d212c`** (`--dusk-09`) — cards, the prompt panel and the language select (1,490).
- **Dusk `#163341`** (`--dusk`) — the announcement strip and the secondary "Get a demo" / "Talk to sales" buttons; hover **`#2d4754`** (`--dusk-90`) with a **`#5c707a`** (`--dusk-70`) border.
- **Primary `#ff4438`** (`--redis-red`, `--hyper-05`) — the brand red: borders of "Try Redis" buttons, the wordmark, "Learn more" links and nav hover colour. `--focus-ring` is also set to it.
- **Primary fill `#351d22`** (`--hyper-10`) — the dark maroon inside red-bordered buttons; hover **`#8a221c`** (`--hyper-09`) with border **`#eb352a`** (`--hyper-06`).
- **Red light `#fd736a`** (`--hyper-04`) — the hover colour of red "Learn more" links.
- **Ink `#b9c2c6`** (`--dusk-30`) — the most-read text colour (848 characters); **white `#ffffff`** for headlines and button labels (753).
- **Ink muted `#8a99a0`** (`--dusk-50`) — footer and secondary text; **ink soft `#b8c2c6`** and **ink light `#d9d9d9`** (`--dusk-10`) for small UI text.
- **Yellow `#dcff1e`** (`--yellow`) — highlighted words ("problem"), prompt text and small accents, plus yellow borders.
- **Blue text `#0073e6`** — a small amount (28 characters) of blue text measured on the page.

## Typography

- **primaryFont** — a condensed, heavy-looking display face (computed weight 400, loaded as 500) used only for the hero: 100px/85px, uppercase, -1px tracking. The tight 0.85 line height and condensed letterforms make it read like a poster.
- **Space Grotesk** (400, 500) — everything else: 2,297 measured characters. Section headings 32px/38.4px at 500; card titles 20px/29px at 500; body 16px/25.6px; buttons and nav 14px/21px (nav at 500); small UI text at 12px.
- **Space Mono** (400) — the prompt card at 13px/15.6px with 1.5px tracking, and small uppercase labels (14px/1.5px and 10px/1.5px are measured).

Space Grotesk and Space Mono are open-source Google Fonts; primaryFont is a custom webfont whose declared fallback is the generic sans-serif. The pairing of a condensed poster face, a quirky grotesque and its mono sibling gives the page a technical but energetic voice.

## Layout

The band map shows a 38px dusk strip, a 3,837px midnight main band (content between 110px and 1257px, up to 3 columns), and a 1,488px media band at the bottom. The header is 70px tall (`--header-height` 70px) under the 38px banner (`--header-banner-height` 38px). The hero is centred; later sections are left-aligned with a small circular marker before the heading. The widest measured grid has 7 columns (the row of problem tabs).

Spacing values: gaps of 6, 8, 10, 11, 12, 15, 16, 20, 24, 28, 32 and 36px; paddings of 1, 2, 5, 8, 10, 12, 20, 24, 32, 36, 72 and 80px. The CSS declares button padding variables (`--button-md-padding-x` 24px, `--button-sm-padding-y` 8px).

## Elevation & Depth

No box shadows are measured. Depth comes from tonal layering in the dusk family: #091a23 page, #0d212c cards, #163341 buttons, #2d4754 hovers — each a step lighter. Cards are outlined with 1px #163341 borders. The red and yellow accents provide the only bright points on the dark surface.

## Shapes

Small, consistent radii: 4px on tabs and icon buttons (15 uses), 5px on primary and secondary buttons (`--button-radius-rounded` 5px, 7 uses), 10px on cards (8 uses), 14px on one larger panel, 200px on pill elements such as the "Redis Iris" nav pill (`--radius-full` 200px), and 50% on round markers. The CSS also declares `--button-radius-square` 0 for square buttons.

## Components

- **Primary (red) button** — "Try Redis", "Try Redis Iris": #351d22 fill, 1px #ff4438 border, white Space Grotesk 14px/21px, 5px radius; 10px 24px padding and 43px tall in the header, 12px 40px and 47px in the hero. Hover: #8a221c fill, #eb352a border.
- **Secondary (dusk) button** — "Get a demo", "Talk to sales": #163341 fill, 1px #2d4754 border, white text, 5px radius, 12px 40px padding, 47px tall; hover #2d4754 fill with #5c707a border.
- **Nav pill** — "Redis Iris": #351d22 fill, 200px radius.
- **Problem tabs** — "Hallucinating agents" etc.: #163341 fill, #2d4754 border, 4px radius, 10px 20px, 43px tall; inactive tabs show #b9c2c6 text that turns white on hover.
- **Prompt card** — #0d212c fill, 1px #163341 border, 10px radius, 20px padding, Space Mono 13px/15.6px in #dcff1e with 1.5px tracking, with 32px icon buttons (#163341, 4px radius, 8px padding).
- **Deployment card** — #0d212c fill, 1px #163341 border, 10px radius, 32px padding, white 20px/29px title.
- **Navigation** — white Space Grotesk 14px/21px at 500 on #091a23; hover turns items red rgb(255, 68, 56).
- **Language select** — #0d212c fill, #d9d9d9 12px text, 5px radius, 30px tall.
- **Footer** — #091a23, #8a99a0 12px/18px links, 44px 0px 92px padding.

## Design System Architecture

Redis publishes no public design system or brand guidelines that we could open (https://redis.io/brand/ and https://redis.io/press/ both return 404). The shipped CSS exposes a clear de-facto system of 104 root variables: colour ramps named by family and step (`--hyper-04` … `--hyper-10` for reds, `--dusk-01` … `--dusk-90`, `--yellow-06` … `--yellow-50`, `--violet-*`, `--purple-*`, `--sky-blue-*`, `--black-*`, `--grey-*`), named anchors (`--midnight` #091a23, `--dusk` #163341, `--redis-red` #ff4438, `--yellow` #dcff1e), and a button token layer (`--primary-button-bg` → hyper-07 #e4291e, `--primary-button-bg-hover` → hyper-08, `--primary-button-border-hover` → hyper-09, `--secondary-button-fg` → hyper-07, `--secondary-button-bg` transparent, `--button-font-weight` 500, `--button-radius-rounded` 5px, `--button-radius-square` 0, `--button-focus-width` 2px). Layout variables include `--header-height` 70px and `--header-banner-height` 38px. The stylesheet's most used breakpoints are max-width 1024px (411 rules), 768px (359) and 499px (115).

## Do's and Don'ts

**Do**
- Keep the page midnight #091a23 with #0d212c cards and #163341 controls.
- Use Redis red #ff4438 as a border and text accent on a #351d22 fill for primary actions.
- Set the hero in a condensed uppercase face at 100px/85px; everything else in Space Grotesk.
- Highlight one word per heading in yellow #dcff1e.
- Use Space Mono with 1.5px tracking for prompts and code.
- Keep radii small: 4-5px on controls, 10px on cards.

**Don't**
- Don't use white backgrounds; no light surface is measured on this page.
- Don't fill large areas with bright red; it is a border, text and hover colour.
- Don't add drop shadows; depth is tonal.
- Don't use the yellow #dcff1e for buttons; it marks words and prompt text.
- Don't set body text in the condensed display face.
- Don't treat the third-party chat assistant in the capture as Redis UI.

## Responsive Behavior

The extractor's 390px mobile pass recorded:
- The hero h1 at primaryFont 80px/68px, uppercase, -1px (100px/85px on desktop), 342px wide.
- The h2 at Space Grotesk 24px/28.8px (32px/38.4px on desktop).
- Body text at 14px/22.4px (16px/25.6px on desktop) in a 292px column.
- The "Get a demo" button at 12px 24px padding and 320px wide, 47px tall (12px 40px on desktop).
- A 70px dusk announcement band (38px on desktop) and a 77px header.
- 4 visible header links on mobile against 13 on desktop.

The stylesheet declares breakpoints at 1024px, 768px and 499px; which component changes happen at each was not measured.

## Iteration Guide

1. Paint the page #091a23 and the cards #0d212c with 1px #163341 borders and 10px radius.
2. Set a condensed uppercase hero at 100px/85px with -1px tracking in white.
3. Use Space Grotesk 16px/25.6px in #b9c2c6 for body and 32px/38.4px at 500 in white for section headings.
4. Build the primary action as a #351d22 button with a #ff4438 border (5px radius), hovering to #8a221c / #eb352a.
5. Pair it with a #163341 secondary button that hovers to #2d4754.
6. Add one yellow #dcff1e highlight word per heading and Space Mono prompts.
7. Check against the live page: dark, technical, with red and yellow as the only bright colours.
