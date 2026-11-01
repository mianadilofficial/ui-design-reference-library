---
version: alpha
name: Kaiser Permanente
category: "Healthcare & Wellness"
description: "Kaiser Permanente member front door (healthy.kaiserpermanente.org/front-door): deep navy header bands (#0d1c3d, #003b71) over a light grey page (#f7f7f7) and white cards, Gotham 5r headings and Gotham 4r body at 16px, outlined 100px-radius pill buttons with a pale blue fill (#e6f2f7) and a #0074ad link blue. Cards use a 4px radius with a 0.04-alpha 20px shadow."
colors:
  canvas: "#ffffff"
  page-largest: "#f7f7f7"
  ink: "#000000"
  primary: "#003b71"
  navy-deep: "#0d1c3d"
  link-blue: "#0074ad"
  pill-border: "#0078b3"
  surface-tint: "#e6f2f7"
  nav-bg: "#000000b3"
  input-border: "#878f9b"
  card-border: "#0000001a"
typography:
  display:
    fontFamily: "\"Gotham 5r\""
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
    letterSpacing: "-0.2px"
  display-mobile:
    fontFamily: "\"Gotham 5r\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  heading:
    fontFamily: "\"Gotham 5r\""
    fontSize: 32px
    fontWeight: 400
    lineHeight: 40px
    letterSpacing: "-0.64px"
  subheading:
    fontFamily: "\"Gotham 5r\""
    fontSize: 26px
    fontWeight: 400
    lineHeight: 32px
    letterSpacing: "-0.26px"
  body:
    fontFamily: "\"Gotham 4r\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.16px
  nav:
    fontFamily: "\"Gotham 4r\", Verdana"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 21.28px
  link:
    fontFamily: "\"Gotham 4r\", Verdana"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 2px
  sm: 4px
  md: 5px
  lg: 6px
  xl: 12px
  2xl: 16px
  3xl: 100px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 10px
  s4: 11px
  s5: 12px
  s6: 12.8px
  s7: 14px
  s8: 15px
  s9: 16px
  s10: 17.2px
components:
  button-primary:
    backgroundColor: "{colors.surface-tint}"
    textColor: "{colors.primary}"
    typography: "{typography.body}"
    rounded: "{rounded.3xl}"
    padding: 11px 15px
    height: 48px
    borderColor: "{colors.link-blue}"
  link:
    textColor: "{colors.link-blue}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.navy-deep}"
    typography: "{typography.nav}"
    rounded: "{rounded.sm}"
    padding: 10px 45px 10px 16px
    height: 44px
    borderColor: "{colors.input-border}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.sm}"
    padding: 34.4px 20px 22.4px 32px
    borderColor: "{colors.card-border}"
    boxShadow: rgba(0, 0, 0, 0.04) 0px 4px 20px 0px
  footer:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
---

## Overview

The queued address `https://www.kaiserpermanente.org` redirects to `https://healthy.kaiserpermanente.org/front-door` (title "Custom Care & Coverage Just For You | Kaiser Permanente", language `en-US`), and that front-door page is what was measured: the logged-out home for members and prospects of the health plan and care provider. It is 6098px tall with 1532 visible elements and is organized as a utility strip, a branded header, a scam notice, a photographic hero with a floating suggestion card, a feature block, a "More resources" card row and a rich footer.

The tone is reassuring, plain and service-oriented. Headlines are short and task-based ("Get care on your schedule", "Today's suggestions:", "More resources", "Health conditions from A to Z"), copy is written at a conversational level ("Explore our virtual care options. Video visits, online prescription refills, and 24/7 phone advice can make it easier to manage your health."), and calls to action name the task ("Learn more about virtual care", "Shop plans", "Mental health services", "COVID-19 vaccine", "Medicaid renewal"). Photography is warm and documentary: people at ease at home with headphones, a video visit with a clinician on a phone, cooking, two men talking, a couple at a laptop. Cards below the hero use small category labels ("Health & wellness", "Mental health", "Learn") above a Gotham heading.

