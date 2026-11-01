---
version: alpha
name: Cleveland Clinic
category: "Healthcare & Wellness"
description: "Cleveland Clinic's patient site uses Roboto throughout (900-weight 48px hero, 700-weight 32px service titles, 18px medium buttons) with a clinical blue #007bc2 for the Appointments button, a deeper #0076ba for headings and links, #1b477b hover, a green #1d8553 accent, 5px button radii and a 24px alert pill on a white canvas."
colors:
  canvas: "#ffffff"
  ink: "#555555"
  link-blue: "#0076ba"
  on-primary: "#ffffff"
  surface-gray: "#f6f6f6"
  ink-strong: "#363636"
  ink-muted: "#737373"
  primary-hover: "#1b477b"
  primary: "#007bc2"
  accent-green: "#1d8553"
  donate-green: "#1b7638"
typography:
  display:
    fontFamily: Roboto, "Roboto Fallback", sans-serif
    fontSize: 48px
    fontWeight: 900
    lineHeight: 52px
  display-mobile:
    fontFamily: Roboto, "Roboto Fallback", sans-serif
    fontSize: 40px
    fontWeight: 900
    lineHeight: 44px
  heading:
    fontFamily: Roboto, "Roboto Fallback", sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 38px
  subheading:
    fontFamily: Roboto, "Roboto Fallback", sans-serif
    fontSize: 18px
    fontWeight: 700
    lineHeight: 28.8px
  body:
    fontFamily: Roboto, "Roboto Fallback", sans-serif
    fontSize: 32px
    fontWeight: 400
    lineHeight: 40px
  alert-label:
    fontFamily: Roboto, "Roboto Fallback", sans-serif
    fontSize: 17px
    fontWeight: 700
    lineHeight: 22px
  nav:
    fontFamily: Roboto, "Roboto Fallback", sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: Roboto, "Roboto Fallback", sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 24px
rounded:
  xs: 5px
  sm: 24px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 8px
  s4: 12px
  s5: 15px
  s6: 16px
  s7: 24px
  s8: 32px
  s9: 40px
  s10: 48px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 16px 24px
    height: 56px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-outline:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 8px 24px
    height: 42px
    borderColor: "{colors.primary}"
  alert-pill:
    backgroundColor: "{colors.link-blue}"
    textColor: "{colors.on-primary}"
    typography: "{typography.alert-label}"
    rounded: "{rounded.sm}"
    padding: 12px 48px 12px 12px
    height: 48px
    boxShadow: rgba(0, 0, 0, 0.05) 0px 1px 30px 0px
  nav-link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.nav}"
    padding: 8px 12px 8px 16px
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
---

# Cleveland Clinic

## Overview

Cleveland Clinic's patient site (my.clevelandclinic.org, page title "Cleveland Clinic: Every Life Deserves World Class Care") fronts a nonprofit multispecialty academic medical center. Its About page (opened for this document) states the mission as "caring for life, researching for health, and educating those who serve", says the founders opened it in 1921 as a multi-specialty group practice, and lists the address 9500 Euclid Avenue, Cleveland, Ohio.

The home page is a consumer-health service directory, not a brand-campaign page. A slim gray utility bar lists locations (Abu Dhabi, Canada, Florida, London, Nevada, Ohio) on the left and quick links on the right (800.223.2273, MyChart, Medical Professionals, Careers, and a green "Donate Now"). Below it sits the main bar with the Cleveland Clinic logo (a blue-and-green cross mark with the name in a dark gray-green), five navigation entries (Find a Provider, Locations and Directions, Services, Patients and Visitors, Health Library), a green search icon and a solid blue "Appointments" button. A blue pill alert, "Closures & Updates", hangs below the utility bar.

