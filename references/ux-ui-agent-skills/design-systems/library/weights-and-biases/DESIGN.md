---
version: alpha
name: Weights & Biases
category: "AI & LLM Platforms"
description: "Weights & Biases (wandb.ai/site), the AI developer platform now part of CoreWeave: charcoal #1a1c1f and #282a2f surfaces, white Source Serif 4 headlines at 72px/600, Source Sans 3 20px/30px body, teal #00afc2 links and a #10bfcc-to-#0097ab gradient CTA at 8px radius, gold #ffcc33 accents and uppercase 0.96px-tracked buttons."
colors:
  canvas: "#282a2f"
  page-body: "#1a1c1f"
  ink: "#ffffff"
  primary: "#00afc2"
  on-primary: "#1a1c1f"
  teal-450: "#10bfcc"
  teal-deep: "#0097ab"
  gold: "#ffcc33"
  gold-450: "#fcbc32"
  amber-hover: "#ffad33"
  moon-900: "#171a1f"
  moon-450: "#8f949e"
  moon-50: "#fdfdfd"
  surface-zinc: "#27272a"
  surface-panel: "#24262a"
  card-bg: "#202328"
  ink-secondary: "#c5c7cc"
  ink-tertiary: "#cccccc"
  ink-muted: "#adb0b5"
  ink-nav: "#fbfbfc"
  code-green: "#7ec699"
  hairline: "#34373c"
typography:
  display:
    fontFamily: "\"Source Serif 4\", serif"
    fontSize: 72px
    fontWeight: 600
    lineHeight: 72px
  display-mobile:
    fontFamily: "\"Source Serif 4\", serif"
    fontSize: 42.9px
    fontWeight: 600
    lineHeight: 42.9px
  heading:
    fontFamily: "\"Source Serif 4\", sans-serif"
    fontSize: 38px
    fontWeight: 400
    lineHeight: 45.6px
  body:
    fontFamily: "\"Source Sans 3\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  nav:
    fontFamily: "\"Source Sans 3\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 17.5px
  button:
    fontFamily: "\"Source Sans 3\", sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 18px
    letterSpacing: 0.96px
    textTransform: uppercase
rounded:
  xs: 3.6px
  sm: 8px
  md: 12px
  lg: 16px
  pill: 9999px
spacing:
  s1: 5px
  s2: 6px
  s3: 7px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundImage: "linear-gradient(270deg, rgb(16, 191, 204) 0%, rgb(0, 151, 171) 100%)"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 15px 24px
    height: 48px
  button-outline:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 15px 26px
    height: 50px
    borderColor: "{colors.ink-muted}"
  button-outline-hover:
    textColor: "{colors.ink}"
    borderColor: "{colors.ink}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink-nav}"
    typography: "{typography.nav}"
  nav-link-hover:
    textColor: "{colors.gold}"
  card-quote:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 0px 24px
    borderColor: "{colors.hairline}"
  card-code:
    backgroundColor: "{colors.surface-panel}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 16px
    borderColor: "{colors.hairline}"
    boxShadow: rgba(10, 14, 21, 0.5) 0px 16px 16px 0px
  footer:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
---

## Overview

Weights & Biases (W&B) is an AI developer platform for experiment tracking, model management and, with Weave, building and evaluating LLM applications. The bare domain wandb.ai redirected our browser to a CoreWeave login, so the page measured here is the marketing home at https://wandb.ai/site ("Weights & Biases: The AI developer platform"), 3,954px tall at a 1280px viewport. The site now carries an endorsement — the logo reads "Weights & Biases by CoreWeave", a black CoreWeave bar runs across the very top, and a section announces "Weights & Biases is now part of CoreWeave Forge".

The page is a dark, developer-oriented layout: a charcoal canvas, white serif headlines, a code editor right in the hero, and two accent colours — teal for the main action and links, gold for secondary highlights. The capture shows: the CoreWeave strip; a W&B header with dropdown nav (Weave, Solutions, Enterprise, Resources, Docs, Pricing) and uppercase CONTACT / LOG IN / SIGN UP links; a centred headline "AI is ~~hard~~ easy to productionize" with "hard" struck through and "easy" handwritten in gold above it; a code window titled "W&B Weave: Build agentic AI applications"; a teal "GET STARTED WITH WEAVE" button and an outlined "REQUEST DEMO" button; a logo row (Wayve, AstraZeneca, Bayer, BMW Group, Canva); a mobile-app promo with phone mock-ups and a gold "DOWNLOAD NOW" button; a compliance section with ISO and SOC badges; "Get started with one line of code" with a quote card and a tabbed integration list beside a code panel; the CoreWeave Forge notice; and a five-column footer.

## Colors

