---
version: alpha
name: "Mount Sinai Health System"
category: "Healthcare & Wellness"
description: "Mount Sinai Health System (New York City) home page measured live: Mount Sinai Sans in weights 100 to 900, a cyan #00a6e5 navigation bar, a #0081b2 care band with white buttons labelled in #27a9e1, a magenta #d73e98 hover, square corners and a #3f4246 footer."
colors:
  canvas: "#eeeeee"
  page-largest: "#ffffff"
  ink: "#000000"
  primary: "#ffffff"
  on-primary: "#27a9e1"
  surface-2: "#3f4246"
  surface-3: "#f2f2f2"
  ink-4: "#00a6e5"
  ink-5: "#999999"
  ink-6: "#666666"
  hairline: "#cccccc"
  brand-blue: "#0081b2"
  on-primary-hover: "#d73e98"
typography:
  display:
    fontFamily: "\"Mount Sinai Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 27.04px
    fontWeight: 200
    lineHeight: 32.448px
  display-mobile:
    fontFamily: "\"Mount Sinai Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 20.8px
    fontWeight: 200
    lineHeight: 24.96px
  heading:
    fontFamily: "\"Mount Sinai Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 30px
    fontWeight: 700
    lineHeight: 36px
  subheading:
    fontFamily: "\"Mount Sinai Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 24px
    fontWeight: 300
    lineHeight: 28.8px
  body:
    fontFamily: "\"Mount Sinai Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 19.2px
  button:
    fontFamily: "\"Mount Sinai Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14.4px
    fontWeight: 700
    lineHeight: 20px
  nav:
    fontFamily: "\"Mount Sinai Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 4px
  sm: 5px
  md: 50px
  none: 0px
  pill: 9999px
spacing:
  s1: 3px
  s2: 5px
  s3: 8px
  s4: 10px
  s5: 15px
  s6: 16px
  s7: 20px
  s8: 25px
  s9: 25.59px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 10px 5px
    height: 44px
    borderColor: "{colors.page-largest}"
  button-primary-hover:
    textColor: "{colors.on-primary-hover}"
  button-secondary:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 10px 5px
    height: 44px
    borderColor: "{colors.page-largest}"
  link:
    textColor: "{colors.page-largest}"
    typography: "{typography.display}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.ink-4}"
    textColor: "{colors.page-largest}"
    rounded: "{rounded.none}"
    boxShadow: rgba(0, 0, 0, 0.3) 0px 0px 5px 0px
  nav-link:
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  card:
    textColor: "{colors.page-largest}"
    rounded: "{rounded.pill}"
    borderColor: "{colors.page-largest}"
  footer:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.page-largest}"
    rounded: "{rounded.none}"
    padding: 30px 0px 0px
---

# Mount Sinai Health System

## Overview

This system was measured from the live home page of the Mount Sinai Health System, the New York City hospital network, at mountsinai.org. The page title reads "Mount Sinai Health System - New York City | Mount Sinai - New York". It is a task-first healthcare portal. Directly under a white header and a cyan navigation bar sit a photographic carousel and a saturated blue band of three service tiles: "Get Care Now", "Book Online" and "MyMountSinai® App". Under them a large phone number, "Call us at 1-800-MD-SINAI", announces the call line, and then a white "Find a Doctor" panel with three search fields (specialty, condition or doctor; insurance; zip code or current location) and a Search button. Further down come a New York skyline photograph with a "Choose a Location" box, a grey section with a services list, and a row of press-release cards.

The voice is plain and directive. Section labels are short imperative or noun phrases such as "Find a Doctor", "Our Locations", "Patient Care" and "About Us" in the navigation, and buttons say "See Care Options", "Book an Appointment" and "Download Our App". Images are documentary: clinicians at work, a smiling patient with a physician, laboratory benches and the Manhattan skyline. There is no illustration system on the page.

The visual signature is the combination of a cyan-to-teal blue field, white rectangular buttons with blue labels, and thin light weights of a single custom sans-serif, Mount Sinai Sans, which is the dominant font (measured on 8,390 characters, against 23 for Arial). Corners are square in nearly every control; the only rounded elements measured are small circular icon and carousel controls (50%), a 4px input radius and a 50px radius on one element.

## Colors

The page background that the viewer sees is white, #ffffff (`page-largest`), with a light grey #eeeeee (`canvas`) used as the body background behind the services and news area. The grey #f2f2f2 (`surface-3`) is a further panel tone. The dark grey #3f4246 (`surface-2`) is the footer background, which also carries white text.

The two blues carry the brand. #00a6e5 (`ink-4`) is the background of the main navigation bar and of the mobile navigation bar, and also appears as a text color for links on 199 measured characters. #0081b2 (`brand-blue`) is the larger band behind the three care tiles and the phone number; it is measured at an area weight of 518, and on mobile it is the text color of the "Call us at 1-800-MD-SINAI" heading. A lighter blue, #27a9e1 (`on-primary`), is the label color of the white buttons and the most common colored text on the page (1,572 characters), used for link lists such as "Cancer", "Neurosurgery" and "View All of Our Services".

