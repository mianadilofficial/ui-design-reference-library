---
version: alpha
name: Ten Years Away
category: "Culture & Events"
description: "Interactive graphic novel by Studio375 set in PP Valve (weights 200, 500, 800), uppercase 14-15px interface text, a storm navy #0d1429 ground with pale ice blue #cce8eb type, a 3px outlined entry button and no shadows."
colors:
  canvas: "#0d1429"
  ink: "#cce8eb"
  primary: "#cce8eb"
  on-primary: "#0d1429"
  page-white: "#ffffff"
  ink-black: "#000000"
  surface-ice: "#a5d8dd"
  accent-vermilion: "#d65938"
typography:
  display:
    fontFamily: valve, "valve Fallback"
    fontSize: 15px
    fontWeight: 500
    lineHeight: 22.5px
    textTransform: uppercase
  display-mobile:
    fontFamily: valve, "valve Fallback"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 18px
    textTransform: lowercase
  nav:
    fontFamily: valve, "valve Fallback"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 21px
    textTransform: uppercase
  body:
    fontFamily: valve, "valve Fallback"
    fontSize: 13px
    fontWeight: 500
    lineHeight: 20.8px
    textTransform: uppercase
rounded:
  xs: 3px
spacing:
  s1: 10px
  s2: 15px
  s3: 20px
  s4: 50px
  s5: 104px
components:
  entry-button:
    textColor: "{colors.primary}"
    typography: "{typography.display}"
    rounded: "{rounded.xs}"
    height: 38px
  nav:
    textColor: "{colors.ink-black}"
  nav-link:
    textColor: "{colors.ink-black}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.primary}"
    padding: 0px 50px
---

## Overview

