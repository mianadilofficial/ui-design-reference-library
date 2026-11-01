---
version: alpha
name: Penpot
category: "Design & Creative Tools"
description: "Penpot's penpot.app marketing site: pale #f5f8fb canvas, dark blue #151035 text and footer, Work Sans throughout (72px regular hero with a 600-weight 'Together.'), turquoise #14ceca 8px-radius buttons with dark blue labels, outlined 1px #151035 secondary buttons, and a brand palette of magenta #f23ae5, violet #6911d4 and indigo #2f226c from the official brandbook."
colors:
  canvas: "#f5f8fb"
  surface: "#fafafa"
  ink: "#151035"
  primary: "#14ceca"
  on-primary: "#151035"
  on-primary-hover: "#cfd2d5"
  ink-muted: "#6b7280"
  ink-inverse: "#ffffff"
  ink-black: "#000000"
  footer-bg: "#151035"
  hairline: "#d1d5db"
  hairline-soft: "#e5e7eb"
  focus-ring: "#96c7f2"
  brand-indigo: "#2f226c"
  brand-magenta: "#f23ae5"
  brand-violet: "#6911d4"
  secondary-pink: "#ff1ebd"
  secondary-rose: "#ff9ae8"
  secondary-lilac: "#a378f3"
  secondary-teal: "#17b1af"
  secondary-sky: "#5ac8f3"
  secondary-lavender: "#c8a2ff"
  secondary-mint: "#31efb8"
typography:
  display:
    fontFamily: "\"Work Sans\""
    fontSize: 72px
    fontWeight: 400
    lineHeight: 86.4px
  display-mobile:
    fontFamily: "\"Work Sans\""
    fontSize: 48px
    fontWeight: 400
    lineHeight: 57.6px
  heading:
    fontFamily: "\"Work Sans\""
    fontSize: 65px
    fontWeight: 400
    lineHeight: 78px
  heading-section:
    fontFamily: "\"Work Sans\""
    fontSize: 48px
    fontWeight: 400
    lineHeight: 57.6px
  body:
    fontFamily: "\"Work Sans\""
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  button:
    fontFamily: "\"Work Sans\""
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  nav:
    fontFamily: "\"Work Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
rounded:
  xs: 8px
  sm: 10px
  md: 50px
  lg: 100px
spacing:
  s1: 4px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 32px
  s9: 48px
  s10: 64px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 20px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary-hover}"
  button-outlined:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 20px
    height: 50px
    border: "1px solid #151035"
  button-outlined-hover:
    textColor: "{colors.primary}"
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    height: 80px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.ink-inverse}"
    padding: 130px 0px 0px
---

# Penpot — penpot.app

## Overview

Penpot presents itself on https://penpot.app as "The open-source design platform for teams". The home page is light, airy and centred. A small pill above the headline announces "Any agent can design in Penpot. Try our open MCP Server." The headline "Think and build digital products. **Together.**" is set in Work Sans at 72px, regular weight, with the final word measured at weight 600. A short subline ("Penpot is the **open-source** design platform for teams that need scalable collaboration.") sits above two buttons: a turquoise **Sign up, it's free** and an outlined **Self-host install**.

Under the hero, a large dark product screenshot of the Penpot editor (layers panel, a music-app design with a yellow card, an AI prompt panel, and the design/prototype/inspect inspector) floats on a soft turquoise glow. Then come a widely tracked outlined eyebrow ("BUILT FOR DESIGNERS, DEVELOPERS AND AI AGENTS"), the statement "Full-stack design for every future." drawn inside a selection box with turquoise handles — a direct quote of the editor's UI — and a sequence of feature sections (UI Design, AI Workflows, Design Systems, Code), each a centred 48px title, a short paragraph, an outlined "Explore…" button and a screenshot. A logo strip ("POWERING DESIGN AT") and a dense dark blue `#151035` footer with four link columns close the page.

The tone is friendly-technical and community-minded: "Made with LOVE and Open Source", a GitHub star count in the footer, and a "Hiring!" magenta tag next to Careers.

## Colors

Measured values come from `web/data/extracted/penpot.json`; the brand palette is from Penpot's official Brandbook PDF (linked from https://penpot.app/media-kit).

- **Canvas `#f5f8fb`** — the body background and the dominant on-screen color; **surface `#fafafa`** — the header and the main content band.
- **Ink `#151035`** — Penpot's "dark blue", the most-read text color, the outline of secondary buttons and the footer fill (`footer-bg`). The brandbook says the logo may only be white, black "or our dark blue #151035".
- **Primary `#14ceca`** — turquoise, listed by the brandbook among the primary colors; fills Sign up and Contact Sales with `#151035` labels. On hover the primary button flips to a `#151035` fill with `#cfd2d5` text, and outlined buttons turn their text and border turquoise.
- **Ink muted `#6b7280`** — secondary text; **hairline `#d1d5db`** and **hairline soft `#e5e7eb`** — light borders; **ink inverse `#ffffff`** — footer text.
- **Focus ring `#96c7f2`** — a 3px box-shadow ring measured on focused buttons.
- **Brand indigo `#2f226c`** (main text and backgrounds), **brand magenta `#f23ae5`** (primary; the "Hiring!" tag) and **brand violet `#6911d4`** (primary) round out the brandbook's main set.
- **Secondary palette** (brandbook, for graphic elements and box backgrounds): `#ff1ebd`, `#ff9ae8`, `#a378f3`, `#17b1af`, `#5ac8f3`, `#c8a2ff`, `#31efb8`.

## Typography

Penpot's brandbook names **Work Sans** as the main font "for all the main and also secondary texts in communication", in Regular, 500 and 700. The site self-hosts Work Sans (`/fonts/WorkSans-Regular.ttf`, `-Medium`, `-SemiBold` and others) and loads weights 400, 500, 600 and 700. It is the only family measured on the page.