W&B's official brand identity page (https://wandb.ai/site/brand-identity/) lists primary colours Moon-900 #171a1f, Gold-450 #fcbc32 and Moon-50 #fdfdfd, and secondary colours Teal-450 #10bfcc and Moon-450 #8f949e, with the rule "Don't create new colors." The live page renders close relatives of these:

- **Page body `#1a1c1f`** — the body and header background (2,648 by area); a near neighbour of Moon-900.
- **Canvas `#282a2f`** — the second large surface (1,297), used for alternating sections such as the mobile-app promo.
- **Surface zinc `#27272a`**, **surface panel `#24262a`** and **card bg `#202328`** — panels and cards a step above or below the page.
- **Ink `#ffffff`** — headlines and most text (1,445 characters); **ink nav `#fbfbfc`** for navigation.
- **Ink secondary `#c5c7cc`**, **ink tertiary `#cccccc`**, **ink muted `#adb0b5`** — supporting text and the outline-button border.
- **Primary `#00afc2`** — teal for links ("Meet our customers", "Multi-tenant", "Dedicated") and the nav underline colour; it appears 40 times in the stylesheet.
- **Teal-450 `#10bfcc`** to **teal deep `#0097ab`** — the measured gradient on the main CTA.
- **On primary `#1a1c1f`** — dark text on the teal button.
- **Gold `#ffcc33`** — the "Weights & Biases mobile app" heading and the nav hover colour; the brand guide's Gold-450 is #fcbc32. Uppercase utility links hover to **amber `#ffad33`**.
- **Code green `#7ec699`** — syntax colour in code samples.
- **Hairline `#34373c`** — card borders.

## Typography

The brand guide names Source Serif Pro as the primary typeface "used mainly for large headlines and titles" with Regular as the default weight, and Source Sans 3 as the secondary typeface, with sentence case preferred and all caps "limited to small uses such as charts, labels, and UI navigation"; it also states "Buttons are all caps." The live page loads the current open-source versions:

- **Source Serif 4** — the hero h1 at 72px/72px, weight 600; section headings such as "The world's leading AI teams trust Weights & Biases" at 38px/45.6px, weight 400. Other headline sizes measured: 54px and 40px.
- **Source Sans 3** — body copy at 20px/30px (the most used size, 1,178 characters), navigation at 14px/17.5px, and buttons at 16px/18px, weight 600, uppercase, with 0.96px tracking. A 14px size with 6% tracking is also measured for small labels.
- **Consolas** and **Source Code Pro** — code in the hero window and the integration panel (13px and 12px sizes are measured on the page).

The page also loads arponasans, novel-mono-pro-condensed and Inter, which belong to the CoreWeave strip and widgets. The guide gives Times New Roman as the substitute for the serif and Calibri for the sans.

## Layout

The page uses a full-width dark layout with centred hero content and two-column sections below. The band map shows a 60px black CoreWeave bar, then a 1,194px #1a1c1f hero (content from 48px to 1244px). The widest measured grid has 3 columns. Gaps are tight and irregular — 5, 6, 7, 8, 10, 16, 30 and 40px — and paddings include 5, 6, 8, 12, 15, 16, 20, 24, 40, 50, 54 and 72px. The hero h1 has 54px top and 36px bottom padding.

