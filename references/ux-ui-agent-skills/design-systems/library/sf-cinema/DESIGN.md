---
version: alpha
name: SF Cinema
category: "Thai Brands"
description: "SF Cinema home page: Mantine-based site in Smarn Film type, SF blue #4285cf and #2062af gradient bands, dark footer #231f20, uppercase 12px nav, 8px-radius pill buttons at 30px, 24px rounded band corners, ink #3c3c3c on white #ffffff."
colors:
  canvas: "#ffffff"
  page-largest: "#f5f5f5"
  ink: "#3c3c3c"
  primary: "#4285cf"
  primary-dark: "#2062af"
  ink-strong: "#3c3c3c"
  on-primary: "#ffffff"
  surface-2: "#231f20"
  ink-2: "#ffffff99"
  ink-4: "#ffffffcc"
  ink-5: "#818181"
  ink-6: "#fffffff2"
  hairline: "#00000033"
  link-border: "#f0f0f0"
  nav-link-border: "#ffffff33"
typography:
  display:
    fontFamily: "\"Smarn Film\", ui-sans-serif"
    fontSize: 28px
    fontWeight: 600
    lineHeight: 35px
    letterSpacing: "-0.7px"
  display-mobile:
    fontFamily: "\"Smarn Film\", ui-sans-serif"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 36px
  button:
    fontFamily: "\"Smarn Film\", ui-sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    textTransform: uppercase
  nav:
    fontFamily: "\"Smarn Film\", ui-sans-serif"
    fontSize: 12px
    fontWeight: 600
    lineHeight: 16px
    textTransform: uppercase
rounded:
  xs: 4px
  sm: 6px
  md: 8px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 24px
  s6: 48px
components:
  button-primary:
    backgroundColor: "{colors.hairline}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 4px 12px
    height: 30px
    borderColor: "{colors.hairline}"
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 4px 12px
    borderColor: "{colors.link-border}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.md}"
    padding: 4px 12px
    borderColor: "{colors.nav-link-border}"
  footer:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.canvas}"
---

# SF Cinema

## Overview
SF Cinema (sfcinema.com/en, the queued sfcinemacity.com resolves here; page title "หน้าแรก | SF Cinema") is the home page of Thailand's SF cinema chain. The measured page is 1280px wide and 1493px tall in the extraction, and the capture shows a partially rendered state: some imagery has not loaded and a sticky navigation bar appears mid-page. What is visible is a blue gradient system (the brand blue fading from lighter #4285cf-range to deep #2062af-range and into near-black), a "Now Showing / Coming Soon" tab pair at the top, a white "SF+ Privilege" row with a pill "SEE ALL" button, a blue navigation bar (HOME, MOVIE, CINEMA, PROMOTION, BOWLING & MUSIC, NEWS & ACTIVITIES, SPECIAL EVENT, SF+) with a language chip "EN" and a "LOGIN / SIGN UP" chip, a blue "Latest Promotion" band with arrow controls, a black-to-blue "Special Cinema" band with a row of cinema-format logo chips (ZIGMA, MX4D, First Class, The Bed Cinema, and others), a pale grey "News & Activities" section with a full-width "ALL NEWS & ACTIVITIES" button, and a dark footer (#231f20) with links and the "SF SMART CALL: 1349" line. Bands have strongly rounded outer corners (24px on one side) that give the page a card-stack silhouette. Copy is English uppercase for navigation and sentence case for section titles.

Content and voice: the page is organized around what to watch and how to watch it. Section names are plain and promotional ("Now Showing", "Coming Soon", "Privilege", "Latest Promotion", "Special Cinema", "News & Activities"), and the Special Cinema row presents the chain's premium formats as logo chips rather than text. The SF+ loyalty mark (a blue and orange logotype) sits beside "Privilege". Where images would appear (movie posters, promotions), the capture shows empty space because the media had not loaded, so poster treatment is not documented here. Density is low to moderate once images load: one horizontal strip per section.

## Colors
- Canvas: #ffffff; light surface #f5f5f5 (largest area, 332); dark footer #231f20 (182).
- Primary: #4285cf, SF blue, declared by the site's `--mantine-primary-color-filled` and `--mantine-color-primary-sf-blue-6`. The generator's primary (#3c3c3c, the text color) is retained as ink-strong. Primary dark: #2062af (`--mantine-color-primary-sf-blue-8`, also the second most frequent color in the CSS corpus after white).
- Blue ramp (Mantine custom palette "sf-blue"): #e4f1fa, #bedcf5, #97c7ee, #73b1e6, #5ba1e1, #4892dc, #4285cf, #3a73bc, #2062af, #28468a. Of these only #4285cf and #2062af were read from the CSS corpus or measured; the whole ramp is published in the root variables.
- Ink: #3c3c3c; white text variants #ffffff, #ffffff99, #ffffffcc, #fffffff2 on dark and blue; #818181 muted.
- Hairlines and scrims: #00000033 (button background over the gradient), #f0f0f0 (light link border), #ffffff33 (nav link border).
The root also exports the entire Mantine default palette (reds, violets, limes and so on, such as `--mantine-color-red-9: #c92a2a`); those are framework defaults, not brand colors.

