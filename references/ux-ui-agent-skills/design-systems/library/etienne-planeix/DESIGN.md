---
version: alpha
name: Etienne Planeix
category: "Portfolio"
description: "Etienne Planeix designer portfolio: a Framer build in one family, Neue Haas Grotesk Display Pro 65 Medium at 12px (weights 400 and 600), black on white with 40% and 50% black greys, a 3D arc carousel of projects and no radii or shadows."
colors:
  header-wash: "#b0b0b033"
  accent-blue: "#0008ff"
  grey-mid: "#999999"
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  ink-secondary: "#00000066"
  ink-3: "#00000080"
typography:
  display:
    fontFamily: "\"Neue Haas Grotesk Display Pro 65 Medium\", \"Neue Haas Grotesk Display Pro 65 Medium Placeholder\", sans-serif"
    fontSize: 12px
    fontWeight: 600
    lineHeight: 14.4px
  body:
    fontFamily: "\"Neue Haas Grotesk Display Pro 65 Medium\", \"Neue Haas Grotesk Display Pro 65 Medium Placeholder\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 14.4px
rounded:
  none: 0px
spacing:
  s1: 8px
  s2: 10px
  s3: 16px
  s4: 60px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
---

# Etienne Planeix

## Overview
The measured site, https://www.etienne.studio/, is the portfolio of designer Etienne Planeix, titled "Etienne Planeix | Portfolio & Digital Design". It is a single viewport (800px at 1280px width) with no scrolling content. A translucent grey bar across the top carries the name "Etienne Planeix" at the left, three links (Work, Archive, Info) spaced across the centre and right, and a live clock ("11:37:58 AM") at the far right. The remainder is white, and in the middle floats a curved, 3D-perspective carousel of project panels, rotated like a shallow arc. At the bottom, the footer reads "© 2025 Etienne Planeix" at the left, a stacked list of social links (Instagram, Linkedin, Behance) in the middle and an email and phone number at the right.

In the capture one panel on the right shows a fashion photograph with the red wordmark "studio pamelo" and a left panel shows a gold-foil printed card; the centre panels are black tiles carrying a browser message, "We couldn't verify the security of your connection. Access to this content has been restricted. Contact your internet service provider for help." That text is the content of an embedded media tile loaded inside the carousel, not a page of the site itself, so the page is the real portfolio and is documented as such. The overall tone is quiet, Swiss and minimal.

