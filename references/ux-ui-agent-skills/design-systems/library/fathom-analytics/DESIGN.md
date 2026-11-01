---
version: alpha
name: Fathom Analytics
category: "Product & SaaS"
description: "Fathom Analytics' site: white and green-tinted grey #f4f6f5 surfaces, system sans text in green-grey inks (#242925 headings, #4e5551 body at 18px/27px), a 56px bold headline with -1.4px tracking, violet #6a51ec CTAs (6px, or 24px pills in the header) darkening to #3d22c3, and a monospace founders' letter."
colors:
  canvas: "#ffffff"
  ink: "#4e5551"
  primary: "#6a51ec"
  on-primary: "#ffffff"
  primary-hover: "#3d22c3"
  ink-strong: "#242925"
  ink-heading: "#353b37"
  surface-soft: "#f4f6f5"
  surface-button: "#eceeed"
  hairline: "#dce0dd"
  nav-hover: "#aa99ff"
typography:
  display:
    fontFamily: "-apple-system, \"system-ui\", sw, Helvetica, Arial, sans-serif"
    fontSize: 56px
    fontWeight: 700
    lineHeight: 53.2px
    letterSpacing: "-1.4px"
  display-mobile:
    fontFamily: "-apple-system, \"system-ui\", sw, Helvetica, Arial, sans-serif"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 34.2px
    letterSpacing: "-0.9px"
  heading:
    fontFamily: "-apple-system, \"system-ui\", sw, Helvetica, Arial, sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 30px
  subheading:
    fontFamily: "-apple-system, \"system-ui\", sw, Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 27px
  body:
    fontFamily: "-apple-system, \"system-ui\", sw, Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  button:
    fontFamily: "-apple-system, \"system-ui\", sw, Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 500
  button-small:
    fontFamily: "-apple-system, \"system-ui\", sw, Helvetica, Arial, sans-serif"
    fontSize: 13.6px
    fontWeight: 500
  nav:
    fontFamily: "-apple-system, \"system-ui\", sw, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
  link:
    fontFamily: "-apple-system, \"system-ui\", sw, Helvetica, Arial, sans-serif"
    fontSize: 14.4px
    fontWeight: 600
    lineHeight: 23.04px
rounded:
  xs: 2px
  sm: 6px
  md: 10px
  lg: 12px
  xl: 14px
  2xl: 24px
  pill: 9999px
spacing:
  s1: 2.4px
  s2: 3.2px
  s3: 4px
  s4: 4.8px
  s5: 5.6px
  s6: 7px
  s7: 8px
  s8: 8.8px
  s9: 9.6px
  s10: 10px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 16px 24px
    height: 53px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.surface-button}"
    textColor: "{colors.ink-heading}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 16px 24px
    height: 53px
  button-header:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-small}"
    rounded: "{rounded.2xl}"
    padding: 10.8px 12px
    height: 31px
  button-header-ghost:
    backgroundColor: "{colors.surface-soft}"
    textColor: "{colors.ink}"
    typography: "{typography.button-small}"
    rounded: "{rounded.2xl}"
    padding: 10.8px 12px
    height: 31px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink-strong}"
    height: 43px
  nav-link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.nav}"
  feature-card:
    backgroundColor: "{colors.surface-soft}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
  floating-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    border: "1px solid #dce0dd"
    boxShadow: rgba(23, 28, 25, 0.04) 0px 1px 2px 0px, rgba(56, 46, 107, 0.18) 0px 14px 36px -10px
  footer:
    backgroundColor: "{colors.surface-soft}"
    textColor: "{colors.ink-heading}"
    padding: 72px 0px
---

# Fathom Analytics

## Overview

Fathom Analytics (usefathom.com) is a privacy-first website analytics product. The brand page asks that the name be written "Fathom Analytics", not "UseFathom", "Use Fathom" or "FathomAnalytics", and allows "Fathom" alone only when "Analytics" appears in the same sentence. The home page was measured at 1280px (8327px tall) and 390px. It is a white, narrow-column page: content runs from 200px to 1080px (an 880px column). Type is the platform's system sans. The only brand color is a violet #6a51ec. The neutrals are subtly green-tinted greys.