## Typography
One typeface, Smarn Film (400, 500, 600), with `ui-sans-serif` fallback, plus an "sf-icon-font" for icons. It is set as `--mantine-font-family` and `--mantine-font-family-headings`.
- Display: 28px / 35px, weight 600, -0.7px tracking (section titles such as "Special Cinema"; mobile pass: 24px / 36px, 600).
- Button: 16px / 24px, weight 400, uppercase.
- Nav: 12px / 16px, weight 600, uppercase.
Most-used sizes: 12px (183 characters), 24px (83), 15px (47), 14px (22), 16px (22), 18px (21), 28px (14), 20px (6). Footer links are 12px, weight 500.

## Layout
Content sits in a centered column with section titles at the left and a "SEE ALL" button at the right of the same line (visible in the capture; the column width was not measured). The page alternates full-width bands (blue gradient, white, black-blue, pale grey, dark footer). The top nav row measures 48px high; footer 143px. Spacing: 4px, 8px, 12px, 16px, 24px, 48px (matching Mantine's spacing variables: xs 0.625rem, sm 0.75rem, md 1rem, lg 1.25rem, xl 2rem).

## Elevation & Depth
Because shadows are absent, separation is made by alternating background fields and by the 24px band corners that tuck one section into the next. Translucent black (#00000033) behind white button text keeps buttons legible on the blue gradient without introducing another fill color.
No box shadows were recorded. Depth comes from gradient bands, translucent buttons over imagery (#00000033), and rounded outer band corners that overlap the previous section.

## Shapes
The shape language has two scales. Controls (buttons, nav pills, chips) use 8px, with 4px and 6px for the smallest elements. Large containers use a 24px radius on a single outer corner, which creates the characteristic tucked-band silhouette: the top-left or bottom-left corner of a band is rounded while the others stay square. Keep to these two scales when building new bands.
Measured radii: 8px (31), 4px (9), 6px (2), and asymmetric corners `0 0 0 24px` and `0 24px 0 0` on large bands. Buttons, chips and nav links use 8px; the band corners are 24px. Mantine radius variables map to xs 2px, sm 4px, md 8px, lg 16px, xl 32px.

## Components
Components are built from Mantine primitives (buttons, chips, tabs) restyled with the SF palette.
- **See-all button (primary token)**: #00000033 translucent fill with a matching border, white 16px uppercase text, 8px radius, 4px 12px padding, 30px high (on blue bands).
- **See-all button (light)**: white fill, #3c3c3c text, 1px #f0f0f0 border, 8px radius, same size (on white sections).
- **Nav link**: white 12px 600 uppercase, 1px #ffffff33 border, 8px radius, 26px high; the active HOME link is outlined white.
- **Chips**: language and login pills on the nav bar; cinema-format logo chips with dark fill.
- **Footer**: #231f20 with white 12px uppercase links.

## Design System Architecture
The site is built on Mantine: the root exports `--mantine-*` variables including a custom palette named "primary-sf-blue" (ten shades), `--mantine-primary-color-*` aliases, radius, spacing and font-family variables. No public brand guidelines or design-system documentation were found; the home page was scanned for brand, press and guideline links and none were present.

## Do's and Don'ts
These rules reflect measured values and the capture only.
- Do use SF blue (#4285cf) and its dark step (#2062af) for gradient bands, and #231f20 for the footer.
- Do use 8px radius on buttons and nav pills; 24px on large band corners.
- Do keep nav and button text uppercase.
- Don't use Mantine default colors (red, violet, lime) as brand colors.
- Don't copy the partially loaded states (missing images, floating nav) from the capture.
- Don't add shadows; none were measured.

## Responsive Behavior
Scope: one desktop pass at 1280px and one mobile pass at 390px were recorded.
Mobile pass at 390px: the first heading, "Privilege", is 24px / 36px, weight 600, color #3c3c3c. Nav collapse and grid reflow were not measured.

## Iteration Guide
When extending the page, choose the band color first (blue gradient, white, near-black, pale grey), pick the matching button variant (translucent on blue, white with light border on white), and keep section titles at 28px weight 600 with the SEE ALL control on the right.
1. Tokens: canvas #ffffff, ink #3c3c3c, primary #4285cf, primary-dark #2062af, footer #231f20.
2. Type: Smarn Film 600 at 28px for titles, uppercase 12px for nav.
3. Build gradient bands with rounded 24px outer corners and a SEE ALL pill at 30px height.
4. Add the Special Cinema logo-chip row and a dark footer.
5. Run `node web/scripts/verify-designs.mjs --slug=sf-cinema`.
Not measured: hover, dark mode, motion, loaded imagery.
