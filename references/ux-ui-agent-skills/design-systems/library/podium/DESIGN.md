---
version: alpha
name: "Podium"
category: "Portfolio"
description: "Podium (podium.global) is a sports creative studio site: black #000000 canvas with white and black uppercase bold Futura (57.408px headings, 24px display, 16px body), Univers Condensed footer, and every element square at 0px radius."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#ffffff"
  ink-grey: "#c4c4c4"
typography:
  display:
    fontFamily: Futura, system-ui, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 21.6px
    letterSpacing: "-0.24px"
    textTransform: uppercase
  display-mobile:
    fontFamily: Futura, system-ui, sans-serif
    fontSize: 19.834px
    fontWeight: 700
    lineHeight: 19.834px
    letterSpacing: "-0.59502px"
    textTransform: uppercase
  heading:
    fontFamily: Futura, system-ui, sans-serif
    fontSize: 57.408px
    fontWeight: 700
    lineHeight: 51.6672px
    textTransform: uppercase
  body:
    fontFamily: Futura, system-ui, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 19.2px
    textTransform: uppercase
  nav:
    fontFamily: Futura, system-ui, sans-serif
    fontSize: 10px
    fontWeight: 400
    lineHeight: 15px
rounded:
  none: 0px
spacing:
  s1: 21.5px
  s2: 22.29px
  s3: 24px
  s4: 30.29px
  s5: 48px
  s6: 114.72px
  s7: 127.38px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
  nav:
    textColor: "{colors.canvas}"
    padding: 21.496px
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.ink}"
    padding: 0px 21.496px
---

## Overview

Podium (podium.global, title "Podium | Creative Studio & Video Production for Sports") is a creative studio that offers creative direction and production for athletics. The measured home page opens on a white hero with the black PODIUM wordmark at top left, a three-link nav (WORK, ABOUT, CONTACT) at top right, an organic, blob-shaped photo mask in the center filled with sports imagery (grass field, a torso, a rock face), the line "WE OFFER CREATIVE DIRECTION & PRODUCTION FOR ATHLETICISM." at bottom left and "SCROLL DOWN" at bottom right. The rest of the page is a very long black field: section headlines read "Behind the scenes", "We've worked with sports brands and athletes worldwide.", "Services", "Clients" and "Athletes we've worked with". Listed clients are Salomon, ON Running, Puma, Nike, The North Face, Saucony, Garmin, Ciele, Shokz, Auclair, Altitude Sports and Le Braquet. A project card on the page reads "DEVIATE 2025 PUMA". The contact area offers labels Commercial, Film, General and Invoicing, a "Work with us" action, "Available worldwide", and the closing copy "Let's build your vision. It's step one. Not the finish line." The footer reads "©PODIUM 2026", a "COPIED" confirmation label and "WEBSITE BY SAN RITA".

The site is typographic and photographic: all headline and body text is uppercase bold Futura, there are no buttons with fills, and no rounded corners were measured anywhere.

## Colors

Measured in `web/data/extracted/podium.json`:

- **canvas `#000000`**: the body background (`--color-black #000`).
- **ink `#ffffff`** and **primary `#ffffff`**: white text on the black field (266 characters), also the project-card title color. The extractor found no filled call to action, so primary equals ink.
- **ink-grey `#c4c4c4`**: muted text (32 characters).
- **black text `#000000`**: the most-read text color (833 characters) on the light hero and light content areas; the capture shows white sections as well as black ones.

The only background color measured by area is `#000000`. The shipped CSS root variables, a Tailwind v4 theme, add `--color-white #fff`, `--color-whatwedo-service #fdf7f7`, `--color-whatwedo-athlete #cacaca` (names for the "what we do" boxes), and Tailwind palette entries in the lab() color space (gray-200, gray-400, gray-700, gray-800, slate-100, slate-200, neutral-900, blue-500, blue-600, red-500). Those palette entries are utility defaults, not measured on visible elements, and are not brand tokens.

## Typography

Two families are used. **Futura** (983 characters; weights 400, 500 and 700) is the main face for nav, headlines and body; the CSS names it `--font-futura: "Futura", system-ui, sans-serif`. **Univers Condensed** (148 characters, weight 400; `--font-univers: "Univers Condensed", "Arial Narrow", sans-serif`) is used for the footer and small captions such as "SCROLL DOWN".

- **display** ("WE OFFER CREATIVE DIRECTION & PRODUCTION..."): Futura 24px / 21.6px, weight 700, letter-spacing -0.24px, uppercase. On the 390px pass the extractor's display role (the INSTAGRAM link) measures 19.834px / 19.834px, -0.59502px.
- **heading** (h2 "WE'VE WORKED WITH SPORTS BRANDS AND ATHLETES WORLDWIDE."): Futura 57.408px / 51.6672px, weight 700, uppercase (160 characters). Mobile: 32px / 28.8px.
- **body** (athlete names list): Futura 16px / 19.2px, weight 700, uppercase (517 characters at 16px, the most common size).
- **nav**: Futura 10px / 15px, weight 400.