- **Display** — 72px / 86.4px, weight 400 (accent words at 600).
- **Heading** — 65px / 78px, weight 400 ("Full-stack design for every future.", with "Full-stack design" at 500).
- **Section heading** — 48px / 57.6px, weight 400 ("UI Design", "Design Systems", "Code").
- **Body / button / nav** — 16px / 24px, weight 500 (the body element's computed style).
- Eyebrows are uppercase with 6px letter-spacing at 18px and 20px, set inside a thin outlined box.

Measured sizes by character count: 16px, 18px, 20px, 12px, 72px, 48px, 19.2px, 65px, 14px. The brandbook also names **Spline Sans Mono** as a secondary font for campaign visuals and punch lines; it was not measured on the home page, which references Inconsolata and Azeret Mono in its CSS for code samples.

Work Sans is an open-source Google Font, so no substitute is needed.

## Layout

At 1280px the page is one long `#fafafa` band (5,832px) above a 988px footer. Content spans x = 140 to x = 1261 with headings centred; feature screenshots sit in a wide centred frame. Sections are separated by thin horizontal rules. Measured gaps: 8px, 10px, 16px, 24px, 12px and 20px; paddings cluster at 8px, 12px, 20px and 48px. The footer starts with 130px of top padding and holds a logo column plus four link columns (Product, Resources, Use Cases, Key Features/Legal, Company, For Businesses).

## Elevation & Depth

No box-shadows were measured on the page. Depth comes from a soft turquoise/lavender radial glow behind the hero screenshot and the logo strip, from the dark product screenshots set against the pale canvas, and from the contrast of the dark blue footer. Focus is shown with a `#96c7f2` 3px ring.

## Shapes

**8px** (`rounded.xs`) is the button radius — primary, outlined and nav CTAs all measure it. **10px** (`rounded.sm`) appears on a few panels; **50px** and **100px** (`rounded.md`, `rounded.lg`) on pill elements such as the MCP announcement chip. The eyebrow labels are outlined rectangles with small corners, and the "Full-stack design" headline is framed in a 1px turquoise selection box with square handles at the corners.

## Components

- **Primary button** — `#14ceca`, `#151035` Work Sans 16px weight 500, 8px radius, padding 12px 20px, 48px tall. Hover: `#151035` fill, `#cfd2d5` text.
- **Outlined button** — transparent with a 1px `#151035` border, dark blue text, 8px radius, padding 12px 20px, 50px tall ("Self-host install", "Explore UI Design", "Sign up for free"). Hover: text and border `#14ceca`.
- **Header** — 80px tall, `#fafafa`, logo left, Product/Community/Resources dropdowns and Pricing, then Log In, an outlined "Sign up for free" and a turquoise "Contact Sales".
- **Announcement chip** — pill with a thin border, small text and an underlined link.
- **Eyebrow** — uppercase, 6px tracking, in an outlined box.
- **Footer** — `#151035`, white 16px links in columns, a magenta "Hiring!" tag, social icons and a GitHub star counter.

## Design System Architecture

Penpot publishes a **Brandbook** (PDF, https://nextcloud.kaleidos.net/index.php/s/zSWTXJJnGaCrPmC, linked from https://penpot.app/media-kit) covering logo, spacing, typography (Work Sans; Spline Sans Mono), main, primary and secondary colors with RGB and CMYK values, contrast boards for dark and light mode, gradients, graphic elements ("the hand", "the cursor", sparks, boxes) and the "Penpets" characters. On GitHub (https://github.com/penpot) the org publishes design-token tooling — `penpot-export` ("Devtool to export the design tokens of a Penpot file to CSS, SCSS or JSON files") and `tokenscript-interpreter` — and `penpot-files` with public assets. The marketing site itself exposes generated `--token-…` custom properties and a full set of `--antd-*` Ant Design variables in its root styles; the visible brand values (`#14ceca`, `#151035`, `#f5f8fb`) are not among the antd defaults.

## Do's and Don'ts

**Do**
- Set everything in Work Sans; use weight 400 for big headlines and 500–600 for emphasis.
- Use turquoise `#14ceca` with `#151035` text for the primary action and an outlined `#151035` button beside it.
- Keep text dark blue `#151035` on the pale `#f5f8fb` canvas.
- Use the secondary palette for illustration, shapes and boxes.
- Quote the editor UI (selection boxes, handles, dark panels) as graphic language.

**Don't**
- Don't color the logo outside white, black or `#151035` (brandbook rule).
- Don't tilt, stretch or squeeze the logo, change its spacing, or set it below 24px (brandbook).
- Don't round buttons into pills; buttons are 8px.
- Don't add heavy shadows; none were measured.

## Responsive Behavior

The 390px mobile pass recorded the hero headline at 48px / 57.6px and the section headline at 32px / 38.4px, both still centred; the primary button unchanged (16px, 8px radius, padding 12px 20px, 48px tall); one visible header link with no menu toggle detected; and a maximum of 2 card columns. Mobile content runs from x = 16 to x = 374. The stylesheet declares max-width breakpoints at 500px, 768px, 1024px and 1920px. Other reflow behavior was not measured.

## Iteration Guide

1. Start from `#f5f8fb` with `#151035` Work Sans text.
2. Centre a 72px regular headline with one 600-weight word, a 16px subline and a turquoise + outlined button pair (8px radius, 12px 20px padding).
3. Show the product in large dark screenshots on a soft glow.
4. Introduce each feature with a 48px centred title, one paragraph and an outlined "Explore…" button.
5. Close with a `#151035` footer with white links.
6. Pull accent colors only from the brandbook palette; measure anything else first.
