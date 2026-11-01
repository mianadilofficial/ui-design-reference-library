---
version: alpha
name: Cerebrium
category: "Tech & AI"
description: "Cerebrium serverless GPU homepage: dark #101421 hero with a magenta ribbon, white rounded content sheet, navy #172b76 text, pink #ff488b buttons with 7px radius in 13px Suisse Int'l Mono caps, ABC Favorit Trial light headlines at 79.8px."
colors:
  canvas: "#ffffff"
  page-body: "#101421"
  ink: "#172b76"
  navy-500: "#586490"
  slate-300: "#c6cee0"
  slate-200: "#cfd7e7"
  slate-100: "#dbe5ed"
  slate-50: "#eef2f5"
  primary: "#ff488b"
  on-primary: "#101421"
  pink-600: "#f6186a"
  pink-300: "#f480c0"
  pink-200: "#f8a2d3"
  pink-100: "#fdcdeb"
  purple-100: "#e33adb"
  glass-dark: "#31396159"
  glass-nav: "#22273e73"
  hairline: "#ffffff33"
  nav-bg: "#000000"
typography:
  display:
    fontFamily: "\"ABC Favorit Trial\", sans-serif"
    fontSize: 79.8256px
    fontWeight: 300
    lineHeight: 79.8256px
    letterSpacing: "-1.99564px"
  display-mobile:
    fontFamily: "\"ABC Favorit Trial\", sans-serif"
    fontSize: 45px
    fontWeight: 300
    lineHeight: 45px
    letterSpacing: "-1.125px"
  label-mono:
    fontFamily: "\"Suisse Int'l Mono\", monospace"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 13.91px
    letterSpacing: "-0.325px"
    textTransform: uppercase
  body:
    fontFamily: "\"Suisse Int'l\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
    letterSpacing: 0.18px
  wordmark:
    fontFamily: "\"Suisse Int'l\", sans-serif"
    fontSize: 26px
    fontWeight: 500
    lineHeight: 39px
    letterSpacing: "-0.39px"
rounded:
  xs: 6px
  sm: 7px
  md: 10px
  lg: 15px
  xl: 32px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 14px
  s9: 15px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.label-mono}"
    rounded: "{rounded.sm}"
    padding: 0px 20px
    height: 54px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.label-mono}"
    rounded: "{rounded.sm}"
    padding: 0px 20px
    height: 54px
  button-neutral:
    backgroundColor: "{colors.slate-200}"
    textColor: "{colors.ink}"
    typography: "{typography.label-mono}"
    rounded: "{rounded.sm}"
    padding: 0px 20px
    height: 54px
  button-glass:
    backgroundColor: "{colors.glass-dark}"
    textColor: "{colors.canvas}"
    typography: "{typography.label-mono}"
    rounded: "{rounded.sm}"
    padding: 0px 20px
    height: 54px
  wordmark-link:
    textColor: "{colors.canvas}"
    typography: "{typography.wordmark}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.canvas}"
    padding: 14px 0px
  card:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.lg}"
    padding: 24px
  footer:
    textColor: "{colors.canvas}"
    padding: 30px 0px 0px
---

## Overview

Cerebrium (`https://cerebrium.ai/`, title "Serverless GPU Infrastructure for Real-Time AI | Cerebrium") sells GPU infrastructure for AI workloads, and its homepage reads like an engineering product rather than a cloud brochure: a near-black hero with a glowing magenta 3D ribbon, a customer-logo strip on a dotted dark field, and then a white, rounded-top "sheet" that holds the argument in navy text with pink highlights. The measured page is 10,306px tall at 1280px width, so the reference capture covers only the top of it (the hero, the logo strip, the start of the white sheet and a benchmark panel).

The hero headline is "Real-time AI infrastructure that scales with you", set in a light weight at 79.8256px, with the word "scales" in pink `#ff488b`; the lead copy to the right says "Deploy voice agents, video models, LLMs, and any AI workload with sub-second cold starts and instant autoscaling. Built for teams that need reliability at scale." Two buttons follow: "TRY IT NOW" (pink) and "BOOK A DEMO" (a dark translucent button). Below, a logo carousel shows partner wordmarks (Resemble.AI, Lelapa AI, bitHuman, LiveKit, Tavus and a partly visible one) in white on `#101421`.

