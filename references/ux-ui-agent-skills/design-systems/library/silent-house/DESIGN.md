---
version: alpha
name: Silent House
category: "Portfolio"
description: "Silent House (silent-house.com), a live-experience studio group site: white #ffffff canvas, black #000000 ink, #999999 gray secondary text, aktiv_grotesk at weights 400/450/500 with strong negative tracking (54px headline at -2.16px, 160px section titles at -6.4px) and small 4.5px radii."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  fill-red: "#ff0000"
  gray-light: "#eaeaea"
  ink-gray: "#999999"
  ink-60: "#00000099"
  gray-2: "#c5c5c5"
  overlay: "#191919"
typography:
  display:
    fontFamily: aktiv_grotesk, sans-serif
    fontSize: 54px
    fontWeight: 450
    lineHeight: 56.7px
    letterSpacing: "-2.16px"
  display-mobile:
    fontFamily: aktiv_grotesk, sans-serif
    fontSize: 32px
    fontWeight: 450
    lineHeight: 33.6px
    letterSpacing: "-1.28px"
  heading:
    fontFamily: aktiv_grotesk, sans-serif
    fontSize: 160px
    fontWeight: 450
    lineHeight: 160px
    letterSpacing: "-6.4px"
  body:
    fontFamily: aktiv_grotesk, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 22.5px
    letterSpacing: "-0.45px"
rounded:
  xs: 2.88px
  sm: 4.5px
spacing:
  s1: 4.5px
  s2: 9px
  s3: 13.5px
  s4: 18px
  s5: 36px
  s6: 45px
  s7: 63px
  s8: 72px
  s9: 81px
  s10: 126px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.ink}"
    padding: 18px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  footer:
    textColor: "{colors.ink-gray}"
    clipPath: polygon(0px 800px, 100% 800px, 100% 100%, 0px 100%)
---

## Overview

Silent House (silent-house.com, page title "Homepage | Silent House") presents "Three unique companies under one roof, creating experiences you'll never forget." The measured home page is 1280px wide and 9,586px tall. A 59px header with a black logotype at left carries text navigation (Work, Studios, Productions, Touring, About, Play Reel) in the middle, a "Let's talk" link and a four-dot menu icon at the right. The hero is the 54px headline in the right half of the grid with a "Browse all work" link and a large rounded-corner reel video frame with a "Play Reel" label. Below are numbered sections (1 Studios, 2 Productions and so on): a number and name at left, a one-sentence description with an inline "Learn More" link at right, and a project card with a thumbnail, project title ("Usher - Super Bowl Halftime Show", "Netflix Tudum 2025") and category labels.

The page ends with an oversized "Press" section title at 160px and a footer 1,840px tall whose lead line "Have a project in mind?" is set at 38px in gray #999999. The voice is confident and short: "We collaborate with artists and brands to redefine the visual experience." and "We stage some of the most viral ..." (body paragraph). Imagery is high-energy concert and broadcast photography, saturated reds, blues and blacks, which stands out against the white and black UI.

Section rows follow one repeated pattern that is visible in the capture: a gray number (1, 2) and a black section name in the left half, a two- to four-line statement in the right half ending in a gray "Learn More" link, then a project thumbnail with its title on the left and its categories ("Studios", "Productions, Studios") on the right of a single caption line. The hero reel frame spans almost the whole page width, which makes the reel the largest single image above the fold, and the headline is deliberately offset into the right half so that the left half stays empty white.

## Colors

The page is white and black with grays. Background areas: #ffffff (8,258), #ff0000 (4,096), #eaeaea (4) and #999999 (2). The #ff0000 fill is the second-largest measured background area; the visible top of the capture does not show where it is applied (the capture shows only the first 1,800px), and it is kept as a measured token without a stated role. Text colors by character count: #000000 (964), #999999 (832, secondary copy and the footer lead), #ffffff (224, over video and photos) and #00000099 (39, 60% black used for the inactive navigation links).

The site's own variables name the grays: --color-gray #999, --color-gray-light #eaeaea, --color-gray2 #c5c5c5, --color-overlay #191919, --color-black #000 and --color-white #fff. #eaeaea is also the only measured border color (2 uses). The --swiper-theme-color #007aff is the carousel library's default and is not a brand color. Hover on the navigation raises the text from 60% black to about 86% to 97% black (oklab alpha 0.858388, 0.860159 and 0.968416 on Studios, Productions and Touring).

## Typography

