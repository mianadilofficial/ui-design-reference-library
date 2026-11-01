---
version: alpha
name: Bolt Design System
category: "Design Systems"
description: "Bolt Design System's documentation landing page pairs a deep navy hero (#001f5f) with white sections, Open Sans at 800 weight (76px display) and 400 body at 16px, a golden primary button (#ffc836) with 3px corners, a #3e67bb action blue and a #10a5ac teal for the second implementation path."
colors:
  canvas: "#ffffff"
  page-largest: "#001f5f"
  ink: "#151619"
  primary: "#ffc836"
  on-primary: "#151619"
  surface-gray: "#f6f6f9"
  navy-dark: "#081c45"
  ink-black: "#000000"
  teal: "#10a5ac"
  hairline: "#ffffff1a"
  action-blue: "#3e67bb"
  tertiary-fill: "#081c4526"
  on-navy: "#ffffff"
typography:
  display:
    fontFamily: "\"Open Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 76px
    fontWeight: 800
    lineHeight: 96.52px
  display-mobile:
    fontFamily: "\"Open Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 38.5px
    fontWeight: 800
    lineHeight: 48.125px
  heading:
    fontFamily: "\"Open Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 30.4px
    fontWeight: 800
    lineHeight: 39.52px
  subheading:
    fontFamily: "\"Open Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 25.6px
    fontWeight: 800
    lineHeight: 35.84px
  body:
    fontFamily: "\"Open Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24.8px
  button:
    fontFamily: "\"Open Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 14.4px
    fontWeight: 600
    lineHeight: 20.88px
  nav:
    fontFamily: "\"Open Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24.8px
rounded:
  xs: 3px
spacing:
  s1: 6.4px
  s3: 12.8px
  s5: 25.6px
  s6: 28px
  s7: 51.2px
  s8: 60px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 11.8px 28px
    height: 44px
  button-secondary:
    backgroundColor: "{colors.teal}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 11.8px 28px
    height: 44px
  button-ds-primary:
    backgroundColor: "{colors.action-blue}"
    textColor: "{colors.on-navy}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 9.8px 24.8px
    height: 44px
  button-ds-tertiary:
    backgroundColor: "{colors.tertiary-fill}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 9.8px 24.8px
    height: 44px
  nav:
    backgroundColor: "{colors.navy-dark}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
---

## Overview

The captured page at boltdesignsystem.com is the entry point of the Bolt Design System, and it is itself a small Bolt-styled page. A slim #081c45 navigation bar carries a multicolour logomark, the name "Bolt Design System" and four links (React Docs, Twig Docs, React Gitlab, Twig Gitlab). Below it a full-width #001f5f hero holds a small yellow all-caps eyebrow ("BOLT DESIGN SYSTEM"), the headline "Two systems. One foundation." in white Open Sans ExtraBold at 76px, a lighter subtitle ("Choose the path that fits your stack."), a three-line paragraph and two buttons: a yellow "Bolt DS (React)" with an arrow and a navy-tinted "Bolt Twig" with an arrow.

The rest of the page alternates white and #f6f6f9 bands. "Choose your system" shows two side-by-side white cards with a faint shadow: the first labelled "FOR REACT-BASED PRODUCTS", the second "FOR DRUPAL AND TWIG-BASED PRODUCTS" (its eyebrow in teal), each with a bold navy title, a description, three bullet points and a solid button, blue for React and teal for Twig. "Not sure where to start?" repeats the two-card pattern as decision guides, and a closing navy footer lists "Resources" with Release notes and Gitlab Wiki Home links and the line "Built on a shared foundation."

The site contains no photography. It is typographic, with navy as the page chrome and yellow as the single point of emphasis. Copy is functional and second-person ("Choose the path that fits your stack", "Use Bolt DS if you are:").

## Colors

