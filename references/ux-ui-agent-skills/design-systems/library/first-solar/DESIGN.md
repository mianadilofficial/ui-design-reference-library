---
version: alpha
name: First Solar
category: "Energy & Climate"
description: "First Solar corporate site: deep navy #00355f buttons and panels, charcoal #212529 text on white and warm #f1edea bands, Franklin Gothic (URW) condensed headings at 48px with 300-weight body at 16px, HelveticaNowDisplay 68px hero headline, 5px-radius buttons and plant-floor photography."
colors:
  accent-yellow: "#ffc423"
  canvas: "#ffffff"
  canvas-warm: "#f1edea"
  ink: "#212529"
  primary: "#00355f"
  on-primary: "#ffffff"
  ink-olive: "#53534a"
  grey-secondary: "#6c757d"
  primary-hover: "#001d47"
  text-input-text: "#000000"
typography:
  display:
    fontFamily: HelveticaNowDisplay
    fontSize: 68px
    fontWeight: 400
    lineHeight: 81.6px
  display-mobile:
    fontFamily: HelveticaNowDisplay
    fontSize: 32px
    fontWeight: 400
    lineHeight: 38.4px
  heading:
    fontFamily: franklin-gothic-urw-cond, sans-serif
    fontSize: 48px
    fontWeight: 400
    lineHeight: 52.8px
  subheading:
    fontFamily: franklin-gothic-urw-cond, sans-serif
    fontSize: 24px
    fontWeight: 600
    lineHeight: 28.8px
  body:
    fontFamily: franklin-gothic-urw, sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
  button:
    fontFamily: franklin-gothic-urw-cond, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 16px
  input:
    fontFamily: franklin-gothic-urw, sans-serif
    fontSize: 14px
    fontWeight: 300
    lineHeight: 21px
rounded:
  xs: 5px
spacing:
  s1: 1px
  s2: 3px
  s3: 5px
  s4: 6px
  s5: 7.5px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 17px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 20px
    height: 44px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.grey-secondary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 20px
    height: 44px
    borderColor: "{colors.grey-secondary}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.body}"
    padding: 20px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    padding: 5px 20px
    height: 44px
---

## Overview
The measured page is firstsolar.com, titled "Leading global provider of comprehensive PV solar solutions | First Solar". It is an industrial corporate site that leads with people at work. The capture shows a navy header with the round red-orange First Solar logo in a white tile at the left and seven items (Products, Technology, Responsible Solar, Resources, Careers, Investors, About Us) with globe and search icons at the right; a dark photographic hero carousel with sheep grazing under solar panels, the headline "First Solar's 2026 Corporate Responsibility Report" in heavy white type and a yellow-outlined "Read the Report" button with three yellow and grey slide indicators; a warm-grey band introducing "The Case for Depoliticizing Solar" with a navy Read More button; then alternating two-column rows pairing a text block with a photograph of workers in yellow safety aprons and eyewear (Invested in America, Innovative Technology, Responsible Solar), each with a grey Learn More button; and a footer with link columns. Copy is plain and factual, with claims about American manufacturing and CdTe thin film technology.

## Colors
Navy #00355f is the brand color: it fills the primary Read More button (hover #001d47), covers a large area of the page, and colors the nav-link text. Body ink is a dark charcoal #212529, with a secondary olive grey #53534a for some copy, and white (#ffffff) on navy and over photography. Surfaces alternate between white (#ffffff) and a warm light grey, #f1edea, which covers the largest area. Secondary buttons are grey #6c757d (also the measured hairline and border color), and a yellow, #ffc423, appears as the border of the hero's outlined button. The stylesheet also exposes the stock Bootstrap palette (#0d6efd, #198754, #dc3545, #ffc107 and others); those are framework defaults, not First Solar brand colors, and are not used as tokens here. Text input text is plain black #000000.

## Typography
The system uses three faces. The body face is franklin-gothic-urw at weight 300 (a light weight, loaded at 300, 400 and 700 with italics): the body style is 16px with a 24px line height, and the input style is 14px with a 21px line height. Headings and buttons use the condensed cut, franklin-gothic-urw-cond: the heading is 48px with a 52.8px line height, the subheading 24px at weight 600 with a 28.8px line height, and the button label 16px at weight 600 with a 16px line height; the nav items measured 18px in this face. The hero headline uses HelveticaNowDisplay at 68px with an 81.6px line height (32px with a 38.4px line height on a 390px viewport), measured at weight 400. A fourth family, acumin-pro, appears in the stylesheet, and FontAwesome supplies icons. By character count, Franklin Gothic accounts for 1467, the condensed cut for 277 and HelveticaNowDisplay for 49 characters.

