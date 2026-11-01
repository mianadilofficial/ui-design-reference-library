---
version: alpha
name: Tailwind CSS
category: "Frontend Frameworks"
description: "Tailwind CSS homepage and docs: a white canvas with near-black gray-950 ink (#030712), slate-gray body text (#4a5565), a black 32px-radius pill button, 96px Inter display type at -4.8px tracking, mono code (loaded as plexMono), sky-blue (#74d4ff) code accents and hairline grid decoration."
colors:
  canvas: "#ffffff"
  ink: "#030712"
  ink-body: "#4a5565"
  ink-docs: "#364153"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-dark: "#030712"
  on-dark: "#f8fafc"
  on-dark-soft: "#cad5e2"
  on-dark-muted: "#90a1b9"
  code-sky: "#74d4ff"
  grid-tint: "#0000ff0d"
  card-tint: "#0000000d"
  demo-sky: "#00a6f4"
  demo-indigo: "#4f39f6"
  demo-violet: "#8e51ff"
typography:
  display:
    fontFamily: inter, "inter Fallback", system-ui
    fontSize: 96px
    fontWeight: 400
    lineHeight: 96px
    letterSpacing: "-4.8px"
  display-mobile:
    fontFamily: inter, "inter Fallback", system-ui
    fontSize: 36px
    fontWeight: 500
    lineHeight: 40px
    letterSpacing: "-1.8px"
  heading:
    fontFamily: inter, "inter Fallback", system-ui
    fontSize: 40px
    fontWeight: 500
    lineHeight: 40px
    letterSpacing: "-2px"
  subheading:
    fontFamily: inter, "inter Fallback", system-ui
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  body:
    fontFamily: inter, "inter Fallback", system-ui
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: inter, "inter Fallback", system-ui
    fontSize: 14px
    fontWeight: 600
    lineHeight: 24px
rounded:
  sm: 4px
  lg: 8px
  xl: 12px
  2xl: 16px
  3xl: 24px
  4xl: 32px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 10px
  s5: 16px
  s6: 24px
  s7: 32px
  s8: 40px
  s9: 44px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.4xl}"
    padding: 8px 16px
    height: 40px
  button-demo-pill:
    backgroundColor: "{colors.demo-sky}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 20px
    height: 36px
  button-demo-square:
    backgroundColor: "{colors.demo-sky}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    padding: 10px 20px
    height: 40px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  code-window:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.on-dark}"
    rounded: "{rounded.2xl}"
  card:
    backgroundColor: "{colors.card-tint}"
    textColor: "{colors.ink}"
    rounded: "{rounded.3xl}"
    padding: 8px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
---

## Overview

The Tailwind CSS homepage is a typographic poster for a utility framework. The first screen is a very large, tightly tracked headline, "Rapidly build modern websites without ever leaving your HTML.", over a one-line description: "A utility-first CSS framework packed with classes like flex, pt-4, text-center and rotate-90 that can be composed to build any design, directly in your markup." The words flex, pt-4, text-center and rotate-90 are set in the mono face in sky blue. A black "Get started" pill sits beside a rounded "Quick search" field with the shortcut hint. Above the headline and the paragraph, in faint monospace, the page prints the utility classes that style them (for example "text-8xl text-gray-950 tracking-tighter text-balance"), a recurring device that makes the page a live demonstration of its own product.

Next come a dark code window showing a small HTML snippet with Tailwind classes next to a phone-like card showing the rendered result (an album cover "Class Warfare, The Anti-Patterns, No. 4 2025"), then a "Sponsors" section headed "Supported by the best." with a black "Become a sponsor" pill and a four-column grid of partner logos in a hairline-ruled table (Cursor, bolt.new, Clerk, Railway, Sanity, Resend, Vercel, Shopify, Lovable, Supabase and others). The header has the Tailwind logo, a "v4.3" version badge, a search button, Docs, Play, Blog, Showcase, Partners, a dashed-outlined "Plus" link and a GitHub icon.

The mood is precise, engineered and confident: white, black, lots of space, grid lines drawn like a blueprint, code treated as content. The copy is terse and technical, and the page repeatedly shows rather than tells.

## Colors

Values were measured on the live page; the framework's default theme file defines the same neutral and sky families.

