---
version: alpha
name: Arc
category: "Productivity & SaaS"
description: "Arc's arc.net is a playful brand-blue site: #3139fb headings and full-bleed bands, an #fffcec off-white, Marlin Soft SQ 700 headlines with tight tracking (45.51px hero, 28px sections at -1.4px), ABC Oracle body, #2702c2 and white download buttons at 10px radius, and pastel browser screenshots as the main imagery."
colors:
  canvas: "#ffffff"
  ink: "#3139fb"
  primary: "#2702c2"
  on-primary: "#ffffff"
  brand-blue: "#3139fb"
  offwhite: "#fffcec"
  brand-deep-blue: "#2404aa"
  brand-dark-blue: "#000354"
  brand-red: "#fb3a4d"
  ink-body: "#000000a6"
  ink-grey: "#696969"
  ink-cream: "#fffadd"
  ink-black: "#000000"
  dia-button: "#000000d9"
  focus: "#96c4ff"
typography:
  display:
    fontFamily: "\"Marlin Soft SQ\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 45.51px
    fontWeight: 700
    lineHeight: 42.25px
    letterSpacing: "-1.8204px"
  display-mobile:
    fontFamily: "\"Marlin Soft SQ\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 31.2px
    letterSpacing: "-1.6px"
  heading:
    fontFamily: "\"Marlin Soft SQ\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 28px
    fontWeight: 700
    lineHeight: 30.8px
    letterSpacing: "-1.4px"
  body:
    fontFamily: "\"ABC Oracle\", Helvetica, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "-apple-system, \"system-ui\", sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 29px
    letterSpacing: "-0.14px"
  nav:
    fontFamily: Marlin, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 16px
    fontWeight: 400
  nav-pill:
    fontFamily: "\"Marlin Soft SQ\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 14px
    fontWeight: 500
    letterSpacing: "-0.28px"
rounded:
  none: 0px
  xs: 4px
  sm: 8px
  md: 10px
  lg: 22px
spacing:
  s1: 3px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 8px 0px
    height: 45px
    boxShadow: rgba(0, 0, 0, 0.1) 0px 5px 5px 0px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    height: 45px
  button-dia:
    backgroundColor: "{colors.dia-button}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.lg}"
    height: 76px
    boxShadow: rgba(0, 0, 0, 0.25) 0px 2px 8px 0px
  nav:
    textColor: "{colors.on-primary}"
  nav-pill:
    textColor: "{colors.on-primary}"
    typography: "{typography.nav-pill}"
    rounded: "{rounded.sm}"
    padding: 8px 10px
    height: 36px
  nav-pill-hover:
    backgroundColor: rgba(23, 3, 148, 0.5)
  link:
    textColor: "{colors.ink-cream}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.brand-blue}"
    textColor: "{colors.offwhite}"
    typography: "{typography.heading}"
---

## Overview

Arc is a web browser from The Browser Company (the measured page title is "Arc from The Browser Company"), and arc.net sells it with a cheerful, editorial look built on one saturated blue. The desktop capture opens with a slim header of white nav pills ("Max", "Mobile", "Developers", "Students", "Blog") above a soft pastel band promoting the company's newer browser: "Meet Dia, the next evolution of Arc", a short grey line ("Weekly security updates, SOC 2 certification, and the Arc DNA you know (and love).") and a dark, rounded "Try Dia" button with an app icon, followed by a cropped Dia window.

A wavy edge then opens into a full-bleed brand-blue `#3139fb` band with a large pull quote ("Arc is the Chrome replacement I've been waiting for." — The Verge), two download buttons and a purple-tinted Arc window. A marquee of press quotes (Bloomberg, Inverse, Fast Company) runs below. White sections follow, each with a centred blue headline and a large screenshot: "A browser that doesn't just meet your needs — it anticipates them." over a photo collage, "Space for the different sides of you." with a coral-framed Spaces window, "Your perfect setup." with a mint Split View window and a colour-picker panel, and "The comfort of privacy." The page ends with a cream `#fffcec` band of user quotes with handwritten-style icons, a blue "Enter your new home on the internet" call-out with a white download button, and a blue footer.

