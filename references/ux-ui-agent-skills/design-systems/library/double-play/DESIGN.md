---
version: alpha
name: "Double Play"
category: "Agencies & Studios"
description: "Double Play GmbH is a German web and brand studio whose Webflow site uses one chroma, ultramarine #002bba, on an off-white #fbfbfb canvas, Perfectly Nineties serif at 120px and 64px, Neue Montreal at 32px, tennis-themed copy, full-width blue bands, square corners and no shadows."
colors:
  canvas: "#fbfbfb"
  ink: "#002bba"
  primary: "#002bba"
  white: "#ffffff"
  on-primary: "#fbfbfb"
  grey: "#9b9b9b"
typography:
  display:
    fontFamily: "\"Perfectly Nineties\", \"Times New Roman\", sans-serif"
    fontSize: 120px
    fontWeight: 500
    lineHeight: 132px
    letterSpacing: "-0.75px"
  display-mobile:
    fontFamily: "\"Perfectly Nineties\", \"Times New Roman\", sans-serif"
    fontSize: 60px
    fontWeight: 500
    lineHeight: 60px
    letterSpacing: "-0.25px"
  heading:
    fontFamily: "\"Perfectly Nineties\", \"Times New Roman\", sans-serif"
    fontSize: 64px
    fontWeight: 500
    lineHeight: 76.8px
    letterSpacing: "-0.8px"
  body:
    fontFamily: "\"Neue Montreal\", Arial, sans-serif"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 32px
    letterSpacing: "-0.5px"
rounded:
  pill: 9999px
spacing:
  s1: 6.4px
  s2: 8px
  s3: 16px
  s4: 24px
  s5: 32px
  s6: 40px
  s7: 48px
  s8: 80px
  s9: 96px
  s10: 112px
components:
  hero-title:
    textColor: "{colors.on-primary}"
    typography: "{typography.display}"
  section-title:
    textColor: "{colors.primary}"
    typography: "{typography.heading}"
  intro-paragraph:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  blue-band:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
---

# Double Play

## Overview

Double Play is a creative studio based in Germany that designs websites and brand identities; the measured site, `https://www.doubleplay.studio/`, is titled "Double Play GmbH" and describes itself as bringing "the quality of exceptional brands to the web. To secure your spot at the top of the leaderboard." The whole site is written as a tennis metaphor: the mission paragraph reads "websites and brand designs that spark excitement - just like a Grand Slam Tennis match ... game, set, and match for your brand", the process is "From baseline to breakthrough ... a straight game plan", and the nav marks a small figure mark beside the "Double Play" wordmark. Navigation is Projects, About, Pricing and Community at the left, the logo centered, and Contact with a globe icon at the right.

The page is a two-color, type-led design. The canvas is an off-white (`#fbfbfb`) and the single brand color is a deep ultramarine blue (`#002bba`), used both as text color on the off-white and as the full-width background of whole sections, where the text flips to the off-white. The hero is a full-bleed film frame (two people reviewing printed plans at a table) with the headline "Game-changing Websites" set in white high-contrast serif at 120px and a circular outlined play button beside it. After a brief intro the page presents a gigantic blue word "Play" cropped by the viewport, the "Mission" block ("What is Double Play?"), then a blue band holding "Selected work 09" with ten projects (Bloomfield, Wiemer, Taste, Era of Arc, Champions, Rasten, Heavn, Stryds, Heid, HiFi Pro), each listed with a category (Start-up, Product or Real estate), a year and award tags such as Awwwards SOTD, FWA FOTD, CSSDA WOTD and Awwwards HM; every project reads "Coming soon" and "Tap to open".

The capture shows a cookie consent dialog (Accept, Deny, Preferences) in the lower right; it is third-party UI, as is the hidden footer consent wrapper, and neither is documented as brand UI.

## Colors

The brand color is declared as `--colors--brand-color` and measured on screen.

- **Canvas `#fbfbfb`**: the off-white page, covering 14,200 area units. Also the text color on blue bands and on the hero (651 characters).
- **Ink `#002bba`** and **primary `#002bba`**: ultramarine blue; text on off-white (107 characters) and the background of full-width sections (3,981 units). The brand uses one chroma, so ink and primary are the same value.
- **On-primary `#fbfbfb`**: the off-white used for text on blue.
- **White `#ffffff`**: measured as a background of 254 units; the extraction does not name its element, so it has no assigned role. The root variable `--pure-white` is declared.
- **Grey `#9b9b9b`**: `--grey`, declared and not recorded on screen.

No gradients, shadows or additional hues were measured in the re-extraction.

## Typography

Two families. Perfectly Nineties, a high-contrast serif, sets display headings (195 measured characters); Neue Montreal sets everything else (778). Weights are 500 (509 characters), 400 (427) and 600 (37).

