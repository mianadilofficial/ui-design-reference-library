---
version: alpha
name: Aventura Dental Arts
category: "Product & SaaS"
description: "Aventura Dental Arts (ADA), a premium esthetic dental practice in South Florida: a #eae8e8 warm-grey and #14151d navy split palette, Instrument Serif headlines at 136px with -4.08036px tracking and an italic accent, Inter Tight body at weight 600 and 700 buttons, and pill-shaped Book A Call buttons."
colors:
  canvas: "#eae8e8"
  page-body: "#14151d"
  ink: "#424346"
  primary: "#14151d"
  on-primary: "#eae8e8"
  surface-beige: "#dad5d3"
  ink-white: "#ffffff"
  ink-muted-on-dark: "#e9e7e766"
  ink-reveal: "#20232b26"
  hairline: "#e9e7e726"
  brand-gold: "#b38c61"
  error: "#ff3c3c"
typography:
  display:
    fontFamily: InstrumentSerif
    fontSize: 136px
    fontWeight: 400
    lineHeight: 108.8px
    letterSpacing: "-4.08036px"
  display-xl:
    fontFamily: InstrumentSerif
    fontSize: 245.333px
    fontWeight: 400
    lineHeight: 206.08px
    letterSpacing: "-9.81333px"
  display-mobile:
    fontFamily: InstrumentSerif
    fontSize: 71.76px
    fontWeight: 400
    lineHeight: 60.2784px
    letterSpacing: "-2.8704px"
  heading:
    fontFamily: InstrumentSerif
    fontSize: 73.7778px
    fontWeight: 400
    lineHeight: 68.6133px
    letterSpacing: "-1.47484px"
  title:
    fontFamily: InstrumentSerif
    fontSize: 48.8889px
    fontWeight: 400
    lineHeight: 42.5333px
    letterSpacing: "-1.46631px"
  tagline:
    fontFamily: InstrumentSerif
    fontSize: 31.1111px
    fontWeight: 400
    lineHeight: 26.4444px
    letterSpacing: "-0.932978px"
  body:
    fontFamily: InterTight
    fontSize: 17.7778px
    fontWeight: 600
    lineHeight: 19.3778px
    letterSpacing: "-0.355556px"
  caption:
    fontFamily: InterTight
    fontSize: 13.3333px
    fontWeight: 400
    lineHeight: 14px
    letterSpacing: 0.133689px
  label:
    fontFamily: InterTight
    fontSize: 10.6667px
    fontWeight: 500
    lineHeight: 12.6933px
  nav:
    fontFamily: InterTight
    fontSize: 12.4444px
    fontWeight: 500
    lineHeight: 14.0622px
    letterSpacing: "-0.125156px"
  button:
    fontFamily: InterTight
    fontSize: 12.4444px
    fontWeight: 700
    lineHeight: 14.0622px
    letterSpacing: "-0.248889px"
rounded:
  none: 0px
  xs: 56.89px
  pill: 9999px
  circle: 50%
spacing:
  s1: 1.78px
  s2: 3.56px
  s3: 5.33px
  s4: 7.11px
  s5: 10.67px
  s6: 14.22px
  s7: 21.33px
  s8: 24.89px
  s9: 28.44px
  s10: 42.67px
components:
  button-light:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 43px
  button-dark:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 43px
  header:
    textColor: "{colors.page-body}"
    typography: "{typography.nav}"
    padding: 10.6667px 28.4444px
  link-row:
    textColor: "{colors.on-primary}"
    typography: "{typography.label}"
    padding: 21.3333px 0px
    borderColor: "{colors.hairline}"
  text-input:
    textColor: "{colors.on-primary}"
    typography: "{typography.caption}"
    rounded: "{rounded.none}"
    padding: 0px 28.4444px
    height: 57px
  footer:
    textColor: "{colors.on-primary}"
    typography: "{typography.title}"
    padding: 113.778px 28.4444px 21.3333px
---

## Overview

Aventura Dental Arts (header mark "ADA", page title "Home | ADA") is a three-location premium esthetic dental practice in South Florida: Aventura, Bay Harbor Islands and Coral Gables (from the homepage footer). The homepage measured 16381px tall at 1280px wide with 796 visible elements. The site is an editorial, high-contrast scroll: huge condensed serif headlines, small crisp sans, and a pairing of two flat fields, warm grey `#eae8e8` and deep navy `#14151d`, that alternate by section (measured background areas 8229 and 7478 units).

The first screen is split vertically. The left half is the light field with the headline "Premium Esthetic Dentistry" in dark `#424346` serif; the right half is a blurred, blue-lit photograph of a dental office with a person's hair at the edge, where the same headline continues in white, the last word in italic. A small left caption "Based in: Aventura / Bay Harbor / Coral Gables" sits bottom-left, the italic serif tagline "Designing smiles that are as healthy as they are beautiful" bottom-centre, and "We combine advanced science with an artist's touch." bottom-right. The header has the ADA arc mark with "Aventura Dental Arts", "Menu" and "Services" controls, "Patient form" with an arrow, a phone number with a location caption, and a pill "Book A Call" with a plus sign.

