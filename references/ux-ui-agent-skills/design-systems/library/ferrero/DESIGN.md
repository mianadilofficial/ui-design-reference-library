---
version: alpha
name: Ferrero Group
category: "Food & Beverage"
description: "Ferrero Group global site: chocolate-brown (#59200a) text on white and cream (#fffaf0), Merriweather serif uppercase headlines at 50.08px over Rubik 16px body, light-orange (#ffa646) CTA, square-cornered outlined buttons and full-bleed heritage photography."
colors:
  heritage-brown: "#3f2820"
  gold: "#c79416"
  kinder-orange: "#f3410e"
  red: "#e20019"
  ferrero-rocher-dark: "#2b1a15"
  tictac-green: "#008958"
  canvas: "#ffffff"
  canvas-cream: "#fffaf0"
  ink: "#59200a"
  primary: "#ffa646"
  on-primary: "#59200a"
  ink-black: "#000000"
  ink-green: "#0a5747"
  ink-faint: "#eaeaea"
  button-secondary-bg: "#0000004a"
typography:
  display:
    fontFamily: Merriweather, serif
    fontSize: 50.08px
    fontWeight: 400
    lineHeight: 70.08px
    textTransform: uppercase
  display-mobile:
    fontFamily: Merriweather, serif
    fontSize: 36px
    fontWeight: 400
    lineHeight: 48px
    textTransform: uppercase
  subheading:
    fontFamily: Rubik, sans-serif
    fontSize: 20px
    fontWeight: 600
  body:
    fontFamily: Rubik, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20px
  button-secondary:
    fontFamily: Merriweather, serif
    fontSize: 14.08px
    fontWeight: 400
    lineHeight: 18.1632px
    textTransform: uppercase
  input:
    fontFamily: Merriweather, serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20.8px
rounded:
  xs: 3px
  sm: 12px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10.08px
  s6: 12px
  s7: 14.08px
  s8: 15px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 0px 10.08px
    height: 48px
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.none}"
    padding: 0px 20px
    height: 48px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.ink-black}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-black}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink-black}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 0px 0px 0px 15px
    height: 60px
    borderColor: "{colors.ink}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 40px 0px
---

## Overview
The measured page is the Ferrero Group's global website (ferrero.com/int/en), titled "Ferrero Group Official Website". It is a corporate and editorial site rather than a shop: the capture shows a white header with the brown slab wordmark and five serif navigation items (About Us, People & Planet, Our Brands, Careers, News & Stories) plus a search icon, then a rotating hero carousel in deep green with a torn-paper edge and a product-style mockup of the Cocoa Charter report. Below it sit a centred company introduction, a cream section for the Sustainability Report with a card-style cover image and download rows, and a full-bleed black-and-white archival photograph of the original pasticceria in Alba with the headline "A STORY OF A FAMILY". The tone is warm, proud and heritage-led: short uppercase calls to action ("DISCOVER MORE", "DISCOVER ALL REPORTS") and sentences about family ownership, quality and generations.

## Colors
Text is chocolate brown, #59200a, which is by far the most-read color; white (#ffffff) is the second, used on photography and green panels, and black (#000000) is used for navigation and links. Page backgrounds are white (#ffffff) and a warm cream (#fffaf0) that covers the largest measured area. The primary action color is a light orange, #ffa646, carrying brown text on a 48px CONTACT US button. The Sustainability section uses a deep green (#0a5747) for its outlined button and report rows, and a pale sage (#add4c9) appears as a measured background area. The site's own CSS variables name further brand colors: heritage brown #3f2820, gold #c79416, Kinder orange-red #f3410e, red #e20019, Ferrero Rocher dark #2b1a15 and Tic Tac green #008958. These are product-line and section colors; they are kept in the token set as measured variables. A translucent black (#0000004a) is the fill of the secondary outlined hero button.

## Typography
Two families do the work. Headlines use Merriweather (a serif) in regular weight 400, uppercase in hero banners: the desktop display style is 50.08px with a 70.08px line height; on a 390px viewport the same headline measured 36px with a 48px line height. Body text, navigation and the primary button use Rubik at 16px weight 400 with a 20px line height; a 20px weight 600 style is used for subheadings. The secondary button uses Merriweather at 14.08px uppercase with 18.1632px line height, and form selects use Merriweather at 16px with a 20.8px line height. Loaded files are Rubik 400, 500, 600 and 700 and Merriweather 400 and 700. A third family, Metropolis, is referenced for a small amount of text (82 characters measured), and a handwriting variable is mapped to Merriweather. Rubik accounts for 4134 measured characters and Merriweather for 655.

