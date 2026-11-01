---
version: alpha
name: "Form Energy"
category: "Energy & Climate"
description: "Form Energy (formenergy.com) is an American iron-air battery company whose site pairs full-bleed factory photography with uppercase Roboto Condensed headlines (86px hero), Roboto Mono labels, light-grey #f4f4f4 and white bands, black footer and a single amber #faaf40 outline accent with 3px square-ish corners."
colors:
  canvas: "#ffffff"
  page-largest: "#f4f4f4"
  ink: "#000000"
  primary: "#faaf40"
  ink-navy: "#0a2540"
  ink-button: "#202020"
  ink-strong: "#111111"
  hairline: "#faaf40"
typography:
  display:
    fontFamily: "\"Roboto Condensed\", sans-serif"
    fontSize: 86px
    fontWeight: 400
    lineHeight: 86px
    letterSpacing: 2px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Roboto Condensed\", sans-serif"
    fontSize: 43.2px
    fontWeight: 400
    lineHeight: 43.2px
    letterSpacing: 2px
    textTransform: uppercase
  heading:
    fontFamily: "\"Roboto Mono\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 12px
  subheading:
    fontFamily: "\"Roboto Condensed\", sans-serif"
    fontSize: 36px
    fontWeight: 600
    lineHeight: 36px
    letterSpacing: 1px
    textTransform: uppercase
  body:
    fontFamily: Roboto, sans-serif
    fontSize: 20px
    fontWeight: 300
    lineHeight: 28px
  nav:
    fontFamily: Roboto, sans-serif
    fontSize: 20px
    fontWeight: 500
    lineHeight: 28px
  button-secondary:
    fontFamily: "\"Roboto Mono\", sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 14px
    letterSpacing: 2px
    textTransform: uppercase
rounded:
  xs: 3px
  sm: 5px
  md: 6px
  lg: 50px
  pill: 9999px
spacing:
  s1: 1px
  s2: 3px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 13px
  s10: 15px
components:
  button-secondary:
    textColor: "{colors.ink-button}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 17px 30px
    height: 52px
    borderColor: "{colors.hairline}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    padding: 20px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
---

# Form Energy

Measured from https://formenergy.com/ (page title "Form Energy: Energy Storage For a Better World", lang en-US). The site is a WordPress build (root variables use the `--wp--preset--*` naming). The page is an industrial-credibility story: a video-like hero of the Form Factory 1 production floor with the American flag, followed by alternating image and text bands. A cookie bar (`cookie-law-info-bar`) was detected and hidden by the extractor, and an accessibility widget (blue round icon, #146ff8 in the background measurements) appears on the right edge of the capture; neither is documented as brand UI.

## Overview

Form Energy presents itself with the line "Energy Storage For a Better World". The hero copy measured on the page reads "Form Energy is an American company driving innovation in energy technology and manufacturing. Our cost-effective, multi-day energy storage solutions are designed to ensure a clean, secure, and reliable electric grid, even during prolonged periods of stress." The sections opened on the page are "Our Technology", "Manufacturing Batteries in the Heart of the Rust Belt", "About Us", "We're hiring" and "What's New!". The navigation lists About, Technology, Form Factory 1, Careers, Newsroom and Contact. Action labels are "Learn More", "Join Us" and "Read More News".

The voice is plain, factual and proud of place: it names Weirton, West Virginia, the former Weirton Steel mill site, a facility of one million square feet, and a product that stores energy for 100 hours at a time. Typography and layout stay industrial and engineering-like rather than consumer-friendly: uppercase condensed headlines, monospaced buttons, and a thin amber rule beside each section title.

## Colors

Measured background areas: light grey #f4f4f4 (weight 2170), black #000000 (1800), white #ffffff (895), amber #faaf40 (10), blue #146ff8 (4, the accessibility control). Text colors by characters: black #000000 (1765), white #ffffff (976), #202020 (30), #111111 (14) and navy #0a2540 (13).

- **canvas #ffffff**: the page background; **page-largest #f4f4f4**: the largest band color, used for the alternating grey sections and the news cards.
- **ink #000000**: body and heading text on light bands; white #ffffff on the hero and footer (carried by `canvas` as the on-dark text color).
- **primary #faaf40**: the amber accent. It is the border of the "LEARN MORE" buttons (2px solid #faaf40), the short rule beside section titles and the hover color for navigation links (the ABOUT, TECHNOLOGY and other nav links change from white to rgb(250, 175, 64) on hover). The generated token set had assigned primary to #0a2540 because no filled button exists; since #faaf40 is the measured action color, it is promoted and #0a2540 is kept as `ink-navy`.
- **ink-button #202020**: the label color on the outlined button; **ink-strong #111111** and **ink-navy #0a2540** are minor text colors.
- **hairline #faaf40**: the button border.