The voice is warm and witty — "Way more powerful than Chrome. Arc looks like the future of browsers.", "Arc brought order to the chaos that was my online life." Imagery is product screenshots in pastel theme colours rather than photography of people.

## Colors

The site's root variables name the brand palette: `--colors-brandBlue #3139FB`, `--colors-brandDeepBlue #2404AA`, `--colors-brandDarkBlue #000354`, `--colors-brandRed #FB3A4D`, `--colors-brandOffwhite #FFFCEC`, plus `--colors-focusOutline #96C4FF`.

- **Canvas `#ffffff`** — section backgrounds between bands.
- **Ink / brand blue `#3139fb`** — the most-read text colour (section headlines) and the background of the quote band and footer.
- **Primary `#2702c2`** — the "Download Arc for Windows" fill and the text of the white "Download Arc for Mac" button.
- **Off-white `#fffcec`** — the testimonial band and the text on blue (footer, quote).
- **Cream `#fffadd`** — link text on blue bands.
- **Body `#000000a6`** — 65% black for paragraph copy; `#696969` for small grey sublines; `#000000` for a few nav elements.
- **Dia button `#000000d9`** — 85% black, hover 65%.
- **Brand red `#fb3a4d`**, **deep blue `#2404aa`**, **dark blue `#000354`** — declared brand colours not measured as rendered fills on this page.

## Typography

Arc uses an unusually large type kit, all loaded on the home page: **Marlin Soft SQ** (500, 700, 700 italic) for headlines and nav pills; **Marlin** (800) for links; **ABC Oracle** (400) for body copy; **InterVariable** / **Inter** (500–700) as `--fonts-body` and `--fonts-cta`; **ABC Favorit Mono** (400, 700) for monospaced labels; and **Exposure VAR** (700, 750) for display accents. Download buttons use the system stack (`-apple-system, "system-ui"`).

| Role | Family | Size / line-height | Weight | Tracking |
|---|---|---|---|---|
| Display (quote h1) | Marlin Soft SQ | 45.51px / 42.25px | 700 | -1.8204px |
| Heading (sections, footer) | Marlin Soft SQ | 28px / 30.8px | 700 | -1.4px |
| Body | ABC Oracle | 20px / 24px | 400 | normal |
| Nav pill | Marlin Soft SQ | 14px | 500 | -0.28px |
| Button | system | 14px / 29px | 600 | -0.14px |
| Link | Marlin | 16px | 400 | normal |

Headlines are tight: line-height below font size on the display, and tracking of about -4% (-1.4px at 28px, -1.6px at 40px, -1.82px at 45.51px). Small mono labels go the other way — 12px at +0.4px, +0.6px and +1.8px. Weight 700 dominates the measured characters.

**Substitutes:** Marlin and ABC Oracle are commercial faces. Inter, already declared in the site's stacks, is the in-system fallback; keep the negative tracking on headlines.

## Layout

Each section is centred: a headline, a one-line subline, then a large screenshot or collage at nearly the full content width. Bands are separated by wavy or zig-zag edges (visible in the capture between the Dia band, the blue quote band and the marquee). The testimonial band is a four-column row; the extractor measured a maximum of eight card columns on desktop. Measured gaps are led by 12px, then 16px, 8px, 6px, 24px and 32px; paddings by 24px, then 32px, 8px, 16px and 10px. The root variables define a spacing scale `--space-4` to `--space-72` and `--padding: 32px`.

## Elevation & Depth

Shadows are soft and declared as three tokens: `--shadows-small` (`0 5px 10px rgba(0, 0, 0, 0.12)`), `--shadows-medium` (`0 8px 30px rgba(0, 0, 0, 0.12)`) and `--shadows-large` (`0 30px 60px rgba(0, 0, 0, 0.12)`). Measured on the page: `rgba(0, 0, 0, 0.1) 0px 5px 5px 0px` under the download buttons and `rgba(0, 0, 0, 0.25) 0px 2px 8px 0px` under "Try Dia". Screenshots float on white with a large soft shadow in the capture, which gives the page its "windows on a desk" depth.

## Shapes

