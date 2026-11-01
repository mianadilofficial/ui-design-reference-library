---
version: alpha
name: "Napasai Samui Residence"
category: "Thai Brands"
description: "Napasai Samui Residence (napasaisamui.com), a beachfront villa retreat on Koh Samui, measured live: the custom Times Sans Serif face at weight 300 in tracked uppercase, a warm #f8f8f8 canvas, #4a4a4a text, square black #000000 buttons and a full-bleed pool photograph hero."
colors:
  canvas: "#f8f8f8"
  page-body: "#ffffff"
  ink: "#4a4a4a"
  primary: "#000000"
  on-primary: "#ffffff"
  ink-4: "#999999"
  ink-5: "#1a1a1a"
  ribbon-gold: "#a68563"
  field-border: "#a8a8a8"
  text-input-text: "#333333"
typography:
  display:
    fontFamily: "\"Times Sans Serif\", serif"
    fontSize: 40.32px
    fontWeight: 400
    lineHeight: 52.416px
    letterSpacing: 0.5px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Times Sans Serif\", serif"
    fontSize: 28.8px
    fontWeight: 400
    lineHeight: 37.44px
    letterSpacing: 0.5px
    textTransform: uppercase
  subheading:
    fontFamily: "\"Times Sans Serif\", serif"
    fontSize: 28.8px
    fontWeight: 300
    lineHeight: 40.32px
    letterSpacing: 1.44px
    textTransform: uppercase
  body:
    fontFamily: "\"Times Sans Serif\", sans-serif"
    fontSize: 18px
    fontWeight: 300
    lineHeight: 27px
    letterSpacing: 1.44px
  button:
    fontFamily: "\"Times Sans Serif\", sans-serif"
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
    letterSpacing: 1.44px
    textTransform: uppercase
  nav:
    fontFamily: "\"Times Sans Serif\", serif"
    fontSize: 18px
    fontWeight: 300
    lineHeight: 25.2px
    letterSpacing: 1.44px
    textTransform: uppercase
  button-secondary:
    fontFamily: "\"Times Sans Serif\", serif"
    fontSize: 11.5px
    fontWeight: 700
    textTransform: uppercase
  input:
    fontFamily: "\"Times Sans Serif\", serif"
    fontSize: 13.3333px
    fontWeight: 400
    textTransform: uppercase
rounded:
  xs: 4px
  sm: 5px
  md: 7px
  lg: 10px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2.52px
  s3: 3.15px
  s4: 3.5px
  s5: 4px
  s6: 5px
  s7: 7px
  s8: 10px
  s9: 11px
  s10: 12px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 20px
    height: 80px
  button-primary-hover:
    backgroundColor: "{colors.ink}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.none}"
    padding: 1px 15px
    height: 60px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 1px 15px 4px
    height: 24px
  footer:
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
---

# Napasai Samui Residence

## Overview

This system was measured from https://www.napasaisamui.com/, the site of Napasai Samui Residence, titled "Napasai Samui Residence-Luxury Beachfront Retreat in Koh Samui". The queued brand was Napasai; the measured page is the villa-residence site of that property, so the document is named after the measured site. The page is 6,763px tall at 1280px width. Two popup layers (a common popup modal and a cookie/privacy popup with its backdrop) were hidden before measuring and are not part of the system.

The header is a white, slightly translucent bar with the serif-lettered wordmark "NAPASAI / SAMUI RESIDENCE" at the left, an "English" language selector, a hamburger icon and a solid black "BOOK NOW" block at the right edge. The hero is a full-bleed photograph of a turquoise pool, red lounger cushions and a thatched pavilion by the sea, with the small tracked line "ESCAPE TO KOH SAMUI'S HIDDEN HAVEN" above the title "NAPASAI SAMUI RESIDENCE" in large white capitals. A white booking bar overlaps the lower edge of the hero: "UNLOCK EXCLUSIVE BENEFITS", check-in and check-out date boxes (OCT 09 2026 and OCT 10 2026 in the capture), an occupancy control with adult and child counters, a "Promotional code" field with an underline, and a black "CHECK AVAILABILITY" button.

Below the hero a warm light-grey section holds a centred welcome: "WELCOME TO" and "NAPASAI SAMUI RESIDENCE", followed by paragraphs and a list of villa types (One-Bedroom Sea View Villa, Two-Bedroom Oceanfront Pool Residence, Three-, Four- and Five-Bedroom Oceanfront Pool Residences with unit counts and guest capacities). A photo carousel of interiors follows, then villa sections each starting with a small "VILLA" label and an uppercase title such as "ONE-BEDROOM SEA VIEW VILLA". The tone is hushed and hospitality-led: long, spaced, light-weight lines of centred copy, restrained black and white controls, and photography doing the work.

