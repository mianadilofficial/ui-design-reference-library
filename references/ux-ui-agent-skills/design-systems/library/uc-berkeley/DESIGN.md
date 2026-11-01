---
version: alpha
name: University of California, Berkeley
category: "Education"
description: "UC Berkeley home page measured live: white canvas with #262626 Inter text, Berkeley Blue #002676 buttons, links, headlines and footer, California Gold #fdb515 as a full-width promotional band and nav hover colour, Inter at weights 400 to 900, and 9px-radius buttons with a 28px search field."
colors:
  canvas: "#ffffff"
  ink: "#262626"
  primary: "#002676"
  on-primary: "#ffffff"
  surface-3: "#fdb515"
  hairline: "#ffffff1a"
typography:
  display:
    fontFamily: Inter, sans-serif
    fontSize: 48px
    fontWeight: 900
    lineHeight: 62.4px
  heading:
    fontFamily: Inter, sans-serif
    fontSize: 64px
    fontWeight: 900
    lineHeight: 64px
  subheading:
    fontFamily: Inter, sans-serif
    fontSize: 25.6px
    fontWeight: 700
    lineHeight: 28.8px
  body:
    fontFamily: Inter, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  button:
    fontFamily: Inter, sans-serif
    fontSize: 20.8px
    fontWeight: 700
    lineHeight: 31.2px
  nav:
    fontFamily: Inter, sans-serif
    fontSize: 13px
    fontWeight: 600
    lineHeight: 19.5px
  input:
    fontFamily: Inter, sans-serif
    fontSize: 14px
    fontWeight: 400
rounded:
  xs: 9px
  sm: 28px
  pill: 9999px
spacing:
  s1: 4.8px
  s2: 5px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 12.6px
  s7: 14px
  s8: 14.4px
  s9: 16px
  s10: 17.6px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 36px
    height: 55px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 36px
    height: 55px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    padding: 8px 14.4px 8px 0px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    padding: 12.6px 42px 12.6px 14px
    height: 42px
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    padding: 0px 0px 16px
---

## Overview

This DESIGN.md documents the University of California, Berkeley home page measured from https://www.berkeley.edu/ (page title "University of California, Berkeley: Home", language en-US). It is a WordPress-built institutional site (the stylesheet carries `--wp--preset--*` variables) in a two-colour identity: Berkeley Blue `primary` #002676 and California Gold `surface-3` #fdb515, on a white canvas with near-black #262626 body text. A navy utility bar and wordmark header sit above a full-width campus video; below it a centred headline "Our research improves lives" introduces three image-and-text cards, three large blue statistic headlines, and a full-width gold band beginning "Creating more venture-backed startups".

The official brand site was opened at https://brand.berkeley.edu. It states that the palette "leads with a Berkeley Blue that has been brightened to better match the saturation of California Gold", names California Gold as the complementary primary colour, and says the university uses two open-source typefaces, Inter and Source Serif, available from Google Fonts. It gives no hex values on the page that was read, so all hex values here come from the live measurement. Microcopy is confident and statistic-led: "The #1 public research university in the U.S.", "50 top 10 graduate programs", "157 years of excellence".

## Colors

`canvas` #ffffff is the dominant background (5,244 area weight). `primary` #002676 (Berkeley Blue) is the fill of the primary button, the footer background, the utility bar and the colour of links and big stat headlines (1,117 text characters). `ink` #262626 is the body text (2,305 characters). `surface-3` #fdb515 (California Gold) is a full-width call-out band (485 area weight) and is also the colour nav links turn to on hover (measured: "Students" goes from white to rgb(253, 181, 21)). `hairline` #ffffff1a is a translucent white border measured on one element in the dark navy footer/utility area. A very dark navy #010133 measured on four background areas; it is not tokenised. Text on blue is white (457 characters).

## Typography

Inter is the only family measured (3,879 characters), loaded as a variable font from weight 300 to 900; Font Awesome 7 Pro and Brands icon fonts are also loaded. The measured roles: `display` Inter 900 at 48px / 62.4px (the h1 role); `heading` Inter 900 at 64px / 64px; `subheading` Inter 700 at 25.6px / 28.8px (card titles such as "Undergraduate programs"); `body` Inter 400 at 20px / 30px; `button` Inter 700 at 20.8px / 31.2px; `nav` Inter 600 at 13px / 19.5px; `input` Inter 400 at 14px. Sizes by character count lead with 20px (2,138), 20.8px (537) and 25.6px (441), then 15px, 49.6px, 48px and 44.8px. Weights measured: 400 (2,705), 700 (885), 900 (115), 600, 800 and 500. Source Serif is named by the brand site but was not among the loaded fonts on the home page; the wordmark in the header is an image-style logo in a customised serif, as the brand page describes.

## Layout

