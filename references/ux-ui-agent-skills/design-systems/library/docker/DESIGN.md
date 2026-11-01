---
version: alpha
name: Docker
category: "Developer Tools & IDEs"
description: "Docker's site pairs ABC Repro 64px/500 headlines (-1.92px) with Inter 16px/22.4px body in #2c333f on a #f9fafb canvas, #2560ff blue buttons (8px radius hero, 4px header) with #003db5 borders, 18px-radius product cards, a #00084d announcement bar, #0e1217 dark hero and terminal panels in ui-monospace."
colors:
  canvas: "#f9fafb"
  ink: "#2c333f"
  primary: "#2560ff"
  on-primary: "#ffffff"
  surface-dark: "#0e1217"
  ink-strong: "#000000"
  ink-slate: "#475569"
  ink-on-dark: "#e6ebf2"
  ink-on-dark-muted: "#b9c2cf"
  hairline: "#c8cfda"
  button-primary-border: "#003db5"
  card-border: "#0f172a12"
  announcement-text: "#ffffffcc"
  announcement-bg: "#00084d"
  surface-card: "#ffffff"
  surface-navy: "#0c1530"
  button-ghost-border: "#a9b4c6"
typography:
  display:
    fontFamily: Repro, Helvetica, Arial, sans-serif
    fontSize: 64px
    fontWeight: 500
    lineHeight: 67.2px
    letterSpacing: "-1.92px"
  display-mobile:
    fontFamily: Repro, Helvetica, Arial, sans-serif
    fontSize: 36px
    fontWeight: 500
    lineHeight: 37.8px
    letterSpacing: "-1.08px"
  subheading:
    fontFamily: Inter, -apple-system, "system-ui", "Segoe UI", Roboto, Helvetica, Arial, sans-serif
    fontSize: 20.48px
    fontWeight: 500
    lineHeight: 25.6px
    letterSpacing: "-0.24576px"
  body:
    fontFamily: Inter, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
    letterSpacing: "-0.2px"
  button-sm:
    fontFamily: Inter, Helvetica, Arial, sans-serif
    fontSize: 12px
    fontWeight: 500
    lineHeight: 15.6px
    letterSpacing: "-0.15px"
  button:
    fontFamily: Inter, Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 18.2px
    letterSpacing: "-0.15px"
  announcement:
    fontFamily: Inter, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 18.2px
    letterSpacing: "-0.225px"
  card-title:
    fontFamily: Inter, Helvetica, Arial, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 25.2px
    letterSpacing: "-0.225px"
rounded:
  xs: 4px
  sm: 8px
  md: 10px
  lg: 14px
  xl: 18px
  2xl: 22px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3.5px
  s3: 4px
  s4: 6px
  s5: 7px
  s6: 8px
  s7: 10px
  s8: 11px
  s9: 12px
  s10: 14px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 12px 20px
    height: 44px
    border: "1px solid #000000"
    boxShadow: rgb(67, 76, 95) 0px 0px 1px 1px inset
  button-secondary:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 12px 20px
    height: 44px
    border: "1px solid #000000"
    boxShadow: rgb(67, 76, 95) 0px 0px 1px 1px inset
  button-header:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 8px 12px
    height: 36px
    borderColor: "{colors.button-primary-border}"
    boxShadow: rgb(192, 224, 250) 0px 0px 1px 1px inset
  button-small:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.xs}"
    padding: 8px 12px
    height: 34px
    borderColor: "{colors.button-primary-border}"
    boxShadow: rgb(192, 224, 250) 0px 0px 1px 1px inset
  button-small-outline:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.primary}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.xs}"
    padding: 8px 12px
    height: 34px
    borderColor: "{colors.button-ghost-border}"
  announcement-bar:
    backgroundColor: "{colors.announcement-bg}"
    textColor: "{colors.announcement-text}"
    typography: "{typography.announcement}"
  nav:
    backgroundColor: "{colors.canvas}"
    padding: 0px 24px
  product-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.card-title}"
    rounded: "{rounded.xl}"
    padding: 32px
    borderColor: "{colors.card-border}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.button-sm}"
---

# Docker

## Overview

Docker's home page (title "Docker | Secure Sandboxes for AI Agents") now sells sandboxes and governance for AI agents, and the design mixes a calm product-marketing layout with terminal-style detail. A navy #00084d announcement bar ("[U+2728] New · Get $250 in credits for Cloud Sandboxes. Claim credits →") runs across the top. Below it a light header holds the whale logo, dropdown menus (Products, Support, Pricing), Blog and Docs, a search icon, an outlined "Sign in" and a blue "Contact Sales".

The hero is a dark #0e1217 panel inset within the page: "Trust Docker for the Agents You Don't" centred in white ABC Repro at 64px, a one-line subtitle, and two buttons — blue "Get started" and white "Learn more" — over a field of scattered monospace letters and dots. Directly beneath, three white product cards overlap the hero's bottom edge (Docker Sandboxes, Docker AI Governance, Docker Hardened Images), each with a dark rounded icon tile and a blue "Read more" link, sitting on a blue gradient glow. A logo strip (JPMorgan Chase, Rakuten, Adobe, Notion) follows.

