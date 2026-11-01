---
version: alpha
name: Mass General Brigham (Massachusetts General Hospital)
category: "Healthcare & Wellness"
description: "Massachusetts General Hospital page on the Mass General Brigham site: deep navy #213243 text, mint #8bffcd pill buttons (43.2px radius, hover #00e682), teal #01828e and light-teal #d9f0f2 surfaces, #003a96 links, Roboto Slab 64px headlines over Roboto body at 16px/25.6px."
colors:
  canvas: "#ffffff"
  ink: "#213243"
  primary: "#8bffcd"
  on-primary: "#213243"
  surface-light-teal: "#d9f0f2"
  surface-dark-teal: "#01828e"
  mgb-blue: "#003a96"
  ink-teal-light: "#b1e4e3"
  link: "#131313"
  primary-hover: "#00e682"
  surface-hero-blue: "#004268"
  surface-utility: "#e7e7e0"
  card-bg: "#ecf7f9"
typography:
  display:
    fontFamily: "\"Roboto Slab\", roboto-slab-fallback, serif"
    fontSize: 64px
    fontWeight: 400
    lineHeight: 70px
  display-mobile:
    fontFamily: "\"Roboto Slab\", roboto-slab-fallback, serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 52.992px
  subheading:
    fontFamily: roboto, roboto-fallback, sans-serif
    fontSize: 18px
    fontWeight: 600
    lineHeight: 20.992px
  body:
    fontFamily: Roboto, roboto-fallback, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
  button:
    fontFamily: Roboto, roboto-fallback, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 22.5px
  nav:
    fontFamily: Roboto, roboto-fallback, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 21px
  link:
    fontFamily: roboto, roboto-fallback, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
rounded:
  xs: 4px
  sm: 12px
  md: 43.2px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 9px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 25px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 12px 24px
    height: 49px
    borderColor: "{colors.ink}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 12px 24px
    height: 50px
    borderColor: "{colors.ink}"
  link:
    textColor: "{colors.link}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.mgb-blue}"
  nav-link:
    textColor: "{colors.mgb-blue}"
    typography: "{typography.nav}"
    rounded: "{rounded.xs}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.mgb-blue}"
    rounded: "{rounded.sm}"
    padding: 40px
  footer:
    backgroundColor: "{colors.surface-dark-teal}"
    textColor: "{colors.canvas}"
---

## Overview

The queued entry was `https://www.massgeneral.org`, which redirects to the Mass General Brigham site. The measured page is `https://www.massgeneralbrigham.org/en/about/massachusetts-general-hospital` (title "About Massachusetts General Hospital | Mass General Brigham", 1280px wide, 9315px tall). This document is therefore named after the parent health-system site that hosts the hospital's page: Mass General Brigham, with Massachusetts General Hospital's about page as the measured example. No other custom-designs brand measures this site.

The page structure is a standard hospital-system layout with strong editorial polish. At the top is a thin teal rule and a beige utility bar (links: Health Plan, Research and Innovation, Education and Training at left; Patient Gateway, Donate and an English language selector at right), then a white main header with the teal "Mass General Brigham" logo, nav items with chevrons (Find Care, Services and Treatments, Patients and Visitors) and "Find a Doctor", plus a search icon. A deep-blue hero holds a breadcrumb ("About Us > Massachusetts General Hospital"), a 64px Roboto Slab headline "About Massachusetts General Hospital" in pale teal, a paragraph in white and two pill buttons: a mint filled "Visit the hospital" and an outlined "Find a doctor". A photograph of the hospital's tower fills the right half.

Below are a section-tab bar, a split block with the headline "Dedicated to innovation and clinical excellence" and a photograph of two clinicians reviewing a brain scan, a centered "Patients and visitors of Mass General" section with four outlined link cards (Find a doctor, Locations, Patient Gateway, Visitor information, each with a chevron), and a "Services and programs" section with light-teal tiles (Cancer Institute, Heart and Vascular, Neuroscience Institute). The voice is institutional, specific and reassuring: "we are committed to providing the highest quality and safest care possible for every patient - near and far."

