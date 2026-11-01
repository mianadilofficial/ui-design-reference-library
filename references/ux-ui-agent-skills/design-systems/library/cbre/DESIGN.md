---
version: alpha
name: CBRE
category: "Real Estate & PropTech"
description: "CBRE (cbre.com): corporate real-estate site on white with dark slate #435254 hero panels, CBRE green #003f2d headlines in Financier Display (48px, 64px), Calibre 16px/22px body, a bright #17e88f accent dash, square corners and no shadows."
colors:
  canvas: "#ffffff"
  page-largest: "#435254"
  ink: "#435254"
  primary: "#003f2d"
  on-primary: "#ffffff"
  green-deep: "#012a2d"
  accent-green: "#17e88f"
  mist: "#cad1d3"
  mist-light: "#dadfe0"
  surface-gray: "#e3e3e3"
  text-teal: "#538184"
  text-pale: "#dfe6e5"
  navy: "#032842"
  seafoam: "#80bbad"
  sand: "#dbd99a"
  gray-warm: "#7f8480"
  border-gray: "#b3b3b3"
typography:
  display:
    fontFamily: "\"Financier Display\", georgia, serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 48px
  display-mobile:
    fontFamily: "\"Financier Display\", georgia, serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 36px
  heading:
    fontFamily: "\"Financier Display\", georgia, serif"
    fontSize: 64px
    fontWeight: 400
    lineHeight: 64px
  heading-mobile:
    fontFamily: "\"Financier Display\", georgia, serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 48px
  subheading:
    fontFamily: "\"Financier Display\", georgia, serif"
    fontSize: 60px
    fontWeight: 400
    lineHeight: 60px
  body:
    fontFamily: Calibre, arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
  button:
    fontFamily: Calibre, arial, sans-serif
    fontSize: 18px
    fontWeight: 500
  nav:
    fontFamily: Calibre, arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 16px
  link:
    fontFamily: Calibre, arial, sans-serif
    fontSize: 18px
    fontWeight: 500
    letterSpacing: "-0.36px"
  footer-link:
    fontFamily: Calibre, arial, sans-serif
    fontSize: 20px
    fontWeight: 500
    lineHeight: 20px
    letterSpacing: "-0.4px"
rounded:
  none: 0px
  pill: 9999px
spacing:
  s1: 8px
  s2: 16px
  s3: 24px
  s4: 32px
  s5: 48px
  s6: 56px
  s7: 80px
components:
  button-subscribe:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.green-deep}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8px 24px 10px
    height: 48px
  link-arrow:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
    padding: 0px 0px 0px 48px
  nav:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    height: 48px
  footer:
    textColor: "{colors.primary}"
    typography: "{typography.footer-link}"
    rounded: "{rounded.none}"
---

## Overview