The middle of the page is product storytelling: "Invisible to developers. Total control for security." over a pair of terminal panels ("Your laptop. One command." in a black terminal; "Your console. Fourteen checks." in a navy log view with colored status pills), "The runtime under every agent" with four cards mixing copy, terminal snippets and wireframe 3D shapes, "Unlock the Autonomy of Agents, Safely" with three short columns, a stats row ("91% of the Fortune 100", "20B+ pulls a month on Docker Hub", "20M+ developers"), a Docker Desktop screenshot, and "Build better, together" with outlined product pills. A six-column footer closes the page.

The voice is crisp and parallel: "Your laptop. One command." / "Your console. Fourteen checks.", "Same guarantees. Same stack."

## Colors

- **Canvas #f9fafb** — the page background (6,917 area units; 68% of the captured screen).
- **Surface-card #ffffff** — product cards and secondary buttons (2,581 units).
- **Ink #2c333f** — the most-read text (2,103 characters). **Ink-strong #000000** — headings, card titles and footer links. **Ink-slate #475569** — secondary text (567 characters).
- **Primary #2560ff** — every blue button and the "Read more" links (141 characters of blue text). The CSS names related roles `--menuLinkButtonColor: #2560ff`, `--listItemColor: #2560ff`, `--buttonPrimaryFocusBackground: #2560ff`.
- **Button-primary-border #003db5** — the 1px border of header and small blue buttons (`--buttonPrimaryBorder`). Their inset ring is `rgb(192, 224, 250)` (`--buttonPrimaryActiveShadow: #c0e0fa`).
- **On-primary #ffffff**.
- **Surface-dark #0e1217** — the hero panel and terminals; **surface-navy #0c1530** — the governance console panel.
- **Ink-on-dark #e6ebf2 / ink-on-dark-muted #b9c2cf** — text on those dark panels.
- **Announcement-bg #00084d / announcement-text #ffffffcc** — the top bar.
- **Hairline #c8cfda** (14 borders) and **button-ghost-border #a9b4c6** (9 borders, outlined small buttons). **Card-border #0f172a12** — the very faint 7%-alpha border on product cards.

The terminal panels use the classic window-dot colors #ff5f56, #ffbd2e and #27c93f and status-pill tints (#82cccc, #9be9c4, #7da3f4), which are content details rather than brand UI. Docker's media page names the brand colors Ocean Blue, Light Blue, Deep Blue and White for logo use, without publishing their values in text.

## Typography

Loaded fonts: **Inter** (400, 500, 600, 700) and **Repro / ABC Repro** (500, 700). The terminal panels use the system `ui-monospace` stack (857 characters).

- **Display** — Repro 64px/67.2px, weight 500, -1.92px (-0.03em); used for both the hero and h2 section headings.
- **Subheading** — Inter 20.48px/25.6px, 500, -0.24576px ("Your laptop. One command.").
- **Card-title** — Inter 18px/25.2px, 500, -0.225px (product card text).
- **Body** — Inter 16px/22.4px, 400, -0.2px.
- **Button** — Inter 14px/18.2px, 500, -0.15px (hero and header buttons). **Button-sm** — 12px/15.6px, 500, -0.15px (small buttons and footer links).
- **Announcement** — Inter 16px/18.2px, 600, -0.225px.

Every Inter size carries slight negative tracking (from -0.15px at 12–14px to -0.25px at 20px). For substitutes of ABC Repro, use a grotesque with similar proportions and keep the 500 weight and -0.03em tracking at display sizes.

## Layout

Measured at 1280px. The page body is a centred 1,160px frame (header and footer both measure 1,160px wide) with content from x=101 to x=1206 and up to 3 columns. The hero is a dark rectangle within that frame; the three product cards are 347px wide with 32px padding and overlap the hero's bottom edge. The terminal comparison is 2 columns; the runtime cards a 2×2 grid; the stats row 3 columns; the footer 6 columns (Products, Features, Developers, Pricing, Company, Languages).

Gaps: 10px (40 times), 12px, 8px, 6px, 3.5px, 24px, 20px, 18px, 2px, 100px. Paddings: 40px (41 times), 12px, 20px, 28px, 10px, 48px, 14px, 24px, 8px, 32px. The CSS declares a masonry gap `--masonGap: 1.25rem`. The page is 5,343px tall.

## Elevation & Depth

Subtle and specific. Product cards carry `rgba(15, 23, 42, 0.03) 0px 1px 2px 0px` (4 elements) and a faint 7% border; on hover their background switches from #f9fafb to #ffffff. Blue buttons use a 1px inset ring rather than a drop shadow; two elements carry soft blue glows (`rgba(37, 96, 255, 0.4) 0px 16px 36px -22px` and `rgba(37, 96, 255, 0.35) 0px 18px 40px -24px`). The blue gradient under the product cards and the dark hero panel provide the main depth contrast. Focus shows a 3px solid light-blue outline (#c0e0fa family) with 1px offset.

