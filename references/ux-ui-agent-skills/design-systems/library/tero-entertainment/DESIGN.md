---
version: alpha
name: Tero Entertainment
category: "Thai Brands"
description: "Tero Entertainment (TeroAsia) corporate and ticketing site in Thai and English: Kanit throughout (16-44px, weights 400-700), warm cream #fbf9f4 sections, brand red #ab0f15 action buttons with 8px radius, near-black #1a1719 ink and a dark live-concert video hero."
colors:
  canvas: "#ffffff"
  page-largest: "#fbf9f4"
  ink: "#1a1719"
  primary: "#ab0f15"
  on-primary: "#ffffff"
  surface-dark: "#1f2024"
  ink-muted: "#544e51"
  ink-gray: "#212529"
  ink-on-dark-soft: "#ffffffe6"
  accent-red: "#e63946"
  hairline: "#1a17190d"
  border-card: "#e0e0e0"
  border-footer: "#6b7280"
typography:
  display:
    fontFamily: Kanit, "Kanit Fallback"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  display-mobile:
    fontFamily: Kanit, "Kanit Fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  heading:
    fontFamily: Kanit, "Kanit Fallback"
    fontSize: 44px
    fontWeight: 700
    lineHeight: 52px
    letterSpacing: "-0.88px"
  subheading:
    fontFamily: Kanit, "Kanit Fallback"
    fontSize: 28px
    fontWeight: 600
    lineHeight: 33.6px
  button:
    fontFamily: Kanit, "Kanit Fallback"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 20px
    textTransform: uppercase
rounded:
  xs: 8px
  sm: 12px
  md: 70px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 12px
  s6: 14px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    height: 60px
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.display}"
    padding: 0px 14px
  footer:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.canvas}"
    padding: 8px
    borderColor: "{colors.border-footer}"
---

## Overview

This is the site of Tero Entertainment at https://teroasia.com/ (title "TeroAsia", a Thai-language page, 7,076px tall at 1280px). Tero Entertainment is a Thai live-entertainment and media group; the page presents it as a holding company with several business units. The top navigation lists LIVE NATION, THAITICKETMAJOR, TERO MUSIC, TERO DIGITAL, TERO HEALTH CLINIC, TERO INTERNATIONAL, CONTACT US and CAREER, alongside round social icons (Facebook, Instagram, X, YouTube) and a language selector widget.

The hero is a full-bleed dark concert video with the headline "INTERNATIONAL FESTIVALS" and a curved white swoosh that cuts into it. Beneath it four circular badge logos link to properties (3x3 basketball, ONE Lumpinee, a Miss World Thailand-style emblem, TERO INTERNATIONAL). A red gradient band introduces "TERO ENTERTAINMENT PUBLIC COMPANY LIMITED" with a Thai paragraph about creating top-tier entertainment experiences for more than three decades and moving toward digital technology. Then a "LIVE NATION TERO" logo, a red "LATEST SHOWS & EVENTS" bar and a vertical list of event cards, each with date, venue, title, a two-line blurb and a red "PURCHASE TICKET NOW" button. The capture shows events dated Oct 10 and Oct 11, 2026 (Young K Solo Tour at Samyan Mitrtown Hall, The Weeknd at Rajamangala National Stadium). Event images in the capture were broken-image placeholders; that is a rendering state, not a design choice.

## Colors

The page alternates between white `#ffffff` and a warm cream `#fbf9f4`, the largest measured background (3,237) ahead of white (1,949). `ink` is near-black `#1a1719`; secondary text is `#544e51` (1,015 characters) and `#212529`. White type (1,218 characters, plus `#ffffffe6`) sits on the dark hero, red band and footer. Brand red is `#ab0f15`, declared as `--ztc-bg-bg-3`, measured as a 277-weight background (the red band and the buttons), and it fills the "PURCHASE TICKET NOW" and "VIEW MORE" buttons with white text. `#e63946` is a brighter red used in 201 text characters; the footer and darker sections use `#1f2024`.

The theme CSS exposes a larger palette through `--ztc-bg-*` and `--ztc-text-*` variables, including `#FC226A`, `#FF2D55`, `#FF3639`, `#FF6700`, `#FD4E1A`, `#ff1e00`, `#4AF8BA`, `#C0F037`, `#2E4DFD`, `#002466`, `#032530` and `#0D0400`. Those are theme-template variables; the measured visible page uses only the red, cream, white and near-black set above. Nav links change on hover from `#ffffff` to `#ff1e00`. Bootstrap defaults in the root (`--bs-primary: #0d6efd`, `--bs-success`, `--bs-orange`) are not brand colors and are not used.

## Typography

Kanit (Thai and Latin, weights 400, 500, 600, 700) carries 4,307 of the measured text characters, with a "Kanit Fallback" in the stack. The CSS corpus also references Figtree, Sarabun, Inter, Arial and a `--grotesk` variable (906 references) from the theme; the measured page text is Kanit. Font Awesome 6 Pro and Brands supply icons.

