---
version: alpha
name: VTEX
category: "Design Systems"
description: "The VTEX commerce-suite marketing site (vtex.com/en-us): VTEXTrust type at 60px/700 with negative tracking, deep navy ink #142032, Rebel Pink #f71963 for buttons and highlights, a pale blue-white canvas #f5f9ff, 16px button radius and translucent frosted cards over a pink-to-cyan gradient."
colors:
  canvas: "#f5f9ff"
  page-body: "#ffffff"
  ink: "#142032"
  ink-slate: "#5b6e84"
  ink-body: "#4a4f5c"
  ink-faint: "#9ca3af"
  primary: "#f71963"
  on-primary: "#ffffff"
  primary-hover: "#e0155a"
  surface-footer: "#0a0f1a"
  hairline: "#e7e9ee"
  nav-bg: "#ffffffd9"
  card-bg: "#ffffffbd"
  card-border: "#ffffffc7"
  footer-border: "#1f2937"
typography:
  display:
    fontFamily: VTEXTrust, system-ui, sans-serif
    fontSize: 60px
    fontWeight: 700
    lineHeight: 66px
    letterSpacing: "-1.2px"
  display-mobile:
    fontFamily: VTEXTrust, system-ui, sans-serif
    fontSize: 42px
    fontWeight: 700
    lineHeight: 46.2px
    letterSpacing: "-0.84px"
  heading:
    fontFamily: VTEXTrust, system-ui, sans-serif
    fontSize: 36px
    fontWeight: 700
    lineHeight: 40px
    letterSpacing: "-0.72px"
  subheading:
    fontFamily: VTEXTrust, system-ui, sans-serif
    fontSize: 20px
    fontWeight: 700
    lineHeight: 28px
    letterSpacing: "-0.4px"
  body:
    fontFamily: VTEXTrust, system-ui, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22.75px
  button:
    fontFamily: VTEXTrust, system-ui, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  nav:
    fontFamily: VTEXTrust, system-ui, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
rounded:
  xs: 4px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 20px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 12px 32px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.xl}"
    padding: 0px 16px 0px 44px
    height: 48px
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    borderColor: "{colors.card-border}"
    boxShadow: rgba(20, 32, 50, 0.07) 0px 14px 32px 0px, rgba(255, 255, 255, 0.78) 0px 1px 0px 0px inset
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.primary}"
    borderColor: "{colors.footer-border}"
---

## Overview

This file describes the VTEX corporate website at `https://www.vtex.com/en-us` (document title "The AI-Native commerce suite of choice for bold CIOs and CEOs"), not the VTEX Styleguide documentation site. VTEX is a commerce platform vendor, and the page is an enterprise marketing home: a hero reading "The AI-Native Commerce Suite for CIOs and CEOs." in large navy bold type with the last line, "CIOs and CEOs.", in Rebel Pink, a one-sentence subline, and a pink "Get started" button with an arrow. The hero sits on a soft gradient wash that moves from pale cyan at the top left to pale pink at the right. Below, a utility line (English, Support, Company, VTEX Club) and a translucent main navigation bar (VTEX wordmark, Products, Solutions, Resources, News, a pink "Get started" button) are visible in the capture; a small round pink chat button floats at the lower right.

The rest of the page alternates a pale blue-white canvas with white and frosted-glass cards. A pink eyebrow in letter-spaced uppercase ("THE AI-NATIVE COMMERCE SUITE FOR GLOBAL ENTERPRISE") precedes a centered h2, "One complete suite to unify your customer experiences", then three product cards (VTEX Commerce Platform, VTEX CX Platform, VTEX Ads Platform) each with a pink line icon. A "Featured Talks" row follows with three video cards whose thumbnails were still blank pale-blue placeholders when captured, each tagged "FEATURE TALK" with a duration and a "Watch on YouTube" link. The footer is near-black navy with a newsletter block.