The white sheet then switches to navy text: a short left-aligned statement ("Production speed without the production complexity"), a large light headline "Built for teams, pushing boundaries" with the second line in pink, a mono eyebrow "WHY CEREBRIUM" and a stacked list of four features ("2-4s Cold Starts", "Elastic GPU Scaling", "Your Code, Your Way", "Observability") in pale blue-gray type. On the right, a purple photographic card shows a benchmark: tabs "vLLM Qwen" and "Stable Diffusion XL" over a light panel comparing "CEREBRIUM (WITH SNAPSHOTS)" at 3.8s, "CEREBRIUM" at 42s, "PROVIDER A" at 71s and "EKS/GKE" at 156s. Those are the page's own marketing numbers, reproduced as copy and not verified here.

The voice is terse and technical. Labels are mono uppercase; headlines are light sentence-case with one phrase highlighted in pink. A cookie-consent layer (its `--cc-*` variables are in the CSS) is not documented as brand UI.

## Colors

The brand pairs a dark charcoal with one hot pink, then uses a cool navy and slate scale on light surfaces. The `:root` names most of them: `--color-charcoal: #101421`, `--color-navy-900: #172b76`, `--color-navy-500: #586490`, `--color-slate-50: #eef2f5`, `--color-slate-100: #dbe5ed`, `--color-slate-200: #cfd7e7`, `--color-slate-300: #c6cee0`, `--color-slate-400: #b3c0d4`, `--color-pink-100: #fdcdeb`, `--color-pink-200: #f8a2d3`, `--color-pink-300: #f480c0`, `--color-pink-500: #ff488b`, `--color-pink-600: #f6186a`, `--color-purple-100: #e33adb`, plus `--color-white` and `--color-black`.

Measured usage:
- **Canvas `#ffffff`** is the largest background area (4,766 units); **`#eef2f5`** (3,809) and **`#dbe5ed`** (1,639) are the next light surfaces; **page-body `#101421`** (609) is the dark band and the page body background.
- **Ink `#172b76`** is the most-read text color (3,064 characters) and the paragraph color on the white sheet. **`#586490`** (485 characters) and **`#c6cee0`** (67) are secondary text on light and dark respectively.
- **Primary `#ff488b`** fills every action button, with `#101421` text (`on-primary`). It is also the text color on highlighted headline words (145 characters).
- **`#cfd7e7`** is the fill of the "LOG IN" button with `#172b76` text; **`#31396159`** is the translucent fill behind "BOOK A DEMO" with white text; **`#22273e73`** is a translucent dark pill in the header; **`#ffffff33`** is the one measured border color (hairline); the header background measures `#000000`.
- **`#ffffffe6`** (302 units) and **`#000000a6`** (`--cc-overlay-bg`) appear as translucent overlays; the latter belongs to the consent layer and is not a brand color.

Other `:root` values such as `--swiper-theme-color: #007aff` belong to a carousel library, not to the brand.

## Typography

Three families, all licensed faces: **ABC Favorit Trial** (300; the family name says "Trial") for display, **Suisse Int'l** for body and interface text (400 and 500), and **Suisse Int'l Mono** for labels and buttons. The site's theme exposes them as `--font-secondary`, `--font-sans` and `--font-mono`, with `--font-weight-light: 300`, `normal: 400`, `medium: 500`, `semibold: 600` and `bold: 700`. The extractor recorded three loaded faces: Suisse Intl Mono 400, Suisse Intl 400 and ABC Favorit Trial 300. Suisse Int'l covers 4,201 weighted characters, the mono 724 and Favorit 220.