Scale: nav 16px/24px weight 500; body 16px/24px weight 400 (20px, 18px and 14px also frequent); card dates and venues 12-14px; section headings 44px/52px weight 700 with -0.88px tracking (32px on mobile); sub-headings 28px/33.6px weight 600; the band title 32-48px; button labels 24px weight 700 uppercase with 20px line-height. Heading weights are bold and Latin headings are uppercase for section labels ("LATEST SHOWS & EVENTS").

## Layout

A 1280px-wide centered container with generous vertical rhythm. The nav is two rows over the hero. Events are full-width white cards on the cream background, each splitting into a left image area and a right text column. Measured paddings: 8px (37), 12px (34), 32px (30), 24px (16), 20px (15), plus 4px, 14px, 30px, 16px, 40px, 70px, 100px. The red band is a two-column layout: title left, Thai paragraph right. Four circular badges are evenly spaced in a row, each in a thin-bordered circle (`50%` radius).

## Elevation & Depth

Two soft shadows are measured: `rgba(0,0,0,0.1) 0px 2px 8px 0px` on 12 elements (event cards) and `rgba(0,0,0,0.09) 0px 4px 48px 0px` on 4 elements. Hairline borders `#1a17190d` (10 elements) and `#e0e0e0` outline some surfaces. Photography and a curved white wave shape cut into the hero add depth; the red band uses a darker-to-lighter red gradient.

## Shapes

Radii are 8px for buttons and event cards (100 elements), 12px (4), a 70px and 9999px pill (3) for badges and chips, and 50% (21) for the circular logo badges and social icons. Square corners are rare. The hero bottom edge is a curve rather than a straight line.

## Components

**Primary button.** Red `#ab0f15`, white Kanit 24px weight 700 uppercase text, 8px radius, 60px high (measured 321px wide for "VIEW MORE"; the event buttons read "PURCHASE TICKET NOW"). **Navigation.** White 16px weight 500 Kanit links with 14px side padding in a 725px-wide, 48px-high nav; hover turns text `#ff1e00`. **Event card.** White, 8px radius, soft shadow, date and venue line with clock and pin icons, bold title, gray two-line blurb, red button. **Section bar.** Full-width red bar with white uppercase label. **Social icons.** White circles with dark glyphs. **Footer.** `#1f2024` with white text and a `#6b7280` border. The language dropdown is a translation widget and is not brand UI.

## Content & Voice

The page speaks as a corporate promoter in two registers. Navigation and section labels are English and uppercase (LIVE NATION, THAITICKETMAJOR, TERO MUSIC, "LATEST SHOWS & EVENTS"), while the company statement is a long Thai paragraph on a red field. Event copy follows a fixed pattern: a date and venue line ("Oct 10, 2026 | Samyan Mitrtown Hall, Bangkok"), the tour title in bold, and the same two-sentence blurb, "Experience an unforgettable evening at ... Don't miss this spectacular live performance!", closing with an imperative button. The visual material is concert footage, partner logos in circles and ticketing cards, so the page reads as a catalogue of properties and shows rather than a single product story. Tero's own measured text color mix is dominated by white and near-black, with red reserved for actions and bars.

## Design System Architecture

No public design system or brand guideline was found; the pages opened expose none. The site is built on a Bootstrap 5 theme: the root variables include `--bs-*` values and a theme token set named `--ztc-bg-*`, `--ztc-text-*`, `--ztc-font-size-font-s24` through `-s64` and `--ztc-specing-height34/50/58`. Font Awesome 6 Pro supplies icons. The brand identity is carried by the red, by Kanit and by the logo images.

## Do's and Don'ts

Do use the single brand red `#ab0f15` for actions and section bars, with white labels. Do set Thai and Latin text in Kanit and keep headings bold. Do alternate white and cream `#fbf9f4` sections. Do use 8px radii and circular logo badges.

Don't use Bootstrap's `#0d6efd` or the theme's neon `#4AF8BA` and `#C0F037` as brand colors. Don't add heavy shadows beyond the two measured. Don't treat the translate-language widget as brand UI.

## Responsive Behavior

Measured on the 390px mobile pass: the h2 "Tero Digital Services" drops from 44px to 32px with 40px line-height (366px wide); body copy is 16px/24px weight 400 in a 306px-wide column; the call-to-action seen in the mobile pass is a "VIEW MORE" button in `#ab0f15` with white text, 24px weight 700. The mobile pass recorded no menu-toggle information. Other breakpoints are not measured.

## Iteration Guide

1. Alternate `#ffffff` and `#fbf9f4` sections, text `#1a1719`.
2. Use Kanit for everything: 44px/700 headings, 16px/400 body, 24px/700 uppercase buttons.
3. Build buttons at 60px high, `#ab0f15`, 8px radius, white label.
4. Event cards: 8px radius with `rgba(0,0,0,0.1) 0px 2px 8px` shadow.
5. Place circular logo badges in a row and a red gradient band for the company statement.
6. Verify any sub-site (Tero Music, Tero Digital) separately; only the home page was measured.
