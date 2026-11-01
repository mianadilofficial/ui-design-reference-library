---
version: alpha
name: Sentry
category: "Backend, Database & DevOps"
description: "Sentry's homepage as measured on the live site — a #1f1633 'rich black' purple canvas over a #150f23 base, white Dammit Sans display type at 88px/700 with Rubik text and Monaco code, uppercase 14px/700 buttons with 8px radius, a hot pink #fd44b0 highlight word in headlines, blurple #6a5fc1 pills, and violet-framed product cards."

colors:
  canvas: "#1f1633"
  page-largest: "#150f23"
  ink: "#ffffff"
  primary: "#ffffff"
  on-primary: "#1f1633"
  surface-violet: "#422082"
  surface-soft: "#f6f6f8"
  violet-dark: "#362d59"
  violet-mid: "#584674"
  blurple: "#6a5fc1"
  pink-hot: "#fd44b0"
  lime: "#c2ef4e"
  code-comment: "#6a737d"
  code-text: "#e1e4e8"
  code-string: "#9ecbff"
  code-keyword: "#b392f0"
  code-blue: "#79b8ff"
  code-red: "#f97583"

typography:
  display:
    fontFamily: "\"Dammit Sans\", sans-serif"
    fontSize: 88px
    fontWeight: 700
    lineHeight: 105.6px
  display-mobile:
    fontFamily: "\"Dammit Sans\", sans-serif"
    fontSize: 50.1901px
    fontWeight: 500
    lineHeight: 60.2281px
  heading:
    fontFamily: "\"Dammit Sans\", sans-serif"
    fontSize: 60px
    fontWeight: 500
    lineHeight: 66px
  subheading:
    fontFamily: Rubik, -apple-system, "system-ui", "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 30px
  body:
    fontFamily: Rubik, -apple-system, "system-ui", "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 32px
  button:
    fontFamily: Rubik, -apple-system, "system-ui", "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 16px
    letterSpacing: 0.2px
    textTransform: uppercase
  code:
    fontFamily: Monaco
    fontSize: 16px
    fontWeight: 400
  button-secondary:
    fontFamily: Rubik, -apple-system, "system-ui", "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 16px
    letterSpacing: 0.2px
    textTransform: uppercase
  input:
    fontFamily: Rubik, -apple-system, "system-ui", "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px

rounded:
  xs: 6px
  sm: 8px
  md: 10px
  lg: 10.6px
  xl: 12px
  2xl: 13px
  3xl: 18px
  pill: 9999px

spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 20.3px
  s9: 24px
  s10: 32px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 12px 16px
    height: 40px
  button-privacy:
    backgroundColor: "{colors.surface-soft}"
    textColor: "{colors.violet-dark}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 12px 16px
  banner-pill:
    backgroundColor: "{colors.blurple}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 8px 12px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
  text-input:
    backgroundColor: "{colors.surface-violet}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    padding: 8px 16px
    height: 40px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
---

## Overview

Sentry's homepage is a dark-purple, illustrated, slightly irreverent developer page. The hero headline reads "Code breaks, fix it faster", with the word "breaks," in hot pink, tilted and set in a hand-drawn style, over a starfield. The sub-line is "Application monitoring software considered "not bad" by millions of developers." Two uppercase buttons follow — "GET STARTED" (white) and "GET DEMO" (outlined with a pink border) — and below them a mascot illustration of a character with a ray gun and a retro-computer backpack, flanked by cut-off product panels (Errors, Replays, Logs, Traces) and a "Seer" root-cause card with lime-green progress bars. A logo row (GitHub, Disney, Atlassian, Linear, Vercel, Cloudflare) leads into "Developer first. Always." where "Always." is pink, and two framed cards with a yellow-green border show an `npm install @sentry/browser` snippet and a "Root Cause" explanation.

The microcopy mixes engineering plainness with jokes: "Monitor in five lines", "Drop in the SDK. No agents to install. No performance surprises.", and a "Marketing Mode" toggle in the upper right corner of the page. A banner pill above the headline reads "Sentry MCP: fix production issues right from your LLM →".

By measured area the page is `#150f23` (24,843 units) and `#1f1633` (6,518 units), with small areas of `#422082`, white and `#6a5fc1`. Most characters are code or system text: Monaco 8,691 characters, Rubik 5,728, Dammit Sans 261.

## Colors

The page declares its palette in CSS variables, so values below are read from the live `:root` and from measured elements.

