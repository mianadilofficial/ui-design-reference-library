---
version: alpha
name: 2xA Studio
category: "Agencies & Studios"
description: "2xA Studio (2xa.studio), a code-driven design studio between Amsterdam and Athens: #0f0f0f black canvas, #858585 ash body in 2XAMONOVF monospace at 19px, 128px HelveticaProRoman headline in #cecece, #fdfdfd paper sections, 1.6px corner radius and no shadows."
colors:
  canvas: "#0f0f0f"
  ink: "#858585"
  primary: "#0f0f0f"
  surface-paper: "#fdfdfd"
  ink-light: "#cecece"
  coal: "#1a1a1a"
  accent-blue: "#0000ff"
  accent-red: "#d4373a"
typography:
  display:
    fontFamily: "\"2XAMONOVF\", monospace"
    fontSize: 23.75px
    fontWeight: 400
    lineHeight: 23.75px
  display-mobile:
    fontFamily: "\"2XAMONOVF\", monospace"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 20px
  heading:
    fontFamily: HelveticaProRoman, Helvetica, sans-serif
    fontSize: 128px
    fontWeight: 400
    lineHeight: 128px
    letterSpacing: "-1.92px"
  heading-mobile:
    fontFamily: HelveticaProRoman, Helvetica, sans-serif
    fontSize: 58.5px
    fontWeight: 400
    lineHeight: 58.5px
    letterSpacing: "-0.8775px"
  subheading:
    fontFamily: HelveticaProRoman, Helvetica, sans-serif
    fontSize: 23.75px
    fontWeight: 400
    lineHeight: 23.75px
    letterSpacing: "-0.35625px"
  body:
    fontFamily: "\"2XAMONOVF\", monospace"
    fontSize: 19px
    fontWeight: 400
    lineHeight: 23.75px
  body-mobile:
    fontFamily: "\"2XAMONOVF\", monospace"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20px
  link:
    fontFamily: HelveticaProRoman, Helvetica, sans-serif
    fontSize: 28.5px
    fontWeight: 400
    lineHeight: 28.5px
rounded:
  xs: 1.6px
spacing:
  s1: 5px
  s2: 10px
  s3: 16px
  s4: 80px
  s5: 160px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.surface-paper}"
    padding: 16px
  nav-link:
    textColor: "{colors.surface-paper}"
    typography: "{typography.display}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.surface-paper}"
    padding: 16px 16px 0px
---

## Overview

2xA Studio describes itself, on the page fetched from 2xa.studio, as a code-driven design studio based between Amsterdam and Athens, working on digital product design, brand identity, UX/UI and custom web development "combining design and computation". Its tagline is "Generative Code Explorations" and the main line is "Form follows process." The navigation lists About, Projects and Contact, plus two city/date items in the header (ATH(GR) 07 11, AMS(NL) 06 11). The page shows three of five projects: ABR Festival (a modular, motion-first identity), Buna Tetu (posters for a jazz cafe, generated in Processing from sound analysis) and MiAO World (a digital platform for a Chinese gaming studio with pixel type). It also lists awards from CSS Design Awards, Awwwards and EBGE Awards, and a manifesto about computational design.

The measured page (1280px wide, 7,694px tall, 247 visible elements) is a black screen with a thin grey top bar, a large generative canvas in the first view (a clock-like dot constellation, a yellow-on-grey letterform "M" with Cyrillic text running along its strokes, and a column of ASCII-art text), then a very large black field with the headline "Generative Code Explorations" set in huge light grey Helvetica, overlapping project thumbnails, and finally an off-white section with a spaced-out manifesto line ("ON COMPUTATION AS A WAY OF THINKING") and three columns of small monospace paragraphs. The cookie-consent dialog that the site uses was hidden by the extractor and is not documented.

The voice is academic and terse: lowercase-capital mixes, parenthetical links such as "(Read More)", and monospace for everything small. Colour in the interface is limited; colour comes from the generative artwork.

## Colors

The CSS variables name the whole palette: `--black #0f0f0f` (also `--background`), `--white #fdfdfd`, `--grey #cecece` (`--foreground`), `--ash #858585` (`--foreground-dim`), `--coal #1a1a1a` (`--foreground-dimmed`), `--vanta #000000`, `--blue #0000ff` (`--accent`) and `--red #d4373a`.

- **Canvas `#0f0f0f`**: the page background; the second background by area (1,024) after the off-white sections.
- **Paper `#fdfdfd`**: the largest background by area (5,155), the manifesto section; also the text colour of the header (56 characters).
- **Ink `#858585`**: the most-read text colour (2,674 of 2,872 characters), used for the small monospace paragraphs.
- **Light grey `#cecece`**: the 128px headline.
- **Coal `#1a1a1a`**: a darker grey, 16 characters.
- **Primary `#0f0f0f`**: the colour of the "(Read More)" link on paper sections; the site has no filled button, so primary here is the dark link colour.
- **Accent blue `#0000ff` and red `#d4373a`**: declared in the root; no measured element on the home page displayed them, so they are not used in component tokens. The root also contains a `--swiper-theme-color #007aff` (a slider library default) and cookie-banner variables (`--cc-*`) that are not brand colours.

## Typography