A cookie notice bar and a navigation overlay scrim appeared in the first capture; they are not brand UI and are excluded here (the extraction re-ran with consent overlays hidden). The semi-transparent black `#00000080` from the generated tokens belongs to that overlay and was dropped.

## Colors

The site publishes its palette as root variables, and measured values match them.

- **Canvas `#ffffff`**: white page and cards (6660 area weight).
- **Ink `#213243`** (`--color-primary-deep-blue`, `--color-deep-blue`): the main text color (3408 character-weight) and the text on mint buttons (`on-primary`).
- **Primary `#8bffcd`** (`--color-mgb-green`, `--color-secondary-mgb-green`): the mint call-to-action fill; hover `#00e682` (`--color-cta-primary-hover-bg`, measured on "Visit the hospital").
- **Mgb-blue `#003a96`** (`--color-mgb-blue`, `--link-color`): link and secondary-button text and the 1px outline of the link-card row (1264 character-weight).
- **Surface-dark-teal `#01828e`** (`--color-dark-teal`): the footer fill and the nav focus line. **Surface-light-teal `#d9f0f2`** (`--color-light-teal`): large tinted bands. **Card-bg `#ecf7f9`** (`--color-secondary-featured-bg`): card tiles. **Ink-teal-light `#b1e4e3`** (`--color-medium-teal`): the hero headline on deep blue.
- **Surface-hero-blue `#004268`** (`--color-primary-blue`): the hero background. **Surface-utility `#e7e7e0`**: the utility-bar beige.
- **Link `#131313`** (`--text-color`): the dark text/link color of some links.

Other declared values: alert urgent `#cd0016`, success `#008845` and `#6ec069`, disabled `#d4d4d4` and `#757575`, focus `#1769ff` (light `#bfd5fc`), secondary gray `#f1f1f1`, link hover `#1d3ecf`, and blue hover `#144a9e`.

## Typography

Two families: **Roboto Slab** (400) for headlines, with fallback `roboto-slab-fallback, serif`, and **Roboto** (400, 500, 600, 700) for everything else with `roboto-fallback`. The page declares `--header-font-family: "Roboto Condensed"`, which was not among the measured loaded fonts.

- **Display** (Roboto Slab 400, 64px / 70px): the page `h1`; the root variable is `--heading-font-size-h1: 64px`.
- **Section heading** (Roboto Slab 400, 48px / 52.992px, -0.496px tracking): the `h2`; this is also the mobile display size (`display-mobile`).
- **Subheading** (Roboto 600, 18px / 20.992px): `h3` labels such as "Patient care".
- **Body** (Roboto 400, 16px / 25.6px).
- **Button** (Roboto 500, 18px / 22.5px); **nav** (Roboto 500, 14px / 21px); **link** (Roboto 400, 16px).

The root variables define a heading scale (`--heading-font-size-h2` 48px, `h3` 36px, `h4` 28px, xxl 55px, xl 44px, l 34px, m 27px, s 24px, xs 22px, xxs 20px, xxxs 18px) and body sizes (`body-13` .812rem, `body-14` .875rem, `body-16` 1rem, `body-18` 1.125rem). Roboto and Roboto Slab are open fonts available from Google Fonts.

## Layout

Content sits inside a global inline gutter of 3.125rem (`--global-inline-gutters`), on a mostly two-column grid for split blocks (text left, image right) and four-up or three-up card rows. A spacing scale `--spacing-base-space-050` .25rem through `--spacing-base-space-2000` 12.5rem is declared (050 .25rem, 075 .375rem, 100 .5rem, 250 1.25rem, 300 1.5rem, 400 2rem, 500 2.5rem, 600 3rem, 700 3.5rem, 900 4.5rem, 1100 6.25rem, 1800 11.5rem). Measured paddings include 12px 24px on buttons and 40px on cards. The header comprises two bars, the utility bar and the main bar, and a lower section-tab row.

## Elevation & Depth

