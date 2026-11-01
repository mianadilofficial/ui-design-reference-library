---
version: alpha
name: Redwood Team
category: "Culture & Events"
description: "Redwood Team is a Spanish-language production company showreel site: a pure black canvas (#000000), cream ink (#f9f3de), a single red accent (#e91b00), the Plaak display face at 204.444px with -4.08889px tracking for project names, Inter 500 uppercase labels at 17.7778px, and video frames with 8.89px rounded corners."
colors:
  canvas: "#000000"
  ink: "#f9f3de"
  primary: "#e91b00"
typography:
  display:
    fontFamily: Plaak
    fontSize: 204.444px
    fontWeight: 400
    lineHeight: 124.711px
    letterSpacing: "-4.08889px"
  display-mobile:
    fontFamily: Plaak
    fontSize: 228.244px
    fontWeight: 400
    lineHeight: 139.229px
    letterSpacing: "-4.56489px"
  subheading:
    fontFamily: Inter, Helvetica, Arial, "Lucida Grande", sans-serif
    fontSize: 17.7778px
    fontWeight: 500
    lineHeight: 16px
    letterSpacing: "-0.355556px"
    textTransform: uppercase
  link:
    fontFamily: Inter, Helvetica, Arial, "Lucida Grande", sans-serif
    fontSize: 16px
    fontWeight: 500
rounded:
  xs: 8.89px
spacing:
  s1: 17.78px
  s2: 39.11px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
---

## Overview

The page title is "Team — Redwood Team" and the document language is declared as Spanish (`lang="es"`). The measured URL is https://redwoodteam.tv/. It is a showreel-style site for a production company: the whole experience fits one 800px-tall viewport (the scroll height measured is 800px, the same as the viewport variable `--vh: 800px`), and the content is a stack of large video frames with project names. The visible text is only a short menu and a list of project titles: WORKS, ARTISTS, ABOUT, LEGAL, then BURGER KING, BARÇA, LA DIEGOL and FRANCE. The capture shows the first frame: three young adults photographed from a low angle in a blue-grey room, arms crossed, framed as a slightly tilted video card on black, with a small red "W" mark below it and the menu words at the bottom corners.

The visual idea is cinema first. Everything that is not footage is black; type is cream or red; interface chrome is reduced to a plus icon at the top left and four small uppercase words at the bottom corners.

## Colors

Three colors are measured, and they are the complete palette:

- **Canvas `#000000`:** the page and body background. No other background fill was recorded (the background-area list is empty because the footage fills the viewport).
- **Ink `#f9f3de`:** a warm cream used for all small text, 1638 characters in the measured pass, including the menu, the project labels and the link text.
- **Primary `#e91b00`:** a saturated red used for the oversized project title "BURGER KING" (107 characters) and, in the capture, for the small "W" logo mark.

There is no button fill, no card fill, no secondary neutral and no hairline. `on-primary` is not defined because no button was detected; the red is a type and logo color. The root variables `--swiper-theme-color: #007aff` and `--swiper-navigation-size: 44px` belong to the carousel library and the `--plyr-*` shadow variables to a video-player library; neither is a brand color.

## Typography

Two families are loaded: Plaak (weight 400) and Inter (a variable font loaded over weights 100 to 900).

- **Display:** Plaak, 204.444px, weight 400, line height 124.711px, letter spacing -4.08889px. This is the project title (h2 role, "BURGER KING", 283px wide, 134px high). Line height is about 0.61 of the size, so lines of title text touch closely. On the 390px pass the same title measures 228.244px with line height 139.229px and letter spacing -4.56489px, wider relative to the viewport than on desktop.
- **Subheading:** Inter, 17.7778px, weight 500, line height 16px, letter spacing -0.355556px, uppercase. Used for the h3 "LA DIEGOL" and the menu items.
- **Link:** Inter, 16px, weight 500. The size 16px accounts for 1515 characters, the most used size; 17.7778px covers 123 characters.

Letter spacing is negative at both scales (-4.08889px on 204.444px and -0.355556px on 17.7778px, both -2 percent of the size). Plaak and Inter: Inter is open source; Plaak is a commercial display typeface, and no free substitute is documented by the site. The mobile pass records body text at 15.8779px with 123 characters, a slightly smaller subheading size than desktop.

## Layout