The measured page is 1280px wide and 6,522px tall. A navy utility bar (Students, Faculty & Staff, Parents, Alumni, Give, Map, Directory, bConnected, News, plus a search field) sits above a white primary header with About, Admissions, Academics, Research and Campus Life dropdowns. Content is centred in a narrow column for the intro and then a three-column card row; statistics are full-width left-aligned headlines separated by thin rules. Measured gaps are 4.8px, 32px, 16px and 30px; paddings include 5px, 10px, 8px, 14.4px and 96px. Spacing tokens `s1`–`s10` in the frontmatter reproduce the measured values.

## Elevation & Depth

No box shadows were measured on rendered elements (the `boxShadows` frequency list is empty). The stylesheet defines WordPress preset shadows (`--wp--preset--shadow--deep`: 12px 12px 50px rgba(0, 0, 0, 0.4); `--wp--preset--shadow--outlined`) but they did not render on this page. Separation is by colour fields, thin rules and photography, so the site reads flat.

## Shapes

Measured radii are 9px (buttons, 2 elements), 28px (the search input) and 50% (one circular element). Tokens: `xs` 9px, `sm` 28px, `pill` 9999px. The video control buttons (info, pause) in the capture are square. Card photographs show hard rectangular corners in the capture, although their radius was not separately measured.

## Components

`button-primary`: Berkeley Blue #002676 fill, white Inter 700 20.8px label, 9px radius, 12px 36px padding, 55px tall, 292px wide ("Learn more"). `button-secondary`: white fill, #002676 text, same type, radius, padding and height ("Plan your visit"). `link`: #002676 Inter 400 20px, underlined, often followed by an arrow ("Our impacts", "Our programs", "Our rankings"). `nav-link`: white Inter 600 13px with 8px 14.4px 8px 0px padding in the utility bar, 36px tall; hover turns the text California Gold. `text-input`: white field, #262626 14px text, 28px radius, 12.6px 42px 12.6px 14px padding, 42px tall, 210px wide, with a search icon at its right. `footer`: #002676 background, white 21px text, 0px 0px 16px padding, containing Instagram, LinkedIn, Facebook, YouTube and X links and Visit, Jobs, News, Events links.

## Design System Architecture

The brand site at https://brand.berkeley.edu was opened and describes the visual identity (Berkeley Blue, California Gold, Inter, Source Serif, the university logo and the Cal script mark); a deeper Colors page is referenced at brand.berkeley.edu/visual-identity/colors/ but was not opened. In code, the home page is a WordPress theme using block-editor preset variables and Font Awesome 7 Pro. No public component library or token package was found on the pages opened, so the de-facto system is: two brand colours, one variable sans family, large heavy headlines, and two button variants.

## Do's and Don'ts

Do use #002676 for primary buttons, links, statistic headlines and the footer, and #fdb515 for the promotional band and hover accents. Do set headlines in Inter 900 and body in Inter 400 at 20px. Do give buttons 9px radius and 55px height. Do lead sections with a concrete number.

Don't use gold as body text colour or as a button fill on white; it is measured only as a band and a hover colour. Don't add shadows. Don't use light font weights for headings. Don't round the search field below its measured 28px or use pill buttons for primary actions.

## Responsive Behavior

The mobile pass recorded: h2 "Our research improves lives" at Inter 900, 44.8px / 44.8px, 371px wide; body 20px / 30px; the primary CTA unchanged at 20.8px, 292px wide and 55px tall; and a navigation block with 13.3333px text. The mobile h1 role recorded 48px / 62.4px with empty text. Breakpoints, the mobile menu form and column collapse are not measured.

## Iteration Guide

1. Start with #ffffff, #262626 text, #002676 actions and #fdb515 bands.
2. Use Inter throughout: 900 for h1/h2, 700 for card titles and buttons, 400 for body at 20px.
3. Build a navy utility bar over a white header; make nav hover #fdb515.
4. Use 9px radius buttons, 55px tall, 12px 36px padding.
5. Gate with `node web/scripts/verify-designs.mjs --slug=uc-berkeley`.

## Additional Measurements

The home page imagery is photographic and people-centred: an aerial campus view with the Campanile in the hero video (with an information button and a pause button at its lower right), laboratory and research portraits in the three cards, and a solid gold band for the startup call-out. Headlines come in two colours: near-black #262626 for the intro "Our research improves lives" and card titles, and Berkeley Blue #002676 for the three large statistic headlines. Inline source citations such as U.S. News & World Report and the Wall Street Journal are underlined blue links, some set in italic in the capture. The spacing values 4.8px, 5px, 8px, 10px, 12px, 12.6px, 14px, 14.4px, 16px and 17.6px listed under `spacing` are all measured paddings or gaps on the page. The interface does not use letter spacing on any extracted role (all measured as normal), and no text transform was recorded on headings or buttons.
