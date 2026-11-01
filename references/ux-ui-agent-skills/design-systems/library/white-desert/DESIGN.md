---
version: alpha
name: "White Desert"
category: "Food & Beverage"
description: "Luxury Antarctic expedition site: full-bleed ice film under a 227.555px uppercase Oswald headline, Cardinal Classic Long serif titles, Inter Tight UI at 12.4444px, navy #1f2a44 text on white, orange #ff7e15 hover accent and 2px-radius translucent nav buttons."
colors:
  canvas: "#ffffff"
  ink: "#1f2a44"
  primary: "#ff7e15"
  on-primary: "#ffffff"
  surface-2: "#090b10"
  surface-3: "#e9e7e1"
  ink-3: "#535353"
  hairline: "#ffffff33"
  primary-hover: "#fd7d15f8"
  button-primary-bg: "#1f2a4433"
  link-bg: "#00000003"
  nav-bg: "#ffffff03"
  card-bg: "#1f2a440d"
typography:
  display:
    fontFamily: Oswald, "Arial Narrow", Arial, sans-serif
    fontSize: 227.555px
    fontWeight: 400
    lineHeight: 227.555px
    textTransform: uppercase
  display-mobile:
    fontFamily: Oswald, "Arial Narrow", Arial, sans-serif
    fontSize: 80px
    fontWeight: 400
    lineHeight: 80px
    textTransform: uppercase
  heading:
    fontFamily: "\"Cardinal Classic Long\", ui-serif, Georgia, Cambria, \"Times New Roman\", Times, serif"
    fontSize: 90px
    fontWeight: 500
    textTransform: uppercase
  subheading:
    fontFamily: "\"Cardinal Classic Long\", ui-serif, Georgia, Cambria, \"Times New Roman\", Times, serif"
    fontSize: 37.3333px
    fontWeight: 400
    lineHeight: 37.3333px
    textTransform: uppercase
  body:
    fontFamily: "\"Inter Tight\", ui-sans-serif, system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 12.4444px
    fontWeight: 500
    lineHeight: 18.6666px
  nav:
    fontFamily: "\"Inter Tight\", ui-sans-serif, system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 14.2222px
    fontWeight: 400
  link:
    fontFamily: "\"Cardinal Classic Long\", ui-serif, Georgia, Cambria, \"Times New Roman\", Times, serif"
    fontSize: 37.3333px
    fontWeight: 500
    lineHeight: 37.3333px
rounded:
  xs: 1.78px
  sm: 2px
  md: 3.56px
  lg: 4.44px
  xl: 5.33px
  pill: 9999px
spacing:
  s1: 1.78px
  s2: 4.44px
  s3: 4.98px
  s4: 7.11px
  s5: 7.78px
  s6: 8.89px
  s7: 10px
  s8: 10.67px
  s9: 12.44px
  s10: 14.22px
components:
  button-primary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 0px 14.2222px
    height: 36px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 0px 14.2222px
    height: 36px
  link:
    backgroundColor: "{colors.link-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.canvas}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.canvas}"
    padding: 17.7778px
---

# White Desert

## Overview

White Desert sells luxury expeditions to the interior of Antarctica, with flights from Cape Town between November and February, camps that host up to 12 guests each, and itineraries priced from US $16,500 to US $115,500 on the homepage. The site at white-desert.com is built as a cinematic scroll: a full-bleed blue ice film under a giant condensed headline "ANTARCTICA", a soft white cloud transition, then editorial sections on a white page with deep navy text. The copy voice is aspirational and spare ("Luxury and adventure in the most remote place on Earth", "The Last Continent"). The footer credits the build to Malvah.

The measured identity is a contrast of three type voices on a restrained palette: an ultra-tall Oswald display headline, an old-style serif (Cardinal Classic Long) in capitals for section titles, and a neutral grotesque (Inter Tight) at small sizes for interface text. Orange `#ff7e15` is a rare accent that appears only on hover and a few details, while navy `#1f2a44` carries almost all reading text.

## Colors

