---
version: alpha
name: Boston Consulting Group
category: "Business & Corporate"
description: "BCG (bcg.com) pairs light-weight henderson-bcg-serif headlines in deep green #0c2b15 with henderson-bcg-sans text in #212427 on white, mint #e3fddb and warm #f1eeea bands, signature lime #96f878 15px-radius uppercase CTA buttons, 20px-radius translucent cards and full-bleed deep-green panels."
colors:
  canvas: "#ffffff"
  ink: "#212427"
  primary: "#96f878"
  on-primary: "#212427"
  primary-hover: "#71dc68"
  green-deep: "#0c2b15"
  green-tint: "#e3fddb"
  neutral-warm: "#f1eeea"
  ink-alt: "#232326"
  card-glass: "#ffffffb3"
  green-mid: "#197a56"
  gray-500: "#696969"
typography:
  display:
    fontFamily: henderson-bcg-serif, "Palatino Linotype", Palatino, Garamond, Georgia, serif
    fontSize: 40px
    fontWeight: 300
    lineHeight: 40px
  display-mobile:
    fontFamily: henderson-bcg-serif, "Palatino Linotype", Palatino, Garamond, Georgia, serif
    fontSize: 32px
    fontWeight: 300
    lineHeight: 38.4px
  heading:
    fontFamily: henderson-bcg-serif, "Palatino Linotype", Palatino, Garamond, Georgia, serif
    fontSize: 48px
    fontWeight: 300
    lineHeight: 48px
  subheading:
    fontFamily: henderson-bcg-sans, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 40px
    fontWeight: 300
    lineHeight: 40px
  body:
    fontFamily: henderson-bcg-sans, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16.8px
  button:
    fontFamily: henderson-bcg-sans, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 16px
    textTransform: uppercase
  nav:
    fontFamily: henderson-bcg-sans, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
  input:
    fontFamily: henderson-bcg-sans, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 21px
  card-meta:
    fontFamily: henderson-bcg-sans, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 11px
    fontWeight: 700
    lineHeight: 11px
    textTransform: uppercase
  footer-statement:
    fontFamily: henderson-bcg-sans, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 32px
    fontWeight: 300
    lineHeight: 38.4px
rounded:
  xs: 5px
  sm: 10px
  md: 15px
  lg: 20px
  xl: 25px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 7.5px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 13px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 13px 55px 13px 24px
    height: 48px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 0px 12px
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 7.5px
    height: 36px
  card:
    backgroundColor: "{colors.card-glass}"
    textColor: "{colors.ink}"
    typography: "{typography.card-meta}"
    rounded: "{rounded.lg}"
    padding: 20px
  feature-panel:
    backgroundColor: "{colors.green-deep}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.lg}"
  footer:
    backgroundColor: "{colors.neutral-warm}"
    textColor: "{colors.ink}"
    typography: "{typography.footer-statement}"
    padding: 56px 0px
---

# Boston Consulting Group

## Overview

The measured site is https://www.bcg.com/ (title "Strategic Management Consulting | Boston Consulting Group", `lang="en"`), captured at 1280px wide with a 5503px scroll height and at 390px for the mobile pass; two consent pop-ups were hidden by the extractor. BCG's own About page (https://www.bcg.com/about/overview) describes it as a global management consulting firm with more than 33,000 employees and offices in over 100 cities.

The page feels like a calm editorial journal with a bright accent. The header is minimal: two floating white rounded containers, one with a menu icon and the green BCG logo on the left, one with search and "LOG IN" on the right. The hero is centred: a small "WELCOME TO BCG" eyebrow, the light serif headline "Where Strategic Clarity Meets Applied AI" in deep green, and a three-item carousel of article cards (an iridescent sphere illustration in the middle card titled "The Formula for Agentic AI Value") with small play/prev/next controls and a pill-shaped tab bar (BCG SPOTLIGHT, ARTIFICIAL INTELLIGENCE, BCG X PRODUCT LIBRARY, CEO AGENDA). Then come: a deep-green `#0c2b15` rounded panel "Transformative Impact in Action" with a lime "EXPLORE CLIENT STORIES" button; "The 2026 M&A Report" with four tall image cards topped by frosted translucent text panels; a mint `#e3fddb` "BCG Answer" band ("NEW AI-POWERED FEATURE", "ASK US A QUESTION"); a mosaic of large rounded photo and dark cards ("Where Strategic Clarity Meets Applied AI", "BCG X Client Impact", "Six Lessons from Six Years of Climate Action at BCG"); "BCG in Southeast Asia"; a warm-beige careers split ("Go Beyond the Expected", with outlined and lime buttons); a deep-green "Featured Insights" panel with an email subscribe bar; and a warm `#f1eeea` footer ("Unlocking the Potential of Those Who Advance the World", "How can we assist you?").

The voice is assured and outcome-focused — "We stand shoulder to shoulder with our clients", "Go Beyond the Expected". Imagery mixes business photography with abstract iridescent and aerial-landscape art.

