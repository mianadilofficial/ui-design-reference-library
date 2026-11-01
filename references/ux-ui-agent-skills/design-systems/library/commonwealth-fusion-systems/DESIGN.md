---
version: alpha
name: Commonwealth Fusion Systems
category: "Energy & Climate"
description: "Commonwealth Fusion Systems (cfs.energy), a commercial fusion energy company. Warm tan #ccc8c3 canvas with graphite #333333 type, deep navy #152536 footer, terracotta #cf6d46 circle-arrow accents, nbInternational Light 300 at 58.526px for headlines and a mono face for navigation and links."
colors:
  canvas: "#ccc8c3"
  ink: "#333333"
  primary: "#cf6d46"
  navy: "#152536"
  white: "#ffffff"
typography:
  display:
    fontFamily: nbInternational, "nbInternational Fallback", sans-serif
    fontSize: 58.526px
    fontWeight: 300
    lineHeight: 70.2312px
  display-mobile:
    fontFamily: nbInternational, "nbInternational Fallback", sans-serif
    fontSize: 34px
    fontWeight: 300
    lineHeight: 40.8px
  subheading:
    fontFamily: nbInternational, "nbInternational Fallback", sans-serif
    fontSize: 29.4502px
    fontWeight: 300
    lineHeight: 44.1752px
  footer-display:
    fontFamily: nbInternational, "nbInternational Fallback", sans-serif
    fontSize: 43.6256px
    fontWeight: 300
    lineHeight: 52.3507px
  body:
    fontFamily: nbInternational, "nbInternational Fallback", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: nbInternationalMono, "nbInternationalMono Fallback", monospace
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
rounded:
  pill: 9999px
spacing:
  s1: 10px
  s2: 20px
  s3: 22.4px
  s4: 32.4px
  s5: 40px
  s6: 44.8px
  s7: 60px
  s8: 80px
  s9: 100px
  s10: 120px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 0px 70px 0px 0px
    height: 70px
  button-circle:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.white}"
    typography: "{typography.nav}"
    rounded: "{rounded.pill}"
    width: 120px
    height: 120px
  nav:
    textColor: "{colors.white}"
    padding: 32.4px 32.4px 0px
  nav-link:
    textColor: "{colors.white}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.navy}"
    textColor: "{colors.white}"
---

## Overview

Commonwealth Fusion Systems (CFS) presents itself as "the world's largest and leading commercial fusion energy company", which is both the h1 and the meta description of its home page (title "Home | Commonwealth Fusion Systems"). The body copy explains that CFS is using high-temperature superconducting magnets developed with MIT to build smaller, lower-cost tokamak fusion systems, is manufacturing the magnets for its first net-energy machine SPARC, and is preparing a first fusion power plant called ARC. The footer carries an address in Devens, Massachusetts and the trademark line for SPARC®, ARC™ and Fall Line™ Fusion Power Station.

The look is that of a research institute with a hardware catalogue's confidence. The page opens on a full-bleed macro photograph of machined metal plates with copper tones, covered by a white headline in a light-weight grotesque, three short value statements ("Move fast", "Move smart", "Move together", each with a small orange circle bullet and two lines of copy) and, over the top, a thin white-outlined navigation frame divided into cells (the logo and company name, Technology, Company, News & Media, Locations, Careers). The page then drops to a warm tan background (`#ccc8c3`) for "A breakthrough for commercial fusion energy", with three numbered images (01, 02, 03: a technician beside a magnet assembly, a close view of the machine core, and an outline drawing of machine hardware), two columns of body text and a "Learn more" link ending in an orange circled arrow. Below are the company values (Execution, Self-critique, Integrity, Impact), a testimonial from Brandon Sorbom, Chief Science Officer, and a navy footer ("Join the power movement", "Follow Us", "Apply Now").

The tone is direct and ambitious: short imperative phrases, no jargon in the headings, engineering detail in the body. The measured page is 1280px wide and 4463px tall.

## Colors

