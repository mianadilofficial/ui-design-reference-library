---
version: alpha
name: Elliott Mangham
category: "Portfolio"
description: "Single-screen dark portfolio of freelance WordPress developer Elliott Mangham: #121212 canvas, white text at 100, 80 and 40 percent, Neue Montreal 30px/36px weight 500 with Roobert Mono 11px detail, 30px-radius capsule toggle and 6px-radius thumbnails."
colors:
  canvas: "#121212"
  ink: "#ffffff"
  primary: "#ffffff"
  on-primary: "#ffffff"
  ink-secondary: "#ffffffcc"
  ink-tertiary: "#ffffff66"
  hairline: "#ffffff1a"
  button-primary-bg: "#121212b3"
typography:
  display:
    fontFamily: "\"Neue Montreal\", -apple-system, \"system-ui\", \"avenir next\", avenir, \"segoe ui\", \"helvetica neue\", helvetica, Cantarell, Ubuntu, roboto, noto, arial, sans-serif"
    fontSize: 30px
    fontWeight: 500
    lineHeight: 36px
  display-mobile:
    fontFamily: "\"Neue Montreal\", -apple-system, \"system-ui\", \"avenir next\", avenir, \"segoe ui\", \"helvetica neue\", helvetica, Cantarell, Ubuntu, roboto, noto, arial, sans-serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 28.8px
  button:
    fontFamily: "\"Neue Montreal\", -apple-system, \"system-ui\", \"avenir next\", avenir, \"segoe ui\", \"helvetica neue\", helvetica, Cantarell, Ubuntu, roboto, noto, arial, sans-serif"
    fontSize: 11px
    fontWeight: 400
    lineHeight: 11px
    textTransform: capitalize
  link:
    fontFamily: "\"Roobert Mono\", Menlo, Consolas, Monaco, \"Liberation Mono\", \"Lucida Console\", monospace"
    fontSize: 11px
    fontWeight: 400
    lineHeight: 13.2px
    letterSpacing: "-0.22px"
rounded:
  xs: 6px
  sm: 30px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 7px
  s6: 10px
  s7: 12px
  s8: 20px
  s9: 40px
  s10: 80px
components:
  button-primary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 2px
    height: 31px
    borderColor: "{colors.hairline}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  card:
    backgroundColor: "{colors.hairline}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
---

## Overview

elliott.mangham.dev is the one-page portfolio of Elliott Mangham, titled "Elliott Mangham - Creative Web Developer | Award-Winning Web Developer". The whole page is a single dark screen (measured page height 800px at a 1280px viewport). It reads like a spec sheet rather than a marketing page: a top band of small monospace columns lists who he is, what he charges, awards, past clients and contact links; below it a large two-paragraph statement in a grotesque sans introduces him as "An award-winning WordPress developer and delivery partner"; at the bottom a horizontal strip of project thumbnails is switched by a small "Projects / Awards" toggle.

The voice is first person, factual and dry-humoured. It states rates ("Avg. project costs"), availability ("Available September 2026"), awards ("23x Site Of The Day", "Webby Award Winner (People's Choice)"), client names and a booking action ("Book 30-Min Discovery Call"). The art direction is almost colorless: near-black ground, white text, and the color arrives only through the colorful screenshots of the portfolio work.

## Content Model

The capture shows how the information is organized, and the design follows it. The first column is identity (name, "Creative Web Developer", "1995", location, "Built for Global Collabs") plus a "Client Portfolio" block of three headline figures: "$1B+ Client Revenue Portfolio", "$120M+ Client Funding Raised" and "$326B+ Client Combined Market Cap." The second column is commercial terms: "Code Resolution®", "Freelance WordPress Developer", the "Avg. project costs" ranges for development and for design plus development, and a "Previous" list naming Show + Tell Agency, Creode Agency and In-House Brands. The third column is recognition: the Awwwards, CSSDA, FWA and GSAP counts and a "Highlights" list. The fourth is a client roll that includes Disney, Universal Music Group, Warner Music Group, Peugeot, Vivienne Westwood, Live Nation, The Spectator, Sipsmith Gin, Halfords, Daily Mail, Anytime Fitness, Goodfella's Pizza and Harry Ramsden's. The fifth holds the contact links and the call booking action. Because every column is the same 11px mono style, nothing competes with the statement below it.

## Colors

The measured palette is three whites on one black. The canvas and `--base-background-color` is #121212. Text is white (#ffffff) at full strength for the headline and primary copy, #ffffffcc (80 percent white) for secondary text and #ffffff66 (40 percent white) for the quietest labels such as the small column headings. Surfaces and borders are also white at low opacity: #ffffff1a (10 percent) for the thumbnail card fill and the toggle border, and #ffffff33 for a slightly stronger tint. The pill toggle's own fill is #121212b3, the canvas at about 70 percent opacity.

