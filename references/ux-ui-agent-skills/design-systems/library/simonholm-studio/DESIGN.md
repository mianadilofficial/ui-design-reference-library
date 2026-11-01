---
version: alpha
name: Simon Holm Larsen - Brand Designer (simonholm.studio)
category: "Portfolio"
description: "Portfolio of brand designer Simon Holm Larsen: near-black #1a1a1a canvas, white #ffffff type, #a3a3a3 gray labels, a PP Neue Montreal style grotesk (Ppneuemontrealtt) at 128.592px for project titles with -4.167px tracking and 10.716px micro-labels, full-bleed project imagery."
colors:
  canvas: "#1a1a1a"
  ink: "#ffffff"
  primary: "#ffffff"
  surface-dark: "#212121"
  ink-gray: "#a3a3a3"
  hairline: "#ffffff4d"
  offwhite: "#f8f3ed"
  gray-mid: "#7a7771"
  gray-dark: "#272727"
typography:
  display:
    fontFamily: Ppneuemontrealtt, sans-serif
    fontSize: 128.592px
    fontWeight: 400
    lineHeight: 192.888px
    letterSpacing: "-4.16733px"
  display-mobile:
    fontFamily: Ppneuemontrealtt, sans-serif
    fontSize: 45.055px
    fontWeight: 400
    lineHeight: 67.5825px
    letterSpacing: "-0.300367px"
  subheading:
    fontFamily: Ppneuemontrealtt, sans-serif
    fontSize: 10.716px
    fontWeight: 500
    lineHeight: 15.0024px
    letterSpacing: 0.297667px
rounded:
  xs: 1px
  pill: 9999px
spacing:
  s1: 1.79px
  s2: 2.98px
  s3: 5.95px
  s4: 7.14px
  s5: 8.33px
  s6: 15.24px
  s7: 23.81px
  s8: 25.6px
  s9: 53.58px
components:
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.display}"
---

## Overview

simonholm.studio (page title "Simon Holm Larsen - Brand Designer") is the portfolio of a brand designer, with a contact line "hello@simonholm.studio" and a phone number beginning +(45) shown in the header, and a live clock reading "(CET)". The measured home page is a single 1280px by 800px stage with no scroll. Behind the interface a full-bleed photograph of the current featured project fills the screen; in the capture it is the "Birdie" brand, rows of kraft shipping boxes with the white birdie logo on a saturated yellow floor. The project title "Birdie" is set huge in white at the bottom left, with a small "(01)" index above it.

The interface is arranged on the edges of the screen in tiny type: top left an "S/H" monogram, then "Featured (05)" and "Index (05)" labels, a centre column with "About" and the email and phone, "Brand Designer" and the local time at top right, "[-] Prev" at the left edge and "Next [-]" at the right edge, "(c)2026" at bottom left and "LinkedIn" and "Instagram" at bottom right. A thin horizontal hairline crosses the screen above the title and a small round icon sits at the right edge of it. The voice is stripped back and functional: bracketed arrows, parenthesized counts, short nouns.

The photography is the content. The featured project fills the whole viewport at its native crop, and the page carries Prev and Next controls: the labels read "Featured (05)" and "Index (05)", and Prev and Next controls sit at the edges. The title of the current project is the only large text, and it sits low and left, partly overlapping the product imagery, which creates a poster-like composition on every slide. In the capture the interface type is white over the yellow and kraft Birdie image with no outline or backing panel.

The art direction favors saturated, flat-lit product and packaging photography and a restrained, Swiss-influenced typographic system: a single grotesk, tight tracking on the display size, generous empty space around small labels and strict alignment to the screen edges. The microcopy never explains itself; counters, arrows and parentheses stand in for buttons and headings, and the contact details are always visible in the header rather than hidden behind a button.

Counters and labels use parentheses and square brackets consistently: (05), (01), [-] Prev, Next [-], and the copyright reads (c)2026. The header lines are aligned in four columns across the 1,280px width, and the footer line holds LinkedIn and Instagram at the right edge. Every one of these items is set at the same 10.716px size, which keeps the edges quiet.

## Colors

The canvas is #1a1a1a (3,072 background area; --black is #1a1a1a). A second surface #212121 (2,048) is the other measured fill. Text is #ffffff (331 characters) and a secondary gray #a3a3a3 (39 characters; --grey). The hairlines are #ffffff4d (2 border uses) and #ffffff (1). The root variables publish the neutral set: --black #1a1a1a, --darkgrey #272727, --mid-grey #7a7771, --grey #a3a3a3, --offwhite #f8f3ed and --color white. --swiper-theme-color #007aff is the slider library's default and is not a brand color.