The page's colours are Bolt's own published tokens. The official Color Tokens story (https://boltds.pega.com/iframe.html?id=visual-styles-colors--color-tokens) lists navy #001f5f, navy-dark #081c45, navy-light #3e67bb, teal #10a5ac, yellow #ffc836, gray-xlight #f6f6f9, black #151619 and white #ffffff, which are exactly the measured fills on the capture. Largest background area is the navy hero (#001f5f), then #f6f6f9 bands, then the #081c45 header and footer. White (#ffffff) is the canvas of the content sections.

Ink is #151619 (854 weighted characters), the Bolt black token; white text on navy follows with 508 and pure #000000 with 364 (used in the cards). Navy #001f5f also colours the headings on white. The primary call to action is the yellow #ffc836 with #151619 text, used only in the navy hero. In the component library the primary button is instead #3e67bb with white text (measured on the Storybook Button hierarchy story), which is why #3e67bb is kept as action-blue. Teal #10a5ac fills the Twig button and eyebrow. A hairline of white at 10% opacity (#ffffff1a) separates footer rows.

## Typography

Open Sans is the only face on the page (1,957 weighted characters) and the typography token story states it is the default family for body text and headlines. Weights used: 800 for headlines and eyebrow-adjacent titles, 600 for navigation and buttons, 700 for small emphasis, 400 for reading text. Measured sizes: 76px display with a 96.52px line-height, 30.4px section headings, 25.6px card titles, 16px body at a 24.8px line-height, 14.4px button text and a 12.8px all-caps label with 0.8px tracking. On mobile the display size is 38.5px.

The Bolt token page lists the system's font-size scale in rem (largedisplay 4.5rem, display 3.75rem, xxxlarge 3rem, xxlarge 2.35rem, xlarge 1.75rem, large 1.4rem, medium 1.15rem, regular 1rem, small 0.9rem, xsmall 0.8rem, tiny 0.7rem), and weights 300, 400, 600, 700 and 800. Lora and Chakra Petch are also defined as token families, but they are not used on the measured page. Open Sans is open source; system fonts form the fallback stack.

## Layout

A single column of full-width bands, each with content aligned to a left edge of about 45px at the 960px capture scale. The hero is about 480px tall. Section content uses two equal columns with a 28px gap (the most common measured gap, with 25.6px). Page padding tokens in the root variables include a 60px large horizontal page padding, and measured paddings are 28px, 60px, 25.6px, 6.4px, 14px and 11.8px. Vertical rhythm between bands is generous (the shared spacing token scale in the Bolt Spacing story steps 4, 6, 12, 24, 47, 93, 186 and 372px at a 1400px viewport and is responsive between 320px and 1920px).

## Elevation & Depth

Depth is nearly absent. The only measured shadow is rgba(0, 0, 0, 0.2) 0px 1px 3px 0px, a subtle lift on the white cards over the grey band. Colour blocking does the rest: navy header, navy hero, white content, grey band, navy footer. Footer rows are divided by the 10% white hairline.

## Shapes

One radius: 3px, on every measured button and card edge (16 uses). Corners are barely softened, which gives the page a crisp, engineered look. Buttons are rectangular 44px-tall blocks with 11.8px 28px padding (landing page) or 9.8px 24.8px (Storybook components). Arrow glyphs trail button labels.

## Components

Landing-page buttons: primary is #ffc836 with #151619 text; secondary is teal (#10a5ac) with white text; both are 14.4px/600, 44px tall, 3px radius. The hero's second button is a navy-tinted block with white text (its exact fill was not measured).

Official component library buttons, measured on the Storybook hierarchy story (https://boltds.pega.com/iframe.html?id=basic-button--button-hierarchy&viewMode=story): primary is #3e67bb with white text; secondary is white with a 1px #001f5f border and #001f5f text; tertiary is #081c4526 (navy at 15%) with #001f5f text; all 14.4px/600, 44px tall, 9.8px 24.8px padding, 3px radius. Cards are white with a hairline shadow, a small all-caps eyebrow, a navy 800-weight title, and a bullet list. Navigation is a #081c45 bar with white 16px/600 links.

## Design System Architecture

This page is the front door of a real design system. Its links go to two implementations: a React library documented in Storybook at https://boltds.pega.com/ (source on GitLab under the pegadigital group, https://gitlab.com/pegadigital/bolt/bolt-ds) and a Twig/HTML library documented in Pattern Lab at https://boltdesignsystem.com/pattern-lab (https://gitlab.com/pegadigital/bolt/design-system). Both domains and the GitLab group name point to Pega; the page text itself says both systems "share the same visual language, accessibility principles, and design foundations".

The Storybook index lists about 900 entries organised as Basic (Button, Chip, Icon, Image, List, Table, Text), Form, Navigation, UI-Blocks, Web Components and Visual Styles (Colors, Typography, Spacing, Background Gradients). The Visual Styles pages publish tokens as CSS custom properties with the bolt prefix, for example var(--bolt-color-navy), var(--bolt-type-font-family-body) and var(--bolt-spacing-x-medium). The Pattern Lab site shows version numbers up to v12.1.4 and sections for Visual Styles, Elements, Layouts and Components (Accordion, Action Blocks, Band, Banner, Breadcrumb and more).

## Do's and Don'ts

Do put Open Sans ExtraBold headlines on navy, with white text, and use a single yellow button as the emphasis. Do use #151619 for body ink on white. Do keep every corner at 3px and buttons at 44px tall. Do pair a React path and a Twig path with the same visual language. Do reference tokens (var(--bolt-color-navy)) rather than hex values.

Don't introduce photography or gradients on the landing page. Don't use more than one yellow button per view. Don't round corners beyond 3px. Don't mix the Storybook component blue (#3e67bb) into the yellow-on-navy hero for the same action. Don't use Lora or Chakra Petch for ordinary body text; the token page names Open Sans as the default.

## Responsive Behavior

The measured mobile hero headline is 38.5px/800 with a 48.125px line-height, against 76px on desktop. The Bolt spacing tokens are documented as responsive between 320px and 1920px viewports, with pixel values given at 1400px. The two-card sections are two columns on desktop; their mobile arrangement was not captured or verified here.

## Iteration Guide

Open with a navy (#001f5f) band, a small yellow all-caps eyebrow and a 76px Open Sans ExtraBold white headline. Follow with white and #f6f6f9 bands, two-column white cards with 3px corners, navy 800-weight titles, and one solid button each (#3e67bb or teal). Reach for Bolt tokens first (https://boltds.pega.com Visual Styles) and measure any value not listed there before adding it.
