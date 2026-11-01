---
version: alpha
name: Voku.Studio™
category: "Agencies & Studios"
description: "Voku.Studio™ is a Madrid creative studio working with AI; its site is an off-white #fffdfc canvas with near-black #0a0a0a text, a 10.6666px Archivo interface layer, an 80px custom vokufont wordmark, zero border radius and a fanned arc of project thumbnails."
colors:
  canvas: "#fffdfc"
  ink: "#0a0a0a"
  primary: "#000000"
  white: "#fffdfa"
  surface: "#e8e9ed"
  grey-secondary: "#aeaeae"
  focus: "#ff0000"
typography:
  display:
    fontFamily: Archivo, sans-serif
    fontSize: 10.6666px
    fontWeight: 400
    lineHeight: 10.6666px
    letterSpacing: 0.106666px
  wordmark:
    fontFamily: vokufont
    fontSize: 80px
    fontWeight: 400
rounded:
  none: 0px
spacing:
  s1: 1.07px
  s2: 4.44px
  s3: 10.67px
components:
  nav-link:
    textColor: "{colors.white}"
    typography: "{typography.display}"
    padding: 10.6666px 0px
---

## Overview

Voku.Studio™ describes itself in its own meta description as a "creative studio focused in crafting with AI", founded in 2022 by YZA Voku and based in Madrid with an international reach. The home page tagline, measured as the first text block in the header, is "Not Real, Yet." followed by the discipline list "Creative Direction", "Post-Production" and "AI Generat…". The capture shows an almost empty off-white page. Eight portrait-ish project thumbnails fan out in an arc around the centre (a green orb, a grey figure, a pink fabric study, a black card reading "sphere", a silhouette with "IYMA + LOMUN", a gold horse, a grey texture), and a single line of small navigation text sits under them: Voku.Studio™, Works, Artifacts, About, Contact. Below that, a loader mark is visible.

The design intent is a gallery wall. Nothing competes with the imagery: no filled buttons, no cards, no shadows, no rounded corners. The measured extraction found no border radius and no box shadow on any element on the home page. All of the personality sits in the artwork the studio produced and in the tiny, tightly set Archivo labels.

The measured page is a loader/intro state. The extraction recorded body text at 10.6666px and a single custom-font heading at 80px (117px in the mobile pass), so this document describes only what was recorded there plus what the shipped stylesheet and the About page declare.

## Colors

The page is two near-neutrals. The canvas is `#fffdfc`, measured as the body background and confirmed in the capture pixels (about 83% of the screen). The shipped About page declares the same value in its CMS palette: `.palette-primary` sets `--primary-bg: #fffdfc`, `--primary-color: #0a0a0a`, `--secondary-color: #aeaeae` and `--secondary-bg: #0a0a0a`. A second palette, `.palette-secondary`, inverts it to a `#0a0a0a` background with `#ffffff` text. That is why `ink` here is `#0a0a0a` (the declared primary text color) and why `grey-secondary` is `#aeaeae`.

The extraction reports the navigation text as `#fffdfa`, which is the stylesheet variable `--white`. On the live page the header carries `mix-blend-mode: difference` (the shipped CSS declares it on `#Header` and `#HeaderMobile` when not blurred), so a warm white on an off-white canvas renders as dark text. For that reason `white` is kept as a token but the readable ink is `#0a0a0a`.

`primary` is `#000000`: the root variables set `--black: #000` and `--primary: var(--black)`. There is no colored brand accent and no filled call-to-action. The extractor's detected link color `#0000ee` is a browser default and is dropped. `surface` `#e8e9ed` is the only other measured background area. `focus` `#ff0000` is the measured border color; the root variables define `--focus: red`, `--assertive: red` and `--color-error: red`, and a success green `--color-sucess: #4dc247` and grey `--grey:#666` also exist but were not used on the home page, so they are not tokens.

## Typography

Two faces carry the interface. Archivo (regular 400 and 500 files are declared in `@font-face`) sets all running text at 10.6666px with 10.6666px line height and 0.106666px letter spacing, which is the `display` token because the extractor's largest-hero-text role resolved to the tagline span. The root variables define `--font-sans: "Archivo", sans-serif`, `--font-size-base: 0.75rem`, `--font-size-s: 0.625rem`, `--font-size-m: 0.875rem`, `--font-size-l: 2.25rem`, `--font-size-xl: 3rem` and `--line-height-sans: 1.25`, and a fluid `--font-size` of `clamp(var(--min-font-size), 1.1111vw * var(--zoom), var(--max-font-size))` where the minimum is 14px and the maximum 48px.

The second face is `vokufont`, a custom woff served from `/assets/fonts/vokufont.woff`. It is measured at 80px, weight 400 on desktop and 117px in the mobile pass; it is the studio's wordmark/display voice. A mono face, Fragment Mono, is declared (`--font-sans-mono`) but was not measured in use on the home page. An icon font, icomoon, is also declared.