Font substitutes: both Rubik and Merriweather are published fonts that the site loads itself, so no proprietary substitute is needed; the declared fallbacks are generic `sans-serif` and `serif`.

## Layout
The page is 1280px wide and 7667px tall in the desktop measurement. The header is 100px high on white. Section content sits in a centred column, with body text measuring 1160px wide at its widest; the centred intro paragraph spans most of that width. The hero is a full-bleed carousel in which the next slide peeks in from the right edge. The sustainability block pairs a report cover on the left with a list of download rows on the right and joins them to the CTA with a dashed connector line. Measured paddings are 20px, 30.08px, 40px and 48px; measured gaps are 20px, 4px, 8px and 40px. The footer is white with 40px vertical padding and is 584px high.

## Elevation & Depth
Depth is modest. The corpus lists shadows such as `-3px -3px 5px -2px #c7c5c7` and a blue focus ring `0 0 0 4px rgba(0,56,255,.22)`, and the capture shows a soft drop shadow under the sustainability report cover image. Panels are otherwise flat colour fields: green, cream, gold and black-and-white photography are stacked as full-bleed bands, and the torn-paper edge on the hero is an image treatment rather than a shadow.

## Shapes
Buttons, inputs, header and footer all measure a 0px radius: square corners are the signature of the call-to-action buttons. Smaller radii appear in the CSS (3px and 12px in the measured radius list, 14px and 10px in the wider corpus), and a 50% radius is used on a circular control. The accessibility toggle seen at the right edge of the capture is a circular control and is not documented here as brand UI. Photographs are rectangular.

## Components
- **Primary button (CONTACT US):** #ffa646 fill, #59200a text, Rubik 16px uppercase, 48px high, 0 10.08px padding, square corners.
- **Secondary button (DISCOVER MORE):** translucent black (#0000004a) fill with white text and a white border, Merriweather 14.08px uppercase, 48px high, 0 20px padding.
- **Outlined green button (DISCOVER ALL REPORTS):** #fffaf0 fill, #0a5747 text and border, Merriweather 16px weight 600 uppercase, 50px high, with a chevron.
- **Country select:** white fill, brown text and border, Merriweather 16px, 60px high, 15px left padding.
- **Navigation:** black text (#000000) in Rubik 16px on a white 100px header, with an icon-only search control.
- **Report rows:** a green heading, a file-type icon, a label (Report, GRI Index) and view and download icons separated by green rules.
- **Hover:** the global-website button swaps from transparent with brown text to a #59200a fill with white text.

## Design System Architecture
No public or official design-system documentation for Ferrero was opened for this entry; no brand-guidelines link appeared in the measured pages. The shipped CSS shows a conventional themed system built on named custom properties: color variables such as `--brown`, `--beige`, `--green`, `--gold`, `--kinder` and `--tictac`, semantic aliases such as `--section-color`, `--link-color` and `--body-bg`, typography variables (`--body-font-family`, `--font-handwrite`, `--root-font-size` of 16px) and a body line height of 1.3. The variable list also contains `--code-color` and `--highlight-bg`. Measured source: https://www.ferrero.com/int/en/ (extraction of 2026-10-09).

## Do's and Don'ts
- Do set body text in chocolate brown (#59200a) rather than black; black is for links and navigation.
- Do pair Merriweather headlines with Rubik body text.
- Do keep buttons square-cornered, 48px high and uppercase.
- Do alternate white, cream and deep-green bands, and use archival or product photography full-bleed.
- Don't round the primary or secondary buttons; the measured radius is 0px.
- Don't introduce pure white-on-white sections without a cream (#fffaf0) alternation.
- Don't treat the accessibility toggle or the consent tools as brand UI.
- Don't use the product-line colors (Kinder, Tic Tac) as page chrome; they appear in the variables as per-brand colors.

## Responsive Behavior
Only the 390px mobile pass was measured. In it the hero headline measured 36px with a 48px line height and 350px width; the CONTACT US button measured 390px wide and 48px high; the header measured 80px high; body text stayed at 16px with a 20px line height and the most-read sizes were 16px, 14px, 36px, 30.08px, 26.08px and 20px. How the navigation, carousel and columns rearrange at other widths, and the breakpoints themselves, were not measured.

## Iteration Guide
1. Start with white (#ffffff) and cream (#fffaf0) surfaces and brown (#59200a) text.
2. Use Merriweather for headings (50.08px on desktop, 36px on mobile) and Rubik 16px for body.
3. Make the one action color the light orange #ffa646 with brown text; keep corners square.
4. Use deep green (#0a5747) for sustainability and reporting content.
5. Let photography or color bands carry the section; keep shadows only to document-style cover images.
6. Before adding a section color, check it exists in the site's variables; the measured set is listed under Colors.
