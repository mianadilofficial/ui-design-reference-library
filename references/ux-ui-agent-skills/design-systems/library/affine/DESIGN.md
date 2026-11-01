---
version: alpha
name: AFFiNE
category: "Productivity & SaaS"
description: "AFFiNE (affine.pro), open-source knowledge base software: a light #f8f8f7 page with Inter 500 headings at 48px/-1.92px and 36px/-1.44px, 19.6px/32.34px body copy, #1e96eb brand-blue 34px-radius Get Started buttons (hover 80% alpha), white 14.88px-radius cards with a 0 1px 4px shadow, and a solid #1e96eb footer."
colors:
  canvas: "#f8f8f7"
  ink: "#424149"
  primary: "#1e96eb"
  on-primary: "#ffffff"
  ink-strong: "#000000"
  ink-secondary: "#000000ad"
  ink-muted: "#0000009e"
  ink-body-soft: "#000000b8"
  hairline: "#0000001a"
  primary-hover: "#1e96ebcc"
  surface-glass: "#ffffffdb"
  link-border: "#00000014"
  nav-text: "#ffffff99"
  footer-text: "#ffffffd9"
typography:
  display:
    fontFamily: Inter, "Inter Fallback", Roboto, Helvetica, Arial, sans-serif
    fontSize: 48px
    fontWeight: 500
    letterSpacing: "-1.92px"
  display-mobile:
    fontFamily: Inter, "Inter Fallback", Roboto, Helvetica, Arial, sans-serif
    fontSize: 40.019px
    fontWeight: 500
    lineHeight: 40.019px
    letterSpacing: "-2.80133px"
  card-title:
    fontFamily: Inter, "Inter Fallback", Roboto, Helvetica, Arial, sans-serif
    fontSize: 32px
    fontWeight: 500
    lineHeight: 40px
    letterSpacing: "-1.28px"
  subheading:
    fontFamily: Inter, "Inter Fallback", Roboto, Helvetica, Arial, sans-serif
    fontSize: 36px
    fontWeight: 500
    lineHeight: 42.84px
    letterSpacing: "-1.44px"
  heading:
    fontFamily: Inter, "Inter Fallback", Roboto, Helvetica, Arial, sans-serif
    fontSize: 24px
    fontWeight: 500
    lineHeight: 31.992px
    letterSpacing: "-0.48px"
  body:
    fontFamily: Inter, "Inter Fallback", Roboto, Helvetica, Arial, sans-serif
    fontSize: 19.6px
    fontWeight: 400
    lineHeight: 32.34px
  nav-menu:
    fontFamily: Inter, "Inter Fallback", Roboto, Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
    letterSpacing: "-0.28px"
  nav:
    fontFamily: Inter, "Inter Fallback", Roboto, Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.2px
    letterSpacing: "-0.07px"
  link:
    fontFamily: Inter, "Inter Fallback", Roboto, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 21.6px
  input:
    fontFamily: Inter, "Inter Fallback", Roboto, Helvetica, Arial, sans-serif
    fontSize: 15px
    fontWeight: 400
    letterSpacing: "-0.075px"
rounded:
  xs: 4px
  sm: 8px
  md: 10px
  lg: 11.5px
  xl: 12px
  2xl: 14.88px
  3xl: 16px
  4xl: 18px
  button: 34px
  none: 0px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 8.39px
  s5: 10px
  s6: 11px
  s7: 12px
  s8: 16px
  s9: 18px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.nav-menu}"
    rounded: "{rounded.none}"
    height: 30px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-get-started:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.nav-menu}"
    rounded: "{rounded.button}"
    padding: 5px 16px
    height: 30px
  button-github:
    textColor: "{colors.ink-strong}"
    typography: "{typography.nav-menu}"
    rounded: "{rounded.button}"
    padding: 6px 16px
    height: 32px
  link:
    backgroundColor: "{colors.surface-glass}"
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.3xl}"
    padding: 16px 18px
    borderColor: "{colors.link-border}"
  nav:
    textColor: "{colors.nav-text}"
    rounded: "{rounded.none}"
    padding: 53.024px 0px
  nav-link:
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    textColor: "{colors.on-primary}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    height: 44px
  card:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.card-title}"
    rounded: "{rounded.2xl}"
    padding: 0px 24px 24px
    boxShadow: rgba(0, 0, 0, 0.15) 0px 1px 4px 0px
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.footer-text}"
    rounded: "{rounded.none}"
    padding: 75.152px 0px 0px
