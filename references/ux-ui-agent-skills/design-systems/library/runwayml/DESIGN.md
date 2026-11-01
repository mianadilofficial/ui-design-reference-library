---
version: alpha
name: Runway
category: "AI & LLM Platforms"
description: "Runway's homepage as measured on the live site (runway.com) — one typeface, abcNormal, at weights 400 to 600; a white canvas with #0c0c0c full-width dark panels; compact 6px-radius buttons in #262626 with white 14px/600 labels; hairlines in #e5e7eb; no box shadows measured; and a blue-violet #2b22fa announcement bar above a photographic hero."

colors:
  canvas: "#ffffff"
  page-largest: "#0c0c0c"
  ink: "#404040"
  primary: "#262626"
  on-primary: "#ffffff"
  announcement-blue: "#2b22fa"
  ink-muted: "#6b7280"
  ink-on-dark: "#ffffff99"
  ink-faint: "#999999"
  hairline: "#e5e7eb"
  primary-hover: "#000000"
  button-secondary-bg: "#f7f7f7"

typography:
  display:
    fontFamily: abcNormal, "abcNormal Fallback"
    fontSize: 38.1715px
    fontWeight: 400
    lineHeight: 43.8972px
    letterSpacing: "-0.477144px"
  display-mobile:
    fontFamily: abcNormal, "abcNormal Fallback"
    fontSize: 28px
    fontWeight: 400
    lineHeight: 32.2px
    letterSpacing: "-0.35px"
  heading:
    fontFamily: abcNormal, "abcNormal Fallback"
    fontSize: 52.9526px
    fontWeight: 400
    lineHeight: 58.2479px
    letterSpacing: "-0.79429px"
  subheading:
    fontFamily: abcNormal, "abcNormal Fallback"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 27.6px
    letterSpacing: "-0.18px"
  body:
    fontFamily: abcNormal, "abcNormal Fallback"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 31px
    letterSpacing: "-0.1px"
  button:
    fontFamily: abcNormal, "abcNormal Fallback"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 20px
  nav:
    fontFamily: abcNormal, "abcNormal Fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-secondary:
    fontFamily: abcNormal, "abcNormal Fallback"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px

rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 12px
  xl: 16px

spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 14px
  s7: 16px
  s8: 20px
  s9: 20.13px
  s10: 24px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 6px 10px
    height: 32px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.md}"
    padding: 8px 12px
    height: 40px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.page-largest}"
  nav-link:
    textColor: "{colors.page-largest}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.ink}"
---

## Overview

Runway's homepage presents the company as a research lab first and a tool second. The headline is "Building Real-World Intelligence", set over a deep-sea photograph of a shark inside a large rounded panel; below it a short paragraph explains that Runway "is building foundational Real-World Intelligence that can understand, simulate and act in the world". The page then splits into "Three platforms built on-top of the same Real-World Intelligence models" — Runway Creative, Runway Dev and Runway Robotics — each with a photograph (a wristwatch, a man in a library, two robotic grippers over a cup), a one-sentence promise, and a row of small buttons. A black panel with tabs "Workflows / Recipes / Characters" follows.

The interface is deliberately quiet so the generated and photographic media carries colour. The measured page uses a single typeface (abcNormal), white as the canvas, `#0c0c0c` as the dominant dark area, and a very small button style. No box shadows were measured on any element. The only saturated colour in the measured backgrounds is the announcement bar at the top of the page, `#2b22fa`, which reads "Enterprises get 2 months of usage free. Sign by 10/31." with a "Contact sales" outline button.

Copy voice is plain and declarative: "Your complete Creative Suite with everything you need, to make anything you want."; "Used by 60m+ creatives around the world. Try free, cancel anytime." Buttons use short verbs: "Try now", "Learn more", "For Enterprise", "Get API Key", "View documentation", "Contact Sales".

## Colors

