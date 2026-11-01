---
version: alpha
name: MIT (Massachusetts Institute of Technology)
category: "Education"
description: "MIT (mit.edu) home page measured: white and #f7f7f7 canvas, black #000000 ink, MIT Red #750014 top bar with bright red #ff1423 underlines and search button, Neue Haas Grotesk Text 15.96px body and Display 700 headings, 28px news headline, near-square corners."
colors:
  canvas: "#f7f7f7"
  page-largest: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  surface-3: "#620011"
  ink-3: "#00000099"
  hairline: "#ff1423"
  nav-bg: "#750014"
typography:
  display:
    fontFamily: neue-haas-grotesk-text, sans-serif
    fontSize: 28px
    fontWeight: 500
    lineHeight: 36.4px
    letterSpacing: "-0.42px"
  display-mobile:
    fontFamily: neue-haas-grotesk-text, sans-serif
    fontSize: 22px
    fontWeight: 500
    lineHeight: 28.6px
    letterSpacing: "-0.33px"
  heading:
    fontFamily: neue-haas-grotesk-display, sans-serif
    fontSize: 17.88px
    fontWeight: 700
    lineHeight: 19.668px
  subheading:
    fontFamily: neue-haas-grotesk-display, sans-serif
    fontSize: 21.84px
    fontWeight: 700
    lineHeight: 25.116px
  body:
    fontFamily: neue-haas-grotesk-text, sans-serif
    fontSize: 15.96px
    fontWeight: 400
    lineHeight: 24.738px
  nav:
    fontFamily: neue-haas-grotesk-text, sans-serif
    fontSize: 47.2226px
    fontWeight: 600
    lineHeight: 51.9449px
  link:
    fontFamily: neue-haas-grotesk-text, sans-serif
    fontSize: 14.5068px
    fontWeight: 400
    lineHeight: 18.8589px
  button-secondary:
    fontFamily: neue-haas-grotesk-text, sans-serif
    fontSize: 13.2226px
    fontWeight: 500
    lineHeight: 13.2226px
rounded:
  xs: 10px
spacing:
  s1: 1px
  s2: 4px
  s3: 5px
  s4: 6.8px
  s5: 9px
  s6: 12px
  s7: 15px
  s8: 20px
  s9: 25px
  s10: 35px
components:
  button-secondary:
    textColor: "{colors.page-largest}"
    typography: "{typography.button-secondary}"
    padding: 9px 15px
    height: 33px
    borderColor: "{colors.hairline}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.page-largest}"
    padding: 0px 104px 0px 259px
  nav-link:
    textColor: "{colors.page-largest}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.ink}"
    padding: 0px 30px 15px 20px
---

# MIT (Massachusetts Institute of Technology)

## Overview

This file documents the home page measured at `https://www.mit.edu/`, titled "MIT - Massachusetts Institute of Technology" (language `en`). The page is the university's editorial front door. A full-width dark red bar (`{colors.nav-bg}` #750014) carries the white MIT logo with the name "Massachusetts Institute of Technology", the main links (Education, Research, Innovation, Admissions + Aid, Campus Life, News, Alumni, About MIT, Lifelong Learning, Give) and a bright-red square search button. Beneath it, a left rail on a light grey column holds a search field ("What are you looking for?"), a "Top resources for" list (prospective students, current students, faculty & staff, alumni, parents & families, all resources), a bordered notice "MIT's response to government activity" and the address block "77 Massachusetts Avenue, Cambridge, MA, USA" with Visit, Map, Events, People, Jobs, Contact, Privacy, Accessibility and social links. The main column shows a large spotlight photo with a long headline, a date ("Oct 8, 2026"), "Full story", share icons and "Explore more spotlights", then a section "Research and Education that Matter" with a two-column grid of image cards (MIT for America, Treating tremors, Healthier aging, From MIT to the Marines, and more).

The tone is institutional, editorial and legible: black text on white and light grey, a restrained dark red as the single brand surface, bright red as the interactive signal (underlines, search button, notice outline), and photography that carries warmth. The footer details sit in the left rail rather than in a footer band.

## Colors

Measured on the page, with names from the MIT Brand Guide (`https://brand.mit.edu/color`, opened and read):

- `{colors.nav-bg}` #750014: the top bar. The brand guide lists "MIT Red" as HEX #750014 (RGB 117/0/20, PMS 202 C), a legacy color first adopted in 1876.
- `{colors.surface-3}` #620011: a darker red shade, measured as a background (area weight 122); it is not named in the brand guide page that was read.
- `{colors.hairline}` #ff1423: bright red, measured as the search button fill, underline and notice border. The guide's core palette includes a "bright red" alongside MIT red, silver gray, black and white; the guide text read here does not show this hex, so it is cited only as measured.
- `{colors.canvas}` #f7f7f7: the light grey page surround (3,311); `{colors.page-largest}` #ffffff: the main content surface (3,884).
- `{colors.ink}` #000000 (also `{colors.primary}`): text and links (2,205 characters).
- `{colors.ink-3}` #00000099: secondary text (25 characters).

The site's root variables expose the same system as RGB triplets: `--mit-brand-color--mit-logo` 0,0,0, `--mit-brand-color--top-bar` 255,255,255, `--mit-brand-color--top-bar--text` 0,0,0 and `--mit-brand-color--top-bar--underline` 255,20,35 (that is #ff1423). Those variables describe a white top-bar theme; the measured page rendered the dark red bar.

## Typography