Two families: **2XAMONOVF** (a variable monospace, weights 100 to 900 loaded; 2,701 characters; the studio's own name with "MONOVF") and **HelveticaProRoman** (171 characters, with Helvetica as fallback).

- **Display, 2XAMONOVF 23.75px / 400**: the header links (2xA STUDIO, ABOUT, PROJECTS, CONTACT, city labels). On mobile 20px.
- **Heading, HelveticaProRoman 128px / 400 / 128px, -1.92px**: the h2 "Generative Code Explorations", 1,248px wide and 404px tall on desktop. On mobile 58.5px with -0.8775px.
- **Subheading, HelveticaProRoman 23.75px / 400, -0.35625px**: the h3 project titles.
- **Body, 2XAMONOVF 19px / 400 / 23.75px**: the dominant size (2,198 characters, -0.285px tracking on 79 of them). On mobile 16px / 20px.
- **Link, HelveticaProRoman 28.5px / 400**: "(Read More)".

The pairing is a technical monospace for text and a plain grotesk at extreme size for headlines. The root variables define a type scale (`--font-sm` 1rem, `--font-sd` 1.25rem, `--font-md` 1.5625rem, `--font-lg` 1.875rem, all multiplied by `--font-scale: 1`); the measured sizes 19px, 23.75px and 28.5px are the 1.1875 multiples of 16px, 20px and 24px. No foundry pages were opened.

## Layout

The grid has breakpoints declared as variables: `--xs 584px`, `--sm 768px`, `--md 1024px`, `--lg 1280px`, `--xl 1512px`. Base padding is `--pad: 1rem` (16px) and the gap `--gap: .625rem` (10px). The header is a 56px-high bar (`--nav-height` is the medium font size plus two pads) with a 16px padding; city/date items sit in the centre columns and the page links at the right. The headline block is 1,248px wide, nearly the full viewport width minus 16px margins. The manifesto row spreads words across the full width with large gaps, and below it the three text columns share the width. Measured gaps: 10px (18 uses); paddings: 16px (29), 5px (11), 10px (6), 80px (2), 160px (1) and 200px (1). The large 80px and 160px steps mark section transitions. The page has very large vertical emptiness between the first generative scene and the headline in the capture.

## Elevation & Depth

No shadows (`--box-shadow: none` is declared and no shadow was measured). There are no cards or overlays on the home page. Depth comes from overlap: thumbnails sit over the letters of the huge headline, and the headline letters are clipped by the next section. Dark-to-light section changes (black to `#fdfdfd`) separate bands, with no borders (the border-colour list is empty).

## Shapes

The one measured radius is `1.6px` (19 uses), declared as `--border-radius: .1rem`; the root also declares `--border-radius-text: .15rem`. Images and thumbnails are rectangles with that almost imperceptible rounding. The only shapes with strong curves are inside the generative artwork (the yellow capsule strokes of the letterform and the dot constellation), which is content, not interface.

## Components

- **Top bar**: black bar, 1,280px wide and 56px high; monospace 23.75px labels in `#fdfdfd`; includes the studio name, two city/date labels and three links.
- **Headline**: "Generative Code Explorations" at 128px in `#cecece`, left aligned over three lines.
- **Project thumbnails**: small rectangular previews (1.6px radius) that overlap the headline.
- **"(Read More)" link**: HelveticaProRoman 28.5px, `#0f0f0f`, on the paper section; parentheses are part of the label.
- **Manifesto row and columns**: spaced monospace caps line, then three columns of 19px monospace text in `#858585`.
- **Footer**: `#0f0f0f` background, `#fdfdfd` text, 16px 16px 0 padding, 800px tall.

Hover states: none recorded.

## Design System Architecture

No public design system or brand guidelines were found. The studio page (https://2xa.studio/) lists contact details, Instagram, Behance and a Spotify playlist and mentions no guidelines; no design-system link is present. The de-facto system is a root-variable set: colour names (`--black`, `--white`, `--grey`, `--ash`, `--coal`, `--blue`, `--red`), semantic aliases (`--background`, `--foreground`, `--foreground-dim`, `--foreground-dimmed`, `--accent`), a font scale with `--font-scale`, spacing (`--pad`, `--gap`), five breakpoints and a family of easing curves (`--ease-in-out: cubic-bezier(.785, .135, .15, .86)`, `--ease-out-expo: cubic-bezier(0, 1, 0, 1)`). A third-party cookie-consent stylesheet (`--cc-*`) and the Swiper slider library are also loaded.

## Do's and Don'ts

- Do set small text in the monospace at 19px / 23.75px with `#858585` on black.
- Do use one huge grotesk headline (128px, -1.92px tracking) in `#cecece`.
- Do alternate black (`#0f0f0f`) and paper (`#fdfdfd`) bands without borders.
- Do keep radii at 1.6px and avoid shadows.
- Don't add filled buttons; links are parenthesised text.
- Don't document the cookie dialog or slider arrows as brand UI.
- Don't use `#0000ff` or `#d4373a` on the interface until measured on an element.
- Don't copy the generative artwork's colours (yellow, pink, teal) as UI tokens.

## Responsive Behavior

The mobile pass (390px wide) measured: the header link 20px with `8px` padding (nav 36px high, 390px wide) and the three links About, Projects and Contact; the h2 58.5px / 400 with -0.8775px tracking (374px wide, 192px tall); body 16px / 20px (374px wide). Character-weighted mobile sizes: 16px, 20px and 58.5px. The city/date labels are not present in the mobile nav text. Root variables declare breakpoints at 584px, 768px, 1024px, 1280px and 1512px. Layout of the thumbnails and columns at 390px was not measured.

## Iteration Guide

1. Black `#0f0f0f`, ash `#858585` body text, light grey `#cecece` headline, paper `#fdfdfd` sections.
2. Monospace 2XAMONOVF at 19px for text; HelveticaProRoman 128px for the headline.
3. 1.6px corners, no shadows, no borders; section changes by colour.
4. Keep links as parenthesised text; no filled buttons.
5. Run `node web/scripts/verify-designs.mjs --slug=2xa-studio` after edits.