## Colors
- **Canvas `#ffffff`** is the page background; the header bar is a translucent grey wash (`colors.header-wash`, #b0b0b033) over it.
- **Ink `#000000`** is black text for the name and footer, also the generated primary because there is no filled action on the page.
- **`colors.ink-secondary` `#00000066`** is 40% black, used for inactive nav links and secondary text (72 characters, the most common text colour); **`colors.ink-3` `#00000080`** is 50% black for supporting text. Hover turns a link from 40% black to full black.
- **`colors.accent-blue` `#0008ff`** and **`colors.grey-mid` `#999999`** are named design tokens in the Framer export (root variables), recorded but not visible as fills in the measured viewport.

The palette is monochrome by intent; all colour comes from the project imagery inside the carousel.

## Typography
A single family, **Neue Haas Grotesk Display Pro 65 Medium** (with its Framer "Placeholder" fallback and `sans-serif`), is used for every character. Faces declared in the corpus include 95 Black, 96 Black Italic and 66 Medium Italic, plus Inter. Both tokens are 12px with 14.4px line height: `typography.display` at weight 600 (the name and active labels) and `typography.body` at weight 400. The measured size distribution on desktop and on mobile is 12px only (116 characters on desktop, 109 on the 390px pass), so hierarchy is created by weight and by colour (full versus 40% black), not by size. The H1 detected is "Etienne" at 12px. Neue Haas Grotesk is licensed; Helvetica Neue or Inter is the nearest substitute.

## Layout
A full-viewport composition: fixed top bar, large empty white field, a horizontally centred 3D carousel, and a bottom footer in three groups (copyright left, socials centre, contact right). Gaps measured are 10px (8 uses) and 60px (6 uses); paddings are 16px and 8px. The top bar spreads four items across the width: name at the left edge, links aligned to separate columns, and the clock at the right edge. Negative space dominates the layout.

## Elevation & Depth
No box shadows or borders were measured. Depth is geometric: the carousel panels are rotated in 3D so that the centre panel faces forward while its neighbours skew away, with their perspective foreshortening standing in for any shadow. The translucent header sits above the stage as a flat wash.

## Shapes
No border radii were measured on the home page, so the rounded group is empty. The panels are quadrilaterals distorted by perspective and have square corners; there are no buttons, chips or pills. The corpus lists single radii of 8px and 15px, each used once, and they belong to embedded or library elements that were not promoted.

## Components
- **Header bar**: translucent grey wash, 12px labels; Work, Archive and Info in 40% black that turn black on hover; clock right-aligned.
- **3D project carousel**: a row of panels bent on an arc, each holding a project image or video; the centre one faces the viewer.
- **Footer**: three clusters of 12px text, with socials as a stacked list and the email and phone in 40% black below a black email address.
- **Link** (`components.link`): black 12px weight-600 text, with no underline recorded.
- **Buttons and inputs**: none were detected.

## Design System Architecture
No public design-system or brand-guideline documentation was located from the pages opened; the only page read was the home page, https://www.etienne.studio/, measured by the extractor. The site is a Framer build: root variables are Framer tokens (`--token-...` hash names holding #0008ff, #b0b0b0 and #999) and `--framer-will-change-override`, and text styles reference `--framer-font-family`. The measured values form a very small de-facto system of one font, one size, three blacks and a few spacing numbers.

## Do's and Don'ts
- Do use one typeface at 12px and let weight and opacity make the hierarchy.
- Do keep the ground white and treat colour as something the project imagery supplies.
- Do put the name left, links across, clock right, and footer in three groups.
- Do give inactive links 40% black and reveal black on hover.
- Don't introduce new sizes, rounded corners or shadows; none were measured.
- Don't fill the empty field around the carousel.
- Don't style external embed messages as site UI.
- Don't use the blue token `#0008ff` as a fill without measuring it in use.

## Responsive Behavior
The 390px mobile pass measured only 12px text (109 characters) and the same H1 role in the same family at 12px. Layout, navigation, carousel behaviour and breakpoints were not measured on mobile, so none are described.

## Iteration Guide
1. Start from white and black; derive every grey from black at 40% or 50%.
2. Use `typography.display` for the name and `typography.body` for everything else.
3. Add projects as panels to the carousel, never as cards in a grid.
4. Verify with `node web/scripts/verify-designs.mjs --slug=etienne-planeix`. The empty `rounded` group fails the required-group check because no radius was measured and none may be invented.
5. Measure the Work, Archive and Info pages with the extractor before adding tokens.
6. Write copy in the measured voice: bare nouns (Work, Archive, Info), a copyright line and plain contact details, with no marketing sentences.
7. When listing socials, use the same stack order as the footer: Instagram, Linkedin, Behance.
8. Imagery direction: fashion, print and brand identity work appears as full frames on light grey or white, never cropped into rounded masks.
9. The visible text inventory of the home page is short and can be reused as a checklist: the name "Etienne Planeix" in the header; the links Work, Archive and Info; a local clock with seconds; the footer line "© 2025 Etienne Planeix"; the social labels Instagram, Linkedin and Behance; an email address and a Dutch-format phone number. Any new element should justify itself against this restraint.
10. Hover is the only measured interaction state: link colour changes from 40% black to full black with no change of background, border or size. Keep any new interactive element to the same single-property change.
11. Because the page is one viewport tall, new content belongs in the Work, Archive and Info views rather than below the footer; those views were not measured here.