Ten Years Away is "A graphic novel, of a true story, based on us", described in its own meta description as an interactive experience by Studio375. The measured home page (https://ten.375.studio/en) opens on an entry gate rather than on content: a giant year numeral ("2025", measured at 160px weight 800 on desktop and 100px on the 390px mobile pass) sits in the middle of a deep navy field with two outlined buttons under it, "ENTER WITH SOUND" and "ENTER WITHOUT SOUND", and a footer line reading "click anywhere to start". The capture is therefore the splash of the experience, and the same gate appeared on the /en/about extraction. Everything documented here is what that entry state and the about copy measure; the interior comic pages were not measured.

The mood is quiet and nocturnal. One ground color, one pale ice blue for type, one hairline outline. The numeral is cut by a notch in its final digit, which reads as a graphic-novel title card rather than a web hero. Copy is lowercase or uppercase in short imperative fragments, never sentences with marketing adjectives.

## Colors

The ground is storm navy `#0d1429`, declared in the site CSS as `--storm` and measured as the only opaque background by area (weight 1024). The capture shows this navy under a fine grain, so the pixels render a little lighter than the declared hex; the declared and measured value is `#0d1429`. All reading text on it is ice blue `#cce8eb` (`--text-blue`), which carries 92 of the 102 measured characters. That pair is `ink` on `canvas`, and the same ice blue is the border color of the entry button (`1px solid #cce8eb`), so `primary` is an outline and text color, never a filled one.

Secondary values come from the CSS variables and the /en/about measurement. `#a5d8dd` (`--bg-blue`) is a slightly deeper ice blue used as an 8-weight background on the about page. `#d65938` (`--text-color`) is a vermilion declared in the root variables; its on-screen use was not measured on the pages captured, so treat it as the declared accent. The body element itself computes `#ffffff` background and `#000000` text (`--background: #fff`, `--foreground: #000`), and the navigation links ("YEARS", "ABOUT") compute `#000000`; these are page-white and ink-black in the tokens. On the about page the paragraph text computes `#0d1429`, so on the lighter ice panels the navy flips from ground to ink. `on-primary` is the navy for text placed on an ice fill.

## Typography

One family carries everything: PP Valve (the CSS name is `valve`, with an automatic `valve Fallback`). The font preloads shipped on the page are the Plain Extralight, Medium, Medium Italic and Extrabold files, and the loaded faces measured are 200 normal, 500 normal, 500 italic and 800 normal. Weight 500 covers 68 measured characters and weight 800 covers the 34 characters of the year numeral.

The scale is small and uniform. Interface text is 14px (nav) and 15px (entry buttons) at weight 500, uppercase, with a 1.5 line-height ratio (21px and 22.5px). The mobile pass shows the nav at 11.4px and the "click anywhere to start" line at 12px lowercase. The about page adds a 13px/20.8px uppercase paragraph (11px on mobile) and 10px labels. The only large size is the numeral at 160px. The Tailwind variable `--tracking-widest` is `.1em` and `--leading-tight` is 1.25; the extraction recorded no letter-spacing values on rendered text, so tracking is described only as declared. No substitute is needed on the web: PP Valve is delivered as woff2 by the site. For a fallback, use a neutral grotesque in uppercase at the same sizes.

## Layout

The page is one viewport tall: `scrollHeight` is 800 at a 1280px viewport. A thin header (38px high, full width) holds two links, "YEARS" and "ABOUT", and the footer is a full-width 38px strip with `padding: 0px 50px`. The numeral and the two buttons are centered on both axes. Measured spacing values are 10px (the gap between the two buttons), 15px, 20px, 50px and 104px. The Tailwind base spacing unit is `--spacing: 1rem`, and `--font-size` is declared as 10px.

The about page keeps the same header and places a narrow text column (the paragraph box measured 220px wide and 109px high) over ice-blue panels. Content density is very low; whitespace is the point.

## Elevation & Depth

There is none. `boxShadows` is empty in both the extraction and the CSS corpus apart from Tailwind's zeroed ring and shadow variables (`0 0 #0000`). Depth comes from the grain texture and from scale contrast between the 160px numeral and the 15px buttons. A 1px ice-blue outline is the only edge treatment. Do not add drop shadows or glows.

## Shapes

One radius is measured: 3px on the two entry buttons (`borderRadii` weight 2). The CSS corpus also contains a 12px radius value, which no measured element used. Everything else computes to 0px, so the header, footer and text blocks are square. Borders are 1px solid `#cce8eb` on the buttons and one 1px `#000000` border on the about page.

## Components

**Entry button.** Text 15px/22.5px weight 500 uppercase in `#cce8eb`, transparent fill, `1px solid #cce8eb`, 3px radius, measured 232px wide by 38px high on the sound-on button. Two sit side by side with a 10px gap. Labels are "ENTER WITH SOUND" and "ENTER WITHOUT SOUND". No hover state was recorded (`hover` is empty).

**Navigation.** A 38px full-width header with two links at 14px/21px weight 500 uppercase, `#000000` text. The links computed as 190px-wide boxes.

**Footer.** Lowercase 12px/18px line "click anywhere to start" in `#cce8eb`, with `0px 50px` padding.

**Year numeral.** 160px weight 800 in PP Valve, ice blue on navy (100px on the mobile pass).

## Design System Architecture

No public design system or brand guideline exists for this project; the site links only to the studio's own site (https://375.studio). The de-facto system is a Tailwind v4 build on Next.js: the page exposes `--text-blue`, `--bg-blue`, `--storm`, `--text-color`, `--font-valve`, `--spacing`, `--tracking-widest` and the default `--tw-*` variables on `:root`. Fonts are served from `/_next/static/media/` as PP Valve woff2 files. Colors are named by role or by mood (`storm`) rather than by a numeric scale.

## Do's and Don'ts

Do keep the page to navy ground, ice-blue type and one 1px outline. Do set interface text uppercase at 14-15px weight 500 and reserve weight 800 for the large numeral. Do keep radius at 3px on buttons and 0px elsewhere. Do keep copy to short imperative fragments.

Don't add shadows, gradients or filled buttons. Don't use `#ffffff` as the visible page color; it is the body default under the navy layer. Don't introduce a second typeface. Don't document or restyle the audio choice as a modal; it is two plain outlined buttons.

## Responsive Behavior

The extractor ran a 390px mobile pass. It measured the nav at 11.4px/14.82px with the header 390px wide and 25px high, one header link visible, no menu toggle visible, and a maximum of 2 card columns. The numeral drops from 160px to 100px, and the entry line is the 12px lowercase "click anywhere to start". About-page paragraph text measures 11px/14.3px in a 346px-wide box. Breakpoints and interior comic layout were not measured.

## Iteration Guide

1. Start from the tokens: `canvas` `#0d1429`, `ink` `#cce8eb`, one family `valve`.
2. Build the entry state first: centered numeral, two 38px outlined buttons with a 10px gap, 38px footer.
3. Add about-style panels with `#a5d8dd` backgrounds and `#0d1429` 13px uppercase copy.
4. Check that no element has a radius other than 3px or 0px and that nothing casts a shadow.
5. Re-measure interior pages before documenting them: only the splash and about pages were measured here.
