---
version: alpha
name: MyGovernment
category: "Design Systems"
description: "MyGovernment (malaysia.gov.my), Malaysia's official government portal, is set in Poppins with a #1b76de blue pill search button, 72px bold hero headlines over a warm photograph, slate #64748b body copy, #f1f5f9 service panels, 80px-radius cards and persona illustrations."

colors:
  canvas: "#ffffff"
  ink: "#64748b"
  primary: "#1b76de"
  on-primary: "#f8fafc"
  surface-panel: "#f1f5f9"
  ink-strong: "#000000"
  ink-navy: "#020817"
  ink-slate-dark: "#101828"
  hairline: "#e2e8f0"
  card-bg: "#ffffff1a"
typography:
  display:
    fontFamily: Poppins, "Poppins Fallback"
    fontSize: 72px
    fontWeight: 700
    lineHeight: 72px
  display-mobile:
    fontFamily: Poppins, "Poppins Fallback"
    fontSize: 48px
    fontWeight: 700
    lineHeight: 48px
  heading:
    fontFamily: Poppins, "Poppins Fallback"
    fontSize: 30px
    fontWeight: 700
    lineHeight: 36px
    letterSpacing: "-0.75px"
  subheading:
    fontFamily: Poppins, "Poppins Fallback"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  body:
    fontFamily: Poppins, "Poppins Fallback"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  nav:
    fontFamily: Poppins, "Poppins Fallback"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  link:
    fontFamily: Poppins, "Poppins Fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 6px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 24px
  2xl: 32px
  3xl: 80px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5.25px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 14px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.pill}"
    padding: 0px 40px
    height: 48px
  link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink-navy}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink-navy}"
    typography: "{typography.link}"
    padding: 0px 16px 0px 24px
    height: 48px
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink-navy}"
    rounded: "{rounded.3xl}"
  footer:
    textColor: "{colors.canvas}"
---

# MyGovernment

## Overview

The page measured is the Malay-language homepage of the official Malaysian government portal, titled "MyGovernment - Portal Rasmi Kerajaan Malaysia" (final URL www.malaysia.gov.my/my). It is a service-finding portal for citizens. The capture opens on a large hero: a soft pink-to-white gradient with a photograph of two young people sharing a tablet on the right, a headline reading "Carian Mudah Perkhidmatan Digital Kerajaan" (the first line light, the rest bold), a one-sentence description, and a pill-shaped search field with a blue "Carian" button.

Below the hero come a row of outlined "Topik Popular" chips, a "Siapa Anda?" (Who are you?) carousel of flat illustrated personas (students, senior citizens, young workers) each with a circular arrow, a "Lihat semua persona" pill, and a "Perkhidmatan Digital" section of rounded service panels with line icons, agency names in small grey type and diagonal corner ribbons labelled "SOROTAN" and "POPULAR". The header, with its dark utility strip (Go to Non-Citizen, BM, accessibility icons) and white navigation (Laman Utama, Topik, Perkhidmatan Digital, MyInisiatif, E-Penyertaan, Log Masuk), appears partway down the capture rather than at the top.

The voice is helpful and task-oriented: short imperative labels ("Semak", "Permohonan"), question headings, and a friendly illustrated style rather than formal state imagery.

## Colors

The canvas is #ffffff, white. Running text is #64748b (a cool slate) and covers most of the page's measured characters; the largest headings and links are #000000 black, with #020817 and #101828 used for navigation and some card text. Panels behind service lists measure #f1f5f9, a very pale blue-grey, and hairlines and input borders measure #e2e8f0.

The action color is #1b76de, a clear blue, used for the filled "Carian" search button (with #f8fafc text), for blue link text on service titles, and for the active-navigation underline. A translucent white, #ffffff1a, is the measured card fill used over the hero gradient. The rest of the measured palette includes green and yellow backgrounds in small areas (the "Sorotan" ribbon in the capture is green); they are supporting colors and were not promoted to tokens.

Dark body text is not pure black: the dominant tone is the slate #64748b, which gives pages a soft, low-contrast reading texture, and black is saved for headings and link emphasis.

## Typography

The family is Poppins, loaded in weights 300 through 800 (the extractor lists 300, 400, 500, 600, 700 and 800). The hero headline mixes a light first line ("Carian Mudah") with bold lines beneath it, a deliberate weight contrast in a single heading.

Measured steps: `display` is 72px bold on a 72px line (tight, line height equal to size); on a 390px viewport it becomes `display-mobile` at 48px bold. `heading` is 30px bold on a 36px line with -0.75px tracking, for section titles such as "Siapa Anda?" and "Perkhidmatan Digital". `subheading` is 16px at weight 600 on a 24px line. `body` is 14px regular on a 20px line, which also styles the button label; `nav` is 14px at weight 500, and `link` is 16px regular on a 24px line.

Body copy is relatively small at 14px, with the larger sizes reserved for headings. Agency names under service titles are smaller still.

## Layout

The layout is a centred column with generous side margins. The hero is full-bleed with text on the left and the photograph bleeding right; subsequent sections sit inside a narrower container. The persona carousel shows three illustrated cards at a time, each a pale blue rounded shape with figures standing out of it; the service section stacks wide rounded panels, each containing a row of four service items with an icon, a blue title and a small agency name.

