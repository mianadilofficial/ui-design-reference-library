---
version: alpha
name: "Gilead Sciences"
category: "Pharma"
description: "Gilead Sciences corporate site: white and #f4f5f4 canvas, #222222 text, crimson #c5203f square-cornered buttons 50px to 60px tall, proxima-nova from 18px to 40px at weights 400 and 500, pale pink, teal and blue stat panels with a 5px radius and soft grey shadow, and a #e2eaf4 blue footer."
colors:
  canvas: "#ffffff"
  page-largest: "#f4f5f4"
  ink: "#222222"
  primary: "#c5203f"
  on-primary: "#ffffff"
  surface-blue: "#e2eaf4"
  ink-soft: "#464646"
  ink-slate: "#54565b"
  ink-deep: "#1e1e1e"
  ink-muted: "#6d6d6d"
  hairline: "#e6e6e6"
  link: "#266ef1"
  nav-text: "#000000"
typography:
  display:
    fontFamily: proxima-nova, sans-serif
    fontSize: 33.3333px
    fontWeight: 400
    lineHeight: 40px
  heading:
    fontFamily: proxima-nova, sans-serif
    fontSize: 40px
    fontWeight: 500
    lineHeight: 48px
  subheading:
    fontFamily: proxima-nova, sans-serif
    fontSize: 28px
    fontWeight: 500
    lineHeight: 31.92px
    letterSpacing: "-0.42px"
  body:
    fontFamily: proxima-nova, sans-serif
    fontSize: 21.3333px
    fontWeight: 400
  button:
    fontFamily: proxima-nova, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 24px
  nav:
    fontFamily: proxima-nova, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.722px
rounded:
  xs: 5px
  none: 0px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 7px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 13.5px
  s9: 19px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12px 20px
    height: 60px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12px 20px
    height: 50px
  link:
    textColor: "{colors.link}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.nav-text}"
    rounded: "{rounded.none}"
    padding: 20px 0px
  nav-link:
    textColor: "{colors.link}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.surface-blue}"
    textColor: "{colors.ink-soft}"
    rounded: "{rounded.none}"
    padding: 54px 0px 27px
---

## Overview

Gilead Sciences' home page (gilead.com) presents a research-based biopharmaceutical company in a bright, clean, medical-editorial style. The measured page opens with a white header holding the red-and-grey GILEAD wordmark at the left and search and menu icons at the right. Beneath it comes an all-caps statement, "ENABLING FUTURE GLOBAL ACCESS", with a short paragraph about once-yearly lenacapavir and an underlined "Learn more." link. A full-width laboratory photograph with purple-gloved hands follows. Next is a two-column block: the headline "Delivering Transformative Therapies and Advancing Health Equity" with two words picked out in orange, a crimson "Learn More About Gilead" button, and three stacked statistic panels (25+ medicines offered globally, 53 clinical programs, #1 funder of philanthropic HIV programs in the U.S.). A second photographic band, "Using Science to Improve the Lives of People and Communities", closes the visible page with an "Explore Science" button.

The tone is institutional but human: scientists in blue lab coats, close-ups of gloved hands, short declarative headlines, and numbers presented as proof points. Crimson is reserved for actions, so every button reads immediately as the thing to click.

## Colors

- **Canvas** `#ffffff` for header and text blocks; **page-largest** `#f4f5f4`, the most widely measured background area, is a very light warm grey used for broad content bands.
- **Ink** `#222222` carries 1881 text characters; supporting inks are `#464646` (ink-soft), `#54565b` (ink-slate), `#1e1e1e` (ink-deep, the h1 color) and `#6d6d6d` (ink-muted). Other measured text colors include `#404040`, `#2c415e`, `#203662`, `#000000` for navigation, and white on photography and buttons.
- **Primary** `#c5203f`, a crimson, is the fill of both measured button styles and of the logo mark. The same color also appears as text for a few characters. On hover the button fill becomes `rgb(136, 18, 34)` (about `#881222`), recorded in the hover probe.
- **Link** `#266ef1` is the measured link blue.
- **Surface blue** `#e2eaf4` is the footer and the third stat panel; two further tints, `#e0eeef` (teal) and `#fbe4ef` (pink), back the other stat panels, each with a matching pale border (`#d1edef`, `#f8c9cf`, `#dbe9f3`). Their accent numerals use teal `#55a2a8`, red `#ea5d70` and blue `#458cbd` measured text colors.
- **Hairline** `#e6e6e6` is the main border color.

The Bootstrap variables in the root (`--bs-primary` `#0d6efd`, `--bs-success`, `--bs-danger` and so on) are framework defaults and not Gilead brand colors; they are not used here.

## Typography

One family: proxima-nova, loaded in weights 400, 500, 600 and 700 (including 400 italic), measured on all 2997 characters. A Font Awesome icon font is also loaded. Weights by character are 400 (1666), 500 (1152) and 700 (179).

