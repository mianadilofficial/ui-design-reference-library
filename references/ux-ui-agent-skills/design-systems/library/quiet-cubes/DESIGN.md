---
version: alpha
name: QuietCubes
category: "Architecture & Interiors"
description: "QuietCubes sells luxury office pods on a near-black canvas (#0a0a0a) and warm beige (#dbd5ca) bands, set in Inter Tight Variable at 12.443px body with 49.7718px and 42.6616px headings, tiny 8.88783px uppercase buttons in #ebebeb and white, orange accent #ff8333, 4-5px radii and pill chips at 42.66px."
colors:
  canvas: "#0a0a0a"
  ink: "#ffffff"
  primary: "#ebebeb"
  on-primary: "#1d1d1d"
  surface-beige: "#dbd5ca"
  accent-orange: "#ff8333"
  ink-umber: "#282420"
  accent-olive: "#6d7954"
typography:
  display:
    fontFamily: "\"Inter Tight Variable\", Arial, sans-serif"
    fontSize: 49.7718px
    fontWeight: 500
    lineHeight: 49.7718px
  display-mobile:
    fontFamily: "\"Inter Tight Variable\", Arial, sans-serif"
    fontSize: 33.2785px
    fontWeight: 500
    lineHeight: 33.2785px
    letterSpacing: 0.332785px
  heading:
    fontFamily: "\"Inter Tight Variable\", Arial, sans-serif"
    fontSize: 42.6616px
    fontWeight: 500
    lineHeight: 42.6616px
  body:
    fontFamily: "\"Inter Tight Variable\", Arial, sans-serif"
    fontSize: 12.443px
    fontWeight: 400
    lineHeight: 16.1758px
  button:
    fontFamily: "\"Inter Tight Variable\", Arial, sans-serif"
    fontSize: 8.88783px
    fontWeight: 500
    lineHeight: 10.6654px
    textTransform: uppercase
  link:
    fontFamily: "\"Inter Tight Variable\", Arial, sans-serif"
    fontSize: 19.6243px
    fontWeight: 400
    lineHeight: 21.5867px
  button-secondary:
    fontFamily: "\"Inter Tight Variable\", Arial, sans-serif"
    fontSize: 8.95893px
    fontWeight: 500
    lineHeight: 8.95893px
    textTransform: uppercase
rounded:
  xs: 1.78px
  sm: 3.56px
  md: 4.41px
  lg: 4.44px
  xl: 5px
  2xl: 5.33px
  3xl: 13.33px
  4xl: 13.37px
  cta: 4.44px
spacing:
  s1: 3.56px
  s2: 4.41px
  s3: 4.44px
  s4: 5.4px
  s5: 5.69px
  s6: 7.11px
  s7: 8.89px
  s8: 8.96px
  s9: 10.67px
  s10: 11.52px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    padding: 14.2205px 17.7757px
    height: 39px
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xl}"
    padding: 14.2205px 17.7757px
    height: 39px
  link:
    textColor: "{colors.surface-beige}"
    typography: "{typography.link}"
---

## Overview
Measured from https://quietcubes.com/ (document title "QuietCubes | Luxury Office Pods & Booths for Modern Offices", scroll height 23138px). The company sells soundproof pods for offices, homes, outdoor spaces and nursing; the opened page's headline is "The World's Most Advanced Pods & Booths" and its sections cover four product lines, technology features (lighting, ventilation, privacy glass, soundproofing), eco claims, a build-to-order process, testimonials, an FAQ and a contact form. Office pods are offered for 1 to 10 people. A footer credit links to https://www.adelt.io/.