The voice is confident B2B enterprise English: "bold CIOs and CEOs", "AI-native", "unify". Imagery is mostly abstract (gradients, glassy surfaces) and iconographic rather than photographic. VTEX's own brand guidelines page (opened at https://vtex.com/en-us/brand-guidelines/) names the primary color "Rebel Pink", a secondary "Serious Black", balance colors "Plain White/White Ice", and describes a typography system built on trust with a single-weight approach and a grid-based composition; the measured site matches that pink-on-white identity.

## Colors

- **Canvas `#f5f9ff`** is a pale blue-white used as the section background; **page-body `#ffffff`** is the main white (largest background area).
- **Ink `#142032`** is the heading and nav text color and the site's `--foreground` variable; the generator's "most-read" text color, **ink-slate `#5b6e84`**, is the muted secondary text (about 2,792 weighted characters), and is kept under that name. **Ink-body `#4a4f5c`** is the measured paragraph color and **ink-faint `#9ca3af`** is tertiary text.
- **Primary `#f71963`** is Rebel Pink (the `--primary` and `--ring` variables); **on-primary `#ffffff`** is the button label, and **primary-hover `#e0155a`** is the measured hover fill.
- **Surface footer `#0a0f1a`** is the near-black footer, with a `#1f2937` border.
- **Hairline `#e7e9ee`** is the commonest border color; the frosted navigation uses `#ffffffd9` and cards use `#ffffffbd` with a `#ffffffc7` border.

The root variables also define soft pink `#ffc4dd` and `#fff3f6` (accent), a destructive red `#dc2626`, and Tailwind color ramps; the last are framework defaults and not brand colors.

## Typography

One family carries the whole page: **VTEXTrust** (loaded in weights 100 to 900), declared as `--default-font-family` and `--font-display` with a `system-ui, sans-serif` fallback. A Lato face is also loaded but carries no measured characters. The site itself falls back to system-ui, which is the safe substitute when VTEXTrust is unavailable.

- **Display** (h1): 60px, 700, line height 66px, letter-spacing -1.2px; 42px/46.2px with -0.84px on the 390px mobile measurement.
- **Heading** (h2): 36px, 700, 40px line, -0.72px.
- **Subheading** (h3 card titles): 20px, 700, 28px line, -0.4px.
- **Body**: 14px, 400, line height 22.75px; 18px is the second-most used size for lead text.
- **Button**: 16px, 500, 24px line height. **Nav**: 14px, 500, 20px line.

Tracking tightens with size (18px/-0.36px, 24px/-0.48px) and uppercase eyebrows use +0.7px at 14px. Weight 400 carries most text, with 700 for headings.

## Layout

The page uses a centered container with about 24px side padding at desktop, a header 142px tall (`--site-header-h`), and sections separated by generous 64px to 80px paddings. Product cards sit three to a row with 24px-class gaps. The measured spacing scale is 2, 4, 6, 8, 10, 12, 16, 20, 24 and 32px; frequent gaps are 16, 6, 8 and 24px. Headline blocks are left-aligned in the hero and centered in the following sections. The root `--breakpoint-sm` is 40rem and the system builds on Tailwind utilities and shadcn-style variables (`--card`, `--muted`, `--radius` 12px).

## Elevation & Depth

Depth is glassy and quiet. Cards have a translucent white fill (`#ffffffbd`), a near-white border (`#ffffffc7`), and the shadow `rgba(20, 32, 50, 0.07) 0px 14px 32px 0px` plus a 1px white inset highlight, which makes them look like frosted panels over the gradient. Utility-class shadows (`rgba(0, 0, 0, 0.1) 0px 1px 3px`) appear on ten elements, and the primary button gains `rgba(0, 0, 0, 0.1) 0px 10px 15px -3px` on hover. The navigation is a translucent white band (`#ffffffd9`).

## Shapes

