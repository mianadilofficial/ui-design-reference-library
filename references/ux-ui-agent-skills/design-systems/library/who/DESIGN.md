---
version: alpha
name: "World Health Organization (WHO)"
category: "Government & Nonprofit"
description: "WHO public site: navy #00205c Noto Sans bold on white and #f6f7f9 grey, 50px hero headline on a translucent navy plate, 18px card titles, square-cornered 40px buttons, 4px-radius cards and a #0c2b64 footer; documentary photography, no shadows."
colors:
  canvas: "#ffffff"
  page-body: "#f6f7f9"
  ink: "#00205c"
  primary: "#2a4577"
  on-primary: "#ffffff"
  surface-3: "#edeff3"
  ink-3: "#092862"
  ink-4: "#3c4245"
  ink-5: "#f9fafb"
  nav-link-bg: "#274375"
  footer-bg: "#0c2b64"
typography:
  display:
    fontFamily: "\"Noto Sans\", Arial, Helvetica, sans-serif"
    fontSize: 50px
    fontWeight: 700
    lineHeight: 80px
  display-mobile:
    fontFamily: "\"Noto Sans\", Arial, Helvetica, sans-serif"
    fontSize: 25px
    fontWeight: 700
    lineHeight: 28px
  heading:
    fontFamily: "\"Noto Sans\", Arial, Helvetica, sans-serif"
    fontSize: 26px
    fontWeight: 700
    lineHeight: 52px
  subheading:
    fontFamily: "\"Noto Sans\", Arial, Helvetica, sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 20px
  button:
    fontFamily: "\"Noto Sans\", Arial, Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 16px
  nav:
    fontFamily: "\"Noto Sans\", Arial, Helvetica, sans-serif"
    fontSize: 15px
    fontWeight: 700
    lineHeight: 18px
  link:
    fontFamily: "\"Noto Sans\", Arial, Helvetica, sans-serif"
    fontSize: 22.4px
    fontWeight: 700
    lineHeight: 16px
  input:
    fontFamily: Arial
    fontSize: 15px
    fontWeight: 400
rounded:
  xs: 4px
  none: 0px
spacing:
  s1: 4px
  s2: 5px
  s3: 8px
  s4: 10px
  s5: 10.4px
  s6: 13px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 10px 30px
    height: 40px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 10px 30px
    height: 40px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
    padding: 10px 30px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  nav-link:
    backgroundColor: "{colors.nav-link-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 15px 20px 15px 16px
  text-input:
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 0px 24px
    height: 48px
  card:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.ink-3}"
    rounded: "{rounded.xs}"
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
---

# World Health Organization (WHO)

## Overview

who.int is the public website of the World Health Organization, and its homepage is a news-and-topics hub on a white and pale grey page with navy navigation. The measured page is 4225px tall at 1280px wide. A slim dark-blue utility strip (Global, Regions, search, "Select language") sits above a white row with the WHO logo and a Donate button, then a navy primary navigation bar (Health Topics, Countries, Newsroom, Emergencies, Data, About WHO) and a full-width photographic hero with the headline "World Mental Health Day" on a translucent navy plate and a "Read more" button. Below are four-column card rows: Latest news, Latest on emergencies, Highlights, then Invest in WHO, Publications, Videos, Speeches, Campaigns and Events.

The design is institutional and legible: one family (Noto Sans) in bold for almost everything, navy `#00205c` as the text and brand color, and documentary photography of health workers and patients. There is almost no decoration; cards are flat grey panels with a navy rule under the image.

## Colors

- `canvas` `#ffffff` is the main background (5435 area units) and `page-body` `#f6f7f9` is the pale grey used for card and band backgrounds (2190); `surface-3` `#edeff3` is a slightly darker grey panel (955).
- `ink` `#00205c` (WHO navy) is the main text color, 861 measured characters. `ink-3` `#092862` colors section headings such as "Latest news" (386 characters). `ink-4` `#3c4245` is a grey used for the emergencies card titles (142), and `ink-5` `#f9fafb` a near-white used on dark panels.
- `primary` `#2a4577` is the fill of the measured "Report misconduct" button, with white `on-primary` text. `nav-link-bg` `#274375` is the utility strip and nav link background; `footer-bg` `#0c2b64` is the footer and dark band fill. The hero headline plate is `#00205cd9` (navy at 85%).
- On hover the utility links switch from `rgb(39, 67, 117)` to `rgb(0, 120, 212)` (`#0078d4`).
- The yellow Donate button in the capture did not surface as a measured background color in the extraction, so it is not tokenised here.

## Typography