- **Display**: 33.3333px, weight 400, line height 40px, the all-caps statement.
- **Heading**: 40px, weight 500, line height 48px, section headlines.
- **Subheading**: 28px, weight 500, line height 31.92px, letter spacing -0.42px.
- **Body**: 21.3333px, weight 400.
- **Button**: 18px, weight 500, line height 24px.
- **Nav**: 18px, weight 400, line height 25.722px.

Other measured sizes are 20px (710 characters), 16px, 14px, 48px, 32px and 60px (the stat numerals). The site loads proxima-nova through a font service; if it is unavailable, any humanist sans of similar width would be a substitute, but that substitution is not measured.

## Layout

The page is 1280px wide and 6649px tall. The header is a single row at full width with a 1px hairline beneath. Text blocks are left aligned in a column about half the page width; photography runs full bleed. The "Delivering Transformative Therapies" section splits into a text column and a column of three stacked stat panels, each panel an icon in a thin outline, a vertical divider, a large numeral and a caption. The second photographic band places text on the right over a light grey fade. Measured spacing steps: 2, 4, 5, 7, 8, 10, 12, 13.5, 19 and 20px; nav padding is 20px 0 and footer padding 54px 0 27px.

## Elevation & Depth

Two soft shadows are measured, both in a pale grey: `rgba(222, 222, 222, 0.4) 0px 10px 30px 0px` (six uses) and `rgba(222, 222, 222, 0.4) -25px 5px 30px 0px` (one use). They lift cards softly off the `#f4f5f4` band. Stat panels use a vertical tint gradient and a thin tinted border instead of a shadow. Photographic bands fade into the surrounding white with a gradient.

## Shapes

Only one radius is measured: 5px, used on eleven elements (stat panels and cards). Buttons are square at 0px, so the system pairs soft 5px panels with hard-edged crimson buttons. Tokens: `xs` 5px and `none` 0px.

## Components

- **Primary button**: `#c5203f` fill, white text, proxima-nova 18px weight 500, padding 12px 20px, height 60px, radius 0px, followed by an arrow glyph ("Learn More About Gilead", "View Stories@Gilead").
- **Secondary button**: the same crimson fill, padding 12px 20px, height 50px, radius 0px ("View All Therapeutic Areas", "Explore Science").
- **Stat panel**: 5px radius, pale tint, thin tinted border, outlined icon, numeral at 60px, caption at 16px.
- **Navigation**: white bar with 20px vertical padding, black text, search and menu icons at the right.
- **Link**: `#266ef1` 18px text, or underlined dark text for inline "Learn more." links.
- **Footer**: `#e2eaf4` background, `#464646` text, 54px top and 27px bottom padding.

## Design System Architecture

No public Gilead design system or brand guideline was found in the measured page. The shipped CSS is Bootstrap-based (the root exposes the full `--bs-*` variable set) with a site layer on top: a custom variable `--font-family-primary` set to `"proxima-nova", sans-serif`, Font Awesome icons and component styles for buttons and stat panels. The brand system is therefore de-facto: one typeface, one crimson, pale category tints, square buttons and 5px panels.

## Do's and Don'ts

- Do use crimson `#c5203f` only for buttons and key marks, with white text on top.
- Do keep buttons square-cornered and 50px to 60px tall, with an arrow.
- Do pair large numerals with short captions inside tinted 5px panels.
- Do use real laboratory and people photography, full bleed.
- Don't use Bootstrap's blue `#0d6efd` or its other `--bs-*` colors.
- Don't round buttons; the measured radius is 0px.
- Don't add heavy shadows; the measured shadows are pale grey `rgba(222, 222, 222, 0.4)`.
- Don't set body text below 16px.

## Responsive Behavior

The mobile pass recorded the h1 (33.3333px, weight 400, line height 40px), body text (21.3333px, weight 400) and the button (18px, weight 500, line height 24px) with the same values as desktop. The mobile pass recorded only sizes; column counts, breakpoints and navigation behaviour are not measured.

## Iteration Guide

1. Start on `{colors.canvas}` with `{colors.ink}` text and add `{colors.page-largest}` for broad bands.
2. Add one crimson `{components.button-primary}` per section.
3. Present facts in tinted 5px panels using `{rounded.xs}` and the pale grey shadow.
4. Use `{typography.heading}` for section titles and `{typography.display}` for the all-caps statement.
5. Re-measure before adding dark mode or additional hover states beyond the button darkening.

Imagery and microcopy: the capture shows laboratory photography with saturated accents (purple nitrile gloves, blue coats, yellow, green and red bottle caps), team portraits of scientists wearing safety glasses, and simple outline icons of cells and a test tube on the stat panels. Headlines are sentence case with selective emphasis, as when "Transformative Therapies" is highlighted in an orange tone; buttons begin with a verb ("Learn More", "Explore", "View All"). The copy speaks in the first person plural ("we invest", "we're helping") and keeps claims short, each followed by a numeric or program-level proof point.