Very flat: the only measured shadow is `rgba(0, 0, 0, 0.04) 0px 4px 12px 0px` on one element. Cards are defined by tint (`#ecf7f9`, `#d9f0f2`) or a 1px `#003a96` outline rather than shadow, and the hero uses a flat deep-blue field next to a photograph.

## Shapes

Measured radii: `12px` on 28 elements (cards and photographs; `--radius-radius-120` .75rem), `43.2px` on 10 elements (pill buttons), `4px` on 5 elements and `50%` on 5 elements (round icons). The root variables also declare `--radius-radius-5` .312rem, `--radius-radius-8` .5rem and `--radius-radius-0` 0rem. Tokens: `xs 4px`, `sm 12px`, `md 43.2px`, `pill 9999px`.

## Components

- **Primary button** ("Visit the hospital"): mint `#8bffcd` fill, `#213243` text and 1px `#213243` border, Roboto 500 18px, 43.2px radius, 49px tall, padding `12px 24px`; hover fill `#00e682`.
- **Secondary button** ("Find a doctor"): transparent with outline and white text on the deep-blue hero; on light backgrounds the declared secondary is `#003a96` text with a hover fill of `#003a96` and white text.
- **Link card row**: four equal cells in a `#003a96` 1px outline, each with a blue Roboto Slab title and chevron, and a short Roboto description.
- **Service tile**: `#ecf7f9` card, 12px radius, 40px padding, blue title with chevron.
- **Navigation**: Roboto 500 14px, `#003a96`, chevrons on dropdown items; focus line teal `#01828e`.
- **Footer**: `#01828e` fill with white text.

## Design System Architecture

The site exposes its design system as 400 root variables with a documented naming scheme: color roles (`--color-cta-primary-*`, `--color-cta-secondary-*`, `--color-cta-tertiary-*` each with default, hover, active, focus, disabled variants for fg, bg, stroke and outline), brand palette names (`--color-mgb-blue`, `--color-mgb-green`, `--color-dark-teal`, `--color-light-teal`, `--color-medium-teal`, `--color-secondary-gray`), alert colors, a typography scale (`--typography-font-size-*`, `--heading-font-size-*`, `--header-font-size-*`), spacing (`--spacing-base-space-*`) and radius tokens (`--radius-radius-*`). A public design-system site was not located: the page opened is `https://www.massgeneralbrigham.org/en/about/massachusetts-general-hospital` and it links to none, so no external source is cited.

## Do's and Don'ts

Do:
- Use deep navy `#213243` for text, mint `#8bffcd` for the primary pill button (hover `#00e682`) and `#003a96` for links and secondary actions.
- Set headlines in Roboto Slab 400 and everything else in Roboto.
- Use tinted teal surfaces (`#d9f0f2`, `#ecf7f9`) and 12px radii for cards, and 43.2px pills for buttons.
- Use photographs of real clinicians and facilities.

Don't:
- Don't render the cookie bar or overlay scrim as brand UI.
- Don't use heavy shadows; the page is nearly flat.
- Don't use the mint color for text; it is a fill only (text on it is `#213243`).
- Don't set headings in bold sans; headline weight is 400 slab.

## Responsive Behavior

The mobile pass measured the display headline at 48px / 52.992px (desktop 64px / 70px). Mobile font-size weights were led by 18px (2019), 20px (1413), 22px (1019), 24px (503), 36px (485), 48px (174) and 14px; the declared variable `--body-font-size-xs-mobile` is 14px. Mobile layout, menu pattern and breakpoints were not measured.

## Iteration Guide

1. White canvas, `#213243` text, Roboto 16px / 25.6px body, Roboto Slab headings at 64px and 48px.
2. Mint pill button: `#8bffcd`, 1px `#213243` border, 43.2px radius, `12px 24px` padding; hover `#00e682`.
3. Links and secondary actions in `#003a96`; section tiles in `#ecf7f9` or `#d9f0f2` with 12px radii.
4. Use the `--color-cta-*` role names for any new state, and measure it before documenting.