There is no accent color in the UI: all chroma comes from the featured project imagery (in the capture, yellow and kraft brown). The primary token is white because white is the color of every link and label.

## Typography

One UI family, Ppneuemontrealtt (370 characters; weights 400 and 500), with PT Serif loaded in roman and italic at 400 and 700 (not measured in the home page text). The project title is 128.592px / 192.888px weight 400 with -4.16733px tracking (display token; mobile 45.055px / 67.5825px at -0.300367px). Labels and body are 10.716px weight 500 with 12.8592px line-height and +0.297667px tracking; the subheading line height is 15.0024px. The smallest labels are 9.52533px with 0.7144px and 0.833467px tracking. 12px (45 characters) also appears.

The root variables define a rem scale: --body-copy 1rem with --body-copy-line 1.4rem, --small-nav-text 1.05rem, --small-number .8rem, --big-number 6.4rem, --small-high-text 1.8rem, --mid-high-text 3.2rem, --mobile-bix-text 2.6rem, plus line-height and spacing variables. The pairing is a gigantic light-weight title against tiny medium-weight labels, with nothing in between.

## Layout

The layout is a full-viewport stage (scrollHeight 800). Items are placed on the edges with page margins defined as --page-margin .7rem and --page-top-margin .7rem; section variables --section-break 160px, --mid-section-break 100px, --content-page-top-margin 12rem and --top-header-margin-bottom 2.6rem govern the inner pages. Measured paddings are 2.97667px (16 uses), 8.33467px (8), 5.95333px, 7.144px and a 53.58px left padding on the title; gaps are 1.786px, 25.6px, 15.2405px and 23.8133px (2 each). The title spans the full 1,280px width and is 155px tall.

## Elevation & Depth

No box shadows were measured. The screen has two layers: the photographic background and the white interface type over it, with a thin #ffffff4d hairline dividing the title area. A slightly lighter #212121 surface appears in the second measured fill. There are no cards or overlays with elevation.

## Shapes

Radii measured: 3840px (2 elements, effectively full pills), 1px (1), 50% (1) and 100% (1). The round icon at the right edge of the hairline is a circle; the other radii belong to small controls. Imagery is full-bleed rectangles.

## Components

Project title link: white Ppneuemontrealtt 128.592px / 192.888px weight 400 with -4.16733px tracking, spanning the full 1,280px by 800px stage on a #1a1a1a background (the whole stage is the link to the project). Label text: 10.716px weight 500 white, with gray #a3a3a3 for secondary labels. Prev and Next controls: text labels with bracketed dash glyphs at the left and right edges. Index and Featured counters in parentheses. Round icon: a white circle with a menu glyph. The extraction found no buttons, inputs, cards or hover states.

## Design System Architecture

No public design system or brand guideline was found: the home page was the only page opened (through the extractor) and links none. The site is a Webflow-style build whose root variables (65 measured) form a de-facto system: named neutrals (--black, --darkgrey, --mid-grey, --grey, --offwhite), a text scale in rem with named roles (body-copy, small-nav-text, small-number, big-number, small-high-text, mid-high-text, mobile-bix-text), spacing roles (--page-margin, --section-break, --mid-section-break, --case-section-top-margin) and easing variables. Roles are named by size and by use rather than by color.

## Do's and Don'ts

Do keep the interface black (#1a1a1a) and white with #a3a3a3 for secondary labels, and let the featured work supply all color. Do set project titles at the display size with strongly negative tracking and everything else at 10.716px. Do place navigation on the screen edges with bracketed and parenthesized microcopy.

Don't add accent colors, shadows or cards to the home stage. Don't use #007aff (the slider default). Don't set small labels in the serif; PT Serif is loaded but was not measured on the home page. Don't use weights other than 400 and 500 for UI text.

## Responsive Behavior

A mobile pass recorded: h1 45.055px / 67.5825px (desktop 128.592px / 192.888px), body 13.5165px / 16.2198px (desktop 10.716px / 12.8592px). Mobile character usage is led by 13.5165px (179), 12.66px (45), 12.0147px (21) and 45.055px (6). Mobile layout, menu behavior and breakpoints were not measured.

## Iteration Guide

Rebuild the stage first: full-bleed project image on #1a1a1a, the 128.592px title bottom left with its "(01)" index, the edge labels (monogram, Featured and Index counters, About and contact, Brand Designer and clock, Prev and Next, copyright, social links) and the hairline with the round icon. Use #ffffff text, #a3a3a3 secondary, the Ppneuemontrealtt family and the rem scale from the variables. Inner pages (Index, About, case studies) were not measured; measure them before documenting.