- **Display**: ABC Favorit Trial 79.8256px / 79.8256px (line-height 1.0), weight 300, letter-spacing -1.99564px, white on the dark hero. Other measured display sizes are 67.6397px / -1.69099px, 41.0298px / -2.05149px, 34.3971px / -0.859928px and 25.5277px / -0.638192px (1,187 characters, the most-used large size), 20.7645px / -0.519112px. Mobile h1 is 45px / 45px / -1.125px.
- **Body**: Suisse Int'l 18px / 27px, 0.18px tracking, navy. Other sizes: 17px / 0.17px (423 characters), 16px (1,396, the most common), 15px / 0.15px.
- **Label (mono)**: Suisse Int'l Mono 13px / 13.91px, -0.325px tracking, uppercase, used for the eyebrow "WHY CEREBRIUM", benchmark row names, and all button labels.
- **Wordmark**: the extractor's nav role caught the "Cerebrium" wordmark link at Suisse Int'l 26px / 500 / 39px, -0.39px.

The desktop sizes are non-integer values (for example 79.8256px and 25.5277px) whereas the mobile h1 is a round 45px. How those sizes are generated was not measured.

Font substitutes: the licensed families are not on public CDNs; if unavailable, a light grotesque for display, a neutral Swiss-style sans for body, and a monospace for labels at the same sizes. This is a suggestion, not a measurement.

## Layout

The theme declares a 6-column grid with `--grid-gutter: 15px` and `--grid-margin: 15px`, a spacing base of `.25rem` (4px) and breakpoints `--breakpoint-2xs: 340px`, `xs: 500px`, `sm: 700px`, `md: 1000px`, `lg: 1200px`, `xl: 1400px`, `2xl: 1600px`, `3xl: 1800px`, `4xl: 2000px`, `5xl: 2400px`. Z-index layers are `header: 100`, `header-fixed: 150`, `modal: 200`, `overlay: 300`. The header measured 82px tall (`14px 0px` padding) on a 1280px-wide page, with the wordmark at left and a pill of mono nav items plus "LOG IN" and "SIGN UP" buttons at right. The hero headline column measured 590px wide and 319px tall.

In the capture the page is a stack of full-width fields: dark hero, dark logo band with a dot-grid, then a white sheet with rounded top corners holding a two-column layout (statement and feature list at left, headline and benchmark panel at right). Measured gaps: 8px (52 uses), 14px (36), 16px (35), 24px (20), 6px and 20px (18 each), 50px (6). Measured paddings: 20px (73 uses, the button padding), 8px, 40px, 16px, 10px and 24px.

## Elevation & Depth