- **Canvas — `#ccc8c3`.** A warm tan, the page background of the content sections and the largest background area by weight (3664).
- **Ink — `#333333`.** Headings and body text on the tan sections (1235 weighted characters); also a measured background area (weight 1024).
- **Navy — `#152536`** (area weight 1437). The footer fill, and the text color measured in the navigation hover state when a cell turns white.
- **White — `#ffffff`.** The hero headline, navigation text and footer text (1091 weighted characters).
- **Primary — `#cf6d46`.** A terracotta orange used as an accent, never as a large fill on the home page. It colors the circled arrow of the "Learn more" link, the small round bullets beside "Move fast / Move smart / Move together", and the thin rule under the numbered photographs. The stylesheet declares it as a hard-coded hex (66 occurrences in the stylesheet corpus) and it is measured as a text color on 106 characters, the same count as the Arial-set 13.3333px run. The extractor found no filled call-to-action button, so primary is an accent.

Contrast: white on photograph for the hero, graphite on tan for content, white on navy for the footer. The stylesheet corpus also contains `#101c29`, `#1a3149`, `#555555`, `#dfdbd6` and a few translucent variants; none is measured in a role on the home page.

## Typography

Three families are served through the framework's local font loader. **nbInternational** is the text family, declared in weights 300 (Light), 400 (Regular) and 600 (Bold) with matching italics; the file names in the stylesheet read `nb_international_pro_light_webfont`, `…_regular_webfont` and `…_bold_webfont`. **nbInternationalMono** (weight 400, file `nb_international_pro_mono_webfont`) sets navigation, labels and links. **madSans** (weight 600, file `mad_sans_bold`) is declared as `--font-mad-sans` and used in 2 CSS declarations; no characters were measured in it on the home page. Each family has a generated fallback that maps to local Arial with size-adjust and metric overrides (for example `nbInternationalMono Fallback` with `size-adjust: 148.37%`), so Arial is the documented substitute. Measured text is 1727 weighted characters in nbInternational, 599 in nbInternationalMono and 106 in Arial (the arrow glyph).

Measured roles:

- **Display** — nbInternational 58.526px / 300, line-height 70.2312px: the hero h1 (white) and the "A breakthrough…" h2 (graphite). On a 390px viewport the h1 is 34px / 300 with line-height 40.8px.
- **Subheading** — 29.4502px / 300, line-height 44.1752px, used in the testimonial.
- **Footer display** — 43.6256px / 300, line-height 52.3507px ("Join the power movement" and the footer links).
- **Body** — 16px / 400, line-height 24px, graphite, in two columns.
- **Mono** — nbInternationalMono 14px / 400, line-height 21px for navigation, "Learn more", the 01/02/03 image labels and the small "Move fast" headers.

Weights measured: 400 (2077 weighted characters) and 300 (355). The most-used sizes are 16px (1085), 14px (886), 29.4502px (173), 58.526px (159), 13.3333px (106) and 43.6256px (23).

## Layout

The page is a set of wide bands. A 107px-tall navigation frame (padding 32.4px 32.4px 0) floats over the hero; its cells are outlined by 1px white borders. The hero is a full-width image with the headline anchored at the lower left and three value columns beneath it. Content sections use a left-aligned headline of up to about 823px width, a small orange tick mark in the left margin before each headline in the capture, and an asymmetric image grid: one large landscape image at the left with a numbered label ("01"), a smaller image at the upper right ("02") and an outline drawing below it ("03"). Body text runs in two narrow columns (the measured paragraph block is 803px wide). The footer is a navy block 800px tall.

Spacing values measured are 10px (27 occurrences), 22.4px (11), 20px (5), 32.4px, 44.8px, 80px, 120px, 40px and 100px, with one large 251.2px padding. The generated spacing scale keeps these exact values. Density is low: large type, wide margins and few elements per screen.

## Elevation & Depth

The page is flat. The extractor recorded no box-shadow on a rendered element. The stylesheet declares three shadows: `0 0 10px #0000004d` (a glow on the active value-bullet), `0 18px 42px #0006` and `0 -60px #fff`. Depth in the capture comes from photography, the translucent outlined navigation frame over the hero image, and the contrast between the tan canvas and the navy footer.

## Shapes

Almost everything is a right angle: the navigation cells, images and columns have no radius. The only measured radius is 50% (1 occurrence), the circle of the arrow link; in the stylesheet the circular button variants use `border-radius: 50%`, and the round value-bullets are 12px circles with a 1px `#cf6d46` border that fill with orange when active. A single 2px radius is declared in the corpus. The generated tokens keep `pill` 9999px for the circle.

## Components