One family: aktiv_grotesk (2,059 characters) at weights 400 to 500; the loaded range is "400 500". Measured weights are 450 (1,007 characters), 500 (999) and 400 (53). The tracking is consistently negative: 18px at -0.45px (-0.025em), 20px at -0.8px, 38px at -1.52px, 54px at -2.16px and 160px at -6.4px (-0.04em for headings). The display token is 54px / 56.7px weight 450 (mobile 32px / 33.6px with -1.28px); the heading token is the 160px / 160px section title; the body token is 18px / 22.5px weight 500.

The root variables list the type scale in pixels: --font-size-h0 160, h1 100, h2 54, h3 38, h4 26, h5 20, body 18, with --text-*--letter-spacing -.04em for headings and -.025em for body. Sizes by characters on the page: 18px (1,052), 38px (912), 54px (77), 20px (13), 160px (5). The 38px size (the footer lead and section descriptions) is the second-most used, which gives the page its large-statement body rhythm.

## Layout

Desktop width is 1280px with an 18px page margin (header padding 18px, the 160px title padded 0 18px). The grid is two halves: labels and numbers in the left half, headlines and content in the right. Gaps are 9px (52 uses), 18px (34), 13.5px, 4.5px and 36px (2 each). Paddings are multiples of 4.5px: 18px (22), 4.5px (12), 9px (3), 63px (2), 45px (2), 81px, 36px, 126px and 72px (one each), which shows a 4.5px base unit (18 = 4 x 4.5). Sections are separated by a thin #eaeaea rule and generous vertical padding.

## Elevation & Depth

No box shadows were measured. The footer uses a clip-path polygon (0px 800px, 100% 800px, 100% 100%, 0px 100%) on the footer element; it is a clipping setting rather than an elevation token. The only other depth cues are the full-bleed reel video and thin #eaeaea dividers.

## Shapes

Radii are small: 4.5px (17 elements) and 2.88px (2). The 4.5px radius is applied to the reel and project media frames; 2.88px applies to two small elements. There are no pills or circles measured. Content boxes otherwise have square edges.

## Components

Navigation: a 59px header with 18px padding, links at aktiv_grotesk 18px weight 500 / 22.5px in #000000 (60% black when inactive per the measured hover pairs), and a four-dot menu icon. Link: "Browse all work" and "Learn More" in 18px weight 500 with a small bent arrow glyph beside it; "Learn More" is gray. Project card: a 4.5px-radius thumbnail with a title line at left and its categories at right in small type. Reel frame: a large video with a white "Play Reel" label and play triangle. Footer: gray #999999 38px lead text and a clipped reveal. No filled buttons, inputs or cards with backgrounds were detected.

## Design System Architecture

No public design system or brand guideline was found: the home page was the only page opened (through the extractor) and links none. The de-facto system is a Tailwind v4 build with a custom theme (84 root variables): named colors (--color-gray, --color-gray-light, --color-gray2, --color-overlay), a type scale as numbers (--font-size-h0 to h5 and body) with em-based letter-spacing, --font-sans "aktiv_grotesk" and easing curves such as --ease-in cubic-bezier(.32,0,.67,0). Tailwind's default oklch palette variables (--color-purple-500, --color-red-200) are also present as framework defaults and are not brand colors.

## Do's and Don'ts

Do use black on white with #999999 for secondary text and #eaeaea hairlines. Do set everything in aktiv_grotesk with tight negative tracking, using weights 450 and 500. Do use giant (160px) section titles and 54px statements. Do keep radii to 4.5px on media.

Don't add accent hues to UI chrome: color comes from the project imagery. Don't open up letter-spacing; every measured size is negative. Don't use #007aff or Tailwind default palette colors. Don't add shadows; none were measured. Don't document the red #ff0000 fill as a brand accent until its role is confirmed from a page that shows it.

## Responsive Behavior

A mobile pass recorded: h1 32px / 33.6px, body and navigation 16px / 20px, versus desktop 54px / 56.7px and 18px / 22.5px. Mobile character usage is led by 22px (762), 16px (752), 32px (215) and 14px (215), with 20px (13) and 65px (5). Mobile layout, column counts, menu behavior and breakpoints were not measured.

## Iteration Guide

Rebuild the header first (logotype, six links, Let's talk, dot menu), then the hero headline and the reel frame, the numbered sections with project cards, the oversized Press title, and the clipped footer. Use canvas #ffffff, ink #000000, gray #999999, hairline #eaeaea, aktiv_grotesk at 450 and 500, tracking -0.04em on headings and radius 4.5px. For anything below the first 1,800px or any behavior not in web/data/extracted/silent-house.json, measure first; it is not measured here.