The capture opens on a dark, nearly empty screen with the centered wordmark "quietcubes", the line "Select Your Pod" and four glassy pill chips with a thumbnail each (Office Pods in orange, Home Pods in blue, Outdoor Pods in olive green, Nursing Pods in beige), and the strapline "The World's Most Advanced Pods & Booths" at the foot. The measured h1 further down is "Maximize Focus & Productivity at Your Workspace" (white on dark, 49.7718px), followed by "Quiet Spaces Built for 1 to 10 Minds" in beige. The extractor hid a `tech-text-wrap` overlay. The voice is confident and benefit-driven with short taglines about focus, comfort and privacy.

## Colors
The root variables name the palette: `--beige: #dbd5ca`, `--black: #1d1d1d`, `--background-black: #0a0a0a`, `--orange: #ff8333`, `--blue: #a2b3ff`, `--white: white`. Measured backgrounds by area: `surface-beige-beige` #dbd5ca (5128, the largest), white (3093), `canvas` #0a0a0a (1024), #1d1d1d (10) and `primary` #ebebeb (5).

Text by characters: #1d1d1d (5038, text on beige and white), `ink` #ffffff (531, on the dark canvas), beige #dbd5ca (508, on dark), `accent-orange` #ff8333 (168), `ink-umber` #282420 (147), `accent-olive` #6d7954 (12), #aea59a (12), #db6e2b (11) and #4887cb (9). The product chips in the capture are tinted orange, blue, olive and beige. Borders: #1d1d1d (26 uses), white (8), beige (2), translucent beige #dbd5ca66 and white #ffffff4d. The `canvas` is the dark #0a0a0a because the first screen is black; the longer page then alternates beige and white bands.

The Swiper variable `--swiper-theme-color: #007aff` is a library default and is not used.

## Typography
One family: "Inter Tight Variable" (6436 chars, weights 100-900 in a single variable file), Arial as fallback. Roles: `display` 49.7718px/49.7718px weight 500 (33.2785px with 0.332785px tracking on mobile), `heading` 42.6616px/42.6616px weight 500, `body` 12.443px/16.1758px weight 400 (14.5593px/18.9271px on mobile), `link` 19.6243px/21.5867px weight 400, `button` 8.88783px/10.6654px weight 500 uppercase. Sizes by characters: 12.443px (4751), 19.6243px (329), 21.3308px (313), 19.5532px (253), 8.88783px (162), 10.6654px (156), 49.7718px (125), 44.4391px (107), 8.95893px (101), 14.2205px (48), 42.6616px (36), larger display sizes 82.6568px (12) and 106.654px (3). Weights: 400 (5902), 500 (513), 700 (21). Letter-spacing is tight on the largest sizes (82.6568px at -2.4797px) and slight on body (-0.248859px).

## Layout
A very tall single page (23138px) of alternating dark, beige and white bands. Sizes throughout are fractional multiples of 1.77757 (8.88783 = 5 x 1.77757; 14.2205 = 8 x 1.77757). The root `--desk-grad-width: 87.5rem` and `--tech-text-height: 16.625rem` are rem based. Paddings: 14.2205px (28 uses), 17.7757px (23), 11.5542px, 4.44391px, 21.3308px, 7.11026px, 24.1749px, 106.654px, 28.441px, 71.1026px. Gaps: 14.2205px (46), 8.88783px (22), 7.11026px (19), 10.6654px (14), 28.441px (12).

## Elevation & Depth
No box shadows are measured. The site declares `--glass-blur: 20px`, and the capture shows glassy tinted pills with gradient fills over a dark field, with pod photographs fading out of the dark background. Depth otherwise comes from full-bleed tonal bands.

## Shapes
Radii by weight: 4.44391px (18, buttons), 3.55513px (18), 42.6616px (8, pill chips), 5.3327px, 4.40836px and 5px (2 each), 13.3317px and 13.3673px (1 each), 1.77757px (1). Buttons are small-radius rectangles (4-5px); the "Select Your Pod" chips and hover targets are fully round (42.6616px).

