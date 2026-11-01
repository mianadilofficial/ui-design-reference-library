---
version: alpha
name: First Frame
category: "Agencies & Studios"
description: "First Frame (Paris creative and post-production studio): a pure black (#000000) canvas with white (#ffffff) uppercase text, IBM Plex Mono 10.6667px for interface labels, HKRequisite 42.6667px uppercase for project titles, hairline rules and a slideshow of work with a 01/06 counter."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#ffffff"
typography:
  display:
    fontFamily: HKRequisite, sans-serif
    fontSize: 42.6667px
    fontWeight: 400
    lineHeight: 52.9067px
    textTransform: uppercase
  display-mobile:
    fontFamily: HKRequisite, sans-serif
    fontSize: 41.6px
    fontWeight: 500
    lineHeight: 50.752px
    textTransform: uppercase
  nav:
    fontFamily: HKRequisite, sans-serif
    fontSize: 10.6667px
    fontWeight: 400
    lineHeight: 16px
    textTransform: uppercase
  body-dominant:
    fontFamily: IBMPlexMono
    fontSize: 10.6667px
    fontWeight: 500
rounded:
  xs: 2.67px
spacing:
  s1: 0.89px
  s2: 4.44px
  s3: 8.89px
  s4: 17.78px
  s5: 26.67px
  s6: 44.44px
  s7: 48.89px
  s8: 53.33px
components:
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
---

## Overview
First Frame is the website of a Paris studio for creative production and post-production; the page title reads "FIRST FRAME • Creative Production & Post-Production • Paris" and the language is en-GB. The capture is a single full-viewport showreel screen. A header strip carries the wordmark "FIRST FRAME" at the left, a vertical rule, then the sections ADVERTISEMENT, ORIGINALS, CORPORATE, MUSIC and STUDIO; at the right are ABOUT, CONTACT and a language switch (EN, FR). A small mono tagline reads "EVERY STORY STARTS WITH A FIRST FRAME / CREATIVE PRODUCTION PARIS". At the lower left the current film is announced: a brand tag (WEWARD) in an outlined label, the title "THE WALK" in large uppercase, and the director's name (MATT PALMER) in a solid white label. At the lower right sit a PLAY control and a row of six small square markers with a counter, 01/06. The video area is black in the capture, so the page reads as pure type and hairlines on black.

## Colors
The palette has two values: black #000000 and white #ffffff. Black covers essentially all measured background area (1024 weighted units against single digits for the others) and white carries 146 of the 157 measured text characters, the remaining 11 characters being black text inside the white label. Translucent whites are used for structure and state: a #ffffff1a and a #ffffff33 background appear in small areas, a #ffffff33 value is also present in the CSS, and inactive items are shown at reduced opacity (the FR language link measured opacity 0.3 and reaches 0.999947 on hover). The stylesheet's variables define black `0 0 0`, white `255 255 255`, blue `0 0 255` as a grid color, border colors #ccc and #333 and a Tailwind ring color; none of these blues or greens (#1b870b, #9c1a1a appear in the corpus) were seen as visible page colors, so the brand reads strictly as black and white. Because white is both the ink and the primary token, there is no separate action color.

## Typography
Two faces, with different jobs. IBM Plex Mono (weights 400 and 500) sets almost all interface text: the dominant style is 10.6667px at weight 500, and the header navigation text measured 10.6667px uppercase with a 14.1867px line height. HKRequisite (weight 500 loaded; 400 in the title measurement) sets the project titles and nav-link text: the display style is 42.6667px with a 52.9067px line height in uppercase, and the nav style is 10.6667px with a 16px line height, also uppercase. On a 390px viewport the largest text measured 41.6px at weight 500 with a 50.752px line height (the MENU label), and the most-read sizes were 12.48px, 26px, 14.56px and 41.6px. A small 8.88889px size appears for 5 characters, on an element that was not recorded. IBM Plex Mono accounts for 145 measured characters and HKRequisite for 12.

Font substitutes: both faces are loaded by the site. HKRequisite is a commercial typeface; where it is unavailable, a neutral grotesque in regular weight and uppercase, with IBM Plex Mono (open source) kept for interface text, preserves the pairing.