Two families from Adobe Fonts: `neue-haas-grotesk-text` (weights 400, 500, 700; 2,394 characters) and `neue-haas-grotesk-display` (500, 700; 160 characters). The MIT Brand Guide (`https://brand.mit.edu/typography`, opened and read) names Neue Haas Grotesk as MIT's primary typeface, says it is a digital revival of the original Helvetica design (not today's Helvetica), recommends Display for digital sizes larger than 20px and Text for 20px and below, suggests headline leading between 85% and 100% of size and body leading between 100% and 125%, and says Arial can be used for internal documents such as Word and PowerPoint. These rules match what is measured: Display is used for the card titles (700) and Text for body and the 28px headline.

Tokens: `{typography.display}` Text 28px/36.4px weight 500, letter-spacing -0.42px (the spotlight headline); `{typography.display-mobile}` 22px/28.6px with -0.33px; `{typography.heading}` Display 17.88px/19.668px weight 700; `{typography.subheading}` Display 21.84px/25.116px weight 700; `{typography.body}` Text 15.96px/24.738px weight 400; `{typography.link}` 14.5068px/18.8589px; `{typography.button-secondary}` 13.2226px weight 500; `{typography.nav}` 47.2226px weight 600 (this role was measured on the logo lockup text, not on the menu links). Weights by characters: 400 (1,709), 500 (501), 700 (253), 600 (91).

## Layout

A fixed left rail (about a fifth of the 1280px width in the capture) on the light grey `{colors.canvas}` holds utility navigation; the main white column contains a wide hero spotlight, a centered section title with a short vertical rule, and a two-column grid of image-over-text cards. The top bar spans the full width with a nav padding of 0 104px 0 259px, which aligns the link row beside the logo. Paddings measured by frequency: 5px (12), 6.8px (10), 12px (9), 40px (8), 25px (3), 63px (2). The footer role is padded 0 30px 15px 20px. The spacing tokens are `{spacing.s1}` 1px, 4px, 5px, 6.8px, 9px, 12px, 15px, 20px, 25px and `{spacing.s10}` 35px.

## Elevation & Depth

Nearly flat. One shadow was measured: `0 10px 35px` at 10% black (1 element; which element was not identified). Everything else relies on white-on-grey contrast, thin underline accents and full-bleed photography.

## Shapes

Only one radius was measured: 10px on one element (`{rounded.xs}` 10px). In the capture the left-rail search box and notice have rounded corners, but the measurement does not say which element carries the 10px. The rest of the interface computes square corners: cards, images, the top bar and buttons have no radius.

## Components

- **Subscribe-style button** (`button-secondary`): 33px tall, `9px 15px` padding, white 13.2226px/500 text on the dark bar, 1px solid `{colors.hairline}` border, no radius.
- **Search button**: a 60px by 60px bright-red (`{colors.hairline}`, #ff1423) square with a white icon at the right end of the top bar (mobile measurement: 60px square, "Search", white on #ff1423).
- **Link** (`link`): black text with a red underline, 14.5068px/18.8589px; for example "prospective students" and "Christina Delimitrou".
- **Navigation** (`nav`, `nav-link`): `{colors.nav-bg}` bar with white text.
- **Card**: image over a 21.84px bold title and 15.96px description; square corners; no fill measured.
- **Footer** (`footer`): black text in the left rail, padding `0 30px 15px 20px`.

## Design System Architecture

MIT publishes a public brand guide at `https://brand.mit.edu/` with sections for brand architecture, logos and marks, color, typography, applying the brand, templates, downloads and FAQ. Pages read for this file: the home page, Color and Typography. The web implementation uses a set of `--mit-brand-color--*` CSS variables (RGB triplets for logo, top bar, text, underline, search button and its icon) on the root element, plus Adobe Fonts-hosted Neue Haas Grotesk. The measured page does not expose a public token package or component library; the brand guide is the governing document.

## Do's and Don'ts

- Do use MIT Red `{colors.nav-bg}` for the top bar and keep the rest of the page white or light grey.
- Do use bright red `{colors.hairline}` for underlines and the search action.
- Do set headlines in Neue Haas Grotesk Text 500 with slightly negative letter-spacing and leading near 130% for the 28px size, and card titles in Display 700.
- Do follow the guide's Display (above 20px) and Text (20px and below) split.
- Don't round card corners; only one element measured a 10px radius.
- Don't use Helvetica as a stand-in for Neue Haas Grotesk where the guide asks for NHG; for internal documents the guide allows Arial.
- Don't add heavy shadows; the only measured shadow is `0 10px 35px` at 10% black.
- Don't use more reds than MIT red, bright red and the darker shade `{colors.surface-3}`.

## Responsive Behavior

At 390px wide the spotlight headline is 22px/28.6px weight 500 in a 360px-wide, 200px-tall block; the section title is 15.21px/16.731px weight 700; body text is 15.07px/23.3585px; the top bar is 390px wide and 60px tall with `0 20px` padding and the logo text at 47.2226px/600; the search button is a 60px square. Character-weighted sizes: 15.07px (1,309), 13.2226px (297), 22px (226), 15.1113px (207), 18.28px (126). Rail and grid reflow at mobile were not measured.

## Iteration Guide

1. Start from `{colors.page-largest}` content on `{colors.canvas}`, text in `{colors.ink}`.
2. Use `{colors.nav-bg}` for the primary bar and `{colors.hairline}` for the interactive accent.
3. Pair `{typography.display}` headlines with `{typography.body}` text and bold Display cards.
4. Keep corners square except for small framed notices and search fields.
5. Check any change against `https://brand.mit.edu/color` and `https://brand.mit.edu/typography`, and re-measure with `node web/scripts/extract-tokens.mjs --slug=mit --url=https://www.mit.edu --force --no-motion`.