Font substitutes: vokufont is proprietary and only its glyph coverage is served from the site; use Archivo at a large size as a stand-in, accepting that the letterforms will differ.

## Layout

The page uses a 12-column grid declared in root variables: `--cols: 12`, `--gap: var(--padding-s)`, with `--padding-inside: var(--padding-m)`. The padding scale is `--padding-xs: 0.3125rem`, `--padding-s: 0.625rem`, `--padding-m: 1.25rem`, `--padding-l: 2.5rem` and `--padding-xl: 9.375rem`. The measured spacing values on the home page are 1.07px, 4.44px and 10.67px (inline padding of the nav labels is 1.06666px 4.4444px; nav links carry 10.6666px vertical padding).

The composition is centred. The thumbnails sit on an arc in the upper half of the viewport, the nav line sits centrally beneath them, and the rest of the viewport is empty canvas. The extraction measured a 1280px wide, 800px tall viewport with no scroll height beyond it.

## Elevation & Depth

There is no elevation. The extraction recorded no box shadows at all. Depth is implied only by the arc of thumbnails, which overlap each other (the large black "sphere" card sits in front of the neighbouring pink and silhouette cards) and by the header's `mix-blend-mode: difference`, which also appears on the project-list block in the shipped CSS. Nav and nav-link elements carry a 3D transform in the measured state (a translateZ-style matrix3d), which is animation state rather than a style and is not a token.

## Shapes

Every measured element computes a border radius of 0px: `desktop.frequencies.borderRadii` is empty. The shipped stylesheet does declare two radii (20px twice and 4px once), but none was measured on the rendered home page, so the only shape token is `rounded.none: 0px`. Imagery is rectangular, cropped to varied portrait and landscape rectangles. Dividers, where present, are red hairlines (the measured border color `#ff0000`).

## Components

Navigation is the only component measured. The header contains the tagline, the discipline list and the link row: "Voku.Studio™", "Works", "Artifacts", "About", "Contact". Each link is Archivo 10.6666px, uses 10.6666px vertical padding, and has an animated pseudo-element (a `beforeShape` with a scaled transform) that the extraction recorded in its collapsed state. There is no button, form input, card or footer in the measured state.

Project entries link into `/projects/` with category pages for branding, commercial, fashion, film and music-video, as seen in the home page links. Their layout was not measured, so they are described only by that list.

## Design System Architecture

No public design system or brand guideline was found: the home page links only to legal pages, the studio's own sections and the project categories. The de-facto system is the site's own stylesheet, `https://voku.studio/assets/main.80738aeb7ef81dfbc696.css`, which exposes tokens as CSS custom properties: easing curves named `--ease-in-out-quint`, `--ease-out-expo` and so on; `--padding-*`, `--font-size-*`; and a CMS-driven pair of palettes (`palette-primary` and `palette-secondary`) that the About page inlines as `CMS_COLORS` with hex values `0xfffdfc` and `0x0a0a0a`. Colors are therefore content-managed rather than hard-coded per component, and each page swaps its palette class.

Source pages opened: https://voku.studio/ and https://voku.studio/about/.

## Do's and Don'ts

- Do keep the canvas `#fffdfc` and text `#0a0a0a`; let the artwork supply all color.
- Do set interface text in Archivo at the small measured size with the 0.106666px tracking.
- Do keep every corner square: the measured radius is 0px.
- Do use the secondary palette (`#0a0a0a` background, `#ffffff` text) when a page needs the inverted look.
- Don't add drop shadows, gradients or filled buttons; none were measured.
- Don't use `#0000ee` or any browser-default link color.
- Don't document the loader or cookie layer as brand UI.
- Don't set body copy in vokufont; it was measured only at display size.

## Responsive Behavior

The mobile extraction pass recorded very little: no h1, nav, CTA or body role was found, and the only measured value was the vokufont text at 117px. Layout changes on mobile are not measured. The shipped stylesheet declares media queries at `max-width:480px` (43 rules), `min-width:480px` (22 rules), `min-width:1174px` (one rule) and `hover:hover` (two rules), and it ships a separate `#HeaderMobile` element, but what those rules do on a phone was not recorded.

## Iteration Guide

1. Start from the two palettes: `#fffdfc` with `#0a0a0a`, or the inverse. Resist adding a third color.
2. Choose imagery first. The brand is the work; a layout with no images is incomplete.
3. Keep labels at 10.6666px Archivo, 400, with 0.106666px letter spacing, and reserve vokufont for large marks.
4. Use 0px radius throughout, and no shadows.
5. If you need to confirm a value, open https://voku.studio/ and compare against the tokens above; anything not listed was not measured.
6. Before shipping a variant, re-measure the home page after the intro has finished, because the recorded state is the loader.