The hero is a muted photograph of a quiet interior with the white 900-weight headline "We're here when you need us — for every care in the world." and three underlined white links (Our Providers, Locations & Directions, Appointments). The next section, "Featured Services", is a three-by-three grid of specialties (Cancer, Children's Services, Digestive Care, Ear Nose and Throat, Heart Care, Neurology, Ob/Gyn Care, Orthopaedic Care, Primary Care), each with a thin line icon, a 32px bold blue title, a one-line gray description and a "Show services" disclosure link. An "Explore all services" button follows, then a seasonal feature ("Cold or Flu Getting You Down" with a photograph and a "Get cold & flu care" button).

The tone is plain and reassuring. Sentences are short and benefit-led ("Prevention, testing and treatment", "Well-checks and pediatric care"). Photography is natural-light and human. Short blue accent rules sit under section headings.

## Colors

- **Canvas `#ffffff`**: the page background; about 61% of the capture.
- **Ink `#555555`**: the most-read dark text color (1016 characters); **ink strong `#363636`** colors navigation, location links, and the "Cold or Flu Getting You Down" heading; **ink muted `#737373`** is the measured color of the large mission paragraph (161 characters).
- **Primary `#007bc2`**: the fill of "Appointments" and the other main buttons ("Explore all services", "Get cold & flu care", "Browse the Health Library"), the outline color and text of the secondary button, the footer band fill (largest background area, weight 2100) and the color of navigation labels (423 characters of text are `#007bc2`). On-primary text is white.
- **Primary hover `#1b477b`**: the deep blue that "Appointments" turns to on hover; the same value takes over navigation labels and service-title links on hover, and also appears as a measured background area (weight 663).
- **Link blue `#0076ba`**: the color of the 32px service titles, the phone number and the "Closures & Updates" pill fill; location and utility links turn this color on hover.
- **Surface gray `#f6f6f6`**: a light band background (weight 747).
- **Accent green `#1d8553`** (a measured background) and **Donate green `#1b7638`** (the "Donate Now" text, darkening to `#0a5522` on hover): `#1d8553` was measured as a background (weight 2) and `#1b7638` as the "Donate Now" text; the capture also shows green in the logo mark, the search icon and a scroll-down circle, whose exact values were not isolated.

White text is the second most frequent color (1356 characters) because of the hero headline, the footer band and the buttons.

## Typography

One family, **Roboto**, is loaded in four weights: 400 (2439 characters), 500 (380), 700 (569) and 900 (58). The stylesheet also declares Source Sans 3, News Cycle and Inter (via variables `--font-source-sans` and `--font-news-cycle`), but every measured character is Roboto.

| Role | Size / line height | Weight |
|---|---|---|
| Display (hero H1, white) | 48px / 52px | 900 |
| Display, mobile pass | 40px / 44px | 900 |
| Heading (service titles, H2) | 32px / 38px | 700 |
| Subheading (newsletter H3) | 18px / 28.8px | 700 |
| Body (mission paragraph) | 32px / 40px | 400 |
| Button | 18px / 24px | 500 |
| Alert pill label | 17px / 22px | 700 |
| Nav / utility links | 12px / 24px | 400 |

By characters, the commonest sizes are 16px (838), 19px (751), 15px (564), 13px (317), 32px (278) and 40px (224). The system leans on weight contrast: 900 for the single hero statement, 700 for titles, 500 for buttons, 400 for reading text.

The 32px / 40px "body" role is a large lead paragraph ("We put patients first. That's been our approach for more than ..."), measured in `#737373`; regular reading text on the page runs at 15px to 19px.

**Font substitutes.** Roboto is an open font and is the measured family, so no substitute is needed.

## Layout

At 1280px the page is 7456px tall. Structure from top: utility bar, main navigation bar (193px for the combined header block per the measured nav element), a hero with left-aligned text, the "Featured Services" grid in three columns, a two-column feature (text left, photograph right), further content bands in `#f6f6f6` and white, and a blue footer band 1091px tall that opens with "Find a Provider / Need a primary care doctor or a specialist?".

The content column starts at the same left edge for the hero text, section labels and the grid. Gaps measured on the page: 32px (14 uses), 40px (12), 12px (6), 8px (3), 16px, 24px, 96px and 64px (2 each). Paddings: 8px (22), 16px (15), 4px (15), 12px (13), 24px (6), 32px, 64px, 56px, 40px, 48px, 5px and 15px.

Section headings use a short blue rule beneath a small label ("Featured Services") or beneath the heading itself, a recurring wayfinding device.

## Elevation & Depth

Nearly flat. The only measured box shadow is on the alert pill: `rgba(0, 0, 0, 0.05) 0px 1px 30px 0px`, which on hover becomes `rgba(54, 54, 54, 0.15) 0px 1px 15px 0px` while its fill changes to `#1b477b`. The stylesheet carries Tailwind ring and shadow variables whose defaults are `0 0 #0000`, and eleven `none!important` shadow resets.

Hierarchy is made with color and photography: a darkened hero image behind the white headline, and flat color bands elsewhere.

## Shapes

Measured radii: `5px` (20 elements: the main buttons, outline button and the hero's video control), `24px` (1 element: the alert pill) and `9999px` (1 element). Tokens: `xs` 5px, `sm` 24px and `pill` 9999px.

Buttons are slightly rounded rectangles, not pills; the one fully rounded control is the alert pill. Line icons for each specialty are thin outline drawings in dark gray. Photographs are plain rectangles.

## Components

- **Primary button ("Appointments")**: `{colors.primary}` fill, white Roboto 18px at weight 500, radius 5px, padding 16px 24px, 56px tall and 161px wide in the header; the other primary buttons on the page measure 40px to 48px tall with 8px to 12px vertical padding. Hover fill `{colors.primary-hover}`.
- **Outline button ("Read Health Essentials")**: white fill, `#007bc2` text and 1px border, radius 5px, padding 8px 24px, 42px tall.
- **Alert pill ("Closures & Updates")**: `{colors.link-blue}` fill, white 17px bold text with an exclamation icon and a close control, radius 24px, padding 12px 48px 12px 12px, 48px tall, 246px wide, with the soft shadow above.
- **Utility and navigation links**: 12px Roboto in `{colors.ink-strong}`, padding 8px 12px 8px 16px; hover turns text and border `#0076ba`. Main navigation labels are blue and turn `#1b477b` on hover.
- **Service tile**: icon, a 32px bold title link in `#0076ba` (hover `#1b477b`), a gray one-line description, and a "Show services" disclosure link with a chevron.
- **Footer band**: `{colors.primary}` fill with white text; "Find a Provider" heading at 25px bold.

Not documented as brand UI: the "Let's Chat!" chat widget, the hero "Play video" control and the scroll-down circle.

## Design System Architecture

No public brand-guideline or design-system site was found. The About page (https://my.clevelandclinic.org/about) links to a newsroom (https://newsroom.clevelandclinic.org), "Copyright, Reprint & Licensing" and "About this Website", but not to brand guidelines or logo downloads.

The de-facto system is visible in the shipped CSS: Tailwind-style variables (`--tw-ring-*`, `--tw-shadow`), font variables (`--font-roboto`, `--font-source-sans`, `--font-news-cycle`) that carry fallback faces, and a small set of repeated values: 5px button radius, 32px and 40px gaps, and a shared hover color (`#1b477b`) for blue links and buttons. Hover states are consistent: blue items darken to `#1b477b`, dark gray utility links turn `#0076ba`, and the green "Donate Now" darkens to `#0a5522`.

## Do's and Don'ts

Do
- Use `#007bc2` for the main action, with white 18px medium text and a 5px radius; darken to `#1b477b` on hover.
- Use Roboto 900 for the hero statement and 700 for section and service titles.
- Pair each service with a thin line icon, a bold blue title and a one-line gray descriptor.
- Use the green (`#1d8553`) only as the second brand color, in small amounts.
- Keep photography natural and human; place white text only over a darkened image.

Don't
- Don't round primary buttons into pills; only the alert pill uses 24px.
- Don't add shadows to cards or buttons; the only shadow belongs to the alert pill.
- Don't use browser-default link blue; links are `#0076ba` or `#007bc2`.
- Don't treat the chat widget, video control or scroll cue as brand components.
- Don't set long paragraphs in weight 900.

## Responsive Behavior

Measured in the mobile pass (390px): the hero H1 is 40px / 44px at weight 900 and 358px wide (from 48px / 52px); the H2 is 32px / 34px; the lead paragraph stays 32px / 40px and 358px wide; the alert pill drops to 14px / 19px with padding 6px 36px 6px 8px, 32px tall and 198px wide; the navigation text in the mobile pass reads "Locations: Abu Dhabi|Canada|Florida|London|Nevada|Ohio" followed by "Menu". The mobile size list is led by 16px (3092 characters), 19px (751), 15px (482), 32px (385) and 13px (317).

How the services grid and the footer band rearrange on mobile was not measured; the extraction recorded no mobile layout figures.

## Iteration Guide

1. Start from `canvas` `#ffffff`, `ink` `#555555`, `primary` `#007bc2` and `primary-hover` `#1b477b`; add `link-blue` `#0076ba` for titles.
2. Load Roboto 400, 500, 700 and 900; set the hero at 48px / 52px weight 900, service titles at 32px / 38px weight 700, buttons at 18px / 24px weight 500.
3. Build the primary button at 16px 24px padding, 5px radius and 56px height; the compact variant uses 8px to 12px vertical padding.
4. Lay out services as a three-column grid with line icons, 32px bold blue titles and gray one-line descriptions.
5. Add the green (`#1d8553`) sparingly, for the donation link and small marks.
6. Use a short blue rule under section headings as the wayfinding accent.
7. For narrow screens, use the recorded values (40px hero, 32px / 34px headings); mark everything else as not measured.
