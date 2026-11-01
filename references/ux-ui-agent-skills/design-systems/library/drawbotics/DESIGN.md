---
version: alpha
name: Drawbotics
category: "Design Systems"
description: "Marketing site of Drawbotics, a Brussels-linked real-estate sales and marketing software company. Rubik at regular weight throughout (60px display, 16px body), a single cyan action color #3db5d0 that deepens to #247488 on hover, deep navy headings #0a083b, slate body copy #57586e, and small 4-5px radii on rectangular buttons over a near-white canvas with pale blue-grey section bands."
colors:
  canvas: "#ffffff"
  ink: "#57586e"
  primary: "#3db5d0"
  on-primary: "#ffffff"
  surface-navy: "#0c1d39"
  surface-grey: "#dddddd"
  surface-smoke: "#f7f9fa"
  ink-on-dark-muted: "#ffffffb3"
  ink-heading: "#0a083b"
  ink-muted: "#878798"
  ink-midnight: "#172b4e"
  primary-hover: "#247488"
typography:
  display:
    fontFamily: Rubik, sans-serif
    fontSize: 60px
    fontWeight: 400
    lineHeight: 66px
  display-mobile:
    fontFamily: Rubik, sans-serif
    fontSize: 36px
    fontWeight: 400
    lineHeight: 39.6px
  subheading:
    fontFamily: Rubik, sans-serif
    fontSize: 40px
    fontWeight: 400
    lineHeight: 48px
  body:
    fontFamily: Rubik, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 27.2px
  button:
    fontFamily: Rubik, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 22.5px
  nav:
    fontFamily: Rubik, sans-serif
    fontSize: 17px
    fontWeight: 400
    lineHeight: 28.9px
rounded:
  xs: 4px
  sm: 5px
spacing:
  s1: 2px
  s2: 9px
  s3: 10px
  s4: 15px
  s5: 18px
  s6: 20px
  s7: 25px
  s8: 35px
  s9: 40px
  s10: 50px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 9px 35px
    height: 50px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 2px 18px
    height: 48px
    borderColor: "{colors.primary}"
  nav:
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    padding: 20px
---

## Overview

Drawbotics sells software and visual content to people who sell buildings that do not exist yet: property developers and real-estate agents. The homepage measured here is a product-marketing site for that audience, and its design follows the pitch. It is light, airy and technical-but-friendly. The hero headline reads "Get Your Off-Plan Property Sales Off the Ground" at 60px in regular-weight Rubik, with the words "Off-Plan Property" picked out in the cyan action color #3db5d0 while the remaining words stay in deep navy #0a083b. That two-color headline is the signature move of the page and the clearest expression of the brand: one calm accent used for emphasis and for every action, on a quiet white canvas.