The WordPress preset colors in the root variables (for example vivid-cyan-blue #0693e3, vivid-purple #9b51e0, pale-pink #f78da7) are editor defaults and are not brand colors.

## Typography

Fonts loaded: Roboto (300, 400, 500), Roboto Condensed (400, 600), Roboto Mono (300 to 700), plus Font Awesome 5 icon fonts. All three Roboto families are open-source Google fonts.

- **display**: Roboto Condensed 86px, weight 400, line-height 86px, letter-spacing 2px, uppercase. The hero h1 reads "ENERGY STORAGE FOR A BETTER WORLD" in white.
- **display-mobile**: Roboto Condensed 43.2px, weight 400, line-height 43.2px, letter-spacing 2px, uppercase.
- **subheading**: Roboto Condensed 36px, weight 600, line-height 36px, letter-spacing 1px, uppercase, for section titles such as "OUR TECHNOLOGY".
- **heading**: Roboto Mono 12px, weight 400, line-height 12px, used for the date line ("September 21, 2026") above news items.
- **body**: Roboto 20px, weight 300, line-height 28px. Light-weight body at 20px is the dominant size (1610 characters).
- **nav**: Roboto 20px, weight 500, line-height 28px; the header menu itself is measured in Roboto Mono 14px weight 500, letter-spacing 1px, uppercase.
- **button-secondary**: Roboto Mono 14px, weight 500, line-height 14px, letter-spacing 2px, uppercase.

Other measured sizes: 22px (297 characters), 24px (257), 14px (206), 12px (149), 28px (32, footer), 13.3333px, 18px and 16px.

## Layout

The measured scroll height is 4706px at a 1280px window. Sections alternate light grey and white, each with a two-column arrangement of a photograph and a text block, the photo on the left in "Our Technology" and on the right in the Rust Belt section. Padding values by frequency: 10px (45), 20px (22), 15px (11), 8px (10), 64px (7) and 3px (6); gaps 5px (16), 20px (12), 10px (4), 12px (2). The spacing tokens carry 1px, 3px, 4px, 5px, 6px, 8px, 10px, 12px, 13px and 15px. Cards (news items) measure 274px wide by 300px high with 20px padding. The header is a transparent bar over the hero containing the logo at left and the uppercase menu at right; the footer is black, 593px high, containing "Energy Storage for a Better World" and a MENU list.

## Elevation & Depth

Depth is limited. One shadow was measured: rgba(8, 19, 79, 0.16) 0px 4px 13.333px 0px (a single use). WordPress also declares shadow presets (`--wp--preset--shadow--natural` "6px 6px 9px rgba(0, 0, 0, 0.2)" and `--wp--preset--shadow--outlined`), which are editor defaults. Hierarchy comes from the alternation of #f4f4f4 and white bands, from photography and from the dark gradient behind the hero text.

## Shapes

Radii measured: 5px (10 elements), 3px (7), "0px 0px 5px 5px" (5), "3px 3px 0px 0px" (4), "0px 5px 0px 0px" (4), 50% (2), 6px (2) and 50px (1). The "LEARN MORE" buttons use 3px. News cards have a 5px corner on selected sides (for example "0px 5px 0px 0px"), and the photographs in the capture have softly rounded corners. The button borders are 2px solid.

## Components

- **button-secondary (outlined)**: Roboto Mono 14px/500 uppercase, letter-spacing 2px, color #202020, 2px solid #faaf40 border, radius 3px, padding 17px 30px, height 52px, transparent fill. No filled primary button was detected.
- **nav link**: white Roboto 20px/500 (the extractor's role) or Roboto Mono 14px uppercase in the header; on hover color and border turn #faaf40, with no background change.
- **section title**: an amber horizontal rule to the left of an uppercase Roboto Condensed 36px title.
- **card**: background #f4f4f4, text #000000, padding 20px; contains the label "Form Energy" and the headline of a news item, such as "Form Energy Announces Closing of $270M Credit Fa...".
- **footer**: background #000000, white text, 28px Roboto 500 for the heading lines.

## Design System Architecture

No public design system or brand guideline exists on the opened page; its only press mention is a press contact address. The de-facto system is a WordPress theme: the root variables are the standard `--wp--preset--color--*`, `--wp--preset--font-size--*` (small 13px, large 36px), `--wp--preset--spacing--*` (30 is 0.67rem, 50 is 1.5rem) and `--wp--preset--shadow--*` tokens. Brand choices are made in page CSS: the Roboto trio of families, the amber #faaf40 accent and the uppercase treatment. Source page: https://formenergy.com/.

## Do's and Don'ts

- Do set headlines in Roboto Condensed uppercase with positive letter-spacing (2px at 86px, 1px at 36px).
- Do use Roboto Mono uppercase with 2px letter-spacing for buttons and navigation.
- Do keep buttons outlined in 2px amber #faaf40 with dark text and a 3px radius.
- Do alternate #f4f4f4 and white bands with a photo beside each text block.
- Don't fill buttons; no filled button is measured.
- Don't use the WordPress preset colors as brand colors.
- Don't treat the accessibility widget (#146ff8) or cookie bar as brand components.

## Responsive Behavior

The mobile pass recorded these values: h1 at 43.2px (Roboto Condensed, 43.2px line-height, 2px tracking), the date h2 at 9.6px, body text at 16px with line-height 22.4px, and the header text measured at 43.2px because it includes the hero title. Mobile font-size frequencies: 16px (1821 characters), 17.6px (297), 9.6px (149), 11.2px (106), 28.8px (98), 23.4px (51), 14.4px (47), 15px (46), 13.3333px (35), 43.2px (32). Column changes, menu behavior and breakpoints were not measured.

## Iteration Guide

1. Begin with canvas #ffffff and bands of #f4f4f4; text #000000; footer #000000.
2. Set the hero in Roboto Condensed 86px uppercase over a factory photograph.
3. Put an amber #faaf40 rule beside each uppercase 36px section title.
4. Write body copy in Roboto 300 at 20px/28px.
5. Add outlined buttons in Roboto Mono 14px with 2px amber borders and 3px radius.
6. Keep photographs real: people in safety vests, plant exteriors and battery units.