From the top: a 43px header with the stacked "fathom analytics" wordmark, Features, Why Fathom, Pricing and Resources menus, then a violet "Start free trial" pill and a grey "Sign in" pill. The hero has a "New · Meet Luna, Our AI Assistant" badge, then the headline "Analytics without the cookies", a paragraph naming the problem ("See where visitors come from, which pages they read, and what converts") with a bold product line, two buttons ("Start free trial", "View a live demo"), a small "7-day free trial · Plans $15/month · Cancel anytime" line and a line-drawn illustration of a bar chart. A "Trusted by Microsoft, Tailwind & over a million websites" logo row (Hubermanlab, Microsoft, Tailwind, Laravel) leads into a large framed dashboard screenshot ("Hilarious Platypus" demo site). Then come two quotes, a positioning paragraph, a 2×2 grid of illustrated benefits drawn as hand-sketched cats (European analytics, See more of your visitors, Our script is fast, We sell software not data), a feature list, a "Trusted by 1,000,000+ websites and counting" logo wall and a two-column testimonial wall. After those: "Getting started with Fathom is easy" in three steps, an integrations row, a founders' letter set in monospace on a framed card, an FAQ accordion, a closing "Website analytics deserved better, so we built something better" CTA with more cat sketches, and a light grey footer.

The voice is personal and opinionated ("For the longest time, website analytics software was seriously bad."). The page is mostly words, with screenshots and doodles supporting them.

## Colors

- **Canvas — #ffffff.** The `body` and the main band (from 0 to 7856px).
- **Surface soft — #f4f6f5.** A green-tinted light grey (area 943) for the footer, feature panels, the "Sign in" pill and the Luna badge. The CSS declares the grey scale in hue 140 (e.g. `--gray-1: hsl(140, 8%, 96%)`).
- **Surface button — #eceeed.** The secondary "View a live demo" button and the hover fill of grey pills.
- **Ink — #4e5551.** Body copy, the most-read color (6894 characters).
- **Ink strong — #242925.** The h1, the nav and bold text (1937 characters); `--gray-11: hsl(140, 6%, 15%)`.
- **Ink heading — #353b37.** h2 and h3 headings and footer column titles (674 characters).
- **Primary — #6a51ec.** Every "Start free trial" fill, text links ("From $15/month") and the 2px focus outline (422 characters of violet text). Hover darkens the fill to #3d22c3.
- **Nav hover — #aa99ff.** Desktop nav items turn this light violet on hover (measured on Features, Why Fathom, Pricing and Resources).
- **Hairline — #dce0dd.** The border of the floating screenshot card.

The CSS also defines named hues that were not measured as rendered fills on the home page (`--pink`, `--orange`, `--teal`, `--blue`, `--yellow` and their `-fade` variants). A yellow highlight at 25% (#ffc93340) was measured on a few words. The macOS window dots (#ff5f57, #febc2e, #28c840) belong to the screenshot frame.

## Typography

Fathom's sans stack is declared as `--font-sans: -apple-system, BlinkMacSystemFont, "sw", Helvetica, Arial, sans-serif`, and the italic stack swaps in "sw-i". Only one web font was loaded during measurement, **"jb" at weight 300**, which backs the monospace stack `--font-mono: "jb", ui-monospace, monospace` (1307 characters, including the founders' letter). The "sw" face was not loaded, so the measured sans text rendered in the system font (-apple-system). A rebuild should use the same stack; with no "sw" file available, it renders as the platform system UI font, which is what we measured.

Measured roles:

- **Display (h1)** — 56px / 53.2px, weight 700, -1.4px tracking, #242925. The CSS declares `--font-size-h1: 3.5rem`.
- **h2** — 40px with -0.6px tracking (167 characters, `--font-size-h2: 2.5rem`). The "European analytics" style heading measured 24px / 30px, weight 700 (`--font-size-h3: 1.5rem`).
- **Subheading (h3)** — 18px / 27px, weight 600 ("Sign up for an account").
- **Body** — 18px / 27px, weight 400. The CSS base is `--font-size: 1.125rem` with `--leading: 1.6`.
- **Button** — 18px weight 500; header pills 13.6px weight 500.
- **Link** — 14.4px / 23.04px, weight 600, #6a51ec.
- 23.2px text with -0.232px tracking (251 characters) was also measured.