- **Canvas** `#1f1633` is `--color-rich-black`, the page background. **Page largest** `#150f23` is the deepest, largest-area background (the hero starfield and lower sections); the CSS also defines `--color-utility-black: #181225`.
- **Ink** `#ffffff` — headline and body text on the canvas (5,677 characters).
- **Primary** `#ffffff` with `on-primary` `#1f1633` — the measured "SIGN UP" button (white fill, `#1f1633` label, 8px radius), which matches the white "GET STARTED" button in the capture.
- **Surface soft** `#f6f6f8` and **violet dark** `#362d59` — the cookie banner's button ("Check out our privacy policy"); `#f6f6f8` is `--bg-secondary` and `#362d59` is `--color-dk-violet` / `--text-primary`. The extractor first mis-picked this cookie button as the primary CTA, so it is documented as a separate component and is not the brand action.
- **Surface violet** `#422082` — `--color-alt-dk-blurple`, the fill of input-like fields.
- **Blurple** `#6a5fc1` — `--color-blurple`, the fill of the MCP banner pill; it darkens to `#554c9a` on hover.
- **Violet mid** `#584674` — `--color-md-violet`, a measured border colour.
- **Pink hot** `#fd44b0` — `--color-hot-pink`, the highlighted headline words.
- **Lime** `#c2ef4e` — the lime text/bars in the Seer panel (145 characters measured).
- **Code colours** — `#6a737d` comments, `#e1e4e8` plain text, `#9ecbff` strings, `#b392f0` keywords, `#79b8ff` blue and `#f97583` red, the syntax palette in the code samples.

Also declared: `--color-md-pink #e1567c`, `--color-md-orange #f4834f`, `--color-lt-orange #ffb287`, `--color-lt-pink #fa7faa`, `--color-lt-yellow #ffdb4a`, `--color-md-yellow #f2b712`, `--color-dk-blurple #4e2a9a` and others — a warm gradient family used in illustrations, not as UI fills. The page also has a light theme's `--bg-primary #fff`, `--color-border #ececf1` and `--color-gray-3 #cfcfdb`.

## Typography

Three families are loaded: **Dammit Sans** (headlines), **Rubik** (UI and body; weights 400, 500, 700 and italics) and **IBM Plex Mono** / Monaco for code. Dammit Sans is declared as `--font-dammit-sans` and used for "Code breaks, fix it faster" and the section titles; I found no page that states who designed it, so no attribution is made. Rubik is the default family (`--default-font-family`), and `--font-mono` lists IBM Plex Mono with Consolas, Liberation Mono, Menlo and Courier behind it.

Hero scale is in the CSS: `--text-hero-h1` 5.5rem (88px, weight 700, line-height 105.6px) and `--text-hero-h2` 3.75rem (60px, weight 500, line-height 66px). On mobile `--text-hero-h1-mobile` is 3.13688rem (50.1901px) and `--text-hero-h2-mobile` is 2.8125rem. The subheading is Rubik 24px / 30px at 500, body is Rubik 16px with a generous 32px line height, and buttons are Rubik 14px at 700, uppercase, +0.2px tracking, 16px line height. Secondary actions use the same size at 500. Code is Monaco 16px.

### Font substitutes

Dammit Sans is not supplied here. A rounded humanist sans at weight 700 will not match its hand-drawn quality; for mockups use Rubik at 700 for display, which the page already loads for UI text. IBM Plex Mono is open source.

## Layout

The measured page is 8,800px tall at 1280px. The nav is a single row: logo and wordmark left; "PLATFORM", "SOLUTIONS", "RESOURCES" (with chevrons), "DOCS", "PRICING", "SIGN IN" in uppercase; then "GET DEMO" and "GET STARTED" buttons. Headlines are centred in the hero and left-aligned from "Developer first. Always." on. The CSS declares breakpoints at 576px (`--breakpoint-sm`), 768px (md), 992px (lg) and 1152px (xl).

Spacing: gaps 8px (102 uses), 4px, 6px, 16px, 20px, 24px and 64px; paddings 12px, 24px, 8px and 32px. The product panels in the hero are cropped by the viewport edges on both sides, which gives an overflowing, depth-heavy collage feel.

## Elevation & Depth

Depth comes from layered purples, framed panels and illustration rather than shadow. The few measured shadows are small: an inset `rgba(0, 0, 0, 0.15) 0px 2px 10px 0px` on fields, `rgba(0, 0, 0, 0.08) 0px 2px 8px 0px` on the "Marketing Mode" toggle (which grows to `rgba(0, 0, 0, 0.18) 0px 8px 24px 0px` on hover) and `rgba(0, 0, 0, 0.2) 0px 1px 3px 0px`. The CSS also contains hard offset shadows such as `0 2px #362d591a` and focus rings like `0 0 0 3px #6a5fc11a`. Cards are drawn with a 1px or 2px coloured border (a yellow-green or violet outline in the capture) on the dark canvas.