The desktop pass is 1280px wide and 800px high, and nothing scrolls further. The layout is a vertical sequence of video frames, each wide (the main frame link measures 1141px by 669px) and centered with black margins at the sides. The frames sit at a slight angle in the capture, like pieces of film or photo prints, with black bands between them. The menu words are fixed at the lower left (WORKS, ARTISTS) and lower right (ABOUT, LEGAL), and a plus glyph sits at the upper left. A small centered red logo appears between the frames.

Measured spacing is minimal: one padding of 17.7778px and one gap of 39.1111px. These two values are kept as the `s1` and `s2` spacing tokens (17.78px and 39.11px). Project names are set very large and in red, sized relative to the frame rather than the page grid.

## Elevation & Depth

No box shadow was measured on any rendered element. The corpus lists only library shadows from the Plyr video player (`0 1px 1px rgba(35,40,47,.15), 0 0 0 1px rgba(35,40,47,.2)` and `0 1px 2px rgba(0,0,0,.15)`) and these belong to player controls, not to the site's own components. Depth comes from the footage itself and from the slight rotation and overlap of frames over a flat black field.

## Shapes

One radius is measured: 8.88889px, found on 11 elements, notably the large link that wraps each video frame (1141px by 669px). All other measured elements have 0px. The spacing and radius values are kept at 8.89px (`rounded.xs`).

## Components

- **Video frame link:** a block-level link that wraps a video, 1141px by 669px in the measured state, Inter 16px weight 500, text `#f9f3de`, radius 8.88889px. This is the main component of the site.
- **Project title:** Plaak 204.444px in `#e91b00`, negative tracking; the title is an h2 inside the frame.
- **Project label:** Inter 17.7778px uppercase in `#f9f3de` (for example "LA DIEGOL").
- **Menu:** four uppercase Inter labels at the bottom corners, no backgrounds, no borders.
- **Logo mark:** a red "W" glyph, seen only in the capture and not measured.
- **Icons:** a plus sign top left, in the capture only.

No input, button, card or footer was detected, and hover states were not recorded (the hover list is empty).

## Design System Architecture

No public design system or brand guideline for this site was opened. An attempt to fetch the page text with WebFetch failed with the error recorded in SOURCES.json, so the page text used here is the text captured by the extractor, not a separate fetch. The code evidence: the page is built on WordPress (the root variable `--wp-internal-comment` is a WordPress style-hoisting placeholder), with the Swiper carousel library (`swiper-icons` font face, `--swiper-navigation-size`), the Plyr video player (`--plyr-*` variables) and two font faces (Plaak, Inter). All measurements are from `web/data/extracted/redwood-team.json` for https://redwoodteam.tv/.

## Do's and Don'ts

- Do keep the canvas at `#000000` and use only cream `#f9f3de` and red `#e91b00` for type.
- Do set project names in Plaak at very large size with strongly negative tracking.
- Do keep labels in small uppercase Inter weight 500.
- Do let video frames carry the design, with rounded corners of 8.89px.
- Don't add buttons, cards or fills; none were measured.
- Don't use shadows; the only shadows in the CSS come from the video-player library.
- Don't use the carousel library blue `#007aff` as a brand color.
- Don't add body-copy paragraphs: the measured text is only menu words and titles.

## Responsive Behavior

The 390px pass recorded only the title and the size list: the title "BURGER KING" is Plaak at 228.244px, line height 139.229px, letter spacing -4.56489px, in `#e91b00`, 316px wide and 150px high; the text sizes by characters are 16px (1515 characters), 15.8779px (123) and 228.244px (107). No body text, navigation or call-to-action was detected on mobile. How the frames, menu and plus icon rearrange at mobile width was not measured.

## Iteration Guide

1. Start from `#000000`, cream `#f9f3de` and red `#e91b00`; add nothing else.
2. Set the project title in Plaak 204.444px with -4.08889px tracking and a line height of 124.711px.
3. Set menu and labels in Inter 500, 17.7778px, uppercase, -0.355556px tracking.
4. Wrap each frame in a link with an 8.88889px radius and let the video fill it.
5. Keep the interface to four menu words and one plus icon.
6. Re-measure with `node web/scripts/extract-tokens.mjs --slug=redwood-team --url=https://redwoodteam.tv/ --force --no-motion`, then run `node web/scripts/verify-designs.mjs --slug=redwood-team`.