The top of the page carries a pink-tinted safety notice: "Look out for scams impersonating Kaiser Permanente. Don't click suspicious links or share personal, financial, or medical information." A small blue "Website Feedback" tab floats over the suggestion card; it is a site feedback widget and is not treated as brand UI in this document.

## Colors

- **Canvas `#ffffff`** (area 2208) is the card and body white; **page-largest `#f7f7f7`** (area 3268) is the largest background, the light grey that separates cards.
- **Primary `#003b71`**: the brand navy. It is the text color of the pill buttons and card headings ("Today's suggestions:" is measured at `#003b71`), and the second dark band color (area 1299).
- **Navy deep `#0d1c3d`**: a dark navy fill (area 1404 for the dark fill), also the text color in the search input and the third most-read text color (615 characters).
- **Link blue `#0074ad`**: link and secondary-button border color (177 characters of text weight), and the hover surface of the skip link.
- **Pill border `#0078b3`**: the border of the "Today's suggestions" pills (10 measured occurrences).
- **Surface tint `#e6f2f7`**: the pale blue fill of the "Sign In" pill. Other pills measure `#f0f7fa` and `#f2f8fb` fills; a pink-tinted `#fbf5f4` fills the scam notice (area 74).
- **Ink `#000000`**: body text on light (1735 characters); white text on the navy bands is the most frequent (1927).
- **Nav background `#000000b3`**: the black at 70% opacity behind the utility strip's text, **input border `#878f9b`** and **card border `#0000001a`** are the neutral lines.

The measured "Website Feedback" tab color `#006ba6` belongs to the feedback widget and is not part of the palette here.

## Typography

Kaiser Permanente sets everything in the **Gotham** family: "Gotham 5r" (800 characters; headings, card titles, footer headings) and "Gotham 4r" (4131 characters; body, nav, buttons, links, inputs). Both load at weight 400, with Verdana as the fallback on nav, link and input text. The hierarchy is by family file, not by font-weight.

- Heading: 32px, line-height 40px, letter-spacing -0.64px ("More resources").
- Subheading: 26px, line-height 32px, letter-spacing -0.26px ("Health conditions from A to Z").
- Display (the h1-role "Today's suggestions:"): 20px, line-height 28px, letter-spacing -0.2px, color `#003b71`; on the 390px pass the same element measures 16px with line-height 24px.
- Body: 16px, line-height 24px, letter-spacing 0.16px.
- Nav: 16px, line-height 21.28px; link: 13px, line-height 20px ("Look out for scams").

The desktop size ladder is 16px (2757 characters), 14px (1300), 20px, 13px, 26px, 32px and 12px. On mobile the ladder is dominated by 14px (1818) and 13px (1398), then 16px, 20px, 26px, 12px and 18px.

Font substitutes: Gotham is proprietary; only `Verdana` was measured as a declared fallback.

## Layout

The grid root variable `--dsAemGrid-currentLayoutWidth` is 1440px, at a measured 1280px viewport. Header: a utility strip (Region selector "Choose your region", Language "English", "Support Center", and "Brokers", "Employers" and "Help paying your bills" external links), then a navy band with the white wordmark and the "Register" and "Sign In" pills, then a nav row ("Learn", "Shop Plans", "Doctors & Locations", "Health & Wellness", "Get Care", "Pay Bills") with a wide search field ("Explore topics, care, coverage") and a "Search" pill button.

Content: a left-aligned hero photograph that spans about three quarters of the width with a white suggestion card overlapping its right edge; a second feature block with the photo on the right and a white text card overlapping from the left; a grey band for "More resources"; and a four-column card row with image-top cards. Spacing values measured include 2px, 4px, 10px, 11px, 12px, 12.8px, 14px, 15px, 16px and 17.2px; the suggestion card pads 34.4px 20px 22.4px 32px.

## Elevation & Depth

