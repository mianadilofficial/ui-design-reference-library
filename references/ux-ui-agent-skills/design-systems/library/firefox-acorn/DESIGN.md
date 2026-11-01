---
version: alpha
name: Firefox
category: "Design Systems"
description: "Firefox's marketing site in a deep violet #210340 canvas with white text, a #7543e3 pill download button (128px radius, #6132bc on hover), Mozilla Headline VF at 80px/600 for the hero and Mozilla Text VF at 16px for body copy, and near-white lilac #f1e7f8 cards with 48px radii floating on the dark page."

colors:
  canvas: "#210340"
  ink: "#ffffff"
  primary: "#7543e3"
  on-primary: "#ffffff"
  surface-lilac: "#f1e7f8"
  ink-dark: "#15141a"
  ink-lilac: "#c7a8ff"
  primary-hover: "#6132bc"
typography:
  display:
    fontFamily: "\"Mozilla Headline VF\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, sans-serif"
    fontSize: 80px
    fontWeight: 600
    lineHeight: 72px
  display-mobile:
    fontFamily: "\"Mozilla Headline VF\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, sans-serif"
    fontSize: 48px
    fontWeight: 600
    lineHeight: 43.2px
  heading:
    fontFamily: "\"Mozilla Headline VF\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, sans-serif"
    fontSize: 32px
    fontWeight: 600
    lineHeight: 33.6px
    letterSpacing: "-0.32px"
  body:
    fontFamily: "\"Mozilla Text VF\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
  button:
    fontFamily: "\"Mozilla Text VF\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 16px
  link:
    fontFamily: "\"Mozilla Text VF\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, sans-serif"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 24px
  button-secondary:
    fontFamily: "\"Mozilla Text VF\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 16px
rounded:
  xs: 48px
  sm: 80px
  md: 112px
  lg: 128px
  xl: 150px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 24px
  s6: 32px
  s7: 36px
  s8: 40px
  s9: 48px
  s10: 60px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 12px 24px
    height: 44px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.lg}"
    padding: 12px 24px
    height: 44px
  link:
    textColor: "{colors.ink-dark}"
    typography: "{typography.link}"
    rounded: "{rounded.lg}"
    padding: 16px 24px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 0px 12px
  nav-link:
    textColor: "{colors.ink-lilac}"
    typography: "{typography.body}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    padding: 8px 40px 8px 36px
    height: 39px
    borderColor: "{colors.ink}"
  card:
    textColor: "{colors.primary}"
    rounded: "{rounded.xs}"
    padding: 40px 24px
    borderColor: "{colors.surface-lilac}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
---

# Firefox

## Overview

The firefox.com home page captured for this entry is a dark, violet-washed stage with light cards laid on top of it. The page background is a deep purple, #210340, and most of the copy sitting directly on it is white. The hero is centered: a small all-caps eyebrow reading "THE INDEPENDENT BROWSER", a very large condensed headline "Built to protect you, not track you", two lines of supporting copy, a download button, and an underlined "Firefox Privacy Notice" link. Beneath the copy a browser window mockup holds a large orange fox illustration, and the hero's lower edge is cut into a big rounded curve that transitions from purple to a pale lilac glow.

Below the hero, four tall white-to-lilac cards sit in a row, each with a small uppercase tag (PRIVACY, FOCUS, CHOICE, INDEPENDENCE), a two-line headline, a glossy purple-and-magenta icon (shield, cursor, toggle, lightning bolt) and a one-sentence explanation. The next band returns to the dark canvas with a centered headline, "Fast to switch. Easy to settle in.", another download button, and a three-step panel (01 Download Firefox, 02 Select what you want to bring with you, 03 Click import) set inside a rounded purple container. The voice is plain and declarative: short sentences, second person, privacy stated as a fact rather than a feature ("Blocks trackers automatically. No setup. No guesswork.").

The capture also shows an amber-to-orange gradient pill reading "Try Firefox" in the hero. It is a gradient fill and was not recorded as a flat color by the extractor, so no hex is claimed for it; the measured primary action is the violet pill described below.

## Colors

