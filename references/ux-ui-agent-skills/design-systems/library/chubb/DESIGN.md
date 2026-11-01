---
version: alpha
name: "Chubb"
category: "Banking & Insurance"
description: "Chubb's US home page: a white canvas with black text, a violet accent (#6e27c5) used on emphasis, rules and card underlines, PublicoHeadline serif for the 62px hero and 40px headings, Lato 16px body at 26px line-height, square outlined buttons, and 0.2-alpha card shadows over documentary people photography."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  skip-link-bg: "#01c1d6"
  primary: "#6e27c5"
  ink-on-hero: "#f1f1f1"
  ink-footer-muted: "#afafaf"
  border-light: "#d7d7d7"
  border-slate: "#4b4e53"
typography:
  display:
    fontFamily: PublicoHeadline
    fontSize: 62px
    fontWeight: 400
    lineHeight: 72px
  display-mobile:
    fontFamily: PublicoHeadline
    fontSize: 50px
    fontWeight: 400
    lineHeight: 60px
  subheading:
    fontFamily: PublicoHeadline
    fontSize: 40px
    fontWeight: 400
    lineHeight: 46px
  body:
    fontFamily: Lato
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26px
  nav:
    fontFamily: lato, Verdana
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
  button-secondary:
    fontFamily: lato
    fontSize: 16px
    fontWeight: 700
    lineHeight: 26px
rounded:
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 15px
  s5: 16px
  s6: 18px
  s7: 24px
  s8: 32px
  s9: 40px
  s10: 48px
components:
  button-secondary:
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    padding: 18px 40px
    height: 66px
    borderColor: "{colors.ink}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  skip-link:
    backgroundColor: "{colors.skip-link-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 4px 15px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    boxShadow: rgba(0, 0, 0, 0.2) 0px 2px 6px 0px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink-footer-muted}"
---

## Overview

Chubb's own site describes a global insurer that traces its roots to 1792, operates in 54 countries and territories and has about 45,000 employees (https://about.chubb.com/). The page's tone there is "confident and institutional," with the headline "Protecting the present and building a better future." The measured page is the US home page, https://www.chubb.com/us-en/ (title "Insurance for Individuals & Businesses | Chubb"), 1280px wide and 4,298px tall.

The home page is a composed editorial layout built for trust. A white header holds the spaced-letter CHUBB wordmark at the left, four audience links (Individuals & Families, Businesses, Agents & Brokers, Embedded Insurance) in the middle and a bold utility group (About, Claims, Login & Pay Bill) with a search icon at the right. Beneath it a large hero photograph of professionals in conversation is darkened behind the light serif headline "Helping protect what matters most.", with a small black pause control at its lower right. A white statement panel overlaps the bottom of the hero: "At Chubb, we deliver insurance with excellence, being there when you need us most. We provide exceptional service to our customers and business partners–it's who we are." The phrase "we deliver insurance with excellence," is set in italic violet. Next, a small tracked label "WHO WE SERVE" with a violet underline introduces three photo cards (Individuals & Families, Businesses, Agents & Brokers), then an Embedded Insurance panel with a violet-blue gradient image, then a "WHY CHUBB" block whose headline is "Insurance excellence is our starting point." Photography is warm, candid and people-first (a man carrying a smiling girl, a man in an apron on the phone, a smiling woman in a blazer), which balances the formal serif type.

## Colors