## Layout
The measured desktop page is 1280px wide and 800px tall: a single screen with no scroll height beyond the viewport. The header is 49px high and spans the full width, with a vertical divider after the logo. Header links are 159px wide in the measurement. Content is placed at the edges: the title block at lower left, the tagline at upper right, the play control and counter at lower right, inside a column that is separated from the main area by a vertical hairline. A horizontal hairline runs above the six slide markers. The stylesheet defines `--header-height: 4.6rem`, `--padding-container: 1rem` and `--gap: 1rem`. Measured gaps are 17.7778px, 26.6667px, 44.4444px, 8.88889px and 4.44444px, and paddings include 17.7778px, 53.3333px and 48.8889px; the spacing tokens carry these values.

## Elevation & Depth
There is no elevation. The measured shadow values are `none` and `inset 0 0 0 rgba(0,0,0,0)`, and the Tailwind ring and shadow variables are all zero. Layering is created only by the video frame, hairline rules and white labels placed over it. Separation between regions uses hairline rules and the stylesheet's border colors #333 and #ccc; the only measured border color on visible elements was #ffffff.

## Shapes
Almost everything is rectangular with square corners. The only measured radius is 2.66667px (2 elements), recorded as 2.67px; the stylesheet lists values such as 2px, 7px, 4px and 5px. The slide markers are small squares, the label tags are outlined or solid rectangles, and the play indicator is a square dot on the rule.

## Components
- **Header navigation:** uppercase IBM Plex Mono / HKRequisite links at 10.6667px in white on black, 49px high, divided from the logo by a vertical rule.
- **Language switch:** EN and FR, the inactive one dimmed (opacity 0.3 measured) and brightening on hover.
- **Tagline block:** three mono lines with a small square-and-dots marker before the last line.
- **Project title block:** an outlined tag with the brand name, the 42.6667px uppercase title, and a solid white tag with black text for the credit.
- **Slide markers:** six small squares along the bottom, with a counter reading 01/06.
- **Play control:** the word PLAY beside a square marker on the intersection of two hairlines.
- **Menu (mobile):** the 390px pass recorded MENU and CLOSE labels, followed by EN and FR and the section list.

## Design System Architecture
No public or official design system or brand-guideline page for First Frame was opened for this entry; the site links to none. The shipped CSS is a utility-class stylesheet with Tailwind-style variables (`--tw-ring-color`, `--tw-shadow`) next to custom variables for layout and motion: `--header-height`, `--padding-container`, `--gap`, `--vh`, `--color-black`, `--color-white`, `--color-blue`, `--color-border-light`, `--color-border-dark`, and four easing curves (`--ease-in`, `--ease-out`, `--ease-in-out`, `--ease-out-back`). Colors are stored as space-separated channel triples. Measured source: https://firstframe.fr/ (extraction of 2026-10-09).

## Do's and Don'ts
- Do keep the surface pure black and the text pure white; use opacity for secondary states.
- Do set labels in uppercase IBM Plex Mono at 10.6667px and titles in uppercase HKRequisite.
- Do build structure from hairlines, small squares and tags rather than boxes and shadows.
- Do let the film frame be the only image.
- Don't add accent colors; none are visible on the page.
- Don't add shadows or rounded containers; the visible radius is 2.67px at most.
- Don't set copy in mixed case; the measured nav and titles are uppercase.

## Responsive Behavior
At 390px the measured page differs from desktop in these recorded ways: the navigation text measured 41.6px at weight 500 for the MENU label with a 50.752px line height and the menu list includes MENU, CLOSE, EN, FR and the seven sections; the most-read sizes were 12.48px, 26px and 14.56px; the header-like element measured 48px high and 390px wide. How the showreel, tags and counter are arranged on mobile was not measured, and no breakpoints were recorded.

## Iteration Guide
1. Fill the screen with #000000 and use #ffffff for all text.
2. Use IBM Plex Mono 10.6667px uppercase for navigation, tags and counters.
3. Use HKRequisite 42.6667px uppercase for the film title only.
4. Draw structure with white hairlines and square markers.
5. Dim inactive items with opacity rather than another color.
6. Keep radii at 2.67px or square.