---

# AFFiNE

## Overview

AFFiNE is an open-source workspace that merges docs, whiteboards and databases, and affine.pro (title "AFFiNE — Open-Source Knowledge Base Software") is a long, bright, product-first landing page: 1280px wide and 13031px tall on a warm off-white `#f8f8f7`. The header is light and airy: the triangular AFFiNE logo, menus (Product ▾, Team ▾, Download, Resources ▾, Pricing), a language picker ("English"), a blue pill "Get Started" button and an outlined GitHub pill showing the star count ("73,580 [U+2605]").

The hero headline is set large and tight, centred over two lines — "Write, Draw, [U+2611] Plan, All at Once. With AI." — with a blue text cursor at its start, a blue checkbox icon inline, and "AI." in brand blue. Under it: "AFFiNE is a workspace with fully merged docs, whiteboards and databases. Get more things done, your creativity isn't monotone.", then a filled blue "Get Started" pill and an outlined blue "Book a Demo" pill. A large white app window ("This is your Second Brain [U+1F4DA]") with a document, highlights and a table view floats below with a soft shadow, and a red "#1 Product of the Day" Product Hunt badge.

The page continues with a gradient-text heading "Trusted by people from next-gen startups to established organizations." over a logo grid (Google, Microsoft, Amazon, Meta, IBM, Oxford, SAP, Michigan, PLAUD.AI, void), "Consolidate Your Workflow with Ease on a Hyperfused Platform", white feature cards ("Say goodbye to the hassle of switchover"), product sections for Write, Draw and Plan, AI, templates and community, then a solid blue footer ("To Shape, Not to Adapt.") with a newsletter field and link columns. A handwritten font (Kalam) adds a few annotation notes.

## Colors

- **canvas `#f8f8f7`** — the page background (`--bg: #f8f8f7`), the largest area.
- **on-primary `#ffffff`** — white cards and panels (second largest area) and button labels.
- **primary `#1e96eb`** — AFFiNE blue, declared as `--brand: #1e96eb` (`--brand-rgb: 30, 150, 235`). It fills the Get Started buttons and the entire footer, and colours "AI." in the headline. Hover recorded the fill as `rgba(30, 150, 235, 0.8)` = **primary-hover `#1e96ebcc`**.
- **ink `#424149`** — the most-read text colour (4415 characters), declared as `--primary: #424149`.
- **ink-strong `#000000`** — headings and card titles (`--primary-deep: #000`).
- **ink-body-soft `#000000b8`** (72%), **ink-secondary `#000000ad`** (68%), **ink-muted `#0000009e`** (62%) — paragraph and caption greys built from translucent black.
- **hairline `#0000001a`** — the most common border (23 elements); **link-border `#00000014`** for resource links. `#eeeeee` and `#f4f4f5` are also measured borders, and the CSS declares `--divider-color: #d7d7d7`.
- **surface-glass `#ffffffdb`** — translucent white for resource link cards; `#ffffffb8` is a large translucent background too.
- **nav-text `#ffffff99`** and **footer-text `#ffffffd9`** — white at 60% and 85% for footer column headings and copy on blue. `#0f7ac4` is a darker blue measured in the footer.

The h2 "Trusted by people…" uses a text gradient, `linear-gradient(91deg, rgb(71, 71, 71) 20.12%, rgb(0, 0, 0) 55.27%, rgb(71, 71, 71) 82.61%)`, clipped to the text. The CSS also declares `--logo-color: #5438ff` and `--link-hover-color: #244ee7`.