Cards use the one measured shadow, `rgba(0, 0, 0, 0.04) 0px 4px 20px 0px` (8 elements), together with a 1px `#0000001a` border. Depth is also created by overlapping a white card on a photograph. The header navy bands are flat fills. No other shadows were measured.

## Shapes

Measured radii: 2px (59 elements; links, small controls), 100px (14; pill buttons), 4px (5; cards and inputs), 12px (4), 5px (2), 50% (2; circular icons), 16px, 6px 6px 0 0 and a skip link with `2px 2px 12px`. The identity is therefore pill buttons against lightly rounded 4px cards and square photographs.

## Components

- **Pill button (primary action)**: `#e6f2f7` fill, `#003b71` label in Gotham 4r 16px, 1px `#0074ad` border, padding 11px 15px, 48px tall, 100px radius ("Sign In"). Hover on the outlined "Register" pill changes the fill from `rgb(13, 28, 61)` to `rgb(146, 204, 240)`, the label to `rgb(0, 59, 113)`, the border to `rgb(146, 204, 240)` and underlines the label (measured).
- **Suggestion chips**: pills with `#f0f7fa` fill, `#003b71` text and 1px `#0078b3` border ("Shop plans", "New member", "Mental health services", "Pharmacy", "COVID-19 vaccine", "Medicaid renewal", "Community Health").
- **Region / language selector**: outlined white-on-navy buttons, 5px radius, 1px white border, Gotham 5r 14px.
- **Search field**: white input, `#0d1c3d` 16px text, 1px `#878f9b` border, 4px radius, 44px tall, padding 10px 45px 10px 16px.
- **Card**: white, 1px `#0000001a` border, 4px radius, the shadow above; category label, Gotham heading, short paragraph.
- **Links**: `#0074ad`, 13px; external links carry an arrow-out icon.
- **Scam notice**: pale pink `#fbf5f4` strip with an info icon.

## Design System Architecture

No public design-system site or brand-guideline page was linked from the pages opened. The page markup does expose a component layer: elements carry `data-ds-theme="vessel"` (5), `data-ds-variant` values "basic" (3) and "windowed" (2), `data-ds-version` values 1 and 2, `ds-` class names (for example `ds-skip-link`, `ds-carousel`, `ds-kpfooter`, `ds-linksmegamenucol`) and the grid variable `--dsAemGrid-currentLayoutWidth: 1440px`. The root also contains `--marketo-form-*` variables for embedded forms. The markup therefore shows themed, versioned components expressed through attributes rather than named color variables; the palette itself lives in compiled CSS, with only layout variables in the root.

## Do's and Don'ts

Do:
- Use Gotham 5r for headings and Gotham 4r for body; keep weight 400 and change the family file for emphasis.
- Use pill buttons (100px radius) with navy text and a blue outline, and 4px radius for cards and inputs.
- Overlap a white card on a photograph to introduce a block.
- Keep the shadow at 0.04 alpha, 20px blur.

Don't:
- Do not use the feedback widget blue `#006ba6` as a brand color.
- Do not use heavy shadows or saturated fills; navy is for bands and text.
- Do not set Gotham in bold weights; the measured weights are all 400.

## Responsive Behavior

Measured on the 390px mobile pass: the h1-role "Today's suggestions:" drops from 20px to 16px (line-height 24px); body stays 16px; the "Website Feedback" widget stays 12px; the size ladder becomes 14px, 13px, 16px, 20px, 26px, 12px and 18px. Navigation collapse, card stacking and breakpoints were not measured.

## Iteration Guide

1. Grey `#f7f7f7` page, white cards, navy `#0d1c3d` header band with a white wordmark.
2. Gotham 5r headings, Gotham 4r 16px body, `#003b71` headline color.
3. Pill buttons: `#e6f2f7` fill, `#003b71` label, 1px `#0074ad` border, 100px radius, 48px tall.
4. Cards: 4px radius, 1px `#0000001a` border, 0.04-alpha shadow, category label above the heading.
5. Use warm, documentary photography; verify with `node web/scripts/verify-designs.mjs --slug=kaiser-permanente`.