- `canvas` `#ffffff` is the page background (the largest light area), and `surface-2` `#090b10` is the dark section background (`--dark-bg` in the site's CSS). `surface-3` `#e9e7e1` is a warm stone panel color.
- `ink` `#1f2a44` is the dark blue used for 3227 measured text characters; it is `--wd_dark-blue` in the shipped CSS. White `#ffffff` text (2249 characters) sits on the hero and dark sections. `ink-3` `#535353` is `--wd_light-charcoal`, used for secondary text (608 characters).
- `primary` `#ff7e15` is the orange accent (20 text characters and a few small fills). `primary-hover` `#fd7d15f8` is the measured hover background of the nav buttons.
- Interface chrome uses translucent layers: `button-primary-bg` `#1f2a4433` (navy at 20% opacity) for the nav buttons, `nav-bg` `#ffffff03`, `link-bg` `#00000003`, `card-bg` `#1f2a440d` and `hairline` `#ffffff33` for 1px outlines such as the "Watch Film" frame.
- Imagery supplies the saturated blues of the hero; they are photographic and not tokens.

## Typography

Display: Oswald (with "Arial Narrow", Arial, sans-serif fallbacks), 227.555px at weight 400, line height 227.555px, uppercase, for the hero word "ANTARCTICA"; on the measured mobile pass the same role is 80px with 80px line height. Headings: Cardinal Classic Long (fallback ui-serif, Georgia, Cambria, Times) at 90px weight 500, uppercase, for titles such as "OUR CAMPS". Subheadings and card links are the same serif at 37.3333px (weight 400 for the statement paragraphs, 500 for itinerary titles such as "Baby Penguins & Blue Tunnels") with a 37.3333px line height. A medium italic cut of the serif is loaded for taglines such as "Luxury and adventure in the most remote place on Earth".

Body and navigation use Inter Tight (with the full system sans stack) at weight 500: 12.4444px with 18.6666px line height for body and buttons, and 14.2222px at weight 400 for nav links. By character count 12.4444px dominates (3882 characters), then 14.2222px (906), 37.3333px (351) and 16px (341). Small eyebrow text is 8.88888px with 0.888888px letter spacing, and 12.4444px labels use 2.17778px tracking. Weights in use are 400, 500 and 600. Oswald and Cardinal Classic Long are licensed typefaces; open substitutes are Oswald (itself open source) and a high-contrast display serif such as Cormorant.

## Layout

The home page is 18488px tall at the 1280px measurement width. The header is a 71px bar with five rectangular buttons (Experience, Operation, About at left; Rates, Enquire at right) and the mountain logo centred. A thin vertical grid of hairlines runs behind the hero. Below the hero the page alternates between a narrow centred text column for the statement paragraph, large image-and-title blocks for trips and camps, a stats row for travel facts (flying time 05:30, 4,220 km, average summer temperature -5°C) and a numbered six-step process. Spacing values measured include 1.78px, 4.44px, 4.98px, 7.11px, 7.78px, 8.89px, 10px, 10.67px, 12.44px and 14.22px; the shipped CSS defines em-based sizes such as `--space-4` 1.5em and `--space-8` 4em.

## Elevation & Depth

Depth is mostly photographic and translucent rather than shadowed. The only measured box shadow, used on 11 elements, is an inset white hairline glow: `rgba(255, 255, 255, 0.2) 0.35px 0.35px 0px 0px inset, rgba(255, 255, 255, 0.2) 0px 0px 1.75px 0px inset`, which gives the translucent nav buttons a frosted edge. The CSS also defines `--shadow-2` as `0 4px 10px rgba(0,0,0,.08),0 2px 4px rgba(0,0,0,.06)`. Dark scrims (`#00000033`, `#0000001a`) sit over imagery so white text reads.

## Shapes

Radii are small and technical: `xs` 1.78px, `sm` 2px (the nav buttons, 27 uses), `md` 3.56px, `lg` 4.44px and `xl` 5.33px, plus 50% and 100% for circular controls and a top-rounded 3.56px variant. The measured nav button radius is 2px at rest and 4.31345px mid-hover. The result is nearly square, instrument-panel geometry that suits the large photographic panels.

## Components

- **button-primary** (nav "Experience"): 36px high, padding 0px 14.2222px, 2px radius, translucent navy fill `#1f2a4433`, white 12.4444px Inter Tight label. On hover the measured background becomes `rgba(253, 125, 21, 0.973)` with an orange border `rgb(255, 131, 29)`.
- **button-secondary** ("Operation"): same geometry and fill.
- **Outlined action** ("Watch Film"): transparent with a `1px solid #ffffff33` frame, 39px tall, padding 4.97777px 28.4444px, with a play arrow.
- **nav**: 71px bar, near-transparent white `#ffffff03` background over the hero.
- **link / itinerary card**: serif title at 37.3333px, a price line such as "US $75,250" and a season tag such as "Early Season", on a nearly transparent `#00000003` surface.
- **card**: `#1f2a440d` background with 17.7778px padding.

## Design System Architecture

No public design system or brand guideline exists on white-desert.com: the homepage links to terms, privacy and press email only, and credits "Website by Malvah". The de-facto system is the CSS custom properties shipped on the page (https://white-desert.com/): brand colors `--wd_dark-blue` #1f2a44, `--wd_ash-blue` #2c374b, `--wd_light-charcoal` #535353, `--wd_black` #000, `--dark-bg` #090b10, `--muted` #a8acb3, `--border` #1f2330; a condensed font variable `--font-condensed` set to Oswald; em-based size and radius scales such as `--size-0625`, `--radius-0625` and `--radius-0125`; and `--space-4` / `--space-8`.

## Do's and Don'ts

- Do set headlines in uppercase and let the hero word fill the width at 227.555px.
- Do use navy `#1f2a44` for reading text on white, and white on photography.
- Do keep controls rectangular with 2px radii and translucent fills.
- Do reserve orange `#ff7e15` for hover and rare emphasis.
- Don't introduce heavy drop shadows; only the inset hairline was measured.
- Don't use bright blues as UI colors; the blues belong to photography.
- Don't mix more than the three measured families.
- Do write calls to action in the site's own plain verbs: "Enquire now", "Learn More", "Watch Film", "Start planning your adventure".
- Do present facts as numbers with units, as the travel section does (05:30, 4,220 km, -5°C).

## Responsive Behavior

The extraction's mobile pass recorded the hero headline at 80px (line height 80px, width 367px) in place of 227.555px, and the "OUR CAMPS" heading at 90px with a 390px width. Navigation behaviour, grid changes and touch targets on small screens were not measured. Breakpoint values are not measured.

## Iteration Guide

1. Begin with `#ffffff` and `#1f2a44`, add `#090b10` for dark sections.
2. Set the hero in Oswald uppercase, section titles in the serif at 90px, UI in Inter Tight 12.4444px.
3. Build nav buttons as 36px-high 2px-radius translucent navy rectangles; swap to orange on hover.
4. Use full-bleed film or photography under a scrim.
5. Re-run the extractor against the live site and the gate after every change.