The page is white (`{colors.canvas}` #ffffff) and black: `{colors.ink}` (#000000) is the text color on 1,612 measured characters and the footer fill (1,055 area units); white text covers 582 characters. The one brand hue is a violet, `{colors.primary}` (#6e27c5), measured as the text color of 57 characters (the italic emphasis) and declared as `--bs-purple`. In the capture it also appears as the underline under "WHO WE SERVE" and "WHY CHUBB" and as a rule along the bottom of each card. It is an accent for emphasis and wayfinding; no filled button was detected.

Supporting values: `{colors.ink-on-hero}` (#f1f1f1) is the hero headline color (34 characters); `{colors.ink-footer-muted}` (#afafaf) is the footer text color (11 characters); `{colors.border-light}` (#d7d7d7, 3 elements) and `{colors.border-slate}` (#4b4e53, 1 element) are measured border colors; and `{colors.skip-link-bg}` (#01c1d6, 6 area units) is the background of the "Skip to main content" link, an accessibility control rather than a brand surface. The generated primary was Bootstrap's default blue (#0d6efd, the `--bs-primary` value and the color of an empty link); it is a framework default, not a brand color, and has been dropped. Light grey (#f1f1f1) and mid grey (#afafaf) were measured as text colors. No dark theme was measured.

## Typography

Two families: PublicoHeadline, a serif, for display and card headlines (494 measured characters), and Lato, a sans, for everything else (1,802 characters across the "Lato" and "lato" declarations). The loaded faces are lato at 300, PublicoHeadline at 400 and the icomoon icon font (a "lato bold" face is also declared in the stylesheet). By character count the weights are 400 (1,802), 700 (435) and 300 (59).

- `{typography.display}`: PublicoHeadline 62px, weight 400, line-height 72px, the hero headline.
- `{typography.display-mobile}`: PublicoHeadline 50px, line-height 60px, the same headline at the mobile viewport.
- `{typography.subheading}`: PublicoHeadline 40px, line-height 46px, e.g. "Insurance excellence is our starting point."
- `{typography.body}`: Lato 16px, weight 400, line-height 26px.
- `{typography.nav}`: lato 16px, weight 300, line-height 24px, the header and utility links (the capture shows the utility links bold).
- `{typography.button-secondary}`: lato 16px, weight 700, line-height 26px, the label of the outlined audience button.

Measured sizes by character count: 16px (1,485), 14px (307), 34px (167), 40px (136), 28px (118), 50px (39), 62px (34) and 12px (10). The serif characters (494) equal the sum of the characters at 28, 34, 40, 50 and 62px (118 + 167 + 136 + 39 + 34), so every headline size is serif; which size belongs to which headline, beyond the two measured roles (62px hero, 40px "Why Chubb" title), was not isolated. The small tracked labels use 1px letter-spacing at 16px (122 characters); all other text measured no letter-spacing. Substitutes if the licensed serif is unavailable: a text serif with a light, open design such as Source Serif or Georgia;

## Layout

The extracted page body is 1,265px wide in a 1280px viewport. The hero runs full-bleed; the content below sits in a centered column with the statement panel overlapping the hero's bottom edge. The header measures 79px tall (75px at mobile). Measured gaps are 32px (8 elements), 24px (6), 48px (5), 8px (3), 16px (2) and 12px (1); measured paddings are 12px (20), 60px (15), 24px (12), 8px (8), 80px (6), 40px (4) and 120px, 32px and 18px (3 each). Card rows are three equal columns; the Embedded Insurance panel spans the full column width with copy at the left and a gradient image panel at the right; the "WHY CHUBB" block pairs overlapping photographs at the left with the copy at the right, and a slice of an orange image peeks in from the right edge. Section labels are centered above card rows; block labels are left-aligned inside their blocks.

## Elevation & Depth

One shadow style was measured, `rgba(0, 0, 0, 0.2) 0px 2px 6px 0px`, on 4 elements: the three audience cards and the embedded-insurance panel in the capture. It is soft and low. Cards are white with this shadow and a violet rule along the bottom; the hero photo and overlapping statement panel create the page's other layering. Borders measured: #000000 (6 elements), #d7d7d7 (3), #afafaf, #ffffff and #4b4e53 (1 each).

## Shapes

Edges are square. The only radii measured are 50% (7 elements) and 100% (4), which the capture shows on the circular outlined arrow buttons in each card and the circular photo crop in the Embedded Insurance panel. Cards, panels, photos and the outlined button have no radius.

## Components

- **Outlined button** (`button-secondary`): transparent fill, 1px solid `{colors.ink}` border and text, `{typography.button-secondary}`, padding 18px 40px, 66px tall, 232px wide for the label "Individuals & Families", square corners.
- **Navigation** (`nav`, `nav-link`): white header, `{colors.ink}` text at `{typography.nav}`; hover states were not measured.
- **Skip link** (`skip-link`): `{colors.skip-link-bg}` fill, `{colors.ink}` text, padding 4px 15px, for "Skip to main content".
- **Audience card** (`card`): white, `{colors.ink}` text, the low shadow, a photo above a serif title and a circular outlined arrow button, and a violet bottom rule.
- **Eyebrow label**: Lato 16px with 1px letter-spacing in capitals ("WHO WE SERVE", "WHY CHUBB") over a short violet underline.
- **Text link**: "Learn More" followed by an arrow, in Lato bold.
- **Footer** (`footer`): `{colors.ink}` fill with `{colors.ink-footer-muted}` text, containing Quick links (Report a Claim, Contact Us, Global Offices), a United States group and a long legal list.

## Design System Architecture

No public brand guideline or design system was found: the home page (https://www.chubb.com/us-en/) links an Accessibility Statement and news sites, and the corporate page (https://about.chubb.com/) has no link to brand guidelines, logo rules or a press kit. The de-facto system is a Bootstrap-based stylesheet: 103 root custom properties, almost all `--bs-*` Bootstrap variables (for example `--bs-primary` #0d6efd, `--bs-body-color-rgb`, `--bs-border-radius-xl`) that mostly do not match the rendered page, so the rendered measurements were used instead. The brand-specific hints are `--bs-purple` (#6e27c5, matching the accent text) and the declared font faces: Chubb-Publico-Text-VN (Roman, Semibold, Bold and italic cuts), PublicoHeadline-Light and Roman, PublicoText-Roman, Publico-Roman, a CICA_Gotham family (Thin through Black, plus Condensed), NotoSansCJKkr and Lato. Only PublicoHeadline, lato and icomoon were loaded on the measured home page, along with FontAwesome in the stylesheet.

## Do's and Don'ts

- Do keep the page white and black with serif headlines and Lato body copy.
- Do use the violet `{colors.primary}` for italic emphasis, short underlines and card bottom rules.
- Do build cards as white blocks with the 0.2-alpha two-pixel shadow and square corners, with a photo of people above the title.
- Do use circular outlined arrow buttons inside cards.
- Don't use Bootstrap's default blue (#0d6efd) or other `--bs-*` default colors as brand colors.
- Don't round cards, photos or buttons; the measured corners are square.
- Don't document the skip link's cyan as a brand color.
- Don't set headings in Lato or long body text in the serif.

## Responsive Behavior

Measured at a 390px viewport: the hero headline drops from 62px/72px to 50px/60px; body copy stays 16px/26px; the character counts of the larger sizes carry over one-to-one with smaller sizes (167 characters at 34px on desktop are 167 at 26px, 136 at 40px become 136 at 34px, 118 at 28px become 118 at 20px, 39 at 50px become 39 at 40px, 34 at 62px become 34 at 50px). The header measures 75px tall. The 14px text grows from 307 to 699 characters and 16px from 1,485 to 1,394. Column counts, the mobile menu and card stacking were not measured.

## Iteration Guide

1. Start with `{colors.canvas}` and `{colors.ink}`; reach for `{colors.primary}` only for emphasis and rules.
2. Set hero and section headlines in PublicoHeadline (62px and 40px), body in Lato 16px/26px.
3. Build cards with a photo of people, a serif title, a circular arrow button and the 0.2-alpha shadow.
4. Use tracked 16px capitals for eyebrow labels with a short violet underline.
5. Keep buttons outlined, black and square.
6. Check any value against `web/data/extracted/chubb.json` before adding it.