- **Display**: Perfectly Nineties 120px / 132px, weight 500, letter-spacing -0.75px; "Game-changing Websites" and project names such as "Bloomfield". On the 390px pass it measures 60px / 60px with -0.25px tracking (`display-mobile`).
- **Heading**: Perfectly Nineties 64px / 76.8px, weight 500, letter-spacing -0.8px; "Mission" and "Selected work".
- **Body**: Neue Montreal 32px / 32px, weight 500, letter-spacing -0.5px; the intro and mission paragraphs in blue.

The root variables declare a type scale `--font-size--l: 120px`, `--m: 64px`, `--s: 48px`, `--xs: 32px` and `--copy-18: 18px`. Other measured sizes: 18px (184 characters, small copy), 24px (115), 14px (43), 48px (29), and 512px (16 characters) and 1150px (4 characters) runs; the capture shows oversized cropped words, but the mapping of those sizes to elements was not recorded. Family and weight for the 18px, 24px and 14px runs were not separately recorded, so they are not tokens.

## Layout

The desktop pass measured 1280px wide and a 10,142px page. The root variables define a rem-based spacing scale (`--spacing--025` through `--spacing--10`, from 0.25rem to 10rem) and widths (`--width--15` through `--width--100`, from 15rem to 80rem, and 100%). Page structure: a full-bleed hero, a long scroll of off-white with enormous cropped type, a blue band for the work list, and the process section. The intro paragraph measured 592px wide. Frequent paddings are 40px (17 uses), 16px (11), 112px (5), 80px (3) and 160px. The spacing tokens `s1` to `s10` run 6.4px, 8px, 16px, 24px, 32px, 40px, 48px, 80px, 96px, 112px.

## Elevation & Depth

Flat: no box shadow and only a single 50% radius were measured after the consent dialog was excluded. Depth comes from the full-bleed film frame, the contrast between off-white and blue sections, and type scale (words larger than the viewport are cropped by it).

## Shapes

Rectangular sections and a single circle: the 50% radius on the outlined play button beside the hero headline. The extraction measured no other radius in the final pass; a 10px and a 12px radius that appeared in the first pass (when the cookie dialog was in the capture) are absent from the re-extraction and are not used. The small figure mark and rounded serif letterforms provide the character, not boxes.

## Components

- **Hero title** (`hero-title`): Perfectly Nineties 120px, off-white, over the film frame.
- **Section title** (`section-title`): Perfectly Nineties 64px, blue on off-white.
- **Intro paragraph** (`intro-paragraph`): Neue Montreal 32px weight 500 in blue, 592px wide.
- **Blue band** (`blue-band`): blue background with off-white text, used for the work list.
- **Play button**: an outlined circle with a white triangle, next to the hero headline.
- **Project row**: serif name, category, year, "Coming soon" and award tags.
- **Not documented**: the cookie dialog (Accept, Deny, Preferences) and the hidden consent wrapper.

## Design System Architecture

No public design system or brand guideline was found: the home page links to project sites, the Awwwards and Webflow profiles, social profiles and legal pages, but not to guidelines. The site is built in Webflow (the font list includes `webflow-icons`, and several project links are `*.webflow.io`), and its system is a set of 45 root custom properties: `--colors--brand-color`, `--pure-white`, `--grey`, the `--font-size--*` scale, the `--spacing--*` scale in rem, the `--width--*` scale in rem and `--swiper-navigation-size: 44px`. Source: `https://www.doubleplay.studio/`.

## Do's and Don'ts

- Do limit the palette to off-white `#fbfbfb` and ultramarine `#002bba`, flipping text color between them.
- Do use the serif at 120px for display and 64px for headings, with slightly negative tracking.
- Do crop giant type against the viewport edge.
- Do keep the sports vocabulary consistent: game, set, match, baseline, leaderboard.
- Don't add other hues, gradients or shadows; none were measured.
- Don't treat the cookie dialog or the first-pass 10px and 12px radii as part of the system.
- Don't set serif text at body sizes; the measured serif runs are display and heading only.

## Responsive Behavior

The 390px pass recorded: the h1 at 60px / 60px (a 342 × 120px block), the h2 at 48px / 48px, body text at 24px / 26.4px (a 342 × 265px block), no header links visible, a visible menu toggle labelled "menu", and a maximum of 2 project-card columns. The declared type scale (120px, 64px, 48px, 32px, 18px) and rem spacing exist as variables, but breakpoints were not measured.

## Iteration Guide

1. Set canvas `#fbfbfb`, brand blue `#002bba`, and load Perfectly Nineties and Neue Montreal.
2. Open with a full-bleed film hero, a 120px white serif headline and an outlined circular play button.
3. Follow with giant cropped blue serif type, then centered 32px blue body paragraphs.
4. Use full-width blue bands with off-white text for lists such as selected work.
5. Keep corners square, no shadows, and one chroma.
6. Run `node web/scripts/verify-designs.mjs --slug=double-play` after edits.
