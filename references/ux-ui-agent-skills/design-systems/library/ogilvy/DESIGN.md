---
version: alpha
name: Ogilvy
category: "Agencies & Studios"
description: "Ogilvy agency home page (ogilvy.com): a full-bleed signal red #eb3f43 hero and statement section over a white #ffffff page, black #000000 and #231f20 text, set in two in-house faces, Ogilvy Sans for navigation and Ogilvy Serif for the 60px statement copy. Flat, shadowless, 0px corners with one circular 50% element."
colors:
  canvas: "#eb3f43"
  page-body: "#ffffff"
  page-largest: "#ffffff"
  ink: "#000000"
  primary: "#eb3f43"
  surface-muted: "#efefef"
  ink-body: "#231f20"
  ink-muted: "#999999"
  hairline: "#888888"
typography:
  display:
    fontFamily: "\"Ogilvy Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20px
    textTransform: capitalize
  display-mobile:
    fontFamily: "\"Ogilvy Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 50px
    fontWeight: 400
    lineHeight: 52px
    letterSpacing: "-0.75px"
    textTransform: uppercase
  statement:
    fontFamily: Ogilvy Serif
    fontSize: 60px
    fontWeight: 400
    letterSpacing: "-0.6px"
  body-dominant:
    fontFamily: Ogilvy Serif
    fontSize: 16px
    fontWeight: 400
  input:
    fontFamily: Arial
    fontSize: 12px
    fontWeight: 400
rounded:
  pill: 9999px
spacing:
  s1: 1px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 19px
  s6: 20px
  s7: 32px
  s8: 40px
  s9: 110px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.display}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
  text-input:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    height: 16px
  footer:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink-body}"
    padding: 40px 0px
---

## Overview

Ogilvy's home page (https://www.ogilvy.com/, page title "Ogilvy") presents the agency as a global marketing and advertising company working across advertising, PR, consulting, health and relationship design. The opening screen is a field of signal red (`#eb3f43`) with a wall of small campaign thumbnails in a regular grid and the Ogilvy wordmark set large in white serif letters across the middle. Below, the red fades from white back to red and then holds a single long statement: "People expect more of brands than ever before. They expect brands to go beyond. We innovate and create at the intersections to bring forth the best possible growth solutions for our clients. Ogilvy inspires brands and people to impact the world."

The look is typographic and flat. There are no shadows, no card containers and no filled button in the measured data. Color is used in two large blocks: red and white. Imagery supplies all the other color through the campaign thumbnails, so the interface itself stays out of the way. The copy voice, from the pages opened, is confident and forward-looking; campaign titles such as "The Search for Cena", "Could This Be Perimenopause?" and "Wipe Me Into the Trash" are playful. The header navigation reads Work, About, Team, Ideas, Careers and Contact.

## Colors

- **Canvas `#eb3f43`**: the hero and statement background. It carries 2112 of the measured background area units, against 5338 for white. The page-background pixel check agrees that red is what the viewer sees first. The same value is the root selection color (`--selection-color: rgba(235,63,67,0.5)`), so text selection uses a 50% tint of the brand red.
- **Primary `#eb3f43`**: the same red, also the color of the measured link element and of 28 characters of text.
- **Page body `#ffffff`**: the body background; it is also the largest background area and the text color on the red (2986 characters are white, the most of any color).
- **Ink `#000000`**: navigation and UI text (438 characters). **Ink-body `#231f20`** is the paragraph color (748 characters) and the footer text color. **Ink-muted `#999999`** appears on 15 characters. **Hairline `#888888`** is the only border color measured (2 occurrences). **Surface-muted `#efefef`** is a single light grey area.

On hover the navigation links change their text and border color from `#000000` to `#ffffff` with a transparent background, which suits their position over the red hero. No other hover change was recorded.

## Typography

Ogilvy uses two proprietary families, loaded as web fonts: **Ogilvy Sans** (normal and bold) and **Ogilvy Serif** (normal and italic). By characters Ogilvy Serif is dominant (3288 against 927), consistent with the capture where the large statement and wordmark are serif.

- **Display (navigation):** Ogilvy Sans 16px, weight 400, line-height 20px, capitalized. The body element itself is 16px with a 24px line-height and the stack `"Ogilvy Sans", "Helvetica Neue", Helvetica, Arial, sans-serif`.
- **Statement:** 60px, weight 400 with letter spacing -0.6px (measured as "60px/-0.6px" on 298 characters, the only letter-spacing recorded). The font family for this size is taken from the serif dominance in the capture.
- **Body:** Ogilvy Serif 16px, weight 400.
- **Input:** Arial 12px, weight 400 (a form-control default family, used by the newsletter input).
- **Mobile display:** at 390px the first heading-like link "WORK" is Ogilvy Sans 50px, weight 400, line-height 52px, letter spacing -0.75px, uppercase. A 30px size also appears among mobile text sizes (53 characters).

