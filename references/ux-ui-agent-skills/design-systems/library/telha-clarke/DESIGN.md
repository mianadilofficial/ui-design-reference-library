---
version: alpha
name: Telha Clarke
category: "Architecture & Interiors"
description: "Telha Clarke architecture studio home page: Europa-Grotesk at weight 400 with a 14px to 89px fluid scale, pure black on white with pale #cacfcb footer text, 0px radius everywhere, no shadows and unframed architectural imagery."
colors:
  canvas: "#ffffff"
  page-body: "#000000"
  ink: "#000000"
  primary: "#cacfcb"
typography:
  display:
    fontFamily: Europa-Grotesk, sans-serif
    fontSize: 17.7778px
    fontWeight: 400
    lineHeight: 23.1111px
  display-mobile:
    fontFamily: Europa-Grotesk, sans-serif
    fontSize: 37.44px
    fontWeight: 400
    lineHeight: 41.184px
  heading:
    fontFamily: Europa-Grotesk, sans-serif
    fontSize: 64px
    fontWeight: 400
    lineHeight: 64px
  subheading:
    fontFamily: Europa-Grotesk, sans-serif
    fontSize: 14.2222px
    fontWeight: 400
    lineHeight: 15.6444px
  link:
    fontFamily: Europa-Grotesk, sans-serif
    fontSize: 88.8889px
    fontWeight: 400
    lineHeight: 97.7778px
rounded:
  none: 0px
spacing:
  s1: 0.89px
  s2: 5.33px
  s3: 7.11px
  s4: 8.89px
  s5: 10.67px
  s6: 17.78px
  s7: 26.67px
  s8: 28.44px
  s9: 46.22px
  s10: 88.89px
components:
  link:
    textColor: "{colors.page-body}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.page-body}"
    padding: 0px 17.7778px
  nav-link:
    textColor: "{colors.page-body}"
    typography: "{typography.subheading}"
  text-input:
    textColor: "{colors.page-body}"
    typography: "{typography.subheading}"
    height: 15px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
---

# Telha Clarke

