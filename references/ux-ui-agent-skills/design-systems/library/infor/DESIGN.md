---
version: alpha
name: Infor
category: "Design Systems"
description: "Infor is an industry-cloud enterprise software company whose homepage pairs Montserrat headlines (500, 40px) with Source Sans 3 body text (18px) on white and light grey #f2f3f4, deep slate ink #15262e, a single violet primary #460daf for 8px-radius buttons, and a signature red #d5000e for the logo, eyebrows and active navigation."
colors:
  canvas: "#ffffff"
  ink: "#15262e"
  primary: "#460daf"
  on-primary: "#ffffff"
  surface-grey: "#f2f3f4"
  accent-red: "#d5000e"
  lavender: "#c4b8f2"
  blush: "#ffd3d2"
  hairline: "#dee0e2"
  text-input-text: "#000000"
typography:
  display:
    fontFamily: Montserrat, "Montserrat Fallback", sans-serif
    fontSize: 40px
    fontWeight: 500
    lineHeight: 48px
  display-mobile:
    fontFamily: Montserrat, "Montserrat Fallback", sans-serif
    fontSize: 28px
    fontWeight: 500
    lineHeight: 36px
  body:
    fontFamily: "\"Source Sans 3\", \"Source Sans 3 Fallback\", Helvetica, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 26px
  button:
    fontFamily: Montserrat, "Montserrat Fallback", sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  nav:
    fontFamily: "\"Source Sans 3\", \"Source Sans 3 Fallback\", Helvetica, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 24px
  input:
    fontFamily: "\"Source Sans 3\", \"Source Sans 3 Fallback\", Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 8px
  sm: 9px
  md: 16px
  lg: 20px
  xl: 100px
  pill: 9999px
spacing:
  s1: 5px
  s2: 8px
  s3: 12px
  s4: 14px
  s5: 16px
  s6: 18px
  s7: 20px
  s8: 24px
  s9: 28px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 5px 16px
    height: 40px
    borderColor: "{colors.primary}"
  button-outline:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    borderColor: "{colors.primary}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 8px 16px
    height: 48px
    borderColor: "{colors.hairline}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.surface-grey}"
    textColor: "{colors.text-input-text}"
    padding: 32px 0px
---

## Overview

Infor's homepage reads as a confident, restrained enterprise brand. The captured page starts with a two-row header: a small utility row (Resources, Blog, Careers, Customer Center, each with a line icon), then the red lowercase "infor" wordmark on the left, search and language icons, an outlined "Contact Us" button and a filled violet "Watch Demo" button on the right. Below sits the main navigation (Industries, Products, Platform, Services & Support, Partners, About) in 14px Source Sans 3, and the active item "About" is red with a short red underline. In the capture a mega-menu is open: a light grey panel (#f2f3f4) with three columns of plain links (Infor News, Analyst Reports, Customer Stories, Infor Office Locations, Data Privacy and so on) and a lavender promotional tile titled "See how Infor measures up". A white chat assistant panel ("Speak now", "Ask Nina a question") overlaps the right side with a soft shadow, and a round cookie button sits at the left edge.

Below the menu, a carousel indicator introduces an eyebrow label, "MEET INFOR", in wide-tracked uppercase red, followed by the H2-style headline "Enterprise software and AI that know your industry" in Montserrat at 40px. The paragraph is 18px Source Sans 3 with an inline violet underlined link ("AI agents"). A row of customer logos in their own brand colors follows, then a large rounded light-grey panel headed "Built for your industry. Not retrofitted to it." (again with a red tracked eyebrow, "INFOR CLOUDSUITES") that holds a four-by-two grid of industry cards: Industrial Manufacturing, Distribution, Food & Beverage, Automotive, Fashion, Healthcare, Aerospace & Defense and Public Sector. Each card has a thin grey line icon, a Montserrat title, a short description and a violet link with an arrow ("Manufacturing industry"). A violet-outlined "View all industries" button with an arrow sits at the panel's top right.

The tone is declarative and benefit-led ("Keep goods flowing smoothly around the world", "Speed time to market for new styles"). There are no people photographs in the visible section: the imagery is logos, line icons and product-level tiles.

## Colors

- **Canvas #ffffff** is the page and card background.
- **Ink #15262e** is the dominant text color, a very dark teal-slate used for body copy, headings and navigation.
- **Primary #460daf** is a deep violet used for the filled buttons, outlined button borders and labels, and in-text and card links.
- **Surface-grey #f2f3f4** covers the mega-menu, the large industry panel and the footer.
- **Accent-red #d5000e** is the brand red, measured as a text color and visible in the logo, the active navigation item and the uppercase eyebrows. It is not used for buttons.
- **Lavender #c4b8f2** and **blush #ffd3d2** are measured text colors; the capture does not show where they are used, so treat them as secondary accents. The lavender tile seen in the mega-menu is the same family as the violet.
- **Hairline #dee0e2** is the 1px border on cards and inputs.
- **Text-input-text #000000** is the typed-text color in form fields.

The effect is a mostly neutral page where violet means action and red means identity. Customer logos and the AI assistant add third-party color but are not part of the palette.

## Typography

Two families split the work, both web fonts with metric fallbacks (the declared names include "Montserrat Fallback" and "Source Sans 3 Fallback"). **Montserrat** is used for headlines and buttons: 40px at weight 500 with a 48px line height (28px with 36px on a 390px phone), and 16px at weight 600 with a 24px line height for button labels. **Source Sans 3** is the text face: 18px at weight 400 with a 26px line height for body, 16px for form input text, and 14px for the navigation. Eyebrow labels are uppercase with wide letter spacing in red. The page also uses 24px, 28px and 46px sizes in smaller headings and card titles, and weights 400, 500 and 600 only. The pairing gives a geometric, slightly wide heading voice against a humanist, compact text face, which keeps long enterprise copy readable.

