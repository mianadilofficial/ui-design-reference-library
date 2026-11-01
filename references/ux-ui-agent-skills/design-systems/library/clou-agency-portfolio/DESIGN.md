---
version: alpha
name: Clou Werbeagentur Luzern
category: "Portfolio"
description: "Clou, a Lucerne branding and web agency, sets a 256px Athletics wordmark at weight 500 on white, then drops into a near-black #101114 panel and full-bleed colour case cards (orange #eb693c, teal #005d69, coral #ec554a), with grey #e8ebe9 and graphite #1f2126 pill buttons at 48px radius and 16px to 64px card radii."
colors:
  canvas: "#ffffff"
  ink: "#101114"
  primary: "#e8ebe9"
  on-primary: "#101114"
  surface-black-light: "#1f2126"
  ink-muted: "#85878c"
  card-text-mint: "#a8dcc8"
  card-text-cream: "#faf9f5"
  card-text-sand: "#f9efd8"
  ink-black: "#000000"
  card-text-lime: "#d4ff79"
  card-orange: "#eb693c"
  card-teal: "#005d69"
  card-coral: "#ec554a"
  card-navy: "#1d3141"
  card-periwinkle: "#90a1fa"
  card-teal-deep: "#193841"
  grey-light: "#f5f7f6"
  purple: "#beb1ff"
  purple-dark: "#9085cc"
typography:
  display:
    fontFamily: Athletics, sans-serif
    fontSize: 256px
    fontWeight: 500
    lineHeight: 230.4px
    letterSpacing: "-6.4px"
  display-mobile:
    fontFamily: Athletics, sans-serif
    fontSize: 117px
    fontWeight: 500
    lineHeight: 105.3px
    letterSpacing: "-1.95px"
  heading:
    fontFamily: Athletics, sans-serif
    fontSize: 56px
    fontWeight: 500
    lineHeight: 61.6px
  subheading:
    fontFamily: Athletics, sans-serif
    fontSize: 32px
    fontWeight: 500
    lineHeight: 32px
  body:
    fontFamily: Athletics, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 31.2px
  button:
    fontFamily: Athletics, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 25.6px
  nav:
    fontFamily: Athletics, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
  heading-mobile:
    fontFamily: Athletics, sans-serif
    fontSize: 40px
    fontWeight: 500
    lineHeight: 44px
rounded:
  xs: 2px
  sm: 8px
  md: 16px
  lg: 32px
  xl: 48px
  2xl: 64px
  3xl: 160px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 24px
  s6: 32px
  s7: 48px
  s8: 64px
  s9: 80px
  s10: 120px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 16px 24px
    height: 58px
  button-secondary:
    backgroundColor: "{colors.surface-black-light}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 16px 24px
    height: 58px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.ink-black}"
    padding: 0px 16px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.ink}"
    padding: 0px 64px
  badge:
    backgroundColor: "{colors.surface-black-light}"
    textColor: "{colors.ink-muted}"
    typography: "{typography.nav}"
    rounded: "{rounded.xs}"
    padding: 8px 12px
    height: 32px
---

# Clou Werbeagentur Luzern

## Overview

Clou (clou.ch, page title "Home • Clou Werbeagentur Luzern") is a German-language branding, purpose and web agency in Luzern, Switzerland (Mythenstrasse 7, 6003 Luzern, per the home page opened for this document). The footer tagline is "Agentur für sinnbasierte Grafik und Kommunikation". The agency page (opened for this document) says Clou has developed ideas and brands since 2010, calls itself a seven-person agency led by owner and Creative Director Albi Christen, and introduces its purpose with the line "Wir machen Sinn." The home page also lists a "Professional Partner" badge that links to Webflow, and several case studies carry a Webflow tag.

This document describes that home page, so the copy is German. The page opens on a white screen with a huge black "CLOU" wordmark at 256px, the round smiley-face "CLO" logo at the top left, a round black menu button at the top right, and four navigation items (Projekte, Agentur, Journal, Kontakt) centered at the top. Colored image tiles (a coral shape, a yellow tile with a dark illustration, a blue tile with a baked pie-chart object) overlap and peek in at the edges of the wordmark, so the hero is a collage.

