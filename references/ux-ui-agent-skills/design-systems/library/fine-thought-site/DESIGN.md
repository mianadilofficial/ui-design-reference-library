---
version: alpha
name: Fine Thought
category: "Portfolio"
description: "Fine Thought portfolio: a code-editor interface on a charcoal #282828 canvas, with a fine-thought.js tab, a monospaced line-number gutter in code-saver, ASCII-art grid lines in grey #898989, and giant neue-haas-grotesk-display 600 headlines in #bababa (281.4px)."
colors:
  canvas: "#282828"
  page-body: "#ffffff"
  ink: "#bababa"
  primary: "#aec6f6"
  surface-tabbar: "#3c3c3c"
  ink-secondary: "#898989"
  ink-light: "#eaeaea"
  ink-black: "#000000"
typography:
  display:
    fontFamily: neue-haas-grotesk-display, serif
    fontSize: 54.6px
    fontWeight: 600
    lineHeight: 54.6px
    letterSpacing: "-1.7745px"
  display-mobile:
    fontFamily: neue-haas-grotesk-display, serif
    fontSize: 23.8px
    fontWeight: 600
    lineHeight: 23.8px
    letterSpacing: "-0.7735px"
  heading:
    fontFamily: neue-haas-grotesk-display, serif
    fontSize: 281.4px
    fontWeight: 600
    lineHeight: 281.4px
    letterSpacing: "-9.1455px"
  body:
    fontFamily: code-saver, sans-serif
    fontSize: 10px
    fontWeight: 400
    lineHeight: 15px
rounded:
  sm: 4px
  md: 8px
spacing:
  s1: 10px
  s2: 20px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
  nav:
    backgroundColor: "{colors.surface-tabbar}"
    textColor: "{colors.primary}"
---

## Overview
Fine Thought (finethought.com.au, page title "//--- Fine Thought ---//", language en-AU) is a developer portfolio that presents itself as an open source file in a code editor. The capture shows a thin tab bar with a single tab named fine-thought.js at the top left and two small icon controls at the right (a sun-shaped icon and a panel icon), a left gutter with line numbers running down the page, and a field of ASCII-art lines made from slashes, equals signs, plus signs and asterisks that draw a grid of rectangles. Over this grid sit two typographic statements: a small "Web engineer & creative coder" in the top left and, in enormous type on the right, the two words "Fine" and "Thought" stacked, running off the right edge of the viewport. Nothing else is in the capture: no navigation list, no photography, no buttons. The identity is the joke of the editor, the code font and the scale contrast between a 10px gutter and a 281.4px name.

## Colors
The palette is dark and nearly monochrome. The canvas is charcoal #282828; the tab bar is a slightly lighter #3c3c3c. The most-read text color is a mid grey, #898989, because the gutter numbers and the ASCII art make up almost all of the characters on the page (about 130,900 of them). Headlines and the contact link use a light grey, #bababa. The one chromatic color measured on the page is a pale blue, #aec6f6, used for the tab label text and as the primary accent. A near-white #eaeaea and black #000000 appear in a handful of characters. The CSS corpus also contains #2756c9, #d6e2fb, #f6f6f6 and #222222 among other values; these are not visible in the capture and their use was not measured.

## Typography
Two typefaces create the contrast. The monospaced code-saver (weights 400 and 500) sets the entire editor layer: 12px for the tab label and the ASCII art (130,386 characters at that size) and 10px with a 15px line height for the line-number gutter. The headline face is neue-haas-grotesk-display at weight 600, with tightly negative tracking: the 54.6px display style (54.6px line height) has a -1.7745px letter spacing, the 281.4px heading (281.4px line height) has -9.1455px, and the 23.8px mobile display style has -0.7735px. The display and heading styles declare a serif fallback in the measured stack, and `freight-big-pro` is also named in the stylesheet. Headline lines are set with line height equal to font size, so stacked words sit tight. The body style in the token set is the 10px code-saver gutter text because that is the measured paragraph-level element on the page; no running prose was present in the capture. Weights measured by character count are 400 (about 130,900 characters), 600 (338) and 500 (15).