Next come a long statement ("Our goal is ... to deliver world-class dental and aesthetic care", set in 73.7778px serif at 15% alpha ink, 146 characters), four solution cards, service categories (Esthetic, Restorative, Preventive, Beyond the Smile), a technology block ("Dentistry for Exceptional Results": iTero, Solea Laser, intraoral camera), a "Team of Experts" section with black-and-white portraits, patient testimonials, and a closing "Ready to Transform Your Smile? Book a call." with a location selector and a Name/Phone/Message form. The copy voice is polished and aspirational ("bespoke", "world-class", "effortlessly enhanced"), precise rather than clinical.

## Colors

- **Canvas `#eae8e8`** is the light field (the largest background area, 8229) and about 82% of the capture's pixels. **Page body `#14151d`** is the navy root fill and the dark sections (7478). A third measured background, **surface beige `#dad5d3`**, is a minor area (28).
- **Ink `#424346`** (611 characters) is dark text on the light field and the fill of the mobile "Book a Call" button. **On-primary `#eae8e8`** (2244 characters) is light text on navy. **Ink white `#ffffff`** (36 characters) is the white half of the split headline.
- **Primary `#14151d`** is the navy used as the fill of dark buttons ("About Us": `#14151d` with `#eae8e8` text, 43px tall, 129px wide) and of the root. The detected primary CTA, "Book A Call", is the reverse: `#eae8e8` fill with `#424346` text (171px wide, 43px tall), a light pill on the dark photograph. The extractor's `primary` was `#eae8e8`, identical to the canvas; navy is documented as primary and the light pill as `button-light`.
- **Ink muted on dark `#e9e7e766`** (260 characters) is the 40%-alpha light used for staff roles ("Senior partner", "Partner") and form labels; **ink reveal `#20232b26`** (146 characters) is the 15%-alpha dark of the scroll-revealed statement; **hairline `#e9e7e726`** (6 elements) is the 15% light divider between footer link rows.
- **Brand gold `#b38c61`** and **error `#ff3c3c`** are declared in the stylesheet (`--c-brand-gold`, `--c-error`). The gold, together with `--c-brand-gold-gradient` (270deg `#b38b61` to `#dac8b7`), was not seen on the measured first screen.

## Typography

Two families: **Instrument Serif** (691 characters; regular and italic loaded at 400) for display and headings, **Inter Tight** (2628 characters; 400, 500, 600, 700) for everything small. Weights by character: 500 (1090), 600 (1073), 400 (906), 700 (250).

- **Display**: Instrument Serif 136px / 108.8px, weight 400, letter-spacing `-4.08036px` ("Premium Esthetic Dentistry", "Your smile, effortlessly enhanced", "Dentistry for Exceptional Results"); the hero italicises its last word. Mobile pass: 71.76px / 60.2784px, `-2.8704px`.
- **Display XL**: 245.333px / 206.08px, `-9.81333px`, used for the closing "Team of Experts" and "Book a call" words.
- **Heading**: 73.7778px / 68.6133px, `-1.47484px` ("Our goal is", the long revealed statement, "Services:", "About Us").
- **Title**: 48.8889px / 42.5333px, `-1.46631px` (technology list items, footer call to action). **Tagline**: 31.1111px / 26.4444px, `-0.932978px`.
- **Body**: Inter Tight 17.7778px / 19.3778px, weight 600, `-0.355556px` (testimonials). **Caption**: 13.3333px / 14px, 400, `0.133689px` (form fields, paragraphs). **Label**: 10.6667px / 12.6933px, 500. **Nav**: 12.4444px / 14.0622px, 500. **Button**: 12.4444px / 14.0622px, 700, `-0.248889px`.

Tracking is negative at every large size (roughly -2% to -4% of the size), and line-heights are set below the font size. Substitutes: a condensed high-contrast display serif for Instrument Serif, and a neutral grotesque for Inter Tight.

## Layout

The page is a vertical sequence of full-bleed fields with a 28.4444px side gutter (header and footer padding). The hero is a 50/50 vertical split; later fields alternate light and navy; the "Our goal is" statement fills the viewport width. Measured paddings: 28.4444px (19 uses), 10.6667px (8), 14.2222px (8), 3.55556px (8), 21.3333px (7), 42.6667px (6); gaps: 21.3333px (18), 7.11111px (14), 10.6667px (10), 3.55556px (10), 42.6667px (6), 110.222px (4). The header is 64px tall; the footer is 1154px tall with padding `113.778px 28.4444px 21.3333px`, holding the big call to action, location blocks (address, phone, hours), link columns and legal links.

The declared `--viewport: 1440` and sticky-position variables (`--hero-sticky-top`, `--our-goal-top`, `--goal-section-height`) are declared alongside the layout. Density is low in the hero and high in the footer.

## Elevation & Depth

No box-shadow was measured. Depth comes from the split-field contrast, photography (blurred, blue-lit hero image and black-and-white portraits), alpha-tinted text (40%, 15%) and 1px hairlines (`#e9e7e726` on dark, `#424346` and `#4243461a` on light). The stylesheet declares a navy linear gradient (`--c-brand-navy-linear` 180deg `#2a2b35` to `#010203`) and a radial navy gradient; neither was isolated on the measured roles, but the h1 element carries a `linear-gradient(90deg, rgb(238, 232, 230) 0%, ...)` background image.