## Colors

- **Canvas `#ffffff`** — the page background behind the hero and content sections.
- **Ink `#212427`** — declared as `--black`; the most-read text (2983 chars) and the text on lime buttons.
- **Primary `#96f878`** — `--accent-200`, the lime CTA fill on every button ("EXPLORE CLIENT STORIES", "ASK US A QUESTION", "SEE HOW WE WORK", "LEARN MORE", "SUBSCRIBE"). `--accent-300` `#71dc68` is the declared hover/video-button state, and `--primary_button-animated-hover_state-background_color` points to `--accent-200`. The header "LOG IN" link gains a `#96f878` border colour on hover.
- **Green deep `#0c2b15`** — `--green-700`, the largest background area (1454): feature panels, and the colour of the serif headlines.
- **Green tint `#e3fddb`** — `--green-200` / `--success-200`, the mint "BCG Answer" band (1333 area).
- **Neutral warm `#f1eeea`** — `--neutral-200`, the careers band and footer (1248 area).
- **Card glass `#ffffffb3`** — 70% white (`--translucent-white`), the frosted text panels on the report cards.
- **Ink alt `#232326`** — a second near-black text colour (198 chars).
- **Green mid `#197a56`** — `--green-500`, declared in the green scale.
- **Gray 500 `#696969`** — `--gray-500`, a measured border colour.

The declared palette also includes `--green-100` `#d8f4ef`, `--green-300` `#a8f0b8`, `--green-400` `#21bf61`, neutrals from `#dcd5ce` to `#856e57`, grays `#f2f2f2` to `#323232`, and warning yellows (`--warning-400` `#ffcf24`).

## Typography

BCG uses its own Henderson family, declared as `--font-fam-bcg-sans` (henderson-bcg-sans), `--font-fam-bcg-serif` (henderson-bcg-serif), `--font-fam-bcg-headline` (henderson-bcg-headline) and `--font-fam-bcg-mod` (henderson-bcg-mod). The theme sets `--font-family-brand-headings: var(--font-fam-bcg-serif)`, `--font-family-primary: var(--font-fam-bcg-sans)` and `--font-weight-headings: 300`.

- **Display** — henderson-bcg-serif 40px/40px, weight 300, deep green: the hero headline.
- **Heading** — henderson-bcg-serif 48px/48px, weight 300: section titles ("The 2026 M&A Report", "BCG Answer", "BCG in Southeast Asia").
- **Subheading** — henderson-bcg-sans 40px/40px, weight 300: the "Featured Insights" statement.
- **Footer statement** — henderson-bcg-sans 32px/38.4px, weight 300.
- **Button** — henderson-bcg-sans 16px/16px, weight 700, uppercase.
- **Nav** — henderson-bcg-sans 16px/16px, weight 400.
- **Card meta** — 11px/11px, weight 700, uppercase ("ARTICLE SEPTEMBER 21, 2026").
- **Body** — the measured body role is 12px/16.8px (the equal-opportunity legal paragraph); the most frequent text sizes overall are 12px (869 chars), 18px (765) and 22px (613).