Font substitutes: both families are loaded through the site's font services. If they cannot be used, a neutral grotesque at weight 600 with similar negative tracking, and any monospaced face for the editor layer, preserve the contrast between the two layers.

## Layout
The page measured 1280px wide and 2400px tall, with an inner scroll area of 3270px. The structure copies an editor window: a tab strip across the top (27px high on desktop), a narrow line-number gutter at the left (17px wide in the measurement), and the file body beside it. The gutter measured 3600px tall on desktop, matching 240 lines at 15px each. Headline text is placed on the grid so that it overlaps the ASCII lines: the small headline starts near the left, and the giant name begins past the horizontal centre and extends beyond the right edge. Padding values measured are 20px and 10px. The rest of the page below the content is empty dark canvas with only line numbers continuing. On a 390px viewport the measured tab bar width is 390px and the headline block width is 336px.

## Elevation & Depth
There is no depth in the capture; everything is flat on #282828. The CSS corpus lists shadows `0 0 1rem rgba(0,0,0,.5)` and `0 0 1rem rgba(0,0,0,.25)`, which were not seen on the measured elements. Hierarchy is made by size and by the difference between #bababa headlines and #898989 supporting characters, not by layers.

## Shapes
No rounded elements were measured on the page: the border radius list for the visible elements is empty, and the tab bar and tab are square-cornered rectangles. The stylesheet contains small radii (3px, 4px, 5px and 8px), recorded in the token set as 4px and 8px, that are not on the visible elements. The ASCII art draws rectangles, solid dividers and hatched areas out of characters; this is the page's decorative shape language.

## Components
- **Tab bar:** a #3c3c3c strip with the label fine-thought.js in #aec6f6, code-saver 12px at weight 500, 27px high on desktop and 36px on a 390px viewport, spanning the full width.
- **Icon controls:** a sun-shaped icon and a panel icon at the far right of the tab bar; their behaviour was not measured.
- **Line-number gutter:** code-saver 10px, 15px line height, #898989.
- **ASCII grid:** 12px code-saver characters in #898989 forming boxes and rules.
- **Headline:** "Web engineer & creative coder" at 54.6px weight 600 in #bababa (23.8px on mobile).
- **Name:** "Fine Thought" at 281.4px weight 600 in #bababa.
- **Link:** "Contact me" set in the display style (54.6px, weight 600, #bababa); there is no separate button style.

## Design System Architecture
No public or official design system exists for this site in the pages opened; none was found linked from the portfolio. The de-facto system is minimal: two font families, a five-color grey scale plus one blue accent, and a metaphor (the file in an editor) that decides layout. No CSS custom properties were recorded on the root element. Measured source: https://finethought.com.au/ (extraction of 2026-10-09).

## Do's and Don'ts
- Do keep the canvas charcoal (#282828) and the supporting text at #898989.
- Do set the big statements in neue-haas-grotesk-display 600 with negative tracking.
- Do keep the editor layer small and monospaced; the scale jump from 10px to 281.4px is the design.
- Do use #aec6f6 sparingly, only for the active-tab style accent.
- Don't add photography, cards or shadows; none were measured.
- Don't round corners; no radius was measured on visible elements.
- Don't invent buttons: the contact link is a large text link.
- Don't use the unmeasured light colors in the CSS as page surfaces.

## Responsive Behavior
Only the 390px mobile pass was recorded. In it the display headline measured 23.8px at weight 600 with 23.8px line height and 336px width; the tab bar measured 36px high across the 390px viewport with a 35px line height; the gutter measured 4305px tall at 10px and 15px line height; and the largest character-weighted size was 93.8px (32 characters), where desktop shows 281.4px. How the ASCII grid reflows and where breakpoints sit were not measured.

## Iteration Guide
1. Fill the page with #282828 and a #3c3c3c tab bar labelled like a file.
2. Add a line-number gutter and an ASCII grid in code-saver at #898989.
3. Set the name at the full measured scale (281.4px desktop) in neue-haas-grotesk-display 600 and #bababa.
4. Keep the single accent #aec6f6 for the tab label only.
5. Preserve the negative letter spacing on every headline size.
6. Measure before adding anything that the capture does not show, such as the theme icon's behaviour.