Font substitutes: franklin-gothic-urw and its condensed cut are loaded webfonts of a commercial family; the declared fallback is generic `sans-serif`. HelveticaNowDisplay is also a commercial face.

## Layout
The page measured 1280px wide and 2698px tall. The header is 90px high and carries a logo tile 100px wide. Below the hero, content is arranged in two equal columns: the photograph runs full-bleed to the viewport edge and the copy sits in a column with generous left padding; the photographs and text alternate sides between rows. The warm-grey intro band holds a small framed photograph at the left, the 48px heading in the middle, and the button at the right. The footer lists link columns titled Products, About Us, Resources, Quick Links and Follow Us On. Measured paddings are 7.5px, 20px, 8px, 17px, 12px and 5px; buttons use 12px 20px padding. The stylesheet carries Bootstrap variables; a column count was not measured.

## Elevation & Depth
Depth is flat. Colour fields and photography make the hierarchy; the visible buttons carry no shadow in the measurement. The CSS contains Bootstrap focus rings such as `0 0 0 0.25rem rgba(13, 110, 253, 0.25)`, an inset shadow `inset 0 10px 15px -15px rgba(0, 0, 0, 0.5)` and a green ring variant, none of which was recorded on the visible buttons. The hero image is darkened with an overlay so the white headline reads.

## Shapes
Buttons measure a 5px radius and that is the only radius on visible elements (5 elements); the stylesheet also contains 4px, 3px, 4.8px, 3.2px, 16px, 30px and 800px values. Inputs and the header measured 0px. Photographs are rectangular and run edge to edge in two-column rows; one small framed photo uses a diagonal-hatched backdrop at its edge. Slide indicators are short horizontal bars.

## Components
- **Primary button (Read More):** #00355f fill and border, white text, franklin-gothic-urw-cond 16px at weight 600, 12px 20px padding, 44px high, 5px radius; hover fill #001d47.
- **Secondary button (Learn More):** #6c757d fill and border, white text, same type and size, 5px radius.
- **Outlined hero button (Read the Report):** transparent with a #ffc423 border and white text, same type and 5px radius.
- **Header navigation:** white 18px condensed labels on navy, 90px high; nav links measured #00355f on white.
- **Text input:** white fill, black 14px text, 5px 20px padding, 44px high, 300px wide.
- **Feature row:** 48px condensed heading, 16px weight 300 paragraph, one button, one photograph.
- **Carousel:** previous and next arrows at the edges, bar indicators at the bottom left.

## Design System Architecture
No public or official design-system or brand-guideline documentation for First Solar was opened for this entry. The shipped CSS carries Bootstrap variables: the root variables are the standard `--bs-*` set (`--bs-primary` #0d6efd, `--bs-dark` #212529, `--bs-gray` #6c757d), yet the site overrides them for the brand: the visible primary is #00355f and the page text is the Bootstrap dark value #212529. Brand typography comes from the three Franklin Gothic URW and Acumin faces. Measured source: https://www.firstsolar.com/ (extraction of 2026-10-09).

## Do's and Don'ts
- Do use navy #00355f for primary actions and secondary grey #6c757d for lower-priority buttons.
- Do keep headings in the condensed Franklin Gothic and body in the 300-weight face.
- Do alternate white and #f1edea bands and pair every text block with a worker photograph.
- Do keep button corners at 5px.
- Don't use the Bootstrap blue #0d6efd or green; they are framework defaults.
- Don't add shadows to buttons; none were measured.
- Don't set the hero headline in the condensed face; the measured hero headline is HelveticaNowDisplay.

## Responsive Behavior
Only the 390px mobile pass was measured. The hero headline measured 32px with a 38.4px line height and 312px width; the Read More button measured 110px wide and 44px high with the same navy fill; the header measured 90px high and 390px wide; body text kept 16px weight 300 with a 24px line height and 320px width; and the most-read sizes were 16px, 14px, 32px, 13px and 24px. How the two-column rows and the navigation arrange at narrow widths, and where breakpoints are, was not measured.

## Iteration Guide
1. Set the page on white (#ffffff) and #f1edea alternating bands with #212529 text.
2. Make every primary button #00355f, 44px high, 5px radius, with a #001d47 hover.
3. Use franklin-gothic-urw-cond for headings and labels and franklin-gothic-urw at 300 for text.
4. Use HelveticaNowDisplay for the hero headline only, at 68px on desktop and 32px on mobile.
5. Use #ffc423 only as a border on the dark hero button.
6. Fill rows with photographs of staff at work, as the capture does.