- **Canvas** `#ffffff` — the main page background between the dark panels.
- **Page largest** `#0c0c0c` — the background with the largest measured area, used for the dark "Workflows" panel; it is also the text colour of the nav links and of the secondary button label.
- **Ink** `#404040` — body text on white (946 characters measured).
- **Ink muted** `#6b7280` — captions, the "We partner with…" line and small supporting copy.
- **Ink faint** `#999999` — tertiary text, such as the inactive platform tab labels.
- **Ink on dark** `#ffffff99` — white at 60% alpha for secondary text on dark panels.
- **Primary** `#262626` — the fill of "Try Runway", "Get API Key", "Try now" and "Learn more" buttons, with white labels. On hover it changes to `#000000`.
- **Button secondary bg** `#f7f7f7` — the light button used for "Try Runway for free" in the hero, with a `#0c0c0c` label.
- **Hairline** `#e5e7eb` — border colour measured on the nav buttons.
- **Announcement blue** `#2b22fa` — the announcement banner fill.

Other measured values exist in the page CSS but are not promoted to tokens: `#eef1f5` (the nav "Login" button background, hovering to a slightly darker `rgb(231, 234, 240)`), `#1a1a1a` (its label), and several additional greys from a Tailwind-style ramp.

## Typography

Every measured character on the page is set in **abcNormal**, with a metrics-matched `abcNormal Fallback` declared directly behind it. The page loads weights 400, 500 and 600 (and a measured 450 for some small text). The CSS also declares `timesNow`, `courierPrime` and `geistMono` families via CSS variables, but abcNormal accounts for all measured text on the homepage. I did not find a source naming the foundry of abcNormal, so no foundry attribution is made here.

Scale on desktop: display (the h1) 38.1715px / 43.8972px at weight 400 with -0.477144px tracking; section headline 52.9526px / 58.2479px with -0.79429px; subheading 24px / 27.6px at 500 with -0.18px; body 20px / 31px with -0.1px; nav 16px / 24px; primary button 14px / 20px at 600; secondary button 16px / 24px at 600. On mobile the h1 is 28px / 32.2px with -0.35px tracking. The section headline ("Three platforms…") is therefore larger than the hero h1, because the hero headline is overlaid on a photograph and kept compact.

Tracking is slightly negative at every text size (-0.1px at 20px, -0.16px at 16px, -0.18px at 24px), which gives the type its tight, editorial look.

### Font substitutes

abcNormal is not provided here. A neutral grotesque such as Inter or Helvetica Neue at the same sizes, weights and tracking is the closest practical stand-in; expect different widths, so re-check line breaks in the 52.9526px headline.

## Layout

The measured page height is 5038px at 1280px wide. Content sits in a wide container with a small side margin — the hero panel nearly spans the viewport in the capture — and big photographic panels with rounded corners are the main structural unit. Below the hero the layout moves to a three-column grid for the platform cards, each column holding a media tile, a 24px sub-headline, a paragraph and a row of buttons. A horizontally scrolling partner-logo strip (Lionsgate, Amazon, Microsoft, Robinhood, Shutterstock) sits between hero and cards.

Recurring gaps: 8px (42 instances), 6px, 24px, 16px, 80px and 48px. Recurring padding: 10px, 8px, 6px, 20px, 14px. The vertical rhythm between major sections is large (80px gap measured), while button groups are tight (6–8px).

## Elevation & Depth

No box shadows were measured on the homepage; the CSS corpus shows only Tailwind's default no-op shadow variables (`--tw-shadow: 0 0 #0000`) and a ring colour of `#3b82f680`. Depth is created by contrast between white and `#0c0c0c` panels, by photography, and by a 1px `#e5e7eb` hairline on some controls. Hover states are colour-only: the "Try Runway" button goes from `#262626` to `#000000`, the "Login" button darkens slightly, and the translucent "Contact sales" outline brightens from `rgba(247, 247, 247, 0.05)` to `rgba(247, 247, 247, 0.15)`.

## Shapes