Spacing tokens run from 2px to 20px in small increments: the primary button has 0px 40px padding, the text input 0px 16px 0px 24px, and both are 48px tall. Large radii and soft panels create generous visual padding between groups rather than hard dividers.

## Elevation & Depth

Depth is gentle. Most measured shadows are very light: the bordered "Log Masuk" button uses a 1px-offset shadow at 5% black, and panels are separated by tints and rounded edges. Cards over the hero use translucent white fills (#ffffff1a) that give a frosted effect on the gradient rather than a drop shadow.

The sticky header is a white bar with a rounded outline and a dark utility strip above it. A floating "Tinjauan Pantas" (quick survey) badge and scroll arrows at the right are overlaid widgets and are not described as brand components.

## Shapes

Rounded forms define the system. The primary button and the hero search field are 9999px. Service panels and persona cards use large radii; the generated set provides 6px (6px), 8px (8px), 12px (12px), 16px (16px), 24px (24px), 32px (32px) and 80px (80px), the last of which is the radius of the translucent card token. The measured "Log Masuk" button uses the 6px radius.

The persona illustrations are flat vector figures standing on pale blue blobs, and service icons are heavy black or dark-grey line pictograms. Ribbons on panel corners are diagonal strips.

## Components

**Primary button ("Carian").** #1b76de fill, #f8fafc text, 14px type, fully rounded, 48px high, padding 0px 40px. On hover it shifts to a slightly translucent variant of the same blue (the measurement is given in a different colour space, so no hex is stated).

**Search field.** White, rounded pill, 48px high, 16px text, padding 0px 16px 0px 24px, placeholder in a pale blue-grey ("Pinjaman pendidikan").

**Topic chips.** Outlined pills with blue text and a thin blue border ("Portal MyTax", "Skim Perubatan MADANI").

**Navigation.** White floating header with 14px medium links, chevrons for dropdowns and an underline on the active item; a bordered "Log Masuk" button (36px high, 6px radius) and a search icon.

**Persona card.** Pale blue rounded shape with an illustration and a circular outlined arrow icon.

**Service panel.** A rounded panel on #f1f5f9 or a pale green tint with a corner ribbon; items are centred with a blue title and small grey agency name.

**Footer.** The generated footer token sets white text; the footer itself is below the captured area and was not inspected.

## Design System Architecture

Malaysia has a government design system, MYDS, at https://design.digital.gov.my, which I opened: it describes itself as the design system for building official Malaysian government websites, maintained by the Ministry of Digital, offering components, visual elements, design tokens and a Figma file. The page I read does not state a typeface or primary colour, and I opened no other MYDS page.

I could not confirm that this site uses MYDS. The extracted CSS contains no reference to it by name. What the page does expose is a Tailwind CSS v4 variable layer (`--color-*`, `--tw-*`, `--text-*`, `--radius-*`, `--spacing`), the shadcn/ui-style semantic variables (`--background`, `--foreground`, `--primary`, `--card`, `--muted`, `--sidebar-*`, `--chart-1` to `--chart-5`, `--radius`), Font Awesome 7 icon fonts and a Swiper carousel variable. Notably the semantic `--primary` variable on the page holds a neutral near-black and not the blue actually used for the search button, so the semantic layer does not describe the visible brand colour; the frontmatter therefore uses only measured, rendered values and takes nothing from the MYDS site.

## Do's and Don'ts

Do use #1b76de for the main call to action, with light text, in a fully rounded shape. Do set everything in Poppins and let weight contrast (light vs bold) carry the hero heading. Do use friendly flat illustration and photography of everyday Malaysians. Do keep service titles blue and agency names small and grey. Do group items in large rounded panels.

Don't set long text in black; use the slate body tone. Don't use sharp corners on buttons or fields. Don't rely on the semantic `--primary` variable of the page for brand colour. Don't copy the floating survey badge, scroll arrows or utility-strip icons as brand components. Don't claim MYDS compliance from this file.

## Responsive Behavior

The extraction recorded desktop (1280px) and mobile (390px) widths. The only mobile step captured in the tokens is the hero headline stepping from 72px to 48px. No breakpoint values were measured, so none are stated. The carousel and service rows are horizontally paged components in the capture, which suggests they reduce the number of visible items on small screens, but that behaviour was not measured.

Keep tap targets at the measured control heights of 48px for the primary button and field, and 36px for the secondary navigation button, when adapting layouts.

## Iteration Guide

Begin with a white canvas, Poppins, a 72px bold display heading and slate body text. Use one #1b76de pill button per view, 48px tall, next to or inside a pill search field. Add sections as rounded panels on #f1f5f9 with #e2e8f0 borders, and use large radii (24px or 32px) for panel corners. Use blue for links and service titles, and black only for headings.

Before shipping check: Poppins everywhere, a light-weight first line paired with bold lines in hero text, fully rounded controls, no heavy shadows, and illustrations rather than stock imagery for audience selection. If MYDS compliance matters, consult the official documentation directly and re-measure the live site.