Sections alternate between the two charcoals (#1a1c1f and #282a2f) rather than using white. Content is dense where it is technical (code panels, integration lists) and airy where it is promotional (the hero, the CoreWeave Forge notice).

## Elevation & Depth

Elevation is used mostly on code and product panels. The integration panel carries `rgba(10, 14, 21, 0.5) 0px 16px 16px 0px`; a header element uses `rgba(10, 14, 21, 0.5) 0px -1px 16px 0px`; the small "COPY" buttons in code blocks use `rgba(0, 0, 0, 0.2) 0px 2px 0px 0px` with a 20% light fill. Otherwise depth comes from the steps between #1a1c1f, #202328, #24262a, #27272a and #282a2f, and from 1px #34373c borders on cards.

## Shapes

Radii are moderate: 8px on buttons, cards and code panels (11 uses), 16px on larger containers (7 uses), 12px top corners on tab panels, 3.6px on small elements, and 50% on round icons and logo badges (13 uses). The hero code window has the three coloured "traffic light" dots of an editor. The brand guide notes that W&B's "design uses shapes inspired by our interface".

## Components

- **Primary button** — "GET STARTED WITH WEAVE": `linear-gradient(270deg, rgb(16, 191, 204) 0%, rgb(0, 151, 171) 100%)` fill, #1a1c1f text, Source Sans 3 16px/18px at 600, uppercase, 0.96px tracking, 8px radius, 15px 24px padding, 48px tall.
- **Outline button** — "REQUEST DEMO": transparent, white text, 1px #adb0b5 border, 8px radius, 15px 26px padding, 50px tall; hover turns the border white.
- **Gold button** — "DOWNLOAD NOW" and "EXPLORE COREWEAVE FORGE" appear in gold with dark text in the capture; their fill values were not isolated by the extractor.
- **Navigation** — #1a1c1f header, #fbfbfc 14px links with dropdown chevrons; "Docs" and "Pricing" hover to gold rgb(255, 204, 51); uppercase CONTACT / LOG IN / SIGN UP hover to rgb(255, 173, 51).
- **Text link** — teal #00afc2; "Meet our customers" gains a teal underline border on hover.
- **Quote card** — #202328 fill, 1px #34373c border, 8px radius, 0px 24px padding, white 20px/30px quote with an attribution row.
- **Code panel** — #24262a fill, 1px #34373c border, 8px radius, 16px padding, deep shadow; a left list of integrations (LangChain, LlamaIndex, PyTorch, HF Transformers…) in uppercase 16px with 0.96px tracking.
- **Compliance chips** — dark rounded rows with an icon and a standard name ("ISO 27001:2022", "SOC 2", "HIPAA").
- **Footer** — #1a1c1f, five columns (The Platform, Article, Resources, Company), round social icons.

## Design System Architecture

W&B publishes an official brand identity guide at https://wandb.ai/site/brand-identity/ (linked as "Brand guide" in the site footer). It defines the five-colour palette with a Moon/Gold/Teal naming scheme and numeric steps (Moon-900, Moon-450, Moon-50, Gold-450, Teal-450), the Source Serif / Source Sans type pairing with substitutes, capitalisation rules (sentence case, all-caps buttons), a logo hierarchy in which "Weights & Biases is positioned as the lead brand, with CoreWeave in a supporting visual role", logo colourways (black, white, yellow, gray) and product logo groups (Weave, Models, Core). The marketing site itself is WordPress: its root variables are WordPress presets (`--wp--preset--font-size--large` 36px, `--wp--preset--shadow--natural`, `--wp--preset--color--vivid-cyan-blue`), so the brand values are applied in theme CSS rather than through custom properties. The stylesheet declares breakpoints at max-width 767px (45 rules), 1000px (42), min-width 768px (26) and max-width 1280px (18), among others.

## Do's and Don'ts

**Do**
- Keep the page dark: #1a1c1f and #282a2f, with white serif headlines.
- Set headlines in Source Serif and body in Source Sans 3 at 20px/30px.
- Use uppercase, 0.96px-tracked labels for buttons only, as the brand guide says.
- Use teal (#00afc2, #10bfcc) for the main action and links, gold for highlights and hovers.
- Show real code in editor-style panels with 8px corners.
- Follow the guide's rule "Don't create new colors."

**Don't**
- Don't use all caps in body text (prohibited by the brand guide).
- Don't mix font weights within a line or place type over photography (both prohibited by the guide).
- Don't recolour, outline or add shadows to the logo.
- Don't put the teal gradient on large surfaces; it is a button fill.
- Don't use light surfaces for whole sections; none are measured on this page.
- Don't document the chat assistant or the CoreWeave strip as W&B brand UI.

## Responsive Behavior

The extractor's 390px mobile pass recorded:
- The h1 at Source Serif 4 42.9px/42.9px, weight 600 (72px on desktop), with 32.175px top and 21.45px bottom padding.
- Section h2 unchanged at 38px/45.6px, in a 326px width.
- Body text unchanged at 20px/30px in a 308px column.
- A 52px black CoreWeave bar (60px on desktop) and a 67px header.
- 1 visible header link on mobile against 6 on desktop; the maximum card grid measured 2 columns (3 on desktop).
- Mobile font sizes include 10px, 12px, 13px, 14px, 16px, 18px, 20px, 38px, 40px and 42.9px.

The stylesheet declares breakpoints at 767px, 768px, 1000px and 1280px; which layout changes happen at each was not measured.

## Iteration Guide

1. Start with a #1a1c1f page and #282a2f alternate sections.
2. Set headlines in Source Serif 4 — 72px/72px at 600 for the hero, 38px/45.6px at 400 for sections — in white.
3. Set body in Source Sans 3 20px/30px, white or #c5c7cc.
4. Add the teal gradient CTA (8px radius, 15px 24px, 48px, dark text, uppercase 16px with 0.96px tracking) beside an outlined button with a #adb0b5 border.
5. Put real code in #24262a panels with #34373c borders and the deep shadow.
6. Use gold #ffcc33 sparingly for one highlighted word or heading per screen and for nav hovers.
7. Check the brand guide rules (no new colours, no all-caps body) before shipping.