Radii measured: 6px (11 elements), 8px (9), 4px (5), 12px (2), 16px (1). Small buttons use 6px; the larger secondary and hero buttons use 8px; the announcement "Contact sales" button uses 4px; the large media panels use 12px–16px. There are no pill-shaped buttons in the measured set (the CSS corpus lists a 9999px radius, but no measured element uses it).

## Components

- **Primary button** — `#262626` fill, white 14px/600 label, 6px radius, padding 6px 10px, 32px tall. Used in the nav ("Try Runway") and under each platform card.
- **Secondary button** — `#f7f7f7` fill, `#0c0c0c` 16px/600 label, 8px radius, padding 8px 12px, 40px tall. Used in the hero ("Try Runway for free ›").
- **Outline button on dark** — near-transparent white fill with `#e5e7eb` border and 4px radius ("Contact sales" in the banner).
- **Nav** — 16px/400 abcNormal links in `#0c0c0c` with chevron dropdown markers (Creative, Dev, Robotics, Research, Resources, Enterprise) plus "Pricing"; "Login" and "Try Runway" on the right.
- **Platform tabs** — large 24px labels (Runway Creative / Dev / Robotics) with the inactive ones in grey and a thin underline marking the active one.
- **Enterprise tag** — a small outlined pill label on the dark panel.

## Design System Architecture

Runway publishes brand-asset guidance at https://runway.com/brand-guidelines (opened and read): it asks that the company be called "Runway. Not Runway AI, RunwayML or other variations", sets a minimum logo height of 24px in digital use and 1 inch in print, requires a black wordmark on light backgrounds and a white wordmark on dark ones, defines clear space as the leg height of the "r" plus half for the descender, and forbids placing the symbol next to the wordmark, stacking, replacing the "r", retyping the wordmark, skewing or rotating it. That page gives no colour hex values or typeface names.

No public design system, token package or component library for the website was found. The de-facto system visible in the page CSS is a Tailwind utility build: the root variables are the `--tw-*` set (ring, shadow, drop-shadow and text-opacity), the corpus includes `--tw-prose-kbd-shadows`, and fonts are wired through CSS variables (`--abcNormal`, `--timesNow`, `--courierPrime`, `--geistMono`). The greys seen in the CSS (`#6b7280`, `#e5e7eb`, `#9ca3af`, `#374151`) are Tailwind-style neutrals, which is an observation about the values rather than a statement by Runway.

## Do's and Don'ts

Do:
- Use one typeface at weights 400–600 with small negative tracking.
- Put media (photography, generated video) in large rounded panels and keep interface chrome minimal.
- Keep buttons compact: 6px radius, 14px/600 label, `#262626` fill, darkening to `#000000` on hover.
- Alternate white and `#0c0c0c` sections.
- Follow the brand-guidelines page for the wordmark: black on light, white on dark, never retyped.

Don't:
- Add drop shadows; none are measured.
- Call the company "Runway AI" or "RunwayML" in copy.
- Use pill buttons or saturated fills for ordinary actions; the one saturated colour measured is the announcement bar.
- Set body copy below 14px on white panels.

## Responsive Behavior

Two viewports were measured: 1280px and 390px. At 390px the h1 shrinks from 38.1715px to 28px (line-height 32.2px, tracking -0.35px). The three-column platform grid and the inline nav are desktop layouts; no mobile-specific measurements beyond the h1 were captured, so no breakpoint values are stated. Touch targets on desktop are 32px (primary) and 40px (secondary).

## Iteration Guide

1. Set the canvas to `#ffffff`, text to `#404040`, and the dark panel to `#0c0c0c`.
2. Load abcNormal (or a substitute) and apply the scale: 52.9526px headline, 24px subheading, 20px body, 14px/600 buttons.
3. Place media first; add one `#262626` button and optionally one `#f7f7f7` button per card.
4. Keep radii to 6px (small controls), 8px (larger controls) and 12–16px (panels).
5. Add the announcement bar (`#2b22fa`) only for time-limited offers.
6. Re-verify that every colour and size you add is one of the tokens above.
