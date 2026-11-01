---
version: alpha
name: Moncler
category: "Luxury"
description: "Moncler US online shop (moncler.com/en-us): warm off-white #f7f8f3 canvas, black #000000 type and footer, white #ffffff type over dark full-bleed campaign imagery, grey #b2b2b2 secondary text. One family, MonclerGothicWeb at 400/500 — 42px hero, 32px section titles, 14–16px body — with square 0px corners and no shadows."
colors:
  canvas: "#f7f8f3"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  ink-tint30: "#b2b2b2"
  ink-tint55: "#6b6b6b"
  black-tint80: "#333333"
typography:
  display:
    fontFamily: MonclerGothicWeb, "--apple-system", "system-ui", "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 42px
    fontWeight: 400
    lineHeight: 50px
  display-mobile:
    fontFamily: MonclerGothicWeb, "--apple-system", "system-ui", "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 38px
  heading:
    fontFamily: MonclerGothicWeb, "--apple-system", "system-ui", "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 38.4px
  body:
    fontFamily: MonclerGothicWeb, "--apple-system", "system-ui", "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 19.2px
  nav:
    fontFamily: MonclerGothicWeb, "--apple-system", "system-ui", "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 14.4px
rounded:
  none: 0px
spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 28px
  s10: 32px
components:
  link:
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.on-primary}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.none}"
---

# Moncler

## Overview

This is the Moncler US online shop (moncler.com/en-us), measured on its home page. The page alternates two moods:
dark, full-bleed campaign photography with white type laid over it, and calm editorial bands on a warm off-white
`#f7f8f3` canvas with black text. There is no chromatic accent in the interface; colour arrives only through the
photography — a purple down jacket, a yellow scarf, a red diary cover.