## Colors

The page is nearly monochrome. The canvas is a warm off-white, #f8f8f8 (`canvas`), the largest measured background (area weight 5,357), with white #ffffff (`page-body`) for the header, booking bar and inputs, and translucent white #fffffff2 behind the header. Black #000000 (`primary`) is the fill of "BOOK NOW" and "CHECK AVAILABILITY" and the color of headings (817 characters) and nav links; it is also the border color on 12 elements.

Body text is a dark grey, #4a4a4a (`ink`), measured on 7,257 characters, with lighter #999999 (`ink-4`, 385 characters) for secondary text and #1a1a1a (`ink-5`) on a few. White text is used on the hero and on black buttons. The root variables name the same values (`--primary-color: #000000`, `--secondary-color: #4a4a4a`, `--background: #f8f8f8`, `--background-secondary: #424242`, `--title-color: #333333`, `--border-color: #eeeeee`), and an input text color #333333 (`text-input-text`) is measured on the promotional-code field.

Two accents are minor. #a68563 (`ribbon-gold`) is the declared `--ribbon-color`, a warm bronze for ribbons; it is not visible in the captured area, and where it is used was not measured. #a8a8a8 (`field-border`) is the date-field border color (`--dates-border-color`) and a measured border color on one element; it is also the declared hover background for buttons, though the measured hover fill on "BOOK NOW" is rgb(74, 74, 74). Border #66666666 (60% grey) lines nine elements. The page uses no saturated interface color: blue, orange and green belong to the photographs.

## Typography

One custom family, "Times Sans Serif", sets almost everything (8,901 characters), declared as `--font-primary: 'Times Sans Serif', serif` and `--font-secondary: 'Times Sans Serif', sans-serif`; only the loaded face is weight 400. Weights measured are 300 (8,040 characters), 700 (657) and 400 (204): body copy is light, button labels in the booking bar are bold, headings are regular.

Measured roles:
- `display`: 40.32px, weight 400, line-height 52.416px, letter-spacing 0.5px, uppercase.
- `display-mobile`: 28.8px, weight 400, line-height 37.44px, letter-spacing 0.5px, uppercase (the h1 on the mobile pass).
- `subheading`: 28.8px, weight 300, line-height 40.32px, letter-spacing 1.44px, uppercase.
- `body`: 18px, weight 300, line-height 27px, letter-spacing 1.44px.
- `button`: 16px, weight 300, line-height 24px, letter-spacing 1.44px, uppercase.
- `nav`: 18px, weight 300, line-height 25.2px, letter-spacing 1.44px, uppercase.
- `button-secondary`: 11.5px, weight 700, uppercase (the "CHECK AVAILABILITY" label).
- `input`: 13.3333px, weight 400, uppercase.

By character count 18px is overwhelming (7,315 characters), followed by 16px (460), 28.8px (348), 14px (240), 12.6px (206) and 40.32px (93); 57.6px (23) is the largest size. The signature is wide letter-spacing: 1.44px (8% of 18px) on body and button text, and 0.5px on display. Text is uppercase for titles, labels, buttons and inputs, and sentence case for paragraphs.

## Layout

The page is a single centred column. The header is full width with its items at the edges; the booking widget is a white panel centred over the hero's lower edge. Text sections are centred with long centred paragraphs and a bulleted list. Images appear in a carousel with partial neighbors visible at both sides, then villa sections alternate heading, photograph and copy.

Paddings by weight are 20px (44), 10px (21), 5px (20), 40px (18), 30px (15), 12px (11), and 80px (5) for large section gaps. Gaps are 3.15px (14), 20px (10), 5px (6) and 30px (4). The spacing tokens list 1, 2.52, 3.15, 3.5, 4, 5, 7, 10, 11 and 12px. The root variable `--border-radius` is 10px. Density is low: wide margins around centred text, generous vertical rhythm, large photographs.

## Elevation & Depth