Noto Sans is the only family by character count (1844 characters), with weights 700 (1310 characters), 400 (526) and 900 (8). The display role is 50px at weight 700 with an 80px line height (the hero headline; 25px with a 28px line height on the measured mobile pass). Section headings such as "Latest news" are 26px bold with a 52px line height (20px on mobile). Card titles and the news snippet text are 18px bold with a 20px line height for subheads and 27px for the news body role, and 18px is the dominant size (1074 characters), followed by 16px (336, the button size with a 16px line height), 14px (240, the date and category line) and 26px (116). Navigation is 15px bold with an 18px line height; the footer headings are 24px bold with a 48px line height. Form input text is Arial at 15px. Font Awesome 5 Free (weight 900) supplies icons. Noto Sans is an open font and needs no substitute.

## Layout

The page is built on a four-column grid of equal cards inside a margin of about 22px at the left of the capture (not measured as a token). The nav bar is 48px high per link with padding 15px 20px 15px 16px. The hero spans the full width with its headline plate (padding 5px 15px, 90px high) centred over the photograph, and a credits strip at the lower right. Section headers are a bold navy title at left with an "All →" link at right over a thin grey rule. Cards show a photo, a small date and "News release" line, then a bold title. The copy voice is plain and imperative, and headlines state the news directly, for example "WHO issues first global guidelines on child and adolescent obesity". Spacing values measured include 4px, 5px, 8px, 10px, 10.4px, 13px, 15px, 16px, 20px and 24px. The footer is a 622px navy block with the Regions list and policy columns.

## Elevation & Depth

There is almost no elevation. The single measured box shadow is a navy side-extension of the hero headline plate: `rgba(0, 32, 92, 0.85) 16px 0px 0px 0px, rgba(0, 32, 92, 0.85) -16px 0px 0px 0px`, which widens the translucent plate behind the heading text. Cards are separated by tone (`#f6f7f9` on white) and by a navy rule beneath their image, not by shadows.

## Shapes

Radii are small and used mainly on cards: `xs` 4px is applied as "4px 0px 0px 4px" (10 elements), "4px 4px 0px 0px" (4) and a uniform "4px" (3). Buttons, nav links and inputs compute 0px, so the primary action is a square-cornered rectangle (`none` 0px).

## Components

- **button-primary** ("Report misconduct"): `#2a4577` fill, white 16px bold Noto Sans, 0px radius, padding 10px 30px, 40px high.
- **hero button** ("Read more"): navy rectangle under the headline plate, as seen in the capture.
- **nav-link**: white 15px bold on `#274375`, padding 15px 20px 15px 16px, 48px high; hover turns the background `#0078d4`.
- **text-input**: Arial 15px, padding 0px 24px, 48px high.
- **card**: `#edeff3` panel with `#092862` text, 4px corner radii, image on top with a navy rule beneath.
- **footer**: `#0c2b64` background, white 24px bold section headings.
- **section header**: 26px bold navy with an "All →" link.
- **card call to action**: each emergencies and highlights card ends with a bold navy verb phrase such as "Read more", "Read about our work", "Read our questions and answers", "See the latest data" or "Read our fact sheet".
- **card metadata**: a 14px line gives the date and a pipe-separated type such as "News release".
- **donate**: a Donate button with a heart icon sits at the right of the logo row; its fill was not captured as a token.
- **language control**: a translate icon with "Select language" in the utility strip, which lists languages including English and Arabic.

## Design System Architecture

No public design system or brand guideline is linked from https://www.who.int/: the homepage footer offers Policies (including Permissions and licensing and Terms of use), About us, Contact us, Newsletters and social links, but no style guide or emblem page. The de-facto system is the shipped CSS, whose custom properties follow a Fluent-style naming scheme with light and dark ladders, for example `--l2-neutralFillRest` #eaecf1, `--l4-neutralFillStealthRest` #f6f7f9, `--l-l4-accentFillSelected` #00477d and `--d-l3-accentFillActive` #005ca3. Tokens in this file were measured from the rendered page.

## Do's and Don'ts

- Do set nearly everything in Noto Sans bold, with navy `#00205c` as the text color on white and grey.
- Do keep buttons and nav links square (0px radius) and cards at 4px.
- Do separate cards with grey tone and a navy rule rather than shadows.
- Do use documentary photography at the top of every card.
- Don't use the unmeasured yellow of the Donate button as a general accent without measuring it.
- Don't use rounded pills; none were measured.
- Don't use light type weights; the measured weights are 400, 700 and 900.

## Responsive Behavior

The extraction's mobile pass recorded the hero headline at 25px (28px line height, 3px 10px padding, 370px wide) versus 50px on desktop, and the section heading "Latest news" at 20px versus 26px. Navigation behaviour, card column counts and touch target sizes on small screens were not measured. Breakpoints are not measured.

## Iteration Guide

1. Start from `#ffffff`, `#f6f7f9`, `#00205c`, with `#0c2b64` for dark bands.
2. Set everything in Noto Sans bold: 50px hero, 26px section heads, 18px card titles, 15px nav.
3. Build square-cornered 40px buttons with padding 10px 30px and cards with 4px radii.
4. Add hover on utility links by switching to `#0078d4`.
5. Re-run the extractor and gate after each change.