## Typography

AFFiNE self-hosts **Inter** 400, 500, 600 and 700 (`/fonts/inter-v18-latin-*.woff2`), used on 8491 characters. **Kalam** appears on 23 characters as handwritten notes.

- **Display — Inter 500, 48px, -1.92px tracking** (-4%): the largest measured desktop section heading, "Consolidate Your Workflow with Ease on a Hyperfused Platform". The animated hero headline was not captured by the desktop pass; at 390px it measures 40.019px / 40.019px with -2.80133px tracking (-7%). Larger sizes also appear on the page — 90px (23 characters), 60px, 55.776px and 45.328px — without a recorded role.
- **Card title — Inter 500, 32px / 40px, -1.28px.**
- **Subheading — Inter 500, 36px / 42.84px, -1.44px** ("your way to better productivity").
- **Heading — Inter 500, 24px / 31.992px, -0.48px** (the gradient "Trusted by…" heading).
- **Body — Inter 400, 19.6px / 32.34px** for the lead paragraph, in `#000000b8`. The most common size on the page is 13px (3697 characters), then 16px, 14px and 15px.
- **Nav menu — Inter 500, 14px / 20px, -0.28px**; **footer nav — 400, 14px / 18.2px, -0.07px**; **link card titles — 600, 16px / 21.6px**; **input — 400, 15px, -0.075px**.

Tracking is negative everywhere and scales with size (about -2% at 14px–24px, -4% at 32px–48px). **Substitute:** Inter is free; Kalam is free on Google Fonts.

## Layout

The page is centred with `--container-padding: 40px` and `--navbar-height: 72px`. Content spans x=96 to x=1180 in the main band. The hero is centred; the app screenshot is centred below it. The logo grid uses 5 columns; the widest measured row has 8 columns. Feature cards come in pairs (564px wide). The footer spans x=57 to x=1223 with 6 columns.

The gap rhythm is dominated by 4px (104 elements), then 16px, 8px, 11px, 6px and 56px. Paddings: 24px and 32px most often, then 6px, 8px, 20px, 16px, 10px. Cards use 0px 24px 24px; link cards 16px 18px. The footer opens with 75.152px of top padding.

## Elevation & Depth

Elevation is light. White cards carry `rgba(0, 0, 0, 0.15) 0px 1px 4px 0px` (`0 1px 4px #00000026`, 12 uses in CSS). The hero app window floats with a wide, soft shadow. Other shadows in the CSS include `0 10px 30px -18px #1e96eb59` (a blue glow, 4 uses), `0 1px 6px #0000000d` and `0 1px 4px #0000000f`. Translucent whites (`#ffffffb8`, `#ffffffdb`) layer cards over the off-white page.

## Shapes

Soft and friendly. The card radius is 14.88px (21 elements, the most common). Buttons are pills at 34px (10 elements); `999px` also appears twice. Small controls use 4px (17) and 8px or 10px; link cards use 16px; other measured radii are 18px, 12px, 11.504px, 23px, 26px and 28px; avatars are 50% circles. The logo is a line-drawn triangle mark.

## Components

- **Get Started (primary)** — `#1e96eb` pill, 34px radius, white Inter 500 14px with -0.28px tracking, 5px 16px padding, 30px tall in the header; the hero version is 44px tall. Hover: fill `rgba(30, 150, 235, 0.8)`.
- **Book a Demo** — an outlined pill with a blue label beside the hero Get Started (a 1px `#1e96eb` border is measured once on the page).
- **GitHub star pill** — transparent, 1px `#cccccc` border, 34px radius, 6px 16px padding, 32px tall, GitHub icon, count and a yellow star.
- **Nav menu item** — Inter 500 14px `#000000`, 4px radius, 8px 12px padding, 36px tall, with a chevron.
- **Feature card** — white, 14.88px radius, 0px 24px 24px padding, `0 1px 4px` shadow, Inter 500 32px/40px title.
- **Resource link card** — `#ffffffdb`, 1px `#00000014` border, 16px radius, 16px 18px padding, 600 16px title in `#424149` with a `#0000009e` description.
- **Footer** — solid `#1e96eb`, "To Shape, Not to Adapt." headline, a newsletter strip ("Stay in the loop on open-source progress."), an email input with white text, and 60% white column headings (Company, Download, Resources, Compare) over white links.