Weights seen are 400 (4117 characters) and 700 (98 characters). Sizes by characters: 16px (3850), 60px (298), 15.44px (52), 22px (15).

## Layout

The page is long: 12603px of scroll height at 1280px wide. The hero is a regular grid of thumbnails, six columns by four rows in the capture, with the wordmark overlapping the center. Text sections are left-aligned with a wide margin; the statement block starts well inside the page edge. Measured paddings are 8px (9 elements), 32px (5), 10px (3), 177.6px (2), 110px, 40px, 19px, 1px and 6px; gaps are 20px (2). The footer has 40px vertical padding. The header is a single row with the five navigation links at the left and Contact at the right, and the Ogilvy name as the first header item.

## Elevation & Depth

No box shadows were measured (`boxShadows` is empty). Depth comes from color blocking alone: a red field, a white-to-red gradient transition between sections, and image thumbnails sitting directly on the red. There are no cards, drop shadows or blurred layers.

## Shapes

The only rounding measured is a single 50% radius (one element, a circle), declared as the pill token. Everything else, including the navigation links, input and footer, computes to 0px. Thumbnails in the capture are sharp-cornered rectangles.

## Components

- **Nav link:** Ogilvy Sans 16px capitalized, ink `#000000`, transparent background, 8px padding on most sides (padding "8px 8px 8px 0px" on Work), 36px tall; turns white on hover.
- **Link:** `#eb3f43` at 16px with a 24px line-height; one measured link carries the brand red.
- **Text input:** white background, black text, Arial 12px, 0px radius, 16px tall; used for the subscribe prompt "Subscribe to stay up to date with our latest thinking".
- **Footer:** white background, `#231f20` text, 40px vertical padding; contains Privacy Policy, Cookies, Subscribe, Sitemap, social links to X, Facebook, Instagram and LinkedIn, and a list of country-specific Ogilvy sites.
- **Campaign thumbnails:** image tiles in the hero grid. A consent pop-up ("feed-crm-pop_wrapper-new") was present and was hidden by the extractor; it is not part of the brand UI.

## Design System Architecture

No public design system or brand guidelines are linked from the Ogilvy home page; WebFetch of https://www.ogilvy.com/ showed only privacy and cookies links in the footer and no brand-guideline link, although the fetch covered the first 100000 of 104616 characters. The de-facto system is small: two custom typefaces, a red and a white surface, three text colors, and root custom properties limited to `--selection-color` and `--work-scroll-opacity` (value 1, a scroll-driven animation variable). Class names seen in the consent pop-up (`feed-crm-pop_wrapper-new connect-crm-wrap-new`) belong to a third-party feed widget.

## Do's and Don'ts

- Do keep the page to red `#eb3f43` and white `#ffffff` fields with black and `#231f20` text.
- Do set long statements in the serif at 60px with -0.6px letter spacing.
- Do let campaign imagery provide color; the interface chrome stays flat.
- Do keep corners at 0px; the one circular element is the only exception measured.
- Don't add shadows or card containers; none exist in the measurement.
- Don't use the third-party consent pop-up styling as brand UI.
- Don't use the Arial input family for headings; it is a form-control face only.

## Responsive Behavior

Measured at 390px: the first heading-like link is Ogilvy Sans 50px uppercase with letter spacing -0.75px; the header text is 16px with 37px vertical padding and is coloured `#eb3f43`; its text includes "Drop-Down Menu", "WORK", "ABOUT" and "CAREERS", so a drop-down menu exists at that width. Paragraph text stays 16px with a 20px line-height. Mobile text sizes by character are 16px (619), 15px (242), 30px (53), 13.6px (52) and 50px (23). Breakpoint values were not read from the stylesheet and tablet widths were not measured.

## Iteration Guide

1. Choose the field first: red `#eb3f43` for opening and statement sections, white for content.
2. Set statements in Ogilvy Serif at 60px and -0.6px letter spacing; navigation in Ogilvy Sans 16px.
3. Keep corners square and avoid shadows.
4. Use `#231f20` for paragraphs and `#000000` for navigation text; reverse to white on red.
5. Add any new value only after measuring it and recording it in SOURCES.json.