Weights by characters: 400 (7762), 500 (870), 600 (752), 700 (614).

## Layout

One centered 880px column (200px to 1080px at 1280px) holds everything. The CSS names its container widths `--rapper` (55rem), `--rapper-lg` (80rem), `--rapper-md` (48rem) and `--rapper-sm` (32rem). The hero is a two-column split: copy on the left, a line illustration on the right. The page then alternates full-column screenshots, two-column quote pairs, a 2×2 benefit grid, a feature list beside a floating card, a logo wall (up to 4 columns of logos), a two-column testimonial wall, three steps and the FAQ. The footer is a #f4f6f5 band, 471px tall with `72px 0px` padding, with four link columns (Website analytics, Product, Company, Fathom Analytics).

The spacing scale is rem-based (`--space-sm: .25rem`, `--space: .5rem`, `--space-md: .675rem`, `--space-xl: 1.5rem`, `--space-2x: 3rem`, `--space-3x: 4rem`, `--space-4x: 6rem`, `--space-5x: 10rem`), which produces the fractional pixel values in the tokens (2.4px, 3.2px, 9.6px, 10.8px, 12.8px, 19.2px). The most common gaps are 12.8px and 32px, with 48px and 64px between groups.

## Elevation & Depth

Depth is used sparingly, mostly to float screenshots:
- `rgba(23, 28, 25, 0.04) 0px 1px 2px 0px, rgba(56, 46, 107, 0.18) 0px 14px 36px -10px` — a violet-tinted drop shadow on the white floating card with a `1px solid #dce0dd` border.
- `rgba(31, 33, 38, 0.08) 0px 0px 0px 1px, rgba(31, 33, 38, 0.12) 0px 14px 40px 0px` — the dashboard screenshot frame.
- `rgba(0, 0, 0, 0.18) 0px 0px 0px 0.5px inset` — hairline insets on small elements (3).

The CSS also declares `--drop: drop-shadow(0 2px 2px hsla(140, 5%, 15%, .2))`. Otherwise sections sit flat on white, and grey #f4f6f5 panels provide separation.

## Shapes

Radii measured: 1600px (14 elements — the Luna badge and other full pills), 6px (9 — the main buttons; `--border-rad: 6px`), 12px (8 — feature panels), 24px (3 — header pills), 50% (3 — avatars), 14px (2 — large feature cards), 10px (1 — floating card), 2px (1). The CSS also sets `--border-rad-sm: .3rem` and `--border-rad-full: 100rem`. The illustrations are loose black line drawings of cats and charts, which soften the otherwise rectilinear layout.

## Components