Weights are 300 (1840 chars), 400 (1705) and 700 (447): light headlines, regular text, bold uppercase labels and buttons. Without Henderson, use a Palatino-like serif (the site's own fallback is "Palatino Linotype", Palatino, Garamond, Georgia) for headlines and Helvetica Neue for text.

## Layout

The desktop content is a 1200px column (the header and body text measured 1200px wide) centred in the 1280px viewport. Bands: a 2098px white opening section (hero carousel, tab bar, green impact panel, M&A report) laid out up to four columns, a 413px mint "BCG Answer" band in two columns, a 1282px white section of two-column mosaics, a 329px careers media band, a 544px featured-insights media band, and a 781px `#f1eeea` footer in two columns. Report cards run four across; the mosaic pairs one large card with two stacked cards.

Spacing tokens are declared by name (`--spacing-d` 8px, `--spacing-f` 16px, `--spacing-g` 24px, `--spacing-h` 32px). Measured paddings are 40px and 20px most often, then 24px and 13px; gaps 16px and 40px. The footer uses `56px 0px`. The header is declared at 56px (`--header-height`); one header link was visible on desktop, with a menu toggle labelled "Link to open BCG site menu".

## Elevation & Depth

Depth is soft. The measured shadow `rgba(0, 0, 0, 0.12) 0px 1px 2px 0px, rgba(0, 0, 0, 0.08) 0px 2px 6px 0px` appears on 4 elements. More depth comes from translucency: report cards lay a 70% white panel (`#ffffffb3`) over full-bleed imagery, and a `#01010166` 40% black background was measured. Large rounded deep-green and photo panels sit on white like tiles.

## Shapes

Rounded throughout, with named radius tokens `--radius-5`, `-10`, `-15`, `-20`, `-25`, `-30` and `-70`. Measured: 15px (15 elements, including the lime buttons), 20px (12 — cards and panels), 10px (10), 5px (3), 25px (2) and one `20px 0px 0px 20px` half-rounded element. Buttons are 15px rounded rectangles, not pills; the header containers and tab bar are fully rounded capsules in the capture.

## Components

**Primary button** — `#96f878` fill, `#212427` henderson-bcg-sans 16px/16px weight 700 uppercase, 15px radius, `13px 55px 13px 24px` padding (room on the right for an arrow icon), 48px tall, with a 3px solid border. The theme defines animated and non-animated variants with focus states on `--green-700`.

**Secondary button** — an outlined variant appears next to "APPLY TODAY" in the careers band ("EXPLORE BCG CAREERS"); its measurements were not recorded.

**Report card** — full-bleed image, 20px radius, an uppercase category pill at top, and a frosted `#ffffffb3` panel (20px radius, 20px padding) with 11px/700 uppercase meta and a short title.

**Feature panel** — `#0c2b15` deep green, 20px radius, white serif headline, white text and a lime button.

**Header** — floating white capsules: menu icon + logo on the left, search + "LOG IN" on the right; the LOG IN link takes a lime border on hover.

**Subscribe bar** — a translucent capsule inside the dark Featured Insights panel with "Get the latest industry insights delivered to you", an email field (15px/21px, 36px tall, 7.5px padding) and a lime SUBSCRIBE button.

**Footer** — `#f1eeea`, a 32px/300 statement, link columns (Careers, Alumni, Offices, Subscribe, About), "How can we assist you?" with a lime CONTACT US button, the BCG logo and legal links.

## Design System Architecture

No public BCG design system site was found; the About page (https://www.bcg.com/about/overview) links a Corporate Newsroom (https://www.bcg.com/about/corporate-newsroom) and media contacts but no brand guidelines in the portion read.

The shipped CSS reveals a well-structured token system. Primitive colour scales use `--{hue}-{step}` (`--green-100` … `--green-700`, `--neutral-200` … `--neutral-700`, `--gray-200` … `--gray-700`, `--accent-200/300`, `--success-*`, `--warning-*`). Component tokens follow a long, explicit pattern — `--{component}-{variant}-{state}_state-{property}` — for example `--primary_button-animated-hover_state-background_color: var(--accent-200)`, `--primary_button-non_animated-focus_state-background_color: var(--green-700)`, `--secondary_button-non_animated-disabled_state-text_color: var(--gray-450)`, `--icon_only_button-default_state-background_color: var(--accent-200)` and `--video_button-hover_state-background_color: var(--accent-300)`. Radii are `--radius-{px}`, spacing has both numeric (`--spacing-12` 8px) and letter scales (`--space-f` 16px, `--space-g` 24px), and typography roles point to font-family variables.

## Do's and Don'ts

**Do**
- Use lime `#96f878` for every primary action with dark `#212427` uppercase bold text.
- Set headlines in the light (300) Henderson serif, in deep green `#0c2b15`.
- Alternate white, mint `#e3fddb`, warm `#f1eeea` and deep-green sections.
- Round cards and panels at 20px and buttons at 15px.
- Use frosted 70% white panels over imagery for card text.

**Don't**
- Don't bold the headlines; heading weight is declared as 300.
- Don't use the lime as a background for large areas; it is for buttons and small accents.
- Don't make buttons fully pill-shaped; 15px is the button radius.
- Don't use pure black; the darkest ink is `#212427` and the darkest fill is the deep green.

## Responsive Behavior

Measured at 390px wide:

- The hero headline drops from 40px/40px to 32px/38.4px, weight 300.
- "The 2026 M&A Report" drops from 48px/48px to 40px/48px.
- The lime button becomes 14px/14px weight 700, 46px tall, keeping the 15px radius and `13px 55px 13px 24px` padding.
- The header is 57px tall with one visible link and the menu toggle, as on desktop.
- Body/legal text stays 12px/16.8px; the most common mobile size is 12px, then 16px and 18px.
- The mobile page alternates white, media, mint, beige and deep-green bands in one column.

Behaviour between 390px and 1280px was not measured.

## Iteration Guide

1. White canvas, `#212427` text in henderson-bcg-sans; headlines in henderson-bcg-serif at weight 300 in `#0c2b15`.
2. Float two white capsule containers as the header: menu + logo left, search + LOG IN right.
3. Centre a 40px serif headline over a carousel of 20px-radius image cards with frosted `#ffffffb3` text panels.
4. Use 15px-radius lime `#96f878` buttons (48px, `13px 55px 13px 24px`, 16px/700 uppercase) with an arrow on the right.
5. Break the page with a deep-green 20px-radius panel, a mint band and a warm beige band.
6. Title sections at 48px serif, weight 300.
7. Close with a `#f1eeea` footer with a 32px/300 statement and a lime CONTACT US button.