Other measured sizes: 12px (238 characters, Univers Condensed footer), 24px (151), 50.992px (35), 20px (17, with -0.2px spacing) and 10px (13). Weights: 700 (880 characters), 400 (161), 500 (90). Tracking is slightly negative on 24px (-0.24px) and 20px (-0.2px); other sizes are normal. Line-height runs below or close to font size for headlines (0.9 ratio at 24px and 57.408px). The mobile pass lists 16px (517 characters), 12px (203), 32px (195), 24px (146), 63.3px (16). No font-license source was opened.

## Layout

The page is 1280px wide and 6,252px tall. The header is 73px high with 21.496px padding all round, and the same 21.496px horizontal padding is used in the footer (61px high). Measured paddings: 21.496px (24 occurrences), 114.716px, 127.38px, 24px. Measured gaps: 22.288px (7), 30.288px, 24px, 48px. The Tailwind theme variables expose named spacing: `--spacing-gap-sm 0.8rem`, `--spacing-gap-md 1.6rem`, `--spacing-gap-lg 2.4rem`, `--spacing-gap-xl 4.8rem`, `--spacing-block-py 3.2rem`, `--spacing-overlay-inset 2.4rem`, `--spacing-controls-px 2.4rem`, `--spacing-controls-max-w 154rem`, `--spacing-hero-bottom 2.5rem`, `--spacing-project-list-top 11.6rem` and `--spacing-quote-author-w 14rem`. The hero holds copy at the left and bottom, with the wordmark and nav pinned at the top edge.

## Elevation & Depth

No shadows and no borders were measured (`boxShadows` and `borderColors` are empty). Depth is created only by photography: the hero mask shows photographs through a blob-shaped cutout, with soft grey gradient blobs at the upper right, on a white field, and by the contrast between the white hero and the black body. A `--spacing-perspective: 220rem` variable is declared in the CSS; its visual use is not measured.

## Shapes

`borderRadii` is empty: every element renders with a computed radius of 0px, so the interface is square. The only curvy shape is the organic photo-mask in the hero, which is image art rather than an element radius. The tokens file therefore declares `rounded: none: 0px`. The shipped CSS declares `--radius-md: .375rem` from the Tailwind theme, but no measured element uses it.

## Components

- **nav**: transparent header 73px high with padding 21.496px; links "Podium — Home" (wordmark link, 203px wide), WORK, ABOUT, CONTACT in Futura 10px / 15px, black on the white hero.
- **project link**: white Futura 24px / 24px bold uppercase title ("DEVIATE", year "2025", client "PUMA"), 293px by 311px hit area, no fill and no border.
- **list of athletes / body copy**: uppercase bold 16px.
- **footer**: transparent, white Univers Condensed 12px / 13.2px uppercase, padding 0px 21.496px, 61px high; text "©PODIUM 2026", "COPIED", "WEBSITE BY SAN RITA".
- **scroll hint**: "SCROLL DOWN" in small condensed caps.

There are no measured buttons, inputs or cards.

## Design System Architecture

No public design system or brand guideline was found; the opened home page contains no such link. The shipped CSS is a Tailwind v4 theme: root variables such as `--spacing: .25rem`, `--text-sm: 1.2rem`, `--font-weight-bold: 700`, `--ease-out`, `--ease-out-expo`, `--default-transition-timing-function`, `--font-futura`, `--font-univers`, and project-specific spacing names (`--spacing-card-label-right`, `--spacing-project-list-poster-inset`, `--spacing-whatwedo-box-gap`). Source: https://podium.global/ (measured with `web/scripts/extract-tokens.mjs`). The credit "Website by San Rita" names the site's builder.

## Do's and Don'ts

- Do set everything in uppercase bold Futura; use Univers Condensed at 12px for the footer.
- Do keep corners square (0px).
- Do rely on photography and the black/white split rather than fills, borders or shadows.
- Do use tight line-heights (0.9 at display sizes).
- Don't add buttons with fills, shadows or radii; none were measured.
- Don't use the Tailwind palette defaults (blue-500, red-500) as brand colors.
- Don't use `ui-sans-serif` fallbacks as the design font; Futura is declared.

## Responsive Behavior

Measured on the 390px pass: the h2 is Futura 32px / 28.8px weight 700 (down from 57.408px / 51.6672px on desktop); body copy remains 16px / 19.2px, weight 700; the display role (an INSTAGRAM link) is 19.834px / 19.834px with -0.59502px spacing. The most-read mobile sizes are 16px (517 characters), 12px (203), 32px (195), 24px (146), 20px (21), 63.3px (16), 19.834px (14) and 10px (13). The footer's maximum height variable on mobile is `--spacing-footer-maxh-mobile: 33rem`. Nav layout and the hero mask on mobile are not measured.

## Iteration Guide

1. Canvas #000000, text #ffffff, muted #c4c4c4, black text #000000 on light areas.
2. Futura 700 uppercase: 57.408px / 51.6672px headings, 24px / 21.6px display, 16px / 19.2px body; Univers Condensed 12px for the footer.
3. Radius 0px everywhere; no shadows or borders.
4. Run `node web/scripts/verify-designs.mjs --slug=podium` after edits; never change measured values.