Below it a rounded near-black panel carries the introduction in white: "Hallo! Wir sind Clou, deine Agentur in Luzern mit Fokus auf Branding, Purpose und Websites mit Wirkung." with a short paragraph ("In deinem Sinn, für dich, für deine Kund:innen und nicht zuletzt für uns, tun wir alles dafür, dass unsere Arbeit Sinn macht.") and a graphite pill button "unser Purpose". Next comes a "Cases" section: a small outlined "Cases" chip, a statement ("Umfangreiche Projekte, auf die wir besonders stolz sind – sinnbasiert gestaltet und kommuniziert:") and a series of full-width colored case cards, each with the project name and a row of outlined tag pills. The first case is Rast Kaffee (tags Branding, Purpose, Strategie, Grafik Design) on an orange card.

Sections that follow include "Projekte", "Warum Clou?", "Warum du?" and "Journal" (categories Menschen, Rauszeit, Agentur). The voice is informal, first-person plural and friendly, uses the informal "du" form and inclusive gendering ("Kund:innen"). The page is 12530px tall at 1280px.

## Colors

The palette is neutral plus a per-project color system.

- **Canvas `#ffffff`**: the page background (about 55% of the capture).
- **Ink `#101114`**: the most-read text color (7558 characters) and the fill of the large intro panel (background weight 4308); the site's `--color--clou-black-text`.
- **Ink black `#000000`**: the color of the CLOU wordmark and navigation text.
- **Primary grey `#e8ebe9`**: the fill of the "Team kennenlernen" and "alle Projekte anzeigen" buttons (text `#101114`); the site's `--color--clou-grey`.
- **Surface black light `#1f2126`**: the fill of the dark buttons ("zum Journal", "Kontakt aufnehmen", "unser Purpose") and of the "Professional Partner" badge; the site's `--color--clou-black-light`.
- **Ink muted `#85878c`**: the badge text and gray secondary copy (`--color--clou-grey-text`).
- **Grey light `#f5f7f6`**: the hover fill of navigation items (`--color--clou-grey-light`).
- **Case card colors**: orange `#eb693c`, teal `#005d69`, coral `#ec554a`, navy `#1d3141`, periwinkle `#90a1fa` and deep teal `#193841`, each measured as a full-bleed background (area weight 1198 each), one per featured project.
- **Case card text colors**: mint `#a8dcc8`, cream `#faf9f5`, sand `#f9efd8` and lime `#d4ff79`, measured as text and outline colors (45 to 49 characters each) for the titles and tag pills on those cards.
- **Purple `#beb1ff`** and **purple dark `#9085cc`**: named in the site's root variables (`--color--clou-purple`, `--color--clou-purple-dark`); not observed on a measured element of the home page.

White text (933 characters) appears on the dark panel and dark buttons. The stylesheet also carries a Webflow-default blue (`#1a73e8`, `#185abc`, `#3898ec`) used for focus and form states; it is not a brand color and is excluded.

## Typography

One family, **Athletics** (loaded at weights 400 and 500), sets every measured character (8766). A font called "Redacted" is also declared in the font-face list; no measured text uses it.

| Role | Size / line height | Weight | Spacing |
|---|---|---|---|
| Display ("CLOU") | 256px / 230.4px | 500 | -6.4px |
| Display, mobile pass | 117px / 105.3px | 500 | -1.95px |
| Heading (intro statement) | 56px / 61.6px | 500 | normal |
| Heading, mobile pass | 40px / 44px | 500 | normal |
| Subheading (case name "Rast Kaffee") | 32px / 32px | 500 | normal |
| Body (paragraph on the dark panel) | 24px / 31.2px | 400 | normal |
| Button | 16px / 25.6px | 500 | normal |
| Navigation | 16px / 25.6px | 400 | normal |