Elevation is almost absent: one shadow, rgba(0, 0, 0, 0.09) 0px 0px 10px 0px, is measured on one element. The booking bar floats over the hero through overlap and a white fill rather than a shadow. The header is a translucent white (#fffffff2) over the image, and the roi overlay variable (`--roi-overlay-color: rgba(0,0,0,0.8)`) is declared for overlays in the booking engine. Borders are 1px black and 60% grey lines, such as the underline of the promotional-code field.

## Shapes

Controls are square. "BOOK NOW", "CHECK AVAILABILITY", the input and the footer compute a 0px radius (`rounded.none`). Rounded shapes are rare: 50% on 11 elements (circular arrows and counters), 10px on two (the booking date box, matching `--border-radius`), 4px on two, 7px on the occupancy buttons and one element with 5px top corners. The tokens are `xs` 4px, `sm` 5px, `md` 7px, `lg` 10px and `pill` 9999px.

## Components

**Primary button** (`button-primary`): a black #000000 block with white uppercase 16px weight 300 text, padding 20px, height 80px and 0px radius; it is the "BOOK NOW" button in the header. Hover changes the fill to #4a4a4a (`button-primary-hover`).

**Secondary button** (`button-secondary`): "CHECK AVAILABILITY": black fill, white 11.5px bold uppercase label, padding 1px 15px, height 60px, 1px black border, square corners; hover fill rgb(72, 72, 72).

**Navigation** (`nav`, `nav-link`): black 18px weight 300 uppercase text with 1.44px tracking; the language selector "English" turns its background to rgb(238, 238, 238) on hover.

**Text input** (`text-input`): white, #333333 uppercase 13.3333px text, padding 1px 15px 4px, height 24px, square corners; the promotional-code field is drawn as an underline.

**Occupancy control**: two small rounded (7px) grey boxes with a person icon and counters.

**Link** (`link`): #4a4a4a 18px weight 300 text with 1.44px tracking.

**Footer** (`footer`): black text at 16px weight 300 on the light canvas, beginning "FOLLOW US :" and the property name and address.

## Design System Architecture

No public design system or brand-guideline page was found linked from the home page, and none was opened for this document. The shipped CSS shows a two-part system. First, a set of named brand variables: `--primary-color`, `--secondary-color`, `--background`, `--background-muted`, `--background-secondary`, `--title-color`, `--border-color`, `--border-radius`, `--font-primary`, `--font-secondary`, `--fontsize-medium: 20px`. Second, booking-engine variables (`--engine-primary`, `--button-bg-color`, `--button-text-color`, `--button-hover-bg-color`, `--widget-bg-color`, `--dates-border-color`, `--calendar-*`, `--occupancy-*`, `--promocode-color`) that style the availability widget. Breakpoints are declared in two namings, `--breakpoint-m` 768px, `--breakpoint-l` 1200px, `--breakpoint-xl` 1440px and UIkit-style `--uk-breakpoint-s` 640px, `--uk-breakpoint-m` 960px, `--uk-breakpoint-l` 1200px and `--uk-breakpoint-xl` 1600px, so UIkit is part of the stack. WordPress presets are also present (`--wp--preset--*`) and are not brand values. Source reviewed: https://www.napasaisamui.com/ only.

## Do's and Don'ts

Do set Times Sans Serif at weight 300 with 1.44px tracking, uppercase for titles, labels and buttons.

Do keep the interface black, white and warm grey (#f8f8f8, #4a4a4a) and let photography supply color.

Do keep buttons square and black, with a dark grey hover.

Do overlap a white booking bar over the hero's lower edge.

Don't use rounded buttons or shadows; the measured system has square controls and one faint shadow.

Don't use the WordPress preset colors (such as #9b51e0) as brand colors.

Don't document the cookie and common popups as brand UI.

## Responsive Behavior

Only the 390px mobile pass was recorded. In it the h1 "NAPASAI SAMUI RESIDENCE" is 28.8px, weight 400, line-height 37.44px, in #000000 in a 330px-wide box; body text is 18px, weight 300, line-height 27px in #4a4a4a; the "BOOK NOW" button measures 10px, weight 300, white on #000000 with 10px padding at 86px width; and character counts by size are led by 18px (7,315), 16px (428), 21.6px (348) and 12.6px (206). The declared breakpoints (640px, 768px, 960px, 1200px, 1440px, 1600px) come from the page's own variables; which layout changes occur at each was not measured.

## Iteration Guide

1. Start from `canvas` #f8f8f8, `page-body` #ffffff, `ink` #4a4a4a, `primary` #000000.
2. Use Times Sans Serif; weight 300 with 1.44px tracking for body and labels, 40.32px/400 uppercase for titles.
3. Build the order: translucent header with black book button, full-bleed hero with overlapping booking bar, centred welcome copy, interior carousel, villa sections.
4. Keep radii at 0px on controls, with 7px to 10px only on widget boxes.
5. Run `node web/scripts/verify-designs.mjs --slug=napasai` after edits.
6. Leave out anything not in the frontmatter or `web/data/extracted/napasai.json`.