## Overview
The measured site is the home page of Telha Clarke, a Melbourne-based architecture and interior design studio (https://telhaclarke.com.au/, title "Telha Clarke — Melbourne based Architecture & Interior Design studio"). It is a monochrome, typography-led portfolio. The first screen is almost empty white: a thin top line of text links ("Work, Process, Studio" at left; a live clock "03:34 PM" and "South Yarra, AUS" and "Contact" at right), one dark square architectural photograph centered, a short statement ("Driven by History, Centered on Context, Embracing Culture") at the right and a grey "[Scroll down]" cue at the left. Next come a small concrete-detail photograph, an acknowledgement-of-country paragraph, a very large statement ("Telha Clarke is a Melbourne based Architecture & Interior Design studio, designing various project typologies across Australia and Internationally") set at 64px, a "SELECTED WORKS" label with a counter ("02") and year range ("17 - 25'"), and then project titles in square brackets at 88.8889px ("[Grange Road]") each above a large render. Scroll height is 9955px at 1280px, ending in a white footer with a large "Talk to us about your project" call. Everything is black on white, in one typeface, with tiny crop-mark ticks at the page margins. The tone is restrained and editorial; copy is factual and in sentence case.

## Colors
The palette is nearly colorless. `canvas` is #ffffff and `ink` / `page-body` is #000000 for every heading, link and label. `primary` is #cacfcb, a pale grey-green measured as the footer text color; it also appears as the muted grey of secondary labels ("[Scroll down]", the clock, the "02" counter) in the capture, though those grey values were not separately recorded. No chromatic accent is used; imagery (dark facade, sand-colored buildings, blue sky) supplies color. The site's CSS publishes 383 root variables from the Tailwind default theme (for example `--color-purple-200`, `--color-zinc-100`, `--color-sky-500`, `--color-pink-500` and `--color-orange-600` in oklch), which are framework defaults and not brand colors.

## Typography
A single family, Europa-Grotesk (loaded at 400), is used everywhere. The type scale is fluid and large-contrast: `subheading` is 14.2222px / 15.6444px (nav, labels, body paragraphs), `display` is 17.7778px / 23.1111px (the h1 statement beside the hero image), `heading` is 64px / 64px (the studio statement), and `link` is 88.8889px / 97.7778px (project titles in brackets); the footer call is 32px. `display-mobile` is 37.44px / 41.184px at a 390px viewport. Weight is 400 throughout. Tight leading and slightly negative visual tracking make the large lines read as solid blocks; some lines are clipped by their container in the capture because the heading animates in line by line. Europa Grotesk is a commercial face; a neutral grotesque such as Inter Tight or Neue Haas Grotesk is the closest substitute.

## Layout
The page uses a thin outer margin (the nav has 17.7778px horizontal padding) and an asymmetric grid: images and text sit on different columns, often with one image centered and a small text block offset to the right or left. The fixed header is 3.8rem tall (`--header-height`). Large type spans the full width. Photographs are rectangles of different proportions with no frames. Spacing scale (fractional px, apparently derived from a viewport-relative unit): 0.89px, 5.33px, 7.11px, 8.89px, 10.67px, 17.78px, 26.67px, 28.44px, 46.22px and 88.89px; the most frequent gap is 8.88889px (23 elements), followed by 17.7778px (5) and 46.2222px and 26.6667px (4 each). Paragraphs are padded 0px 133.333px on the right in the studio block.

## Elevation & Depth
Flat. No shadows and no borders were measured. The Tailwind defaults in the root variables include shadow tokens (`--shadow-xs`: 0 1px 2px 0 #0000000d) but none are used on rendered elements. Depth comes from image scale and white space alone.

## Shapes
No border radius was measured: every rendered element computes a radius of 0px, so photographs, links and the footer are sharp-cornered rectangles. Small tick marks (short horizontal and vertical dashes) at the left and right margins act as crop marks around sections.

## Components
- **nav**: a single text row, 14.2222px black text, 0px 17.7778px padding, 33px tall, containing links, a live clock and the studio location.
- **nav-link / label**: 14.2222px / 15.6444px, #000000.
- **link (project title)**: 88.8889px black text with square brackets, "[Grange Road]", followed by project type and status ("Multi-residential", "Coming Soon").
- **text-input**: 14.2222px, 15px tall (a bare newsletter field).
- **footer**: white background, #cacfcb text, 778px tall, with "Talk to us about your project", "Contact us" and "Subscribe".
- **Image block**: unframed rectangle, sometimes dark and cropped to a square.
No button with a fill was found; calls to action are text links.

## Design System Architecture
No brand guidelines, press kit or design-system link exists on the page: WebFetch of https://telhaclarke.com.au/ listed only navigation (Home, Work, Process, Studio, Contact), social links, legal pages and website credits. The shipped stylesheet is Tailwind CSS (383 root variables with names such as `--container-md`, `--blur-lg`, `--text-20`, `--shadow-xs` and the default `--color-*` ramp) plus a project variable `--header-height: 3.8rem`. The de-facto system is therefore one typeface, black on white, a fluid type scale and unframed imagery.

## Do's and Don'ts
- Do use one grotesque at weight 400 and let scale (14px to 89px) do the hierarchy.
- Do bracket project titles ("[Grange Road]") and pair them with a type and status line.
- Do keep the palette black, white and a faint grey; let architectural renders supply color.
- Don't add button fills, borders, rounded corners or shadows.
- Don't use the Tailwind default colors in the root variables as brand colors.
- Don't crowd the first screen; leave it mostly white.

## Responsive Behavior
Measured at a 390px viewport: the h1 renders at 37.44px / 41.184px, larger than its 17.7778px desktop size, and no primary button was found. The mobile pass recorded no layout, header-link or band data, so menu behavior, column counts and image sizes on mobile are not measured.

## Iteration Guide
1. Start with #ffffff, #000000 and a single typeface at weight 400.
2. Set labels at 14.2222px, statements at 64px and project titles at 88.8889px in brackets.
3. Place one unframed image per screen, offset from the copy; use a 3.8rem top row for nav, clock and location.
4. Keep radii at 0px and omit shadows.
5. Re-run `node web/scripts/verify-designs.mjs --slug=telha-clarke` after every change.
6. Voice: declarative studio statements, no marketing superlatives, acknowledgement of Country near the top, and "Coming Soon" or years for project status.
7. Imagery: moody dark facade photograph, pale concrete details and soft-lit renders of low-rise residential buildings with planting and sky.
8. Section markers: every section opens with a small row of three items, a label at the left (for example "SELECTED WORKS"), a grey counter at the center ("02") and a range at the right ("17 - 25'"); reuse that three-slot header to index sections.
9. Header row: keep nav links to three words ("Work, Process, Studio") at the left, and pair a live local clock with the studio's suburb and country at the right, followed by "Contact".
10. Statement text: the large studio statement wraps across four lines at full page width with its first line indented, and later lines are revealed progressively; the supporting paragraph beneath it sits in two small columns, a short label ("Architecture & Interior Design") and a longer description of typologies from single and multi-residential to hotels, hospitality and workplace.
11. Work index: the site lists 31 projects under "All Work"; featured entries show project name in brackets, typology and a year or "Coming Soon" status, such as Grange Road, Southbank Tower and Daylesford Hill House.