The palette is measured from the live page. The canvas is `#210340` (the site's own variable `--token-color-dark-purple` and `--fl-theme-body-background` resolve to this value). Text on the dark canvas is `#ffffff`. Text on the light cards is `#15141a`, a near-black. The primary action color is `#7543e3`, a saturated violet used for the "Get Firefox" and "Download Firefox" buttons; it darkens to `#6132bc` on hover (measured by hovering the button). Light surfaces use `#f1e7f8`, a pale lilac that also serves as the card border color. Secondary link and navigation text on the dark canvas is `#c7a8ff`, a light lavender.

The page's root variables list a wider purple ramp (for example `#3a0f6e`, `#4c2489`, `#9468ff`, `#dfc9ff`, `#e4d8fc`) plus orange `#ff6d00` and red `#ff453f` status colors, but the tokens in the frontmatter keep only the colors that the capture visibly uses for the main roles. Color is almost entirely violet plus the orange of the fox artwork; there is no second UI accent.

## Typography

Two variable families are loaded, both shipped from the site: Mozilla Headline VF for headings and Mozilla Text VF for everything else (the loaded-font list reports a weight range of 100 to 900 for each). The hero h1 is 80px at weight 600 with a 72px line height, i.e. tighter than 1:1, which gives the stacked condensed look seen in the capture; on a 390px viewport it drops to 48px with a 43.2px line height. Card headings are 32px, weight 600, line height 33.6px and letter spacing -0.32px. Body copy is 16px/22.4px at weight 400. Buttons use Mozilla Text VF at 16px and weight 700 for the primary and 600 for the secondary style. A 24px, weight 600 link style is measured on the large links inside the cards. The site's variables also expose a `--token-font-condensed-width` of 75, which is consistent with the narrow cut of the headline face.

Fallbacks, as shipped, are `-apple-system`, `system-ui`, `Segoe UI`, Roboto and sans-serif. Mozilla Headline and Mozilla Text are Mozilla's own faces; if they are unavailable, a neutral grotesque such as Inter for text and a condensed sans such as Barlow Condensed for headlines are reasonable stand-ins, but those are substitution suggestions, not anything the site specifies.

## Layout

The page is a single centered column on a 1440px design width (the site declares `--token-width-desktop-layout: 1440px`), with narrower content containers of 725px and 934px for text-heavy sections. Section padding is 64px vertically and 24px horizontally in the site's variables. The measured spacing steps are 4, 8, 12, 16, 24, 32, 36, 40, 48 and 60px; the layout scale variables run 24, 32, 48, 64, 80, 128, 160 and 200px. The card row is four equal columns with small gutters; on mobile the layout width variable is 393px and the cards stack. The navigation is a 80px-tall bar with the logo at left, three dropdowns (Browser, Features, Resources) centered, and the "Get Firefox" pill at right.

## Elevation & Depth

Depth is created with color and shape rather than shadows: the extractor recorded no box shadows at all on the visible elements. Cards separate from the canvas by switching from dark to near-white, and the hero's glow is a gradient from purple to lilac. The only shadow-like variables in the root list are a faint card glow, `0px 0px 24px 2px rgba(214,197,246,.4)`, used on notifications, and `0 4px 20px #e8e8e8`; neither is visible in the capture.

## Shapes

Radii are very large and consistent. Buttons and the main theme radius are 128px (the site variable `--fl-theme-main-border-radius` is 128px), which turns any button of normal height into a pill. Cards use 48px corners. Other measured radii are 80px, 112px and 150px for large containers such as the hero curve and the step panel, and the generic pill 9999px represents fully round elements such as the step number badges (50% on the page). Nothing on the page is square except full-bleed bands.

## Components

**Primary button.** Violet `#7543e3` fill, white 16px bold label, 12px 24px padding, 44px tall, 128px radius. Hover swaps the fill to `#6132bc`; the label stays white. A small download glyph trails the label on the "Download Firefox" instance.

**Secondary button.** Same geometry with a 600-weight label.

**Navigation.** Transparent on the `#210340` canvas, white labels with small chevrons, links in lavender `#c7a8ff`, horizontal padding 12px.

**Text input.** A 39px-high field with a search-style padding of 8px 40px 8px 36px and a white border on the dark canvas, measured on the page.

**Feature card.** Light surface with a `#f1e7f8` border, 48px radius, 40px 24px padding, a small violet uppercase tag, a headline in `#15141a`, an illustration and a short paragraph.

**Footer.** Same dark canvas as the page with white text.

## Design System Architecture

Mozilla documents two public systems that matter here. Acorn (https://acorn.firefox.com), described on its own pages as the design system for Firefox desktop, iOS and Android, is the browser-UI system; its "Mozilla design systems landscape" page lists Protocol as the system for Mozilla's marketing websites, and Photon as the deprecated predecessor. The Acorn pages opened for this entry do not document CSS custom properties or token values, and nothing in the firefox.com capture references Acorn: its class and variable naming uses `--token-*` (for example `--token-color-dark-purple`, `--token-border-radius-xl`, `--token-spacing-lg`), `--fl-theme-*` (for example `--fl-theme-font-family-headline`), and component-scoped variables like `--button-bg-color` and `--card-border-color`. This entry therefore treats Acorn as Mozilla's system for the browser itself and takes no values from it; every value above comes from the live site.

The de-facto system on the page is a token layer (color ramp, spacing scale, radius scale, layout scale, font sizes in `rem`) feeding component variables such as `--button-bg-color`, `--button-bg-color-hover`, `--button-bg-color-active` (`#3a0f6e`) and `--button-bg-color-disabled` (`#e4d8fc`). Protocol is documented at https://protocol.mozilla.org as the front-end for mozilla.org; its documentation does not say whether firefox.com uses it, so no claim is made.

## Do's and Don'ts

Do keep the page dark and the cards light, and let the violet pill be the one saturated action color. Do use pill radii (128px) for buttons and 48px for cards. Do set headlines in the condensed headline face with tight leading (72px on an 80px size). Do keep copy short and declarative.

Don't add drop shadows; this page has none. Don't use the orange of the fox as a UI color for text or borders. Don't use square corners on cards or buttons. Don't center long paragraphs; the page centers only short copy blocks. Don't use the browser default blue for links; links here are lavender `#c7a8ff` on dark and `#6132bc` brand violet on light.

## Responsive Behavior

The only mobile measurements taken are at a 390px viewport: the h1 drops from 80px to 48px with a 43.2px line height, and the hero keeps its centered layout. The site declares a mobile layout width variable of 393px, a section horizontal padding of 24px, and a hamburger-menu background variable of `#f1e7f8`, but navigation behaviour at small widths was not measured; how the four feature cards reflow was not measured, so it is not described here. Buttons are specified at a 44px height with a 128px radius in the desktop measurement, and nothing in the data suggests a different button size on mobile.

## Iteration Guide

Start from the canvas `#210340` and white text; add exactly one violet `#7543e3` action per viewport. When adding a card, use `#f1e7f8` for its border, 48px for its radius and `#15141a` for its text. When adding a headline, use Mozilla Headline VF at weight 600 with a line height 0.9 of the font size. When adding states, use the measured hover `#6132bc`; do not invent new ramps. Check every new color against the root variable list before using it, and keep copy to one sentence per supporting line.