## Design System Architecture

No public AFFiNE marketing design system was opened for this document; the site exposes its own variables in the shipped CSS. The brand layer is small: `--brand: #1e96eb` with HSL parts (`--brand-h: 204.88deg`, `--brand-s: 83.67%`, `--brand-l: 51.96%`), `--brand-gradient`, `--primary: #424149`, `--primary-deep: #000`, `--primary-gray: #747474`, `--secondary: #fff`, `--bg: #f8f8f7`, `--divider-color: #d7d7d7`, `--logo-color: #5438ff`, `--link-hover-color: #244ee7`, `--container-padding: 40px` and `--navbar-height: 72px`. The rest of the root variables belong to libraries: Element Plus (`--el-*`, e.g. `--el-color-primary-rgb: 64,158,255`), the cookie-consent widget (`--cc-*`) and UnoCSS (`--un-*`); those are not AFFiNE brand values. The AFFiNE app itself is open source, but its in-app tokens were not used here.

## Do's and Don'ts

**Do**
- Use the warm off-white `#f8f8f7` page with white cards and `#424149` text.
- Use `#1e96eb` for primary pills and for one highlighted word in a headline.
- Set headings in Inter 500 with strong negative tracking (-4% at 32px–48px).
- Round buttons fully (34px) and cards at 14.88px.
- Keep shadows small (`0 1px 4px` at 15%).
- End the page with a solid blue footer and white text.

**Don't**
- Don't use bold 700 for headings; the measured heading weight is 500.
- Don't use square buttons.
- Don't treat Element Plus `rgb(64,158,255)` or the cookie-banner colours as brand colours.
- Don't use heavy dark shadows on cards.
- Don't fill large page areas with blue except the footer.

## Responsive Behavior

The extractor's 390px mobile pass recorded: the hero h1 "Write, Draw, Plan, All at Once. With AI." at Inter 500 40.019px / 40.019px with -2.80133px tracking (329px wide); the "Trusted by…" heading at 18px / 23.994px with -0.36px tracking; the lead paragraph at 17.019px / 28.0813px in `#000000b8`. The mobile primary CTA is "Get Started": `#1e96eb`, white Inter 600 15px/22.5px, 8px radius (34px on desktop), 46px tall and 326px wide. The layout probe recorded a visible "Toggle navigation menu" button on mobile (none on desktop), 0 visible header text links on both, and a maximum of 2 card columns on mobile versus 8 on desktop. Mobile font sizes measured: 13px, 14px, 16px, 15px, 18px, 17.019px, 14.015px, 24.019px. CSS breakpoints include max-width 478.4px, 480px, 600px, 640px, 767px, 800px, 900px and 1000px. Other section arrangements at mobile width were not measured.

## Iteration Guide

1. Start with a `#f8f8f7` page, a 72px light header with 14px/500 menu items and a blue 34px-radius "Get Started" pill.
2. Centre a large Inter 500 headline with tight negative tracking and one word in `#1e96eb`.
3. Follow with a 19.6px/32.34px lead paragraph in `#000000b8` and two pills (filled blue, outlined blue).
4. Float a large white product screenshot with a soft shadow.
5. Build sections from white 14.88px cards with `0 1px 4px` shadows and Inter 500 32px/40px titles.
6. Use translucent-black greys (`#000000b8`, `#000000ad`, `#0000009e`) for secondary text.
7. Close with a solid `#1e96eb` footer, white headline and 60% white column headings.
