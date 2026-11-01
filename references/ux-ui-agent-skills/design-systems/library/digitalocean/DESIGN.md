---
version: alpha
name: DigitalOcean
category: "Backend, Database & DevOps"
description: "DigitalOcean's AI-Native Cloud site is dark: #000000 canvas with #000f0f cards (16px radius, #f4f5f51a hairline), Plus Jakarta Sans 800 headlines (48px, -1.5px), Inter 16px/24px body in #e5eceb, #6fe0ed aqua pill buttons (999px radius, 40px tall) hovering to #1aafbf and a #104b55 teal announcement bar."
colors:
  canvas: "#000000"
  page-largest: "#000f0f"
  ink: "#e5eceb"
  primary: "#6fe0ed"
  on-primary: "#000000"
  surface-announcement: "#104b55"
  ink-strong: "#f4f5f5"
  ink-muted: "#6f908c"
  ink-white: "#ffffff"
  hairline: "#f4f5f51a"
  primary-hover: "#1aafbf"
  surface-hover: "#13302e"
  surface-button-dark: "#1f403e"
typography:
  display:
    fontFamily: "\"Plus Jakarta Sans\", sans-serif"
    fontSize: 48px
    fontWeight: 800
    lineHeight: 56px
    letterSpacing: "-1.5px"
  display-mobile:
    fontFamily: "\"Plus Jakarta Sans\", sans-serif"
    fontSize: 28px
    fontWeight: 800
    lineHeight: 36px
  heading:
    fontFamily: "\"Plus Jakarta Sans\", sans-serif"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 48px
    letterSpacing: "-1px"
  subheading:
    fontFamily: Inter, "Inter Fallback", sans-serif
    fontSize: 18px
    fontWeight: 700
    lineHeight: 26px
  body:
    fontFamily: Inter, "Inter Fallback", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: Inter, "Inter Fallback", sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  link:
    fontFamily: Inter, "Inter Fallback", sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 21px
rounded:
  xs: 4px
  sm: 8px
  md: 16px
  lg: 64px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 12px
  s7: 16px
  s8: 24px
  s9: 32px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 24px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-dark:
    backgroundColor: "{colors.surface-button-dark}"
    textColor: "{colors.ink-strong}"
  link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.link}"
  announcement-bar:
    backgroundColor: "{colors.surface-announcement}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.link}"
    height: 38px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    height: 72px
  nav-link:
    textColor: "{colors.ink-white}"
    typography: "{typography.body}"
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-white}"
    rounded: "{rounded.md}"
    padding: 16px
    borderColor: "{colors.hairline}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  footer:
    textColor: "{colors.ink}"
---

# DigitalOcean

## Overview

DigitalOcean's home page (title "AI-Native Cloud | DigitalOcean") has been rebuilt as a dark, technical, AI-infrastructure page. A 38px teal announcement bar ("Introducing Agent Droplets →" on the left; Blog, Docs, Careers, Get Support, Contact Sales on the right) sits above a 72px black header with the DigitalOcean logo, dropdown menus (Products, Solutions, Developers, Partners) and Pricing, then "Log in" and an aqua "Sign up" pill on the right.

The hero is centred: "AI-Native Cloud" in heavy Plus Jakarta Sans 800, a one-line subtitle ("One integrated platform, silicon to agent, with economics that improve as you scale."), an aqua "Get started" pill and an outlined "Explore products" pill. Behind it rises a rendered 3D terrain — a mesh of olive and teal ridges fading into black — with a faint vertical ruler of numbers on the right edge, like a measurement overlay. A strip of customer logos (Workato, fal, Traversal, RadixArk, ACE Studio) and three case-study cards with big stats ("67% lower cost", "10x serving throughput", "40% reduction in latency") follow.

The middle of the page explains the stack: "Built for agents. Open at every layer." with a vertical tab list on the left (Managed Agents, Learning Services, Data Services, Inference Engine, Core Cloud, Infrastructure — the selected one in an aqua pill), a dark illustration in the centre and product details on the right. "Performance, economics, and simplicity — together." pairs four numbered claims with a geometric illustration on a teal-to-lilac gradient panel. A "Resources" carousel of three dark cards (Tutorial, Article, Blog), a gradient "Start building today" CTA panel and a large multi-column footer close the page.

The copy is precise and benchmark-heavy ("Sub-second Time-to-First-Token (TTFT). 3.9× higher output speed vs. AWS Bedrock").

## Colors

