---
version: alpha
name: "Major Development PCL."
category: "Thai Brands"
description: "Major Development PCL. Thai property developer site: white canvas, Tailwind gray ink #4a5565, slate #364153 buttons and status bars, single stidti family at 14px, three-up project cards with 12px radius and minimal 5% shadows."
colors:
  canvas: "#ffffff"
  ink: "#4a5565"
  primary: "#364153"
  on-primary: "#ffffff"
  surface-line: "#e5e7eb"
  surface-soft: "#f9fafb"
  surface-mist: "#f3f4f6"
  ink-muted: "#6a7282"
  ink-black: "#000000"
typography:
  display:
    fontFamily: stidti
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  display-mobile:
    fontFamily: stidti
    fontSize: 36px
    fontWeight: 500
    lineHeight: 40px
    letterSpacing: 0.9px
  subheading:
    fontFamily: stidti
    fontSize: 18px
    fontWeight: 600
    lineHeight: 28px
  body:
    fontFamily: stidti
    fontSize: 14px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: stidti
    fontSize: 14px
    fontWeight: 600
    lineHeight: 20px
  nav:
    fontFamily: stidti
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 6px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 24px
  none: 0px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 24px
  s8: 32px
  s9: 40px
  s10: 64px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 32px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-black}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink-black}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 6px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.sm}"
    borderColor: "{colors.surface-line}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    rounded: "{rounded.none}"
---

## Overview

Major Development PCL. (บมจ. เมเจอร์ดีเวลลอปเม้นท์; the measured site is www.mjd.co.th, the final URL of the queued majordevelopment.co.th) is a Thai property developer whose site, per the fetched page, covers single houses, townhomes and condominiums in Bangkok and Hua Hin, organised into four project brands: MUNIQ, MARU, MAYFIELD and MAVISTA. The measured home page is a clean, corporate-luxury catalogue: a white header with the stacked-columns MAJOR DEVELOPMENT logo, a centered uppercase menu (HOME, COMPANY, PROJECTS, INVESTORS RELATION, CONTACT), an "English" language switch, a green LINE button and a slate "1266" phone button; a large banner carousel slide for MUNIQ Sukhumvit 23 (a penthouse promotion in Thai); a slate-blue band with a faint skyline and the white headline "CRAFTTING LIVING EXPERIENCE" (spelled this way on the site); and a "PROJECTS" grid of three-up cards, each with a photograph, a slate status bar (NEW PROJECT or READY TO MOVE IN), a bold project name, an uppercase tagline and a "Start ... MB" price line. The page measures 4624px tall at 1280px. A cookie-consent banner and the contact buttons are utilities and are not documented as brand UI. The mood is quiet and architectural: white space, slate blue-grey and photographs of buildings at dusk.

## Colors

The palette is Tailwind's cool gray scale used with a restrained slate accent. `canvas` `#ffffff` covers most of the page (area 6960). `ink` `#4a5565` is the main text color (6036 characters), `primary` `#364153` is the slate used for headings, the "read more" buttons and status bars (719 characters, area 11), and `ink-muted` `#6a7282` carries navigation and secondary text (398). `ink-black` `#000000` is used for the header text (29). Surfaces step through `surface-line` `#e5e7eb` (area 1320), `surface-soft` `#f9fafb` (826) and `surface-mist` `#f3f4f6` (295). Translucent whites `#ffffff4c` and `#ffffff80` overlay imagery. The root variables include Tailwind's oklch greens (`--color-green-600`, `--color-green-50`) and `--color-gray-800`; the green belongs to the LINE contact button and is not a brand token.

## Typography