By characters, 18.008px leads (4343), followed by 24px (1848), 18px (833), 14px (760), 32px (435), 56px (317) and 16px (222). Weight 400 sets 6426 characters and weight 500 sets 2340, so medium weight is used for the wordmark, headings and buttons and regular for reading text. The wordmark's negative tracking (-6.4px at 256px, which is -2.5% of the size) tightens the letters into a single block.

**Font substitutes.** Athletics is a font served by the site and no foundry page was opened for it. For prototypes, use a geometric grotesque at weights 400 and 500.

## Layout

At 1280px the page uses full-bleed bands with large inset rounded panels. The top bar has the logo at the left edge, four navigation links centered, and a circular menu button at the right (the measured navigation block is 112px tall with 0 16px padding). The hero wordmark is 695px wide at 230px tall, with image tiles overlapping its edges.

The intro panel is inset from the viewport edges, with a rounded corner radius and generous interior padding; heading text sits at the left at 56px, and a narrower paragraph column (480px wide) with its button sits right of center. The case cards are full-width, one per project, each in its own color, with the project name at the top left and tag pills below. The footer region holds the Journal teaser (footer block 238px tall, padding 0 64px), newsletter form, contact details (hallo@clou.ch, +41 41 240 56 62), social links (Instagram, LinkedIn) and the legal links Impressum, Datenschutz and AGBs.

Gaps measured: 8px (145 uses), 12px (128), 80px (13), 160px (10), 16px (10), 4px (6) and 120px (2). Paddings: 8px (101), 4px (97), 16px (43), 24px (8), 160px and 64px (4 each). The spacing tokens run 4, 8, 12, 16, 24, 32, 48, 64, 80 and 120px.

## Elevation & Depth

Mostly flat. One box shadow was measured: `rgba(0, 0, 0, 0.1) 0px 4px 16px 0px` (the element carrying it was not isolated). The stylesheet's other shadows (`0 0 4px 1px rgba(0,0,0,.08)` and several Webflow form and focus recipes) were not observed on visible brand elements.

Depth comes from layering rather than shadow: overlapping image tiles on the wordmark, a dark rounded panel sliding over a white page and over a gray-to-white gradient, and large colored cards stacked one after another. The hover state of the "unser Purpose" button changes its height from 52px to 58px with no color change.

## Shapes

Radii are a deliberate scale: measured values are `16px` (104 elements), `8px` (81), `100%` (16, the circular logo and menu button), `48px` (12, the pill buttons), `16px 16px 0px 0px` (2), `0px 0px 16px 16px` (1), `1280px`, `32px`, `160px`, `64px` and `2px` (1 each). Tokens: `xs` 2px, `sm` 8px, `md` 16px, `lg` 32px, `xl` 48px, `2xl` 64px, `3xl` 160px and `pill` 9999px.

The root variables name the responsive radii: `--border-radius--desktop-small` and `--border-radius--desktop-big` are 1rem (16px), `--border-radius--tablet` is .75rem (12px), `--border-radius--mobile-portrait` and `--border-radius--mobile-landscape` are .5rem (8px), image radii run `.75rem` (desktop big), `.5rem` (desktop small, tablet and mobile) and `--border-radius--main` is 0px. Buttons are 48px pills; panels and cards are 16px; the logo and menu button are circles.

## Components

- **Primary button ("Team kennenlernen", "alle Projekte anzeigen")**: `{colors.primary}` fill with `{colors.ink}` text, Athletics 16px at weight 500, radius 48px, padding 16px 24px, 58px tall.
- **Secondary button ("zum Journal", "Kontakt aufnehmen", "unser Purpose")**: `{colors.surface-black-light}` fill with white text, same shape and size (the "unser Purpose" instance is 52px tall at rest and 58px on hover).
- **Navigation**: four 16px labels (Projekte, Agentur, Journal, Kontakt); on hover each item gets a `#f5f7f6` fill (the Journal item gets the same color at about half opacity).
- **Menu button**: a black circle with a three-line icon at the top right.
- **Tag pill**: outlined pill with small text (Branding, Purpose, Strategie, Grafik Design, Webflow, Illustration), border and text in the case card's text color.
- **Section chip**: a small outlined pill ("Cases") above section statements.
- **Badge ("Professional Partner")**: `{colors.surface-black-light}` fill, `{colors.ink-muted}` text, radius 2px, padding 8px 12px, 32px tall.
- **Case card**: full-width block in a project color with a 16px radius, the project name at 32px and tag pills.
- **Footer**: links and contact details in `{colors.ink}`, padding 0 64px.