The hover color is a magenta, #d73e98 (`on-primary-hover`): the label of "See Care Options" changes from #27a9e1 to #d73e98 on hover; the carousel arrows in the capture are also magenta, though that element's color was not separately measured. Body copy is black #000000 (`ink`), with greys #999999 (`ink-5`) for placeholder-like text and #666666 (`ink-6`) for secondary text, and #cccccc (`hairline`) for 1px borders on fields and dividers.

Because the primary button is white with a blue label, `primary` is #ffffff and `on-primary` is #27a9e1; the extractor measured that button as the main call to action. White text (3,896 characters) is used heavily on the blue bands and over photography, so the large majority of reading happens on either a blue field with white letters or a white field with black letters.

## Typography

One family does almost all the work: "Mount Sinai Sans", with the fallback stack "Helvetica Neue", Helvetica, Arial, sans-serif. The loaded font list shows it as a variable face covering weights 100 to 900 in normal and italic, together with FontAwesome and Font Awesome 6 Brands for icons. The weights actually used by character count are 100 (3,261), 400 (2,646), 200 (1,808), 500 (413), 700 (223) and 300 (84), so the page leans on very thin weights for display copy and 400 for reading.

Measured roles at desktop width (1280px):
- `display`: the h1 "Find a Doctor, and Schedule Online" at 27.04px, weight 200, line-height 32.448px, white.
- `heading`: the h2 "Call us at 1-800-MD-SINAI" at 30px, weight 700, line-height 36px.
- `subheading`: the h3 "Approximately 48,000 Employees" at 24px, weight 300, line-height 28.8px.
- `body`: paragraph text at 16px, weight 400, line-height 19.2px.
- `button`: 14.4px, weight 700, line-height 20px.
- `nav`: navigation links at 18px, weight 400, line-height 20px.

The most used size by character count is 16px (2,636 characters), followed by 14.4px (2,410) and 15.84px (2,122). Larger sizes are rare: 27.04px (302), 20.8px (86), 24px (67), 45px (40) and 30px (25). The hierarchy is therefore carried less by size than by weight and color: thin 200 headings in white on photography, bold 700 for the phone number and the "Find a Doctor" panel title, and small bold button labels. Letter-spacing is normal in every measured role. No text-transform is applied; labels are in sentence or title case.

Mount Sinai Sans is a proprietary face. A reader without the font receives the declared fallbacks Helvetica Neue, Helvetica or Arial; the thin 100 and 200 weights will not exist in those and the display lines will render heavier.

## Layout

The page is a vertical stack of full-width bands inside a content column. The measured page width is 1280px with a scroll height of 4,444px. The body carries 128px of top padding, which is the height of the fixed header and navigation block. The header holds a logo at left (a magenta-and-blue multi-line peak mark with the words "Mount Sinai") and a row of utility links at right: 1-800-MD-SINAI, MyMountSinai (MyChart), Check Symptoms & Get Care, Pay My Bill, For Physicians, Icahn School of Medicine and Make a Gift.

Below it the navigation bar is a cyan strip divided into five equal cells by thin vertical rules: Find a Doctor, Our Locations, Patient Care, About Us and a search cell with an icon. The hero carousel runs edge to edge, then the blue band holds three columns separated by thin vertical dividers. The "Find a Doctor" panel is a white box centred over the transition between the blue band and the skyline photograph, so the panel overlaps two backgrounds. The news row is three white cards offset over the grey section.

Spacing values measured as paddings, by weight, are 15px (96), 40px (64), 3px (60), 5px (33), 10px and 20px (25 each) and 25px (12). The spacing tokens `s1` to `s10` in the frontmatter list the measured scale: 3, 5, 8, 10, 15, 16, 20, 25, 25.59 and 30px. Density is moderate: generous white space inside the blue tiles, tight link lists in the services panel with hairline dividers between rows.

## Elevation & Depth

Depth is almost absent. Two box shadows were measured on the whole page. The navigation bar carries rgba(0, 0, 0, 0.3) 0px 0px 5px 0px, a faint all-round shadow that separates it from the carousel below. A second shadow, rgba(1, 1, 1, 0.35) 1px 4px 15px 0px, was measured once on another element. Cards and the white Find a Doctor panel are separated from their background by color contrast and overlap rather than by shadow. Borders are 1px or 2px lines: #cccccc on fields, white 2px borders on the white buttons (so the border is invisible against the fill), and one #adadad line.

## Shapes