Radii form a friendly mid-range scale: 4px (small), 8px, 12px (the `--radius` variable), 16px (buttons and cards, the most frequent), 20px (inputs and the top corners of some panels), and full pills (the chat button and badges). The primary and secondary "Get started" buttons both use 16px. Inputs use 20px with 44px of left padding to leave room for a search icon.

## Components

- **Primary button.** Fill `#f71963`, white label, VTEXTrust 16px weight 500, height 48px, padding 12px 32px, radius 16px, a trailing arrow icon; hover `#e0155a`. The compact nav variant is 36px tall with 14px weight 600 and padding 10px 24px.
- **Navigation.** Translucent white bar, `#142032` 14px weight 500 links with chevrons for dropdowns.
- **Text input.** White, 48px high, 20px radius, text `#142032`, 14px.
- **Product card.** Frosted white, 16px radius, pink outline icon, h3 at 20px, grey description at 14px.
- **Video card.** White card with a pale placeholder image area, uppercase pink tag, bold title, meta row (clock and duration, pink "Watch on YouTube" link).
- **Eyebrow and text link.** Pink, letter-spaced uppercase labels and pink "Explore all products" links with arrow.
- **Footer.** `#0a0f1a` background with newsletter capture and pink text accents.

## Design System Architecture

VTEX publishes a design system called the VTEX Styleguide at https://styleguide.vtex.com. When I opened it, the page was client-rendered and only the title "VTEX Styleguide" was readable, so no tokens could be quoted from it, and I found no evidence in the measured CSS that vtex.com uses it. The brand rules are on VTEX's brand guidelines page (https://vtex.com/en-us/brand-guidelines/), which I opened: it lists Rebel Pink as the primary color, Serious Black as secondary, White and White Ice as balance colors, UI feedback colors derived from Serious Black, a trust-based typographic system with a single-weight approach, and grid-based composition. It gives no hex values in the text I read.

The marketing site's own de-facto system is Tailwind CSS with shadcn-style semantic variables in the root: `--background`, `--foreground` (`#142032`), `--primary` (`#f71963`), `--primary-foreground`, `--card`, `--muted` (`#f3f4f6`), `--accent` (`#fff3f6`), `--border` and `--input` (`#e5e7eb`), `--ring` (`#f71963`), `--radius` (12px), plus sidebar and chart variables. The Styleguide is therefore described here only for context; every value comes from the live site's measurement and CSS.

## Do's and Don'ts

- Do reserve Rebel Pink `#f71963` for primary actions, key words in headlines, eyebrows and links.
- Do pair navy `#142032` headings with slate `#5b6e84` and `#4a4f5c` body text.
- Do use 16px radii on buttons and cards, with tight negative tracking on large type.
- Do keep cards frosted and shadows soft.
- Don't use more than one accent color; the page is navy, pink and white.
- Don't set card descriptions larger than the 14px body size.
- Don't use the Tailwind default ramps in the CSS as brand colors.
- Don't use the Styleguide's values here; they were not read.

## Responsive Behavior

The h1 shrinks from 60px/66px to 42px/46.2px at 390px wide, keeping its negative tracking proportion. The three-card rows are expected to stack at narrower widths following Tailwind's breakpoints (the root `--breakpoint-sm` is 40rem); only the h1 change was measured. The header is 142px tall at desktop, with the utility line above the main navigation. Buttons keep a 48px or 36px height.

## Iteration Guide

1. Set canvas `#f5f9ff`, white `#ffffff`, ink `#142032`, primary `#f71963`.
2. Type everything in VTEXTrust or a neutral substitute: h1 60/66 at 700 with -1.2px, h2 36/40, body 14/22.75.
3. Build buttons at 48px high, 12px 32px padding, 16px radius, hover `#e0155a`.
4. Use frosted cards with `#ffffffbd` fills, `#ffffffc7` borders, and the single 14px 32px soft shadow.
5. Add the gradient wash only behind the hero.
6. Use pink eyebrow labels in uppercase to introduce sections.