The capture reads from the top: a thin black announcement bar ("Enter a world of extraordinary, join Moncler
Peaks."), a transparent header over the hero video with text links on the left (New In, Women, Men, Children,
Grenoble, In Moncler), the MONCLER wordmark centred and icon buttons on the right. The hero is a dark full-bleed
image titled "Pioneers in Moncler". Below it an off-white band pairs a 32px headline ("Re/Defining What it Means to
be a Pioneer") on the left with a short paragraph on the right. Then come large two-up image tiles with white
titles and "DISCOVER MORE" links ("The Himalaya", "The Karakorum", "The Verone", "The Alpine Diary"), a product tile
with name and price, a three-up "Moncler's Collections" row (Moncler Collection, Moncler Grenoble, Moncler Genius),
an "Exclusively Moncler" services carousel, a strip of three service promises, and a black footer.

The capture also shows a "Change Country / Region?" location dialog over the hero; that dialog, its buttons and its
dimming layer are an overlay, not brand UI, and are excluded from this document.

Microcopy is short and literary: "Cultural pioneers bring Moncler Re/Icons to life, celebrating the vision,
originality and ambition that forged their paths."

## Colors

- **Canvas `#f7f8f3`** — the warm off-white page background, the largest measured background area.
- **Ink `#000000`** — body text on the canvas, and the footer fill.
- **Primary `#000000`** — no filled CTA was detected outside the overlay, so primary is set to the site's own
  declared primary: the root variable `--colors-primary-default` is `#000`, and `--colors-button-primary-stroke`
  is `#000`. The generated value `#ffffff` is kept as `on-primary`.
- **On-primary `#ffffff`** — the most-read text colour by character count: all type over the dark imagery, the
  header links and the footer text. Root variable `--colors-primary-inversed` is `#fff`.
- **Ink tint 30 `#b2b2b2`** — secondary grey text; root variable `--colors-black-tint30`, also the declared
  inverted tertiary-button hover colour.
- **Ink tint 55 `#6b6b6b`** — root variable `--colors-black-tint55`, named `--colors-text-secondary-base`.
- **Black tint 80 `#333333`** — root variable `--colors-black-tint80`, declared as the hover fill of primary,
  secondary and tertiary buttons (`--colors-button-primary-background-hover: #333`).

Hover probes recorded the header link "New In" moving from `rgb(239, 239, 239)` to white on hover. Focus outlines
measured 1px solid black on light surfaces and 2px solid white on the dark header.

## Typography

One proprietary family carries the whole page: **MonclerGothicWeb**, loaded in weights 400 and 500 and served from
the storefront bundle. Its fallback stack runs through system UI fonts, Helvetica and Arial.

- Hero title: 42px / 400 / 50px ("Pioneers in Moncler").
- Section and tile titles: 32px / 400 / 38.4px ("The Himalaya", "Re/Defining What it Means to be a Pioneer").
- Body: 16px / 400 / 19.2px.
- Navigation and small links: 12px / 400 / 14.4px.

By character count, 14px is the most common size (with 0.14px tracking), followed by 16px, 32px, 20px, 12px, 24px
and 42px. Weight 500 accounts for a substantial share of characters (the medium cut is declared as
`--fonts-weights-moncler-gothic-web-medium: 500`). Headlines stay at 400: the brand's large type is light, wide
and unbolded. The root variables also declare two further families, `SilkSerif` and `BlockGothicRR`, which the
measured home page did not render.

Substitute, if MonclerGothicWeb is unavailable: a geometric sans with round bowls set at regular weight; the site's
own fallback is the system UI stack.

## Layout

The desktop viewport measured 1280px. The page is band-based: a 32px announcement bar, a 688px dark hero, an
off-white intro band, then a long run of image-led sections. Editorial bands use an asymmetric two-column split —
headline on the left, paragraph on the right. Image grids are two-up and three-up, with a carousel of up to four
cards. Gaps recorded most often are 4px, 16px and 8px between items, with 80px and 96px gaps at section scale;
section padding values include 28px, 32px, 48px and 80px.

Density is low and image-heavy: one headline and one paragraph per editorial band, very large photographs, small
uppercase link labels beneath tile titles.

## Elevation & Depth

Flat. The extraction recorded no box shadows and no border radii. Depth comes from photography: darkened images
with white type, and the contrast between dark image bands, the off-white editorial bands and the black footer.
The root variables declare a full shadow scale (`--shadows-xl`, `--shadows-inner` and others), but nothing on the
measured page used it.

## Shapes

Every rendered element computes a 0px radius: buttons, images, tiles and the footer are all hard rectangles. The
root variables declare a radius scale (`--radii-xs` through `--radii-3xl`, `--radii-full`) that the measured page
does not apply. Iconography in the header is thin-line and monochrome.

## Components

- **Announcement bar** — black, 32px tall, a single centred 12px line with an underlined "Moncler Peaks" link and
  a close icon on the right.
- **Header** — transparent over the hero, white MonclerGothicWeb 12px links on the left, centred wordmark, five
  line icons (chat, search, wishlist, account, bag) on the right.
- **Editorial intro band** — off-white canvas, 32px headline left, 16px paragraph right.
- **Image tile** — full-bleed photograph with a white 32px title at bottom-left and a small uppercase "DISCOVER
  MORE" link with a chevron.
- **Product tile** — packshot on white with name and price centred beneath, with carousel arrows.
- **Collections row** — three equal image tiles with centred white titles.
- **Services carousel** — four image cards with small uppercase white captions and a thin progress indicator.
- **Footer** — black, white text in five columns (Keep in touch, Contact us, Services, Corporate, Follow), a
  "SIGN UP" link, a large MONCLER wordmark and a legal row.

## Design System Architecture

No public Moncler design system or brand guideline site could be opened (the corporate site returned HTTP 403, see
SOURCES.json). The storefront at https://www.moncler.com/en-us/ ships a token layer in root CSS variables that shows
how the system is built: atomic utility class names on its icons (`c_var(--color)`, `w_var(--size)`, `flex-sh_0`), a generic
colour palette (`--colors-gray-*`, `--colors-slate-*`) beneath a brand layer of semantic tokens —
`--colors-primary-default`, `--colors-primary-inversed`, `--colors-black-tint10…80`, `--colors-white-tint10…60`,
`--colors-button-primary-*`, `--colors-button-secondary-*`, `--colors-button-tertiary-*` — plus font tokens
(`--fonts--moncler-gothic-web`, `--fonts--silk-serif`, `--fonts--block-gothic-r-r`), radii, shadows and breakpoints
(`--breakpoints-xs` 375px, `-sm` 600px, `-tablet` 768px, `-md` 1024px, `-lg` 1200px, `-xl` 1440px, `-xxl` 1800px).

## Do's and Don'ts

**Do**
- Pair dark, full-bleed photography with white MonclerGothicWeb type.
- Use the off-white `#f7f8f3` canvas for editorial text bands, not pure white.
- Keep headlines at weight 400 and let size carry hierarchy.
- Keep every corner square and every surface flat.
- Use black and its tints (`#333333`, `#6b6b6b`, `#b2b2b2`) for all interface states.

**Don't**
- Don't introduce an accent colour into the interface.
- Don't add rounded corners or shadows, even though the token layer declares them.
- Don't bold headlines.
- Don't document or imitate the location dialog as brand UI.

## Responsive Behavior

From the extraction's mobile pass:

- The hero title drops from 42px / 50px to 32px / 38px; section titles drop from 32px to 24px / 28.8px.
- Visible header links fall from 9 on desktop to 2 on mobile.
- The widest card row shrinks from 4 columns to 2.
- The black announcement bar measured 36px tall on mobile.
- Most-read mobile sizes were 14px and 16px, then 24px, 12px and 32px.

How the navigation is reached on mobile, and behaviour between the declared breakpoints, was not measured.

## Iteration Guide

1. Set the canvas to `#f7f8f3`, ink to black, and load MonclerGothicWeb at 400 and 500.
2. Build heroes and tiles as dark full-bleed images with white type, titles at 42px or 32px.
3. Keep all shapes at the 0px radius.
4. For interactive states, use the declared black tints — `#333333` for button hover.
5. Take any new token from the storefront's root variables (`--colors-*`, `--fonts-*`) or a new measurement.