Square is the default. The `button-primary`, `button-secondary`, navigation, link and footer components all compute a radius of 0px (`rounded.none`). The measured radius frequencies are 50% on 19 elements, 4px on two, and one each of 50px and 5px; the 50% elements are circular controls such as the carousel arrows, the accessibility button and the chat launcher. The `rounded` tokens `xs` (4px), `sm` (5px), `md` (50px) and `pill` (9999px) record those values. The card token inherits the pill value because the extractor's card candidate was a circular element; the visible white news cards in the capture have square corners, so treat the card rounding as not a reliable shape rule.

## Components

**Primary button** (`button-primary`): white background (`page-largest`), label in #27a9e1 (`on-primary`), 14.4px weight 700 (`button`), padding 10px 5px, height 44px, a 2px white border and 0px radius. In the capture it sits full-width inside each blue tile. Hover changes only the label color to #d73e98 (`button-primary-hover`).

**Secondary button** (`button-secondary`): measured with the same white fill, blue label, 44px height and 0px radius ("Book an Appointment"). On this page the primary and secondary buttons are visually identical; hierarchy comes from position, not styling.

**Navigation** (`nav`, `nav-link`): a #00a6e5 bar with white labels at weight 500 and 16px; the `nav-link` token records the 18px weight 400 link style measured in #27a9e1 elsewhere on the page. The bar carries the 5px soft shadow.

**Link**: white text in the display style over photography, such as the carousel caption "Saving Lives Through Research".

**Footer**: #3f4246 background, white text at 15px with weight 100, 30px top padding, 0px radius. It begins with social links (LinkedIn, Facebook, X, YouTube).

**Card**: the white news cards carry a "Press Release" label, a headline in black, a date such as "Oct 08, 2026" and a "View All Press Releases" link in blue.

Third-party widgets on the page are not brand components and are not tokenized: a Google Translate language selector in the header, an accessibility-menu launcher at left and a round chat launcher labelled "How can I help?" at right. The language select was also the element the extractor picked as the text input, so the generated input tokens were dropped; the real search fields in the Find a Doctor panel were not measured separately.

## Design System Architecture

No public design system or brand-guideline page was found linked from the home page, and none was opened for this document. The de-facto system is visible in the shipped CSS. The root custom properties measured on the page are prefixed `--yxt-`, which belong to a third-party search widget embedded on the site (for example `--yxt-color-text-primary: #212121` and `--yxt-standard-card-link-color: #0f70f0`); these are not Mount Sinai tokens and no color from them is used here. The brand layer is plain CSS: a single variable font, Mount Sinai Sans, referenced by name, and Font Awesome icon fonts for glyphs. Pages are served at https://www.mountsinai.org/. Research record: only the home page itself was opened.

## Do's and Don'ts

Do use Mount Sinai Sans in thin weights (200) for display lines placed over photography and white, and weight 700 for the phone number and panel titles.

Do keep buttons rectangular with 0px radius, white fill and a #27a9e1 label, and give them a 44px height.

Do use #00a6e5 for the navigation bar and #0081b2 for the care band, and reserve the magenta #d73e98 for hover and carousel accents.

Do lead with the action: find a doctor, book, call, download the app, in that order of prominence.

Don't round the buttons or add shadows to cards; the only measured shadow on a component is the 5px nav shadow.

Don't tokenize the Google Translate selector, the accessibility launcher, the chat bubble or the `--yxt-` variables as brand UI.

Don't set body copy in weights lighter than 400 on white; the thin weights are measured only on large white-on-image text and the footer.

## Responsive Behavior

Only the 390px mobile pass was recorded. In it the h1 "Find a Doctor, and Schedule Online" is 20.8px at weight 200 with line-height 24.96px and 30px horizontal padding (`display-mobile`); the h2 is 20px, weight 700, #0081b2; paragraph text is 16px at weight 200; and the navigation block renders on a #00a6e5 background with a 27.2px toggle label ("Toggle navigation", "Toggle search"). Mobile character counts by size are led by 16px (3,110) and 15.84px (2,122). Breakpoint values, column counts, card layout and any other mobile arrangement were not measured.

## Iteration Guide

1. Start from the tokens: `canvas` #eeeeee, `page-largest` #ffffff, `ink` #000000, `primary` #ffffff with `on-primary` #27a9e1, and the blues #00a6e5 and #0081b2.
2. Set all text in Mount Sinai Sans or the declared fallbacks; pick weight 200 for large display, 400 for body, 700 for buttons and the phone number.
3. Build the band order: header, cyan navigation, hero, blue three-tile care band, phone number, find-a-doctor panel, location photo, services, press cards, dark footer.
4. Keep radii at 0px except circular controls.
5. Verify by running `node web/scripts/verify-designs.mjs --slug=mount-sinai` after any edit, and re-measure with the extractor if the live page changes.
6. When a value is not in the frontmatter or in `web/data/extracted/mount-sinai.json`, leave it out rather than estimating.