The CBRE home page (https://www.cbre.com/, title "Global Commercial Real Estate Services | CBRE", language en) is an editorial corporate site that alternates dark slate panels with white reading areas. The measured page is 1280px wide and 5948px tall with 442 visible elements. The queue flagged this site as bot-blocked, but the extraction recorded 442 elements and about 3.5 thousand text characters, so the measurement is the real page.

The first screen in the capture is a dark slate (`#435254`) hero. A white "CBRE" wordmark and a six-item menu (Services, Insights & Research, Properties, People & Offices, Careers, About Us) plus a flag icon and a search icon sit across the top. Below, a portrait photograph of bright blue network cables in a server rack fills the left, and the right column carries a small kicker ("North America Data Center Trends H1 2026"), a white serif headline ("Construction Increases While Vacancy Falls to New Low"), two lines of sans-serif copy ("Supply hit 10,903 MW—a new record—yet vacancy fell to 1.4%...") and a link "Explore the Report" led by a short bright-green dash. A light-gray strip follows with three underlined editorial links (The Weekly Take Podcast, AI's Impact on Office Demand, Scoring Tech Talent 2026), then a deep-green banner "U.S. Real Estate Market Outlook Midyear Review 2026" with another "Explore the Report" link.

The white section that follows opens with a large green serif statement: "We are the global leader in commercial real estate services and investment and a premier provider of critical infrastructure services." Its second sentence is set in a lighter teal-gray. Then "What We Do" (64px) introduces rows separated by hairlines, each with a rotated side label (Insights & Research, Services), a large serif sentence ("Deliver market knowledge and global insights", "Create the real estate solutions of tomorrow") and a short sans-serif description with a green-dash link. The tone is confident and corporate: statements about scale and global reach, data-led headlines and plain verbs ("Explore", "Learn More", "Subscribe").

## Colors

Measured text colors by character count: `#435254` (1408), `#003f2d` (1275), `#ffffff` (415), `#538184` (176), `#012a2d` (171), `#dfe6e5` (40). Measured background area: `#435254` (1845), `#e3e3e3` (307), `#003f2d` (105), `#012a2d` (98), `#ffffff` (6). The page canvas is `#ffffff`; the dark slate is the largest painted area because the hero and header panels are full width.

- **Primary `#003f2d`** is CBRE green: h1, h2 and h3 text, the footer link color and a measured border color (6 occurrences). The site declares it as `--color-primary-1` and `--eds-color-primary-1`. The extractor generated `#ffffff` as primary because the white "Subscribe" button is the one detected CTA; the green is the brand color measured on headlines and banners, so it is primary here and the white button is kept as `button-subscribe`.
- **Green deep `#012a2d`** (`--color-primary-3`) is the text color of the Subscribe button and a measured background area.
- **Accent green `#17e88f`** (`--color-primary-2`, `--eds-color-primary-2`) is declared as the bright accent; the dash that precedes each "Explore" link is this kind of bright green in the capture, and a declared ring shadow `0 0 0 4px` uses it at 60% opacity.
- **Ink `#435254`** (`--color-primary-4`, also `--color-text` and `--eds-color-text`) is the text color on white and the hero panel fill.
- **Neutrals:** `#cad1d3` and `#dadfe0` (`--color-primary-5`, `--color-primary-6`), `#e3e3e3` (the gray editorial strip), `#b3b3b3` (`--color-system-8`, the one measured gray border).
- **Secondary palette** (declared): navy `#032842`, teal-gray `#538184` (measured as text color), seafoam `#80bbad`, sand `#dbd99a` and warm gray `#7f8480`, with lighter variants (`--color-secondary-light-1` to `-5`) and status colors `#e81717` (`--color-system-12`) and `#f1d230` (`--color-system-13`).
- **Text pale `#dfe6e5`** is the 40 characters measured on dark panels.

## Typography

Two families: **Financier Display** (weight 400, a serif) carries 1280 measured characters and all large headings, and **Calibre** (400 and 500) carries 2205 characters. The site declares them as `--eds-font-financier: 'Financier Display', georgia, serif` and `--eds-font-calibre: 'Calibre', arial, sans-serif`, plus Noto and Mice families for other scripts (Arabic, Hebrew, Japanese, Korean, Chinese, Thai).

- **Display (h1):** Financier Display 400, 48px on 48px (the big "We are the global leader..." statement). Mobile: 32px on 36px.
- **Heading (h2 "What We Do"):** Financier Display 400, 64px on 64px. Mobile: 48px on 48px.
- **Subheading (h3 "Deliver market knowledge and global insights"):** Financier Display 400, 60px on 60px.
- **Body:** Calibre 400, 16px on 22px.
- **Button:** Calibre 500, 18px.
- **Nav:** Calibre 500, 16px on 16px.
- **Link:** Calibre 500, 18px with letter-spacing -0.36px.
- **Footer links:** Calibre 500, 20px on 20px with letter-spacing -0.4px.

Calibre text carries negative tracking of -0.02em throughout: 18px/-0.36px (220 characters), 16px/-0.32px (205) and 20px/-0.4px (67). Measured sizes by character count: 16px (1542), 32px (741), 48px (310), 20px (240), 18px (229), 14px (135), 60px (114), 64px (77), 58px (53), 12px (44). The design-token scale names sizes in tenths of a pixel (`--eds-font-size-16: 1.6rem`, `-48: 4.8rem`, `-60: 6.0rem`, `-64: 6.4rem`, `-72: 7.2rem`), weights `--eds-font-weight-light: 300`, `-normal: 400`, `-medium: 500`, `-heavy: 600`, `-bold: 700`, and line heights `--eds-line-height-1` to `-5` (1, 1.2, 1.3, 1.4, 1.5).

Font substitutes: the declared fallbacks are `georgia, serif` for Financier Display and `arial, sans-serif` for Calibre.

## Layout

The grid is wide and generous. The header navigation measures 1088px wide and 48px tall; the hero is a two-column split (portrait image left, text right); the editorial strip is a three-column row separated by thin vertical rules; the "What We Do" rows are a three-zone layout of rotated label, large sentence and small description. The theme declares a base space unit `--eds-space-1: 8px` with multiples (`--eds-space-2` through `--eds-space-10` as `calc(var(--eds-space-1) * n)`), and z-indexes for sticky (400) and header (500).

Measured paddings are 24px (29 occurrences), 48px (20), 16px (19), 8px (17), 56px (10), 80px (1) and 32px (1); the one measured gap is 32px. These match the spacing tokens, which step from 8px to 80px. The Subscribe button has padding 8px 24px 10px and the arrow links have 48px left padding that clears the dash.

Section rhythm is slow: large 48px to 64px serif headlines with ample white space, hairline rules between rows and no cards. The footer measures 498px tall and lists About CBRE, Careers, Corporate Responsibility and Investor Relations among other links.

## Elevation & Depth

The visible elements show no shadows (the box-shadow frequency list is empty). The CSS corpus declares small shadows (`0 1px 2px 0` at 20% black, `0 1px 3px rgba(0,0,0,.14)`, `0 1px 5px` at 14% black) and a ring shadow `0 0 0 4px rgba(var(--color-primary-2-rgb), 0.6)` used in 39 declarations, which is the accent green at 60% opacity.

Depth in the capture comes from color blocking: the dark slate hero, the light-gray editorial strip, the deep-green banner and white content sections, each full width. Photography has no frame or shadow. Motion is declared with a shared easing: `--eds-transition-fast: 0.125s`, `--eds-transition-default: 0.25s` and `--eds-transition-slow: 0.5s`, all `cubic-bezier(0.75, 0.02, 0.5, 1)`.

## Shapes

Corners are square. The Subscribe button, the arrow link, the nav and the footer all report a 0px radius. The border-radius frequency list has only `50%` (6 occurrences), which belongs to circular elements, and the CSS corpus lists many other radii (2px 261 times, 4px 24, 0px 8, 100px 8, 3px 8) none of which is tied to a measured visible component. Banners, hero panels and images are plain rectangles.

Distinctive shapes are linear: a short bright-green horizontal dash before each "Explore" link, hairline rules between content rows, thin vertical dividers between the three editorial links, and rotated side labels. The tokens keep `none: 0px` and the generated `pill: 9999px`.

## Components

**Subscribe button.** White fill (`#ffffff`), `#012a2d` text, Calibre 500 18px, padding 8px 24px 10px, 48px tall, 119px wide, 0px radius. No hover record exists for it.

**Arrow link ("Explore the Report").** White Calibre 500 18px text with -0.36px tracking on dark panels, 48px left padding, 21px tall, a bright-green dash at the leading edge in the capture. On white sections the same pattern is used with a green label ("Explore Insights & Research", "Explore Services").

**Editorial links.** Underlined serif titles in the gray strip with a small underlined sans-serif kicker above each; vertical hairlines separate the three items. "Learn More" in the statement section is an underlined teal-gray serif link.

**Navigation.** `nav` element 1088px by 48px, Calibre 500 16px on 16px, white on the slate hero, a US flag icon and a search icon at the right.

**Banner.** A full-width deep-green bar (`#003f2d` and `#012a2d` are both measured backgrounds) with the serif title "U.S. Real Estate Market Outlook Midyear Review 2026" at left and an "Explore the Report" link at right.

**Footer.** 498px tall; links set in Calibre 500 at 20px on 20px with -0.4px tracking in `#003f2d`.

**Section rows.** Hairline-separated rows with a rotated label, a 60px serif sentence and a small description with a link; no card backgrounds or borders were measured.

## Design System Architecture

No public design system, brand guidelines or brand-asset page is linked from https://www.cbre.com/: the header About Us menu and the footer list Explore, Leadership, Board of Directors, Newsroom, Corporate Responsibility, Investor Relations, Data & Technology, Culture & History, Supply Chain, Contact Us, Digital Accessibility and Responsible AI at CBRE, and none of them refers to brand guidelines. The system is visible in its own CSS custom properties.

Variables come in two parallel layers: unprefixed names (`--color-primary-1` to `-6`, `--color-secondary-1` to `-5`, `--color-secondary-light-1` to `-5`, `--color-system-1` to `-17`, `--font-calibre`, `--font-financier`, `--font-serif`, `--font-sans`) and an `--eds-` prefixed layer (`--eds-color-*`, `--eds-font-*`, `--eds-font-size-*`, `--eds-font-weight-*`, `--eds-line-height-*`, `--eds-space-*`, `--eds-transition-*`, `--eds-animation-timing`, `--eds-z-index-*`). Aliases point from semantic to raw names (`--eds-color-text` is `var(--eds-color-primary-4)`, `--eds-font-serif` is `var(--eds-font-financier)`, `--eds-font-sans-serif` is `var(--eds-font-calibre)`, `--eds-color-white` is `var(--eds-color-system-11)`). Companion `-rgb` variables (`--color-primary-1-rgb: 0, 63, 45`) feed `rgba(var(...))` expressions. Font-size variables are named in pixels and declared in tenths of a rem (`--eds-font-size-16: 1.6rem`).

## Do's and Don'ts

**Do**
- Use CBRE green (`#003f2d`) for headlines and key blocks, `#435254` for body text and hero panels, and white for reading areas.
- Set large statements in Financier Display 400 at 48px to 64px and everything functional in Calibre at 16px to 20px with -0.02em tracking.
- Keep corners square; separate content with hairlines, full-width color bands and white space.
- Lead action links with the short bright-green dash (`#17e88f`).
- Pair a small underlined kicker with a serif title for editorial links.

**Don't**
- Don't add rounded cards, drop shadows or gradients; none were measured on visible elements.
- Don't use the bright green as a large fill; it is the accent for dashes and the ring shadow.
- Don't set body copy in the serif; Calibre carries all running text.
- Don't make the white Subscribe button the global primary action color; green is the brand color.

## Responsive Behavior

One mobile pass was recorded at 390px. Measured at 390px: the h1 is 32px on 36px (48px on 48px at desktop), 342px wide and 468px tall; the h2 "What We Do" is 48px on 48px (64px at desktop) and 342px wide; body copy stays 16px on 22px in a 247px-wide column that is 154px tall; the Subscribe button is unchanged at 18px/500, padding 8px 24px 10px, 119px by 48px; the nav element measures 124px by 48px with no text recorded.

Measured sizes by character count at 390px: 16px (2820), 32px (933), 18px (440), 14px (284), 48px (96), 30px (53), 24px (51), 12px (44). Breakpoint widths, the hero split, the editorial strip and menu behavior at 390px were not measured.

## Iteration Guide

1. Start with canvas `#ffffff`, ink `#435254`, primary green `#003f2d`, accent `#17e88f`; use `#012a2d` for the deepest panels and button text.
2. Headlines: Financier Display 400 at 48px/48px for statements, 64px/64px for section titles (32px/36px and 48px/48px at 390px). Body and UI: Calibre 400 16px/22px and 500 for buttons and links, with -0.02em tracking.
3. Build the hero as a dark `#435254` panel with the image on the left and kicker, serif headline, short copy and an arrow link on the right.
4. Build links as white or green Calibre 500 18px text with a bright-green dash at the left and 48px left padding.
5. Use full-width bands (`#e3e3e3` strip, deep-green banner) and hairline-separated rows instead of cards.
6. Keep every corner at 0px and every surface flat; use the 8px spacing unit and its multiples (8, 16, 24, 32, 48, 56, 80).