## Components
- **button-primary** ("ORDER NOW"): #ebebeb fill, #1d1d1d text, 8.88783px/500 uppercase, 4.44391px radius, padding 14.2205px 17.7757px, 39px tall (87px wide).
- **button-secondary** ("WATCH VIDEO", "GO CUSTOMIZE"): white fill, #1d1d1d text, 8.95893px/500 uppercase, 5px radius, same padding, 39-41px tall; "GO CUSTOMIZE" also has a 1px white border.
- **link**: beige #dbd5ca text, 19.6243px/21.5867px.
- **pod chips** ("Office Pods" etc.): 42.6616px radius, white text and white border, about 43px tall; their hover height shifts by 1px (43px to 42px).
- Mobile "ORDER NOW" is white with 10.3995px/500 text and 5.19976px radius.

## Design System Architecture
No public design system exists: the opened page has no brand guidelines or design-system links (https://quietcubes.com), and the only credit is the footer link to the site's builder at https://www.adelt.io/ (not opened). The de-facto system is 23 root variables mixing palette (`--beige`, `--black`, `--background-black`, `--orange`, `--blue`), layout offsets (`--green-offset`, `--blue-offset`, `--beige-offset`, `--orange-offset`) that position colored glows, scroll-driven values (`--mouse-x`, `--mouse-y`, `--eco-mask`) and `--glass-blur`.

## Do's and Don'ts
- Do use #0a0a0a for hero screens and #dbd5ca for content bands.
- Do set everything in Inter Tight at weights 400 and 500.
- Do keep buttons tiny, uppercase and nearly square (4-5px radius).
- Don't use the Swiper default blue #007aff.
- Don't add drop shadows; use blur and tonal layers instead.
- Don't use more than one orange (#ff8333) accent per view.

## Responsive Behavior
At the 390px mobile pass the h1 is 33.2785px/33.2785px (0.332785px tracking) in a 275px column, body text is 14.5593px/18.9271px in a 348px column, and the "ORDER NOW" button is white with 10.3995px text, 5.19976px radius and padding 16.6392px 20.799px. Menu collapse and card layouts on mobile are not measured.

## Iteration Guide
1. Dark #0a0a0a hero with beige #dbd5ca and white bands below.
2. Inter Tight 500 headings at 42-50px, 12.443px body.
3. Tiny uppercase buttons with 4.44px radius; pills at 42.66px for product selectors.
4. Tint product chips orange, blue, olive and beige.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=quiet-cubes --url=https://quietcubes.com --force --no-motion` after edits.

## Imagery and Content Notes
The first screen in the capture is almost entirely dark: a small grey wordmark centered at the top, the dim heading "Select Your Pod" at about the vertical middle, a row of four pill chips with small product thumbnails at their left ends (an orange chip for office pods with a framed booth image, a blue chip for home pods with an arched pod, a green chip for outdoor pods, a pale chip with a photo of a mother and baby for nursing pods), and a faint tagline near the bottom of the first screen. Below that screen the capture is empty black, because the long page reveals its content on scroll. The measured headings that do render include the bright white h1 and the beige h2, both at weight 500, and the large display sizes of 82.6568px and 106.654px that appear on only a handful of characters. Interface text is dominated by the 12.443px body: 4751 of 6436 measured characters, about three quarters of all text, sit at that size, so the page reads as small, quiet type around very large images and headlines. Contact and FAQ text uses the same family. The hover pass on the "Office Pods" chip changes only the height (43px to 42px) and leaves color and border untouched, so interaction feedback is subtle.
For anyone rebuilding the page, the reliable order of work is: set the dark #0a0a0a base and the beige #dbd5ca and white bands first, then set the type scale (12.443px body, 19.6243px link, 42.6616px and 49.7718px headings), then the tiny uppercase buttons with their 14.2205px and 17.7757px padding, and finally the pill selector chips at a 42.6616px radius. The measured border color on most outlined elements is #1d1d1d, so outlines on light bands are near-black rather than grey, and the white 1px border appears only on the "GO CUSTOMIZE" buttons.