Elevation is expressed through layers rather than shadows. No box-shadow was measured on the page (the shadow frequency list is empty; the stylesheet corpus contains Tailwind shadow variables and a `0 .625em 1.875em #0000024d` value on two elements). Depth comes from the dark-to-light handoff (the white sheet's rounded top corners overlap the dark band), translucent glass fills (`#22273e73`, `#31396159`), blur tokens (`--blur-sm: 8px`, `--blur-lg: 16px`) and the 3D ribbon artwork.

## Shapes

Radii come from a short named scale: `--radius-sm: 7px` (236 measured uses, every button and most chips), `--radius-md: 10px` (34 uses), `--radius-lg: 15px` (4), `--radius-xl: 30px`, `--radius-4xl: 2rem` (32px, 2 uses) and 6px (3). In the capture the white content sheet has a large rounded top edge and the three pink squares in the dotted band have small rounded corners; their radii were not isolated in the measurement. Buttons are rounded rectangles at 7px, not pills.

## Components

- **Primary button**: `#ff488b` fill, `#101421` 13px mono uppercase label, 7px radius, `0px 20px` padding, 54px tall; widths measured 121px ("TRY IT NOW"), 97px ("SIGN UP"), 129px ("GET STARTED"), 157px ("STATUS PAGE").
- **Neutral button**: "LOG IN", `#cfd7e7` fill, `#172b76` label, 88×54px, same radius.
- **Glass button**: "BOOK A DEMO", `#31396159` fill, white label, 129×54px.
- **Header**: 82px, with a translucent dark pill (`#22273e73`) around the nav items "USE CASES", "PRICING", "DOCS", "BLOG", "COMPANY" and a small grid icon; wordmark at far left with a pink striped mark.
- **Benchmark panel**: segmented tabs (active tab filled slate-blue, white label), a light card with mono row labels, thin gray bars and large numerals.
- **Logo strip**: white partner marks scrolling horizontally on `#101421`.
- **Footer**: 888px tall, white 16px / 500 text with link groups (Twitter, GitHub, Discord, LinkedIn, Use Cases and others), `30px 0px 0px` padding.
- Hover and focus states were not recorded for this page (the hover list is empty), so they are not measured.

## Design System Architecture

No public design-system or brand-guideline page was found on the pages opened (the homepage at `https://cerebrium.ai/`, whose footer links to Twitter, GitHub, Discord, LinkedIn and product pages). The de-facto system is a Tailwind CSS v4 theme visible in the shipped `:root` custom properties: named color ramps (`--color-pink-100` to `-600`, `--color-slate-50` to `-400`, `--color-navy-500` and `-900`, `--color-charcoal`, `--color-purple-100`), type variables (`--font-sans`, `--font-mono`, `--font-secondary`, `--text-xs`, `--text-sm`, `--text-7xl: 4.5rem`), tracking (`--tracking-tighter: -.05em`, `--tracking-tight: -.025em`, `--tracking-wider: .05em`), a radius scale, container widths (`--container-md: 28rem` through `--container-3xl: 48rem`), a ten-step breakpoint set, easing curves (`--ease: cubic-bezier(.645,.045,.355,1)`, `--ease-bounce`), icon widths (`--icon-width-arrow-right: 28px`) and layout variables for a 6-column grid. A third-party cookie-consent kit contributes `--cc-*` variables and Swiper contributes `--swiper-*`; neither is brand. Source: https://cerebrium.ai/.

## Do's and Don'ts

Do:
- Use dark charcoal `#101421` for the hero and logo band, then hand off to a white rounded-top sheet.
- Use pink `#ff488b` only for actions and for one highlighted phrase in a headline.
- Set labels and buttons in 13px Suisse Int'l Mono uppercase; set headlines in light-weight ABC Favorit at tight tracking.
- Keep buttons at 7px radius, 54px tall, `0px 20px` padding.

Don't:
- Don't use drop shadows; depth comes from layers and translucent fills.
- Don't use pills for buttons; the radius scale tops out at 7px for controls.
- Don't use Swiper's `#007aff` or the consent layer's colors as brand colors.
- Don't use bold display type; the display weight is 300.

## Responsive Behavior

Measured at a 390px viewport (mobile pass): the h1 is 45px / 45px with -1.125px tracking in a 360px-wide, 135px-tall box (79.8256px on desktop, 590px wide and 319px tall). The eyebrow stays 13px mono. Body copy becomes 17px / 25.5px (0.17px tracking) in a 360px-wide, 128px-tall box (18px / 27px at 502px wide on desktop). The primary button changes from 121×54px with `0px 20px` padding to 109×42px with `0px 14px` padding; the label stays 13px. The mobile font-size table is led by 16px (1,810 characters), 20px (995), 17px (773) and 13px (652). The header layout, navigation pattern and logo-strip behavior at mobile width were not recorded, so they are not measured. Breakpoint values are declared in the theme (see Layout); which one governs each change was not measured.

## Iteration Guide

1. Set `page-body #101421` for the dark hero, `canvas #ffffff` and navy `#172b76` for the content sheet, and pink `#ff488b` for actions.
2. Use ABC Favorit (or a light grotesque) at weight 300 with about -2.5% tracking for headlines (measured -1.99564px at 79.8256px); use Suisse-style sans at 18px / 27px for body.
3. Put all labels and buttons in 13px mono uppercase.
4. Build buttons at 54px tall, 7px radius, `0px 20px` padding; use `#cfd7e7` for neutral and `#31396159` for glass buttons.
5. Highlight one phrase per headline in pink.
6. Re-measure hover and focus states; they were not recorded here.