The capture shows a white page with a fixed top bar holding a small line-drawn logo mark at left and navigation at right (Home, Company, Solutions, Login), ending with a solid cyan "Request a Demo" button. The hero splits into copy on the left and a laptop mockup on the right, framed by a pale blue-grey rounded shape and a dotted-grid decoration, with two floating statistic cards (a conversion rate and a count with a small sparkline) overlapping the device. Below sits a muted logo strip of developers and agencies introduced by the line "We've got 1000s of projects under our belt for developers of all sizes". Further sections alternate between white and a pale band (the site's white-smoke variable is #f7f9fa), pairing a three-item feature list with a collage of brochure, tablet and phone mockups, and then a dark product screenshot of a 3D tower model beside the heading "REVO: More Than a Digital Model".

The voice is confident and conversational: short imperative headlines ("Create a Sales Experience To Remember"), benefit-first sentences ("Attract more leads, close deals faster and stand out against your competitors"), and plain two-word button labels ("Learn More", "Request a Demo"). The about page frames the company with values such as innovation, transparency and excellence and the tagline "Property Marketing made easy"; the visual system keeps to that promise by staying simple, with one typeface, one accent and generous space.

## Colors

The palette is declared as named Webflow variables on the site, which is why the measured values are so clean: a text color #57586e, a headings color #0a083b, a buttons color #3db5d0 with a buttons-hover color #247488, a light-slate-grey #878798, a midnight-blue #172b4e, a white-smoke #f7f9fa and white for text on dark.

- **Canvas #ffffff** is the page ground, with section changes made by tinting to smoke #f7f9fa rather than by borders.
- **Ink #57586e** is the body-copy slate used for paragraphs and descriptions; **ink-heading #0a083b** is the near-black navy of the hero headline; **ink-midnight #172b4e** colors the section titles (the 40px "Create a Sales Experience To Remember" is set in it); **ink-muted #878798** carries captions and quiet labels.
- **Primary #3db5d0** is the only chromatic brand color. It fills the main button, outlines and colors the secondary button, colors the navigation links and the highlighted headline words, and appears as the active nav state. **Primary-hover #247488** is the darker teal the filled button turns on hover.
- **Surface-navy #0c1d39** and **surface-grey #dddddd** are measured background colors on the page (by area), and **ink-on-dark-muted #ffffffb3** is a translucent white measured as text color; they are the dark-ground and neutral companions to the palette.

On-primary is white #ffffff. Because the cyan is light, white text on it is a modest contrast pairing; the site accepts that for 15px button labels and keeps every other piece of text in the navy or slate inks rather than in cyan, except for large headline emphasis and navigation links.

## Typography

One family carries the whole interface: Rubik, loaded from Google Fonts in weights 300 through 900 with italics, while the measured text is set almost entirely at weight 400. Inter is also loaded (400, 500 and 600) but the measured page roles all resolve to Rubik with a sans-serif fallback. There is no weight contrast between headline and body; hierarchy comes from size and color alone.

- **Display 60px / 66px** regular, navy, used for the hero headline. On a 390px mobile viewport it drops to **36px / 39.6px**.
- **Subheading 40px / 48px** regular, midnight blue, used for section titles.
- **Body 16px / 27.2px** regular, slate #57586e; the generous line height of 1.7 gives the paragraphs an open, readable rhythm.
- **Button 15px / 22.5px** regular for both button styles, and **nav 17px / 28.9px** regular for the top navigation.

Rubik is an open-source family, so no font substitution is needed; if it cannot load, the declared fallback is the generic sans-serif. Headlines are sentence-or-title case, never uppercase, except for small eyebrow labels such as "CREATE TRANSPARENCY FOR YOUR LEADS", which are set in small capitals-style uppercase with extra tracking above a heading.

## Layout

The page is a single centered column of full-width bands. Each band has generous vertical padding, a content width that stays inside the 1280px desktop viewport, and a two-column split of text and imagery that alternates left and right as you scroll. The hero places roughly the left 40 percent to copy and the right to a mockup; the feature section places a short vertical list (a thin left rule marks the active item) beside an image collage; the REVO section flips the order again.

Spacing values measured on the site cluster on a loose 5px grid: 9, 10, 15, 18, 20, 25, 35, 40 and 50px. The primary button pads 9px by 35px and stands 50px tall; the secondary button pads 2px by 18px and stands 48px tall inside a 1px outline; navigation links carry 20px of padding. Text columns are narrow, around 500 to 750px, even on the 1280px canvas, which keeps line lengths comfortable. Logo strips are set in two rows of six with equal spacing and reduced opacity.

## Elevation & Depth

Depth is soft and mostly reserved for pictures. The hero's floating statistic cards and the device mockups sit on wide, low-opacity shadows tinted with the navy ink, so they look lifted rather than outlined. A large pale blue-grey rounded shape behind the laptop adds a second, flat layer of depth. Ordinary UI elements such as buttons, nav links and text blocks carry no shadow at all; the measured hover states change color only and add no shadow. Section separation uses background tint changes instead of lines.

## Shapes

Corners are small and consistent on controls: the filled button has a 5px radius and the outlined button a 4px radius, which reads as almost square. Larger containers and imagery use rounder shapes (the hero backdrop shape has one very large rounded corner, and the stat cards have visibly softer corners), which contrast with the crisp buttons. Icons are simple line drawings; the logo is a thin-line triangular mark. Dotted-grid patterns appear as decoration beside the hero.

## Components

**Primary button.** Solid #3db5d0 fill, white 15px Rubik label, 5px radius, 9px by 35px padding, 50px tall. On hover the fill darkens to #247488 with the label staying white. It is used for "Request a Demo" in the header.

**Secondary button.** Transparent fill with a 1px #3db5d0 border and cyan label, 4px radius, 18px horizontal padding, 48px tall. On hover it inverts to a solid cyan fill with a white label. It is used for every "Learn More" link in the body.

**Navigation.** Top bar on white with the logo mark at left and text links at right in 17px Rubik; the current page (Home) is colored cyan, other links are dark. Company and Solutions have small chevrons for dropdowns, and Login carries a small external-link glyph.

**Statistic cards.** White rounded cards with a tiny uppercase label, a large figure (17%, 270) and a thin progress bar or sparkline, floating over the hero image.

**Feature list.** Three stacked items with a bold navy title and slate description, marked by a thin vertical rule at the left that darkens for the active item.

**Logo strip.** A grid of client logos reduced to a pale blue-grey tone so no client brand competes with the page.

A language switcher (English) floats near the left edge of the page and is measured with default black text, unlike the brand's inks, so it is not treated as brand UI.

## Design System Architecture

Drawbotics does maintain a public design system called Drylus ("a stylus, but dry"), documented in a styleguide at https://drawbotics.github.io/drylus and developed in the GitHub monorepo github.com/Drawbotics/drylus. Its README lists seven packages: drylus-style-vars for design variables, icons, react-drylus as the React component library, vanilla-drylus, extract-emotion, drylus-web-components, and the styleguide itself.

This marketing site does not use it. The page is built in Webflow (its HTML carries Webflow site and page identifiers and loads a shared Webflow stylesheet from the website-files CDN), and its tokens are Webflow variables named --text, --headings, --buttons, --buttons-hover, --midnight-blue, --white-smoke, --light-background, --light-slate-grey and --light-text. No Drylus package, class or variable name appears in the page HTML, so no value on this page is taken from Drylus and the Drylus styleguide is described here only as existing. The de-facto system of the marketing site is therefore small: a handful of named color variables, a single Rubik type family, two button variants and section classes such as section, section blue and section homepage-hero. Webflow's responsive breakpoints (991px, 767px and 479px, as seen in the shipped stylesheet) drive the layout.

## Do's and Don'ts

- Do keep cyan #3db5d0 for actions, active navigation and one or two emphasized words in a headline; it is the only accent.
- Do set headlines in regular-weight Rubik navy and body in slate #57586e; let size, not weight, make the hierarchy.
- Do use white-smoke #f7f9fa bands to separate sections instead of rules.
- Do pair filled and outlined buttons: filled for the single main conversion, outlined for secondary "Learn More" paths.
- Do show product imagery in clean device mockups with soft navy-tinted shadows.
- Don't introduce a second accent color or a gradient on controls.
- Don't round the buttons beyond the 4 to 5px radius; pill buttons are foreign to this brand.
- Don't use cyan for long body text; its contrast on white is modest.
- Don't use heavy weights in headlines; Rubik 400 is the voice.
- Don't treat the language switcher widget as part of the brand UI.

## Responsive Behavior

The site follows Webflow's breakpoints, which are present in the shipped stylesheet as media queries at 991px, 767px and 479px, with additional large-screen rules at 1280px, 1440px and 1920px. The extractor measured the page at 1280px and at a 390px mobile viewport. The one mobile difference recorded in the measurements is the hero headline, which falls from 60px with a 66px line height to 36px with a 39.6px line height. Body copy, buttons and navigation were not recorded at a different size, so this document does not claim any. The mobile layout was not captured as an image, so how columns reflow is left undocumented here beyond what the breakpoints imply: the design is built to be adapted at tablet and phone widths in Webflow's usual manner. When extending the system, keep controls at the same fixed heights and radii at every width and scale only the headline.

## Iteration Guide

1. Start from canvas #ffffff, ink #57586e and primary #3db5d0; add surface-smoke #f7f9fa only for alternate bands.
2. Set the hero headline at 60px/66px (36px/39.6px on mobile) in ink-heading #0a083b, coloring the key phrase with primary.
3. Build buttons from the two recipes above: filled 50px at 5px radius, outlined 48px at 4px radius; hover to #247488 or invert to solid.
4. Use the 5px-grid spacing scale (9, 10, 15, 18, 20, 25, 35, 40, 50px) for padding and gaps.
5. Keep shadows soft and reserved for mockups and cards.
6. When adding a dark section, surface-navy #0c1d39 with ink-on-dark-muted text is the measured pairing; keep primary for the call to action.
7. Write copy as short imperatives with a benefit in the second sentence, and keep CTA labels to two or three words.