## Shapes

Radii measured: 4px (header and small buttons), 8px (hero buttons), 10px and 14px (panels, with 14px 14px 0 0 and 22px 22px 0 0 top-only rounding on terminal windows), 18px (product cards), 999px pills (4 elements) and 50% circles (9 elements, such as social icons). The mix is deliberately modest: small radii on controls, larger on cards and windows.

## Components

- **Primary button (hero)** — #2560ff fill, white Inter 14px/500 label, 8px radius, 44px tall, 12px 20px padding, `1px solid #000000` border and an `rgb(67, 76, 95)` inset ring ("Get started").
- **Secondary button (hero)** — white fill, black label, same metrics ("Learn more").
- **Header button** — #2560ff, 4px radius, 36px tall, 8px 12px, #003db5 border and #c0e0fa inset ring ("Contact Sales"); on hover the border becomes transparent.
- **Small button** — same styling at 12px/34px ("Contact sales", "Buy now"); outlined twin is white with #2560ff text and a #a9b4c6 border.
- **Announcement bar** — #00084d with #ffffffcc 16px/600 text; link underlines on hover.
- **Header nav** — dropdown triggers and links that underline on hover.
- **Product card** — #f9fafb (#ffffff on hover), 18px radius, 32px padding, 7% border, dark icon tile at the top right, title, description and a blue link.
- **Terminal panel** — dark window with three colored dots, monospace commands and colored status pills.
- **Stat** — 3-column large numbers with two-line captions.
- **Footer** — 6 columns of 12px links on #f9fafb, social icons and legal row.

## Design System Architecture

Docker publishes logo guidelines at https://www.docker.com/company/newsroom/media-resources/: the primary logo combines the symbol and wordmark; the symbol is the secondary logo and replaces the retired vertical design; logos must appear in one of the primary brand colors (Ocean Blue, Light Blue, Deep Blue, White); minimum size 24px; clear space required; and a list of misuses (don't flip, tilt, squeeze, stretch, decolorize, crop, use the wordmark alone, reverse icon and wordmark, change spacing or proportions). Logos download from https://www.docker.com/static/Docker-Logos-1.zip. No public component library was found, but the shipped CSS exposes a semantic token layer in camelCase custom properties — `--buttonPrimaryText`, `--buttonPrimaryBorder`, `--buttonPrimaryFocusShadow`, `--buttonSecondaryActiveText`, `--buttonTertiaryHoverText: #003db5`, `--buttonCtaDisabledText: #6c7e9d`, `--inputBorder: #8b99b2`, `--inputBackground`, `--codeBoxBackgroundColor: #e7eaef`, `--successBackground: #ebf9ee`, `--dangerBackground: #fddfdf`, `--activeTabBackgroundColor: #000`, `--standardCopy: #434c5f` — showing primary, secondary, tertiary and CTA button families each with hover, focus, active and disabled states. Breakpoints center on 980px (min) / 979px (max), with 767px and 499px below.

## Do's and Don'ts

**Do**
- Use ABC Repro 500 for headlines at 64px with -0.03em tracking; Inter for everything else with slight negative tracking.
- Keep the canvas #f9fafb and use white cards that brighten on hover.
- Make primary actions #2560ff; 8px radius at 44px for hero buttons, 4px radius at 34–36px in the header.
- Show real terminal output and product UI in dark panels.
- Follow the logo rules: one of the four brand colors, at least 24px, with clear space.

**Don't**
- Don't use the retired vertical logo, or the wordmark alone.
- Don't add heavy shadows; measured shadows are 3% or tinted blue glows.
- Don't round buttons into pills.
- Don't recolor, stretch, tilt or crop the logo.
- Don't use pure white as the page background.

## Responsive Behavior

Measured at a 390px viewport: the whole page scales down, the extraction showing text sizes multiplied by 0.7 (body 16px → 11.2px/15.68px, button 14px → 9.8px/12.74px, 12px → 8.4px). The h1 and h2 drop from 64px/67.2px to 36px/37.8px with -1.08px tracking. The hero "Get started" button becomes 32px tall at full content width (332px) with 8.4px 14px padding and a 5.6px radius. The header is 114px tall (announcement plus nav) with 0px 16.8px padding, 2 visible header links and a visible "Toggle menu" control, as recorded by the mobile pass. Content runs from x=29 to x=361 in a single column; the mobile page is about 7,975px tall versus 5,343px on desktop. Other mobile behaviour was not measured.

## Iteration Guide

1. Set #f9fafb canvas, Inter body in #2c333f with -0.2px tracking, headings in ABC Repro 500.
2. Add the #00084d announcement bar and a light header with a 36px #2560ff "Contact Sales".
3. Build the hero as a dark #0e1217 panel with centred 64px white headline and the 44px button pair.
4. Overlap three 18px-radius product cards on the hero's bottom edge.
5. Tell the product story with terminal panels and short parallel headlines.
6. Close with stats, a product screenshot and a 6-column footer.
7. Re-run the gate after edits; respect the media-resources logo rules.