- **Arrow link (`link`).** "Learn more": nbInternationalMono 14px / 400 in graphite, 70px tall, with 70px of right padding that holds a 70px by 70px circled arrow in `#cf6d46`. Per the stylesheet, hover moves the arrow 2px to the right and changes the circle color to the text color over .15s.
- **Circle button (`button-circle`).** A 120px by 120px round button with a 1px border: the "full" variant is white text on `#cf6d46` and turns its text `#152536` on hover; the "tan" variant is `#333` text on `#ccc8c3` with a `#cf6d46` border and fills with orange on hover. These variants are declared in the stylesheet; the home page capture shows the arrow link, not a circle button.
- **Navigation frame (`nav`).** White 14px mono text in cells separated by 1px white borders, over the hero image. Measured hover on "Technology" turns the cell fill `#ffffff` and the text `#152536`; hover on the company-name cell changes its text to `#152536`.
- **Value headers.** A 12px round outlined bullet in orange before "Move fast / Move smart / Move together"; the active item's bullet is filled orange with a soft shadow.
- **Image labels.** Mono "01", "02" and "03" labels above the images, with a thin orange rule under the photographs in the capture.
- **Footer (`footer`).** Navy, white 43.6256px light-weight headline "Join the power movement", links (Follow Us, Apply Now), a contact block (Media & Press, General Inquiries, Investors) and a mailing-list link.

## Design System Architecture

No public design-system documentation or brand-guideline page is linked from the home page, so no official design system is documented. The site is a Next.js application with component-scoped SCSS modules; class names read `Button-module-scss-module__…__button` and `Topper-module-scss-module__…__benefitHeader`. The only root custom properties are the three font variables (`--font-nb-international`, `--font-nb-international-mono`, `--font-mad-sans`); colors, sizes and easings are hard-coded inside the modules (for example `.15s cubic-bezier(.455,.03,.515,.955)` for color and transform transitions). The pages and stylesheets read were https://www.cfs.energy/ and its four `/_next/static/chunks/*.css` files (about 97 KB in total). The press contact is press@cfs.energy and the "News & Media" page is at /news-and-media/; no brand kit is linked from the home page.

## Do's and Don'ts

Do:
- Use warm tan `#ccc8c3` with graphite `#333333`, and navy `#152536` for the footer.
- Set headlines in the Light weight (300) at large sizes and body copy in Regular (400); set navigation and links in the mono face.
- Reserve terracotta `#cf6d46` for small accents: circle-arrows, round bullets, thin rules.
- Lay out images asymmetrically with mono numbers above them.
- Use 1px white outlines for the hero navigation frame.

Don't:
- Don't fill large areas with the orange; no filled CTA button is measured on the home page.
- Don't add radii or drop shadows to cards and images.
- Don't use bold for headings: the measured display weight is 300.
- Don't treat the translucent navigation over the hero image as a solid bar.
- Don't use the madSans face for text; no characters were measured in it.

## Responsive Behavior

Measured at 390px wide: the h1 is 34px / 300 (line-height 40.8px) in a 376px-wide, 163px-tall block with 10px side padding; the body paragraph stays 16px / 400 in a 356px-wide, 432px-tall block; the navigation text reads "Commonwealth Fusion Systems, Technology, Company, News & Media" and its remaining items, with the company name wrapping onto two lines; no call-to-action was found.

Declared in the stylesheets: `@media (min-width:768px)` (49 rules), `(min-width:1200px)` (33), `(min-width:900px)` (26), `(max-width:899px)` (18), `screen and (min-width:425px)` and `screen and (min-width:1680px)` (10 each), `(max-width:767px)` (10), `(max-width:424px)` (6), `(max-width:1199px)` (6) and `(min-width:425px)` (5). How the navigation frame and image grid reflow at each width was not measured. Dark mode was not measured.

## Iteration Guide

1. Set the canvas to `#ccc8c3` with `#333333` text; use `#152536` for the footer and white over photography.
2. Set headlines in nbInternational Light at 58.526px / 70.2312px (34px on a 390px viewport) and body at 16px / 24px Regular.
3. Build navigation as an outlined cell frame in 14px mono over the hero; on hover fill the cell white with `#152536` text.
4. Use the orange circled arrow (70px) for "Learn more" links; keep `#cf6d46` to accents.
5. Arrange media in an asymmetric grid with numbered mono captions.
6. Run `node web/scripts/verify-designs.mjs --slug=commonwealth-fusion-systems` after any token change.
