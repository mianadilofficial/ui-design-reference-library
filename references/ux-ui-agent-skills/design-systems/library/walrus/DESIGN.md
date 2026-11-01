---
version: alpha
name: Walrus
category: "Tech & AI"
description: "Walrus, the data platform for AI, is a black #000000 site with warm off-white #faf8f5 text and panels, Ratch headlines at 72px, Google Sans Flex body at weight 350, uppercase Google Sans Code mono links, #53575a outlined 26px pill buttons and 6px cards."
colors:
  canvas: "#000000"
  ink: "#b1b4b6"
  primary: "#53575a"
  surface-warm: "#faf8f5"
  surface-dark: "#14181b"
  ink-subtle: "#8e9294"
  ink-white: "#ffffff"
  hairline: "#252b31"
  accent-lilac: "#cab1ff"
  walrus-purple: "#613dff"
  walrus-yellow: "#e8ff75"
typography:
  display:
    fontFamily: Ratch, sans-serif
    fontSize: 72px
    fontWeight: 425
    lineHeight: 68.4px
    letterSpacing: "-0.5px"
  display-mobile:
    fontFamily: Ratch, sans-serif
    fontSize: 44px
    fontWeight: 425
    lineHeight: 41.8px
    letterSpacing: "-0.5px"
  heading:
    fontFamily: Ratch, sans-serif
    fontSize: 48px
    fontWeight: 400
    lineHeight: 40.8px
  subheading:
    fontFamily: "\"Google Sans Code Variable\", ui-monospace, monospace"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 10.92px
    letterSpacing: 0.26px
    textTransform: uppercase
  body:
    fontFamily: "\"Google Sans Flex Variable\", sans-serif"
    fontSize: 18px
    fontWeight: 350
    lineHeight: 25.2px
  nav:
    fontFamily: "\"Google Sans Flex Variable\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: "\"Google Sans Code Variable\", ui-monospace, monospace"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.64px
    textTransform: uppercase
rounded:
  xs: 3px
  sm: 4px
  md: 6px
  lg: 12px
  xl: 24px
  2xl: 26px
  3xl: 48px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 22.5px
  s9: 24px
  s10: 30px
components:
  button-secondary:
    textColor: "{colors.surface-warm}"
    typography: "{typography.link}"
    rounded: "{rounded.2xl}"
    padding: 10px 30px
    height: 48px
  link:
    textColor: "{colors.surface-warm}"
    typography: "{typography.link}"
    rounded: "{rounded.2xl}"
    padding: 12px 32px
    borderColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.surface-warm}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-white}"
    rounded: "{rounded.md}"
    padding: 24px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-subtle}"
    rounded: "{rounded.3xl}"
---

## Overview

The measured page is https://walrus.xyz/, titled "The data platform built for the demands of AI | Walrus". Its meta description: "Walrus is the data platform built for the demands of AI, where data is portable, protected, and verifiable." The page is 7,105px tall at 1280px.

The capture opens on a thin gradient announcement bar (blue to violet: "Store, protect, and connect your data with Walrus Console. Try now") over a black header with the lowercase "walrus" wordmark, three mono menu items with down arrows (DISCOVER, BUILD, ECOSYSTEM) and an outlined "GET STARTED" pill. The hero is a centered two-line headline, "The data platform built for the demands of AI", a short paragraph whose key phrases ("useful", "under your control", "independently verifiable") are set heavier, and an outlined "START BUILDING" pill. Two tall product panels follow side by side: a dark "Walrus Memory" panel ("Portable memory for AI agents") and a warm off-white "Walrus Console" panel ("One place to store, protect, and connect your data", marked "// NOW LIVE"), each with a "LEARN MORE" link and a product screenshot in a laptop frame. Then a customer line ("Walrus handles the data. They ship the product.") with six partner logos, and a large statement "No lock-in. No trust gaps. No compromises." with floating translucent glass cubes and a "READ THE DOCS" pill.

The voice is declarative and terse, with code-comment style labels ("// DISCOVER WALRUS", "// NOW LIVE").

## Colors

The ground is pure black `#000000` (2,325 weighted area units), with warm off-white `#faf8f5` panels (1,825) and charcoal `#14181b` surfaces (294). Text is graded gray: `#b1b4b6` for body copy (910 characters), `#faf8f5` for headlines and menu items (725), `#53575a` for the lowest-contrast text and outlines (418), `#8e9294` for mono eyebrow labels (335), `#000000` on light panels (280) and `#ffffff` (237). The hairline is `#252b31`.

There is no filled button. The only action treatment measured is an outline, so `primary` is the outline color `#53575a`, which the stylesheet names `--color-walrus-dark-gray-300`. Accent colors come from a lilac fill `#cab1ff` (55 units, the "From the blog" card) and the stylesheet's brand variables `--color-walrus-purple: #613dff` and `--color-walrus-yellow: #e8ff75`; the latter two were not measured as filled areas on this page, and are tokenized only from the variable declarations. The gradient in the announcement bar runs between blue and violet but its stops were not measured.

## Typography