The page's root variables also declare `--accent-color: #5e2bff` (a violet), but no element measured on screen uses it, so it is not part of the visible palette and is not tokenized here. There is no chromatic brand color in the rendered view; "primary" resolves to white.

## Typography

Two families are loaded: Neue Montreal (400) as the primary family and Roobert Mono (400) as the secondary, declared as `--family-primary` and `--family-secondary`. The Neue Montreal stack falls back through -apple-system, system-ui, avenir next, avenir, segoe ui, helvetica neue, helvetica, Cantarell, Ubuntu, roboto, noto, arial and sans-serif. The Roobert Mono stack falls back through Menlo, Consolas, Monaco, Liberation Mono, Lucida Console and monospace.

The measured display style is 30px/36px at weight 500, normal tracking. The intro text and the headline are the same style, so the page has effectively one prose size. The monospace info grid and the toggle are 11px; the link style measured is Roobert Mono 11px, weight 400, line-height 13.2px, letter-spacing -0.22px. Button labels are Neue Montreal 11px, weight 400, capitalized. Base size is 16px with a 1.2em base line-height. Weights 400, 500 and 700 appear by character count. Neue Montreal and Roobert Mono are commercial faces; a neutral grotesque and a plain monospace are the substitution roles.

## Layout

The top band is a five-column grid of small mono text blocks; each column holds a heading in the 40 percent white and several lines below in white. The first column carries a small portrait photo, name, role, location and the live time in England. Below it the 30px statement runs full width at left, with ragged right text across roughly the whole viewport. The project strip is a single horizontal row of fixed-aspect thumbnails that run off the right edge, which signals sideways scrolling. Frequent gaps measured: 12px, 40px, 7px and 20px; the `--padding` variable is 12px. Spacing tokens include 1px, 2px, 4px, 5px, 7px, 10px, 12px, 20px, 40px and 80px.

## Elevation & Depth

No box shadows were measured. Depth is expressed with translucency: the toggle uses a 70 percent black fill with a 1px 10 percent white border, and the cards use a 10 percent white fill. There are no layered panels or blurred glass beyond that, as far as the measurement shows. Everything else sits flat on #121212.

## Shapes

Measured radii: 6px (thumbnail cards), 30px (the Projects/Awards toggle and buttons) and 550px and 800px (pill-like outer shapes). The toggle is a fully rounded capsule 31px tall; the thumbnails are slightly rounded rectangles. The bracketed "Schedule Call" button in the capture is drawn with corner marks rather than a filled shape.

## Components

Toggle button: fill #121212b3, 1px solid #ffffff1a, 30px radius, 2px padding, 31px height, 11px capitalized label in white. The measured label text reads "Projects ①" and "Awards ②", with circled numerals as inline markers. Cards: #ffffff1a fill, 6px radius, each holding a screenshot of a past project site. Info links are Roobert Mono 11px, white, tight tracking, set as plain lines without underline in the capture. Contact items (LinkedIn, Email, GitHub, WhatsApp) are plain text links in the right column.

## Design System Architecture

There is no public design system. The de-facto system is a handful of root custom properties: `--base-background-color` (#121212), `--base-color` (#fff), `--base-font-size` (16px), `--base-line-height` (1.2em), `--family-primary`, `--family-secondary`, `--accent-color` (#5e2bff) and `--padding` (12px). Eight variables in total were found. Styling is otherwise authored per component. No official brand or token documentation was found or opened for this entry.

## Do's and Don'ts

Do keep the canvas at #121212 and express hierarchy through white opacity steps (100, 80, 40 percent) rather than new colors. Do use the monospace for data-like detail and the grotesque for statements. Do use small capsule toggles for state switching. Do let imagery supply the color.

Don't add saturated fills or gradients. Don't introduce large display sizes; the prose style is 30px and the rest is 11px. Don't use heavy shadows. Don't treat the declared violet as part of the visible brand until it appears on screen.

## Responsive Behavior

Measured at 390px mobile: the statement drops to 24px/28.8px at weight 500; the body text role measures 22px/26.4px; the toggle label stays 11px; the nav role is 12px/14.4px. How the five-column info band reflows was not measured, and hover, focus and dark/light switching were not measured.

## Iteration Guide

To add a section, set text in Neue Montreal 30/36 weight 500 for statements and Roobert Mono 11px for facts, white on #121212. Use 40 percent white for labels, 80 percent for supporting lines. Build controls as 31px-high capsules with a 30px radius and a 1px #ffffff1a border over a #121212b3 fill. Use 6px radius for image cards. If a brand accent is wanted, the only declared candidate is #5e2bff, and it should be measured in use before it is adopted.