## Design System Architecture

No public brand guidelines or design-system site was found. The home page (https://www.clou.ch/) and the agency page (https://www.clou.ch/agentur) were opened; neither links to brand guidelines or a press kit, and "Brand Guidelines" appears only as a service Clou offers. The only downloadable document in the footer is the terms and conditions PDF.

The de-facto system is exposed in the shipped CSS as named variables: `--color--clou-black-text` (`#101114`), `--color--clou-black-light` (`#1f2126`), `--color--clou-black-deep` (`#000`), `--color--clou-grey` (`#e8ebe9`), `--color--clou-grey-light` (`#f5f7f6`), `--color--clou-grey-text` (`#85878c`), `--color--clou-purple` (`#beb1ff`) and `--color--clou-purple-dark` (`#9085cc`); fluid color variables (`--fluid-color-background`, `--fluid-color-text`, `--fluid-color-cursor`, `--on-black--fluid-color-clouli`); responsive radius variables per device class; and a `--call-to-action--side-margin`. The `webflow-icons` font-face and Webflow-default form colors in the stylesheet are consistent with the Webflow badge and tags on the page.

## Do's and Don'ts

Do
- Open with an oversized Athletics 500 wordmark at 256px with -6.4px tracking, overlapped by colorful image tiles.
- Use near-black `#101114` panels with white text for statements and 48px pill buttons for actions.
- Give each case its own full-bleed color card and outline its tags in a matching text color.
- Keep radii on the scale (16px panels, 48px buttons, circles for icon buttons).
- Write in a warm, informal voice with inclusive forms.

Don't
- Don't add heavy shadows; depth comes from layering.
- Don't use Webflow's default blue for focus or links as a brand color.
- Don't set body text at weight 500; reserve it for headings and buttons.
- Don't round the case cards beyond 16px or square off the buttons.
- Don't use more than one type family.

## Responsive Behavior

The mobile pass (390px) recorded: the wordmark at 117px / 105.3px with -1.95px tracking (from 256px) and 321px wide; the intro heading at 40px / 44px (from 56px / 61.6px), 322px wide; the paragraph unchanged at 24px / 31.2px, 358px wide; the navigation block 96px tall with 0 16px padding; the primary action measured on mobile is the "Kontakt aufnehmen" button (`#1f2126` fill, white text, 188px wide, 58px tall). The mobile size list is led by 18.008px (4343 characters), 24px (1848), 18px (833), 14px (760), 32px (435) and 40px (292).

The root variables declare smaller radii on smaller devices: 12px on tablet and 8px on mobile portrait and landscape, against 16px on desktop. The layout probe recorded no mobile layout data, so how the case cards and footer columns rearrange was not measured.

## Iteration Guide

1. Start from `canvas` `#ffffff`, `ink` `#101114` and `primary` `#e8ebe9`; add `surface-black-light` for dark buttons.
2. Load Athletics at 400 and 500; set the wordmark at 256px / 230.4px, headings at 56px / 61.6px, body at 24px / 31.2px, buttons at 16px / 25.6px weight 500.
3. Build buttons as 58px-tall pills (padding 16px 24px, radius 48px); use the grey button on dark surfaces and the graphite button on light ones.
4. Build the intro panel as a near-black 16px-radius block with a 56px white statement and a 480px paragraph column.
5. Give every case its own full-width color card from the case palette, with the project name at 32px and outlined tag pills.
6. Use the recorded narrow values (117px wordmark, 40px headings) and mark other narrow behavior as not measured.
7. Measure any new color on the live page before adding it as a token.