- **Canvas (#ffffff)** is the page background; **grid tint (#0000ff0d)** is a very pale blue wash used for the hatched side gutters and ruled cells, and **card tint (#0000000d)** a faint black fill for device frames and badges.
- **Ink (#030712)** is the colour of the headline and section titles; I computed that it equals the theme file's gray-950 (oklch 13% 0.028 261.692) when converted. **Ink body (#4a5565)** is the most-read text colour (paragraphs) and equals gray-600 by the same conversion. **Ink docs (#364153)** is the body colour measured on documentation pages.
- **Primary (#000000)** is the pill button fill with **on-primary (#ffffff)** text. The hover fill, measured as lab(16.1051 -1.18239 -11.7533), is a dark slate.
- **Surface dark (#030712)** is the code window and dark panels, with **on dark (#f8fafc)**, **on dark soft (#cad5e2)** and **on dark muted (#90a1b9)** for text on it, and **code sky (#74d4ff)** as the main syntax and inline-code accent (it equals sky-300 in the theme file by conversion).
- **Demo colours:** on docs pages, example buttons use sky (#00a6f4), indigo (#4f39f6) and violet (#8e51ff). They are content examples, not site chrome. Syntax pink (#fb64b6) and teal (#96f7e4) also appear in code.

I kept black as the primary because the homepage call-to-action is measured black and no coloured action competes with it.

## Typography

The site loads **Inter** (variable, weights 100 to 900, upright and italic) and a mono face loaded as **plexMono** (regular, italic, 500 and 600). The page enables the stylistic alternates cv02, cv03, cv04 and cv11 through its default font-feature settings. Mono is used for the utility-class annotations and code.

- **Display:** Inter 96px, weight 400, line-height 96px, letter-spacing -4.8px. These values match the theme's text-8xl size (6rem) with its line-height of 1 and its tracking-tighter value (-0.05em). On a 390px viewport the headline is **display-mobile**, 36px/40px, weight 500, -1.8px.
- **Heading:** Inter 40px, weight 500, line-height 40px, -2px tracking ("Supported by the best.").
- **Subheading:** Inter 16px, weight 600, 24px line-height. **Body:** Inter 16px, weight 400, 28px line-height. **Button:** Inter 14px, weight 600, 24px line-height.
- A 12px size with +1.2px tracking was also measured (small labels such as "SPONSORS"); code samples are set in the mono face, and 13px is a measured size on the page.

The display weight 400 at huge size with very tight tracking is the signature; headings gain weight (500) as they shrink.

## Layout

The page is a single wide column framed by hairline guides: vertical lines on the left and right edges and horizontal lines at section boundaries, with hatched gutters outside them, so content sits inside a visible ruled frame. The hero text is left-aligned and starts at the frame's left edge; the code window sits on the left half and the rendered card on the right.

Spacing derives from a 0.25rem base unit in the theme (`--spacing`), and the measured gaps are 8px (most common), 16px, 24px, 32px, 4px, 40px, 44px, 10px and 2px. Sections are separated by large blank bands. The sponsor section is a four-column grid of equal bordered cells. The container and breakpoint scale in the theme file runs from 20rem containers to 80rem and breakpoints sm 40rem, md 48rem, lg 64rem, xl 80rem and 2xl 96rem.

## Elevation & Depth

Depth is mostly drawn with 1px rings, not blur. The most common shadow on the page is an inset 1px ring in the ink colour at 10 percent (applied on 188 elements in the extraction), followed by variants at 5, 8 and 10 percent. Raised cards add the theme's small shadow, `0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1)`. The dark code window sits on the white canvas with a thick dark outline, and the album card sits in a pale rounded frame (radius not individually measured). Larger shadows exist in the theme (shadow-md to shadow-2xl) but the homepage hardly uses them.

Do not add large soft shadows; use rings and tinted fills, as the page does.

## Shapes

Measured radii: 4px, 8px (the most frequent), 12px, 16px, 24px, 32px, and a fully round value, plus top-only rounding (16px and 32px) on panel tops. The theme file's radius scale is sm 0.25rem (4px), md 0.375rem, lg 0.5rem (8px), xl 0.75rem (12px), 2xl 1rem (16px), 3xl 1.5rem (24px) and 4xl 2rem (32px), which is why the frontmatter uses those names. The homepage button radius is 32px, so on a 40px-tall button it is nearly a full pill; docs demo buttons use a true pill or a 6px radius. Cards and device frames use values from the 16px to 24px range (24px is the card token); I did not map each measured radius to an element.

## Components

**Primary button.** 40px tall, 8px 16px padding, 32px radius, black fill, white Inter 14px/600 label; hover moves to a dark slate. "Get started" and "Become a sponsor" use it; the latter has a trailing arrow.

**Quick search.** A rounded outlined field with a magnifier, placeholder "Quick search" and a ⌘K hint, sitting next to the button.

**Version badge.** A 24px-tall rounded button "v4.3" with a faint dark tint that deepens on hover.

**Code window.** Dark rounded rectangle with three window dots, line numbers in muted slate, tags in pink and attribute values in sky.

**Device card.** A white card inside a pale 24px-radius frame showing an album cover.

**Sponsor cell.** Equal white cells ruled by hairlines, each holding a dark logo.

**Docs demo buttons.** On the docs pages measured (utility-first and states), the example "Save changes" button is 36px or 40px tall, padding 8px 20px or 10px 20px, white Inter 14px/600 text on sky (#00a6f4), either a full pill or a 6px radius; variants in indigo and violet also appear.

**Tabs.** The code window's file tabs ("index.html", "build.css", "Terminal") are 28px high, 4px radius, with a white 10 percent fill.

**Footer.** White with ink text and link columns (Documentation, Playground, Blog, Showcase, Resources).

## Design System Architecture

Tailwind's design system is its theme file. The official source, https://raw.githubusercontent.com/tailwindlabs/tailwindcss/main/packages/tailwindcss/theme.css (which I downloaded and read), defines CSS variables in namespaces: `--font-*`, `--color-*` (oklch palettes including gray, slate and sky), `--spacing: 0.25rem`, `--breakpoint-*`, `--container-*`, `--text-*` with paired `--text-*--line-height`, `--tracking-*`, `--leading-*`, `--radius-*` (xs 0.125rem through 4xl 2rem), `--shadow-*` (2xs to 2xl) and `--ease-*`. The docs page https://tailwindcss.com/docs/theme states that theme variables are declared with `@theme`, that each namespace generates utility classes (for example `--color-*` produces bg-red-500 and text-sky-300, `--radius-*` produces rounded-lg) and that the default theme is imported from `node_modules/tailwindcss/theme.css`. The v4 announcement (https://tailwindcss.com/blog/tailwindcss-v4) says the palette moved from rgb to OKLCH using the wider Display P3 gamut and that all tokens are exposed as native CSS variables.

The live site reflects it: the page's own root variables include the full `--color-*` palette (about 260 entries), `--text-*`, `--radius-*`, `--shadow-*`, `--tracking-*`, `--leading-*`, `--blur-*` and many `--tw-*` internals. Because there are no pre-built components, the visible components (buttons, badges, cards) are utility compositions measured from the homepage and the docs pages. Brand rules at https://tailwindcss.com/brand cover trademark use only and offer a mark and a logotype; they give no colour or typography guidance.

## Do's and Don'ts

Do set very large display type in Inter at weight 400 with tracking of -0.05em, and lower the weight to 500 for smaller headings.
Do use near-black ink (#030712) for headings and slate grey (#4a5565) for paragraphs.
Do keep the primary action black and pill-like, and reserve blue and violet for code and examples.
Do draw structure with hairline guides, 1px rings and faint tints instead of shadows.
Do annotate demos with the real utility classes in small mono type.

Don't use pure black for headings; use #030712.
Don't add coloured primary buttons to the chrome; sky, indigo and violet belong to docs examples.
Don't use big blurry shadows.
Don't use radii outside the theme scale.
Don't use Tailwind's name or logo to imply endorsement; the brand page restricts that.

## Responsive Behavior

The extraction measured 1280px and 390px for the headline: it drops from 96px with weight 400 and -4.8px tracking to 36px with weight 500 and -1.8px tracking, line-height 40px. The theme defines breakpoints at 40rem, 48rem, 64rem, 80rem and 96rem and container sizes in rem, and the homepage itself advertises mobile-first breakpoints, but I did not measure how the sponsor grid or header reflow, so those are not described.

Keep the 40px button height measured on desktop; column counts at small widths were not measured.

## Iteration Guide

1. Start from canvas, ink, ink-body and primary, then add surface-dark and the three on-dark colours for the code window.
2. Set Inter with the 96px, 40px and 16px steps and the tracking values above; load a mono face for annotations and code.
3. Build the black 32px-radius pill and the rounded search field.
4. Frame content with hairline guides and the pale blue grid tint.
5. Add the code window (surface-dark, on-dark, code-sky) next to a rendered-result card.
6. For documentation examples, use the sky, indigo and violet button colours and the 6px or pill radius.