Neither family is declared as proprietary in the shipped CSS; Helvetica and generic sans-serif are the stated fallbacks for Source Sans 3.

## Layout

The layout is a centered container inside the 1280px capture, so panels appear as inset rounded cards rather than full-bleed bands. Header content aligns to the same edges. The industry grid is four columns by two rows with equal-height cards and consistent gutters; text blocks above it are constrained to about two thirds of the width, leaving air on the right. Padding values measured on the page include 28px, 14px, 5px, 40px, 16px and 20px; the spacing tokens run from 5px to 32px, with 32px used above and below the footer content. Vertical rhythm is generous: sections are separated by large white gaps, and the eyebrow, headline and paragraph stack tightly inside each section.

## Elevation & Depth

Depth is mostly color-based: white cards sit on the light grey panel, and the mega-menu is a grey sheet beneath the white header. One shadow was measured, a soft black at 20 percent opacity (rgba(0, 0, 0, 0.2) with 4px vertical offset and 8px blur), which belongs to floating elements such as the assistant panel and the menu drop. Cards rely on the #dee0e2 border instead of shadows. The industry panel carries a faint diagonal light-and-shade pattern in its background that suggests depth without any extra element.

## Shapes

Radii are modest and consistent: 8px for buttons and inputs, 16px for cards, 20px for the large grey panels, a 9px radius on a small element, a 50 percent radius on circular elements and 100px on pill-shaped ones. Buttons are therefore rectangles with softened corners rather than pills, which gives the brand a more corporate feel than consumer fintech.

## Components

- **button-primary**: violet #460daf fill, white label in Montserrat 16px at weight 600, 5px 16px padding, 40px height, 8px radius and a matching violet border. Examples on the page include "Watch Demo", "Register now", "Submit" and "See Infor Velocity Suite in action".
- **button-outline**: white fill with a violet border and violet label, used for "Contact Us", "View all industries" and "View all customer stories", followed by a small arrow icon.
- **nav / nav-link**: 14px Source Sans 3 in ink on white, with the red active state described above.
- **text-input**: white fill, black 16px text, 1px #dee0e2 border, 8px radius, 8px 16px padding and 48px height.
- **card**: white, 16px radius, hairline border, ink text, a line icon at top, and a violet link row at the bottom.
- **footer**: a #f2f3f4 band with black text and 32px vertical padding.

## Design System Architecture

Infor's own system is the Infor Design System (IDS). Its public landing page at [design.infor.com](https://design.infor.com/) describes "SoHo" as "Infor's design language, built to capture industry requirements and business role specificity", and links to Web Components, Icons, UX Writing and Getting Started, with top-level Get Started, Foundations, Components, Patterns and Resources sections. The deeper pages (foundations, components, get-started) redirected to a Microsoft single-sign-on sign-in when opened, so their content could not be read and nothing here is taken from them.

The publicly reachable part of the system is the web-components demo at [wc.design.infor.com](https://wc.design.infor.com/), titled "IDS Demo App", which lists components such as Button, Menu Button, Split Button, Toggle Button, Theme Switcher, Color, Input, Dropdown, Date Picker, Modal and many form controls, each at an `ids-` prefixed route such as `/ids-button`. Its components are custom elements with shadow DOM and render text in the Source Sans Pro family; because they live inside shadow roots, the page measured by the extractor produced no usable button values, so none of the demo's values are used as tokens. A one-off probe of the single shadow-DOM menu button that rendered on the button page read an 8px radius, weight 600 and 16px size, and a transparent fill.

Because the system's marketing counterpart is a different codebase, the homepage's root CSS exposes only font variables (`--font-montserrat`, `--font-source-sans-3`) and third-party editor variables (`--ck-*` from CKEditor). No public token file for the marketing site was found, so the tokens in this file describe the shipped page, not the IDS enterprise theme.

## Do's and Don'ts

Do use violet #460daf for every primary action and for inline links, and keep the labels in Montserrat semibold. Do set headlines in Montserrat 500 and everything else in Source Sans 3. Do use red #d5000e only for identity moments: logo, eyebrows and the active navigation item. Do separate groups with a #f2f3f4 panel and white cards inside it.

Don't use red for buttons or warnings in marketing layouts. Don't round buttons into pills; the measured radius is 8px. Don't add shadows to cards; use the hairline. Don't mix Source Sans Pro (used by the component demo) and Source Sans 3 (used by the marketing site) on the same surface. Don't fill the page with photographs; the pattern is line icon plus title plus short paragraph.

## Responsive Behavior

On a 390px phone the main headline drops from 40px (48px line) to 28px (36px line). Body, button and navigation sizes were not measured separately on mobile. The four-column industry grid and the two-row header were not captured at phone width, so no layout claims are made beyond the type step-down. Keep the 40px button height and the 8px radius at every width, and keep the 18px body size readable by avoiding more than about two thirds of the container for long paragraphs.

## Iteration Guide

1. Start with canvas #ffffff, ink #15262e, Source Sans 3 at 18px on a 26px line.
2. Add Montserrat 500 at 40px (28px on mobile) for headlines, preceded by an uppercase tracked red eyebrow in #d5000e.
3. Use violet #460daf for filled buttons (40px tall, 8px radius) and for outlined secondary buttons.
4. Put content in 16px-radius white cards with #dee0e2 borders on a #f2f3f4 panel with a 20px radius.
5. Keep icons as thin grey line drawings; end each card with a violet link and arrow.
6. If building product UI, use the Infor Design System documentation after signing in, because its foundations and component pages were not publicly readable.