- **Canvas #000000** — the body background; the captured screen is 61% #010101. The stylesheet calls this `--deep-50`.
- **Page-largest #000f0f** — the largest painted area (2,559 units): cards and panels. This is `--deep-100` in the CSS.
- **Ink #e5eceb** — the most-read text color (3,931 characters).
- **Ink-strong #f4f5f5** — headings and links (2,995 characters); `--deep-1000` in the CSS.
- **Ink-white #ffffff** — card text and nav links. **Ink-muted #6f908c** — secondary captions.
- **Primary #6fe0ed** — the aqua fill of every pill CTA (Get started, Sign up, Start serving models, Try it now, Learn more), with **on-primary #000000** labels. The CSS defines `--background-card-emphasized: light-dark(#6fe0ed, #104b55)`.
- **Primary-hover #1aafbf** — the CTA fill on hover; focus adds a 2px solid #1aafbf outline at 2px offset.
- **Surface-announcement #104b55** — the top bar.
- **Surface-hover #13302e** — header controls ("Pricing", "Log in") on hover; dropdown triggers use the same color at 23–36% alpha.
- **Surface-button-dark #1f403e** — dark pill buttons such as "Become a Partner".
- **Hairline #f4f5f51a** — the 1px card border (light text color at 10%).

The hero terrain band measured olive-black fills (#282f14, #212610, #1a1d0c) behind the headline; these are image-adjacent backgrounds rather than UI colors. The stylesheet carries a large named palette (`--primary-teal-100 #006375`, `--primary-teal-200 #00afce`, `--primary-blue-200 #0069ff`, `--primary-cyan #45cac1`, `--primary-terracota #d74623`) of which only the teals and aqua appear on this page.

## Typography

Loaded fonts: **Plus Jakarta Sans** (variable 200–800), **Inter** (variable 100–900 plus static 400/500/700) and **JetBrains Mono** (variable 100–800).

- **Display** — Plus Jakarta Sans 48px/56px, 800, -1.5px ("AI-Native Cloud").
- **Heading** — Plus Jakarta Sans 36px/48px, 700, -1px (section titles and the big stats "67%", "10x", "40%").
- **Subheading** — Inter 18px/26px, 700 ("Featured AI Products").
- **Body** — Inter 16px/24px, 400, #e5eceb.
- **Button** — Inter 16px/24px, 500.
- **Link** — Inter 14px/21px, 500 (announcement and utility links).

Inter carries 6,029 characters, Plus Jakarta Sans 1,160, JetBrains Mono 51 (small code-like labels). Common sizes are 16px, 14px and 24px (826 characters — card and list titles). The CSS names its scale `--font-size-xl3-size: 28px`, `--font-size-xl4-size: 36px`, `--font-size-xl5-size: 40px`, `--font-size-xl6-size: 48px`, `--fontsize-heading-xl2-size: 24px`, and `--letter-spacing--1: -1px`. All three typefaces are open-source Google Fonts families.

## Layout

Measured at 1280px. Content is a 1,088px column (the footer and h2 measure 1,088px wide), with the main content band reaching x=1208. The header content runs from x=367 to x=1216 in 2 groups. Stats cards sit 3 across at 320px wide with 16px padding; the products section is a 3-part layout (tab list, illustration, detail); the footer has 5 link columns. The CSS declares `--content-spacing: 64px`, `--layout-spacing-lg-gap: 200px` and `--layout-max-width-text: 864px`.

Gaps: 8px (289 times), 24px, 12px, 16px, 4px, 6px, 2px, 64px, 56px, 40px, 32px and 58px. Paddings: 8px, 12px, 16px, 24px, 32px, 6px, 40px, 48px, 96px, 64px and 80px. The page is 5,337px tall — compact for a cloud provider.

## Elevation & Depth

Flat. The only shadow measured is a 1px inset ring `rgb(244, 245, 245) 0px 0px 0px 1px inset` (9 elements), which draws the outlined pill buttons visible in the capture. Cards are separated by #000f0f fills against #000000 and a 1px #f4f5f51a border. Depth and atmosphere come from imagery: the 3D terrain hero, the glowing illustrations and the teal-to-pink gradient behind "Start building today".

## Shapes

Pills and soft rectangles. Measured radii: 8px (56 elements — tags, list items, small panels), 999px (25 — every button; the CSS sets `--button-radii: 999px`), 16px (19 — cards), 64px (6 — large panels) and 4px (2). The CSS radius scale is `--radii-0/6/8/12/16/24/999`.

## Components

- **Primary pill** — #6fe0ed fill, #000000 Inter 16px/500 label, 999px radius, 40px tall, 8px 24px padding (8px 16px for header "Sign up"); hover #1aafbf; focus 2px #1aafbf outline offset 2px.
- **Outlined pill** — transparent with a 1px #f4f5f5 inset ring, same size ("Explore products", "View all", "Browse all products →").
- **Dark pill** — #1f403e fill, #f4f5f5 text ("Become a Partner").
- **Announcement bar** — #104b55, 38px, 14px/500 links; utility links underline on hover.
- **Header** — black, 72px; dropdown triggers tint toward #13302e on hover; "Pricing" and "Log in" get a solid #13302e background.
- **Stat card** — #000f0f, 16px radius, 1px #f4f5f51a border, 16px padding, a 36px/700 number, a bold label, a paragraph, a customer logo and "View case study →".
- **Vertical tab list** — icon + label rows; the active row is an aqua pill.
- **Resource card** — dark card with a type badge (Tutorial / Article / Blog), title, date and read time, "Read →".
- **Footer** — 5 columns (Company, Products, Resources, Solutions, Contact) with bold 16px/700 headings and a social-icon row.

## Design System Architecture

No public design system or brand-guideline page was found. The press page (https://www.digitalocean.com/press) offers only a "Brand Assets" logo download (https://web-platforms.sfo2.cdn.digitaloceanspaces.com/DO%20Logo%20Assets.zip) and press contacts; it lists no colors or fonts. The shipped CSS reveals a token-based system with about 400 custom properties: semantic names (`--background-card-emphasized`, `--button-radii`, `--button-input-disabled: #325553`, `--card-pricing-calculator-border-selected`), a "deep" neutral ramp (`--deep-00 #000a0a`, `--deep-50 #000000`, `--deep-100 #000f0f`, `--deep-900 #c9d6d4`, `--deep-1000 #f4f5f5`), `--primary-*` brand ramps (teal, blue, gray, purple, fuchsia, green), `--category-*` illustration colors (`--category-vivid-sky-300 #b5f6ff`, `--category-mustard-100 #ffe50b`), a radius scale (`--radii-*`), and layout tokens. Use of CSS `light-dark()` indicates the tokens are authored for both schemes; only the dark rendering was measured. Breakpoints: 768px (73 rules), 1024px, 1280px, 1440px and several max-width queries (500, 520, 719, 1023px).

## Do's and Don'ts

**Do**
- Keep the canvas black and lift content onto #000f0f cards with 16px radius and a 10% hairline.
- Use Plus Jakarta Sans 800/700 with negative tracking for headlines and Inter for everything else.
- Make every button a 999px pill, 40px tall; aqua #6fe0ed with black text for the main action.
- Darken to #1aafbf on hover and show a 2px outline on focus.
- Lead with numbers and benchmarks in copy and in 36px stat callouts.

**Don't**
- Don't use the stylesheet's #0069ff blue (`--primary-blue-200`) as the action color on this page — the measured CTAs are aqua.
- Don't add drop shadows; the measured page uses fills, hairlines and imagery.
- Don't square off buttons.
- Don't set body copy in Plus Jakarta Sans.
- Don't use pure white for body text; the measured body ink is #e5eceb.

## Responsive Behavior

Measured at a 390px viewport: the header shrinks from 72px to 64px with 1 visible header link and a visible "Menu" toggle, as recorded by the mobile pass. The h1 drops from 48px/56px to 28px/36px with letter-spacing returning to normal, and the h2 drops from 36px/48px to 28px/36px. Body text stays 16px/24px. The primary pill keeps 40px height and 8px 24px padding. The main content band runs from x=0 to x=384 with a single column, and the mobile page is about 6,540px tall versus 5,337px on desktop. Up to 7 card columns were detected in the mobile pass. Carousel and tab-list behaviour on mobile were not measured.

## Iteration Guide

1. Black canvas, #e5eceb Inter body, #f4f5f5 headings in Plus Jakarta Sans 800/700.
2. Add the 38px #104b55 announcement bar and the 72px header with aqua "Sign up".
3. Build cards on #000f0f with 16px radius, 1px #f4f5f51a border and 16px padding.
4. Use #6fe0ed pills for actions (hover #1aafbf), outlined pills for secondary.
5. Lead sections with a centred 36px headline and a narrow 864px text column.
6. Use dramatic dark imagery (terrain, glows) as the depth layer.
7. Re-run the gate after edits; keep radii to 4/8/16/64/999px.