## Shapes

Radii measured: 10px (40 elements), 8px (21), 12px (9), 10.6px (4), 18px (2), 13px (1), 6px (1), plus a fully rounded `3.35544e+07px` (3) for pills and one 50% circle. Buttons are 8px; cards are 10px to 12px; the toggle is 12px. The CSS defines `--radius-sm` .25rem, `--radius-md` .375rem, `--radius-lg` .5rem, `--radius-xl` .75rem and `--radius-2xl` 1rem as the Tailwind scale.

## Components

- **Primary button** — white fill, `#1f1633` label, Rubik 14px/700 uppercase, 8px radius, padding 12px 16px, 40px tall.
- **Outline button** — transparent with a pink border ("GET DEMO").
- **Banner pill** — `#6a5fc1` fill, white label, 8px radius, 36px tall, hover `#554c9a`.
- **Cookie button** — `#f6f6f8` fill, `#362d59` label (third-party banner copy "Check out our privacy policy").
- **Marketing Mode toggle** — a floating rounded 12px panel (`rgba(255,255,255,0.18)` fill) with an on/off switch.
- **Input** — `#422082` fill, white Rubik 16px/500, 8px radius, 8px 16px padding, 40px tall.
- **Product card** — dark purple with a 1px or 2px coloured frame; headings in Rubik 500, supporting copy in Rubik 400; code uses Monaco.
- **Logo row** — monochrome white partner marks on the canvas.

## Design System Architecture

Sentry's product design system is called Scraps. The component-library page at https://develop.sentry.dev/frontend/component-library.md (opened) describes it as "Sentry's design system, the Standardized Collection of Reusable Assets and Patterns for Sentry", with "core primitive React components, hooks, and design patterns", documented through an in-app "Stories" framework maintained by the Design Engineering team. The app's theme file (https://raw.githubusercontent.com/getsentry/sentry/master/static/app/utils/theme/theme.tsx, opened) maps semantic names to `color.*` primitives for light and dark themes, sets form control heights (md 36px, sm 32px, xs 28px with 16px horizontal padding) and motion durations (fast 120ms, moderate 160ms, slow 240ms), and imports fonts and radii from `@sentry/scraps/tokens`. That is the product app; the marketing page measured here has its own system: a Tailwind-based build whose `:root` holds named palette variables (`--color-rich-black`, `--color-blurple`, `--color-hot-pink`, `--color-md-violet`), text roles (`--text-primary`, `--text-secondary` `#9093c1`), the hero type scale, font variables and breakpoints.

The brand-asset page https://sentry.io/branding/ (opened) offers wordmark and glyph downloads in dark, light and transparent variants and points to a separate brand guide; that guide could not be opened (the standards.site link returned 404), so no colour or logo rules from it are used.

## Do's and Don'ts

Do:
- Keep the canvas to the two deep purples and use white for text and the primary button.
- Highlight one word per headline in hot pink.
- Set buttons in uppercase Rubik 14px/700 with 0.2px tracking and an 8px radius.
- Pair every product claim with a framed product panel or code sample.
- Keep the tone dry and developer-aware.

Don't:
- Use the cookie banner's `#f6f6f8` button as the brand action.
- Use pure black as a page background; the darkest measured fill is `#150f23`.
- Mix more than one illustration palette per panel.
- Set long paragraphs in Dammit Sans; it is for headlines.

## Responsive Behavior

Two viewports were measured: 1280px and 390px. The h1 steps from 88px to 50.1901px (weight 700 to 500, line-height 60.2281px). The CSS names breakpoints at 576, 768, 992 and 1152px. The hero collage is cropped at the viewport edge on desktop; the mobile layout of the panels was not measured. the Tailwind-style `--breakpoint-xs` is 0px.

## Iteration Guide

1. Start with `#1f1633`, white text and a `#150f23` base for depth.
2. Set headlines in Dammit Sans (or Rubik 700) at 88px / 105.6px, with one pink `#fd44b0` word.
3. Add Rubik 16px / 32px body and 14px / 700 uppercase buttons with an 8px radius; primary is white on the canvas colour.
4. Frame product evidence in 10–12px radius cards with 1px violet borders; use Monaco for code and the listed syntax colours.
5. Use blurple `#6a5fc1` for informational pills and lime `#c2ef4e` for the Seer-style analysis accents seen in the hero panel.
6. Re-run the gate after each addition.