- **Primary button.** #6a51ec, white 18px/500 text, 6px radius, padding `16px 24px`, 53px tall. Hover #3d22c3; focus `2px solid #6a51ec` outline with a 4px offset.
- **Secondary button.** "View a live demo": #eceeed fill, #353b37 text, same size and radius. Hover lightens the fill to #f4f6f5.
- **Header pills.** "Start free trial" (#6a51ec) and "Sign in" (#f4f6f5 with #4e5551 text): 13.6px/500, padding `10.8px 12px`, 31px tall, 24px radius. Sign in hovers to #eceeed.
- **Announcement badge.** "New · Meet Luna, Our AI Assistant": a #f4f6f5 pill (1600px radius) with a small "New" chip, 12px/600 text, padding `4.8px 12.8px 4.8px 4.8px`.
- **Nav.** 43px tall, #242925 items that turn #aa99ff on hover.
- **Text link.** #6a51ec, 14.4px/600. It hovers to #353b37.
- **Feature card.** #f4f6f5 panel, 14px radius (large) or 12px (small, e.g. "See all of your sites at a glance" at 16.8px/600).
- **Floating card.** White, 10px radius, `1px solid #dce0dd`, violet-tinted shadow.
- **Founders' letter.** Monospace "jb" text in two columns inside a framed card.
- **FAQ accordion.** Rows separated by hairlines, the first one expanded.
- **Footer.** #f4f6f5 background, 14.4px/600 #353b37 column headings, `72px 0px` padding.

## Design System Architecture

Fathom publishes brand assets at https://usefathom.com/brand: SVG logos (`/assets/src/brand/fathom-analytics.svg` and `fathom-analytics-dark.svg`), the rule "Please do not edit the design, colours, or aspect ratio of our logo when using it", and the naming rules above. The page lists no brand colors or typefaces, and we found no public component system.

The shipped CSS (113 root custom properties) shows the de-facto system:
- **Palette**: an 11-step green-tinted grey ramp (`--gray-0: #fff` to `--gray-11: hsl(140, 6%, 15%)`), purple steps (`--purple: hsl(250, 80%, 62%)`, `--purple-8`/`--purple-9: hsl(250, 70%, 55%)`, `--purple-10: hsl(250, 70%, 45%)`, `--purple-fade`), named accents with `-fade` variants, and semantic aliases (`--c-gray-100` … `--c-gray-900`, `--c-purple-800`, `--c-white`).
- **Type**: `--font-sans`, `--font-sans-italic`, `--font-mono`, a size ladder (`--font-size-xxs .75rem` → `--font-size-h1 3.5rem`), weights and leadings (`--leading 1.6`, `--leading-sm 1.4`).
- **Space and layout**: `--space-*`, `--grid-gap-*`, `--rapper-*` container widths, `--breakpoint: 42rem`, `--breakpoint-sm: 40rem`, column widths `--col: 12ch`.
- **Misc**: `--border-*` widths, `--border-rad*`, `--opacity-*`, `--time: .2s`, and `--font-icon: "Font Awesome 6 Pro"`.

## Do's and Don'ts

**Do**
- Keep the page white with green-tinted greys (#f4f6f5, #eceeed, #dce0dd) and green-grey inks (#242925, #353b37, #4e5551).
- Use #6a51ec violet for every primary action and link. Hover to #3d22c3, and focus with a 2px violet outline offset by 4px.
- Set headlines at 56px/700 with -1.4px tracking in the system sans, and body at 18px/27px.
- Use 6px corners for page buttons and 24px pills in the header.
- Pair screenshots with loose hand-drawn line illustrations.
- Write in first person and say what you think, the way the founders' letter does.

**Don't**
- Don't introduce a second saturated brand color; the CSS accent hues are not used as fills on the home page.
- Don't use pure neutral greys; the measured greys are tinted toward green (hue 140).
- Don't edit the logo's design, colours or aspect ratio (brand page rule).
- Don't write the name as "UseFathom" or "FathomAnalytics".
- Don't treat #0000ee as a nav color; it is the browser default on one unstyled anchor.

## Responsive Behavior

Measured at 390px:

- h1 drops from 56px/53.2px to **36px/34.2px**, -0.9px tracking, weight 700.
- h2 drops from 24px/30px to **21.6px/27px**.
- Body text drops from 18px/27px to **16.2px/24.3px**. The whole mobile type scale is 90% of desktop (13.6px → 12.24px, 14.4px → 12.96px, 40px → 27.36px).
- The primary CTA becomes full width: 354px wide, 48px tall, padding `14.4px 21.6px`, 16.2px/500 text, 6px radius.
- The header shows no visible links and a menu toggle labelled "Open menu".
- Content is inset 18px on each side (18px to 372px). Card grids measured at most 2 columns. The footer becomes a 2-column grid, 790px tall.

The CSS declares `--breakpoint: 42rem` and `--breakpoint-sm: 40rem`. The behavior at those widths was not measured.

## Iteration Guide

1. Use a white page with an 880px column, the system sans stack and the "jb" monospace for long-form letters.
2. Set the text ramp: 56/53.2 at 700 (-1.4px), 40px h2 (-0.6px), 24/30 at 700, 18/27 body.
3. Add the violet button pair (#6a51ec primary, #eceeed secondary), 6px corners and 53px height, plus the 31px header pills at 24px radius.
4. Use #f4f6f5 panels with 12–14px corners for features, and float screenshots on white cards with the violet-tinted shadow.
5. Add hand-drawn line illustrations and real logos. Avoid stock imagery.
6. When adding values, pull from the `--gray-*`, `--purple-*` and `--space-*` custom properties and measure them on usefathom.com.