Four families are loaded: Ratch (a variable display face, 100 to 900), Google Sans Flex Variable (body), Google Sans Code Variable (mono labels and buttons) and JetBrains Mono (declared as `--font-mono`, used on 96 characters). Measured roles: the h1 is Ratch 72px weight 425 on 68.4px with −0.5px tracking (44px on mobile); the h2 is Ratch 48px weight 400 on 40.8px; body paragraphs are Google Sans Flex 18px weight 350 on 25.2px; the h3 eyebrow is Google Sans Code 13px uppercase with 0.26px tracking; buttons and links are Google Sans Code 16px uppercase with 0.64px to 0.72px tracking. Other sizes: 24px, 21px, 28px (−0.5px), 15px, 14px and 12px. The fractional weights (350, 425, 450) show that the variable axes are used for fine tuning.

Font substitutes: Ratch is a licensed or custom display face; use a geometric grotesque at weight 400 to 450 with −0.5px tracking. The Google Sans families are available from Google Fonts.

## Layout

The page is a centered column with a maximum container width variable `--spacing-container-max-width: 96rem` and large vertical rhythm: measured paddings include 96px (12 uses), 144px, 72px, 48px, 32px and 24px; gaps are 8px (48 uses), 10px (42), 24px (22), 12px, 16px, 32px and 64px. The two product panels sit side by side in the capture at equal width, each with a 24px top radius at the bottom of the stack. The header is 82px tall. The footer is 506px tall with a 48px radius on its top corners and mono link groups (DISCOVER, About, WAL Token, Use WAL, Walrus Memory).

## Elevation & Depth

No box shadows were measured. Depth is created by tone (black, charcoal, off-white panels), by 3D glass-cube artwork and by dark product screenshots that bleed off the panel edges. The measured borders are `#252b31` and `#53575a` hairlines of 1px to 2px.

## Shapes

Radii measured: 6px (13 elements, cards), 26px (8, outlined pills), 12px (5), 3px (3), `24px 24px 0px 0px` (3, panels), 4px (2) and `48px 48px 0px 0px` (1, footer). Tokens: `xs` 3px, `sm` 4px, `md` 6px, `lg` 12px, `xl` 24px, `2xl` 26px and `3xl` 48px.

## Components

**Outlined pill:** transparent, off-white mono uppercase text, 2px border that is transparent at rest and `#53575a` on hover, 26px radius, `10px 30px` padding, 48px tall ("DISCOVER", "BUILD"). The "START BUILDING" link adds a north-east arrow, a 1px `#53575a` border, `12px 32px` padding and 50px height.

**Navigation:** 82px header with mono uppercase labels and chevron-down glyphs; an outlined "GET STARTED" pill at right.

**Product panel:** large 24px top-radius panel with centered Ratch title, a one-line description and an underlined mono "LEARN MORE".

**Blog card:** lilac `#cab1ff` fill, 6px radius, `16px 24px 24px` padding, 12px Ratch label with 0.6px tracking ("FROM THE BLOG:").

**Dark card:** black fill, white Ratch 24px at weight 500, 6px radius, 24px padding ("Getting Started with Walrus").

**Language switcher:** a small white "English" tab at the right edge, which is a third-party widget and not tokenized.

## Design System Architecture

The home page links to docs at https://docs.wal.app/ and to the GitHub project https://github.com/MystenLabs/walrus; these are protocol documentation, not a visual design system, and were not read for tokens. The site's own styles expose a Tailwind v4 utility layer (`--tw-*`, `--text-2xl`, `--text-7xl`) and named brand variables: `--color-walrus-dark-gray-100` (`#14181b`), `--color-walrus-dark-gray-300` (`#53575a`), `--color-walrus-dark-gray-450` (`#b1b4b6`), `--color-walrus-light-gray-100` (`#e5e5e2`), `--color-walrus-purple`, `--color-walrus-yellow`, and sizes such as `--font-size-heading-1: 2.75rem` and `--font-size-display-xl: 6rem`. Tokens here come from live measurement of https://walrus.xyz/ and these variables.

## Do's and Don'ts

- Do keep the ground black and let off-white panels carry the product screenshots.
- Do use code-comment eyebrows ("// NOW LIVE") in mono uppercase.
- Do outline actions with a 1px to 2px `#53575a` border and a 26px radius.
- Do use fractional variable weights (350 for body, 425 for display).
- Don't add filled buttons or shadows; none were measured.
- Don't use the purple or yellow variables as large fills until measured.
- Don't tokenize the language tab or the glass-cube artwork.

## Responsive Behavior

The mobile pass measured: h1 44px/41.8px with −0.5px tracking, h2 48px/40.8px (unchanged, with a line break "Walrus / Memory"), body 16px/22.4px weight 350 and a header containing a "MENU" label in Google Sans Code 16px with 0.64px tracking, still 82px tall. No primary button was found on mobile. Media queries are not declared in the home page HTML (they sit in external CSS), so breakpoints are not measured.

## Iteration Guide

1. Start with black, `#faf8f5`, `#b1b4b6` and the outline color `#53575a`.
2. Pair Ratch headlines with Google Sans Flex body at weight 350.
3. Make every call to action an outlined mono uppercase pill.
4. Use warm off-white panels to feature light product screenshots against the black page.
5. Measure the purple and yellow before using them as fills.
6. Keep headlines centered and short; the measured hero is two lines at 72px and the closing statement is two lines at a similar size.
7. For partner or customer rows, use a single muted caption line above the logo strip, as the measured page does.
8. Check any new component against the measured radii (3px, 4px, 6px, 12px, 24px, 26px, 48px) and gaps (8px, 10px, 24px) before adding values.