One family, `stidti`, loaded in weights 400 and 700 (the site's own web-font name), sets everything. Sizes by character count: 14px (6046, the body size), 18px (595), 16px (441), 20px (83), 36px (59) and 12px (32). Body is 14px/24px weight 400; sub-headings are 18px/28px weight 600; navigation is 16px/24px (weight 400, 500 on the active item); buttons are 14px/20px weight 600; the display line "CRAFTTING LIVING EXPERIENCE" is 36px on 40px with 0.9px letter-spacing and weight 500 in the 390px mobile measurement. Many labels, taglines and the PROJECTS heading are uppercase. The text is mostly small (14px) with a very quiet hierarchy.

## Layout

A three-column card grid with 32px gaps (12 uses) sits inside a centered container; the header is 88px tall with a centered menu. Paddings: 16px (32 uses), 32px (14), 12px (12), 24px, 6px, 10px, 64px and 128px; gaps: 32px, 16px, 24px, 4px, 6px and 40px. The hero is a banner image slide that does not fill the left column of the capture, leaving a white gutter to its left, followed by the slate band. Project cards stack image, status bar, name, tagline and price, all centered. The root variable `--spacing: 0.25rem` is the Tailwind 4px base unit; `--radius-3xl` is 1.5rem (24px).

## Elevation & Depth

Shadows are Tailwind-style and minimal: `rgba(0, 0, 0, 0.05) 0px 1px 2px 0px` on three elements and a 1px inset ring of `oklab(0.21 -0.00316127 -0.0338527 / 0.1)` on three more (a hairline), as measured. Cards use a 1px light border with a white fill rather than a lift; separation is by `#e5e7eb` and `#f9fafb` fills and by the slate status bar at the foot of each photograph.

## Shapes

Radii: 12px (12 elements, cards, `rounded.md`), 8px (10, `rounded.sm`), 16px (6, `rounded.lg`), a fully round value (4, the circular contact buttons), 6px (3, `rounded.xs`) and 24px (3, `rounded.xl`). The primary "read more" link measured 0px radius, while the "read more" button variant measured 6px, so buttons are square or slightly softened; cards are visibly rounded with 12px corners and a square-cut photograph top and status bar.

## Components

- **Read-more button (button-primary):** "read more", stidti 14px/20px weight 600, white on `#364153`, 32px tall, 114px wide in the measured sample, 0px radius for the link and 6px for the button element.
- **Project card:** white card, photograph on top, a full-width slate status bar with white uppercase label (NEW PROJECT, READY TO MOVE IN), then bold name, grey uppercase tagline and a bold "Start 6-12 MB" price line (MB abbreviates million baht).
- **Header:** white, 88px tall, black and grey menu text, a language switch, a LINE contact pill and a slate phone pill.
- **Section band:** slate-blue image band with a centered white 36px headline.
- **Filters:** project type, brand (MUNIQ, MARU, MAYFIELD, MAVISTA) and location filters appear in the fetched page text.
- **Footer:** site map, Agent Registration, Construction Partner, Promotion, Privacy Policy and social links, per the fetched page.

## Design System Architecture

No design system, brand guideline or style guide is published on the site (the fetched page lists only the logo, contact icons, a banner image and the four project-brand pages: /project-brand/MUNIQ, /MARU, /MAYFIELD, /MAVISTA); source: https://www.mjd.co.th/. The measured stylesheet is a Tailwind CSS 4 build (root variables `--tw-ring-shadow`, `--color-gray-800`, `--text-lg` 1.125rem, `--tracking-wider` 0.05em, `--default-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1)`, `--font-mono`) with the colors, spacing and radii taken from Tailwind's default scale and one custom font family.

## Do's and Don'ts

- Do keep the page white with Tailwind-gray text (`#4a5565`) and slate `#364153` for emphasis.
- Do use uppercase short taglines and a slate status bar on every project photograph.
- Do round cards at 12px and keep primary buttons square or 6px.
- Do show prices as "Start X-Y MB" in bold.
- Don't use the LINE green or other utility colors for brand surfaces.
- Don't add heavy shadows; only a 1px, 5% black shadow is measured.
- Don't document the cookie banner as brand UI.

## Responsive Behavior

The 390px mobile pass measured the section headline at 36px on a 40px line height with 0.9px tracking (the desktop pass measured 36px on 59 characters), and the size list was 14px, 18px, 16px, 20px, 36px, 12px and 30px, with 16px used on 411 characters (441 on desktop) and 36px on 47 (59 on desktop). Layout, column counts, navigation form and breakpoints on mobile are not measured.

## Iteration Guide

1. Build on white, `ink` `#4a5565` and slate `#364153`.
2. Use one family at 14px/24px for body and 18px/28px 600 for names.
3. Compose three-up project cards with a slate status bar and a "Start" price line.
4. Use `rounded.md` (12px) for cards and 0px or 6px for buttons.
5. Run `node web/scripts/verify-designs.mjs --slug=major-development` after changes.

## Voice

The fetched copy is aspirational and exclusive, with short uppercase taglines: "CRAFTTING LIVING EXPERIENCE", "LIVE MORE LIVE MURU", "A RETREAT FOR THE SOUL", "HOME IS WHERE YOUR HEART IS", "ALL ROAD LEAD BACK HOME", "THERE'S NOTHING QUITE LIKE YOU", "CLASS IS PERMANENT", "LUXURY CONDOMINIUM IN THE HEART OF ASOKE", "LIVE NEXT LEVEL OF HUA HIN LIVING" and "CLASS IS INHERITANCE". News copy stresses privacy, scarcity, space and long-term value, for example "buying the future at today's price".