## Shapes

Radii are binary: `0px` for text, links and fields, and large pill radii for buttons and containers. Measured: `50%` (13 elements, round icon controls), `56.8889px` (4), `18666.7px` (3, a pill), and one panel with only its bottom corners rounded (`0px 0px 26.6667px 26.6667px`). The mobile pass measured the "Book a Call" button itself at `66.56px` radius with padding `12.48px 24.96px`, 42px tall and 179px wide, `#424346` fill and `#eae8e8` text. On desktop the inner `button` element measured radius 0px at 43px height while the capture shows a pill outline; the outline's radius was not isolated.

## Components

- **Button light ("Book A Call")**: `#eae8e8` fill, `#424346` text, Inter Tight 12.4444px/700, 43px tall, 171px wide; pill outline with a plus icon at the right. "Meet The Team" (163px) and "Learn More" (140px) are the same pattern.
- **Button dark ("About Us")**: `#14151d` fill, `#eae8e8` text, 43px tall, 129px wide.
- **Header**: 64px, padding `10.6667px 28.4444px`, Inter Tight 12.4444px/500; the phone number changes from `#eae8e8` to `#424346` on hover.
- **Link row ("Patient form")**: 10.6667px/500 text, `1px solid #e9e7e726` border, padding `21.3333px 0px`, 228px wide, 59px tall.
- **Text input**: Inter Tight 13.3333px/400, `#eae8e8` text, padding `0px 28.4444px`, 57px tall, 265px wide, on the navy form field.
- **Footer**: 1154px tall, `#eae8e8` text, a 48.8889px call to action "Ready to Transform Your Smile? Book a call.".
- **Not documented**: the extractor hid a `call-modal` overlay during measurement.

## Design System Architecture

No brand guidelines, press kit, typeface notes or public design system were found on the homepage opened at https://aventuradentalarts.com/; its footer credits an agency ("Developed by", link to thefirstthelast.agency) but exposes no design documentation. The de-facto system is 27 `:root` custom properties: `--c-light-base` `#eae8e8`, `--c-dark-base` `#424346`, `--c-brand-navy` `#14151d`, `--c-brand-gold` `#b38c61`, `--c-light-beige` `#d6d1d0`, `--c-dark-brown` `#6f6968`, `--c-white`, `--c-black`, `--c-error` `#ff3c3c`; alpha tints (`--c-light-15`, `--c-light-40`, `--c-dark-10`, `--c-dark-40`); gradients (`--c-brand-navy-linear`, `--c-brand-navy-radial`, `--c-brand-gold-gradient`); fonts `--font-instrument` and `--font-inter`; easing functions `--ease-menu` cubic-bezier(.6,.14,0,1) and `--ease-out-quint` cubic-bezier(.22,1,.36,1); and scripted layout values. The loaded fonts are InstrumentSerif (normal and italic) and InterTight (400 to 700).

## Do's and Don'ts

- Do alternate warm-grey `#eae8e8` and navy `#14151d` full-bleed fields and use the split-field hero.
- Do set headlines in Instrument Serif 400 with strongly negative tracking; italicise one word for emphasis.
- Do set small text in Inter Tight 500 to 700 with slight negative tracking.
- Do use light pill buttons on dark and navy buttons on light; keep labels at 12.4444px/700.
- Don't add shadows or saturated colors; the measured palette is neutral plus navy.
- Don't show gold on UI before measuring where the brand uses `#b38c61`.
- Don't document the call modal as brand UI.
- Don't set serif headlines with positive tracking.

## Responsive Behavior

Measured in the 390px mobile pass: the h1 "Premium Esthetic Dentistry" is 71.76px / 60.2784px with `-2.8704px` tracking (136px / 108.8px on desktop); the body paragraph is Inter Tight 15.6px / 17.004px, weight 500 (17.7778px / 600 on desktop); the "Book a Call" button is 42px tall, 179px wide, radius `66.56px`; the header is 67px tall with padding `12.48px 16.64px` in 16.64px serif text. The mobile character-size histogram is 15.6px (1333), 12.48px (672), 48.88px (225), 16.64px (177), 71.76px (172), 39.52px (160), 24.96px (59), 112.32px (14) and 91.52px (12). Breakpoint widths, the hero split and the menu behavior at narrow widths were not measured.

## Iteration Guide

1. Start with the two fields: `#eae8e8` and `#14151d`, ink `#424346`, and light text `#eae8e8` on navy.
2. Set headings in Instrument Serif 400 (136px, 73.7778px, 48.8889px, 31.1111px) with tracking about -3% of size; set small text in Inter Tight.
3. Build buttons 43px tall, 12.4444px/700, light on dark and navy on light, pill-wrapped.
4. Use alpha ink for revealed text (`#20232b26`) and muted labels (`#e9e7e766`).
5. Re-measure after the modal is dismissed before adding sections, then run `node web/scripts/verify-designs.mjs --slug=aventura-dental-arts`.