Measured radii: 8px (nav pills and small UI), 10px (download buttons), 22px ("Try Dia") and 4px. The root variables offer `--radii-2`, `-4`, `-8`, `-12`, `-16`, `-32` and `--radii-round: 9999px`. Bands use decorative wavy edges rather than rounded corners; screenshots show the rounded window frames of the Arc app itself.

## Components

- **Primary button** — "Download Arc for Windows": `#2702c2`, white system 14px/600, 45px tall, 10px radius, `rgba(0, 0, 0, 0.1) 0px 5px 5px 0px` shadow. Hover left it unchanged.
- **Secondary button** — "Download Arc for Mac": white fill, `#2702c2` text, same metrics, with an Apple icon.
- **Dia button** — 85% black, white text with an app icon, 76px tall, 22px radius; hover to 65% black.
- **Nav pill** — white Marlin Soft SQ 14px/500, 8px 10px padding, 36px tall, 8px radius; hover fills `rgba(23, 3, 148, 0.5)`.
- **Quote card** — on the cream band: a bold blue quote in Marlin Soft SQ and a small outlined handle tag below (capture).
- **Press marquee** — a single line of italic quotes with publication logos (capture).
- **Footer** — `#3139fb` background, `#fffcec` text, 28px/700 heading "Enter your new home on the internet", product and resource link columns, and a "The Browser Company of New York" mark.

## Design System Architecture

No public design system, press kit or brand guideline was found: the home page's header and footer links (https://arc.net/) point to product, legal, resource-centre and social pages, and https://arc.net/credits lists tester names without design credits. The site's shipped CSS shows a token layer of 120 root custom properties grouped as `--colors-*` (brand colours, a `primary1–12` red-orange scale and `secondary1–12` green scale, student-page colours, `focusOutline`), `--fonts-*` (named stacks: `sans`, `softSans`, `oracle`, `exposure`, `mono`, `cta`, `body`), `--fontSizes-*`, `--lineHeights-*`, `--fontWeights-*`, `--space-*`, `--sizes-*`, `--radii-*` and `--shadows-small/medium/large`.

## Do's and Don'ts

**Do**
- Use `#3139fb` for headlines and for full-bleed bands, with `#fffcec` text on blue.
- Set headlines in Marlin Soft SQ 700 with roughly -4% tracking and tight line-height.
- Show the product as large screenshots in pastel theme colours.
- Pair a `#2702c2` button with a white one, both 10px radius.
- Keep shadows soft (0.1–0.12 alpha) and let wavy edges separate bands.

**Don't**
- Don't use the brand red `#fb3a4d` for primary actions; buttons are blue, white or black.
- Don't set body copy in pure black; it is 65% black in ABC Oracle.
- Don't track headlines positively; only small mono labels are letter-spaced open.
- Don't square off buttons or pills.
- Don't replace screenshots with stock photography of people.

## Responsive Behavior

Measured at 390px: the quote h1 drops from 45.51px to 32px (line-height 31.2px, tracking -1.6px) and the Dia heading from 36px to 30px; body copy drops from 20px to 16px in ABC Oracle; the Windows download button keeps its 45px height. The header shows one visible link and an "Open navigation menu" toggle at 390px, versus six visible links and no toggle on desktop. The mobile size list adds 27.2px (from 40px on desktop). Breakpoints in the stylesheet include `min-width 480px`, `580px`, `600px`, `650px`, `800px`, `960px`, `1000px`, `1075px` and `1100px`, and `max-width 600px` and `480px`. Other reflow was not measured.

## Iteration Guide

1. White sections and `#3139fb` bands; text on blue in `#fffcec`.
2. Headlines in Marlin Soft SQ 700, blue, centred, about -4% tracking; sublines small and grey.
3. Body in ABC Oracle (Inter as fallback) at 65% black.
4. Buttons: `#2702c2` or white, 45px, 10px radius, soft 5px shadow; nav as 8px pills.
5. One large product screenshot per section, framed by a soft `--shadows-large`.
6. Use cream `#fffcec` bands for social proof.
7. Reach for the declared `--colors-*`, `--radii-*` and `--shadows-*` tokens before adding values.
